<?php

namespace App\Livewire;

use Livewire\Component;

class PostEdit extends Component
{
    #[Rule('required')]
    public $title;
    #[Rule('required')]
    public $content;
    public $post;

    public function mount($post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }
        public function render()
    {
        return view('livewire.post-edit');
    }
}
