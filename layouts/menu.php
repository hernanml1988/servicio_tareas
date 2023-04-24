<nav>

    <?php
        $nombre = $_GET['nombre'];
        $role = $_GET['role'];
        $id = $_GET['id'];
        echo $nombre.'<br>';
        echo $id.'<br>';
        echo $role;
    ?>

    <div class="botones_menu">
       <a href="../vista_inicio.php?nombre=<?php echo $nombre?>&id=<?php echo $id?>&role=<?php echo $role?>" class="a_menu">
            <div class="btns_menu">
                <span>Tareas</span>
            </div>
       </a>
       <a href="" class="a_menu">
            <div class="btns_menu">
                <span>Tareas que pasa</span>
            </div>
       </a>
       <?php
            if($_GET['role'] == 'administrador') {
        ?>
               <a href="../configuracion.php?nombre=<?php echo $nombre?>&id=<?php echo $id?>&role=<?php echo $role?>" class="a_menu">
                        <div class="btns_menu">
                            <span>Configuracion</span>
                        </div>
                </a>
        <?php            
            }
        ?>
       
      
    </div>  
</nav>