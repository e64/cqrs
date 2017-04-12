<?php
/**
 * Created by PhpStorm.
 * User: E64
 * Date: 09/04/2017
 * Time: 20:20
 */

namespace E64\cqrs\Core\Command;


class LoggerCommandBusMiddleWare implements CommandBusMiddleWare
{

    private $commandBus;
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function dispatch(Command $command)
    {
        echo "Début de ".__METHOD__;
        $this->commandBus->dispatch($command);
        echo "Fin de ".__METHOD__;
    }
}