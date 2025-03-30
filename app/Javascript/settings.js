const settingsBtn = document.querySelector('#settings')

settingsBtn.addEventListener('click',e=>{
    e.preventDefault()
    innerRightPannel.style.flex = 0
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/settings.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
            innerLeftPannel.innerHTML = `
            <div id="settings_container">
                ${result}
            </div>
         `
        }
    }
    xhr.send()
})

function save_settings(e){
    e.preventDefault()
    const form = document.querySelector('.signup form')
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/save_settings.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
            if(result=='success'){
                alert('Your data was saved')
                location.reload()
            }else{
                alert(result)
            }
        }
    }
    const formData = new FormData(form)
    xhr.send(formData)
}

function change_image(e){
    e.preventDefault()
    const img = document.querySelector('.image img')
    let myFile = e.target.files[0]

    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/change_image.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
            img.src = "uploads/"+result
        }
    }
    const formData = new FormData()
    formData.append("myFile", myFile)
    xhr.send(formData)
    
}

function dragover(e){
    e.preventDefault()
    e.target.classList.add('dragover')
}

function dragleave(e){
    e.preventDefault()
    e.target.classList.remove('dragover')
}

function drop(e){
    e.preventDefault()
    let myFile = e.dataTransfer.files[0]
    const img = document.querySelector('.image img')

    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/change_image.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
            img.src = "uploads/"+result
        }
    }
    const formData = new FormData()
    formData.append("myFile", myFile)
    xhr.send(formData)

    e.target.classList.remove('dragover')
}


