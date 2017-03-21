<?php
use webcxf\test\ModuleManager;
use PHPUnit\Framework\TestCase;

class ModuleManagerTest extends TestCase
{
	public function testConstruct(){
		$module_manager = new ModuleManager('dev');
		$this->assertAttributeEquals('dev', 'env', $module_manager);
	}
	
	/**
	 * @dataProvider additionProvider
	 */
	public function testSayAgree($env){
		$module_manager = new ModuleManager($env);
		$this->assertEquals('i agree', $module_manager->say('dev'));
	}
	
	public function additionProvider(){
		return [
				['live'],
				['dev']
		];
	}
	
	/**
	 * @expectedException Exception
	 */
	public function testSayDisagree(){
		$module_manager = new ModuleManager('dev');
		$module_manager->say('live');
	}
}