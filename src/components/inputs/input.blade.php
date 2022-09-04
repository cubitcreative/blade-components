<div>
	<x-fields.base :name="$name" :label="$label ?? \Str::title($name)">
		<input class="{{ $component->fieldClasses }} @error($name) border-red-500 @enderror @if($disabled ?? false) opacity-50 @endif" 
			name="{{ $name }}" 
			value="{{ $value ?? old($name) }}" 
			type="{{ $type ?? 'text' }}" 
			{{ $attributes }}
		>
	</x-fields.base>
</div>