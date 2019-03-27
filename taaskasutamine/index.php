<?php include('pais.php'); ?>
<menu>
    <a href="index.php">Avaleht</a>
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>
<?php
if (!empty($_GET['leht'])){
    include($_GET['leht'].'.php');
} else {
    ?>
    <div id="sisu">
        <h2>Avaleht</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia feugiat mi, ac blandit purus
            hendrerit vel.</p>
    </div>
<?php include('jalus.php'); ?>
    <?php
}
?>

