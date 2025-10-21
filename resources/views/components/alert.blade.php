{{-- <div class="alert alert-{{$type}}">
    {{$message}}
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div> --}}
@props(['type' => 'info'])

<div {{ $attributes->merge(['class' => "alert alert-$type"]) }}> {{ $slot }} </div>