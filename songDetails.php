<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Song Details</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <h1>Details of Song</h1>
        <form action="saveDetails.php" method="post" class="form-horizontal">
            <fieldset class="form-group">
                <label for="songName" >Song Name:</label>
                <input name="songName" id="songName" placeholder="Name of Song" class="form-control"/>
            </fieldset>
            <fieldset class="form-group">
                <label for="Lyrics" >Lyrics:</label>
                <input name="Lyrics" id="Lyrics" placeholder="Lyrics" class="form-control"/>
            </fieldset>
            <fieldset class="form-group">
                <label for="Artist">Artist</label>
                <input name="Artist" id="Artist" placeholder="Artist" class="form-control"/>
            </fieldset>
            <fieldset class="form-group">
                <label for="Music">Music</label>
                <input name="Music" id="Music" placeholder="Music" class="form-control"/>
            </fieldset>
            <fieldset class="form-group">
                <label for="Released">Released</label>
                <input name="Released" id="Released" placeholder="YYYY-MM-DD" class="form-control"/>
            </fieldset>
            <button class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
    </main>
</body>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
