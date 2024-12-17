 <div class="bg-white max-w-6xl mt-4 rounded-md mx-auto sm:px-6 lg:px-8">
     <div class="p-6">
         <h3 class="font-semibold text-lg">Join a Room</h3>
         <p class="text-gray-600 text-sm">Select a room to join</p>
         <div class="max-h-96 overflow-y-auto">
             <ul class="py-2 list-disc">
                 @foreach ($rooms as $room)
                     <li class="py-2 px-2 w-full hover:bg-gray-200 rounded-md">
                         <a href="/chat/{{ $room->slug }}" wire:navigate>
                             <span class="block font-medium">{{ $room->name }}</span>
                             <span class="block text-sm text-gray-600">Code: {{ $room->slug }}</span>
                         </a>
                     </li>
                 @endforeach
             </ul>
         </div>
     </div>
 </div>
