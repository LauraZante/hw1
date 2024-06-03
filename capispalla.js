document.addEventListener('DOMContentLoaded', () => {
    const capispallaContainer = document.getElementById('capispalla-container');

    console.log('Prodotti:', prodotti); // Debug

    prodotti.forEach(prodotto => {
        const capispallaItem = document.createElement('div');
        capispallaItem.classList.add('capispalla-item');

        // Creazione dell'URL dell'immagine
        const imagePath = `/sito/${prodotto.immagine}`;  // Percorso corretto delle immagini
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

        capispallaItem.appendChild(imgElement);
        capispallaItem.appendChild(nameElement);
        capispallaItem.appendChild(descriptionElement);
        capispallaItem.appendChild(priceElement);

        capispallaContainer.appendChild(capispallaItem);
    });
});
