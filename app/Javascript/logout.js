const logout = document.querySelector('#logout')

logout.addEventListener('click',e=>{
    e.preventDefault()
    let result = confirm('Do you want to logout?')
    if(result){
        location.href = './php/logout.php'
    }else{
        location.reload()
    }
})