<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Home') ?>
<video playsinline autoplay muted loop style="object-fit: cover; width: 100vw; height: 100vh; position: fixed; top: 0; left: 0;">
  <source src="<?= BASEURL; ?>/vendors/video/background.mp4" type="video/mp4">
</video>
<?= template_footer() ?>