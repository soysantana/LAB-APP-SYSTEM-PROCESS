-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2023 a las 14:45:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `index_test_lab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atterberg_limit`
--

CREATE TABLE `atterberg_limit` (
  `id` int(10) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) DEFAULT NULL,
  `Sample_Number` varchar(10) DEFAULT NULL,
  `Structure` varchar(50) DEFAULT NULL,
  `Area` varchar(50) DEFAULT NULL,
  `Source` varchar(50) DEFAULT NULL,
  `Depth_From` float DEFAULT NULL,
  `Depth_To` float DEFAULT NULL,
  `Material_Type` varchar(25) DEFAULT NULL,
  `Sample_Type` varchar(25) DEFAULT NULL,
  `North` float DEFAULT NULL,
  `East` float DEFAULT NULL,
  `Elev` float DEFAULT NULL,
  `Sample_Date` date DEFAULT NULL,
  `Technician` varchar(10) DEFAULT NULL,
  `Split_Method` varchar(10) DEFAULT NULL,
  `Preparation_Method` varchar(25) DEFAULT NULL,
  `LL_Blows_1` float DEFAULT NULL,
  `LL_Blows_2` float DEFAULT NULL,
  `LL_Blows_3` float DEFAULT NULL,
  `LL_Container_1` varchar(25) DEFAULT NULL,
  `LL_Container_2` varchar(25) DEFAULT NULL,
  `LL_Container_3` varchar(25) DEFAULT NULL,
  `LL_Wet_Soil_1` float DEFAULT NULL,
  `LL_Wet_Soil_2` float DEFAULT NULL,
  `LL_Wet_Soil_3` float DEFAULT NULL,
  `LL_Dry_soil_tare1` float DEFAULT NULL,
  `LL_Dry_soil_tare2` float DEFAULT NULL,
  `LL_Dry_soil_tare3` float DEFAULT NULL,
  `LL_Water_1` float DEFAULT NULL,
  `LL_Water_2` float DEFAULT NULL,
  `LL_Water_3` float DEFAULT NULL,
  `LL_Tare_1` float DEFAULT NULL,
  `LL_Tare_2` float DEFAULT NULL,
  `LL_Tare_3` float DEFAULT NULL,
  `LL_Wt_Dry_Soil_1` float DEFAULT NULL,
  `LL_Wt_Dry_Soil_2` float DEFAULT NULL,
  `LL_Wt_Dry_Soil_3` float DEFAULT NULL,
  `LL_MC_Porce_1` float DEFAULT NULL,
  `LL_MC_Porce_2` float DEFAULT NULL,
  `LL_MC_Porce_3` float DEFAULT NULL,
  `PL_Container_1` varchar(25) DEFAULT NULL,
  `PL_Container_2` varchar(25) DEFAULT NULL,
  `PL_Container_3` varchar(25) DEFAULT NULL,
  `PL_Wet_Soil_1` float DEFAULT NULL,
  `PL_Wet_Soil_2` float DEFAULT NULL,
  `PL_Wet_Soil_3` float DEFAULT NULL,
  `PL_Dry_soil_tare1` float DEFAULT NULL,
  `PL_Dry_soil_tare2` float DEFAULT NULL,
  `PL_Dry_soil_tare3` float DEFAULT NULL,
  `PL_Water_1` float DEFAULT NULL,
  `PL_Water_2` float DEFAULT NULL,
  `PL_Water_3` float DEFAULT NULL,
  `PL_Tare_1` float DEFAULT NULL,
  `PL_Tare_2` float DEFAULT NULL,
  `PL_Tare_3` float DEFAULT NULL,
  `PL_Wt_Dry_Soil_1` float DEFAULT NULL,
  `PL_Wt_Dry_Soil_2` float DEFAULT NULL,
  `PL_Wt_Dry_Soil_3` float DEFAULT NULL,
  `PL_MC_Porce_1` float DEFAULT NULL,
  `PL_MC_Porce_2` float DEFAULT NULL,
  `PL_MC_Porce_3` float DEFAULT NULL,
  `PL_Avg_Mc` float DEFAULT NULL,
  `Liquid_Limit_Porce` float DEFAULT NULL,
  `Plastic_Limit_Porce` float DEFAULT NULL,
  `Plasticity_Index_Porce` float DEFAULT NULL,
  `Liquidity_Index_Porce` float DEFAULT NULL,
  `Classification` varchar(5) DEFAULT NULL,
  `Liquid_Limit_Plot` blob DEFAULT NULL,
  `Plasticity_Chart` blob DEFAULT NULL,
  `Comments` varchar(100) DEFAULT NULL,
  `Test_Start_Date` date DEFAULT NULL,
  `Report_Date` date DEFAULT NULL,
  `test_type` varchar(10) DEFAULT NULL,
  `Standard` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `atterberg_limit`
--

INSERT INTO `atterberg_limit` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Technician`, `Split_Method`, `Preparation_Method`, `LL_Blows_1`, `LL_Blows_2`, `LL_Blows_3`, `LL_Container_1`, `LL_Container_2`, `LL_Container_3`, `LL_Wet_Soil_1`, `LL_Wet_Soil_2`, `LL_Wet_Soil_3`, `LL_Dry_soil_tare1`, `LL_Dry_soil_tare2`, `LL_Dry_soil_tare3`, `LL_Water_1`, `LL_Water_2`, `LL_Water_3`, `LL_Tare_1`, `LL_Tare_2`, `LL_Tare_3`, `LL_Wt_Dry_Soil_1`, `LL_Wt_Dry_Soil_2`, `LL_Wt_Dry_Soil_3`, `LL_MC_Porce_1`, `LL_MC_Porce_2`, `LL_MC_Porce_3`, `PL_Container_1`, `PL_Container_2`, `PL_Container_3`, `PL_Wet_Soil_1`, `PL_Wet_Soil_2`, `PL_Wet_Soil_3`, `PL_Dry_soil_tare1`, `PL_Dry_soil_tare2`, `PL_Dry_soil_tare3`, `PL_Water_1`, `PL_Water_2`, `PL_Water_3`, `PL_Tare_1`, `PL_Tare_2`, `PL_Tare_3`, `PL_Wt_Dry_Soil_1`, `PL_Wt_Dry_Soil_2`, `PL_Wt_Dry_Soil_3`, `PL_MC_Porce_1`, `PL_MC_Porce_2`, `PL_MC_Porce_3`, `PL_Avg_Mc`, `Liquid_Limit_Porce`, `Plastic_Limit_Porce`, `Plasticity_Index_Porce`, `Liquidity_Index_Porce`, `Classification`, `Liquid_Limit_Plot`, `Plasticity_Chart`, `Comments`, `Test_Start_Date`, `Report_Date`, `test_type`, `Standard`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G4', 'LL-NTSF', 'DS', 'Borrow N60', 0.5, 1.3, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'SDA', 'Manual', 'Oven_Dried', 34, 23, 16, 'C-11', 'C-41', 'C-8', 25, 24, 24, 21, 21, 20, 4, 4, 4, 14, 14, 14, 7, 7, 6, 56, 57, 59, 'H-7', 'H-22', 'H-11', 22, 21, 23, 21, 20, 21, 2, 2, 2, 14, 14, 14, 6, 5, 6, 29, 29, 29, 29, 57, 29, 29, 0, 'CH', NULL, NULL, 'OK', '2023-07-19', '2023-07-19', 'AL', 'ASTM-D4318');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `count_gama`
--

CREATE TABLE `count_gama` (
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Date_Count_1` varchar(40) NOT NULL,
  `Date_Count_2` varchar(40) NOT NULL,
  `Date_Count_3` varchar(40) NOT NULL,
  `Date_Count_4` varchar(40) NOT NULL,
  `Date_Count_5` varchar(40) NOT NULL,
  `Value_Count_1` varchar(40) NOT NULL,
  `Value_Count_2` varchar(40) NOT NULL,
  `Value_Count_3` varchar(40) NOT NULL,
  `Value_Count_4` varchar(40) NOT NULL,
  `Value_Count_5` varchar(40) NOT NULL,
  `Rank_Date_1` varchar(40) NOT NULL,
  `Rank_Date_2` varchar(40) NOT NULL,
  `Rank_Date_3` varchar(40) NOT NULL,
  `Rank_Date_4` varchar(40) NOT NULL,
  `Rank_Date_5` varchar(40) NOT NULL,
  `Operator_1` varchar(40) NOT NULL,
  `Operator_2` varchar(40) NOT NULL,
  `Operator_3` varchar(40) NOT NULL,
  `Operator_4` varchar(40) NOT NULL,
  `Operator_5` varchar(40) NOT NULL,
  `Structure` varchar(10) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `Source` varchar(10) NOT NULL,
  `Depth_From` float DEFAULT NULL,
  `Depth_To` float DEFAULT NULL,
  `Material_Type` varchar(10) NOT NULL,
  `Sample_Type` varchar(10) NOT NULL,
  `North` float DEFAULT NULL,
  `East` float DEFAULT NULL,
  `Elev` float DEFAULT NULL,
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `count_gama`
--

INSERT INTO `count_gama` (`Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Date_Count_1`, `Date_Count_2`, `Date_Count_3`, `Date_Count_4`, `Date_Count_5`, `Value_Count_1`, `Value_Count_2`, `Value_Count_3`, `Value_Count_4`, `Value_Count_5`, `Rank_Date_1`, `Rank_Date_2`, `Rank_Date_3`, `Rank_Date_4`, `Rank_Date_5`, `Operator_1`, `Operator_2`, `Operator_3`, `Operator_4`, `Operator_5`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
('TP-BGC23-NTSF-100', 'G3', 'Choose...', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'Comentario', 'NOSE', 'A-S'),
('TP-BGC23-NTSF-100', 'G3', 'ASTM D6938', 'A', 'date count 1', 'date count 2', 'date count 3', 'date count 4', 'date count 5', 'Value of Count 1', 'Value of Count 2', 'Value of Count 3', 'Value of Count 4', 'Value of Count 5', 'Rank to Date 1', 'Rank to Date 2', 'Rank to Date 3', 'Rank to Date 4', 'Rank to Date 5', 'Operator 1', 'Operator 2', 'Operator 3', 'Operator 4', 'Operator 5', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'as', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `density_bulk`
--

CREATE TABLE `density_bulk` (
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Container` varchar(20) NOT NULL,
  `Weight_Tare_g` float NOT NULL,
  `Weight_Tare_Soil_g` float NOT NULL,
  `Volume_The_Mold_m3` float NOT NULL,
  `Weight_Loose_Material_g` float NOT NULL,
  `Absorption_Porce` float NOT NULL,
  `Specific_Gravity_OD` float NOT NULL,
  `Density_Water_Kgm3` float NOT NULL,
  `Loose_Bulk_Denisty_Kgm3` float NOT NULL,
  `Percent_Voids_Loose_Aggregate` float NOT NULL,
  `Compacted_Weight_Tare_g` float NOT NULL,
  `Compacted_Weight_Tare_Soil_g` float NOT NULL,
  `Compacted_Volume_The_Mold_m3` float NOT NULL,
  `Weight_Compacted_Material_g` float NOT NULL,
  `Compacted_Absorption_Porce` float NOT NULL,
  `Compacted_Specific_Gravity_OD` float NOT NULL,
  `Compacted_Density_Water_Kgm3` float NOT NULL,
  `Compacted_Bulk_Denisty_Kgm3` float NOT NULL,
  `Percent_Voids_Compacted_Aggregate` float NOT NULL,
  `Structure` varchar(10) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `Source` varchar(10) NOT NULL,
  `Depth_From` float DEFAULT NULL,
  `Depth_To` float DEFAULT NULL,
  `Material_Type` varchar(10) NOT NULL,
  `Sample_Type` varchar(10) NOT NULL,
  `North` float DEFAULT NULL,
  `East` float DEFAULT NULL,
  `Elev` float DEFAULT NULL,
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `density_bulk`
--

INSERT INTO `density_bulk` (`Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Container`, `Weight_Tare_g`, `Weight_Tare_Soil_g`, `Volume_The_Mold_m3`, `Weight_Loose_Material_g`, `Absorption_Porce`, `Specific_Gravity_OD`, `Density_Water_Kgm3`, `Loose_Bulk_Denisty_Kgm3`, `Percent_Voids_Loose_Aggregate`, `Compacted_Weight_Tare_g`, `Compacted_Weight_Tare_Soil_g`, `Compacted_Volume_The_Mold_m3`, `Weight_Compacted_Material_g`, `Compacted_Absorption_Porce`, `Compacted_Specific_Gravity_OD`, `Compacted_Density_Water_Kgm3`, `Compacted_Bulk_Denisty_Kgm3`, `Percent_Voids_Compacted_Aggregate`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
('TP-BGC23-NTSF-100', 'G3', 'ASTM C29', 'A', 'Container', 1, 2, 3, 1, 4, 5, 6, 0, 100, 1, 2, 3, 4, 5, 6, 3, 0, 99.99, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `density_weigth`
--

CREATE TABLE `density_weigth` (
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Shape_Type_1` varchar(12) NOT NULL,
  `Shape_Type_2` varchar(12) NOT NULL,
  `Shape_Type_3` varchar(12) NOT NULL,
  `Mass_Moist_Specimen_1` float NOT NULL,
  `Mass_Moist_Specimen_2` float NOT NULL,
  `Mass_Moist_Specimen_3` float NOT NULL,
  `Diameter_Width_1` float NOT NULL,
  `Diameter_Width_2` float NOT NULL,
  `Diameter_Width_3` float NOT NULL,
  `Height_1` float NOT NULL,
  `Height_2` float NOT NULL,
  `Height_3` float NOT NULL,
  `Length_1` float NOT NULL,
  `Length_2` float NOT NULL,
  `Length_3` float NOT NULL,
  `Volumes_Moist_Soil_1` float NOT NULL,
  `Volumes_Moist_Soil_2` float NOT NULL,
  `Volumes_Moist_Soil_3` float NOT NULL,
  `Total_Volumes_Moist_Specimen` float NOT NULL,
  `Mass_Moist_Total_Specimens` float NOT NULL,
  `Water_Content_Specimen` float NOT NULL,
  `Density_Total_Moist_Specimen` float NOT NULL,
  `Moist_Unit_Weight_Specimen_grcm3` float NOT NULL,
  `Moist_Unit_Weight_Specimen_KNm3` float NOT NULL,
  `Dry_Unit_Weight_Specimen_KNm3` float NOT NULL,
  `Moist_Unit_Weight_Specimen_Kgm3` float NOT NULL,
  `Dry_Unit_Weight_Specimen_Kgm3` float NOT NULL,
  `Structure` varchar(10) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `Source` varchar(10) NOT NULL,
  `Depth_From` float DEFAULT NULL,
  `Depth_To` float DEFAULT NULL,
  `Material_Type` varchar(10) NOT NULL,
  `Sample_Type` varchar(10) NOT NULL,
  `North` float DEFAULT NULL,
  `East` float DEFAULT NULL,
  `Elev` float DEFAULT NULL,
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `density_weigth`
--

INSERT INTO `density_weigth` (`Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Shape_Type_1`, `Shape_Type_2`, `Shape_Type_3`, `Mass_Moist_Specimen_1`, `Mass_Moist_Specimen_2`, `Mass_Moist_Specimen_3`, `Diameter_Width_1`, `Diameter_Width_2`, `Diameter_Width_3`, `Height_1`, `Height_2`, `Height_3`, `Length_1`, `Length_2`, `Length_3`, `Volumes_Moist_Soil_1`, `Volumes_Moist_Soil_2`, `Volumes_Moist_Soil_3`, `Total_Volumes_Moist_Specimen`, `Mass_Moist_Total_Specimens`, `Water_Content_Specimen`, `Density_Total_Moist_Specimen`, `Moist_Unit_Weight_Specimen_grcm3`, `Moist_Unit_Weight_Specimen_KNm3`, `Dry_Unit_Weight_Specimen_KNm3`, `Moist_Unit_Weight_Specimen_Kgm3`, `Dry_Unit_Weight_Specimen_Kgm3`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
('TP-BGC23-NTSF-100', 'G3', 'ASTM-D7263', 'B', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-26', '2023-08-28', 'Run', 'NOSE', 'A-S'),
('TP-BGC23-NTSF-100', 'G3', 'ASTM-D7263', 'A', 'Cylindrical', 'Cylindrical', 'Cubical', 1589.5, 1589.5, 1589.5, 1258.2, 1258.2, 1258.2, 63.5, 63.5, 63.5, 45.2, 45.2, 45.2, 78952, 78952, 902.82, 52935.6, 1589.5, 25.85, 0.03, 0.02, 0.29, 0.23, 29.45, 23.4, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayos_en_revision`
--

CREATE TABLE `ensayos_en_revision` (
  `id` int(10) UNSIGNED NOT NULL,
  `Sample_ID` varchar(150) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ensayos_en_revision`
--

INSERT INTO `ensayos_en_revision` (`id`, `Sample_ID`, `Tecnico`, `Fecha_Inicio`, `Fecha_final`) VALUES
(9, 'PVDC-AGG23-NTSF-001', 'WD', '2023-07-10 00:37:26', '0000-00-00 00:00:00'),
(10, 'PVDC-AGG23-NTSF-001', 'WD', '2023-07-10 00:37:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayo_en_entrega`
--

CREATE TABLE `ensayo_en_entrega` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_de_Entrega` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ensayo_en_entrega`
--

INSERT INTO `ensayo_en_entrega` (`id`, `Sample_ID`, `Tecnico`, `Fecha_de_Entrega`) VALUES
(10, 'PVDC-AGG23-001-GS', 'WD', '2023-07-10 00:35:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayo_en_repeticion`
--

CREATE TABLE `ensayo_en_repeticion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayo_gama`
--

CREATE TABLE `ensayo_gama` (
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Station` varchar(30) NOT NULL,
  `Max_Dry_Density_Kgm3` float DEFAULT NULL,
  `Max_Wet_Density_Kgm3` float DEFAULT NULL,
  `Percent_Moisture_Content` float DEFAULT NULL,
  `Optimun_Moisture_Content` float DEFAULT NULL,
  `Max_Dry_Density` float DEFAULT NULL,
  `Percent_of_Compaction` float DEFAULT NULL,
  `Structure` varchar(10) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `Source` varchar(10) NOT NULL,
  `Depth_From` float DEFAULT NULL,
  `Depth_To` float DEFAULT NULL,
  `Material_Type` varchar(10) NOT NULL,
  `Sample_Type` varchar(10) NOT NULL,
  `North` float DEFAULT NULL,
  `East` float DEFAULT NULL,
  `Elev` float DEFAULT NULL,
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ensayo_gama`
--

INSERT INTO `ensayo_gama` (`Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Station`, `Max_Dry_Density_Kgm3`, `Max_Wet_Density_Kgm3`, `Percent_Moisture_Content`, `Optimun_Moisture_Content`, `Max_Dry_Density`, `Percent_of_Compaction`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
('TP-BGC23-NTSF-100', 'G3', 'ASTM D6938', 'B', 'A-85', 8592.53, 6589.52, 5234.56, 5423.25, 12358.2, 70, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'Cooment', 'NOSE', 'A-S'),
('TP-BGC23-NTSF-100', 'G3', 'ASTM D6938', 'C', 'A-85', 8592.53, 6589.52, 5234.56, 5423.25, 123, 6986, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'commen', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventoscalendar`
--

CREATE TABLE `eventoscalendar` (
  `id` int(11) NOT NULL,
  `tecnico` varchar(250) DEFAULT NULL,
  `actividad` varchar(150) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grain_size`
--

CREATE TABLE `grain_size` (
  `id` int(25) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) DEFAULT NULL,
  `Sample_Number` varchar(10) DEFAULT NULL,
  `Structure` varchar(50) DEFAULT NULL,
  `Area` varchar(50) DEFAULT NULL,
  `Source` varchar(50) DEFAULT NULL,
  `Depth_From` float DEFAULT NULL,
  `Depth_To` float DEFAULT NULL,
  `Material_Type` varchar(25) DEFAULT NULL,
  `Sample_Type` varchar(25) DEFAULT NULL,
  `North` float DEFAULT NULL,
  `East` float DEFAULT NULL,
  `Elev` float DEFAULT NULL,
  `Sample_Date` date DEFAULT NULL,
  `Preparation_Method` varchar(10) DEFAULT NULL,
  `Technician` varchar(5) DEFAULT NULL,
  `Container` varchar(10) DEFAULT NULL,
  `Tare_Wet_Soil` float DEFAULT NULL,
  `Tare_Dry_Soil` float DEFAULT NULL,
  `Tare` float DEFAULT NULL,
  `Dry_Soil` float DEFAULT NULL,
  `Washed` float DEFAULT NULL,
  `Wash_Pan` float DEFAULT NULL,
  `Wt_Ret_40_1016` float DEFAULT NULL,
  `Porce_Ret_40_1016` float DEFAULT NULL,
  `Cum_Ret_40_1016` float DEFAULT NULL,
  `Porce_Pass_40_1016` float DEFAULT NULL,
  `Wt_Ret_12_304` float DEFAULT NULL,
  `Porce_Ret_12_304` float DEFAULT NULL,
  `Cum_Ret_12_304` float DEFAULT NULL,
  `Porce_Pass_12_304` float DEFAULT NULL,
  `Wt_Ret_10_254` float DEFAULT NULL,
  `Porce_Ret_10_254` float DEFAULT NULL,
  `Cum_Ret_10_254` float DEFAULT NULL,
  `Porce_Pass_10_254` float DEFAULT NULL,
  `Wt_Ret_8_203` float DEFAULT NULL,
  `Porce_Ret_8_203` float DEFAULT NULL,
  `Cum_Ret_8_203` float DEFAULT NULL,
  `Porce_Pass_8_203` float DEFAULT NULL,
  `Wt_Ret_6_152` float DEFAULT NULL,
  `Porce_Ret_6_152` float DEFAULT NULL,
  `Cum_Ret_6_152` float DEFAULT NULL,
  `Porce_Pass_6_152` float DEFAULT NULL,
  `Wt_Ret_5_127` float DEFAULT NULL,
  `Porce_Ret_5_127` float DEFAULT NULL,
  `Cum_Ret_5_127` float DEFAULT NULL,
  `Porce_Pass_5_127` float DEFAULT NULL,
  `Wt_Ret_4_101` float DEFAULT NULL,
  `Porce_Ret_4_101` float DEFAULT NULL,
  `Cum_Ret_4_101` float DEFAULT NULL,
  `Porce_Pass_4_101` float DEFAULT NULL,
  `Wt_Ret_3_75` float DEFAULT NULL,
  `Porce_Ret_3_75` float DEFAULT NULL,
  `Cum_Ret_3_75` float DEFAULT NULL,
  `Porce_Pass_3_75` float DEFAULT NULL,
  `Wt_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Ret_2p5_63` float DEFAULT NULL,
  `Cum_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Pass_2p5_63` float DEFAULT NULL,
  `Wt_Ret_2_50` float DEFAULT NULL,
  `Porce_Ret_2_50` float DEFAULT NULL,
  `Cum_Ret_2_50` float DEFAULT NULL,
  `Porce_Pass_2_50` float DEFAULT NULL,
  `Wt_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Ret_1p5_37` float DEFAULT NULL,
  `Cum_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Pass_1p5_37` float DEFAULT NULL,
  `Wt_Ret_1_25` float DEFAULT NULL,
  `Porce_Ret_1_25` float DEFAULT NULL,
  `Cum_Ret_1_25` float DEFAULT NULL,
  `Porce_Pass_1_25` float DEFAULT NULL,
  `Wt_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Ret_3p4_19` float DEFAULT NULL,
  `Cum_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Pass_3p4_19` float DEFAULT NULL,
  `Wt_Ret_1p2_12` float DEFAULT NULL,
  `Porce_Ret_1p2_12` float DEFAULT NULL,
  `Cum_Ret_1p2_12` float DEFAULT NULL,
  `Porce_Pass_1p2_12` float DEFAULT NULL,
  `Wt_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Ret_3p8_9` float DEFAULT NULL,
  `Cum_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Pass_3p8_9` float DEFAULT NULL,
  `Wt_Ret_No4_4` float DEFAULT NULL,
  `Porce_Ret_No4_4` float DEFAULT NULL,
  `Cum_Ret_No4_4` float DEFAULT NULL,
  `Porce_Pass_No4_4` float DEFAULT NULL,
  `Wt_Ret_No10_2` float DEFAULT NULL,
  `Porce_Ret_No10_2` float DEFAULT NULL,
  `Cum_Ret_No10_2` float DEFAULT NULL,
  `Porce_Pass_No10_2` float DEFAULT NULL,
  `Wt_Ret_No16_1` float DEFAULT NULL,
  `Porce_Ret_No16_1` float DEFAULT NULL,
  `Cum_Ret_No16_1` float DEFAULT NULL,
  `Porce_Pass_No16_1` float DEFAULT NULL,
  `Wt_Ret_No20_0p85` float DEFAULT NULL,
  `Porce_Ret_No20_0p85` float DEFAULT NULL,
  `Cum_Ret_No20_0p85` float DEFAULT NULL,
  `Porce_Pass_No20_0p85` float DEFAULT NULL,
  `Wt_Ret_No50_0p3` float DEFAULT NULL,
  `Porce_Ret_No50_0p3` float DEFAULT NULL,
  `Cum_Ret_No50_0p3` float DEFAULT NULL,
  `Porce_Pass_No50_0p3` float DEFAULT NULL,
  `Wt_Ret_No60_0p25` float DEFAULT NULL,
  `Porce_Ret_No60_0p25` float DEFAULT NULL,
  `Cum_Ret_No60_0p25` float DEFAULT NULL,
  `Porce_Pass_No60_0p25` float DEFAULT NULL,
  `Wt_Ret_No100_0p15` float DEFAULT NULL,
  `Porce_Ret_No100_0p15` float DEFAULT NULL,
  `Cum_Ret_No100_0p15` float DEFAULT NULL,
  `Porce_Pass_No100_0p15` float DEFAULT NULL,
  `Wt_Ret_No140_0p106` float DEFAULT NULL,
  `Porce_Ret_No140_0p106` float DEFAULT NULL,
  `Cum_Ret_No140_0p106` float DEFAULT NULL,
  `Porce_Pass_No140_0p106` float DEFAULT NULL,
  `Wt_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Ret_No200_0p075` float DEFAULT NULL,
  `Cum_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Pass_No200_0p075` float DEFAULT NULL,
  `Wt_Ret_Pan` float DEFAULT NULL,
  `Porce_Ret_Pan` float DEFAULT NULL,
  `Wt_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Ret_Total_Pan` float DEFAULT NULL,
  `Cum_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Pass_Total_Pan` float DEFAULT NULL,
  `Coarser_than_Gravel` float DEFAULT NULL,
  `Gravel` float DEFAULT NULL,
  `Sand` float DEFAULT NULL,
  `Fines` float DEFAULT NULL,
  `D10` float DEFAULT NULL,
  `D15` float DEFAULT NULL,
  `D30` float DEFAULT NULL,
  `D60` float DEFAULT NULL,
  `D85` float DEFAULT NULL,
  `Cc` float DEFAULT NULL,
  `Cu` float DEFAULT NULL,
  `Comments` varchar(100) DEFAULT NULL,
  `Graphic` blob DEFAULT NULL,
  `Test_Start_Date` date DEFAULT NULL,
  `Report_Date` date DEFAULT NULL,
  `test_type` varchar(10) DEFAULT NULL,
  `Split_Method` varchar(20) DEFAULT NULL,
  `Standard` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `grain_size`
--

INSERT INTO `grain_size` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Preparation_Method`, `Technician`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_40_1016`, `Porce_Ret_40_1016`, `Cum_Ret_40_1016`, `Porce_Pass_40_1016`, `Wt_Ret_12_304`, `Porce_Ret_12_304`, `Cum_Ret_12_304`, `Porce_Pass_12_304`, `Wt_Ret_10_254`, `Porce_Ret_10_254`, `Cum_Ret_10_254`, `Porce_Pass_10_254`, `Wt_Ret_8_203`, `Porce_Ret_8_203`, `Cum_Ret_8_203`, `Porce_Pass_8_203`, `Wt_Ret_6_152`, `Porce_Ret_6_152`, `Cum_Ret_6_152`, `Porce_Pass_6_152`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Wt_Ret_1p2_12`, `Porce_Ret_1p2_12`, `Cum_Ret_1p2_12`, `Porce_Pass_1p2_12`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Wt_Ret_No16_1`, `Porce_Ret_No16_1`, `Cum_Ret_No16_1`, `Porce_Pass_No16_1`, `Wt_Ret_No20_0p85`, `Porce_Ret_No20_0p85`, `Cum_Ret_No20_0p85`, `Porce_Pass_No20_0p85`, `Wt_Ret_No50_0p3`, `Porce_Ret_No50_0p3`, `Cum_Ret_No50_0p3`, `Porce_Pass_No50_0p3`, `Wt_Ret_No60_0p25`, `Porce_Ret_No60_0p25`, `Cum_Ret_No60_0p25`, `Porce_Pass_No60_0p25`, `Wt_Ret_No100_0p15`, `Porce_Ret_No100_0p15`, `Cum_Ret_No100_0p15`, `Porce_Pass_No100_0p15`, `Wt_Ret_No140_0p106`, `Porce_Ret_No140_0p106`, `Cum_Ret_No140_0p106`, `Porce_Pass_No140_0p106`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Comments`, `Graphic`, `Test_Start_Date`, `Report_Date`, `test_type`, `Split_Method`, `Standard`) VALUES
(7, 'TP-BGC23-NTSF-101', 'G7', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17', 'Oven_Dried', 'AR/SD', 'K-7', 1331, 1209, 533, 675, 343, 332, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 2, 0, 0, 100, 8, 1, 1, 99, 27, 4, 5, 95, 27, 4, 9, 91, 24, 3, 13, 87, 108, 16, 29, 71, 24, 4, 32, 68, 58, 9, 41, 59, 0, 0, 41, 59, 65, 10, 51, 49, 1, 0, 333, 49, 100, 0, 0, 1, 49, 49, 0, 0, 0, 0, 0, 0, 0, 'Runs  conducted to avoid sieve overloading as per  ASTM D6913-17, Clause 11.3.1 and table for maximu', NULL, '2023-07-19', '2023-07-19', 'GS-Soil', 'Man_Split', 'ASTM-D6913'),
(11, 'TP-BGC23-NTSF-100', 'G3', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'Oven_Dried', 'A-S', 'B-150', 921.67, 864.88, 309.23, 555.65, 217.55, 338.1, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 3.21, 0.58, 0.58, 99.42, 14.16, 2.55, 3.13, 96.87, 18.31, 3.3, 6.42, 93.58, 15.71, 2.83, 9.25, 90.751, 70.75, 12.73, 21.98, 78.02, 13.2, 2.38, 24.36, 75.64, 37.17, 6.69, 31.05, 68.953, 0, 0, 31.05, 68.953, 43.13, 7.76, 38.81, 61.19, 1.9, 0.34, 340, 61.19, 100, 0, 0, 0.58, 38.23, 61.19, 0, 0, 0, 0, 0.54, 0, 0, 'Run Go', NULL, '2023-08-24', '2023-08-24', 'GS-Soil', 'Man_Split', 'ASTM-D6913'),
(12, 'TP-BGC23-NTSF-100', 'G3', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'Oven_Dried', 'A-S', 'Container', 3586, 2598, 1256, 1342, 859.56, 482.44, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 482.44, 35.95, 35.95, 64.05, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 'comentario', NULL, '2023-08-28', '2023-08-28', 'GS-Soil', 'Mech_Split', 'ASTM-D6913');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab_test_requisition_form`
--

CREATE TABLE `lab_test_requisition_form` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Structure` varchar(25) NOT NULL,
  `Area` varchar(25) NOT NULL,
  `Source` varchar(25) NOT NULL,
  `Depth_From` float NOT NULL,
  `Depth_To` float NOT NULL,
  `Material_Type` varchar(20) NOT NULL,
  `Sample_Type` varchar(10) NOT NULL,
  `North` float NOT NULL,
  `East` float NOT NULL,
  `Elev` float NOT NULL,
  `MC_Oven` varchar(15) NOT NULL,
  `MC_Stove` varchar(15) NOT NULL,
  `MC_Scale` varchar(15) NOT NULL,
  `Atterberg_Limit` varchar(15) NOT NULL,
  `Grain_size` varchar(15) NOT NULL,
  `Standard_Proctor` varchar(15) NOT NULL,
  `Specific_Gravity` varchar(15) NOT NULL,
  `Acid_Reactivity` varchar(15) NOT NULL,
  `Sand_Castle` varchar(15) NOT NULL,
  `Los_Angeles_Abrasion` varchar(15) NOT NULL,
  `Soundness` varchar(15) NOT NULL,
  `UCS` varchar(15) NOT NULL,
  `PLT` varchar(15) NOT NULL,
  `BTS` varchar(15) NOT NULL,
  `Hydrometer` varchar(15) NOT NULL,
  `Double_Hydrometer` varchar(15) NOT NULL,
  `Pinhole` varchar(15) NOT NULL,
  `Consolidation` varchar(15) NOT NULL,
  `Permeability` varchar(15) NOT NULL,
  `Comment` text NOT NULL,
  `Statuss` varchar(50) NOT NULL,
  `Sample_Date` date NOT NULL,
  `Sample_By` varchar(5) NOT NULL,
  `Registed_Date` date NOT NULL,
  `test_inicio` datetime(6) NOT NULL,
  `Sample_Number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `lab_test_requisition_form`
--

INSERT INTO `lab_test_requisition_form` (`id`, `Sample_ID`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `MC_Oven`, `MC_Stove`, `MC_Scale`, `Atterberg_Limit`, `Grain_size`, `Standard_Proctor`, `Specific_Gravity`, `Acid_Reactivity`, `Sand_Castle`, `Los_Angeles_Abrasion`, `Soundness`, `UCS`, `PLT`, `BTS`, `Hydrometer`, `Double_Hydrometer`, `Pinhole`, `Consolidation`, `Permeability`, `Comment`, `Statuss`, `Sample_Date`, `Sample_By`, `Registed_Date`, `test_inicio`, `Sample_Number`) VALUES
(1, 'TP-BGC23-NTSF-100', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, 'Required', 'Not', 'Not', 'Required', 'Not', 'Required', 'Required', 'Not', 'Not', 'Not', 'Not', 'Not', 'Not', 'Not', 'Required', 'Required', 'Required', 'Not', 'Not', 'Material for comparison with CQC', '', '2023-07-07', 'WD', '0000-00-00', '0000-00-00 00:00:00.000000', 'G3'),
(2, 'TP-BGC23-NTSF-101', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, 'Required', 'Not', 'Not ', 'Required', 'Not ', 'Required', 'Required', 'Not ', 'Not ', 'Not ', 'Not ', 'Not ', 'Not ', 'Not', 'Required', 'Not ', 'Required', 'Not ', 'Not ', 'Ohters', '', '2023-07-17', 'Wi', '0000-00-00', '0000-00-00 00:00:00.000000', 'G1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moisture_content`
--

CREATE TABLE `moisture_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Structure` varchar(25) NOT NULL,
  `Area` varchar(25) NOT NULL,
  `Source` varchar(25) NOT NULL,
  `Depth_From` float NOT NULL,
  `Depth_To` float NOT NULL,
  `Material_Type` varchar(25) NOT NULL,
  `Sample_Type` varchar(25) NOT NULL,
  `North` float NOT NULL,
  `East` float NOT NULL,
  `Elev` float NOT NULL,
  `Sample_Date` date NOT NULL,
  `Tare_Name` varchar(11) NOT NULL,
  `Temperature` varchar(10) NOT NULL,
  `Tare_Plus_Wet_Soil` float NOT NULL,
  `Tare_Plus_Dry_Soil` float NOT NULL,
  `Water` float NOT NULL,
  `Weigth_Tare` float NOT NULL,
  `Dry_Soil` float NOT NULL,
  `Mc` float NOT NULL,
  `Standard` varchar(15) NOT NULL,
  `Method` varchar(5) NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `test_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `moisture_content`
--

INSERT INTO `moisture_content` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Tare_Name`, `Temperature`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Standard`, `Method`, `Comments`, `Technician`, `Test_Start_Date`, `Report_Date`, `test_type`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G1', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grab', 20232500, 376589, 125, '2023-07-07', 'LG', '110 ºC', 178, 151, 27, 68, 83, 32, 'Choose...', '', '', 'wd', '2023-07-10', '2023-08-07', 'MC-Oven'),
(3, 'TP-BGC23-NTSF-101', 'M2', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17', 'a', '110 ºC', 150, 120, 30, 45, 75, 40, 'Choose...', '', '', 'l', '2023-07-14', '2023-07-17', 'MC-Oven');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moisture_content_constant_mass`
--

CREATE TABLE `moisture_content_constant_mass` (
  `id` int(10) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Structure` varchar(25) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Depth_From` float NOT NULL,
  `Depth_To` float NOT NULL,
  `Material_Type` varchar(25) NOT NULL,
  `Sample_Type` varchar(25) NOT NULL,
  `North` float NOT NULL,
  `East` float NOT NULL,
  `Elev` float NOT NULL,
  `Sample_Date` datetime(6) NOT NULL,
  `Standard` varchar(25) NOT NULL,
  `Preparation` varchar(25) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Test_Start_Date` datetime(6) NOT NULL,
  `Trial` varchar(10) NOT NULL,
  `Tare_Name` varchar(25) NOT NULL,
  `Temperature` varchar(75) NOT NULL,
  `Tare_Plus_Wet_Soil` float NOT NULL,
  `Tare_Plus_Dry_Soil1` float NOT NULL,
  `Tare_Plus_Dry_Soil2` float NOT NULL,
  `Tare_Plus_Dry_Soil3` float NOT NULL,
  `Tare_Plus_Dry_Soil4` float NOT NULL,
  `Water` float NOT NULL,
  `Weigth_Tare` float NOT NULL,
  `Dry_Soil` float NOT NULL,
  `Mc` float NOT NULL,
  `Report_Date` datetime(6) NOT NULL,
  `test_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moisture_content_constant_mass`
--

INSERT INTO `moisture_content_constant_mass` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Standard`, `Preparation`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `Temperature`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil1`, `Tare_Plus_Dry_Soil2`, `Tare_Plus_Dry_Soil3`, `Tare_Plus_Dry_Soil4`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Report_Date`, `test_type`) VALUES
(0, 'TP-BGC23-NTSF-100', 'GG1', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07 00:00:00.000000', 'ASTM D2216', 'Man_Split', 'probando', 'wd', '2023-07-13 00:00:00.000000', '1', 'A-100', '60 ºC', 178, 151, 0, 0, 0, 27, 68, 83, 32, '2023-07-15 13:09:27.000000', 'MC-Constant Mas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moisture_content_microwave`
--

CREATE TABLE `moisture_content_microwave` (
  `id` int(10) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Structure` varchar(25) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Depth_From` float NOT NULL,
  `Depth_To` float NOT NULL,
  `Material_Type` varchar(25) NOT NULL,
  `Sample_Type` varchar(25) NOT NULL,
  `North` float NOT NULL,
  `East` float NOT NULL,
  `Elev` float NOT NULL,
  `Sample_Date` datetime(6) NOT NULL,
  `Standard` varchar(25) NOT NULL,
  `Preparation` varchar(25) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Test_Start_Date` datetime(6) NOT NULL,
  `Trial` varchar(10) NOT NULL,
  `Tare_Name` varchar(25) NOT NULL,
  `Microwave_Model` varchar(75) NOT NULL,
  `Tare_Plus_Wet_Soil` float NOT NULL,
  `Tare_Plus_Dry_Soil1` float NOT NULL,
  `Tare_Plus_Dry_Soil2` float NOT NULL,
  `Tare_Plus_Dry_Soil3` float NOT NULL,
  `Tare_Plus_Dry_Soil4` float NOT NULL,
  `Water` float NOT NULL,
  `Weigth_Tare` float NOT NULL,
  `Dry_Soil` float NOT NULL,
  `Mc` float NOT NULL,
  `Report_Date` datetime(6) NOT NULL,
  `test_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moisture_content_microwave`
--

INSERT INTO `moisture_content_microwave` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Standard`, `Preparation`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `Microwave_Model`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil1`, `Tare_Plus_Dry_Soil2`, `Tare_Plus_Dry_Soil3`, `Tare_Plus_Dry_Soil4`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Report_Date`, `test_type`) VALUES
(1, 'PH-BGC23-NTSF-124', 'M4', 'SD1', 'US', 'M5 Borrow', 0, 1, 'LG', '1', 0, 200, 199, '0000-00-00 00:00:00.000000', '[value-27]', '[value-33]', '[value-28]', '[value-29]', '0000-00-00 00:00:00.000000', '196.25', '196.25', '25', 45, 160, 18, 0, 0, 0, 0, 0, 0, '2023-07-13 21:29:38.000000', 'MC-Microwave'),
(2, 'TP-BGC23-NTSF-100', 'G2', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07 00:00:00.000000', 'ASTM D2216', 'Man_Split', 'probando', 'wd', '2023-07-15 00:00:00.000000', '1', 'B-6', 'SAMSUNG', 165, 137, 137, 137, 137, 27, 52, 86, 32, '2023-07-15 11:56:37.000000', 'MC-Microwave'),
(3, 'TP-BGC23-NTSF-101', 'GG9', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17 00:00:00.000000', 'ASTM D2216', 'Mech_Split', 'PRUEBA', 'HJ', '2023-07-12 00:00:00.000000', 'UHII', 'HIIH', 'HKHJIK', 150, 120, 120, 120, 120, 30, 45, 75, 40, '2023-07-17 21:46:59.000000', 'MC-Microwave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moisture_scale`
--

CREATE TABLE `moisture_scale` (
  `id` int(10) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Structure` varchar(25) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Depth_From` float NOT NULL,
  `Depth_To` float NOT NULL,
  `Material_Type` varchar(25) NOT NULL,
  `Sample_Type` varchar(25) NOT NULL,
  `North` float NOT NULL,
  `East` float NOT NULL,
  `Elev` float NOT NULL,
  `Sample_Date` datetime(6) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Test_Start_Date` datetime(6) NOT NULL,
  `Trial` varchar(10) NOT NULL,
  `Tare_Name` varchar(25) NOT NULL,
  `scale_Model` varchar(75) NOT NULL,
  `Mc` float NOT NULL,
  `Report_Date` datetime(6) NOT NULL,
  `test_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moisture_scale`
--

INSERT INTO `moisture_scale` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `scale_Model`, `Mc`, `Report_Date`, `test_type`) VALUES
(0, 'TP-BGC23-NTSF-100', 'GG3', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07 00:00:00.000000', 'probando', 'wd', '2023-07-14 00:00:00.000000', '1', '1', 'scale', 35, '2023-07-15 14:02:20.000000', 'MC-Scale');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra_en_preparacion`
--

CREATE TABLE `muestra_en_preparacion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(50) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio_Preparacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `muestra_en_preparacion`
--

INSERT INTO `muestra_en_preparacion` (`id`, `Sample_ID`, `Tecnico`, `Fecha_Inicio_Preparacion`) VALUES
(21, 'PVDC-AGG23-001-GS', 'WD', '2023-07-10 00:13:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra_en_realizacion`
--

CREATE TABLE `muestra_en_realizacion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(50) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio_Realizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `muestra_en_realizacion`
--

INSERT INTO `muestra_en_realizacion` (`id`, `Sample_ID`, `Tecnico`, `Fecha_Inicio_Realizacion`) VALUES
(19, 'PVDC-AGG23-001-GS', 'WD', '2023-07-10 00:33:27'),
(20, 'PVDC-AGG23-001-G1-GS', 'WD', '2023-07-19 21:30:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `standard_proctor`
--

CREATE TABLE `standard_proctor` (
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(10) NOT NULL,
  `Natural_MC` float NOT NULL,
  `SG_NMC` float NOT NULL,
  `Wt_Wet_Soil_Mold_1` float NOT NULL,
  `Wt_Wet_Soil_Mold_2` float NOT NULL,
  `Wt_Wet_Soil_Mold_3` float NOT NULL,
  `Wt_Wet_Soil_Mold_4` float NOT NULL,
  `Wt_Wet_Soil_Mold_5` float NOT NULL,
  `Wt_Wet_Soil_Mold_6` float NOT NULL,
  `Wt_Mold_g_1` float NOT NULL,
  `Wt_Mold_g_2` float NOT NULL,
  `Wt_Mold_g_3` float NOT NULL,
  `Wt_Mold_g_4` float NOT NULL,
  `Wt_Mold_g_5` float NOT NULL,
  `Wt_Mold_g_6` float NOT NULL,
  `Wt_Wet_Soil_g_1` float NOT NULL,
  `Wt_Wet_Soil_g_2` float NOT NULL,
  `Wt_Wet_Soil_g_3` float NOT NULL,
  `Wt_Wet_Soil_g_4` float NOT NULL,
  `Wt_Wet_Soil_g_5` float NOT NULL,
  `Wt_Wet_Soil_g_6` float NOT NULL,
  `Vol_Mold_cm3_1` float NOT NULL,
  `Vol_Mold_cm3_2` float NOT NULL,
  `Vol_Mold_cm3_3` float NOT NULL,
  `Vol_Mold_cm3_4` float NOT NULL,
  `Vol_Mold_cm3_5` float NOT NULL,
  `Vol_Mold_cm3_6` float NOT NULL,
  `Wet_Density_kgm3_1` float NOT NULL,
  `Wet_Density_kgm3_2` float NOT NULL,
  `Wet_Density_kgm3_3` float NOT NULL,
  `Wet_Density_kgm3_4` float NOT NULL,
  `Wet_Density_kgm3_5` float NOT NULL,
  `Wet_Density_kgm3_6` float NOT NULL,
  `Dry_Density_kgm3_1` float NOT NULL,
  `Dry_Density_kgm3_2` float NOT NULL,
  `Dry_Density_kgm3_3` float NOT NULL,
  `Dry_Density_kgm3_4` float NOT NULL,
  `Dry_Density_kgm3_5` float NOT NULL,
  `Dry_Density_kgm3_6` float NOT NULL,
  `Dry_Density_Corrected_kgm3_1` float NOT NULL,
  `Dry_Density_Corrected_kgm3_2` float NOT NULL,
  `Dry_Density_Corrected_kgm3_3` float NOT NULL,
  `Dry_Density_Corrected_kgm3_4` float NOT NULL,
  `Dry_Density_Corrected_kgm3_5` float NOT NULL,
  `Dry_Density_Corrected_kgm3_6` float NOT NULL,
  `MC_Container_1` varchar(15) NOT NULL,
  `MC_Container_2` varchar(15) NOT NULL,
  `MC_Container_3` varchar(15) NOT NULL,
  `MC_Container_4` varchar(15) NOT NULL,
  `MC_Container_5` varchar(15) NOT NULL,
  `MC_Container_6` varchar(15) NOT NULL,
  `MC_Wt_Wet_Soil_Tare_1` float NOT NULL,
  `MC_Wt_Wet_Soil_Tare_2` float NOT NULL,
  `MC_Wt_Wet_Soil_Tare_3` float NOT NULL,
  `MC_Wt_Wet_Soil_Tare_4` float NOT NULL,
  `MC_Wt_Wet_Soil_Tare_5` float NOT NULL,
  `MC_Wt_Wet_Soil_Tare_6` float NOT NULL,
  `MC_Wt_Dry_Soil_Tare_1` float NOT NULL,
  `MC_Wt_Dry_Soil_Tare_2` float NOT NULL,
  `MC_Wt_Dry_Soil_Tare_3` float NOT NULL,
  `MC_Wt_Dry_Soil_Tare_4` float NOT NULL,
  `MC_Wt_Dry_Soil_Tare_5` float NOT NULL,
  `MC_Wt_Dry_Soil_Tare_6` float NOT NULL,
  `Wt_Water_g_1` float NOT NULL,
  `Wt_Water_g_2` float NOT NULL,
  `Wt_Water_g_3` float NOT NULL,
  `Wt_Water_g_4` float NOT NULL,
  `Wt_Water_g_5` float NOT NULL,
  `Wt_Water_g_6` float NOT NULL,
  `Tare_g_1` float NOT NULL,
  `Tare_g_2` float NOT NULL,
  `Tare_g_3` float NOT NULL,
  `Tare_g_4` float NOT NULL,
  `Tare_g_5` float NOT NULL,
  `Tare_g_6` float NOT NULL,
  `MC_Wt_Dry_Soil_g_1` float NOT NULL,
  `MC_Wt_Dry_Soil_g_2` float NOT NULL,
  `MC_Wt_Dry_Soil_g_3` float NOT NULL,
  `MC_Wt_Dry_Soil_g_4` float NOT NULL,
  `MC_Wt_Dry_Soil_g_5` float NOT NULL,
  `MC_Wt_Dry_Soil_g_6` float NOT NULL,
  `MC_Porce_1` float NOT NULL,
  `MC_Porce_2` float NOT NULL,
  `MC_Porce_3` float NOT NULL,
  `MC_Porce_4` float NOT NULL,
  `MC_Porce_5` float NOT NULL,
  `MC_Porce_6` float NOT NULL,
  `MC_Porce_Corrected_1` float NOT NULL,
  `MC_Porce_Corrected_2` float NOT NULL,
  `MC_Porce_Corrected_3` float NOT NULL,
  `MC_Porce_Corrected_4` float NOT NULL,
  `MC_Porce_Corrected_5` float NOT NULL,
  `MC_Porce_Corrected_6` float NOT NULL,
  `Max_Dry_Density_kgm3` float NOT NULL,
  `Optimun_MC_Porce` float NOT NULL,
  `Wc_Porce` float NOT NULL,
  `GM_Porce` float NOT NULL,
  `PC_Porce` float NOT NULL,
  `PF_Porce` float NOT NULL,
  `YDF_Porce` float NOT NULL,
  `YDT_Porce` float NOT NULL,
  `Yw_KnM3` float NOT NULL,
  `Corrected_Dry_Unit_Weigt` float NOT NULL,
  `Corrected_Water_Content_Finer` float NOT NULL,
  `SP_Graphic` blob DEFAULT NULL,
  `Structure` varchar(10) NOT NULL,
  `Area` varchar(10) NOT NULL,
  `Source` varchar(10) NOT NULL,
  `Depth_From` float DEFAULT NULL,
  `Depth_To` float DEFAULT NULL,
  `Material_Type` varchar(10) NOT NULL,
  `Sample_Type` varchar(10) NOT NULL,
  `North` float DEFAULT NULL,
  `East` float DEFAULT NULL,
  `Elev` float DEFAULT NULL,
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `standard_proctor`
--

INSERT INTO `standard_proctor` (`Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Natural_MC`, `SG_NMC`, `Wt_Wet_Soil_Mold_1`, `Wt_Wet_Soil_Mold_2`, `Wt_Wet_Soil_Mold_3`, `Wt_Wet_Soil_Mold_4`, `Wt_Wet_Soil_Mold_5`, `Wt_Wet_Soil_Mold_6`, `Wt_Mold_g_1`, `Wt_Mold_g_2`, `Wt_Mold_g_3`, `Wt_Mold_g_4`, `Wt_Mold_g_5`, `Wt_Mold_g_6`, `Wt_Wet_Soil_g_1`, `Wt_Wet_Soil_g_2`, `Wt_Wet_Soil_g_3`, `Wt_Wet_Soil_g_4`, `Wt_Wet_Soil_g_5`, `Wt_Wet_Soil_g_6`, `Vol_Mold_cm3_1`, `Vol_Mold_cm3_2`, `Vol_Mold_cm3_3`, `Vol_Mold_cm3_4`, `Vol_Mold_cm3_5`, `Vol_Mold_cm3_6`, `Wet_Density_kgm3_1`, `Wet_Density_kgm3_2`, `Wet_Density_kgm3_3`, `Wet_Density_kgm3_4`, `Wet_Density_kgm3_5`, `Wet_Density_kgm3_6`, `Dry_Density_kgm3_1`, `Dry_Density_kgm3_2`, `Dry_Density_kgm3_3`, `Dry_Density_kgm3_4`, `Dry_Density_kgm3_5`, `Dry_Density_kgm3_6`, `Dry_Density_Corrected_kgm3_1`, `Dry_Density_Corrected_kgm3_2`, `Dry_Density_Corrected_kgm3_3`, `Dry_Density_Corrected_kgm3_4`, `Dry_Density_Corrected_kgm3_5`, `Dry_Density_Corrected_kgm3_6`, `MC_Container_1`, `MC_Container_2`, `MC_Container_3`, `MC_Container_4`, `MC_Container_5`, `MC_Container_6`, `MC_Wt_Wet_Soil_Tare_1`, `MC_Wt_Wet_Soil_Tare_2`, `MC_Wt_Wet_Soil_Tare_3`, `MC_Wt_Wet_Soil_Tare_4`, `MC_Wt_Wet_Soil_Tare_5`, `MC_Wt_Wet_Soil_Tare_6`, `MC_Wt_Dry_Soil_Tare_1`, `MC_Wt_Dry_Soil_Tare_2`, `MC_Wt_Dry_Soil_Tare_3`, `MC_Wt_Dry_Soil_Tare_4`, `MC_Wt_Dry_Soil_Tare_5`, `MC_Wt_Dry_Soil_Tare_6`, `Wt_Water_g_1`, `Wt_Water_g_2`, `Wt_Water_g_3`, `Wt_Water_g_4`, `Wt_Water_g_5`, `Wt_Water_g_6`, `Tare_g_1`, `Tare_g_2`, `Tare_g_3`, `Tare_g_4`, `Tare_g_5`, `Tare_g_6`, `MC_Wt_Dry_Soil_g_1`, `MC_Wt_Dry_Soil_g_2`, `MC_Wt_Dry_Soil_g_3`, `MC_Wt_Dry_Soil_g_4`, `MC_Wt_Dry_Soil_g_5`, `MC_Wt_Dry_Soil_g_6`, `MC_Porce_1`, `MC_Porce_2`, `MC_Porce_3`, `MC_Porce_4`, `MC_Porce_5`, `MC_Porce_6`, `MC_Porce_Corrected_1`, `MC_Porce_Corrected_2`, `MC_Porce_Corrected_3`, `MC_Porce_Corrected_4`, `MC_Porce_Corrected_5`, `MC_Porce_Corrected_6`, `Max_Dry_Density_kgm3`, `Optimun_MC_Porce`, `Wc_Porce`, `GM_Porce`, `PC_Porce`, `PF_Porce`, `YDF_Porce`, `YDT_Porce`, `Yw_KnM3`, `Corrected_Dry_Unit_Weigt`, `Corrected_Water_Content_Finer`, `SP_Graphic`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
('TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'Choose...', 'manual', 26.2, 2.65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'RUN', 'SP', 'A-S'),
('TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'wet', 'mechanical', 26.2, 2.65, 10, 10, 10, 10, 10, 10, 1, 1, 1, 1, 1, 1, 9, 9, 9, 9, 9, 9, 100, 100, 100, 100, 100, 100, 90, 90, 90, 90, 90, 90, 9, 18, 9, 18, 9, 18, 824.37, 1520.93, 824.37, 1520.93, 824.37, 1520.93, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'Run', 'SP', 'A-S'),
('TP-BGC23-NTSF-100', 'G3', 'Choose...', 'wet', 'manual', 26.2, 2.65, 10, 10, 10, 10, 10, 10, 1, 1, 1, 1, 1, 1, 9, 9, 9, 9, 9, 9, 100, 100, 100, 100, 100, 100, 90, 90, 90, 90, 90, 90, 9, 18, 9, 18, 9, 18, 824.37, 1520.93, 824.37, 1520.93, 824.37, 1520.93, 'A', 'b', 'c', 'd', 'e', 'z', 10, 10, 10, 10, 10, 10, 1, 2, 1, 2, 1, 2, 9, 8, 9, 8, 9, 8, 0, 0, 0, 0, 0, 0, 1, 2, 1, 2, 1, 2, 900, 400, 900, 400, 900, 400, 9.01, 4.01, 9.01, 4.01, 9.01, 4.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'Run', 'SP', 'A-S'),
('TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'wet', 'mechanical', 29.43, 2.65, 5797, 5908, 5958, 5966, 5952, 5938, 4195, 4195, 4195, 4195, 4195, 4195, 1602, 1713, 1763, 1771, 1757, 1743, 946, 946, 946, 946, 946, 946, 1693.45, 1810.78, 1863.64, 1872.09, 1857.29, 1842.49, 1341.85, 1404.93, 1425.82, 1414.57, 1378.58, 1352.35, 9141.67, 9169.72, 9178.49, 9173.8, 9158.29, 9146.51, 'LAB-1', 'LAB-2', 'LAB-3', 'LAB-4', 'LAB-5', 'LAB-6', 547.58, 564.92, 558.03, 554.31, 522.77, 585.45, 452.01, 457.54, 447.36, 439.99, 410.25, 452.65, 95.57, 107.38, 110.67, 114.32, 112.52, 132.8, 87.27, 85.82, 86.95, 86.54, 86.22, 86.24, 364.74, 371.72, 360.41, 353.45, 324.03, 366.41, 26.2, 28.89, 30.71, 32.34, 34.73, 36.24, 0.27, 0.3, 0.32, 0.33, 0.36, 0.37, 1425.82, 30.71, 1, 1, 1, 1, 1, 1, 1, 9178.49, 0.32, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'Run GOoo', 'SP', 'A-S'),
('TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'wet', 'mechanical', 25, 2.65, 380, 380, 380, 380, 380, 380, 120, 120, 120, 120, 120, 120, 260, 260, 260, 260, 260, 260, 86, 86, 86, 86, 86, 86, 3023.26, 3023.26, 3023.26, 3023.26, 3023.26, 3023.26, 1742.94, 1742.94, 1742.94, 1742.94, 1742.94, 1742.94, 9287.27, 9287.27, 9287.27, 9287.27, 9287.27, 9287.27, '1', '2', '3', '4', '5', '6', 895, 895, 895, 895, 895, 895, 538, 538, 538, 538, 538, 538, 357, 357, 357, 357, 357, 357, 52, 52, 52, 52, 52, 52, 486, 486, 486, 486, 486, 486, 73.46, 73.46, 73.46, 73.46, 73.46, 73.46, 0.74, 0.74, 0.74, 0.74, 0.74, 0.74, 1742.94, 73.46, 1, 1, 1, 1, 1, 1, 1, 9287.27, 0.74, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'SXZ', 'SP', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(1, 'Admin Users', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'pzg9wa7o1.jpg', 1, '2023-08-29 14:43:29'),
(2, 'Special User', 'special', 'ba36b97a41e7faf742ab09bf88405ac04f99599a', 2, 'no_image.jpg', 1, '2023-03-20 03:13:43'),
(3, 'Default User', 'user', '12dea96fec20593566ab75692c9949596833adc9', 3, 'no_image.jpg', 1, '2023-07-19 21:21:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'Special', 2, 0),
(3, 'User', 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atterberg_limit`
--
ALTER TABLE `atterberg_limit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ensayos_en_revision`
--
ALTER TABLE `ensayos_en_revision`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ensayo_en_entrega`
--
ALTER TABLE `ensayo_en_entrega`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- Indices de la tabla `ensayo_en_repeticion`
--
ALTER TABLE `ensayo_en_repeticion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- Indices de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grain_size`
--
ALTER TABLE `grain_size`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lab_test_requisition_form`
--
ALTER TABLE `lab_test_requisition_form`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `moisture_content`
--
ALTER TABLE `moisture_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample ID` (`Sample_ID`);

--
-- Indices de la tabla `moisture_content_microwave`
--
ALTER TABLE `moisture_content_microwave`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `muestra_en_preparacion`
--
ALTER TABLE `muestra_en_preparacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- Indices de la tabla `muestra_en_realizacion`
--
ALTER TABLE `muestra_en_realizacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atterberg_limit`
--
ALTER TABLE `atterberg_limit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ensayos_en_revision`
--
ALTER TABLE `ensayos_en_revision`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ensayo_en_entrega`
--
ALTER TABLE `ensayo_en_entrega`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ensayo_en_repeticion`
--
ALTER TABLE `ensayo_en_repeticion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `grain_size`
--
ALTER TABLE `grain_size`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `lab_test_requisition_form`
--
ALTER TABLE `lab_test_requisition_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `moisture_content`
--
ALTER TABLE `moisture_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `moisture_content_microwave`
--
ALTER TABLE `moisture_content_microwave`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `muestra_en_preparacion`
--
ALTER TABLE `muestra_en_preparacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `muestra_en_realizacion`
--
ALTER TABLE `muestra_en_realizacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
