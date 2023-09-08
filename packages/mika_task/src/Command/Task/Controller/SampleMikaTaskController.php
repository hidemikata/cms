<?php

namespace MikaTask\Command\Task\Controller;

use Concrete\Core\Command\Task\Input\InputInterface;
use Concrete\Core\Command\Task\Runner\CommandTaskRunner;
use Concrete\Core\Command\Task\Runner\TaskRunnerInterface;
use Concrete\Core\Command\Task\TaskInterface;
use Concrete\Core\Command\Task\Controller\AbstractController;
use  MikaTask\Command\SampleMikaCommand;

defined('C5_EXECUTE') or die("Access Denied.");

class SampleMikaTaskController extends AbstractController
{

    public function getName(): string
    {
        return t('Clear Log(mika_task)');
    }

    public function getDescription(): string
    {
        return t('Clears the Concrete database log table..(mika_task)');
    }

    public function getTaskRunner(TaskInterface $task, InputInterface $input): TaskRunnerInterface
    {
        $command = new SampleMikaCommand();
        return new CommandTaskRunner($task, $command, t('Log Sample Mika successfully.'));
    }
}
