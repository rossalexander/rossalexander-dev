<template>
    <div class="mt-3 bg-slate-800 p-4 rounded-sm" v-show="isActive" role="tabpanel">
        <h2 class="mb-4 font-mono">{{ role }}</h2>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "Tab",
    props: {
        title: String,
        role: String,
        active: {
            type: Boolean,
            default: false,
        }
    },
    created() {
        this.$parent.tabs.push(this);
    },
    data() {
        return {
            isActive: this.active
        };
    },
}
</script>

<style scoped>

</style>
