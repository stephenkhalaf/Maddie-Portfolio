const descriptions = Array.from(document.querySelectorAll('.project-text'))

descriptions.forEach(text=>{
   text.textContent = truncateText(text.textContent,97)
})


function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.slice(0, maxLength) + ' ...';
    } else {
        return text;
    }
}
