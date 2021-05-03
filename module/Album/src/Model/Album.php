<?php

declare(strict_types=1);

namespace Album\Model;

/**
 * Class Album
 * @package Album\Model
 *
 * @package int $id
 * @package string $artist
 * @package string $title
 */
class Album extends \ArrayObject
{
    public $id;
    public $artist;
    public $title;

    /**
     * @param array $data
     */
    public function exchangeArray($data): void
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->artist = !empty($data['artist']) ? $data['artist'] : null;
        $this->title  = !empty($data['title']) ? $data['title'] : null;
    }
}