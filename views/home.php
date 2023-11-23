
<?php include "header.php"; ?>


<section class="bg-info-subtle py-5">
  <div class="container">
    <div class="row">
      <?php foreach ($students as $student){   ?>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="<?php echo $student["image"] ?>" alt="">
          <div class="card-body">
            <h3><?php echo $student["name"] ?></h3>
            <h4><?php echo $student["mobile"] ?></h4>
            <h4><?php echo $student["email"] ?></h4>
            <hr>
            <a href="web.php?page=detail" class="btn btn-success">detail</a>
          </div>
        </div>
      </div>
      <?php } ?>


    </div>
  </div>
</section>

<?php include "footer.php"; ?>

