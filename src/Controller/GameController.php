<?php

namespace App\Controller;

use App\Utilities\CreationalGeneral\Door;
use App\Utilities\CreationalGeneral\Maze;
use App\Utilities\CreationalGeneral\Room;
use App\Utilities\CreationalGeneral\Wall;


class GameController extends AppController
{

    /**
     * Elements of Reusable OO Software
     *
     * Implements the UML on pg 130 and the code implementation on page 132-133
     *
     * @return Maze
     */
    public function pp132()
    {
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

        dd($maze);
    }
}
