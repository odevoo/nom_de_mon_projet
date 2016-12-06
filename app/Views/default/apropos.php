<?php $this->layout('layout', ['title' => 'A propos']) ?>

<?php $this->start('main_content') ?>
    <h2>A propos.</h2>
    <form method="post" action="<?= $this->url('contact_traitement') ?>">
        <input type="text" name="nom" value="">
        <input type="submit" name="btnSub" value="envoyer">
    </form>
<?php $this->stop('main_content') ?>
