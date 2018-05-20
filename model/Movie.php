<?php

class Movie{
    public $id;
    public $title;
    public $genreId;
    public $year;
    public $duration;
    public $image;
    
    public function getMovieInfo($movie){
       
            $this->id = $movie["ID"];
            $this->title =$movie["TITLE"];
            $this->genreId=$movie["GENRE_ID"];
            $this->year=$movie["YEAR"];
            $this->duration = $movie["DURATION"];
            $this->image = $movie["IMAGE"];
            
            return $this;
        }
    
    }

?>