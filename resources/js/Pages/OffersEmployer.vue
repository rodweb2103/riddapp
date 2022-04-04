<template>
  <app-layout-general title="Dashboard">
       <!--<template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>
    <welcome />-->
    <section>
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
                    </select></div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-top: 40px;text-align: center;"><button class="btn btn-lg" type="button" style="background: rgb(22,147,49);color: rgb(255,255,255);">Rechercher&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 33px;">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></button></div>
            </div>
        </div>
    </section>
    <section style="height: auto;padding-bottom: 42px;margin-top: 121px;">
        <div class="container">
            <div class="intro" style="margin-right: 0px;margin-left: 0;margin-bottom: 0px;">
                <h5 class="text-start" style="margin-top: -4px;margin-left: 0px;padding-top: 0px;margin-bottom: 0px;padding-bottom: 39px;color: rgb(0,0,0);font-size: 36px;">5 offres actives</h5>
            </div>
            <div class="row" style="background: rgba(195,195,195,0.13);padding-top: 27px;border-bottom: 2px solid rgb(20,147,49) ;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="d-flex media">
                        <div class="media-body" style="width: 100%;">
                            <h4><a href="#" style="font-size: 22px;margin-left: 41px;color: rgb(0,0,0);">Poste à pourvoir</a></h4>
                            <p class="text-start" style="margin-top: -8px;font-size: 14px;margin-left: 45px;color: rgb(0,0,0);">Date-Localisation</p>
                            <p class="text-start" style="margin-top: -10px;margin-left: 42px;width: auto;color: rgb(0,0,0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseruntmollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background: rgba(255,255,255,0.29);padding-top: 27px;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="d-flex media">
                        <div class="media-body" style="width: 100%;">
                            <h4><a href="#" style="font-size: 22px;margin-left: 41px;color: rgb(0,0,0);">Poste à pourvoir</a></h4>
                            <p class="text-start" style="margin-top: -8px;font-size: 14px;margin-left: 45px;color: rgb(0,0,0);">Date-Localisation</p>
                            <p class="text-start" style="margin-top: -10px;margin-left: 42px;width: auto;color: rgb(0,0,0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseruntmollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background: rgba(195,195,195,0.13);padding-top: 27px;border-bottom: 2px solid rgb(20,147,49) ;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="d-flex media">
                        <div class="media-body" style="width: 100%;">
                            <h4><a href="#" style="font-size: 22px;margin-left: 41px;color: rgb(0,0,0);">Poste à pourvoir</a></h4>
                            <p class="text-start" style="margin-top: -8px;font-size: 14px;margin-left: 45px;color: rgb(0,0,0);">Date-Localisation</p>
                            <p class="text-start" style="margin-top: -10px;margin-left: 42px;width: auto;color: rgb(0,0,0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseruntmollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background: rgba(255,255,255,0.29);padding-top: 27px;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="d-flex media">
                        <div class="media-body" style="width: 100%;">
                            <h4><a href="#" style="font-size: 22px;margin-left: 41px;color: rgb(0,0,0);">Poste à pourvoir</a></h4>
                            <p class="text-start" style="margin-top: -8px;font-size: 14px;margin-left: 45px;color: rgb(0,0,0);">Date-Localisation</p>
                            <p class="text-start" style="margin-top: -10px;margin-left: 42px;width: auto;color: rgb(0,0,0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseruntmollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background: rgba(195,195,195,0.13);padding-top: 27px;border-bottom: 2px solid rgb(20,147,49) ;">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="d-flex media">
                        <div class="media-body" style="width: 100%;">
                            <h4><a href="#" style="font-size: 22px;margin-left: 41px;color: rgb(0,0,0);">Poste à pourvoir</a></h4>
                            <p class="text-start" style="margin-top: -8px;font-size: 14px;margin-left: 45px;color: rgb(0,0,0);">Date-Localisation</p>
                            <p class="text-start" style="margin-top: -10px;margin-left: 42px;width: auto;color: rgb(0,0,0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptatevelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deseruntmollit anim id est laborum.</p>
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