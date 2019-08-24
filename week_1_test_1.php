<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 1</title>
</head>
<body>
<h1>zadatak 1.</h1>
<p>
<h2>string</h2>
<h3>Moj prvi zadatak PHP.</h3>
<br>
Broj riječi u ovoj rečenici:
<?php
    echo str_word_count("Moj prvi zadatak PHP."); //ispisuje broj riječi
?>
<br>

Broj slova u ovoj rečenici je:
<?php
    echo strlen("Moj prvi zadatak PHP."); //ispisuje broj slova
?>
<br>

Ova rečenica unazad se piše: 
<?php
    echo strrev("Moj prvi zadatak PHP."); //ispisuje rečenicu unazad
?>
<p>

<h2>varijabla</h2>
<?php
$name="ITP 100"; //string
$time=6; //broj
echo "Ovaj projekat se zove $name i traje $time mjeseci.<br>";
echo "Da nisam krenuo na projekat $name, sigurno bih ovih $time mjeseci potrosio uzalud.<br>";
?>
<p>

<h2>niz</h2>
<?php
$cars = array("Volkswagen", "Mitsubishi", "Lada", "Audi", "Dodge", "Porsche", "Ferari");
echo "U Njemackoj se proizvode " . $cars[0] . ", " . $cars[3] . " i " . $cars[5] . ", a u Italiji " . $cars[6] . ".";
?>
<p>

<h2>aritmeticke operacije</h2>
a=50 i b=12
<br>
<?php

$a=50;
$b=12;

$sabiranje = $a + $b; 
$oduzimanje = $a - $b;
$dijeljenje = $a / $b;
$mnozenje = $a * $b;
echo "sabiranje: ";
echo $sabiranje."<br>"; 
echo "oduzimanje: ";
echo $oduzimanje."<br>"; 
echo "dijeljenje: ";
echo $dijeljenje."<br>";
echo "mnozenje: "; 
echo $mnozenje."<br>"; 
?>
<p>

<h1>zadatak 2.</h1>

12 == "12"
<br>
<?php
$x=12;
$y="12";
if($x == $y) {
    echo "tacno";
}
else {
    echo "netacno";
}
?>
<p>

12 === "12"
<br>
<?php
$q=17;
$w="17";
if($x === $y) {
    echo "tacno";
}
else {
    echo "netacno";
}
?>
<p>

<h1>zadatak 3.</h1>
<b>Ako kupac ima na racunu manji od potrebnog iznosa.</b>
<br>
<?php
$price=800;
$card=650;
if($card <=0){
    echo "Nemate novca na vasem racunu";
}
elseif($card < $price){
    echo "Nemate dovoljno novca za ovu kupovinu";
}
else {
    echo "Kupovina uspjesno obavljena";
}
?>
<p>

<b>Ako kupac ima na racunu vise novca od potrebnog.</b>
<br>
<?php
$price=200;
$card=1400;
if($card <=0){
    echo "Nemate novca na vasem racunu";
}
elseif($card < $price){
    echo "Nemate dovoljno novca za ovu kupovinu";
}
else {
    echo "Kupovina uspjesno obavljena";
}
?>

</body>
</html>