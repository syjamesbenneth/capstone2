<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){      
      global $conn;//refers to $conn outside of my function
      ?>
      <div class="container login-container">
            <div style="margin:20px 0 25px 0;">
                  <div class="jumbotron text-center bg-info">
                        <h4>Register</h4>
                  </div>
                  <form action=""method="POST">
                        <div class="row">
                              <div class="col-sm-6">
                                    <div class="form-group">
                                          <label for="firstname">
                                                First Name:
                                          </label>
                                          <input type="text"class="form-control"id="firstname" name="firstname" placeholder="Enter first name">
                                          <span class="validation"></span>
                                    </div>
                                    <div class="form-group">
                                          <label for="lastname">
                                                Last Name:
                                          </label>
                                          <input type="text"class="form-control"id="lastname" name="lastname" placeholder="Enter last name">
                                          <span class="validation"></span>
                                    </div>
                                    <div class="form-group">
                                          <label for="email">
                                                Email:
                                          </label>
                                          <input type="text"class="form-control"id="email" name="email" placeholder="Enter email">
                                          <span class="validation"></span>
                                    </div>
                                    <div class="form-group">
                                          <label for="address">
                                                Address:
                                          </label>
                                          <input type="text"class="form-control"id="address" name="address" placeholder="Enter home address.">
                                          <span class="validation"></span>
                                    </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="form-group">
                                          <label for="username">
                                                Username:
                                          </label>
                                          <input type="text"class="form-control"id="username" name="username" placeholder="Enter username">
                                          <span class="validation"></span>
                                    </div>
                                    <div class="form-group">
                                          <label for="password">
                                                Password:
                                          </label>
                                          <input type="password"class="form-control"id="password" name="password" placeholder="Enter password">
                                          <span class="validation"></span>
                                    </div>
                                    <div class="form-group">
                                          <label for="confirmpw">
                                                Confirm Password:
                                          </label>
                                          <input type="password"class="form-control"id="confirmpw" name="confirmpw" placeholder="Confirm password">
                                          <span class="validation"></span>
                                    </div>                                    
                              </div>                                                            
                        </div>
                  </form>
                  <div class="d-block text-center py-4">
                        <a href="login.php"class="btn btn-info">Login</a>
                        <button type="button" class="btn btn-info" id="add_user">Register</button>
                  </div>
            </div>
      </div>
 <?php } 
 function getTitle(){
      echo "Register";
 }?>