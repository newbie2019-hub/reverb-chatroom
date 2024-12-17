<div class="flex gap-x-3">
    <div class="h-8 w-8 rounded-full bg-gray-100 mt-2">
        <img src="{{  $message->user->avatar() }}" alt="{{ $message->user->name }}">
    </div>
    <div>
        <span class="text-gray-600 text-sm">{{ $message->user->name }}</span>
        <div class="w-fit px-4 py-3 bg-gray-100 rounded-md">
            {{ $message->body }}
        </div>
        <span class="text-gray-500 text-xs">{{ $message->created_at }}</span>
    </div>
</div>
