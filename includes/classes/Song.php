<?php
    class Song {

        private $con;
        private $id;
        private $mysqliData;
        private $title;
        private $artistId;
        private $albumId;
        private $genre;
        private $duration;
        private $path;

        public function __construct($con, $id) {
            $this->con = $con;
            $this->id = $id;


            $query = mysqli_query($this->con, "SELECT * FROM songs WHERE id='$this->id'");
            $this->mysqliData = mysqli_fetch_array($query);
        }
    }
?>
