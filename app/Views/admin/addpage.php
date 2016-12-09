<?php $this->layout('layout_admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>
<h2>Ajouter une page</h2>
    <form class="form-group" method="post" id="form" action="<?= $this->url('admin_add_pagebdd') ?>">
            <input class="form-control" id="title" type="text" name="title" value="" placeholder="Titre"> 
            <select class="form-control" id="category" name="category">
            <?php foreach ($category as $category) {
                echo '<option value="'. $category . '">'.$category.'</option>';
            } ?>
               
            </select>   
            <input class="form-control" id="presentation" type="text" name="data[presentation]" value="" placeholder="Presentation">
            <input class="form-control" id="competence" type="text" name="data[competence]" value="" placeholder="Competence">
            
            <select class="form-control hide" id="user_id" name="user_id">
            <option value="null" disabled selected>Aucun</option>
            <?php foreach ($users as $user) {
                echo '<option value="'. $user["id"] . '">'.$user["username"].'</option>';
            } ?>
               
            </select>
            <input class="btn btn-primary" type="submit" id="send" name="" value="Envoyer"> 
    </form>
    
<?php $this->stop('main_content') ?>
