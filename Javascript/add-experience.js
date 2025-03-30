const addExperience = document.querySelector('#add-experience')
let addExperienceForm= document.querySelector('#add-experience-form')
let addExperienceError = document.querySelector('#add-experience-error')

addExperience.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-experience.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addExperienceError.innerHTML = `<div class='alert alert-success'>
                            <strong>Experience Info Added!</strong>
                             </div>`
                addExperience.disabled = true
            }else{
                addExperienceError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addExperienceForm)
    xhr.send(formdata)
})