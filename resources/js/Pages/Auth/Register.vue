<template>
  <Head title="Création de compte" />
  
  
<header class="d-xxl-flex order-2 align-items-xxl-start header-blue" style="height: 514.27px;background: linear-gradient(74deg, rgb(255,115,0) 43%, #ffc700 99%), url(/img/ades3.jpg) center / cover, rgb(68,111,162);padding-bottom: 0px;transform-style: preserve-3d;">
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
                     <div class="dropdown-menu"><!--<a class="dropdown-item" href="/login">Connexion</a>-->
                     
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
</header>
<section style="margin-top: 78px;margin-bottom: 93px;">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="px-0 pt-4 pb-0 mt-3 mb-3">
               <h2 id="heading">Informations de votre compte {{ step }}</h2>
               <p></p>
               
                  <!-- progressbar -->
                  <ul id="progressbar">
                     <li v-bind:class="{ active: step == 1 }"  id="account"><strong>Connexion</strong></li>
                     <li v-bind:class="{ active: step == 2 }" id="personal"><strong>Id</strong></li>
                     <li v-bind:class="{ active: step == 3 }" id="payment"><strong>Profil</strong></li>
                     <li v-bind:class="{ active: step == 4 }" id="confirm"><strong>Validation</strong></li>
                  </ul>
                  <!--<div class="progress">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                 
                     </div>--> <br> <!-- fieldsets -->
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
                        </div>
                     </div>
                     <!--<button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">OK</button>-->
                     <!--<jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              
			          </jet-button>-->
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
                        
                        <!--<select class="form-select" aria-label="Default select example">
                           <option selected>Domaine d'activité</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                           </select> 
                                              <label class="fieldlabels"></label> 
                                              <input type="text" name="fname" placeholder="Nom" /> <label class="fieldlabels"></label> <input type="text" name="lname" placeholder="Prenom"/>-->
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
                        <!--<div class="fields">
	                        <input type="text" name="phone_number" placeholder="Téléphone" v-model="form.phone_number"/>
	                        <div v-if="errors.phone_number" style="color:red;">{{ errors.phone_number }}</div>
	                    
	                    </div>-->
                        <div class="fields">
                        <!--<select class="form-select" id="country" name="country" v-model="form.country">
						    <option>country</option>
						    <option value="AF">Afghanistan</option>
						    <option value="AX">Iles Aland</option>
						    <option value="AL">Albanie</option>
						    <option value="DZ">Algérie</option>
						    <option value="AS">Samoa américaines</option>
						    <option value="AD">Andorre</option>
						    <option value="AO">Angola</option>
						    <option value="AI">Anguilla</option>
						    <option value="AQ">Antarctique</option>
						    <option value="AG">Antigua-et-Barbuda</option>
						    <option value="AR">Argentine</option>
						    <option value="AM">Arménie</option>
						    <option value="AW">Aruba</option>
						    <option value="AU">Australie</option>
						    <option value="AT">Autriche</option>
						    <option value="AZ">Azerbaïdjan</option>
						    <option value="BS">Bahamas</option>
						    <option value="BH">Bahreïn</option>
						    <option value="BD">Bangladesh</option>
						    <option value="BB">Barbade</option>
						    <option value="BY">Biélorussie</option>
						    <option value="BE">Belgique</option>
						    <option value="BZ">Belize</option>
						    <option value="BJ">Bénin</option>
						    <option value="BM">Bermudes</option>
						    <option value="BT">Bhoutan</option>
						    <option value="BO">Bolivie</option>
						    <option value="BQ">Bonaire, Saint-Eustache et Saba</option>
						    <option value="BA">Bosnie Herzégovine</option>
						    <option value="BW">Botswana</option>
						    <option value="BV">Île Bouvet</option>
						    <option value="BR">Brésil</option>
						    <option value="IO">Territoire britannique de l'océan Indien</option>
						    <option value="BN">Brunei Darussalam</option>
						    <option value="BG">Bulgarie</option>
						    <option value="BF">Burkina Faso</option>
						    <option value="BI">Burundi</option>
						    <option value="KH">Cambodge</option>
						    <option value="CM">Cameroun</option>
						    <option value="CA">Canada</option>
						    <option value="CV">Cap-Vert</option>
						    <option value="KY">Îles Caïmans</option>
						    <option value="CF">République centrafricaine</option>
						    <option value="TD">Tchad</option>
						    <option value="CL">Chili</option>
						    <option value="CN">Chine</option>
						    <option value="CX">Île de noël</option>
						    <option value="CC">Îles Cocos (Keeling)</option>
						    <option value="CO">Colombie</option>
						    <option value="KM">Comores</option>
						    <option value="CG">Congo</option>
						    <option value="CD">Congo, République démocratique du Congo</option>
						    <option value="CK">Îles Cook</option>
						    <option value="CR">Costa Rica</option>
						    <option value="CI">Côte d'Ivoire</option>
						    <option value="HR">Croatie</option>
						    <option value="CU">Cuba</option>
						    <option value="CW">Curacao</option>
						    <option value="CY">Chypre</option>
						    <option value="CZ">République Tchèque</option>
						    <option value="DK">Danemark</option>
						    <option value="DJ">Djibouti</option>
						    <option value="DM">Dominique</option>
						    <option value="DO">République dominicaine</option>
						    <option value="EC">Equateur</option>
						    <option value="EG">Egypte</option>
						    <option value="SV">Salvador</option>
						    <option value="GQ">Guinée Équatoriale</option>
						    <option value="ER">Érythrée</option>
						    <option value="EE">Estonie</option>
						    <option value="ET">Ethiopie</option>
						    <option value="FK">Îles Falkland (Malvinas)</option>
						    <option value="FO">Îles Féroé</option>
						    <option value="FJ">Fidji</option>
						    <option value="FI">Finlande</option>
						    <option value="FR">France</option>
						    <option value="GF">Guyane Française</option>
						    <option value="PF">Polynésie française</option>
						    <option value="TF">Terres australes françaises</option>
						    <option value="GA">Gabon</option>
						    <option value="GM">Gambie</option>
						    <option value="GE">Géorgie</option>
						    <option value="DE">Allemagne</option>
						    <option value="GH">Ghana</option>
						    <option value="GI">Gibraltar</option>
						    <option value="GR">Grèce</option>
						    <option value="GL">Groenland</option>
						    <option value="GD">Grenade</option>
						    <option value="GP">Guadeloupe</option>
						    <option value="GU">Guam</option>
						    <option value="GT">Guatemala</option>
						    <option value="GG">Guernesey</option>
						    <option value="GN">Guinée</option>
						    <option value="GW">Guinée-Bissau</option>
						    <option value="GY">Guyane</option>
						    <option value="HT">Haïti</option>
						    <option value="HM">Îles Heard et McDonald</option>
						    <option value="VA">Saint-Siège (État de la Cité du Vatican)</option>
						    <option value="HN">Honduras</option>
						    <option value="HK">Hong Kong</option>
						    <option value="HU">Hongrie</option>
						    <option value="IS">Islande</option>
						    <option value="IN">Inde</option>
						    <option value="ID">Indonésie</option>
						    <option value="IR">Iran (République islamique d</option>
						    <option value="IQ">Irak</option>
						    <option value="IE">Irlande</option>
						    <option value="IM">île de Man</option>
						    <option value="IL">Israël</option>
						    <option value="IT">Italie</option>
						    <option value="JM">Jamaïque</option>
						    <option value="JP">Japon</option>
						    <option value="JE">Jersey</option>
						    <option value="JO">Jordan</option>
						    <option value="KZ">Kazakhstan</option>
						    <option value="KE">Kenya</option>
						    <option value="KI">Kiribati</option>
						    <option value="KP">République populaire démocratique de Corée</option>
						    <option value="KR">Corée, République de</option>
						    <option value="XK">Kosovo</option>
						    <option value="KW">Koweit</option>
						    <option value="KG">Kirghizistan</option>
						    <option value="LA">République démocratique populaire lao</option>
						    <option value="LV">Lettonie</option>
						    <option value="LB">Liban</option>
						    <option value="LS">Lesotho</option>
						    <option value="LR">Libéria</option>
						    <option value="LY">Jamahiriya arabe libyenne</option>
						    <option value="LI">Liechtenstein</option>
						    <option value="LT">Lituanie</option>
						    <option value="LU">Luxembourg</option>
						    <option value="MO">Macao</option>
						    <option value="MK">Macédoine, ancienne République yougoslave de</option>
						    <option value="MG">Madagascar</option>
						    <option value="MW">Malawi</option>
						    <option value="MY">Malaisie</option>
						    <option value="MV">Maldives</option>
						    <option value="ML">Mali</option>
						    <option value="MT">Malte</option>
						    <option value="MH">Iles Marshall</option>
						    <option value="MQ">Martinique</option>
						    <option value="MR">Mauritanie</option>
						    <option value="MU">Ile Maurice</option>
						    <option value="YT">Mayotte</option>
						    <option value="MX">Mexique</option>
						    <option value="FM">Micronésie, États fédérés de</option>
						    <option value="MD">Moldova, République de</option>
						    <option value="MC">Monaco</option>
						    <option value="MN">Mongolie</option>
						    <option value="ME">Monténégro</option>
						    <option value="MS">Montserrat</option>
						    <option value="MA">Maroc</option>
						    <option value="MZ">Mozambique</option>
						    <option value="MM">Myanmar</option>
						    <option value="NA">Namibie</option>
						    <option value="NR">Nauru</option>
						    <option value="NP">Népal</option>
						    <option value="NL">Pays-Bas</option>
						    <option value="AN">Antilles néerlandaises</option>
						    <option value="NC">Nouvelle Calédonie</option>
						    <option value="NZ">Nouvelle-Zélande</option>
						    <option value="NI">Nicaragua</option>
						    <option value="NE">Niger</option>
						    <option value="NG">Nigeria</option>
						    <option value="NU">Niue</option>
						    <option value="NF">l'ile de Norfolk</option>
						    <option value="MP">Îles Mariannes du Nord</option>
						    <option value="NO">Norvège</option>
						    <option value="OM">Oman</option>
						    <option value="PK">Pakistan</option>
						    <option value="PW">Palau</option>
						    <option value="PS">Territoire palestinien, occupé</option>
						    <option value="PA">Panama</option>
						    <option value="PG">Papouasie Nouvelle Guinée</option>
						    <option value="PY">Paraguay</option>
						    <option value="PE">Pérou</option>
						    <option value="PH">Philippines</option>
						    <option value="PN">Pitcairn</option>
						    <option value="PL">Pologne</option>
						    <option value="PT">Le Portugal</option>
						    <option value="PR">Porto Rico</option>
						    <option value="QA">Qatar</option>
						    <option value="RE">Réunion</option>
						    <option value="RO">Roumanie</option>
						    <option value="RU">Fédération Russe</option>
						    <option value="RW">Rwanda</option>
						    <option value="BL">Saint Barthélemy</option>
						    <option value="SH">Sainte-Hélène</option>
						    <option value="KN">Saint-Christophe-et-Niévès</option>
						    <option value="LC">Sainte-Lucie</option>
						    <option value="MF">Saint Martin</option>
						    <option value="PM">Saint-Pierre-et-Miquelon</option>
						    <option value="VC">Saint-Vincent-et-les-Grenadines</option>
						    <option value="WS">Samoa</option>
						    <option value="SM">Saint Marin</option>
						    <option value="ST">Sao Tomé et Principe</option>
						    <option value="SA">Arabie Saoudite</option>
						    <option value="SN">Sénégal</option>
						    <option value="RS">Serbie</option>
						    <option value="CS">Serbie et Monténégro</option>
						    <option value="SC">les Seychelles</option>
						    <option value="SL">Sierra Leone</option>
						    <option value="SG">Singapour</option>
						    <option value="SX">St Martin</option>
						    <option value="SK">Slovaquie</option>
						    <option value="SI">Slovénie</option>
						    <option value="SB">Les îles Salomon</option>
						    <option value="SO">Somalie</option>
						    <option value="ZA">Afrique du Sud</option>
						    <option value="GS">Géorgie du Sud et îles Sandwich du Sud</option>
						    <option value="SS">Soudan du sud</option>
						    <option value="ES">Espagne</option>
						    <option value="LK">Sri Lanka</option>
						    <option value="SD">Soudan</option>
						    <option value="SR">Suriname</option>
						    <option value="SJ">Svalbard et Jan Mayen</option>
						    <option value="SZ">Swaziland</option>
						    <option value="SE">Suède</option>
						    <option value="CH">la Suisse</option>
						    <option value="SY">République arabe syrienne</option>
						    <option value="TW">Taiwan, Province de Chine</option>
						    <option value="TJ">Tadjikistan</option>
						    <option value="TZ">Tanzanie, République-Unie de</option>
						    <option value="TH">Thaïlande</option>
						    <option value="TL">Timor-Leste</option>
						    <option value="TG">Aller</option>
						    <option value="TK">Tokelau</option>
						    <option value="TO">Tonga</option>
						    <option value="TT">Trinité-et-Tobago</option>
						    <option value="TN">Tunisie</option>
						    <option value="TR">dinde</option>
						    <option value="TM">Turkménistan</option>
						    <option value="TC">îles Turques-et-Caïques</option>
						    <option value="TV">Tuvalu</option>
						    <option value="UG">Ouganda</option>
						    <option value="UA">Ukraine</option>
						    <option value="AE">Emirats Arabes Unis</option>
						    <option value="GB">Royaume-Uni</option>
						    <option value="US">États-Unis</option>
						    <option value="UM">Îles mineures éloignées des États-Unis</option>
						    <option value="UY">Uruguay</option>
						    <option value="UZ">Ouzbékistan</option>
						    <option value="VU">Vanuatu</option>
						    <option value="VE">Venezuela</option>
						    <option value="VN">Viet Nam</option>
						    <option value="VG">Îles Vierges britanniques</option>
						    <option value="VI">Îles Vierges américaines, États-Unis</option>
						    <option value="WF">Wallis et Futuna</option>
						    <option value="EH">Sahara occidental</option>
						    <option value="YE">Yémen</option>
						    <option value="ZM">Zambie</option>
						    <option value="ZW">Zimbabwe</option>
						</select>-->
						<!--@{{ countries }}-->
						 <vue-tel-input :dropdownOptions='{showDialCodeInSelection:true,showFlags:true,showDialCodeInList:true,showSearchBox:true}' :inputOptions='{placeholder:"Entrer le numéro de téléphone"}' defaultCountry="fr" :autoDefaultCountry="false"  v-model="form.phone_number" :ignoredCountries="['ci']" enabledCountryCode="true"></vue-tel-input>
						 <!--<vue-phone-number-input v-model="form.phone_number"/>-->
						 <!--<div v-if="errors.country" style="color:red;">{{ errors.country }}</div>-->
						 <div v-if="errors.phone_number" style="color:red;">{{ errors.phone_number }}</div>
                        </div>
                        
                        <div class="fields">
                            <input type="text" name="ville" placeholder="Ville" v-model="form.city"/>
                            <div v-if="errors.city" style="color:red;">{{ errors.city }}</div>
                        </div>
                        
                        <div class="fields">
	                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Votre photo</label> 
	                       
	                        <input type="file" name="pic" accept="image/*">
                        </div>
                     </div>
                     <!--<input type="button" name="next" @click="validateStep2" class="next action-button" value="Suivant" />  <input type="button" name="previous" class="previous action-button-previous" value="Retour" @click="step = step - 1" />-->
                     <jet-button class="next action-button" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
			              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
			                <span class="visually-hidden">Loading...</span>
			              </div>
			              Suivant
			          </jet-button>
			          <!--<input type="button" name="previous" class="previous action-button-previous" value="Retour" @click="step = step - 1" />-->
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
                        <label class="fieldlabels"></label> <input type="text" name="fname" placeholder="Nom de la société" />
                        <label class="fieldlabels"></label> 
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Secteur d'activité</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <label class="fieldlabels"></label> <input type="text" name="fname" placeholder="Localisation" /> 
                        <div class="form-group">
                           <label for="exampleFormControlTextarea1" style="color:#000;">Détails de l'entreprise</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <label class="fieldlabels"></label> <input type="text" name="fname" placeholder="Site web" />  
                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Logo de l'entreprise</label> <input type="file" name="pic" accept="image/*"> 
                     </div>
                     <input type="button" name="next" @click="step = step + 1" class="next action-button" value="Suivant" />  <input type="button" name="previous" class="previous action-button-previous" value="Retour" @click="step = step - 1" />      
                     <br/>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        J’ai lu et accepte les conditions générales d’utilisation
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Recevez les dernières offres vous concernant par mail
                        </label>
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
                        <label class="fieldlabels"></label> 
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Domaine d'activité</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <label class="fieldlabels"></label> 
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Niveau d'étude</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <label class="fieldlabels"></label> 
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Type de demande</option>
                           <option value="1">Emploi</option>
                           <option value="2">Stage</option>
                        </select>
                        <label class="fieldlabels"></label> 
                        <!--<select class="form-select" aria-label="Default select example">
                           <option selected>Choix du métier</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>-->
                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Votre CV</label> <input type="file" name="pic" accept="image/*"> 
                     </div>
                     <input type="button" name="next" @click="validateStep3" class="next action-button" value="Suivant" />  <input type="button" name="previous" class="previous action-button-previous" value="Retour" @click="step = step - 1" /><br/>
                     <!--<div class="form-check" style="margin-top:35px;margin-bottom:20px;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:black;position:absolute;left:30px;">
                          J’ai lu et accepte les conditions générales
                        d’utilisation
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked" style="color:black;position:absolute;left:30px;">
                          Recevez les dernières offres vous concernant
                        par mail
                        </label>
                        </div>-->
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        J’ai lu et accepte les conditions générales d’utilisation
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Recevez les dernières offres vous concernant par mail
                        </label>
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
                        <h2 class="purple-text text-center" style="color:black;"><strong>Création du compte terminée avec succès</strong></h2>
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
<footer class="footer-dark">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 col-md-3 text-center item">
            <h3>Services</h3>
            <ul>
               <li><a href="#">Offres</a></li>
               <li><a href="#">Activités</a></li>
               <li><a href="#">Actualités</a></li>
            </ul>
         </div>
         <div class="col-sm-6 col-md-3 text-center item">
            <h3>Qui sommes-nous?</h3>
            <ul>
               <li><a href="#">RIDD</a></li>
               <li><a href="#">Equipe</a></li>
               <li><a href="#">Contacts</a></li>
            </ul>
         </div>
         <div class="col-md-6 text-center item text">
            <h3>RIDD-PLATEFORME</h3>
            <p>Le Réseau Ivoirien des Diplômés de la Diaspora<br>(RIDD) est une organisation née le 15 Novembre<br>2017 à l’initiative des jeunes ivoiriens diplômés<br>de la diaspora.</p>
         </div>
         <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
      </div>
      <p class="copyright">Propulsé par yayotech © 2022</p>
   </div>
</footer>



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
</style>
<script>

import VuePhoneNumberInput from 'vue-phone-number-input';
import 'vue-phone-number-input/dist/vue-phone-number-input.css';
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
    VuePhoneNumberInput
  },

  data() {
    return {
	  
	  countries : [],
	  step : 2,
      form: this.$inertia.form({
        //name: '',
        //email: '',
        account_type:'',
        phone_number:'',
        email:'',
        user_name : '',
        first_name : '',
        last_name: '',
        password: '',
        password_confirmation: '',
        country:'',
        city:'',
        terms: false,
      })
    }
  },
  mounted(){
	  
	
      this.countries = [{"dialCode":4,"iso2":"af","alpha3":"afg","name":"Afghanistan"},
{"dialCode":710,"iso2":"za","alpha3":"zaf","name":"Afrique du Sud"},
{"dialCode":8,"iso2":"al","alpha3":"alb","name":"Albanie"},
{"dialCode":12,"iso2":"dz","alpha3":"dza","name":"Algérie"},
{"dialCode":276,"iso2":"de","alpha3":"deu","name":"Allemagne"},
{"dialCode":20,"iso2":"ad","alpha3":"and","name":"Andorre"},
{"dialCode":24,"iso2":"ao","alpha3":"ago","name":"Angola"},
{"dialCode":28,"iso2":"ag","alpha3":"atg","name":"Antigua-et-Barbuda"},
{"dialCode":682,"iso2":"sa","alpha3":"sau","name":"Arabie saoudite"},
{"dialCode":32,"iso2":"ar","alpha3":"arg","name":"Argentine"},
{"dialCode":51,"iso2":"am","alpha3":"arm","name":"Arménie"},
{"dialCode":36,"iso2":"au","alpha3":"aus","name":"Australie"},
{"dialCode":40,"iso2":"at","alpha3":"aut","name":"Autriche"},
{"dialCode":31,"iso2":"az","alpha3":"aze","name":"Azerbaïdjan"},
{"dialCode":44,"iso2":"bs","alpha3":"bhs","name":"Bahamas"},
{"dialCode":48,"iso2":"bh","alpha3":"bhr","name":"Bahreïn"},
{"dialCode":50,"iso2":"bd","alpha3":"bgd","name":"Bangladesh"},
{"dialCode":52,"iso2":"bb","alpha3":"brb","name":"Barbade"},
{"dialCode":112,"iso2":"by","alpha3":"blr","name":"Biélorussie"},
{"dialCode":56,"iso2":"be","alpha3":"bel","name":"Belgique"},
{"dialCode":84,"iso2":"bz","alpha3":"blz","name":"Belize"},
{"dialCode":204,"iso2":"bj","alpha3":"ben","name":"Bénin"},
{"dialCode":64,"iso2":"bt","alpha3":"btn","name":"Bhoutan"},
{"dialCode":68,"iso2":"bo","alpha3":"bol","name":"Bolivie"},
{"dialCode":70,"iso2":"ba","alpha3":"bih","name":"Bosnie-Herzégovine"},
{"dialCode":72,"iso2":"bw","alpha3":"bwa","name":"Botswana"},
{"dialCode":76,"iso2":"br","alpha3":"bra","name":"Brésil"},
{"dialCode":96,"iso2":"bn","alpha3":"brn","name":"Brunei"},
{"dialCode":100,"iso2":"bg","alpha3":"bgr","name":"Bulgarie"},
{"dialCode":854,"iso2":"bf","alpha3":"bfa","name":"Burkina Faso"},
{"dialCode":108,"iso2":"bi","alpha3":"bdi","name":"Burundi"},
{"dialCode":116,"iso2":"kh","alpha3":"khm","name":"Cambodge"},
{"dialCode":120,"iso2":"cm","alpha3":"cmr","name":"Cameroun"},
{"dialCode":124,"iso2":"ca","alpha3":"can","name":"Canada"},
{"dialCode":132,"iso2":"cv","alpha3":"cpv","name":"Cap-Vert"},
{"dialCode":140,"iso2":"cf","alpha3":"caf","name":"République centrafricaine"},
{"dialCode":152,"iso2":"cl","alpha3":"chl","name":"Chili"},
{"dialCode":156,"iso2":"cn","alpha3":"chn","name":"Chine"},
{"dialCode":196,"iso2":"cy","alpha3":"cyp","name":"Chypre (pays)"},
{"dialCode":170,"iso2":"co","alpha3":"col","name":"Colombie"},
{"dialCode":174,"iso2":"km","alpha3":"com","name":"Comores"},
{"dialCode":178,"iso2":"cg","alpha3":"cog","name":"République du Congo"},
{"dialCode":180,"iso2":"cd","alpha3":"cod","name":"République démocratique du Congo"},
{"dialCode":410,"iso2":"kr","alpha3":"kor","name":"Corée du Sud"},
{"dialCode":408,"iso2":"kp","alpha3":"prk","name":"Corée du Nord"},
{"dialCode":188,"iso2":"cr","alpha3":"cri","name":"Costa Rica"},
{"dialCode":384,"iso2":"ci","alpha3":"civ","name":"Côte d'Ivoire"},
{"dialCode":191,"iso2":"hr","alpha3":"hrv","name":"Croatie"},
{"dialCode":192,"iso2":"cu","alpha3":"cub","name":"Cuba"},
{"dialCode":208,"iso2":"dk","alpha3":"dnk","name":"Danemark"},
{"dialCode":262,"iso2":"dj","alpha3":"dji","name":"Djibouti"},
{"dialCode":214,"iso2":"do","alpha3":"dom","name":"République dominicaine"},
{"dialCode":212,"iso2":"dm","alpha3":"dma","name":"Dominique"},
{"dialCode":818,"iso2":"eg","alpha3":"egy","name":"Égypte"},
{"dialCode":222,"iso2":"sv","alpha3":"slv","name":"Salvador"},
{"dialCode":784,"iso2":"ae","alpha3":"are","name":"Émirats arabes unis"},
{"dialCode":218,"iso2":"ec","alpha3":"ecu","name":"Équateur"},
{"dialCode":232,"iso2":"er","alpha3":"eri","name":"Érythrée"},
{"dialCode":724,"iso2":"es","alpha3":"esp","name":"Espagne"},
{"dialCode":233,"iso2":"ee","alpha3":"est","name":"Estonie"},
{"dialCode":840,"iso2":"us","alpha3":"usa","name":"États-Unis"},
{"dialCode":231,"iso2":"et","alpha3":"eth","name":"Éthiopie"},
{"dialCode":242,"iso2":"fj","alpha3":"fji","name":"FdialCodeji"},
{"dialCode":246,"iso2":"fi","alpha3":"fin","name":"Finlande"},
{"dialCode":250,"iso2":"fr","alpha3":"fra","name":"France"},
{"dialCode":266,"iso2":"ga","alpha3":"gab","name":"Gabon"},
{"dialCode":270,"iso2":"gm","alpha3":"gmb","name":"Gambie"},
{"dialCode":268,"iso2":"ge","alpha3":"geo","name":"Géorgie"},
{"dialCode":288,"iso2":"gh","alpha3":"gha","name":"Ghana"},
{"dialCode":300,"iso2":"gr","alpha3":"grc","name":"Grèce"},
{"dialCode":308,"iso2":"gd","alpha3":"grd","name":"Grenade"},
{"dialCode":320,"iso2":"gt","alpha3":"gtm","name":"Guatemala"},
{"dialCode":324,"iso2":"gn","alpha3":"gin","name":"Guinée"},
{"dialCode":624,"iso2":"gw","alpha3":"gnb","name":"Guinée-Bissau"},
{"dialCode":226,"iso2":"gq","alpha3":"gnq","name":"Guinée équatoriale"},
{"dialCode":328,"iso2":"gy","alpha3":"guy","name":"Guyana"},
{"dialCode":332,"iso2":"ht","alpha3":"hti","name":"Haïti"},
{"dialCode":340,"iso2":"hn","alpha3":"hnd","name":"Honduras"},
{"dialCode":348,"iso2":"hu","alpha3":"hun","name":"Hongrie"},
{"dialCode":356,"iso2":"in","alpha3":"ind","name":"Inde"},
{"dialCode":360,"iso2":"dialCode","alpha3":"dialCoden","name":"Indonésie"},
{"dialCode":364,"iso2":"ir","alpha3":"irn","name":"Iran"},
{"dialCode":368,"iso2":"iq","alpha3":"irq","name":"Irak"},
{"dialCode":372,"iso2":"ie","alpha3":"irl","name":"Irlande"},
{"dialCode":352,"iso2":"is","alpha3":"isl","name":"Islande"},
{"dialCode":376,"iso2":"il","alpha3":"isr","name":"Israël"},
{"dialCode":380,"iso2":"it","alpha3":"ita","name":"Italie"},
{"dialCode":388,"iso2":"jm","alpha3":"jam","name":"Jamaïque"},
{"dialCode":392,"iso2":"jp","alpha3":"jpn","name":"Japon"},
{"dialCode":400,"iso2":"jo","alpha3":"jor","name":"Jordanie"},
{"dialCode":398,"iso2":"kz","alpha3":"kaz","name":"Kazakhstan"},
{"dialCode":404,"iso2":"ke","alpha3":"ken","name":"Kenya"},
{"dialCode":417,"iso2":"kg","alpha3":"kgz","name":"Kirghizistan"},
{"dialCode":296,"iso2":"ki","alpha3":"kir","name":"Kiribati"},
{"dialCode":414,"iso2":"kw","alpha3":"kwt","name":"Koweït"},
{"dialCode":418,"iso2":"la","alpha3":"lao","name":"Laos"},
{"dialCode":426,"iso2":"ls","alpha3":"lso","name":"Lesotho"},
{"dialCode":428,"iso2":"lv","alpha3":"lva","name":"Lettonie"},
{"dialCode":422,"iso2":"lb","alpha3":"lbn","name":"Liban"},
{"dialCode":430,"iso2":"lr","alpha3":"lbr","name":"Liberia"},
{"dialCode":434,"iso2":"ly","alpha3":"lby","name":"Libye"},
{"dialCode":438,"iso2":"li","alpha3":"lie","name":"Liechtenstein"},
{"dialCode":440,"iso2":"lt","alpha3":"ltu","name":"Lituanie"},
{"dialCode":442,"iso2":"lu","alpha3":"lux","name":"Luxembourg"},
{"dialCode":807,"iso2":"mk","alpha3":"mkd","name":"Macédoine du Nord"},
{"dialCode":450,"iso2":"mg","alpha3":"mdg","name":"Madagascar"},
{"dialCode":458,"iso2":"my","alpha3":"mys","name":"Malaisie"},
{"dialCode":454,"iso2":"mw","alpha3":"mwi","name":"Malawi"},
{"dialCode":462,"iso2":"mv","alpha3":"mdv","name":"Maldives"},
{"dialCode":466,"iso2":"ml","alpha3":"mli","name":"Mali"},
{"dialCode":470,"iso2":"mt","alpha3":"mlt","name":"Malte"},
{"dialCode":504,"iso2":"ma","alpha3":"mar","name":"Maroc"},
{"dialCode":584,"iso2":"mh","alpha3":"mhl","name":"Îles Marshall"},
{"dialCode":480,"iso2":"mu","alpha3":"mus","name":"Maurice"},
{"dialCode":478,"iso2":"mr","alpha3":"mrt","name":"Mauritanie"},
{"dialCode":484,"iso2":"mx","alpha3":"mex","name":"Mexique"},
{"dialCode":583,"iso2":"fm","alpha3":"fsm","name":"États fédérés de Micronésie"},
{"dialCode":498,"iso2":"md","alpha3":"mda","name":"Moldavie"},
{"dialCode":492,"iso2":"mc","alpha3":"mco","name":"Monaco"},
{"dialCode":496,"iso2":"mn","alpha3":"mng","name":"Mongolie"},
{"dialCode":499,"iso2":"me","alpha3":"mne","name":"Monténégro"},
{"dialCode":508,"iso2":"mz","alpha3":"moz","name":"Mozambique"},
{"dialCode":104,"iso2":"mm","alpha3":"mmr","name":"Birmanie"},
{"dialCode":516,"iso2":"na","alpha3":"nam","name":"Namibie"},
{"dialCode":520,"iso2":"nr","alpha3":"nru","name":"Nauru"},
{"dialCode":524,"iso2":"np","alpha3":"npl","name":"Népal"},
{"dialCode":558,"iso2":"ni","alpha3":"nic","name":"Nicaragua"},
{"dialCode":562,"iso2":"ne","alpha3":"ner","name":"Niger"},
{"dialCode":566,"iso2":"ng","alpha3":"nga","name":"Nigeria"},
{"dialCode":578,"iso2":"no","alpha3":"nor","name":"Norvège"},
{"dialCode":554,"iso2":"nz","alpha3":"nzl","name":"Nouvelle-Zélande"},
{"dialCode":512,"iso2":"om","alpha3":"omn","name":"Oman"},
{"dialCode":800,"iso2":"ug","alpha3":"uga","name":"Ouganda"},
{"dialCode":860,"iso2":"uz","alpha3":"uzb","name":"Ouzbékistan"},
{"dialCode":586,"iso2":"pk","alpha3":"pak","name":"Pakistan"},
{"dialCode":585,"iso2":"pw","alpha3":"plw","name":"Palaos"},
{"dialCode":591,"iso2":"pa","alpha3":"pan","name":"Panama"},
{"dialCode":598,"iso2":"pg","alpha3":"png","name":"Papouasie-Nouvelle-Guinée"},
{"dialCode":600,"iso2":"py","alpha3":"pry","name":"Paraguay"},
{"dialCode":528,"iso2":"nl","alpha3":"nld","name":"Pays-Bas"},
{"dialCode":604,"iso2":"pe","alpha3":"per","name":"Pérou"},
{"dialCode":608,"iso2":"ph","alpha3":"phl","name":"Philippines"},
{"dialCode":616,"iso2":"pl","alpha3":"pol","name":"Pologne"},
{"dialCode":620,"iso2":"pt","alpha3":"prt","name":"Portugal"},
{"dialCode":634,"iso2":"qa","alpha3":"qat","name":"Qatar"},
{"dialCode":642,"iso2":"ro","alpha3":"rou","name":"Roumanie"},
{"dialCode":826,"iso2":"gb","alpha3":"gbr","name":"Royaume-Uni"},
{"dialCode":643,"iso2":"ru","alpha3":"rus","name":"Russie"},
{"dialCode":646,"iso2":"rw","alpha3":"rwa","name":"Rwanda"},
{"dialCode":659,"iso2":"kn","alpha3":"kna","name":"Saint-Christophe-et-Niévès"},
{"dialCode":674,"iso2":"sm","alpha3":"smr","name":"Saint-Marin"},
{"dialCode":670,"iso2":"vc","alpha3":"vct","name":"Saint-Vincent-et-les-Grenadines"},
{"dialCode":662,"iso2":"lc","alpha3":"lca","name":"Sainte-Lucie"},
{"dialCode":90,"iso2":"sb","alpha3":"slb","name":"Îles Salomon"},
{"dialCode":882,"iso2":"ws","alpha3":"wsm","name":"Samoa"},
{"dialCode":678,"iso2":"st","alpha3":"stp","name":"Sao Tomé-et-Principe"},
{"dialCode":686,"iso2":"sn","alpha3":"sen","name":"Sénégal"},
{"dialCode":688,"iso2":"rs","alpha3":"srb","name":"Serbie"},
{"dialCode":690,"iso2":"sc","alpha3":"syc","name":"Seychelles"},
{"dialCode":694,"iso2":"sl","alpha3":"sle","name":"Sierra Leone"},
{"dialCode":702,"iso2":"sg","alpha3":"sgp","name":"Singapour"},
{"dialCode":703,"iso2":"sk","alpha3":"svk","name":"Slovaquie"},
{"dialCode":705,"iso2":"si","alpha3":"svn","name":"Slovénie"},
{"dialCode":706,"iso2":"so","alpha3":"som","name":"Somalie"},
{"dialCode":729,"iso2":"sd","alpha3":"sdn","name":"Soudan"},
{"dialCode":728,"iso2":"ss","alpha3":"ssd","name":"Soudan du Sud"},
{"dialCode":144,"iso2":"lk","alpha3":"lka","name":"Sri Lanka"},
{"dialCode":752,"iso2":"se","alpha3":"swe","name":"Suède"},
{"dialCode":756,"iso2":"ch","alpha3":"che","name":"Suisse"},
{"dialCode":740,"iso2":"sr","alpha3":"sur","name":"Suriname"},
{"dialCode":748,"iso2":"sz","alpha3":"swz","name":"Eswatini"},
{"dialCode":760,"iso2":"sy","alpha3":"syr","name":"Syrie"},
{"dialCode":762,"iso2":"tj","alpha3":"tjk","name":"Tadjikistan"},
{"dialCode":834,"iso2":"tz","alpha3":"tza","name":"Tanzanie"},
{"dialCode":148,"iso2":"td","alpha3":"tcd","name":"Tchad"},
{"dialCode":203,"iso2":"cz","alpha3":"cze","name":"Tchéquie"},
{"dialCode":764,"iso2":"th","alpha3":"tha","name":"Thaïlande"},
{"dialCode":626,"iso2":"tl","alpha3":"tls","name":"Timor oriental"},
{"dialCode":768,"iso2":"tg","alpha3":"tgo","name":"Togo"},
{"dialCode":776,"iso2":"to","alpha3":"ton","name":"Tonga"},
{"dialCode":780,"iso2":"tt","alpha3":"tto","name":"Trinité-et-Tobago"},
{"dialCode":788,"iso2":"tn","alpha3":"tun","name":"Tunisie"},
{"dialCode":795,"iso2":"tm","alpha3":"tkm","name":"Turkménistan"},
{"dialCode":792,"iso2":"tr","alpha3":"tur","name":"Turquie"},
{"dialCode":798,"iso2":"tv","alpha3":"tuv","name":"Tuvalu"},
{"dialCode":804,"iso2":"ua","alpha3":"ukr","name":"Ukraine"},
{"dialCode":858,"iso2":"uy","alpha3":"ury","name":"Uruguay"},
{"dialCode":548,"iso2":"vu","alpha3":"vut","name":"Vanuatu"},
{"dialCode":862,"iso2":"ve","alpha3":"ven","name":"Venezuela"},
{"dialCode":704,"iso2":"vn","alpha3":"vnm","name":"Viêt Nam"},
{"dialCode":887,"iso2":"ye","alpha3":"yem","name":"Yémen"},
{"dialCode":894,"iso2":"zm","alpha3":"zmb","name":"Zambie"},
{"dialCode":716,"iso2":"zw","alpha3":"zwe","name":"Zimbabwe"}];
      //console.log(result);
	  axios.get('/countries').then(response => {
		  
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
     });
  },
  methods: {
	validateStep1(){
		//return false;
		this.form.post(this.route('validate1'), {
          onError:   errors => {  },
	      onSuccess: page => { this.step = this.step + 1;}
        })
        
	},
	validateStep2(){
		
		
	    this.form.post(this.route('validate2'), {
          onError:   errors => {  },
	      onSuccess: page => { this.step = this.step + 1;}
        })
	},
	validateStep3(){
		
	    this.form.post(this.route('validate3'), {
          onError:   errors => {  },
	      onSuccess: page => { this.step = this.step + 1;}
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
