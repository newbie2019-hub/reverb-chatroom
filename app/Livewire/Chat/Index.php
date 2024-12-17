<?php

namespace App\Livewire\Chat;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;

class Index extends Component
{
    //For creating a room
    #[Rule('required')]
    public string $room = '';
    //For joining a room
    #[Rule('exists:rooms,slug', message: 'Room does not exist')]
    public string $slug = '';

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.chat.index');
    }

    public function create()
    {
        $this->validate();

        $room = Room::create([
            'name' => $this->room,
            'slug' => Str::of($this->room)->slug()
        ]);

        $this->reset('room', 'slug');
        return redirect()->route('chat.room', ['room' => $room->slug]);
    }

    public function join()
    {
        $room = Room::where('slug', $this->slug)->first();

        return redirect()->route('chat.room', ['room' => $room->slug]);
    }
}
