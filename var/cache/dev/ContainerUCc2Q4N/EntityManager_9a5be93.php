<?php

namespace ContainerUCc2Q4N;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5f5bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref32f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbf86d = [
        
    ];

    public function getConnection()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getConnection', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getMetadataFactory', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getExpressionBuilder', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'beginTransaction', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getCache', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getCache();
    }

    public function transactional($func)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'transactional', array('func' => $func), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'wrapInTransaction', array('func' => $func), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'commit', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->commit();
    }

    public function rollback()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'rollback', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getClassMetadata', array('className' => $className), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'createQuery', array('dql' => $dql), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'createNamedQuery', array('name' => $name), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'createQueryBuilder', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'flush', array('entity' => $entity), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'clear', array('entityName' => $entityName), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->clear($entityName);
    }

    public function close()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'close', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->close();
    }

    public function persist($entity)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'persist', array('entity' => $entity), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'remove', array('entity' => $entity), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'refresh', array('entity' => $entity), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'detach', array('entity' => $entity), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'merge', array('entity' => $entity), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'contains', array('entity' => $entity), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getEventManager', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getConfiguration', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'isOpen', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getUnitOfWork', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getProxyFactory', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'initializeObject', array('obj' => $obj), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'getFilters', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'isFiltersStateClean', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'hasFilters', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return $this->valueHolder5f5bc->hasFilters();
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

        $instance->initializeref32f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5f5bc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f5bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5f5bc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, '__get', ['name' => $name], $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        if (isset(self::$publicPropertiesbf86d[$name])) {
            return $this->valueHolder5f5bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f5bc;

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

        $targetObject = $this->valueHolder5f5bc;
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
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f5bc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5f5bc;
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
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, '__isset', array('name' => $name), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f5bc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5f5bc;
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
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, '__unset', array('name' => $name), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f5bc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5f5bc;
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
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, '__clone', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        $this->valueHolder5f5bc = clone $this->valueHolder5f5bc;
    }

    public function __sleep()
    {
        $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, '__sleep', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;

        return array('valueHolder5f5bc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref32f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref32f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref32f && ($this->initializeref32f->__invoke($valueHolder5f5bc, $this, 'initializeProxy', array(), $this->initializeref32f) || 1) && $this->valueHolder5f5bc = $valueHolder5f5bc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f5bc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f5bc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
