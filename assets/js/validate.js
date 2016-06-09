// LOGIN
$(document).ready(function() {
  $("#loginv").validate({
    rules: {
      username: {
        required: true,
        minlength: 5
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      username :{
        required: "Username atau Email harus diisi",
        minlength: "Minimal username harus 5 karakter"
      },
      password: {
        required: "Password harus diisi",
        minlength: "Minimal password harus 5 karakter"
      }
    },
    errorElement: 'span',
    errorLabelContainer: '.error'
  });
});
// REGISTER
$(document).ready(function() {
  $("#regisv").validate({
    rules: {
      nama: {
        required: true,
        minlength: 10
      },
      email: {
        required: true,
        email: true,
        remote: {
          url: "<?=base_url()?>/register/validateEmailExist",
          type: "post",
          data: {
            email: function() {
              return $("#email").val();
            }
          }
        }
      },
      username: {
        required: true,
        minlength: 5,
        remote: {
          url: "<?=base_url()?>/register/validateUsernameExist",
          type: "post",
          data: {
            username: function() {
              return $("#username").val();
            }
          }
        }
      },
      password: {
        required: true,
        minlength: 5
      },
      image: {
        required: true
      }
    },
    messages: {
      nama: {
        required: "Nama harus diisi",
        minlength: "Minimal nama harus 10 karakter"
      },
      email: {
        required: "Email harus diisi",
        email: "Email harus diisi dalam format alamat email",
        remote: "Email telah digunakan"
      },
      username: {
        required: "Username harus diisi",
        minlength: "Minimal username harus 5 karakter",
        remote: "Username telah digunakan"
      },
      password: {
        required: "Password harus diisi",
        minlength: "Minimal password harus 5 karakter"
      },
      image: {
        required: "Foto harus diisi"
      }
    },
    errorElement: 'span',
    errorLabelContainer: '.error'
  });
});
