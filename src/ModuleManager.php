<?php
namespace webcxf\test;

class ModuleManager
{
	public $env;
	public function __construct($env){
		$this->env = $env;
	}
	
	public function say($env){
		if($env != $this->env){
			throw new \Exception('u are wrong!');
		}
		return 'i agree';
	}
}