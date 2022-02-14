<?php
    if($_SESSION["rol_id"]==1){
?>
        <ul class="side-menu-list">
        <nav class="side-menu">
        <li class="blue-dirty">
            <a href="..\Home\">
                <span class="glyphicon glyphicon-th"></span>
                <span class="lbl">Inicio</span>
            </a>
        </li>
        <li class="blue-dirty">
            <a href="..\MntUsuario\">
                <span class="glyphicon glyphicon-th"></span>
                <span class="lbl">Mantenimiento Usuario</span>
            </a>
        </li>
        <li class="blue-dirty">
            <a href="..\ConsultarRegistro\">
                <span class="glyphicon glyphicon-th"></span>
                <span class="lbl">Consultar Registros</span>
            </a>
        </li>
    </ul>
</nav>
<?php
    }else{
        ?>
        <ul class="side-menu-list">
        <nav class="side-menu">
        <li class="blue-dirty">
            <a href="..\Home\">
                <span class="glyphicon glyphicon-th"></span>
                <span class="lbl">Inicio</span>
            </a>
        </li>
        <li class="blue-dirty">
            <a href="..\ConsultarRegistro\">
                <span class="glyphicon glyphicon-th"></span>
                <span class="lbl">Consultar Registros</span>
            </a>
        </li>
    </ul>
</nav>
<?php
    }
?>