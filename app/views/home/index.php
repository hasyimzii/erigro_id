<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Home') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">
    <?php 
        foreach($data as $d) {
            echo $d['username'];
        }
    ?>
</div>
<?= template_footer() ?>