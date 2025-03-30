const contactsBtn = document.querySelector('#contacts')

const portfolioBtn = document.querySelector('#portfolio')

portfolioBtn.addEventListener('click', e=>{
    location.href = '../index.php'
})
contactsBtn.addEventListener('click',e=>{
    innerRightPannel.style.flex = 0
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/contacts.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
            innerLeftPannel.innerHTML = `
            <p style="text-align:center"><strong>All Contacts</strong></p>
            <div id="contacts__container" style="animation: appear 1s ease-in-out">
                ${result}
            </div>
         `
        }
    }
    xhr.send()
})


