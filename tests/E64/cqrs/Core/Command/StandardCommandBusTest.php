<?php

namespace E64\cqrs\Core\Command;

use PHPUnit\Framework\TestCase;
use E64\cqrs\Core\Command\Command;
use E64\cqrs\Core\Command\CommandHandler;
use E64\cqrs\Core\Command\InMemoryCommandHandlerMap;
use E64\cqrs\Core\Command\StandardCommandHandlerLocator;
use E64\cqrs\Core\Command\StandardCommandBus;

class StandardCommandBusTest extends TestCase
{
    public function testStandardCommandBus(){

        $dummyCommand = new DummyCommand();
        $dummyCommandHandler = new DummyCommandHandler();
        $this->assertEquals(false, $dummyCommandHandler->test);

        $commandMap = array($dummyCommandHandler->listenTo() => $dummyCommandHandler);
        $inMemoryCommandHandlerMap = new InMemoryCommandHandlerMap($commandMap);
        $standardCommandLocator = new StandardCommandHandlerLocator($inMemoryCommandHandlerMap);

        $standardCommandBus = new StandardCommandBus($standardCommandLocator);
        $standardCommandBus->dispatch($dummyCommand);

        $this->assertEquals(true, $dummyCommandHandler->test);
    }
}

class DummyCommandHandler
{

    public $test = false;
    function __construct()
    {

    }

    public function handle(Command $command)
    {
        $this->test = true;
    }

    public function listenTo(): string
    {
        return DummyCommand::class;
    }
}

class DummyCommand implements Command
{
    public function __construct()
    {
    }
}