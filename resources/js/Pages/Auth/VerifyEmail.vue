<template>
  <Head title="Email Verification" />
  <header class="d-xxl-flex order-2 align-items-xxl-start header-blue" style="height: 920.27px;background: linear-gradient(74deg, #ff7300 27%, #ffc700), rgb(255,255,255);padding-bottom: 0px;transform-style: preserve-3d;padding-top: 5px;">
	     
	     
        <div class="container hero" style="height: 710px;">
            <div class="row justify-content-center" style="height: 666px;">
                <div class="col-md-9 col-lg-12 col-xl-12" style="margin-top: 0px;">
	                <img src="/img/LG-RIDD@2x.png" style="width: 150px;" class="rounded mx-auto d-block">
	                <div class="alert alert-success" role="alert" v-if="verificationLinkSent" style="margin-left: auto;margin-right: auto;width: 40%;">
			           Un nouveau lien de vérification a été envoyé à l'adresse e-mail que vous avez fournie lors de l'inscription.
	                </div>
	                <jet-authentication-card class="col-md-12">
					   
					    <div class="card-body">
					      <div class="mb-3 small text-muted">
					        Merci pour votre inscription! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer par e-mail ? Si vous n'a pas reçu l'e-mail, nous vous en enverrons un autre avec plaisir.
					      </div>
					
					     
					
					      <form @submit.prevent="submit">
					        <div class="mt-4 d-flex justify-content-between">
					          <jet-button
					            style="background: green;text-transform: unset !important;"
					            :class="{ 'text-white-50': form.processing }"
					            :disabled="form.processing"
					          >
					            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
					              <span class="visually-hidden">Loading...</span>
					            </div>
					
					            Renvoyer l'e-mail de vérification
					          </jet-button>
					          <Link
						            :href="route('logout')"
						            method="post"
						            as="button"
						            class="btn btn-link"
						            >Déconnexion</Link
                                >
					        </div>
					      </form>
					    </div>
					</jet-authentication-card>
                    
                </div>
            </div>
        </div>
    </header>

  <!--<jet-authentication-card>
    <template #logo>
      <jet-authentication-card-logo />
    </template>

    <div class="card-body">
      <div class="mb-3 small text-muted">
        Thanks for signing up! Before getting started, could you verify your
        email address by clicking on the link we just emailed to you? If you
        didn't receive the email, we will gladly send you another.
      </div>

      <div class="alert alert-success" role="alert" v-if="verificationLinkSent">
        A new verification link has been sent to the email address you provided
        during registration.
      </div>

      <form @submit.prevent="submit">
        <div class="mt-4 d-flex justify-content-between">
          <jet-button
            :class="{ 'text-white-50': form.processing }"
            :disabled="form.processing"
          >
            <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            Resend Verification Email
          </jet-button>

          <Link
            :href="route('logout')"
            method="post"
            as="button"
            class="btn btn-link"
            >Log out</Link
          >
        </div>
      </form>
    </div>
  </jet-authentication-card>-->
</template>

<script>
import { defineComponent } from "vue";
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue"
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue"
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetButton from "@/Jetstream/Button.vue"
import { Head, Link } from "@inertiajs/inertia-vue3"

export default defineComponent({
  components: {
    Head,
    JetAuthenticationCard,
    JetAuthenticationCardLogo,
    JetButton,
    JetDropdownLink,
    Link
  },

  props: {
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
	      is_admin: 0
      })
    };
  },

  methods: {
	
    submit() {
      this.form.post(this.route("verification.send"));
    }
  },

  computed: {
    verificationLinkSent() {
      return this.status === "verification-link-sent";
    },
    path() {
      return window.location.pathname
    }
  }
  
  
  
  
})
</script>
