const updateProject = document.querySelector('#update-project')
let updateProjectForm = document.querySelector('#update-project-form')


updateProject.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-project.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Project Page Updated!</strong>
                             </div>`
                updateProject.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateProjectForm)
    xhr.send(formdata)
})