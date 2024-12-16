<div>
    <h2 class="font-medium">Users</h2>
    <ul class="space-y-1 mt-4">
        @foreach($this->users as $user)
            <li class="flex items-end justify-between">
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</div>
