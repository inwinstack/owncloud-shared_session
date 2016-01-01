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
$serverContainer = $app->getContainer()->getServer();

$config = $serverContainer->getSystemConfig();
$handler = new DatabaseSessionHandler();
$handler->init($config->getValue("dbtype"),
               $config->getValue("dbhost"),
               $config->getValue("dbuser"),
               $config->getValue("dbpassword"),
               $config->getValue("dbname"));
$session_Est = session_set_save_handler($handler, true);
