<?php $this->layout('layout', ['title' => 'Presentation']) ?>
<?php $this->start('main_content') ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img class="img-responsive brand" alt="Brand" src="<?= $this->assetUrl('img/instagram.png') ?>">
            </a>
        </div>
        <p class="navbar-text navbar-right"><a href="<?= $this->url('equipe_main') ?>" class="navbar-link">Retour</a></p>
        <p class="navbar-text navbar-right"><a href="<?= $this->url('equipe_modif', ['id' => $user['id']]) ?>" class="navbar-link">Modifier</a></p>

    </div>
</nav>
<h1 class="text-center">Page de présentation de <?= $user['username'] ?></h1>
<div class="container">
    <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-md-6">
        <img class="img-responsive pull-rigth" src="<?= $this->assetUrl($user['img']) ?>" alt="">
    </div>
</div>
<div class="container">
    
    
    <div class="chart">
        <div class="skills"></div>
        <div class="bars"></div>
    </div>
    
</div>
<div class="container">
    <h2 class="text-center">Me contacter</h2>
    <form method="post" action="<?= $this->url('contact_traitement', ['id' => $user['id']]) ?>">
        <div class="form-group">
            <input class="form-control" type="email" name="email" value="" placeholder="Email">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="textarea" placeholder="Votre message" rows="5"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="btn" value="Envoyer" placeholder="">
        </div>
    </form>
    
</div>
<?php $this->stop('main_content') ?>