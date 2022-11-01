@field(array_merge([
    'id'   => $field['name'],
    'type' => $field['type'],
    'attributeList' => [
        'type' => $field['type'],
        'name' => $field['name'],
    ],
    'label' => $field['label'],
    'required' => $field['required'],
    'icon' => $field['icon'] ?? '',
    'prefix' => $field['prefix'] ?? '',
    'suffix' => $field['suffix'] ?? '',
    'helperText' => $field['description'] ?? '',
    'placeholder' => $field['placeholder'] ?? '',
], (array) $field['props'] ?? []))
@endfield