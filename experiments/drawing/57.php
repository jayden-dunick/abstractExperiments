<?php 
    date_default_timezone_set('Pacific/Auckland');
    include '../../php/dbh.inc.php';    
    include '../../php/drawings/comments78.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Quick Illustration</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="../../index.html"><h2>www.abstractexperimen.ts/</h2></a>
            </li>
        </ul>
    </nav>
     <section class="experiment">
       <div class="back"><a href="../../experiment7.html"><img src="../../images/back.svg" alt="Back Arrow" id="backs"></a></div>
       <article class="drawing">
            <img src="../../images/drawing/drawing%20(57).png" alt="Drawing 57">
        </article>
       <article><h4>Shopping trolley of canister</h4>
       <h5>Quick Illustration</h5></article>
    </section>
     <section class="experiment"><img src="../../images/drawing/gif57.gif" alt="Gif 57"><article class="comments">
            <?php 
            echo "<form method='POST' action='".setComments($conn)."'>
                    <input type='hidden' name='Name' value='Anonymous'>
                    <input type='hidden' name='Date' value='".date('Y-m-d H:i:s')."'>
                    <textarea name='Message'></textarea> <br><br>
                    <button name='commentSubmit' type='submit'>comment</button>
                </form> <br><br>";

            getComments($conn);
            ?>
        </article> </section>
    <script src="../../js/main.js"></script>
</body></html>