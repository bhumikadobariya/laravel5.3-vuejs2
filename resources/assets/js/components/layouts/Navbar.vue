<template>
  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              {{auth_user_data.name}}
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a @click="logout()" class="btn btn-default col-sm-12" ><i class="fa fa-sign-out pull-right"></i>Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- /top navigation -->
</template>

<script>

import { mapGetters } from 'vuex'

export default {
  computed: mapGetters([
    'auth_user_data',
    'all_users',
  ]),
  mounted () {
    this.get_auth_user_data()
    this.fetchUsers()
  },
  methods: {
    get_auth_user_data() {
      this.$http.get('/get_auth_user_data')
        .then( (resp) => {
          this.$store.commit('AUTH_USER_DATA', resp.body)
      })
    },
    fetchUsers () {
      this.$http.get('/api/users')
        .then( (response) => {
          this.$store.commit('ALL_USERS', {
            data: response.data.data
          })
        })
    },
    logout: function() {
      this.$http.post('/logout').then(function (response) {
        setTimeout(function(){
          window.location.reload();
        }, 200);
      })
    }
  }

}
</script>
