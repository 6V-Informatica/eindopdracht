<?php
voorkeuren = list($voorkeuren);
vleesVoorkeur = voorkeuren[0];
lactoseVoorkeur = voorkeuren[1];
glutenVoorkeur = voorkeuren[2];
// ["geenVlees","geenLactose","geenGluten"]
klantenMail = list();
// hier moeten de emailadressen die graag een email willen ontvangen uit sql worden uitgelezen en opgeslagen
var dag;
var receptMaandag;
var receptDinsdag;
var receptWoensdag;
var receptDonderdag;
var receptVrijdag;
var receptZaterdag;
var receptZondag;
$subject = "Recept voor" + dag;
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
    var recept = $alleenVleesRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and lactoseVoorkeur == welLactose and glutenVoorkeur == geenGluten) {
    var recept = $VleesLactoseRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and lactoseVoorkeur == geenLactose and glutenVoorkeur == welGluten) {
    var recept = $VleesGlutenRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and lactoseVoorkeur == welLactose and glutenVoorkeur == welGluten) {
    var recept = $alleRecepten[$random_number];
}
    aantalNogTeMailen = count(klantenMail);
    if (aantalNogTeMailen != 0) {

        if () {
            for ()
                $to = klantenMail;

            mail($to, $subject, $message, $headers);
        }
    }