@if (filled($brand = config('filament.brand')))
    <div @class([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        <img src="{{ asset('/amar-pet.svg') }}" alt="Logo" class="h-10">
    </div>
@endif
