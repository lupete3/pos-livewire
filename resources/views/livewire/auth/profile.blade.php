<div class="page-rwapper">

    <form class="card max-w-lg mx-auto" wire:submit='update'>
        <!-- Message d'erreur -->

        <div class="card-body">
            <div class="card-title">Modifier le profile</div>
            <div class="py-4 space-y-4">

                @if ($successMessage)
                    <div class="alert alert-success">
                        <span>{{ $successMessage }}</span>
                    </div>
                @endif

                <div class="form-control">
                    <span class="label-text mb-2">Nom</span>
                    <label @class([
                        'input input-bordered flex items-center gap-2',
                        'input-error' => $errors->first('name')])>
                        <input type="text" class="grow" placeholder="Nom complet" wire:model='name' />
                    </label>
                    @isset($errors)
                        <label style="color:red; font-size:12px">{{ $errors->first('name') }}</label>
                    @endisset
                </div>

                <div class="form-control">
                    <span class="label-text mb-2">Adresse mail</span>
                    <label @class([
                        'input input-bordered flex items-center gap-2',
                        'input-error' => $errors->first('email')])>
                        <input type="email" class="grow" placeholder="Adresse mail" wire:model='email' />
                    </label>
                    @isset($errors)
                        <label style="color:red; font-size:12px">{{ $errors->first('email') }}</label>
                    @endisset
                </div>

                <div class="form-control">
                    <span class="label-text mb-2">Mot de passe</span>
                    <label @class([
                        'input input-bordered flex items-center gap-2',
                        'input-error' => $errors->first('password')])>
                        <input type="password" class="grow" placeholder="Entrer le nouveau mot de passe" wire:model='password' />
                    </label>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Sauvegarder</span>
                    <span class="loading loading-dots loading-md" wire:loading></span>
                </button>

            </div>
        </div>
    </form>
</div>
