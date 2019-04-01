<?php
$dbhandle =new mysqli('localhost','root','','achraf');
echo $dbhandle->connect_error;
$query ="SELECT ville, sum(nom) FROM livr group by ville ";
$res=$dbhandle->query($query);

    include_once('headerAdmin.php');
    include "../cores/livraisonC.php";
    $livraisonC= new livraisonC();
    $list=$livraisonC->afficherLivraisons();
?>
    <!-- /#header -->
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7s-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">$<span class="count">23569</span></div>
                                        <div class="stat-heading">Revenue</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7s-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">3435</span></div>
                                        <div class="stat-heading">Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           
            <!-- /Widgets -->
            <!--  Traffic  -->
            
            <!--  /Traffic -->

                    <div class="card">    
                          <div class="card-body">                             
            <div class="clearfix"></div>
            <!-- Orders -->

                            <h4>Livraison</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="table" class="table-responsive table-editable">
                                            <table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
                                                <tbody><tr>
                                                    <th class="text-center">Nom</th>
                                                    <th class="text-center">Prenom</th>
                                                    <th class="text-center">adresse</th>
                                                    <th class="text-center">region</th>
                                                    <th class="text-center">ville</th>
                                                    <th class="text-center">codepostal</th>
                                                     <th class="text-center">telef</th>
                                                    <th class="text-center">email</th>
                                                    <th class="text-center">password</th>
                                                     <th class="text-center">Modifier</th>
                                                    <th class="text-center">Supprimer</th>
                                                    <th class="text-center">Tri</th>
                                                </tr>


                                                <?php
                                                foreach ($list as $row ) {
                                                    ?>
                                                
                                                <tr>

                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['nom']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['prenom']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['adresse']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['region']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['ville']; ?></td>
                                                     <td class="pt-3-half" contenteditable="true"><?PHP echo $row['codepostal']; ?></td>
                                                     <td class="pt-3-half" contenteditable="true"><?PHP echo $row['telef']; ?></td>
                                                     <td class="pt-3-half" contenteditable="true"><?PHP echo $row['email']; ?></td>
                                                     <td class="pt-3-half" contenteditable="true"><?PHP echo $row['password']; ?></td>

                                                    <td><form method="POST" action="supprimerlivraison1.php">
                                                        <span ><input  type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
                                                            <input type="hidden" value="<?php echo $row['nom']; ?>" name="nom"></span>
                                                        
                                                    </form>
                                                </td>

                                                    <td><a href="modifierlivraison.php?nom=<?php echo $row['nom']; ?>">
                                                        <span ><input  type="submit"  class="btn btn-warning btn-rounded btn-sm my-0" name="Modifier" value="Modifier" >
                                                        </span></a>
                                                        
                                                    
                                                    </td>
                                                       
                                                        <td><form method="POST" action="adminliv.php">
                                                        <span ><input  type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="tri" value="tri">
                                                            <input type="hidden" value="<?php echo $row['nom']; ?>" name="nom"></span>

                                                        
                                                    </form>
                                                </td>
                                                <?php } ?>
                                            
                                            </tbody></table>
                                        </div>
                                    </div>
                                </div>
                            </div>



            <!-- /.orders -->
            <!-- To Do and Live Chat -->
           
                <div class="row">
               
                        

                <div class="col-lg-6">
                    <div class="card-body">
                                <h4 class="box-title">Notifier votre client </h4>
                            </div>         
                        <form  method="POST" action="mailinghakeka.php" >
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">To</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="to">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">Subject</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="sujet">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row ">
                                                        <label class="col-sm-3">Message</label>
                                                        <div class="col-sm-9">
                                                            <textarea rows="10" class="form-control" name="texte"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row ">
                                                        <label class="col-sm-3">Attach</label>
                                                        <div class="col-sm-9">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="">
                                                                <label class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="btn-list text-right">
                                                    <div class="btn-list text-right">
                                                    <button type="button" class="btn btn-danger btn-space m-t-5">Cancel</button>
                                                    <button type="submit" class="btn btn-primary btn-space m-t-5" name="submit">Submit</button>
                                                </div>
                                            </form>

               </div>
            <!-- /To Do and Live Chat -->
            <!-- Calender Chart Weather  -->
            

           </div>
            
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
<?php
    include_once('footerAdmin.php');
?>
