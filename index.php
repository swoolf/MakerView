<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
     <?php 
        $pics1 = glob("content1/loc1/*.jpg");
        $last_pic1 = count($pics1)-1;
        $pics2 = glob("content1/loc2/*.jpg");
        $last_pic2 = count($pics2)-1;
        $pics3 = glob("content1/woodshop/*.jpg");
        $last_pic3 = count($pics3)-1;
        $pics4 = glob("content1/loc4/*.jpg");
        $last_pic4 = count($pics4)-1;
        $pics5 = glob("content1/lego/*.jpg");
        $last_pic5 = count($pics4)-1;
        $pics6 = glob("content1/jakarta/*.jpg");
        $last_pic6 = count($pics4)-1;
        ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>KeyHole</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand active" href="http://130.64.98.182/owncloud_data/webdocs/">
                	<span class="glyphicon glyphicon-camera active"></span> 
                	KeyHole
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://130.64.98.182/owncloud_data/webdocs/live.php">LiveView</a>
                    </li>
                   
                    <li>
                        <a href="http://130.64.98.182/owncloud_data/webdocs/analytics.html">Analytics</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Content -->
    <div class="container">

        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">KeyHole
                    <small>Take a peek into Tufts' Maker Spaces</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                
                    <img  id="img1" src="<?php echo $pics1[$last_pic1]; ?>" height="200">
                
                <h3>
                    <a href="#">200BostonAve</a>
                </h3>
            </div>
            
            <div class="col-md-4 portfolio-item">
                
                    <img id="img2"  src="<?php echo $pics2[$last_pic2]; ?>"  height="200"/>
                
                <h3>
                    <a href="#">574BostonAve</a>
                </h3>
            </div>
             <div class="col-md-4 portfolio-item">
                
                    <img id="img3"  src="<?php echo $pics3[$last_pic3]; ?>"  height="200"/>
                
                <h3>
                    <a href="#">CraftCenter</a>
                </h3>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                
                    <img id="img4"  src="<?php echo $pics4[$last_pic4]; ?>"  height="200"/>
            
                <h3>
                    <a href="#">GradStudentCloset</a>
                </h3>
            </div>
            <div class="col-md-4 portfolio-item">
                
                    <img id="img5"  src="<?php echo $pics5[$last_pic5]; ?>"  height="200"/>
                
                <h3>
                    <a href="#">LEGO</a>
                </h3>
            </div>
             <div class="col-md-4 portfolio-item">
                
                    <img id="img6"  src="<?php echo $pics6[$last_pic6]; ?>"  height="200"/>
            
                <h3>
                    <a href="#">Jakarta</a>
                </h3>
            </div>
        </div>
    </div>
    
    <!-- /.container -->
	
	<footer>
		
        <div class="copyright">
        	<div class="container">
        		<p>Sam Woolf - 2016</p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
<script>
         function displayNextImage(imgid) {
              x = (x === images1.length - 1) ? 0 : x + 1;
            if (imgid == "img1"){document.getElementById(imgid).src = images1[x];}
             if (imgid == "img2"){document.getElementById(imgid).src = images2[x];}
             if (imgid == "img3"){document.getElementById(imgid).src = images3[x];}
             if (imgid == "img4"){document.getElementById(imgid).src = images4[x];}
             if (imgid == "img5"){document.getElementById(imgid).src = images5[x];}
             if (imgid == "img6"){document.getElementById(imgid).src = images6[x];}
                                  }
        function startTimer(id) {
              displayNextImage(id);
              Show = setInterval(function() {displayNextImage(id)}, 500);}
        function stopTimer() {clearInterval(Show);}
         
        
        document.getElementById("img1").onmouseover = function() {startTimer("img1")};
        document.getElementById("img1").onmouseout = function() {stopTimer()};
        document.getElementById("img2").onmouseover = function() {startTimer("img2")};
        document.getElementById("img2").onmouseout = function() {stopTimer()};
        document.getElementById("img3").onmouseover = function() {startTimer("img3")};
        document.getElementById("img3").onmouseout = function() {stopTimer()};
        document.getElementById("img4").onmouseover = function() {startTimer("img4")};
        document.getElementById("img4").onmouseout = function() {stopTimer()};
        document.getElementById("img5").onmouseover = function() {startTimer("img5")};
        document.getElementById("img5").onmouseout = function() {stopTimer()};
        document.getElementById("img6").onmouseover = function() {startTimer("img6")};
        document.getElementById("img6").onmouseout = function() {stopTimer()};
        
          var Show;
          var images1 = []; 
          var images2 = [];
          var images3 = [];
          var images4 = [];
          var images5 = [];
          var images6 = [];
          var x = -1;
          images1[0] = "<?php echo $pics1[$last_pic1]; ?>";
          images1[1] = "<?php echo $pics1[$last_pic1-1]; ?>" ;
          images1[2] = "<?php echo $pics1[$last_pic1-2]; ?>" ;
          images2[0] = "<?php echo $pics2[$last_pic2]; ?>" ;
          images2[1] = "<?php echo $pics2[$last_pic2-1]; ?>" ;
          images2[2] = "<?php echo $pics2[$last_pic2-2]; ?>" ;
          images3[0] = "<?php echo $pics3[$last_pic3]; ?>" ;
          images3[1] = "<?php echo $pics3[$last_pic3-1]; ?>" ;
          images3[2] = "<?php echo $pics3[$last_pic3-2]; ?>" ;
          images4[0] = "<?php echo $pics4[$last_pic4]; ?>" ;
          images4[1] = "<?php echo $pics4[$last_pic4-1]; ?>" ;
          images4[2] = "<?php echo $pics4[$last_pic4-2]; ?>" ;
          images5[0] = "<?php echo $pics5[$last_pic5]; ?>" ;
          images5[1] = "<?php echo $pics5[$last_pic5-1]; ?>" ;
          images5[2] = "<?php echo $pics5[$last_pic5-2]; ?>" ;
          images6[0] = "<?php echo $pics6[$last_pic6]; ?>" ;
          images6[1] = "<?php echo $pics6[$last_pic6-1]; ?>" ;
          images6[2] = "<?php echo $pics6[$last_pic6-2]; ?>" ;
        //http://www.javascriptkit.com/javatutors/externalphp2.shtml
      </script>
    
</body>
    

</html>
