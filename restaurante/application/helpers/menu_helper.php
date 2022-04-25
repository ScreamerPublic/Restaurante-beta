<?php
function menuPrincipal(){
    $CI         =& get_instance();
    $principal  = $CI->hm->cargarMenu('1,2');
    ?>
        <header id="header" class="fixed-top d-flex align-items-cente">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
                <h1 class="logo me-auto me-lg-0"><a href="<?=base_url()?>"><?=cargarDatosEmpresa()['nombre_empresa']?></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <?php
                            $x  = 1;
                            foreach($principal as $rowp){
                                $activar = (($x == 1 )?'active':'');
                                if($rowp['id_tipo_opcion'] == 1):
                                ?>
                                    <li><a class="nav-link scrollto <?=$activar?>" href="<?=(($rowp['direccion_menu'] == '#')?'#':base_url().$rowp['direccion_menu'])?>"><?=$rowp['nombre_menu']?></a></li>
                                <?php
                                endif;
                                if($rowp['id_tipo_opcion'] == 2):
                                ?>
                                    <li class="dropdown">
                                        <a href="#">
                                            <span><?=$rowp['nombre_menu']?></span> <i class="bi bi-chevron-down"></i>
                                        </a>
                                        <ul>
                                            <?php
                                                $secundario = $CI->hm->cargarSubMenu($rowp['id_menu']);
                                                foreach($secundario as $rowS){
                                                    if($rowS['id_tipo_opcion'] == 1):
                                                    ?>
                                                        <li><a href="<?=(($rowS['direccion_sub_menu'] == '#')?'#':base_url().$rowS['direccion_sub_menu'])?>"><?=$rowS['nombre_sub_menu']?></a></li>
                                                    <?php
                                                    endif;
                                                    if($rowS['id_tipo_opcion'] == 2):
                                                        ?>
                                                            <li class="dropdown">
                                                                <a href="#">
                                                                    <span><?=$rowS['nombre_sub_menu']?></span> <i class="bi bi-chevron-right"></i>
                                                                </a>
                                                                <ul>
                                                                    <?php
                                                                        $terciario  = $CI->hm->cargarDescensoSubMenu($rowS['id_sub_menu']);
                                                                        foreach($terciario as $rowT){
                                                                            ?>
                                                                                <li><a href="<?=(($rowT['direccion_descenso_sub_menu'] == '#')?'#':base_url().$rowT['direccion_descenso_sub_menu'])?>"><?=$rowT['nombre_descenso_sub_menu']?></a></li>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                        <?php
                                                    endif;
                                                }
                                            ?>
                                        </ul>
                                    </li>
                                <?php
                                endif;
                                $x++;
                            }
                        ?>
                    </ul>
                </nav><!-- .navbar -->
                <?php
                    $cuaternario  = $CI->hm->cargarMenu('3');
                    foreach($cuaternario as $rowC){
                        ?>
                            <a href="<?=(($rowC['direccion_menu'] == '#')?'#':base_url().$rowC['direccion_menu'])?>" class="book-a-table-btn scrollto d-none d-lg-flex"><?=$rowC['nombre_menu']?></a>
                        <?php 
                    }
                ?>
            </div>
        </header><!-- End Header -->
    <?php
}