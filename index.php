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
        <!-- Query 1 -->
        <form id="tablesForm" method="post" action="tables.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="tables" id="button-addon2">View all tables (1)</button>
            </div>
        </form>

        <!-- Query 2 -->
        <form id="mpnameForm" method="post" action="mpname.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter movie name" name="mname" id="mname">
                <button class="btn btn-outline-secondary" type="submit" name="mpname" id="button-addon2">Find movies by name (2)</button>
            </div>
        </form>

        <!-- Query 3 -->
        <form id="mpemailForm" method="post" action="mpemail.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter user email" name="uemail" id="uemail">
                <button class="btn btn-outline-secondary" type="submit" name="mpemail" id="button-addon2">Find liked movies (3)</button>
            </div>
        </form>

        <!-- Query 4 -->
        <form id="mplocationForm" method="post" action="mplocation.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter shooting location country" name="country" id="country">
                <button class="btn btn-outline-secondary" type="submit" name="mplocation" id="button-addon2">Find motion picture by location (4)</button>
            </div>
        </form>

        <!-- Query 5 -->
        <form id="tvDirectorForm" method="post" action="tvdirector.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter zip code" name="zip" id="zip">
                <button class="btn btn-outline-secondary" type="submit" name="tvdirector" id="button-addon2">Find TV directors by zip code (5)</button>
            </div>
        </form>

        <!-- Query 6 -->
        <form id="likedpeopleForm" method="post" action="likedpeople.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Minimum number of awards won for motion picture in a given year" name="naward" id="naward">
                <button class="btn btn-outline-secondary" type="submit" name="award" id="button-addon2">Find award winners (6)</button>
            </div>
        </form>

        <!-- Query 7 -->
        <form id="youngoldForm" method="post" action="youngold.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="youngold" id="button-addon2">Find youngest/oldest award winners (7)</button>
            </div>
        </form>

        <!-- Query 8 -->
        <form id="americanproducersForm" method="post" action="americanproducers.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Minimum box office collection" name="collection" id="collection">
                <input type="text" class="form-control" placeholder="Max budget" name="budget" id="budget">
                <button class="btn btn-outline-secondary" type="submit" name="americanproducers" id="button-addon2">Find American producers (8)</button>
            </div>
        </form>

        <!-- Query 9 -->
        <form id="multiplerolesForm" method="post" action="multipleroles.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Minimum rating" name="rating" id="rating">
                <button class="btn btn-outline-secondary" type="submit" name="multipleroles" id="button-addon2">Find people with multiple roles (9)</button>
            </div>
        </form>

        <!-- Query 10 -->
        <form id="topthrillersForm" method="post" action="topthrillers.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="topthrillers" id="button-addon2">Top thrillers in Boston (10)</button>
            </div>
        </form>

        <!-- Query 11 -->
        <form id="toplikesForm" method="post" action="toplikes.php">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Minimum likes" name="likes" id="likes">
                <input type="text" class="form-control" placeholder="Maximum age" name="age" id="age">
                <button class="btn btn-outline-secondary" type="submit" name="toplikes" id="button-addon2">Top liked movies (11)</button>
            </div>
        </form>

        <!-- Query 12 -->
        <form id="doubleroleForm" method="post" action="doublerole.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="doublerole" id="button-addon2">Double actors (12)</button>
            </div>
        </form>

        <!-- Query 13 -->
        <form id="betterthancomedyForm" method="post" action="betterthancomedy.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="betterthancomedy" id="button-addon2">Motion pictures better than comedy (13)</button>
            </div>
        </form>

        <!-- Query 14 -->
        <form id="mostrolesForm" method="post" action="mostroles.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="mostroles" id="button-addon2">Movies with most roles (14)</button>
            </div>
        </form>

        <!-- Query 15 -->
        <form id="samebirthdayForm" method="post" action="samebirthday.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="samebirthday" id="button-addon2">Actors with same birthday (15)</button>
            </div>
        </form>

        </form>
        <form id="actorsForm" method="post" action="actors.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="actors" id="button-addon2">View all Actors</button>
            </div>
        </form>
        <p>Like a movie:</p>
        <form id="likesForm" method="post" action="movies.php">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="submit" name="movies" id="button-addon2">View all Movies</button>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter motion picture id" name="mpid" id="mpid">
                <input type="text" class="form-control" placeholder="Enter email" name="email" id="email">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="like" id="button-addon2">Like</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
