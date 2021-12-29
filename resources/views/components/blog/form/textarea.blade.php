@props(['name' ,'placeholder','value'])

<textarea rows="5" id="{{ $name }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" required>{{ $value }}</textarea>

@error($name)
<p class="text-danger">{{ $message }}</p>
@enderror