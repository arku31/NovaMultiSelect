<?php
namespace Nova\Multiselect;

use Laravel\Nova\Fields\Field;

class Multiselect extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'multiselect';

    /**
     * Set the options for the select menu.
     *
     * @param array $options
     * @param array $selected selectedIds
     *
     * @return $this
     */
    public function options($options, $selected = [])
    {
        return $this->withMeta([
            'options' => collect($options ?? [])->map(function ($label, $value) use ($selected) {
                return [
                    'id' => $value,
                    'text' => $label,
                    'selected' => in_array($value, $selected),
                ];
            })->values()->all(),
        ]);
    }
}
