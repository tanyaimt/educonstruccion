-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2017 a las 02:31:37
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `educonstruccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `idAsistencia` int(11) NOT NULL,
  `idObrero1` int(11) DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `horaEntrada` time DEFAULT NULL,
  `horaSalidaLunch` time DEFAULT NULL,
  `horaEntradaLunch` time DEFAULT NULL,
  `horaSalida` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `idEmpleadoIndirecto1` int(11) DEFAULT NULL,
  `idContactoCliente1` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaTermino` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactocliente`
--

CREATE TABLE `contactocliente` (
  `idContactoCliente` int(11) NOT NULL,
  `idUsuario3` int(11) DEFAULT NULL,
  `idEmpresaCliente1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactoproveedor`
--

CREATE TABLE `contactoproveedor` (
  `idContactoProveedor` int(11) NOT NULL,
  `idUsuario2` int(11) DEFAULT NULL,
  `idEmpresaProveedor1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `idContrato` int(11) NOT NULL,
  `idObra1` int(11) DEFAULT NULL,
  `descripcionContrato` varchar(150) DEFAULT NULL,
  `precioContrato` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`idContrato`, `idObra1`, `descripcionContrato`, `precioContrato`) VALUES
(1, 1, 'Almacen', 4000),
(2, 2, 'Estacionamiento', 12000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `idCotizacion` int(11) NOT NULL,
  `idContrato1` int(11) DEFAULT NULL,
  `descripcionCotizacion` varchar(150) DEFAULT NULL,
  `precioCotizacion` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`idCotizacion`, `idContrato1`, `descripcionCotizacion`, `precioCotizacion`) VALUES
(1, 1, 'InstalaciÃ³n elÃ©ctrica', 2000),
(2, 1, 'InstalaciÃ³n Hidraulica', 2000),
(3, 2, 'Pavimentacion', 6000),
(4, 2, 'InstalaciÃ³n ElÃ©ctrica', 6000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `idCuenta` int(11) NOT NULL,
  `nombreCuenta` varchar(100) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deducciones`
--

CREATE TABLE `deducciones` (
  `idDeduccion` int(11) NOT NULL,
  `idCuenta4` int(11) DEFAULT NULL,
  `descripcionDeduccion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deduccionesnomina`
--

CREATE TABLE `deduccionesnomina` (
  `idDeduccionesNomina` int(11) NOT NULL,
  `idNomina2` int(11) DEFAULT NULL,
  `idDeduccion1` int(11) DEFAULT NULL,
  `montoDeduccion` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `idUsuario1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `idUsuario1`) VALUES
(1, 1),
(2, 1),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadodirecto`
--

CREATE TABLE `empleadodirecto` (
  `idEmpleadoDirecto` int(11) NOT NULL,
  `idEmpleado1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleadodirecto`
--

INSERT INTO `empleadodirecto` (`idEmpleadoDirecto`, `idEmpleado1`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadoindirecto`
--

CREATE TABLE `empleadoindirecto` (
  `idEmpleadoIndirecto` int(11) NOT NULL,
  `idEmpleado2` int(11) DEFAULT NULL,
  `perfil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `razonSocial` varchar(150) DEFAULT NULL,
  `rfc` varchar(15) DEFAULT NULL,
  `telefonoEmpresa` varchar(13) DEFAULT NULL,
  `paginaWebEmpresa` varchar(50) DEFAULT NULL,
  `calleEmpresa` varchar(50) DEFAULT NULL,
  `numInteriorEmpresa` varchar(15) DEFAULT NULL,
  `numExteriorEmpresa` int(11) DEFAULT NULL,
  `coloniaEmpresa` varchar(50) DEFAULT NULL,
  `ciudadEmpresa` varchar(50) DEFAULT NULL,
  `estadoEmpresa` varchar(50) DEFAULT NULL,
  `tipoEmpresa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `razonSocial`, `rfc`, `telefonoEmpresa`, `paginaWebEmpresa`, `calleEmpresa`, `numInteriorEmpresa`, `numExteriorEmpresa`, `coloniaEmpresa`, `ciudadEmpresa`, `estadoEmpresa`, `tipoEmpresa`) VALUES
(1, 'ELECTRO RAMSA S.A. DE C.V', 'ERA8006234P3 ', '4777140650', 'electroramsa.com.mx', '27 de Septiembre', 'na', 719, 'ObregÃ³n', 'Leon', 'Guanajuato', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresacliente`
--

CREATE TABLE `empresacliente` (
  `idEmpresaCliente` int(11) NOT NULL,
  `idEmpresa1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresacliente`
--

INSERT INTO `empresacliente` (`idEmpresaCliente`, `idEmpresa1`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresaproveedor`
--

CREATE TABLE `empresaproveedor` (
  `idEmpresaProveedor` int(11) NOT NULL,
  `idEmpresa2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estimaciondestajo`
--

CREATE TABLE `estimaciondestajo` (
  `idEstimacionDestajo` int(11) NOT NULL,
  `idCotizacion` int(11) DEFAULT NULL,
  `idSupervisorObra1` int(11) DEFAULT NULL,
  `idFacturaVenta2` int(11) DEFAULT NULL,
  `estadoEstimacion` tinyint(1) DEFAULT '0',
  `descripcionEstimacion` varchar(300) DEFAULT NULL,
  `precioEstimacion` double DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaTermino` date DEFAULT NULL,
  `fechaUltimaActualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estimaciondestajo`
--

INSERT INTO `estimaciondestajo` (`idEstimacionDestajo`, `idCotizacion`, `idSupervisorObra1`, `idFacturaVenta2`, `estadoEstimacion`, `descripcionEstimacion`, `precioEstimacion`, `fechaInicio`, `fechaTermino`, `fechaUltimaActualizacion`) VALUES
(1, 1, 1, NULL, NULL, 'Suministro de CANALON en lamina galvanizada cal. 22  desarrollo maximo de 90 cms., se incluye pijas, selladores y todo lo necesario para su correcta colocacion.', 2000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL,
  `folio` varchar(50) DEFAULT NULL,
  `fechaEmision` date DEFAULT NULL,
  `importeLetra` varchar(50) DEFAULT NULL,
  `importeNumero` double DEFAULT NULL,
  `formaPago` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacompra`
--

CREATE TABLE `facturacompra` (
  `idFacturaCompra` int(11) NOT NULL,
  `idFactura2` int(11) DEFAULT NULL,
  `idEmpresaProveedor2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturaventa`
--

CREATE TABLE `facturaventa` (
  `idFacturaVenta` int(11) NOT NULL,
  `idFactura1` int(11) DEFAULT NULL,
  `idEmpresaCliente2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `idMaterial` int(11) NOT NULL,
  `descripcionMaterial` varchar(100) DEFAULT NULL,
  `cantidadExistencia` int(11) DEFAULT NULL,
  `nombreMaterial` varchar(50) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `numeroSerie` varchar(30) DEFAULT NULL,
  `numeroProducto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialdirecto`
--

CREATE TABLE `materialdirecto` (
  `idMaterialDirecto` int(11) NOT NULL,
  `idMaterial1` int(11) DEFAULT NULL,
  `idfacturaCompra1` int(11) DEFAULT NULL,
  `idFacturaVenta1` int(11) DEFAULT NULL,
  `idCuenta1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materialindirecto`
--

CREATE TABLE `materialindirecto` (
  `idMaterialIndirecto` int(11) NOT NULL,
  `idMaterial2` int(11) DEFAULT NULL,
  `idFacturaCompra2` int(11) DEFAULT NULL,
  `idCuenta2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `idNomina` int(11) NOT NULL,
  `idEmpleado3` int(11) DEFAULT NULL,
  `salario` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `idObra` int(11) NOT NULL,
  `idEmpresaCliente` int(11) DEFAULT NULL,
  `descripcionObra` varchar(300) DEFAULT NULL,
  `precioObra` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`idObra`, `idEmpresaCliente`, `descripcionObra`, `precioObra`) VALUES
(1, 1, 'Bancomer centro', 12000),
(2, 1, 'Bancomer Norte', 24000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obrero`
--

CREATE TABLE `obrero` (
  `idObrero` int(11) NOT NULL,
  `idEmpleadoDirecto1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `percepciones`
--

CREATE TABLE `percepciones` (
  `idPercepcion` int(11) NOT NULL,
  `idCuenta3` int(11) DEFAULT NULL,
  `descripcionPercepcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `percepcionesnomina`
--

CREATE TABLE `percepcionesnomina` (
  `idPercepcionesNomina` int(11) NOT NULL,
  `idNomina1` int(11) DEFAULT NULL,
  `idPercepcion1` int(11) DEFAULT NULL,
  `montoPercepcion` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudcompra`
--

CREATE TABLE `solicitudcompra` (
  `idSolicitudCompra` int(11) NOT NULL,
  `idEstimacionDestajo1` int(11) DEFAULT NULL,
  `contenidoSolitudCompra` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisorobra`
--

CREATE TABLE `supervisorobra` (
  `idSupervisorObra` int(11) NOT NULL,
  `idEmpleadoDirecto2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `supervisorobra`
--

INSERT INTO `supervisorobra` (`idSupervisorObra`, `idEmpleadoDirecto2`) VALUES
(1, 2),
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(50) DEFAULT NULL,
  `aPaternoUsuario` varchar(50) DEFAULT NULL,
  `aMaternoUsuario` varchar(50) DEFAULT NULL,
  `telefonoFijoUsuario` varchar(10) DEFAULT NULL,
  `telefonoMovilUsuario` varchar(10) DEFAULT NULL,
  `calleUsuario` varchar(50) DEFAULT NULL,
  `numInteriorUsuario` varchar(15) DEFAULT NULL,
  `numExteriorusuario` int(11) DEFAULT NULL,
  `coloniaUsuario` varchar(50) DEFAULT NULL,
  `ciudadUsuario` varchar(50) DEFAULT NULL,
  `estadoUsuario` varchar(50) DEFAULT NULL,
  `codigoPostalUsuario` int(11) DEFAULT NULL,
  `correoElectronicoUsuario` varchar(50) DEFAULT NULL,
  `loginUsuario` varchar(7) DEFAULT NULL,
  `constrasenaUsuario` varchar(10) DEFAULT NULL,
  `tipoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `aPaternoUsuario`, `aMaternoUsuario`, `telefonoFijoUsuario`, `telefonoMovilUsuario`, `calleUsuario`, `numInteriorUsuario`, `numExteriorusuario`, `coloniaUsuario`, `ciudadUsuario`, `estadoUsuario`, `codigoPostalUsuario`, `correoElectronicoUsuario`, `loginUsuario`, `constrasenaUsuario`, `tipoUsuario`) VALUES
(1, 'Arq Claudia', 'Ramirez', 'Perez', '7452364865', '7452364865', 'Hidalgo', 'na', 238, 'Independencia', 'Zaragoza', 'Hidalgo', 36258, 'claudia.ramirez@educonstruccion.com', 'clram', '123', 8),
(3, 'Ar Lourdes', 'Gasca ', 'Gallegos', '4777075087', '4771454698', 'Rio Grijalva', 'na', 1320, 'Prados Verdes', 'Leon', 'Guan', 37480, 'lourdesgasca@educonstruccion.com', 'louga', '123', 32),
(4, 'Tanya Montserrat', 'Rojas', 'Gonzalez', '4761081300', '4774117910', 'Maple', 'na', 114, 'La mezquitera', 'San Francisco del Rincon', 'Guanajuato', 36354, 'tanyarojas@rcomsii.com', 'taroj', '123', 4095);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`idAsistencia`),
  ADD KEY `fk_idObre1` (`idObrero1`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `fk_idEI1` (`idEmpleadoIndirecto1`),
  ADD KEY `fk_idCC1` (`idContactoCliente1`);

--
-- Indices de la tabla `contactocliente`
--
ALTER TABLE `contactocliente`
  ADD PRIMARY KEY (`idContactoCliente`),
  ADD KEY `fk_idUs3` (`idUsuario3`),
  ADD KEY `fk_idEC1` (`idEmpresaCliente1`);

--
-- Indices de la tabla `contactoproveedor`
--
ALTER TABLE `contactoproveedor`
  ADD PRIMARY KEY (`idContactoProveedor`),
  ADD KEY `fk_idUs2` (`idUsuario2`),
  ADD KEY `fk_idEp1` (`idEmpresaProveedor1`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`idContrato`),
  ADD KEY `fk_idObr1` (`idObra1`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`idCotizacion`),
  ADD KEY `fk_idCon1` (`idContrato1`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`idCuenta`);

--
-- Indices de la tabla `deducciones`
--
ALTER TABLE `deducciones`
  ADD PRIMARY KEY (`idDeduccion`),
  ADD KEY `fk_idCta4` (`idCuenta4`);

--
-- Indices de la tabla `deduccionesnomina`
--
ALTER TABLE `deduccionesnomina`
  ADD PRIMARY KEY (`idDeduccionesNomina`),
  ADD KEY `fk_idNom2` (`idNomina2`),
  ADD KEY `fk_idDed1` (`idDeduccion1`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `fk_idUs1` (`idUsuario1`);

--
-- Indices de la tabla `empleadodirecto`
--
ALTER TABLE `empleadodirecto`
  ADD PRIMARY KEY (`idEmpleadoDirecto`),
  ADD KEY `fk_idEm1` (`idEmpleado1`);

--
-- Indices de la tabla `empleadoindirecto`
--
ALTER TABLE `empleadoindirecto`
  ADD PRIMARY KEY (`idEmpleadoIndirecto`),
  ADD KEY `fk_idEm2` (`idEmpleado2`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `empresacliente`
--
ALTER TABLE `empresacliente`
  ADD PRIMARY KEY (`idEmpresaCliente`),
  ADD KEY `fk_idEmpr1` (`idEmpresa1`);

--
-- Indices de la tabla `empresaproveedor`
--
ALTER TABLE `empresaproveedor`
  ADD PRIMARY KEY (`idEmpresaProveedor`),
  ADD KEY `fk_idEmpr2` (`idEmpresa2`);

--
-- Indices de la tabla `estimaciondestajo`
--
ALTER TABLE `estimaciondestajo`
  ADD PRIMARY KEY (`idEstimacionDestajo`),
  ADD KEY `fk_idCot1` (`idCotizacion`),
  ADD KEY `fk_idSupO1` (`idSupervisorObra1`),
  ADD KEY `fk_idFacV2` (`idFacturaVenta2`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`);

--
-- Indices de la tabla `facturacompra`
--
ALTER TABLE `facturacompra`
  ADD PRIMARY KEY (`idFacturaCompra`),
  ADD KEY `fk_idFac2` (`idFactura2`),
  ADD KEY `fk_idEp2` (`idEmpresaProveedor2`);

--
-- Indices de la tabla `facturaventa`
--
ALTER TABLE `facturaventa`
  ADD PRIMARY KEY (`idFacturaVenta`),
  ADD KEY `fk_idFac1` (`idFactura1`),
  ADD KEY `fk_idEC2` (`idEmpresaCliente2`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`idMaterial`);

--
-- Indices de la tabla `materialdirecto`
--
ALTER TABLE `materialdirecto`
  ADD PRIMARY KEY (`idMaterialDirecto`),
  ADD KEY `fk_idMat1` (`idMaterial1`),
  ADD KEY `fk_idFacC1` (`idfacturaCompra1`),
  ADD KEY `fk_idFacV1` (`idFacturaVenta1`),
  ADD KEY `fk_idCta1` (`idCuenta1`);

--
-- Indices de la tabla `materialindirecto`
--
ALTER TABLE `materialindirecto`
  ADD PRIMARY KEY (`idMaterialIndirecto`),
  ADD KEY `fk_idMat2` (`idMaterial2`),
  ADD KEY `fk_idFacC2` (`idFacturaCompra2`),
  ADD KEY `fk_idCta2` (`idCuenta2`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`idNomina`),
  ADD KEY `fk_idEmp3` (`idEmpleado3`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`idObra`),
  ADD KEY `fk_idECl1` (`idEmpresaCliente`);

--
-- Indices de la tabla `obrero`
--
ALTER TABLE `obrero`
  ADD PRIMARY KEY (`idObrero`),
  ADD KEY `fk_idED1` (`idEmpleadoDirecto1`);

--
-- Indices de la tabla `percepciones`
--
ALTER TABLE `percepciones`
  ADD PRIMARY KEY (`idPercepcion`),
  ADD KEY `fk_idCta3` (`idCuenta3`);

--
-- Indices de la tabla `percepcionesnomina`
--
ALTER TABLE `percepcionesnomina`
  ADD PRIMARY KEY (`idPercepcionesNomina`),
  ADD KEY `fk_idNom1` (`idNomina1`),
  ADD KEY `fk_idPer1` (`idPercepcion1`);

--
-- Indices de la tabla `solicitudcompra`
--
ALTER TABLE `solicitudcompra`
  ADD PRIMARY KEY (`idSolicitudCompra`),
  ADD KEY `fk_idEsD1` (`idEstimacionDestajo1`);

--
-- Indices de la tabla `supervisorobra`
--
ALTER TABLE `supervisorobra`
  ADD PRIMARY KEY (`idSupervisorObra`),
  ADD KEY `fk_idED2` (`idEmpleadoDirecto2`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `loginUsuario` (`loginUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `idAsistencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactocliente`
--
ALTER TABLE `contactocliente`
  MODIFY `idContactoCliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactoproveedor`
--
ALTER TABLE `contactoproveedor`
  MODIFY `idContactoProveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `idContrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `idCotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `deducciones`
--
ALTER TABLE `deducciones`
  MODIFY `idDeduccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `deduccionesnomina`
--
ALTER TABLE `deduccionesnomina`
  MODIFY `idDeduccionesNomina` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `empleadodirecto`
--
ALTER TABLE `empleadodirecto`
  MODIFY `idEmpleadoDirecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `empleadoindirecto`
--
ALTER TABLE `empleadoindirecto`
  MODIFY `idEmpleadoIndirecto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empresacliente`
--
ALTER TABLE `empresacliente`
  MODIFY `idEmpresaCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empresaproveedor`
--
ALTER TABLE `empresaproveedor`
  MODIFY `idEmpresaProveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estimaciondestajo`
--
ALTER TABLE `estimaciondestajo`
  MODIFY `idEstimacionDestajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facturacompra`
--
ALTER TABLE `facturacompra`
  MODIFY `idFacturaCompra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facturaventa`
--
ALTER TABLE `facturaventa`
  MODIFY `idFacturaVenta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `idMaterial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materialdirecto`
--
ALTER TABLE `materialdirecto`
  MODIFY `idMaterialDirecto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materialindirecto`
--
ALTER TABLE `materialindirecto`
  MODIFY `idMaterialIndirecto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
  MODIFY `idNomina` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `obra`
--
ALTER TABLE `obra`
  MODIFY `idObra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `obrero`
--
ALTER TABLE `obrero`
  MODIFY `idObrero` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `percepciones`
--
ALTER TABLE `percepciones`
  MODIFY `idPercepcion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `percepcionesnomina`
--
ALTER TABLE `percepcionesnomina`
  MODIFY `idPercepcionesNomina` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitudcompra`
--
ALTER TABLE `solicitudcompra`
  MODIFY `idSolicitudCompra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `supervisorobra`
--
ALTER TABLE `supervisorobra`
  MODIFY `idSupervisorObra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_idObre1` FOREIGN KEY (`idObrero1`) REFERENCES `obrero` (`idObrero`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `fk_idCC1` FOREIGN KEY (`idContactoCliente1`) REFERENCES `contactocliente` (`idContactoCliente`),
  ADD CONSTRAINT `fk_idEI1` FOREIGN KEY (`idEmpleadoIndirecto1`) REFERENCES `empleadoindirecto` (`idEmpleadoIndirecto`);

--
-- Filtros para la tabla `contactocliente`
--
ALTER TABLE `contactocliente`
  ADD CONSTRAINT `fk_idEC1` FOREIGN KEY (`idEmpresaCliente1`) REFERENCES `empresacliente` (`idEmpresaCliente`),
  ADD CONSTRAINT `fk_idUs3` FOREIGN KEY (`idUsuario3`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `contactoproveedor`
--
ALTER TABLE `contactoproveedor`
  ADD CONSTRAINT `fk_idEp1` FOREIGN KEY (`idEmpresaProveedor1`) REFERENCES `empresaproveedor` (`idEmpresaProveedor`),
  ADD CONSTRAINT `fk_idUs2` FOREIGN KEY (`idUsuario2`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `fk_idObr1` FOREIGN KEY (`idObra1`) REFERENCES `obra` (`idObra`);

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_idCon1` FOREIGN KEY (`idContrato1`) REFERENCES `contrato` (`idContrato`);

--
-- Filtros para la tabla `deducciones`
--
ALTER TABLE `deducciones`
  ADD CONSTRAINT `fk_idCta4` FOREIGN KEY (`idCuenta4`) REFERENCES `cuenta` (`idCuenta`);

--
-- Filtros para la tabla `deduccionesnomina`
--
ALTER TABLE `deduccionesnomina`
  ADD CONSTRAINT `fk_idDed1` FOREIGN KEY (`idDeduccion1`) REFERENCES `deducciones` (`idDeduccion`),
  ADD CONSTRAINT `fk_idNom2` FOREIGN KEY (`idNomina2`) REFERENCES `nomina` (`idNomina`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_idUs1` FOREIGN KEY (`idUsuario1`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `empleadodirecto`
--
ALTER TABLE `empleadodirecto`
  ADD CONSTRAINT `fk_idEm1` FOREIGN KEY (`idEmpleado1`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `empleadoindirecto`
--
ALTER TABLE `empleadoindirecto`
  ADD CONSTRAINT `fk_idEm2` FOREIGN KEY (`idEmpleado2`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `empresacliente`
--
ALTER TABLE `empresacliente`
  ADD CONSTRAINT `fk_idEmpr1` FOREIGN KEY (`idEmpresa1`) REFERENCES `empresa` (`idEmpresa`);

--
-- Filtros para la tabla `empresaproveedor`
--
ALTER TABLE `empresaproveedor`
  ADD CONSTRAINT `fk_idEmpr2` FOREIGN KEY (`idEmpresa2`) REFERENCES `empresa` (`idEmpresa`);

--
-- Filtros para la tabla `estimaciondestajo`
--
ALTER TABLE `estimaciondestajo`
  ADD CONSTRAINT `fk_idCot1` FOREIGN KEY (`idCotizacion`) REFERENCES `cotizacion` (`idCotizacion`),
  ADD CONSTRAINT `fk_idFacV2` FOREIGN KEY (`idFacturaVenta2`) REFERENCES `facturaventa` (`idFacturaVenta`),
  ADD CONSTRAINT `fk_idSupO1` FOREIGN KEY (`idSupervisorObra1`) REFERENCES `supervisorobra` (`idSupervisorObra`);

--
-- Filtros para la tabla `facturacompra`
--
ALTER TABLE `facturacompra`
  ADD CONSTRAINT `fk_idEp2` FOREIGN KEY (`idEmpresaProveedor2`) REFERENCES `empresaproveedor` (`idEmpresaProveedor`),
  ADD CONSTRAINT `fk_idFac2` FOREIGN KEY (`idFactura2`) REFERENCES `factura` (`idFactura`);

--
-- Filtros para la tabla `facturaventa`
--
ALTER TABLE `facturaventa`
  ADD CONSTRAINT `fk_idEC2` FOREIGN KEY (`idEmpresaCliente2`) REFERENCES `empresacliente` (`idEmpresaCliente`),
  ADD CONSTRAINT `fk_idFac1` FOREIGN KEY (`idFactura1`) REFERENCES `factura` (`idFactura`);

--
-- Filtros para la tabla `materialdirecto`
--
ALTER TABLE `materialdirecto`
  ADD CONSTRAINT `fk_idCta1` FOREIGN KEY (`idCuenta1`) REFERENCES `cuenta` (`idCuenta`),
  ADD CONSTRAINT `fk_idFacC1` FOREIGN KEY (`idfacturaCompra1`) REFERENCES `facturacompra` (`idFacturaCompra`),
  ADD CONSTRAINT `fk_idFacV1` FOREIGN KEY (`idFacturaVenta1`) REFERENCES `facturaventa` (`idFacturaVenta`),
  ADD CONSTRAINT `fk_idMat1` FOREIGN KEY (`idMaterial1`) REFERENCES `material` (`idMaterial`);

--
-- Filtros para la tabla `materialindirecto`
--
ALTER TABLE `materialindirecto`
  ADD CONSTRAINT `fk_idCta2` FOREIGN KEY (`idCuenta2`) REFERENCES `cuenta` (`idCuenta`),
  ADD CONSTRAINT `fk_idFacC2` FOREIGN KEY (`idFacturaCompra2`) REFERENCES `facturacompra` (`idFacturaCompra`),
  ADD CONSTRAINT `fk_idMat2` FOREIGN KEY (`idMaterial2`) REFERENCES `material` (`idMaterial`);

--
-- Filtros para la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD CONSTRAINT `fk_idEmp3` FOREIGN KEY (`idEmpleado3`) REFERENCES `empleado` (`idEmpleado`);

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `fk_idECl1` FOREIGN KEY (`idEmpresaCliente`) REFERENCES `empresacliente` (`idEmpresaCliente`);

--
-- Filtros para la tabla `obrero`
--
ALTER TABLE `obrero`
  ADD CONSTRAINT `fk_idED1` FOREIGN KEY (`idEmpleadoDirecto1`) REFERENCES `empleadodirecto` (`idEmpleadoDirecto`);

--
-- Filtros para la tabla `percepciones`
--
ALTER TABLE `percepciones`
  ADD CONSTRAINT `fk_idCta3` FOREIGN KEY (`idCuenta3`) REFERENCES `cuenta` (`idCuenta`);

--
-- Filtros para la tabla `percepcionesnomina`
--
ALTER TABLE `percepcionesnomina`
  ADD CONSTRAINT `fk_idNom1` FOREIGN KEY (`idNomina1`) REFERENCES `nomina` (`idNomina`),
  ADD CONSTRAINT `fk_idPer1` FOREIGN KEY (`idPercepcion1`) REFERENCES `percepciones` (`idPercepcion`);

--
-- Filtros para la tabla `solicitudcompra`
--
ALTER TABLE `solicitudcompra`
  ADD CONSTRAINT `fk_idEsD1` FOREIGN KEY (`idEstimacionDestajo1`) REFERENCES `estimaciondestajo` (`idEstimacionDestajo`);

--
-- Filtros para la tabla `supervisorobra`
--
ALTER TABLE `supervisorobra`
  ADD CONSTRAINT `fk_idED2` FOREIGN KEY (`idEmpleadoDirecto2`) REFERENCES `empleadodirecto` (`idEmpleadoDirecto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
