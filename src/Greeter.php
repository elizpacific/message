<?php

namespace PrudnikovaStud\Message;

use http\Encoding\Stream;

class Greeter
{
    public function greet(string $name)
    {
        return 'Hi' . $name . '! How are you?';
    }
}