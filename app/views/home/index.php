<?php 
    include '../app/views/main/app.php';
?>

<?= template_home('Home') ?>
<video playsinline autoplay muted loop style="object-fit: cover; width: 100vw; height: 100vh; position: fixed; top: 0; left: 0;">
  <source src="<?= BASEURL; ?>/vendors/video/background.mp4" type="video/mp4">
</video>

<!-- Button trigger modal -->
<a href="<?= BASEURL; ?>/auth/login">
  <button type="button" class="btn btn-outline-light" style="position: absolute; top: 450px; left: 47%; right: 47%;">
  Masuk
  </button>
</a>
<?= template_footer() ?>