<?php

require_once("ecomm_project/Helper.php");
//if(!class_exists('Config')): require('Config '); endif;
//include("Product.php");

//$helper=new Helper();
class HelperTest extends PHPUnit_Framework_TestCase
	{
		public $helper;
		public function testinsert()
		{
			$this->helper=new Helper("ecomm");
		//	//$this->asser('172.27.59.54', true);
			$this->assertEquals("1",$this->helper->insert("a","a","a","a"));

		}
		public function testread_record()
		{
			$this->helper=new Helper("ecomm");
                        //$this->asser('172.27.59.54', true);
                        $this->assertEquals("array",gettype($this->helper->read_record("a","b","c")));
		}
/*	public function testupdateProduct()
		{
			$this->assertTrue(true);
		}
		public function testdeleteProduct()
		{
//			$this->assertEquals('ecomm@123', Config::PASSWORD);
			$this->assertTrue(true);
		}
		public function testviewProduct()
		{
			//$this->assertEquals('Heler.php', Config::HELPER);
			$this->assertTrue(false);
			 $this->assertEquals(['a', 'b', 'c'], ['a', 'c', 'd']);
		}
*/

	}
	
