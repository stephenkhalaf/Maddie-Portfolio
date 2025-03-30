const addCart = document.querySelector('#add-cart')
let addCartForm= document.querySelector('#add-cart-form')
let addCartError = document.querySelector('#add-cart-error')

addCart.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'php/add-cart.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            console.log(result)
            if(result == 'success'){
                addCartError.innerHTML = `<div class='alert alert-success'>
                            <strong>Cart Info Added!</strong>
                             </div>`
                addCart.disabled = true
            }else{
                addCartError.innerHTML = result
                
            }
        }
    }
    const formdata = new FormData(addCartForm)
    xhr.send(formdata)
})