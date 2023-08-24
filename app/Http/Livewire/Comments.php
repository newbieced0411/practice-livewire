<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus soluta nemo aperiam amet, aliquam dolor sit natus ipsum sint temporibus pariatur repellat ducimus ut. Harum officia nesciunt maiores similique minus.',
            'created_at' => '3 min ago',
            'created' => 'Jane Doe',
        ]
    ];

    public function addComment()
    {
        $this->comments[] = [
            'body' => 'New Comment',
            'created_at' => 'now',
            'created' => 'John Doe',
        ];
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
