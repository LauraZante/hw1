<?php
include 'auth.php';
checkAuth();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="index.css"/>
    <script src="index.js" defer></script>
</head>
 <body>
<nav>
        <div id="text_nav">
            <form id="searchForm" class="search-container">
                <input type="search" id="searchInput" placeholder="Cerca prodotto" aria-label="Cerca" autocomplete="off">
                <button type="submit"> <img src="lentericerca.png" alt="Cerca"> </button> 
            </form>
            <a class="button_nav" href="login.php">ㅤAccedi | </a> 
            <a class="button_nav" href="signup.php">ㅤRegistrati | </a> 
            <a class="button_nav" href="https://www.amatobimbi.it/it/elenco_prodotti_carrello/">ㅤ <img class="icona_shopper" src="shopper.png" alt="Carrello"></a>
        </div>
        <div id="icone_nav">
            <a href="https://www.facebook.com/amatobimbi/?paipv=0&eav=AfYQqHAx3zoKTY2S2w2KpvrWGtwa-IZ89si35x6rxq2V3L-11YAaSqfFLkVuKqR8WEU&_rdr">
                <img class="icone_nav" src="iconafacebook.jpg"></a>
            <a href="https://www.instagram.com/amatobimbi/?igshid=YmMyMTA2M2Y%3D"> 
                <img class="icone_nav" src="iconinstargram.jpg"> </a>
        </div>
    </nav>

    <header>
        <a href="index.php">
            <div id="img_header"> <img class="img_header" src="logo.jpg" /> </div> </a>
        <div id="text_header">
            <a class="button" href="index.php"> HOME </a>
            <div class="dropdown"> <a href="corredino.php"> CORREDINO NASCITA </a>
                <div class="dropdown-content">
                    <a href="#" class="tendina1"> Corredino neonata</a>
                    <a href="#" class="tendina1"> Corredino neonato</a>
                   </div>
               </div>
            <div class="dropdown"> <a href="battesimo.php"> BATTESIMO </a>
                <div class="dropdown-content">
                    <a href="#" class="tendina2"> Bimba </a>
                    <a href="#" class="tendina2"> Bimbo </a>
                </div>
            </div> 
            <div class="dropdown"> <a href="cerimonia.php"> CERIMONIA </a>
                <div class="dropdown-content">
                    <a href="#" class="tendina3"> Per lei</a>
                    <a href="#" class="tendina3"> Per lui</a>
                </div>
            </div>
            <a class="button" href="outlet.php"> OUTLET </a>
            <a class="button" href="chi_siamo.php"> CHI SIAMO </a>
        </div>
    </header>

    <section>
        <div id="flex-container">
            <div class="flex-item"> <a href="corredino.php"> 
                <img class="img_1 darken-on-hover" src="corredino.jpg"> </a> </div>
            <div class="flex-item"> <a href="battesimo.php"> 
                <img class="img_1 darken-on-hover" src="battesimo.jpg"> </a> </div>
            <div class="flex-item"> <a href="cerimonia.php"> 
                <img class="img_1 darken-on-hover" src="cerimonia.jpg"> </a> </div>
        </div>

        <div id="flex-container">
            <div class="flex-item"> <a href="capispalla.php"> 
                <img class="img_1 darken-on-hover" src="capispalla.jpg"> </a> </div>
            <div class="flex-item"> <a href="scarpe.php"> 
                <img class="img_1 darken-on-hover" src="scarpe.jpg"> </a> </div>
        </div>

        <div id="flex-container">
            <div class="flex-item"> <a href="outlet.php"> 
                <img class="img_3 darken-on-hover" src="sconti.jpg"> </a> </div>
        </div>

        <div class="booking-button-container">
            <a href="prenotazione.php" class="booking-btn">Prenota il tuo appuntamento!</a>
        </div>

        <div class="image-slider"> 
            <a class="precedente"> &#10094; </a>
            <div class="image-container"> </div>
            <a class="successivo"> &#10095; </a>
        </div>
    </section>

    <div class="review-box">
    <p> <strong>Aiutaci a crescere, lascia anche tu una Recensione!</strong></p>
    <a href="review.php" class="openReviewForm-btn">Vai!</a>
    </div>

    <div class="carousel-container">
        <button class="carousel-btn left-btn">&#10094;</button>
        <div class="carousel">
            <div class="carousel-track">
                <div class="carousel-item" data-product-id="1"><img src="SASHA.jpeg" alt="Product 1"> <button class="favorite-btn">&#9733;</button> </div>
                <div class="carousel-item" data-product-id="2"><img src="VITTORIO.jpeg" alt="Product 2"> <button class="favorite-btn">&#9733;</button> </div>
                <div class="carousel-item" data-product-id="3"><img src="EMMA.jpeg" alt="Product 3"> <button class="favorite-btn">&#9733;</button> </div>
                <div class="carousel-item" data-product-id="4"><img src="GIANMARCO.jpeg" alt="Product 4"> <button class="favorite-btn">&#9733;</button> </div>
                <div class="carousel-item" data-product-id="5"><img src="ESTELA.jpeg" alt="Product 5"> <button class="favorite-btn">&#9733;</button> </div>
                <div class="carousel-item" data-product-id="6"><img src="DIEGO.jpeg" alt="Product 6"> <button class="favorite-btn">&#9733;</button> </div>
            </div>
        </div>
        <button class="carousel-btn right-btn">&#10095;</button>
    </div>

    <div class="favorites-box">
    <p> <strong>Visualizza qui i tuoi Preferiti con un semplice click!</strong></p>
    <a href="favorites.php" class="favorites-btn">Vai!</a>
    </div>
    <script src="hmw1.js" defer></script>

    <footer>
        <div id="text_footer">
            <div class="flex-footer">
                <h3> CONTATTI </h3>
                <br />
                <p> Amato bimbi s.r.l.s. </p>
                <p> Corso Sicilia 69 - Catania - 95131 </p>
                <p> Viale XX Settembre 31 - Catania - 95128 </p>
                <p> <strong>Per info e contatti chiamaci al: </strong></p>
                <p> 0957151493 - Sede Corso Sicilia </p>
                <p> 0953523086 - Sede Viale XX Settembre </p>
                <p> 3285532206 - WhatsApp - Cellulare </p>
                <p> Email: info@amatobimbi.it </p>
                <p> P.IVA: 05962600879 - N.REA: 451758 </p>
                <br />
                <div id="img_footer"> <img class="img_footer" src="pagamenti.jpg"></div>
            </div>

            <div class="flex-footer">
                <h3> INFORMAZIONI </h3>
                <br />
                <a href="https://www.amatobimbi.it/it/gestione_cookies/"> Cookie Policy </a> </br>
                <a href="https://www.amatobimbi.it/it/approfondimenti/Spedizione/26/"> Spedizione </a></br>
                <a href="https://www.amatobimbi.it/it/approfondimenti/Forme-di-pagamento/27/"> Forme di pagamento
                </a></br>
                <a href="https://www.amatobimbi.it/it/approfondimenti/Cambi-e-Resi/24/"> Cambi e Resi </a></br>
                <a href="https://www.amatobimbi.it/it/approfondimenti/Consigli-sulla-taglia/30/"> Consigli sulla
                    taglia</a></br>
                <a href="https://www.amatobimbi.it/it/approfondimenti/Privacy/18/"> Privacy </a></br>
                <a href="https://www.amatobimbi.it/it/approfondimenti/Termini-Legali--e-Condizioni/29/"> Termini Legali
                    e Condizioni</a>
            </div>

            <div class="flex-footer">
                <h3> MENU </h3>
                <br />
                <a class="button_footer" href="index.php"> Home </a></br>
                <a class="button_footer" href="corredino.php">
                    Corredino nascita</a></br>
                <a class="button_footer" href="battesimo.php">
                    Battesimo</a></br>
                <a class="button_footer" href="cerimonia.php">
                    Cerimonia</a></br>
                <a class="button_footer" href="outlet.php">
                    Outlet</a></br>
                <a class="button_footer" href="chi_siamo.php"> Chi siamo </a></br>
                <a class="button_footer" href="https://www.amatobimbi.it/it/contatti/"> Contatti </a>
            </div>

            <div class="flex-footer">
        <h3>NEWSLETTER</h3>
        <form id="newsletterForm">
            <label for="nome">Nome *</label>
            <input type="text" id="nome" name="nome" placeholder="Nome.." required autocomplete="off">

            <label for="cognome">Cognome *</label>
            <input type="text" id="cognome" name="cognome" placeholder="Cognome.." required autocomplete="off">

            <label for="email">Email *</label>
            <input type="email" id="email" name="email" placeholder="Inserisci la tua email" required autocomplete="off">
            <br/>

            <label for="privacy">Accetto le condizioni di Privacy</label>
            <input type="checkbox" id="privacy" name="privacy" required>

            <button type="submit"><strong>Iscriviti</strong></button>
            <div id="loadingIndicator" style="display: none;">Caricamento...</div>
            <div id="messageSuccess" style="display: none; color: green;"></div>
        </form>
        <br />
            </div>
        </div>
    </footer>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times; </span>
        <img src="coupon.JPG" alt="descrizione" style="width: 100%; max-width: 600px;">
    </div>
</div>

<!-- Contenitore per Bottone whatsapp e testo-->
<div class="whatsapp_container">
    <!-- Testo separato-->
    <span class="WhatsApp_text"> <strong>WhatsApp</strong> </span>
    <!-- bottone -->
    <a href="https://wa.me/393285532206?text=Posso%20avere%20più%20informazioni%20a%20riguardo?.." 
    target= "_blank" class="WhatsApp_button"> <img src="whatsappbutton.png" alt="WhatsApp"> </a>
</div>

<script src="newsletter.js" defer></script>

</body>
</html>