<div id="about" class="w-full h-screen block sm:flex items-center pt-24 mb-20 bg-slate-900">
    <div
        class="max-w-7xl mx-auto px-4 sm:p-8 flex items-center justify-center flex-col sm:flex-row w-full">

        <!-- Details -->
        <div class="flex flex-row mr-0 sm:mr-8">
            <div class="flex flex-col text-base sm:text-2xl space-y-8 text-slate-400 w-full relative">
                <x-title>About</x-title>

                <p>
                    Since launching a web-development business in 2016, I have accrued clients from Europe, the United States, and Canada. Current services offered are focused in ecommerce and data-driven development.
                </p>
                <p>Technologies I know and love:</p>
                <ul class="grid grid-cols-2 text-base sm:text-2xl gap-y-2 sm:gap-y-4">
                    <x-list-item id="t1" class="font-mono">PHP</x-list-item>
                    <x-list-item id="t2" class="font-mono">MySQL</x-list-item>
                    <x-list-item id="t3" class="font-mono">Laravel</x-list-item>
                    <x-list-item id="t4" class="font-mono">C#</x-list-item>
                    <x-list-item id="t5" class="font-mono">Vue.js</x-list-item>
                    <x-list-item id="t6" class="font-mono">Git</x-list-item>
                </ul>

            </div>

        </div>

        <!-- Image -->
        <div class="mt-12 sm:mt-0 w-1/2 relative">
            <div class="aspect-square w-full absolute top-4 right-4 z-10 bg-slate-800"></div>

            <div class="aspect-square w-full bg-cover bg-center bg-no-repeat z-20 relative"
                 style="background-image:url('media/Ross-Alexander.jpg');">
            </div>
        </div>

    </div>
</div>
