<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kontaktirajte GNK Dinamo putem službene stranice.">
    <meta name="keywords" content="Dinamo Zagreb, kontakt, GNK Dinamo, nogomet, forma">
    <meta name="author" content="Dorian Banić">
    <title>Kontakt - GNK Dinamo Zagreb</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <header>
        <div class="banner">
            <img src="slike/slika1.jpg" alt="Banner Kontakt">
        </div>
        <nav>
            <a href="index.php">Početna</a>
            <a href="news.php">Vijesti</a>
            <a href="#">Kontakt</a>
            <a href="#aboutus">O nama</a>
            <a href="#galerija">Galerija</a>
        </nav>
    </header>

    <main>
        <section class="contact-section">
            <h1>Kontaktirajte GNK Dinamo</h1>
            <p>Molimo vas da ispunite formu ispod kako biste nas kontaktirali. Radujemo se vašim povratnim informacijama.</p>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22245.02637445248!2d16.017994991786367!3d45.818702118057665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d7c7c54294cd%3A0x141ee8b4a96f7e8e!2sStadion%20Maksimir!5e0!3m2!1shr!2shr!4v1732148907436!5m2!1shr!2shr"
                    width="100%"
                    height="300"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <form action="submit.php" method="post" class="contact-form">
                <label for="first-name">Ime:</label>
                <input type="text" id="first-name" name="first-name" placeholder="Vaše ime" required>

                <label for="last-name">Prezime:</label>
                <input type="text" id="last-name" name="last-name" placeholder="Vaše prezime" required>

                <label for="email">Email adresa:</label>
                <input type="email" id="email" name="email" placeholder="vašemail@primjer.com" required>

                <label for="country">Država:</label>
                <select id="country" name="country" required>
                    <option value="">Odaberite državu</option>
                    <option value="hrvatska">Hrvatska</option>
                    <option value="slovenija">Slovenija</option>
                    <option value="srbija">Srbija</option>
                    <option value="bosna">Bosna i Hercegovina</option>
                    <option value="crna-gora">Crna Gora</option>
                </select>

                <label for="message">Opis:</label>
                <textarea id="message" name="message" rows="5" placeholder="Vaša poruka..."></textarea>

                <button type="submit">Pošalji</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Dorian Banić. Sva prava pridržana.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <img src="slike/facebook-icon.png" alt="Facebook ikona">
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <img src="slike/instagram-icon.png" alt="Instagram ikona">
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <img src="slike/twitter-icon.png" alt="Twitter ikona">
                </a>
            </div>
            <div class="github-link">
                <a href="https://github.com/DorianBanic" target="_blank" title="Pogledajte moj GitHub">
                    <img src="slike/github-icon.png" alt="GitHub ikona">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>