<?php

namespace MikaTask\Command;

defined('C5_EXECUTE') or die("Access Denied.");

class SampleMikaCommandHandler
{

    public function __invoke(SampleMikaCommand $command)
    {
        error_log('invoked mika sample mika command', 3, '/var/tmp/test.log');
    }
}
