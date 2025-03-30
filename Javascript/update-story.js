const updateStory = document.querySelector('#update-story')
let updateStoryForm = document.querySelector('#update-story-form')



updateStory.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-story.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Story Page Updated!</strong>
                             </div>`
                updateStory.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateStoryForm)
    xhr.send(formdata)
})