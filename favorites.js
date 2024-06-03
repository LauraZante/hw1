document.addEventListener('DOMContentLoaded', () => {
    const favoritesContainer = document.getElementById('favorites-container');

    console.log('Favorites:', favorites); // Debug

    favorites.forEach(product => {
        const favoriteItem = document.createElement('div');
        favoriteItem.classList.add('favorite-item');

        // Creazione dell'URL dell'immagine
        const imagePath = `http://localhost/sito/` + product.image_url;
        console.log('Image Path:', imagePath); // Debug

        const imgElement = document.createElement('img');
        imgElement.src = imagePath;
        imgElement.alt = product.name;

        const nameElement = document.createElement('h2');
        nameElement.textContent = product.name;

        const descriptionElement = document.createElement('p');
        descriptionElement.textContent = product.description;

        const priceElement = document.createElement('p');
        priceElement.textContent = `€${product.price}`;

        favoriteItem.appendChild(imgElement);
        favoriteItem.appendChild(nameElement);
        favoriteItem.appendChild(descriptionElement);
        favoriteItem.appendChild(priceElement);

        favoritesContainer.appendChild(favoriteItem);
    });
});
