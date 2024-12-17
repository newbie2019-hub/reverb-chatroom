<?php

namespace App\Livewire\Chat;

use App\Models\Room;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Rooms extends Component
{
    public Collection $rooms;

    public function mount()
    {
        $this->rooms = Room::latest()->take(10)->get();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.chat.rooms');
    }
}
