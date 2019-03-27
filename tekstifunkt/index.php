<?php
    $enimi = $_GET['enimi'];
    $pnimi = $_GET['pnimi'];
    $l = strlen($enimi);
    $tekst = $_GET['ropp'];
    $otsi = "noob";
    $asenda = "****";
?>

<html>
    <body>
        <form name="form" action="" method="get">
            <input type="text" name="enimi" id="enimi" placeholder="eesnimi">
            <input type="text" name="pnimi" id="pnimi" placeholder="perekonnanimi">
            <input type="text" name="ropp" id="ropp" placeholder="noob on ropp">
            <input type="submit" name="sisesta" id="ok" value="sisesta">
        </form>
    </body>
</html>

<?php
echo "Tere, ". ucfirst(strtolower($enimi)) . "<br>";
for ($i=0; $i<$l; $i++){
    echo $enimi[$i].".";
}
echo "<br>";
echo str_replace($otsi, $asenda, $tekst);
echo "<br>";
echo $enimi.".".$pnimi."@khk.ee";
?>