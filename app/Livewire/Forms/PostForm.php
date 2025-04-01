<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class PostForm extends Form
{
//    #[Rule('required', as:'titulo')]
    public $title;

//    #[Rule('required|min:15|max:40', as:'conteudo')]
    public $content;

    protected $rules = [
        'title' => 'required|min:2',
        'content' => 'required',
    ];

    public function messages()
    {
        return [
            'title' => [
                'required' => 'O campo titulo é OBRIGATORIO',
                'min' => 'O CAMPO TITULO DEVE TER DOIS (:min) CARACTERES',
            ],
            'content' => [
                'required' => 'O campo conteudo deve ter 300 caracteres ou mais'
            ],
        ];
    }
}
