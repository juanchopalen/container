<?php 

namespace Styde\Container;


abstract class Provider
{
	protected $container;
	
	function __construct(Container $container)
	{
		$this->container = $container;
	}

	abstract public function register();
}