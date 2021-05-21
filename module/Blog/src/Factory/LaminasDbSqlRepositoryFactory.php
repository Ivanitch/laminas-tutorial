<?php

namespace Blog\Factory;

use Interop\Container\ContainerInterface;
use Blog\Model\LaminasDbSqlRepository;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class LaminasDbSqlRepositoryFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return LaminasDbSqlRepository
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): LaminasDbSqlRepository
    {
        return new LaminasDbSqlRepository($container->get(AdapterInterface::class));
    }
}