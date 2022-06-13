<template>
    <Transition
        name="fade"
        mode="out-in"
        leave-to-class="opacity-0 transform"
        enter-from-class="opacity-0 transform"
        enter-active-class="transition-opacity"
        leave-active-class="transition-opacity"
    >
        <div class="absolute max-w-3xl rounded-sm" v-show="isActive" role="tabpanel">
            <h2 class="mb-4 font-mono">{{ role }}</h2>
            <slot></slot>
        </div>
    </Transition>
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
