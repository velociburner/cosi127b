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
        <?php

        // generic table builder. It will automatically build table data rows irrespective of result
        class AmericanProducers extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {
                return "<td style='text-align:center'>" . parent::current(). "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }
        }

        // SQL CONNECTIONS
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "COSI127b";

        try {
            // We will use PDO to connect to MySQL DB. This part need not be 
            // replicated if we are having multiple queries. 
            // initialize connection and set attributes for errors/exceptions
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $searchTerm1 = $_POST['collection'];
            $searchTerm2 = $_POST['budget'];
            // prepare statement for executions. This part needs to change for every query
            // Find the American Producers who had a box office collection of more than or equal to “X”
            // (parameterized) with a budget less than or equal to “Y” (parameterized). List the producer
            // name, movie name, box office collection and budget.
            $stmt = $conn->prepare("SELECT p.name AS p_name, mp.name AS mp_name, m.boxoffice_collection, mp.budget FROM People p
                JOIN Role r ON p.id=r.pid
                JOIN MotionPicture mp ON r.mpid=mp.id
                JOIN Movie m ON mp.id=m.mpid
                WHERE p.nationality='USA'
                AND r.role_name='Producer'
                AND m.boxoffice_collection>=:searchTerm1
                AND mp.budget<=:searchTerm2;");

            $stmt->bindValue(':searchTerm1', $searchTerm1);
            $stmt->bindValue(':searchTerm2', $searchTerm2);

            // execute statement
            $stmt->execute();

            // set the resulting array to associative. 
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            // we want to check if the submit button has been clicked (in our case, it is named Query)
            if(isset($_POST['americanproducers']))
            {
            echo "<h1>American producers with high box office and low budget</h1>";
            // we will now create a table from PHP side 
            echo "<table class='table table-md table-bordered'>";
            echo "<thead class='thead-dark' style='text-align: center'>";

            // initialize table headers
            echo "<tr><th class='col-md-2'>Producer</th>
                <th class='col-md-2'>Movie</th>
                <th class='col-md-2'>Box office collection</th>
                <th class='col-md-2'>Budget</th></tr></thead>";
                // for each row that we fetched, use the iterator to build a table row on front-end
                foreach(new AmericanProducers(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                    echo $v;
                }
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        echo "</table>";
        // destroy our connection
        $conn = null;
    
    ?>

    </div>
    <a href="index.php">Return to home page</a>
</body>
</html>
