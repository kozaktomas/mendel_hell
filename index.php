<?php

function nactiToAleFofrem($subor, $kolik_tam_toho_je)
{
    $tak_si_vebereme_jeden_vokruh = rand(1, $kolik_tam_toho_je);
    $text_suboru = file_get_contents($subor);
    $radky_suboru = explode("\n", $text_suboru);
    $cislo_radku_votazky = ($tak_si_vebereme_jeden_vokruh * 2) - 2;
    $cislo_radku_popisku_votazky = $cislo_radku_votazky + 1;

    echo "<h2>" . trim($radky_suboru[$cislo_radku_votazky]) . "</h2>";
    echo '<p id="cudlik">Zobrazit popis</p>';
    echo "<p id='popis' style='display: none;'>" . trim($radky_suboru[$cislo_radku_popisku_votazky]) . "</p>";
}

function namalujVrch()
{
    echo "
    <!DOCTYPE html>
    <html lang=\"cs\" dir=\"ltr\">
      <head>
        <meta charset=\"UTF-8\">
        <title>Titulek stránky</title>
        <script src='//code.jquery.com/jquery-1.12.0.min.js'></script>
        <script src='//code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
        <script src='js.js'></script>
      </head>
      <body>
    ";
}

function namalujSpodek()
{
    echo "
        <img src='http://www.jrj-socrates.com/Cartoon%20Pics/Disney/Donald%20Duck/Donald_305b.gif' alt='Kačerov'>
        </body>
    </html>
    ";
}

$tady_bude_predmet = rand(1, 3);
$velka_mrda = 24;
$mala_mrda = 12;

namalujVrch();
if ($tady_bude_predmet == 1) {
    echo "<h1>1. Vývoj programových systémů</h1>";
    nactiToAleFofrem(__DIR__ . "/" . $tady_bude_predmet . ".txt", $velka_mrda);
} elseif ($tady_bude_predmet == 2) {
    echo "<h1>2. Informatika a řizení podniku</h1>";
    nactiToAleFofrem(__DIR__ . "/" . $tady_bude_predmet . ".txt", $velka_mrda);
} elseif ($tady_bude_predmet == 3) {
    echo "<h1>3. Informatika a její aplikace</h1>";
    nactiToAleFofrem(__DIR__ . "/" . $tady_bude_predmet . ".txt", $mala_mrda);
}
namalujSpodek();