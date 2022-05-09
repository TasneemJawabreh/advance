const blater = document.querySelector('.class="tm-btn-primary tm-align-right"');
blater.addEventListener('click',() => {location.href = "./index1.php"})

bnow.addEventListener('click', () => {
    const formData = new FormData(document.querySelector('form'))
    var status
    fetch('http://localhost:8080/api-bookLater.php', {
            'method': 'POST',
        
            'body': formData,
            mode: 'cors',
            credentials: 'include'
        })
        .then(res => {
            status = res.status
            return res.text()
        })
        .then(data => {
           
            if (status == 200)
                location.href = "index1.php"
        })
        .catch(err => {

            console.log(err)
        })

})