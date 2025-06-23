const showPassword = document.querySelector("#show-password");
const passwordField = document.querySelector("#passwordInput");

showPassword.addEventListener("click", function () {
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);

    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
})


const showConfirmPassword = document.querySelector("#show-confirm-password");
const confirmPasswordField = document.querySelector("#confirmPasswordInput");

showConfirmPassword.addEventListener("click", function () {
  const type = confirmPasswordField.getAttribute("type") === "password" ? "text" : "password";
  confirmPasswordField.setAttribute("type", type);
  this.classList.toggle("fa-eye");
  this.classList.toggle("fa-eye-slash");

})