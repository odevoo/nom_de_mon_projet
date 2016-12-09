<?php $this->layout('layout', ['title' => $contenu_page->getPageTitle()]) ?>

<?php $this->start('main_content') ?>
<?= $contenu_page->getData('presentation'); ?>
    
<?php $this->stop('main_content') ?>
