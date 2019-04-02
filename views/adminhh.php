<?php
$dbhandle =new mysqli('localhost','root','','achraf');
echo $dbhandle->connect_error;
$query ="SELECT ville, sum(nom) FROM livr group by ville ";
$res=$dbhandle->query($query);

    include_once('headerAdmin.php');

    include "../cores/livreurC.php";
    $livreurC= new livreurC();
    $list=$livreurC->triLivreurs();
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

                   


            <!-- /.orders -->
            <!-- To Do and Live Chat -->
         
                          <div class="card-body">  
                        

                <div class="col-lg-6">
                    <div class="card-body">
                                <h4 class="box-title">Ajouter Un Livreur </h4>
                            </div>         
                        <form  method="POST" action="ajoutlivreur.php" >
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">nom</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="nom" required onblur="verifnom(this)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">prenom</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="prenom" required onblur="verifnom(this)">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">Date De naissance</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control" name="date" required>
                                                        </div>
                                                    </div>
                                                </div>

  <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">Debut contrat</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control" name="debutc" required>
                                                        </div>
                                                    </div>
                                                </div>



  <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">Fin contrat</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control" name="finc" required>
                                                        </div>
                                                    </div>
                                                </div>


                                                  <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">disponibilité</label>
                                                        <div class="col-sm-9">
                                                           <select name="dispo" class="bo4 of-hidden size15 m-b-20">
                            <option class="sizefull s-text7 p-l-22 p-r-22" type="text" name="dispo" > occupé</option>
                            <option class="sizefull s-text7 p-l-22 p-r-22" type="text" name="dispo" >non occupé</option>
                            

                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                    <div class="row align-items-center">
                                                        <label class="col-sm-3">code livreur</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="codel" required>
                                                        </div>
                                                    </div>
                                                </div>


                                              
                                                <div class="btn-list text-right">
                                                    <div class="btn-list text-right">
                                                  
                                                    <button type="submit" class="btn btn-primary btn-space m-t-5" name="submit">ajouter</button>
                                                </div>
                                            </form>

               </div>
            <!-- /To Do and Live Chat -->
            <!-- Calender Chart Weather  -->
            

           </div></br></br></br>



            <div class="card">    
                          <div class="card-body">                             
            <div class="clearfix"></div>
            <!-- Orders -->

                            <h4>Livreur</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="table" class="table-responsive table-editable">
                                            <table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
                                                <tbody><tr>
                                                    <th class="text-center">Nom</th>
                                                    <th class="text-center">Prenom</th>
                                                    <th class="text-center">date</th>
                                                    <th class="text-center">debut </th>
                                                    <th class="text-center">finc </th>
                                                    <th class="text-center">dispo</th>
                                                     <th class="text-center">codel</th>
                                                     <th class="text-center">Supprimer</th>
                                                     <th class="text-center">Modifier</th>
                                                 
                                                </tr>


                                                <?php
                                                foreach ($list as $row ) {
                                                    ?>
                                                
                                                <tr>

                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['nom']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['prenom']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['date']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['debutc']; ?></td>
                                                    <td class="pt-3-half" contenteditable="true"><?PHP echo $row['finc']; ?></td>
                                                     <td class="pt-3-half" contenteditable="true"><?PHP echo $row['dispo']; ?></td>
                                                     <td class="pt-3-half" contenteditable="true"><?PHP echo $row['codel']; ?></td>
                                               

                                                    <td><form method="POST" action="supprimerlivreur.php">
                                                        <span ><input  type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
                                                            <input type="hidden" value="<?php echo $row['nom']; ?>" name="nom"></span>
                                                        
                                                    </form>
                                                </td>

                                                    
                                                  <td><a href="modifierlivreur.php?nom=<?php echo $row['nom']; ?>">
                                                        <span ><input  type="submit"  class="btn btn-warning btn-rounded btn-sm my-0" name="Modifier" value="Modifier" >
                                                        </span></a>
                                                        
                                                    
                                                    </td>
                                                       
                                                       
                                                <?php } ?>
                                            
                                            </tbody></table>
                                        </div>
                                    </div>
                                </div>
                            </div>

            
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>

<?php
    include_once('footerAdmin.php');
?>
