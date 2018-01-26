<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 26/01/2018
 * Time: 10:36
 */

namespace SiteTest\Controller;

use Site\Controller\IndexController;
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
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('Site');
        $this->assertControllerName(IndexController::class);
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('site');
    }

    public function testUserTest()
    {
        $this->assertEquals('1','1');
    }
}