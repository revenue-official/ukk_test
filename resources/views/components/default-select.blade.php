<div class="
">
    <select class="form-select" name="{{ $forId }}" id="{{ $forId }}">
        @foreach ($value as $key => $values)
            <option value="{{ $key }}">{{ $values }}</option>
        @endforeach
    </select>
</div>
