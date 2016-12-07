<?php $this->layout('layout_admin', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>
    <form class="form-group" method="post" action="<?= $this->url('login') ?>">
               
            <input class="form-control" type="email" name="email" value="" placeholder="email">
            <input class="form-control" type="password" name="password" value="" placeholder="password">
            <input class="btn btn-primary" type="submit" name="" value="Envoyer"> 
    </form>
    
<?php $this->stop('main_content') ?>
