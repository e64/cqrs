<?php

namespace E64\cqrs\Core\Command;


use E64\cqrs\Core\MessageHandlerMap;

interface CommandHandlerMap extends MessageHandlerMap
{
    public function getCommandHandler(string $command);
}