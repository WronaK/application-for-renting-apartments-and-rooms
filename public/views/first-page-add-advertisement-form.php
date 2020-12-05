<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/style-menu.css">
        <link rel="stylesheet" type="text/css" href="public/css/style-add-form.css">
        <link rel="stylesheet" type="text/css" href="public/css/style-first-page-add-advertisement.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Page</title>
    </head>
    <body>
        <div class="base-container">
            <header>
                <div class="logo">
                    <img src="public/img/logo.svg">
                </div>
                <nav>
                    <button>
                        <i class="fas fa-bars">
                    </i></button>
                    <ul>
                        <li><a href="#">MOJE KONTO</a></li>
                        <li><a href="#">DODAJ OGŁOSZENIE</a></li>
                        <li><a href="#">PRZEGLĄDAJ OGŁOSZENIA</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div id="first-page">
                    <span class="phone">1</span>
                    <span class="web">INFORMACJE PODSTAWOWE</span>
                </div>
                <div id="second-page">
                    <span class="phone">2</span>
                    <span class="web">INFORMACJE SZCZEGÓŁOWE</span>
                </div>
                <div id="third-page">
                    <span class="phone">3</span>
                    <span class="web">LOKALIZACJA</span>
                </div>
                <div id="fourth-page">
                    <span class="phone">4</span>
                    <span class="web">DANE KONTAKTOWE</span>
                </div>
                <div id="fifth-page">
                    <span class="phone">5</span>
                    <span class="web">DANE DODATKOWE</span>
                </div>
                <form id="form-add" action="firstForm" method="POST">
                    <label for="type">RODZAJ NIERUCHOMOŚCI</label>
                    <select name="property-type" id="type">
                        <option selected disabled>Wybierz rodzaj nieruchomości</option>
                        <option>Mieszkanie</option>
                        <option>Pokój</option>
                    </select>
                    <label for="area">POWIERZCHNIA (w m<sup>2</sup>)</label>
                    <input name="area" type="number" id="area"  step="any" placeholder="39,50">
                    <label for="number-rooms">LICZBA POKOI</label>
                    <input name="number-rooms" type="number" id="number-rooms" placeholder="2">
                    <label for="price">CENA (w zł)</label>
                    <input name="price" type="number" id="price" step="any" placeholder="1200">
                    <button type="submit">DALEJ</button>
                </form>
            </main>
        </div>
    </body>
</html>