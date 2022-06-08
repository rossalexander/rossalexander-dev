@props(['id', 'title', 'date'])
<div
    x-show="currentTab === {{$id}}"
    x-transition:enter="transition"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
>
    <p class="text-lg sm:text-2xl font-bold text-slate-300 mt-2 font-mono font-thin">{{$title}}</p>
    <p class="text-base sm:text-xl font-mono text-sm my-5 text-slate-500">{{ $date }}</p>
    <div class="text-base sm:text-2xl">
        {{$slot}}
    </div>
</div>
