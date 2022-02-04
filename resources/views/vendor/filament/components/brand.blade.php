@if (filled($brand = config('filament.brand')))
    <div class="d-flex flex-row text-xl font-bold tracking-tight filament-brand">
        {{-- <img src="{{ asset('/assets/favicon/favicon.png') }}" alt="RFS Consulting Logo" class="h-10"/> --}}
        <span>RFS Admin</span>
    </div>
@endif
