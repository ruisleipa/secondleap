
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Earth</title>
    <script src="jquery-2.0.0.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script>
      $(function() {
      $( "#tabs" ).tabs();
      });
    </script>

</head>
<body id="earth">
    <div id="wrapper">

      <div id="left-column">
        <h1>Space Station</h1>
        <div id="introduction">
            <p>Choose the items you want to ship to the moon. Plan carefully: resources are limited.</p>
        </div><!--/introduction-->
      </div>
      <div id="right-column">
         <header>
            <h2>Shipment</h2>
            <span class="money">1 500 000 €</span>
         </header><!--/top-bar-->

         <div class="sidetabs earth-item-selection" id="tabs">
            <ul class="nav">

               <li class="active"><a href="#tabs-items">Items</a></li>
               <li><a href="#tabs-robots">Robots</a></li>
               <li><a href="#tabs-resources">Resources</a></li>

            </ul>
            <div class="tab" id="tabs-items">
               <ul>
                  <li>
                     <img width="70" height="70" />
                     <span class="item-title">CMB Maker</span>
                     <a href="#" class="add-item">+</a>
                     <div class="stats">
                       <span class="effect">+2 II</span>
                       <span class="price">10 0000€</span>
                    </div>
                  </li>
                  <li class="active">
                     <img width="70" height="70" />
                     <span class="item-title">CMB Maker</span>
                     <a href="#" class="add-item">+</a>
                     <div class="stats">
                       <span class="effect">+2 II</span>
                       <span class="price">10 0000€</span>
                    </div
                  </li>
                  <li>
                     <img width="70" height="70" />
                     <span class="item-title">CMB Maker</span>
                     <a href="#" class="add-item">+</a>
                     <div class="stats">
                       <span class="effect">+2 II</span>
                       <span class="price">10 0000€</span>
                    </div
                  </li>
                  <li>
                     <img width="70" height="70" />
                     <span class="item-title">CMB Maker</span>
                     <a href="#" class="add-item">+</a>
                     <div class="stats">
                       <span class="effect">+2 II</span>
                       <span class="price">10 0000€</span>
                    </div
                  </li>
                  <li>
                     <img width="70" height="70" />
                     <span class="item-title">CMB Maker</span>
                     <a href="#" class="add-item">+</a>
                     <div class="stats">
                       <span class="effect">+2 II</span>
                       <span class="price">10 0000€</span>
                    </div
                  </li>
                  <li>
                     <img width="70" height="70" />
                     <span class="item-title">CMB Maker</span>
                     <a href="#" class="add-item">+</a>
                     <div class="stats">
                       <span class="effect">+2 II</span>
                       <span class="price">10 0000€</span>
                    </div
                  </li>
                  <li>
                    <img width="70" height="70" />
                    <span class="item-title">Powerplant</span>
                    <a href="#" class="add-item">+</a>
                    <div class="stats">
                      <span class="effect">+10 energy</span>
                      <span class="price">50 0000€</span>
                    </div>
                  </li>
                  
               </ul>
            </div>

            <div class="tab robots" id="tabs-robots">
              <ul>
        	
                <li>
                  <img width="70" height="70" />
                  <span class="item-title">Robot</span>
                  <a href="#" class="add-item">+</a>
                  <div class="stats">
                    <span class="effect">+1 robots</span>
                    <span class="price">6 000€</span>
                  </div>
                </li>

              </ul>
            </div>

            <div class="tab resources" id="tabs-resources">
	           <ul>
	             <li>
                  <img width="70" height="70" />
                  <span class="item-title">Oxygen</span>
                  <a href="#" class="add-item">+</a>
                  <div class="stats">
                    <span class="effect">+2 oxygen</span>
                    <span class="price">6 000€</span>
                  </div>
                </li>
              </ul>
            </div>


         </div><!--/sidetabs-->
         <footer>
            <div class="cost">
              <p class="subcost">Mass of items: 10,500 kg <br />
                Cost of items: 100 000 €<br />
              </p>
              <p class="total">Total cost: 1 450 000€</p>
            </div><!--/cost-->
	<form action="/moon" method="get"> 
            <input type="submit" value="Launch!" />
            </form>
         </footer>
      </div>
        
    </div>
</body>
</html>
