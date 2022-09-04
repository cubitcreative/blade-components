<div>
	<x-fields.base :name="$name" :label="$label ?? \Str::title($name)">
		<textarea class="{{ $component->fieldClasses }} @error($name) border-red-500 @enderror" name="{{ $name }}" value="{{ $value ?? old($name) }}" rows="{{ $rows ?? 3 }}" {{ $attributes }}></textarea>
	</x-fields.base>
</div>