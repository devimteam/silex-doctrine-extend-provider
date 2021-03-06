<?php

namespace Devim\Provider\DoctrineExtendServiceProvider\Command;

use Doctrine\ORM\EntityManager;
use Isolate\ConsoleServiceProvider\Console\Command\Command;

abstract class DoctrineCommand extends Command
{
    /**
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        return $this->getContainer()['orm.em'];
    }
}
