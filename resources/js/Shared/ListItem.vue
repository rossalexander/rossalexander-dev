<template>
    <li class="relative">
            <span
                class="before:absolute before:content-['▹'] before:text-rose-500 before:left-0 pl-6 font-mono">
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
