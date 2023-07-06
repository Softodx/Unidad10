// con este script lo que permite es que con un click se 
// agregre o elimine una clase en este caso "activo"

const button = document.querySelector('.button-menu')
const nav = document.querySelector('.nav-menu')

button.addEventListener('click',()=>{
    nav.classList.toggle('activo')
})