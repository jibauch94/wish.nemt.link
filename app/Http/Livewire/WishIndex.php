<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishIndex extends Component
{
    public $wishlist;

    public function render()
    {
        return view('livewire.wish-index',
        [
            'wishes' => $this->wishlist->wishes,
        ]);
    }
}
