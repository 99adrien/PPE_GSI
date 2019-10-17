
<h1><?= $unResto['nomSalle']; ?></h1>

<p id="principal">
    Je m'appelle Maxence CASTIGLIA et je suis moche.
</p>
<h2 id="adresse">
    Infos
</h2>
<p>
    <?= $unResto['nomSalle']; ?><br />
    <?= $unResto['nbPoste']; ?><br />
    <?= $unResto['indIP']; ?>

</p>

<h2 id="postes">
    Postes dans cette salle
</h2>

<?php for ($i = 0; $i < count($unPoste); $i++) { ?>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <span>
                    <p> Nom : <?= $unPoste[$i]["nomPoste"] ?> </p>
                </span>
                <span>
                    <p> Adresse IP : <?= $unPoste[$i]["indIP"] ?> </p>
                </span>
                <span>
                    <p> Administrateur : <?= $unPoste[$i]["ad"] ?> </p>
                </span>
                </br>
            </div>
        </div>
    </div>
<?php } ?>
