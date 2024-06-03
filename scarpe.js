document.addEventListener('DOMContentLoaded', () => {
    const scarpeContainer = document.getElementById('scarpe-container');

    console.log('Prodotti:', prodotti); // Debug

    prodotti.forEach(prodotto => {
        const scarpeItem = document.createElement('div');
        scarpeItem.classList.add('scarpe-item');

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
        priceElement.classList.add('prezzo');
        priceElement.textContent = `€${prodotto.prezzo}`;

        scarpeItem.appendChild(imgElement);
        scarpeItem.appendChild(nameElement);
        scarpeItem.appendChild(descriptionElement);
        scarpeItem.appendChild(priceElement);

        scarpeContainer.appendChild(scarpeItem);
    });
});
