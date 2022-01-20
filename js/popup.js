const cursoUno = document.getElementById('cursoUno');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

cursoUno.addEventListener('click', () => {
    modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});

//------------------

const cursoDos = document.getElementById('cursoDos');
const modal_container_dos = document.getElementById('modal_container_dos');
const close_dos = document.getElementById('close_dos');

cursoDos.addEventListener('click', () => {
    modal_container_dos.classList.add('show');  
});

close_dos.addEventListener('click', () => {
    modal_container_dos.classList.remove('show');
});