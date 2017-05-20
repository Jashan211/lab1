<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Details</title>
</head>
<body>
    <h1>Saving Details....</h1>

    <?php
        $songName = $_POST['songName'];
        echo 'Song: ' . $songName . '<br />';
        $Lyrics = $_POST['Lyrics'];
        echo 'Lyrics: ' . $Lyrics . '<br />';
        $Artist = $_POST['Artist'];
        echo 'Artist: ' . $Artist . '<br />';
        $Music = $_POST['Music'];
        echo 'Music: ' . $Music . '<br />';
        $Released = $_POST['Released'];
        echo 'Released: ' . $Released;

        //Let's connect to the DB and save our file
        //Step 1 - connect to DB
        $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200361558', 'gc200361558', 'IWrvd53ZK3');

        //Step 2- create SQl command
        $sql = "INSERT INTO songs (songName, Lyrics, Artist, Music, Released)
                VALUES (:songName, :Lyrics, :Artist, :Music, :Released)";

        //Step 3 - "preapare the command to prevent SQL injection attacks
        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':songName', $songName, PDO::PARAM_STR, 40);
        $cmd->bindParam(':Lyrics', $Lyrics, PDO::PARAM_STR, 40);
        $cmd->bindParam(':Artist', $Artist, PDO::PARAM_STR, 40);
        $cmd->bindParam(':Music', $Music, PDO::PARAM_STR, 40);
        $cmd->bindParam(':Released', $Released, PDO::PARAM_STR, 10);

        //Step 4 - execute the SQL command
        $cmd->execute();

        //Step 5 - close the command to the DB
        $conn = null;

        //Step6 - Redirect to a new page
        header('location:songsList.php')

    ?>
</body>
</html>
