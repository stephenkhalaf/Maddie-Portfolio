const addProject = document.querySelector('#add-project')
let addProjectForm= document.querySelector('#add-project-form')
let addProjectError = document.querySelector('#add-project-error')

addProject.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-project.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addProjectError.innerHTML = `<div class='alert alert-success'>
                            <strong>Project Info Added!</strong>
                             </div>`
                addProject.disabled = true
            }else{
                addProjectError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addProjectForm)
    xhr.send(formdata)
})