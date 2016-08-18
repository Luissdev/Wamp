<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Mobkii</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<link rel="stylesheet" href="../public/css/layouts/side-menu.css">
<link rel="stylesheet" type="text/css" href="../public/css/estilos.css">
</head>
<body>
<div id="layout">
    <a href="#menu" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="inicio.html">Mobkii</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Inicio</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Productos</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Services</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Productos</h1>
            <h2>Listado de los productos que manejamos</h2>
        </div>


    </div>

<?php
require_once '../controllers/producto.php';
?>

<div class="div-productos">
                <div class="div-productos-guardar">
                <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked form-productos-guardar" >
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table class="table-productos-guardar">
                        <tr>
                            <th>Nombre</th>
                            <td><input required maxlength="50" type="text" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th>Categoria</th>
                            <td>
                                <select required name="categoria">
                                    <option value="A" <?php echo $alm->__GET('categoria') == 0 ? 'selected' : ''; ?>>A</option>
                                    <option value="B" <?php echo $alm->__GET('categoria') == 1 ? 'selected' : ''; ?>>B</option>
                                    <option value="C" <?php echo $alm->__GET('categoria') == 2 ? 'selected' : ''; ?>>C</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Inventario</th>
                            <td><input required type="number" name="inventario" min="0" max="9999" step="1" value="<?php echo $alm->__GET('inventario'); ?>"/></td>
                        </tr>
                        <tr>
                            <th>Precio</th>
                            <td><input required type="number" name="precio" min="0" step="any" value="<?php echo $alm->__GET('precio'); ?>"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
                <div class="div-productos-listar">
<!--                 <div style="margin-bottom: 10px;">
                        <form class="pure-form" method="post" style="display: inline-block;">
                            <input type="text" class="pure-input-rounded" placeholder="buscar">
                             <button type="submit" class="pure-button" >Buscar</button>
                        </form>
                </div> -->
                <table class="pure-table pure-table-horizontal table-productos-listar">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Inventario</th>
                            <th>Precio</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('categoria'); ?></td>
                            <td><?php echo $r->__GET('inventario');?></td>
                            <td><?php echo $r->__GET('precio'); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                </div> 
                </div>    


</div>





<script src="js/ui.js"></script>


</body>
</html>
