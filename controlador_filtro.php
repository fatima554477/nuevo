<?php

/**
    --------------------------
    Autor: Sandor Matamoros
    Programer: Fatima Arellano
    Propietario: EPC
    ----------------------------
*/

if (!isset($_SESSION)) {
    session_start();
}
define("__ROOT6__", dirname(__FILE__));
$action = (!empty($_POST["action3"])) ? $_POST["action3"] : "";
if ($action == "ajax3") {

    require(__ROOT6__ . "/class.filtroPAGO.php");
    $database = new orders();

    $query = isset($_POST["query"]) ? $_POST["query"] : "";

    $DEPARTAMENTO = !empty($_POST["DEPARTAMENTO2"]) ? $_POST["DEPARTAMENTO2"] : "DEFAULT";
    $nombreTabla = "SELECT * FROM `08pagoproveedoresfiltroDes`, 08altaeventosfiltroPLA WHERE 08pagoproveedoresfiltroDes.id = 08altaeventosfiltroPLA.idRelacion";
    $altaeventos = "pagoProveedores";

$NUMERO_CONSECUTIVO_PROVEE = isset($_POST["NUMERO_CONSECUTIVO_PROVEE"])?trim($_POST["NUMERO_CONSECUTIVO_PROVEE"]):""; 

 
$ID_RELACIONADO = isset($_POST["ID_RELACIONADO"])?trim($_POST["ID_RELACIONADO"]):"";  
$NOMBRE_COMERCIAL = isset($_POST["NOMBRE_COMERCIAL"])?trim($_POST["NOMBRE_COMERCIAL"]):"";  
$RAZON_SOCIAL = isset($_POST["RAZON_SOCIAL"])?trim($_POST["RAZON_SOCIAL"]):"";  
$VIATICOSOPRO = isset($_POST["VIATICOSOPRO"])?trim($_POST["VIATICOSOPRO"]):"";  
$RFC_PROVEEDOR = isset($_POST["RFC_PROVEEDOR"])?trim($_POST["RFC_PROVEEDOR"]):"";  
$NUMERO_EVENTO = isset($_POST["NUMERO_EVENTO"])?trim($_POST["NUMERO_EVENTO"]):"";  
$NOMBRE_EVENTO = isset($_POST["NOMBRE_EVENTO"])?trim($_POST["NOMBRE_EVENTO"]):"";  
$MOTIVO_GASTO = isset($_POST["MOTIVO_GASTO"])?trim($_POST["MOTIVO_GASTO"]):"";  
$CONCEPTO_PROVEE = isset($_POST["CONCEPTO_PROVEE"])?trim($_POST["CONCEPTO_PROVEE"]):"";  
$MONTO_TOTAL_COTIZACION_ADEUDO = isset($_POST["MONTO_TOTAL_COTIZACION_ADEUDO"])?trim($_POST["MONTO_TOTAL_COTIZACION_ADEUDO"]):"";  
$MONTO_FACTURA = isset($_POST["MONTO_FACTURA"])?trim($_POST["MONTO_FACTURA"]):"";  
$MONTO_PROPINA = isset($_POST["MONTO_PROPINA"])?trim($_POST["MONTO_PROPINA"]):"";  
$MONTO_DEPOSITAR = isset($_POST["MONTO_DEPOSITAR"])?trim($_POST["MONTO_DEPOSITAR"]):"";  
$MONTO_DEPOSITADO = isset($_POST["MONTO_DEPOSITADO"])?trim($_POST["MONTO_DEPOSITADO"]):"";  
$TIPO_DE_MONEDA = isset($_POST["TIPO_DE_MONEDA"])?trim($_POST["TIPO_DE_MONEDA"]):"";  
$PFORMADE_PAGO = isset($_POST["PFORMADE_PAGO"])?trim($_POST["PFORMADE_PAGO"]):""; 
 
$FECHA_DE_PAGO = isset($_POST["FECHA_DE_PAGO"])?trim($_POST["FECHA_DE_PAGO"]):"";
$FECHA_DE_PAGO2a = isset($_POST["FECHA_DE_PAGO2a"])?trim($_POST["FECHA_DE_PAGO2a"]):"";
  
$FECHA_A_DEPOSITAR = isset($_POST["FECHA_A_DEPOSITAR"])?trim($_POST["FECHA_A_DEPOSITAR"]):"";  
$STATUS_DE_PAGO = isset($_POST["STATUS_DE_PAGO"])?trim($_POST["STATUS_DE_PAGO"]):"";  
$ACTIVO_FIJO = isset($_POST["ACTIVO_FIJO"])?trim($_POST["ACTIVO_FIJO"]):"";  
$GASTO_FIJO = isset($_POST["GASTO_FIJO"])?trim($_POST["GASTO_FIJO"]):"";  
$PAGAR_CADA = isset($_POST["PAGAR_CADA"])?trim($_POST["PAGAR_CADA"]):"";  
$FECHA_PPAGO = isset($_POST["FECHA_PPAGO"])?trim($_POST["FECHA_PPAGO"]):"";  
$FECHA_TPROGRAPAGO = isset($_POST["FECHA_TPROGRAPAGO"])?trim($_POST["FECHA_TPROGRAPAGO"]):"";  
$NUMERO_EVENTOFIJO = isset($_POST["NUMERO_EVENTOFIJO"])?trim($_POST["NUMERO_EVENTOFIJO"]):"";  
$CLASI_GENERAL = isset($_POST["CLASI_GENERAL"])?trim($_POST["CLASI_GENERAL"]):"";  
$SUB_GENERAL = isset($_POST["SUB_GENERAL"])?trim($_POST["SUB_GENERAL"]):"";  
$NUMERO_EVENTO1 = isset($_POST["NUMERO_EVENTO1"])?trim($_POST["NUMERO_EVENTO1"]):"";  
$CLASIFICACION_GENERAL = isset($_POST["CLASIFICACION_GENERAL"])?trim($_POST["CLASIFICACION_GENERAL"]):"";  
$CLASIFICACION_ESPECIFICA = isset($_POST["CLASIFICACION_ESPECIFICA"])?trim($_POST["CLASIFICACION_ESPECIFICA"]):"";  
$PLACAS_VEHICULO = isset($_POST["PLACAS_VEHICULO"])?trim($_POST["PLACAS_VEHICULO"]):"";  
$MONTO_DE_COMISION = isset($_POST["MONTO_DE_COMISION"])?trim($_POST["MONTO_DE_COMISION"]):"";  
$POLIZA_NUMERO = isset($_POST["POLIZA_NUMERO"])?trim($_POST["POLIZA_NUMERO"]):"";  
$NOMBRE_DEL_EJECUTIVO = isset($_POST["NOMBRE_DEL_EJECUTIVO"])?trim($_POST["NOMBRE_DEL_EJECUTIVO"]):"";  
$NOMBRE_DEL_AYUDO = isset($_POST["NOMBRE_DEL_AYUDO"])?trim($_POST["NOMBRE_DEL_AYUDO"]):"";  
$OBSERVACIONES_1 = isset($_POST["OBSERVACIONES_1"])?trim($_POST["OBSERVACIONES_1"]):"";  
$FECHA_DE_LLENADO = isset($_POST["FECHA_DE_LLENADO"])?trim($_POST["FECHA_DE_LLENADO"]):"";  
$hiddenpagoproveedores = isset($_POST["hiddenpagoproveedores"])?trim($_POST["hiddenpagoproveedores"]):""; 
$TIPO_CAMBIOP = isset($_POST["TIPO_CAMBIOP"])?$_POST["TIPO_CAMBIOP"]:""; 
$TOTAL_ENPESOS = isset($_POST["TOTAL_ENPESOS"])?$_POST["TOTAL_ENPESOS"]:""; 
$IMPUESTO_HOSPEDAJE = isset($_POST["IMPUESTO_HOSPEDAJE"])?$_POST["IMPUESTO_HOSPEDAJE"]:""; 
$ID_RELACIONADO = isset($_POST["ID_RELACIONADO"])?$_POST["ID_RELACIONADO"]:""; 
$IVA = isset($_POST["IVA"])?$_POST["IVA"]:""; 
$IEPS = isset($_POST["IEPS"])?$_POST["IEPS"]:""; 
$TImpuestosRetenidosIVA = isset($_POST["TImpuestosRetenidosIVA_3"])?$_POST["TImpuestosRetenidosIVA_3"]:""; 
$TImpuestosRetenidosISR = isset($_POST["TImpuestosRetenidosISR_3"])?$_POST["TImpuestosRetenidosISR_3"]:""; 
$descuentos = isset($_POST["descuentos_3"])?$_POST["descuentos_3"]:""; 


$RAZON_SOCIAL_orden = isset($_POST["RAZON_SOCIAL_orden"])?trim($_POST["RAZON_SOCIAL_orden"]):"";  
$RFC_PROVEEDOR_orden = isset($_POST["RFC_PROVEEDOR_orden"])?trim($_POST["RFC_PROVEEDOR_orden"]):""; 
$MONTO_FACTURA_orden = isset($_POST["MONTO_FACTURA_orden"])?trim($_POST["MONTO_FACTURA_orden"]):""; 
$FECHA_DE_PAGO_orden = isset($_POST["FECHA_DE_PAGO_orden"])?trim($_POST["FECHA_DE_PAGO_orden"]):""; 
$NUMERO_EVENTO_orden = isset($_POST["NUMERO_EVENTO_orden"])?trim($_POST["NUMERO_EVENTO_orden"]):""; 


$UUID = isset($_POST["UUID"])?trim($_POST["UUID"]):""; 
$metodoDePago = isset($_POST["metodoDePago"])?trim($_POST["metodoDePago"]):""; 
$totalf = isset($_POST["totalf"])?trim($_POST["totalf"]):""; 
$serie = isset($_POST["serie"])?trim($_POST["serie"]):""; 
$folio = isset($_POST["folio"])?trim($_POST["folio"]):""; 
$regimenE = isset($_POST["regimenE"])?trim($_POST["regimenE"]):""; 
$UsoCFDI = isset($_POST["UsoCFDI"])?trim($_POST["UsoCFDI"]):""; 
$TImpuestosTrasladados = isset($_POST["TImpuestosTrasladados"])?trim($_POST["TImpuestosTrasladados"]):""; 
$TImpuestosRetenidos = isset($_POST["TImpuestosRetenidos"])?trim($_POST["TImpuestosRetenidos"]):""; 
$Version = isset($_POST["Version"])?trim($_POST["Version"]):""; 
$tipoDeComprobante = isset($_POST["tipoDeComprobante"])?trim($_POST["tipoDeComprobante"]):""; 
$condicionesDePago = isset($_POST["condicionesDePago"])?trim($_POST["condicionesDePago"]):""; 
$fechaTimbrado = isset($_POST["fechaTimbrado"])?trim($_POST["fechaTimbrado"]):""; 
$nombreR = isset($_POST["nombreR"])?trim($_POST["nombreR"]):""; 
$rfcR = isset($_POST["rfcR"])?trim($_POST["rfcR"]):""; 
$Moneda = isset($_POST["Moneda"])?trim($_POST["Moneda"]):""; 
$TipoCambio = isset($_POST["TipoCambio"])?trim($_POST["TipoCambio"]):""; 
$ValorUnitarioConcepto = isset($_POST["ValorUnitarioConcepto"])?trim($_POST["ValorUnitarioConcepto"]):""; 
$DescripcionConcepto = isset($_POST["DescripcionConcepto"])?trim($_POST["DescripcionConcepto"]):""; 
$ClaveUnidadConcepto = isset($_POST["ClaveUnidadConcepto"])?trim($_POST["ClaveUnidadConcepto"]):""; 
$ClaveProdServConcepto = isset($_POST["ClaveProdServConcepto"])?trim($_POST["ClaveProdServConcepto"]):""; 
$CantidadConcepto = isset($_POST["CantidadConcepto"])?trim($_POST["CantidadConcepto"]):""; 
$ImporteConcepto = isset($_POST["ImporteConcepto"])?trim($_POST["ImporteConcepto"]):""; 
$UnidadConcepto = isset($_POST["UnidadConcepto"])?trim($_POST["UnidadConcepto"]):""; 
$TUA = isset($_POST["TUA"])?trim($_POST["TUA"]):""; 
$TuaTotalCargos = isset($_POST["TuaTotalCargos"])?trim($_POST["TuaTotalCargos"]):""; 
$Descuento = isset($_POST["Descuento"])?trim($_POST["Descuento"]):""; 
$subTotal = isset($_POST["subTotal"])?trim($_POST["subTotal"]):""; 
$propina = isset($_POST["propina"])?trim($_POST["propina"]):"";
$IVAXML = isset($_POST["IVAXML"])?trim($_POST["IVAXML"]):"";
$IEPSXML = isset($_POST["IEPSXML"])?trim($_POST["IEPSXML"]):"";

$P_TIPO_DE_MONEDA_1 = isset($_POST["P_TIPO_DE_MONEDA_1"])?trim($_POST["P_TIPO_DE_MONEDA_1"]):"";  
$P_INSTITUCION_FINANCIERA_1 = isset($_POST["P_INSTITUCION_FINANCIERA_1"])?trim($_POST["P_INSTITUCION_FINANCIERA_1"]):"";  
$P_INSTITUCION_FINANCIERA_1 = isset($_POST["P_INSTITUCION_FINANCIERA_1"])?trim($_POST["P_INSTITUCION_FINANCIERA_1"]):"";  
$P_NUMERO_DE_CUENTA_DB_1 = isset($_POST["P_NUMERO_DE_CUENTA_DB_1"])?trim($_POST["P_NUMERO_DE_CUENTA_DB_1"]):"";  
$P_NUMERO_CLABE_1 = isset($_POST["P_NUMERO_CLABE_1"])?trim($_POST["P_NUMERO_CLABE_1"]):"";  
$P_NUMERO_CUENTA_SWIFT_1 = isset($_POST["P_NUMERO_CUENTA_SWIFT_1"])?trim($_POST["P_NUMERO_CUENTA_SWIFT_1"]):"";  
$FOTO_ESTADO_PROVEE = isset($_POST["FOTO_ESTADO_PROVEE"])?trim($_POST["FOTO_ESTADO_PROVEE"]):"";  
$ULTIMA_CARGA_DATOBANCA = isset($_POST["ULTIMA_CARGA_DATOBANCA"])?trim($_POST["ULTIMA_CARGA_DATOBANCA"]):"";  






$per_page=intval($_POST["per_page"]);
	$campos="*";
	//Variables de paginación
	$page = (isset($_POST["page"]) && !empty($_POST["page"]))?$_POST["page"]:1;
	$adjacents  = 4; //espacio entre páginas después del número de adyacentes
	$offset = ($page - 1) * $per_page;
	
	$search=array(

"NUMERO_CONSECUTIVO_PROVEE"=>$NUMERO_CONSECUTIVO_PROVEE,
"NOMBRE_COMERCIAL"=>$NOMBRE_COMERCIAL,
"RAZON_SOCIAL"=>$RAZON_SOCIAL,
"VIATICOSOPRO"=>$VIATICOSOPRO,
"RFC_PROVEEDOR"=>$RFC_PROVEEDOR,
"NUMERO_EVENTO"=>$NUMERO_EVENTO,
"NOMBRE_EVENTO"=>$NOMBRE_EVENTO,
"MOTIVO_GASTO"=>$MOTIVO_GASTO,
"CONCEPTO_PROVEE"=>$CONCEPTO_PROVEE,
"MONTO_TOTAL_COTIZACION_ADEUDO"=>$MONTO_TOTAL_COTIZACION_ADEUDO,
"MONTO_FACTURA"=>$MONTO_FACTURA,
"MONTO_PROPINA"=>$MONTO_PROPINA,
"MONTO_DEPOSITAR"=>$MONTO_DEPOSITAR,
"MONTO_DEPOSITADO"=>$MONTO_DEPOSITADO,
"TIPO_DE_MONEDA"=>$TIPO_DE_MONEDA,
"PFORMADE_PAGO"=>$PFORMADE_PAGO,

"FECHA_DE_PAGO"=>$FECHA_DE_PAGO,
"FECHA_DE_PAGO2a"=>$FECHA_DE_PAGO2a,

"FECHA_A_DEPOSITAR"=>$FECHA_A_DEPOSITAR,
"STATUS_DE_PAGO"=>$STATUS_DE_PAGO,
"ACTIVO_FIJO"=>$ACTIVO_FIJO,
"GASTO_FIJO"=>$GASTO_FIJO,
"PAGAR_CADA"=>$PAGAR_CADA,
"FECHA_PPAGO"=>$FECHA_PPAGO,
"FECHA_TPROGRAPAGO"=>$FECHA_TPROGRAPAGO,
"NUMERO_EVENTOFIJO"=>$NUMERO_EVENTOFIJO,
"CLASI_GENERAL"=>$CLASI_GENERAL,
"SUB_GENERAL"=>$SUB_GENERAL,
"NUMERO_EVENTO1"=>$NUMERO_EVENTO1,
"CLASIFICACION_GENERAL"=>$CLASIFICACION_GENERAL,
"CLASIFICACION_ESPECIFICA"=>$CLASIFICACION_ESPECIFICA,
"PLACAS_VEHICULO"=>$PLACAS_VEHICULO,
"MONTO_DE_COMISION"=>$MONTO_DE_COMISION,
"POLIZA_NUMERO"=>$POLIZA_NUMERO,
"NOMBRE_DEL_EJECUTIVO"=>$NOMBRE_DEL_EJECUTIVO,
"NOMBRE_DEL_AYUDO"=>$NOMBRE_DEL_AYUDO,
"OBSERVACIONES_1"=>$OBSERVACIONES_1,
"FECHA_DE_LLENADO"=>$FECHA_DE_LLENADO,
"hiddenpagoproveedores"=>$hiddenpagoproveedores,
"RAZON_SOCIAL_orden"=>$RAZON_SOCIAL_orden,
"RFC_PROVEEDOR_orden"=>$RFC_PROVEEDOR_orden,
"MONTO_FACTURA_orden"=>$MONTO_FACTURA_orden,
"FECHA_DE_PAGO_orden"=>$FECHA_DE_PAGO_orden,
"NUMERO_EVENTO_orden"=>$NUMERO_EVENTO_orden,
"TIPO_CAMBIOP"=>$TIPO_CAMBIOP,
"TOTAL_ENPESOS"=>$TOTAL_ENPESOS,
"IMPUESTO_HOSPEDAJE"=>$IMPUESTO_HOSPEDAJE,
"P_TIPO_DE_MONEDA_1"=>$P_TIPO_DE_MONEDA_1,
"P_INSTITUCION_FINANCIERA_1"=>$P_INSTITUCION_FINANCIERA_1,
"P_NUMERO_DE_CUENTA_DB_1"=>$P_NUMERO_DE_CUENTA_DB_1,
"P_NUMERO_CLABE_1"=>$P_NUMERO_CLABE_1,
"P_NUMERO_IBAN_1"=>$P_NUMERO_IBAN_1,
"P_NUMERO_CUENTA_SWIFT_1"=>$P_NUMERO_CUENTA_SWIFT_1,
"FOTO_ESTADO_PROVEE"=>$FOTO_ESTADO_PROVEE,
"ULTIMA_CARGA_DATOBANCA"=>$ULTIMA_CARGA_DATOBANCA,
"ID_RELACIONADO"=>$ID_RELACIONADO,
"TImpuestosRetenidosIVA"=>$TImpuestosRetenidosIVA,
"TImpuestosRetenidosISR"=>$TImpuestosRetenidosISR,
"descuentos"=>$descuentos,
"IVA"=>$IVA,
"IEPS"=>$IEPS,

"UUID"=>$UUID,
"totalf"=>$totalf,
"metodoDePago"=>$metodoDePago,
"serie"=>$serie,
"folio"=>$folio,
"regimenE"=>$regimenE,
"UsoCFDI"=>$UsoCFDI,
"TImpuestosTrasladados"=>$TImpuestosTrasladados,
"TImpuestosRetenidos"=>$TImpuestosRetenidos,
"Version"=>$Version,
"tipoDeComprobante"=>$tipoDeComprobante,
"condicionesDePago"=>$condicionesDePago,
"fechaTimbrado"=>$fechaTimbrado,
"nombreR"=>$nombreR,
"rfcR"=>$rfcR,
"MonedaF"=>$MonedaF,
"TipoCambio"=>$TipoCambio,
"ValorUnitarioConcepto"=>$ValorUnitarioConcepto,
"DescripcionConcepto"=>$DescripcionConcepto,
"ClaveUnidadConcepto"=>$ClaveUnidadConcepto,
"ClaveProdServConcepto"=>$ClaveProdServConcepto,
"CantidadConcepto"=>$CantidadConcepto,
"ImporteConcepto"=>$ImporteConcepto,
"UnidadConcepto"=>$UnidadConcepto,
"Moneda"=>$Moneda,
"TUA"=>$TUA,
"TuaTotalCargos"=>$TuaTotalCargos,
"Descuento"=>$Descuento,
"subTotal"=>$subTotal,
"propina"=>$propina,
"IVAXML"=>$IVAXML,
"IEPSXML"=>$IEPSXML,


 "per_page"=>$per_page,
	"query"=>$query,
	"offset"=>$offset);
	//consulta principal para recuperar los datos
	$datos=$database->getData($tables,$campos,$search);
	$countAll=$database->getCounter();
	$row = $countAll;
	
	if ($row>0){
		$numrows = $countAll;;
	} else {
		$numrows=0;
	}	
	$total_pages = ceil($numrows/$per_page);
	
	
	//Recorrer los datos recuperados
		?>

    <div class="clearfix">
        <?php
        echo "<div class='hint-text'> " . $numrows . " registros</div>";
        require __ROOT6__ . "/pagination.php"; //include pagination class
        $pagination = new Pagination($page, $total_pages, $adjacents);
        echo $pagination->paginate();
        ?>
    </div>
    <div class="table-responsive">
		<div class="table-responsive">
		<style>
    thead tr:first-child th {
        position: sticky;
        top: 0;
        background: #c9e8e8;
        z-index: 10;
    }

    thead tr:nth-child(2) td {
        position: sticky;
        top: 55px; /* Altura del primer encabezado */
        background: #e2f2f2;
        z-index: 9;
    }
</style>
<div style="max-height: 600px; overflow-y: auto;">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
<th style="background:#c9e8e8"></th>
<th style="background:#c9e8e8">#</th>
<th style="background:#c9e8e8">SOLICITANTE</th>
<th style="background:#c9e8e8">VENTAS</th><!-NUEVO VENTAS->
<th style="background:#c9e8e8">CUENTAS <br>POR PAGAR</th><!-AUDITORIA 1->
<th style="background:#c9e8e8">DIRECCIÓN </th><!-antes finanzas y tesoreria->
<th style="background:#c9e8e8">FINANZAS Y <br>TESORERÍA <br>(PAGADO)</th><!-antes pagado->
<th style="background:#c9e8e8">AUDITORÍA</th>
<?php /*inicia copiar y pegar iniciaA3*/ ?>

<!--<hr/><H1>HTML FILTRO .PHP A3</H1><BR/>--><?php 
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FACTURA XML</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FACTURA PDF</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"VIATICOSOPRO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PAGO A PROVEEDOR, VIÁTICO O REEMBOLSO,<br>PAGO A PROVEEDOR CON DOS O MAS FACTURAS</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_CONSECUTIVO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NUMERO CONSECUTIVO PROVEE</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_COMERCIAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE COMERCIAL</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"RAZON_SOCIAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">RAZON SOCIAL<br/>
			</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"RFC_PROVEEDOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">RFC PROVEEDOR</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NUMERO EVENTO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE EVENTO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"MOTIVO_GASTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MOTIVO GASTO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CONCEPTO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">CONCEPTO DE LA FACTURA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_TOTAL_COTIZACION_ADEUDO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MONTO TOTAL COTIZACION ADEUDO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_FACTURA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">SUBTOTAL</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"IVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">IVA</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosIVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">IMPUESTOS RETENIDOS (IVA)</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosISR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">IMPUESTOS RETENIDOS (ISR)</th>
<?php } ?>



<?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_PROPINA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MONTO PROPINA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"IMPUESTO_HOSPEDAJE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8"> IMPUESTO SOBRE HOSPEDAJE MÁS<br> EL IMPUESTO DE SANEAMIENTO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"descuentos",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8">DESCUENTO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITAR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TOTAL</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MONTO DEPOSITADO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"PENDIENTE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PENDIENTE DE PAGO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"TIPO_DE_MONEDA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TIPO DE MONEDA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"PFORMADE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FORMA DE PAGO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_DE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE PROGRAMACIÓN DE PAGO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_A_DEPOSITAR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81;text-align:center">FECHA EFECTIVA DE PAGO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"STATUS_DE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81;text-align:center">STATUS DE PAGO</th>
<?php } ?><?php                                     
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_COTIZACION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81;text-align:center"> COTIZACIÓN O REPORTE</th>
<?php } ?><?php                                     
if($database->plantilla_filtro($nombreTabla,"CONPROBANTE_TRANSFERENCIA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81"> CONPROBANTE DE TRANSFERENCIA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"ACTIVO_FIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">ACTIVO FIJO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"GASTO_FIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">GASTO FIJO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"PAGAR_CADA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">PAGAR CADA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_PPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">FECHA PAGO (GASTO FIJO)</th>   
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_TPROGRAPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">FECHA PROGRAMACIÓN <br>DE PAGO (GASTO FIJO)</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTOFIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">NÚMERO EVENTO (GASTO FIJO)</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CLASI_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">CLASIFICACIÓN  GENERAL (GASTO FIJO)</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"SUB_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#e6f8ea;text-align:center">SUB CLASIFICACIÓN GENERAL (GASTO FIJO)</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO EVENTO </th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CLASIFICACION_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">CLASIFICACIÓN GENERAL</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CLASIFICACION_ESPECIFICA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">CLASIFICACIÓN ESPECIFICA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"PLACAS_VEHICULO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PLACAS VEHÍCULO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"COMPLEMENTOS_PAGO_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">COMPLEMENTOS DE PAGO PDF</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"COMPLEMENTOS_PAGO_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">COMPLEMENTOS DE PAGO XML</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CANCELACIONES_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">CANCELACIONES PDF</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CANCELACIONES_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">CANCELACIONES XML</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_DE_COMISION_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FACTURA DE COMISIÓN DESCONTADA PDF</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_DE_COMISION_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FACTURA DE COMISIÓN DESCONTADA XML</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CALCULO_DE_COMISION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center"> CALCULO DE COMISIÓN</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_DE_COMISION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center"> MONTO DE COMISIÓN</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"COMPROBANTE_DE_DEVOLUCION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">COMPROBANTE DE DEVOLUCIÓN<br> DE DINERO A EPC</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NOTA_DE_CREDITO_COMPRA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOTA DE CREDITO DE COMPRA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"POLIZA_NUMERO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81;text-align:center">POLIZA NUMERO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_DEL_EJECUTIVO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE DEL EJECUTIVO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FOTO_ESTADO_PROVEE11",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MATCH CON EL ESTADO DE CUENTA</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">OBSERVACIONES 1</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_ARCHIVO_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">ARCHIVO RELACIONADO A ESTE GASTO:</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_DE_LLENADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE LLENADO</th>
<?php } ?>















<?php /*INICIA copiar y PEGAR XML */ ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECEPTOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">NOMBRE RECEPTOR</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"RFC_RECEPTOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">RFC RECEPTOR</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"REGIMEN_FISCAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">REGÍMEN FISCAL</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"UUID",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">UUID:</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"FOLIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">FOLIO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"SERIE",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">SERIE</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"CLAVE_UNIDAD",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">CLAVE DE UNIDAD:</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"CANTIDAD",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">CANTIDAD</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"CLAVE_PODUCTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">CLAVE DE PRODUCTO O SERVICIO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"DESCRIPCION",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">DESCRIPCIÓN</th>
<?php } ?>



<?php 
if($database->plantilla_filtro($nombreTabla,"MonedaF",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">MONEDA:</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"TIPO_CAMBIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">TIPO DE CAMBIO:</th>
<?php } ?>



<?php 
if($database->plantilla_filtro($nombreTabla,"USO_CFDI",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">USO DE CFDI</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"metodoDePago",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">METODO DE PAGO:</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"CONDICIONES_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">CONDICIONES DE PAGO:</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"TIPO_COMPROBANTE",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">TIPO DE COMPROBANTE:</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"VERSION",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">VERSIÓN:</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_TIMBRADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">FECHA DE TIMBRADO:</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"subTotal",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">SUBTOTAL</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"propina",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">SERVICIO, PROPINA,ISH Y SANAMIENTO</th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"DESCUENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">DESCUENTO</th>
<?php } ?>



<?php 
if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_TRASLADADOS",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">TOTAL DE IMPUESTOS TRANSLADADOS</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_RETENIDOS",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">TOTAL DE IMPUESTOS RETENIDOS</th>
<?php } ?>



<th style="background:#f9f3a1;text-align:center">TUA:</th>

<?php 
if($database->plantilla_filtro($nombreTabla,"total",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<th style="background:#f9f3a1;text-align:center">TOTAL:</th>
<?php } ?>

<th style="background:#f16c4f;text-align:center">46% PERDIDA DE COSTO FISCAL</th>
<?php if($database->variablespermisos('','PAGOS_QUITARPP','ver')=='si'){ ?>
<th style="background:#c6eaaa;text-align:center">ID <br>RELACIONADO</th>
<?php } ?>
<th style="background:#c9e8e8;text-align:center"></th>
<th style="background:#c9e8e8;text-align:center"></th>
<th style="background:#c9e8e8;text-align:center"></th>


















<?php /*termina copiar y terminaA3*/ ?>
            </tr>
            <tr>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>
<?php /*inicia copiar y pegar iniciaA4*/ ?>

<!--<hr/><H1>HTML FILTRO E INPUT .PHP A4</H1><BR/>--> 
<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="ADJUNTAR_FACTURA_XML" value="<?php
echo $ADJUNTAR_FACTURA_XML; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="ADJUNTAR_FACTURA_PDF" value="<?php
echo $ADJUNTAR_FACTURA_PDF; ?>"></td>
<?php } ?>
<?php if($database->plantilla_filtro($nombreTabla,"VIATICOSOPRO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="VIATICOSOPRO_2" value="<?php 
echo $VIATICOSOPRO; ?>"></td>
<?php } ?>


<?php if($database->plantilla_filtro($nombreTabla,"NUMERO_CONSECUTIVO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NUMERO_CONSECUTIVO_PROVEE_1_1" value="<?php 
echo $NUMERO_CONSECUTIVO_PROVEE; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_COMERCIAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NOMBRE_COMERCIAL_1" value="<?php 
echo $NOMBRE_COMERCIAL; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"RAZON_SOCIAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8">

<div style="display: flex; justify-content: space-between; align-items: center;">


<input  style="width:200PX;" type="text" class="form-control" id="RAZON_SOCIAL_1" value="<?php echo $RAZON_SOCIAL; ?>"/>

<select style="width:80PX; padding-bottom:0px; margin-bottom:0px;" id="RAZON_SOCIAL_orden" href="javascript:void(0);" onchange="load('<?php echo $_POST['page']; ?>')">

			<option value="">NORMAL</option>
			
			<option value="asc" <?php if($_POST['RAZON_SOCIAL_orden']=='asc'){echo 'selected';} ?>>ASC</option>
			
			<option value="desc" <?php if($_POST['RAZON_SOCIAL_orden']=='desc'){echo 'selected';} ?>>DESC</option>
</select>
     

</div>
			

</td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"RFC_PROVEEDOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>

<td style="background:#c9e8e8">

<div style="display: flex; justify-content: space-between; align-items: center;">
<input type="text"  style="width:200PX;" class="form-control" id="RFC_PROVEEDOR_1" value="<?php 
echo $RFC_PROVEEDOR; ?>"/>

<select style="width:80PX; padding-bottom:0px; margin-bottom:0px;" id="RFC_PROVEEDOR_orden" href="javascript:void(0);" onchange="load('<?php echo $_POST['page']; ?>')">

			<option value="">NORMAL</option>
			
			<option value="asc" <?php if($_POST['RFC_PROVEEDOR_orden']=='asc'){echo 'selected';} ?>>ASC</option>
			
			<option value="desc" <?php if($_POST['RFC_PROVEEDOR_orden']=='desc'){echo 'selected';} ?>>DESC</option>
</select>
</div>

</td>
<?php } ?>



<?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>

<td style="background:#c9e8e8">



<div style="display: flex; justify-content: space-between; align-items: center;">

<input type="text" style="width:200PX;" class="form-control" id="NUMERO_EVENTO_1" value="<?php 
echo $NUMERO_EVENTO; ?>">

<select style="width:80PX; padding-bottom:0px; margin-bottom:0px;" id="NUMERO_EVENTO_orden" href="javascript:void(0);" onchange="load('<?php echo $_POST['page']; ?>')">

			<option value="">NORMAL</option>
			
			<option value="asc" <?php if($_POST['NUMERO_EVENTO_orden']=='asc'){echo 'selected';} ?>>ASC</option>
			
			<option value="desc" <?php if($_POST['NUMERO_EVENTO_orden']=='desc'){echo 'selected';} ?>>DESC</option>
</select>

</div>
</td>
<?php } ?>



<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NOMBRE_EVENTO_1" value="<?php 
echo $NOMBRE_EVENTO; ?>">



</td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"MOTIVO_GASTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MOTIVO_GASTO_1" value="<?php 
echo $MOTIVO_GASTO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"CONCEPTO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="CONCEPTO_PROVEE_1" value="<?php 
echo $CONCEPTO_PROVEE; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_TOTAL_COTIZACION_ADEUDO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_TOTAL_COTIZACION_ADEUDO_1" value="<?php 
echo $MONTO_TOTAL_COTIZACION_ADEUDO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_FACTURA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8">


<div style="display: flex; justify-content: space-between; align-items: center;">


<input type="text"  style="width:200PX;" class="form-control" id="MONTO_FACTURA_1" value="<?php 
echo $MONTO_FACTURA; ?>">


<select style="width:80PX; padding-bottom:0px; margin-bottom:0px;" id="MONTO_FACTURA_orden" href="javascript:void(0);" onchange="load('<?php echo $_POST['page']; ?>')">

			<option value="">NORMAL</option>
			
			<option value="asc" <?php if($_POST['MONTO_FACTURA_orden']=='asc'){echo 'selected';} ?>>ASC</option>
			
			<option value="desc" <?php if($_POST['MONTO_FACTURA_orden']=='desc'){echo 'selected';} ?>>DESC</option>
</select>

</div>

</td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"IVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="IVA" value="<?php 
echo $IVA; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosIVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="TImpuestosRetenidosIVA_4" value="<?php 
echo $TImpuestosRetenidosIVA; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosISR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="TImpuestosRetenidosISR_4" value="<?php 
echo $TImpuestosRetenidosISR; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_PROPINA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_PROPINA_1" value="<?php 
echo $MONTO_PROPINA; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"IMPUESTO_HOSPEDAJE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="IMPUESTO_HOSPEDAJE_1" value="<?php 
echo $IMPUESTO_HOSPEDAJE; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"descuentos",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="descuentos_4" value="<?php 
echo $descuentos; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITAR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_DEPOSITAR_1" value="<?php 
echo $MONTO_DEPOSITAR; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_DEPOSITADO_1" value="<?php 
echo $MONTO_DEPOSITADO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"PENDIENTE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="PENDIENTE_PAGO_1" value="<?php 
echo $PENDIENTE_PAGO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"TIPO_DE_MONEDA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="TIPO_DE_MONEDA_1" value="<?php 
echo $TIPO_DE_MONEDA; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"PFORMADE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="PFORMADE_PAGO_1" value="<?php 
echo $PFORMADE_PAGO; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_DE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8">

<div style="display: flex; justify-content: space-between; align-items: center;">

<input type="date" class="form-control" id="FECHA_DE_PAGO_1" value="<?php 
echo $FECHA_DE_PAGO; ?>">

<select style="width:80PX; padding-bottom:0px; margin-bottom:0px;" id="FECHA_DE_PAGO_orden" href="javascript:void(0);" onchange="load('<?php echo $_POST['page']; ?>')">

			<option value="">NORMAL</option>
			
			<option value="asc" <?php if($_POST['FECHA_DE_PAGO_orden']=='asc'){echo 'selected';} ?>>ASC</option>
			
			<option value="desc" <?php if($_POST['FECHA_DE_PAGO_orden']=='desc'){echo 'selected';} ?>>DESC</option>
</select>
</div>

</td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_A_DEPOSITAR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81"><input type="date" class="form-control" id="FECHA_A_DEPOSITAR_1" value="<?php 
echo $FECHA_A_DEPOSITAR; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"STATUS_DE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81"><input type="text" class="form-control" id="STATUS_DE_PAGO_1" value="<?php 
echo $STATUS_DE_PAGO; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_COTIZACION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81;text-align:center"><input type="text" class="form-control" id="ADJUNTAR_COTIZACION" value="<?php
echo $ADJUNTAR_COTIZACION; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CONPROBANTE_TRANSFERENCIA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81;text-align:center"><input type="text" class="form-control" id="CONPROBANTE_TRANSFERENCIA" value="<?php
echo $CONPROBANTE_TRANSFERENCIA; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"ACTIVO_FIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="text" class="form-control" id="ACTIVO_FIJO_1" value="<?php 
echo $ACTIVO_FIJO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"GASTO_FIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="text" class="form-control" id="GASTO_FIJO_1" value="<?php 
echo $GASTO_FIJO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"PAGAR_CADA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="text" class="form-control" id="PAGAR_CADA_1" value="<?php 
echo $PAGAR_CADA; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_PPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="date" class="form-control" id="FECHA_PPAGO_1" value="<?php 
echo $FECHA_PPAGO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_TPROGRAPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="date" class="form-control" id="FECHA_TPROGRAPAGO_1" value="<?php 
echo $FECHA_TPROGRAPAGO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTOFIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="text" class="form-control" id="NUMERO_EVENTOFIJO_1" value="<?php 
echo $NUMERO_EVENTOFIJO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"CLASI_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="text" class="form-control" id="CLASI_GENERAL_1" value="<?php 
echo $CLASI_GENERAL; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"SUB_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#e6f8ea"><input type="text" class="form-control" id="SUB_GENERAL_1" value="<?php 
echo $SUB_GENERAL; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NUMERO_EVENTO1_1" value="<?php 
echo $NUMERO_EVENTO1; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"CLASIFICACION_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="CLASIFICACION_GENERAL_1" value="<?php 
echo $CLASIFICACION_GENERAL; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"CLASIFICACION_ESPECIFICA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="CLASIFICACION_ESPECIFICA_1" value="<?php 
echo $CLASIFICACION_ESPECIFICA; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"PLACAS_VEHICULO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="PLACAS_VEHICULO_1" value="<?php 
echo $PLACAS_VEHICULO; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"COMPLEMENTOS_PAGO_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="COMPLEMENTOS_PAGO_PDF" value="<?php
echo $COMPLEMENTOS_PAGO_PDF; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"COMPLEMENTOS_PAGO_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="COMPLEMENTOS_PAGO_XML" value="<?php
echo $COMPLEMENTOS_PAGO_XML; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CANCELACIONES_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="CANCELACIONES_PDF" value="<?php
echo $CANCELACIONES_PDF; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CANCELACIONES_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="CANCELACIONES_XML" value="<?php
echo $CANCELACIONES_XML; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_DE_COMISION_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="ADJUNTAR_FACTURA_DE_COMISION_PDF" value="<?php
echo $ADJUNTAR_FACTURA_DE_COMISION_PDF; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_DE_COMISION_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="ADJUNTAR_FACTURA_DE_COMISION_XML" value="<?php
echo $ADJUNTAR_FACTURA_DE_COMISION_XML; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CALCULO_DE_COMISION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="CALCULO_DE_COMISION" value="<?php
echo $CALCULO_DE_COMISION; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_DE_COMISION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_DE_COMISION_1" value="<?php 
echo $MONTO_DE_COMISION; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"COMPROBANTE_DE_DEVOLUCION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="COMPROBANTE_DE_DEVOLUCION" value="<?php
echo $COMPROBANTE_DE_DEVOLUCION; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"NOTA_DE_CREDITO_COMPRA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="NOTA_DE_CREDITO_COMPRA" value="<?php
echo $NOTA_DE_CREDITO_COMPRA; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"POLIZA_NUMERO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81"><input type="text" class="form-control" id="POLIZA_NUMERO_1" value="<?php 
echo $POLIZA_NUMERO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_DEL_EJECUTIVO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NOMBRE_DEL_EJECUTIVO_1" value="<?php 
echo $NOMBRE_DEL_EJECUTIVO; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"FOTO_ESTADO_PROVEE11",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="FOTO_ESTADO_PROVEE11" value="<?php
echo $FOTO_ESTADO_PROVEE11; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="OBSERVACIONES_1_1" value="<?php 
echo $OBSERVACIONES_1; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_ARCHIVO_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="ADJUNTAR_ARCHIVO_1" value="<?php
echo $ADJUNTAR_ARCHIVO_1; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_DE_LLENADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_DE_LLENADO_1" value="<?php 
echo $FECHA_DE_LLENADO; ?>"></td>
<?php } ?>























<?php /*INICIA copiar y PEGAR XML*/ ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECEPTOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="nombreR" value="<?php
echo $nombreR; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"RFC_RECEPTOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="rfcR" value="<?php
echo $rfcR; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"REGIMEN_FISCAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="regimenE" value="<?php
echo $regimenE; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"UUID",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="UUID" value="<?php
echo $UUID; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"FOLIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="folio" value="<?php
echo $folio; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"SERIE",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="serie" value="<?php echo $serie; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CLAVE_UNIDAD",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="ClaveUnidadConcepto" value="<?php
echo $ClaveUnidadConcepto; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CANTIDAD",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="CantidadConcepto" value="<?php
echo $CantidadConcepto; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CLAVE_PODUCTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="ClaveProdServConcepto" value="<?php
echo $ClaveProdServConcepto; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"DESCRIPCION ",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="DescripcionConcepto" value="<?php
echo $DescripcionConcepto ; ?>"></td>
<?php } ?>







<?php  
if($database->plantilla_filtro($nombreTabla,"MonedaF",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="Moneda" value="<?php
echo $Moneda; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"TIPO_CAMBIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="TipoCambio" value="<?php
echo $TipoCambio; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"USO_CFDI",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="UsoCFDI" value="<?php
echo $UsoCFDI; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"metodoDePago",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="metodoDePago" value="<?php
echo $metodoDePago; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CONDICIONES_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="condicionesDePago" value="<?php
echo $condicionesDePago; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"TIPO_COMPROBANTE",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="tipoDeComprobante" value="<?php
echo $tipoDeComprobante; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"VERSION",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="Version" value="<?php
echo $Version; ?>"></td>
<?php } ?>





<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_TIMBRADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="fechaTimbrado" value="<?php
echo $fechaTimbrado; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"SUBTOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="subTotal" value="<?php
echo $subTotal; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"propina",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="propina" value="<?php
echo $propina; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"DESCUENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="DESCUENTO" value="<?php
echo $DESCUENTO; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_TRASLADADOS",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="TImpuestosTrasladados" value="<?php
echo $TImpuestosTrasladados; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_RETENIDOS",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="TImpuestosRetenidos" value="<?php
echo $TImpuestosRetenidos; ?>"></td>
<?php } ?>




<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="TUA" value="<?php
echo $TUA; ?>"></td>


<?php  
if($database->plantilla_filtro($nombreTabla,"total",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="background:#f9f3a1;text-align:center"><input type="text" class="form-control" id="totalf" value="<?php echo $totalf; ?>"></td>
<?php } ?>
<td style="background:#f16c4f;text-align:center"><input type="text" class="form-control" id="PorfaltaDeFactura" value="<?php
echo $PorfaltaDeFactura; ?>"></td>

<?php if($database->variablespermisos('','PAGOS_QUITARPP','ver')=='si'){ ?>
<td style="background:#c6eaaa;text-align:center"></td>
<?php } ?>







		<td style="background:#c9e8e8"></td>
		<td style="background:#c9e8e8"></td>
		<td style="background:#c9e8e8"></td>
            </tr>			
        </thead>
		<?php 	if ($numrows<0){ ?>
		</table>
		<?php }else{ ?>		
        <tbody>
		<?php
		$finales=0;
		$totales = 'no';
		
		
		$database->TruncateingresarTemproal();
		foreach ($datos as $key=>$row){
				$database->ingresarTemproal($row['RFC_PROVEEDOR'],$row['MONTO_TOTAL_COTIZACION_ADEUDO'],$row['MONTO_DEPOSITADO'],$row['02SUBETUFACTURAid']);			
		}
		


		
		
foreach ($datos as $key=>$row){
    $colspan = 0;
    $colspan2 = 0;
    $fondo_existe_xml = "";
    $fondo_existe_xml2 = "";

    // Nueva condición para PFORMADE_PAGO
if (isset($row['STATUS_DE_PAGO']) && $row['STATUS_DE_PAGO'] == 'RECHAZADO') {
    $fondo_existe_xml = "style='background-color: #ff0000'"; // Rojo sólido
    $fondo_existe_xml2 = "style='background-color: #ff0000'";
} 
// 2. Segunda prioridad: Forma de pago diferente de '03' (ROSADO)
else if ($row['PFORMADE_PAGO'] != '03') {
    $fondo_existe_xml = "style='background-color: #ffb6c1'"; 
    $fondo_existe_xml2 = "style='background-color: #ffb6c1'"; 
}
// 3. ClaveUnidadConcepto presente (BLANCO)
else if (!empty($row['ClaveUnidadConcepto'])) {
    $fondo_existe_xml = "style='background-color: #ffffff'"; 
    $fondo_existe_xml2 = "style='background-color: #ffffff'"; 
} 
// 4. ClaveUnidadConcepto vacío (AMARILLO)
else if (empty($row['ClaveUnidadConcepto'])) {
    $fondo_existe_xml2 = "style='background-color: #fdfe87'"; 
    $fondo_existe_xml = "style='background-color: #fdfe87'"; 
}
// 5. Caso por defecto (SIN ESTILO)
else {
    $fondo_existe_xml = "";
    $fondo_existe_xml2 = "";
}
?>
<tr <?php echo $fondo_existe_xml2; ?>>
<td>
    <input type="checkbox" 
           class="checkbox"
           data-id="<?php echo $row['02SUBETUFACTURAid']; ?>" 
           style="transform: scale(1.1); cursor: pointer;" 
           onchange="
               const fila = this.closest('tr');
               const id = this.getAttribute('data-id');
               if (this.checked) {
                   fila.style.filter = 'brightness(65%) sepia(100%) saturate(200%) hue-rotate(0deg)';
                   localStorage.setItem('checkbox_' + id, 'checked');
               } else {
                   fila.style.filter = 'none';
                   localStorage.removeItem('checkbox_' + id);
               }">
</td>
    <td <?php echo $fondo_existe_xml; ?>>
        <?php echo $row['02SUBETUFACTURAid']; $colspan += 1; ?>
    </td>

<?php                                                        
 
	
	$ADJUNTAR_FACTURA_PDF = '';$ADJUNTAR_FACTURA_XML='';$ADJUNTAR_COTIZACION='';$CONPROBANTE_TRANSFERENCIA='';$ADJUNTAR_ARCHIVO_1='';$COMPLEMENTOS_PAGO_PDF='';
   $COMPLEMENTOS_PAGO_XML='';$CANCELACIONES_PDF='';$CANCELACIONES_XML='';$ADJUNTAR_FACTURA_DE_COMISION_PDF='';$ADJUNTAR_FACTURA_DE_COMISION_XML='';$CALCULO_DE_COMISION='';
   $COMPROBANTE_DE_DEVOLUCION='';  $NOTA_DE_CREDITO_COMPRA='';$FOTO_ESTADO_PROVEE11='';$ADJUNTAR_ARCHIVO_1='';
	$querycontrasDOCTOS = $database->Listado_subefacturaDOCTOS($row['02SUBETUFACTURAid']);
	while($rowDOCTOS = mysqli_fetch_array($querycontrasDOCTOS))
	{
			//$ADJUNTAR_FACTURA_PDF = '';				
		if($rowDOCTOS["ADJUNTAR_FACTURA_PDF"]!=''){
			$ADJUNTAR_FACTURA_PDF .= '<a href="includes/archivos/'.$rowDOCTOS["ADJUNTAR_FACTURA_PDF"].'" target ="_blank">Ver!</a><br/>';
		}
		
		if($rowDOCTOS["ADJUNTAR_FACTURA_XML"]!=''){
			$ADJUNTAR_FACTURA_XML .= '<a href="includes/archivos/'.$rowDOCTOS["ADJUNTAR_FACTURA_XML"].'" target ="_blank">Ver!</a><br/>';
		}
		if($rowDOCTOS["ADJUNTAR_COTIZACION"]!=''){
			$ADJUNTAR_COTIZACION .= '<a href="includes/archivos/'.$rowDOCTOS["ADJUNTAR_COTIZACION"].'" target ="_blank">Ver!</a><br/>';
		}
		if($rowDOCTOS["CONPROBANTE_TRANSFERENCIA"]!=''){
			$CONPROBANTE_TRANSFERENCIA .= '<a href="includes/archivos/'.$rowDOCTOS["CONPROBANTE_TRANSFERENCIA"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["COMPLEMENTOS_PAGO_PDF"]!=''){
			$COMPLEMENTOS_PAGO_PDF .= '<a href="includes/archivos/'.$rowDOCTOS["COMPLEMENTOS_PAGO_PDF"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["COMPLEMENTOS_PAGO_XML"]!=''){
			$COMPLEMENTOS_PAGO_XML .= '<a href="includes/archivos/'.$rowDOCTOS["COMPLEMENTOS_PAGO_XML"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["CANCELACIONES_PDF"]!=''){
			$CANCELACIONES_PDF .= '<a href="includes/archivos/'.$rowDOCTOS["CANCELACIONES_PDF"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["CANCELACIONES_XML"]!=''){
			$CANCELACIONES_XML .= '<a href="includes/archivos/'.$rowDOCTOS["CANCELACIONES_XML"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["ADJUNTAR_FACTURA_DE_COMISION_PDF"]!=''){
			$ADJUNTAR_FACTURA_DE_COMISION_PDF .= '<a href="includes/archivos/'.$rowDOCTOS["ADJUNTAR_FACTURA_DE_COMISION_PDF"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["ADJUNTAR_FACTURA_DE_COMISION_XML"]!=''){
			$ADJUNTAR_FACTURA_DE_COMISION_XML .= '<a href="includes/archivos/'.$rowDOCTOS["ADJUNTAR_FACTURA_DE_COMISION_XML"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["CALCULO_DE_COMISION"]!=''){
			$CALCULO_DE_COMISION .= '<a href="includes/archivos/'.$rowDOCTOS["CALCULO_DE_COMISION"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["COMPROBANTE_DE_DEVOLUCION"]!=''){
			$COMPROBANTE_DE_DEVOLUCION .= '<a href="includes/archivos/'.$rowDOCTOS["COMPROBANTE_DE_DEVOLUCION"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["NOTA_DE_CREDITO_COMPRA"]!=''){
			$NOTA_DE_CREDITO_COMPRA .= '<a href="includes/archivos/'.$rowDOCTOS["NOTA_DE_CREDITO_COMPRA"].'" target ="_blank">Ver!</a><br/>';
		}
      if($rowDOCTOS["FOTO_ESTADO_PROVEE11"]!=''){
			$FOTO_ESTADO_PROVEE11 .= '<a href="includes/archivos/'.$rowDOCTOS["FOTO_ESTADO_PROVEE11"].'" target ="_blank">Ver!</a><br/>';
		}
	
		if($rowDOCTOS["ADJUNTAR_ARCHIVO_1"]!=''){
			$ADJUNTAR_ARCHIVO_1 .= '<a href="includes/archivos/'.$rowDOCTOS["ADJUNTAR_ARCHIVO_1"].'" target ="_blank">Ver!</a><br/>';
		}

	}



?>


<td style="text-align:center; background:#ceffcc">

<input type="checkbox" style="width:30PX;" checked="checked" disabled = "disabled" class="form-check-input" id="STATUS_RESPONSABLE_EVENTO<?php echo $row["02SUBETUFACTURAid"]; ?>"  name="STATUS_RESPONSABLE_EVENTO<?php echo $row["02SUBETUFACTURAid"]; ?>" value="<?php echo $row["02SUBETUFACTURAid"]; ?>" onclick="STATUS_RESPONSABLE_EVENTO(<?php echo $row["02SUBETUFACTURAid"]; ?>)" <?php if($row["STATUS_RESPONSABLE_EVENTO"]=='si'){
	echo "checked";
}
$colspan += 1; ?>/>
</td>

<td style="text-align:center; background:<?php if($row["STATUS_VENTAS"]=='si'){?> #ceffcc; <?php }else{?>#e9d8ee; <?php }?>" id="color_VENTAS<?php echo $row["02SUBETUFACTURAid"]; ?>" >

<input type="checkbox" style="width:30PX;" class="form-check-input" id="STATUS_VENTAS<?php echo $row["02SUBETUFACTURAid"]; ?>"  name="STATUS_VENTAS<?php echo $row["02SUBETUFACTURAid"]; ?>" value="<?php echo $row["02SUBETUFACTURAid"]; ?>" onclick="STATUS_VENTAS(<?php echo $row["02SUBETUFACTURAid"]; ?>)" <?php if($row["STATUS_VENTAS"]=='si'){
	echo "checked";
}$colspan += 1;
 ?>/>

</td>

<td style="text-align:center; background:
    <?php
    if ($row["STATUS_DE_PAGO"] == 'APROBADO') {
        echo '#ceffcc'; // verde claro para aprobado
    } elseif ($row["STATUS_DE_PAGO"] == 'PAGADO') {
        echo '#ceffcc'; // verde más intenso para pagado
    } else {
        echo '#e9d8ee'; // lila claro para pendiente
    }
    ?>" 
    id="color_pagado1a<?php echo $row["02SUBETUFACTURAid"]; ?>">

    <input type="checkbox" style="width:30PX;" class="form-check-input" 
           id="STATUS_AUDITORIA1<?php echo $row["02SUBETUFACTURAid"]; ?>" 
           name="STATUS_AUDITORIA1<?php echo $row["02SUBETUFACTURAid"]; ?>" 
           value="<?php echo $row["02SUBETUFACTURAid"]; ?>"  
           <?php 
           if ($row["STATUS_DE_PAGO"] == 'APROBADO' || $row["STATUS_DE_PAGO"] == 'PAGADO'): 
               echo 'checked disabled';
           else: 
               echo 'onclick="STATUS_AUDITORIA1('.$row["02SUBETUFACTURAid"].')"';
           endif; 
           ?>
    />
</td>


<td style="text-align:center; background:<?php if($row["STATUS_FINANZAS"]=='si'){?> #ceffcc; <?php }else{?>#e9d8ee; <?php }?>" id="color_FINANZAS<?php echo $row["02SUBETUFACTURAid"]; ?>" >

<input type="checkbox" style="width:30PX;" class="form-check-input" id="STATUS_FINANZAS<?php echo $row["02SUBETUFACTURAid"]; ?>"  name="STATUS_FINANZAS<?php echo $row["02SUBETUFACTURAid"]; ?>" value="<?php echo $row["02SUBETUFACTURAid"]; ?>" onclick="STATUS_FINANZAS(<?php echo $row["02SUBETUFACTURAid"]; ?>)" <?php if($row["STATUS_FINANZAS"]=='si'){
	echo "checked";
}
$colspan += 1; ?>/>

</td>

<td style="text-align:center; background:<?php if($row["STATUS_DE_PAGO"]!='PAGADO'){?> #e9d8ee;<?php }else{?> #ceffcc; <?php }?>" id="color_pagado1a<?php echo $row["02SUBETUFACTURAid"]; ?>" >

<input type="checkbox" style="width:30PX;" class="form-check-input" id="pasarpagado1a<?php echo $row["02SUBETUFACTURAid"]; ?>" name="pasarpagado1a<?php echo $row["02SUBETUFACTURAid"]; ?>" value="<?php echo $row["02SUBETUFACTURAid"]; ?>"  onclick="pasarpagado2(<?php echo $row["02SUBETUFACTURAid"]; ?>)"  <?php if($row["STATUS_DE_PAGO"]=='PAGADO'){
	echo "checked";
}
$colspan += 1; ?>/>

</td>
<td style="text-align:center; background:<?php if($row["STATUS_AUDITORIA2"]=='si'){?>  #ceffcc; <?php }else{?> #e9d8ee; <?php }?>" id="color_AUDITORIA2<?php echo $row["02SUBETUFACTURAid"]; ?>" >
<!--
//STATUS_RESPONSABLE_EVENTO
//STATUS_AUDITORIA1
//STATUS_AUDITORIA2
//STATUS_FINANZAS -->
<input type="checkbox" style="width:30PX;" class="form-check-input" id="STATUS_AUDITORIA2<?php echo $row["02SUBETUFACTURAid"]; ?>"  name="STATUS_AUDITORIA2<?php echo $row["02SUBETUFACTURAid"]; ?>" value="<?php echo $row["02SUBETUFACTURAid"]; ?>" onclick="STATUS_AUDITORIA2(<?php echo $row["02SUBETUFACTURAid"]; ?>)" <?php if($row["STATUS_AUDITORIA2"]=='si'){
	echo "checked";
}
$colspan += 1; ?>/>

</td>

<?php /*inicia copiar y pegar iniciaA5*/ ?>
<!--<hr/><H1>FOREACH FILTRO .PHP A5</H1><BR/>-->
<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $ADJUNTAR_FACTURA_XML; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $ADJUNTAR_FACTURA_PDF; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"VIATICOSOPRO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['VIATICOSOPRO'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_CONSECUTIVO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['NUMERO_CONSECUTIVO_PROVEE'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_COMERCIAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['NOMBRE_COMERCIAL'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"RAZON_SOCIAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['RAZON_SOCIAL'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"RFC_PROVEEDOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['RFC_PROVEEDOR'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['NUMERO_EVENTO'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['NOMBRE_EVENTO'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"MOTIVO_GASTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['MOTIVO_GASTO'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CONCEPTO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php $colspan += 1; echo $row['CONCEPTO_PROVEE'];?></td>
<?php } ?>


<?php $colspan2 = $colspan; ?>


<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_TOTAL_COTIZACION_ADEUDO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php 
		$totales = 'si';
echo  number_format($row['MONTO_TOTAL_COTIZACION_ADEUDO'],2,'.',',');
$MONTO_TOTAL_COTIZACION_ADEUDO12 += $row['MONTO_TOTAL_COTIZACION_ADEUDO'];
 $colspan2 += 1;
?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_FACTURA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php
		$totales = 'si';
echo number_format($row['MONTO_FACTURA'],2,'.',',');
$MONTO_FACTURA12 += $row['MONTO_FACTURA'];
 $colspan2 += 1;
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"IVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php
		$totales = 'si';
echo number_format($row['IVA'],2,'.',',');
$IVA12 += $row['IVA'];
 $colspan2 += 1;
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosIVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php
		$totales = 'si';
echo number_format($row['TImpuestosRetenidosIVA'],2,'.',',');
$TImpuestosRetenidosIVA12 += $row['TImpuestosRetenidosIVA'];
 $colspan2 += 1;
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosISR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php
		$totales = 'si';
echo number_format($row['TImpuestosRetenidosISR'],2,'.',',');
$TImpuestosRetenidosISR12 += $row['TImpuestosRetenidosISR'];
 $colspan2 += 1;
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_PROPINA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php
		$totales = 'si';
echo number_format($row['MONTO_PROPINA'],2,'.',',');
$MONTO_PROPINA12 += $row['MONTO_PROPINA'];
 $colspan2 += 1;
 ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"IMPUESTO_HOSPEDAJE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center">$<?php 
echo  number_format($row['IMPUESTO_HOSPEDAJE'],2,'.',',');
		$totales = 'si';
		$IMPUESTO_HOSPEDAJE12 += $row['IMPUESTO_HOSPEDAJE'];
		$colspan2 += 1;
		
		$supropinamashospedaje = $row['MONTO_PROPINA'] + $row['IMPUESTO_HOSPEDAJE'];
		
		
?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"descuentos",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php 
		$totales = 'si';
echo  number_format($row['descuentos'],2,'.',',');
$descuentos12 += $row['descuentos']; $colspan2 += 1;
?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITAR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php
		$totales = 'si';
echo number_format($row['MONTO_DEPOSITAR'],2,'.',',');
$MONTO_DEPOSITAR12 += $row['MONTO_DEPOSITAR'];
 $colspan2 += 1;
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php 
		$totales = 'si';
echo number_format($row['MONTO_DEPOSITADO'],2,'.',',');

$idrelacion['idrelacion'][$row['02SUBETUFACTURAid']]=$row['02SUBETUFACTURAid'];
$idactual = $row['02SUBETUFACTURAid'];
$gran_total = $database->getTotalAmaunt2($row['RFC_PROVEEDOR']);
$gran_totalid = $database->getTotalAmaunt2id($row['RFC_PROVEEDOR'],$idrelacion,$idactual);
$gran_total2 = $gran_totalid + $gran_total;
$MONTO_DEPOSITADO12 += $row['MONTO_DEPOSITADO'];
$colspan2 += 1;
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"PENDIENTE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php 
		$totales = 'si';
echo number_format($gran_total2,2,'.',','); 

$PENDIENTE_PAGO12 += $gran_total2;
 $colspan2 += 1;
?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"TIPO_DE_MONEDA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['TIPO_DE_MONEDA']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"PFORMADE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['PFORMADE_PAGO']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_DE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['FECHA_DE_PAGO']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_A_DEPOSITAR",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['FECHA_A_DEPOSITAR']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"STATUS_DE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['STATUS_DE_PAGO']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_COTIZACION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $ADJUNTAR_COTIZACION;  $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CONPROBANTE_TRANSFERENCIA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $CONPROBANTE_TRANSFERENCIA;  $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"ACTIVO_FIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['ACTIVO_FIJO']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"GASTO_FIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['GASTO_FIJO']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"PAGAR_CADA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['PAGAR_CADA']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_PPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['FECHA_PPAGO']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_TPROGRAPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['FECHA_TPROGRAPAGO']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTOFIJO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NUMERO_EVENTOFIJO']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CLASI_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['CLASI_GENERAL']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"SUB_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['SUB_GENERAL']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NUMERO_EVENTO1']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CLASIFICACION_GENERAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['CLASIFICACION_GENERAL']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CLASIFICACION_ESPECIFICA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['CLASIFICACION_ESPECIFICA']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"PLACAS_VEHICULO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['PLACAS_VEHICULO']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"COMPLEMENTOS_PAGO_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $COMPLEMENTOS_PAGO_PDF;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"COMPLEMENTOS_PAGO_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $COMPLEMENTOS_PAGO_XML;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CANCELACIONES_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $CANCELACIONES_PDF;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CANCELACIONES_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $CANCELACIONES_XML;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_DE_COMISION_PDF",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $ADJUNTAR_FACTURA_DE_COMISION_PDF;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_FACTURA_DE_COMISION_XML",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $ADJUNTAR_FACTURA_DE_COMISION_XML;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CALCULO_DE_COMISION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $CALCULO_DE_COMISION;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_DE_COMISION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['MONTO_DE_COMISION']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"COMPROBANTE_DE_DEVOLUCION",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $COMPROBANTE_DE_DEVOLUCION;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NOTA_DE_CREDITO_COMPRA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $NOTA_DE_CREDITO_COMPRA;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"POLIZA_NUMERO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['POLIZA_NUMERO']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_DEL_EJECUTIVO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NOMBRE_DEL_EJECUTIVO']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"FOTO_ESTADO_PROVEE11",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $FOTO_ESTADO_PROVEE11;  $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['OBSERVACIONES_1']; $colspan2 += 1; ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTAR_ARCHIVO_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $ADJUNTAR_ARCHIVO_1;  $colspan2 += 1; ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_DE_LLENADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"S><?php echo $row['FECHA_DE_LLENADO']; $colspan2 += 1; ?></td>
<?php } ?>





















<?php /*INICIA copiar y PEGAR XML*/ ?>
<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECEPTOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['nombreR'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"RFC_RECEPTOR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['rfcR'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"REGIMEN_FISCAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['regimenE'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"UUID",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['UUID'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"FOLIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php  echo $row['folio'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"SERIE",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['serie'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"CLAVE_UNIDAD",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['ClaveUnidadConcepto'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"CANTIDAD",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo number_format($row['CantidadConcepto'],2,'.',',');
	 $colspan2 += 1;
	 ?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"CLAVE_PODUCTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['ClaveProdServConcepto'];
	 $colspan2 += 1;
	 ?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"DESCRIPCION",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo ''. $row['DescripcionConcepto'];
 $colspan2 += 1;
 ?></td>
<?php } ?>










<?php  if($database->plantilla_filtro($nombreTabla,"MonedaF",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['Moneda']; $colspan2 += 1;?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"TIPO_CAMBIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo number_format($row['TipoCambio'],2,'.',','); $colspan2 += 1;?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"USO_CFDI",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['UsoCFDI']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"metodoDePago",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php  echo $row['metodoDePago']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"CONDICIONES_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php  echo $row['condicionesDePago']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"TIPO_COMPROBANTE",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['tipoDeComprobante']; $colspan2 += 1;?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"VERSION",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['Version']; $colspan2 += 1;?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_TIMBRADO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo $row['fechaTimbrado']; $colspan2 += 1;?></td>
<?php } ?>



<?php  if($database->plantilla_filtro($nombreTabla,"subTotal",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center">$<?php 


$subTotal123 = isset($row['subTotal'])?$row['subTotal']:'' ;
$MONTO_FACTURA123 = isset($row['MONTO_FACTURA'])?$row['MONTO_FACTURA']:'' ;

if ($subTotal123 > 0) {
    $MONTO_FACTURAxm = number_format($subTotal123, 2, '.', ',');
    $MONTO_FACTURAxm2 = ($subTotal123);
  
} ELSE{

    $MONTO_FACTURAxm = number_format($MONTO_FACTURA123, 2, '.', ',');
    $MONTO_FACTURAxm2 = ($MONTO_FACTURA123);
} 



// Add to subTotalCIERRE only for provider payments with approved status and existing UUID
$subTotal12 +=$MONTO_FACTURAxm2;

if (
    $row['VIATICOSOPRO'] === 'PAGO A PROVEEDOR'
    && !empty($row['UUID'])
) {
    $subTotalCIERRE += $MONTO_FACTURAxm2;

    if ($row['VIATICOSOPRO'] === 'PAGO A PROVEEDOR' && $row['STATUS_CHECKBOX'] === 'si') {
        $subTotalCIERRE2 += $MONTO_FACTURAxm2;
    }
}

 echo number_format((float)$MONTO_FACTURAxm2, 2, '.', ','); 

	
	
	$totales2 = 'si';
	
	
	?></td>
<?php } ?>




<?php  if($database->plantilla_filtro($nombreTabla,"propina",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php


	
	echo number_format($row['propina'] + $supropinamashospedaje ,2,'.',',');
	$propina12 += $row['propina']+ $supropinamashospedaje ;
	if  (!empty($row['UUID']) || $row['STATUS_CHECKBOX'] === "si"){
		$propina123 += $row['propina']+ $supropinamashospedaje ;
		}
	$totales2 = 'si';
	 ?></td>
<?php } ?> 





<?php  if($database->plantilla_filtro($nombreTabla,"Descuento",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php 
	echo number_format($row['Descuento'],2,'.',',');
	$Descuento12 += $row['Descuento'];
	$totales2 = 'si';
	 ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_TRASLADADOS",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center">$<?php 


$TImpuestosTrasladados123 = isset($row['TImpuestosTrasladados'])?$row['TImpuestosTrasladados']:'' ;
$IVA123 = isset($row['IVA'])?$row['IVA']:'' ;

if ($TImpuestosTrasladados123 > 0) {
    $IVAXML = number_format($TImpuestosTrasladados123, 2, '.', ',');
    $IVAXML2 = ($TImpuestosTrasladados123);
  
} ELSE{

    $IVAXML = number_format($IVA123, 2, '.', ',');
    $IVAXML2 = ($IVA123);
} 

$IVAXMLGTOTAL2 +=$IVAXML2;
echo $IVAXML;
	
	
	$totales2 = 'si';
	
	
	?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_RETENIDOS",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo number_format($row['TImpuestosRetenidos'],2,'.',',');
	$TImpuestosRetenidos12 += $row['TImpuestosRetenidos'];
	$totales2 = 'si';
	?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"TUA",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
    <td style="text-align:center"><?php echo  number_format($row['TUA'],2,'.',',');
	$TUA12 += $row['TUA'];
	$TUA2 = 'si';
	?></td>
<?php } ?>



   <td style="text-align:center" id="montoOriginal_<?php echo $row['02SUBETUFACTURAid']; ?>"><?php 

$total123 = isset($row['totalf'])?$row['totalf']:'' ;
$MONTO_DEPOSITAR123 = isset($row['MONTO_DEPOSITAR'])?$row['MONTO_DEPOSITAR']:'' ;

if ($total123 > 0) {
    $porfalta = number_format($total123, 2, '.', ',');
    $porfalta2 = ($total123);
    
} ELSE{
   // $IVAXMLqq = $IVA123;
    $porfalta = number_format($MONTO_DEPOSITAR123, 2, '.', ',');
    $porfalta2 = ($MONTO_DEPOSITAR123);
} 

$totalf12  +=$porfalta2;
echo $porfalta;
	
	
$totales2 = 'si';
	
	
	?></td>


 



<td style="text-align:center" id="valorCalculado_<?php echo $row['02SUBETUFACTURAid']; ?>">
    <?php
     if (in_array($row['VIATICOSOPRO'], [
        'VIATICOS',
        'REEMBOLSO',
        'PAGO A PROVEEDOR CON DOS O MAS FACTURAS',
        'PAGOS CON UNA SOLA FACTURA'
    ])) {
        $PorfaltaDeFacturaSUBERES2 = $database->diferenciaPorConsecutivo($row['NUMERO_CONSECUTIVO_PROVEE']);
        $valorNUEVO = $PorfaltaDeFacturaSUBERES2 ;
        echo number_format($valorNUEVO, 2, '.', ',');
		                   $Porfalta = $valorNUEVO + $valorCalculado;
				   $PorfaltaDeFactura12 += $Porfalta ;
				   
        $totales2 = 'si';

    }	
        elseif (($row['STATUS_CHECKBOX'] === 'no' || $row['STATUS_CHECKBOX'] === null) && strlen(trim($row['UUID'])) < 1) {
            $valorCalculado = $porfalta2 * 1.46;
            echo number_format($valorCalculado, 2, '.', ',');

        }
    
    ?>
</td>


		
<?php if($database->variablespermisos('','PAGOS_QUITARPP','ver')=='si'){ ?>
<?php $excluirViaticos = ['VIATICOS','REEMBOLSO','PAGO A PROVEEDOR CON DOS O MAS FACTURAS','PAGOS CON UNA SOLA FACTURA']; ?>
<td style="text-align:center; background:<?php
    if(strlen($row['UUID']) < 1 && !in_array($row['VIATICOSOPRO'], $excluirViaticos)) {
        if($row["STATUS_CHECKBOX"]=='si') {
            echo '#ceffcc';
        } else {
            echo '#e9d8ee';
        }
    } elseif(strlen($row['UUID']) < 1 && in_array($row['VIATICOSOPRO'], $excluirViaticos)) {
        echo '#ceffcc';
    } else {
        echo '#f0f0f0';
    }
?>" id="color_CHECKBOX<?php echo $row["02SUBETUFACTURAid"]; ?>">
    <span id="buscanumero<?php echo $row["02SUBETUFACTURAid"]; ?>">
        <?php if(strlen($row['UUID']) < 1 && !in_array($row['VIATICOSOPRO'], $excluirViaticos)): ?>
            <?php
            // Verificar permiso de modificación
            $permiso_modificar = $database->variablespermisos('','PAGOS_QUITARPP','modificar') == 'si';
            $disabled = ($row["STATUS_CHECKBOX"] == 'si' && !$permiso_modificar) ? 'disabled' : '';
            ?>

<input type="checkbox" style="width:30PX;" class="form-check-input"
    id="STATUS_CHECKBOX<?php echo $row["02SUBETUFACTURAid"]; ?>"
    name="STATUS_CHECKBOX<?php echo $row["02SUBETUFacturaid"]; ?>"
    value="<?php echo $row["02SUBETUFACTURAid"]; ?>"
    onclick="STATUS_CHECKBOX(<?php echo $row['02SUBETUFACTURAid']; ?>, <?php echo $permiso_modificar ? 'true' : 'false'; ?>)"
    <?php if($row["STATUS_CHECKBOX"]=='si') echo "checked"; ?>
    <?php echo $disabled; ?>
/>
        <?php elseif(strlen($row['UUID']) >= 1): ?>
            <span style="color:#999;">CON XML </span>
        <?php else: ?>
            <span style="font-weight:bold; color:#000;"><?php echo $row['NUMERO_CONSECUTIVO_PROVEE']; ?></span>
        <?php endif; ?>
    </span>
</td>
<?php } ?>
		
		
		
		

     <td>
<?php
$VIATICOSOPRO = isset($row['VIATICOSOPRO']) ? $row['VIATICOSOPRO'] : '';

if ($VIATICOSOPRO == "VIATICOS") : ?>
    <a href="viaticos.php?num_evento=<?php echo urlencode($row['NUMERO_EVENTO']); ?>&ID_RELACIONADO=<?php echo urlencode($row['NUMERO_CONSECUTIVO_PROVEE']); ?>&NUMERO_CONSECUTIVO_PROVEE=<?php echo urlencode($row['NUMERO_CONSECUTIVO_PROVEE']); ?>"
       target="_blank" rel="noopener noreferrer">
        <button style="text-align:center;width:160px" class="btn btn-info btn-xs" type="button">
            VIÁTICOS
        </button>
    </a>
<?php endif; ?>
   
	<?php
$VIATICOSOPRO = isset($row['VIATICOSOPRO'])?$row['VIATICOSOPRO']:'' ;
 if ($VIATICOSOPRO == "REEMBOLSO") : ?>
        <a href="reembolsos.php?num_evento=<?php echo urlencode($row['NUMERO_EVENTO']); ?>&ID_RELACIONADO=<?php echo urlencode($row['NUMERO_CONSECUTIVO_PROVEE']); ?>&NUMERO_CONSECUTIVO_PROVEE=<?php echo urlencode($row['NUMERO_CONSECUTIVO_PROVEE']); ?>"       target="_blank" rel="noopener noreferrer">
        <button style="text-align:center;width:160px" class="btn btn-info btn-xs" type="button">
                REEMBOLSO
            </button>
        </a>
		<?php endif; ?>
	<?php
$VIATICOSOPRO = isset($row['VIATICOSOPRO'])?$row['VIATICOSOPRO']:'' ;
 if ($VIATICOSOPRO == "PAGO A PROVEEDOR CON DOS O MAS FACTURAS") : ?>
        <a href="PAGOPROVEEDOR4.php?num_evento=<?php echo urlencode($row['NUMERO_EVENTO']); ?>&ID_RELACIONADO=<?php echo urlencode($row['NUMERO_CONSECUTIVO_PROVEE']); ?>&NUMERO_CONSECUTIVO_PROVEE=<?php echo urlencode($row['NUMERO_CONSECUTIVO_PROVEE']); ?>"       target="_blank" rel="noopener noreferrer">
        <button style="text-align:center;width:160px" class="btn btn-info btn-xs" type="button">
                PAGO PROVEEDOR
            </button>
        </a>
		<?php endif; ?>
    </td>		
		
		
		
		
		




<?php /*termina copiar y terminaA5*/ ?>
<td>
<?php if($database->variablespermisos('','PAGOS_EGRESOSPP','modificar')=='si'){ ?>

<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["02SUBETUFACTURAid"]; ?>" class="btn btn-info btn-xs view_datamodifica" /><?php } ?>

	<?php
$VIATICOSOPRO = isset($row['VIATICOSOPRO'])?$row['VIATICOSOPRO']:'' ;
 if ($VIATICOSOPRO == "PAGO A PROVEEDOR") : ?>
<?php if($database->variablespermisos('','CALE_SUBE_PAGOVYO','ver')=='si'){ ?>
<input type="button" name="view" value="SUBIR FACTURA" id="<?php echo $row["02SUBETUFACTURAid"]; ?>" class="btn btn-info btn-xs view_dataSUBIRF" /><?php } ?>
<?php endif; ?>

</td>
<td><?php if($database->variablespermisos('','PAGOS_EGRESOSPP','borrar')=='si'){ ?>


<input type="button" name="view2" value="BORRAR" id="<?php echo $row["02SUBETUFACTURAid"]; ?>" class="btn btn-info btn-xs view_dataSBborrarGO" />
<?php } ?></td>			
		</tr>
			<?php
			$finales++;
		}	
	?>

<tr>

<?php if($totales == 'si'){ ?>
<td style="text-align:right; padding-right:45px;" colspan="<?php echo $colspan + 2; ?>" ><strong style="font-size:16px">TOTALES</strong></td>
<?php } ?>

<?php 
$PENDIENTE_PAGO12_total = $MONTO_TOTAL_COTIZACION_ADEUDO12 - $MONTO_DEPOSITADO12;

if($database->plantilla_filtro($nombreTabla,"MONTO_TOTAL_COTIZACION_ADEUDO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($MONTO_TOTAL_COTIZACION_ADEUDO12,2,'.',','); ?></strong></td>
<?php } ?>

<?php if($database->plantilla_filtro($nombreTabla,"MONTO_FACTURA",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($MONTO_FACTURA12,2,'.',','); ?></strong></td>
<?php } ?>
<?php if($database->plantilla_filtro($nombreTabla,"IVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($IVA12,2,'.',','); ?></strong></td>
<?php } ?>

<?php if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosIVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($TImpuestosRetenidosIVA12,2,'.',','); ?></strong></td>
<?php } ?>
<?php if($database->plantilla_filtro($nombreTabla,"TImpuestosRetenidosISR",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($TImpuestosRetenidosISR12,2,'.',','); ?></strong></td>
<?php } ?>


<?php if($database->plantilla_filtro($nombreTabla,"MONTO_PROPINA",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php  echo number_format($MONTO_PROPINA12,2,'.',','); ?></strong></td>
<?php } ?>
<?php if($database->plantilla_filtro($nombreTabla,"IMPUESTO_HOSPEDAJE",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php  echo number_format($IMPUESTO_HOSPEDAJE12,2,'.',','); ?></strong></td>
<?php } ?>

<?php if($database->plantilla_filtro($nombreTabla,"descuentos",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php  echo number_format($descuentos12,2,'.',','); ?></strong></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITAR",$altaeventos,$DEPARTAMENTO)=="si"){  ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($MONTO_DEPOSITAR12,2,'.',','); ?></strong></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_DEPOSITADO",$altaeventos,$DEPARTAMENTO)=="si"){  ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($MONTO_DEPOSITADO12,2,'.',','); ?></strong></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"PENDIENTE_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){  ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($PENDIENTE_PAGO12_total,2,'.',','); ?></strong></td>
<?php } ?>




</tr>		

<tr>


<?php if($totales2 == 'si'){ ?>
<td style="text-align:right; padding-right:45px;" colspan="<?php echo $colspan2 + 2; ?>"><strong style="font-size:16px">TOTAL TOTAL CON Y SIN XML</strong></td>
<?php } ?>



<?php if($database->plantilla_filtro($nombreTabla,"SUBTOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($subTotal12,2,'.',','); ?></strong></td>
<?php } ?>

<?php if($database->plantilla_filtro($nombreTabla,"propina",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$ <?php echo number_format($propina12,2,'.',','); ?></strong></td>
<?php } ?>

<?php if($database->plantilla_filtro($nombreTabla,"DESCUENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($Descuento12,2,'.',','); ?></strong></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_TRASLADADOS",$altaeventos,$DEPARTAMENTO)=="si"){  ?>
<td style="text-align:center" ><strong style="font-size:16px" >$<?php echo number_format($TImpuestosTrasladados12,2,'.',','); ?></strong></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"TOTAL_IMPUESTOS_RETENIDOS",$altaeventos,$DEPARTAMENTO)=="si"){  ?>
<td style="text-align:center" ><strong style="font-size:16px" >$<?php echo number_format($TImpuestosRetenidos12,2,'.',','); ?></strong></td>
<?php } ?>



<td style="text-align:center" ><strong style="font-size:16px" >$<?php echo number_format($TUA12,2,'.',','); ?></strong></td>

<?php  if($database->plantilla_filtro($nombreTabla,"total",$altaeventos,$DEPARTAMENTO)=="si"){  ?>
<td style="text-align:center" ><strong style="font-size:16px" >$<?php echo number_format($totalf12,2,'.',','); ?></strong></td>
<?php } ?>

<td style="text-align:center" ><strong style="font-size:16px" id="totalCalculado">$<?php echo number_format($PorfaltaDeFactura12,2,'.',','); ?></strong></td>

<?php $_SESSION['PorfaltaDeFactura12'] = $PorfaltaDeFactura12; ?>

</tr>

<tr>


<?php if($totales2 == 'si'){ ?>
<td style="text-align:right; padding-right:45px;" colspan="<?php echo $colspan2 + 2; ?>"><strong style="font-size:16px;COLOR:#C70039">TOTAL SOLO CON XML</strong></td>
<?php } ?>



<?php if($database->plantilla_filtro($nombreTabla,"SUBTOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<style>
  .celda-total {
      text-align: center;
      background: #eef6ff;
      padding: 12px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      font-size: 18px;
      font-weight: bold;
      color: #1a5276;
      font-family: "Segoe UI", Arial, sans-serif;
      transition: transform 0.2s ease;
  }
  .celda-total:hover {
      transform: scale(1.05);
      background: #d6eaff;
  }
</style>

<td class="celda-total">
   $<?php echo number_format(($subTotalCIERRE + $subTotalCIERRE2), 2, '.', ','); ?>
</td>
<?php } ?>
<?php if($database->plantilla_filtro($nombreTabla,"propina",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<td class="celda-total"><strong>$ <?php echo number_format($propina123,2,'.',','); ?></strong></td>
<?php } ?>












</tr>	

<tr>


<?php if($totales2 == 'si'){ ?>
<td style="text-align:right; padding-right:45px;" colspan="<?php echo $colspan2 + 2; ?>"><strong style="font-size:16px;COLOR:#C70039">TOTAL XML CON DESCUENTO</strong></td>
<?php } ?>



<?php if($database->plantilla_filtro($nombreTabla,"SUBTOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
<style>
  .celda-total {
      text-align: center;
      background: #FCC6BB;
      padding: 12px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      font-size: 18px;
      font-weight: bold;
      color: #1a5276;
      font-family: "Segoe UI", Arial, sans-serif;
      transition: transform 0.2s ease;
  }
  .celda-total:hover {
      transform: scale(1.05);
      background:#FCC6BB;
  }
</style>

<td class="celda-total">
   $<?php echo number_format(($subTotalCIERRE + $subTotalCIERRE2 - $Descuento12), 2, '.', ','); ?>
</td>


<?php } ?>











</tr>

                </tbody>
            </table>
        </div>
        <div class="clearfix">
            <?php
            $inicios = $offset + 1;
            $finales += $inicios - 1;
            echo '<div class="hint-text">Mostrando ' . $inicios . ' al ' . $finales . ' de ' . $numrows . ' registros</div>';
            echo $pagination->paginate();
            ?>
        </div>
    <?php
    }
}
?>
