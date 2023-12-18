<div>
    Counter:: {{ $counter }}

    <br>
    <x-text-input wire:model.live="counter" />
    <x-primary-button wire:click="refresh">Refresh</x-primary-button>

    <br><br>
    <div x-data="">
        <span x-text="$wire.name"></span>
        <x-secondary-button @click="$wire.set('name', 'Divino')">Test</x-secondary-button>
    </div>
    <br><br>

    Name:: {{ $name }} {{ $lastName }}
</div>
