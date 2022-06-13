<template>
    <nav class="flex my-4 space-x-4">
        <NavLink href="/about" :active="$page.component === 'About'">About</NavLink>
    </nav>
</template>

<script>
import NavLink from "../Shared/NavLink";

export default {
    name: "Nav",
    components: {NavLink}
}
</script>

<style scoped>

</style>
