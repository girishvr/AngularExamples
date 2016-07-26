<html>
  <head>
    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <link rel="stylesheet" href="css/gallery.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



    <script type="text/javascript" src="detail_view/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="detail_view/js/jssor.slider.mini.js"></script>
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

    <link rel="stylesheet" type="text/css" href="detail_view/css/jquery.fullPage.css" />
<!--     <link rel="stylesheet" type="text/css" href="detail_view/css/examples.css" />

    <link rel="stylesheet" href="detail_view/bootstrap/css/bootstrap.min.css"> -->
  <script src="detail_view/bootstrap/js/jquery.min.js"></script>
  <script src="detail_view/bootstrap/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="detail_view/css/portfolio.css">

 

 

    <script src="detail_view/js/jquery.min.js"></script>
    <script src="detail_view/js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="detail_view/js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="detail_view/js/examples.js"></script>
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



  <style type="text/css">
 @import url('css/fonts.css');
  .mdl-cell {
  box-sizing: border-box;
 /* background-color: #BDBDBD;*/
  /*height: 2000px;*/
  padding-left: 8px;
  padding-top: 4px;
  color: white;
}
.first{
  height: 250px;
}
#img1{
	height:250px;
	object-fit:fill !important;
	width:420px;
	margin-top: -0.7%;
	margin-left: -4%;
}
h1{
	font-size:17px;
	color:black;
	margin-top: -14px;
	margin-left: -57px;
	text-align: right !important;
	font-family: Roboto-Medium;
}
h6{
	font-size:12px;
	color:black;
	margin-top: -39px;
	margin-left: 34px;
	text-align: right !important;
	font-family: Roboto-Medium;
}
h3{
	font-size:14px;
	margin-top: -33px;
	color:black;
	font-family: Roboto-Medium;
}
h2{
	font-size:16px;
	margin-top: -50px;
	color:black;
	font-family: Roboto-Medium;
}
h5{
	font-size:12px;
	margin-top: -70px;
	color:black;
	font-family: Roboto-Medium;
}
table{
	margin-top: -70px;


}
th{
	background-color: red;
	border-right: 1px solid white;
	font-family: Roboto-Medium;

}
td{
	/*border-bottom:1px solid #E8E8E8;*/
	font-family: Roboto-Medium;
	color:black;
}
button{
	color:red ;


}
.button1{
/*	margin-left: 40px;*/
}
.scrollit {
    overflow:scroll;
    height:100px;
}

table {
   /* width: 716px;*/ /* 140px * 5 column + 16px scrollbar width */
    /*border-spacing: 0;*/
}

tbody, thead tr { display: block; }

tbody {
    height: 140px;
    overflow-y: auto;
    overflow-x: hidden;
}




  </style>
  </head>
 <body>
    <!-- Uses a header that contracts as the page scrolls down. -->
    <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--waterfall">
        <!-- Top row, always visible -->
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">360 Property</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon"
                   for="waterfall-exp">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" name="sample"
                     id="waterfall-exp">
            </div>
          </div>
        </div>
        <!-- Bottom row, not visible on scroll -->
        <div class="mdl-layout__header-row">
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Gallery</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Gallery</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">

          <div class="container"  style="border-top:2px solid #E0E0E0;border-bottom:2px solid #E0E0E0">
            <div class="mdl-grid" style="margin-top:20px">
              
              <div class="mdl-cell mdl-cell--4-col first">
               <button id="show-dialog" style="width:420px;height:250px" type="button" class="mdl-button">
                <img id="img1" src="images/apartments1.jpg"></img>
               </button>
              </div>
              
              <div class="mdl-cell mdl-cell--6-col first">
                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--1-col">
                  <img style="height:40px;width:40px;margin-top:-24px" src="images/favorite.png"></img>
                  </div>

                  <div class="mdl-cell mdl-cell--11-col">
                  <h3>Magnolia Realty</h3>
                  <h2>Prestige</h2>
                  </div>
                </div>

                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--1-col">
                  </div>
                  <div class="mdl-cell mdl-cell--1-col">
                  <img style="height:20px;width:20px;margin-top:-74px" src="images/location.png"></img>
                  </div>
				  <div class="mdl-cell mdl-cell--10-col">
                  <h5 style="margin-left:-30px">Rajarhat Kolkate</h5>
                  </div>
                </div>




                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th style="width:190px" class="mdl-data-table__cell--non-numeric">Property</th>
                      <th style="width:120px" class="mdl-data-table__cell--non-numeric">Size</th>
                      <th style="width:120px" class="mdl-data-table__cell--non-numeric">BSP</th>
                      <th style="width:150px" class="mdl-data-table__cell--non-numeric">New price</th>
                    </tr>
                  </thead>


                  <tbody>
                  <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T Flat/Apartments</td>
                      <td>814.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 21.98 Lacs</td>

                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T Flat/Apartments</td>
                      <td>819.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 22.11 Lacs</td>
                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T</td>
                      <td>895.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 22.55 Lacs</td>
                    </tr>

                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T Flat/Apartments</td>
                      <td>814.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 21.98 Lacs</td>

                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T Flat/Apartments</td>
                      <td>819.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 22.11 Lacs</td>
                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T</td>
                      <td>895.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 22.55 Lacs</td>
                    </tr>

                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T Flat/Apartments</td>
                      <td>814.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 21.98 Lacs</td>

                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T Flat/Apartments</td>
                      <td>819.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 22.11 Lacs</td>
                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">2BHK 2T</td>
                      <td>895.00 sq. ft</td>
                      <td>Rs. 2700/sq. ft</td>
                      <td>Rs. 22.55 Lacs</td>
                    </tr>
                    
                  </tbody>
                </table>
            </div>
      


      <div style="margin-bottom:40px" class="mdl-cell mdl-cell--2-col first">
        <div class="mdl-grid">
          <h1>Rs. 21.98 Laks - Rs. 34.40 Laks</h1> 
        </div>

        <div class="mdl-grid">
          <h6>POSSESSION Jun 2016</h6>
        </div>

        <div style="margin-top:-20px" class="mdl-grid button1">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Enquiry
          </button>
        </div>

        <div class="mdl-grid button1">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            View Details
          </button>
        </div>

        <div class="mdl-grid button1">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Add To Compare
          </button>
        </div>

        <div class="mdl-grid button1">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            smartCal
          </button>
        </div>
      </div>

      </div>


<!-- <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button> -->
  <dialog class="mdl-dialog">








  <!--   <h4 style="color:red;font-size:14px;margin-top:-10px" class="mdl-dialog__title close">X</h4> -->

  <img src="images/clear_white_x.png" style="margin-top:-15px" class="mdl-dialog__title close"></img>
   <!--  <div class="mdl-dialog__content">
      <p>
        Allowing us to collect data will let us get you the information you want faster.
      </p>
    </div> -->

    <div class="mdl-dialog__actions">
      <button style="text-color:red;font-size:8px;position:relative;" type="button" class="mdl-button close">
      	<img src="clear_white_x.png"></img>
      </button>
    </div>


    <div id="jssor_1" style="position: relative; margin-top:-61px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <!-- <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('/theme/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div> -->
    

        <div data-u="slides" id="slides_1" style="cursor: default; position: relative; margin-left:-20px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black;">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building1.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building1.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building2.jpg"></img>
                        
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building2.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building3.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building3.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                      <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building4.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building4.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building5.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building5.jpg" />
            </div>





           <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black;">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building1.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building1.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building2.jpg"></img>
                        
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building2.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building3.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building3.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                      <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building4.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building4.jpg" />
            </div>
            
            <div data-p="112.50" style="display: none;">
                <div data-u="image" style="background-color:black">
                    <div class="row" style="text-align:center">
                        <img style="object-fit:contain;width:700px;height:700px" src="detail_view/images/building5.jpg"></img>
                    </div>
                </div>
                <img data-u="thumb" src="detail_view/images/building5.jpg" />
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
                <img data-u="arrowleft" class="jssora02l" src="detail_view/images/left.png" style="object-fit:contain;width:55px;height:55px;" data-autocenter="2"></span>
                <img data-u="arrowright" class="jssora02r" src="detail_view/images/left.png" style="transform: rotate(180deg); object-fit:contain;width:55px;height:55px;" data-autocenter="2"></span>
                
        </div>

        
    </div>










    <!-- <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button">Agree</button>
      <button type="button" class="mdl-button close">Disagree</button>
    </div> -->












  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>


        </div>
      </main>
    </div>





  </body>
</html>