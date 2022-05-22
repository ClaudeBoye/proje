<div class="card-header">
    <h5 class="card-title"> Edit delivery</h5>
    <p class="card-category"> Edit Delivery status and Employee incharge </p>
    </div>
    <div class="card-body">
    <form method="POST" action="" autocomplete="off">
        <input type="hidden" name="id" value="<?= $delivery['id'] ?>">
        <div class="row">
        <div class="col-md-6 pr-1">
            <div class="form-group ">
            <label for="Region" class="form-lable">Status</label><br>
                <select name="stats" class="form-select" aria-label="Default select example" required>
                    <?php if ($delivery['status'] != 1): ?>
                        <option selected value="0">Pending</option>
                        <option value="1">Delivered</option>
                    <?php else: ?>
                        <option selected value="1">Delivered</option>
                        <option value="0">Pending</option>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="col-md-6 pr-1">
            <label for="emplist" class="form-label">Assign Employee</label>
            <input class="form-control" list="datalistOptions" name="emplist" required id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
                <?php foreach($employees as $emp): ?>
                    <option value="<?= $emp['id']?>"><?= $emp['name'] ?></option>
                <?php endforeach; ?>
            </datalist>
        </div>
        <div class="col-md-4 m-3">
            <button class="btn btn-primary">Update</button>
        </div>  
    </div>  
    </form>
</div>