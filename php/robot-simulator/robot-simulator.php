<?php

class Robot
{
    const DIRECTION_NORTH = 'NORTH';

    const DIRECTION_EAST = 'EAST';

    const DIRECTION_SOUTH = 'SOUTH';

    const DIRECTION_WEST = 'WEST';

    const CONNECTIONS = [
        self::DIRECTION_NORTH => [
            'right' => self::DIRECTION_EAST,
            'left'  => self::DIRECTION_WEST,
            'axis'  => 'x',
            'delta' => 1,
        ],
        self::DIRECTION_EAST => [
            'right' => self::DIRECTION_SOUTH,
            'left'  => self::DIRECTION_NORTH,
            'axis'  => 'y',
            'delta' => 1,
        ],
        self::DIRECTION_SOUTH => [
            'right' => self::DIRECTION_WEST,
            'left'  => self::DIRECTION_EAST,
            'axis'  => 'x',
            'delta' => -1,
        ],
        self::DIRECTION_WEST => [
            'right' => self::DIRECTION_NORTH,
            'left'  => self::DIRECTION_SOUTH,
            'axis'  => 'y',
            'delta' => -1,
        ],
    ];

    public $position = [0 , 0];

    public $direction;

    public function __construct(array $position, string $direction)
    {
        $this->position = $position;
        $this->direction = $direction;
    }

    public function turnRight()
    {
        $this->turn('right');

        return $this;
    }

    public function turnLeft()
    {
        $this->turn('left');

        return $this;
    }

    public function advance()
    {
        $this->position[0] = self::CONNECTIONS[$this->direction]['axis'] == 'x'
                           ? $this->position[0]
                           : $this->position[0] + self::CONNECTIONS[$this->direction]['delta'];

        $this->position[1] = self::CONNECTIONS[$this->direction]['axis'] == 'y'
                           ? $this->position[1]
                           : $this->position[1] + self::CONNECTIONS[$this->direction]['delta'];

        return $this;
    }

    public function instructions(string $instructions)
    {
        $instructions = str_split($instructions);

        foreach ($instructions as $instruction) {
            if ($instruction == 'A') {
                $this->advance();
            } else if ($instruction == 'R') {
                $this->turnRight();
            } else if ($instruction == 'L') {
                $this->turnLeft();
            } else {
                throw new InvalidArgumentException('Provided instructions are not valid.');
            }
        }

        return $this;
    }

    private function turn(string $direction)
    {
        $this->direction = self::CONNECTIONS[$this->direction][$direction];
    }
}
