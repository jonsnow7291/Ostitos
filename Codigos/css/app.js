let abrirCarrito = document.querySelector('.carrito');
let cerrarCarrito = document.querySelector('.cerarCarrito');
let lista = document.querySelector('.lista');
let listaCarrito = document.querySelector('.listaCarrito');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity')

abrirCarrito.addEventListener('click', ()=>{
    body.classList.add('active');
})
cerrarCarrito.addEventListener('click', ()=>{
    body.classList.remove('active');
})

