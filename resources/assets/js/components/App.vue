<template>
  <div class="container body">
    <div class="main_container">
      <navbar></navbar>
      <sidebar></sidebar>
      <div class="right_col" role="main">
        <!-- https://router.vuejs.org/en/api/router-view.html -->
        <router-view></router-view>
      </div>
      <Footers></Footers>
    </div>
  </div>
</template>


<script>
import Navbar from './layouts/Navbar.vue'
import Sidebar from './layouts/Sidebar.vue'
import Footers from './layouts/Footers.vue'



export default {
  components: {
    // https://vuejs.org/v2/guide/components.html
    Navbar,
    Sidebar,
    Footers
  },
  // for the vue Instance-Lifecycle-Hooks 'https://vuejs.org/v2/guide/instance.html#Lifecycle-Diagram'
  data () {
    return {
    //Each Vue instance proxies all the properties found in its data object
    //If you attach a new property to the instance after it has been created, it will not trigger any view updates.
    // https://vuejs.org/v2/api/#data
    }
  },
  props : {
    // A list/hash of attributes that are exposed to accept data from the parent component.
    // It has a simple Array-based syntax and an alternative Object-based syntax that allows advanced configurations such as
    // type checking, custom validation and default values.
  },
  // propsData : {
    // Restriction: only respected in instance creation via new.
    // https://vuejs.org/v2/api/#propsData
  // },
  computed : {
    // https://vuejs.org/v2/api/#computed
  },
  methods : {
    // https://vuejs.org/v2/api/#methods
  },
  events: {
    //https://vuejs.org/v2/guide/events.html
  },
  watch : {
    // https://vuejs.org/v2/api/#watch
  },
  // https://vuejs.org/v2/api/#Options-Lifecycle-Hooks
  beforeCreate () {
    // Called synchronously after the instance has just been initialized, before data observation and event/watcher setup.
  },
  created () {
    // Called synchronously after the instance is created.
    // At this stage, the instance has finished processing the options which means the following have been set up: data observation,
    // computed properties, methods, watch/event callbacks.
    // However, the mounting phase has not been started, and the $el property will not be available yet.
  },
  beforeMount () {
    // Called right before the mounting begins: the render function is about to be called for the first time.
    // This hook is not called during server-side rendering.
  },
  mounted () {
    // Called after the instance has just been mounted where el is replaced by the newly created vm.$el.
    // If the root instance is mounted to an in-document element, vm.$el will also be in-document when mounted is called
    // This hook is not called during server-side rendering.
  },
  beforeUpdate () {
    // Called when the data changes, before the virtual DOM is re-rendered and patched.

    // You can perform further state changes in this hook and they will not trigger additional re-renders.

    // This hook is not called during server-side rendering.
  },
  updated () {
    // Called after a data change causes the virtual DOM to be re-rendered and patched.
  },
  activated () {
    // Called when a kept-alive component is activated.

    // This hook is not called during server-side rendering.
  },
  deactivated () {
    // Called when a kept-alive component is deactivated.

    // This hook is not called during server-side rendering.
  },
  beforeDestroy () {
    // Called right before a Vue instance is destroyed. At this stage the instance is still fully functional.

    // This hook is not called during server-side rendering.
  },
  destroyed () {
    // Called after a Vue instance has been destroyed. When this hook is called, all directives of the Vue instance have been unbound,
    // all event listeners have been removed, and all child Vue instances have also been destroyed.

    // This hook is not called during server-side rendering.
  },
}
</script>
