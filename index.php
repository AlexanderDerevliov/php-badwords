<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Badwords-php</title>
</head>
<body>

   <section class="text-center mt-5">
    <h1>
        BadWords PHP
    </h1>
    
    <form action="backresult.php" method="GET">
        <textarea name="phrase" id="" cols="30" rows="10">

        </textarea>
        <br>
        <input type="text" name="password" placeholder="parola da sostituire">
       
        <input type="submit" value="invia">
    </form>
    </section>
</body>
</html>