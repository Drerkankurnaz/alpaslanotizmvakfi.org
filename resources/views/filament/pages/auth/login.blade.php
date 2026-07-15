<div class="fixed inset-0 z-[60] flex min-h-screen w-full bg-[#0d1526]">
        {{-- Left visual panel --}}
        <div class="relative hidden w-1/2 flex-col justify-between overflow-hidden p-10 lg:flex"
             style="background: radial-gradient(circle at 20% 20%, #38bdf8 0%, transparent 45%), radial-gradient(circle at 80% 80%, #fb7185 0%, transparent 45%), linear-gradient(160deg, #0c1a2b 0%, #10213a 55%, #16233b 100%);">
            <div class="flex items-center justify-between">
                <img src="{{ asset('assets/images/alpaslan-logo-3.png') }}" alt="Alpaslan Otizm Vakfı" class="h-9 w-auto">
                <a href="{{ url('/') }}" class="rounded-full bg-white/10 px-4 py-2 text-sm text-white/90 backdrop-blur transition hover:bg-white/20">
                    ← Siteye dön
                </a>
            </div>
            <div class="max-w-md">
                <h2 class="text-3xl font-semibold leading-tight text-white">
                    Otizmli bireylerin hayatına<br>dokunuyoruz.
                </h2>
                <p class="mt-4 text-white/60">
                    Alpaslan Otizm Vakfı içerik yönetim paneline hoş geldiniz.
                </p>
            </div>
        </div>

        {{-- Right form panel --}}
        <div id="cool-login" class="flex w-full flex-col justify-center bg-[#0d1526] px-6 py-16 sm:px-12 lg:w-1/2 lg:px-20">
            <div class="mx-auto w-full max-w-sm">
                <img src="{{ asset('assets/images/alpaslan-logo-3.png') }}" alt="" class="mb-8 h-8 w-auto lg:hidden">

                <h1 class="text-2xl font-semibold text-white">Yönetim Paneli</h1>
                <p class="mt-2 text-sm text-white/50">Devam etmek için giriş yapın</p>

                <div class="mt-8">
                    <x-filament-panels::form id="form" wire:submit="authenticate">
                        {{ $this->form }}

                        <x-filament-panels::form.actions
                            :actions="$this->getCachedFormActions()"
                            :full-width="$this->hasFullWidthFormActions()"
                        />
                    </x-filament-panels::form>
                </div>
            </div>
        </div>

        <style>
            #cool-login .fi-fo-field-wrp-label,
            #cool-login label { color: #cbd5e1 !important; }
            #cool-login input {
                background-color: rgba(255,255,255,0.06) !important;
                border-color: rgba(255,255,255,0.14) !important;
                color: #f1f5f9 !important;
            }
            #cool-login input::placeholder { color: #64748b !important; }
            #cool-login input:focus {
                border-color: #38bdf8 !important;
                box-shadow: 0 0 0 1px #38bdf8 !important;
            }
            #cool-login .fi-fo-field-wrp-error-message { color: #fb7185 !important; }
        </style>
    </div>
