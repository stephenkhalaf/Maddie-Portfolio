const error_image2text = document.querySelector('.error-image2text')
const textOutputContainer = document.getElementById('text-output-container');

document.getElementById('image-input').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const previewImg = document.getElementById('previewImg');
            previewImg.src = e.target.result;
            previewImg.style.display = 'block';
            textOutputContainer.innerHTML = ''
        }
        reader.readAsDataURL(file);
    }
})

document.getElementById('generate-text-button').addEventListener('click', () => {
    const imageInput = document.getElementById('image-input').files[0];
    const apiKey = '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'; 

    if (!imageInput) {
        error_image2text.innerHTML = `<div class='alert alert-danger' style=" margin-top:100px;"><strong>Please Select an Image</strong></div>`
        return;
    }

    const reader = new FileReader();
    reader.onload = function(event) {
        const base64Image = event.target.result.split(',')[1];
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'https://api-inference.huggingface.co/models/nlpconnect/vit-gpt2-image-captioning', true);
        xhr.setRequestHeader('Authorization', `Bearer ${apiKey}`);
        xhr.setRequestHeader('Content-Type', 'application/json');


        textOutputContainer.innerHTML = `<img src="ui/icons/giphy.gif" alt="" style="width:200px; height:200px; margin:70px auto; margin-left:20px;">`
        error_image2text.innerHTML = `<div class='alert alert-success'><strong>Processing....</strong></div>`
        xhr.onreadystatechange = function () {
            if(xhr.readyState==4 && xhr.status==200){
                const response = JSON.parse(xhr.responseText);
                const textOutputContainer = document.getElementById('text-output-container');
                textOutputContainer.innerHTML = `<textarea spellcheck="false"  id="text-output-container">${response[0].generated_text}</textarea>`
    
                error_image2text.innerHTML = ''
            }else if(xhr.status == 503){
                error_image2text.innerHTML = `<div class='alert alert-danger' style=" margin-top:100px;"><strong>The service is temporarily unavailable. Please try again later.</strong></div>`
            }
        };

        xhr.onerror = function(){
            textOutputContainer.innerHTML = ''
            error_image2text.innerHTML = `<div class='alert alert-danger'><strong>Check your Internet Connection</strong></div>`
        }

        xhr.send(JSON.stringify({ inputs: base64Image }));
    };
    
    reader.readAsDataURL(imageInput);
});

