<?php 
    date_default_timezone_set('Pacific/Auckland');
    include '../../php/dbh.inc.php';    
    include '../../php/comments25.inc.php'
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
        <div class="back"><a href="../../experiment8.html"><img src="../../images/back.svg" alt="BackArrow" id="backs"></a></div>
        <div id="container"></div>
        <article>
            <h4>Circle Drawing</h4>
        </article>
    </section>
     <section class="experiment">
        <img src="../../images/p5/weirdExperiment.png.jpg" alt="A weird one">
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
    <section><img src="../../images/p5/lineDoubles_2.jpg" alt="Line Doubles 3">
    <img src="../../images/p5/lineDoubles_3.jpg" alt="Line Doubles 4">
    </section>
    <script src="../../js/main.js"></script>
    <script src="../../js/p5/circleLines.js"></script>
</body>

</html>
