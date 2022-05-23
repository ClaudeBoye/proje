<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="../controls/images/<?= $customer['user_pictures'] ?>" alt="avatar"
              class="rounded img-fluid" style="width: 150px;">
            <h5 class="my-3"><?=$customer['user_name']?></h5>
            <p class="text-muted mb-1">address code: <?=$customer['adrcode']?></p>
            <p class="text-muted mb-4">Actual address: <?=$customer['user_address']?></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" value="<?= $customer['id'] ?>" name="id"  id="id">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <input type="text" value="<?= $customer['user_name'] ?>" name="username" id="username" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input type="email" value="<?= $customer['user_email'] ?>" name="email" id="email" class="form-control" required>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
               <input type="text" value="<?= $customer['user_phone'] ?>" name="phone" id="phone" class="form-control" required><p class="text-muted mb-0">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <input type="address" required value="<?= $customer['user_address'] ?>" name="address" id="address" class="form-control">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Region</p>
              </div>
              <div class="col-sm-9">
                <select name="region" class="form-select" aria-label="Default select example">
                        <option selected value="<?= $customer['adrcode'] ?>"><?= $customer['adrcode'] ?></option>
                    </select>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Desciption</p>
              </div>
              <div class="col-sm-9">
               <textarea <?= $customer['description'] ?> name="description" class="form-control" rows="3"><?= $customer['description'] ?></textarea>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address pictures</p>
              </div>
              <div class="col-sm-9">
               <input type="file" name="image1" value="" id="file1" class="form-control">
               <br>
               <input type="file" name="image2" value="" id="file2" class="form-control">
               <br>
               <input type="file" name="image3" value="" id="file3" class="form-control">
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
  <div class="card-body p-4 text-black">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <p class="lead fw-normal mb-0">Address photos</p>
    </div>
    <div class="row g-2">
      <div class="col mb-2">
        <img src="../controls/images/<?= $customer['userimg1'] ?>"
          alt="image 1" class="w-100 rounded-3">
      </div>
      <div class="col mb-2">
        <img src="../controls/images/<?= $customer['userimg2'] ?>"
          alt="image 1" class="w-100 rounded-3">
      </div>
    </div>
    <div class="row g-2">
      <div class="col">
        <img src="../controls/images/<?= $customer['userimg3'] ?>"
          alt="image 1" class="w-100 rounded-3">
      </div>
    </div>
  </div>
</section>