@props(['type' => 'text', 'name' ,'placeholder','required' => 'true'])

<input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" {{ $required == 'true' ? 'required' : '' }}>

@error($name)
<p class="text-danger">{{ $message }}</p>
@enderror