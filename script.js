const name = document.getElementById('name')
const password = document.getElementById('Password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('sumbit',(e)=> {
    let message =[]
    if(name.value === '' || name.value === null) {
        messages.push('name is required')
    }
    if(Password.length <= 6){
        messages.push('Passwords must be longer than 6 characters ')

    }
    if(message.length > 0) {
        
        e.preventDefault()
        errorElement.innerText = messages.join(',')
    }

    
    
})