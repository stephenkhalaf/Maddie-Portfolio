const removeButtons = document.querySelectorAll('.btn-danger')
const quantityInputs = document.querySelectorAll('.cart-quantity-input')
const addToCartButtons = document.querySelectorAll('.shop-item-button')
const cartList = document.querySelector('.cart-items')

Array.from(addToCartButtons).forEach(cart=>{
    cart.addEventListener('click', ()=>{
        cartElement = cart.parentElement.parentElement
        cartTitle = cartElement.querySelector('.shop-item-title').innerText
        cartImage = cartElement.querySelector('.shop-item-image').src
        cartPrice = cartElement.querySelector('.shop-item-price').innerText

        cart.innerText = 'In Cart'
        cart.disabled = true

        let output = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${cartImage}" width="100" height="100">
            <span class="cart-item-title">${cartTitle}</span>
        </div>
        <span class="cart-price cart-column">${cartPrice}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1" min="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>
    `
        let div = document.createElement('div')
        div.classList.add('cart-row')
        div.innerHTML = output

        cartList.append(div)
        updateCartTotal()
      

        Array.from(document.querySelectorAll('.btn-danger')).forEach(btn=>{
            btn.addEventListener('click', (e)=>{
                e.target.parentNode.parentNode.remove()
                updateCartTotal()

                Array.from(addToCartButtons).forEach(item=>{
                    let removeTitleArray = Array.from(item.parentElement.parentElement.querySelectorAll('.shop-item-title'))
                    removeTitleArray.forEach(item=>{
                        if(item.innerText == cartTitle){
                            cart.innerText = 'ADD TO CART'
                            cart.disabled = false
                        }
                    })
                })
            })
            
        })

        Array.from(document.querySelectorAll('.cart-quantity-input')).forEach(quantity=>{
            quantity.addEventListener('change', e=>{
                if(quantity.value < 1 || isNaN(quantity.value)){
                    quantity.value=1
                }
                updateCartTotal()
            })
        })
     

    })

})

document.querySelector('.btn-purchase').addEventListener('click', ()=>{
    let total = document.querySelector('.cart-total-price').innerText
    location.href = 'api/stripe/checkout.php?total='+total.slice(1,)
    cartList.innerHTML = ''
    document.querySelector('.cart-total-price').innerText = 0

    Array.from(addToCartButtons).forEach(cart=>{
        cart.innerText = 'ADD TO CART'
        cart.disabled = false
       
    })


})


removeButtons.forEach(btn=>{
    btn.addEventListener('click', (e)=>{
        e.target.parentNode.parentNode.remove()
        updateCartTotal()
    })
})



Array.from(quantityInputs).forEach(quantity=>{
    quantity.addEventListener('change', e=>{
        if(quantity.value < 1 || isNaN(quantity.value)){
            quantity.value=1
        }
        updateCartTotal()
    })
})

function updateCartTotal(){
    const cartRows = Array.from(document.querySelectorAll('.cart-items .cart-row'))
    let total = 0
    cartRows.forEach(cart=>{
        let cartPrice = cart.querySelector('.cart-price').innerText
        let cartQuantity = cart.querySelector('.cart-quantity-input')
        cartPrice = parseFloat(cartPrice.replace("$",""))
        total += cartPrice * cartQuantity.value
        
    })

    const totalValue = document.querySelector('.cart-total-price')
    totalValue.innerText = total==0? total : "$"+total.toFixed(2)


    
}

window.onload = updateCartTotal


