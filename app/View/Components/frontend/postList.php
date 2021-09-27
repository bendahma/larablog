<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;
use App\Models\Post ;
class postList extends Component
{
    public $posts ;

    public function __construct()
    {
        $this->posts = Post::paginate(5);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.post-list');
    }
}
