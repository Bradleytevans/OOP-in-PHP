<?php
class Collection
{
    protected array $items;

    protected $total = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_map(function ($item) use ($key) {
            return $item->$key;
        }, $this->items));

        
        
    }
}

class VideosCollection extends Collection {
    public function length(){
         return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


$videos = new VideosCollection([
    new Video('Some Video', 100),
    new Video('Some Video 2', 250),
    new Video('Some Video 3', 300)
]);

echo $videos->sum('length');