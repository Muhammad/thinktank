<?php
require_once $SOURCE_ROOT_PATH.'webapp/model/class.PluginHook.php';
require_once $SOURCE_ROOT_PATH.'webapp/model/class.Config.php';
require_once $SOURCE_ROOT_PATH.'webapp/model/class.Webapp.php';
require_once $SOURCE_ROOT_PATH.'webapp/model/class.Crawler.php';
/**
 * ThinkTank Basic Unit Test Case
 *
 * Test case for tests without the need for database availability.
 * @author Gina Trapani <ginatrapani[at]gmail[dot]com>
 *
 */
class ThinkTankBasicUnitTestCase extends UnitTestCase {
    /**
     * Set up
     * Initializes Config and Webapp objects
     */
    function setUp() {
        $config = Config::getInstance();
        $webapp = Webapp::getInstance();
        $crawler = Crawler::getInstance();
        parent::setUp();
    }

    /**
     * Tear down
     * Destroys Config, Webapp, and Session objects
     * @TODO Destroy all SESSION variables
     */
    function tearDown() {
        Config::destroyInstance();
        Webapp::destroyInstance();
        Crawler::destroyInstance();
        if (isset($_SESSION['user'])) {
            $_SESSION['user']=null;
        }
        parent::tearDown();
    }
}
