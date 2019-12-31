<style type="text/css">
    .title {
        position: relative;
        z-index: 0;
    }

    .title:hover {
        background-color: black;
        z-index: 1;
    }

    .title span {
        border: 1px solid;
        border-radius: 10px;
        padding: 5px;
        position: absolute;
        text-decoration: none;
        background-color: #3343F0;
        color: white;
        width: 10em;
        text-align: center;
        visibility: hidden;
        font-size: 15px;
        line-height: auto;
    }

    .title:hover span {
        visibility: visible;
        top: 24px;
        left: 25px;
    }


    .Mov {
        position: relative;
        z-index: 0;
    }

    .Mov:hover {
        background-color: transparent;
        z-index: 1;
    }

    .Mov span {
        border: 1px solid;
        border-radius: 10px;
        padding: 5px;
        position: absolute;
        text-decoration: none;
        background-color: #3343F0;
        color: white;
        width: 30em;
        text-align: ;
        visibility: hidden;
        font-size: 15px;
        line-height: auto;
    }

    .Mov:hover span {
        visibility: visible;
        top: 24px;
        left: 25px;
    }

    .Mec {
        position: relative;
        z-index: 0;
    }

    .Mec:hover {
        background-color: transparent;
        z-index: 1;
    }

    .Mec span {
        border: 1px solid;
        border-radius: 10px;
        padding: 5px;
        position: absolute;
        text-decoration: none;
        background-color: #3343F0;
        color: white;
        width: auto;
        height: auto;
        text-align: justify;
        visibility: hidden;
        font-size: 15px;
        line-height: auto;
    }

    .Mec:hover span {
        visibility: visible;
        top: 24px;
        left: 25px;
    }

    .TF {
        position: relative;
        z-index: 0;
    }

    .TF:hover {
        background-color: transparent;
        z-index: 1;
    }

    .TF span {
        border: 1px solid;
        border-radius: 10px;
        padding: 5px;
        position: relative;
        text-decoration: none;
        background-color: #3343F0;
        color: white;
        width: auto;
        text-align: ;
        visibility: hidden;
        font-size: 15px;
        line-height: inherit;
    }

    .TF:hover span {
        visibility: visible;
        top: 24px;
        right: auto;
    }
</style>
<script language="Javascript">
    function imprimir() {
        var objeto = document.getElementById('imprimeme'); //obtenemos el objeto a imprimir
        var ventana = window.open('', '_blank'); //abrimos una ventana vacía nueva
        ventana.document.write(objeto.innerHTML); //imprimimos el HTML del objeto en la nueva ventana
        ventana.document.close(); //cerramos el documento
        ventana.print(); //imprimimos la ventana
        ventana.close(); //cerramos la ventana
    }

    function imprimir2() {
        var objeto = document.getElementById('imprimeme2'); //obtenemos el objeto a imprimir
        var ventana = window.open('', '_blank'); //abrimos una ventana vacía nueva
        ventana.document.write(objeto.innerHTML); //imprimimos el HTML del objeto en la nueva ventana
        ventana.document.close(); //cerramos el documento
        ventana.print(); //imprimimos la ventana
        ventana.close(); //cerramos la ventana
    }

    function imprimir3() {
        var objeto = document.getElementById('imprimeme3'); //obtenemos el objeto a imprimir
        var ventana = window.open('', '_blank'); //abrimos una ventana vacía nueva
        ventana.document.write(objeto.innerHTML); //imprimimos el HTML del objeto en la nueva ventana
        ventana.document.close(); //cerramos el documento
        ventana.print(); //imprimimos la ventana
        ventana.close(); //cerramos la ventana
    }

    function imprimir4() {
        var objeto = document.getElementById('imprimeme4'); //obtenemos el objeto a imprimir
        var ventana = window.open('', '_blank'); //abrimos una ventana vacía nueva
        ventana.document.write(objeto.innerHTML); //imprimimos el HTML del objeto en la nueva ventana
        ventana.document.close(); //cerramos el documento
        ventana.print(); //imprimimos la ventana
        ventana.close(); //cerramos la ventana
    }

    function imprimir6() {
        var objeto = document.getElementById('imprimeme6'); //obtenemos el objeto a imprimir
        var ventana = window.open('', '_blank'); //abrimos una ventana vacía nueva
        ventana.document.write(objeto.innerHTML); //imprimimos el HTML del objeto en la nueva ventana
        ventana.document.close(); //cerramos el documento
        ventana.print(); //imprimimos la ventana
        ventana.close(); //cerramos la ventana
    }

    function imprimir7() {
        var objeto = document.getElementById('imprimeme7'); //obtenemos el objeto a imprimir
        var ventana = window.open('', '_blank'); //abrimos una ventana vacía nueva
        ventana.document.write(objeto.innerHTML); //imprimimos el HTML del objeto en la nueva ventana
        ventana.document.close(); //cerramos el documento
        ventana.print(); //imprimimos la ventana
        ventana.close(); //cerramos la ventana
    }
</script>




<?php
$User = $this->db->get_where($this->session->userdata('login_type'), array($this->session->userdata('login_type') . '_id' => $this->session->userdata('login_user_id')))->row()->email;

if ($User == 'reparaciones2@rte.mx'  or $User == 'compras@losmontacargas.mx' or $User == 'practicante1@rte.mx'  or $User == 'practicante@rte.mx') {
?>
    <?php $nurse_id    = $this->session->userdata('login_user_id'); ?>
    <button onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/add_SEG');" class="btn btn-primary pull-left">
        <?php echo get_phrase('Agregar Seguimiento'); ?>
    </button>

    <button onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/edit_semana');" class="btn btn-primary pull-right">
        <?php echo get_phrase('Editar Semana Actual'); ?>
    </button>

    <div class="row">
        <div style="clear:both;"></div>
        <center>
            <table style="color:black;Align:Center">
                <tr>
                    <td style="background:#69E074"><b>&nbsp;&nbsp;VENTA&nbsp;&nbsp;</b></td>
                    <td style="background:#E6DF65"><b>&nbsp;&nbsp;POSIBLE VENTA&nbsp;&nbsp;</b></td>
                    <td style="background:#FB4545"><b>&nbsp;&nbsp;GARANTIA&nbsp;&nbsp;</b></td>
                    <td style="background:#F39523"><b>&nbsp;&nbsp;SERVICIO EXTERNO&nbsp;&nbsp;</b></td>
                    <td style="background:#45A0D4"><b>&nbsp;&nbsp;DESABASTO&nbsp;&nbsp;</b></td>
                    <td style="background:#D074A3"><b>&nbsp;&nbsp;PRESTAMO&nbsp;&nbsp;</b></td>
                    <td style="background:#41B3BB"><b>&nbsp;&nbsp;TRANSITO&nbsp;&nbsp;</b></td>
                    <td style="background:#BDBDBD"><b>&nbsp;&nbsp;SUBASTA&nbsp;&nbsp;</b></td>
                    <td style="background:#9F6ED0"><b>&nbsp;&nbsp;SERVICIO INTERNO&nbsp;&nbsp;</b></td>
                </tr>
            </table>
        </center>
        <div style="clear:both;"></div>
        <div class="col-md-12">

            <ul class="nav nav-tabs bordered">
                <!-- available classes "bordered", "right-aligned" -->
                <li class="active">
                    <a href="#V1" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-home"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('Vts 1 - Yolanda Medina'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="#V2" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-user"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('Vts - Alejandro Robles'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="#V3" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-user"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('Vts 3 - Nora Castro'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="#TLL" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-user"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('Taller'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="#SB" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-user"></i></span>
                        <span class="hidden-xs"><?php echo get_phrase('Subasta'); ?></span>
                    </a>
                </li>


                <!--<li>
                    <a href="#SC" data-toggle="tab">
                        <span class="visible-xs"><i class="entypo-user"></i></span>
                        <span class="hidden-xs"><?php // echo get_phrase('Servicios Internos'); 
                                                ?></span>
                    </a>
                </li>
                -->

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="V1">
                    <table class="table table-bordered" style="color: Black" id="table-1">
                        <thead>
                            <tr>
                                <th><?php echo get_phrase('Sem'); ?></th>
                                <th><?php echo get_phrase('#'); ?></th>
                                <th><?php echo get_phrase('Mecanico'); ?></th>
                                <th><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Supervisor)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Compras)'); ?></th>
                                <th><?php echo get_phrase('Refacciones'); ?></th>
                                <th><?php echo get_phrase('F.C.'); ?></th>
                                <th><?php echo get_phrase('Empresa'); ?></th>
                                <th style="width:1px"><?php echo get_phrase('T.F'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $control_info    = $this->db->query("select * from controlsemanal where (vendedora = 'Yolanda Medina' or vendedora = 'Ing. Juan Carlos') and Indicador != '1' and Indicador !='100' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0) ");
                            foreach ($control_info->result_array() as $row) {
                                if ($row['TRN'] == 'SI') {
                                    $Color = '#41B3BB';
                                } elseif ($row['TRN'] != 'SI') {
                                    if ($row['Status'] == 'VENTA') {
                                        $Color = '#69E074';
                                    } elseif ($row['Status'] == 'POSIBLE VENTA') {
                                        $Color = '#E6DF65';
                                    } elseif ($row['Status'] == 'GARANTIA') {
                                        $Color = '#FB4545';
                                    } elseif ($row['Status'] == 'SERVICIO DE REPARACION') {
                                        $Color = '#F39523';
                                    } elseif ($row['Status'] == 'DESABASTO') {
                                        $Color = '#45A0D4';
                                    } elseif ($row['Status'] == 'PRESTAMO') {
                                        $Color = '#D074A3';
                                    } elseif ($row['Status'] == 'SEGUIMIENTO') {
                                        $Color = '#D5D8D8';
                                    } elseif ($row['Status'] == 'SERVICIO INTERNO') {
                                        $Color = '#9F6ED0';
                                    } elseif ($row['Status'] == 'SUBASTA') {
                                        $Color = '#BDBDBD';
                                    } elseif ($row['Status'] == '') {
                                        $Color = 'B37D20';
                                    }
                                } ?>

                                <tr>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['Semana'] ?>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a <?php if ($User == 'practicante1@rte.mx'  or $User == 'practicante@rte.mx') {
                                                    } else {
                                                    ?> onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/edit_control/<?php echo $row['control_id'] ?>');" <?php } ?> class="title" style="color:black">
                                                    <?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                        SEG
                                                        <span>
                                                            <?php echo $row['Status'] ?>
                                                        </span>
                                                    <?php } else { ?>
                                                        <?php echo $row['Referencia']; ?>
                                                        <span>
                                                            <?php echo $row['Marca']; ?>
                                                        </span>
                                                    <?php } ?>
                                                </a>
                                            </label>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <a class="Mec" style="color:Black">
                                                <?php echo $row['Mecanico'] ?>
                                                <span>
                                                    <?php echo $row['Mecanico1'] ?><br>
                                                    <?php echo $row['Mecanico2'] ?><br>
                                                    <?php echo $row['Mecanico3'] ?><br>
                                                </span>
                                            </a>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['UltimoMovimiento'] == "") { ?>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php echo substr($row['Movimientos'], 0, 40) . "..."; ?>
                                                    <span>
                                                        <?php echo $row['Movimientos'] ?>
                                                    </span>
                                                </a>
                                            </label>
                                        <?php } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['UltimoMovimiento'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Movimientos'] ?>
                                                            <br>
                                                            <?php echo $row['UltimoMovimiento'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['ObservacionesGerente'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['ObservacionesGerente'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['Observaciones'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Observaciones'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php if ($row['Refaccion'] != '') {
                                                        echo substr($row['Refaccion'], 0, 40) . "...";
                                                    } else {
                                                        if ($row['Refacciones'] != "") {
                                                            echo substr('REFACCIONES (Supervisor)<br>' . $row['Refacciones'], 0, 40) . "...";
                                                        }
                                                    } ?>
                                                    <span>
                                                        <?php if ($row['Refaccion'] != '') {
                                                            echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                            if ($row['Refacciones'] != "") {
                                                                echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } else {
                                                            if ($row['Refacciones'] != "") {
                                                                echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } ?>
                                                    </span>
                                                </a>
                                            </label>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['FechaCompromiso'] ?>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px"><b><label><a class="title" style="color:black"><?php echo $row['Empresa']; ?><span><?php echo $row['Cd_Estado'] ?><br><?php echo $row['Forma_Pago'] ?></span></a></label></b></td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    } ?>
                                    <td style="background:<?php echo $Color; ?>;width:1px;font-size:10px"><b>
                                            <center><label style="width:1px"><a class="TF" style="Color:black"><?php echo $TF; ?><span><?php echo $row['Tipo_Falla']; ?></span></a></label></center>
                                        </b></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div style="display:none" id="imprimeme">
                        <table border="1" style="color: Black; border-collapse: collapse;height:100px">
                            <tr>
                                <th colspan="9">
                                    <font style='Font-size: 25px'>Ventas 1 - Yolanda Medina</font>
                                </th>
                            </tr>
                            <tr>
                                <td><?php echo get_phrase('Sem'); ?></td>
                                <td><?php echo get_phrase('#'); ?></td>
                                <td><?php echo get_phrase('Mecanico'); ?></td>
                                <td><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></td>
                                <td><?php echo get_phrase('Observaciones'); ?></td>
                                <td><?php echo get_phrase('Refacciones'); ?></td>
                                <td><?php echo get_phrase('F.C.'); ?></td>
                                <td><?php echo get_phrase('Empresa'); ?></td>
                                <td><?php echo get_phrase('T.F'); ?></td>
                            </tr>

                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where (vendedora = 'Yolanda Medina' or vendedora = 'Ing. Juan Carlos') and Indicador != '1' and Indicador !='100' and Status != 'Servicio Externo' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0)");
                            foreach ($control_info->result_array() as $row) {
                                $S = $row["Semana"];
                                $E = explode("-", $S);
                            ?>
                                <tr>
                                    <td style="width:10px">
                                        <b>
                                            <center><?php echo $E[1] ?></center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center><?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                    SEG
                                                <?php } else { ?>
                                                    <label>
                                                        <?php if ($row['TRN'] == 'SI') {
                                                            echo 'TRN';
                                                        } else {
                                                            echo $row['Referencia'];
                                                        } ?>
                                                        <br>
                                                        <?php echo $row['Marca'] ?>
                                                        <br>
                                                        (<?php echo $row['Status'] ?>)
                                                    </label>
                                                <?php } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center>
                                                <?php echo '- ' . $row['Mecanico']; ?>
                                                <?php if ($row['Mecanico1'] != '') {
                                                    echo '<br>- ' . $row['Mecanico1'];
                                                } ?>
                                                <?php if ($row['Mecanico2'] != '') {
                                                    echo '<br>- ' . $row['Mecanico2'];
                                                } ?>
                                                <?php if ($row['Mecanico3'] != '') {
                                                    echo '<br>- ' . $row['Mecanico3'];
                                                } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['UltimoMovimiento'] == "" and $row['Movimientos'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo $row['Movimientos'] ?>
                                                <br>
                                                <?php echo $row['UltimoMovimiento'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo 'Observaciones (Compras)<br>' . $row['Observaciones'] ?>
                                            </b>
                                        <?php } ?>

                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo '<br><br>Observaciones (Supervisor)<br>' . $row['ObservacionesGerente'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="width:150px">
                                        <b>
                                            <?php
                                            if ($row['Refaccion'] != '') {
                                                echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                if ($row['Refacciones'] != '') {
                                                    echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            } else {
                                                if ($row['Refacciones'] != '') {
                                                    echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            }
                                            ?>
                                        </b>
                                    </td>

                                    <td style="width:70px"><b>
                                            <center><?php echo $row['FechaCompromiso'] ?></center>
                                        </b></td>
                                    <td style="width:150px">
                                        <b>
                                            <center>
                                                <label>
                                                    <?php if (!empty($row['Empresa'])) {
                                                        echo $row['Empresa'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Cd_Estado'])) {
                                                        echo '<br>' . $row['Cd_Estado'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Forma_Pago'])) {
                                                        echo '<br>' . $row['Forma_Pago'];
                                                    } ?>
                                                </label>
                                            </center>
                                        </b>
                                    </td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style=""><b>
                                            <center><label><?php echo $TF; ?></label></center>
                                        </b></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <center>
                        <button style="border:0;background:#04998A;color:white;width: 550px;height:50px;font-size: 30px" onclick="imprimir();">
                            <b>IMPRIMIR</b>
                        </button>
                    </center>
                </div>

                <div class="tab-pane" id="V2">
                    <table class="table table-bordered" style="color: Black" id="table-4">
                        <thead>
                            <tr>
                                <th><?php echo get_phrase('Sem'); ?></th>
                                <th><?php echo get_phrase('#'); ?></th>
                                <th><?php echo get_phrase('Mecanico'); ?></th>
                                <th><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Supervisor)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Compras)'); ?></th>
                                <th><?php echo get_phrase('Refacciones'); ?></th>
                                <th><?php echo get_phrase('F.C.'); ?></th>
                                <th><?php echo get_phrase('Empresa'); ?></th>
                                <th style="width:1px"><?php echo get_phrase('T.F'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $control_info    = $this->db->query("select * from controlsemanal where vendedora = 'Alejandro Robles' and Indicador != '1' and Indicador !='100' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0) ");
                            foreach ($control_info->result_array() as $row) {
                                if ($row['TRN'] == 'SI') {
                                    $Color = '#41B3BB';
                                } elseif ($row['TRN'] != 'SI') {
                                    if ($row['Status'] == 'VENTA') {
                                        $Color = '#69E074';
                                    } elseif ($row['Status'] == 'POSIBLE VENTA') {
                                        $Color = '#E6DF65';
                                    } elseif ($row['Status'] == 'GARANTIA') {
                                        $Color = '#FB4545';
                                    } elseif ($row['Status'] == 'SERVICIO DE REPARACION') {
                                        $Color = '#F39523';
                                    } elseif ($row['Status'] == 'DESABASTO') {
                                        $Color = '#45A0D4';
                                    } elseif ($row['Status'] == 'PRESTAMO') {
                                        $Color = '#D074A3';
                                    } elseif ($row['Status'] == 'SUBASTA') {
                                        $Color = '#BDBDBD';
                                    } elseif ($row['Status'] == 'SEGUIMIENTO') {
                                        $Color = '#D5D8D8';
                                    } elseif ($row['Status'] == 'SERVICIO INTERNO') {
                                        $Color = '#9F6ED0';
                                    }
                                } ?>

                                <tr>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['Semana'] ?>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a <?php if ($User == 'practicante1@rte.mx'  or $User == 'practicante@rte.mx') {
                                                    } else {
                                                    ?> onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/edit_control/<?php echo $row['control_id'] ?>');" <?php } ?> class="title" style="color:black">
                                                    <?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                        SEG
                                                        <span>
                                                            <?php echo $row['Status'] ?>
                                                        </span>
                                                    <?php } else { ?>
                                                        <?php echo $row['Referencia']; ?>
                                                        <span>
                                                            <?php echo $row['Marca']; ?>
                                                        </span>
                                                    <?php } ?>
                                                </a>
                                            </label>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <a class="Mec" style="color:Black">
                                                <?php echo $row['Mecanico'] ?>
                                                <span>
                                                    <?php echo $row['Mecanico1'] ?><br>
                                                    <?php echo $row['Mecanico2'] ?><br>
                                                    <?php echo $row['Mecanico3'] ?><br>
                                                </span>
                                            </a>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['UltimoMovimiento'] == "") { ?>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php echo substr($row['Movimientos'], 0, 40) . "..."; ?>
                                                    <span>
                                                        <?php echo $row['Movimientos'] ?>
                                                    </span>
                                                </a>
                                            </label>
                                        <?php } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['UltimoMovimiento'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Movimientos'] ?>
                                                            <br>
                                                            <?php echo $row['UltimoMovimiento'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['ObservacionesGerente'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['ObservacionesGerente'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['Observaciones'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Observaciones'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php
                                                    if ($row['Refaccion'] != '') {
                                                        echo substr($row['Refaccion'], 0, 40) . "...";
                                                    } else {
                                                        if ($row['Refacciones'] != "") {
                                                            echo substr('REFACCIONES (Supervisor)<br>' . $row['Refacciones'], 0, 40) . "...";
                                                        }
                                                    }
                                                    ?>
                                                    <span>
                                                        <?php if ($row['Refaccion'] != '') {
                                                            echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                            if ($row['Refacciones'] != "") {
                                                                echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } else {
                                                            if ($row['Refacciones'] != "") {
                                                                echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                            </label>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['FechaCompromiso'] ?>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px"><b><label><a class="title" style="color:black"><?php echo $row['Empresa']; ?><span><?php echo $row['Cd_Estado'] ?><br><?php echo $row['Forma_Pago'] ?></span></a></label></b></td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style="background:<?php echo $Color; ?>;width:1px;font-size:10px"><b>
                                            <center><label style="width:1px"><a class="TF" style="Color:black"><?php echo $TF; ?><span><?php echo $row['Tipo_Falla']; ?></span></a></label></center>
                                        </b></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>

                    <div style="display:none" id="imprimeme4">
                        <table border="1" style="color: Black; border-collapse: collapse;height:100px">
                            <tr>
                                <th colspan="9">
                                    <font style='Font-size: 25px'>Ventas - Alejandro Robles</font>
                                </th>
                            </tr>
                            <tr>
                                <td><?php echo get_phrase('Sem'); ?></td>
                                <td><?php echo get_phrase('#'); ?></td>
                                <td><?php echo get_phrase('Mecanico'); ?></td>
                                <td><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></td>
                                <td><?php echo get_phrase('Observaciones'); ?></td>
                                <td><?php echo get_phrase('Refacciones'); ?></td>
                                <td><?php echo get_phrase('F.C.'); ?></td>
                                <td><?php echo get_phrase('Empresa'); ?></td>
                                <td><?php echo get_phrase('T.F'); ?></td>
                            </tr>

                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where (vendedora = 'Alejandro Robles') and Indicador != '1' and Indicador !='100' and Status != 'Servicio Externo' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0)");
                            foreach ($control_info->result_array() as $row) {
                                $S = $row["Semana"];
                                $E = explode("-", $S);
                            ?>
                                <tr>
                                    <td style="width:10px">
                                        <b>
                                            <center><?php echo $E[1] ?></center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center><?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                    SEG
                                                <?php } else { ?>
                                                    <label>
                                                        <?php if ($row['TRN'] == 'SI') {
                                                            echo 'TRN';
                                                        } else {
                                                            echo $row['Referencia'];
                                                        } ?>
                                                        <br>
                                                        <?php echo $row['Marca'] ?>
                                                        <br>
                                                        (<?php echo $row['Status'] ?>)
                                                    </label>
                                                <?php } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center>
                                                <?php echo '- ' . $row['Mecanico']; ?>
                                                <?php if ($row['Mecanico1'] != '') {
                                                    echo '<br>- ' . $row['Mecanico1'];
                                                } ?>
                                                <?php if ($row['Mecanico2'] != '') {
                                                    echo '<br>- ' . $row['Mecanico2'];
                                                } ?>
                                                <?php if ($row['Mecanico3'] != '') {
                                                    echo '<br>- ' . $row['Mecanico3'];
                                                } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['UltimoMovimiento'] == "" and $row['Movimientos'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo $row['Movimientos'] ?>
                                                <br>
                                                <?php echo $row['UltimoMovimiento'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo 'Observaciones (Compras)<br>' . $row['Observaciones'] ?>
                                            </b>
                                        <?php } ?>

                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo '<br><br>Observaciones (Supervisor)<br>' . $row['ObservacionesGerente'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="width:150px">
                                        <b>
                                            <?php
                                            if ($row['Refaccion'] != '') {
                                                echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                if ($row['Refacciones'] != '') {
                                                    echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            } else {
                                                if ($row['Refacciones'] != '') {
                                                    echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            }
                                            ?>
                                        </b>
                                    </td>
                                    <td style="width:70px"><b>
                                            <center><?php echo $row['FechaCompromiso'] ?></center>
                                        </b></td>
                                    <td style="width:150px">
                                        <b>
                                            <center>
                                                <label>
                                                    <?php if (!empty($row['Empresa'])) {
                                                        echo $row['Empresa'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Cd_Estado'])) {
                                                        echo '<br>' . $row['Cd_Estado'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Forma_Pago'])) {
                                                        echo '<br>' . $row['Forma_Pago'];
                                                    } ?>
                                                </label>
                                            </center>
                                        </b>
                                    </td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style=""><b>
                                            <center><label><?php echo $TF; ?></label></center>
                                        </b></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <center>
                        <button style="border:0;background:#04998A;color:white;width: 550px;height:50px;font-size: 30px" onclick="imprimir4();">
                            <b>IMPRIMIR</b>
                        </button>
                    </center>
                </div>

                <div class="tab-pane" id="V3">
                    <table class="table table-bordered" style="color: Black" id="table-2">
                        <thead>
                            <tr>
                                <th><?php echo get_phrase('Sem'); ?></th>
                                <th><?php echo get_phrase('#'); ?></th>
                                <th><?php echo get_phrase('Mecanico'); ?></th>
                                <th><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Supervisor)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Compras)'); ?></th>
                                <th><?php echo get_phrase('Refacciones'); ?></th>
                                <th><?php echo get_phrase('F.C.'); ?></th>
                                <th><?php echo get_phrase('Empresa'); ?></th>
                                <th style="width:1px"><?php echo get_phrase('T.F'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where vendedora = 'Nora Castro' and Indicador != '1' and Indicador !='100' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0) ");
                            foreach ($control_info->result_array() as $row) {
                                if ($row['TRN'] == 'SI') {
                                    $Color = '#41B3BB';
                                } elseif ($row['TRN'] != 'SI') {
                                    if ($row['Status'] == 'VENTA') {
                                        $Color = '#69E074';
                                    } elseif ($row['Status'] == 'POSIBLE VENTA') {
                                        $Color = '#E6DF65';
                                    } elseif ($row['Status'] == 'GARANTIA') {
                                        $Color = '#FB4545';
                                    } elseif ($row['Status'] == 'SERVICIO DE REPARACION') {
                                        $Color = '#F39523';
                                    } elseif ($row['Status'] == 'DESABASTO') {
                                        $Color = '#45A0D4';
                                    } elseif ($row['Status'] == 'PRESTAMO') {
                                        $Color = '#D074A3';
                                    } elseif ($row['Status'] == 'SEGUIMIENTO') {
                                        $Color = '#D5D8D8';
                                    } elseif ($row['Status'] == 'SUBASTA') {
                                        $Color = '#BDBDBD';
                                    } elseif ($row['Status'] == 'SERVICIO INTERNO') {
                                        $Color = '#9F6ED0';
                                    }
                                } ?>

                                <tr>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['Semana'] ?>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a <?php if ($User == 'practicante1@rte.mx'  or $User == 'practicante@rte.mx') {
                                                    } else {
                                                    ?> onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/edit_control/<?php echo $row['control_id'] ?>');" <?php } ?> class="title" style="color:black">
                                                    <?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                        SEG
                                                        <span>
                                                            <?php echo $row['Status'] ?>
                                                        </span>
                                                    <?php } else { ?>
                                                        <?php echo $row['Referencia']; ?>
                                                        <span>
                                                            <?php echo $row['Marca']; ?>
                                                        </span>
                                                    <?php } ?>
                                                </a>
                                            </label>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <a class="Mec" style="color:Black">
                                                <?php echo $row['Mecanico'] ?>
                                                <span>
                                                    <?php echo $row['Mecanico1'] ?><br>
                                                    <?php echo $row['Mecanico2'] ?><br>
                                                    <?php echo $row['Mecanico3'] ?><br>
                                                </span>
                                            </a>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['UltimoMovimiento'] == "") { ?>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php echo substr($row['Movimientos'], 0, 40) . "..."; ?>
                                                    <span>
                                                        <?php echo $row['Movimientos'] ?>
                                                    </span>
                                                </a>
                                            </label>
                                        <?php } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['UltimoMovimiento'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Movimientos'] ?>
                                                            <br>
                                                            <?php echo $row['UltimoMovimiento'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['ObservacionesGerente'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['ObservacionesGerente'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['Observaciones'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Observaciones'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php
                                                    if ($row['Refaccion'] != '') {
                                                        echo substr($row['Refaccion'], 0, 40) . "...";
                                                    } else {
                                                        if ($row['Refacciones'] != "") {
                                                            echo substr('REFACCIONES (Supervisor)<br>' . $row['Refacciones'], 0, 40) . "...";
                                                        }
                                                    } ?>

                                                    <span>
                                                        <?php if ($row['Refaccion'] != '') {
                                                            echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                            if ($row['Refacciones'] != "") {
                                                                echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } else {
                                                            if ($row['Refacciones'] != "") {
                                                                echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } ?>
                                                    </span>
                                                </a>
                                            </label>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['FechaCompromiso'] ?>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px"><b><label><a class="title" style="color:black"><?php echo $row['Empresa']; ?><span><?php echo $row['Cd_Estado'] ?><br><?php echo $row['Forma_Pago'] ?></span></a></label></b></td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    } ?>

                                    <td style="background:<?php echo $Color; ?>;width:1px;font-size:10px"><b>
                                            <center><label style="width:1px"><a class="TF" style="Color:black"><?php echo $TF; ?><span><?php echo $row['Tipo_Falla']; ?></span></a></label></center>
                                        </b></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>

                    <div style="display:none" id="imprimeme2">
                        <table border="1" style="color: Black; border-collapse: collapse;height:100px">
                            <tr>
                                <th colspan="9">
                                    <font style='Font-size: 25px'>Ventas 3 - Nora Castro</font>
                                </th>
                            </tr>
                            <tr>
                                <td><?php echo get_phrase('Sem'); ?></td>
                                <td><?php echo get_phrase('#'); ?></td>
                                <td><?php echo get_phrase('Mecanico'); ?></td>
                                <td><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></td>
                                <td><?php echo get_phrase('Observaciones'); ?></td>
                                <td><?php echo get_phrase('Refacciones'); ?></td>
                                <td><?php echo get_phrase('F.C.'); ?></td>
                                <td><?php echo get_phrase('Empresa'); ?></td>
                                <td><?php echo get_phrase('T.F'); ?></td>
                            </tr>

                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where (vendedora = 'Nora Castro') and Indicador != '1' and Indicador !='100' and Status != 'Servicio Externo' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0)");
                            foreach ($control_info->result_array() as $row) {
                                $S = $row["Semana"];
                                $E = explode("-", $S);
                            ?>
                                <tr>
                                    <td style="width:10px">
                                        <b>
                                            <center><?php echo $E[1] ?></center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center><?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                    SEG
                                                <?php } else { ?>
                                                    <label>
                                                        <?php if ($row['TRN'] == 'SI') {
                                                            echo 'TRN';
                                                        } else {
                                                            echo $row['Referencia'];
                                                        } ?>
                                                        <br>
                                                        <?php echo $row['Marca'] ?>
                                                        <br>
                                                        (<?php echo $row['Status'] ?>)
                                                    </label>
                                                <?php } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center>
                                                <?php echo '- ' . $row['Mecanico']; ?>
                                                <?php if ($row['Mecanico1'] != '') {
                                                    echo '<br>- ' . $row['Mecanico1'];
                                                } ?>
                                                <?php if ($row['Mecanico2'] != '') {
                                                    echo '<br>- ' . $row['Mecanico2'];
                                                } ?>
                                                <?php if ($row['Mecanico3'] != '') {
                                                    echo '<br>- ' . $row['Mecanico3'];
                                                } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['UltimoMovimiento'] == "" and $row['Movimientos'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo $row['Movimientos'] ?>
                                                <br>
                                                <?php echo $row['UltimoMovimiento'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo 'Observaciones (Compras)<br>' . $row['Observaciones'] ?>
                                            </b>
                                        <?php } ?>

                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo '<br><br>Observaciones (Supervisor)<br>' . $row['ObservacionesGerente'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="width:150px">
                                        <b>
                                            <?php
                                            if ($row['Refaccion'] != '') {
                                                echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                if ($row['Refacciones'] != '') {
                                                    echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            } else {
                                                if ($row['Refacciones'] != '') {
                                                    echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            }
                                            ?>
                                        </b>
                                    </td>
                                    <td style="width:70px"><b>
                                            <center><?php echo $row['FechaCompromiso'] ?></center>
                                        </b></td>
                                    <td style="width:150px">
                                        <b>
                                            <center>
                                                <label>
                                                    <?php if (!empty($row['Empresa'])) {
                                                        echo $row['Empresa'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Cd_Estado'])) {
                                                        echo '<br>' . $row['Cd_Estado'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Forma_Pago'])) {
                                                        echo '<br>' . $row['Forma_Pago'];
                                                    } ?>
                                                </label>
                                            </center>
                                        </b>
                                    </td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style=""><b>
                                            <center><label><?php echo $TF; ?></label></center>
                                        </b></td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>

                    <center>
                        <button style="border:0;background:#04998A;color:white;width: 550px;height:50px;font-size: 30px" onclick="imprimir2();">
                            <b>IMPRIMIR</b>
                        </button>
                    </center>
                </div>

                <div class="tab-pane" id="TLL">
                    <table class="table table-bordered" style="color: Black" id="table-3">
                        <thead>
                            <tr>
                                <th><?php echo get_phrase('___'); ?></th>
                                <th><?php echo get_phrase('Sem'); ?></th>
                                <th><?php echo get_phrase('#'); ?></th>
                                <th><?php echo get_phrase('Mecanico'); ?></th>
                                <th><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Supervisor)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Compras)'); ?></th>
                                <th><?php echo get_phrase('Refacciones'); ?></th>
                                <th><?php echo get_phrase('F.C.'); ?></th>
                                <th><?php echo get_phrase('Empresa'); ?></th>
                                <th style="width:1px"><?php echo get_phrase('T.F'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where vendedora = 'Taller' and Indicador != '1' and Indicador !='100' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0) ");
                            foreach ($control_info->result_array() as $row) {
                                if ($row['TRN'] == 'SI') {
                                    $Color = '#41B3BB';
                                } elseif ($row['TRN'] != 'SI') {
                                    if ($row['Status'] == 'VENTA') {
                                        $Color = '#69E074';
                                    } elseif ($row['Status'] == 'POSIBLE VENTA') {
                                        $Color = '#E6DF65';
                                    } elseif ($row['Status'] == 'GARANTIA') {
                                        $Color = '#FB4545';
                                    } elseif ($row['Status'] == 'SERVICIO DE REPARACION') {
                                        $Color = '#F39523';
                                    } elseif ($row['Status'] == 'DESABASTO') {
                                        $Color = '#45A0D4';
                                    } elseif ($row['Status'] == 'PRESTAMO') {
                                        $Color = '#D074A3';
                                    } elseif ($row['Status'] == 'SEGUIMIENTO') {
                                        $Color = '#D5D8D8';
                                    } elseif ($row['Status'] == 'SUBASTA') {
                                        $Color = '#BDBDBD';
                                    } elseif ($row['Status'] == 'SERVICIO INTERNO') {
                                        $Color = '#9F6ED0';
                                    }
                                } ?>

                                <tr>
                                    <th><input type='checkbox' name="check" value="" class="toggle-checkbox"> </th>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">

                                        <b>
                                            <?php echo $row['Semana'] ?>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a <?php if ($User == 'practicante1@rte.mx'  or $User == 'practicante@rte.mx') {
                                                    } else {
                                                    ?> onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/edit_control/<?php echo $row['control_id'] ?>');" <?php } ?> class="title" style="color:black">
                                                    <?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                        SEG
                                                        <span>
                                                            <?php echo $row['Status'] ?>
                                                        </span>
                                                    <?php } else { ?>
                                                        <?php echo $row['Referencia']; ?>
                                                        <span>
                                                            <?php echo $row['Marca']; ?>
                                                        </span>
                                                    <?php } ?>
                                                </a>
                                            </label>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <a class="Mec" style="color:Black">
                                                <?php echo $row['Mecanico'] ?>
                                                <span>
                                                    <?php echo $row['Mecanico1'] ?><br>
                                                    <?php echo $row['Mecanico2'] ?><br>
                                                    <?php echo $row['Mecanico3'] ?><br>
                                                </span>
                                            </a>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['UltimoMovimiento'] == "") { ?>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php echo substr($row['Movimientos'], 0, 40) . "..."; ?>
                                                    <span>
                                                        <?php echo $row['Movimientos'] ?>
                                                    </span>
                                                </a>
                                            </label>
                                        <?php } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['UltimoMovimiento'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Movimientos'] ?>
                                                            <br>
                                                            <?php echo $row['UltimoMovimiento'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['ObservacionesGerente'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['ObservacionesGerente'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['Observaciones'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Observaciones'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php
                                                    if ($row['Refaccion'] != '') {
                                                        echo substr($row['Refaccion'], 0, 40) . "...";
                                                    } else {
                                                        if ($row['Refacciones'] != "") {
                                                            echo substr('REFACCIONES (Supervisor)<br>' . $row['Refacciones'], 0, 40) . "...";
                                                        }
                                                    }
                                                    ?>
                                                    <span>
                                                        <?php if ($row['Refaccion'] != '') {
                                                            echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                            if ($row['Refacciones'] != "") {
                                                                echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } else {
                                                            if ($row['Refacciones'] != "") {
                                                                echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                            </label>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['FechaCompromiso'] ?>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px"><b><label><a class="title" style="color:black"><?php echo $row['Empresa']; ?><span><?php echo $row['Cd_Estado'] ?><br><?php echo $row['Forma_Pago'] ?></span></a></label></b></td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style="background:<?php echo $Color; ?>;width:1px;font-size:10px"><b>
                                            <center><label style="width:1px"><a class="TF" style="Color:black"><?php echo $TF; ?><span><?php echo $row['Tipo_Falla']; ?></span></a></label></center>
                                        </b></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                    <div style="display:none" id="imprimeme3">
                        <table border="1" style="color: Black; border-collapse: collapse;height:100px">
                            <tr>
                                <th colspan="9">
                                    <font style='Font-size: 25px'>Taller</font>
                                </th>
                            </tr>
                            <tr>
                                <td><?php echo get_phrase('Sem'); ?></td>
                                <td><?php echo get_phrase('#'); ?></td>
                                <td><?php echo get_phrase('Mecanico'); ?></td>
                                <td><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></td>
                                <td><?php echo get_phrase('Observaciones'); ?></td>
                                <td><?php echo get_phrase('Refacciones'); ?></td>
                                <td><?php echo get_phrase('F.C.'); ?></td>
                                <td><?php echo get_phrase('Empresa'); ?></td>
                                <td><?php echo get_phrase('T.F'); ?></td>
                            </tr>

                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where (vendedora = 'Taller') and Indicador != '1' and Indicador !='100' and Status != 'Servicio Externo' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0)");
                            foreach ($control_info->result_array() as $row) {
                                $S = $row["Semana"];
                                $E = explode("-", $S);
                            ?>
                                <tr>
                                    <td style="width:10px">
                                        <b>
                                            <center><?php echo $E[1] ?></center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center><?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                    SEG
                                                <?php } else { ?>
                                                    <label>
                                                        <?php if ($row['TRN'] == 'SI') {
                                                            echo 'TRN';
                                                        } else {
                                                            echo $row['Referencia'];
                                                        } ?>
                                                        <br>
                                                        <?php echo $row['Marca'] ?>
                                                        <br>
                                                        (<?php echo $row['Status'] ?>)
                                                    </label>
                                                <?php } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center>
                                                <?php echo '- ' . $row['Mecanico']; ?>
                                                <?php if ($row['Mecanico1'] != '') {
                                                    echo '<br>- ' . $row['Mecanico1'];
                                                } ?>
                                                <?php if ($row['Mecanico2'] != '') {
                                                    echo '<br>- ' . $row['Mecanico2'];
                                                } ?>
                                                <?php if ($row['Mecanico3'] != '') {
                                                    echo '<br>- ' . $row['Mecanico3'];
                                                } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['UltimoMovimiento'] == "" and $row['Movimientos'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo $row['Movimientos'] ?>
                                                <br>
                                                <?php echo $row['UltimoMovimiento'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo 'Observaciones (Compras)<br>' . $row['Observaciones'] ?>
                                            </b>
                                        <?php } ?>

                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo '<br><br>Observaciones (Supervisor)<br>' . $row['ObservacionesGerente'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="width:150px">
                                        <b>
                                            <?php
                                            if ($row['Refaccion'] != '') {
                                                echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                if ($row['Refacciones'] != '') {
                                                    echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            } else {
                                                if ($row['Refacciones'] != '') {
                                                    echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            }
                                            ?>
                                        </b>
                                    </td>
                                    <td style="width:70px"><b>
                                            <center><?php echo $row['FechaCompromiso'] ?></center>
                                        </b></td>
                                    <td style="width:150px">
                                        <b>
                                            <center>
                                                <label>
                                                    <?php if (!empty($row['Empresa'])) {
                                                        echo $row['Empresa'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Cd_Estado'])) {
                                                        echo '<br>' . $row['Cd_Estado'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Forma_Pago'])) {
                                                        echo '<br>' . $row['Forma_Pago'];
                                                    } ?>
                                                </label>
                                            </center>
                                        </b>
                                    </td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style=""><b>
                                            <center><label><?php echo $TF; ?></label></center>
                                        </b></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>

                    <center>
                        <button style="border:0;background:#04998A;color:white;width: 550px;height:50px;font-size: 30px" onclick="imprimir3();">
                            <b>IMPRIMIR</b>
                        </button>
                    </center>
                </div>

                <div class="tab-pane" id="SC">
                    <table class="table table-bordered" style="color: Black" id="table-3">
                        <thead>
                            <tr>
                                <th><?php echo get_phrase('Sem'); ?></th>
                                <th><?php echo get_phrase('#'); ?></th>
                                <th><?php echo get_phrase('Mecanico'); ?></th>
                                <th><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Supervisor)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Compras)'); ?></th>
                                <th><?php echo get_phrase('Refacciones'); ?></th>
                                <th><?php echo get_phrase('F.C.'); ?></th>
                                <th><?php echo get_phrase('Empresa'); ?></th>
                                <th style="width:1px"><?php echo get_phrase('T.F'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $control_info    = $this->db->query("select * from controlsemanal where vendedora = 'Sc' and Indicador != '1' and Indicador !='100' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0) ");
                            foreach ($control_info->result_array() as $row) {
                                if ($row['TRN'] == 'SI') {
                                    $Color = '#41B3BB';
                                } elseif ($row['TRN'] != 'SI') {
                                    if ($row['Status'] == 'VENTA') {
                                        $Color = '#69E074';
                                    } elseif ($row['Status'] == 'POSIBLE VENTA') {
                                        $Color = '#E6DF65';
                                    } elseif ($row['Status'] == 'GARANTIA') {
                                        $Color = '#FB4545';
                                    } elseif ($row['Status'] == 'SERVICIO DE REPARACION') {
                                        $Color = '#F39523';
                                    } elseif ($row['Status'] == 'DESABASTO') {
                                        $Color = '#45A0D4';
                                    } elseif ($row['Status'] == 'PRESTAMO') {
                                        $Color = '#D074A3';
                                    } elseif ($row['Status'] == 'SEGUIMIENTO') {
                                        $Color = '#D5D8D8';
                                    } elseif ($row['Status'] == 'SUBASTA') {
                                        $Color = '#BDBDBD';
                                    } elseif ($row['Status'] == 'SERVICIO INTERNO') {
                                        $Color = '#9F6ED0';
                                    }
                                } ?>

                                <tr>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['Semana'] ?>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a <?php if ($User == 'practicante1@rte.mx'  or $User == 'practicante@rte.mx') {
                                                    } else { ?> onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/edit_control/<?php echo $row['control_id'] ?>');" <?php } ?> class="title" style="color:black">
                                                    <?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                        SEG
                                                        <span>
                                                            <?php echo $row['Status'] ?>
                                                        </span>
                                                    <?php } else { ?>
                                                        <?php echo $row['Referencia']; ?>
                                                        <span>
                                                            <?php echo $row['Marca']; ?>
                                                        </span>
                                                    <?php } ?>
                                                </a>
                                            </label>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <a class="Mec" style="color:Black">
                                                <?php echo $row['Mecanico'] ?>
                                                <span>
                                                    <?php echo $row['Mecanico1'] ?><br>
                                                    <?php echo $row['Mecanico2'] ?><br>
                                                    <?php echo $row['Mecanico3'] ?><br>
                                                </span>
                                            </a>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['UltimoMovimiento'] == "") { ?>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php echo substr($row['Movimientos'], 0, 40) . "..."; ?>
                                                    <span>
                                                        <?php echo $row['Movimientos'] ?>
                                                    </span>
                                                </a>
                                            </label>
                                        <?php } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['UltimoMovimiento'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Movimientos'] ?>
                                                            <br>
                                                            <?php echo $row['UltimoMovimiento'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['ObservacionesGerente'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['ObservacionesGerente'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['Observaciones'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Observaciones'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php
                                                    if ($row['Refaccion'] != '') {
                                                        echo substr($row['Refaccion'], 0, 40) . "...";
                                                    } else {
                                                        if ($row['Refacciones'] != "") {
                                                            echo substr('REFACCIONES (Supervisor)<br>' . $row['Refacciones'], 0, 40) . "...";
                                                        }
                                                    }
                                                    ?>
                                                    <span>
                                                        <?php if ($row['Refaccion'] != '') {
                                                            echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                            if ($row['Refacciones'] != "") {
                                                                echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } else {
                                                            if ($row['Refacciones'] != "") {
                                                                echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                            </label>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['FechaCompromiso'] ?>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px"><b><label><a class="title" style="color:black"><?php echo $row['Empresa']; ?><span><?php echo $row['Cd_Estado'] ?><br><?php echo $row['Forma_Pago'] ?></span></a></label></b></td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style="background:<?php echo $Color; ?>;width:1px;font-size:10px"><b>
                                            <center><label style="width:1px"><a class="TF" style="Color:black"><?php echo $TF; ?><span><?php echo $row['Tipo_Falla']; ?></span></a></label></center>
                                        </b></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div style="display:none" id="imprimeme7">
                        <table border="1" style="color: Black; border-collapse: collapse;height:100px">
                            <tr>
                                <th colspan="9">
                                    <font style='Font-size: 25px'>Servicio sin costo</font>
                                </th>
                            </tr>
                            <tr>
                                <td><?php echo get_phrase('Sem'); ?></td>
                                <td><?php echo get_phrase('#'); ?></td>
                                <td><?php echo get_phrase('Mecanico'); ?></td>
                                <td><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></td>
                                <td><?php echo get_phrase('Observaciones'); ?></td>
                                <td><?php echo get_phrase('Refacciones'); ?></td>
                                <td><?php echo get_phrase('F.C.'); ?></td>
                                <td><?php echo get_phrase('Empresa'); ?></td>
                                <td><?php echo get_phrase('T.F'); ?></td>
                            </tr>

                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where (vendedora = 'Sc') and Indicador != '1' and Indicador !='100' and Status = 'Servicio Interno' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0)");
                            foreach ($control_info->result_array() as $row) {
                                $S = $row["Semana"];
                                $E = explode("-", $S);
                            ?>
                                <tr>
                                    <td style="width:10px">
                                        <b>
                                            <center><?php echo $E[1] ?></center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center><?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                    SEG
                                                <?php } else { ?>
                                                    <label>
                                                        <?php if ($row['TRN'] == 'SI') {
                                                            echo 'TRN';
                                                        } else {
                                                            echo $row['Referencia'];
                                                        } ?>
                                                        <br>
                                                        <?php echo $row['Marca'] ?>
                                                        <br>
                                                        (<?php echo $row['Status'] ?>)
                                                    </label>
                                                <?php } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center>
                                                <?php echo '- ' . $row['Mecanico']; ?>
                                                <?php if ($row['Mecanico1'] != '') {
                                                    echo '<br>- ' . $row['Mecanico1'];
                                                } ?>
                                                <?php if ($row['Mecanico2'] != '') {
                                                    echo '<br>- ' . $row['Mecanico2'];
                                                } ?>
                                                <?php if ($row['Mecanico3'] != '') {
                                                    echo '<br>- ' . $row['Mecanico3'];
                                                } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:250px">
                                        <?php if ($row['UltimoMovimiento'] == "" and $row['Movimientos'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo $row['Movimientos'] ?>
                                                <br>
                                                <?php echo $row['UltimoMovimiento'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="width:250px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo 'Observaciones (Compras)<br>' . $row['Observaciones'] ?>
                                            </b>
                                        <?php } ?>

                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo '<br><br>Observaciones (Supervisor)<br>' . $row['ObservacionesGerente'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="width:150px">
                                        <b>
                                            <?php
                                            if ($row['Refaccion'] != '') {
                                                echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                if ($row['Refacciones'] != '') {
                                                    echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            } else {
                                                if ($row['Refacciones'] != '') {
                                                    echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            }
                                            ?>
                                        </b>
                                    </td>
                                    <td style="width:70px"><b>
                                            <center><?php echo $row['FechaCompromiso'] ?></center>
                                        </b></td>
                                    <td style="width:150px">
                                        <b>
                                            <center>
                                                <label>
                                                    <?php if (!empty($row['Empresa'])) {
                                                        echo $row['Empresa'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Cd_Estado'])) {
                                                        echo '<br>' . $row['Cd_Estado'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Forma_Pago'])) {
                                                        echo '<br>' . $row['Forma_Pago'];
                                                    } ?>
                                                </label>
                                            </center>
                                        </b>
                                    </td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style=""><b>
                                            <center><label><?php echo $TF; ?></label></center>
                                        </b></td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>

                    <center>
                        <button style="border:0;background:#04998A;color:white;width: 550px;height:50px;font-size: 30px" onclick="imprimir7();">
                            <b>IMPRIMIR</b>
                        </button>
                    </center>
                </div>

                <div class="tab-pane" id="SB">
                    <table class="table table-bordered" style="color: Black" id="table-5">
                        <thead>
                            <tr>
                                <th><?php echo get_phrase('Sem'); ?></th>
                                <th><?php echo get_phrase('#'); ?></th>
                                <th><?php echo get_phrase('Mecanico'); ?></th>
                                <th><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Supervisor)'); ?></th>
                                <th><?php echo get_phrase('Observaciones (Compras)'); ?></th>
                                <th><?php echo get_phrase('Refacciones'); ?></th>
                                <th><?php echo get_phrase('F.C.'); ?></th>
                                <th><?php echo get_phrase('Empresa'); ?></th>
                                <th style="width:1px"><?php echo get_phrase('T.F'); ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where vendedora = 'Subasta' and Indicador != '1' and Indicador !='100' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0) ");
                            foreach ($control_info->result_array() as $row) {
                                if ($row['TRN'] == 'SI') {
                                    $Color = '#41B3BB';
                                } elseif ($row['TRN'] != 'SI') {
                                    if ($row['Status'] == 'VENTA') {
                                        $Color = '#69E074';
                                    } elseif ($row['Status'] == 'POSIBLE VENTA') {
                                        $Color = '#E6DF65';
                                    } elseif ($row['Status'] == 'GARANTIA') {
                                        $Color = '#FB4545';
                                    } elseif ($row['Status'] == 'SERVICIO DE REPARACION') {
                                        $Color = '#F39523';
                                    } elseif ($row['Status'] == 'DESABASTO') {
                                        $Color = '#45A0D4';
                                    } elseif ($row['Status'] == 'PRESTAMO') {
                                        $Color = '#D074A3';
                                    } elseif ($row['Status'] == 'SEGUIMIENTO') {
                                        $Color = '#D5D8D8';
                                    } elseif ($row['Status'] == 'SUBASTA') {
                                        $Color = '#BDBDBD';
                                    } elseif ($row['Status'] == 'SERVICIO INTERNO') {
                                        $Color = '#9F6ED0';
                                    }
                                }
                            ?>
                                <tr>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['Semana'] ?>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a <?php if ($User == 'practicante1@rte.mx'  or $User == 'practicante@rte.mx') {
                                                    } else {
                                                    ?> onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/edit_control/<?php echo $row['control_id'] ?>');" <?php } ?> class="title" style="color:black">
                                                    <?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                        SEG
                                                        <span>
                                                            <?php echo $row['Status'] ?>
                                                        </span>
                                                    <?php } else { ?>
                                                        <?php echo $row['Referencia']; ?>
                                                        <span>
                                                            <?php echo $row['Marca']; ?>
                                                        </span>
                                                    <?php } ?>
                                                </a>
                                            </label>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <a class="Mec" style="color:Black">
                                                <?php echo $row['Mecanico'] ?>
                                                <span>
                                                    <?php echo $row['Mecanico1'] ?><br>
                                                    <?php echo $row['Mecanico2'] ?><br>
                                                    <?php echo $row['Mecanico3'] ?><br>
                                                </span>
                                            </a>
                                        </b>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['UltimoMovimiento'] == "") { ?>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php echo substr($row['Movimientos'], 0, 40) . "..."; ?>
                                                    <span>
                                                        <?php echo $row['Movimientos'] ?>
                                                    </span>
                                                </a>
                                            </label>
                                        <?php } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['UltimoMovimiento'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Movimientos'] ?>
                                                            <br>
                                                            <?php echo $row['UltimoMovimiento'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['ObservacionesGerente'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['ObservacionesGerente'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <label>
                                                    <a class="Mov" style="color:black">
                                                        <?php echo substr($row['Observaciones'], 0, 40) . "..."; ?>
                                                        <span>
                                                            <?php echo $row['Observaciones'] ?>
                                                        </span>
                                                    </a>
                                                </label>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <label>
                                                <a class="Mov" style="color:black">
                                                    <?php
                                                    if ($row['Refaccion'] != '') {
                                                        echo substr($row['Refaccion'], 0, 40) . "...";
                                                    } else {
                                                        if ($row['Refacciones'] != "") {
                                                            echo substr('REFACCIONES (Supervisor)<br>' . $row['Refacciones'], 0, 40) . "...";
                                                        }
                                                    }
                                                    ?>
                                                    <span>
                                                        <?php if ($row['Refaccion'] != '') {
                                                            echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                            if ($row['Refacciones'] != "") {
                                                                echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        } else {
                                                            if ($row['Refacciones'] != "") {
                                                                echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                            }
                                                        }
                                                        ?>
                                                    </span>
                                                </a>
                                            </label>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px">
                                        <b>
                                            <?php echo $row['FechaCompromiso'] ?>
                                        </b>
                                    </td>
                                    <td style="background:<?php echo $Color; ?>;font-size:10px"><b><label><a class="title" style="color:black"><?php echo $row['Empresa']; ?><span><?php echo $row['Cd_Estado'] ?><br><?php echo $row['Forma_Pago'] ?></span></a></label></b></td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    } ?>
                                    <td style="background:<?php echo $Color; ?>;width:1px;font-size:10px"><b>
                                            <center><label style="width:1px"><a class="TF" style="Color:black"><?php echo $TF; ?><span><?php echo $row['Tipo_Falla']; ?></span></a></label></center>
                                        </b></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div style="display:none" id="imprimeme6">
                        <table border="1" style="color: Black; border-collapse: collapse;height:100px">
                            <tr>
                                <th colspan="9">
                                    <font style='Font-size: 25px'>Subasta</font>
                                </th>
                            </tr>
                            <tr>
                                <td><?php echo get_phrase('Sem'); ?></td>
                                <td><?php echo get_phrase('#'); ?></td>
                                <td><?php echo get_phrase('Mecanico'); ?></td>
                                <td><?php echo get_phrase('Movimientos (Jefe de Taller)'); ?></td>
                                <td><?php echo get_phrase('Observaciones'); ?></td>
                                <td><?php echo get_phrase('Refacciones'); ?></td>
                                <td><?php echo get_phrase('F.C.'); ?></td>
                                <td><?php echo get_phrase('Empresa'); ?></td>
                                <td><?php echo get_phrase('T.F'); ?></td>
                            </tr>

                            <?php
                            $control_info    = $this->db->query("select * from controlsemanal where (vendedora = 'Subasta') and Indicador != '1' and Indicador !='100' and Status != 'Servicio Externo' ORDER BY FIELD (Id_Status,1,3,4,5,6,2,7,0)");
                            foreach ($control_info->result_array() as $row) {
                                $S = $row["Semana"];
                                $E = explode("-", $S);
                            ?>
                                <tr>
                                    <td style="width:10px">
                                        <b>
                                            <center><?php echo $E[1] ?></center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center><?php if ($row['Status'] == 'SEGUIMIENTO') { ?>
                                                    SEG
                                                <?php } else { ?>
                                                    <label>
                                                        <?php if ($row['TRN'] == 'SI') {
                                                            echo 'TRN';
                                                        } else {
                                                            echo $row['Referencia'];
                                                        } ?>
                                                        <br>
                                                        <?php echo $row['Marca'] ?>
                                                        <br>
                                                        (<?php echo $row['Status'] ?>)
                                                    </label>
                                                <?php } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:100px">
                                        <b>
                                            <center>
                                                <?php echo '- ' . $row['Mecanico']; ?>
                                                <?php if ($row['Mecanico1'] != '') {
                                                    echo '<br>- ' . $row['Mecanico1'];
                                                } ?>
                                                <?php if ($row['Mecanico2'] != '') {
                                                    echo '<br>- ' . $row['Mecanico2'];
                                                } ?>
                                                <?php if ($row['Mecanico3'] != '') {
                                                    echo '<br>- ' . $row['Mecanico3'];
                                                } ?>
                                            </center>
                                        </b>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['UltimoMovimiento'] == "" and $row['Movimientos'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo $row['Movimientos'] ?>
                                                <br>
                                                <?php echo $row['UltimoMovimiento'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>

                                    <td style="width:550px">
                                        <?php if ($row['Observaciones'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo 'Observaciones (Compras)<br>' . $row['Observaciones'] ?>
                                            </b>
                                        <?php } ?>

                                        <?php if ($row['ObservacionesGerente'] == "") {
                                        } else { ?>
                                            <b>
                                                <?php echo '<br><br>Observaciones (Supervisor)<br>' . $row['ObservacionesGerente'] ?>
                                            </b>
                                        <?php } ?>
                                    </td>
                                    <td style="width:150px">
                                        <b>
                                            <?php
                                            if ($row['Refaccion'] != '') {
                                                echo 'Refacciones (Compras)<br>' . $row['Refaccion'];
                                                if ($row['Refacciones'] != '') {
                                                    echo '<br>Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            } else {
                                                if ($row['Refacciones'] != '') {
                                                    echo 'Refacciones (Supervisor)<br>' . $row['Refacciones'];
                                                }
                                            }
                                            ?>
                                        </b>
                                    </td>
                                    <td style="width:70px"><b>
                                            <center><?php echo $row['FechaCompromiso'] ?></center>
                                        </b></td>
                                    <td style="width:150px">
                                        <b>
                                            <center>
                                                <label>
                                                    <?php if (!empty($row['Empresa'])) {
                                                        echo $row['Empresa'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Cd_Estado'])) {
                                                        echo '<br>' . $row['Cd_Estado'];
                                                    } ?>
                                                    <br>
                                                    <?php if (!empty($row['Forma_Pago'])) {
                                                        echo '<br>' . $row['Forma_Pago'];
                                                    } ?>
                                                </label>
                                            </center>
                                        </b>
                                    </td>
                                    <?php
                                    if ($row['Tipo_Falla'] == 'COMPLICADA') {
                                        $TF = 'C';
                                    } elseif ($row['Tipo_Falla'] == 'FACIL') {
                                        $TF = 'F';
                                    } elseif ($row['Tipo_Falla'] == 'PENDIENTE-REVISION') {
                                        $TF = 'PR';
                                    } elseif ($row['Tipo_Falla'] == 'OK') {
                                        $TF = 'OK';
                                    } elseif ($row['Tipo_Falla'] == 'YONQUE') {
                                        $TF = 'Y';
                                    }
                                    ?>
                                    <td style=""><b>
                                            <center><label><?php echo $TF; ?></label></center>
                                        </b></td>
                                </tr>
                            <?php
                            } ?>
                        </table>
                    </div>

                    <center>
                        <button style="border:0;background:#04998A;color:white;width: 550px;height:50px;font-size: 30px" onclick="imprimir6();">
                            <b>IMPRIMIR</b>
                        </button>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <?php for ($count = 1; $count <= 6; $count++) { ?>
        <script type="text/javascript">
            jQuery(window).load(function() {
                var $ = jQuery;

                $("#table-<?php echo $count ?>").dataTable({
                    "sPaginationType": "bootstrap"
                });

                $(".dataTables_wrapper select").select2({
                    minimumResultsForSearch: -1
                });

                // Highlighted rows
                $("#table-<?php echo $count ?> tbody input[type=checkbox]").each(function(i, el) {
                    var $this = $(el),
                        $p = $this.closest('tr');

                    $(el).on('change', function() {
                        var is_checked = $this.is(':checked');

                        $p[is_checked ? 'addClass' : 'removeClass']('highlight');
                    });
                });

                // Replace Checboxes
                $(".pagination a").click(function(ev) {
                    replaceCheckboxes();
                });
            });
        </script>
    <?php } ?>
<?php } else { ?>
    <center>
        <img src="<?php echo $this->crud_model->get_image_url400('400', 'ERROR.jpg'); ?>" width="800px" class="" />
    </center>
<?php } ?>