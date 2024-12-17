<div class="h-96 overflow-y-auto border border-gray-200 rounded-md px-4 py-3">

    <div class="sm:[overflow-anchor:none] space-y-4 pb-4">
        @foreach($messages as $message)
            <livewire:chat.message :message="$message" :key="$message->id" />
        @endforeach
    </div>

    <div x-init="$el.scrollIntoView()" class="sm:[overflow-anchor:auto] h-px"></div>
</div>
