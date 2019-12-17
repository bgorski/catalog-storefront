<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TestFramework\TestCase;

class WebApiHelper extends WebapiAbstract
{
//    /**
//     * Application cache model.
//     *
//     * @var \Magento\Framework\App\Cache
//     */
//    protected $_appCache;
//
//    /**
//     * The list of models to be deleted automatically in tearDown().
//     *
//     * @var array
//     */
//    protected $_modelsToDelete = [];
//
//    /**
//     * Namespace for fixtures is different for each test case.
//     *
//     * @var string
//     */
//    protected static $_fixturesNamespace;
//
//    /**
//     * The list of registered fixtures.
//     *
//     * @var array
//     */
//    protected static $_fixtures = [];
//
//    /**
//     * Fixtures to be deleted in tearDown().
//     *
//     * @var array
//     */
//    protected static $_methodLevelFixtures = [];
//
//    /**
//     * Fixtures to be deleted in tearDownAfterClass().
//     *
//     * @var array
//     */
//    protected static $_classLevelFixtures = [];
//
//    /**
//     * Original Magento config values.
//     *
//     * @var array
//     */
//    protected $_origConfigValues = [];
//
//    /**
//     * The list of instantiated Web API adapters.
//     *
//     * @var \Magento\TestFramework\TestCase\Webapi\AdapterInterface[]
//     */
//    protected $_webApiAdapters;
//
//    /**
//     * The list of available Web API adapters.
//     *
//     * @var array
//     */
//    protected $_webApiAdaptersMap = [
//        'soap' => \Magento\TestFramework\TestCase\Webapi\Adapter\Soap::class,
//        'rest' => \Magento\TestFramework\TestCase\Webapi\Adapter\Rest::class,
//    ];
//
//    /**
//     * Initialize fixture namespaces.
//     * //phpcs:disable
//     */
//    public static function setUpBeforeClass()
//    {
//        //phpcs:enable
//        parent::setUpBeforeClass();
//        self::_setFixtureNamespace();
//    }
//
//    /**
//     * Run garbage collector for cleaning memory
//     *
//     * @return void
//     * //phpcs:disable
//     */
//    public static function tearDownAfterClass()
//    {
//        //phpcs:enable
//        //clear garbage in memory
//        gc_collect_cycles();
//
//        $fixtureNamespace = self::_getFixtureNamespace();
//        if (isset(self::$_classLevelFixtures[$fixtureNamespace])
//            && count(self::$_classLevelFixtures[$fixtureNamespace])
//        ) {
//            self::_deleteFixtures(self::$_classLevelFixtures[$fixtureNamespace]);
//        }
//
//        //ever disable secure area on class down
//        self::_enableSecureArea(false);
//        self::_unsetFixtureNamespace();
//        parent::tearDownAfterClass();
//    }
//
//    /**
//     * Call safe delete for models which added to delete list, Restore config values changed during the test
//     *
//     * @return void
//     */
//    protected function tearDown()
//    {
//        $fixtureNamespace = self::_getFixtureNamespace();
//        if (isset(self::$_methodLevelFixtures[$fixtureNamespace])
//            && count(self::$_methodLevelFixtures[$fixtureNamespace])
//        ) {
//            self::_deleteFixtures(self::$_methodLevelFixtures[$fixtureNamespace]);
//        }
//        $this->_callModelsDelete();
//        $this->_restoreAppConfig();
//        parent::tearDown();
//    }

    /**
     * Perform Web API call to the system under test.
     *
     * @see \Magento\TestFramework\TestCase\Webapi\AdapterInterface::call()
     * @param array $serviceInfo
     * @param array $arguments
     * @param string|null $webApiAdapterCode
     * @param string|null $storeCode
     * @param \Magento\Integration\Model\Integration|null $integration
     * @return array|int|string|float|bool Web API call results
     */
    public function _webApiCall(
        $serviceInfo,
        $arguments = [],
        $webApiAdapterCode = null,
        $storeCode = null,
        $integration = null
    ) {
        return parent::_webApiCall($serviceInfo, $arguments, $webApiAdapterCode, $storeCode, $integration);
    }
}
