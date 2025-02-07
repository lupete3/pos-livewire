<div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my_modal_6" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit='ajouter'>
            <h3 class="font-bold text-lg">Ajout menu</h3>
            <div class="py-4 space-y-2">
                <div class="flex justify-center">
                    <label for="pickPhoto" class="avatar">
                        <div  class="w-24 rounded-xl">
                            <img src=" {{ $photo ? $photo->temporaryUrl() : url('noimages.png') }} " alt="">
                        </div>
                    </label>
                </div>
                <input type="file" class="hidden" id="pickPhoto" wire:model='photo'>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Nom menu</span>
                    </div>
                    <input type="text" placeholder="Nom menu" @class(['input input-bordered', 'input-error'=>
                    $errors->first('form.name')]) wire:model='form.name' />

                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Prix menu</span>
                    </div>
                    <input type="text" placeholder="Prix menu" @class(['input input-bordered', 'input-error'=>
                    $errors->first('form.price')]) wire:model='form.price' />

                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Type menu</span>
                    </div>
                    <select type="text" placeholder="Prix menu" @class(['select select-bordered', 'select-error'=>
                        $errors->first('form.type')]) wire:model='form.type'>
                        <option value=""></option>
                        @foreach ($types as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                        @endforeach
                    </select>

                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Description menu</span>
                    </div>
                    <textarea placeholder="Description du menu" @class(['textarea textarea-bordered', 'textarea-error'=> $errors->first('form.description')]) wire:model='form.description'>
                    </textarea>

                </label>
            </div>
            <div class="modal-action justify-between">
                <button type="button" class="btn btn-ghost" wire:click='closeModal'>Fermer</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Sauvegarder</span>
                    <span class="loading loading-dots loading-md" wire:loading></span>
                </button>
            </div>
        </form>
    </div>
</div>
