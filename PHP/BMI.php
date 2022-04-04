<form method="GET">
    <input type="text" name="waga" placeholder="waga w kg">
    <input type="text" name="wzrost" placeholder="wzrost w metrach">
    <button type="submit" name="licz">licz</button>

</form>
<?php
if(isset($_GET['licz'])){
$waga = $_GET['waga'];
$wzrost = $_GET['wzrost'];

$BMI = $waga/($wzrost^2);
echo $BMI;

if ($BMI<19) {
    echo "masz niedowage. Może maczek?😏";
}
else if($BMI>18 && $BMI<25) {
    echo "prawidłowa waga. Robi wrażenie!😎";
}
else if($BMI>24) {
    echo "masz nadwage. Biegaj na siłke i prestań grać w Lige😵‍💫";
}
}
?>