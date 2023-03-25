<div class="panel panel-info">
                    <div class="panel-heading">Continents</div>
                    <ul class="list-group">
                        <?php
                        include('data.inc.php');

                        foreach ($continents as $value) {
                          
                            echo "<li class=`list-group-item`><a href=`#`>$value</a></li>";
                        }
                        ?>

                        <!-- <li class="list-group-item"><a href="#">Africa</a></li>
                        <li class="list-group-item"><a href="#">Asia</a></li>
                        <li class="list-group-item"><a href="#">Europe</a></li>
                        <li class="list-group-item"><a href="#">North America</a></li>
                        <li class="list-group-item"><a href="#">South America</a></li> -->
                    </ul>
                </div>
                
                
                
                <div class="panel panel-info">
                    <div class="panel-heading">Popular</div>
                    <ul class="list-group">
                        <?php
                        include('data.inc.php');
                        include('functions.inc.php');

                        foreach ($countries as $key => $value) {

                            generateLink("photos.php?iso=$key", $value, "list-group-item");

                        }

                        ?>
                        
                    
                        <!-- // <li class="list-group-item"><a href="photos.php?iso=CA">Canada</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=FR">France</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=IT">Italy</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=DE">Germany</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=GH">Ghana</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=GR">Greece</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=ES">Spain</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=US">United States</a></li>
                        // <li class="list-group-item"><a href="photos.php?iso=GB">United Kingdom</a></li> -->
                    </ul>
                </div>