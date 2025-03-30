const signupForm = document.querySelector('.signup form')
const submitBtn = document.querySelector('#submit')
const genders = Array.from(document.querySelectorAll("[type='radio']"))
let gender

genders.forEach(item=>{
    item.addEventListener('click',()=>{
        gender = item.value
    })
})

submitBtn.addEventListener('click',(e)=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/signup.php')
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            console.log(result)
            if(result=='success'){
                location.href = 'login.php'
            }else{
                errorText.style.display = 'block'
                errorText.innerHTML = result
            }
        }
    }
    const formData = new FormData(signupForm)
    formData.append("gender",gender)
    xhr.send(formData)
})
