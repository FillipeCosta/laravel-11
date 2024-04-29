<div>
    <form wire:submit="save">
        <input  class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="name" type="text" wire:model="nome">

            @error('nome') <span class="invalid-feedback">{{ $message }}</span> @enderror

        <button type="submit">Save</button>
    </form>

    @if (session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</div>
