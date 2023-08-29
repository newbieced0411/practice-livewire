<div class="w-full flex flex-col p-2">
    <div class="w-full mb-2">
        <h1 class="text-3xl font-bold">Comments</h1>
    </div>
    <div class="w-full p-2 border-2 shadow-md">
        <div>
            <div>
                @if (session()->has('success'))
                <div class="p-2 mb-2 bg-green-300 text-green-700 shadow rounded">
                    {{ session('success') }}
                </div>
                @endif

                @if (session()->has('delete'))
                <div class="p-2 mb-2 bg-red-300 text-red-700 shadow rounded">
                    {{ session('delete') }}
                </div>
                @endif
            </div>
            <section class="mb-3 flex flex-row items-center space-x-3">
                @if ($image)
                <img src="{{ $image }}" alt="" class="h-16 w-16 mr-2 object-cover">
                @endif
                <input type="file" name="image" id="image" wire:change="$emit('fileChoosen')" {{ $disabled ? 'disabled' : '' }} >
            </section>
            <form class="flex flex-row space-x-2" wire:submit.prevent="addComment">
                <input type="text" name="comment" id="comment" wire:model.debounce.1000ms="newComment" placeholder="What's in your mind?" {{ $disabled ? 'disabled' : '' }}
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <button type="submit" id="addComment" {{ $disabled ? 'disabled' : '' }}
                    class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Add</button>
            </form>
            <div>
                @error('newComment')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        @foreach ($comments as $comment)
            <div class="mt-4">
                <div class="flex flex-row justify-between items-center ">
                    <h2 class="mb-2 font-bold">{{ $comment->creator->name }} <span
                        class="text-sm font-normal">{{ $comment->created_at->diffForHumans() }}</span></h2>
                    <div class="text-red-300 font-bold hover:text-red-600">
                        <button wire:click="removeComment({{ $comment->id }})">
                            <i class="fa fa-times font-bold" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <p>{{ $comment->body }}</p>
                @if ($comment->image)
                <img src="{{ $comment->imagePath }}" />
                @endif
            </div>
        @endforeach
        <div class="w-full flex justify-center">{{ $comments->links('components.pagination-links') }}</div>
    </div>  
</div>

<script>
    // Preview image upload
    Livewire.on('fileChoosen', () => {
        let file = document.getElementById('image') 
        let image = file.files[0]
        let reader = new FileReader()
        reader.onloadend = () => {
            Livewire.emit('fileUpload', reader.result)
        }
        reader.readAsDataURL(image)
    })
</script>