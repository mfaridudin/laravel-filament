<x-filament-panel::page>
<form method="post" wire:submit="save">
    {{ $this->form }}  
    <x-filament::button type="submit">
        Save
    </x-filament::button>
</form>
</x-filament-panel::page>