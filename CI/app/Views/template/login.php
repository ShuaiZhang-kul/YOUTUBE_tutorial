<div class="container">
    <div class="row">
      <div class="col-12 col-sm-8- offset-sm2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
        <div class="container">
          <h3>Login</h3>
          <hr>
          <form class="" action="/" method="post">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="text" class="form-control" name="email" id="email" >
            </div>
            <div class="form-group">
              <label for="password">password</label>
              <input type="text" class="form-control"name="password" id="password"value="">
            </div>
            <div class="row">
              <div class="col-12 col-sm-4">
                <button type="submit" class="btn btn-primary" name="button">Login</button>
              </div>
              <div class="col-12 col-sm-8 test-right">
                <!-- 前边就是root路径取决于apache:这里是localhost.../wwww -->
                <a href="/RD_test/CI/public/index.php/Users/register">Dont have an account yet?</a>
                <!-- 用URL来调用不同控制器或者是不同控制器的function -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
