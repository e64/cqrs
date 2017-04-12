<?php

namespace E64\cqrs\Core\Query;


use E64\cqrs\Core\Bus;
use E64\cqrs\Core\Message;

interface QueryBus extends Bus
{

    //public function __construct(QueryHandlerLocator $queryHandlerLocator);

    public function dispatch(Query $query);
}