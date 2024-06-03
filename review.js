document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('reviewForm');
    form.addEventListener('submit', (event) => {
        event.preventDefault(); 

        // Raccoglie i dati dal form
        const formData = new FormData(form);

        // Invia i dati al server via fetch
        fetch('submit_review.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('message').textContent = data.message;
            if (data.success) {
                form.reset();  
            }
        })
        .catch(error => console.error('Errore:', error));
    });
});
