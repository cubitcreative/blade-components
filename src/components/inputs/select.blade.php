@props(['itemText','label','name','options','prompt','simple'])

<x-fields.base :name="$name ?? ''" :label="$label ?? ''">
	<div class="relative flex items-center">
		<select class="pr-8 {{ $component->fieldClasses }} @error($name ?? 'n-a') border-red-500 @enderror" name="{{ $name ?? '' }}" {{ $attributes }}>
			@isset($prompt)
				<option value="">{{ $prompt }}</option>
			@endisset
			@foreach($options as $value => $label)
				@if(isset($itemText) && is_callable($itemText))
					<option value="{{ $value }}">{{ $itemText($label) }}</option>
				@else
					<option value="{{ isset($simple) ? trim($label) : $value }}">
						{{ $label }}
					</option>
				@endif
			@endforeach
		</select>
		{{-- <i class="absolute right-0 mr-3 text-gray-400 fas fa-ellipsis-v fa-sm pointer-events-none"></i> --}}
	</div>
</x-fields.base>
