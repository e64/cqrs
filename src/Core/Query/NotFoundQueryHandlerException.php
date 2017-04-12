<?php

namespace E64\cqrs\Core\Query;


final class NotFoundQueryHandlerException extends \Exception
{

    public function __construct($queryClassName, $queryHandlerMap)
    {
        $this->message = sprintf('Query %s not found in %s', $queryClassName, $queryHandlerMap);
    }

}