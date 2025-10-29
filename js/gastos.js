const formGasto = document.getElementById('formNuevoGasto');
const tablaGastos = document.querySelector('#gastos tbody');

if (formGasto && tablaGastos) {
  formGasto.addEventListener('submit', function (e) {
    e.preventDefault();

    const concepto = document.getElementById('concepto').value;
    const monto = document.getElementById('monto').value;
    const estado = document.getElementById('estado').value;

    const nuevaFila = document.createElement('tr');
    nuevaFila.innerHTML = `
      <td>${concepto}</td>
      <td>$${monto}</td>
      <td>${estado}</td>
    `;

    tablaGastos.appendChild(nuevaFila);
    formGasto.reset();
  });
}
