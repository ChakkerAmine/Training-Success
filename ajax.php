
<?php
   require "cnx.php";
   $amine='';
   if(isset($_GET['fil'])){
        $amine=$_GET['fil'];
        ?>
    <select class="form-control" name="matiere">
    
    <?php
        $req="SELECT * FROM `modules` WHERE id_fil = '$amine' and id_niv = '{$_GET['niv']}'";
        $sql=mysqli_query($cnx,$req);
        while($row=mysqli_fetch_assoc($sql)){
            ?>
            <option value="<?php echo $row['id_module'];?>"><?php echo $row['nom'];?></option>
            <?php
        }
    ?>
    

    </select>
 <?php
   }elseif(isset($_GET['filts'])){
       $amine=$_GET['filts'];
       ?>

            <select class="form-control" name="student">
            <?php
                $req="SELECT * FROM `training_student` WHERE filliere = '$amine' and niveau = '{$_GET['nivts']}'";
                $sql=mysqli_query($cnx,$req);
                while($row=mysqli_fetch_assoc($sql)){
                    ?>
                    <option value="<?php echo $row['id_student'];?>"><?php echo $row['nom']." ".$row['prenom'];?></option>
                    <?php
                }
            ?>
            </select>
<?php
   }elseif(isset($_GET['filds'])){
    $amine=$_GET['filds'];
    ?>

         <select class="form-control" name="student">
         <?php
             $req="SELECT * FROM `diplome_student` WHERE filliere = '$amine' and niveau = '{$_GET['nivds']}'";
             $sql=mysqli_query($cnx,$req);
             while($row=mysqli_fetch_assoc($sql)){
                 ?>
                 <option value="<?php echo $row['id_student'];?>"><?php echo $row['Nom']." ".$row['Prenom'];?></option>
                 <?php
             }
         ?>
         </select>
<?php
   }
?>   
 