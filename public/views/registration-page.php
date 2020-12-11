<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/style-menu.css">
        <link rel="stylesheet" type="text/css" href="public/css/style-form.css">
        <link rel="stylesheet" type="text/css" href="public/css/style-registration-page.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Page</title>
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
                <div id="login">LOGOWANIE</div>
                <div id="registration">REJESTRACJA</div>
                <form id="form-login">
                    <input type="text" placeholder="Imię">
                    <input type="text" placeholder="Nazwisko">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Hasło">
                    <input type="text" placeholder="Powtórz hasło">
                    <button>ZAREJESTRUJ SIĘ</button>
                </form>
            </main>
        </div>
    </body>
</html>