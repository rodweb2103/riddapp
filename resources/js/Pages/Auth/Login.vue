<template>
  <Head title="Connexion" />
  
        <BaseLayout>
                
          <div class="user-area pt-100 pb-70" style="background: linear-gradient(74deg, #ff7300 43%, #ffc700 99%), rgb(68,111,162)">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="user-img">
                            <img src="/img/student-pc.jpg" alt="faq" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-all-form">
                            <div class="contact-form">
                                <h3 class="user-title">Connexion</h3>
                                <form @submit.prevent="submit">
	                                <jet-validation-errors class="mb-3" />
	                                <div v-if="status" class="alert alert-success" role="alert">
								           {{ status }}
								    </div>
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input type="email" v-model="form.email" name="name" id="name" class="form-control" placeholder="Adresse e-mail*">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="Password" placeholder="Mot de passe*" v-model="form.password">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 form-condition">
                                            <div class="agree-label">
                                                <!--<input type="checkbox" id="chb1">
                                                <label for="chb1">
                                                    Remember Me <a class="forget" href="forgot-password.html">Forgot Password?</a>
                                                </label>-->
                                                <jet-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />
	                                            <label for="remember_me">
	                                                  Se souvenir de moi
	                                                  <Link v-if="canResetPassword" :href="route('password.request')" class="forget">
							                              Mot de passe oublié?
							                          </Link>
	                                            </label>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 col-md-12">
                                            <!--<button type="submit" class="default-btn">
                                                Login Now
                                            </button>-->
                                            <jet-button  :class="{ 'text-white-50': form.processing }" :disabled="form.processing"  style="margin-top: 6px;background: rgb(255,115,0);border-width: 0px;padding-top: 7px;">
									              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
									                <span class="visually-hidden">Loading...</span>
									              </div>
									              <div v-if="!form.processing">Connexion</div>
	                                         </jet-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        </BaseLayout>
        
        
  
   <!--<div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="user-img">
                            <img src="assets/images/faq-img.jpg" alt="faq" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-all-form">
                            <div class="contact-form">
                                <h3 class="user-title"> Sign in</h3>
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Username Or Email Address*" placeholder="Username Or Email Address*">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="Password" placeholder="Password*">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 form-condition">
                                            <div class="agree-label">
                                                <input type="checkbox" id="chb1">
                                                <label for="chb1">
                                                    Remember Me <a class="forget" href="forgot-password.html">Forgot Password?</a>
                                                </label>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">
                                                Login Now
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>-->
  
  <!--<header class="d-xxl-flex order-2 align-items-xxl-start header-blue" style="height: 930.27px;background: linear-gradient(74deg, #ff7300 27%, #ffc700), rgb(255,255,255);padding-bottom: 0px;transform-style: preserve-3d;padding-top: 5px;">
	      
        <div class="container hero" style="height: 710px;">
            <div class="row justify-content-center" style="height: 666px;">
                <div class="col-md-9 col-lg-12 col-xl-12" style="margin-top: 0px;">
	                <img src="/img/LG-RIDD@2x.png" style="width: 150px;" class="rounded mx-auto d-block">
                    <div class="card shadow-lg o-hidden border-0 my-5" style="height: 570px;padding-top: 32px;">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex" style="height: 499.047px;">
                                    <div class="flex-grow-1 bg-login-image" style="background: url(/img/student-pc.jpg);background-size: cover;"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5" style="margin-top: 26px;">
	                                    <jet-validation-errors class="mb-3" />
	                                    <div v-if="status" class="alert alert-success" role="alert">
								           {{ status }}
								        </div>
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Bienvenue</h4>
                                        </div>
                                        <form @submit.prevent="submit">
                                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Identifiant ou email" name="email" v-model="form.email"></div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Mot de passe" name="password" v-model="form.password"></div>
                                            <div class="mb-3">
                                                <div class="custom-control custom-checkbox small">
	                                                    <jet-checkbox class="form-check-input custom-control-input" id="remember_me" name="remember" v-model:checked="form.remember" />
	                                                    <label class="form-check-label custom-control-label" for="remember_me">Se souvenir de moi</label>
                                                </div>
                                            </div>
                                             <div class="mb-0">
	                                            <jet-button class="mx-auto btn btn-primary btn-lg d-block btn-user w-100" :class="{ 'text-white-50': form.processing }" :disabled="form.processing"  style="margin-top: 6px;background: rgb(255,115,0);border-width: 0px;padding-top: 7px;">
									              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
									                <span class="visually-hidden">Loading...</span>
									              </div>
									              <div v-if="!form.processing">Connexion</div>
	                                            </jet-button>
                                             </div>
                                        </form>
                                        <div class="text-center" style="margin-top: 11px;">
                                        <Link v-if="canResetPassword" :href="route('password.request')" class="small">
							              Mot de passe oublié?
							            </Link>
                                        </div>
                                        <div class="text-center">
	                                        <Link v-if="canResetPassword" href="/register" class="small">
							                   Créer un compte
							                </Link>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>-->

  <!--<jet-authentication-card>
    <template #logo>
      <jet-authentication-card-logo />
    </template>

    <div class="card-body">

      <jet-validation-errors class="mb-3" />

      <div v-if="status" class="alert alert-success mb-3 rounded-0" role="alert">
        {{ status }}
      </div>

      <form @submit.prevent="submit">
        <div class="mb-3">
          <jet-label for="email" value="Email" />
          <jet-input id="email" type="email" v-model="form.email" required autofocus />
        </div>

        <div class="mb-3">
          <jet-label for="password" value="Password" />
          <jet-input id="password" type="password" v-model="form.password" required autocomplete="current-password" />
        </div>

        <div class="mb-3">
          <div class="custom-control custom-checkbox">
            <jet-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />

            <label class="custom-control-label" for="remember_me">
              Remember Me
            </label>
          </div>
        </div>

        <div class="mb-0">
          <div class="d-flex justify-content-end align-items-baseline">
            <Link v-if="canResetPassword" :href="route('password.request')" class="text-muted me-3">
              Forgot your password?
            </Link>

            <jet-button class="ms-4" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              Log in
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
import JetCheckbox from '@/Jetstream/Checkbox.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import BaseLayout from '@/Pages/BaseLayout.vue'

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
    BaseLayout
  },

  props: {
    canResetPassword: Boolean,
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: '',
        password: '',
        remember: false,
        is_admin:0
      })
    }
  },

  methods: {
    submit() {
      this.form
          .transform(data => ({
            ... data,
            remember: this.form.remember ? 'on' : ''
          }))
          .post(this.route('login'), {
            onFinish: () => this.form.reset('password'),
          })
    }
  }
})
</script>
