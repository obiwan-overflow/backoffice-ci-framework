
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
                          <div class="col-md-12">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th width="5%" class="text-center">#</th>
                                  <th>ชื่อ</th>
                                  <th>วันที่</th>
                                  <th width="25%"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php  
                                  $i = 1;
                                  foreach ($lists as $key => $value) {
                                ?>
                                <tr>
                                  <td class="text-center"><?php echo $i++; ?></td>
                                  <td><?php echo $value->fullname; ?></td>
                                  <td><?php echo $value->dateadd; ?></td>
                                  <td class="text-center">
                                    <a href="<?php echo base_url('admin/contact/view/'.$value->id); ?>" class="btn btn-info"><i class="far fa-eye"></i> รายละเอียด</a>
                                    <a href="<?php echo base_url('admin/contact/del/'.$value->id); ?>" class="btn btn-danger btn-del"><i class="far fa-trash-alt"></i> ลบ</a>
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
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

  $('.btn-del').click(function (e) {
    if(confirm('Do you want to delete ?')==true){
      window.location = $(this).attr('href');
    }else{
      e.preventDefault();
    }
  });
</script>
 
