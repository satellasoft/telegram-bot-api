'use strict'

document.getElementById('btnEnviar').addEventListener('click', () => {

    const message = document.getElementById('txtMensagem').value;

    const endpoint = 'http://localhost/telegram-api/api.php?m=' + message;

    if (message.trim().length <= 0) {
        alert('Informe uma mensagem!');
        return;
    }

    fetch(endpoint,).
        then(response => {
            response.json().then(data => {
                console.log(data);
            });

        }).catch(error => {
            console.log(error);
        });
});