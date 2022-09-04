<div>
	@if($label)
		<label class="block text-gray-700 font-bold mb-1 pl-1 @error($name) text-red-500 @enderror">
			{{ $label }}
		</label>
	@endif

	{{ $slot }}

	@error($name)
		<div class="pl-2 text-xs text-red-500">{{ $message }}</div>
	@enderror
</div>