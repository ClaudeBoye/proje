<div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table for Customers
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
                        <th>Address code</th>
                        <th><Center>actions</Center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($customers as $cust): ?>
                      <tr>
                        <td><?= $sum+=1?></td>
                        <td><?=$cust['user_name']?></td>
                        <td><?=$cust['user_email']?></td>
                        <td><?=$cust['user_phone']?></td>
                        <td><?=$cust['user_address']?></td>
                        <td><?=$cust['adrcode']?></td>
                          <td>
                              <a href="edituser.php?id=<?=$cust['id']?>"><button class="btn btn-success"><span class="bi bi-gear-fill"></span></button>
                          </td>
                          <td>
                            <?php if($_SESSION['prev'] == 'admin'): ?>
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?=$cust['adrcode']?>">
                                <span class="bi bi-trash"></span>
                              </button>

                            <!-- Modal -->
                              <div class="modal fade" id="<?=$cust['adrcode']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Delete action</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      You are about to delete this field do you want to proceed <b> <?= $cust['user_name'] ?> </b>
                                      <form action="deletedev.php" method="post">
                                        <input type="hidden" value="<?= $cust['id'] ?>" name="id">
                                        <input type="hidden" value="customers" name="table">
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-danger"> Continue </button>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php else: ?>
                            <?php endif; ?>
                            <!-- Button trigger modal -->
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
                        <th>Address code</th>
                        <th><Center>actions</Center></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>