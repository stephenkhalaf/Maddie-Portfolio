const updateAdmin = document.querySelector('#update-admin')
let updateForm = document.querySelector('#update-form')



updateAdmin.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-admin.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Admin Updated!</strong>
                             </div>`
                updateAdmin.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateForm)
    xhr.send(formdata)
})