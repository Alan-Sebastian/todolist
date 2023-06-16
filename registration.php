<?php
include('./db_connect.php');
?>
<div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>    
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>  
              <div class="form-group">
                <label for="type">type</label>
                <input
                  type="number"
                  class="form-control"
                  id="type"
                  name="type"
                />
              </div>    
              <div class="form-group">
                <label for="id">id</label>
                <input
                  type="number"
                  class="form-control"
                  id="id"
                  name="id"
                />
              </div>                             
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          ?>