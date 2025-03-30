const updatePicture = document.querySelector('#update-picture')
let updatePictureForm = document.querySelector('#update-picture-form')



updatePicture.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-picture.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Picture Page Updated!</strong>
                             </div>`
                updatePicture.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updatePictureForm)
    xhr.send(formdata)
})