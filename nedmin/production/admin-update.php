<?php 

include 'header.php';

include '../netting/baglan.php';


$kullanicisor=$db->prepare("SELECT * FROM adminuser where admin_id=:id");
$kullanicisor->execute(array(
  'id' => $_GET['admin_id']
  ));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kullanıcı Ayarını Güncelle <small>,

                      <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


                    </small></h2>



                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    




                    <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  id="first-name" required="required" name="admin_name" value="<?php echo $kullanicicek['admin_name'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı E-mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="admin_email"  disabled=""  value="<?php echo $kullanicicek['admin_email'] ?>"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <?php 

                      $zaman=explode(" ", $kullanicicek['admin_time']);


                       ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Tarih <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="first-name" required="required" name="admin_time" disabled=""  value="<?php echo $zaman[0]; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Saat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="time" id="first-name" required="required" name="admin_time" disabled=""  value="<?php echo $zaman[1]; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Telefon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  id="first-name" required="required" name="admin_phone" value="<?php echo $kullanicicek['admin_phone'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo<br><span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <?php 
                            if (strlen($kullanicicek['admin_photo'])>0) {?>

                            <img width="200"  src="../../<?php echo $kullanicicek['admin_photo']; ?>">

                            <?php } else {?>


                            <img width="200"  src="../../dimg/no-logo.png">


                            <?php } ?>

                            
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="first-name"  name="admin_photo"  class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <input type="hidden" name="eski_yol" value="<?php echo $kullanicicek['admin_photo']; ?>">

                     



                      





                      <input type="hidden" name="admin_id" value="<?php echo $kullanicicek['admin_id'] ?>">
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="right">
                          <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            

              
          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>