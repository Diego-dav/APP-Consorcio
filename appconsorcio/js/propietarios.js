

const form = document.getElementById('formNuevoPropietario');
const lista = document.getElementById('listaPropietarios');

if (form && lista) {
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const departamento = document.getElementById('departamento').value;

    const nuevoElemento = document.createElement('p');
    nuevoElemento.textContent = `${departamento} - ${nombre}`;
    lista.appendChild(nuevoElemento);

    form.reset();
  });
}
