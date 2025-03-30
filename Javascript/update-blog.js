const updateBlog = document.querySelector('#update-blog')
let updateBlogForm = document.querySelector('#update-blog-form')



updateBlog.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-blog.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Blog Page Updated!</strong>
                             </div>`
                updateBlog.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateBlogForm)
    xhr.send(formdata)
})