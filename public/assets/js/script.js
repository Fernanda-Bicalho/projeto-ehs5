//Insere o ítem selecionado no botão para que o usuário veja
document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', event => {
        const dropdownButton = document.getElementById('dropdownButton');
        dropdownButton.textContent = event.target.dataset.value;
        dropdownButton.setAttribute('data-id', event.target.dataset.id); // Adicionando o ID do equipamento ao botão
    });
});

//Campo de busca do Equipamento por nome
document.getElementById('searchInput').addEventListener('input', function () {
    var input, filter, dropdown, items, item, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    dropdown = input.closest('.dropdown');
    items = dropdown.querySelectorAll('.item');
    for (i = 0; i < items.length; i++) {
        item = items[i];
        txtValue = item.textContent || item.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    }
});

//Envio do id para a rota
document.getElementById('filtroBtn').addEventListener('click', function() {
    // Pega o valor selecionado no dropdown
    // var dropdownValue = document.getElementById('dropdownButton').textContent.trim();
    // Pega o ID do equipamento armazenado no botão
    var equipmentId = document.getElementById('dropdownButton').getAttribute('data-id');
    // Obtém a rota armazenada no atributo data-route
    var route = this.getAttribute('data-route');
    // Redireciona para a rota com o ID do equipamento
    window.location.href = route + '/' + encodeURIComponent(equipmentId);
});
