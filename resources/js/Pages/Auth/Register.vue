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
               <h2 id="heading">Informations de votre compte</h2>
               <p></p>
               <form id="msform">
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
                  <fieldset style="background: transparent;" v-if="step == 1">
                     <div class="form-card">
                        <div class="row">
                           <div class="col-7">
                              <h2 class="fs-title" style="display:none;">Account Information:</h2>
                           </div>
                           <div class="col-5">
                              <h2 class="steps" style="display:none;">Step 1 - 4</h2>
                           </div>
                        </div>
                        <label for="email" lass="fieldlabels"></label> <input type="text" name="email" placeholder="Identifiant" /> <label class="fieldlabels"></label> <input type="text" name="uname" placeholder="UserName" style="display:none;"/> <label class="fieldlabels"></label> <input type="password" name="pwd" placeholder="Mot de passe" /> <label class="fieldlabels"></label> <input type="password" name="cpwd" placeholder="Confirmer le mot de passe" />
                     </div>
                     <input type="button" name="next" class="next action-button"  @click="validateStep1" value="Suivant" />
                  </fieldset>
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
                        <label class="fieldlabels"></label>
                        <select class="form-select" aria-label="Default select example" v-model="account_type">
                           <option selected disabled value="0">--Selectionner le type de compte--</option>
                           <option value="1">Candidat</option>
                           <option value="2">Recruteur</option>
                        </select>
                        <label class="fieldlabels"></label> <input type="text" name="nom" placeholder="Nom" />
                        <label class="fieldlabels"></label> <input type="text" name="pren" placeholder="Prénom" />
                        <label class="fieldlabels"></label> <input type="email" name="email" placeholder="Email" />
                        <label class="fieldlabels"></label> <input type="text" name="phno" placeholder="Téléphone" />
                        <!--<label class="fieldlabels"></label> <input type="text" name="country" placeholder="Pays" />-->
                        <select class="form-select" id="country" name="country">
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
						</select>
                        <label class="fieldlabels"></label> <input type="text" name="ville" placeholder="Ville" />
                        <label class="fieldlabels" style="margin-top:20px;margin-bottom:30px;">Votre photo</label> <input type="file" name="pic" accept="image/*">
                     </div>
                     <input type="button" name="next" @click="validateStep2" class="next action-button" value="Suivant" />  <input type="button" name="previous" class="previous action-button-previous" value="Retour" @click="step = step - 1" />
                  </fieldset>
                  <fieldset style="background: transparent;" v-if="account_type == 2 && step == 3">
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
                  <fieldset style="background: transparent;" v-if="account_type == 1 && step == 3">
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
               </form>
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

<script>
import { defineComponent } from 'vue'
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from '@/Jetstream/Label.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
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
  },

  data() {
    return {
	  account_type:0,
	  step : 1,
      form: this.$inertia.form({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        terms: false,
      })
    }
  },

  methods: {
	validateStep1(){
		
		this.step = this.step + 1;
		///validate/step/1
	},
	validateStep2(){
		
		this.step = this.step + 1;
		///validate/step/1
	},
	validateStep3(){
		
		this.step = this.step + 1;
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
