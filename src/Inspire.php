<?php

namespace Mathildegrimal\PackageComposer;

class Inspire
{

    private $index = 0;
    protected $inspirations = [
        'You are amazing',
        'You are great',
        'You are beautiful'
    ];

    public function __construct($index)
    {
        if($index > count($this->inspirations)-1){
            echo "Error the index must be less than ".(count($this->inspirations)-1);
            exit();
        } else {
            $this->index = $index;
        }
    }

    public function displayInspiration($name)
    {
        return $this->inspirations[$this->index].' '.$name;
    }
}
?>