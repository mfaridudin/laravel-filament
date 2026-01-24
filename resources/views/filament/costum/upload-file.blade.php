<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<div>
    <x-filament::breadcrumbs :breadcrumbs="[
        '/admin/students' => 'Students',
        '' => 'list',
    ]" />


    <div class="flex justify-between mt-1">
        <div class="font-bold text-3xl">Students</div>
        <div>
            {{ $data }}
        </div>
    </div>
    <div>
        <form wire:submit="save" class="w-full max-w-sm flex mt-2">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="fileInput">
                    Pilih Berkas
                </label>

                <input id="fileInput" type="file" wire:model="file" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex items-center justify-between mt-3">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Unggah
                </button>
            </div>
        </form>

    </div>
</div>