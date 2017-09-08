<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="header">
            <h4 class="title">Students</h4>
           <a href="main.php?id=happy&h=hadd"> <button type="button" rel="tooltip" title="Add" class="btn btn-danger btn-simple btn-xs">
                <i class="pe-7s-add-user"> Add New Course</i>
            </button></a>
          </div>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Image Name</th>
                <th>Image Extension</th>
                <th>Image</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php $hs->displayHappy(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
