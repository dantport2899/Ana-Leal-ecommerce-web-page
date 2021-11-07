<?php
//cargar la sesion
session_start();

 ?>
 
<html>
<head>
        <meta charset="utf-8">
        <title>Ana Leal - Modificar Prenda</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        
        
    </head>

    <body>
        <!-- Insertar navbar -->
        <?php
        include '../plantillas/navbar-administradores.php'
        ?>

        <!-- Consulta bd -->
        <?php
            $idtabla = $_POST['id'];
            require("../fun/connect_db.php");
            $sqlprenda="SELECT * FROM prendas where idprenda=$idtabla";
            $resultprenda=mysqli_query($conexion,$sqlprenda);

            while ($fila=mysqli_fetch_array($resultprenda)) {
                        $idprenda=$fila['idprenda'];
                        $nombre=$fila['nom_prenda'];
                        $idtalla=$fila['idtalla'];
                        $precio=$fila['precio'];
                        $iddepartamento=$fila['iddepartamento'];
                        $color=$fila['color'];
                        $idmaterial=$fila['idmaterial'];
                        $idestilo=$fila['idestilo'];
                        $img_nombre=$fila['img_nombre'];
                        $imagen=$fila['img_archivo'];
                        $descripcion=$fila['descripcion'];
                        $existencias=$fila['existencias'];
                        $iddescuento=$fila['iddescuento'];
                        
                        
            }                               
        ?>

        <!-- Consulta bd -->


         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Modificar <?php echo $nombre ?></h2>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                                 <img src="<?php echo $imagen ?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        
                        <div class="about-text">
                            <form action="../fun/actualizarprenda.php" method="POST" enctype="multipart/form-data" >
                                <p>Nombre</p>
                                <div class="control-group">
                                        <input type="text" class="form-control" id="name" value="<?php echo $nombre ?>" name="name" placeholder="Ingresa el nombre de la prenda" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Descripcion</p>
                                <div class="control-group">
                                        <input type="text" class="form-control" id="name" value="<?php echo $descripcion ?>" name="description" placeholder="Ingresa una breve descripcion" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Imagen</p>
                                
                                <p>Departamento</p>
                                <div class="control-group">
                                    <select name="department" id="">
                                    <?php
                                        require("../fun/connect_db.php");
                                        $sql="SELECT * FROM departamento";
                                        $result=mysqli_query($conexion,$sql);

                                        while ($opciones=mysqli_fetch_array($result)) {
                                            $id=$opciones['iddepartamento'];
                                            $nombre=$opciones['nom_departamento'];
                                        
                                            if($iddepartamento==$id)
                                            {

                                    ?>
                                            <option value="<?php echo $id ?>" selected><?php echo $nombre ?></option>

                                    <?php }else{ ?>
                                            
                                            <option value="<?php echo $id ?>"><?php echo $nombre ?></option>

                                    <?php }} ?>
                                        </select>
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Talla</p>
                                <div class="control-group">
                                       
                                    <select name="talla" id="">
                                                    <?php
                                                        require("../fun/connect_db.php");
                                                        $sql5="SELECT * FROM talla";
                                                        $result5=mysqli_query($conexion,$sql5);

                                                        while ($opciones5=mysqli_fetch_array($result5)) {
                                                            $id=$opciones5['idtalla'];
                                                            $nombre=$opciones5['nom_talla'];

                                                            if($idtalla==$id)
                                                            {

                                                        ?>
                                                        <option value="<?php echo $id ?>" selected><?php echo $nombre ?></option>

                                                        <?php }else{ ?>
                                            
                                                            <option value="<?php echo $id ?>"><?php echo $nombre ?></option>

                                                        <?php }} ?>
                                        </select>
                                       <p class="help-block text-danger"></p>
                                </div>
                                <p>Color</p>
                                <div class="control-group">
                                        <input type="text" class="form-control" id="name" value="<?php echo $color ?>" name="color" placeholder="Ingresa el color de la prenda" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Estilo</p>
                                <div class="control-group">
                                        <select name="style" id="">
                                            <?php
                                                require("../fun/connect_db.php");
                                                $sql2="SELECT * FROM estilo";
                                                $result2=mysqli_query($conexion,$sql2);

                                                while ($opciones2=mysqli_fetch_array($result2)) {
                                                    $id=$opciones2['idestilo'];
                                                    $nombre=$opciones2['nom_estilo'];
                                                    
                                                if($idestilo==$id)
                                                {
        
                                            ?>
                                                    <option value="<?php echo $id ?>" selected><?php echo $nombre ?></option>
        
                                            <?php }else{ ?>
                                                    
                                                    <option value="<?php echo $id ?>"><?php echo $nombre ?></option>
        
                                            <?php }} ?>
                                        </select>
                                            
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Material</p>
                                <div class="control-group">
                                    
                                    <select name="material" id="">
                                                <?php
                                                    require("../fun/connect_db.php");
                                                    $sql3="SELECT * FROM material";
                                                    $result3=mysqli_query($conexion,$sql3);

                                                    while ($opciones3=mysqli_fetch_array($result3)) {
                                                        $id=$opciones3['idmaterial'];
                                                        $nombre=$opciones3['nom_material'];
                                                        
                                                    if($idmaterial==$id)
                                                    {
            
                                                ?>
                                                        <option value="<?php echo $id ?>" selected><?php echo $nombre ?></option>
            
                                                <?php }else{ ?>
                                                        
                                                        <option value="<?php echo $id ?>"><?php echo $nombre ?></option>
            
                                                <?php }} ?>
                                    </select>

                                    <p class="help-block text-danger"></p>
                                </div>
                                <p>Descuento</p>
                                <div class="control-group">
                                    
                                    <select name="desc" id="">
                                                <?php
                                                    require("../fun/connect_db.php");
                                                    $sql4="SELECT * FROM descuentos";
                                                    $result4=mysqli_query($conexion,$sql4);

                                                    while ($opciones4=mysqli_fetch_array($result4)) {
                                                        $id=$opciones4['iddescuento'];
                                                        $nombre=$opciones4['nom_descuento'];
                                                        
                                                    if($iddescuento==$id)
                                                    {
            
                                                ?>
                                                        <option value="<?php echo $id ?>" selected><?php echo $nombre ?></option>
            
                                                <?php }else{ ?>
                                                        
                                                        <option value="<?php echo $id ?>"><?php echo $nombre ?></option>
            
                                                <?php }} ?>
                                    </select>

                                    <p class="help-block text-danger"></p>
                                </div>


                                <p>Existencias</p>
                                <div class="control-group">
                                        <input type="number" class="form-control" id="name" value="<?php echo $existencias ?>" name="exist" placeholder="Ingresa las existencias" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>
                                <p>Precio</p>
                                <div class="control-group">
                                        <input type="number" class="form-control" id="name" value="<?php echo $precio ?>" name="price" placeholder="Ingresa el precio" required="required" data-validation-required-message="Por favor ingresa tu Nombre" />
                                        <p class="help-block text-danger"></p>
                                </div>                                



                                
                                <div class="about-text">
                            
                                <input type="hidden" name="id" value="<?php echo $idprenda ?>">

                                <a class="btn" href=""><input class="btn" id="sendMessageButton" type="submit" value="Modificar" ></a>
                                <a class="btn" id="sendMessageButton" href="inventario.php">Cancelar</a>

                                </div>

                                
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        

        <!-- Insertar footer -->
        <?php
        include '../plantillas/footer.php'
        ?>
        <!-- Insertar footer -->

    </body>

</html>