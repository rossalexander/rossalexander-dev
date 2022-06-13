<template>
    <li class="relative pl-8">
            <span
                class="flex text-sm items-center before:absolute before:content-['▹'] before:text-2xl before:text-rose-500 before:left-0 font-mono">
                <slot/>
            </span>
    </li>
</template>

<script>
export default {
    name: "ListItem"
}
</script>

<style scoped>

</style>
