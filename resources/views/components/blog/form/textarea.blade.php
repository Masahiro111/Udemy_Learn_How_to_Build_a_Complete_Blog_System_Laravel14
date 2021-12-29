@props(['name' ,'placeholder'])

<textarea rows="5" id="{{ $name }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" required></textarea>

@error($name)
<p class="text-danger">{{ $message }}</p>
@enderror