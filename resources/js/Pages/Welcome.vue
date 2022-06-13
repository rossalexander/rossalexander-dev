<template>
    <Page title="">
        <div id="intro" class="max-w-2xl mx-auto text-center">
            <p class="text-4xl text-slate-400 tracking-tight">Ross Alexander</p>
            <p class="text-6xl text-slate-300 tracking-tight py-4">Full Stack Developer</p>
            <span class="text-3xl text-slate-400 tracking-tight sm:leading-snug">specializing
            in <span class="text-rose-500">test-driven development</span>
            with <span
                    class="text-rose-500 font-bold">PHP</span>,
            <span class="text-rose-500 font-bold">Laravel</span> and <span
                    class="text-rose-500 font-bold">Vue</span>.
            </span>
        </div>
    </Page>
</template>

<script>
import Page from "../Shared/Page";

export default {
    name: "Welcome",
    components: {
        Page,
    }
}
</script>

<style scoped>

</style>
