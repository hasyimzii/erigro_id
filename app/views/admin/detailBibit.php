<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Detail Bibit') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">
    <?php $data['bibit']; ?>
</div>
<?= template_footer() ?>