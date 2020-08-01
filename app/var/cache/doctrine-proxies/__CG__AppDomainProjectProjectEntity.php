<?php

namespace App\Proxies\__CG__\App\Domain\Project;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProjectEntity extends \App\Domain\Project\ProjectEntity implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'status', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'name', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'description', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'email', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'image', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'projectUsers', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'directions', 'id', 'created', 'updated', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'deleted'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'status', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'name', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'description', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'email', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'image', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'projectUsers', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'directions', 'id', 'created', 'updated', '' . "\0" . 'App\\Domain\\Project\\ProjectEntity' . "\0" . 'deleted'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProjectEntity $proxy) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getStatus(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(int $status): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getProjectUsers(): ?\Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProjectUsers', []);

        return parent::getProjectUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function setProjectUsers(?\Doctrine\Common\Collections\Collection $projectUsers): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProjectUsers', [$projectUsers]);

        parent::setProjectUsers($projectUsers);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirections(): ?\Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirections', []);

        return parent::getDirections();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirections(?\Doctrine\Common\Collections\Collection $directions): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirections', [$directions]);

        parent::setDirections($directions);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator(): \App\Domain\User\UserEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedValue', []);

        return parent::setUpdatedValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedLog', []);

        return parent::getCreatedLog();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommonValues(\App\Infrastructure\Shared\DTO\AbstractDTOInterface $DTO, bool $isUpdate = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommonValues', [$DTO, $isUpdate]);

        return parent::setCommonValues($DTO, $isUpdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted(?\DateTime $deleted): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        parent::setDeleted($deleted);
    }

}
