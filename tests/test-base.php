<?php

class BaseTest extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'Yeoman_Generated_Plugin') );
	}
	
	function test_get_instance() {
		$this->assertTrue( yeoman_generated_plugin() instanceof Yeoman_Generated_Plugin );
	}
}
