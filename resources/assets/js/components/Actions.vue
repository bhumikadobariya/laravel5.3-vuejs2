<template>
  <div>
    <div class="btn-group-vertical" role="group" aria-label="Actions" v-cloak>
      <span class="table-actions">
        <a @click="editPassword('editPassword', rowData)" style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Change Password" data-original-title="Change Password"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
        <a @click="editData('editData', rowData)" style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><i class="fa fa-gear"></i></a>&nbsp;&nbsp;
        <a @click="deleteData('deleteData', rowData)" style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><i class="fa fa-remove"></i></a>
      </span>
    </div>

    <edit-user :show.sync="showModal" @close="showModal = false"></edit-user>
    <edit-password :show.sync="showPasswordModal" @close="showPasswordModal = false"></edit-password>

  </div>
</template>

<script>
import editUser from './editUser.vue'
import editPassword from './editPassword.vue'

  export default {
    components : {
      editUser,
      editPassword,
    },
    props: {
      rowData: {
        type: Object,
        required: true
      },
      rowIndex: {
        type: Number
      }
    },
    data () {
      return {
        showModal : false,
        showPasswordModal : false,
      }
    },
    methods: {
      editPassword (action, data) {
        console.log('data', data);
        this.$http.get('/api/user/' + data.id +'/get_user_editData')
          .then( (resp) => {
            this.$store.commit('FETCH_USER_FOR_EDIT', resp.body.data);
            this.showPasswordModal = true;
        })
      },
      editData (action, data) {
        console.log('data', data);
        this.$http.get('/api/user/' + data.id +'/get_user_editData')
          .then( (resp) => {
            this.$store.commit('FETCH_USER_FOR_EDIT', resp.body.data);
            this.showModal = true;
        })
      },
      deleteData: function(action, rowData) {
        swal({
            title: 'Confirmation',
            text: 'Are you sure you want to delete this data?',
            type: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            showLoaderOnConfirm: true
        }).then(() => {
            swal.disableButtons();
            var self = this;
            let formData = new FormData();

            let url = '/api/users' + '/' + rowData.id;
            this.$http.delete(url, rowData)
              .then(response => {
                self.$store.commit('DELETE_USER', rowData)
                swal(
                    'Success',
                    'Your data has been deleted.',
                    'success'
                );
              })
              .catch(errors => {
                swal(
                        'Error',
                        'Failed to delete your data.',
                        'error'
                );
              });
        })
      }
    },
  }
</script>
