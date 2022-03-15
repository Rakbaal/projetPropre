<?php

namespace ContainerIyOcZJ2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6942b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd167f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties989e1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getConnection', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getMetadataFactory', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getExpressionBuilder', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'beginTransaction', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getCache', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'transactional', array('func' => $func), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'commit', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->commit();
    }

    public function rollback()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'rollback', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getClassMetadata', array('className' => $className), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'createQuery', array('dql' => $dql), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'createNamedQuery', array('name' => $name), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'createQueryBuilder', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'flush', array('entity' => $entity), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'clear', array('entityName' => $entityName), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->clear($entityName);
    }

    public function close()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'close', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->close();
    }

    public function persist($entity)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'persist', array('entity' => $entity), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'remove', array('entity' => $entity), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'refresh', array('entity' => $entity), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'detach', array('entity' => $entity), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'merge', array('entity' => $entity), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'contains', array('entity' => $entity), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getEventManager', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getConfiguration', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'isOpen', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getUnitOfWork', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getProxyFactory', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'initializeObject', array('obj' => $obj), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'getFilters', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'isFiltersStateClean', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'hasFilters', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return $this->valueHolder6942b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd167f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6942b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6942b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6942b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, '__get', ['name' => $name], $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        if (isset(self::$publicProperties989e1[$name])) {
            return $this->valueHolder6942b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6942b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6942b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6942b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6942b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, '__isset', array('name' => $name), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6942b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6942b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, '__unset', array('name' => $name), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6942b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6942b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, '__clone', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        $this->valueHolder6942b = clone $this->valueHolder6942b;
    }

    public function __sleep()
    {
        $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, '__sleep', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;

        return array('valueHolder6942b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd167f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd167f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd167f && ($this->initializerd167f->__invoke($valueHolder6942b, $this, 'initializeProxy', array(), $this->initializerd167f) || 1) && $this->valueHolder6942b = $valueHolder6942b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6942b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6942b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
