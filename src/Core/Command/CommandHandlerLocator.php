<?php

namespace E64\cqrs\Core\Command;


interface CommandHandlerLocator
{
public function getHandler(string $commandClassName);
}