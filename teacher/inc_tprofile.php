 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="teacher.php?id=editprofile&q=editprofile">
                                <?php $teacher->dispuser(); ?>
                                <br>
                                    <button type="submit" class="btn btn-info btn-fill pull-left">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
