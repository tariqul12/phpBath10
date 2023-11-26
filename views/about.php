<?php include "header.php"; ?>

  <section class="py-5 bg-primary-subtle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">full Program</div>
            <div class="card-body">
              <form action="web.php" method="post">
                <div class="row mb-3">
                  <label for="" class="col-lg-3">first Name</label>
                  <div class="col-lg-9">
                    <input type="text" name="first_name" class="form-control" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-lg-3">Last Name</label>
                  <div class="col-lg-9">
                    <input type="text" name="last_name" class="form-control" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-lg-3">Full Name</label>
                  <div class="col-lg-9">
                    <input type="text"  class="form-control" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-lg-3"></label>
                  <div class="col-lg-9">
                    <input type="submit" name="full_name_btn" class="btn btn-success" value="Make Full Name" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include "footer.php"; ?>