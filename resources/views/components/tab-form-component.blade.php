<style>
    .nav-tabs{
        --bs-nav-tabs-link-active-bg: #5FCF80;
        border-bottom: none;
    }
    .nav{
        --bs-nav-link-color: #49ad67;
        --bs-nav-link-hover-color: #303030;
        --bs-nav-tabs-border-radius: 2px;
        display: flex;
        justify-content: space-between;
    }
    .nav-link{
        font-size: 18px !important;
        font-weight: 500;
    }

    .nav-link.active{
        border: 1px solid #5FCF80!important;
        border-radius: 4px;
        color: #fff !important;
        background-color: none !important;
    }
</style>


<div class="row">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Perfil Profissional</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Dados Pessoais</button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Residencial</button>
          <button class="nav-link" id="nav-carga-tab" data-bs-toggle="tab" data-bs-target="#nav-carga" type="button" role="tab" aria-controls="nav-carga" aria-selected="false">Unidades</button>
          <button class="nav-link" id="nav-academico-tab" data-bs-toggle="tab" data-bs-target="#nav-academico" type="button" role="tab" aria-controls="nav-academico" aria-selected="false">Acadêmicos</button>
        </div>
      </nav>
</div>
