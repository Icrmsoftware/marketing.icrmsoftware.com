<?php

namespace App\Livewire;

use Livewire\Component;

class Cta extends Component
{
    public $canvas = false;
    public $scroll = 53;

    // Ensure the listener method is correctly set
    protected $listeners = ['updateCanvas' => 'updateCanvas'];

    protected function queryString()
    {
        return [
            'canvas' => [
                'as' => 'offer',
            ],
        ];
    }

    public function mount()
    {
        $this->canvas = false;
    }

    public function render()
    {
        return view('livewire.cta');
    }
}
