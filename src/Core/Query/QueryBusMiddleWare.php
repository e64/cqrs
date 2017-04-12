<?php
/**
 * Created by PhpStorm.
 * User: E64
 * Date: 09/04/2017
 * Time: 20:05
 */

namespace E64\cqrs\Core\Query;

use E64\cqrs\Core\Bus;
use E64\cqrs\Core\BusMiddleWare;

interface QueryBusMiddleWare extends QueryBus
{
    public function __construct(QueryBus $queryBus, $app);

    public function dispatch(Query $query);
}