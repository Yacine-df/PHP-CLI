<?php

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{

    public function configure()
    {
        $this->setName('hello')
            ->setDescription('offers a greeting to someone')
            ->addArgument('name', InputArgument::REQUIRED, 'your name');
    }


    public function execute(InputInterface $input, OutputInterface $output): int
    {

        $name = $input->getArgument('name');

        $output->writeln("<error>hello {$name}</error>");

        return Command::SUCCESS;
    }
}
