<template>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs nav-justified">
            <li v-for="step in steps" :class="{'active':step.active}">
                <a :href="step.link" :aria-controls="step.id" data-toggle="tab">{{ step.title }}</a>
            </li>
        </ul>
        <div class="tab-content">
            <slot></slot>
        </div>
        <!-- /.tab-content -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-flat pull-left">Previous</button>
            <button type="submit" class="btn btn-primary btn-flat pull-right">Next</button>
        </div>
        <!-- /.button-->
    </div>
    <!-- nav-tabs-custom -->
</template>

<script>
  export default {
    data () {
      return {
        steps: [],
        currentStep: 1
      }
    },
    mounted () {
      console.log('Component mounted')
        this.$children.forEach( step => {
          this.steps.push ({
            'id': step.id,
            'link': step.link,
            'title': step.title,
            'active': step.active
          });
        })
    },
    methods: {
      stepChanged: function (step) {
        this.currentStep = step
      }
    }
  }
</script>