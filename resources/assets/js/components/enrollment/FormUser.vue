<template>
    <form method="post" @submit.prevent="submit" @keydown="form.errors.clear($event.target.user)">
        <div class="form-group has-feedback" :class="{ 'has-error': form.errors.has('user') }">
            <label for="user">User:</label>

            <select class="form-control select2" id="user" style="width: 100%">
                <option v-for="user in users" :value="user.id">{{ user.name }}</option>
            </select>

            <span class="help-block" v-if="form.errors.has('user')" v-text="form.errors.get('user')"></span>
        </div>

        <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="form.errors.any()">
            <i v-if="form.submitting" class="fa fa-refresh fa-spin"></i>Next
        </button>
    </form>
</template>

<script>
import FormMixin from './formMixin.js'
import Form from 'acacha-forms'

export default {
  mixins: [FormMixin],
  data: function () {
    return {
      form: new Form( {user: ''}),
      users: []
    }
  },
  methods: {
    submit () {
      this.form.post('/enrollment/user')
      .then(response => {
        console.log('Enrollment user form submitted OK!')
        this.$bus.$emit('formSubmit')
      })
      .catch(error => {
        console.log('Enrollment user form error submitting:' + error)
      })
    },
    initializeSelect2() {
      var component = this
      $(".select2").select2().on('TODO', function (event) {
        component.form.set('user', userId)
        component.form.errors.clear()
      })
    },
    fetchUsers() {
      axios.get('/users').then(response => {
        this.users = response.data
      })
    }
  },
  mounted() {
    console.log('Component Form User mounted.')
    this.initializeSelect2(),
    this.fetchUsers()
  },
  watch: {
    'form.user': function (user) {
        // TODO API SELECT: SELECIONAR el user amb el user.od
    }
  }
}
</script>