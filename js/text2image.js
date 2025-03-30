const error_text2image = document.querySelector('.error-text2image')
const imageContainer = document.getElementById('image-container');
document.getElementById('generate-image-button').addEventListener('click', () => {
    const textInput = document.getElementById('text-input').value;
    const apiKey = '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';  // Replace with your Hugging Face API token

    if (!textInput) {
        error_text2image.innerHTML = `<div class='alert alert-danger' style=" margin-top:100px;"><strong>Please type something</strong></div>`
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://api-inference.huggingface.co/models/CompVis/stable-diffusion-v1-4', true);
    xhr.setRequestHeader('Authorization', `Bearer ${apiKey}`);
    xhr.setRequestHeader('Content-Type', 'application/json');

    imageContainer.innerHTML = `<img src="ui/icons/giphy.gif" alt="" style="width:200px; height:200px; margin:70px auto;">`
    error_text2image.innerHTML = `<div class='alert alert-success'><strong>Processing....</strong></div>`
    xhr.onreadystatechange = function () {
        if(xhr.readyState==4 && xhr.status==200){
            const blob = xhr.response
            const imageUrl = URL.createObjectURL(blob);
            imageContainer.innerHTML = `<img src="${imageUrl}" alt="Generated Image">`;
            error_text2image.innerHTML = ''
        }else if(xhr.status == 503){
            error_text2image.innerHTML = `<div class='alert alert-danger' style=" margin-top:100px;"><strong>The service is temporarily unavailable. Please try again later.</strong></div>`
        }
    };

    xhr.onerror = function(){
        imageContainer.innerHTML = ''
        error_text2image.innerHTML = `<div class='alert alert-danger'><strong>Check your Internet Connection</strong></div>`
    }

    xhr.responseType = 'blob';
    xhr.send(JSON.stringify({ inputs: textInput }));
});