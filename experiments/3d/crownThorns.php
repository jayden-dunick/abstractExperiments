<?php 
    date_default_timezone_set('Pacific/Auckland');
    include '../../php/dbh.inc.php';    
    include '../../php/comments.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>3D Perception</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/three.js" type="text/javascript"></script>
    <script src="../../three.module.js" type="module"></script>
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
        <div class="back"><a href="../../experiment6.html"><img src="../../images/back.svg" alt="Back Arrow" id="backs"></a></div>
        <article>
            <div id="webGL-container"></div>
        </article>
        <article>
            <h4>Crown of Thorns</h4>
            <h5>3D Perception</h5>
        </article>
    </section>
     <section class="experiment"> 
        <img src="../../images/3d/crownThorns.png" alt="Crown of thorns">
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
    <script src="../../js/OrbitControls.js" type="module"></script>
    <script src="../../js/GLTFLoader.js"></script>
    <script type="module" src="../../js/3D/crown.js"></script>
</body>

</html>
