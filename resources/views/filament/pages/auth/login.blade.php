<div class="cl-wrap">
    {{-- Left visual panel --}}
    <div class="cl-visual"
         style="background: radial-gradient(circle at 20% 20%, #38bdf8 0%, transparent 45%), radial-gradient(circle at 80% 80%, #fb7185 0%, transparent 45%), linear-gradient(160deg, #0c1a2b 0%, #10213a 55%, #16233b 100%);">
        <a href="{{ url('/') }}" class="cl-back">← Siteye dön</a>
        <div class="cl-visual-content">
            <img src="{{ asset('assets/images/alpaslan-logo-3.png') }}" alt="Alpaslan Otizm Vakfı" class="cl-logo">
            <h2 class="cl-heading">Otizmli bireylerin hayatına<br>dokunuyoruz.</h2>
            <p class="cl-sub">Alpaslan Otizm Vakfı içerik yönetim paneline hoş geldiniz.</p>
        </div>
    </div>

    {{-- Right form panel --}}
    <div id="cool-login" class="cl-form-panel">
        <div class="cl-form-inner">
            <img src="{{ asset('assets/images/alpaslan-logo-3.png') }}" alt="" class="cl-logo-mobile">

            <h1 class="cl-form-title">Yönetim Paneli</h1>
            <p class="cl-form-subtitle">Devam etmek için giriş yapın</p>

            <div class="cl-form-body">
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
        .cl-wrap { position: fixed; inset: 0; z-index: 60; display: flex; width: 100%; min-height: 100vh; background: #0d1526; }
        .cl-visual { position: relative; display: none; width: 50%; flex-direction: column; align-items: center; justify-content: center; overflow: hidden; padding: 2.5rem; text-align: center; }
        .cl-back { position: absolute; right: 2.5rem; top: 2.5rem; border-radius: 9999px; background: rgba(255,255,255,0.1); padding: 0.6rem 1.2rem; font-size: 0.875rem; color: rgba(255,255,255,0.9); text-decoration: none; backdrop-filter: blur(6px); }
        .cl-back:hover { background: rgba(255,255,255,0.2); }
        .cl-visual-content { display: flex; max-width: 32rem; flex-direction: column; align-items: center; }
        .cl-logo { height: 7rem; width: auto; }
        .cl-heading { margin-top: 2.5rem; font-size: 2.75rem; font-weight: 600; line-height: 1.2; color: #ffffff; }
        .cl-sub { margin-top: 1.5rem; font-size: 1.125rem; color: rgba(255,255,255,0.6); }
        .cl-form-panel { display: flex; width: 100%; flex-direction: column; justify-content: center; background: #0d1526; padding: 4rem 1.5rem; }
        .cl-form-inner { margin: 0 auto; width: 100%; max-width: 24rem; }
        .cl-logo-mobile { display: block; height: 2.25rem; width: auto; margin: 0 auto 2rem; }
        .cl-form-title { font-size: 1.5rem; font-weight: 600; color: #ffffff; margin: 0; }
        .cl-form-subtitle { margin-top: 0.5rem; font-size: 0.875rem; color: rgba(255,255,255,0.5); }
        .cl-form-body { margin-top: 2rem; }

        @media (min-width: 640px) {
            .cl-form-panel { padding-left: 3rem; padding-right: 3rem; }
        }

        @media (min-width: 1024px) {
            .cl-visual { display: flex; }
            .cl-form-panel { width: 50%; padding-left: 5rem; padding-right: 5rem; }
            .cl-logo-mobile { display: none; }
        }

        @media (max-width: 420px) {
            .cl-heading { font-size: 2rem; }
            .cl-form-panel { padding-top: 2.5rem; padding-bottom: 2.5rem; }
        }

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
