<?php

namespace App\Models;

class Designer extends Worker
{
    public function work(): string
    {
        return "{$this->position} {$this->name} is drawing. Contact: {$this->email}";
    }

    public function rest(): string
    {
        return "{$this->name} is taking a break from drawing";
    }
}
