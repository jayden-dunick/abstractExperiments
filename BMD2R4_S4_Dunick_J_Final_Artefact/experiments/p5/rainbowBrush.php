<?php 
    date_default_timezone_set('Pacific/Auckland');
    include '../../php/dbh.inc.php';    
    include '../../php/comments24.inc.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>p5 js</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="../../js/p5.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="../../index.html">
                    <h2>www.abstractexperimen.ts/</h2>
                </a>
            </li>
        </ul>
    </nav>
     <section class="experiment">
        <div class="back"><a href="../../experiment8.html"><img src="../../images/back.svg" alt="Back Arrow" id="backs"></a></div>
        <div id="container"></div>
        <article>
            <h4>Rainbow Brush</h4>
<h5>Click mouse to clear canvas</h5>
        </article>
    </section>
     <section class="experiment">
        <img src="../../images/p5/rainbowBrush.png.jpg" alt="Rainbow brush">
        <article class="comments">
            <?php 
            echo "<form method='POST' action='".setComments($conn)."'>
                    <input type='hidden' name='Name' value='Anonymous'>
                    <input type='hidden' name='Date' value='".date('Y-m-d H:i:s')."'>
                    <textarea name='Message'></textarea> <br><br>
                    <button name='commentSubmit' type='submit'>comment</button>
                </form> <br><br>";

            getComments($conn);
            ?>
        </article>
    </section>
    <script src="../../js/main.js"></script>
    <script src="../../js/p5/rainbowBrush.js"></script>
</body>

</html>
