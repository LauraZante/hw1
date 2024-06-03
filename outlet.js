document.addEventListener('DOMContentLoaded', () => {
    const outletContainer = document.getElementById('outlet-container');

    console.log('Prodotti:', prodotti); // Debug

    prodotti.forEach(prodotto => {
        const outletItem = document.createElement('div');
        outletItem.classList.add('outlet-item');

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

        const originalPriceElement = document.createElement('p');
        originalPriceElement.classList.add('prezzo');
        originalPriceElement.textContent = `Prezzo originale: €${prodotto.prezzo}`;

        const discountElement = document.createElement('span');
        discountElement.classList.add('sconto');
        discountElement.textContent = `Sconto: ${prodotto.sconto}%`;

        const discountedPrice = prodotto.prezzo * (1 - prodotto.sconto / 100);
        const discountedPriceElement = document.createElement('p');
        discountedPriceElement.classList.add('prezzo');
        discountedPriceElement.textContent = `Prezzo scontato: €${discountedPrice.toFixed(2)}`;

        outletItem.appendChild(imgElement);
        outletItem.appendChild(nameElement);
        outletItem.appendChild(descriptionElement);
        outletItem.appendChild(originalPriceElement);
        outletItem.appendChild(discountElement);
        outletItem.appendChild(discountedPriceElement);

        outletContainer.appendChild(outletItem);
    });
});
