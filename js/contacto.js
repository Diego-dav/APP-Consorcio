const formContacto = document.getElementById('formContacto');
const respuestaContacto = document.getElementById('respuestaContacto');

if (formContacto && respuestaContacto) {
  formContacto.addEventListener('submit', function (e) {
    e.preventDefault();

    const nombre = document.getElementById('nombreContacto').value;
    const tipo = document.getElementById('tipoMensaje').value;

    respuestaContacto.textContent = `Gracias ${nombre}, tu ${tipo.toLowerCase()} fue recibido correctamente.`;
    respuestaContacto.classList.remove('respuesta-oculta');

    formContacto.reset();
  });
}
