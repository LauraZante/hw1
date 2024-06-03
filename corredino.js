document.addEventListener('DOMContentLoaded', () => {
    const corredinoContainer = document.getElementById('corredino-container');

    console.log('Prodotti:', prodotti); // Debug

    prodotti.forEach(prodotto => {
        const corredinoItem = document.createElement('div');
        corredinoItem.classList.add('corredino-item');

        // Creazione dell'URL dell'immagine
        const imagePath = `/sito/${prodotto.immagine}`;
        console.log('Image Path:', imagePath); // Debug

        const imgElement = document.createElement('img');
        imgElement.src = imagePath;
        imgElement.alt = prodotto.nome;

        const nameElement = document.createElement('h2');
        nameElement.textContent = prodotto.nome;

        const descriptionElement = document.createElement('p');
        descriptionElement.textContent = prodotto.descrizione;

        const priceElement = document.createElement('p');
        priceElement.textContent = `€${prodotto.prezzo}`;

        corredinoItem.appendChild(imgElement);
        corredinoItem.appendChild(nameElement);
        corredinoItem.appendChild(descriptionElement);
        corredinoItem.appendChild(priceElement);

        corredinoContainer.appendChild(corredinoItem);
    });
});
