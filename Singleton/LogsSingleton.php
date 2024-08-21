<?php

namespace Singleton;

/**
 *
 */
class LogsSingleton
{

    /**
     * @var self $instance Instância da classe de Logs.
     */
    private static LogsSingleton $instance;

    private function __construct()
    {
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        if(empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @param array $log
     * @return void
     */
    public function gravarLog(array $log): void
    {
        $fileName = 'logs.txt';
        $previousLogs = [];
        if(filesize($fileName) > 0) {
            $fileContent = file_get_contents($fileName);
            $previousLogs = json_decode($fileContent, true);
        }

        $previousLogs[] = $log;
        $file = fopen($fileName, "w");
        fwrite($file, json_encode($previousLogs));

        fclose($file);
    }

}
