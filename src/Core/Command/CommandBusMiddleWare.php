<?php
/**
 * Created by PhpStorm.
 * User: E64
 * Date: 09/04/2017
 * Time: 20:05
 */

namespace E64\cqrs\Core\Command;


use E64\cqrs\Core\Bus;
use E64\cqrs\Core\BusMiddleWare;

interface CommandBusMiddleWare extends CommandBus
{
    public function __construct(CommandBus $commandBus);

    public function dispatch(Command $command);
}