const cantidad = document.querySelector('#cantidad');
const cantidadResultado = document.querySelector('#cantidad-resultado');
const restar = document.querySelector('#restar');
const sumar = document.querySelector('#sumar');

restar.addEventListener('click', () => {
    let valorActual = parseInt(cantidad.value);
    valorActual--;

    if(valorActual > 0) {
        cantidad.value = valorActual;
        cantidadResultado.value = valorActual;
    } else {
        cantidad.value = 1;
    }


})

sumar.addEventListener('click', () => {
    let valorActual = parseInt(cantidad.value);
    valorActual++;
    cantidad.value = valorActual;
    cantidadResultado.value = valorActual;
})