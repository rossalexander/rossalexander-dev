<template>
    <nav class="flex my-4 space-x-4">
        <NavLink href="/about" :active="$page.component === 'About'">About</NavLink>
        <NavLink href="/experience" :active="$page.component === 'Experience'">Experience</NavLink>
        <NavLink href="/projects" :active="$page.component === 'Projects'">Projects</NavLink>
        <NavLink href="/connect" :active="$page.component === 'Connect'">Connect</NavLink>
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
