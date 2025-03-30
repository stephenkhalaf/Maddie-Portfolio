const updateCart= document.querySelector('#update-cart')
let updateCartForm = document.querySelector('#update-cart-form')



updateCart.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/update-cart.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                error.innerHTML = `<div class='alert alert-success'>
                            <strong>Cart Page Updated!</strong>
                             </div>`
                updateCart.disabled = true
            }else{
                error.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(updateCartForm)
    xhr.send(formdata)
})