<div class="{{ $mb ?? 'mb-7'}} rounded-xl relative">
    <div class="checkboxdiv">
        <input class="checkbox"
               type="checkbox"
               name="{{ $name }}"
               id="checkbox-{{ $name }}"
            {{ $value ?? '' }}>
        <label for="checkbox-{{ $name }}"
               class="absolute left-0 ml-12 text-base text-gray-900 cursor-pointer transition duration-300">
            {{ $placeholder }}
        </label>
    </div>
    @error($name)
    <div class="absolute -bottom-4 left-0 w-full truncate text-left text-xs text-red-700">
        {{ $message }}
    </div>
    @enderror
</div>
