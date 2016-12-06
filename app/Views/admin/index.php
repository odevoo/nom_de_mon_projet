<?php $this->layout('layout_admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>
    <form class="form-group" method="post" action="<?= $this->url('admin_register') ?>">
            <input class="form-control" type="text" name="username" value="" placeholder="name">    
            <input class="form-control" type="email" name="email" value="" placeholder="email">
            <input class="form-control" type="password" name="password" value="" placeholder="password">
            <input class="form-control" type="text" name="role" value="" placeholder="role">
            <input class="btn btn-primary" type="submit" name="" value="Envoyer"> 
    </form>
    
<?php $this->stop('main_content') ?>
