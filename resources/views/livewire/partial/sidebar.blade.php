<ul class="menu w-60 min-h-full bg-base-100 text-base-content border-r-2 border-base-300 space-y-4">
    <li>
        <h2 class="menu-title">Tableau de bord</h2>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-dashboard class="size-5" />
                    <span>Tableau de bord</span>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('transaction.create') }}" @class(['active' => Route::is('transaction.create','transaction.edit')])>
                    <x-tabler-file-plus class="size-5" />
                    <span>Ajouter vente</span>
                </a>
            </li> --}}
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Données principales</h2>
        <ul>
            <li>
                <a href="{{ route('menu.index') }}" @class(['active' => Route::is('menu.index')]) wire:navigate>
                    <x-tabler-layout-grid-add class="size-5" />
                    <span>Liste des menus</span>
                </a>
            </li>
            <li>
                <a href="{{ route('customer.index') }}" @class(['active' => Route::is('customer.index')]) wire:navigate>
                    <x-tabler-users class="size-5" />
                    <span>Liste des clients</span>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('transaction.index') }}" @class(['active' => Route::is('transaction.index', 'transaction.export')])>
                    <x-tabler-file class="size-5" />
                    <span>Historique ventes</span>
                </a>
            </li> --}}
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Mon compte</h2>
        <ul>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user class="size-5" />
                    <span>Modifier profile</span>
                </a>
            </li>
            <li>
                <button wire:click='logout'>
                    <x-tabler-logout class="size-5" />
                    <span>Se déconnecter</span>
                </button>
            </li>
        </ul>
    </li>

</ul>
