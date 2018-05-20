<?php
include 'index_header.php';
include_once 'Db.php';
include_once 'model/Movie.php';
include_once 'model/Genre.php';


if (isset($_GET['letter'])){
    $conn = Db::getDbConnection();
    
     $query = $conn->prepare("SELECT * FROM MOVIES WHERE TITLE LIKE :letter ORDER BY TITLE");
    $query->bindParam(':letter', $_GET['letter']);
     $query->execute();
     $result = $query->fetchAll();

$allMoviesWithGivenLetter=[];
     foreach ($result as $movie){
         
         $newMovie = new Movie();
         array_push($allMoviesWithGivenLetter, $newMovie->getMovieInfo($movie));
         
         }
         
  foreach ( $allMoviesWithGivenLetter as $movie){
    ?>
      <div class="d-flex justify-content-center">
        <img src="images/<?php echo $movie->image; ?>" width="217" height="314">
    </div>
    
    
       <p class="text-center font-italic"> <?php echo $movie->title; ?> (<?php echo $movie->year ?>) 
         
       <br> <?php echo $movie->duration; ?> min</p>
         
  
         <?php
         echo "<br><br>";
         }
}
?>
 </div>
    </body>    
</html>
