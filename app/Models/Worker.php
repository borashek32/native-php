<?php

namespace App\Models;

/**
 * @param string $name
 * @param string $email
 * @param string $position
*/
abstract class Worker
{
    public string $name;
    public string $email;
    public string $position;

    public function __construct(
        string $name,
        string $email,
        string $position
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->position = $position;
    }

    /**
     * @return string
     */
    abstract public function work(): string;

    /**
     * @return string
     */
    abstract public function rest(): string;
}