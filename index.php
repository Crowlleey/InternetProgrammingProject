<?php
    include 'Pages/header.php';

    $pageTitle = 'George Gomes'; 
    $pageContents = ob_get_contents (); 
    ob_end_clean ();
    echo str_replace ('<!--TITLE-->', $pageTitle, $pageContents);
?>

<body>

    <div class="header"> 
        <div class="title">
            <label for="title" id="title">George Gomes</label> <br>
            <label for="subtitle" id="subtitle">iOS developer</label>


    </div>


    </div>


</body>
</html>


