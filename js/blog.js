const texts = Array.from(document.querySelectorAll('.blog-text'))

texts.forEach(text=>{
   text.textContent = truncateText(text.textContent,50)
})


function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.slice(0, maxLength) + ' ...';
    } else {
        return text;
    }
}
