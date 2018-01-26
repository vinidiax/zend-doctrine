<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 26/01/2018
 * Time: 10:07
 */

namespace UserTest\Controller;

use User\Controller\IndexController;
use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase
{

    protected $traceError = false;

    public function setUp()
    {
        // The module configuration should still be applicable for tests.
        // You can override configuration here with test case specific values,
        // such as sample view templates, path stacks, module_listener_options,
        // etc.
        $configOverrides = [];


        $this->setApplicationConfig(ArrayUtils::merge(
        // Grabbing the full application configuration:
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));
        parent::setUp();
    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/user');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('User');
        $this->assertControllerName(IndexController::class);
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('user');
    }

    public function testUserTest()
    {
        $this->assertEquals('1','1');
    }
}