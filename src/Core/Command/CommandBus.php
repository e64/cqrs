<?php
/**
 * Created by PhpStorm.
 * User: E64
 * Date: 08/04/2017
 * Time: 01:14
 */

namespace E64\cqrs\Core\Command;


use E64\cqrs\Core\Bus;
use E64\cqrs\Core\Message;

interface CommandBus extends Bus
{

    //public function __construct(CommandHandlerLocator $commandHandlerLocator);

    public function dispatch(Command $command);
}