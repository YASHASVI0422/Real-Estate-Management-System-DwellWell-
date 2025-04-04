<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");							
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="shortcut icon" href="images/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<title>Real Estate PHP</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
		<?php include("include/header.php");?>

        <div class="full-row">
            <div class="container">
				<div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Agent</h2>
                        </div>
                </div>
                <div class="row">
                    <?php 
							$query=mysqli_query($con,"SELECT * FROM user WHERE utype='agent'");
								while($row=mysqli_fetch_array($query))
								{
                            ?>
                            
                    <div class="col-md-6 col-lg-4">
                        <div class="hover-zoomer bg-white shadow-one mb-4">
                            <div class="overflow-hidden"> <img src="admin/user/<?php echo $row['6'];?>" alt="aimage"> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-success"><a href="#"><?php echo $row['1'];?></a></h5>
                                <span>Real Estate - Agent</span> </div>
                        </div>
                    </div>
                   
                    <?php } ?>
                
                  
                </div>
            </div>
        </div>
        <?php include("include/footer.php");?>
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div> 
<script src="js/jquery.min.js"></script> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 

<script src="js/custom.js"></script>
</body>

</html> 