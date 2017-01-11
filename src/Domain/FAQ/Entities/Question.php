<?php

namespace PS\Domain\FAQ;

class Question
{
    public $id;
    public $content;
    public $user;
    public $isClosed;
    public $votes;
}