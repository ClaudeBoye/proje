<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
    <div class="col-lg-8">
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" value="<?= $curentuser['id'] ?>" name="id"  id="id">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <input type="text" value="<?= $curentuser['name'] ?>" name="username" id="username" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input type="email" value="<?= $curentuser['email'] ?>" name="email" id="email" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
               <input type="text" value="<?= $curentuser['phone'] ?>" name="phone" id="phone" class="form-control" required><p class="text-muted mb-0">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <input type="address" required value="<?= $curentuser['address'] ?>" name="address" id="address" class="form-control">
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
                        <option value="<?= $curentuser['gender'] ?>"><?= $curentuser['gender'] ?></option>
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
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <input type="password" required name="password" id="password" class="form-control">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">confirm password</p>
              </div>
              <div class="col-sm-9">
                <input type="password" required name="cpassword" id="cpassword" class="form-control">
              </div>
            </div>
            <center>
                <div class="row center">
                    <div class="update ml-auto mr-auto mt-5">
                        <input type="submit" value="update" class="btn btn-primary">
                    </div>
                </div>
            </center>
          </div>
        </div>
    </form>
      </div>
    </div>
  </div>
</section>