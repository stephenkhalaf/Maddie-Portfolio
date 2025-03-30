const addAdmin = document.querySelector('#add-admin')
let addAdminForm= document.querySelector('#add-admin-form')
let addAdminError = document.querySelector('#add-admin-error')

addAdmin.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-admin.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addAdminError.innerHTML = `<div class='alert alert-success'>
                            <strong>Admin Added!</strong>
                             </div>`
                addAdmin.disabled = true
            }else{
                addAdminError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addAdminForm)
    xhr.send(formdata)
})