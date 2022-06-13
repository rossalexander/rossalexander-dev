<template>
    <Page title="">

        <div class="text-center">
            <p></p>Let's connect: <a href="mailto:email@rossalexander.dev" class="text-rose-500 hover:text-rose-400">email@rossalexander.dev</a>

            <div class="mt-4 flex items-center justify-center space-x-4">
                <a title="github.com/rossalexader" href="https://github.com/rossalexander" target="_blank"
                   class="block w-6 h-6 bg-contain bg-center bg-no-repeat"
                   style="background-image:url('/media/github.svg')"></a>

                <a title="linkedin.com/rossalexader" href="https://www.linkedin.com/in/ross-alexander-19360155/"
                   target="_blank"
                   class="block w-6 h-6 bg-contain bg-center bg-no-repeat"
                   style="background-image:url('/media/linkedin.svg')"></a>
            </div>


        </div>
    </Page>
</template>

<script>
import Page from "../Shared/Page";

export default {
    name: "Connect",
    components: {
        Page
    }
}
</script>

<style scoped>

</style>
