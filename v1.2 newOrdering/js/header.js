let toggleNavStatus = false;

let toggleNav = function() {
  let header = document.querySelector(".navBar");
  let headerUl = document.querySelector(".navBar ul");
  let headerLinks = document.querySelectorAll(".navBar ul li a");

    if (toggleNavStatus === false) {

      headerUl.style.visibility = 'visible';

      let arrayLength = headerLinks.length;
      for (let i = 0; i < arrayLength; i++) {
        headerLinks[i];
      }
      toggleNavStatus = true;

    }
    else if (toggleNavStatus === true) {


      let arrayLength = headerLinks.length;
      for (let i = 0; i < arrayLength; i++) {
        headerLinks[i];
      }

      headerUl.style.visibility = 'hidden';

      toggleNavStatus = false;
    }

}
