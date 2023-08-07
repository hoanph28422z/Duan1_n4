const logreBox = document.querySelector(".logreg-box");
const loginlink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");

registerLink.addEventListener("click", () => {

  logreBox.classList.add("active");
});

loginlink.addEventListener("click", () => {

  logreBox.classList.remove("active");
});
