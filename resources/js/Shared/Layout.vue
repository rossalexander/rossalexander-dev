<template>
    <div class="h-screen grid">
        <header>
            <Nav/>
        </header>
        <slot/>
    </div>
</template>

<script>
import Nav from "./Nav";

export default {
    name: "Layout",
    components: {
        Nav,
    }
}
</script>

<style scoped>

</style>
