<html>
  <head>
<!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <link rel="stylesheet" href="css/gallery.css">
   

  <style type="text/css">
  .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
  padding-right: 0;
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
  margin-top: -1%;
}
h1{
  font-size:17px;
  color:gray;
  margin-top: -14px;
  margin-left: -57px;
  text-align: right !important;
}
h6{
  font-size:12px;
  color:gray;
  margin-top: -39px;
  margin-left: 34px;
  text-align: right !important;
}
h3{
  font-size:14px;
  margin-top: -33px;
  color:gray;
}
h2{
  font-size:16px;
  margin-top: -50px;
  color:gray;
}
h5{
  font-size:12px;
  margin-top: -70px;
  color:gray;
}
table{
  margin-top: -70px;


}
th{
  background-color: #E0E0E0;
  border-right: 1px solid #C0C0C0;


}
td{
  /*border-bottom:1px solid #E8E8E8;*/
}
button{
  color:white ;

}
.button1{
/*  margin-left: 40px;*/
}
.scrollit {
    overflow:scroll;
    height:100px;
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
                <img id="img1" src="apartments.jpg"></img>
              </div>
              
              <div class="mdl-cell mdl-cell--6-col first">
                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--1-col">
                  <img style="height:40px;width:40px;margin-top:-24px" src="heart.png"></img>
                  </div>

                  <div class="mdl-cell mdl-cell--11-col">
                  <h3>Magnolia Realty</h3>
                  <h2>Prestige</h2>
                  </div>
                </div>

                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--1-col">
                  </div>
                  <div class="mdl-cell mdl-cell--11-col">
                  <h5>Rajarhat Kolkate</h5>
                  </div>
                </div>




                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th class="mdl-data-table__cell--non-numeric">Property</th>
                      <th>Size</th>
                      <th>BSP</th>
                      <th>New price</th>
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


        </div>
      </main>
    </div>
  </body>
</html>