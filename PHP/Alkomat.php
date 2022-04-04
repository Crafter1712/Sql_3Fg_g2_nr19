<form method="$_GET">
    <select name="plec">
            <option value="M">Mężczyzna</option>
            <option value="K">Kobieta</option>
    </select>
    <select name="trunek">
        <option value="vodka">Wódka</option>
        <option value="Wine">Wino</option>
        <option value="Beer">Piwo</option>
    </select>
    <input type="text" name="waga" placeholder="Twoja waga">
    <input type="text" name="ilosc" placeholder="Ilość butelek 500ml">
    <button type="sumbit" name="obliczanie">Oblicz pijaka</button>
</form>

<?php 
if (isset($_GET['obliczanie'])) {
    $plec = $_GET['plec'];
if ($plec == "M") {
    $K_Do_wzoru=0.7;
    }else{$K_Do_wzoru = 0.6;}
    $trunek = $_GET['trunek'];  //na 500ml
if ($trunek == "vodka") {   
    $alkohol_Trunek_gramy = 160; }
if ($trunek == "Wine"){
    $alkohol_Trunek_gramy = 50;}
if ($trunek == "Beer") {
    $alkohol_Trunek_gramy = 20;}

    $Ilosc_butelek_500ml=$_GET['ilosc'];
    $A_Do_wzoru = $Ilosc_butelek_500ml*$alkohol_Trunek_gramy; 

    $waga = $_GET['waga'];

    $Promile=$A_Do_wzoru/($K_Do_wzoru*$waga);
    echo "wazartowść alkoholu we krwi ".$Promile;
}
?>