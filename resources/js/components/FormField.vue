<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <select ref="multiselect" multiple="multiple" :id="field.name"></select>
        </template>
    </default-field>
</template>

<script>

import { FormField, HandlesValidationErrors } from 'laravel-nova'
import $ from 'jquery';
import 'select2';
import 'select2/dist/css/select2.css';

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || '';

            $(this.$refs.multiselect).select2({
                width: '100%', // need to override the changed default
                data: this.field.options
            });
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            const values = JSON.stringify($(this.$refs.multiselect).val());
            formData.append(this.field.attribute, values || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>
