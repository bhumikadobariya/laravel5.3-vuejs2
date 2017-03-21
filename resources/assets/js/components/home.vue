<style scoped>
  .action-link {
    cursor: pointer;
  }

  .m-b-none {
    margin-bottom: 0;
  }
</style>

<template>
   <div>

      <!-- top tiles -->
      <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
          <div class="count">{{this.$store.state.users.count}}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-clock-o"></i> OAuth Clients</span>
          <div class="count">{{Object(all_clients).length}}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Personal Access Tokens</span>
          <div class="count green">{{Object(all_tokens).length}}</div>
        </div>
      </div>
      <!-- /top tiles -->


      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="dashboard_graph">

            <div class="row x_title">
              <div class="col-md-6">
                <h3>Network Activities <small>Graph title sub-title</small></h3>
              </div>
              <div class="col-md-6">
                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div>
              </div>
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12">
              <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
              <div style="width: 100%;">
                <canvas id="graph" class="demo-placeholder"  style="width:100%; max-height:270px;"></canvas>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
              <div class="x_title">
                <h2>Top Campaign Performance</h2>
                <div class="clearfix"></div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-6">
                <div>
                  <p>Facebook Campaign</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                    </div>
                  </div>
                </div>
                <div>
                  <p>Twitter Campaign</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-6">
                <div>
                  <p>Conventional Media</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                    </div>
                  </div>
                </div>
                <div>
                  <p>Bill boards</p>
                  <div class="">
                    <div class="progress progress_sm" style="width: 76%;">
                      <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>


      <div class="page-title">
        <div class="title_left">
          <h3>Dashboard</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <users></users>
        </div>
        <passport_clients></passport_clients>
        <!-- <passport_authorized_clients></passport_authorized_clients> -->
        <passport_personal_access_tokens></passport_personal_access_tokens>

      </div>

  </div>
</template>

<script>

import users from './usersList.vue'
import passport_clients from './passport/Clients.vue'
import passport_authorized_clients from './passport/AuthorizedClients.vue'
import passport_personal_access_tokens from './passport/PersonalAccessTokens.vue'
import Chart from 'chart.js';
import { mapGetters } from 'vuex'

export default {
  head: {
    title: {
      inner: 'dashboard'
    },
    meta: [
      { name: 'application-name', content: 'My application' },
    ],
  },
  components: {
    users,
    passport_clients,
    passport_authorized_clients,
    passport_personal_access_tokens
  },

  /**
   * Prepare the component (Vue 2.x).
   */
  mounted() {
    new Chart(document.getElementById('graph'), {
        type: 'line',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3]
            }]
        },
    });
  },
  data () {
    return {
      users: {},
      oauthclients: {},
      personalAccessTokens: {},
    }
  },
  computed: mapGetters([
    'auth_user_data',
    'all_users',
    'all_clients',
    'all_tokens',
  ]),
}
</script>
