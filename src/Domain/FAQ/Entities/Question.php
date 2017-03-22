<?php

namespace PS\Domain\FAQ\Entities;

class Question
{
    public $id;
    public $content;
    public $user;
    public $isClosed;
    public $votes;
}