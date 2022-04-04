<template>
  <app-layout-general title="Offres">
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
    <section style="margin-top: 31px;">
        <div class="container-fluid" style="padding-bottom: 25px;background: #d7d7d7;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" style="margin-top: 31px;margin-left: 0px;padding-top: 0px;margin-bottom: 43px;padding-bottom: 0px;color: rgb(0,0,0);">Recherche avancée</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center;"><select style="width: 301px;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
                        <optgroup label="Type d'offre">
                            <option value="12" selected="">Emploi</option>
                            <option value="13">Stage</option>
                        </optgroup>
                    </select><select style="width: 300px;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
                        <optgroup label="Contrat">
                            <option value="12" selected="">CDD</option>
                            <option value="13">CDI</option>
                        </optgroup>
                    </select><select style="width: 300px;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
                        <optgroup label="This is a group">
                            <option value="12" selected="">Niveau d'étude</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select><select style="width: 300px;height: 53px;margin-right: 19px;padding-left: 10px;margin-bottom: 5px;border-width: 0px;">
                        <optgroup label="This is a group">
                            <option value="12" selected="">Poste rehcerché</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select></div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-top: 40px;text-align: center;"><button class="btn btn-lg" type="button" style="background: rgb(22,147,49);color: rgb(255,255,255);">Rechercher&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 33px;">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></button></div>
            </div>
        </div>
    </section>
    <section class="testimonials-clean">
        <div class="container">
            <div class="intro" style="margin-right: 0px;margin-left: 0;">
                <h3 class="text-start" style="margin-top: 55px;margin-left: 24px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 37px;">Dernières offres</h3>
            </div>
            <div class="row">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <ul class="list-group">
	                    
                        <li class="list-group-item" style="border-width: 0px;">
                           <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #08921e;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;margin-right: 8px;">Emploi</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </li>
                        <li class="list-group-item" style="border-width: 0px;margin-top: -32px;">
                          <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #ff7300;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;">Stage</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </a>
                        </li>
                        <li class="list-group-item" style="border-width: 0px;margin-top: -32px;">
                          <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #08921e;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;">Emploi</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </a>
                        </li>
                        <li class="list-group-item" style="border-width: 0px;margin-top: -32px;">
                         <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #ff7300;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;">Emploi</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </a>
                        </li>
                        <li class="list-group-item" style="border-width: 0px;margin-top: -32px;">
                          <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #c90c00;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;">Consultance</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </a>
                        </li>
                        <li class="list-group-item" style="border-width: 0px;margin-top: -32px;">
                         <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #08921e;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;">Emploi</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </a>
                        </li>
                        <li class="list-group-item" style="border-width: 0px;margin-top: -32px;">
                         <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #08921e;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;">Emploi</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </a>
                        </li>
                        <li class="list-group-item" style="border-width: 0px;margin-top: -32px;">
                         <a href="#">
                            <div class="d-flex media">
                                <div class="media-body">
                                    <div class="d-flex media" style="overflow:visible;">
                                        <div><img class="me-3" style="width: 80px;height: 80px;" src="/img/ic-yayo.png"></div>
                                        <div style="overflow:visible;" class="media-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 style="font-size: 18px;">Poste à pourvoir&nbsp;&nbsp;<span style="background: #08921e;padding-right: 15px;padding-left: 15px;padding-bottom: 3px;padding-top: 3px;color: rgb(255,255,255);font-size: 12px;">Emploi</span></h1>
                                                    <h5 style="font-size: 16px;">Entreprise</h5>
                                                    <p style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim<br></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="width: 200;">
                    <div class="d-xxl-flex mx-auto" style="width: 100%;height: 400px;background: #0d0c0c;margin-bottom: 19px;"><img class="d-xxl-flex" style="width: 100%;height: 100%;opacity: 0.11;"></div>
                    <div class="d-xxl-flex mx-auto" style="width: 100%;height: 400px;background: #0d0c0c;"><img class="d-xxl-flex" style="width: 100%;height: 100%;opacity: 0.14;"></div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 69px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="height: 136px;background: #000000;">
                    <h2 class="text-center" style="margin-bottom: 0px;margin-top: 46px;color: rgb(255,255,255);">Bannière publicitaire</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-clean" style="height: auto;padding-bottom: 18px;margin-top: 88px;">
        <div class="container">
            <div class="intro" style="margin-right: 0px;margin-left: 0;margin-bottom: -81px;">
                <h3 class="text-start" style="margin-top: 55px;margin-left: 24px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 37px;">Les recruteurs du moment</h3>
            </div>
            <div class="row" style="margin-top: 55px;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <section class="team-clean" style="background: transparent;">
                        <div class="container">
                            <div class="intro"></div>
                            <div class="row g-0 d-xxl-flex people">
                                <div class="col-sm-auto col-md-2 col-lg-2 col-xl-2 col-xxl-2 item" style="padding-right: 0px;padding-left: 0px;"><img class="rounded-circle d-xxl-flex" src="/img/1.jpg" style="width: 150px;height: 150px;max-width: 150px;min-width: auto;min-height: auto;"></div>
                                <div class="col-sm-auto col-md-2 col-lg-2 col-xl-2 col-xxl-2 item" style="padding-right: 0px;padding-left: 0px;"><img class="rounded-circle d-xxl-flex" src="/img/1.jpg" style="width: 150px;height: 150px;max-width: 150px;min-width: auto;min-height: auto;border-style: solid;border-color: var(--bs-white);"></div>
                                <div class="col-sm-auto col-md-2 col-lg-2 col-xl-2 col-xxl-2 item" style="padding-left: 0px;padding-right: 0px;"><img class="rounded-circle" src="/img/3.jpg" style="max-width: 150px;border-style: solid;border-color: var(--bs-white);"></div>
                                <div class="col-sm-auto col-md-2 col-lg-2 col-xl-2 col-xxl-2 item" style="padding-left: 0px;padding-right: 0px;"><img class="rounded-circle" src="/img/3.jpg" style="max-width: 150px;border-style: solid;border-color: var(--bs-white);"></div>
                                <div class="col-sm-auto col-md-2 col-lg-2 col-xl-2 col-xxl-2 item" style="padding-left: 0px;padding-right: 0px;"><img class="rounded-circle" src="/img/3.jpg" style="max-width: 150px;border-style: solid;border-color: var(--bs-white);"></div>
                                <div class="col-sm-auto col-md-2 col-lg-2 col-xl-2 col-xxl-2 item" style="padding-left: 0px;padding-right: 0px;"><img class="rounded-circle" src="/img/3.jpg" style="max-width: 150px;border-style: solid;border-color: var(--bs-white);"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section style="height: auto;padding-bottom: 42px;">
        <div class="container">
            <div class="intro" style="margin-right: 0px;margin-left: 0;margin-bottom: 0px;">
                <h3 class="text-start" style="margin-top: 55px;margin-left: 24px;padding-top: 33px;margin-bottom: 0px;padding-bottom: 37px;">Trouver d'autres offres</h3>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-top: 28px;margin-left: 10px;">
                    <div id="minimal-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation" style="width: 300px;"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-1">Secteur d'activité</a></li>
                            <li class="nav-item" role="presentation" style="width: 300px;"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Type d'offre</a></li>
                            <li class="nav-item" role="presentation" style="width: 300px;"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-3">Contrat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" role="tabpanel" id="tab-1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint <br>occaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="tab-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint <br>occaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane fade show active" role="tabpanel" id="tab-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint <br>occaecat cupidatat non proident, sunt in culpa qui officia deserunt <br>mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
  </app-layout-general>
</template>

<style type="text/css">
	
	li.list-group-item{
		margin-bottom:40px;
		/*border-bottom: 1px solid !important;*/
		border-bottom: 2px solid rgb(215, 215, 215) !important;
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