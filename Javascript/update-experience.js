const updateExperience = document.querySelector('#update-experience')
let updateExperienceForm = document.querySelector('#update-experience-form')


updateExperience.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-experience.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Experience Page Updated!</strong>
                             </div>`
                updateExperience.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateExperienceForm)
    xhr.send(formdata)
})