<?php

namespace E64\cqrs\Core\Query;

use E64\cqrs\Core\Handler;

interface QueryHandler extends Handler
{
    public function handle(Query $query);
}