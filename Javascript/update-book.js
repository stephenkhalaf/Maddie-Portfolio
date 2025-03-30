const updateBook = document.querySelector('#update-book')
let updateBookForm = document.querySelector('#update-book-form')



updateBook.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-book.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Book Page Updated!</strong>
                             </div>`
                updateBook.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateBookForm)
    xhr.send(formdata)
})