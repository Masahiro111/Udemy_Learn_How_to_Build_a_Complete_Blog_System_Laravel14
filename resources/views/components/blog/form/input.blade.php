@props(['type' => 'text', 'name' ,'placeholder','required' => 'true', 'value'])

<input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" {{ $required == 'true' ? 'required' : '' }} value="{{ $value }}">

@error($name)
<p class="text-danger">{{ $message }}</p>
@enderror