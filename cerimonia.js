document.addEventListener('DOMContentLoaded', () => {
    const cerimoniaContainer = document.getElementById('cerimonia-container');

    console.log('Prodotti:', prodotti); // Debug

    prodotti.forEach(prodotto => {
        const cerimoniaItem = document.createElement('div');
        cerimoniaItem.classList.add('cerimonia-item');

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

        cerimoniaItem.appendChild(imgElement);
        cerimoniaItem.appendChild(nameElement);
        cerimoniaItem.appendChild(descriptionElement);
        cerimoniaItem.appendChild(priceElement);

        cerimoniaContainer.appendChild(cerimoniaItem);
    });
});
