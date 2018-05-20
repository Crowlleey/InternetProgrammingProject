<?php
    include 'Pages/header.php';

    $pageTitle = 'George Gomes'; 
    $pageContents = ob_get_contents (); 
    ob_end_clean ();
    echo str_replace ('<!--TITLE-->', $pageTitle, $pageContents);
?>

<body>

     <div class="header"> 
            <div class="title col-11 col-sm-10 col-md-10 col-lg-8 col-xl-6">
                <label for="title" id="title">George Gomes</label> <br>
                <label for="subtitle" id="subtitle">iOS developer</label>
            </div>

            <div id="continue">
                <div id="divbtcontinue">
                    <button id="btcontinue" class=" col-sm-12 col-md-12">CONTINUE</button> 
                </div> 
                <i class="arrow down" id="arrowa"></i><br>
                <i class="arrow down" id="arrowb"></i>
                
              
            </div>
    </div>

    <nav > 
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT ME</a></li>
            <li><a href="#">SKILLS</a></li>
            <li><a href="#">PROJECTS</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>                
    </nav>




    <div class="header"> 
    </div>




    <div class="header"> 
    </div>




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</html>


