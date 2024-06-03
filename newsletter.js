document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('newsletterForm');
    const messageSuccess = document.getElementById('messageSuccess');
    const loadingIndicator = document.getElementById('loadingIndicator');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        loadingIndicator.style.display = 'block';

        const formData = new FormData(form);

        fetch('newsletter.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                messageSuccess.style.display = 'block';
                messageSuccess.textContent = data.message;
                form.reset();
            }
        
        })
        .finally(() => {
            loadingIndicator.style.display = 'none';
        });
    });
});
