<?php 

$temperature= 39;

switch ($temperature) {
    case 37:
    echo("tout va bien");
    break;
    case 38:
    echo("légèrement fiévreux");
    break;
    case 39:
    echo("vraiment fiévreux");
    break;
    case 40:
    echo("très fiévreux");
    break;
}
?>

<?php 
$temperature= 30;

if ($temperature > 40) {
    echo"le bain est trop chaud";

} elseif ($temperature < 25) {
    echo"le bain est trop froid";

} else {
    echo"le bain est à la bonne température";
}
?>