<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

use App\Models\CodeSnippet;

class Codesnippets extends Component
{
    public $snippets ;

    public function __construct()
    {
        $this->snippets = CodeSnippet::all() ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.codesnippets');
    }
}
