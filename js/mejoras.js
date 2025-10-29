const votos = [
  { si: 0, no: 0 },
  { si: 0, no: 0 }
];

document.querySelectorAll('.votar').forEach(boton => {
  boton.addEventListener('click', () => {
    const id = boton.getAttribute('data-id');
    const tipo = boton.getAttribute('data-voto');

    votos[id][tipo]++;

    document.getElementById(`si-${id}`).textContent = votos[id].si;
    document.getElementById(`no-${id}`).textContent = votos[id].no;
  });
});
