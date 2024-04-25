@extends('template.main')

@section('content')

    <div class="container" id="cont-menu">
        <x-tab-form-component></x-tab-form-component>
        {{-- Menus tabs --}}
    </div>

    <div class="container ct-painel">
        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <x-form-profissional />
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <x-form-pessoal />
            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <x-form-residencial />
            </div>

            <div class="tab-pane fade" id="nav-carga" role="tabpanel" aria-labelledby="nav-carga-tab" tabindex="0">
                <x-form-carga />
            </div>

            <div class="tab-pane fade" id="nav-academico" role="tabpanel" aria-labelledby="nav-academico-tab"
                tabindex="0">
                <x-form-academico />
            </div>
        </div>
    </div>
@endsection
