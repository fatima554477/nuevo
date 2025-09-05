<?php
/**
 	--------------------------
	Autor: Sandor Matamoros
	Programer: Fatima Arellano
	Propietario: EPC
	----------------------------
 
*/

define("__ROOT1__", dirname(dirname(__FILE__)));
	include_once (__ROOT1__."/../includes/error_reporting.php");
	include_once (__ROOT1__."/../pagoproveedores/class.epcinnPP.php");

	
	class orders extends accesoclase {
	public $mysqli;
	public $counter;//Propiedad para almacenar el numero de registro devueltos por la consulta

	function __construct(){
		$this->mysqli = $this->db();
    }
	
	public function countAll($sql){
		$query=$this->mysqli->query($sql);
		$count=$query->num_rows;
		return $count;
	}
	//STATUS_EVENTO,NOMBRE_CORTO_EVENTO,NOMBRE_EVENTO
	public function getData($tables3,$campos,$search){
		
		$ROWevento = $this->var_altaeventos();
		
		$NUMERO_EVENTO = isset($ROWevento["NUMERO_EVENTO"])?$ROWevento["NUMERO_EVENTO"]:"";
		
		$offset=$search['offset'];
		$per_page=$search['per_page'];
		$tables = '02SUBETUFACTURA';
		$tables2 = '02XML';		
		//$sWhereCC ="  02XML.`idRelacion` = 02SUBETUFACTURA.id AND ";
		$sWhereCC =" ON 02SUBETUFACTURA.id = 02XML.`ultimo_id` ";
		$sWhere2="";$sWhere3="";
		
		if($search['NUMERO_CONSECUTIVO_PROVEE']!=""){
$sWhere2.="  $tables.NUMERO_CONSECUTIVO_PROVEE LIKE '%".$search['NUMERO_CONSECUTIVO_PROVEE']."%' and ";}


if($search['ID_RELACIONADO']!=""){
$sWhere2.="  $tables.ID_RELACIONADO LIKE '%".$search['ID_RELACIONADO']."%' and ";}


if($search['NOMBRE_COMERCIAL']!=""){
$sWhere2.="  $tables.NOMBRE_COMERCIAL LIKE '%".$search['NOMBRE_COMERCIAL']."%' and ";}
if($search['RAZON_SOCIAL']!=""){
$sWhere2.="  $tables.RAZON_SOCIAL LIKE '%".$search['RAZON_SOCIAL']."%' and ";}
if($search['RFC_PROVEEDOR']!=""){
$sWhere2.="  $tables.RFC_PROVEEDOR = '".$search['RFC_PROVEEDOR']."' and ";}
if($search['NUMERO_EVENTO']!=""){
$sWhere2.="  $tables.NUMERO_EVENTO LIKE '%".$search['NUMERO_EVENTO']."%' and ";}
if($search['NOMBRE_EVENTO']!=""){
$sWhere2.="  $tables.NOMBRE_EVENTO LIKE '%".$search['NOMBRE_EVENTO']."%' and ";}
if($search['MOTIVO_GASTO']!=""){
$sWhere2.="  $tables.MOTIVO_GASTO LIKE '%".$search['MOTIVO_GASTO']."%' and ";}
if($search['CONCEPTO_PROVEE']!=""){
$sWhere2.="  $tables.CONCEPTO_PROVEE LIKE '%".$search['CONCEPTO_PROVEE']."%' and ";}
if($search['MONTO_TOTAL_COTIZACION_ADEUDO']!=""){
$sWhere2.="  $tables.MONTO_TOTAL_COTIZACION_ADEUDO LIKE '%".$search['MONTO_TOTAL_COTIZACION_ADEUDO']."%' and ";}

if($search['MONTO_FACTURA']!=""){
$MONTO_FACTURA = str_replace(',','',str_replace('$','',$search['MONTO_FACTURA']));
$sWhere2.="  $tables.MONTO_FACTURA LIKE '%".$MONTO_FACTURA."%' and ";}

if($search['MONTO_PROPINA']!=""){
$MONTO_PROPINA = str_replace(',','',str_replace('$','',$search['MONTO_PROPINA']));
$sWhere2.="  $tables.MONTO_PROPINA LIKE '%".$MONTO_PROPINA ."%' and ";}

if($search['MONTO_DEPOSITAR']!=""){
$MONTO_DEPOSITAR = str_replace(',','',str_replace('$','',$search['MONTO_DEPOSITAR']));
$sWhere2.="  $tables.MONTO_DEPOSITAR LIKE '%".$MONTO_DEPOSITAR."%' and ";
}


if($search['MONTO_DEPOSITADO']!=""){
$MONTO_DEPOSITADO = str_replace(',','',str_replace('$','',$search['MONTO_DEPOSITADO']));	
$sWhere2.="  $tables.MONTO_DEPOSITADO LIKE '%".$search['MONTO_DEPOSITADO']."%' and ";}


if($search['TIPO_DE_MONEDA']!=""){
$sWhere2.="  $tables.TIPO_DE_MONEDA LIKE '%".$search['TIPO_DE_MONEDA']."%' and ";}
if($search['PFORMADE_PAGO']!=""){
$sWhere2.="  $tables.PFORMADE_PAGO LIKE '%".$search['PFORMADE_PAGO']."%' and ";}
if($search['FECHA_DE_PAGO']!=""){
$sWhere2.="  $tables.FECHA_DE_PAGO LIKE '%".$search['FECHA_DE_PAGO']."%' and ";}
if($search['FECHA_A_DEPOSITAR']!=""){
$sWhere2.="  $tables.FECHA_A_DEPOSITAR LIKE '%".$search['FECHA_A_DEPOSITAR']."%' and ";}
if($search['STATUS_DE_PAGO']!=""){
$sWhere2.="  $tables.STATUS_DE_PAGO LIKE '%".$search['STATUS_DE_PAGO']."%' and ";}
if($search['ACTIVO_FIJO']!=""){
$sWhere2.="  $tables.ACTIVO_FIJO LIKE '%".$search['ACTIVO_FIJO']."%' and ";}
if($search['GASTO_FIJO']!=""){
$sWhere2.="  $tables.GASTO_FIJO LIKE '%".$search['GASTO_FIJO']."%' and ";}
if($search['PAGAR_CADA']!=""){
$sWhere2.="  $tables.PAGAR_CADA LIKE '%".$search['PAGAR_CADA']."%' and ";}
if($search['FECHA_PPAGO']!=""){
$sWhere2.="  $tables.FECHA_PPAGO LIKE '%".$search['FECHA_PPAGO']."%' and ";}
if($search['FECHA_TPROGRAPAGO']!=""){
$sWhere2.="  $tables.FECHA_TPROGRAPAGO LIKE '%".$search['FECHA_TPROGRAPAGO']."%' and ";}
if($search['NUMERO_EVENTOFIJO']!=""){
$sWhere2.="  $tables.NUMERO_EVENTOFIJO LIKE '%".$search['NUMERO_EVENTOFIJO']."%' and ";}
if($search['CLASI_GENERAL']!=""){
$sWhere2.="  $tables.CLASI_GENERAL LIKE '%".$search['CLASI_GENERAL']."%' and ";}
if($search['SUB_GENERAL']!=""){
$sWhere2.="  $tables.SUB_GENERAL LIKE '%".$search['SUB_GENERAL']."%' and ";}
if($search['NUMERO_EVENTO1']!=""){
$sWhere2.="  $tables.NUMERO_EVENTO1 = '".$search['NUMERO_EVENTO1']."' and ";}
if($search['CLASIFICACION_GENERAL']!=""){
$sWhere2.="  $tables.CLASIFICACION_GENERAL LIKE '%".$search['CLASIFICACION_GENERAL']."%' and ";}
if($search['CLASIFICACION_ESPECIFICA']!=""){
$sWhere2.="  $tables.CLASIFICACION_ESPECIFICA LIKE '%".$search['CLASIFICACION_ESPECIFICA']."%' and ";}
if($search['PLACAS_VEHICULO']!=""){
$sWhere2.="  $tables.PLACAS_VEHICULO LIKE '%".$search['PLACAS_VEHICULO']."%' and ";}
if($search['MONTO_DE_COMISION']!=""){
$sWhere2.="  $tables.MONTO_DE_COMISION = '".$search['MONTO_DE_COMISION']."' and ";}
if($search['POLIZA_NUMERO']!=""){
$sWhere2.="  $tables.POLIZA_NUMERO LIKE '%".$search['POLIZA_NUMERO']."%' and ";}
if($search['NOMBRE_DEL_EJECUTIVO']!=""){
$sWhere2.="  $tables.NOMBRE_DEL_EJECUTIVO LIKE '%".$search['NOMBRE_DEL_EJECUTIVO']."%' and ";}
if($search['OBSERVACIONES_1']!=""){
$sWhere2.="  $tables.OBSERVACIONES_1 LIKE '%".$search['OBSERVACIONES_1']."%' and ";}
if($search['FECHA_DE_LLENADO']!=""){
$sWhere2.="  $tables.FECHA_DE_LLENADO LIKE '%".$search['FECHA_DE_LLENADO']."%' and ";}
if($search['hiddenpagoproveedores']!=""){
$sWhere2.="  $tables.hiddenpagoproveedores LIKE '%".$search['hiddenpagoproveedores']."%' and ";}

if($search['IVA']!=""){
$IVA = str_replace(',','',str_replace('$','',$search['IVA']));	
$sWhere2.="  $tables.IVA LIKE '%".$search['IVA']."%' and ";}

if($search['ID_RELACIONADO']!=""){
$ID_RELACIONADO = str_replace(',','',str_replace('$','',$search['ID_RELACIONADO']));	
$sWhere2.="  $tables.ID_RELACIONADO LIKE '%".$search['ID_RELACIONADO']."%' and ";}
if($search['TImpuestosRetenidosIVA']!=""){
$sWhere2.="  $tables.TImpuestosRetenidosIVA LIKE '%".$search['TImpuestosRetenidosIVA']."%' OR ";}

if($search['TImpuestosRetenidosISR']!=""){
$sWhere2.="  $tables.TImpuestosRetenidosISR LIKE '%".$search['TImpuestosRetenidosISR']."%' OR ";}


if($search['descuentos']!=""){
$sWhere2.="  $tables.descuentos LIKE '%".$search['descuentos']."%' OR ";}



if($search['UUID']!=""){
$sWhere2.="  $tables2.UUID = '".$search['UUID']."' and ";}

if($search['metodoDePago']!=""){
$sWhere2.="  $tables2.metodoDePago = '".$search['metodoDePago']."' and ";}

if($search['totalf']!=""){
$totalf = str_replace(',','',str_replace('$','',$search['totalf']));
$sWhere2.="  $tables2.totalf = '".$totalf."' and ";}

if($search['serie']!=""){
$sWhere2.="  $tables2.serie = '".$search['serie']."' and ";}

if($search['folio']!=""){
$sWhere2.="  $tables2.folio = '".$search['folio']."' and ";}

if($search['regimenE']!=""){
$sWhere2.="  $tables2.regimenE = '".$search['regimenE']."' and ";}

if($search['UsoCFDI']!=""){
$sWhere2.="  $tables2.UsoCFDI = '".$search['UsoCFDI']."' and ";}

if($search['TImpuestosTrasladados']!=""){
$TImpuestosTrasladados = str_replace(',','',str_replace('$','',$search['TImpuestosTrasladados']));
$sWhere2.="  $tables2.TImpuestosTrasladados = ".$TImpuestosTrasladados." and ";}

if($search['TImpuestosRetenidos']!=""){
$TImpuestosRetenidos = str_replace(',','',str_replace('$','',$search['TImpuestosRetenidos']));
$sWhere2.="  $tables2.TImpuestosRetenidos = ".$TImpuestosRetenidos." and ";}

if($search['Version']!=""){
$sWhere2.="  $tables2.Version = '".$search['Version']."' and ";}

if($search['tipoDeComprobante']!=""){
$sWhere2.="  $tables2.tipoDeComprobante = '".$search['tipoDeComprobante']."' and ";}

if($search['condicionesDePago']!=""){
$sWhere2.="  $tables2.condicionesDePago = '".$search['condicionesDePago']."' and ";}

if($search['fechaTimbrado']!=""){
$sWhere2.="  $tables2.fechaTimbrado = '".$search['fechaTimbrado']."' and ";}

if($search['nombreR']!=""){
$sWhere2.="  $tables2.nombreR = '".$search['nombreR']."' and ";}

if($search['rfcR']!=""){
$sWhere2.="  $tables2.rfcR = '".$search['rfcR']."' and ";}

if($search['Moneda']!=""){
$sWhere2.="  $tables2.Moneda = '".$search['Moneda']."' and ";}

if($search['TipoCambio']!=""){
$sWhere2.="  $tables2.TipoCambio = '".$search['TipoCambio']."' and ";}

if($search['ValorUnitarioConcepto']!=""){
$sWhere2.="  $tables2.ValorUnitarioConcepto = '".$search['ValorUnitarioConcepto']."' and ";}

if($search['DescripcionConcepto']!=""){
$sWhere2.="  $tables2.DescripcionConcepto like '%".$search['DescripcionConcepto']."%' and ";}

if($search['ClaveUnidadConcepto']!=""){
$sWhere2.="  $tables2.ClaveUnidadConcepto like '%".$search['ClaveUnidadConcepto']."%' and ";}

if($search['ClaveProdServConcepto']!=""){
$sWhere2.="  $tables2.ClaveProdServConcepto = '".$search['ClaveProdServConcepto']."' and ";}

if($search['RFC_RECEPTOR']!=""){
$sWhere2.="  $tables2.RFC_RECEPTOR = '".$search['RFC_RECEPTOR']."' and ";}

if($search['CantidadConcepto']!=""){
$sWhere2.="  $tables2.CantidadConcepto = '".$search['CantidadConcepto']."' and ";}

if($search['ImporteConcepto']!=""){
$sWhere2.="  $tables2.ImporteConcepto = '".$search['ImporteConcepto']."' and ";}

if($search['UnidadConcepto']!=""){
$sWhere2.="  $tables2.UnidadConcepto = '".$search['UnidadConcepto']."' and ";}

if($search['TUA']!=""){
	$TUA = str_replace(',','',str_replace('$','',$search['TUA']));
$sWhere2.="  $tables2.TUA = '".$TUA."' and ";}

if($search['TuaTotalCargos']!=""){
	$TuaTotalCargos = str_replace(',','',str_replace('$','',$search['TuaTotalCargos']));
$sWhere2.="  $tables2.TuaTotalCargos = '".$TuaTotalCargos."' and ";}

if($search['Descuento']!=""){
	$Descuento = str_replace(',','',str_replace('$','',$search['Descuento']));
$sWhere2.="  $tables2.Descuento = '".$Descuento."' and ";}

if($search['subTotal']!=""){
	$subTotal = str_replace(',','',str_replace('$','',$search['subTotal']));
$sWhere2.="  $tables2.subTotal = '".$subTotal."' and ";}


//print_r($search); RFC_RECEPTOR
IF($sWhere2!=""){
			$sWhere22 = substr($sWhere2,0,-4);
			$sWhere33  = ' ('.$sWhere22.') ';
			$sWhere3  = ' '.$sWhereCC.' where (
			 02SUBETUFACTURA.NUMERO_EVENTO = "'.$NUMERO_EVENTO.'" AND (02SUBETUFACTURA.ID_RELACIONADO IS NULL OR TRIM(02SUBETUFACTURA.ID_RELACIONADO) = "")) ';			
		}ELSE{
			//$sWhereCC = substr($sWhereCC,0,-4);			
		$sWhere3  = ' '.$sWhereCC.'  where ( 02SUBETUFACTURA.NUMERO_EVENTO = "'.$NUMERO_EVENTO.'" AND (02SUBETUFACTURA.ID_RELACIONADO IS NULL OR TRIM(02SUBETUFACTURA.ID_RELACIONADO) = ""))  ';
		}





		$sWhere3campo ="";
if($search['RAZON_SOCIAL_orden']=="asc"){
		$sWhere3campo .=" $tables.RAZON_SOCIAL asc, ";
}
if($search['RAZON_SOCIAL_orden']=="desc"){
		$sWhere3campo.=" $tables.RAZON_SOCIAL desc, ";
}
if($search['RFC_PROVEEDOR_orden']=="asc"){
		$sWhere3campo .=" $tables.RFC_PROVEEDOR asc, ";
}
if($search['RFC_PROVEEDOR_orden']=="desc"){
		$sWhere3campo.=" $tables.RFC_PROVEEDOR desc, ";
}

if($search['MONTO_FACTURA_orden']=="desc"){
		$sWhere3campo.=" $tables.MONTO_FACTURA desc, ";
}
if($search['MONTO_FACTURA_orden']=="asc"){
		$sWhere3campo.=" $tables.MONTO_FACTURA asc, ";
}

if($search['FECHA_DE_PAGO_orden']=="desc"){
		$sWhere3campo.=" $tables.FECHA_DE_PAGO desc, ";
}
if($search['FECHA_DE_PAGO_orden']=="asc"){
		$sWhere3campo.=" $tables.FECHA_DE_PAGO asc, ";
}
if($search['NUMERO_EVENTO_orden']=="desc"){
		$sWhere3campo.=" $tables.NUMERO_EVENTO desc, ";
}
if($search['NUMERO_EVENTO_orden']=="asc"){
		$sWhere3campo.=" $tables.NUMERO_EVENTO asc, ";
}
if($sWhere3campo == ""){
		$sWhere3campo.="RFC_PROVEEDOR ,  $tables.id desc ";		
}else{
		$sWhere3campo = substr($sWhere3campo,0,-2);
}






$sWhere3 .= " order by ".$sWhere3campo;

		$sql="SELECT $campos , 02SUBETUFACTURA.id as 02SUBETUFACTURAid FROM $tables LEFT JOIN $tables2 $sWhere $sWhere3 LIMIT $offset,$per_page";
		
		$query=$this->mysqli->query($sql);
		$sql1="SELECT $campos , 02SUBETUFACTURA.id as 02SUBETUFACTURAid FROM  $tables LEFT JOIN $tables2 $sWhere $sWhere3 ";
		$nums_row=$this->countAll($sql1); 
		//Set counter
		$this->setCounter($nums_row);
		return $query;
	}
	
	public function getTotalAmaunt($rfc,$idrelacioN=false){
		//PRINT_R($idrelacioN);
		foreach($idrelacioN as $etiqueta => $valor){
			FOREACH( $valor AS $etiqueta2 => $valor2){
			$query_OR .= ' id = '. $valor2.' OR ';
			}
		}
		//ECHO $query_OR;

		$query_OR2 = substr($query_OR,0,-3);
		$ROWevento = $this->var_altaeventos();
		$conn = $this->db();		
		$NUMERO_EVENTO = isset($ROWevento["NUMERO_EVENTO"])?$ROWevento["NUMERO_EVENTO"]:"";

		$sWhere3  = ' where ( 02SUBETUFACTURA.NUMERO_EVENTO = "'.$NUMERO_EVENTO.'") and RFC_PROVEEDOR = "'.$rfc.'"  ';
		echo $sql1="SELECT sum(MONTO_TOTAL_COTIZACION_ADEUDO - MONTO_DEPOSITADO) as MONTO_TOTAL_COTIZACION_ADEUDO1 FROM  02SUBETUFACTURA ".$sWhere3." and (".$query_OR2.") ";
		$query = mysqli_query($conn,$sql1);
		$fetch_arrary = mysqli_fetch_array($query);
		return $fetch_arrary['MONTO_TOTAL_COTIZACION_ADEUDO1'];
	}
	
	public function ingresarTemproal($RFC_PROVEEDOR,$MONTO_TOTAL_COTIZACION_ADEUDO,$MONTO_DEPOSITADO,$idRelacion){
	$connn=$this->db();
	$queryTemporal = 'insert into 02temporalEstadoCuenta (RFC_PROVEEDOR ,MONTO_TOTAL_COTIZACION_ADEUDO, MONTO_DEPOSITADO, idRelacion)values("'.$RFC_PROVEEDOR.'","'.$MONTO_TOTAL_COTIZACION_ADEUDO.'","'.$MONTO_DEPOSITADO.'","'.$idRelacion.'");';
	mysqli_query($connn,$queryTemporal);	
	}		
	
	public function TruncateingresarTemproal(){
	$connn=$this->db();
	$queryTemporal = 'truncate table 02temporalEstadoCuenta;';
	mysqli_query($connn,$queryTemporal);	
	}


	public function getTotalAmaunt2($rfc){

		$query_OR2 = substr($query_OR,0,-3);
		$conn = $this->db();		

		$sWhere3  = ' where RFC_PROVEEDOR = "'.$rfc.'"  ';
		$sql1="SELECT sum(MONTO_TOTAL_COTIZACION_ADEUDO - MONTO_DEPOSITADO) as MONTO_TOTAL_COTIZACION_ADEUDO1 FROM  02temporalEstadoCuenta ".$sWhere3." ";
		$query = mysqli_query($conn,$sql1);
		$fetch_arrary = mysqli_fetch_array($query);
		$fetch_arrary['MONTO_TOTAL_COTIZACION_ADEUDO1'];

		return $fetch_arrary['MONTO_TOTAL_COTIZACION_ADEUDO1'];

	}



	public function getTotalAmaunt2id($rfc,$idrelacioN,$idactual){
		//PRINT_R($idrelacioN);
		foreach($idrelacioN as $etiqueta => $valor){
			FOREACH( $valor AS $etiqueta2 => $valor2){
				if($idactual!=$valor2){
			$query_OR .= ' idRelacion = '. $valor2.' OR ';
				}
			}
		}

		if($query_OR != ''){
		$query_OR2 = substr($query_OR,0,-3);
		$query_OR3 = " and (".$query_OR2.") ";
		}ELSE{
			RETURN 0;
		}
		
		

		//$query_OR2 = substr($query_OR,0,-3);
		$conn = $this->db();		
		$sWhere3  = ' where RFC_PROVEEDOR = "'.$rfc.'"  ';
		$sql12="SELECT sum(MONTO_DEPOSITADO) as MONTO_DEPOSITADO1 FROM  02temporalEstadoCuenta ".$sWhere3.$query_OR3." ";
		
		$query2 = mysqli_query($conn,$sql12);
		$fetch_arrary2 = mysqli_fetch_array($query2);
		return $fetch_arrary2['MONTO_DEPOSITADO1'];

	}



public function diferenciaPorConsecutivo($NUMERO_CONSECUTIVO_PROVEE) {
    $NUMERO_CONSECUTIVO_PROVEE = $this->mysqli->real_escape_string($NUMERO_CONSECUTIVO_PROVEE);
    $NUMERO_CONSECUTIVO_PROVEE = (int)$NUMERO_CONSECUTIVO_PROVEE;
    $con = $this->db();

    // Inicializar variables
    $PorfaltaDeFactura = 0.0;
    $PorfaltaDeFacturaSUBERES = 0.0;

    $subTotalSUBETUFACTURA = 0.0;



    // 1) Con ID_RELACIONADO != '' (relacionadas)
    $VarSUBE = "SELECT subTotal, UUID, MONTO_DEPOSITAR, ID_RELACIONADO, STATUS_CHECKBOX,
                       MONTO_FACTURA, NUMERO_CONSECUTIVO_PROVEE
                FROM 02SUBETUFACTURA
                LEFT JOIN 02XML ON 02SUBETUFACTURA.id = 02XML.`ultimo_id`
                WHERE 02SUBETUFACTURA.NUMERO_CONSECUTIVO_PROVEE = '$NUMERO_CONSECUTIVO_PROVEE'
                  AND 02SUBETUFACTURA.VIATICOSOPRO IN ('REEMBOLSO','VIATICOS',
                      'PAGO A PROVEEDOR CON DOS O MAS FACTURAS','PAGOS CON UNA SOLA FACTURA')
                  AND (02SUBETUFACTURA.ID_RELACIONADO IS NOT NULL
                       AND TRIM(02SUBETUFACTURA.ID_RELACIONADO) <> '')";

    $QUERYSUBE = mysqli_query($con, $VarSUBE);
    while ($ROWe = mysqli_fetch_array($QUERYSUBE)) {

        if ($ROWe['STATUS_CHECKBOX'] == 'no' && strlen(trim($ROWe['UUID'])) < 1) {
            $PorfaltaDeFactura += (float)$ROWe['MONTO_DEPOSITAR'] * 1.46;
        } else {
            if (isset($ROWe['subTotal']) && is_numeric($ROWe['subTotal']) && $ROWe['subTotal'] > 0) {
                $subTotalSUBETUFACTURA += (float)$ROWe['subTotal'];
            } else {
                $subTotalSUBETUFACTURA += (float)$ROWe['MONTO_FACTURA'];
            }
        }
    }
	
	
    $NUMERO_CONSECUTIVO_PROVEE = $this->mysqli->real_escape_string($NUMERO_CONSECUTIVO_PROVEE);
    $NUMERO_CONSECUTIVO_PROVEE = (int)$NUMERO_CONSECUTIVO_PROVEE;
    $con = $this->db();

    $VarSUBERES = "
        SELECT 
            MAX(STATUS_CHECKBOX) AS STATUS_CHECKBOX,
            MAX(UUID) AS UUID,
            SUM(CASE WHEN ID_RELACIONADO IS NULL OR TRIM(ID_RELACIONADO) = ''
                     THEN MONTO_DEPOSITAR ELSE 0 END) AS sin_relacion,
            SUM(CASE WHEN ID_RELACIONADO IS NOT NULL AND TRIM(ID_RELACIONADO) <> ''
                     THEN MONTO_DEPOSITAR ELSE 0 END) AS con_relacion
        FROM 02SUBETUFACTURA
        LEFT JOIN 02XML ON 02SUBETUFACTURA.id = 02XML.`ultimo_id`
        WHERE NUMERO_CONSECUTIVO_PROVEE = '$NUMERO_CONSECUTIVO_PROVEE'
          AND VIATICOSOPRO IN ('VIATICOS','REEMBOLSO',
                               'PAGO A PROVEEDOR CON DOS O MAS FACTURAS',
                               'PAGOS CON UNA SOLA FACTURA')";

    $QUERYSUBERES = mysqli_query($con, $VarSUBERES);

    // Obtenemos el registro de la consulta o valores por defecto
    $ROWeR = $QUERYSUBERES ? mysqli_fetch_assoc($QUERYSUBERES)
                           : ['sin_relacion' => 0, 'con_relacion' => 0, 'UUID' => '', 'STATUS_CHECKBOX' => null];

    $sin_relacion = (float) $ROWeR['sin_relacion'];
    $con_relacion = (float) $ROWeR['con_relacion'];

    if (
        strlen(trim($ROWeR['UUID'])) < 1 &&
        isset($ROWeR['STATUS_CHECKBOX']) && $ROWeR['STATUS_CHECKBOX'] === 'no'
    ) {
        $PorfaltaDeFacturaSUBERES = ($sin_relacion - $con_relacion) * 1.46;
    } else {
        $PorfaltaDeFacturaSUBERES = $sin_relacion - $con_relacion; // o el valor que corresponda
    }

    return (float) ($PorfaltaDeFactura + $PorfaltaDeFacturaSUBERES);

}


	function setCounter($counter) {
		$this->counter = $counter;
	}
	function getCounter() {
		return $this->counter;
	}

}
?>
