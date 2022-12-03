<?php

namespace App\Http\Livewire;

use App\Models\Wishlist;
use Livewire\Component;

class WishlistIndex extends Component
{
    public function render()
    {
        return view('livewire.wishlist-index',
        [
            'wishlists' => Wishlist::all(),
        ]);
    }
}
