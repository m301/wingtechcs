<html>
<head>
	<title>News : Wingtech</title>
	<?php include "head.inc"; ?>
    <!-- Custom CSS -->
    <link href="assets/css/homepage.css" rel="stylesheet">

</head>
<body>
<?php include "nav.inc"; ?>
<p>
<hr>
<?php include "include/config.db.php";
$conn=getMYSQLIConnection(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">


            <div class="row">
                <div class="col-lg-12">
                    <h1>Because We like to be in news</h1>
                    <hr class="divider">
                </div>
            </div>
            <div class="container">
			<?php
			//for($l=0;$l<$i;$l++)
				$answer=mysqli_query($conn,'SELECT * FROM news_info ;');
			while($output=mysqli_fetch_array($answer,MYSQL_NUM))
                echo '<div class="row bg-2">
                    <div class="col-lg-4">
                        <div class="img-box">
                            <img class="img-responsive" src="'.$output[1].'"></img></div>
                    </div>
                    <div class="col-lg-8">
                        <h3>'.$output[2].'</h3>
                        <ul>
                            <li>'.$output[3].'</li>
                            <li>'.$output[4].'</li>
                            <li>#3</li>
                        </ul>
                    </div>
                </div>';
			?>
            </div>
        </div>
    </div>
    <br/>
    <?php include "footer.inc"; ?>
</div>

</body>
</html>
