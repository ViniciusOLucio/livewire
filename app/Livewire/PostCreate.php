<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;

class PostCreate extends Component
{
    public $title;
    public $content;

    public function create()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required|min:2',
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'slug' => Str::slug($this->title),
            'user_id' => 1,
        ]);

        $this->title = '';
        $this->content = '';

        session()->flash('message', 'Post created successfully.');
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
