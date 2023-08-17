-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2023 a las 16:33:04
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
(7, 'TP-BGC23-NTSF-101', 'G7', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17', 'Oven_Dried', 'AR/SD', 'K-7', 1331, 1209, 533, 675, 343, 332, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 2, 0, 0, 100, 8, 1, 1, 99, 27, 4, 5, 95, 27, 4, 9, 91, 24, 3, 13, 87, 108, 16, 29, 71, 24, 4, 32, 68, 58, 9, 41, 59, 0, 0, 41, 59, 65, 10, 51, 49, 1, 0, 333, 49, 100, 0, 0, 1, 49, 49, 0, 0, 0, 0, 0, 0, 0, 'Runs  conducted to avoid sieve overloading as per  ASTM D6913-17, Clause 11.3.1 and table for maximu', NULL, '2023-07-19', '2023-07-19', 'GS-Soil', 'Man_Split', 'ASTM-D6913');

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
  `Statuss` text NOT NULL,
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
(1, 'TP-BGC23-NTSF-100', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, 'Required', 'Not required', 'Not required', 'Required', 'Not required', 'Required', 'Required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Required', 'Required', 'Required', 'Not required', 'Not required', 'Material for comparison with CQC', '', '2023-07-07', 'WD', '0000-00-00', '0000-00-00 00:00:00.000000', NULL),
(2, 'TP-BGC23-NTSF-101', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, 'Required', 'Not required', 'Not required', 'Required', 'Not required', 'Required', 'Required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Required', 'Not required', 'Required', 'Not required', 'Not required', 'Ohters', '', '2023-07-17', 'Wi', '0000-00-00', '0000-00-00 00:00:00.000000', NULL);

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
  `Technician` varchar(10) NOT NULL,
  `Test Method` varchar(10) NOT NULL,
  `Preparation Method` varchar(10) NOT NULL,
  `Test Start Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Density Trial Number 1` int(1) NOT NULL,
  `Density Trial Number 2` int(1) NOT NULL,
  `Density Trial Number 3` int(1) NOT NULL,
  `Density Trial Number 4` int(1) NOT NULL,
  `Density Trial Number 5` int(1) NOT NULL,
  `Density Trial Number 6` int(1) NOT NULL,
  `Density Wet Soil + Mold 1` float NOT NULL,
  `Density Wet Soil + Mold 2` float NOT NULL,
  `Density Wet Soil + Mold 3` float NOT NULL,
  `Density Wet Soil + Mold 4` float NOT NULL,
  `Density Wet Soil + Mold 5` float NOT NULL,
  `Density Wet Soil + Mold 6` float NOT NULL,
  `Mold (g)` float NOT NULL,
  `Vol Mold cm3` float NOT NULL,
  `Wet Soil (g) 1` float NOT NULL,
  `Wet Soil (g) 2` float NOT NULL,
  `Wet Soil (g) 3` float NOT NULL,
  `Wet Soil (g) 4` float NOT NULL,
  `Wet Soil (g) 5` float NOT NULL,
  `Wet Soil (g) 6` float NOT NULL,
  `Wet Density kg/m3 1` float NOT NULL,
  `Wet Density kg/m3 2` float NOT NULL,
  `Wet Density kg/m3 3` float NOT NULL,
  `Wet Density kg/m3 4` float NOT NULL,
  `Wet Density kg/m3 5` float NOT NULL,
  `Wet Density kg/m3 6` float NOT NULL,
  `Dry Density kg/m3 1` float NOT NULL,
  `Dry Density kg/m3 2` float NOT NULL,
  `Dry Density kg/m3 3` float NOT NULL,
  `Dry Density kg/m3 4` float NOT NULL,
  `Dry Density kg/m3 5` float NOT NULL,
  `Dry Density kg/m3 6` float NOT NULL,
  `MC Trial Number 1` int(1) NOT NULL,
  `MC Trial Number 2` int(1) NOT NULL,
  `MC Trial Number 3` int(1) NOT NULL,
  `MC Trial Number 4` int(1) NOT NULL,
  `MC Trial Number 5` int(1) NOT NULL,
  `MC Trial Number 6` int(1) NOT NULL,
  `MC Container 1` varchar(10) NOT NULL,
  `MC Container 2` varchar(10) NOT NULL,
  `MC Container 3` varchar(10) NOT NULL,
  `MC Container 4` varchar(10) NOT NULL,
  `MC Container 5` varchar(10) NOT NULL,
  `MC Container 6` varchar(10) NOT NULL,
  `MC Wet Soil + Tare 1` float NOT NULL,
  `MC Wet Soil + Tare 2` float NOT NULL,
  `MC Wet Soil + Tare 3` float NOT NULL,
  `MC Wet Soil + Tare 4` float NOT NULL,
  `MC Wet Soil + Tare 5` float NOT NULL,
  `MC Wet Soil + Tare 6` float NOT NULL,
  `MC Dry Soil + Tare 1` float NOT NULL,
  `MC Dry Soil + Tare 2` float NOT NULL,
  `MC Dry Soil + Tare 3` float NOT NULL,
  `MC Dry Soil + Tare 4` float NOT NULL,
  `MC Dry Soil + Tare 5` float NOT NULL,
  `MC Dry Soil + Tare 6` float NOT NULL,
  `Water (g) 1` float NOT NULL,
  `Water (g) 2` float NOT NULL,
  `Water (g) 3` float NOT NULL,
  `Water (g) 4` float NOT NULL,
  `Water (g) 5` float NOT NULL,
  `Water (g) 6` float NOT NULL,
  `Tare (g) 1` float NOT NULL,
  `Tare (g) 2` float NOT NULL,
  `Tare (g) 3` float NOT NULL,
  `Tare (g) 4` float NOT NULL,
  `Tare (g) 5` float NOT NULL,
  `Tare (g) 6` float NOT NULL,
  `MC Dry Soil (g) 1` float NOT NULL,
  `MC Dry Soil (g) 2` float NOT NULL,
  `MC Dry Soil (g) 3` float NOT NULL,
  `MC Dry Soil (g) 4` float NOT NULL,
  `MC Dry Soil (g) 5` float NOT NULL,
  `MC Dry Soil (g) 6` float NOT NULL,
  `MC (%) 1` float NOT NULL,
  `MC (%) 2` float NOT NULL,
  `MC (%) 3` float NOT NULL,
  `MC (%) 4` float NOT NULL,
  `MC (%) 5` float NOT NULL,
  `MC (%) 6` float NOT NULL,
  `Max Dry Density kg/m3` float NOT NULL,
  `Optimun Moisture Content (%)` float NOT NULL,
  `Starndard Proctor Plot` blob NOT NULL,
  `Lab Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(1, 'Admin Users', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'pzg9wa7o1.jpg', 1, '2023-08-17 13:14:06'),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
