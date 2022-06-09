<div id="experience" class="bg-slate-900 w-full h-screen flex items-center py-24">
    <div class="max-w-7xl mx-auto p-4 sm:p-8 flex items-center flex-row w-full">
        <div class="flex flex-row mr-8 w-full">
            <div class="flex flex-col space-y-4 text-lg text-slate-700 w-full relative">

                <x-title>Experience</x-title>

                <div x-data="{ currentTab: 1}" class="flex flex-col sm:flex-row">
                    <div
                        class="flex flex-row sm:flex-col sm:items-start w-full sm:w-1/5 mb-8 sm:smb-0 text-left text-sm sm:text-xl text-slate-500">
                        <button
                            class="border-b-2 sm:border-l-2 sm:border-b-0 pl-2 sm:pl-4 py-4 hover:border-rose-500"
                            :class="{'text-rose-500 border-rose-500' : currentTab === 1}" @click="currentTab = 1">
                            Viabold
                        </button>
                        <button
                            class="border-b-2 sm:border-l-2 sm:border-b-0 pl-2 py-4 py-4 hover:border-rose-500 transition-colors"
                            :class="{'text-rose-500 border-rose-500' : currentTab === 2}" @click="currentTab = 2">
                            GSS Interactive
                        </button>
                        <button
                            class="border-b-2 sm:border-l-2 sm:border-b-0 pl-2 py-4 py-4 hover:border-rose-500 transition-colors"
                            :class="{'text-rose-500 border-rose-500' : currentTab === 3}" @click="currentTab = 3">
                            Collision Studios
                        </button>
                        <button
                            class="border-b-2 sm:border-l-2 sm:border-b-0 pl-2 py-4 py-4 hover:border-rose-500 transition-colors"
                            :class="{'text-rose-500 border-rose-500' : currentTab === 4}" @click="currentTab = 4">
                            Isopod Labs
                        </button>
                        <button
                            class="border-b-2 sm:border-l-2 sm:border-b-0 pl-2 py-4 py-4 hover:border-rose-500 transition-colors"
                            :class="{'text-rose-500 border-rose-500' : currentTab === 5}" @click="currentTab = 5">
                            NightBird Studios
                        </button>
                    </div>
                    <div class="w-full sm:w-4/5 min-h-[320px]">
                        <x-tab id="1" title="Founder / Full Stack Developer" date="2016 - present">
                            <ul class="w-full flex flex-col space-y-6 relative text-slate-400">
                                <x-list-item>Development of custom ecommerce platform (PHP, Laravel, Vue) for <a
                                        class="link"
                                        target="_blank"
                                        href="https://www.royalacademyofdance.org/">Royal
                                        Academy of Dance</a>, an international dance organization
                                </x-list-item>
                                <x-list-item>Database design and visualization project for <a class="link"
                                                                                              target="_blank"
                                                                                              href="https://wur.nl">Wageningen
                                        University</a>
                                    involving interactive global trade database
                                </x-list-item>
                                <x-list-item>
                                    Development of various data-driven web projects for <a target="_blank"
                                                                                           href="https://www.lunduniversity.lu.se/"
                                                                                           class="link">Lund
                                        University</a>
                                    and
                                    <a href="https://uu.nl" class="link" target="_blank">Utrecht University</a>
                                </x-list-item>
                            </ul>
                        </x-tab>

                        <x-tab id="2" title="Frontend Developer" date="2012 - 2016">
                            <ul class="w-full flex flex-col space-y-3 relative text-slate-400">
                                <x-list-item>
                                    Development (HTML, SCSS, Javascript) for various research projects for <a
                                        href="https://uu.nl" class="link" target="_blank">Wageningen University</a>.
                                </x-list-item>
                                <x-list-item>
                                    Development of (HTML, SCSS, Javascript) for for <a
                                        href="https://wziinc.com" class="link" target="_blank">WZI Inc.</a>
                                </x-list-item>
                                <x-list-item>
                                    Development of (Google Maps API, HTML, SCSS, Javascript) for for <a
                                        href="https://carasharratttravel.com" class="link" target="_blank">Cara Sharratt
                                        Travel</a>
                                </x-list-item>
                            </ul>
                        </x-tab>

                        <x-tab id="3" title="Audio Programmer" date="2010 - 2011">
                            <ul class="w-full flex flex-col space-y-3 relative text-slate-400">
                                <x-list-item>
                                    Audio programming for various Nintendo Wii games
                                </x-list-item>
                            </ul>
                        </x-tab>

                        <x-tab id="4" title="Audio Programmer" date="2008 - 2009">
                            <ul class="w-full flex flex-col space-y-3 relative text-slate-400">
                                <x-list-item>
                                    Audio programming for an Xbox360 game.
                                </x-list-item>
                            </ul>
                        </x-tab>

                        <x-tab id="5" title="Audio Engineer (Intern)" date="2008 - 2008">
                            <ul class="w-full flex flex-col space-y-3 relative text-slate-400">
                                <x-list-item>
                                    Supported in-house audio engineers
                                </x-list-item>
                            </ul>
                        </x-tab>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
