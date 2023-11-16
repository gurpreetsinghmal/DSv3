<?php

namespace App\Livewire;

use App\Models\Sliderimage;
use Livewire\Component;

class Slideimages extends Component
{
    public $images;
    public function mount(){
        $this->images=Sliderimage::get();
    }
    public function render()
    {
        return view('livewire.slideimages');
    }
}
