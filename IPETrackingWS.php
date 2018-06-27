<?php

if (!class_exists("VerifyToken")) {
/**
 * VerifyToken
 */
class VerifyToken {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
}}

if (!class_exists("VerifyTokenResponse")) {
/**
 * VerifyTokenResponse
 */
class VerifyTokenResponse {
	/**
	 * @access public
	 * @var sboolean
	 */
	public $VerifyTokenResult;
}}

if (!class_exists("BuscarGuia")) {
/**
 * BuscarGuia
 */
class BuscarGuia {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sint
	 */
	public $agecod;
	/**
	 * @access public
	 * @var sstring
	 */
	public $tipfor;
	/**
	 * @access public
	 * @var sint
	 */
	public $guinro;
}}

if (!class_exists("BuscarGuiaResponse")) {
/**
 * BuscarGuiaResponse
 */
class BuscarGuiaResponse {
	/**
	 * @access public
	 * @var Tracking_Result
	 */
	public $BuscarGuiaResult;
}}

if (!class_exists("Tracking_Result")) {
/**
 * Tracking_Result
 */
class Tracking_Result {
	/**
	 * @access public
	 * @var EstadoHeader
	 */
	public $Estado;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Guia;
	/**
	 * @access public
	 * @var ArrayOfEvento
	 */
	public $Eventos;
}}

if (!class_exists("EstadoHeader")) {
/**
 * EstadoHeader
 */
class EstadoHeader {
	/**
	 * @access public
	 * @var sint
	 */
	public $Id;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Desc;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Extra;
}}

if (!class_exists("Evento")) {
/**
 * Evento
 */
class Evento {
	/**
	 * @access public
	 * @var sint
	 */
	public $AGEMOV;
	/**
	 * @access public
	 * @var sstring
	 */
	public $CODMV;
	/**
	 * @access public
	 * @var sstring
	 */
	public $CODMV_desc;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FECACT;
	/**
	 * @access public
	 * @var sstring
	 */
	public $HORACT;
	/**
	 * @access public
	 * @var sint
	 */
	public $EMPCOD;
	/**
	 * @access public
	 * @var sstring
	 */
	public $VIAFEC;
	/**
	 * @access public
	 * @var sstring
	 */
	public $VIAHOR;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NCOCHE;
	/**
	 * @access public
	 * @var sstring
	 */
	public $EMPNOM;
	/**
	 * @access public
	 * @var sstring
	 */
	public $AGEDES;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LOCMOV;
}}

if (!class_exists("BuscarGuiaCorpo")) {
/**
 * BuscarGuiaCorpo
 */
class BuscarGuiaCorpo {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sint
	 */
	public $cliente;
	/**
	 * @access public
	 * @var sstring
	 */
	public $id_interno;
}}

if (!class_exists("BuscarGuiaCorpoResponse")) {
/**
 * BuscarGuiaCorpoResponse
 */
class BuscarGuiaCorpoResponse {
	/**
	 * @access public
	 * @var Tracking_Result
	 */
	public $BuscarGuiaCorpoResult;
}}

if (!class_exists("V2_WEBBuscarProvincias")) {
/**
 * V2_WEBBuscarProvincias
 */
class V2_WEBBuscarProvincias {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
}}

if (!class_exists("V2_WEBBuscarProvinciasResponse")) {
/**
 * V2_WEBBuscarProvinciasResponse
 */
class V2_WEBBuscarProvinciasResponse {
	/**
	 * @access public
	 * @var Provincias
	 */
	public $V2_WEBBuscarProvinciasResult;
}}

if (!class_exists("Provincias")) {
/**
 * Provincias
 */
class Provincias {
	/**
	 * @access public
	 * @var ArrayOfProvincia
	 */
	public $IPEProvincias;
}}

if (!class_exists("Provincia")) {
/**
 * Provincia
 */
class Provincia {
	/**
	 * @access public
	 * @var sint
	 */
	public $CodigoProvincia;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NombreProvincia;
}}

if (!class_exists("V2_WEBBuscarLocalidades")) {
/**
 * V2_WEBBuscarLocalidades
 */
class V2_WEBBuscarLocalidades {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sint
	 */
	public $CodigoProvincia;
}}

if (!class_exists("V2_WEBBuscarLocalidadesResponse")) {
/**
 * V2_WEBBuscarLocalidadesResponse
 */
class V2_WEBBuscarLocalidadesResponse {
	/**
	 * @access public
	 * @var Localidades
	 */
	public $V2_WEBBuscarLocalidadesResult;
}}

if (!class_exists("Localidades")) {
/**
 * Localidades
 */
class Localidades {
	/**
	 * @access public
	 * @var ArrayOfLocalidad
	 */
	public $IPELocalidades;
}}

if (!class_exists("Localidad")) {
/**
 * Localidad
 */
class Localidad {
	/**
	 * @access public
	 * @var sint
	 */
	public $CodigoLocalidad;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NombreLocalidad;
}}

if (!class_exists("V2_WEBBuscarAgencias")) {
/**
 * V2_WEBBuscarAgencias
 */
class V2_WEBBuscarAgencias {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sint
	 */
	public $CodigoLocalidad;
}}

if (!class_exists("V2_WEBBuscarAgenciasResponse")) {
/**
 * V2_WEBBuscarAgenciasResponse
 */
class V2_WEBBuscarAgenciasResponse {
	/**
	 * @access public
	 * @var MAgencias
	 */
	public $V2_WEBBuscarAgenciasResult;
}}

if (!class_exists("MAgencias")) {
/**
 * MAgencias
 */
class MAgencias {
	/**
	 * @access public
	 * @var ArrayOfMAgencia
	 */
	public $IPEAgencias;
}}

if (!class_exists("MAgencia")) {
/**
 * MAgencia
 */
class MAgencia {
	/**
	 * @access public
	 * @var sint
	 */
	public $CodigoAgencia;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NombreAgencia;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Direccion;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $EntregaPaquetes;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $LatitudAgencia;
	/**
	 * @access public
	 * @var sdouble
	 */
	public $LongitudAgencia;
	/**
	 * @access public
	 * @var ArrayOfMHorario
	 */
	public $Horarios;
	/**
	 * @access public
	 * @var ArrayOfString
	 */
	public $Telefonos;
}}

if (!class_exists("MHorario")) {
/**
 * MHorario
 */
class MHorario {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Apertura;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Cierre;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Lunes;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Martes;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Miercoles;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Jueves;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Viernes;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Sabado;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Domingo;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $Feriados;
}}

if (!class_exists("BuscarGuiaSAIT")) {
/**
 * BuscarGuiaSAIT
 */
class BuscarGuiaSAIT {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sstring
	 */
	public $boca;
	/**
	 * @access public
	 * @var sstring
	 */
	public $letra;
	/**
	 * @access public
	 * @var sstring
	 */
	public $numero;
	/**
	 * @access public
	 * @var sboolean
	 */
	public $historial;
}}

if (!class_exists("BuscarGuiaSAITResponse")) {
/**
 * BuscarGuiaSAITResponse
 */
class BuscarGuiaSAITResponse {
	/**
	 * @access public
	 * @var TrackingData
	 */
	public $BuscarGuiaSAITResult;
}}

if (!class_exists("TrackingData")) {
/**
 * TrackingData
 */
class TrackingData {
	/**
	 * @access public
	 * @var Encabezado
	 */
	public $encabezado;
	/**
	 * @access public
	 * @var ArrayOfDelivery
	 */
	public $deliveries;
	/**
	 * @access public
	 * @var ArrayOfEstado
	 */
	public $estados;
}}

if (!class_exists("Encabezado")) {
/**
 * Encabezado
 */
class Encabezado {
	/**
	 * @access public
	 * @var sstring
	 */
	public $LugarDeEnvioOg;
	/**
	 * @access public
	 * @var sstring
	 */
	public $LugarDeRecepcionOg;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DenominacionRemitente;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DenominacionDestinatario;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Comprobante;
}}

if (!class_exists("Delivery")) {
/**
 * Delivery
 */
class Delivery {
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdDelivery;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Codigo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Categoria;
	/**
	 * @access public
	 * @var sstring
	 */
	public $EstAct;
	/**
	 * @access public
	 * @var sstring
	 */
	public $EstActDescripcion;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DescEstado;
	/**
	 * @access public
	 * @var sstring
	 */
	public $EstActFechaHora;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FechaIngreso;
}}

if (!class_exists("Estado")) {
/**
 * Estado
 */
class Estado {
	/**
	 * @access public
	 * @var sstring
	 */
	public $IdDelivery;
	/**
	 * @access public
	 * @var sstring
	 */
	public $FechaHora;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Estado_;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DescEstado;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Descripcion;
}}

if (!class_exists("IPEWEB_InfoProvinciasLocalidades")) {
/**
 * IPEWEB_InfoProvinciasLocalidades
 */
class IPEWEB_InfoProvinciasLocalidades {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
}}

if (!class_exists("IPEWEB_InfoProvinciasLocalidadesResponse")) {
/**
 * IPEWEB_InfoProvinciasLocalidadesResponse
 */
class IPEWEB_InfoProvinciasLocalidadesResponse {
	/**
	 * @access public
	 * @var ArrayOfLocalidadesProvincias
	 */
	public $IPEWEB_InfoProvinciasLocalidadesResult;
}}

if (!class_exists("LocalidadesProvincias")) {
/**
 * LocalidadesProvincias
 */
class LocalidadesProvincias {
	/**
	 * @access public
	 * @var slong
	 */
	public $IdDestino;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Localidad;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Provincia;
}}

if (!class_exists("IPEWEB_InfoAgencias")) {
/**
 * IPEWEB_InfoAgencias
 */
class IPEWEB_InfoAgencias {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var slong
	 */
	public $destino_id;
}}

if (!class_exists("IPEWEB_InfoAgenciasResponse")) {
/**
 * IPEWEB_InfoAgenciasResponse
 */
class IPEWEB_InfoAgenciasResponse {
	/**
	 * @access public
	 * @var ArrayOfAgencias
	 */
	public $IPEWEB_InfoAgenciasResult;
}}

if (!class_exists("Agencias")) {
/**
 * Agencias
 */
class Agencias {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Nombre;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NombreTitular;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Direccion;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Telefono;
	/**
	 * @access public
	 * @var sstring
	 */
	public $TelefonoCorporativo;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Email;
}}

if (!class_exists("v2_BuscarGuia")) {
/**
 * v2_BuscarGuia
 */
class v2_BuscarGuia {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sint
	 */
	public $agecod;
	/**
	 * @access public
	 * @var sstring
	 */
	public $tipfor;
	/**
	 * @access public
	 * @var sint
	 */
	public $guinro;
}}

if (!class_exists("v2_BuscarGuiaResponse")) {
/**
 * v2_BuscarGuiaResponse
 */
class v2_BuscarGuiaResponse {
	/**
	 * @access public
	 * @var TrackingInfo
	 */
	public $v2_BuscarGuiaResult;
}}

if (!class_exists("TrackingInfo")) {
/**
 * TrackingInfo
 */
class TrackingInfo {
	/**
	 * @access public
	 * @var _Estado
	 */
	public $Estado;
	/**
	 * @access public
	 * @var _Historial
	 */
	public $Historial;
}}

if (!class_exists("_Estado")) {
/**
 * _Estado
 */
class _Estado {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Guia;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Estado;
}}

if (!class_exists("_Historial")) {
/**
 * _Historial
 */
class _Historial {
	/**
	 * @access public
	 * @var ArrayOfMovimiento
	 */
	public $Movimientos;
}}

if (!class_exists("Movimiento")) {
/**
 * Movimiento
 */
class Movimiento {
	/**
	 * @access public
	 * @var sstring
	 */
	public $Fecha;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Hora;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Localidad;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Sucursal;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Evento;
}}

if (!class_exists("v2_BuscarEstadoGuiaCorpo")) {
/**
 * v2_BuscarEstadoGuiaCorpo
 */
class v2_BuscarEstadoGuiaCorpo {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sint
	 */
	public $cliente;
	/**
	 * @access public
	 * @var sstring
	 */
	public $id_interno;
}}

if (!class_exists("v2_BuscarEstadoGuiaCorpoResponse")) {
/**
 * v2_BuscarEstadoGuiaCorpoResponse
 */
class v2_BuscarEstadoGuiaCorpoResponse {
	/**
	 * @access public
	 * @var _Estado
	 */
	public $v2_BuscarEstadoGuiaCorpoResult;
}}

if (!class_exists("v2_CorpoConsultaListadoRemitos")) {
/**
 * v2_CorpoConsultaListadoRemitos
 */
class v2_CorpoConsultaListadoRemitos {
	/**
	 * @access public
	 * @var sstring
	 */
	public $token;
	/**
	 * @access public
	 * @var sint
	 */
	public $agecod;
	/**
	 * @access public
	 * @var sint
	 */
	public $clicod;
	/**
	 * @access public
	 * @var sstring
	 */
	public $from;
	/**
	 * @access public
	 * @var sstring
	 */
	public $to;
}}

if (!class_exists("v2_CorpoConsultaListadoRemitosResponse")) {
/**
 * v2_CorpoConsultaListadoRemitosResponse
 */
class v2_CorpoConsultaListadoRemitosResponse {
	/**
	 * @access public
	 * @var CorpoConsultaListadoRemitosInfo
	 */
	public $v2_CorpoConsultaListadoRemitosResult;
}}

if (!class_exists("CorpoConsultaListadoRemitosInfo")) {
/**
 * CorpoConsultaListadoRemitosInfo
 */
class CorpoConsultaListadoRemitosInfo {
	/**
	 * @access public
	 * @var ArrayOfItem
	 */
	public $Items;
}}

if (!class_exists("Item")) {
/**
 * Item
 */
class Item {
	/**
	 * @access public
	 * @var sstring
	 */
	public $NroRT;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Destino;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Destinatario;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Empresa;
	/**
	 * @access public
	 * @var sstring
	 */
	public $NroGuia;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Bultos;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Fecha;
	/**
	 * @access public
	 * @var sstring
	 */
	public $CodRemitoConforme;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DatoCliente1;
	/**
	 * @access public
	 * @var sstring
	 */
	public $DatoCliente2;
	/**
	 * @access public
	 * @var sstring
	 */
	public $Estado;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RetiraNombre;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RetiraDocumento;
	/**
	 * @access public
	 * @var sstring
	 */
	public $RetiraFecha;
}}

if (!class_exists("IPETrackingWS")) {
/**
 * IPETrackingWS
 * @author WSDLInterpreter
 */
class IPETrackingWS extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"VerifyToken" => "VerifyToken",
		"VerifyTokenResponse" => "VerifyTokenResponse",
		"BuscarGuia" => "BuscarGuia",
		"BuscarGuiaResponse" => "BuscarGuiaResponse",
		"Tracking_Result" => "Tracking_Result",
		"EstadoHeader" => "EstadoHeader",
		"Evento" => "Evento",
		"BuscarGuiaCorpo" => "BuscarGuiaCorpo",
		"BuscarGuiaCorpoResponse" => "BuscarGuiaCorpoResponse",
		"V2_WEBBuscarProvincias" => "V2_WEBBuscarProvincias",
		"V2_WEBBuscarProvinciasResponse" => "V2_WEBBuscarProvinciasResponse",
		"Provincias" => "Provincias",
		"Provincia" => "Provincia",
		"V2_WEBBuscarLocalidades" => "V2_WEBBuscarLocalidades",
		"V2_WEBBuscarLocalidadesResponse" => "V2_WEBBuscarLocalidadesResponse",
		"Localidades" => "Localidades",
		"Localidad" => "Localidad",
		"V2_WEBBuscarAgencias" => "V2_WEBBuscarAgencias",
		"V2_WEBBuscarAgenciasResponse" => "V2_WEBBuscarAgenciasResponse",
		"MAgencias" => "MAgencias",
		"MAgencia" => "MAgencia",
		"MHorario" => "MHorario",
		"BuscarGuiaSAIT" => "BuscarGuiaSAIT",
		"BuscarGuiaSAITResponse" => "BuscarGuiaSAITResponse",
		"TrackingData" => "TrackingData",
		"Encabezado" => "Encabezado",
		"Delivery" => "Delivery",
		"Estado" => "Estado",
		"IPEWEB_InfoProvinciasLocalidades" => "IPEWEB_InfoProvinciasLocalidades",
		"IPEWEB_InfoProvinciasLocalidadesResponse" => "IPEWEB_InfoProvinciasLocalidadesResponse",
		"LocalidadesProvincias" => "LocalidadesProvincias",
		"IPEWEB_InfoAgencias" => "IPEWEB_InfoAgencias",
		"IPEWEB_InfoAgenciasResponse" => "IPEWEB_InfoAgenciasResponse",
		"Agencias" => "Agencias",
		"v2_BuscarGuia" => "v2_BuscarGuia",
		"v2_BuscarGuiaResponse" => "v2_BuscarGuiaResponse",
		"TrackingInfo" => "TrackingInfo",
		"_Estado" => "_Estado",
		"_Historial" => "_Historial",
		"Movimiento" => "Movimiento",
		"v2_BuscarEstadoGuiaCorpo" => "v2_BuscarEstadoGuiaCorpo",
		"v2_BuscarEstadoGuiaCorpoResponse" => "v2_BuscarEstadoGuiaCorpoResponse",
		"v2_CorpoConsultaListadoRemitos" => "v2_CorpoConsultaListadoRemitos",
		"v2_CorpoConsultaListadoRemitosResponse" => "v2_CorpoConsultaListadoRemitosResponse",
		"CorpoConsultaListadoRemitosInfo" => "CorpoConsultaListadoRemitosInfo",
		"Item" => "Item",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl="http://soaptracking.integralexpress.com:8082/IPETrackingWS.asmx?wsdl", $options=array()) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: VerifyToken
	 * Parameter options:
	 * (VerifyToken) parameters
	 * (VerifyToken) parameters
	 * @param mixed,... See function description for parameter options
	 * @return VerifyTokenResponse
	 * @throws Exception invalid function signature message
	 */
	public function VerifyToken($mixed = null) {
		$validParameters = array(
			"(VerifyToken)",
			"(VerifyToken)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("VerifyToken", $args);
	}


	/**
	 * Service Call: BuscarGuia
	 * Parameter options:
	 * (BuscarGuia) parameters
	 * (BuscarGuia) parameters
	 * @param mixed,... See function description for parameter options
	 * @return BuscarGuiaResponse
	 * @throws Exception invalid function signature message
	 */
	public function BuscarGuia($mixed = null) {
		$validParameters = array(
			"(BuscarGuia)",
			"(BuscarGuia)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("BuscarGuia", $args);
	}


	/**
	 * Service Call: BuscarGuiaCorpo
	 * Parameter options:
	 * (BuscarGuiaCorpo) parameters
	 * (BuscarGuiaCorpo) parameters
	 * @param mixed,... See function description for parameter options
	 * @return BuscarGuiaCorpoResponse
	 * @throws Exception invalid function signature message
	 */
	public function BuscarGuiaCorpo($mixed = null) {
		$validParameters = array(
			"(BuscarGuiaCorpo)",
			"(BuscarGuiaCorpo)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("BuscarGuiaCorpo", $args);
	}


	/**
	 * Service Call: V2_WEBBuscarProvincias
	 * Parameter options:
	 * (V2_WEBBuscarProvincias) parameters
	 * (V2_WEBBuscarProvincias) parameters
	 * @param mixed,... See function description for parameter options
	 * @return V2_WEBBuscarProvinciasResponse
	 * @throws Exception invalid function signature message
	 */
	public function V2_WEBBuscarProvincias($mixed = null) {
		$validParameters = array(
			"(V2_WEBBuscarProvincias)",
			"(V2_WEBBuscarProvincias)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("V2_WEBBuscarProvincias", $args);
	}


	/**
	 * Service Call: V2_WEBBuscarLocalidades
	 * Parameter options:
	 * (V2_WEBBuscarLocalidades) parameters
	 * (V2_WEBBuscarLocalidades) parameters
	 * @param mixed,... See function description for parameter options
	 * @return V2_WEBBuscarLocalidadesResponse
	 * @throws Exception invalid function signature message
	 */
	public function V2_WEBBuscarLocalidades($mixed = null) {
		$validParameters = array(
			"(V2_WEBBuscarLocalidades)",
			"(V2_WEBBuscarLocalidades)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("V2_WEBBuscarLocalidades", $args);
	}


	/**
	 * Service Call: V2_WEBBuscarAgencias
	 * Parameter options:
	 * (V2_WEBBuscarAgencias) parameters
	 * (V2_WEBBuscarAgencias) parameters
	 * @param mixed,... See function description for parameter options
	 * @return V2_WEBBuscarAgenciasResponse
	 * @throws Exception invalid function signature message
	 */
	public function V2_WEBBuscarAgencias($mixed = null) {
		$validParameters = array(
			"(V2_WEBBuscarAgencias)",
			"(V2_WEBBuscarAgencias)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("V2_WEBBuscarAgencias", $args);
	}


	/**
	 * Service Call: BuscarGuiaSAIT
	 * Parameter options:
	 * (BuscarGuiaSAIT) parameters
	 * (BuscarGuiaSAIT) parameters
	 * @param mixed,... See function description for parameter options
	 * @return BuscarGuiaSAITResponse
	 * @throws Exception invalid function signature message
	 */
	public function BuscarGuiaSAIT($mixed = null) {
		$validParameters = array(
			"(BuscarGuiaSAIT)",
			"(BuscarGuiaSAIT)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("BuscarGuiaSAIT", $args);
	}


	/**
	 * Service Call: IPEWEB_InfoProvinciasLocalidades
	 * Parameter options:
	 * (IPEWEB_InfoProvinciasLocalidades) parameters
	 * (IPEWEB_InfoProvinciasLocalidades) parameters
	 * @param mixed,... See function description for parameter options
	 * @return IPEWEB_InfoProvinciasLocalidadesResponse
	 * @throws Exception invalid function signature message
	 */
	public function IPEWEB_InfoProvinciasLocalidades($mixed = null) {
		$validParameters = array(
			"(IPEWEB_InfoProvinciasLocalidades)",
			"(IPEWEB_InfoProvinciasLocalidades)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("IPEWEB_InfoProvinciasLocalidades", $args);
	}


	/**
	 * Service Call: IPEWEB_InfoAgencias
	 * Parameter options:
	 * (IPEWEB_InfoAgencias) parameters
	 * (IPEWEB_InfoAgencias) parameters
	 * @param mixed,... See function description for parameter options
	 * @return IPEWEB_InfoAgenciasResponse
	 * @throws Exception invalid function signature message
	 */
	public function IPEWEB_InfoAgencias($mixed = null) {
		$validParameters = array(
			"(IPEWEB_InfoAgencias)",
			"(IPEWEB_InfoAgencias)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("IPEWEB_InfoAgencias", $args);
	}


	/**
	 * Service Call: v2_BuscarGuia
	 * Parameter options:
	 * (v2_BuscarGuia) parameters
	 * (v2_BuscarGuia) parameters
	 * @param mixed,... See function description for parameter options
	 * @return v2_BuscarGuiaResponse
	 * @throws Exception invalid function signature message
	 */
	public function v2_BuscarGuia($mixed = null) {
		$validParameters = array(
			"(v2_BuscarGuia)",
			"(v2_BuscarGuia)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("v2_BuscarGuia", $args);
	}


	/**
	 * Service Call: v2_BuscarEstadoGuiaCorpo
	 * Parameter options:
	 * (v2_BuscarEstadoGuiaCorpo) parameters
	 * (v2_BuscarEstadoGuiaCorpo) parameters
	 * @param mixed,... See function description for parameter options
	 * @return v2_BuscarEstadoGuiaCorpoResponse
	 * @throws Exception invalid function signature message
	 */
	public function v2_BuscarEstadoGuiaCorpo($mixed = null) {
		$validParameters = array(
			"(v2_BuscarEstadoGuiaCorpo)",
			"(v2_BuscarEstadoGuiaCorpo)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("v2_BuscarEstadoGuiaCorpo", $args);
	}


	/**
	 * Service Call: v2_CorpoConsultaListadoRemitos
	 * Parameter options:
	 * (v2_CorpoConsultaListadoRemitos) parameters
	 * (v2_CorpoConsultaListadoRemitos) parameters
	 * @param mixed,... See function description for parameter options
	 * @return v2_CorpoConsultaListadoRemitosResponse
	 * @throws Exception invalid function signature message
	 */
	public function v2_CorpoConsultaListadoRemitos($mixed = null) {
		$validParameters = array(
			"(v2_CorpoConsultaListadoRemitos)",
			"(v2_CorpoConsultaListadoRemitos)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("v2_CorpoConsultaListadoRemitos", $args);
	}


}}

?>