const selectTags = document.querySelectorAll('.language select')
let title = document.querySelector('#title')

selectTags.forEach(tag=>{
    for(country in countries){
        let selected
        if(tag.id == 0 && country == 'es-ES'){
            selected = 'selected'
        }else if(tag.id == 1 && country == 'hi-IN'){
            selected = 'selected'
        }

        let option = document.createElement('option')
        option.textContent = countries[country]
        option.value = country
        option.selected = selected
        tag.append(option)
    }
})


function translate_text(e){
    let parentElem = e.target.parentElement
    let textResult = parentElem.querySelector('#text-result')
    let text = e.target.textContent
    let translateFrom = 'en-GB'
    let translateTo = selectTags[0].value
    let apiUrl = `https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}`

    const xhr = new XMLHttpRequest()
    xhr.open('POST', apiUrl)
    loader.className = 'loader_on'
    title.textContent = 'Translating...'
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            const result = JSON.parse(xhr.responseText)
            textResult.innerHTML = ` ${result.responseData.translatedText} <i id="speech" class="fas fa-volume-up"></i> `
            loader.className = 'loader_off'
            title.textContent = 'My Chat'

            const speech = document.querySelector('#speech')
            let synth = speechSynthesis
            let utterance;
            speech.addEventListener('click', e=>{
                let title = document.querySelector('#title')
                title.textContent = 'Speaking...'
                utterance = new SpeechSynthesisUtterance(result.responseData.translatedText)
                utterance.lang = selectTags[0].value

                utterance.onend = () => {
                    title.textContent = 'My Chat';
                }
            
                setTimeout(()=>{
                    window.speechSynthesis.cancel();
                    window.speechSynthesis.speak(utterance)
                }, 0)
            })
        }
    }
    xhr.send()
}
