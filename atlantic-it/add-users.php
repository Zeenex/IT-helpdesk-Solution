
<?php
session_start();
if (! empty($_SESSION["username"])) {

include("header.php");
include("scripts/config.php");

$reqstsql = mysqli_query($mysqli, "SELECT * FROM users");

?>


                    <div class="col-lg-8 col-md-8">
                        <div class="documentation_info" id="post">
 
                  <form action="scripts/add_staff.php" method='post'>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Staff Name</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Staff Email</label>
                          <input type="text" name="email" class="form-control">
                        </div>
                      </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" name="password" class="form-control">
                        </div>
                      </div>
                    </div>

                  

                    <button type="submit" name="submit" class="btn btn-primary pull-right">Add Staff</button>
                    <div class="clearfix"></div>
                  </form>
                    </div>

                </div>
            </div>
        </div>
        </section>

<?php
}
include("footer.php");
?>
