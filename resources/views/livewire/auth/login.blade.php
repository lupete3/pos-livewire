<div class="card">

    <!-- Message d'erreur -->
    @if ($errorMessage)
        <div class="toast toast-top toast-center">
            <div class="alert alert-error">
                <span>{{ $errorMessage }}</span>
            </div>
        </div>
    @endif

    <form class="card-body" wire:submit='login'>

        <h3 class="card-title">Connexion</h3>

        <div class="py-4 space-y-2">
            <label @class([
                'input input-bordered flex items-center gap-2',
                'input-error' => $errors->first('email')])>
                <x-tabler-at class="size-5" />
                <input type="text" class="grow" placeholder="Email" wire:model='email' />
            </label>
            @isset($errors)
                <label style="color:red; font-size:12px">{{ $errors->first('email') }}</label>
            @endisset
            <label @class([
                'input input-bordered flex items-center gap-2',
                'input-error' => $errors->first('password')])>
                <x-tabler-key class="size-5" />
                <input type="password" class="grow" placeholder="Mot de passe" wire:model='password' />
            </label>
            @isset($errors)
                <label style="color:red; font-size:12px">{{ $errors->first('password') }}</label>
            @endisset
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5" />
                <span>Connexion</span>
                <span class="loading loading-dots loading-md" wire:loading></span>
            </button>
        </div>
    </form>
</div>
