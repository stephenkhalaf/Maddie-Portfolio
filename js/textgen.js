const error_textgen = document.querySelector('.error-textgen')
const toTextgen = document.getElementById('to-text')
document.getElementById('textgen').addEventListener('click', () => {
    const textInput = document.getElementById('from-text').value;
    const apiKey = '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';  // Replace with your Hugging Face API token

    if (!textInput) {
        error_textgen.innerHTML = `<div class='alert alert-danger' style=" margin-top:100px;"><strong>Please type something</strong></div>`
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://api-inference.huggingface.co/models/01-ai/Yi-1.5-34B-Chat', true);
    xhr.setRequestHeader('Authorization', `Bearer ${apiKey}`);
    xhr.setRequestHeader('Content-Type', 'application/json');

    error_textgen.innerHTML = `<div class='alert alert-success'><strong>Processing....</strong></div>`
    toTextgen.innerHTML = ''
    xhr.onreadystatechange = function () {
        if(xhr.readyState==4 && xhr.status==200){
            const result = JSON.parse(xhr.responseText)
            toTextgen.innerHTML = result[0].generated_text;
            error_textgen.innerHTML = ''
        }
    };


    xhr.onerror = function(){
        toTextgen.innerHTML = ''
        error_textgen.innerHTML = `<div class='alert alert-danger'><strong>Check your Internet Connection</strong></div>`
    }

    xhr.send(JSON.stringify({ inputs: textInput }));
});