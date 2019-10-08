<!DOCTYPE html>
<html>
<?php $this->load->view("include/head")?>
<?php $this->load->view("category_list/page_style")?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view("include/header")?>

<?php $this->load->view("include/siderbar")?>


<div class="content-wrapper">
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Öğretmenler</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Öğretmen Adı</th>
                  <th>Ders</th>
                  <th>Durum</th>
                  
                </tr>
                </thead>
              <tbody>
              <?php 
              
            
             
             
              
              foreach($ogretmenler as $ogretmenler ){?>
                <tr>
               
                  <td><?php echo $ogretmenler->Ogretmen_isim?></td>
                  <td><?php echo $ogretmenler->Ders_Adi?></td>
                 
                  <td><input type="checkbox" 
                    data-on="Aktif"
                    data-off="Pasif"
                  data-toggle="toggle"
                  name="durum"
                  id="<?php echo $ogretmenler->ID?>"
                  <?php echo($ogretmenler->Durum == 1) ? " checked" : " ";?> >
                  </td>
                  
                </tr>
                <?php }?>
             </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


        
        </div>
        <div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url("welcome/save")?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık Ekle</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Başlık Ekle">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="ekle" class="btn btn-primary">Ekle</button>
              </div>
            </form>
          </div>
</div>
</div>
</section>
</div>
<?php $this->load->view("include/footer")?>
<?php $this->load->view("category_list/page_script")?>