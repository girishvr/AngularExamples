<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>

    $( document ).ready(function() {
    
              /*alert(screen.width);*/
              var div1 = document.getElementById("jssor_1");
              var div2 = document.getElementById("slides_1");
              div1.style.width = screen.width+20+"px";
              div2.style.width = screen.width+20+"px";


               if(screen.width > 1500 && screen.width <= 2000){
                div1.style.height = 760+"px";
                div2.style.height = 550+"px";
                document.getElementById("slides_1").style.marginTop = "90px";
              }

              if(screen.width > 1400 && screen.width <= 1500){
                div1.style.height = 760+"px";
                div2.style.height = 550+"px";
                document.getElementById("slides_1").style.marginTop = "86px";
              }
              if(screen.width <= 1400){
                div1.style.height = 660+"px";
                div2.style.height = 500+"px";
                document.getElementById("slides_1").style.marginTop = "60px";
              }
              
    });





        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: false,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 0,
                $SpacingY: 0,
                $Align: 330
              }

            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            /*function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);*/
            //responsive code end
        });
    </script>

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="css/examples.css" />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/portfolio.css">

 

 

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="js/examples.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['white', 'white', 'white', 'white', 'white','white','white'],
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', '5thpage','portfolio','6thpage'],
                menu: '.menu',
                scrollingSpeed: 800
            });

        });
    </script>

<!--<script type="text/javascript">
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
-->

<!-- Sliding effect to the form when clicked on button -->
<body style="background-color:black">

<div id="fullpage">
    

 <div class="section" id="section1">

<div id="jssor_1" style="position: relative; margin-top:-55px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <!-- <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('/theme/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div> -->
        
        <div data-u="slides" id="slides_1" style="cursor: default; position: relative; margin-left:-20px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black;">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building1.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building1.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building2.jpg"></img>
                        
                    </div>
                </div>
                <img data-u="thumb" src="images/building2.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building3.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building3.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                      <img style="object-fit:contain;width:700px;height:700px" src="images/building4.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building4.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building5.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building5.jpg" />
            </div>





           <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black;">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building1.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building1.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building2.jpg"></img>
                        
                    </div>
                </div>
                <img data-u="thumb" src="images/building2.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building3.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building3.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                      <img style="object-fit:contain;width:700px;height:700px" src="images/building4.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building4.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row">
                        <img style="object-fit:contain;width:700px;height:700px" src="images/building5.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="images/building5.jpg" />
            </div>

        </div>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" class="jssort03" id="jssort_3" style="margin-left:-8px !important;position:absolute;bottom:20px;width:900px;height:60px;background-color:black" data-autocenter="1">
            <div style="filter:alpha(opacity=30.0); opacity:0.3;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class="w">
                        <div u="thumbnailtemplate" style="object-fit:contain;" class="t"></div>
                    </div>
                    <div class="c" style=""></div>
                </div>

            </div>
            <!-- Thumbnail Item Skin End -->


                <!-- Arrow Navigator -->
                <img data-u="arrowleft" class="jssora02l" src="images/left-arrow.png" style="object-fit:contain;width:55px;height:55px;" data-autocenter="2"></span>
                <img data-u="arrowright" class="jssora02r" src="images/right_arrow.png" style="object-fit:contain;width:55px;height:55px;" data-autocenter="2"></span>
                
        </div>
        
    </div>
</div>


</body>
</html>
