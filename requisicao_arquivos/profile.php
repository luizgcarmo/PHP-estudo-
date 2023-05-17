<article style="
    padding: 5px 20px;
    background: #eeeeee;
    -webkit-border-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
">
<h1><?= $profile->name; ?></h1>
<p>
    Estuda na <?= $profile->company?><br>
    <a tittle="Enviar Email" href="mailto:<?= $profile->email?>">Enviar Email</a>
</p>
</article>