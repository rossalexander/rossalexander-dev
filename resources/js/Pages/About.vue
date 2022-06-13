<template>
    <Page title="About">
        <div class="flex">
            <div class="mr-24 space-y-4">
                <p>Since launching a web-development business in 2016, I have accrued clients from Europe, the United
                    States, and Canada. Projects I've worked on range from custom ecommerce to database design and data
                    visualization.
                </p>
                <p>Technologies I know and love:</p>
                <ul class="grid grid-cols-2 gap-y-0 sm:gap-y-4">
                    <transition-group v-for="tech in technologies" name="fade" tag="li">
                        <ListItem>{{ tech }}</ListItem>
                    </transition-group>
                </ul>
            </div>

            <div class="mt-12 sm:mt-0 w-1/2 relative">
                <div class="aspect-square w-full absolute top-4 right-4 z-10 bg-slate-800"></div>

                <div class="aspect-square w-full bg-cover bg-center bg-no-repeat z-20 relative"
                     style="background-image:url('media/Ross-Alexander.jpg');">
                </div>
            </div>
        </div>
    </Page>


</template>

<script>
import ListItem from "../Shared/ListItem";
import Page from "../Shared/Page";

export default {
    name: "About",
    components: {
        ListItem,
        Page
    },
    props: {
        technologies: Array,
    }
}
</script>

<style scoped>

</style>
