<template>
  <Head title="Création de compte" />
  <loading :active.sync="isLoading" 
        :can-cancel="true" 
        :on-cancel="onCancel"
        :is-full-page="fullPage"></loading>
        
        <BaseLayout>
        
             <div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
	                    
	                    <section style="margin-top: 78px;margin-bottom: 93px;">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="px-0 pt-4 pb-0 mt-3 mb-3">
               <h2 id="heading">Informations de votre compte</h2>
               <p></p>
               
                  <ul id="progressbar">
                     <li v-bind:class="{ active: step == 1 }"  id="account"><strong>Connexion</strong></li>
                     <li v-bind:class="{ active: step == 2 }" id="personal"><strong>Id</strong></li>
                     <li v-bind:class="{ active: step == 3 }" id="payment"><strong>Profil</strong></li>
                     <li v-bind:class="{ active: step == 4 }" id="confirm"><strong>Validation</strong></li>
                  </ul>
                 <br> 
                  <form id="msform" v-if="step == 1" @submit.prevent="validateStep1">
                  <fieldset style="background: transparent;">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title" style="display:none;">Account Information:</h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps" style="display:none;">Step 1 - 4</h2>
                           </div>
                        </div>
                        <div class="fields">
                           <input type="text" name="email" placeholder="Identifiant" v-model="form.user_name"/> 
                           <div v-if="errors.user_name" style="color:red;">{{ errors.user_name }}</div>
                        </div>
                        <div class="fields">
                           <input type="password" name="pwd" placeholder="Mot de passe" v-model="form.password"/> 
                           <div v-if="errors.password" style="color:red;">{{ errors.password }}</div>
                           
                        </div>
                        <div class="fields">
                           <input type="password" name="cpwd" placeholder="Confirmer le mot de passe" v-model="form.password_confirmation"/>
                           <div v-if="errors.password_confirmation" style="color:red;">{{ errors.password_confirmation }}</div>
                        </div>
                     </div>
                     
			          <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			          </jet-button>
                  </fieldset>
                  </form>
                  <form id="msform" v-if="step == 2" @submit.prevent="validateStep2">
                  <fieldset style="background: transparent;" v-if="step == 2">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                        <label class="fieldlabels"></label> 
                        
                        
                        <div class="fields">
	                        <select class="form-select" aria-label="Default select example" v-model="form.account_type" style="margin-bottom: 25px;">
	                           <option selected disabled value="">--Selectionner le type de compte--</option>
	                           <option value="1">Candidat</option>
	                           <option value="2">Recruteur</option>
	                        </select>
	                         <div v-if="errors.account_type" style="color:red;">{{ errors.account_type }}</div>
                        </div>
                        <div class="fields">
                           <input type="text" name="last_name" placeholder="Nom" v-model="form.last_name"/>
                           <div v-if="errors.last_name" style="color:red;">{{ errors.last_name }}</div>
                        </div>
                        
                        <div class="fields">
	                         <input type="text" name="first_name" placeholder="Prénom" v-model="form.first_name"/>
	                         <div v-if="errors.first_name" style="color:red;">{{ errors.first_name }}</div>
	                    </div>
                        
                        <div class="fields">
                           <input type="email" name="email" placeholder="Email" v-model="form.email"/>
                           <div v-if="errors.email" style="color:red;">{{ errors.email }}</div>
                        </div>
                        
                        <div class="fields">
                        
						 <vue-tel-input :dropdownOptions='{showDialCodeInSelection:true,showFlags:true,showDialCodeInList:true,showSearchBox:true}' :inputOptions='{placeholder:"Entrer le numéro de téléphone"}' defaultCountry="fr" mode="international" :autoDefaultCountry="false"  v-model="form.phone_number" :ignoredCountries="['ci']" enabledCountryCode="true" @validate="validate" v-if="form.account_type == 1"></vue-tel-input>
						 
						 <vue-tel-input :dropdownOptions='{showDialCodeInSelection:true,showFlags:true,showDialCodeInList:true,showSearchBox:true}' :inputOptions='{placeholder:"Entrer le numéro de téléphone"}' defaultCountry="fr" mode="international" :autoDefaultCountry="false"  v-model="form.phone_number"  enabledCountryCode="true" @validate="validate" v-if="form.account_type == 2"></vue-tel-input>
						 
						 
						 <div v-if="errors.phone_number" style="color:red;">{{ errors.phone_number }}</div>
                        </div>
                        
                        <div class="fields">
                            <input type="text" name="ville" placeholder="Ville" v-model="form.city"/>
                            <div v-if="errors.city" style="color:red;">{{ errors.city }}</div>
                        </div>
                        
                        <div class="fields">
	                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Votre photo</label> 
	                        <input type="file" @input="form.profile_photo = $event.target.files[0]" accept="image/*"/>
                        </div>
                     </div>
                     <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing || (isValid == false || form.account_type == 0)">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			          </jet-button>
			           &nbsp;&nbsp;
			          <jet-button  type="button" class="previous action-button-previous" @click="step = step - 1">
			             			 Retour
			          </jet-button>
                  </fieldset>
                  </form>
                  <form id="msform" v-if="step == 3" @submit.prevent="validateStep3">
                  <fieldset style="background: transparent;" v-if="form.account_type == 2 && step == 3">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                        <div class="fields">
                           <input type="text" name="fname" placeholder="Nom de l'entreprise" v-model="form.company_name"/>
                           <div v-if="errors.company_name" style="color:red;">{{ errors.company_name }}</div>
                        </div>
                        
                        <div class="fields">
                            <Select2 v-model="form.activity_sector" :options="activity_sector" :settings="{ settingOption: value, settingOption: value,placeholder:'Selectionner votre secteur d\'activité' }" @change="myChangeEvent($event)" @select="mySelectEvent($event)" />
                            <div v-if="errors.activity_sector" style="color:red;">{{ errors.activity_sector }}</div>
                        </div>
                        <div class="fields">
                           <input type="text" name="fname" placeholder="Localisation" v-model="form.company_location"/>
                           <div v-if="errors.company_location" style="color:red;">{{ errors.company_location }}</div> 
                        </div>
                        <div class="form-group">
                           <label for="exampleFormControlTextarea1" style="color:#000;">Détails de l'entreprise</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.company_about"></textarea>
                           <div v-if="errors.company_about" style="color:red;">{{ errors.company_about }}</div>
                        </div>
                        <label class="fieldlabels"></label> 
                        <input type="text" name="fname" placeholder="Site web" v-model="form.company_website"/> 
                        <div v-if="errors.company_website" style="color:red;">{{ errors.company_website }}</div> 
                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Logo de l'entreprise</label> 
                        <input type="file" name="pic" accept="image/*" @input="form.profile_photo_company = $event.target.files[0]"> 
                     </div>
                     <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			         </jet-button>
                     &nbsp;&nbsp;
                     <jet-button  type="button" class="previous action-button-previous" @click="step = step - 1">
			             			 Retour
			         </jet-button>     
                     <br/>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" v-model="form.policy">
                        <label class="form-check-label" for="flexCheckDefault">
                        J’ai lu et accepte les conditions générales d’utilisation
                        </label>
                         <div v-if="errors.policy" style="color:red;">{{ errors.policy }}</div>
                     </div>
                     
                  </fieldset>
                  <fieldset style="background: transparent;" v-if="form.account_type == 1 && step == 3">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                         <div class="fields">
                           <Select2 v-model="form.study_level" :options="study_level" :settings="{placeholder:'Selectionner votre niveau d\'étude' }" @change="myChangeEvent($event)" @select="mySelectEvent($event)" />
                           <div v-if="errors.study_level" style="color:red;">{{ errors.study_level }}</div>
                        </div>
                         <div class="fields">
                           <Select2 v-model="form.activity_sector" :options="activity_sector" :settings="{placeholder:'Selectionner votre domaine de formation' }" @change="myChangeEvent($event)" @select="mySelectEvent($event)" />
                           <div v-if="errors.activity_sector" style="color:red;">{{ errors.activity_sector }}</div>
                         </div>
                          <div class="fields">
                            <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Votre CV</label> 
                            <input type="file" @input="form.candidate_cv = $event.target.files[0]"/> 
                          </div>
                     </div>
                     <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			         </jet-button>
                     &nbsp;&nbsp;
                     <jet-button  type="button" class="previous action-button-previous" @click="step = step - 1">
			             			 Retour
			         </jet-button>
                     <br/>
                     
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" v-model="form.policy" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        J’ai lu et accepte les conditions générales d’utilisation
                        </label>
                         <div v-if="errors.policy" style="color:red;">{{ errors.policy }}</div>
                     </div>
                     
                  </fieldset>
                  </form>
                  <fieldset style="background: transparent;" v-if="step == 4">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                        <br><br>
                        <h2 class="purple-text text-center" style="color:black;" v-if="!isLoading"><strong>Création du compte terminée avec succès<br/>Veuillez patienter...</strong></h2>
                        <h2 class="purple-text text-center" style="color:black;" v-if="isLoading"><strong>Création du compte en cours</strong></h2>
                        <br>
                        <div class="row justify-content-center">
                           <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                        </div>
                        <br><br>
                        <div class="row justify-content-center">
                           <div class="col-7 text-center">
                              <h5 class="purple-text text-center"></h5>
                           </div>
                        </div>
                     </div>
                  </fieldset>
            </div>
         </div>
      </div>
   </div>
</section>
	                    
                    </div>
                </div>
            </div>
        </div>
        
           
        </BaseLayout>
  
<!--<header class="d-xxl-flex order-2 align-items-xxl-start header-blue" style="height: 514.27px;background: linear-gradient(74deg, rgb(255,115,0) 43%, #ffc700 99%), url(/img/ades3.jpg) center / cover, rgb(68,111,162);padding-bottom: 0px;transform-style: preserve-3d;">
   <div class="container hero">
      <nav class="navbar navbar-light navbar-expand-lg d-xl-flex navigation-clean" style="background: rgba(177,30,44,0);padding-top: 0;padding-bottom: 0;margin-top: -41px;">
         <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid" src="/img/LG-RIDD@2x.png" style="width: 115px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 18px;">Accueil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);font-size: 18px;">Offres</a></li>
                  <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);font-size: 18px;">Activités</a></li>
                  <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);font-size: 18px;">Actualités</a></li>
                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);font-size: 18px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-circle text-start" style="font-size: 33px;padding-right: 9px;color: rgb(255,255,255);margin-top: -5px;">
                           <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                           <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                        </svg>
                        Compte&nbsp;
                     </a>
                     
                      <Link href="/login" class="dropdown-item">
                      Connexion
                      </Link>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);font-size: 18px;"><i class="fa fa-language" style="font-size: 26px;padding-left: 0px;padding-right: 7px;margin-top: -2px;"></i>Langue&nbsp;</a>
                     <div class="dropdown-menu"><a class="dropdown-item" href="#">Francais</a><a class="dropdown-item" href="#">Anglais</a></div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <section class="highlight-blue" style="background: rgba(30,106,221,0);">
         <div class="container">
            <div class="intro">
               <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-size: 55.44px;font-weight: bold;margin-top: 14px;line-height: 73.16px;">Création compte</h2>
            </div>
            <div class="buttons"></div>
         </div>
      </section>
   </div>
</header>-->
<!--<section style="margin-top: 78px;margin-bottom: 93px;">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="px-0 pt-4 pb-0 mt-3 mb-3">
               <h2 id="heading">Informations de votre compte</h2>
               <p></p>
               
                  <ul id="progressbar">
                     <li v-bind:class="{ active: step == 1 }"  id="account"><strong>Connexion</strong></li>
                     <li v-bind:class="{ active: step == 2 }" id="personal"><strong>Id</strong></li>
                     <li v-bind:class="{ active: step == 3 }" id="payment"><strong>Profil</strong></li>
                     <li v-bind:class="{ active: step == 4 }" id="confirm"><strong>Validation</strong></li>
                  </ul>
                 <br> 
                  <form id="msform" v-if="step == 1" @submit.prevent="validateStep1">
                  <fieldset style="background: transparent;">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title" style="display:none;">Account Information:</h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps" style="display:none;">Step 1 - 4</h2>
                           </div>
                        </div>
                        <div class="fields">
                           <input type="text" name="email" placeholder="Identifiant" v-model="form.user_name"/> 
                           <div v-if="errors.user_name" style="color:red;">{{ errors.user_name }}</div>
                        </div>
                        <div class="fields">
                           <input type="password" name="pwd" placeholder="Mot de passe" v-model="form.password"/> 
                           <div v-if="errors.password" style="color:red;">{{ errors.password }}</div>
                           
                        </div>
                        <div class="fields">
                           <input type="password" name="cpwd" placeholder="Confirmer le mot de passe" v-model="form.password_confirmation"/>
                           <div v-if="errors.password_confirmation" style="color:red;">{{ errors.password_confirmation }}</div>
                        </div>
                     </div>
                     
			          <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			          </jet-button>
                  </fieldset>
                  </form>
                  <form id="msform" v-if="step == 2" @submit.prevent="validateStep2">
                  <fieldset style="background: transparent;" v-if="step == 2">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                        <label class="fieldlabels"></label> 
                        
                        
                        <div class="fields">
	                        <select class="form-select" aria-label="Default select example" v-model="form.account_type" style="margin-bottom: 25px;">
	                           <option selected disabled value="">--Selectionner le type de compte--</option>
	                           <option value="1">Candidat</option>
	                           <option value="2">Recruteur</option>
	                        </select>
	                         <div v-if="errors.account_type" style="color:red;">{{ errors.account_type }}</div>
                        </div>
                        <div class="fields">
                           <input type="text" name="last_name" placeholder="Nom" v-model="form.last_name"/>
                           <div v-if="errors.last_name" style="color:red;">{{ errors.last_name }}</div>
                        </div>
                        
                        <div class="fields">
	                         <input type="text" name="first_name" placeholder="Prénom" v-model="form.first_name"/>
	                         <div v-if="errors.first_name" style="color:red;">{{ errors.first_name }}</div>
	                    </div>
                        
                        <div class="fields">
                           <input type="email" name="email" placeholder="Email" v-model="form.email"/>
                           <div v-if="errors.email" style="color:red;">{{ errors.email }}</div>
                        </div>
                        
                        <div class="fields">
                        
						 <vue-tel-input :dropdownOptions='{showDialCodeInSelection:true,showFlags:true,showDialCodeInList:true,showSearchBox:true}' :inputOptions='{placeholder:"Entrer le numéro de téléphone"}' defaultCountry="fr" mode="international" :autoDefaultCountry="false"  v-model="form.phone_number" :ignoredCountries="['ci']" enabledCountryCode="true" @validate="validate" v-if="form.account_type == 1"></vue-tel-input>
						 
						 <vue-tel-input :dropdownOptions='{showDialCodeInSelection:true,showFlags:true,showDialCodeInList:true,showSearchBox:true}' :inputOptions='{placeholder:"Entrer le numéro de téléphone"}' defaultCountry="fr" mode="international" :autoDefaultCountry="false"  v-model="form.phone_number"  enabledCountryCode="true" @validate="validate" v-if="form.account_type == 2"></vue-tel-input>
						 
						 
						 <div v-if="errors.phone_number" style="color:red;">{{ errors.phone_number }}</div>
                        </div>
                        
                        <div class="fields">
                            <input type="text" name="ville" placeholder="Ville" v-model="form.city"/>
                            <div v-if="errors.city" style="color:red;">{{ errors.city }}</div>
                        </div>
                        
                        <div class="fields">
	                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Votre photo</label> 
	                        <input type="file" @input="form.profile_photo = $event.target.files[0]" accept="image/*"/>
                        </div>
                     </div>
                     <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing || (isValid == false || form.account_type == 0)">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			          </jet-button>
			           &nbsp;&nbsp;
			          <jet-button  type="button" class="previous action-button-previous" @click="step = step - 1">
			             			 Retour
			          </jet-button>
                  </fieldset>
                  </form>
                  <form id="msform" v-if="step == 3" @submit.prevent="validateStep3">
                  <fieldset style="background: transparent;" v-if="form.account_type == 2 && step == 3">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                        <div class="fields">
                           <input type="text" name="fname" placeholder="Nom de l'entreprise" v-model="form.company_name"/>
                           <div v-if="errors.company_name" style="color:red;">{{ errors.company_name }}</div>
                        </div>
                        
                        <div class="fields">
                            <Select2 v-model="form.activity_sector" :options="activity_sector" :settings="{ settingOption: value, settingOption: value,placeholder:'Selectionner votre secteur d\'activité' }" @change="myChangeEvent($event)" @select="mySelectEvent($event)" />
                            <div v-if="errors.activity_sector" style="color:red;">{{ errors.activity_sector }}</div>
                        </div>
                        <div class="fields">
                           <input type="text" name="fname" placeholder="Localisation" v-model="form.company_location"/>
                           <div v-if="errors.company_location" style="color:red;">{{ errors.company_location }}</div> 
                        </div>
                        <div class="form-group">
                           <label for="exampleFormControlTextarea1" style="color:#000;">Détails de l'entreprise</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.company_about"></textarea>
                           <div v-if="errors.company_about" style="color:red;">{{ errors.company_about }}</div>
                        </div>
                        <label class="fieldlabels"></label> 
                        <input type="text" name="fname" placeholder="Site web" v-model="form.company_website"/> 
                        <div v-if="errors.company_website" style="color:red;">{{ errors.company_website }}</div> 
                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Logo de l'entreprise</label> 
                        <input type="file" name="pic" accept="image/*" @input="form.profile_photo_company = $event.target.files[0]"> 
                     </div>
                     <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			         </jet-button>
                     &nbsp;&nbsp;
                     <jet-button  type="button" class="previous action-button-previous" @click="step = step - 1">
			             			 Retour
			         </jet-button>     
                     <br/>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" v-model="form.policy">
                        <label class="form-check-label" for="flexCheckDefault">
                        J’ai lu et accepte les conditions générales d’utilisation
                        </label>
                         <div v-if="errors.policy" style="color:red;">{{ errors.policy }}</div>
                     </div>
                     
                  </fieldset>
                  <fieldset style="background: transparent;" v-if="form.account_type == 1 && step == 3">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                         <div class="fields">
                           <Select2 v-model="form.study_level" :options="study_level" :settings="{placeholder:'Selectionner votre niveau d\'étude' }" @change="myChangeEvent($event)" @select="mySelectEvent($event)" />
                           <div v-if="errors.study_level" style="color:red;">{{ errors.study_level }}</div>
                        </div>
                         <div class="fields">
                           <Select2 v-model="form.activity_sector" :options="activity_sector" :settings="{placeholder:'Selectionner votre domaine de formation' }" @change="myChangeEvent($event)" @select="mySelectEvent($event)" />
                           <div v-if="errors.activity_sector" style="color:red;">{{ errors.activity_sector }}</div>
                         </div>
                          <div class="fields">
                            <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Votre CV</label> 
                            <input type="file" @input="form.candidate_cv = $event.target.files[0]"/> 
                          </div>
                     </div>
                     <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			         </jet-button>
                     &nbsp;&nbsp;
                     <jet-button  type="button" class="previous action-button-previous" @click="step = step - 1">
			             			 Retour
			         </jet-button>
                     <br/>
                     
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" v-model="form.policy" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        J’ai lu et accepte les conditions générales d’utilisation
                        </label>
                         <div v-if="errors.policy" style="color:red;">{{ errors.policy }}</div>
                     </div>
                     
                  </fieldset>
                  </form>
                  <fieldset style="background: transparent;" v-if="step == 4">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title"></h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps"></h2>
                           </div>
                        </div>
                        <br><br>
                        <h2 class="purple-text text-center" style="color:black;" v-if="!isLoading"><strong>Création du compte terminée avec succès<br/>Veuillez patienter...</strong></h2>
                        <h2 class="purple-text text-center" style="color:black;" v-if="isLoading"><strong>Création du compte en cours</strong></h2>
                        <br>
                        <div class="row justify-content-center">
                           <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                        </div>
                        <br><br>
                        <div class="row justify-content-center">
                           <div class="col-7 text-center">
                              <h5 class="purple-text text-center"></h5>
                           </div>
                        </div>
                     </div>
                  </fieldset>
            </div>
         </div>
      </div>
   </div>
</section>-->



  <!--<jet-authentication-card>
    <template #logo>
      <jet-authentication-card-logo />
    </template>

    <div class="card-body">

      <jet-validation-errors class="mb-3" />

      <form @submit.prevent="submit">
        <div class="mb-3">
          <jet-label for="name" value="Name" />
          <jet-input id="name" type="text" v-model="form.name" required autofocus autocomplete="name" />
        </div>

        <div class="mb-3">
          <jet-label for="email" value="Email" />
          <jet-input id="email" type="email" v-model="form.email" required />
        </div>

        <div class="mb-3">
          <jet-label for="password" value="Password" />
          <jet-input id="password" type="password" v-model="form.password" required autocomplete="new-password" />
        </div>

        <div class="mb-3">
          <jet-label for="password_confirmation" value="Confirm Password" />
          <jet-input id="password_confirmation" type="password" v-model="form.password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="mb-3" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
          <div class="custom-control custom-checkbox">
            <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

            <label class="custom-control-label" for="terms">
              I agree to the <a target="_blank" :href="route('terms.show')">Terms of Service</a> and <a target="_blank" :href="route('policy.show')">Privacy Policy</a>
            </label>
          </div>
        </div>

        <div class="mb-0">
          <div class="d-flex justify-content-end align-items-baseline">
            <Link :href="route('login')" class="text-muted me-3 text-decoration-none">
              Already registered?
            </Link>

            <jet-button class="ms-4" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              Register
            </jet-button>
          </div>
        </div>
      </form>
    </div>
  </jet-authentication-card>-->
</template>


<style type="text/css">
  .fields{
	  
	  margin-bottom: 25px; 
  }
  
  .vue-tel-input{
	  
	    border-top: 0px;
		border-left: 0px;
		border-right: 0px;
		border: unset !important;
  }
  .vti__input {
    
    padding: 12px 15px 12px 15px;
	border-bottom: 1px solid #595959;
	border-top: 0px solid #ffffff;
	border-left: 0px solid #ffffff;
	border-right: 0px solid #ffffff;
	border-radius: 0px;
	margin-bottom: 25px;
	margin-top: 2px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #000000;
	background-color: #ECEFF1;
	font-size: 14px;
	letter-spacing: 1px;
  
  }
  fieldset input{
	  
	  margin-bottom: unset !important; 
  }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
     margin-top: -8px;
  }
  
</style>
<script>

//import Select2 from 'vue3-select2-component';
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
//import VuePhoneNumberInput from 'vue-phone-number-input';
//import 'vue-phone-number-input/dist/vue-phone-number-input.css';
//import 'vue-tel-input/dist/vue-tel-input.css';
import { defineComponent } from 'vue'
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from '@/Jetstream/Label.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import BaseLayout from '@/Pages/BaseLayout.vue'
//import { VueTelInput } from 'vue-tel-input';

export default defineComponent({
  props: {
    errors: Object,
  },
  components: {
    Head,
    JetAuthenticationCard,
    JetAuthenticationCardLogo,
    JetButton,
    JetInput,
    JetCheckbox,
    JetLabel,
    JetValidationErrors,
    Link,
    //Select2,
    Loading,
    BaseLayout
    //VuePhoneNumberInput
  },

  data() {
    return {
	  
	  study_level : {},
	  activity_sector : {},
	  step : 1,
	  isLoading: false,
      fullPage: true,
      isValid : false,
	  //myValue: '',
      //myOptions: ['op1', 'op2', 'op3'],
      form: this.$inertia.form({
        //name: '',
        //email: '',
        profile_photo:'',
        candidate_cv : '',
        company_name:'',
        company_location:'',
        company_about:'',
        company_website:'',
        ccode : 33,
        account_type:1,
        phone_number:'',
        email:'',
        study_level:'',
        activity_sector:'',
        user_name : '',
        first_name : '',
        last_name: '',
        password: '',
        password_confirmation: '',
        country:'',
        city:'',
        policy:'',
        terms: false,
        is_admin:0
      })
    }
  },
  mounted(){
	  
	   
	  
	   
	  axios.get('/activity/sector').then(response => {
		  
		  
		  this.activity_sector = response.data;
      });
      
      
      
      axios.get('/study/level').then(response => {
		  
		  
		  this.study_level = response.data;
      });
     
      //console.log(result);
	  //axios.get('/countries').then(response => {
		  
		  //console.log(response);
		  
		  /*var data = allCountries.map(([name, iso2, dialCode]) => ({
				  name,
				  iso2: iso2.toUpperCase(),
				  dialCode,
          }))*/
          //var outPutArray=arrayObj.map(( {Name,Email} ) =>  ({Name,Email}) )
		  
		  //for(var key in )
		  //console.log(response.data);
		  //this.countries = response.data;
     //});
  },
  methods: {
	
	validate(data){
		this.form.ccode = data.countryCallingCode;
		this.isValid = data.valid;
		console.log(data);
	},
	validateStep1(){
		//return false;
		
		
		this.form.post(this.route('validate1'), {
          onError:   errors => {  },
	      onSuccess: page => { this.step = this.step + 1;}
        });
        
        /*this.$inertia.post(this.route('validate1'),this.form, {
            forceFormData: true,
            onError:   errors => {  },
	        onSuccess: page => { this.step = this.step + 1;}
        });*/
        
	},
	validateStep2(){
		
		
	    this.form.post(this.route('validate2'), {
          onError:   errors => {  },
	      onSuccess: page => { this.step = this.step + 1;}
        });
        
        /*this.$inertia.post(this.route('validate2'),this.form, {
            forceFormData: true,
            onError:   errors => {  },
	        onSuccess: page => { this.step = this.step + 1;}
        });*/
	},
	validateStep3(){
		
		
		/*let vm = this;
		this.$inertia.post(this.route('validate3'),this.form, {
            forceFormData: true,
            onSuccess: page => {
	            
	            vm.step = vm.step + 1;
		        vm.isLoading = true;
		        
		        this.$inertia.post('/create/user/account',vm.form,{
			        
			         onError:   errors => {  },
				     onSuccess: page => { 
					      vm.isLoading = false;
				     }

			    });
            },
            onError: errors => {}
        });*/
		let vm = this;
	    this.form.post(this.route('validate3'), {
          onError:   errors => {  },
	      onSuccess: page => { 
		       vm.step = this.step + 1;
		       vm.isLoading = true;
		       
		       vm.form.post('/create/user/account', {
			          onError:   errors => {  },
				      onSuccess: page => { 
					      vm.isLoading = false;
					      setTimeout(function(){
					        window.location='/login';
					      },3000);
				      }
               });
		       
		       //axios.post('/create/account').then(response => {
		       //   this.study_level = response.data;
               //});
		       
		  }
        })
		///validate/step/1
	},
    submit() {
      this.form.post(this.route('register'), {
        onFinish: () => this.form.reset('password', 'password_confirmation'),
      })
    }
  }
})
</script>
