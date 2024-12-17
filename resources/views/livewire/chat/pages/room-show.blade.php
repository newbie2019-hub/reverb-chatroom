<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ $room->name }}
    </h2>
    <span>Code: {{ $room->slug }}</span>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-12 gap-6">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg col-span-3">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <livewire:chat.users :room="$room" />
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg col-span-9 p-6">
            <livewire:chat.messages :room="$room" />

            <form class="mt-3" x-data="{
                shift: false
            }" x-on:keydown.shift="shift = true" x-on:keyup.shift="shift = false"
                x-on:keyup.enter.prevent="if (! shift && $event.target.value) $wire.submit()">
                <label for="body" class="sr-only">Message</label>
                <textarea name="body" id="body" rows="4" placeholder="Enter your message" wire:model="body"
                    class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
            </form>
        </div>
    </div>
</div>
