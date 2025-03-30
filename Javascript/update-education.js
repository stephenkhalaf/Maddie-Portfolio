const updateEducation = document.querySelector('#update-education')
let updateEducationForm = document.querySelector('#update-education-form')


updateEducation.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-education.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Education Page Updated!</strong>
                             </div>`
                updateEducation.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateEducationForm)
    xhr.send(formdata)
})