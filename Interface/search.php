<?php
include 'db_connection.php';
$conn = OpenCon();
//echo "Connected Successfully";
?>

<!DOCTYPE html>
<html>
<head>
<style>
#books {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 800px;
}

#books td, #books th {
  border: 1px solid #ddd;
  padding: 4px;
}

#books tr:nth-child(even){background-color: #f2f2f2;}

#books tr:hover {background-color: #ddd;}

#books th {
  padding-top: 3px;
  padding-bottom: 3px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<a href="index.php">Back to Main Page<a> <br><br>
<h1><span id="count"></span> books found in the database!</h1>

<?php
    $qtitle = $_GET['title']; 
    $qauthor = $_GET['author']; 
    $qpublisher = $_GET['publisher']; 
    $qcategory = $_GET['category']; 
    $qlanguage = $_GET['language'];
    $qminyear = (int)$_GET['min_year'];
    $qmaxyear = (int)$_GET['max_year'];
    if($qmaxyear == 0){
        $qmaxyear = 10000000;
    }
    if($qcategory == "All"){
        $qcategory = '';
    }
    if($qlanguage == "All"){
        $qlanguage = '';
    }
    // gets value sent over search form

     
    if($conn){ 
         
        $qtitle = htmlspecialchars($qtitle); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        //$query = mysqli_real_escape_string($query);
        // makes sure nobody uses SQL injection

         
        $raw_results = mysqli_query($conn, "SELECT * FROM example1
            WHERE (`Title` LIKE '%".$qtitle."%') AND (`Author` LIKE '%".$qauthor."%') 
            AND (`Publisher` LIKE '%".$qpublisher."%')  AND (Year >= $qminyear) AND (Year <= $qmaxyear)
            AND (`Category` LIKE '%".$qcategory."%') AND (`Language` LIKE '%".$qlanguage."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            $countloop = 0;
            echo "<table id='books'>";
            echo "<tr>";
                echo "<th><h3>Book Title</h3></th>";
                echo "<th>Author</th>";
                echo "<th>Year</th>";
                echo "<th>Publisher</th>";
                echo "<th>Language</th>";
                echo "<th>Category</th>";
            echo "</tr>";
            while($results = mysqli_fetch_array($raw_results)){
                echo "<tr>";
                    echo "<td><h3>".$results['Title']."</h3>"."</td>";
                    // posts results gotten from database(title and text) you can also show id ($results['id'])
                    echo "<td>" . $results['Author'] . "</td>";
                    echo "<td>" . $results['Year'] . "</td>";
                    echo "<td>" . $results['Publisher'] . "</td>";
                    echo "<td>" . $results['Language'] . "</td>";
                    echo "<td>" . $results['Category'] . "</td>";
                echo "</tr>";
                if ($countloop > 998){
                break;
                }
                $countloop += 1;
            }
            echo "</table>";
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ 
        echo "Database connection failed. ";
    }
    CloseCon($conn);
?>

<script>
function myFunction() {
  var x = document.getElementById("books").rows.length - 1;
  document.getElementById("count").innerHTML =  x;
}
myFunction()
</script>


</body>
</html>
