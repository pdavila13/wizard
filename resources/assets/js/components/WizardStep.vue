<template>
    <div role="tabpanel" class="tab-pane" :class="{'active': isActive}" :id="id">
        <slot></slot>
    </div>
</template>

<script>
  import voca from 'voca'
  import {store} from './Store.js'

  export default {
    data () {
      return {
        currentStep: store.currentStep
      }
    },
    props: {
      title: {
        type: String,
        require: true
      }
    },
    computed: {
      id: function () {
        return voca.latinise(voca.camelCase(this.title))
      },
      link: function () {
        return '#' + this.id
      },
      isActive: function () {
        return this.currentStep === thid.id
      }
    },
    mounted() {
      console.log('Component mounted')
    }
  }
</script>