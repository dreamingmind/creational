<?php
spl_autoload_register(function ($class) {
    // convert the class namespace to a file path
    $file = str_replace('\\', '/', $class) . '.php';
    // search for the file in the root directory
    $path = __DIR__ . '/' . $file;
    var_dump("\n\n---### ", $path,"---### \n\n", );
    if (file_exists($path)) {
        require_once $path;
    }
});

//require_once('src/GoF/CreationalGeneral/Door.php') ;
//require_once( 'src/GoF/CreationalGeneral/Maze.php');
//require_once( 'src/GoF/CreationalGeneral/Room.php');
//require_once( 'src/GoF/CreationalGeneral/Wall.php');

use App\Utilities\CreationalGeneral\Door;
use App\Utilities\CreationalGeneral\Maze;
use App\Utilities\CreationalGeneral\Room;
use App\Utilities\CreationalGeneral\Wall;

$maze = new Maze();

$r1 = new Room(1);
$r2 = new Room(2);
$door = new Door ($r1, $r2);

$maze->addRoom($r1);
$maze->addRoom ($r2);

$r1->setSide(Room::NORTH,new Wall());
$r1->setSide(Room::EAST, $door);
$r1->setSide(Room::SOUTH,new Wall());
$r1->setSide(Room::WEST,new Wall());

$r2->setSide(Room::NORTH,new Wall());
$r2->setSide(Room::EAST, new Wall());
$r2->setSide(Room::SOUTH,new Wall());
$r2->setSide(Room::WEST,$door);

var_dump($maze);
return $maze;
