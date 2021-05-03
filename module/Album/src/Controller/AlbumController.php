<?php

declare(strict_types=1);

namespace Album\Controller;

use Album\Model\AlbumTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

final class AlbumController extends AbstractActionController
{
    private $table;

    public function __construct(AlbumTable $table)
    {
        $this->setTable($table);
    }

    /**
     * @return ViewModel
     */
    public function indexAction(): ViewModel
    {
        return new ViewModel([
            'albums' => $this->getTable()->fetchAll(),
        ]);
    }

    public function addAction()
    {
    }

    public function editAction()
    {

    }

    public function deleteAction()
    {
    }

    /**
     * @return AlbumTable
     */
    private function getTable(): AlbumTable
    {
        return $this->table;
    }

    /**
     * @param AlbumTable $table
     */
    private function setTable(AlbumTable $table): void
    {
        $this->table = $table;
    }
}