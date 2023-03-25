<?php
function generateLink($url, $label, $class) {
    echo "<a href=`$url` class=`$class`>$label</a>" . "<br>";
}

function outputPostRow($post) {
    
        generateLink("post.php?id=$post['postId']", "<img src='images/$post[thumb]' alt='$post[title]' class=`img-responsive`/>", "-");
    
    // echo " 
            
    //         </div>
    //         <div class='col-md-8'> 
    //             <h2>Ekklisia Agii Isidori Church</h2>
    //             <div class='details'>
    //                 Posted by <a href='user.php?id=2'>Leonie Kohler</a>
    //                 <span class='pull-right'>2/8/2017</span>
    //                 <p class='ratings'><img src='images/star-gold.svg' width='16' /><img src='images/star-gold.svg' width='16' /><img src='images/star-gold.svg' width='16' /><img src='images/star-white.svg' width='16' /><img src='images/star-white.svg' width='16' /> 15 Reviews</p>
    //             </div>
    //             <p class='excerpt'>
    //                 At the end of the hot climb up to the top Lycabettus Hill you are greeted with
    //                 the oasis that is the Ekklisia Agii Isidori church.
    //             </p>
    //             <p class='pull-right'><a href='post.php?id=1' class='btn btn-primary btn-sm'>Read more</a></p>
    //         </div>
    //     </div>
    //     <hr/>
    // "
}

// <a href='post.php?id=$post[postId]` class=''><img src='images/8710320515.jpg' alt='Ekklisia Agii Isidori church' class='img-responsive'/></a>

?>