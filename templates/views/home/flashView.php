<?php require_once INCLUDES.'inc_header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-6 text-center offset-xl-3">
      <img src="<?php echo IMAGES.'Logo_TODO_Mining.png' ?>" alt="TODO framework" class="img-fluid" style="width: 200px;">
      <h2 class="mt-5 mb-3"><span class="text-warning">TODO</span> framework</h2>
      <!-- contenido -->
      <?php echo Flasher::flash(); ?>
      <!-- ends -->
    </div>
  </div>
</div>

<?php require_once INCLUDES.'inc_footer.php'; ?>