<?php

namespace phpmango\obj;

class BaseObject
{
    public function __get($name)
    {
        if(isset($this->$name)){
            return $this->$name;
        }
        throw new \Exception('The property '.$name.'@'.__CLASS__.' does not exist');
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString()
    {
        return '';
    }
}