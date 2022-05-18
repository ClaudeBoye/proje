<div class="card-header">
    <h5 class="card-title"> Register </h5>
    <p class="card-category"> Add a new Employee </p>
    </div>
    <div class="card-body">
    <form action="" method="post" autocomplete="off">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <input type="text" placeholder="Username" name="username" id="username" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input type="email" placeholder="Example@mail.com" name="email" id="email" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
               <input type="text" placeholder="+237 653488243" name="phone" id="phone" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <input type="address" placeholder="Address:location" required name="address" id="address" class="form-control">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <div class="form-group ">
                    <select name="gender" class="form-select" aria-label="Default select example" required>
                        <option value="">Select Gender</option>
                        <option value="Others">Others</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">password</p>
              </div>
              <div class="col-sm-9">
                <input type="password" placeholder="" name="password" id="password" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Confirm password</p>
              </div>
              <div class="col-sm-9">
                <input type="password" placeholder="" name="confirmpass" id="confirmpass" class="form-control" required>
              </div>
            </div>
        </div>
        <center>
            <div class="row center">
                <div class="update ml-auto mr-auto mt-5">
                    <input type="submit" value="Register" class="btn btn-primary bi bi-plus">
                </div>
            </div>
        </center>
    </form>
    </div>