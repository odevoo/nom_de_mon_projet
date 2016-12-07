<?php $this->layout('layout', ['title' => 'Equipe']) ?>

<?php $this->start('main_content') ?>
    <nav class="navbar navbar-default container">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img class="img-responsive brand" alt="Brand" src="<?= $this->assetUrl('img/instagram.png') ?>">
            </a>
        </div>
    </div>
    </nav>

    <div class="container">
        <?php foreach (array_chunk($array, 3 , true) as $array) {
            echo '<div class="row">';
         
        foreach ($array as $dev) {
            
            echo '<div class="col-md-4"><div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">'.$dev['username'].'</h3>
                    </div>
                    <div class="panel-body">
                        <a href="'.$this->url('equipe_profile', ['id' => $dev['id']]).'" title=""><img src="'.$this->assetUrl($dev['img']).'" alt=""></a>
                    </div>
                </div></div>';
        }
        echo "</div>";
        } 
        ?>
        
    </div>
    
<?php $this->stop('main_content') ?>
