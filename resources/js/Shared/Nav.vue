<template>
    <nav>
        <Link href="/logout" method="post" as="button" type="button">About</Link>
        <Link href="/logout" method="post" as="button" type="button">Experience</Link>
        <Link href="/logout" method="post" as="button" type="button">Projects</Link>
        <Link href="/logout" method="post" as="button" type="button">Connect</Link>
    </nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "Nav",
    components: {Link}
}
</script>

<style scoped>

</style>
