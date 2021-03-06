<?php

namespace Auryn;

/**
 * An interface for class dependency injection containers
 */
interface Injector {

    /**
     * Auto-injects class constructor dependencies
     *
     * @param string $className
     * @param array $customDefinition
     */
    function make($className, array $customDefinition = NULL);
    
    /**
     * Defines custom instantiation parameters for the specified class
     * 
     * @param string $className
     * @param array $injectionDefinition
     */
    function define($className, array $injectionDefinition);
    
    /**
     * Defines an implementation class for all occurrences of a given typehint
     * 
     * @param string $originalTypehint
     * @param string $aliasClassName
     */
    function alias($originalTypehint, $aliasClassName);

    /**
     * Delegates the creation of $className instances to $callable.
     *
     * @param string $className
     * @param callable $callable
     */
    function delegate($className, $callable);
    
    /**
     * Shares the specified class across the Injector context
     * 
     * @param mixed $classNameOrInstance
     */
    function share($classNameOrInstance);
    
    /**
     * Unshares the specified class
     * 
     * @param string $className
     */
    function unshare($className);
    
    /**
     * Forces re-instantiation of a shared class the next time it is requested
     * 
     * @param string $className
     */
    function refresh($className);
}
