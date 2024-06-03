document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('bookingForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch('prenotazione.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            const responseMessage = document.getElementById('responseMessage');
            responseMessage.innerHTML = '';
            const messageParagraph = document.createElement('p');
            messageParagraph.textContent = data.message;
            messageParagraph.className = data.success ? 'success' : 'error';
            responseMessage.appendChild(messageParagraph);
        })
        .catch(error => {
            console.error('Errore:', error);
            const responseMessage = document.getElementById('responseMessage');
            responseMessage.innerHTML = '';
            const messageParagraph = document.createElement('p');
            messageParagraph.textContent = 'Errore nella prenotazione. Riprova.';
            messageParagraph.className = 'error';
            responseMessage.appendChild(messageParagraph);
        });
    });
});
