<template>
    <Head><title>{{ title }}</title></Head>
    <div class="w-full px-4 sm:px-0 py-12 sm:pt-0 max-w-5xl mx-auto">
        <Title>{{ title }}</Title>
        <slot/>
    </div>
</template>

<script>
import Title from "../Shared/Title";

export default {
    name: "Page",
    components: {
        Title,
    },
    props: {
        title: String,
    }
}
</script>

<style scoped>

</style>
