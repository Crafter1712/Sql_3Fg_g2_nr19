<form method="GET">
    <input type="text" name="kwota" placeholder="kwota do opodatkownia">
    <input type="text" name="podatek" placeholder="wysokość podatku">
    <input type="submit">
</form>

<?php

if (isset($_GET["kwota"]) && isset($_GET["podatek"])) {
    echo "kwota po podatku: " . $_GET["kwota"] * ((100 - $_GET["podatek"]) / 100) . " zł";
}
?>