<?php

namespace App\Utilities\CreationalGeneral;

class Room extends MapSite
{

    const NORTH = 'North';
    const EAST = 'East';
    const SOUTH = 'South';
    const WEST = 'West';

    private int $_room_number;

    public function __construct(int $_room_number)
    {
        $this->_room_number = $_room_number;
    }

    /**
     * @var MapSite[]
     */
    private array $_sides = [];

    public function enter()
    {
        parent::enter(); // TODO: Change the autogenerated stub
    }

    public function setSide($direction, MapSite $side)
    {
        $this->_sides[$direction] = $side;
    }

    public function getSide(int $direction) : MapSite
    {
        return $this->_sides[$direction];
    }

    /**
     * @return int
     */
    public function get_room_number(): int
    {
        return $this->_room_number;
    }
}