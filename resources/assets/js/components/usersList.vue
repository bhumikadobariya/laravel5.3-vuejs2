<template>
  <div>

    <div class="clearfix"></div>

      <div id="usersTable">
        <div class="x_panel">
          <div class="x_title">
            <h2>User List</h2>
            &nbsp;&nbsp;<router-link to="/users/addNewUser"><a data-toggle="tooltip" data-placement="top" title="Add New" data-original-title="Add New"><i class="glyphicon glyphicon-plus customPadding"></i></a></router-link>

            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div id="people">
              <div v-if="tableData.length">
                <v-client-table ref="usersData" id="usersData" name="users" :data="tableData" :columns="columns" :options="options"></v-client-table>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>

</template>
<script>

import {ServerTable, ClientTable, Event} from 'vue-tables-2'
import CustomActions from './Actions.vue'
import { mapGetters } from 'vuex'
import _ from 'lodash';
Vue.component('customActions', CustomActions)

Vue.use(ClientTable, {}, true);


export default {

  data () {
    return {
      columns:['id','name', 'email', 'actions'],
      options: {
        ascending : false,
        templates: {
            actions: function(h, rowData) {
              return <CustomActions id={rowData.id} rowData={rowData}></CustomActions>
          }
        },

        sortable: ['id', 'name', 'email'],
        orderBy : {
          ascending : false,
          column: 'name',
        },
        texts: {
          filter: "Search:",
          filterPlaceholder: "",
          limit: "Show entries:",
        },
      }
    }
  },
  mounted () {
  },
  computed : {
    tableData () {
      if (this.$store.getters.all_users.data && (Object(this.$store.getters.all_users.data).length > 0 ? true : false)) {
        return this.$store.getters.all_users.data;
      } else {
        return [];
      }
    }
  },
  methods: {
  },
}
</script>
<style>
.pagination {
  margin-top: 0;
}
.btn.btn-border {
  border: 1px solid;
  margin-right: 2px;
}
.vuetable-pagination-info {
  margin-top: 8px !important;
}
</style>
