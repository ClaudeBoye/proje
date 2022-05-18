<div class="card-header">
    <h5 class="card-title"> Register </h5>
    <p class="card-category"> Add a new customer </p>
    </div>
    <div class="card-body">
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
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
                <p class="mb-0">Region</p>
              </div>
              <div class="col-sm-9">
                <select name="region" class="form-select" aria-label="Default select example" required>
                        <option value="">Select Customer region</option>
                        <option value="ADW">Adamawa</option>
                        <option value="CEN">Central</option>
                        <option value="EST">East</option>
                        <option value="FNRT">Far North</option>
                        <option value="LTR">Litoral</option>
                        <option value="NRT">North</option>
                        <option value="NW">Nort West</option>
                        <option value="STH">South</option>
                        <option value="SW">South West</option>
                        <option value="WST">West</option>
                    </select>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">User Profile</p>
              </div>
              <div class="col-sm-9">
               <input type="file" name="file" id="file" class="form-control">
              </div>
            </div>
            <center>
                <div class="row center">
                    <div class="update ml-auto mr-auto mt-5">
                        <input type="submit" value="Register" class="btn btn-primary">
                    </div>
                </div>
            </center>
          </div>
        </div>
    </form>
    </div>