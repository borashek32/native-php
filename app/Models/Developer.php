<?php

namespace App\Models;

class Developer extends Worker
{
    public function work(): string
    {
        return "{$this->position} {$this->name} is coding. Contact: {$this->email}";
    }

    public function rest(): string
    {
        return "{$this->name} is taking a break from coding";
    }
}
