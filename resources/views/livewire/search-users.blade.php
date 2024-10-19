<div>
    <input type="text" wire:model="query" placeholder="Search users..." />

    <ul>
        @foreach($filteredUsers as $user)
            <li>{{ $user['name'] }}</li>
        @endforeach
    </ul>
</div>
