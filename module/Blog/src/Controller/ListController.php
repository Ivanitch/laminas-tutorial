<?php

namespace Blog\Controller;

use Blog\Model\PostRepositoryInterface;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class ListController extends AbstractActionController
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function indexAction(): ViewModel
    {
        return new ViewModel([
            'posts' => $this->getPostRepository()->findAllPosts(),
        ]);
    }

    /**
     * @return PostRepositoryInterface
     */
    public function getPostRepository(): PostRepositoryInterface
    {
        return $this->postRepository;
    }
}