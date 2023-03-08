<?php
voorkeuren = list($voorkeuren);
vleesVoorkeur = voorkeuren[0];
lactoseVoorkeur = voorkeuren[1];
glutenVoorkeur = voorkeuren[2];
// ["geenVlees","geenLactose","geenGluten"]
klantenMail = list();
// hier moeten de emailadressen die graag een email willen ontvangen uit sql worden uitgelezen en opgeslagen
aantalKlanten = list();
// hier moet het totale aantal ingeschreven mensen komen
var dag;
var receptMaandag;
var receptDinsdag;
var receptWoensdag;
var receptDonderdag;
var receptVrijdag;
var receptZaterdag;
var receptZondag;
var idKlant
$subject = "Recept voor vandaag";
$headers = "From: noreply@freshie.com";
$alleRecepten = array();
$random_number1 = rand(1, 14);
$random_number2 = rand(1, 14);
$random_number3 = rand(1, 14);
$random_number4 = rand(1, 14);
$random_number5 = rand(1, 14);
$random_number6 = rand(1, 14);
$random_number7 = rand(1, 14);
while ($random_number1 == $random_number2 or
    $random_number2 == $random_number3 or
    $random_number3 == $random_number4 or
    $random_number4 == $random_number5 or
    $random_number5 == $random_number6 or
    $random_number6 == $random_number7 or
    $random_number1 == $random_number3 or
    $random_number1 == $random_number4 or
    $random_number1 == $random_number5 or
    $random_number1 == $random_number6 or
    $random_number1 == $random_number7 or
    $random_number2 == $random_number4 or
    $random_number2 == $random_number5 or
    $random_number2 == $random_number6 or
    $random_number2 == $random_number7 or
    $random_number3 == $random_number6 or
    $random_number3 == $random_number5 or
    $random_number3 == $random_number7 or
    $random_number4 == $random_number6 or
    $random_number4 == $random_number7 or
    $random_number5 == $random_number7) {
        $random_number1 = rand(1, 14);
        $random_number2 = rand(1, 14);
        $random_number3 = rand(1, 14);
        $random_number4 = rand(1, 14);
        $random_number5 = rand(1, 14);
        $random_number6 = rand(1, 14);
        $random_number7 = rand(1, 14);
}
if (vleesVoorkeur == geenVlees and lactoseVoorkeur == geenLactose and glutenVoorkeur == geenGluten) {
    var receptMaandag = $niksRecepten[$random_number1];
    var receptDinsdag = $niksRecepten[$random_number2];
    var receptWoensdag = $niksRecepten[$random_number3];
    var receptDonderdag = $niksRecepten[$random_number4];
    var receptVrijdag = $niksRecepten[$random_number5];
    var receptZaterdag = $niksRecepten[$random_number6];
    var receptZondag = $niksRecepten[$random_number7];
} else if (vleesVoorkeur == geenVlees and lactoseVoorkeur == welLactose and glutenVoorkeur == geenGluten) {
    var receptMaandag = $alleenLactoseRecepten[$random_number1];
    var receptDinsdag = $alleenLactoseRecepten[$random_number2];
    var receptWoensdag = $alleenLactoseRecepten[$random_number3];
    var receptDonderdag = $alleenLactoseRecepten[$random_number4];
    var receptVrijdag = $alleenLactoseRecepten[$random_number5];
    var receptZaterdag = $alleenLactoseRecepten[$random_number6];
    var receptZondag = $alleenLactoseRecepten[$random_number7];
} else if (vleesVoorkeur == geenVlees and lactoseVoorkeur == geenLactose and glutenVoorkeur == welGluten) {
    var receptMaandag = $alleenGlutenRecepten[$random_number1];
    var receptDinsdag = $alleenGlutenRecepten[$random_number2];
    var receptWoensdag = $alleenGlutenRecepten[$random_number3];
    var receptDonderdag = $alleenGlutenRecepten[$random_number4];
    var receptVrijdag = $alleenGlutenRecepten[$random_number5];
    var receptZaterdag = $alleenGlutenRecepten[$random_number6];
    var receptZondag = $alleenGlutenRecepten[$random_number7];
} else if (vleesVoorkeur == geenVlees and lactoseVoorkeur == welLactose and glutenVoorkeur == welGluten) {
    var receptMaandag = $geenVleesRecepten[$random_number1];
    var receptDinsdag = $geenVleesRecepten[$random_number2];
    var receptWoensdag = $geenVleesRecepten[$random_number3];
    var receptDonderdag = $geenVleesRecepten[$random_number4];
    var receptVrijdag = $geenVleesRecepten[$random_number5];
    var receptZaterdag = $geenVleesRecepten[$random_number6];
    var receptZondag = $geenVleesRecepten[$random_number7];
} else if (vleesVoorkeur == welVlees and lactoseVoorkeur == geenLactose and glutenVoorkeur == geenGluten) {
    var receptMaandag = $alleenVleesRecepten[$random_number1];
    var receptDinsdag = $alleenVleesRecepten[$random_number2];
    var receptWoensdag = $alleenVleesRecepten[$random_number3];
    var receptDonderdag = $alleenVleesRecepten[$random_number4];
    var receptVrijdag = $alleenVleesRecepten[$random_number5];
    var receptZaterdag = $alleenVleesRecepten[$random_number6];
    var receptZondag = $alleenVleesRecepten[$random_number7];
} else if (vleesVoorkeur == welVlees and lactoseVoorkeur == welLactose and glutenVoorkeur == geenGluten) {
    var receptMaandag = $VleesLactoseRecepten[$random_number1];
    var receptDinsdag = $VleesLactoseRecepten[$random_number2];
    var receptWoensdag = $VleesLactoseRecepten[$random_number3];
    var receptDonderdag = $VleesLactoseRecepten[$random_number4];
    var receptVrijdag = $VleesLactoseRecepten[$random_number5];
    var receptZaterdag = $VleesLactoseRecepten[$random_number6];
    var receptZondag = $VleesLactoseRecepten[$random_number7];
} else if (vleesVoorkeur == welVlees and lactoseVoorkeur == geenLactose and glutenVoorkeur == welGluten) {
    var receptMaandag = $VleesGlutenRecepten[$random_number1];
    var receptDinsdag = $VleesGlutenRecepten[$random_number2];
    var receptWoensdag = $VleesGlutenRecepten[$random_number3];
    var receptDonderdag = $VleesGlutenRecepten[$random_number4];
    var receptVrijdag = $VleesGlutenRecepten[$random_number5];
    var receptZaterdag = $VleesGlutenRecepten[$random_number6];
    var receptZondag = $VleesGlutenRecepten[$random_number7];
} else if (vleesVoorkeur == welVlees and lactoseVoorkeur == welLactose and glutenVoorkeur == welGluten) {
    var receptMaandag = $alleRecepten[$random_number1];
    var receptDinsdag = $alleRecepten[$random_number2];
    var receptWoensdag = $alleRecepten[$random_number3];
    var receptDonderdag = $alleRecepten[$random_number4];
    var receptVrijdag = $alleRecepten[$random_number5];
    var receptZaterdag = $alleRecepten[$random_number6];
    var receptZondag = $alleRecepten[$random_number7];
}
    aantalNogTeMailen = count(klantenMail);
    while (aantalNogTeMailen != 0) {
        idKlant = aantalKlanten - aantalNogTeMailen;
        $to = klantenMail[idKlant];
        // hier moet uit de list het emailadres uitgehaald worden
        if (dag == Maandag) {
        $message = receptMaandag;
        mail($to, $subject, $message, $headers);
        $subject = "Ingrediënten hele week Freshie!"
        $message = ingrediëntenWeek;
        mail($to, $subject, $message, $headers);
        } else if (dag == Dinsdag) {
            $message = receptDinsdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Woensdag) {
            $message = receptWoensdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Donderdag) {
            $message = receptDonderdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Vrijdag) {
            $message = receptVrijdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Zaterdag) {
            $message = receptZaterdag;
            mail($to, $subject, $message, $headers);
        } else if (dag == Zondag) {
            $message = receptZondag;
            mail($to, $subject, $message, $headers);
        }
    }


