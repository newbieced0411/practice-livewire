<div class="w-[400px] p-2 border-2">
    <div class="mb-4 text-center border-b-2">
        <h1 class="text-3xl font-bold mb-4">Sign up</h1>
    </div>
    <div class="w-full">
        <form class="w-full" wire:submit.prevent="submit">
            <div class="mb-4">
                <input type="text" wire:model.debounce.1000ms="form.name" id="name" placeholder="Name" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight @error('form.name') border-red-500 @enderror">
                @error('form.name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <input type="email" wire:model.debounce.1000ms="form.email" id="email" placeholder="Email" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight @error('form.email') border-red-500 @enderror">
                @error('form.email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" wire:model.debounce.1000ms="form.password" id="password" placeholder="Password" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight @error('form.password') border-red-500 @enderror">
                @error('form.password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" wire:model.debounce.1000ms="form.password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight @error('form.password_confirmation') border-red-500 @enderror">
                @error('form.password_confirmation')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" id="register"
                class="w-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded transition">Submit</button>
        </form>
    </div>
</div>
