const updateAbout = document.querySelector('#update-about')
let updateAboutForm = document.querySelector('#update-about-form')



updateAbout.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-about.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>About Page Updated!</strong>
                             </div>`
                updateAbout.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateAboutForm)
    xhr.send(formdata)
})