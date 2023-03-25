<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 7</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />

</head>

<body>
    <!-- HEADER HERE -->
    <?php
    include('ch12proj1header.php');
    ?>

    <!-- Page Content -->
    <main class="container">
        <div class="row">
            <aside class="col-md-2">
                <!-- include here -->
                <?php
                include('ch1proj1leftnav.php');
                ?>
                <!-- end continents panel -->

                
                <!-- end continents panel -->
            </aside>
            <div class="col-md-10">

                <div class="jumbotron" id="postJumbo">
                    <h1>Posts</h1>
                    <p>Read other travellers' posts ... or create your own.</p>
                    <p><a class="btn btn-warning btn-lg">Learn more &raquo;</a></p>
                </div>        
      
                 <!-- start post summaries -->
                 <div class="postlist">

                   <!-- replace each of these rows with a function call -->
                   <?php
                   include('functions.inc.php');
                   foreach ($posts as $p) {
                    outputPostRow($p);
                   }
                   ?>

                   
                   <div class="row">
                       <div class="col-md-4"> 
                          <a href="post.php?id=1" class=""><img src="images/8710320515.jpg" alt="Ekklisia Agii Isidori church" class="img-responsive"/></a>
                       </div>
                       <div class="col-md-8"> 
                          <h2>Ekklisia Agii Isidori Church</h2>
                          <div class="details">
                            Posted by <a href="user.php?id=2">Leonie Kohler</a>
                            <span class="pull-right">2/8/2017</span>
                            <p class="ratings"><img src="images/star-gold.svg" width="16" /><img src="images/star-gold.svg" width="16" /><img src="images/star-gold.svg" width="16" /><img src="images/star-white.svg" width="16" /><img src="images/star-white.svg" width="16" /> 15 Reviews</p>
                          </div>
                          <p class="excerpt">
                          At the end of the hot climb up to the top Lycabettus Hill you are greeted with
                              the oasis that is the Ekklisia Agii Isidori church.
                          </p>
                          <p class="pull-right"><a href="post.php?id=1" class="btn btn-primary btn-sm">Read more</a></p>
                       </div>
                   </div>
                   <hr/>

                   <div class="row">
                       <div class="col-md-4"> 
                          <a href="post.php?id=3" class=""><img src="images/8710247776.jpg" alt="Santorini Sunset" class="img-responsive"/></a>
                       </div>
                       <div class="col-md-8"> 
                          <h2>Santorini Sunset</h2>
                          <div class="details">
                            Posted by <a href="user.php?id=5">Frantisek  Wichterlova</a>
                            <span class="pull-right">9/9/2017</span>
                            <p class="ratings"><img src="images/star-gold.svg" width="16" /><img src="images/star-gold.svg" width="16" /><img src="images/star-gold.svg" width="16" /><img src="images/star-gold.svg" width="16" /><img src="images/star-gold.svg" width="16" /> 38 Reviews</p>                      
                          </div>
                          <p class="excerpt">
                          Every evening as the sun sets in Fira, it seems that everyone who is not drinking or eating is rushing with their camera to the most picturesque locations in order to capture that famous Aegean sunset. 
                          </p>
                          <p class="pull-right"><a href="post.php?id=3" class="btn btn-primary btn-sm">Read more</a></p>
                       </div>
                   </div>
                   <hr/>

                   <div class="row">
                       <div class="col-md-4"> 
                          <a href="post.php?id=9" class=""><img src="images/8710289254.jpg" alt="Looking towards Fira" class="img-responsive"/></a>
                       </div>
                       <div class="col-md-8"> 
                          <h2>Looking towards Fira</h2>
                          <div class="details">
                            Posted by <a href="user.php?id=13">Edward Francis</a> 
                            <span class="pull-right">10/19/2017</span>
                            <p class="ratings"><img src="images/star-gold.svg" width="16" /><img src="images/star-gold.svg" width="16" /><img src="images/star-white.svg" width="16" /><img src="images/star-white.svg" width="16" /><img src="images/star-white.svg" width="16" /> 3 Reviews</p>                      
                          </div>
                          <p class="excerpt">
                          The steamer Mongolia, belonging to the Peninsular and Oriental Company, built of iron, of two thousand eight hundred tons burden, and five hundred horse-power, was due at eleven o'clock a.m. on Wednesday, the 9th of October, at Suez. 
                          </p>
                          <p class="pull-right"><a href="post.php?id=9" class="btn btn-primary btn-sm">Read more</a></p>
                       </div>
                   </div>  
                     <hr>
                     
                     
                 </div>   <!-- end post list -->         
                            
            </div>  <!-- end col-md-10 -->
        </div>   <!-- end row -->
    </main>
    
</body>

</html>