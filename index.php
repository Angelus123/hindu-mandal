<?php require"./backend/homepage/public/crud/config.php" ?>
<?php

require_once "./backend/homepage/functions.php";
$pdo = require_once './backend/homepage/database.php';


    $statement = $pdo->prepare('SELECT * FROM home_card ORDER BY created_date DESC');
    $statement_event = $pdo->prepare('SELECT * FROM event_card ORDER BY created_date ASC');
     $statement_pdf = $pdo->prepare('SELECT * FROM pdf_card ORDER BY created_date ASC');

$statement->execute();
$statement_event->execute();
$statement_pdf->execute();
$cards_home = $statement->fetchAll(PDO::FETCH_ASSOC);
$cards_event = $statement_event->fetchAll(PDO::FETCH_ASSOC);
$cards_pdf = $statement_pdf->fetchAll(PDO::FETCH_ASSOC);
$cards = $cards_home;
$cards_e = $cards_event;
$cards_f = $cards_pdf;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./asset/image/logo.png" />
    <title>HINDU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
    href="./asset/css/styles.css">

   

</head>
  <body>
      
    <div class="header">
    <div class="top-header">
    <div  class="logo-mob mobile">
            <div class="">
                <img src="./asset/image/logo_1.png" > 
            </div>
            <br>
        </div>
        <div  class="logo desktop">
            <div class="logo-base">
                <img src="./asset/image/logo_1.png" > 
            </div>
            <br>
            <div style="width:100%; color:white">
                <b>Info@hindutemple.org.rw</b>
                <br>
                <b>Rwanda-Kigali KK30St</b>
            </div>
        </div>
        <div class="header-title ">   
            <h1 >HINDU MANDAL OF RWANDA</h1>
        </div>
        <div class="head-time desktop">
            <span>
                   <b> Temple Hours:</b><br>
                   <b> Mon to Fri:</b> 6 am to 12 pm, 5 - 8.00 pm<br>
                   <b>Sat and Sun:</b> 9 am to 8.30 pm.
            </span>
            </div>
            </div>
            
         
        <hr style="width:100%">
    </div>
    <div class="sticky"> 
            <nav class="fixed ">
                <h1 style="text-align: center; color: rgb(122, 110, 98);">  <a href="./index.php" style="color:white">HOMEPAGE</a>
                <a href="./component/events.php">EVENTS</a>
                <a href="./component/about.html">ABOUT US</a>
                <a href="./component/support.html">SUPPORT US</a>
            
                </h1><br>  
            </nav>  </div>   
       

<div class="slideshow-container" > 
<div class="mySlides fade" >
 
  <img src="https://previewmywebsite.org/hindutemple/wp-content/uploads/2020/10/banner11.jpg"  class="slide-item" >
  <div class="text"> <p >HINDU TEMPLE OF RWANDA'S VALUES</p>
        <h2>"WE APPRECIATE THE DIGINITY AND THE EFFORT OF THE EVERY INDIVIDUAL AND ACKNOWLEDGE THEIR CONTRIBUTION"</h2></div>
</div>

<div class="mySlides fade" >
 
  <img src="https://previewmywebsite.org/hindutemple/wp-content/uploads/2020/07/hbanner2-1.jpg"  class="slide-item">
  <div class="text"> <p >HINDU TEMPLE OF RWANDA'S VALUES</p>
        <h2>"WE APPRECIATE THE DIGINITY AND THE EFFORT OF THE EVERY INDIVIDUAL AND ACKNOWLEDGE THEIR CONTRIBUTION"</h2></div>
</div>
<div class="mySlides fade">
 
  <img src="./asset/image/bannel_1.png" class="slide-item">
  <div class="text"> <p >HINDU TEMPLE OF RWANDA'S OBJECTIVES</p>
        <h2 >SARVE JANA SUKHINA BHAVANTU</h2></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>

        <div class="news-container">
        <h2>RECENT NEWS</h2>
            <div class="news-row">
            <?php foreach ($cards as $i => $card) { ?>

                <?php if ($card['images']): ?>
                    <div class="news-item">
                    <img src="./backend/homepage/public/<?php echo $card['images'] ?>" alt="<?php echo $card['title'] ?>"class="photo">
                        <div class="hindu">
                            <?php echo $card['title'] ?>
                        </div>
                        <div class="hindu-months">
                            <?php echo $card['created_date'] ?>
                        </div>

                    </div>
                    
                <?php endif; ?>

                    <?php } ?>
                
        
            </div>
            
                </div>
                <div  class ="pdf-doc">
                    <div >
                        <?php foreach ($cards_f as $i => $card_f) { ?>
            
                    <?php if ($card_f['pdfs']): ?>
                     <div style="text-align:center; width:30%;margin-right:20px; display:inline-block">
                        <h3>PDF <?php echo $card_f['title'] ?></h3>
                        <p>Open a PDF file  <a href="./backend/hmpdf/public/<?php echo $card_f['pdfs'] ?>"><?php echo $card_f['title'] ?>
                        <img src="./asset/image/pdf_1.jpg"  style=" margin: 10px auto; width:36px ;height:42px"></a>.</p>
                            </div>
                            
                <?php endif; ?>
                     <?php } ?>
                  
              
                     </div>
                    
                </div>

        <div class="upcoming-temple-con">
     
            <div class="upcoming-temple-card">
        <div class="upcoming">
           
       
                <section class="section-temp-hours"><h2>UPCOMING EVENTS</h2>
                <hr class="line">
                <?php foreach ($cards_e as $i => $card_e) { ?>
                <?php if ($card_e['images']): ?>
               
                <div class="upcoming-item">
                    <p class="summit">
                 <a href=./component/events.php#<?php echo $card_e['event_date']?> ><?php echo $card_e['title'] ?></a>
                    
                    </p>
                
                <p class="months"><?php echo $card_e['event_date'] ?></p>
                <p class="district"><?php echo $card_e['place'] ?><p>

            </div>
          
            <hr class="line-event">
            <?php endif; ?>

        <?php } ?>
            </section>
            
            
            <section class="section-temp-event">
                <h2>TEMPLE HOURS</h2>
                <hr class="line">
                <div class="upcoming-item">
                    <p >
                       
                    
                        MONDAY
                    </p>
                      &nbsp  
                
                    <p ><b>Morning; </b>6:00-12:00</p>
                &nbsp
                    <p ><b>Evening;</b>5:00-8:00<p>
                        &nbsp 
                </div><hr class="line">
                <div class="upcoming-item">
                    <p>
                        
                        
                            TUESDAY
                        </p>
                        &nbsp
                    
                    <p ><b>Morning; </b>6:00-12:00</p>
                    &nbsp
                    <p ><b>Evening;</b>5:00-8:00<p>
                </div><hr class="line">
                <div class="upcoming-item">
                        <p >
                        
                        
                            WED
                        </p>
                        &nbsp
                    
                    <p ><b>Morning; </b>6:00-12:00</p>
                    &nbsp
                    <p ><b>Evening;</b>5:00-8:00<p>
                </div><hr class="line">
                <div class="upcoming-item">
                        <p>
                        
                            THURSDAY
                        </p>
                        &nbsp
                    
                    <p ><b>Morning; </b>6:00-12:00</p>
                    &nbsp
                    <p ><b>Evening;</b>5:00-8:00<p>
                </div><hr class="line">
                <div class="upcoming-item">
                        <p>
                        
                            FRIDAY
                        </p>
                        &nbsp
                    
                    <p ><b>Morning; </b>6:00-12:00</p>
                    &nbsp
                    <p ><b>Evening;</b>5:00-8:00<p>
                </div><hr class="line">
                <div class="upcoming-item">
                        <p >
                        
                            SATURDAY
                        </p>
                        &nbsp
                    <p ><b>Morning; </b>6:00-12:00</p>
                    &nbsp
                    <p ><b>Evening;</b>5:00-8:00<p>
                </div><hr class="line">
                <div class="upcoming-item">
                        <p >
                        
                            SUNDAY
                        </p>
                        &nbsp
                    
                    <p ><b>Morning; </b>6:00-12:00</p>
                    &nbsp
                    <p ><b>Evening;</b>5:00-8:00<p>
            </div><hr class="line">
            </section>  
                </div>   
        </div>
    

        <footer class="footer">
        <div class="footer-holder">
        Copyright 2021 HINDU TEMPLE OF RWANDA
    </div>
    

  </body>
</html>