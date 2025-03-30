const addEducation = document.querySelector('#add-education')
let addEducationForm= document.querySelector('#add-education-form')
let addEducationError = document.querySelector('#add-education-error')

addEducation.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-education.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addEducationError.innerHTML = `<div class='alert alert-success'>
                            <strong>Education Info Added!</strong>
                             </div>`
                addEducation.disabled = true
            }else{
                addEducationError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addEducationForm)
    xhr.send(formdata)
})