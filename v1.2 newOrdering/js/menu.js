
//toggle JS
let foodToggleStatus = false;


let foodTogBtn = function() {

  let getFoodUl = document.querySelector(".flavor-list ul");
  let getFoodList = document.querySelectorAll(".flavor-list li");

  if (foodToggleStatus === false) {
    getFoodUl.style.visibility = "visible";

    let foodListLength = getFoodList.length;
    for (let i = 0; i < foodListLength; i++) {
      foodListLength[i];
    }
    foodToggleStatus = true;
  }
  else if (foodToggleStatus === true) {

    let foodListLength = getFoodList.length;
    for (let i = 0; i < foodListLength; i++) {
      foodListLength[i];
    }

    getFoodUl.style.visibility = "hidden";

    foodToggleStatus = false;

  }

}
//preventDefault 
  let btn = document.querySelector(".flavor-btn");

  function preventChangeView(e) {
    e.preventDefault();
  }
  btn.onclick = preventChangeView;





//get Image and Open Image JS
let menuImg = document.querySelectorAll(".menu-img");
let getMenuImage;
let windowWidth = window.innerWidth;

if (menuImg) {
  menuImg.forEach(function(image, index) {
    image.onclick = function() {
      let getElementCss = window.getComputedStyle(image);
      let getFullMenuImgUrl = getElementCss.getPropertyValue("background-image");
      let getImgMenuPos = getFullMenuImgUrl.split("menu/menuThumbs");
      let setNewMenuImgUrl = getImgMenuPos[1].replace('")', '');

      getMenuImage = index + 1;

      let container = document.body;
      let newMenuImgWindow = document.createElement("div");
      container.appendChild(newMenuImgWindow);
      newMenuImgWindow.setAttribute("class", "menu-window");
      newMenuImgWindow.setAttribute("onclick", "closeMenuImg()");

      let newMenu = document.createElement("img");
      newMenuImgWindow.appendChild(newMenu);
      newMenu.setAttribute("src", "img/menu" + setNewMenuImgUrl);

      newMenu.onload = function() {
        let imgWidth = this.width;
        let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 90;
      }
    }

  });
}
function closeMenuImg() {
  document.querySelector(".menu-window").remove();
}
