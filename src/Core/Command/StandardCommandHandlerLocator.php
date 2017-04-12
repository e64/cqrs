<?php

namespace E64\cqrs\Core\Command;


final class StandardCommandHandlerLocator implements CommandHandlerLocator
{

    private $commandHandlerMap;
    function __construct(CommandHandlerMap $commandHandlerMap)
    {
        $this->commandHandlerMap = $commandHandlerMap;
    }
    public function getHandler(string $commandClassName)
    {
       return $this->commandHandlerMap->getCommandHandler($commandClassName);
    }
}