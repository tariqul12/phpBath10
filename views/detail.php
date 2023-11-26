<?php include "header.php" ?>
<section class="py-5 bg-primary-subtle ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $student['image'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $student['name'] ?></h1>
                    <h4><?php echo $student['roll'] ?></h4>
                    <h4><?php echo $student['email'] ?></h4>
                    <h4><?php echo $student['mobile'] ?></h4>
                  <p><?php echo $student['detail'] ?></p>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include "footer.php" ?>