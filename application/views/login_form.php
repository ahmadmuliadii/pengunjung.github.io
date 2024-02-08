<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../aassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <title>Login</title>

    
  </head>

  <body>

    <section class="form-01-main">
      <div class="form-cover">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-sub-main">
              <div class="_main_head_as">
                <a href="#">
                  <img src="../assets/images/vector2.png">
                </a>
              </div>

              <?php if($this->session->flashdata('message_login_error')): ?>
		          	<div class="invalid-feedback">
					        <?= $this->session->flashdata('message_login_error') ?>
			          </div>
		          <?php endif ?>

              <form action="" method="post" style="max-width: 600px;">
              <div class="form-group">
             
			        	<input type="text" name="username" class="form-control _ge_de_ol" class="<?= form_error('username') ? 'invalid' : '' ?>"
				      	placeholder="Your username or email" value="<?= set_value('username') ?>" required />
			        	<div class="invalid-feedback">
				    	  <?= form_error('username') ?>
				        </div>
              </div>

              <div class="form-group">                                              
              
			        	<input type="password" name="password" class="form-control" class="<?= form_error('password') ? 'invalid' : '' ?>"
				      	placeholder="Enter your password" value="<?= set_value('password') ?>" required />
			        	<div class="invalid-feedback">
				      	<?= form_error('password') ?>
			        	</div>
              </div>

              <div class="form-group">
               <div class="btn_uy">
                  <div>
                    
				             <input type="submit" class="button button-primary" value="Login" >
                     
                  
			            </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    
  </body>
</html>


