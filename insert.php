<?php
include 'insert_header.php';
include_once 'Db.php';
include_once 'model/Movie.php';
include_once 'model/Genre.php';


 $conn = Db::getDbConnection();
 
if (isset($_POST['upload'])){
$image = $_FILES['image']['name'];
$target = "images/".basename($image);

       
 
        $query = $conn->prepare("INSERT INTO MOVIES (TITLE, GENRE_ID, YEAR, DURATION, IMAGE) VALUES (:title, :genreid, :year, :duration, :image)");

        $query->bindParam(':title', $_POST['title']);
        $query->bindParam(':genreid', $_POST['genre']);
        $query->bindParam(':year', $_POST['year']);
        $query->bindParam(':duration', $_POST['duration']);
        $query->bindParam(':image', $image);
        
        $query->execute();


  	move_uploaded_file($_FILES['image']['tmp_name'], $target);

        
     }
     
     if (isset($_GET['id'])){
     $query = $conn->prepare("DELETE FROM MOVIES WHERE ID= :id");
     $query->bindParam(':id', $_GET['id']);
     $query->execute();
         
         }
     
     $query = $conn->prepare("SELECT * FROM MOVIES");
    
     $query->execute();
     
     $result = $query->fetchAll();
     
     
   $allMovies=[];
     foreach ($result as $movie){
         
         $newMovie = new Movie();
         array_push($allMovies, $newMovie->getMovieInfo($movie));
         
         }
echo "<br><hr>";
?>
<div class="table-responsive">
<h2 class="display-3 text-center">Popis filmova</h2>
<br><hr>
<table class="table table-bordered text-center">
<tr>
   <th>Slika</th>
   <th>Naslov filma</th>
   <th>Godina</th>
   <th>Trajanje</th>
   <th>Akcija</th>
</tr>

<?php

  foreach ( $allMovies as $movie){
        echo "<tr>";
        echo "<td><img src='images/".$movie->image."' height=\"150\" width=\"100\"> </td>";
         echo "<td>".$movie->title."(".$movie->year.")"."</td>";
         echo "<td>".$movie->year."</td>";
         echo "<td>".$movie->duration." min</td>";
          echo "<td><a href='insert.php?id=$movie->id'>Obriši</a></td>";
      
         echo "</tr>";
         }
      ?>  
</table>
</div>
</div>
</body>
</html>
    
    
    

  
