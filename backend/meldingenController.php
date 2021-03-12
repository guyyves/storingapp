<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
    if(empty($attractie))
    {
        $errors[] = "Vul de attractie-naam in";
    }
$type = $_POST['type'];
if(empty($type))
{
    $errors[] = "Vul een type attractie in";
}
$capaciteit = $_POST['capaciteit'];
    if(!is_numeric($capaciteit)) 
    { 
        $errors[] = "Vul voor capaciteit een geldig getal in.";
    }
if(isset($_POST['prioriteit']))
{
    $prioriteit = true;
}
else
{
    $prioriteit = false;
}
$melder = $_POST['melder'];
if(empty($melder))
    {
        $errors[] = "Vul je naam in";
    }
$group = $_POST['group'];
if(isset($_POST['newsletter']))
{
    $newsletter = true;
}
else
{
    $newsletter = false;
}
$overig = $_POST['overig'];

if(isset($errors))
{
    var_dump($errors);
    die();
}

header("Location: ../meldingen/index.php?msg=Melding opgeslagen");

//1. Verbinding
require_once 'conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, capaciteit, melder) VALUES(:attractie, :capaciteit, :melder)";

//3. Prepare
$statement = $conn->prepare($query);

//4. Execute
$statement->execute([ 
    ":attractie" => $attractie,
    ":capaciteit" => $capaciteit, 
    ":melder" => $melder,
    ]);
    header("Location: ../meldingen/index.php?msg=Melding opgeslagen");
