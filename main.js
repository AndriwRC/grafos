const container = document.querySelector('#nodesContainer');

function addDestination() {
    const lbl = document.createElement('label');
    const txt = document.createTextNode('Vertice Destino:');
    lbl.appendChild(txt);
    const input = document.createElement('input');
    input.setAttribute('name', 'caminoMasCortoData[]');
    container.append(lbl, input);
}
