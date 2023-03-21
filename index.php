<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | Freshie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style>
        body {font-family: "Times New Roman", Georgia, Serif,serif;}
        h1, h2, h3, h4, h5, h6 {
            font-family: "Playfair Display",serif;
            letter-spacing: 5px;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="photo/freshie%20logo.png">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="top">
    <div class="bar white padding card" style="letter-spacing:4px;">
        <div class="left">
            <a href="index.php" class="button">
                <!--suppress CheckImageSize -->
                <img class="image" src="photo/freshie%20logo.png" alt="Freshie logo" width="50" height="50">
            </a>
        </div>
        <div class="right vertical-middle hide-small">
            <a href="#about" class="bar-item button">Informatie</a>
            <a href="#prizes" class="bar-item button">Prijzen</a>
            <a href="welcome.php" class="bar-item button">Inloggen</a>
        </div>
        <div class="right vertical-middle hide-large hide-medium">
            <a href="welcome.php" class="bar-item button">Inloggen</a>
        </div>
    </div>
</div>

<!-- Header -->
<header class="display-container content wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="image" src="photo/freshie%20header.webp" alt="Header Freshie" width="1600" height="800">
    <div class="display-bottomleft padding-large opacity">
        <h1 class="xxlarge">Freshie</h1>
    </div>
</header>

<!-- Page content -->
<div class="content" style="max-width:1100px">

    <!-- About Section -->
    <div class="row padding-64" id="about">
        <div class="col m6 padding-large hide-small">
            <img src="photo/freshie%20over.jpg" class="round image opacity-min" alt="Over Freshie" width="600" height="750">
        </div>

        <div class="col m6 padding-large">
            <h1 class="center">Welkom bij Freshie</h1><br>
            <h6 class="center">Wil jij gezonder eten?</h6>
            <p class="large"> Dan zit jij goed bij Freshie. Sinds 2022 zijn wij bezig om voor jou een eetschema te maken. Met dit schema voldoe je elke week aan de schijf van vijf en krijg je voldoende voedingsstoffen binnen. Bij Freshie streven wij naar een gezond lichaam en dus ook een gezonde geest. Je kan je eigen schema samenstellen en je voorkeuren uitgeven.</p>
            <p class="large"> Begin nu en krijg je eerste maand gratis!</p>

        </div>
    </div>

    <hr>

    <!-- Menu Section -->
    <div class="row padding-64" id='prizes'>
        <div class="col l6 padding-large">
            <h1 class="center">Stel je pakket samen</h1><br>

            <h4>Pakket 1 (€09,99 p/m)</h4>
            <p class="text-grey">- Toegang jouw persoonlijke schema voor avondeten met recepten</p>
            <p class="text-grey">- Toegang tot de website</p>
            <p class="text-grey">- Wekelijkse mail met jouw persoonlijke schema</p><br>

            <h4>Pakket 2 (€14,95 p/m)</h4>
            <p class="text-grey">- Toegang jouw persoonlijke schema voor middageten</p>
            <p class="text-grey">- Toegang jouw persoonlijke schema voor avondeten met recepten</p>
            <p class="text-grey">- Toegang tot de website</p>
            <p class="text-grey">- Wekelijkse mail met jouw persoonlijke schema</p><br>


            <h4>Pakket 3 (€14,95 p/m)</h4>
            <p class="text-grey">- Toegang jouw persoonlijke schema voor ontbijt</p>
            <p class="text-grey">- Toegang jouw persoonlijke schema voor avondeten met recepten</p>
            <p class="text-grey">- Toegang tot de website</p>
            <p class="text-grey">- Wekelijkse mail met jouw persoonlijke schema</p><br>

            <h4>Pakket 4 (€24,95 p/m)</h4>
            <p class="text-grey">- Toegang jouw persoonlijke schema voor avondeten met recepten</p>
            <p class="text-grey">- Toegang jouw persoonlijke schema voor ontbijt</p>
            <p class="text-grey">- Toegang tot de website</p>
            <p class="text-grey">- Wekelijkse mail met jouw persoonlijke schema</p>
            <p class="text-grey">- Maandelijks gesprek met diëtiste</p>
            <br>
        </div>

        <div class="col l6 padding-large">
            <img src="photo/freshie%20prijzen.jpg" class="round image opacity-min" alt="Prijzen Freshie" style="width:100%">
        </div>
    </div>


</div>

<!-- Footer -->
<footer class="center light-grey padding-32">
    <p>Gemaakt door: 6V Informatica</p>
</footer>

</body>
</html>