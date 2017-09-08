<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Upload</h4>
          </div>
          <div class="content">
            <form method="post" action="teacher.php?id=upload" enctype="multipart/form-data">

              Select zip to upload:
              <input type="file" name="fileToUpload" id="fileToUpload">

              <br>
              <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-left">Upload</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Upload</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>Upload ID</th>
                      <th>File Name</th>
                      <th>Date</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php $teacher->showuploads(); ?>

                    </tbody>
                </table>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
