<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Inventory.php";

    $server = 'mysql:host=localhost:8889;dbname=inventory_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class InventoryTest extends PHPUnit_Framework_TestCase
    {

        function test_save()
        {
            //Arrange
            $artist = "Picasso";
            $artist2 = "Pollack";

            $test_input = new Inventory($artist);
            $test_input2 = new Inventory($artist2);

            $test_input->save();
            $test_input2->save();
            //Act
            $result = Inventory::getAll();
            //Assert
            $this->assertEquals([$test_input, $test_input2], $result);
        }

        function test_deleteAll()
        {
            //Arrange
            $artist = "Picasso";
            $artist2 = "Pollack";
            $test_input = new Inventory($artist);
            $test_input->save();
            $test_input2 = new Inventory($artist2);
            $test_input2->save();

            //Act
            Inventory::deleteAll();

            //Assert
            $result = Inventory::getAll();
            $this->assertEquals([], $result);
        }

        function test_find()
        {
            //Arrange
            $artist = "Picasso";
            $artist2 = "Pollack";
            // $id = 207;
            // $id2=2;
            $test_input = new Inventory($artist);
            $test_input->save();
            $test_input2 = new Inventory($artist2);
            $test_input2->save();

            //Act
            $id_test = $test_input->getId();
            echo($id_test);
            $result = (int) Inventory::find($id);
            echo($result);


            //Assert
            $this->assertEquals($id_test, $result[0]);
        }
    }
?>
