<?php require"../backend/homepage/public/crud/config.php" ?>
<?php

require_once "../backend/homepage/functions.php";
$pdo = require_once '../backend/homepage/database.php';


    $statement = $pdo->prepare('SELECT * FROM home_card ORDER BY created_date DESC');
    $statement_event = $pdo->prepare('SELECT * FROM event_card ORDER BY created_date ASC');

$statement->execute();
$statement_event->execute();
$cards_home = $statement->fetchAll(PDO::FETCH_ASSOC);
$cards_event = $statement_event->fetchAll(PDO::FETCH_ASSOC);
$cards = $cards_home;
$cards_e = $cards_event;

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
    href="../asset/css/styles.css">

   

</head>
  <body>
      
    <div class="header">
    <div class="top-header">
    <div  class="logo-mob mobile">
            <div class="">
                <img src="../asset/image/logo_1.png" > 
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
                <a href="events.php">EVENTS</a>
                <a href="about.html">ABOUT US</a>
                <a href="support.html">SUPPORT US</a>
                <a href="contact.html">CONTACT US</a>
            
                </h1><br>  
            </nav>  </div>   

    <h2 class="event"><div class="event-holder"> EVENTS</div></h2>
    <div class>
    <?php
                // $new_card= reset($cards_e);
                $new_card= end($cards_e);
                { ?>
        <div class="events-holder">
                <p>      
                    <b> <?php echo $new_card['title']?></b> on <?php echo $new_card['event_date']?> <br><br>
                    <p> <?php echo $new_card['title']?></p>
                </p>  
         
        </div> 
           <?php }?>   
    </div>
      

     <div 
        style="width: 90%;
            margin:0 auto;
            margin-top: 100px;" class="upcoming-temple-con">
     
     <div class="upcoming-temple-con">
     
     <div class="upcoming-temple-card">
 <div class="upcoming">
    

      
    
         
     </div>
             </div>
             </div>

    
     <?php foreach ($cards_e as $i => $card_e) { ?>
        <div id=<?php echo $card_e['event_date']?>>
             <?php if ($card_e['images']): ?>
        <div class="events-holder">
           
                
                <p>      
                    <h1>  <?php echo $card_e['title']?></h1> on<i><?php echo $card_e['event_date']?></i>  <br><br>
                   
                    <p> <img src="../backend/eventspage/public/<?php echo $card_e['images']?>" height="250px" width="100%"></b></p>
                    <p> <?php echo $card_e['description']?></p>
                </p>  
         
        </div> 
        <br>
        <br>

        <?php endif; ?> </div>
           <?php }?>   
   
 
    <footer class="footer">
        <div class="footer-holder">
        Copyright 2021 HINDU TEMPLE OF RWANDA
    </div>
    
</body>
</html>