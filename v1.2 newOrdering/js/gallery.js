let foodGallery = document.querySelectorAll(".gallery-img");
let openImg;
let windowWidth = window.innerWidth;


if (foodGallery) {
  foodGallery.forEach(function(image, index) {
    image.onclick = function(){
      let foodImgSize = document.querySelectorAll("setNewImageUrl");
      let getElementCss = window.getComputedStyle(image);
      let getFullImageUrl = getElementCss.getPropertyValue("background-image");
      let getImageUrlPos = getFullImageUrl.split("/img/thumbs/");
      let setNewImageUrl = getImageUrlPos[1].replace('")', '');

      openImg = index + 1;

      let container = document.body;
      let newImgWindow = document.createElement("div");
      container.appendChild(newImgWindow);
      newImgWindow.setAttribute("class", "window-img");
      newImgWindow.setAttribute("onclick", "closeImg()");

      let newImg = document.createElement("img");
      newImgWindow.appendChild(newImg);
      newImg.setAttribute("src", "img/" + setNewImageUrl);
      newImg.setAttribute("id", "current-img");

      newImg.onload = function(){

        let imgWidth = this.width;
        let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 70;

        let newNextBtn = document.createElement("a");
        let btnNextText = document.createTextNode("Next");
        newNextBtn.appendChild(btnNextText);
        container.appendChild(newNextBtn);
        newNextBtn.setAttribute("class", "btn-next");
        newNextBtn.setAttribute("onclick", "changeImg(1)");
        newNextBtn.style.cssText = "right: "+calcImgToEdge+"px;";

        let newPrevBtn = document.createElement("a");
        let btnPrevText = document.createTextNode("Prev");
        newPrevBtn.appendChild(btnPrevText);
        container.appendChild(newPrevBtn);
        newPrevBtn.setAttribute("class", "btn-prev");
        newPrevBtn.setAttribute("onclick", "changeImg(0)");
        newPrevBtn.style.cssText = "left: "+calcImgToEdge+"px;";
      }

    }
  });
}
function closeImg() {
  document.querySelector(".window-img").remove();
  document.querySelector(".btn-next").remove();
  document.querySelector(".btn-prev").remove();
}
function changeImg(changeDrtn) {
  document.querySelector("#current-img").remove();

  let getImgWindow = document.querySelector(".window-img");
  let newFoodImg = document.createElement("img");
  getImgWindow.appendChild(newFoodImg);

  let calcNewImg;
  if (changeDrtn === 1) {
    calcNewImg = openImg + 1;
    for (let i = 0; i < 9; i++) {
      calcNewImg[i]
    }
    if (calcNewImg === 9) {
      calcNewImg = 1;
    }
  }
  else if (changeDrtn === 0) {
    calcNewImg = openImg - 1;
    for (let i = 1; i > 1; i++) {
      calcNewImg[i]
    }
    if (calcNewImg === 0) {
      calcNewImg = 8;
    }
  }

  newFoodImg.setAttribute("src", "img/img" +calcNewImg+".jpg");
  newFoodImg.setAttribute("id", "current-img");

  openImg = calcNewImg;

  newFoodImg.onload = function() {
    let imgWidth = this.width;
    let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 70;

    let nextBtn = document.querySelector(".btn-next");
    nextBtn.style.cssText = "right: "+calcImgToEdge+"px;";

    let prevBtn = document.querySelector(".btn-prev");
    prevBtn.style.cssText = "left: "+calcImgToEdge+"px;";
  }
}
