<?php session_start()  ?>
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Admin Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card text-white h-100" style="background-color: black">
              <div class="card-body py-5">Customers registered <b><?=$totalcus?></b></div>
              <a href="users.php">
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
              <div class="card-body py-5">Employees <b><?=$totalemp?></b></div>
              <a href="employee.php">
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Deliveries <b><?=$totaldiv?></b></div>
               <a href="#">
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
              </a>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Fails</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table for Deliveries
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Customer</th>
                        <th>Employee</th>
                        <th>Dev code</th>
                        <th>status</th>
                        <th><Center>actions</Center></th>
                      </tr>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($deliveries as $dev): ?>
                      <tr>
                        <td><?=$dev['customer_id']?></td>
                        <td><?=$dev['emp_id']?></td>
                        <td><?=$dev['div_id']?></td>
                        <td>
                          <?php if($dev['status'] == 1): ?>
                            Delivered 
                          <?php else: ?>
                            Pending 
                          <?php endif; ?>
                        </td>
                          <td>
                              <a href="editdev.php?id=<?=$dev['id']?>"><button class="btn btn-success"><span class="bi bi-gear-fill"></span></button>
                          </td>
                          <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?=$dev['div_id']?>">
                              <span class="bi bi-trash"></span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?=$dev['div_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete action</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    You are about to delete this field do you want to proceed <b> <?= $dev['div_id']. ' ' .$dev['id'] ?> </b>
                                    <form action="deletedev.php" method="post">
                                      <input type="hidden" value="<?= $dev['id'] ?>" name="id">
                                      <input type="hidden" value="deliveries" name="table">
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-danger"> Continue </button>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Customer</th>
                        <th>Employee</th>
                        <th>Dev code</th>
                        <th>status</th>
                        <th><Center>actions</Center></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>