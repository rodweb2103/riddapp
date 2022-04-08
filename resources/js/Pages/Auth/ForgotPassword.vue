<template>
  <Head title="Forgot Password" />

  <header class="d-xxl-flex order-2 align-items-xxl-start header-blue" style="height: 930.27px;background: linear-gradient(74deg, #ff7300 27%, #ffc700), rgb(255,255,255);padding-bottom: 0px;transform-style: preserve-3d;padding-top: 5px;">
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
	                                
                                    <div class="mx-xs-5 mx-lg-5" style="margin-top: 90px;">
	                                    <div v-if="status" class="alert alert-success" role="alert">
								           {{ status }}
								        </div>
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Vous recevrez par e-mail un lien de réinitialisation de mot de passe</h4>
                                        </div>
                                         <jet-validation-errors class="mb-2" />
                                        <form @submit.prevent="submit">
                                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Identifiant ou email" name="email"  v-model="form.email" required autofocus></div>
                                            <!--<div class="mb-3"></div><button class="btn btn-primary btn-lg d-block btn-user w-100" type="submit" style="margin-top: 6px;background: rgb(255,115,0);border-width: 0px;padding-top: 7px;">Enregistrer</button>-->
                                            <div class="d-flex justify-content-end mt-4">
									          <!--<jet-button class="btn btn-primary btn-lg d-block btn-user w-100" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
									            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
									              <span class="visually-hidden">Loading...</span>
									            </div>
									            
									            <div>Recevoir le lien de réinitialisation</div>
									          </jet-button>-->
									          <button  class="btn btn-primary btn-lg d-block btn-user w-100" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
									            
									            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
									              <span class="visually-hidden">Loading...</span>
									            </div>
									            
									            <div v-if="!form.processing">Recevoir le lien de réinitialisation</div>
									          
									          </button>
									        </div>
									        <div class="text-center" style="margin-top: 11px;">
										        <Link  :href="route('login')" class="small">
								                     Se connecter
								                </Link>
									        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </header>
  <!--<jet-authentication-card>
    <template #logo>
      <jet-authentication-card-logo />
    </template>

    <div class="card-body">
      <div class="mb-2">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
      </div>

      <div v-if="status" class="alert alert-success" role="alert">
        {{ status }}
      </div>

      <jet-validation-errors class="mb-2" />

      <form @submit.prevent="submit">
        <div>
          <jet-label for="email" value="Email" />
          <jet-input id="email" type="email" v-model="form.email" required autofocus />
        </div>

        <div class="d-flex justify-content-end mt-4">
          <jet-button :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            
            Email Password Reset Link
          </jet-button>
        </div>
      </form>
    </div>
  </jet-authentication-card>-->
</template>

<script>
import { defineComponent } from 'vue'
import { Head,Link } from '@inertiajs/inertia-vue3';
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'

export default defineComponent({
  components: {
    Head,
    JetAuthenticationCard,
    JetAuthenticationCardLogo,
    JetButton,
    JetInput,
    JetLabel,
    JetValidationErrors,
    Link
  },

  props: {
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: ''
      })
    }
  },

  methods: {
    submit() {
      this.form.post(this.route('password.email'))
    }
  }
})
</script>
