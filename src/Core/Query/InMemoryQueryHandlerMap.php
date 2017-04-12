<?php


namespace E64\cqrs\Core\Query;
use phpDocumentor\Reflection\Types\String_;



final class InMemoryQueryHandlerMap implements QueryHandlerMap
{
    private $queryHandlerCollection;

    public function __construct(array $queryHandlerCollection)
    {
        $this->queryHandlerCollection = $queryHandlerCollection;
    }

    protected function queryExists($query)
    {
        return isset($this->queryHandlerCollection[$query]);
    }

    /**
     * @param String $query
     * @return mixed
     */
    public function getQueryHandler(String $query)
    {
        if (!$this->queryExists($query)) {
            throw new NotFoundQueryHandlerException($query, get_class());
        }

        return $this->queryHandlerCollection[$query];
    }


}
