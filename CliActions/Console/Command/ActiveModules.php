<?php

namespace PinpointDesigns\CliActions\Console\Command;

use Magento\Framework\Console\Cli;
use Magento\Framework\Module\ModuleListInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ActiveModules extends Command
{
    /**
     * @var ModuleListInterface
     */
    private $moduleList;

    public function __construct(ModuleListInterface $moduleList)
    {
        parent::__construct(null);
        $this->moduleList = $moduleList;
    }

    protected function configure()
    {
        $this->setName('check-active');
        $this->setDescription('A list of all active modules.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $activeModuleNames = $this->getActiveModules();

        if (count($activeModuleNames) === 0) {
            $output->writeln('None');
            return Cli::RETURN_FAILURE;
        }

        $output->writeln(implode("\n", $activeModuleNames));
    }

    /**
     * @return array
     */
    protected function getActiveModules(): array
    {
        return $this->moduleList->getNames();
    }
}
