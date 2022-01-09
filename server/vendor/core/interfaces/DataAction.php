<?php

namespace vendor\core\interfaces;

interface DataAction
{
    public function read();
    public function write($message);
}