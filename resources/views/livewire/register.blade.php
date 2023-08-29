<div class="w-[400px] p-2 border-2">
    <div class="mb-4 text-center border-b-2">
        <h1 class="text-3xl font-bold mb-4">Sign up</h1>
    </div>
    <div class="w-full">
        <form class="w-full" wire:submit.prevent="addComment">
            <div class="mb-4">
                <input type="text" name="name" id="name" placeholder="Name" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight ">
            </div>
            <div class="mb-4">
                <input type="email" name="email" id="email" placeholder="Email" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight ">
            </div>
            <div class="mb-4">
                <input type="password" name="password" id="password" placeholder="Password" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight ">
            </div>
            <div class="mb-4">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="w-full p-2 appearance-none border rounded py-2 px-3 text-gray-700 leading-tight ">
            </div>
            <button type="submit" id="register"
                class="w-full bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded transition">Submit</button>
        </form>
    </div>
</div>
