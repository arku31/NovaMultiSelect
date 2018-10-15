<template>
    <ul>
        <li v-for="option in field.options" v-if="option.selected === true">
            <span >{{option.text}}</span>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['resourceName', 'field'],
    }
</script>
