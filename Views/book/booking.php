<div class="container mt-5">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <div class="card">
        <div class="card-header text-center bg-primary">
          <h3><b>Form Booking</b></h3>
        </div>
        <div class="card-body">
          <form action="index.php?action=form_booking" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="">Username:</label>
              <input type="text" name="username" class="form-control" placeholder="Username...">
            </div>

            <div class="form-group">
              <label for="">Gender:</label>
              <select name="gender" id="dender" class="form-control">
                <option value="Male" name="sex">Male</option>
                <option value="Female" name="sex">Female</option>
              </select>
            </div>

            <div class="form-group">
              <label for="">E-mail:</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="E-mail...">
            </div>

            <?php
            // $id = 1;
            
              // foreach ($data['detail'] as $result) {
            ?>

                <div class="form-group">
                  <label for="">Book Name:</label>
                  <input type="text" name="book" id="book" value="<?php echo $result['title'] ?>" class="form-control" placeholder="Book...">
                </div>

            
          <?php
              // }
            
              ?>

            <div class="form-group">
              <label for="">Start Date:</label>
              <input type="date" name="startdate" class="form-control" placeholder="Start Date...">
            </div>

            <div class="form-group">
              <label for="">End Date:</label>
              <input type="date" name="enddate" class="form-control" placeholder="end Date...">
            </div>

            <a href="index.php?action=view" class="btn btn-warning">Go Back</a>
            <button type="submit" class="btn btn-success float-right">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-3"></div>
  </div>

</div>
<br>