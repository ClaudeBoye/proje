<div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table for Employees
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
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th><Center>actions</Center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($employees as $emp): ?>
                      <tr>
                        <td><?= $sum+=1?></td>
                        <td><?=$emp['name']?></td>
                        <td><?=$emp['email']?></td>
                        <td><?=$emp['phone']?></td>
                        <td><?=$emp['address']?></td>
                        <td><?=$emp['gender']?></td>
                          <td>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?=$emp['name']?>">
                              <span class="bi bi-trash"></span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?=$emp['name']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete action</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    You are about to delete this field do you want to proceed <b> <?= $emp['name']?> </b>
                                    <form action="deletedev.php" method="post">
                                      <input type="hidden" value="<?= $emp['id'] ?>" name="id">
                                      <input type="hidden" value="employee" name="table">
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
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th><Center>actions</Center></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>