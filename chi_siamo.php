<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Chi Siamo</title>
    <link rel="stylesheet" href="chi_siamo.css">
    <!-- Localizzazione --> <script type="text/javascript" src="https://www.bing.com/api/maps/mapcontrol?callback=initMap" async defer></script>
</head>
<body>
    <div class="content-container">
        <h1>CHI SIAMO</h1>
        <p>
            La storia di Amato bimbi nasce nel febbraio del 1986 a Catania, quando i coniugi Amato decisero di rilevare l’antica attività del padre della signora Amato. Da quel momento in poi la famiglia Amato ha trasformato Amato bimbi in un vero e proprio punto di riferimento nel settore dell’abbigliamento elegante per bambini a Catania e in tutta la Sicilia orientale, arrivando a spedire nell’intero territorio nazionale. Da oltre 35 anni siamo un'azienda leader nel settore dell'abbigliamento elegante per bambini e cerimonia, specializzati nel vestire con il Made in Italy le occasioni speciali come nascita, corredino neonato, battesimo, primo compleanno, comunione, cresima, paggetto e damigella, seguendo il percorso di crescita del bambino dalla nascita fino all'adolescenza. Con professionalità, educazione e cortesia siamo pronti ad assistere le esigenze del cliente, che da generazioni con fiducia si rivolge a noi per le migliori occasioni.
        </p> <br>

        <h2>Vienici a trovare presso i nostri atelier:</h2> <br>

        <div class="photo-container">
            <h3>Corso Sicilia 69 - Catania</h3>
            <img src="CorsoSicilia.jpeg" alt="Amato Bimbi Catania">
        </div> <br>

        <div class="photo-container">
            <h3>Viale XX Settembre 31 - Catania</h3>
            <img src="VialeXX.jpeg" alt="Amato Bimbi Viale XX Settembre">
        </div> <br>

        <h2>Noi ci troviamo qui!</h2> 
        <!-- Posiziono in questo punto la mappa -->
        <!-- Mappa di Bing -->
        <div id="myMap"></div> <br>

        <h2>Orari di apertura e chiusura:</h2>
        <table>
            <tr>
                <th>Giorno</th>
                <th>Mattina</th>
                <th>Pomeriggio</th>
            </tr>
            <tr>
                <td>Lunedì</td>
                <td>9:30-13:00</td>
                <td>16:30-20:00</td>
            </tr>
            <tr>
                <td>Martedì</td>
                <td>9:30-13:00</td>
                <td>16:30-20:00</td>
            </tr>
            <tr>
                <td>Mercoledì</td>
                <td>9:30-13:00</td>
                <td>16:30-20:00</td>
            </tr>
            <tr>
                <td>Giovedì</td>
                <td>9:30-13:00</td>
                <td>16:30-20:00</td>
            </tr>
            <tr>
                <td>Venerdì</td>
                <td>9:30-13:00</td>
                <td>16:30-20:00</td>
            </tr>
            <tr>
                <td>Sabato</td>
                <td>9:30-13:00</td>
                <td>16:30-20:00</td>
            </tr>
            <tr>
                <td>Domenica</td>
                <td colspan="2">Chiuso</td>
            </tr>
        </table>
    </div>
    <script src="chi_siamo.js" defer></script>
</body>
</html>