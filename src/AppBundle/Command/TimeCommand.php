<?php

namespace AppBundle\Command;

use Pimcore;
use Pimcore\Console\AbstractCommand;
use Pimcore\Console\Dumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TimeCommand extends AbstractCommand
{
    protected function configure()
    {
        $this->setName('time')
        ->setDescription('Shows current date and time')
        ->setHelp('This command prints the current date and time');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $now = date('c');
        $message = sprintf("Current date and time: %s", $now);

        $output->writeln($message);
    }
}