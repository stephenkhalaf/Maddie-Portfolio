const chatBtn = document.querySelector('#chat')
const innerRightPannel = document.querySelector('#inner_right_pannel')
const innerLeftPannel = document.querySelector('#inner_left_pannel')
const loader = document.querySelector('#loader')


let SEEN_STATUS = false

function seen_status(e){
    SEEN_STATUS = true
}

chatBtn.addEventListener('click',e=>{
    innerLeftPannel.style.flex = 1
    innerRightPannel.style.flex = 0
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/talk.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
            innerLeftPannel.innerHTML = `
            <p style="text-align:center"><strong> New Messages </strong></p>
            <div id="contacts__container">
                ${result}
            </div>
            `


        }
    }
    xhr.send()
})

window.onload = function(){
    innerRightPannel.style.flex = 0
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/online.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
            innerLeftPannel.innerHTML = `
            <p style="text-align:center"><strong>List of people online</strong></p>
            <div id="contacts__container">
                ${result}
            </div>
            `
        }
    }
    xhr.send()
}

function send_message(e){
    const chatContainer = document.querySelector('#message__container')
    const message = document.querySelector('#typing-area')
    const messageFile = document.querySelector('#message_file')
    const chatId = messageFile.getAttribute('receiverId')
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/messages.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            if(result == "message field cannot be empty") alert(result)
            loader.className = 'loader_off'
            message.value = ""
            message.focus()
            chatContainer.scrollTop = chatContainer.scrollHeight
        }
    }
    const formData = new FormData()
    formData.append('message',message.value.trim())
    formData.append('file',messageFile.files[0])
    formData.append('chatId',chatId)
    xhr.send(formData)
    
}


function contactTalk(e){
    let chatId = e.target.parentElement.getAttribute('info')
    innerLeftPannel.style.flex = 1
    innerRightPannel.style.flex = 3
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/talk.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = JSON.parse(xhr.responseText)
            loader.className = 'loader_off'
            let user = result['user']
            let chatUser = result['chatUser']

            innerLeftPannel.innerHTML = `
            <p>Chatting with<strong style="color:#07ff07"> ${chatUser['fname'][0].toUpperCase() + chatUser['fname'].substr(1,chatUser['fname'].length)} </strong></p>
            <div id="chat__container">
                <img src="uploads/${chatUser['img']}" />
                <p> ${chatUser['fname']} ${chatUser['lname']} </p>
            </div>
            `

            innerRightPannel.innerHTML = `
                    <div id="message__container" onclick='seen_status(event);' style="position:relative">
                    
                    </div>
                    <div class='send'>
                        <label for='message_file'><img src="ui/icons/clip.png" style="cursor:pointer;opacity:0.5;width:20px; height:40px; margin-right:3px;" /> </label>
                        <input receiverId ="${chatUser['unique_id']}" type="file"  id="message_file" name="file" style="display:none"/>
                        <input onkeyup="enter_message(event)" type="text" placeholder = "start chatting..." id="typing-area" autocomplete='off'/>
                        <input type="button" id="sendBtn" value="Send" onclick="send_message(event)" />
                    </div>
                    `

            const chatContainer = document.querySelector('#message__container');
            let timerId;
            get_talk()
            
            function startFetching() {
                if (!timerId) {
                    timerId = setInterval(() => {
                        get_talk();
                        SEEN_STATUS = false;
                    }, 500);
                }
            }
            
            function stopFetching() {
                if (timerId) {
                    clearInterval(timerId);
                    timerId = null;
                }
            }
            
            chatContainer.addEventListener('mouseenter', () => {
                chatContainer.classList.add('active');
                stopFetching();
            });
            
            chatContainer.addEventListener('mouseleave', () => {
                chatContainer.classList.remove('active');
                startFetching();
            });
            
            if (!chatContainer.classList.contains('active')) {
                startFetching();
            }
            

        }
    }
    const formData = new FormData()
    formData.append('chatId',chatId)
    xhr.send(formData)
    
}


  


function get_talk(){
    const chatContainer = document.querySelector('#message__container')
    const message_file = document.querySelector('#message_file')
    const chatId = message_file.getAttribute('receiverId')

    chatContainer.addEventListener('mouseenter',()=>{
        chatContainer.classList.add('active')
      })
      
      chatContainer.addEventListener('mouseleave',()=>{
        chatContainer.classList.remove('active')
      })
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/get-talk.php')
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            chatContainer.innerHTML = result
            if(!chatContainer.classList.contains('active')){
                chatContainer.scrollTop = chatContainer.scrollHeight
              }
        }
    }
    const formData = new FormData()
    formData.append('chatId',chatId)
    formData.append('seen_status',SEEN_STATUS)
    xhr.send(formData)

}


function enter_message(e){
    if(e.key == 'Enter'){
        send_message()
    }
    seen_status(e)
}

function close_image(e){
    const imageViewerImg = document.querySelector('#image_viewer img')
    e.target.parentElement.className = 'image_off'
    imageViewerImg.src = ''

}

function open_image(e){
    const imageViewer = document.querySelector('#image_viewer')
    const imageViewerImg = document.querySelector('#image_viewer img')
    imageViewer.className = 'image_on'
    let imgSrc = e.target.src
    imageViewerImg.src = imgSrc
}

function close_button(e){
    const userId = e.target.getAttribute('userId');
    const msgId = e.target.getAttribute('msgId');
    const xhr = new XMLHttpRequest()
    xhr.open("POST", 'php/delete.php')
    loader.className = 'loader_on'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = xhr.responseText
            loader.className = 'loader_off'
        }
    }
    const formData = new FormData()
    formData.append('userId',userId)
    formData.append('msgId',msgId)
    xhr.send(formData)
}

            
