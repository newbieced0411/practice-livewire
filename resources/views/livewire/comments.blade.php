<div class="flex flex-col justify-center items-center mt-4 p-4">
    <div class="6xl text-center">
        <h1 class="font-bold">This is Comment Section</h1>
    </div>
    <div class="w-1/2 p-2 border-2 shadow-md">
        <div>
            <form class="flex flex-row space-x-2" wire:submit.prevent="addComment">
                <input type="text" name="comment" id="comment" wire:model.debounce.500ms="newComment"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
            </form>
        </div>
        @foreach ($comments as $comment)
            <div class="mt-4">
                <h2 class="mb-2 font-bold">{{ $comment->user_id }} <span
                        class="text-sm font-normal">{{ $comment->created_at->diffForHumans() }}</span></h2>
                <p>{{ $comment->body }}</p>
            </div>
        @endforeach
    </div>  
</div>
