<?php
  require "includes/menu.php";
  require "includes/helper.php";
  direct_page('profili', true);
  ?>
<!DOCTYPE html>
<html>

<head>
  <title>
    GJEJ VETEN
  </title>
  <link rel="stylesheet" href="./css/indeks.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>

<body>



<div class="container">
          <div class="arrow l" onclick="prev()">
              <img src="images/l.png" alt="l">
          </div>
          <div class="slide slide-1">
               <div class="caption">
                   <h3>GJEJ VETEN</h3>
                   <p>Ne ndërtojmë të ardhmen tuaj</p>
               </div>
          </div>
          <div class="slide slide-2">
              <div class="caption">
                  <h3>GJEJ VETEN</h3>
                  <p>Fillo dhe mëso tani</p>
                
              </div>
         </div>
         <div class="slide slide-3">
              <div class="caption">
                  <h3>GJEJ VETEN</h3>
                  <p>E gatshme në cdo platformë</p>
                  
              </div>
         </div>
         <div class="arrow r" onclick="next()">
              <img src="images/r.png" alt="r">
          </div>
      </div>
    

      <script>
          let slide = document.querySelectorAll('.slide');
          var current = 0;
  
          function cls(){
              for(let i = 0; i < slide.length; i++){
                    slide[i].style.display = 'none';
              }
          }
  
          function next(){
              cls();
              if(current === slide.length-1) current = -1;
              current++;
  
              slide[current].style.display = 'block';
              slide[current].style.opacity = 0.4;
  
              var x = 0.4;
              var intX = setInterval(function(){
                  x+=0.1;
                  slide[current].style.opacity = x;
                  if(x >= 1) {
                      clearInterval(intX);
                      x = 0.4;
                  }
              }, 100);
  
          }
  
          function prev(){
              cls();
              if(current === 0) current = slide.length;
              current--;
  
              slide[current].style.display = 'block';
              slide[current].style.opacity = 0.4;
  
              var x = 0.4;
              var intX = setInterval(function(){
                  x+=0.1;
                  slide[current].style.opacity = x;
                  if(x >= 1) {
                      clearInterval(intX);
                      x = 0.4;
                  }
              }, 100);
  
          }
  
          function start(){
              cls();
              slide[current].style.display = 'block';
          }
          start();
      </script>
          
            
      
           
            <section class="about">
                <div class="contentBx">
                  <h2 class="heading">Rreth nesh</h2>
                  <p class="text">Ne jemi një ekipë e developerëve të rinj që kemi marur iniciativë për krijimin e një WebFaqeje në të cilën mund  të kyqen studentë nga drejtime të ndryshme
                    dhe të ndjekin kurset e tyre të preferuara. Ne mendojmë se kjo është një mënyrë ideale e të mesuarit, saherë të duash dhe kur të duash.
                    Kjo platformë është një risi, dhe pritet të shtrihet edhe në tërë botën.Ajo e cila na karakterizon ne është korrektësia dhe kontinuiteti në mbajtje të mardhënieve me studentët.
                    </p>
                </div>
                <div class="imgBx">
                  <img src="msim.jpg" style= "width:100%; height:100%; background-size:cover; background-position:center ;">
            
               
                
                </div>
              </section>
            
              <section class="services">
                <div class="tekst">
                    <h2>Shërbimet tona</h2>
                    <p>Përgjatë rrugëtimit tuaj me ne, ne do të jemi gjithmonë pranë jush. </p>
                </div> 
                
                  <div class="container">
                    <div class="serviceBx"> 
                      <div>
                          <img src="images/zarf.png">
                          <h2>Komunikim</h2>
                    </div>
                  </div>
                      <div class="serviceBx">
                        <div>
                          <img src="images/it.png" >
                          <h2>Përkrahje 24/7</h2>
                    </div>
                  </div>
                      <div class="serviceBx">
                        <div>
                          <img src="images/bous.png">
                          <h2>Zhvillim i karierës</h2>
                    </div>
                  </div>
                 
                </section>
            
                <section class="technology">
                  <div class="contentBx">
                    <h2>Ne përdorim teknologjitë më të reja</h2>
                      <p>Në kurset tona ne përdorim teknika perfekte të mësimit, interaktivitetit dhe kemi një staf shumë të gatshëm e tejet të motivuar për punë.
                        Ne përdorim teknologjitë e fundit dhe i inkurajojmë studentët vazhdimisht në punën e tyre.
                      </p>
                  </div>
                  <div class="imgBx">
                    <img src="images/pen.png">
                  </div>
                </section>
                <section class="client">
                    <h2 class="heading text-white">Rrjete Sociale</h2>
                    <p class="text text-white">
                        Ju mund të na gjeni edhe në rrjete sociale, sepse ne jemi gjithmonë afër jush.
                    </p>
                    <div class="imgBxa">
                        <a href="https://www.facebook.com/">
                            <img src="images/facebook.png">
                          </a>
                          <a href="https://www.instagram.com/">
                            <img src="images/insta.png">
                          </a>
                          <a href="https://www.youtube.com/">
                            <img src="images/tr.png">
                          </a>
                          <a href="https://twitter.com/explore">
                            <img src="images/twitter.png">
                          </a>
                     
                    </div>
                </section>
                <script src="app.js"></script> 
            
  </body>   
</html>