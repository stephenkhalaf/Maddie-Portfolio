const selectTags = document.querySelectorAll('select')
const translateBtn = document.querySelector('.language-btn')
const fromText = document.querySelector('.from-text')
const toText = document.querySelector('.to-text')
const exchangeIcon = document.querySelector('.exchange')
const icons = document.querySelectorAll('.controls .row i')
let errorText = document.querySelector('.error-text')

selectTags.forEach(tag=>{
    for(country in countries){
        let selected
        if(tag.id == 0 && country == 'en-GB'){
            selected = 'selected'
        }else if(tag.id == 1 && country == 'fr-FR'){
            selected = 'selected'
        }

        let option = document.createElement('option')
        option.textContent = countries[country]
        option.value = country
        option.selected = selected
        tag.append(option)
        console.log(option.selected)
    }
})

exchangeIcon.addEventListener('click',()=>{
    let tempText = fromText.value
    fromText.value = toText.value
    toText.value = tempText

    let tempLang = selectTags[0].value
    selectTags[0].value = selectTags[1].value
    selectTags[1].value = tempLang
})
translateBtn.addEventListener('click',()=>{
    let text = fromText.value
    let translateFrom = selectTags[0].value
    let translateTo = selectTags[1].value
    if(!text){
        errorText.innerHTML = `<div class='alert alert-danger'><strong>Please type something</strong></div>`
        return
    } 
    let apiUrl = `https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}`

    const xhr = new XMLHttpRequest()
    xhr.open('POST', apiUrl)
    translateBtn.textContent = 'Wait a minute...';
    toText.textContent = 'Translating...'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = JSON.parse(xhr.responseText)
            translateBtn.textContent = 'Translate Text';
            toText.textContent = result.responseData.translatedText
            errorText.innerHTML = ''
        }
    xhr.onerror = function(){
        errorText.innerHTML = `<div class='alert alert-danger'><strong>Check your Internet Connection</strong></div>`
    }
    }
    xhr.send()
})

icons.forEach(icon=>{
    icon.addEventListener('click',(e)=>{
        if(e.target.classList.contains('fa-copy')){
            if(e.target.id == 'from'){
                navigator.clipboard.writeText(fromText.value)
            }else{
                navigator.clipboard.writeText(toText.value)
            }
        }else{
            let synth = speechSynthesis
           let utterance;
           if(e.target.id == 'from'){
            utterance = new SpeechSynthesisUtterance(fromText.value)
            utterance.lang = selectTags[0].value
           }else{
            utterance = new SpeechSynthesisUtterance(toText.value)
            utterance.lang = selectTags[1].value
           }
           synth.speak(utterance)
        }
    })
})


function debounce(fn, delay=500){
    let id
    return (...args)=>{
        clearTimeout(id)
        id = setTimeout(()=>{
            fn(...args)
        },delay)
    }
}


const updateDebounce = debounce(text=>{
    if(text.trim() == ''){
        return
    }
    const apiUrl = 'https://api.languagetoolplus.com/v2/check';
    const params = `text=${encodeURIComponent(text)}&language=en-US`;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', apiUrl, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const data = JSON.parse(xhr.responseText);
         
            let correctedText = text
            if (data.matches.length > 0) {
                data.matches.forEach(match => {
                    if (match.replacements.length > 0) {
                        const replacement = match.replacements[0].value
                        const startIndex = match.offset;
                        const endIndex = match.offset + match.length;

                        correctedText = correctedText.slice(0, startIndex) + replacement + correctedText.slice(endIndex);
                    }
                })
            }

            fromText.value = correctedText
        }
    }

    xhr.send(params)
})

fromText.addEventListener('input', e=>{
    updateDebounce(e.target.value)
})