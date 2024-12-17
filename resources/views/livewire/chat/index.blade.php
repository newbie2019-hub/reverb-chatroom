<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Enter Chat
    </h2>
</x-slot>

<div class="py-12">
    <div class="bg-white max-w-6xl mx-auto rounded-md sm:px-6 lg:px-8 w-full gap-x-3 mb-4">
        <div class="p-6 w-full flex">
            <p><span class="font-bold">NOTE:</span>&nbsp;This is just a demo app and is for demo purposes only. Rooms and
                Chat messages are automatically deleted every day.<span class="font-bold">
        </div>
    </div>

    <div class="bg-white max-w-6xl mx-auto rounded-md sm:px-6 lg:px-8 grid grid-cols-12 w-full gap-x-3">
        <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg col-span-6 border-r">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="text-lg font-medium">
                    Enter Code
                </h3>
                <span class="text-sm text-gray-600 block">
                    Enter code for the room that you want to join.
                </span>
                <form class="mt-4" wire:submit.prevent='join'>
                    <x-text-input wire:model.live="slug" id="slug" type="text" class="w-full"
                        placeholder="room-slug" />

                    @error('slug')
                        <span class="text-sm text-red-700">{{ $message }}</span>
                    @enderror
                    <x-primary-button type="submit" class="w-full text-center justify-center mt-4"
                        disabled="{{ $errors->has('slug') || !$slug }}">
                        Join Room
                    </x-primary-button>
                </form>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg col-span-6">
            <div class="p-6">
                <h3 class="text-lg font-medium">
                    Create Room
                </h3>
                <span class="text-sm text-gray-600 block">
                    Enter room name
                </span>
                <form class="mt-4" wire:submit.prevent='create'>
                    <x-text-input wire:model="room" id="slug" type="text" class="w-full" placeholder="Room 3" />
                    @error('room')
                        <span class="text-sm text-red-700">{{ $room }}</span>
                    @enderror

                    <x-primary-button type="submit" class="w-full text-center justify-center mt-4"
                        disabled={{ !$slug }}>
                        Create Room
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>

    <livewire:chat.rooms />
</div>
