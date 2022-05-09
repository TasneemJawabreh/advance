const confirm= document.querySelector('.tm-btn-primary tm-align-right');
var status
confirm.addEventListener('click',() =>{
    const formData = new ormData(document.querySelector('form')) 
    fetch('http://localhost/advance-master/advance-master/index1.php',{
        method: 'post',
        body: formData,
        mode: 'cors',
        credentials: 'include'
    })
    .then(res =>{
        status = res.status
        return res.text()
    })
    .then(data =>{
        alert(data)
        if(status == 200)
        location.href =  "/index1.html"
    })
    .catch(err => {alert(err)})
})

