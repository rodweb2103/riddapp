<template>
  <app-layout-general title="Détails Offre">
    <!--<template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>
    <welcome />-->
    
    <section id="carousel" style="margin-top: 24px;">
        <div class="container">
            <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="carousel-1" style="height: 300px;">
                <div class="carousel-inner" style="height: 300px;">
                    <div class="carousel-item active" style="height: auto;"><img class="img-fluid w-100 d-block" alt="Slide Image" style="margin-top: 0px;opacity: 1;filter: brightness(0%);" src="/img/ades3.jpg"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="filter: brightness(0%);"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="filter: brightness(0%);"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            </div>
        </div>
    </section>
    <section style="height: auto;padding-bottom: 42px;">
        <div class="container">
            <div class="intro" style="margin-right: 0px;margin-left: 0;margin-bottom: 0px;">
                <h1 class="text-center" style="margin-top: 55px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 43px;font-size: 26px;color: rgb(255,115,0);">Libéllé du poste à pourvoir</h1>
            </div>
            <div class="row justify-content-start" style="margin-top: 49px;">
                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"><img class="d-xxl-flex mx-auto" src="/img/ic-yayo.png" style="width: 130px;margin-top: 19px;"></div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-start">
                    <h5 style="color: rgb(0,0,0);">Nom de la société</h5>
                    <h5 style="color: rgb(0,0,0);">Date de publication</h5>
                    <h5 style="color: rgb(0,0,0);">Secteur d'activité</h5>
                    <h5 style="color: rgb(0,0,0);">Localisation</h5>
                    <h5 style="color: rgb(0,0,0);">Type d'offre</h5>
                    <h5 style="color: rgb(0,0,0);">Contrat</h5>
                </div>
            </div>
            <div class="row justify-content-start" style="margin-top: 49px;">
                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                    <h1 class="text-start" style="margin-top: 55px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Détails de l'entreprise</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sintoccaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Détails de l'offre</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sintoccaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Profil recherché</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sintoccaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
                    <h1 class="text-start" style="margin-top: 0px;margin-left: 0px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 12px;font-size: 26px;color: rgb(0,0,0);">Date d'expiration de l'offre</h1>
                    <p>Lorem ipsum dolor sit amet, xx/xx/xxxx</p><button class="btn btn-lg" type="button" style="background: #ff7300;color: rgb(255,255,255);">Postuler</button>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>    
  </app-layout-general>
</template>

<style type="text/css">
	
	li.list-group-item{
		margin-bottom:40px;
		/*border-bottom: 1px solid !important;*/
		background: transparent !important;
	}
	
</style>
<script>
import { defineComponent } from "vue"
//import AppLayout from "@/Layouts/AppLayout.vue"
import AppLayoutGeneral from "@/Layouts/AppLayoutGeneral.vue"
import Welcome from "@/Jetstream/Welcome.vue"

export default defineComponent({
  components: {
    AppLayoutGeneral,
    Welcome
  }
});
</script>