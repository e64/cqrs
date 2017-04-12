<?php

namespace E64\cqrs\Core\Query;


final class StandardQueryHandlerLocator implements QueryHandlerLocator
{

    private $queryHandlerMap;
    function __construct(QueryHandlerMap $queryHandlerMap)
    {
        $this->queryHandlerMap = $queryHandlerMap;
    }
    public function getHandler(string $queryClassName)
    {
       return $this->queryHandlerMap->getQueryHandler($queryClassName);
    }
}