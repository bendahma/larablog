<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;
use App\Models\Tag as TagCLass;

class Tag extends Component
{
    public $tags ;

    public function __construct()
    {
        $this->tags = TagCLass::all();
    }

    public function render()
    {
        return view('components.frontend.tag');
    }
}
