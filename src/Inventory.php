<?php
    class Inventory
    {
        private $artist;
        private $id;

        function __construct($artist, $id = null)
        {
            $this->artist = $artist;
            $this->id = $id;
        }

        function getArtist()
        {
            return $this->artist;
        }
        function getId()
        {
            return $this->id;
        }
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO artist (artist_name) VALUES ('{$this->getArtist()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll()
        {
            $returned_inventory = $GLOBALS['DB']->query("SELECT * FROM artist;");
            $inventory_array = array();
            foreach ($returned_inventory as $piece) {
                $artist = $piece['artist_name'];
                $id = $piece['id'];
                $new_piece = new Inventory($artist, $id);
                array_push($inventory_array, $new_piece);
            }
            return $inventory_array;
        }

        static function find($search_id)
        {
            $found_artist = null;
            $inventory = Inventory::getAll();
            foreach ($inventory as $id) {
                $artist_id = $id->getId();
                if ($artist_id == $search_id) {
                    $found_artist = $id;
                }
                return $found_artist;
            }

        }
        static function deleteAll()
        {
           $GLOBALS['DB']->exec("DELETE FROM artist;");
        }

    }






?>
