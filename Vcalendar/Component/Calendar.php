<?php
namespace Vcalendar\Component;
use Vcalendar\Component;
/**
 * iCal
 * 
 * @author Dmitry Taynov
 * @date Aug 30, 2012
 * @see http://www.ietf.org/rfc/rfc2445.txt
 */
class Calendar extends Component
{
    protected $_version = '2.0';
    protected $_prodid = '-//Citcode/Simple vCal generator//EN';
    
    protected function _propAliases()
    {
        $this->alias('version', $this->_version);
        $this->alias('prodid', $this->_prodid);
    }
    
    protected function _getEntityName()
    {
        return strtoupper(__CLASS__);
    }

    public function addEvent(Event $event)
    {
        $this->addEntity($event);
        return $this;
    }
    
    public function getVersion()
    {
        return $this->_version;
    }

    public function setVersion($version)
    {
        $this->_version = $version;
    }

    public function getProdid()
    {
        return $this->_prodid;
    }

    public function setProdid($prodid)
    {
        $this->_prodid = $prodid;
    }

}