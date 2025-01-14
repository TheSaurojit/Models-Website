@if ($type == 'submit' || $type == "Submit")

    <div>
        <button type="submit" name="submit" value="submit" class="btn btn-primary w-50 mt-4">Submit</button>
    </div>


@else


    <div class="mb-3">
        <label class="form-label">{{ Str::title($name) }}</label>
        <div>
            <input type="{{ $type }}" name="{{ $name }}" id="{{ $id ?? '' }}" class="form-control w-75"
                placeholder="Enter {{ Str::title($name) }}" value="{{ old($name, $value ?? '') }}" />
        </div>

    </div>


@endif
