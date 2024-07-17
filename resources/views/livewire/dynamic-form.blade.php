<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @foreach ($form->categories as $index => $category)
        @if ($currentStep == $index)
            <div>
                <h3>{{ $category->category_name }}</h3>
                @foreach ($category->fields as $field)
                    <div>
                        <label for="field-{{ $field->id }}">{{ $field->field_label }}</label>
                        @switch($field->field_type)
                            @case('text')
                                <input id="field-{{ $field->id }}" type="{{ $field->field_type }}" wire:model.defer="responses.{{ $field->id }}">
                            @case('email')
                            @case('number')
                                <input id="field-{{ $field->id }}" type="{{ $field->field_type }}" wire:model.defer="responses.{{ $field->id }}">
                            @break

                            @case('textarea')
                                <textarea id="field-{{ $field->id }}" wire:model.defer="responses.{{ $field->id }}"></textarea>
                            @break

                            @case('select')
                                @php
                                    $options = json_decode($field->field_options, true);
                                @endphp
                                <select id="field-{{ $field->id }}" wire:model.defer="responses.{{ $field->id }}">
                                    @foreach ($options as $option)
                                        <option value="{{ $option }}">{{ $option }}</option>
                                    @endforeach
                                </select>
                            @break

                            @default
                                <input id="field-{{ $field->id }}" type="text" wire:model.defer="responses.{{ $field->id }}">
                        @endswitch
                    </div>
                @endforeach

                <div>
                    @if ($index > 0)
                        <button wire:click="previousStep">Previous</button>
                    @endif

                    @if ($index < $form->categories->count() - 1)
                        <button wire:click="nextStep">Next</button>
                    @else
                        <button wire:click="submitForm">Submit</button>
                    @endif
                </div>
            </div>
        @endif
    @endforeach
</div>
