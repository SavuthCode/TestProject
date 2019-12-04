<form action="{{ $url ?? '' }}" method="post">
    @csrf
    <div class="form-group">
        <label>{{ __('messages.name') }}</label>
        <input type="text" name="name" class=" @error('name') is-invalid @enderror" id="" value="{{ old('name') }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-tick"></i>Submit</button>
</form>

        