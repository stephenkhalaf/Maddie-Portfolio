const addPicture = document.querySelector('#add-picture')
let addPictureForm= document.querySelector('#add-picture-form')
let addPictureError = document.querySelector('#add-picture-error')

addPicture.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-picture.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                addPictureError.innerHTML = `<div class='alert alert-success'>
                            <strong>PictureInfo Added!</strong>
                             </div>`
                addPicture.disabled = true
            }else{
                addPictureError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addPictureForm)
    xhr.send(formdata)
})