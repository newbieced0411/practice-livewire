<div x-data="{ show: false }" x-init="() => {
    Livewire.on('fileChoosen', () => {
        show = true;
        setTimeout(() => show = false, 3000); // Hide after 3 seconds
    });
}" x-show.transition.opacity="show" class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
    <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto transition-opacity duration-300 transform opacity-0 sm:mt-4">
        <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="p-4">
                <div class="text-sm">
                    File Choosen!
                </div>
            </div>
        </div>
    </div>
</div>