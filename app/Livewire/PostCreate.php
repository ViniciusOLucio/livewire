<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostCreate extends Component
{

    public PostForm $form;
    public function create()
    {
        $this->validate();

        Post::create([
            'title' => $this->form->title,
            'content' => $this->form->content,
            'slug' => Str::slug($this->form->title),
            'user_id' => 1,
        ]);

        $this->form->title = '';
        $this->form->content = '';

        session()->flash('message', 'Post created successfully.');
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
