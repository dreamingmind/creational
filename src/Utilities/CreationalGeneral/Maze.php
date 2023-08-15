<?php

namespace App\Utilities\CreationalGeneral;

class Maze
{

    /**
     * @var Room[]
     */
    private array $_rooms;

    public function addRoom(Room $room)
    {
        $this->_rooms[$room->get_room_number()] = $room;
    }

    public function room(int $number)
    {
        return $this->_rooms[$number];
    }
}
