<section class="content-header">
  <h1>
    <?= $title ?>
    <small><?= $preview ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= ADMIN_DIR ?>"><i class="fa fa-dashboard"></i> Trang chủ </a></li>
    <li class="active"><?= $title ?></li>
  </ol>
</section>
<section class="content">
  <div class="col-lg-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $title ?></h3>
              <!--<a href="#" onclick="return ListTable.createUrl();" class="btn btn-sm btn-primary pull-right">Tạo người dùng</a> -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
</section>
<?php
Assets::js([
  //Url::consolePath().'js/pages/table-admin.js'
]);
?>