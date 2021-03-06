<?php

namespace Bingo\Proxies\__CG__\LPCandy\Models;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Page extends \LPCandy\Models\Page implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array('title' => NULL, 'domain' => NULL, 'pathname' => NULL, 'meta_robots' => NULL, 'meta_keywords' => NULL, 'meta_description' => NULL, 'is_responsive' => NULL, 'extra_html' => NULL, 'extra_html_submit' => NULL, 'form' => NULL, 'parent' => NULL, 'children' => NULL, 'user' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->title, $this->domain, $this->pathname, $this->meta_robots, $this->meta_keywords, $this->meta_description, $this->is_responsive, $this->extra_html, $this->extra_html_submit, $this->form, $this->parent, $this->children, $this->user);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function & __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

        return parent::__set($name, $value);
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'title', 'domain', 'pathname', 'meta_robots', 'meta_keywords', 'meta_description', 'is_responsive', 'extra_html', 'extra_html_submit', 'form', 'parent', 'children', 'user');
        }

        return array('__isInitialized__', 'id');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Page $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->title, $this->domain, $this->pathname, $this->meta_robots, $this->meta_keywords, $this->meta_description, $this->is_responsive, $this->extra_html, $this->extra_html_submit, $this->form, $this->parent, $this->children, $this->user);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getPath($sub = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array($sub));

        return parent::getPath($sub);
    }

    /**
     * {@inheritDoc}
     */
    public function getPagePath($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPagePath', array($published));

        return parent::getPagePath($published);
    }

    /**
     * {@inheritDoc}
     */
    public function getScreenshotUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScreenshotUrl', array());

        return parent::getScreenshotUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function copyFromTemplate($other)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyFromTemplate', array($other));

        return parent::copyFromTemplate($other);
    }

    /**
     * {@inheritDoc}
     */
    public function loadBlocks($published = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadBlocks', array($published));

        return parent::loadBlocks($published);
    }

    /**
     * {@inheritDoc}
     */
    public function saveBlocks($blocks, $published = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'saveBlocks', array($blocks, $published));

        return parent::saveBlocks($blocks, $published);
    }

    /**
     * {@inheritDoc}
     */
    public function publish($blocks, $html)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'publish', array($blocks, $html));

        return parent::publish($blocks, $html);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishedHtml()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishedHtml', array());

        return parent::getPublishedHtml();
    }

    /**
     * {@inheritDoc}
     */
    public function makeScreenshot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'makeScreenshot', array());

        return parent::makeScreenshot();
    }

    /**
     * {@inheritDoc}
     */
    public function upload($name, $iconWidth, $iconHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array($name, $iconWidth, $iconHeight));

        return parent::upload($name, $iconWidth, $iconHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function save($flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', array($flush));

        return parent::save($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($flush = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', array($flush));

        return parent::delete($flush);
    }

    /**
     * {@inheritDoc}
     */
    public function getField($field)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getField', array($field));

        return parent::getField($field);
    }

    /**
     * {@inheritDoc}
     */
    public function setField($field, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setField', array($field, $value));

        return parent::setField($field, $value);
    }

}
