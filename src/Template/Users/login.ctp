<style type="text/css">
  @CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
    color: #333;
}

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  outline: none;
}

    .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

body {
  background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
  margin-top: 60px;
}

form[role=login] {
  color: #5d5d5d;
  background: #f2f2f2;
  padding: 26px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
}
  form[role=login] img {
    display: block;
    margin: 0 auto;
    margin-bottom: 35px;
  }
  form[role=login] input,
  form[role=login] button {
    font-size: 18px;
    margin: 16px 0;
  }
  form[role=login] > div {
    text-align: center;
  }

.form-links {
  text-align: center;
  margin-top: 1em;
  margin-bottom: 50px;
}
  .form-links a {
    color: #fff;
  }

</style>

<div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <?= $this->Flash->render() ?>
      <section class="login-form">
        <?= $this->Form->create() ?>
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <?= $this->Form->control('email', ['label' => false, 'required' => true, 'type' => 'email',  'placeholder' => 'Email', 'class' => 'form-control input-lg']) ?>
          <?= $this->Form->control('password', ['label' => false,  'required' => true, 'type' => 'password',  'placeholder' => 'Password', 'class' => 'form-control input-lg']) ?>
          <div class="pwstrength_viewport_progress"></div>
          <?= $this->Form->button('Sign In', ['label' => false, 'type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block']) ?>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>

        <?= $this->Form->end() ?>

        <div class="form-links">
          <a href="#">www.website.com</a>
        </div>
      </section>
      </div>

      <div class="col-md-4"></div>


  </div>

  <p>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank"><small>HTML</small><sup>5</sup></a>
    <br>
    <br>

  </p>


</div>