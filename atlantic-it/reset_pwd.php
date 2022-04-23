
<?php
session_start();
if (! empty($_SESSION["username"])) {

include("header.php");
include("scripts/config.php");

$reqstsql = mysqli_query($mysqli, "SELECT * FROM users");

?>

                    <div class="col-lg-8 col-md-8">
                        <div class="documentation_info" id="post">
 
                    <form action="scripts/pwdrest.php" id='form1' method='post'>
                     
                    <div class="form-group">
                      

                      <select name="name" class="form-control" id='form1'>
                        <option value="AL">Select User</option>
                              <?php
                              while($rows=mysqli_fetch_array($reqstsql)){

                              echo'
                              <option value="'.$rows['name'].'">'.$rows['name'].'</option>
                              ';
                              }

                              ?>
                  
                      </select>
                     
                    </div>
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="password2" />
                            </div>
                          </div>
                        </div>


                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
               

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
