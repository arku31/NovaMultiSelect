<template>
    <div class="flex border-b border-40 remove-bottom-border">
        <div class="w-1/4 py-4">
            <h4 class="font-normal text-80">
              {{field.name}}
            </h4>
        </div>
        <div class="w-3/4 py-4">
            <ul>
                <li v-for="option in field.options" v-if="option.selected === true">
                    <span >{{option.text}}</span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
