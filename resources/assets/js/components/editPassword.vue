<template>
  <div>
    <div class="modal-mask" v-show="show" transition="modal" @click="close">
      <div class="modal-dialog" @click.stop>
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" @click="close()" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
              Edit User's Password
            </h4>
          </div>

          <div class="modal-body">
            <!-- Form Errors -->
            <div class="alert alert-danger" v-if="errors.length > 0">
              <p><strong>Whoops!</strong> Something went wrong!</p>
              <br/>
              <div v-if="errors">

                  {{ errors }}

              </div>
            </div>

            <form data-parsley-validate class="form-horizontal form-label-left" role="form">
              <div class="form-group">
                <label class="col-md-3 control-label">New Password <span class="required">*</span></label>
                <div class="col-md-7">
                  <input id="password" type="password" class="form-control" name="password" required="required"
                                                v-model="userPassword.password"
                                               />

                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Confirmation Password <span class="required">*</span></label>
                <div class="col-md-7">
                  <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required="required"
                                                v-model="userPassword.password_confirmation"
                                               />

                </div>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" @click="close()">Cancel</button>
            <button type="button" class="btn btn-success" @click= "submit()">
                Update Password
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
  props: ['show'],
  data () {
    return {
      showPasswordModal: false,
      errorsPasswordForm: {},
      userPassword: {
        password:'',
        password_confirmation:''
      }
    }
  },
  computed: mapGetters([
    'edit_user_data',
    'errors'
  ]),
  methods : {
    close: function () {
      this.$store.commit('ERRORS', {})
      this.$emit('close', this.showPasswordModal)
    },
    submit() {
      this.$http.post('/api/user/' + this.edit_user_data.id +'/updatePassword', this.userPassword)
        .then( (response) => {
          this.$store.commit('EDIT_USER', response.body)
          this.close();
        })
        .catch(errors => {
          if (typeof errors.body === 'object') {
            this.$store.commit('ERRORS', errors.body.errors)
          } else {
            this.$store.commit('ERRORS', {})
        }
      });
    },
  },
  mounted () {
    document.addEventListener("keydown", (e) => {
      if (this.show && e.keyCode == 27) {
        this.close();
      }
    });
  },
}
</script>
<style>
* {
    box-sizing: border-box;
}

.modal-mask {
    position: fixed;
    z-index: 9998;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .5);
    transition: opacity .3s ease;
}
.modal-container {
    position: relative;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    outline: 0;

    // width: 300px;
    // margin: 40px auto 0;
    // padding: 20px 30px;
    background-color: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
    transition: all .3s ease;
    // font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
}

.modal-body {
    margin: 20px 0;
    position: relative;
    padding: 15px;
}

.modal-enter, .modal-leave {
    opacity: 0;
}
.modal-enter .modal-container,
.modal-leave .modal-container {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
</style>
