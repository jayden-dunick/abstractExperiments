<?php

function setComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $Name = $_POST['Name'];
        $Date = $_POST['Date'];
        $Message = $_POST['Message'];
        
        $sql = "INSERT INTO comments2 (Name, Date, Message) VALUES ('$Name', '$Date', '$Message')";
        $result = $conn->query($sql);
    }
}

function getComments($conn) {
    $sql = "SELECT * FROM comments2";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='commentBox'><p>";
            echo $row['Name']."<br>";
            echo $row['Date']."<br>";
            echo nl2br($row['Message']);
        echo "<br></p></div>";
    }
}
