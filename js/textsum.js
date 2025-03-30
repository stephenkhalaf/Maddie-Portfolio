const error_textsum = document.querySelector('.error-textsum')
const toTextsum = document.getElementById('to-textsum')
document.getElementById('textsum').addEventListener('click', () => {
    const textInput = document.getElementById('from-textsum').value;
    const apiKey = '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';  // Replace with your Hugging Face API token

    if (!textInput) {
        error_textsum.innerHTML = `<div class='alert alert-danger' style=" margin-top:100px;"><strong>Please type something</strong></div>`
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://api-inference.huggingface.co/models/facebook/bart-large-cnn', true);
    xhr.setRequestHeader('Authorization', `Bearer ${apiKey}`);
    xhr.setRequestHeader('Content-Type', 'application/json');

    error_textsum.innerHTML = `<div class='alert alert-success'><strong>Processing....</strong></div>`
    toTextsum.innerHTML = ''
    xhr.onreadystatechange = function () {
        if(xhr.readyState==4 && xhr.status==200){
            const result = JSON.parse(xhr.responseText)
            console.log(result)
            toTextsum.innerHTML = result[0].summary_text;
            error_textsum.innerHTML = ''
        }
    };


    xhr.onerror = function(){
        toTextsum.innerHTML = ''
        error_textsum.innerHTML = `<div class='alert alert-danger'><strong>Check your Internet Connection</strong></div>`
    }

    xhr.send(JSON.stringify({ inputs: textInput }));
});