<?php
namespace Vcalendar\Component;
use Vcalendar\Component;
/**
 * Event
 * 
 * @author Dmitry Taynov
 * @date Aug 30, 2012
 */
class Event extends Component
{
    protected $uid;
    protected $dtstamp;
    protected $start;
    protected $end;
    protected $summary;
    protected $class;
    protected $categories;
    protected $created;
    protected $lastModified;
    protected $location;
    protected $organizer;
    protected $priority;
    protected $seq;
    protected $status;
    protected $transp;
    protected $url;
    protected $recurid;
    protected $duration;
    protected $attach;
    protected $attendee;
    protected $comment;
    protected $contact;
    protected $exdate;
    protected $exrule;
    protected $rstatus;
    protected $related;
    protected $resources;
    protected $rdate;
    protected $rrule;
    protected $xProp;

    protected function _propAliases()
    {
        $this->alias('uid', $this->uid);
        $this->alias('dtstamp', $this->dtstamp);
        $this->alias('dtstart', $this->start);
        $this->alias('dtend', $this->end);
        $this->alias('summary', $this->summary);
        $this->alias('class', $this->class);
        $this->alias('categories', $this->categories);
        $this->alias('created', $this->created);
        $this->alias('last-modified', $this->lastModified);
        $this->alias('location', $this->location);
        $this->alias('priority', $this->priority);
        $this->alias('seq', $this->seq);
        $this->alias('status', $this->status);
        $this->alias('transp', $this->transp);
        $this->alias('url', $this->url);
        $this->alias('revurid', $this->recurid);
        $this->alias('duration', $this->duration);
        $this->alias('attach', $this->attach);
        $this->alias('attendee', $this->attendee);
        $this->alias('comment', $this->comment);
        $this->alias('contact', $this->contact);
        $this->alias('exdate', $this->exdate);
        $this->alias('exrule', $this->exrule);
        $this->alias('rstatus', $this->rstatus);
        $this->alias('related', $this->related);
        $this->alias('resources', $this->resources);
        $this->alias('rdate', $this->rdate);
        $this->alias('rrule', $this->rrule);
        $this->alias('x-prop', $this->xProp);
    }
    
    public function _getEntityName()
    {
        return strtoupper(__CLASS__);
    }
    
    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    public function getDtstamp()
    {
        return $this->dtstamp;
    }

    public function setDtstamp($dtstamp)
    {
        $this->dtstamp = $dtstamp;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getOrganizer()
    {
        return $this->organizer;
    }

    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    public function getSeq()
    {
        return $this->seq;
    }

    public function setSeq($seq)
    {
        $this->seq = $seq;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getTransp()
    {
        return $this->transp;
    }

    public function setTransp($transp)
    {
        $this->transp = $transp;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getRecurid()
    {
        return $this->recurid;
    }

    public function setRecurid($recurid)
    {
        $this->recurid = $recurid;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getAttach()
    {
        return $this->attach;
    }

    public function setAttach($attach)
    {
        $this->attach = $attach;
    }

    public function getAttendee()
    {
        return $this->attendee;
    }

    public function setAttendee($attendee)
    {
        $this->attendee = $attendee;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function getExdate()
    {
        return $this->exdate;
    }

    public function setExdate($exdate)
    {
        $this->exdate = $exdate;
    }

    public function getExrule()
    {
        return $this->exrule;
    }

    public function setExrule($exrule)
    {
        $this->exrule = $exrule;
    }

    public function getRstatus()
    {
        return $this->rstatus;
    }

    public function setRstatus($rstatus)
    {
        $this->rstatus = $rstatus;
    }

    public function getRelated()
    {
        return $this->related;
    }

    public function setRelated($related)
    {
        $this->related = $related;
    }

    public function getResources()
    {
        return $this->resources;
    }

    public function setResources($resources)
    {
        $this->resources = $resources;
    }

    public function getRdate()
    {
        return $this->rdate;
    }

    public function setRdate($rdate)
    {
        $this->rdate = $rdate;
    }

    public function getRrule()
    {
        return $this->rrule;
    }

    public function setRrule($rrule)
    {
        $this->rrule = $rrule;
    }

    public function getXProp()
    {
        return $this->xProp;
    }

    public function setXProp($xProp)
    {
        $this->xProp = $xProp;
    }

}