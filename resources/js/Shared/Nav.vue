<template>
    <nav class="flex flex-col sm:flex-row justify-center items-center p-4 sm:space-x-4">
        <a href="/" class="inline-block bg-contain bg-no-repeat bg-center w-8 h-8"
           style="background-image:url('/media/ross-alexander-logo.svg')">
        </a>
        <div class="flex space-x-6 text-sm items-center justify-center mt-4 sm:mt-0">
            <NavLink href="/about" :active="$page.component === 'About'">About</NavLink>
            <NavLink href="/experience" :active="$page.component === 'Experience'">Experience</NavLink>
            <NavLink href="/projects" :active="$page.component === 'Projects'">Projects</NavLink>
            <NavLink href="/connect" :active="$page.component === 'Connect'">Connect</NavLink>
        </div>
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
