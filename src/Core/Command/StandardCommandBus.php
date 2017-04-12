<?php
/**
 * Created by PhpStorm.
 * User: E64
 * Date: 08/04/2017
 * Time: 12:46
 */

namespace E64\cqrs\Core\Command;


class StandardCommandBus implements CommandBus
{
    private $commandHandlerLocator;

    public function __construct(CommandHandlerLocator $commandHandlerLocator)
    {
        $this->commandHandlerLocator = $commandHandlerLocator;
    }

    public function dispatch(Command $command)
    {
        $commandClassName = get_class($command);
        echo "commandClassName $commandClassName \n";
        $this->commandHandlerLocator->getHandler($commandClassName)->handle($command);
    }
}