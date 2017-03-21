<template>
  <div>
    <div class="page-title">
      <div class="title_left">
        <!--
        <h3>Add New User</h3>
        -->
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add New User</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="addNewUser" data-parsley-validate class="form-horizontal form-label-left" v-on:submit.prevent="onSubmit(user)" method="POST">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" type="text" name="name" v-model="user.name" required="required" class="form-control col-md-7 col-xs-12">

                  <span class="error text-danger" v-if="errors.name">
                    @{{ errors['name'] }}
                  </span>

                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="email" type="email" name="email" v-model="user.email" required="required" class="form-control col-md-7 col-xs-12">

                  <span class="error text-danger" v-if="errors.email">
                    @{{ errors['email'] }}
                  </span>

                </div>
              </div>
              <div class="form-group">
                <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="password" type="password" name="password" v-model="user.password" class="form-control col-md-7 col-xs-12" required="required">

                  <span class="error text-danger" v-if="errors.password">
                    @{{ errors['password'] }}
                  </span>

                </div>
              </div>
              <div class="form-group">
                <label for="password-confirm" class="control-label col-md-3 col-sm-3 col-xs-12">Confirmation Password <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="password-confirm" type="password" v-model="user.password_confirmation" name="password_confirmation" class="form-control col-md-7 col-xs-12" required="required">

                  <span class="error text-danger" v-if="errors.password_confirmation">
                    @{{ errors['password_confirmation'] }}
                  </span>

                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" @click="cancel()">Cancel</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  mounted: function () {
    this.$store.commit('ERRORS', {})
  },
  data() {
    return {
      user: {},
    }
  },
  computed: mapGetters([
    'errors'
  ]),
  methods: {
    onSubmit (userData) {
      this.$http.post('/api/addNewUser', userData)
        .then( (response) => {
          this.$store.commit('ADD_NEW_USER', response.body.data)
          this.$store.commit('ERRORS', {})
          this.$router.push('/users');
        })
        .catch(errors => {
          if (typeof errors.body === 'object') {
            this.$store.commit('ERRORS', errors.body.errors)
          } else {
            this.$store.commit('ERRORS', {})
        }
        });
    },
    cancel () {
      this.$router.push('/users')
    }
  },
}
</script>
