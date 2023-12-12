<div>
    @if ($wrapElements)
        <div style="border: 1px solid red;">
    @endif
    @foreach ($users as $user)
        <div wire:key="{{ $user->id }}" style="border: 1px solid black;">
            <div wire:ignore>
                <div><strong>ID: </strong> {{ $user->id }}</div>
                <div><strong>Name: </strong> {{ $user->name }}</div>
                <div><strong>Random ID: </strong> {{ uniqid() }}</div>
            </div>
        </div>
    @endforeach
    @if ($wrapElements)
        </div>
    @endif

    <button type="button" wire:click="flip">Flip $wrapElements</button>
</div>
