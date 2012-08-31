<?php
namespace Vcalendar\Type;

abstract class Type
{
    abstract function __invoke();
    abstract function loadFromInvoke(array $args);
    
}