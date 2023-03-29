 <?php include "header.php" ?>
 <?php include "sidebar.php" ?>

<!--index göbek -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Site Genel Ayarları</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="ayarlar.php">Site Genel Ayarlarınızı burdan yapabilirsiniz.</a><br>
                                    </li>
                                </ol>
                            </nav>      
                        </div>
                        </div>
                        </div>
                        </div>


                       <!-- ============================================================== -->
                    <!--  <br> <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Telefon Numarası</h4>
                                
                                    <form action="nedmin/islem.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                               
                            </div>
                        </div>
                    </div>
                  
  ============================================================== -->
                  
  <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                    
                    <?php if($_GET["durum"] === "ok"){ echo "islem basarili";}  ?>
                                
                    <form action="islem.php" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Telefon Numarası</h4>
                              
                                <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon'];?>" aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="nametext" name="ayar_logo" value="11111" aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                              
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site Başlığı</h4>
                                
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_title" value="<?php echo $ayarcek['ayar_title'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Site Açıklaması</h4>
                                
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_description" value="<?php echo $ayarcek['ayar_description'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Keywords</h4>
                                
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Facebook</h4>
                                
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Twitter</h4>
                                
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Instagram</h4>
                                
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mail</h4>
                                
                                  
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">LinkedIn</h4>
                                
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_linedin" value="<?php echo $ayarcek['ayar_linedin'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Adres</h4>
                                
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                               
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Footer</h4>
                                
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer'];?>"    aria-describedby="name"
                                            placeholder="Name">
                                        
                                    </div>
                               
                                
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                               
                                
                                    
                                    <div class="form-group">
                                        <input type="submit" class="form-control"  name="kaydet" value="kaydet">
                                        
                                    </div>
                               
                               
                            </div>
                        </div>
                    </div>

                </form>
                    </div>
                    </div>


                    
                   
                                          
               
               
                    





                    
               
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
            <?php include "footer.php" ?>