<?php
namespace Vcalendar;

/**
 * VCalendarEntity
 * 
 * @author Dmitry Taynov
 * @date Aug 30, 2012
 */
abstract class Component
{

    const CLRF = "\r\n";
    const BEGIN = "BEGIN";
    const END = "END";
    const DELIMITER = ":";

    protected $props = array();
    protected $content = '';
    protected $entityName = '';
    protected $entities = array();
    
    private $alias = array();

    public function __construct(array $props = null)
    {
        $this->props = $props;
        $this->entityName = $this->_getEntityName();
        if ($props !== null)
            $this->_loadClassAttributeByProp($props);
    }

    abstract protected function _propAliases();

    abstract protected function _getEntityName();

    private function _loadClassAttributeByProp(array $props)
    {
        foreach ($props as $nameAttribute => $prop) {
            $nameAttribute = $this->_prepareAttributeName($nameAttribute);
            if (isset($this->$nameAttribute)) {
                $this->$nameAttribute = $prop;
            }
        }
    }

    private function _prepareAttributeName($name)
    {
        if (!($name = $this->searchAlias($name))) {
            $parts = explode('-', $name);
            $name = '_';
            foreach ($parts as $i => $part) {
                if ($i == 0)
                    $name .= strtolower($part);
                else
                    $name .= ucfirst(strtolower($part));
            }
        }
        return $name;
    }
    
    private function searchAlias($name)
    {
        
    }

    public function getProps()
    {
        return $this->props;
    }

    public function setProps(array $props)
    {
        $this->props = $props;
    }

    public function create()
    {
        $this->_propAliases();
        $this->content .= $this->begin();
        $this->content .= $this->propsToStr();
        $this->content .= $this->entitiesCreate();
        $this->content .= $this->end();
        return $this->content;
    }

    public function entitiesCreate()
    {
        $content = '';
        /** @var $entity VCalendarEntity */
        foreach ($this->entities as $entity) {
            $content .= $entity->create();
        }
        return $content;
    }

    private function begin()
    {
        return self::BEGIN . self::DELIMITER . $this->entityName . self::CLRF;
    }

    private function end()
    {
        return self::END . self::DELIMITER . $this->entityName . self::CLRF;
    }

    private function propsToStr()
    {
        $str = '';
        foreach ($this->props as $propName => $propValue) {
            if ($propValue == '')
                continue;
            $str .= strtoupper($propName) . self::DELIMITER . $propValue . self::CLRF;
        }

        return $str;
    }

    public function addEntity(Component $entity)
    {
        $this->entities[] = $entity;
    }

    public function addProp($name, $value)
    {
        $this->props[strtoupper($name)] = $value;
    }

    public function alias($propName, $classAttributeValue)
    {
        $this->alias[$propName] = $classAttributeValue;
        $this->addProp($propName, $classAttributeValue);
    }

    public function __toString()
    {
        return $this->create();
    }

}