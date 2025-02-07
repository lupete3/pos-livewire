<div class="page-rwapper">
    <div class="flex flex-col md:flex-row justify-between gap-2">
        <input type="search" class="input input-bordered" placeholder="Rechercher" wire:model.live='search'>

        <button class="btn btn-primary" wire:click="$dispatch('createMenu')">
            <x-tabler-plus class="size-5" />
            <span>Ajouter menu</span>
        </button>
    </div>

    <div class="table-rwapper">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Menu</th>
                <th>Prix</th>
                <th>Drscription</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $num++ }}</td>
                        <td>
                            <div class="flex gap-3 items-center">
                                <div class="avatar">
                                    <div class="w-10 rounded-lg">
                                        <img src="{{ $menu->avatar }}" alt="">
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <div class="font-bold">{{ $menu->name }}</div>
                                    <div>{{ $menu->type }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $menu->devise }}</td>
                        <td class="whitespace-normal w-80">
                            <div class="line-clamp-2">
                                {{ $menu->description }}
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs btn-square" wire:click="$dispatch('editMenu', {menu: {{ $menu->id }}})">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-square" wire:click="$dispatch('deleteMenu', {menu: {{ $menu->id }}})">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
    <div class="table-pagination text-center">
        {{ $menus->links('pagination::tailwind') }}
    </div>

    @livewire('menu.actions')
</div>
