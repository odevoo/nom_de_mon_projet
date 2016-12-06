<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

    <?php if (isset($flash)) {
        echo '<div class="container flash bg-success">'. $flash . '</div>';
    } ?>
    <div class="container">
        <h2>Formulaire de contact</h2>
        
        <form class="form-group" method="post" action="<?= $this->url('contact_traitement') ?>">
            <input class="form-control" type="email" name="email" value="" placeholder="email">
            <textarea class="form-control" name="textarea" placeholder="texte"></textarea>
            <input class="btn btn-primary" type="submit" name="btnSub" value="envoyer">
        </form>
    </div>
    
<?php $this->stop('main_content') ?>
