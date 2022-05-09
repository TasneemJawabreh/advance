const signup = document.querySelector('input[type="signup"]')
var status
signup.addEventListener('click',() =>{
    const formData = new ormData(document.querySelector('form')) 
    fetch('http://localhost/advance-master2/advance-master/advance-master/sign.php',{
        method: 'post',
        body: formData
    })
    .then(res =>{
        status = res.status
        return res.text()
    })
    .then(data =>{
        alert(data)
        if(status == 200)
        location.href = "index.php"
    })
    .catch(err => {alert(err)})
})