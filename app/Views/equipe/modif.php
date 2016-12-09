<?php $this->layout('layout', ['title' => 'modif']) ?>
<?php $this->start('main_content') ?>

    <nav class="navbar navbar-default container">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img class="img-responsive brand" alt="Brand" src="<?= $this->assetUrl('img/instagram.png') ?>">
            </a>
        </div>
        <p class="navbar-text navbar-right"><a href="<?= $this->url('equipe_main') ?>" class="navbar-link">Retour</a></p>
    </div>
    </nav>
    <div class="container">
        <form method="post" action="<?= $this->url('equipe_formmodif', ['id' => $user['id']]) ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" value="<?php echo $user['username'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="<?php echo $user['email'] ?>" placeholder="">
            </div>
            <!--<div class="form-group">
                <label for="username">Password</label>
                <input class="form-control" type="password" name="password" id="password" value="<?php echo $user['password'] ?>" placeholder="">
            </div>-->
            <div class="form-group">
                <label for="role">Role</label>
                <input class="form-control" type="text" name="role" id="role" value="<?php echo $user['role'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input class="form-control" type="text" name="img" id="img" value="<?php echo $user['img'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="SQL">SQL</label>
                <input class="form-control" type="number" name="SQL1" id="SQL" value="<?php echo $skills['SQL1'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="PHP">PHP</label>
                <input class="form-control" type="number" name="PHP" id="PHP" value="<?php echo $skills['PHP'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="js">Javascript</label>
                <input class="form-control" type="number" name="javascript" id="js" value="<?php echo $skills['javascript'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="jquery">Jquery</label>
                <input class="form-control" type="number" name="jquery" id="jquery" value="<?php echo $skills['jquery'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="wordpress">wordpress</label>
                <input class="form-control" type="number" name="wordpress" id="wordpress" value="<?php echo $skills['wordpress'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="HTML">HTML</label>
                <input class="form-control" type="number" name="html" id="HTML" value="<?php echo $skills['html'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="CSS">CSS</label>
                <input class="form-control" type="number" name="css" id="css" value="<?php echo $skills['css'] ?>" placeholder="">
            </div>
            <div class="form-group">
                <input type="submit" name="btn" value="Modifier" class="btn btn-primary">
            </div>
        </form>
    </div>

<?php $this->stop('main_content') ?>