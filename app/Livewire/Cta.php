<?php

namespace App\Livewire;

use Livewire\Component;

class Cta extends Component
{
    public $canvas = false;
    public $scroll = 53;

    public $position;

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

    public function mount($position)
    {
        $this->position = $position;
        $this->canvas = false;
    }
    public function updateCanvas($value)
    {
        if ($this->canvas != 'closed') {
            $this->canvas = $value;
        }
        // elseif($this->canvas == 'closed' AND $value < 45)
        // {
        //     $this->canvas = $value;
        // }else{

        // }
    }

    public function openCanvas()
    {
        $this->canvas = true;
        $this->render();
    }
    public function closeCanvas()
    {
        $this->canvas = 'closed';
        $this->render();
    }
    public function render()
    {
        return view('livewire.cta');
    }
}
