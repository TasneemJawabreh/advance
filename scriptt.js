const signup = document.querySelector('.signup');
const login = document.querySelector('.login');

signup.addEventListener('click',() => {location.href = "./api-sign.php"})
login.addEventListener('click',() => {location.href = "./api-log.php"})
