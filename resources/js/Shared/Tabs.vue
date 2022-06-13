<template>
    <div class="flex flex-col sm:flex-row space-x-16">
        <ul class="flex flex-row sm:flex-col mb-8 sm:mb-0" role="tablist">
            <button v-for="(tab, index) in tabs" :key="index"
                    :aria-selected="tab.isActive"
                    :class="{'text-rose-500 border-rose-500' : tab.isActive}"
                    class="text-sm font-mono text-left focus:outline-none border-b sm:border-b-0 sm:border-l px-2 sm:px-0 sm:pl-4 py-3 hover:border-rose-500 transition-colors"
                    v-text="tab.title"
                    role="tab"
                    @click="activeTab = tab">
            </button>
        </ul>

        <div class="w-full">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: "Tabs",
    data() {
        return {
            tabs: [],
            activeTab: null
        };
    },
    methods: {
        setInitialActiveTab() {
            this.activeTab = this.tabs.find(tab => tab.active) || this.tabs[0];
        },
    },
    mounted() {
        this.setInitialActiveTab();
    },
    watch: {
        activeTab(activeTab) {
            this.tabs.map(tab => (tab.isActive = tab === activeTab));
        },
    }
}
</script>

<style scoped>

</style>
