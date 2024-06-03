document.addEventListener("DOMContentLoaded", function() {
    var immagini = document.querySelectorAll('.img_1, .img_3');

    function fadeIn(event) {
        var op = 0.1;
        event.target.style.opacity = op;
        event.target.style.display = '';
        var timer = setInterval(function () {
            if (op >= 1) {
                clearInterval(timer);
            }
            event.target.style.opacity = op;
            event.target.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op += op * 0.1;
        }, 5);
    }
    immagini.forEach(function(img) {
        img.style.opacity = '1';  

        img.addEventListener('mouseover', function() {
            img.style.opacity = '1.2';  
        });
        img.addEventListener('mouseout', function() {
            img.style.opacity = '1';   
        });
    });
});

  document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
    setTimeout(function() {
        modal.style.display = "block";
    }, 9000);
    var close = document.getElementsByClassName("close") [0];
    close.onclick = function() {
        modal.style.display = "none";
    }
    }); 


document.addEventListener("DOMContentLoaded", function() {
    const immaginiGalleria = [
        { src: 'recensione1.JPG', alt: 'Descrizione Immagine 1' },
        { src: 'recensione2.JPG', alt: 'Descrizione Immagine 2' },
        { src: 'recensione3.JPG', alt: 'Descrizione Immagine 3' },
    ];

    let indiceImmagine = 0;
    const containerGalleria = document.querySelector('.image-slider .image-container');
    containerGalleria.innerHTML = '';

    // Funzione per creare e mostrare le immagini
    function creaMostraImmagini() {
        immaginiGalleria.forEach((immagine, index) => {
            const imgElement = document.createElement('img');
            imgElement.src = immagine.src;
            imgElement.alt = immagine.alt;
            imgElement.style.display = index === indiceImmagine ? 'block' : 'none';
            containerGalleria.appendChild(imgElement);
        });
    }

    creaMostraImmagini(); // Chiamata iniziale per popolare la galleria

    // Funzione per cambiare l'immagine visualizzata
    function cambiaImmagine(n) {
        indiceImmagine += n;
        if (indiceImmagine >= immaginiGalleria.length) { indiceImmagine = 0; }
        if (indiceImmagine < 0) { indiceImmagine = immaginiGalleria.length - 1; }
        aggiornaGalleria();
    }

    // Funzione per aggiornare la galleria con l'immagine corrente
    function aggiornaGalleria() {
        document.querySelectorAll('.image-slider .image-container img').forEach((img, index) => {
            img.style.display = index === indiceImmagine ? 'block' : 'none';
        });
    }

    // Event listener per i pulsanti Avanti e Indietro
    document.querySelector(".successivo").addEventListener("click", function() {
        cambiaImmagine(1);
    });

    document.querySelector(".precedente").addEventListener("click", function() {
        cambiaImmagine(-1);
    });

    // Autoplay con setInterval
    setInterval(function() {
        cambiaImmagine(1);
    }, 7000);
});

// barra di ricerca nella nav
document.addEventListener("DOMContentLoaded", function() {
    const searchForm = document.getElementById('searchForm');
    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const searchQuery = document.getElementById('searchInput').value;
        window.location.href = `https://www.amatobimbi.it/it/ecommerce/search/?ssearch=${encodeURIComponent(searchQuery)}`;
    });
});


// Recensioni
document.addEventListener("DOMContentLoaded", function() {
    const immaginiGalleria = [
        { src: 'recensione1.JPG', alt: 'Descrizione Immagine 1' },
        { src: 'recensione2.JPG', alt: 'Descrizione Immagine 2' },
        { src: 'recensione3.JPG', alt: 'Descrizione Immagine 3' },
    ];

    let indiceImmagine = 0;
    const containerGalleria = document.querySelector('.image-slider .image-container');
    containerGalleria.innerHTML = '';

    // Funzione per creare e mostrare le immagini
    function creaMostraImmagini() {
        immaginiGalleria.forEach((immagine, index) => {
            const imgElement = document.createElement('img');
            imgElement.src = immagine.src;
            imgElement.alt = immagine.alt;
            imgElement.style.display = index === indiceImmagine ? 'block' : 'none';
            containerGalleria.appendChild(imgElement);
        });
    }

    creaMostraImmagini(); // Chiamata iniziale per popolare la galleria

    // Funzione per cambiare l'immagine visualizzata
    function cambiaImmagine(n) {
        indiceImmagine += n;
        if (indiceImmagine >= immaginiGalleria.length) { indiceImmagine = 0; }
        if (indiceImmagine < 0) { indiceImmagine = immaginiGalleria.length - 1; }
        aggiornaGalleria();
    }

    // Funzione per aggiornare la galleria con l'immagine corrente
    function aggiornaGalleria() {
        document.querySelectorAll('.image-slider .image-container img').forEach((img, index) => {
            img.style.display = index === indiceImmagine ? 'block' : 'none';
        });
    }

    // Event listener per i pulsanti Avanti e Indietro
    document.querySelector(".successivo").addEventListener("click", function() {
        cambiaImmagine(1);
    });

    document.querySelector(".precedente").addEventListener("click", function() {
        cambiaImmagine(-1);
    });

    // Autoplay con setInterval
    setInterval(function() {
        cambiaImmagine(1);
    }, 7000);
});


// Prodotti 
let index = 0;
const track = document.querySelector('.carousel-track');
const items = Array.from(track.children);
const totalItems = items.length;
const itemsPerView = 4; 

function updateCarouselPosition() {
    const moveWidth = -(index * (100 / itemsPerView));
    track.style.transform = `translateX(${moveWidth}%)`;
}

document.querySelector('.right-btn').addEventListener('click', () => {
    if (index < totalItems - itemsPerView) {
        index++;
    } else {
        index = 0;  
    }
    updateCarouselPosition();
});

document.querySelector('.left-btn').addEventListener('click', () => {
    if (index > 0) {
        index--;
    } else {
        index = totalItems - itemsPerView; 
    }
    updateCarouselPosition();
});

// Scorrimento automatico ogni 5 secondi
setInterval(() => {
    document.querySelector('.right-btn').click();
}, 5000);

// Gestione del bottone "Preferiti"
const favoriteButtons = document.querySelectorAll('.favorite-btn');
favoriteButtons.forEach(button => {
    button.addEventListener('click', () => {
        const productId = button.closest('.carousel-item').dataset.productId; // Trova l'ID del prodotto

        fetch('toggle_favorite.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `product_id=${productId}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'added') {
                button.classList.add('favorited');
            } else if (data.status === 'removed') {
                button.classList.remove('favorited');
            }
        })
        .catch(error => console.error('Error:', error));

        button.classList.toggle('favorited'); // Colora la stella al click
    });
});


// Newsletter
document.getElementById('newsletterForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const loadingIndicator = document.getElementById('loadingIndicator');
    const messageSuccess = document.getElementById('messageSuccess');
    const messageError = document.getElementById('messageError');

    loadingIndicator.style.display = 'block';
    messageSuccess.style.display = 'none';
    messageError.style.display = 'none';

    fetch('newsletter_signup.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data); 
        loadingIndicator.style.display = 'none';
        if (data.status === 'success') {
            messageSuccess.textContent = data.message;
            messageSuccess.style.display = 'block';
        } else {
            messageError.textContent = data.message;
            messageError.style.display = 'block';
        }
    })
    .catch(error => {
        console.error('Errore:', error); 
        loadingIndicator.style.display = 'none';
        messageError.textContent = 'Errore di rete, riprova più tardi';
        messageError.style.display = 'block';
    });
});
