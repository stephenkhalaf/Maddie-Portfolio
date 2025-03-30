const addAbout = document.querySelector('#add-about')
let addAboutForm= document.querySelector('#add-about-form')
let addAboutError = document.querySelector('#add-about-error')

addAbout.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-about.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addAboutError.innerHTML = `<div class='alert alert-success'>
                            <strong>About Info Added!</strong>
                             </div>`
                addAbout.disabled = true
            }else{
                addAboutError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addAboutForm)
    xhr.send(formdata)
})