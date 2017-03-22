<?php

namespace PS\Domain\FAQ\Entities;

abstract class Vote
{
    public $id;
    public $type;
    public $user;
}