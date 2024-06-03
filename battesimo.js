document.addEventListener('DOMContentLoaded', () => {
    const battesimoContainer = document.getElementById('battesimo-container');

    console.log('Prodotti:', prodotti); // Debug

    prodotti.forEach(prodotto => {
        const battesimoItem = document.createElement('div');
        battesimoItem.classList.add('battesimo-item');

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

        battesimoItem.appendChild(imgElement);
        battesimoItem.appendChild(nameElement);
        battesimoItem.appendChild(descriptionElement);
        battesimoItem.appendChild(priceElement);

        battesimoContainer.appendChild(battesimoItem);
    });
});
