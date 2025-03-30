const addBlog = document.querySelector('#add-blog')
let addBlogForm= document.querySelector('#add-blog-form')
let addBlogError = document.querySelector('#add-blog-error')

addBlog.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-blog.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addBlogError.innerHTML = `<div class='alert alert-success'>
                            <strong>Blog Info Added!</strong>
                             </div>`
                addBlog.disabled = true
            }else{
                addBlogError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addBlogForm)
    xhr.send(formdata)
})