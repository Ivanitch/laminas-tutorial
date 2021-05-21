<?php

namespace Blog\Model;

use InvalidArgumentException;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\Sql\Sql;
use RuntimeException;
use Laminas\Db\Adapter\Driver\ResultInterface;
use Laminas\Hydrator\ReflectionHydrator;
use Laminas\Db\ResultSet\HydratingResultSet;

class LaminasDbSqlRepository implements PostRepositoryInterface
{
    /**
     * @var AdapterInterface
     */
    private $db;

    /**
     * LaminasDbSqlRepository constructor.
     * @param AdapterInterface $db
     */
    public function __construct(AdapterInterface $db)
    {
        $this->db = $db;
    }

    public function findAllPosts()
    {
        $sql       = new Sql($this->db);
        $select    = $sql->select('post');
        $statement = $sql->prepareStatementForSqlObject($select);
        $result    = $statement->execute();

        if (! $result instanceof ResultInterface || ! $result->isQueryResult()) {
            return [];
        }

        $resultSet = new HydratingResultSet(
            new ReflectionHydrator(),
            new Post('', '')
        );
        $resultSet->initialize($result);

        return $resultSet;
    }

    /**
     * @param int $id
     * @return Post|null
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public function findPost(int $id): ?Post
    {
        // TODO: Implement findPost() method.
    }

    /**
     * @return AdapterInterface
     */
    public function getDb(): AdapterInterface
    {
        return $this->db;
    }
}