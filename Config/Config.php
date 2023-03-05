<?php
//SE DEFINE LA URL PRINGIPAL DE PROYECTO
const BASE_URL = "http://localhost/panaderia_angel";

//ZONA HORARIA
date_default_timezone_set("America/Lima");

//DATOS DE CONEXION A BASE DE DATOS
const DB_HOST = "localhost";
const DB_NAME = "db_panaderia";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "utf8";

//Para envío de correo
const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

//Simbolo de moneda
const SMONEY = "S/.";
const CURRENCY = "USD";

//Datos envio de correo
const NOMBRE_REMITENTE = "";
const EMAIL_REMITENTE = "";
const NOMBRE_EMPESA = "";
const WEB_EMPRESA = "";

const DESCRIPCION = "La mejor tienda en productos tecnologicos";
const SHAREDHASH = "Tecnologic world";

//Datos Empresa
const DIRECCION = "";
const TELEMPRESA = "";
const WHATSAPP = "";
const EMAIL_EMPRESA = "";
const EMAIL_PEDIDOS = ""; 
const EMAIL_SUSCRIPCION = "";
const EMAIL_CONTACTO = "";

//MODULOS
const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MPROVEEDORES = 3;
	const MDINSUMOS = 4;
	const MPRODUCTOS = 5;
	const MCATEGORIAS = 6;
	const MCOMPRAS = 7;
	const MVENTAS = 8;
	const MDPAGINAS = 9;

//Roles
const RADMINISTRADOR = 1;
const RSUPERVISOR = 2;
const RVENDEDOR = 3;
