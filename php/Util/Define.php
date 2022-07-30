<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'ejp_rueda_negocios');
define('DB_SERVER_EJ','10.238.74.14');
define('DB_NAME_EJ', '10.238.74.14/UNOEE');
define('DB_USER_EJ','EJP_SIPLAN');
define('DB_PASS_EJ' ,'*73cn0l061a2021*');
define('DB_TS_EJ' ,'" 
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = yourip)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = orcl)
    )
  )
       "');

define('INSERTAR_CATEGORIA', 'insertar_categoria');
define('ESTADO_ACTIVO', 'A');
define('ESTADO_INACTIVO', 'I');
define('MENSAJE_SOLICITUD_CANTIDAD_PRODUCTO', 'Se solicita aumento de cantidad de producto');
define('TIPO_SOLICITUD_PRODUCTO', 1);
define('ESTADO_APROBADO', 1);
define('ESTADO_NO_APROBADO', 0);



?>