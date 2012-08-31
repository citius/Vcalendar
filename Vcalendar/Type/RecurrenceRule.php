<?php
namespace Vcalendar\Type;
use Vcalendar\Type\Type;
/**
 * RecurrenceRule
 * 
 * @author Dmitry Taynov
 * @date Aug 31, 2012
 */
class RecurrenceRule extends Type
{   
    protected $freq;
    protected $enddate;
    protected $byseclist;
    protected $seconds;
    protected $byminlist;
    protected $minutes;
    protected $byhrlist;
    protected $hour;
    protected $bywday;
    protected $weekdaynum;
    protected $plus;
    protected $minus;
    protected $ordwk;
    protected $weekday;
    protected $bymodaylist;
    protected $monthdaynum;
    protected $ordyrday;
    protected $bywknolist;
    protected $weeknum;
    protected $bymolist;
    protected $monthnum;
    protected $bysplist;
    protected $setposday;



    public function __invoke()
    {
        $this->loadFromInvoke(func_get_args());
        var_dump($this->freq);
    }
    
    public function loadFromInvoke(array $args)
    {
        $this->freq = $args[0];
    }
}