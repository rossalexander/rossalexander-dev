<template>
    <div class="sm:h-screen sm:grid text-slate-300">
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
