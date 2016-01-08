<?php
/**
 * ownCloud - shared_session
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Dauba <dauba.k@inwinstack.com>
 * @copyright Dauba 2016
 */

namespace OCA\Shared_Session\AppInfo;

use OCP\AppFramework\App;
use OCA\Shared_Session\DatabaseSessionHandler;

$app = new App('shared_session');

\OCP\Util::connectHook('OC', 'initSession', 'OCA\Shared_Session\Processor', 'shared_session_processor');
/*
$serverContainer = \OC::$server;
$config = $serverContainer->getSystemConfig();
$handler = new DatabaseSessionHandler();
$handler->init($config->getValue("dbtype"),
               $config->getValue("dbhost"),
               $config->getValue("dbuser"),
               $config->getValue("dbpassword"),
               $config->getValue("dbname"));
$session_Est = session_set_save_handler($handler, true);
*/
