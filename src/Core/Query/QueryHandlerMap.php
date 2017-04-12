<?php

namespace E64\cqrs\Core\Query;


use E64\cqrs\Core\MessageHandlerMap;

interface QueryHandlerMap extends MessageHandlerMap
{
    public function getQueryHandler(string $query);
}