<div class="page-rwapper">
    <div class="flex flex-col md:flex-row justify-between gap-2">
        <input type="search" class="input input-bordered" placeholder="Rechercher" wire:model.live='search'>

        <button class="btn btn-primary" wire:click="$dispatch('createCustomer')">
            <x-tabler-plus class="size-5" />
            <span>Ajouter client</span>
        </button>
    </div>

    <div class="text-center">
        @if ($message = session('message'))
            <span class="text-success">
                {{ $message }}
            </span>
        @endif
        <div wire:loading>
            <span class="text-success"> Patienter... </span>
        </div>
    </div>

    <div class="table-rwapper">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $num++ }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->contact }}</td>
                        <td class="whitespace-normal w-80">
                            <div class="line-clamp-2">
                                {{ $customer->adress }}
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs btn-square" wire:click="$dispatch('editCustomer', {customer: {{ $customer->id }}})">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-square" wire:click="$dispatch('deleteCustomer', {customer: {{ $customer->id }}})">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="table-pagination text-center ">
        {{ $customers->links('pagination::tailwind') }}
    </div>

    @livewire('customer.actions')
</div>
