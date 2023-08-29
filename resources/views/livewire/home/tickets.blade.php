<div class="w-full flex flex-col p-2">
    <div class="w-full mb-2">
        <h1 class="text-3xl font-bold">Support Tickets</h1>
    </div>  
    <div class="w-full">
        @foreach ($tickets as $ticket)
        <div 
            class="p-2 mb-2 border-2 cursor-pointer {{ $active == $ticket->id ? 'bg-purple-500 text-white' : ''}}" 
            wire:click="$emit('ticketSelected', {{ $ticket->id }})">    
            <p>{{ $ticket->question }}</p>
        </div>
        @endforeach
    </div>
</div>