<?php

namespace PinpointDesigns\CliActions\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Greeting extends Command
{
    protected function configure()
    {
        $this->setName('greeting');
        $this->setDescription('Start your day with a smile and lots of joy!');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello');
    }
}
