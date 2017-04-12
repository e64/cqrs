<?php

namespace E64\cqrs\Core;

interface Handler
{
    public function listenTo(): string;
}