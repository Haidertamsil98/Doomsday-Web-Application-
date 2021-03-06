<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operator | Login</title>


    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/admin_login.css">

    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text&display=swap" rel="stylesheet">
</head>

<body>


    <nav class="navbar mynav">
        <div class="mydiv">
            <span><img src="../../img/doomslogo.png" width="80" height="80" class="d-inline-block align-top"
                    href=""></span>
            <a id="techvalley" href="../../index.php">
                DOOMSDAY 2019
            </a>
            <ul>
                <li>Home</li>
                <li>Team</li>
                <li> <a href="../participant/participate_form.php">Participate</a> </li>
            </ul>
        </div>

    </nav>
    <!--PAGE CONTENT STARTS-->
    <div class="container mcontainer">
        <!--FORM STARTS-->
        <center>
            <h2>Operator Login</h2>
            <!-- form -->
            <form action="operator_login_try.php" method="post">

                <div class="form group-row">
                    <span><img src="../../img/perm_id.png"></span>
                    <input placeholder="Operator Name" type="text" name="input_name" class="form-control col-sm-4" required>
                </div>
                <br>
                <div class="form group-row">
                    <span><img src="../../img/lock_open.png"></span>
                    <input placeholder="Operator Password" type="password" name="input_pass" class="form-control col-sm-4" required>
                </div>
                <br>
                <div class="form group-row">
                    <button type="submit" class="form-control col-sm-4 btn-warning"><strong>Login</strong></button>
                </div>
                <br>
                <div class="form group-row">
                    <?php
                        if(isset($_GET["Message"]))
                        {
                            echo "<div class='col-sm-4 alert alert-danger'>";
                            echo $_GET["Message"];
                            echo "</div>";
                        }
                    ?>
                </div>

            </form>
        </center>

    </div>
    <!--PAGE CONTENT ENDS HERE-->

    <footer class="foot" style="background: #020002">
        <div class="row align-center copyright">
            <div class="col-sm-12" align="center" style="color:whitesmoke">
                <br>
                <h3>&copy;DOOMSDAY 2019 - Designed & Developed by <a href="https://imharis.wordpress.com/" target="_blank">Haris Noori</a> & <a href="https://www.facebook.com/haider.tamsil" target="_blank">Haider Tamsil</a></h3>
                <!-- <p><img src="../images/footer.png" id ="img_footer"></span></p> -->
            </div>
        </div>
    </footer>


    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>