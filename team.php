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
//$i=count($team['core']);
//$j=count($team['technical']);
//$k=count($team['management']);

include "conn_team.php";
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
					$result=mysqli_query($conn,'SELECT * FROM team_profile WHERE roll="core"');
						
						//$off=floor((12-3*$i)/2);
						//if($row)
							//echo 'HURRAY!';
							while($row=mysqli_fetch_array($result,MYSQL_NUM))
					
						echo '<div class=" col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                        <div class="img-box">
                            <img src="'.$row[8].'" class="img-responsive">
                            <ul class="text-center">
                                <a href="'.$row[5].'">
                                    <li><i class="fa fa-facebook"></i></li>
                                </a>
                                <a href="'.$row[6].'">
                                    <li><i class="fa fa-twitter"></i></li>
                                </a>
                                <a href="'.$row[7].'">
                                    <li><i class="fa fa-linkedin"></i></li>
                                </a>
                            </ul>
                        </div>
                        <h1>'.$row[1].'</h1>
                        <h2>'.$row[2].'</h2>
                        <p>'.$row[3].' Year</p>
                    </div>'	
							
							
					?>
                    

                    

                </div>
                <div class="row pt-md">
                    <hr>
                    <h3>
                        <ul><b>Technical Team</b></ul>
                    </h3>
					<?php
					$result=mysqli_query($conn,'SELECT * FROM team_profile WHERE roll="technical"');
						
					
							while($row=mysqli_fetch_array($result,MYSQL_NUM))
					
						echo '<div class=" col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                        <div class="img-box">
                            <img src="'.$row[8].'" class="img-responsive">
                            <ul class="text-center">
                                <a href="'.$row[5].'">
                                    <li><i class="fa fa-facebook"></i></li>
                                </a>
                                <a href="'.$row[6].'">
                                    <li><i class="fa fa-twitter"></i></li>
                                </a>
                                <a href="'.$row[7].'">
                                    <li><i class="fa fa-linkedin"></i></li>
                                </a>
                            </ul>
                        </div>
                        <h1>'.$row[1].'</h1>
                        <h2>'.$row[2].'</h2>
                        <p>'.$row[3].' Year</p>
                    </div>'	
					?>
      

                    
                </div>
                <div class="row pt-md">
                    <hr>
                    <h3>
                        <ul><b>Management Team</b></ul>
                    </h3>
					<?php
					$result=mysqli_query($conn,'SELECT * FROM team_profile WHERE roll="management"');
						
	
							while($row=mysqli_fetch_array($result,MYSQL_NUM))
					
						echo '<div class=" col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                        <div class="img-box">
                            <img src="'.$row[8].'" class="img-responsive">
                            <ul class="text-center">
                                <a href="'.$row[5].'">
                                    <li><i class="fa fa-facebook"></i></li>
                                </a>
                                <a href="'.$row[6].'">
                                    <li><i class="fa fa-twitter"></i></li>
                                </a>
                                <a href="'.$row[7].'">
                                    <li><i class="fa fa-linkedin"></i></li>
                                </a>
                            </ul>
                        </div>
                        <h1>'.$row[1].'</h1>
                        <h2>'.$row[2].'</h2>
                        <p>'.$row[3].' Year</p>
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
