const addBook = document.querySelector('#add-book')
let addBookForm= document.querySelector('#add-book-form')
let addBookError = document.querySelector('#add-book-error')

addBook.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-book.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addBookError.innerHTML = `<div class='alert alert-success'>
                            <strong>Book Info Added!</strong>
                             </div>`
                addBook.disabled = true
            }else{
                addBookError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addBookForm)
    xhr.send(formdata)
})