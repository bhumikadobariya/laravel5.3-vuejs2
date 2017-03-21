<template>
  <div>

    <div class="clearfix"></div>
    <router-view></router-view>

  </div>

</template>
<script>

import {ServerTable, ClientTable, Event} from 'vue-tables-2'
import CustomActions from './Actions.vue'
import { mapGetters } from 'vuex'

Vue.component('customActions', CustomActions)

Vue.use(ClientTable, {}, true);


export default {
  mounted () {
  },
}
</script>
