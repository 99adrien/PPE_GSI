
<h1>Liste des postes</h1>

<?php
for ($i = 0; $i < count($listeRestos); $i++) {?>
    <div class="card">
        <div class="descrCard"><?php echo "<a href='./?action=detail&nSalle=" . $listeRestos[$i]['nSalle'] . "'>" . $listeRestos[$i]['nomSalle'] . "</a>"; ?>
            <br />
            <p>Adresse IP : <?= $listeRestos[$i]["indIP"] ?></p>
            <p>Nombre de postes : <?= $listeRestos[$i]["nbPoste"] ?></p>
        </div>
        <div class="tagCard">
            <ul id="tagFood">		


            </ul>


        </div>

    </div>





    <?php
}
?>


