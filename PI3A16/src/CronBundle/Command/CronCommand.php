<?php
// src/AppBundle/Command/GreetCommand.php
namespace CronBundle\Command;



use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Bundle\DoctrineBundle\ManagerConfigurator;

use NotificationBundle\Controller\DefaultController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use ReclamationBundle\Controller\ReclamationController;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;



class CronCommand extends ContainerAwareCommand
{
    protected static $defaultName = 'Cron:Command';
    protected function configure()
    {
        $this->setName('Cron:Command')
             ->setDescription('Cron auto Action');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cron= new DefaultController();
        $cron->setContainer($this->getContainer());
        $cron->cronJobDeleteNotification();
        $cron->cronJobClearCorbeille();
    }
}