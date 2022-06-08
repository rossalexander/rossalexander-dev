<div class="relative">
<li {{ $attributes->merge(['class' => 'before:absolute before:content-["▹"] before:text-rose-500 before:left-0 pl-6']) }}>{{$slot}}</li>
{{--<li class="before:absolute before:content-['▹'] before:text-rose-500 before:left-0 pl-6">{{$slot}}</li>--}}
</div>
