<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap JS dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSI 127b</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">COSI 127b</h1><br>
        <h3 style="text-align:center">Connecting Front-End to MySQL DB</h3><br>
    </div>
    <div class="container">
        <form id="ageLimitForm" method="post" action="movies.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="movies" id="button-addon2">View all Movies</button>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter email" name="uemail" id="uemail">
                <input type="text" class="form-control" placeholder="Enter motion picture id" name="mpid" id="mpid">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="like" id="button-addon2">Like</button>
                </div>
            </div>

        </form>
        <form id="actorsForm" method="post" action="actors.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="actors" id="button-addon2">View all Actors</button>
            </div>
        </form>
    </div>
</body>
</html>
