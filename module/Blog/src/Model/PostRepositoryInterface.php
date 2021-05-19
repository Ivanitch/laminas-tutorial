<?php

namespace Blog\Model;

interface PostRepositoryInterface
{
    /**
     * Return a set of all blog posts that we can iterate over.
     *
     * Each entry should be a Post instance.
     *
     * @return null|Post[]
     */
    public function findAllPosts(): ?array;

    /**
     * Return a single blog post.
     *
     * @param  null|int $id Identifier of the post to return.
     * @return Post
     */
    public function findPost(int $id): ?Post;
}