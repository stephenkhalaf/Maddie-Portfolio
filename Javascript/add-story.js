const addStory = document.querySelector('#add-story')
let addStoryForm= document.querySelector('#add-story-form')
let addStoryError = document.querySelector('#add-story-error')

addStory.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-story.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addStoryError.innerHTML = `<div class='alert alert-success'>
                            <strong>Story Added!</strong>
                             </div>`
                addStory.disabled = true
            }else{
                addStoryError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addStoryForm)
    xhr.send(formdata)
})