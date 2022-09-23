
<?php
session_start();
if (! empty($_SESSION["username"])) {

include("header.php");
include("scripts/config.php");

$reqstsql = mysqli_query($mysqli, "SELECT * FROM requests WHERE status='pending'");

?>

                    <div class="col-lg-8 col-md-8">
                        <div class="documentation_info" id="post">
 
                                <!--table-->
                                <div class="shortcode_info">
                                    <h4 class="s_title" id="table">All Tickets</h4>
                                    <div class="table-responsive">
                                        <table class="table table_shortcode">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Name</th>
                                                    <th>Designation</th>
                                                    <th>Issue Type</th>
                                                    <th>Message</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                        <?php
                        while ($row=mysqli_fetch_array($reqstsql)) {
                          
                          echo'
                                                <tr>
                                                    
                                                    <td>'.$row['name'].'</td>
                                                    <td>'.$row['designation'].'</td>
                                                    <td>'.$row['issue_type'].'</td>
                                                    <td>'.$row['message'].'</td>
                                                    <td>'.$row['date_added'].'</td>
                                                    <td><input name="cstatus" style="background-color:red; border:1px solid red; border-radius: 5px; color:#fff;" type="submit" value='.$row['status'].'></td>
                                                </tr>
                          ';


                            // code...
                          }

                        ?>
                                            </tbody>
                                        </table>
                                    </div>
 
                                <div class="border_bottom"></div>
<!--                                 <div class="row feedback_link">
                                    <div class="col-lg-6">
                                        
                                    </div>
                                    <div class="col-lg-6">
                                       
                                    </div>
                                </div> -->
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </section>

<?php
}
include("footer.php");
?>
