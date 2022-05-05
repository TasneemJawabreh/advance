<?php
// -------best trip day-----
if (isset($_POST['trip'])){
    
    $count=0;
    $item=array();
    
    $minDay=0;
    $minT=1500;

    for($i=0; $i< 13; $i++){
      
        $item[$i]=0;
    }
    

    $userDay= date('d', strtotime($_POST['appt']));
    
    $usermonth= date('m', strtotime($_POST['appt']));
    
   $date=date_create($_POST['appt']);
   try{
   $conn = new mysqli('localhost', 'root','','try2');
   $sql = "SELECT  `date`, `trips` FROM `uber-jan-feb-foil`";
   
   $result = $conn->query($sql);
    $r1=0;
   if ($result->num_rows > 0) {
       
     
     while($row = $result->fetch_assoc()) {
       
       $day= date('d', strtotime($row['date']));

       $month= date('m', strtotime($row['date']));

       $trip=$row['trips']; 

      
        if($usermonth == $month && $trip < $minT ){
          
          $minDay=date(strtotime($row['date']));
          
       }
       
     }
  
                           } 
                        }
   catch (Exception $e) {

  }
}
// ------book now-------

// ------book later----------

?>
  
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/tooplate-wave-cafe.css">
<!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>

<body>
 
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-car"style="size=100px"></i>
          
            <h1 class="tm-site-name" style="font-family: Cursive;">Uber</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                
                  <span style="font-family: Cursive;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Best Trip Day</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#about" class="tm-page-link">
               
                  <span style="font-family: Cursive;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Book Now </span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  
                  <span style="font-family: Cursive;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contact Us </span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
               
                  <span style="font-family: Cursive;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Book Later</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>        
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a  class="tm-tab-link active" data-id="cold" style="font-family: Cursive;">Enter the time
                  </a>
                </li>
                
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
              <!-- i think this is the best trip time -->
              
              <script>
              
              var day='<?php echo "The best trip day in the month:". $month." is ".$minDay[0]; ?>';
              alert (day);
              
              </script>
                <form action="index1.php" method="post" id="bestTime">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name"> <span class="tm-list-item-price"> <input type="date" id="appt" name="appt"  size="40%" required style="background-color: rgb(125, 192, 192) ; color:rgb(20, 15, 15);border-radius:20px;font-size: 50px;width: 90%;"></span>
                      <input name="trip" id="tripBtn" onclick="myFunction1();" value="Confirm" type="submit"  style ="background-color: #2b8383; color: white ;font-size: 15px; border-radius: 20px; font-family: Cursive;"  class="tm-btn-primary tm-align-right">
                       
                        <a href="map.html">-</a>
                       <!--<form class="Confirm" name="ConfirmForm"  method="POST" action="map.html" ></form>-->
                     </input>
                     </h3>
                        <div>
                </form>       
              
                    <p class="tm-list-item-description"></p>
                  </div>
                </div>
                
                                       
              </div>

              
            </div> 

            <div id="hot" class="tm-tab-content">
              <div class="tm-list">
              
                <div class="tm-list-item">          
                 
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Americano<span class="tm-list-item-price">$8.50</span></h3>
                    <p class="tm-list-item-description"></p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Cappuccino<span class="tm-list-item-price">$9.50</span></h3>
                    <p class="tm-list-item-description" >Here is a list of 4 items that can add more as you need. Only content area will be scrolling.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Espresso<span class="tm-list-item-price">$7.50</span></h3>
                    <p class="tm-list-item-description">Left side logo and main menu are fixed. The video background is fixed.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Hot Latte<span class="tm-list-item-price">$6.50</span></h3>
                    <p class="tm-list-item-description">Page contents are organized into 3 tabs to show different lists of items.</p>              
                  </div>
                </div>
                         
              </div>
            </div>

            <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/smoothie-1.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Strawberry Smoothie<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Here is a short description for the item along with a squared thumbnail.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-2.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Red Berry Smoothie<span class="tm-list-item-price">$14.50</span></h3>
                    <p class="tm-list-item-description">Here is a list of 4 items or add more. You can use this template for commercial purposes.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-3.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Pineapple Smoothie<span class="tm-list-item-price">$16.50</span></h3>
                    <p class="tm-list-item-description">Left side logo and main menu are fixed. The video background is fixed.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-4.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Spinach Smoothie<span class="tm-list-item-price">$18.50</span></h3>
                    <p class="tm-list-item-description">You are not allowed to redistribute the template ZIP file on other template sites.</p>              
                  </div>
                </div>              
              </div>
            </div>
            <form>

           

</form>
</div>
          </div>

          <!-- Book now -->
          <div id="about" class="tm-page-content">
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="bnow.php" method="POST" id="contact-form">
              <div class="tm-form-group">
                  <input type="text" name="myName" class="tm-form-control"  style="font-family: Cursive;" placeholder="Your Name" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="text" name="nowLocation" class="tm-form-control"  style="font-family: Cursive;" placeholder="Your Location" required="" />
                </div>

                <div class="tm-form-group">
                  <input type="text" name="nowDestination" class="tm-form-control"  style="font-family: Cursive;" placeholder="Your Destination" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="text"  name="phoneNum" class="tm-form-control"  style="font-family: Cursive;" placeholder="Phone Number" required="" />
                </div>       
                <div class="tm-form-group tm-mb-30">
                 
                    <span class="name" style="font-family: Cursive;">Number Of People</span>
                    <div class="quantity quantity1">
                    <input class="inputQty"  type="number" name="myIn" min="0" value="1" style="background-color: rgb(125, 192, 192) ; color:rgb(20, 15, 15)">
                    </div>
                    </li>
                    </ul>
                </div>   
                     
                <div >
                  <button type="submit"  onclick="myFunction()" style ="background-color: #2b8383; color: white ;font-size: 15px;border-radius: 30px; font-family: Cursive;"  class="tm-btn-primary tm-align-right">
                     Confirm

                  </button>
                
                </div>
                        <!-- <div class="container">
  
                       <div id="successBook" class="alert alert-success" >
                    <strong>Success!</strong> Yoy Already Book A Trip.
                      </div>
                      </div> -->
                   <!-- <script>
                  
                  </script> -->
              </form>
              <span>&nbsp;&nbsp;&nbsp;</span>
              
            </div>
          </div>
          
          <!-- end About Us Page -->

          <!--contact us -->
          <div id="special" class="tm-page-content">
                         
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
               <p style="font-family: Cursive;"> We are an Uber site that seeks to serve you,and if there is any glitch,please contact us.</p>
              <form action=" method="POST" id="contact-form">
                     
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" style="font-family: Cursive;" placeholder="Message" required=""></textarea>
                </div>        
                <div>
                  <button type="submit" style ="background-color:#2b8383; color: white;font-size: 15px;border-radius: 30px;font-family: Cursive;" class="tm-btn-primary tm-align-right">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Special Items Page -->
    

          <!-- Book later -->
          <div id="contact" class="tm-page-content">
            
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="bookLater.php" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input  type="text" name="Location-later" class="tm-form-control " style="font-family: Cursive;" placeholder="Your Location" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="text" name="Destination-later" class="tm-form-control" style="font-family: Cursive;" placeholder="Your Destination" required="" />
                </div>  <br>      
                <div class="tm-form-group tm-mb-30">
                  <input type="date" id="Date" name=" Date-later" style="background-color: rgb(125, 192, 192) ; color:rgb(20, 15, 15)" >
                  <span>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  
                  <input type="time" id="appt" name="time-later"  size="50%" required style="background-color: rgb(125, 192, 192) ;font-size: 13px;width: 32%; color:rgb(20, 15, 15)">
                  <span > &nbsp; &nbsp;  </span>
                  <ul class="list-person">
                    
                    <span class="name" style="font-family: Cursive;">Number Of People</span>
                    <div class="quantity quantity1">
                    <input class="inputQty" type="number" min="0" value="1" style="background-color: rgb(125, 192, 192) ; color:rgb(20, 15, 15)" >
                  
                    </div>
                    </li>
                    </ul>

 
                </div>        
                <div>
                  <button style ="background-color: #2b8383 ; color: white;font-size: 15px;border-radius: 30px; font-family: Cursive; " type="submit"  class="tm-btn-primary tm-align-right">
                     Confirm
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Contact Page -->
        </main>
      </div>    
    </div>
    
  </div>
    
  
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <!-- <source src="video/wave-cafe-video-bg.mp4" type="video/mp4"> -->
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }
     
    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }    

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
        showPage($(pageId));
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }
    
    function myFunction() {
                  
                     var x = document.getElementById("successBook");
                     if (x.style.display === "none") {
                       x.style.display = "block";
                          } else {
                        x.style.display = "none";
                                    }
                             }

    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {
        
        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });

      
      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault(); 
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

   setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      }

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
    
  </script>
</body>
</html>
<script type="text/javascript">
   function  myFunction1(){
    alert "misk";
     }
     </script>