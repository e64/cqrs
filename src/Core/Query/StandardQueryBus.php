<?php

namespace E64\cqrs\Core\Query;

class StandardQueryBus implements QueryBus
{
    private $queryHandlerLocator;

    public function __construct(QueryHandlerLocator $queryHandlerLocator)
    {
        $this->queryHandlerLocator = $queryHandlerLocator;
    }

    public function dispatch(Query $query)
    {
        $queryClassName = get_class($query);
        return $this->queryHandlerLocator->getHandler($queryClassName)->handle($query);
    }
}