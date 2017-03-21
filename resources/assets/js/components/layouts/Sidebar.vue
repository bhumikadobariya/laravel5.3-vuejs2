<template>
  <div class="col-md-3 left_col ">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>My Application</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->

      <div class="profile clearfix">
        <div class="profile_info">
          <span>Welcome, {{ auth_user_data.name | uppercase }}</span>
        </div>
      </div>

      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <!--<h3>General</h3>-->
          <ul class="nav side-menu">
          <!-- https://router.vuejs.org/en/api/router-link.html -->
            <router-link tag="li" to="/dashboard" id="dashboard">
              <a><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </router-link>
            <router-link tag="li" to="/users" id="users">
              <a><i class="fa fa-users"></i> <span>users</span></a>
            </router-link>
          </ul>
        </div>

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>
</template>

<script>
import UserComponent from '../user.vue';
import home from '../home.vue';
import { mapGetters } from 'vuex'

export default {
  components: {
    UserComponent,
    home,
  },
  computed: mapGetters([
    'auth_user_data',
  ]),
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #42b983;
}
aside {
  height: 2100px;
}
.user-panel {
  cursor: pointer;
}
</style>
