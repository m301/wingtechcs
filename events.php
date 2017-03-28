
<html>
<head>

    <title>Events : Wingtech</title>
	<?php include "head.inc"; ?>
    <!-- Custom CSS -->
    <link href="assets/css/homepage.css" rel="stylesheet">

</head>
<body>
<?php include "nav.inc";?>
<p>
<hr>
<?php
include "include/config.db.php";
$conn=getMYSQLIConnection();?>
<div class="container">
    <div class="row">

        <div class="jumbotron" style="background-color:rgba(0,0,0,0.25);padding: 5px 10px 10px 20px;
	color: #f0e6db;
	margin:10px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-6 col-md-9 text-center">
                        <div class="page-header " style="    margin: 22px 0 21px;">

                            <h1>Events</h1>
                        </div>
                        <p>
                            Feel what it is to be like in a great event.
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="form-group" style="padding: 70px 0 0 0;">
                            Dont want to miss any event ?
                            <button type="submit" class="btn btn-success">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header">

            <h2><strong>
                <center>UPCOMING EVENTS</center>
            </strong></h2>
        </div>
        <div class="container">
            <div class="row">
			<?php
			//for($l=0;$l<$i;$l++)
				$answer=mysqli_query($conn,'SELECT * FROM events_info ');
			while($output=mysqli_fetch_array($answer,MYSQL_NUM))
               echo '<div class="col-lg-4 col-sm-12">
                    <img src="'.$output[1].'" height="100px" width="300px">
                    <h3><b>'.$output[2].'</b></h3>
                    BBD campus,<br>
                    BBDU,Lucknow.<br><br>'
                    .$output[3].'<br>
                    <a href="'.$output[4].'">LEARN MORE..</a>
                </div>';
				?>

            </div>
        </div>
    </div>
    <br/>



<?php include "footer.inc";?>
</div>
</body>
</html>
