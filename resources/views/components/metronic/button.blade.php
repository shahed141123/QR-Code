@if ($isLink ?? false)
    <a href="{{ $href ?? 'JavaScript:void(0)' }}" class="btn btn-light-{{ $class ?? 'primary' }} font-weight-bold mr-2" id="{{ $id ?? '' }}">
        {{ $slot }}
    </a>
@else
    <button type="{{ $type ?? 'button' }}" class="btn btn-light-{{ $class ?? 'primary' }}" id="{{ $id ?? '' }}">
        {{ $slot }}
    </button>
@endif



{{-- <x-combined-button class="success" isLink=true href="/success">
    {{ __('Success') }}
</x-combined-button>  --}}
