<?php
    class Inventory
    {
        private $artist;

        function __construct($artist)
        {
            $this->artist = $artist;
        }

        function getArtist()
        {
            return $this->artist;
        }
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO artist (artist_name) VALUES ('{$this->getArtist()}');");
        }

        static function getAll()
        {
            $returned_inventory = $GLOBALS['DB']->query("SELECT * FROM artist;");
            $inventory_array = array();
            foreach ($returned_inventory as $piece) {
                $artist = $piece['artist_name'];
                var_dump($artist);
                $new_piece = new Inventory($artist);
                array_push($inventory_array, $new_piece);
            }
            var_dump($inventory_array);
            return $inventory_array;

        }
        static function deleteAll()
        {
           $GLOBALS['DB']->exec("DELETE FROM artist;");
        }

    }






?>
