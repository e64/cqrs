<?php

namespace E64\cqrs\Core\Command;


final class NotFoundCommandHandlerException extends \Exception
{

    public function __construct($commandClassName, $commandHandlerMap)
    {
        $this->message = sprintf('Command %s not found in %s', $commandClassName, $commandHandlerMap);
    }

}