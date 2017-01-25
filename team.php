<html>
<head>
    <title>Team : Wingtech</title>
	<?php include "head.inc"; ?>
    <!-- Custom CSS -->
    <link href="assets/css/homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/teamcss.css">
</head>
<body>
<?php include "nav.inc"; ?>
<p>
<hr>
<!--TEAM PAGE-->
<?php include "team_data.php";
$i=count($team['core']);
$j=count($team['technical']);
$k=count($team['management']);
?>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-lg-12">
                <h2><b>Meet The Team</b></h2>
                <p>WingTech is comprised of ultra-talented and experienced designers, developers and programmers.
                    Learn more about each person by reading their descriptions below:</p>
                <hr>
				<div class="row pt-md">
					<?php
						$off=floor((12-3*$i)/2);
						for($l=0;$l<$i;$l++)
						echo '<div class="col-lg-offset-'.$off.' col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                        <div class="img-box">
                            <img src=" '.$team['core'][$l]['photo'].'" class="img-responsive">
                            <ul class="text-center">
                                <a href="'.$team['core'][$l]['twt'].'">
                                    <li><i class="fa fa-facebook"></i></li>
                                </a>
                                <a href="'.$team['core'][$l]['twt'].'">
                                    <li><i class="fa fa-twitter"></i></li>
                                </a>
                                <a href="'.$team['core'][$l]['in'].'">
                                    <li><i class="fa fa-linkedin"></i></li>
                                </a>
                            </ul>
                        </div>
                        <h1>'.$team['core'][$l]['name'].'</h1>
                        <h2>'.$team['core'][$l]['desig'].'</h2>
                        <p>'.$team['core'][$l]['year'].' Year</p>
                    </div>'	
							
							
					?>
                    

                    <!--- for breaking line---->

                </div>
                <div class="row pt-md">
                    <hr>
                    <h3>
                        <ul><b>Technical Team</b></ul>
                    </h3>
					<?php
					for($l=0;$l<$j;$l++)
					{ 
						echo '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                        <div class="img-box">
                            <img src=" '.$team['technical'][$l]['photo'].'" class="img-responsive">
                            <ul class="text-center">
                                <a href="'.$team['technical'][$l]['twt'].'">
                                    <li><i class="fa fa-facebook"></i></li>
                                </a>
                                <a href="'.$team['technical'][$l]['twt'].'">
                                    <li><i class="fa fa-twitter"></i></li>
                                </a>
                                <a href="'.$team['technical'][$l]['in'].'">
                                    <li><i class="fa fa-linkedin"></i></li>
                                </a>
                            </ul>
                        </div>
                        <h1>'.$team['technical'][$l]['name'].'</h1>
                        <h2>'.$team['technical'][$l]['desig'].'</h2>
                        <p>'.$team['technical'][$l]['year'].' Year</p>
                    </div>'	;
							
							
					}
					?>
      

                    <!--- for breaking line---->
                </div>
                <div class="row pt-md">
                    <hr>
                    <h3>
                        <ul><b>Management Team</b></ul>
                    </h3>
					<?php
					for($l=0;$l<$k;$l++)
						echo '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                        <div class="img-box">
                            <img src=" '.$team['management'][$l]['photo'].'" class="img-responsive">
                            <ul class="text-center">
                                <a href="'.$team['management'][$l]['twt'].'">
                                    <li><i class="fa fa-facebook"></i></li>
                                </a>
                                <a href="'.$team['management'][$l]['twt'].'">
                                    <li><i class="fa fa-twitter"></i></li>
                                </a>
                                <a href="'.$team['management'][$l]['in'].'">
                                    <li><i class="fa fa-linkedin"></i></li>
                                </a>
                            </ul>
                        </div>
                        <h1>'.$team['management'][$l]['name'].'</h1>
                        <h2>'.$team['management'][$l]['desig'].'</h2>
                        <p>'.$team['management'][$l]['year'].' Year</p>
                    </div>'	
					?>
                    

                </div>
            </div>
        </div>
    </div>
    <br/>
    <?php include "footer.inc"; ?>
	
	<script src="assets/js/homepage.js"></script>
</div>

</body>
</html>
