const loginBtn = document.querySelector('#login')
const loginForm = document.querySelector('.login form')
const errorText = document.querySelector('.error-text')
loginBtn.addEventListener('click',(e)=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/login.php')
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            if(result=='success'){
                location.href = 'admin.php'
            }else{
                errorText.style.display = 'block'
                errorText.innerHTML = result
            }
        }
    }
    const formData = new FormData(loginForm)
    xhr.send(formData)
})