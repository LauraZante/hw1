document.addEventListener("DOMContentLoaded", () => {
    fetch('path/to/api/endpoint')
        .then(response => response.json())
        .then(data => {
            console.log(data);
        })
        .catch(error => console.error('Error fetching data:', error));
});


// Mappa e Localizzazione
function initMap(lat = 37.507704, lng = 15.0894961) { 
    var map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'ApwhowTOlOwc6jfo5zPH8klAHAy67rO45yu5zJsA-uaIYH8dMnk7xQHQxPfeFUpF',  //'Your_Bing_Maps_Key',
        center: new Microsoft.Maps.Location(37.507704, 15.0894961),
        zoom: 14
    });

    var pushpinOptions = {
        color: 'darkblue',  
        title: 'Amato bimbi', 
        subTitle: 'Negozio abbigliamento per bambini', 
        text: ' 📍' 
    };

    var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(),pushpinOptions); 
    map.entities.push(pushpin);
}


/* // Funzione opzionale per ottenere coordinate tramite geocoding
function getCoordinates(address) {
    const encodedAddress = encodeURIComponent(address);
    fetch(`https://dev.virtualearth.net/REST/v1/Locations?query=${encodedAddress}&key=ApwhowTOlOwc6jfo5zPH8klAHAy67rO45yu5zJsA-uaIYH8dMnk7xQHQxPfeFUpF`)
        .then(response => response.json())
        .then(data => {
            if (data.resourceSets[0].resources.length > 0) {
                const location = data.resourceSets[0].resources[0].point.coordinates;
                initMap(location[0], location[1]); 
            } else {
                console.error('No location found for this address.');
            }
        })
        .catch(error => console.error('Geocoding failed:', error));
}
getCoordinates('Corso Sicilia 69, Catania, Italy');  */


// Definisco la città 
const cityName = 'Catania';
// Funzione per ottenere le coordinate di una città da Bing Maps
function fetchCoordinates(callback) {
    const bingMapsKey = 'ApwhowTOlOwc6jfo5zPH8klAHAy67rO45yu5zJsA-uaIYH8dMnk7xQHQxPfeFUpF'; 
    const geocodeUrl = `http://dev.virtualearth.net/REST/v1/Locations?query=${encodeURIComponent(cityName)}&key=${bingMapsKey}`;

    fetch(geocodeUrl)
    .then(response => response.json())
    .then(data => {
        if (data && data.resourceSets && data.resourceSets.length > 0 && data.resourceSets[0].resources.length > 0) {
            const coords = data.resourceSets[0].resources[0].point.coordinates;
            callback(coords[0], coords[1]); 
        } else {
            throw new Error('No coordinates found for ' + cityName);
        }
    })
    .catch(error => console.error('Bing Maps Geocoding error:', error));
}