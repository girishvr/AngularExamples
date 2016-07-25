<!DOCTYPE html>
<html lang="en">
<head>



<style type="text/css">
ul 
{
    list-style-type: none;
    padding-left: 0px !important;
}

ul li span { 
    float: left;
    width: 30px !important;
}
</style>
  <title>Team,Bitjini</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="images/logo.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/team.css">
  <!-- JAVASCRIPT TO SHOW & HIDE THE SPECIFIC ELEMENTS AT SPECIFIC SCREEN SIZE-->
  <script type="text/javascript">
  window.onresize = function(event) {
  	if(event.currentTarget.outerWidth >= 767){
  		console.info("showing");
  		$("#call_us").show();
  	}else{
  		console.info("hiding");
  		$("#call_us").hide();
  	}
  }
  </script>
<!-- END OF JAVASCRIPT TO SHOW & HIDE THE SPECIFIC ELEMENTS AT SPECIFIC SCREEN SIZE-->

<script type="text/javascript">
$(document).ready(function() {
$("#popup1").hide();
  
});

function showhide()
     {
           var div = document.getElementById("popup1");
    if (div.style.display !== "none") {
        div.style.display = "none";
    }
    else {
        div.style.display = "block";
    }
     }

  </script>
</head>
<body>

<?php 


if($_POST['name'] != '' && $_POST['email'] != '' && $_POST['phone'] != '' && $_POST['project_description'] != ''){
$url = 'https://bitjini-website.herokuapp.com/users/';
$data = array('name' => $_POST['name'],'email' => $_POST['email'],'phone' => $_POST['phone'],'project_description' => $_POST['project_description'],'domain' => $_POST['r1']);
$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data),
  ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$arr = json_decode($result,true);
if($arr != ''){
  echo "<script type='text/javascript'>alert('Thank you for contacting Bitjini.');</script>";
}

}



?>


	<div class="container-fluid" style="width:100%;">
		<nav class="navbar navbar-default" style="background:transparent;">
      <!--<div class="row" style="background-color:#FFFFFF; height:25px;"><p style="margin-right:150px;text-align:right;font-family:sans-serif;font-size:14px;color:#67B2FD;">Call Us: +91-888-037-4442<p></div>  -->
      <div class="container-fluid">
            <!--   new contact -->
            
             <!-- new contact ends here -->

        <div class="navbar-header">



          
          <button type="button" class="navbar-toggle btn btn-circle" data-toggle="collapse" data-target="#myNavbar"></button>
          <a class="navbar-brand" href="http://bitjini.com/">
            <img src="images/bitjini_apps_more_logo.png" id="logo"/>


            
          </a>


        </div>
        
      </div>
      <h4>Our Team</h4>
    </nav>



        <!-- DIVISION to add TEAM Members -->
		<!-- team photo's div begins here -->
			<div class="container" id="team_photos"><!-- container begins here -->
				<div class="row" id="row_for_team_photos"><!-- row begins here -->
					<div class="col-xs-3" id="frame">
						<img src="photos/Girish.jpg" id="photo" class="img-circle" alt="120x120">
						<p id="person_name">Girish</p><p id="designation">Director Technology</p>
						<div class="row" style="padding:1%;">
							
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/girish-rathod-756aa725">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a href="#">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a href="#">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-3" id="frame">
						<img src="photos/Supreet.jpg" id="photo" class="img-circle " alt="120x120">
						<p id="person_name">Supreet</p><p id="designation">Director Marketing</p>
						<div class="row" style="padding:1%;">
							
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/supreetdixit">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a href="#">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/supreet.dixit?fref=ts">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-3" id="frame">
						<img src="photos/Rohit.jpg" id="photo" class="img-circle" alt="120x120">
						<p id="person_name">Rohit</p><p id="designation">Director UI/UX</p>
						<div class="row" style="padding:1%;">
							
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/rohit-sejekan-b072a11a">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://twitter.com/rohit_sejekan">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/rohit.sejekan?fref=ts">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-3" id="frame">
						<img src="photos/Maseerah.jpg" id="photo" class="img-circle" alt="120x120">
						<p id="person_name">Maseerah</p><p id="designation">Web Analyst</p>
						<div class="row" style="padding:1%;">
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/maseerah-muradabadi-b82429103">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://twitter.com/Maseerah23">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/Maseerah.Muradabadi?fref=ts">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-3" id="frame">
						<img src="photos/Muqtadir.jpeg" id="photo" class="img-circle" alt="120x120">
						<p id="person_name">Muqtadir</p><p id="designation">iOS Developer</p>
						<div class="row" style="padding:1%;">
							
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://in.linkedin.com/in/muqtadir-ahmed-87b484118">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a href="#">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/muqtadirrox247?fref=ts">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-3" id="frame">

						<img src="photos/Nagaraj.jpg" id="photo" class="img-circle" alt="120x120">
						<p id="person_name">Nagaraj</p><p id="designation">Front-end Developer</p>
						<div class="row" style="padding:1%;">
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/nagaraj-kumbaragoppa-5b7a51101">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://twitter.com/TwitNagaraj">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a href="#">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-3" id="frame">
						<img src="photos/Pooja.jpg" id="photo" class="img-circle img-responsive" alt="120x120">
						<p id="person_name">Pooja</p><p id="designation">Back-end Developer</p>
						<div class="row" style="padding:1%;">
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/pooja-pauskar-ab9607105">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://twitter.com/pooja_pauskar">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/pooja.pauskar">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-xs-3" id="frame">
						<img src="photos/Shradha.jpg" id="photo" class="img-circle img-responsive" alt="120x120">
						<p id="person_name">Shradha</p><p id="designation">Android Developer</p>
						<div class="row" style="padding:1%;">
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/shradha-gurjar-67b933b2">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="#">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/shradha.gurjar?fref=ts">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-3" id="frame">

						<img src="photos/Spoorthi.jpg" id="photo" class="img-circle img-responsive" alt="120x120">
						<p id="person_name">Spoorthi</p><p id="designation">Android Developer</p>

						<div class="row" style="padding:1%;">
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/spoorthi-h-r-2b9886103">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a href="#">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/spoorthihr?fref=ts">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
						</div>
					</div>
					
					
					<div class="col-xs-3" id="frame">
						<img src="photos/Uzma.jpg" id="photo" class="img-circle" alt="120x120">
						<p id="person_name">Uzma</p><p id="designation">iOS Developer</p>
						<div class="row" style="padding:1%;">
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/uzma-desai-99728583">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://twitter.com/UzmaDesai">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.facebook.com/uzma.desai.315?fref=ts">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-xs-3" id="frame">
						<img src="photos/veena.jpg" id="photo" class="img-circle" alt="120x120">
						<p id="person_name">Veena</p><p id="designation">Android Developer</p>
						<div class="row" style="padding:1%;">
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://www.linkedin.com/in/veena-mawarkar-33746b63">
									<img src="images/form_social_linked.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a target="blank" href="https://twitter.com/veena14cs">
									<img src="images/form_social_twitter.png" class="center-block">
								</a>
							</div>
							<div class="col-xs-4" id="small_frame">
								<a href="#">
									<img src="images/form_social_facebook.png" class="center-block">
								</a>
							</div>
						</div>
					</div>
					
					
					
					
				</div><!-- row ends here -->
	</div><!-- MAIN Container Ends Here  -->
</body>
</html>