<template>
    <Link as="button" type="button"
          :class="{'text-rose-500' : active}">
        <slot/>
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "NavLink",
    components: {
        Link
    },
    props: {
        active: Boolean,
    }
}
</script>

<style scoped>

</style>
