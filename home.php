<?php
$mailKlantenAan = array();
$alleRecepten = array();
$random_number = rand(1, 14);
if (vleesVoorkeur == geenVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == geenLactose and glutenVoorkeur == geenGluten) {
    var recept = $homoRecepten[$random_number];
} else if (vleesVoorkeur == geenVlees and notenVoorkeur == welNoten and lactoseVoorkeur == geenLactose and glutenVoorkeur == geenGluten) {
    var recept = $alleenNotenRecepten[$random_number];
} else if (vleesVoorkeur == geenVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == geenGluten) {
    var recept = $alleenLactoseRecepten[$random_number];
} else if (vleesVoorkeur == geenVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == geenLactose and glutenVoorkeur == welGluten) {
    var recept = $alleenGlutenRecepten[$random_number];
} else if (vleesVoorkeur == geenVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == welGluten) {
    var recept = $LactoseGlutenRecepten[$random_number];
} else if (vleesVoorkeur == geenVlees and notenVoorkeur == welNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == geenGluten) {
    var recept = $LactoseNotenRecepten[$random_number];
} else if (vleesVoorkeur == geenVlees and notenVoorkeur == welNoten and lactoseVoorkeur == nietLactose and glutenVoorkeur == welGluten) {
    var recept = $NotenGlutenRecepten[$random_number];
} else if (vleesVoorkeur == geenVlees and notenVoorkeur == welNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == welGluten) {
    var recept = $geenVleesRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == geenLactose and glutenVoorkeur == geenGluten) {
    var recept = $alleenVleesRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == welNoten and lactoseVoorkeur == geenLactose and glutenVoorkeur == geenGluten) {
    var recept = $VleesNotenRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == geenGluten) {
    var recept = $VleesLactoseRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == geenLactose and glutenVoorkeur == welGluten) {
    var recept = $VleesGlutenRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == welNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == geenGluten) {
    var recept = $geenGlutenRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == welNoten and lactoseVoorkeur == geenLactose and glutenVoorkeur == welGluten) {
    var recept = $geenLactoseRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == geenNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == welGluten) {
    var recept = $geenNotenRecepten[$random_number];
} else if (vleesVoorkeur == welVlees and notenVoorkeur == welNoten and lactoseVoorkeur == welLactose and glutenVoorkeur == welGluten) {
    var recept = $alleRecepten[$random_number];
}
var Mailklantenuit;
var dag;

if () {
for ()
    $to = $Mailklantenaan;
    $subject = "Recept voor" + dag;
    $message = recept;
    $headers = "From: noreply@freshie.nl";

    mail($to, $subject, $message, $headers);
}