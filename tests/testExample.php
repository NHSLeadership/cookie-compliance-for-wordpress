<?php

use CCFW\Activate;

class testExample extends PHPUnit\Framework\TestCase {

    public function setUp(): void
    {
         WP_Mock::setUp();
    }
 
    public function tearDown(): void
    {
         WP_Mock::tearDown();
    }

    	/**
	 * Instantiate an instance of the class to be tested
	 * @return WP_Mock_Demo_Plugin
	 */
	private function get_activate() {
          $plugin = new activate();
          return $plugin;
      }
     /**
      * @test
      */
    public function on_plugin_activation(): void
    {     

          \WP_Mock::userFunction(
               'get_option', array(
                    'times' => 1,
                    'return' => true
                    ));

          $plugin = new activate();

          //\WP_Mock::expectFilterAdded( 'get_option', $plugin );
          
          $this->assertEquals(1, $plugin->activate());
    }
 }