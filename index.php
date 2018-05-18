<?php
    include 'Pages/header.php';

    $pageTitle = 'George Gomes'; 
    $pageContents = ob_get_contents (); 
    ob_end_clean ();
    echo str_replace ('<!--TITLE-->', $pageTitle, $pageContents);
?>

<body>
    <h1> George Gomes </h1>

</body>
</html>


