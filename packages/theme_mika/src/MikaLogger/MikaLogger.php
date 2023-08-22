<?php

namespace MikaSrc\MikaLogger;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;


class MikaLogger
{
    public $logger;

    public function __construct()
    {
        error_log('MikaLog constract' . "\n", 3, '/var/tmp/test.log');

        date_default_timezone_set("Asia/Tokyo");
        $log = new Logger('mikalogger');
        $dateFormat = "Y-m-d H:i:s";
        $output     = "%datetime%|%level_name%|%message% %context%\n";
        $formatter  = new LineFormatter($output, $dateFormat, false, true);
        $formatter->includeStacktraces(true);
        $streamHandler_all = new RotatingFileHandler('/var/log/concretecms/mikaclub.log', 365);
        $streamHandler_error = new RotatingFileHandler('/var/log/concretecms/mikaclub_error.log', 365, Logger::ERROR);

        $streamHandler_all->setFormatter($formatter);
        $streamHandler_error->setFormatter($formatter);
        $log->pushHandler($streamHandler_all);
        $log->pushHandler($streamHandler_error);

        $this->logger = $log;
    }
    public function getLogger()
    {
        return $this->logger;
    }
}
