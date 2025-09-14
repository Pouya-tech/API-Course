<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 001;

        //   INCREMENT
        public function increment()
    {
        $this->count += 1;
    }
        //   DECREMENT
        public function decrement()
    {
        $this->count -= 1;
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
