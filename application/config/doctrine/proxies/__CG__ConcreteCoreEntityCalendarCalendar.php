<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Calendar;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Calendar extends \Concrete\Core\Entity\Calendar\Calendar implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'site', 'events', 'permission_assignments', 'caID', 'caName', 'caOverridePermissions', 'eventPageAttributeKeyHandle', 'enableMoreDetails', 'eventPageParentID', 'eventPageTypeID', 'eventPageAssociatedID'];
        }

        return ['__isInitialized__', 'site', 'events', 'permission_assignments', 'caID', 'caName', 'caOverridePermissions', 'eventPageAttributeKeyHandle', 'enableMoreDetails', 'eventPageParentID', 'eventPageTypeID', 'eventPageAssociatedID'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Calendar $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite($site)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', []);

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function arePermissionsSetToOverride()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'arePermissionsSetToOverride', []);

        return parent::arePermissionsSetToOverride();
    }

    /**
     * {@inheritDoc}
     */
    public function setOverridePermissions($caOverridePermissions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOverridePermissions', [$caOverridePermissions]);

        return parent::setOverridePermissions($caOverridePermissions);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventPageAttributeKeyHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventPageAttributeKeyHandle', []);

        return parent::getEventPageAttributeKeyHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventPageAttributeKeyHandle($eventPageAttributeKeyHandle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventPageAttributeKeyHandle', [$eventPageAttributeKeyHandle]);

        return parent::setEventPageAttributeKeyHandle($eventPageAttributeKeyHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventPageTypeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventPageTypeID', []);

        return parent::getEventPageTypeID();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventPageTypeID($eventPageTypeID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventPageTypeID', [$eventPageTypeID]);

        return parent::setEventPageTypeID($eventPageTypeID);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventPageParentID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventPageParentID', []);

        return parent::getEventPageParentID();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventPageParentID($eventPageParentID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventPageParentID', [$eventPageParentID]);

        return parent::setEventPageParentID($eventPageParentID);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($caName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$caName]);

        return parent::setName($caName);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimezone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimezone', []);

        return parent::getTimezone();
    }

    /**
     * {@inheritDoc}
     */
    public function getCalendarTopicsAttributeKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalendarTopicsAttributeKey', []);

        return parent::getCalendarTopicsAttributeKey();
    }

    /**
     * {@inheritDoc}
     */
    public function enableMoreDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enableMoreDetails', []);

        return parent::enableMoreDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnableMoreDetails($enableMoreDetails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnableMoreDetails', [$enableMoreDetails]);

        return parent::setEnableMoreDetails($enableMoreDetails);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventPageAssociatedID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventPageAssociatedID', []);

        return parent::getEventPageAssociatedID();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventPageAssociatedID($eventPageAssociatedID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventPageAssociatedID', [$eventPageAssociatedID]);

        return parent::setEventPageAssociatedID($eventPageAssociatedID);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectIdentifier', []);

        return parent::getPermissionObjectIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionAssignmentClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionAssignmentClassName', []);

        return parent::getPermissionAssignmentClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectKeyCategoryHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectKeyCategoryHandle', []);

        return parent::getPermissionObjectKeyCategoryHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionResponseClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionResponseClassName', []);

        return parent::getPermissionResponseClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function setChildPermissionsToOverride()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildPermissionsToOverride', []);

        return parent::setChildPermissionsToOverride();
    }

    /**
     * {@inheritDoc}
     */
    public function setPermissionsToOverride()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPermissionsToOverride', []);

        return parent::setPermissionsToOverride();
    }

    /**
     * {@inheritDoc}
     */
    public function assignPermissions($userOrGroup, $permissions = [], $accessType = 10, $cascadeToChildren = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'assignPermissions', [$userOrGroup, $permissions, $accessType, $cascadeToChildren]);

        return parent::assignPermissions($userOrGroup, $permissions, $accessType, $cascadeToChildren);
    }

}
