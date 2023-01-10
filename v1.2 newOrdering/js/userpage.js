let userToggleStatus = false;

let getUserStyle = document.querySelector('#user');
let getUserBtn = document.querySelector('.user-btn');
let userBtn = document.querySelector('.account');

userBtn.onclick = function() {
  if (userToggleStatus === false) {

    getUserBtn.style.visibility = "visible";
    getUserStyle.style.width = "180px";

    let arrayLength = getUserBtn.length;
    for (let i = 0; i < arrayLength; i++) {
      getUserBtn[i]
    }
    userToggleStatus = true;
  } else if (userToggleStatus === true) {

    getUserStyle.style.width = "0";

    let arrayLength = getUserBtn.length;
    for (let i = 0; i < arrayLength; i++) {
      getUserBtn[i]
    }
    getUserBtn.style.visibility = "hidden";

    userToggleStatus = false;
  }
}

let logoutBtn = false;

let logout = document.querySelector('#logStatus');


if (logoutBtn === false) {
  logout.onclick = function() {
    let container = document.body;
    let logoutStatus = document.createElement('div');
    container.appendChild(logoutStatus);
    logoutStatus.setAttribute('class', 'logout');

    let popupLogout = document.createElement('div');
    logoutStatus.appendChild(popupLogout);
    popupLogout.setAttribute('class', 'confirm');

    let yesOrNo = document.createElement('h4');
    let createText = document.createTextNode('Do you want to Logout?');
    yesOrNo.appendChild(createText);
    popupLogout.appendChild(yesOrNo);
    yesOrNo.setAttribute('class', 'confirmation');


    let chooseYes = document.createElement('div');
    let logoutYes = document.createElement('a');
    let yes = document.createTextNode('Yes');
    chooseYes.appendChild(logoutYes);
    logoutYes.appendChild(yes);
    popupLogout.appendChild(chooseYes);
    logoutYes.href = "../login.php";
    logoutYes.setAttribute('onclick', 'logout()');

    let chooseNo = document.createElement('div');
    let logoutNo = document.createElement('a');
    let no = document.createTextNode('No');
    chooseNo.appendChild(logoutNo);
    logoutNo.appendChild(no);
    popupLogout.appendChild(chooseNo);
    logoutNo.href = "../includes/homepage-user.php";
    logoutNo.setAttribute('onclick', 'logout()');

  }
  logoutBtn = true;

}
let btn = document.querySelector(".user-btn");

function preventChangeView(e) {
  e.preventDefault();
}
btn.onclick = preventChangeView;
