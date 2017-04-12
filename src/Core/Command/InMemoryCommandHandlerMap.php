<?php


namespace E64\cqrs\Core\Command;
use phpDocumentor\Reflection\Types\String_;



final class InMemoryCommandHandlerMap implements CommandHandlerMap
{
    private $commandHandlerCollection;

    /**
     * InMemoryCommandHandlerMap constructor.
     * @param array $commandHandlerCollection
     */
    public function __construct(array $commandHandlerCollection)
    {
        $this->commandHandlerCollection = $commandHandlerCollection;
    }

    protected function commandExists($command)
    {
        return isset($this->commandHandlerCollection[$command]);
    }

    /**
     * @param String $command
     * @return mixed
     */
    public function getCommandHandler(String $command)
    {
        if (!$this->commandExists($command)) {
            throw new NotFoundCommandHandlerException($command, get_class());
        }

        return $this->commandHandlerCollection[$command];
    }


}
