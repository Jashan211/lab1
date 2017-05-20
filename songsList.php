<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Songs</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
    <h1>List of Songs</h1>

    <?php
    //Step1 - Connect to the database
    $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200361558', 'gc200361558', 'IWrvd53ZK3');

    //Step2 - create the SQL command
    $sql = "SELECT * FROM songs";

    //Step3 - prepare the sql command (prevent SQL injection)
    $cmd = $conn->prepare($sql);

    //Step4 - execute the command
    $cmd->execute();

    //Step5 - store the results
    $songs = $cmd->fetchAll();

    //Step6 - remove the DB connection
    $conn = null;

    //Step7 - loop over the results and display them to screen
    echo '<table class="table table-striped table-hover table-bordered table-condensed">
                 <tr><th class="success">Song Name</th>
                     <th class="warning">Lyrics</th>
                     <th class="primary">Artist</th>
                     <th class="danger">Music</th>
                     <th class="info">Released</th>
                 </tr>';
    foreach($songs as $song)
    {
        echo '<tr><td>'.$song['songName'].'</td>
                <td>'.$song['Lyrics'].'</td>
                <td>'.$song['Artist'].'</td>
                <td>'.$song['Music'].'</td>
                <td>'.$song['Released'].'</td></tr>';
    }
    ?>

</body>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
