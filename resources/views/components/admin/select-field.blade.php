<div class="my-4">
    <label for="{{ $name }}" class="form-label">{{ Str::title($name) }}</label>
    <select class="form-select w-75" id="{{ $name }}" name="{{ $name }}" >
        <option value="">Select {{ Str::title($name) }}</option>

        @foreach($options as $opt )
        <option value="{{ $opt }}" {{ ($value == $opt )? "selected" : ""  }}>{{ $opt }}</option>
        @endforeach

        
    </select>
</div>
