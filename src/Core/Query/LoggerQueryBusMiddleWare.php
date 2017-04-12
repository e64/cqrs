<?php
/**
 * Created by PhpStorm.
 * User: E64
 * Date: 09/04/2017
 * Time: 20:20
 */

namespace E64\cqrs\Core\Query;


use PHPUnit\Runner\Exception;

class LoggerQueryBusMiddleWare implements QueryBusMiddleWare
{

    private $queryBus;
    private $app;

    public function __construct(QueryBus $queryBus, $app)
    {
        $this->queryBus = $queryBus;
        $this->app = $app;
    }

    public function dispatch(Query $query)
    {
        $this->app['db']->beginTransaction();
        try {
            $a = explode('\\', get_class($query));
            $queryName = array_pop($a);
            $requete = "INSERT INTO applicationlogs SET user='Stephane Pailha', type='Query', content='" . $queryName . "';
                    ";
            $statement = $this->app['db']->prepare($requete);
            $statement->execute();

            throw new Exception('BLABLA');
            $return = $this->queryBus->dispatch($query);
            $this->app['db']->commit();
            return $return;

        } catch (\Exception $e) {
            $this->app['db']->rollBack();
            throw $e;
        }


    }
}