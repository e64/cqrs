<?php

namespace E64\cqrs\Core\Query;


interface QueryHandlerLocator
{
public function getHandler(string $queryClassName);
}