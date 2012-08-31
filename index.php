<?php
use Vcalendar\Component\Calendar,
    Vcalendar\Component\Event,
    Vcalendar\Type\RecurrenceRule;

spl_autoload_register(function ($name) {
    $path = realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR 
            . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';
    require_once $path;
});

//header ('Content-Type: text/calendar;UTF-8'); // For DEMO
header ('Content-Type: text/plain;UTF-8'); // For TEST

$cal = new Calendar();
$rrule = new RecurrenceRule();
//echo $rrule('test');

$event = new Event(array(
    'create' => date('Ymd\THis'),
    'dtstart' => date('Ymd\THis'),
    'dtend' => date('Ymd\THis'),
));

echo $event->getStart();

$cal->addEvent($event);

echo $cal;