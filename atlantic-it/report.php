
<?php
session_start();
if (! empty($_SESSION["username"])) {

include("header.php");
include("scripts/config.php");

$reqstsql = mysqli_query($mysqli, "SELECT * FROM requests");

$query = mysqli_query($mysqli, "SELECT * FROM requests");
$num_rows = mysqli_num_rows($query);

$query1 = mysqli_query($mysqli, "SELECT * FROM requests WHERE issue_type = 'Computer Related'");
$c_rows = mysqli_num_rows($query1);
$query1 = mysqli_query($mysqli, "SELECT * FROM requests WHERE issue_type = 'Wireless Connection'");
$w_rows = mysqli_num_rows($query1);
$query1 = mysqli_query($mysqli, "SELECT * FROM requests WHERE issue_type = 'Internet related'");
$i_rows = mysqli_num_rows($query1);
$query1 = mysqli_query($mysqli, "SELECT * FROM requests WHERE issue_type = 'Printing Issue'");
$p_rows = mysqli_num_rows($query1);

$compu = ($c_rows/$num_rows)*100;
$wire = ($w_rows/$num_rows)*100;
$inter = ($i_rows/$num_rows)*100;
$print = ($p_rows/$num_rows)*100;


?>


                    <div class="col-lg-8 col-md-8">
                        <div class="documentation_info" id="post">
 
<section class="status-chart">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="h_title wow fadeInUp">
                        Request Report
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">
                        Realtime report on major complaint categories
                    </p>
                </div>

                <div class="kbDoc-chart-wrapper">
                    <ul class="chart-info">
                        <li class="info-left-top color-one">
                            <div class="counterup">
                                <span class="counter"><?php echo $compu; ?></span>
                                <span>%</span>
                            </div>
                            <div class="border-image">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="370" height="61" viewBox="0 0 370 61">
                                    <path fill-rule="evenodd" fill="rgb(66, 218, 191)"
                                        d="M319.500,1.423 L370.005,60.139 L369.200,60.721 L318.689,2.000 L-0.000,2.000 L-0.000,1.000 L318.497,1.000 L318.891,0.715 L319.136,1.000 L319.500,1.000 L319.500,1.423 Z" />
                                </svg>
                            </div>
                            <p>Computer Related<br><?php echo $c_rows; ?> out of <?php echo $num_rows; ?> Issues</p>

                        </li>
                        <li class="info-right-top color-two">
                            <div class="counterup">
                                <span class="counter"><?php echo $wire; ?></span>
                                <span>%</span>
                            </div>
                            <div class="border-image">
                                <!-- <img src="img/home_support/brt.png" alt="chart"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="330px" height="60px">
                                    <path fill-rule="evenodd" fill="rgb(249, 50, 122)"
                                        d="M330.000,1.281 L51.455,1.281 L0.802,60.002 L-0.005,59.421 L50.656,0.689 L50.656,0.281 L51.008,0.281 L51.253,-0.003 L51.648,0.281 L330.000,0.281 L330.000,1.281 Z" />
                                </svg>
                            </div>
                            <p>
                                Wireless Connection<br><?php echo $w_rows; ?> out of <?php echo $num_rows; ?> Issues
                            </p>
                        </li>
                        <li class="info-left-bottom color-three">
                            <div class="counterup">
                                <span class="counter"><?php echo $inter; ?></span>
                                <span>%</span>
                            </div>
                            <div class="border-image">
                                <!-- <img src="img/home_support/blb.png" alt="chart"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="350px" height="60px">
                                    <path fill-rule="evenodd" fill="rgb(53, 186, 233)"
                                        d="M350.005,0.578 L299.344,59.310 L299.344,59.718 L298.992,59.718 L298.747,60.002 L298.353,59.718 L-0.000,59.718 L-0.000,58.719 L298.544,58.719 L349.198,-0.003 L350.005,0.578 Z" />
                                </svg>
                            </div>
                            <p>
                                Internet related<br><?php echo $i_rows; ?> out of <?php echo $num_rows; ?> Issues
                            </p>
                        </li>
                        <li class="info-right-bottom color-four">
                            <div class="counterup">
                                <span class="counter"><?php echo $print; ?></span>
                                <span>%</span>
                            </div>
                            <div class="border-image">
                                <!-- <img src="img/home_support/brb.png" alt="chart"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="390px" height="60px">
                                    <path fill-rule="evenodd" fill="rgb(252, 193, 3)"
                                        d="M390.000,59.719 L51.647,59.719 L51.253,60.002 L51.008,59.719 L50.656,59.719 L50.656,59.310 L-0.005,0.579 L0.802,-0.004 L51.456,58.719 L390.000,58.719 L390.000,59.719 Z" />
                                </svg>
                            </div>
                            <p>
                                Printing Issue<br><?php echo $p_rows; ?> out of <?php echo $num_rows; ?> Issues
                            </p>
                        </li>
                    </ul>

                    <div class="canvas">
                        <canvas id="kbDoc-chart"></canvas>
                    </div>
                    <!-- /.canvas -->

                    <div class="full-amount">
                        <h3 class="total-count"><span class="counter">100</span><span>%</span></h3>
                    </div>
                </div>
                <!-- /.kbDoc-chart-wrapper -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.status-chart -->
                    </div>

                </div>
            </div>
        </div>
        </section>
                

<?php
}
include("footer.php");
?>
