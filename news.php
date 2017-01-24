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
<!--TEAM PAGE-->
<?php 
$news=array(
        array('eventname1','26th of November,2017','/regiter.php'),
		array('eventname2','28th of December,2017','/regiter.php'),
		array('eventname3','11th of January,2017','/regiter.php')
		);
echo'<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">


            <div class="row">
                <div class="col-lg-12">
                    <h1>Because We like to be in news</h1>
                    <hr class="divider">
                </div>
            </div>
            <div class="container">
                <div class="row bg-2">
                    <div class="col-lg-4">
                        <div class="img-box">
                            <img class="img-responsive" src="assets\images\news.jpg"></img></div>
                    </div>
                    <div class="col-lg-8">
                        <h3>'.$news[0][0].'<h3>
                        <ul>
                            <li>'.$news[0][1].'</li>
                            <li>'.$news[0][2].'</li>
                            <li>#3</li>
                        </ul>
                    </div>
                </div>

                <div class="row bg-2">
                    <div class="col-lg-4">
                        <div class="img-box">
                            <img class="img-responsive" src="assets\images\news.jpg"></img></div>
                    </div>
                    <div class="col-lg-8">
                        <h3>'.$news[1][0].'</h3>
                        <ul>
                            <li>'.$news[1][1].'</li>
                            <li>'.$news[1][2].'</li>
                            <li>#3</li>
                        </ul>
                    </div>
                </div>

                <div class="row bg-2">
                    <div class="col-lg-4">
                        <div class="img-box">
                            <img class="img-responsive" src="assets\images\news.jpg"></img></div>
                    </div>
                    <div class="col-lg-8">
                        <h3>'.$news[2][0].'</h3>
                        <ul>
                            <li>'.$news[2][1].'</li>
                            <li>'.$news[2][2].'</li>
                            <li>#3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>';
	?>
    <?php include "footer.inc"; ?>
</div>

</body>
</html>
