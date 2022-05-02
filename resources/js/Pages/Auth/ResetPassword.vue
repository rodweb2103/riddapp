<template>
  <Head title="Reset Password" />
  <BaseLayout>
  <div class="user-area pt-100 pb-70" style="background: linear-gradient(74deg, #ff7300 43%, #ffc700 99%), rgb(68,111,162)">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="user-all-form">
                            <div class="contact-form">
                                <h3 class="user-title">{{ __('Changer le mot de passe') }}</h3>
                                <form id="contactForm" @submit.prevent="submit">
	                                <div v-if="status" class="alert alert-success" role="alert">
								           {{ status }}
								    </div>
								     <jet-validation-errors class="mb-2" />
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input class="form-control form-control-user" type="hidden" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Identifiant ou email" name="email" v-model="form.email">
                                            </div>
                                            
                                            <div class="form-group">
                                               <input class="form-control form-control-user" type="password" id="exampleInputPassword" :placeholder="__('Nouveau mot de passe')" name="password" v-model="form.password">
                                            </div>
                                            <div class="form-group">
	                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword-1" :placeholder="__('Confirmer le mot de passe')" name="password" v-model="form.password_confirmation">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <!--<button type="submit" class="default-btn ">
                                                Reset Now
                                            </button>-->
                                            <button class="default-btn" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
									            
									            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
									              <span class="visually-hidden">Loading...</span>
									            </div>
									            
									            <div v-if="!form.processing">{{ __('Mettre à jour') }}</div>
									          
									          </button>
                                        </div>
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
  </div>
  </BaseLayout>
  <!--<header class="d-xxl-flex order-2 align-items-xxl-start" style="height: 930.27px;background: linear-gradient(74deg, #ff7300 27%, #ffc700), rgb(255,255,255);padding-bottom: 0px;transform-style: preserve-3d;padding-top: 5px;">
        <div class="container hero" style="height: 710px;">
            <div class="row justify-content-center" style="margin-top: 44px;height: 666px;">
                <div class="col-md-9 col-lg-10 col-xl-10" style="margin-top: 0px;">
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
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">{{ __('Changer le mot de passe') }}</h4>
                                        </div>
                                        <form @submit.prevent="submit">
                                            <div class="mb-3"><div class="mb-3"><input class="form-control form-control-user" type="hidden" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Identifiant ou email" name="email" v-model="form.email"></div></div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Nouveau mot de passe" name="password" v-model="form.password"></div>
                                            <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword-1" placeholder="Confirmer le mot de passe" name="password" v-model="form.password_confirmation"></div>
                                             <div class="mb-0">
	                                            <jet-button class="mx-auto btn btn-primary btn-lg d-block btn-user w-10" :class="{ 'text-white-50': form.processing }" :disabled="form.processing"  style="margin-top: 6px;background: rgb(255,115,0);border-width: 0px;padding-top: 7px;background-color: green !important;">
									              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
									                <span class="visually-hidden">Loading...</span>
									              </div>
									              <div v-if="!form.processing" style="font-size: 16px;">{{ __('Mettre à jour') }}</div>
	                                            </jet-button>
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
  </header>-->
  <!--<jet-authentication-card>
    <template #logo>
      <jet-authentication-card-logo />
    </template>


    <div class="card-body">

      <jet-validation-errors class="mb-3" />

      <form @submit.prevent="submit">
        <div class="mb-3">
          <jet-label for="email" value="Email" />
          <jet-input id="email" type="email" v-model="form.email" required autofocus />
        </div>

        <div class="mb-3">
          <jet-label for="password" value="Password" />
          <jet-input id="password" type="password" v-model="form.password" required autocomplete="new-password" />
        </div>

        <div class="mb-3">
          <jet-label for="password_confirmation" value="Confirm Password" />
          <jet-input id="password_confirmation" type="password" v-model="form.password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="mb-0">
          <div class="d-flex justify-content-end">
            <jet-button :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
              <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              
              Reset Password
            </jet-button>
          </div>
        </div>
      </form>
    </div>
  </jet-authentication-card>-->
</template>

<script>
import { defineComponent } from 'vue'
import { Head } from '@inertiajs/inertia-vue3'
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
import BaseLayout from '@/Pages/BaseLayout.vue'

export default defineComponent({
  components: {
    Head,
    JetAuthenticationCard,
    JetAuthenticationCardLogo,
    JetButton,
    JetInput,
    JetLabel,
    JetValidationErrors,
    BaseLayout
  },

  props: {
    email: String,
    token: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        token: this.token,
        email: this.email,
        password: '',
        password_confirmation: '',
        is_admin:0
      })
    }
  },

  methods: {
    submit() {
      this.form.post(this.route('password.update'), {
        onFinish: () => this.form.reset('password', 'password_confirmation'),
      })
    }
  }
})
</script>
