<template>
    <Page title="Personal Projects">
        <div class="flex flex-col space-y-24 pt-8">

            <div class="w-full flex flex-col sm:flex-row sm:space-x-16">
                <div class="w-full text-slate-400 flex flex-col space-y-6">
                    <a href="https://ivgdb.net" target="_blank"
                       class="text-rose-500 text-base font-mono block">
                        ivgdb.net
                    </a>
                    <p>
                        IVGDB.net (Internet Video Game Database) is a personal project that utilizes the <a
                        class="text-rose-500 hover:text-rose-400 transition-colors"
                        href="https://api-docs.igdb.com/#about" target="_blank">IGDB.com
                        API</a>.
                        View popular, top-rated, and upcoming games and search the massive IGDB database. More
                        features coming soon.
                    </p>
                    <div>
                        <ul class="flex flex-row space-x-4 font-mono text-sm">
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>Livewire</li>
                            <li>Alpine</li>
                        </ul>
                    </div>

                    <div class="flex space-x-4">
                        <a title="github.com/rossalexader/video-game-database"
                           href="https://github.com/rossalexander/video-game-database" target="_blank"
                           class="block w-4 h-4 bg-contain bg-center bg-no-repeat"
                           style="background-image:url('/media/github.svg')">
                        </a>

                        <a title="ivgdb.net"
                           href="https://ivgdb.net" target="_blank"
                           class="block w-4 h-4 bg-contain bg-center bg-no-repeat"
                           style="background-image:url('/media/outside-link.svg')">
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="mt-12 sm:mt-0 w-full relative">
                    <div class="aspect-video w-full absolute top-4 -right-4 z-10 bg-slate-800"></div>

                    <a target="_blank" href="https://ivgdb.net" title="IVGDB.net"
                       class="hover:animate-pulse block aspect-video w-full bg-cover bg-center bg-no-repeat z-20 relative"
                       style="background-image:url('media/ivgdb-01.jpg');">
                    </a>
                </div>
            </div>

            <div class="w-full flex flex-col sm:flex-row sm:space-x-16">
                <div class="w-full text-slate-400 flex flex-col space-y-6">
                    <a href="https://xrpairdrops.com" target="_blank"
                       class="text-rose-500 text-base font-mono block">
                        xrpAirdrops.com
                    </a>
                    <p>
                        A repository of data for upcoming airdrops for the xrp
                        cryptocurrency. The site currently lists details about the airdrops. Users will soon be able
                        to register and manage favorites and receive notification reminders.
                    </p>
                    <div>
                        <ul class="flex flex-row space-x-4 font-mono text-sm">
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>Vue.js</li>
                        </ul>
                    </div>

                    <div class="flex space-x-4">
                        <a title="github.com/rossalexader/video-game-database"
                           href="https://github.com/rossalexander/xrpairdrops" target="_blank"
                           class="block w-4 h-4 bg-contain bg-center bg-no-repeat"
                           style="background-image:url('/media/github.svg')">
                        </a>

                        <a title="xrpairdrops.com"
                           href="https://xrpairdrops.com" target="_blank"
                           class="block w-4 h-4 bg-contain bg-center bg-no-repeat"
                           style="background-image:url('/media/outside-link.svg')">
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="mt-12 sm:mt-0 w-full relative">
                    <div class="aspect-video w-full absolute top-4 -right-4 z-10 bg-slate-800"></div>

                    <a target="_blank" href="https://xrpairdrops.com" title="xrpAirdrops.com"
                       class="hover:animate-pulse block aspect-video w-full bg-cover bg-center bg-no-repeat z-20 relative"
                       style="background-image:url('/media/xrpairdrops.jpg');">
                    </a>
                </div>
            </div>

            <div class="w-full flex flex-col sm:flex-row sm:space-x-16">
                <div class="w-full text-slate-400 flex flex-col space-y-6">
                    <a href="https://github.com/rossalexander/sprout" target="_blank"
                       class="text-rose-500 text-base font-mono block">
                        Sprout <small class="text-slate-500">[in early development]</small>
                    </a>
                    <p>
                        Inspired by Laravel Sail, Sprout provides a local development environment for WordPress + Roots
                        that is compatible with
                        macOS, Windows (WSL2), and Linux.
                    </p>
                    <p>Install docker, and <span
                        class="bg-slate-800 text-blue-500 text-sm p-1 font-mono">sprout up</span> to start building.</p>
                    <div>
                        <ul class="flex flex-row space-x-4 font-mono text-sm">
                            <li>Shell</li>
                            <li>Docker</li>
                        </ul>
                    </div>

                    <div class="flex space-x-4">
                        <a title="github.com/rossalexader/sprout"
                           href="https://github.com/rossalexander/sprout" target="_blank"
                           class="block w-4 h-4 bg-contain bg-center bg-no-repeat"
                           style="background-image:url('/media/github.svg')">
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="mt-12 sm:mt-0 w-full relative">
                    <div class="aspect-video w-full absolute top-4 -right-4 z-10 bg-slate-800"></div>

                    <a target="_blank" href="https://github.com/rossalexander/sprout" title="Sprout"
                       class="hover:animate-pulse block aspect-video w-full bg-cover bg-center bg-no-repeat z-20 relative"
                       style="background-image:url('/media/sprout.png');">
                    </a>
                </div>
            </div>
        </div>


    </Page>
</template>

<script>
import Page from "../Shared/Page";

export default {
    name: "Projects",
    components: {
        Page,
    }
}
</script>

<style scoped>

</style>
