<?php

namespace E64\cqrs\Core\Command;

use E64\cqrs\Core\Handler;

interface CommandHandler extends Handler
{
    public function handle(Command $command);
}