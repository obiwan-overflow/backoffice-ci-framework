
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-12 text-right">
                              <a href="<?php echo base_url('admin/contact'); ?>" class="btn btn-dark">กลับ</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <label for="">ชื่อสกุล</label>
                            <input type="text" class="form-control" value="<?php echo $fullname; ?>">
                          </div>
                          <div class="col-md-12">
                            <label for="">ข้อความ</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"><?php echo $text; ?></textarea>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<script>
  $('#page-contact').addClass('active');
</script>
 
