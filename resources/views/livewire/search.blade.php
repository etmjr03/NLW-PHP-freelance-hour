<div>
    <h3>Busque o nome</h3>

    <input wire:model.live="search" />

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
