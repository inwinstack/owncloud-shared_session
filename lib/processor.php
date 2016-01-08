<?php

namespace OCA\Shared_Session;

/**
 * Class Processor
 * @author Dauba
 */
class Processor {

    /**
     * shared session
     *
     * @return void
     */
    public static function shared_session_processor() {
        $serverContainer = \OC::$server;
        $config = $serverContainer->getSystemConfig();
        $handler = new DatabaseSessionHandler();
        $handler->init($config->getValue("dbtype"),
                       $config->getValue("dbhost"),
                       $config->getValue("dbuser"),
                       $config->getValue("dbpassword"),
                       $config->getValue("dbname"));
        $session_Est = session_set_save_handler($handler, true);
    }
}
