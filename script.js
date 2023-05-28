const name = document.getElementById('name')
const password = document.getElementById('password')
const inputForm = document.getElementById('inputForm')
const errorElement = document.getElementById('error')

inputForm.addEventListener('sumbit',(e)=> {
    let message =[]
    if(name.value === '' || name.value === 'null') {
        message.push('name is required')
    }
    if(Password.value.length <= 6){
        message.push('Passwords must be longer than 6 characters ')}

     if(Password.value.length >= 20){
            message.push('Password can not exceed 20 characters')
    }
    if(Password.value === 'password'){
        message.push('Password can not be sent as password')}

    if(message.length > 0) {
        
        e.preventDefault()
        errorElement.innerText = messages.join(',')
    }

    
    
})