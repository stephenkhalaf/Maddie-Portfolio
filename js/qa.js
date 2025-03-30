const error_textqa = document.querySelector('.error-textqa')
const qaOutputElement = document.getElementById('to-textanswer')
document.getElementById('textqa').addEventListener('click', () => {
    const contextText = document.getElementById('from-textqa').value
    const questionText = document.getElementById('to-textquestion').value
    const apiKey = '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';  // Replace with your Hugging Face API token

    if (contextText.trim() === '' || questionText.trim() === '') {
        error_textqa.innerHTML = `<div class='alert alert-danger' style=" margin-top:100px;"><strong>Please enter the context and question </strong></div>`
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://api-inference.huggingface.co/models/deepset/roberta-base-squad2', true);
    xhr.setRequestHeader('Authorization', `Bearer ${apiKey}`);
    xhr.setRequestHeader('Content-Type', 'application/json');

    error_textqa.innerHTML = `<div class='alert alert-success'><strong>Processing....</strong></div>`
    qaOutputElement.innerHTML = ''
    xhr.onreadystatechange = function () {
        if(xhr.readyState==4 && xhr.status==200){
            const result = JSON.parse(xhr.responseText)
            console.log(result)
            qaOutputElement.innerHTML = result['answer'];
            error_textqa.innerHTML = ''
        }
    };


    xhr.onerror = function(){
        qaOutputElement.innerHTML = ''
        error_textqa.innerHTML = `<div class='alert alert-danger'><strong>Check your Internet Connection</strong></div>`
    }

    xhr.send(JSON.stringify({ context: contextText, question: questionText }));
});