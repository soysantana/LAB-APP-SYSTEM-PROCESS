-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 13:58:19
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
-- Estructura de tabla para la tabla `alteraded_samples`
--

CREATE TABLE `alteraded_samples` (
  `id` int(150) NOT NULL,
  `Sample_ID` varchar(125) NOT NULL,
  `Sample_Number` varchar(150) NOT NULL,
  `Sample_Type` varchar(25) NOT NULL,
  `Depth_From` decimal(10,2) NOT NULL,
  `Depth_To` decimal(10,2) NOT NULL,
  `Sample_Weight` decimal(10,2) DEFAULT NULL,
  `Sample_Date` date NOT NULL,
  `Store_In` varchar(25) NOT NULL,
  `Comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Nat_Mc` float NOT NULL,
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
  `Classification` varchar(10) DEFAULT NULL,
  `Liquid_Limit_Plot` blob DEFAULT NULL,
  `Plasticity_Chart` longblob DEFAULT NULL,
  `Comments` varchar(100) DEFAULT NULL,
  `Test_Start_Date` date DEFAULT NULL,
  `Report_Date` date DEFAULT NULL,
  `test_type` varchar(10) DEFAULT NULL,
  `Standard` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `atterberg_limit`
--

INSERT INTO `atterberg_limit` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Technician`, `Split_Method`, `Preparation_Method`, `Nat_Mc`, `LL_Blows_1`, `LL_Blows_2`, `LL_Blows_3`, `LL_Container_1`, `LL_Container_2`, `LL_Container_3`, `LL_Wet_Soil_1`, `LL_Wet_Soil_2`, `LL_Wet_Soil_3`, `LL_Dry_soil_tare1`, `LL_Dry_soil_tare2`, `LL_Dry_soil_tare3`, `LL_Water_1`, `LL_Water_2`, `LL_Water_3`, `LL_Tare_1`, `LL_Tare_2`, `LL_Tare_3`, `LL_Wt_Dry_Soil_1`, `LL_Wt_Dry_Soil_2`, `LL_Wt_Dry_Soil_3`, `LL_MC_Porce_1`, `LL_MC_Porce_2`, `LL_MC_Porce_3`, `PL_Container_1`, `PL_Container_2`, `PL_Container_3`, `PL_Wet_Soil_1`, `PL_Wet_Soil_2`, `PL_Wet_Soil_3`, `PL_Dry_soil_tare1`, `PL_Dry_soil_tare2`, `PL_Dry_soil_tare3`, `PL_Water_1`, `PL_Water_2`, `PL_Water_3`, `PL_Tare_1`, `PL_Tare_2`, `PL_Tare_3`, `PL_Wt_Dry_Soil_1`, `PL_Wt_Dry_Soil_2`, `PL_Wt_Dry_Soil_3`, `PL_MC_Porce_1`, `PL_MC_Porce_2`, `PL_MC_Porce_3`, `PL_Avg_Mc`, `Liquid_Limit_Porce`, `Plastic_Limit_Porce`, `Plasticity_Index_Porce`, `Liquidity_Index_Porce`, `Classification`, `Liquid_Limit_Plot`, `Plasticity_Chart`, `Comments`, `Test_Start_Date`, `Report_Date`, `test_type`, `Standard`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'Site Investigation', 'TSF Naranjo', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', 'AS', 'Mechanical', 'Microwave_Dried', 10, 31, 24, 15, 'LAB-01', 'LAB-02', 'LAB-03', 25.342, 25.657, 25.984, 21.82, 21.972, 22.04, 3.52, 3.68, 3.94, 15.709, 15.767, 15.755, 6.11, 6.21, 6.28, 57.63, 59.39, 62.75, 'LAB-04', 'LAB-05', 'LAB-06', 33.779, 37.015, 37.015, 31.877, 34.877, 34.877, 1.9, 2.14, 2.14, 24.273, 26.572, 26.572, 7.6, 8.31, 8.31, 25.01, 25.74, 25.74, 25.5, 59, 26, 34, -0.4608, 'CH or OH', NULL, NULL, 'N/A', '2023-10-10', '2023-10-23', 'AL', 'ASTM-D4318');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concrete_specimens`
--

CREATE TABLE `concrete_specimens` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Diameter_N1` float DEFAULT NULL,
  `Diameter_N2` float DEFAULT NULL,
  `Diameter_N3` float DEFAULT NULL,
  `Diameter_N4` float DEFAULT NULL,
  `Diameter_N5` float DEFAULT NULL,
  `High_N1` float DEFAULT NULL,
  `High_N2` float DEFAULT NULL,
  `High_N3` float DEFAULT NULL,
  `High_N4` float DEFAULT NULL,
  `High_N5` float DEFAULT NULL,
  `Area_m2_N1` float DEFAULT NULL,
  `Area_m2_N2` float DEFAULT NULL,
  `Area_m2_N3` float DEFAULT NULL,
  `Area_m2_N4` float DEFAULT NULL,
  `Area_m2_N5` float DEFAULT NULL,
  `Volumen_m3_N1` float DEFAULT NULL,
  `Volumen_m3_N2` float DEFAULT NULL,
  `Volumen_m3_N3` float DEFAULT NULL,
  `Volumen_m3_N4` float DEFAULT NULL,
  `Volumen_m3_N5` float DEFAULT NULL,
  `Weight_Cylinder_kg_N1` float DEFAULT NULL,
  `Weight_Cylinder_kg_N2` float DEFAULT NULL,
  `Weight_Cylinder_kg_N3` float DEFAULT NULL,
  `Weight_Cylinder_kg_N4` float DEFAULT NULL,
  `Weight_Cylinder_kg_N5` float DEFAULT NULL,
  `Age_Days_N1` float DEFAULT NULL,
  `Age_Days_N2` float DEFAULT NULL,
  `Age_Days_N3` float DEFAULT NULL,
  `Age_Days_N4` float DEFAULT NULL,
  `Age_Days_N5` float DEFAULT NULL,
  `Unit_Weight_kgm3_N1` float DEFAULT NULL,
  `Unit_Weight_kgm3_N2` float DEFAULT NULL,
  `Unit_Weight_kgm3_N3` float DEFAULT NULL,
  `Unit_Weight_kgm3_N4` float DEFAULT NULL,
  `Unit_Weight_kgm3_N5` float DEFAULT NULL,
  `Failure_Load_kn_N1` float DEFAULT NULL,
  `Failure_Load_kn_N2` float DEFAULT NULL,
  `Failure_Load_kn_N3` float DEFAULT NULL,
  `Failure_Load_kn_N4` float DEFAULT NULL,
  `Failure_Load_kn_N5` float DEFAULT NULL,
  `Strenght_Mpa_N1` float DEFAULT NULL,
  `Strenght_Mpa_N2` float DEFAULT NULL,
  `Strenght_Mpa_N3` float DEFAULT NULL,
  `Strenght_Mpa_N4` float DEFAULT NULL,
  `Strenght_Mpa_N5` float DEFAULT NULL,
  `Average_Strenght_Mpa` float DEFAULT NULL,
  `Type_Fracture_N1` float DEFAULT NULL,
  `Type_Fracture_N2` float DEFAULT NULL,
  `Type_Fracture_N3` float DEFAULT NULL,
  `Type_Fracture_N4` float DEFAULT NULL,
  `Type_Fracture_N5` float DEFAULT NULL,
  `Observations_N1` varchar(30) NOT NULL,
  `Observations_N2` varchar(30) NOT NULL,
  `Observations_N3` varchar(30) NOT NULL,
  `Observations_N4` varchar(30) NOT NULL,
  `Observations_N5` varchar(30) NOT NULL,
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
  `Technician` varchar(10) NOT NULL,
  `Picture_1` mediumblob NOT NULL,
  `Picture_2` mediumblob NOT NULL,
  `Picture_3` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `concrete_specimens`
--

INSERT INTO `concrete_specimens` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Diameter_N1`, `Diameter_N2`, `Diameter_N3`, `Diameter_N4`, `Diameter_N5`, `High_N1`, `High_N2`, `High_N3`, `High_N4`, `High_N5`, `Area_m2_N1`, `Area_m2_N2`, `Area_m2_N3`, `Area_m2_N4`, `Area_m2_N5`, `Volumen_m3_N1`, `Volumen_m3_N2`, `Volumen_m3_N3`, `Volumen_m3_N4`, `Volumen_m3_N5`, `Weight_Cylinder_kg_N1`, `Weight_Cylinder_kg_N2`, `Weight_Cylinder_kg_N3`, `Weight_Cylinder_kg_N4`, `Weight_Cylinder_kg_N5`, `Age_Days_N1`, `Age_Days_N2`, `Age_Days_N3`, `Age_Days_N4`, `Age_Days_N5`, `Unit_Weight_kgm3_N1`, `Unit_Weight_kgm3_N2`, `Unit_Weight_kgm3_N3`, `Unit_Weight_kgm3_N4`, `Unit_Weight_kgm3_N5`, `Failure_Load_kn_N1`, `Failure_Load_kn_N2`, `Failure_Load_kn_N3`, `Failure_Load_kn_N4`, `Failure_Load_kn_N5`, `Strenght_Mpa_N1`, `Strenght_Mpa_N2`, `Strenght_Mpa_N3`, `Strenght_Mpa_N4`, `Strenght_Mpa_N5`, `Average_Strenght_Mpa`, `Type_Fracture_N1`, `Type_Fracture_N2`, `Type_Fracture_N3`, `Type_Fracture_N4`, `Type_Fracture_N5`, `Observations_N1`, `Observations_N2`, `Observations_N3`, `Observations_N4`, `Observations_N5`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`, `Picture_1`, `Picture_2`, `Picture_3`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM C88', 'Oven_Dried', 'Man_Split', 50, 0, 0, 0, 0, 50, 0, 0, 0, 0, 0.0025, 0, 0, 0, 0, 0.000125, 0, 0, 0, 0, 2.979, 0, 0, 0, 0, 16, 0, 0, 0, 0, 23832, 0, 0, 0, 0, 100.61, 0, 0, 0, 0, 40.25, 0, 0, 0, 0, 8.05, 1, 0, 0, 0, 0, 'N/A', '', '', '', '', 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-16', 'Pass', 'UCS-Concre', 'AS', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consolidation`
--

CREATE TABLE `consolidation` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Date_No1` date NOT NULL,
  `Date_No2` date NOT NULL,
  `Date_No3` date NOT NULL,
  `Date_No4` date NOT NULL,
  `Date_No5` date NOT NULL,
  `Date_No6` date NOT NULL,
  `Date_No7` date NOT NULL,
  `Date_No8` date NOT NULL,
  `Date_No9` date NOT NULL,
  `Date_No10` date NOT NULL,
  `Date_No11` date NOT NULL,
  `Date_No12` date NOT NULL,
  `Date_No13` date NOT NULL,
  `Date_No14` date NOT NULL,
  `Date_No15` date NOT NULL,
  `Date_No16` date NOT NULL,
  `Name_Mass_on_Hangar_Colum1` varchar(30) NOT NULL,
  `Mass_on_Hangar_Colum1_No1` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No2` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No3` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No4` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No5` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No6` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No7` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No8` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No9` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No10` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No11` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No12` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No13` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No14` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No15` float DEFAULT NULL,
  `Mass_on_Hangar_Colum1_No16` float DEFAULT NULL,
  `Name_Mass_on_Hangar_Colum2` varchar(30) NOT NULL,
  `Mass_on_Hangar_Colum2_No1` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No2` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No3` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No4` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No5` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No6` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No7` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No8` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No9` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No10` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No11` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No12` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No13` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No14` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No15` float DEFAULT NULL,
  `Mass_on_Hangar_Colum2_No16` float DEFAULT NULL,
  `Name_Mass_on_Hangar_Colum3` varchar(30) NOT NULL,
  `Mass_on_Hangar_Colum3_No1` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No2` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No3` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No4` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No5` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No6` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No7` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No8` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No9` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No10` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No11` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No12` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No13` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No14` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No15` float DEFAULT NULL,
  `Mass_on_Hangar_Colum3_No16` float DEFAULT NULL,
  `Name_Mass_on_Hangar_Colum4` varchar(30) NOT NULL,
  `Mass_on_Hangar_Colum4_No1` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No2` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No3` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No4` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No5` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No6` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No7` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No8` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No9` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No10` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No11` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No12` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No13` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No14` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No15` float DEFAULT NULL,
  `Mass_on_Hangar_Colum4_No16` float DEFAULT NULL,
  `Name_Mass_on_Hangar_Colum5` varchar(30) NOT NULL,
  `Mass_on_Hangar_Colum5_No1` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No2` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No3` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No4` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No5` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No6` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No7` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No8` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No9` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No10` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No11` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No12` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No13` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No14` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No15` float DEFAULT NULL,
  `Mass_on_Hangar_Colum5_No16` float DEFAULT NULL,
  `Name_Mass_on_Hangar_Colum6` varchar(30) NOT NULL,
  `Mass_on_Hangar_Colum6_No1` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No2` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No3` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No4` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No5` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No6` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No7` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No8` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No9` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No10` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No11` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No12` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No13` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No14` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No15` float DEFAULT NULL,
  `Mass_on_Hangar_Colum6_No16` float DEFAULT NULL,
  `Tare_No` varchar(30) NOT NULL,
  `Mass_of_Tare_gr` float DEFAULT NULL,
  `Mass_of_Wet_Soil_Tare_gr` float DEFAULT NULL,
  `Mass_of_Dry_Soil_Tare` float DEFAULT NULL,
  `Mass_of_Water` float DEFAULT NULL,
  `Mass_of_Dry_Soil_gr` float DEFAULT NULL,
  `Initial_Moisture_Conten_Porce_Wfp` float DEFAULT NULL,
  `Diamter_cm` float DEFAULT NULL,
  `Height_cm` float DEFAULT NULL,
  `Area_A_cm2` float DEFAULT NULL,
  `Volume_Vo_cm3` float DEFAULT NULL,
  `Weight_gr` float DEFAULT NULL,
  `Initial_Mois_Mass_Ring_gr` float DEFAULT NULL,
  `Initial_Mois_Mass` float DEFAULT NULL,
  `Final_Dry_Mass_Ring_gr` float DEFAULT NULL,
  `Final_Dry_Mass_gr` float DEFAULT NULL,
  `Initial_Dry_Density_g_cm3` float DEFAULT NULL,
  `Dry_Unit_Weight_Yd_KN_m3` float DEFAULT NULL,
  `Density_of_Water_pW_gr_cm3` float DEFAULT NULL,
  `Specific_Gravity_Gs` float DEFAULT NULL,
  `Dry_Mass_Of_The_Total_Specimen_Md_gr` float DEFAULT NULL,
  `Volume_of_Solids_Vs_cm3` float DEFAULT NULL,
  `Equivalent_Height_of_Solids_Hs_cm` float DEFAULT NULL,
  `Initial_specimen_height_Ho_cm` float DEFAULT NULL,
  `Final_specimen_height_Hf_cm` float DEFAULT NULL,
  `Void_ratio_before_test_Eo` float DEFAULT NULL,
  `Void_ratio_after_test_ef` float DEFAULT NULL,
  `Mass_Weight_of_Tare_gr_Initial` float DEFAULT NULL,
  `Mass_Weight_of_Tare_gr_Final` float DEFAULT NULL,
  `Mass_Weight_Wet_Soil_Tare_gr_Initial` float DEFAULT NULL,
  `Mass_Weight_Wet_Soil_Tare_gr_Final` float DEFAULT NULL,
  `Mass_Weight_Dry_Soil_Tare_gr_Initial` float DEFAULT NULL,
  `Mass_Weight_Dry_Soil_Tare_gr_Final` float DEFAULT NULL,
  `Mass_of_Water_gr_Initial` float DEFAULT NULL,
  `Mass_of_Water_gr_Final` float DEFAULT NULL,
  `Weight_Wet_Soil_gr_Initial` float DEFAULT NULL,
  `Weight_Wet_Soil_gr_Final` float DEFAULT NULL,
  `Weight_Dry_Soil_gr_Initial` float DEFAULT NULL,
  `Weight_Dry_Soil_gr_Final` float DEFAULT NULL,
  `Moisture_Content_Porce_Initial` float DEFAULT NULL,
  `Moisture_Content_Porce_Final` float DEFAULT NULL,
  `Initial_Degree_of_Saturation_Porce` float DEFAULT NULL,
  `Final_Degree_of_Saturation_Porce` float DEFAULT NULL,
  `Loading_Decrements_Name_Kg_No1` varchar(20) NOT NULL,
  `Loading_Decrements_Name_Kg_No2` varchar(20) NOT NULL,
  `Loading_Decrements_Name_Kg_No3` varchar(20) NOT NULL,
  `Loading_Decrements_Name_Kg_No4` varchar(20) NOT NULL,
  `Loading_Decrements_Value_No1` float DEFAULT NULL,
  `Loading_Decrements_Value_No2` float DEFAULT NULL,
  `Loading_Decrements_Value_No3` float DEFAULT NULL,
  `Loading_Decrements_Value_No4` float DEFAULT NULL,
  `Factor_Dial` float DEFAULT NULL,
  `Load_Incement_Kg_No1` float DEFAULT NULL,
  `Load_Incement_Kg_No2` float DEFAULT NULL,
  `Load_Incement_Kg_No3` float DEFAULT NULL,
  `Load_Incement_Kg_No4` float DEFAULT NULL,
  `Load_Incement_Kg_No5` float DEFAULT NULL,
  `Load_Incement_Kg_No6` float DEFAULT NULL,
  `Load_Incement_Kg_No7` float DEFAULT NULL,
  `Load_Incement_Kg_No8` float DEFAULT NULL,
  `Load_Incement_Kg_No9` float DEFAULT NULL,
  `Load_Incement_Kg_No10` float DEFAULT NULL,
  `Ov_Kg_cm2_No1` float DEFAULT NULL,
  `Ov_Kg_cm2_No2` float DEFAULT NULL,
  `Ov_Kg_cm2_No3` float DEFAULT NULL,
  `Ov_Kg_cm2_No4` float DEFAULT NULL,
  `Ov_Kg_cm2_No5` float DEFAULT NULL,
  `Ov_Kg_cm2_No6` float DEFAULT NULL,
  `Ov_Kg_cm2_No7` float DEFAULT NULL,
  `Ov_Kg_cm2_No8` float DEFAULT NULL,
  `Ov_Kg_cm2_No9` float DEFAULT NULL,
  `Ov_Kg_cm2_No10` float DEFAULT NULL,
  `Reading_Dial_No1` float DEFAULT NULL,
  `Reading_Dial_No2` float DEFAULT NULL,
  `Reading_Dial_No3` float DEFAULT NULL,
  `Reading_Dial_No4` float DEFAULT NULL,
  `Reading_Dial_No5` float DEFAULT NULL,
  `Reading_Dial_No6` float DEFAULT NULL,
  `Reading_Dial_No7` float DEFAULT NULL,
  `Reading_Dial_No8` float DEFAULT NULL,
  `Reading_Dial_No9` float DEFAULT NULL,
  `Reading_Dial_No10` float DEFAULT NULL,
  `AH_mm_No1` float DEFAULT NULL,
  `AH_mm_No2` float DEFAULT NULL,
  `AH_mm_No3` float DEFAULT NULL,
  `AH_mm_No4` float DEFAULT NULL,
  `AH_mm_No5` float DEFAULT NULL,
  `AH_mm_No6` float DEFAULT NULL,
  `AH_mm_No7` float DEFAULT NULL,
  `AH_mm_No8` float DEFAULT NULL,
  `AH_mm_No9` float DEFAULT NULL,
  `AH_mm_No10` float DEFAULT NULL,
  `e_AH_Ho_No1` float DEFAULT NULL,
  `e_AH_Ho_No2` float DEFAULT NULL,
  `e_AH_Ho_No3` float DEFAULT NULL,
  `e_AH_Ho_No4` float DEFAULT NULL,
  `e_AH_Ho_No5` float DEFAULT NULL,
  `e_AH_Ho_No6` float DEFAULT NULL,
  `e_AH_Ho_No7` float DEFAULT NULL,
  `e_AH_Ho_No8` float DEFAULT NULL,
  `e_AH_Ho_No9` float DEFAULT NULL,
  `e_AH_Ho_No10` float DEFAULT NULL,
  `AH_Hs_No1` float DEFAULT NULL,
  `AH_Hs_No2` float DEFAULT NULL,
  `AH_Hs_No3` float DEFAULT NULL,
  `AH_Hs_No4` float DEFAULT NULL,
  `AH_Hs_No5` float DEFAULT NULL,
  `AH_Hs_No6` float DEFAULT NULL,
  `AH_Hs_No7` float DEFAULT NULL,
  `AH_Hs_No8` float DEFAULT NULL,
  `AH_Hs_No9` float DEFAULT NULL,
  `AH_Hs_No10` float DEFAULT NULL,
  `Ov_e_No1` float DEFAULT NULL,
  `Ov_e_No2` float DEFAULT NULL,
  `Ov_e_No3` float DEFAULT NULL,
  `Ov_e_No4` float DEFAULT NULL,
  `Ov_e_No5` float DEFAULT NULL,
  `Ov_e_No6` float DEFAULT NULL,
  `Ov_e_No7` float DEFAULT NULL,
  `Ov_e_No8` float DEFAULT NULL,
  `Ov_e_No9` float DEFAULT NULL,
  `Ov_e_No10` float DEFAULT NULL,
  `e_No1` float DEFAULT NULL,
  `e_No2` float DEFAULT NULL,
  `e_No3` float DEFAULT NULL,
  `e_No4` float DEFAULT NULL,
  `e_No5` float DEFAULT NULL,
  `e_No6` float DEFAULT NULL,
  `e_No7` float DEFAULT NULL,
  `e_No8` float DEFAULT NULL,
  `e_No9` float DEFAULT NULL,
  `e_No10` float DEFAULT NULL,
  `Lectura_Dial_No1` float DEFAULT NULL,
  `Lectura_Dial_No2` float DEFAULT NULL,
  `Lectura_Dial_No3` float DEFAULT NULL,
  `Lectura_Dial_No4` float DEFAULT NULL,
  `Lectura_Dial_No5` float DEFAULT NULL,
  `Lectura_Dial_No6` float DEFAULT NULL,
  `Lectura_Dial_No7` float DEFAULT NULL,
  `Deformacion_cm_No1` float DEFAULT NULL,
  `Deformacion_cm_No2` float DEFAULT NULL,
  `Deformacion_cm_No3` float DEFAULT NULL,
  `Deformacion_cm_No4` float DEFAULT NULL,
  `Deformacion_cm_No5` float DEFAULT NULL,
  `Deformacion_cm_No6` float DEFAULT NULL,
  `Deformacion_cm_No7` float DEFAULT NULL,
  `Peso_Kg_No1` float DEFAULT NULL,
  `Peso_Kg_No2` float DEFAULT NULL,
  `Peso_Kg_No3` float DEFAULT NULL,
  `Peso_Kg_No4` float DEFAULT NULL,
  `Peso_Kg_No5` float DEFAULT NULL,
  `Peso_Kg_No6` float DEFAULT NULL,
  `Peso_Kg_No7` float DEFAULT NULL,
  `o_Kg_cm2_No1` float DEFAULT NULL,
  `o_Kg_cm2_No2` float DEFAULT NULL,
  `o_Kg_cm2_No3` float DEFAULT NULL,
  `o_Kg_cm2_No4` float DEFAULT NULL,
  `o_Kg_cm2_No5` float DEFAULT NULL,
  `o_Kg_cm2_No6` float DEFAULT NULL,
  `o_Kg_cm2_No7` float DEFAULT NULL,
  `Ao_Kg_cm2_No1` float DEFAULT NULL,
  `Ao_Kg_cm2_No2` float DEFAULT NULL,
  `Ao_Kg_cm2_No3` float DEFAULT NULL,
  `Ao_Kg_cm2_No4` float DEFAULT NULL,
  `Ao_Kg_cm2_No5` float DEFAULT NULL,
  `Ao_Kg_cm2_No6` float DEFAULT NULL,
  `Ao_Kg_cm2_No7` float DEFAULT NULL,
  `Ah_mm_Col2_No1` float DEFAULT NULL,
  `Ah_mm_Col2_No2` float DEFAULT NULL,
  `Ah_mm_Col2_No3` float DEFAULT NULL,
  `Ah_mm_Col2_No4` float DEFAULT NULL,
  `Ah_mm_Col2_No5` float DEFAULT NULL,
  `Ah_mm_Col2_No6` float DEFAULT NULL,
  `Ah_mm_Col2_No7` float DEFAULT NULL,
  `Ae_No1` float DEFAULT NULL,
  `Ae_No2` float DEFAULT NULL,
  `Ae_No3` float DEFAULT NULL,
  `Ae_No4` float DEFAULT NULL,
  `Ae_No5` float DEFAULT NULL,
  `Ae_No6` float DEFAULT NULL,
  `Ae_No7` float DEFAULT NULL,
  `e_Col2_No1` float DEFAULT NULL,
  `e_Col2_No2` float DEFAULT NULL,
  `e_Col2_No3` float DEFAULT NULL,
  `e_Col2_No4` float DEFAULT NULL,
  `e_Col2_No5` float DEFAULT NULL,
  `e_Col2_No6` float DEFAULT NULL,
  `e_Col2_No7` float DEFAULT NULL,
  `Ae_Ao_cm2_Kg_No1` float DEFAULT NULL,
  `Ae_Ao_cm2_Kg_No2` float DEFAULT NULL,
  `Ae_Ao_cm2_Kg_No3` float DEFAULT NULL,
  `Ae_Ao_cm2_Kg_No4` float DEFAULT NULL,
  `Ae_Ao_cm2_Kg_No5` float DEFAULT NULL,
  `Ae_Ao_cm2_Kg_No6` float DEFAULT NULL,
  `Ae_Ao_cm2_Kg_No7` float DEFAULT NULL,
  `Cv_cm2_Kg_No1` float DEFAULT NULL,
  `Cv_cm2_Kg_No2` float DEFAULT NULL,
  `Cv_cm2_Kg_No3` float DEFAULT NULL,
  `Cv_cm2_Kg_No4` float DEFAULT NULL,
  `Cv_cm2_Kg_No5` float DEFAULT NULL,
  `Cv_cm2_Kg_No6` float DEFAULT NULL,
  `Cv_cm2_Kg_No7` float DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `count_gama`
--

CREATE TABLE `count_gama` (
  `id` int(11) NOT NULL,
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

INSERT INTO `count_gama` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Date_Count_1`, `Date_Count_2`, `Date_Count_3`, `Date_Count_4`, `Date_Count_5`, `Value_Count_1`, `Value_Count_2`, `Value_Count_3`, `Value_Count_4`, `Value_Count_5`, `Rank_Date_1`, `Rank_Date_2`, `Rank_Date_3`, `Rank_Date_4`, `Rank_Date_5`, `Operator_1`, `Operator_2`, `Operator_3`, `Operator_4`, `Operator_5`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM D6938', 'B', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5', 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-12', 'N/A', 'Count-gamm', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `density_bulk`
--

CREATE TABLE `density_bulk` (
  `id` int(11) NOT NULL,
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
  `test_type` varchar(30) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `density_bulk`
--

INSERT INTO `density_bulk` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Container`, `Weight_Tare_g`, `Weight_Tare_Soil_g`, `Volume_The_Mold_m3`, `Weight_Loose_Material_g`, `Absorption_Porce`, `Specific_Gravity_OD`, `Density_Water_Kgm3`, `Loose_Bulk_Denisty_Kgm3`, `Percent_Voids_Loose_Aggregate`, `Compacted_Weight_Tare_g`, `Compacted_Weight_Tare_Soil_g`, `Compacted_Volume_The_Mold_m3`, `Weight_Compacted_Material_g`, `Compacted_Absorption_Porce`, `Compacted_Specific_Gravity_OD`, `Compacted_Density_Water_Kgm3`, `Compacted_Bulk_Denisty_Kgm3`, `Percent_Voids_Compacted_Aggregate`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM C29', 'A', 'PAG22-02-1	', 4500, 232500, 0.12716, 228000, 2.45, 2.74, 993, 1793.02, 34.1, 4500, 248000, 0.12716, 243500, 2.45, 2.74, 997, 1914.91, 29.9, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-12', 'N/A', 'Bulk-density', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `density_weigth`
--

CREATE TABLE `density_weigth` (
  `id` int(11) NOT NULL,
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

INSERT INTO `density_weigth` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Shape_Type_1`, `Shape_Type_2`, `Shape_Type_3`, `Mass_Moist_Specimen_1`, `Mass_Moist_Specimen_2`, `Mass_Moist_Specimen_3`, `Diameter_Width_1`, `Diameter_Width_2`, `Diameter_Width_3`, `Height_1`, `Height_2`, `Height_3`, `Length_1`, `Length_2`, `Length_3`, `Volumes_Moist_Soil_1`, `Volumes_Moist_Soil_2`, `Volumes_Moist_Soil_3`, `Total_Volumes_Moist_Specimen`, `Mass_Moist_Total_Specimens`, `Water_Content_Specimen`, `Density_Total_Moist_Specimen`, `Moist_Unit_Weight_Specimen_grcm3`, `Moist_Unit_Weight_Specimen_KNm3`, `Dry_Unit_Weight_Specimen_KNm3`, `Moist_Unit_Weight_Specimen_Kgm3`, `Dry_Unit_Weight_Specimen_Kgm3`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D7263', 'B', 'Cylindrical', 'Cylindrical', 'Cylindrical', 625, 645, 658, 49, 49, 49, 118, 118, 118, 0, 0, 0, 222.52, 222.52, 222.52, 222.52, 642.67, 4.6, 2.89, 2.76, 28.32, 27.08, 2832.32, 2707.76, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-12', '2023-10-12', 'N/A', 'Weigth-den', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `double_hydrometer`
--

CREATE TABLE `double_hydrometer` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Dispersing_Agent` varchar(20) NOT NULL,
  `Amount_Used_g` float DEFAULT NULL,
  `Temperature_of_Test` varchar(20) NOT NULL,
  `Viscosity_of_Water_gs_cm2` float DEFAULT NULL,
  `Mass_Density_of_Water_Calibrated` float DEFAULT NULL,
  `Acceleration_cm_s2` float DEFAULT NULL,
  `Volume_of_Suspension_Vsp_cm3` float DEFAULT NULL,
  `Meniscus_Correction_Cm` float DEFAULT NULL,
  `Percent_Passing_No_200_sieve` float DEFAULT NULL,
  `Specific_Gravity` float DEFAULT NULL,
  `Tare_Name_50gr` varchar(30) NOT NULL,
  `Tare_Name_25gr` varchar(30) NOT NULL,
  `Oven_Temperature_50gr` varchar(20) NOT NULL,
  `Oven_Temperature_25gr` varchar(20) NOT NULL,
  `Tare_Plus_Wet_Soil_50gr` float DEFAULT NULL,
  `Tare_Plus_Wet_Soil_25gr` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_50gr` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_25gr` float DEFAULT NULL,
  `Water_Ww_50gr` float DEFAULT NULL,
  `Water_Ww_25gr` float DEFAULT NULL,
  `Tare_50gr` float DEFAULT NULL,
  `Tare_25gr` float DEFAULT NULL,
  `Dry_Soil_Ws_50gr` float DEFAULT NULL,
  `Dry_Soil_Ws_25gr` float DEFAULT NULL,
  `Moisture_Content_Porce_50gr` float DEFAULT NULL,
  `Moisture_Content_Porce_25gr` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No1` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No2` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No3` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No4` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No5` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No6` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No7` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No8` float DEFAULT NULL,
  `Hy_Calibration_50gr_Temperature_No9` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No1` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No2` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No3` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No4` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No5` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No6` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No7` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No8` float DEFAULT NULL,
  `Hy_Calibration_50gr_Actual_Reading_No9` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No1` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No2` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No3` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No4` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No5` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No6` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No7` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No8` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Temperature_No9` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No1` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No2` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No3` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No4` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No5` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No6` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No7` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No8` float DEFAULT NULL,
  `Hy_Measure_Fluid_50gr_Actual_Reading_No9` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No1` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No2` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No3` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No4` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No5` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No6` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No7` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No8` float DEFAULT NULL,
  `Hy_Calibration_25gr_Temperature_No9` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No1` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No2` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No3` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No4` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No5` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No6` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No7` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No8` float DEFAULT NULL,
  `Hy_Calibration_25gr_Actual_Reading_No9` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No1` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No2` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No3` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No4` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No5` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No6` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No7` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No8` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Temperature_No9` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No1` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No2` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No3` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No4` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No5` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No6` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No7` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No8` float DEFAULT NULL,
  `Hy_Measure_Fluid_25gr_Actual_Reading_No9` float DEFAULT NULL,
  `gr25_Date_No1` date NOT NULL,
  `gr25_Date_No2` date NOT NULL,
  `gr25_Date_No3` date NOT NULL,
  `gr25_Date_No4` date NOT NULL,
  `gr25_Date_No5` date NOT NULL,
  `gr25_Date_No6` date NOT NULL,
  `gr25_Date_No7` date NOT NULL,
  `gr25_Date_No8` date NOT NULL,
  `gr25_Date_No9` date NOT NULL,
  `gr25_Hour_No1` time NOT NULL,
  `gr25_Hour_No2` time NOT NULL,
  `gr25_Hour_No3` time NOT NULL,
  `gr25_Hour_No4` time NOT NULL,
  `gr25_Hour_No5` time NOT NULL,
  `gr25_Hour_No6` time NOT NULL,
  `gr25_Hour_No7` time NOT NULL,
  `gr25_Hour_No8` time NOT NULL,
  `gr25_Hour_No9` time NOT NULL,
  `gr25_Reading_Time_min_No1` float DEFAULT NULL,
  `gr25_Reading_Time_min_No2` float DEFAULT NULL,
  `gr25_Reading_Time_min_No3` float DEFAULT NULL,
  `gr25_Reading_Time_min_No4` float DEFAULT NULL,
  `gr25_Reading_Time_min_No5` float DEFAULT NULL,
  `gr25_Reading_Time_min_No6` float DEFAULT NULL,
  `gr25_Reading_Time_min_No7` float DEFAULT NULL,
  `gr25_Reading_Time_min_No8` float DEFAULT NULL,
  `gr25_Reading_Time_min_No9` float DEFAULT NULL,
  `gr25_Temp_No1` float DEFAULT NULL,
  `gr25_Temp_No2` float DEFAULT NULL,
  `gr25_Temp_No3` float DEFAULT NULL,
  `gr25_Temp_No4` float DEFAULT NULL,
  `gr25_Temp_No5` float DEFAULT NULL,
  `gr25_Temp_No6` float DEFAULT NULL,
  `gr25_Temp_No7` float DEFAULT NULL,
  `gr25_Temp_No8` float DEFAULT NULL,
  `gr25_Temp_No9` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No1` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No2` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No3` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No4` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No5` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No6` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No7` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No8` float DEFAULT NULL,
  `gr25_Hydrometer_Readings_Rm_No9` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No1` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No2` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No3` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No4` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No5` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No6` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No7` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No8` float DEFAULT NULL,
  `gr25_A_or_B_depending_of_the_Hy_type_No9` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No1` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No2` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No3` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No4` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No5` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No6` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No7` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No8` float DEFAULT NULL,
  `gr25_Offset_at_Reading_rdm_No9` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No1` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No2` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No3` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No4` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No5` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No6` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No7` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No8` float DEFAULT NULL,
  `gr25_Mass_Percent_Finer_Nm_Porce_No9` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No1` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No2` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No3` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No4` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No5` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No6` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No7` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No8` float DEFAULT NULL,
  `gr25_Effective_Length_Hm_No9` float DEFAULT NULL,
  `gr25_D_mm_No1` float DEFAULT NULL,
  `gr25_D_mm_No2` float DEFAULT NULL,
  `gr25_D_mm_No3` float DEFAULT NULL,
  `gr25_D_mm_No4` float DEFAULT NULL,
  `gr25_D_mm_No5` float DEFAULT NULL,
  `gr25_D_mm_No6` float DEFAULT NULL,
  `gr25_D_mm_No7` float DEFAULT NULL,
  `gr25_D_mm_No8` float DEFAULT NULL,
  `gr25_D_mm_No9` float DEFAULT NULL,
  `gr50_Date_No1` date NOT NULL,
  `gr50_Date_No2` date NOT NULL,
  `gr50_Date_No3` date NOT NULL,
  `gr50_Date_No4` date NOT NULL,
  `gr50_Date_No5` date NOT NULL,
  `gr50_Date_No6` date NOT NULL,
  `gr50_Date_No7` date NOT NULL,
  `gr50_Date_No8` date NOT NULL,
  `gr50_Date_No9` date NOT NULL,
  `gr50_Hour_No1` time NOT NULL,
  `gr50_Hour_No2` time NOT NULL,
  `gr50_Hour_No3` time NOT NULL,
  `gr50_Hour_No4` time NOT NULL,
  `gr50_Hour_No5` time NOT NULL,
  `gr50_Hour_No6` time NOT NULL,
  `gr50_Hour_No7` time NOT NULL,
  `gr50_Hour_No8` time NOT NULL,
  `gr50_Hour_No9` time NOT NULL,
  `gr50_Reading_Time_min_No1` float DEFAULT NULL,
  `gr50_Reading_Time_min_No2` float DEFAULT NULL,
  `gr50_Reading_Time_min_No3` float DEFAULT NULL,
  `gr50_Reading_Time_min_No4` float DEFAULT NULL,
  `gr50_Reading_Time_min_No5` float DEFAULT NULL,
  `gr50_Reading_Time_min_No6` float DEFAULT NULL,
  `gr50_Reading_Time_min_No7` float DEFAULT NULL,
  `gr50_Reading_Time_min_No8` float DEFAULT NULL,
  `gr50_Reading_Time_min_No9` float DEFAULT NULL,
  `gr50_Temp_No1` float DEFAULT NULL,
  `gr50_Temp_No2` float DEFAULT NULL,
  `gr50_Temp_No3` float DEFAULT NULL,
  `gr50_Temp_No4` float DEFAULT NULL,
  `gr50_Temp_No5` float DEFAULT NULL,
  `gr50_Temp_No6` float DEFAULT NULL,
  `gr50_Temp_No7` float DEFAULT NULL,
  `gr50_Temp_No8` float DEFAULT NULL,
  `gr50_Temp_No9` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No1` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No2` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No3` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No4` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No5` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No6` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No7` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No8` float DEFAULT NULL,
  `gr50_Hydrometer_Readings_Rm_No9` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No1` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No2` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No3` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No4` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No5` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No6` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No7` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No8` float DEFAULT NULL,
  `gr50_A_or_B_depending_of_the_Hy_type_No9` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No1` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No2` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No3` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No4` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No5` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No6` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No7` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No8` float DEFAULT NULL,
  `gr50_Offset_at_Reading_rdm_No9` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No1` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No2` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No3` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No4` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No5` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No6` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No7` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No8` float DEFAULT NULL,
  `gr50_Mass_Percent_Finer_Nm_Porce_No9` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No1` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No2` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No3` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No4` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No5` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No6` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No7` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No8` float DEFAULT NULL,
  `gr50_Effective_Length_Hm_No9` float DEFAULT NULL,
  `gr50_D_mm_No1` float DEFAULT NULL,
  `gr50_D_mm_No2` float DEFAULT NULL,
  `gr50_D_mm_No3` float DEFAULT NULL,
  `gr50_D_mm_No4` float DEFAULT NULL,
  `gr50_D_mm_No5` float DEFAULT NULL,
  `gr50_D_mm_No6` float DEFAULT NULL,
  `gr50_D_mm_No7` float DEFAULT NULL,
  `gr50_D_mm_No8` float DEFAULT NULL,
  `gr50_D_mm_No9` float DEFAULT NULL,
  `Nm_2um_Not_Dispersed` float DEFAULT NULL,
  `Nm_2um_Dispersed` float DEFAULT NULL,
  `Porce_Dispersion` float DEFAULT NULL,
  `Classification` varchar(40) NOT NULL,
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
-- Volcado de datos para la tabla `double_hydrometer`
--

INSERT INTO `double_hydrometer` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Dispersing_Agent`, `Amount_Used_g`, `Temperature_of_Test`, `Viscosity_of_Water_gs_cm2`, `Mass_Density_of_Water_Calibrated`, `Acceleration_cm_s2`, `Volume_of_Suspension_Vsp_cm3`, `Meniscus_Correction_Cm`, `Percent_Passing_No_200_sieve`, `Specific_Gravity`, `Tare_Name_50gr`, `Tare_Name_25gr`, `Oven_Temperature_50gr`, `Oven_Temperature_25gr`, `Tare_Plus_Wet_Soil_50gr`, `Tare_Plus_Wet_Soil_25gr`, `Tare_Plus_Dry_Soil_50gr`, `Tare_Plus_Dry_Soil_25gr`, `Water_Ww_50gr`, `Water_Ww_25gr`, `Tare_50gr`, `Tare_25gr`, `Dry_Soil_Ws_50gr`, `Dry_Soil_Ws_25gr`, `Moisture_Content_Porce_50gr`, `Moisture_Content_Porce_25gr`, `Hy_Calibration_50gr_Temperature_No1`, `Hy_Calibration_50gr_Temperature_No2`, `Hy_Calibration_50gr_Temperature_No3`, `Hy_Calibration_50gr_Temperature_No4`, `Hy_Calibration_50gr_Temperature_No5`, `Hy_Calibration_50gr_Temperature_No6`, `Hy_Calibration_50gr_Temperature_No7`, `Hy_Calibration_50gr_Temperature_No8`, `Hy_Calibration_50gr_Temperature_No9`, `Hy_Calibration_50gr_Actual_Reading_No1`, `Hy_Calibration_50gr_Actual_Reading_No2`, `Hy_Calibration_50gr_Actual_Reading_No3`, `Hy_Calibration_50gr_Actual_Reading_No4`, `Hy_Calibration_50gr_Actual_Reading_No5`, `Hy_Calibration_50gr_Actual_Reading_No6`, `Hy_Calibration_50gr_Actual_Reading_No7`, `Hy_Calibration_50gr_Actual_Reading_No8`, `Hy_Calibration_50gr_Actual_Reading_No9`, `Hy_Measure_Fluid_50gr_Temperature_No1`, `Hy_Measure_Fluid_50gr_Temperature_No2`, `Hy_Measure_Fluid_50gr_Temperature_No3`, `Hy_Measure_Fluid_50gr_Temperature_No4`, `Hy_Measure_Fluid_50gr_Temperature_No5`, `Hy_Measure_Fluid_50gr_Temperature_No6`, `Hy_Measure_Fluid_50gr_Temperature_No7`, `Hy_Measure_Fluid_50gr_Temperature_No8`, `Hy_Measure_Fluid_50gr_Temperature_No9`, `Hy_Measure_Fluid_50gr_Actual_Reading_No1`, `Hy_Measure_Fluid_50gr_Actual_Reading_No2`, `Hy_Measure_Fluid_50gr_Actual_Reading_No3`, `Hy_Measure_Fluid_50gr_Actual_Reading_No4`, `Hy_Measure_Fluid_50gr_Actual_Reading_No5`, `Hy_Measure_Fluid_50gr_Actual_Reading_No6`, `Hy_Measure_Fluid_50gr_Actual_Reading_No7`, `Hy_Measure_Fluid_50gr_Actual_Reading_No8`, `Hy_Measure_Fluid_50gr_Actual_Reading_No9`, `Hy_Calibration_25gr_Temperature_No1`, `Hy_Calibration_25gr_Temperature_No2`, `Hy_Calibration_25gr_Temperature_No3`, `Hy_Calibration_25gr_Temperature_No4`, `Hy_Calibration_25gr_Temperature_No5`, `Hy_Calibration_25gr_Temperature_No6`, `Hy_Calibration_25gr_Temperature_No7`, `Hy_Calibration_25gr_Temperature_No8`, `Hy_Calibration_25gr_Temperature_No9`, `Hy_Calibration_25gr_Actual_Reading_No1`, `Hy_Calibration_25gr_Actual_Reading_No2`, `Hy_Calibration_25gr_Actual_Reading_No3`, `Hy_Calibration_25gr_Actual_Reading_No4`, `Hy_Calibration_25gr_Actual_Reading_No5`, `Hy_Calibration_25gr_Actual_Reading_No6`, `Hy_Calibration_25gr_Actual_Reading_No7`, `Hy_Calibration_25gr_Actual_Reading_No8`, `Hy_Calibration_25gr_Actual_Reading_No9`, `Hy_Measure_Fluid_25gr_Temperature_No1`, `Hy_Measure_Fluid_25gr_Temperature_No2`, `Hy_Measure_Fluid_25gr_Temperature_No3`, `Hy_Measure_Fluid_25gr_Temperature_No4`, `Hy_Measure_Fluid_25gr_Temperature_No5`, `Hy_Measure_Fluid_25gr_Temperature_No6`, `Hy_Measure_Fluid_25gr_Temperature_No7`, `Hy_Measure_Fluid_25gr_Temperature_No8`, `Hy_Measure_Fluid_25gr_Temperature_No9`, `Hy_Measure_Fluid_25gr_Actual_Reading_No1`, `Hy_Measure_Fluid_25gr_Actual_Reading_No2`, `Hy_Measure_Fluid_25gr_Actual_Reading_No3`, `Hy_Measure_Fluid_25gr_Actual_Reading_No4`, `Hy_Measure_Fluid_25gr_Actual_Reading_No5`, `Hy_Measure_Fluid_25gr_Actual_Reading_No6`, `Hy_Measure_Fluid_25gr_Actual_Reading_No7`, `Hy_Measure_Fluid_25gr_Actual_Reading_No8`, `Hy_Measure_Fluid_25gr_Actual_Reading_No9`, `gr25_Date_No1`, `gr25_Date_No2`, `gr25_Date_No3`, `gr25_Date_No4`, `gr25_Date_No5`, `gr25_Date_No6`, `gr25_Date_No7`, `gr25_Date_No8`, `gr25_Date_No9`, `gr25_Hour_No1`, `gr25_Hour_No2`, `gr25_Hour_No3`, `gr25_Hour_No4`, `gr25_Hour_No5`, `gr25_Hour_No6`, `gr25_Hour_No7`, `gr25_Hour_No8`, `gr25_Hour_No9`, `gr25_Reading_Time_min_No1`, `gr25_Reading_Time_min_No2`, `gr25_Reading_Time_min_No3`, `gr25_Reading_Time_min_No4`, `gr25_Reading_Time_min_No5`, `gr25_Reading_Time_min_No6`, `gr25_Reading_Time_min_No7`, `gr25_Reading_Time_min_No8`, `gr25_Reading_Time_min_No9`, `gr25_Temp_No1`, `gr25_Temp_No2`, `gr25_Temp_No3`, `gr25_Temp_No4`, `gr25_Temp_No5`, `gr25_Temp_No6`, `gr25_Temp_No7`, `gr25_Temp_No8`, `gr25_Temp_No9`, `gr25_Hydrometer_Readings_Rm_No1`, `gr25_Hydrometer_Readings_Rm_No2`, `gr25_Hydrometer_Readings_Rm_No3`, `gr25_Hydrometer_Readings_Rm_No4`, `gr25_Hydrometer_Readings_Rm_No5`, `gr25_Hydrometer_Readings_Rm_No6`, `gr25_Hydrometer_Readings_Rm_No7`, `gr25_Hydrometer_Readings_Rm_No8`, `gr25_Hydrometer_Readings_Rm_No9`, `gr25_A_or_B_depending_of_the_Hy_type_No1`, `gr25_A_or_B_depending_of_the_Hy_type_No2`, `gr25_A_or_B_depending_of_the_Hy_type_No3`, `gr25_A_or_B_depending_of_the_Hy_type_No4`, `gr25_A_or_B_depending_of_the_Hy_type_No5`, `gr25_A_or_B_depending_of_the_Hy_type_No6`, `gr25_A_or_B_depending_of_the_Hy_type_No7`, `gr25_A_or_B_depending_of_the_Hy_type_No8`, `gr25_A_or_B_depending_of_the_Hy_type_No9`, `gr25_Offset_at_Reading_rdm_No1`, `gr25_Offset_at_Reading_rdm_No2`, `gr25_Offset_at_Reading_rdm_No3`, `gr25_Offset_at_Reading_rdm_No4`, `gr25_Offset_at_Reading_rdm_No5`, `gr25_Offset_at_Reading_rdm_No6`, `gr25_Offset_at_Reading_rdm_No7`, `gr25_Offset_at_Reading_rdm_No8`, `gr25_Offset_at_Reading_rdm_No9`, `gr25_Mass_Percent_Finer_Nm_Porce_No1`, `gr25_Mass_Percent_Finer_Nm_Porce_No2`, `gr25_Mass_Percent_Finer_Nm_Porce_No3`, `gr25_Mass_Percent_Finer_Nm_Porce_No4`, `gr25_Mass_Percent_Finer_Nm_Porce_No5`, `gr25_Mass_Percent_Finer_Nm_Porce_No6`, `gr25_Mass_Percent_Finer_Nm_Porce_No7`, `gr25_Mass_Percent_Finer_Nm_Porce_No8`, `gr25_Mass_Percent_Finer_Nm_Porce_No9`, `gr25_Effective_Length_Hm_No1`, `gr25_Effective_Length_Hm_No2`, `gr25_Effective_Length_Hm_No3`, `gr25_Effective_Length_Hm_No4`, `gr25_Effective_Length_Hm_No5`, `gr25_Effective_Length_Hm_No6`, `gr25_Effective_Length_Hm_No7`, `gr25_Effective_Length_Hm_No8`, `gr25_Effective_Length_Hm_No9`, `gr25_D_mm_No1`, `gr25_D_mm_No2`, `gr25_D_mm_No3`, `gr25_D_mm_No4`, `gr25_D_mm_No5`, `gr25_D_mm_No6`, `gr25_D_mm_No7`, `gr25_D_mm_No8`, `gr25_D_mm_No9`, `gr50_Date_No1`, `gr50_Date_No2`, `gr50_Date_No3`, `gr50_Date_No4`, `gr50_Date_No5`, `gr50_Date_No6`, `gr50_Date_No7`, `gr50_Date_No8`, `gr50_Date_No9`, `gr50_Hour_No1`, `gr50_Hour_No2`, `gr50_Hour_No3`, `gr50_Hour_No4`, `gr50_Hour_No5`, `gr50_Hour_No6`, `gr50_Hour_No7`, `gr50_Hour_No8`, `gr50_Hour_No9`, `gr50_Reading_Time_min_No1`, `gr50_Reading_Time_min_No2`, `gr50_Reading_Time_min_No3`, `gr50_Reading_Time_min_No4`, `gr50_Reading_Time_min_No5`, `gr50_Reading_Time_min_No6`, `gr50_Reading_Time_min_No7`, `gr50_Reading_Time_min_No8`, `gr50_Reading_Time_min_No9`, `gr50_Temp_No1`, `gr50_Temp_No2`, `gr50_Temp_No3`, `gr50_Temp_No4`, `gr50_Temp_No5`, `gr50_Temp_No6`, `gr50_Temp_No7`, `gr50_Temp_No8`, `gr50_Temp_No9`, `gr50_Hydrometer_Readings_Rm_No1`, `gr50_Hydrometer_Readings_Rm_No2`, `gr50_Hydrometer_Readings_Rm_No3`, `gr50_Hydrometer_Readings_Rm_No4`, `gr50_Hydrometer_Readings_Rm_No5`, `gr50_Hydrometer_Readings_Rm_No6`, `gr50_Hydrometer_Readings_Rm_No7`, `gr50_Hydrometer_Readings_Rm_No8`, `gr50_Hydrometer_Readings_Rm_No9`, `gr50_A_or_B_depending_of_the_Hy_type_No1`, `gr50_A_or_B_depending_of_the_Hy_type_No2`, `gr50_A_or_B_depending_of_the_Hy_type_No3`, `gr50_A_or_B_depending_of_the_Hy_type_No4`, `gr50_A_or_B_depending_of_the_Hy_type_No5`, `gr50_A_or_B_depending_of_the_Hy_type_No6`, `gr50_A_or_B_depending_of_the_Hy_type_No7`, `gr50_A_or_B_depending_of_the_Hy_type_No8`, `gr50_A_or_B_depending_of_the_Hy_type_No9`, `gr50_Offset_at_Reading_rdm_No1`, `gr50_Offset_at_Reading_rdm_No2`, `gr50_Offset_at_Reading_rdm_No3`, `gr50_Offset_at_Reading_rdm_No4`, `gr50_Offset_at_Reading_rdm_No5`, `gr50_Offset_at_Reading_rdm_No6`, `gr50_Offset_at_Reading_rdm_No7`, `gr50_Offset_at_Reading_rdm_No8`, `gr50_Offset_at_Reading_rdm_No9`, `gr50_Mass_Percent_Finer_Nm_Porce_No1`, `gr50_Mass_Percent_Finer_Nm_Porce_No2`, `gr50_Mass_Percent_Finer_Nm_Porce_No3`, `gr50_Mass_Percent_Finer_Nm_Porce_No4`, `gr50_Mass_Percent_Finer_Nm_Porce_No5`, `gr50_Mass_Percent_Finer_Nm_Porce_No6`, `gr50_Mass_Percent_Finer_Nm_Porce_No7`, `gr50_Mass_Percent_Finer_Nm_Porce_No8`, `gr50_Mass_Percent_Finer_Nm_Porce_No9`, `gr50_Effective_Length_Hm_No1`, `gr50_Effective_Length_Hm_No2`, `gr50_Effective_Length_Hm_No3`, `gr50_Effective_Length_Hm_No4`, `gr50_Effective_Length_Hm_No5`, `gr50_Effective_Length_Hm_No6`, `gr50_Effective_Length_Hm_No7`, `gr50_Effective_Length_Hm_No8`, `gr50_Effective_Length_Hm_No9`, `gr50_D_mm_No1`, `gr50_D_mm_No2`, `gr50_D_mm_No3`, `gr50_D_mm_No4`, `gr50_D_mm_No5`, `gr50_D_mm_No6`, `gr50_D_mm_No7`, `gr50_D_mm_No8`, `gr50_D_mm_No9`, `Nm_2um_Not_Dispersed`, `Nm_2um_Dispersed`, `Porce_Dispersion`, `Classification`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D4647', 'B', '(NaPO3)6', 25, '125', 0.01, 0.96715, 980.7, 1000, 12, 25, 2.68, 'N-2', 'N-3', '110 º C', '110 º C', 300, 150, 200, 100, 100, 50, 20, 20, 180, 80, 55.56, 62.5, 19, 19, 19, 19, 19, 0, 0, 0, 0, 5, 5, 5, 5, 5, 0, 0, 0, 0, 19, 19, 19, 19, 19, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 19, 19, 19, 19, 19, 0, 0, 0, 0, 5, 5, 5, 5, 5, 0, 0, 0, 0, 19, 19, 19, 19, 19, 0, 0, 0, 0, 2, 2, 2, 2, 2, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '0000-00-00', '2023-09-27', '0000-00-00', '2023-10-21', '0000-00-00', '0000-00-00', '0000-00-00', '08:51:00', '00:00:00', '08:52:00', '08:52:00', '00:00:00', '00:00:00', '00:00:00', '08:58:00', '00:00:00', 1, 2, 4, 15, 30, 60, 240, 340, 1440, 19, 19, 19, 19, 19, 19, 19, 19, 19, 10, 12, 13, 14, 15, 16, 17, 18, 19, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 5, 5, 5, 5, 5, 5, 5, 5, 5, 6.21, 8.69, 9.93, 11.17, 12.41, 13.66, 14.9, 16.14, 17.38, 14.26, 13.93, 13.76, 13.6, 13.43, 13.27, 13.1, 12.94, 12.77, 0.0518, 0.0362, 0.0255, 0.0131, 0.0092, 0.0065, 0.0032, 0.0027, 0.0013, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1, 2, 4, 15, 30, 60, 240, 340, 1440, 20, 10, 12, 20, 10, 12, 15, 12, 1, 2, 1, 23, 45, 48, 52, 12, 25, 1, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 4.7, 7.2, 6.8, 4.7, 7.2, 6.8, 6.1, 6.8, 8.1, -1.72, -3.96, 10.37, 25.84, 26.15, 28.95, 3.76, 11.65, -4.54, 17.56, 17.72, 14.09, 10.46, 9.97, 9.31, 15.91, 13.76, 17.72, 0.0575, 0.0408, 0.0258, 0.0115, 0.0079, 0.0054, 0.0035, 0.0028, 0.0015, 17, 3, 577, 'Dispersive', 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-17', '2023-10-17', 'N/A', 'DHY', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayos_en_revision`
--

CREATE TABLE `ensayos_en_revision` (
  `id` int(10) UNSIGNED NOT NULL,
  `Sample_ID` varchar(150) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Test_Type` varchar(15) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayo_en_entrega`
--

CREATE TABLE `ensayo_en_entrega` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Sample_Number` varchar(25) NOT NULL,
  `Test_Type` varchar(15) NOT NULL,
  `Fecha_de_Entrega` datetime NOT NULL,
  `Sample_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayo_en_repeticion`
--

CREATE TABLE `ensayo_en_repeticion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Test_Type` varchar(15) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayo_gama`
--

CREATE TABLE `ensayo_gama` (
  `id` int(11) NOT NULL,
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

INSERT INTO `ensayo_gama` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Station`, `Max_Dry_Density_Kgm3`, `Max_Wet_Density_Kgm3`, `Percent_Moisture_Content`, `Optimun_Moisture_Content`, `Max_Dry_Density`, `Percent_of_Compaction`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM D6938', 'B', 'LAB-M1-75', 135.23, 102.65, 123.21, 80, 50, 270, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-12', 'N/A', 'Gamma-dens', 'AS');

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
  `Porce_Pass_Total_Pan` varchar(10) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL DEFAULT '0.00',
  `Coarser_than_Gravel` varchar(10) DEFAULT NULL,
  `Gravel` varchar(10) DEFAULT NULL,
  `Sand` varchar(10) DEFAULT NULL,
  `Fines` varchar(10) DEFAULT NULL,
  `D10` varchar(10) DEFAULT NULL,
  `D15` varchar(10) DEFAULT NULL,
  `D30` varchar(10) DEFAULT NULL,
  `D60` varchar(10) DEFAULT NULL,
  `D85` varchar(10) DEFAULT NULL,
  `Cc` varchar(10) DEFAULT NULL,
  `Cu` varchar(10) DEFAULT NULL,
  `Comments` varchar(100) DEFAULT NULL,
  `Graphic` longblob DEFAULT NULL,
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
(1, 'DH-BGC23-NTSF-100', 'G1', 'Site Investigation', 'TSF Naranjo', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', 'Air_Dried', 'AS', 'LAB-134-N', 6625.2, 5942.2, 646.2, 5296, 3953.8, 1342.2, 500, 9.44, 9.44, 90.56, 475, 8.97, 18.41, 81.59, 425, 8.02, 26.44, 73.56, 400, 7.55, 33.99, 66.01, 375, 7.08, 41.07, 58.93, 325, 6.14, 47.21, 52.79, 300, 5.66, 52.87, 47.13, 275, 5.19, 58.06, 41.94, 225, 4.25, 62.31, 37.69, 200, 3.78, 66.09, 33.91, 175, 3.3, 69.39, 30.61, 125, 2.36, 71.75, 28.25, 100, 1.89, 73.64, 26.36, 75, 1.42, 75.06, 24.94, 25, 0.47, 75.53, 24.47, 200, 3.78, 79.31, 20.69, 175, 3.3, 82.61, 17.39, 16, 0.3, 82.91, 17.09, 20, 0.38, 83.29, 16.711, 50, 0.94, 84.23, 15.77, 60, 1.13, 85.37, 14.63, 100, 1.89, 87.25, 12.745, 140, 2.64, 89.9, 10.102, 200, 3.78, 93.67, 6.33, 10, 0.19, 1352.2, 25.53, 119.21, '-19.21', '58.06', '21.24', '14.37', '6.33', '0.11', '0.27', '34.41', '159.51', '488.95', '70.57', '1516.20', 'Runs  conducted to avoid sieve overloading', '', '2023-10-10', '2023-10-11', 'GS-Soil', 'Man_Split', 'ASTM-D6913');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grain_size_coarse_aggregate`
--

CREATE TABLE `grain_size_coarse_aggregate` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Date_Material_Arrive` date NOT NULL,
  `Date_of_improvement` date NOT NULL,
  `Improvement` varchar(20) NOT NULL,
  `Samples_usig_for_improvement_No1` varchar(20) NOT NULL,
  `Samples_usig_for_improvement_No2` varchar(20) NOT NULL,
  `Container` varchar(20) DEFAULT NULL,
  `Tare_Wet_Soil` float DEFAULT NULL,
  `Tare_Dry_Soil` float DEFAULT NULL,
  `Tare` float DEFAULT NULL,
  `Dry_Soil` float DEFAULT NULL,
  `Washed` float DEFAULT NULL,
  `Wash_Pan` float DEFAULT NULL,
  `Wt_Ret_5_127` float DEFAULT NULL,
  `Porce_Ret_5_127` float DEFAULT NULL,
  `Cum_Ret_5_127` float DEFAULT NULL,
  `Porce_Pass_5_127` float DEFAULT NULL,
  `Specs_5_127` float DEFAULT NULL,
  `Wt_Ret_4_101` float DEFAULT NULL,
  `Porce_Ret_4_101` float DEFAULT NULL,
  `Cum_Ret_4_101` float DEFAULT NULL,
  `Porce_Pass_4_101` float DEFAULT NULL,
  `Specs_4_101` float DEFAULT NULL,
  `Wt_Ret_3p5_89` float DEFAULT NULL,
  `Porce_Ret_3p5_89` float DEFAULT NULL,
  `Cum_Ret_3p5_89` float DEFAULT NULL,
  `Porce_Pass_3p5_89` float DEFAULT NULL,
  `Specs_3p5_89` float DEFAULT NULL,
  `Wt_Ret_3_75` float DEFAULT NULL,
  `Porce_Ret_3_75` float DEFAULT NULL,
  `Cum_Ret_3_75` float DEFAULT NULL,
  `Porce_Pass_3_75` float DEFAULT NULL,
  `Specs_3_75` float DEFAULT NULL,
  `Wt_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Ret_2p5_63` float DEFAULT NULL,
  `Cum_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Pass_2p5_63` float DEFAULT NULL,
  `Specs_2p5_63` float DEFAULT NULL,
  `Wt_Ret_2_50` float DEFAULT NULL,
  `Porce_Ret_2_50` float DEFAULT NULL,
  `Cum_Ret_2_50` float DEFAULT NULL,
  `Porce_Pass_2_50` float DEFAULT NULL,
  `Specs_2_50` float DEFAULT NULL,
  `Wt_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Ret_1p5_37` float DEFAULT NULL,
  `Cum_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Pass_1p5_37` float DEFAULT NULL,
  `Specs_1p5_37` float DEFAULT NULL,
  `Wt_Ret_1_25` float DEFAULT NULL,
  `Porce_Ret_1_25` float DEFAULT NULL,
  `Cum_Ret_1_25` float DEFAULT NULL,
  `Porce_Pass_1_25` float DEFAULT NULL,
  `Specs_1_25` float DEFAULT NULL,
  `Wt_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Ret_3p4_19` float DEFAULT NULL,
  `Cum_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Pass_3p4_19` float DEFAULT NULL,
  `Specs_3p4_19` float DEFAULT NULL,
  `Wt_Ret_1p2_12` float DEFAULT NULL,
  `Porce_Ret_1p2_12` float DEFAULT NULL,
  `Cum_Ret_1p2_12` float DEFAULT NULL,
  `Porce_Pass_1p2_12` float DEFAULT NULL,
  `Specs_1p2_12` float DEFAULT NULL,
  `Wt_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Ret_3p8_9` float DEFAULT NULL,
  `Cum_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Pass_3p8_9` float DEFAULT NULL,
  `Specs_3p8_9` float DEFAULT NULL,
  `Wt_Ret_No4_4` float DEFAULT NULL,
  `Porce_Ret_No4_4` float DEFAULT NULL,
  `Cum_Ret_No4_4` float DEFAULT NULL,
  `Porce_Pass_No4_4` float DEFAULT NULL,
  `Specs_No4_4` float DEFAULT NULL,
  `Wt_Ret_No10_2` float DEFAULT NULL,
  `Porce_Ret_No10_2` float DEFAULT NULL,
  `Cum_Ret_No10_2` float DEFAULT NULL,
  `Porce_Pass_No10_2` float DEFAULT NULL,
  `Specs_No10_2` float DEFAULT NULL,
  `Wt_Ret_No16_1` float DEFAULT NULL,
  `Porce_Ret_No16_1` float DEFAULT NULL,
  `Cum_Ret_No16_1` float DEFAULT NULL,
  `Porce_Pass_No16_1` float DEFAULT NULL,
  `Specs_No16_1` float DEFAULT NULL,
  `Wt_Ret_No20_0p85` float DEFAULT NULL,
  `Porce_Ret_No20_0p85` float DEFAULT NULL,
  `Cum_Ret_No20_0p85` float DEFAULT NULL,
  `Porce_Pass_No20_0p85` float DEFAULT NULL,
  `Specs_No20_0p85` float DEFAULT NULL,
  `Wt_Ret_No50_0p3` float DEFAULT NULL,
  `Porce_Ret_No50_0p3` float DEFAULT NULL,
  `Cum_Ret_No50_0p3` float DEFAULT NULL,
  `Porce_Pass_No50_0p3` float DEFAULT NULL,
  `Specs_No50_0p3` float DEFAULT NULL,
  `Wt_Ret_No60_0p25` float DEFAULT NULL,
  `Porce_Ret_No60_0p25` float DEFAULT NULL,
  `Cum_Ret_No60_0p25` float DEFAULT NULL,
  `Porce_Pass_No60_0p25` float DEFAULT NULL,
  `Specs_No60_0p25` float DEFAULT NULL,
  `Wt_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Ret_No200_0p075` float DEFAULT NULL,
  `Cum_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Pass_No200_0p075` float DEFAULT NULL,
  `Specs_No200_0p075` float DEFAULT NULL,
  `Wt_Ret_Pan` float DEFAULT NULL,
  `Porce_Ret_Pan` float DEFAULT NULL,
  `Wt_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Ret_Total_Pan` float DEFAULT NULL,
  `Cum_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Pass_Total_Pan` float DEFAULT NULL,
  `Total_Sample_Weight_g` float DEFAULT NULL,
  `Weight_used_for_the_Test_g` float DEFAULT NULL,
  `A_Particles_Reactive` float DEFAULT NULL,
  `B_Particles_Reactive` float DEFAULT NULL,
  `C_Particles_Reactive` float DEFAULT NULL,
  `Weight_Mat_Ret_No_4_If_Applicable` float DEFAULT NULL,
  `Wt_Reactive_Part_Ret_No4_If_Applicable` float DEFAULT NULL,
  `Percent_Reactive_Particles_If_Applicable` float NOT NULL,
  `Average_Particles_Reactive` float DEFAULT NULL,
  `Reaction_Strength_Result` varchar(20) NOT NULL,
  `Acid_Reactivity_Test_Result` varchar(20) NOT NULL,
  `Grain_Size_Test_Result` varchar(50) NOT NULL,
  `Fine_Grained_Classification_using_the_USCS` varchar(50) NOT NULL,
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
  `Technician` varchar(10) NOT NULL,
  `Grain_Size_Graph` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `grain_size_coarse_aggregate`
--

INSERT INTO `grain_size_coarse_aggregate` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Date_Material_Arrive`, `Date_of_improvement`, `Improvement`, `Samples_usig_for_improvement_No1`, `Samples_usig_for_improvement_No2`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Specs_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Specs_4_101`, `Wt_Ret_3p5_89`, `Porce_Ret_3p5_89`, `Cum_Ret_3p5_89`, `Porce_Pass_3p5_89`, `Specs_3p5_89`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Specs_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Specs_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Specs_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Specs_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Specs_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Specs_3p4_19`, `Wt_Ret_1p2_12`, `Porce_Ret_1p2_12`, `Cum_Ret_1p2_12`, `Porce_Pass_1p2_12`, `Specs_1p2_12`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Specs_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Specs_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Specs_No10_2`, `Wt_Ret_No16_1`, `Porce_Ret_No16_1`, `Cum_Ret_No16_1`, `Porce_Pass_No16_1`, `Specs_No16_1`, `Wt_Ret_No20_0p85`, `Porce_Ret_No20_0p85`, `Cum_Ret_No20_0p85`, `Porce_Pass_No20_0p85`, `Specs_No20_0p85`, `Wt_Ret_No50_0p3`, `Porce_Ret_No50_0p3`, `Cum_Ret_No50_0p3`, `Porce_Pass_No50_0p3`, `Specs_No50_0p3`, `Wt_Ret_No60_0p25`, `Porce_Ret_No60_0p25`, `Cum_Ret_No60_0p25`, `Porce_Pass_No60_0p25`, `Specs_No60_0p25`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Specs_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Total_Sample_Weight_g`, `Weight_used_for_the_Test_g`, `A_Particles_Reactive`, `B_Particles_Reactive`, `C_Particles_Reactive`, `Weight_Mat_Ret_No_4_If_Applicable`, `Wt_Reactive_Part_Ret_No4_If_Applicable`, `Percent_Reactive_Particles_If_Applicable`, `Average_Particles_Reactive`, `Reaction_Strength_Result`, `Acid_Reactivity_Test_Result`, `Grain_Size_Test_Result`, `Fine_Grained_Classification_using_the_USCS`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`, `Grain_Size_Graph`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-C136', 'Oven_Dried', 'Mech_Split', '2023-10-17', '2023-10-17', 'Yes', 'No2', 'No1', 'LAB-134-N', 6625.2, 1872.92, 646.2, 1226.72, 1075.04, 151.68, 50, 4.08, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 0, 0, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 0, 0, 4.08, 95.92, 0, 1.18, 0.08, 41.65, 58.35, 16, 0.85, 0.06, 41.71, 58.29, 20, 0.3, 0.02, 41.73, 58.27, 50, 0.25, 0.02, 41.75, 58.25, 60, 0, 0, 4.08, 95.92, 0, 0, 0, 151.68, 12.36, 16.44, 83.56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No Reaction', 'Accepted', 'Rejected', 'Error: No se pudo clasificar el suelo.', 4.08, 0, 0, 95.92, 0, 0, 0, 0, 0, 0, 0, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-17', '2023-10-17', 'N/A', 'GS-Coarse', 'AS', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grain_size_fine_aggregate`
--

CREATE TABLE `grain_size_fine_aggregate` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Date_Material_Arrive` date NOT NULL,
  `Date_of_improvement` date NOT NULL,
  `Improvement` varchar(20) NOT NULL,
  `Samples_usig_for_improvement_No1` varchar(20) NOT NULL,
  `Samples_usig_for_improvement_No2` varchar(20) NOT NULL,
  `Container` varchar(20) DEFAULT NULL,
  `Tare_Wet_Soil` float DEFAULT NULL,
  `Tare_Dry_Soil` float DEFAULT NULL,
  `Tare` float DEFAULT NULL,
  `Dry_Soil` float DEFAULT NULL,
  `Washed` float DEFAULT NULL,
  `Wash_Pan` float DEFAULT NULL,
  `Wt_Ret_5_127` float DEFAULT NULL,
  `Porce_Ret_5_127` float DEFAULT NULL,
  `Cum_Ret_5_127` float DEFAULT NULL,
  `Porce_Pass_5_127` float DEFAULT NULL,
  `Specs_5_127` float DEFAULT NULL,
  `Wt_Ret_4_101` float DEFAULT NULL,
  `Porce_Ret_4_101` float DEFAULT NULL,
  `Cum_Ret_4_101` float DEFAULT NULL,
  `Porce_Pass_4_101` float DEFAULT NULL,
  `Specs_4_101` float DEFAULT NULL,
  `Wt_Ret_3p5_89` varchar(20) NOT NULL,
  `Porce_Ret_3p5_89` varchar(20) NOT NULL,
  `Cum_Ret_3p5_89` varchar(20) NOT NULL,
  `Porce_Pass_3p5_89` varchar(20) NOT NULL,
  `Specs_3p5_89` varchar(20) NOT NULL,
  `Wt_Ret_3_75` float DEFAULT NULL,
  `Porce_Ret_3_75` float DEFAULT NULL,
  `Cum_Ret_3_75` float DEFAULT NULL,
  `Porce_Pass_3_75` float DEFAULT NULL,
  `Specs_3_75` float DEFAULT NULL,
  `Wt_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Ret_2p5_63` float DEFAULT NULL,
  `Cum_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Pass_2p5_63` float DEFAULT NULL,
  `Specs_2p5_63` float DEFAULT NULL,
  `Wt_Ret_2_50` float DEFAULT NULL,
  `Porce_Ret_2_50` float DEFAULT NULL,
  `Cum_Ret_2_50` float DEFAULT NULL,
  `Porce_Pass_2_50` float DEFAULT NULL,
  `Specs_2_50` float DEFAULT NULL,
  `Wt_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Ret_1p5_37` float DEFAULT NULL,
  `Cum_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Pass_1p5_37` float DEFAULT NULL,
  `Specs_1p5_37` float DEFAULT NULL,
  `Wt_Ret_1_25` float DEFAULT NULL,
  `Porce_Ret_1_25` float DEFAULT NULL,
  `Cum_Ret_1_25` float DEFAULT NULL,
  `Porce_Pass_1_25` float DEFAULT NULL,
  `Specs_1_25` float DEFAULT NULL,
  `Wt_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Ret_3p4_19` float DEFAULT NULL,
  `Cum_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Pass_3p4_19` float DEFAULT NULL,
  `Specs_3p4_19` float DEFAULT NULL,
  `Wt_Ret_1p2_12` float DEFAULT NULL,
  `Porce_Ret_1p2_12` float DEFAULT NULL,
  `Cum_Ret_1p2_12` float DEFAULT NULL,
  `Porce_Pass_1p2_12` float DEFAULT NULL,
  `Specs_1p2_12` float DEFAULT NULL,
  `Wt_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Ret_3p8_9` float DEFAULT NULL,
  `Cum_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Pass_3p8_9` float DEFAULT NULL,
  `Specs_3p8_9` float DEFAULT NULL,
  `Wt_Ret_No4_4` float DEFAULT NULL,
  `Porce_Ret_No4_4` float DEFAULT NULL,
  `Cum_Ret_No4_4` float DEFAULT NULL,
  `Porce_Pass_No4_4` float DEFAULT NULL,
  `Specs_No4_4` float DEFAULT NULL,
  `Wt_Ret_No10_2` float DEFAULT NULL,
  `Porce_Ret_No10_2` float DEFAULT NULL,
  `Cum_Ret_No10_2` float DEFAULT NULL,
  `Porce_Pass_No10_2` float DEFAULT NULL,
  `Specs_No10_2` float DEFAULT NULL,
  `Wt_Ret_No16_1` float DEFAULT NULL,
  `Porce_Ret_No16_1` float DEFAULT NULL,
  `Cum_Ret_No16_1` float DEFAULT NULL,
  `Porce_Pass_No16_1` float DEFAULT NULL,
  `Specs_No16_1` float DEFAULT NULL,
  `Wt_Ret_No20_0p85` float DEFAULT NULL,
  `Porce_Ret_No20_0p85` float DEFAULT NULL,
  `Cum_Ret_No20_0p85` float DEFAULT NULL,
  `Porce_Pass_No20_0p85` float DEFAULT NULL,
  `Specs_No20_0p85` float DEFAULT NULL,
  `Wt_Ret_No50_0p3` float DEFAULT NULL,
  `Porce_Ret_No50_0p3` float DEFAULT NULL,
  `Cum_Ret_No50_0p3` float DEFAULT NULL,
  `Porce_Pass_No50_0p3` float DEFAULT NULL,
  `Specs_No50_0p3` float DEFAULT NULL,
  `Wt_Ret_No60_0p25` float DEFAULT NULL,
  `Porce_Ret_No60_0p25` float DEFAULT NULL,
  `Cum_Ret_No60_0p25` float DEFAULT NULL,
  `Porce_Pass_No60_0p25` float DEFAULT NULL,
  `Specs_No60_0p25` float DEFAULT NULL,
  `Wt_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Ret_No200_0p075` float DEFAULT NULL,
  `Cum_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Pass_No200_0p075` float DEFAULT NULL,
  `Specs_No200_0p075` float DEFAULT NULL,
  `Wt_Ret_Pan` float DEFAULT NULL,
  `Porce_Ret_Pan` float DEFAULT NULL,
  `Wt_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Ret_Total_Pan` float DEFAULT NULL,
  `Cum_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Pass_Total_Pan` float DEFAULT NULL,
  `Weight_used_for_the_Test_g` float DEFAULT NULL,
  `A_Particles_Reactive` float DEFAULT NULL,
  `B_Particles_Reactive` float DEFAULT NULL,
  `C_Particles_Reactive` float DEFAULT NULL,
  `D_Particles_Reactive` float DEFAULT NULL,
  `E_Particles_Reactive` float DEFAULT NULL,
  `Average_Particles_Reactive` float DEFAULT NULL,
  `Reaction_Strength_Result` varchar(30) DEFAULT NULL,
  `Acid_Reactivity_Test_Result` varchar(25) DEFAULT NULL,
  `Grain_Size_Test_Result_No1` varchar(250) DEFAULT NULL,
  `Grain_Size_Test_Result_No2` varchar(250) DEFAULT NULL,
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
-- Volcado de datos para la tabla `grain_size_fine_aggregate`
--

INSERT INTO `grain_size_fine_aggregate` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Date_Material_Arrive`, `Date_of_improvement`, `Improvement`, `Samples_usig_for_improvement_No1`, `Samples_usig_for_improvement_No2`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Specs_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Specs_4_101`, `Wt_Ret_3p5_89`, `Porce_Ret_3p5_89`, `Cum_Ret_3p5_89`, `Porce_Pass_3p5_89`, `Specs_3p5_89`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Specs_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Specs_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Specs_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Specs_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Specs_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Specs_3p4_19`, `Wt_Ret_1p2_12`, `Porce_Ret_1p2_12`, `Cum_Ret_1p2_12`, `Porce_Pass_1p2_12`, `Specs_1p2_12`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Specs_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Specs_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Specs_No10_2`, `Wt_Ret_No16_1`, `Porce_Ret_No16_1`, `Cum_Ret_No16_1`, `Porce_Pass_No16_1`, `Specs_No16_1`, `Wt_Ret_No20_0p85`, `Porce_Ret_No20_0p85`, `Cum_Ret_No20_0p85`, `Porce_Pass_No20_0p85`, `Specs_No20_0p85`, `Wt_Ret_No50_0p3`, `Porce_Ret_No50_0p3`, `Cum_Ret_No50_0p3`, `Porce_Pass_No50_0p3`, `Specs_No50_0p3`, `Wt_Ret_No60_0p25`, `Porce_Ret_No60_0p25`, `Cum_Ret_No60_0p25`, `Porce_Pass_No60_0p25`, `Specs_No60_0p25`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Specs_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Weight_used_for_the_Test_g`, `A_Particles_Reactive`, `B_Particles_Reactive`, `C_Particles_Reactive`, `D_Particles_Reactive`, `E_Particles_Reactive`, `Average_Particles_Reactive`, `Reaction_Strength_Result`, `Acid_Reactivity_Test_Result`, `Grain_Size_Test_Result_No1`, `Grain_Size_Test_Result_No2`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-C136', 'Air_Dried', 'Man_Split', '2023-10-10', '2023-10-10', 'Yes', 'No1', 'No2', 'LAB-133-M', 2050.6, 1872.92, 418.6, 1454.32, 1075.04, 379.28, 127, 8.73, 8.73, 91.27, 1, 102, 7.01, 15.75, 84.25, 2, '89', '6.12', '21.87', '78.13', '3.5', 75, 5.16, 27.02, 72.98, 1, 63, 4.33, 31.35, 68.65, 2, 50.8, 3.49, 34.85, 65.15, 3, 37.5, 2.58, 37.43, 62.57, 0, 25, 1.72, 39.15, 60.85, 1, 19, 1.31, 40.45, 59.55, 2, 12.5, 0.86, 41.31, 58.69, 1, 9.5, 0.65, 41.96, 58.04, 100, 4.75, 0.33, 42.29, 57.71, 95, 2, 0.14, 42.43, 57.57, 75, 1.18, 0.08, 42.51, 57.49, 50, 0.85, 0.06, 42.57, 57.43, 52, 0.3, 0.02, 42.59, 57.41, 5, 0.25, 0.02, 42.61, 57.39, 0, 0.075, 0.01, 42.61, 57.39, 0, 50, 3.44, 429.28, 29.52, 72.13, 27.87, 75, 25, 15, 12, 20, 10, 16, 'Moderate Reaction', 'Accepted', 'Rejected', 'Error: No se pudo clasificar el suelo.', 27.02, 15.27, 0.32, 57.39, 0, 0, 0, 21.38, 0, 0, 0, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-17', 'N/A', 'GS-Fine', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grain_size_rocks`
--

CREATE TABLE `grain_size_rocks` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Screen_40_No1` float DEFAULT NULL,
  `Screen_40_No2` float DEFAULT NULL,
  `Screen_40_No3` float DEFAULT NULL,
  `Screen_40_No4` float DEFAULT NULL,
  `Screen_40_No5` float DEFAULT NULL,
  `Screen_40_No6` float DEFAULT NULL,
  `Screen_40_No7` float DEFAULT NULL,
  `Total_40_No8` float DEFAULT NULL,
  `Screen_30_No1` float DEFAULT NULL,
  `Screen_30_No2` float DEFAULT NULL,
  `Screen_30_No3` float DEFAULT NULL,
  `Screen_30_No4` float DEFAULT NULL,
  `Screen_30_No5` float DEFAULT NULL,
  `Screen_30_No6` float DEFAULT NULL,
  `Screen_30_No7` float DEFAULT NULL,
  `Total_30_No8` float DEFAULT NULL,
  `Screen_20_No1` float DEFAULT NULL,
  `Screen_20_No2` float DEFAULT NULL,
  `Screen_20_No3` float DEFAULT NULL,
  `Screen_20_No4` float DEFAULT NULL,
  `Screen_20_No5` float DEFAULT NULL,
  `Screen_20_No6` float DEFAULT NULL,
  `Screen_20_No7` float DEFAULT NULL,
  `Total_20_No8` float DEFAULT NULL,
  `Screen_13_No1` float DEFAULT NULL,
  `Screen_13_No2` float DEFAULT NULL,
  `Screen_13_No3` float DEFAULT NULL,
  `Screen_13_No4` float DEFAULT NULL,
  `Screen_13_No5` float DEFAULT NULL,
  `Screen_13_No6` float DEFAULT NULL,
  `Screen_13_No7` float DEFAULT NULL,
  `Total_13_No8` float DEFAULT NULL,
  `Screen_12_No1` float DEFAULT NULL,
  `Screen_12_No2` float DEFAULT NULL,
  `Screen_12_No3` float DEFAULT NULL,
  `Screen_12_No4` float DEFAULT NULL,
  `Screen_12_No5` float DEFAULT NULL,
  `Screen_12_No6` float DEFAULT NULL,
  `Screen_12_No7` float DEFAULT NULL,
  `Total_12_No8` float DEFAULT NULL,
  `Screen_10_No1` float DEFAULT NULL,
  `Screen_10_No2` float DEFAULT NULL,
  `Screen_10_No3` float DEFAULT NULL,
  `Screen_10_No4` float DEFAULT NULL,
  `Screen_10_No5` float DEFAULT NULL,
  `Screen_10_No6` float DEFAULT NULL,
  `Screen_10_No7` float DEFAULT NULL,
  `Total_10_No8` float DEFAULT NULL,
  `Screen_8_No1` float DEFAULT NULL,
  `Screen_8_No2` float DEFAULT NULL,
  `Screen_8_No3` float DEFAULT NULL,
  `Screen_8_No4` float DEFAULT NULL,
  `Screen_8_No5` float DEFAULT NULL,
  `Screen_8_No6` float DEFAULT NULL,
  `Screen_8_No7` float DEFAULT NULL,
  `Total_8_No8` float DEFAULT NULL,
  `Screen_6_No1` float DEFAULT NULL,
  `Screen_6_No2` float DEFAULT NULL,
  `Screen_6_No3` float DEFAULT NULL,
  `Screen_6_No4` float DEFAULT NULL,
  `Screen_6_No5` float DEFAULT NULL,
  `Screen_6_No6` float DEFAULT NULL,
  `Screen_6_No7` float DEFAULT NULL,
  `Total_6_No8` float DEFAULT NULL,
  `Screen_4_No1` float DEFAULT NULL,
  `Screen_4_No2` float DEFAULT NULL,
  `Screen_4_No3` float DEFAULT NULL,
  `Screen_4_No4` float DEFAULT NULL,
  `Screen_4_No5` float DEFAULT NULL,
  `Screen_4_No6` float DEFAULT NULL,
  `Screen_4_No7` float DEFAULT NULL,
  `Total_4_No8` float DEFAULT NULL,
  `Screen_3_No1` float DEFAULT NULL,
  `Screen_3_No2` float DEFAULT NULL,
  `Screen_3_No3` float DEFAULT NULL,
  `Screen_3_No4` float DEFAULT NULL,
  `Screen_3_No5` float DEFAULT NULL,
  `Screen_3_No6` float DEFAULT NULL,
  `Screen_3_No7` float DEFAULT NULL,
  `Total_3_No8` float DEFAULT NULL,
  `Total_De_Muestra_Mayor_de_3_Kg` float DEFAULT NULL,
  `Total_De_Muestra_Mayor_de_3_Gr` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum1_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum2_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum3_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum4_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum5_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum6_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum7_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum8_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum9_No8` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No1` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No2` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No3` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No4` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No5` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No6` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No7` float DEFAULT NULL,
  `Total_De_Material_Pasante_Menos_3_Colum10_No8` float DEFAULT NULL,
  `Total_De_Muestra_Menor_de_3_Kg` float DEFAULT NULL,
  `Total_De_Muestra_Menor_de_3_Gr` float NOT NULL,
  `Tare_Name_No1` varchar(40) DEFAULT NULL,
  `Tare_Name_No2` varchar(40) DEFAULT NULL,
  `Tare_Name_No3` varchar(40) DEFAULT NULL,
  `Oven_Temperature_No1` varchar(20) DEFAULT NULL,
  `Oven_Temperature_No2` varchar(20) DEFAULT NULL,
  `Oven_Temperature_No3` varchar(20) DEFAULT NULL,
  `Tare_Plus_Wet_Soil_Gr_No1` float DEFAULT NULL,
  `Tare_Plus_Wet_Soil_Gr_No2` float DEFAULT NULL,
  `Tare_Plus_Wet_Soil_Gr_No3` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_Gr_No1` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_Gr_No2` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_Gr_No3` float DEFAULT NULL,
  `Water_Ww_Gr_No1` float DEFAULT NULL,
  `Water_Ww_Gr_No2` float DEFAULT NULL,
  `Water_Ww_Gr_No3` float DEFAULT NULL,
  `Tare_Gr_No1` float DEFAULT NULL,
  `Tare_Gr_No2` float DEFAULT NULL,
  `Tare_Gr_No3` float DEFAULT NULL,
  `Dry_Soil_Ws_Gr_No1` float DEFAULT NULL,
  `Dry_Soil_Ws_Gr_No2` float DEFAULT NULL,
  `Dry_Soil_Ws_Gr_No3` float DEFAULT NULL,
  `Moisture_Content_Porce_No1` float DEFAULT NULL,
  `Moisture_Content_Porce_No2` float DEFAULT NULL,
  `Moisture_Content_Porce_No3` float DEFAULT NULL,
  `Moisture_Content_Average_Porce` float DEFAULT NULL,
  `Mayor_a_3_Gr` float DEFAULT NULL,
  `Menor_a_3_Gr` float DEFAULT NULL,
  `Total_Peso_Seco_Sucio_Gr` float DEFAULT NULL,
  `Total_Peso_Lavado_Gr` float DEFAULT NULL,
  `Perdida_Por_Lavado_Gr` float DEFAULT NULL,
  `Peso_Seco_Sucio` float DEFAULT NULL,
  `Peso_Lavado` float DEFAULT NULL,
  `Pan_Lavado` float DEFAULT NULL,
  `Wt_Ret_3` float DEFAULT NULL,
  `Ret_3` float DEFAULT NULL,
  `Cum_Ret_3` float DEFAULT NULL,
  `Pass_3` float DEFAULT NULL,
  `Wt_Ret_21p2` float DEFAULT NULL,
  `Ret_21p2` float DEFAULT NULL,
  `Cum_Ret_21p2` float DEFAULT NULL,
  `Pass_21p2` float DEFAULT NULL,
  `Wt_Ret_2` float DEFAULT NULL,
  `Ret_2` float DEFAULT NULL,
  `Cum_Ret_2` float DEFAULT NULL,
  `Pass_2` float DEFAULT NULL,
  `Wt_Ret_1p5` float DEFAULT NULL,
  `Ret_1p5` float DEFAULT NULL,
  `Cum_Ret_1p5` float DEFAULT NULL,
  `Pass_1p5` float DEFAULT NULL,
  `Wt_Ret_1` float DEFAULT NULL,
  `Ret_1` float DEFAULT NULL,
  `Cum_Ret_1` float DEFAULT NULL,
  `Pass_1` float DEFAULT NULL,
  `Wt_Ret_3p4` float DEFAULT NULL,
  `Ret_3p4` float DEFAULT NULL,
  `Cum_Ret_3p4` float DEFAULT NULL,
  `Pass_3p4` float DEFAULT NULL,
  `Wt_Ret_1p2` float DEFAULT NULL,
  `Ret_1p2` float DEFAULT NULL,
  `Cum_Ret_1p2` float DEFAULT NULL,
  `Pass_1p2` float DEFAULT NULL,
  `Wt_Ret_3p8` float DEFAULT NULL,
  `Ret_3p8` float DEFAULT NULL,
  `Cum_Ret_3p8` float DEFAULT NULL,
  `Pass_3p8` float DEFAULT NULL,
  `Wt_Ret_No4` float DEFAULT NULL,
  `Ret_No4` float DEFAULT NULL,
  `Cum_Ret_No4` float DEFAULT NULL,
  `Pass_No4` float DEFAULT NULL,
  `Wt_Ret_No10` float DEFAULT NULL,
  `Ret_No10` float DEFAULT NULL,
  `Cum_Ret_No10` float DEFAULT NULL,
  `Pass_No10` float DEFAULT NULL,
  `Wt_Ret_No16` float DEFAULT NULL,
  `Ret_No16` float DEFAULT NULL,
  `Cum_Ret_No16` float DEFAULT NULL,
  `Pass_No16` float DEFAULT NULL,
  `Wt_Ret_No20` float DEFAULT NULL,
  `Ret_No20` float DEFAULT NULL,
  `Cum_Ret_No20` float DEFAULT NULL,
  `Pass_No20` float DEFAULT NULL,
  `Wt_Ret_No50` float DEFAULT NULL,
  `Ret_No50` float DEFAULT NULL,
  `Cum_Ret_No50` float DEFAULT NULL,
  `Pass_No50` float DEFAULT NULL,
  `Wt_Ret_No60` float DEFAULT NULL,
  `Ret_No60` float DEFAULT NULL,
  `Cum_Ret_No60` float DEFAULT NULL,
  `Pass_No60` float DEFAULT NULL,
  `Wt_Ret_No100` float DEFAULT NULL,
  `Ret_No100` float DEFAULT NULL,
  `Cum_Ret_No100` float DEFAULT NULL,
  `Pass_No100` float DEFAULT NULL,
  `Wt_Ret_No140` float DEFAULT NULL,
  `Ret_No140` float DEFAULT NULL,
  `Cum_Ret_No140` float DEFAULT NULL,
  `Pass_No140` float DEFAULT NULL,
  `Wt_Ret_No200` float DEFAULT NULL,
  `Ret_No200` float DEFAULT NULL,
  `Cum_Ret_No200` float DEFAULT NULL,
  `Pass_No200` float DEFAULT NULL,
  `Pan_Wt_Ret` float DEFAULT NULL,
  `Pan_Ret` float DEFAULT NULL,
  `Total_Wt_Ret` float DEFAULT NULL,
  `Total_Ret` float DEFAULT NULL,
  `Total_Cum_Ret` float DEFAULT NULL,
  `Total_Pass` float DEFAULT NULL,
  `Factor_De_Conversion` float DEFAULT NULL,
  `Gs_Wt_Ret_50` float DEFAULT NULL,
  `Gs_Ret_50` float DEFAULT NULL,
  `Gs_Cum_Ret_50` float DEFAULT NULL,
  `Gs_Pass_50` float DEFAULT NULL,
  `Gs_Wt_Ret_40` float DEFAULT NULL,
  `Gs_Ret_40` float DEFAULT NULL,
  `Gs_Cum_Ret_40` float DEFAULT NULL,
  `Gs_Pass_40` float DEFAULT NULL,
  `Gs_Wt_Ret_12` float DEFAULT NULL,
  `Gs_Ret_12` float DEFAULT NULL,
  `Gs_Cum_Ret_12` float DEFAULT NULL,
  `Gs_Pass_12` float DEFAULT NULL,
  `Gs_Wt_Ret_10` float DEFAULT NULL,
  `Gs_Ret_10` float DEFAULT NULL,
  `Gs_Cum_Ret_10` float DEFAULT NULL,
  `Gs_Pass_10` float DEFAULT NULL,
  `Gs_Wt_Ret_8` float DEFAULT NULL,
  `Gs_Ret_8` float DEFAULT NULL,
  `Gs_Cum_Ret_8` float DEFAULT NULL,
  `Gs_Pass_8` float DEFAULT NULL,
  `Gs_Wt_Ret_6` float DEFAULT NULL,
  `Gs_Ret_6` float DEFAULT NULL,
  `Gs_Cum_Ret_6` float DEFAULT NULL,
  `Gs_Pass_6` float DEFAULT NULL,
  `Gs_Wt_Ret_4` float DEFAULT NULL,
  `Gs_Ret_4` float DEFAULT NULL,
  `Gs_Cum_Ret_4` float DEFAULT NULL,
  `Gs_Pass_4` float DEFAULT NULL,
  `Gs_Wt_Ret_3` float DEFAULT NULL,
  `Gs_Ret_3` float DEFAULT NULL,
  `Gs_Cum_Ret_3` float DEFAULT NULL,
  `Gs_Pass_3` float DEFAULT NULL,
  `Gs_Wt_Ret_2p5` float DEFAULT NULL,
  `Gs_Ret_2p5` float DEFAULT NULL,
  `Gs_Cum_Ret_2p5` float DEFAULT NULL,
  `Gs_Pass_2p5` float DEFAULT NULL,
  `Gs_Wt_Ret_2` float DEFAULT NULL,
  `Gs_Ret_2` float DEFAULT NULL,
  `Gs_Cum_Ret_2` float DEFAULT NULL,
  `Gs_Pass_2` float DEFAULT NULL,
  `Gs_Wt_Ret_1p5` float DEFAULT NULL,
  `Gs_Ret_1p5` float DEFAULT NULL,
  `Gs_Cum_Ret_1p5` float DEFAULT NULL,
  `Gs_Pass_1p5` float DEFAULT NULL,
  `Gs_Wt_Ret_1` float DEFAULT NULL,
  `Gs_Ret_1` float DEFAULT NULL,
  `Gs_Cum_Ret_1` float DEFAULT NULL,
  `Gs_Pass_1` float DEFAULT NULL,
  `Gs_Wt_Ret_3p4` float DEFAULT NULL,
  `Gs_Ret_3p4` float DEFAULT NULL,
  `Gs_Cum_Ret_3p4` float DEFAULT NULL,
  `Gs_Pass_3p4` float DEFAULT NULL,
  `Gs_Wt_Ret_1p2` float DEFAULT NULL,
  `Gs_Ret_1p2` float DEFAULT NULL,
  `Gs_Cum_Ret_1p2` float DEFAULT NULL,
  `Gs_Pass_1p2` float DEFAULT NULL,
  `Gs_Wt_Ret_3p8` float DEFAULT NULL,
  `Gs_Ret_3p8` float DEFAULT NULL,
  `Gs_Cum_Ret_3p8` float DEFAULT NULL,
  `Gs_Pass_3p8` float DEFAULT NULL,
  `Gs_Wt_Ret_No4` float DEFAULT NULL,
  `Gs_Ret_No4` float DEFAULT NULL,
  `Gs_Cum_Ret_No4` float DEFAULT NULL,
  `Gs_Pass_No4` float DEFAULT NULL,
  `Gs_Wt_Ret_No10` float DEFAULT NULL,
  `Gs_Ret_No10` float DEFAULT NULL,
  `Gs_Cum_Ret_No10` float DEFAULT NULL,
  `Gs_Pass_No10` float DEFAULT NULL,
  `Gs_Wt_Ret_No16` float DEFAULT NULL,
  `Gs_Ret_No16` float DEFAULT NULL,
  `Gs_Cum_Ret_No16` float DEFAULT NULL,
  `Gs_Pass_No16` float DEFAULT NULL,
  `Gs_Wt_Ret_No20` float DEFAULT NULL,
  `Gs_Ret_No20` float DEFAULT NULL,
  `Gs_Cum_Ret_No20` float DEFAULT NULL,
  `Gs_Pass_No20` float DEFAULT NULL,
  `Gs_Wt_Ret_No50` float DEFAULT NULL,
  `Gs_Ret_No50` float DEFAULT NULL,
  `Gs_Cum_Ret_No50` float DEFAULT NULL,
  `Gs_Pass_No50` float DEFAULT NULL,
  `Gs_Wt_Ret_No60` float DEFAULT NULL,
  `Gs_Ret_No60` float DEFAULT NULL,
  `Gs_Cum_Ret_No60` float DEFAULT NULL,
  `Gs_Pass_No60` float DEFAULT NULL,
  `Gs_Wt_Ret_No100` float DEFAULT NULL,
  `Gs_Ret_No100` float DEFAULT NULL,
  `Gs_Cum_Ret_No100` float DEFAULT NULL,
  `Gs_Pass_No100` float DEFAULT NULL,
  `Gs_Wt_Ret_No140` float DEFAULT NULL,
  `Gs_Ret_No140` float DEFAULT NULL,
  `Gs_Cum_Ret_No140` float DEFAULT NULL,
  `Gs_Pass_No140` float DEFAULT NULL,
  `Gs_Wt_Ret_No200` float DEFAULT NULL,
  `Gs_Ret_No200` float DEFAULT NULL,
  `Gs_Cum_Ret_No200` float DEFAULT NULL,
  `Gs_Pass_No200` float DEFAULT NULL,
  `Gs_Pan_Wt_Ret` float DEFAULT NULL,
  `Gs_Pan_Ret` float DEFAULT NULL,
  `Gs_Total_Wt_Ret` float DEFAULT NULL,
  `Gs_Total_Ret` float DEFAULT NULL,
  `Gs_Total_Cum_Ret` float DEFAULT NULL,
  `Gs_Total_Pass` float DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grain_size_sieved_coarse_aggregate`
--

CREATE TABLE `grain_size_sieved_coarse_aggregate` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Date_Material_Arrive` date NOT NULL,
  `Date_of_improvement` date NOT NULL,
  `Improvement` varchar(20) NOT NULL,
  `Samples_usig_for_improvement_No1` varchar(20) NOT NULL,
  `Samples_usig_for_improvement_No2` varchar(20) NOT NULL,
  `Container` varchar(20) DEFAULT NULL,
  `Tare_Wet_Soil` float DEFAULT NULL,
  `Tare_Dry_Soil` float DEFAULT NULL,
  `Tare` float DEFAULT NULL,
  `Dry_Soil` float DEFAULT NULL,
  `Washed` float DEFAULT NULL,
  `Wash_Pan` float DEFAULT NULL,
  `Wt_Ret_5_127` float DEFAULT NULL,
  `Porce_Ret_5_127` float DEFAULT NULL,
  `Cum_Ret_5_127` float DEFAULT NULL,
  `Porce_Pass_5_127` float DEFAULT NULL,
  `Specs_5_127` float DEFAULT NULL,
  `Wt_Ret_4_101` float DEFAULT NULL,
  `Porce_Ret_4_101` float DEFAULT NULL,
  `Cum_Ret_4_101` float DEFAULT NULL,
  `Porce_Pass_4_101` float DEFAULT NULL,
  `Specs_4_101` float DEFAULT NULL,
  `Wt_Ret_3p5_89` float DEFAULT NULL,
  `Porce_Ret_3p5_89` float DEFAULT NULL,
  `Cum_Ret_3p5_89` float DEFAULT NULL,
  `Porce_Pass_3p5_89` float DEFAULT NULL,
  `Specs_3p5_89` float DEFAULT NULL,
  `Wt_Ret_3_75` float DEFAULT NULL,
  `Porce_Ret_3_75` float DEFAULT NULL,
  `Cum_Ret_3_75` float DEFAULT NULL,
  `Porce_Pass_3_75` float DEFAULT NULL,
  `Specs_3_75` float DEFAULT NULL,
  `Wt_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Ret_2p5_63` float DEFAULT NULL,
  `Cum_Ret_2p5_63` float DEFAULT NULL,
  `Porce_Pass_2p5_63` float DEFAULT NULL,
  `Specs_2p5_63` float DEFAULT NULL,
  `Wt_Ret_2_50` float DEFAULT NULL,
  `Porce_Ret_2_50` float DEFAULT NULL,
  `Cum_Ret_2_50` float DEFAULT NULL,
  `Porce_Pass_2_50` float DEFAULT NULL,
  `Specs_2_50` float DEFAULT NULL,
  `Wt_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Ret_1p5_37` float DEFAULT NULL,
  `Cum_Ret_1p5_37` float DEFAULT NULL,
  `Porce_Pass_1p5_37` float DEFAULT NULL,
  `Specs_1p5_37` float DEFAULT NULL,
  `Wt_Ret_1_25` float DEFAULT NULL,
  `Porce_Ret_1_25` float DEFAULT NULL,
  `Cum_Ret_1_25` float DEFAULT NULL,
  `Porce_Pass_1_25` float DEFAULT NULL,
  `Specs_1_25` float DEFAULT NULL,
  `Wt_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Ret_3p4_19` float DEFAULT NULL,
  `Cum_Ret_3p4_19` float DEFAULT NULL,
  `Porce_Pass_3p4_19` float DEFAULT NULL,
  `Specs_3p4_19` float DEFAULT NULL,
  `Wt_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Ret_3p8_9` float DEFAULT NULL,
  `Cum_Ret_3p8_9` float DEFAULT NULL,
  `Porce_Pass_3p8_9` float DEFAULT NULL,
  `Specs_3p8_9` float DEFAULT NULL,
  `Wt_Ret_No4_4` float DEFAULT NULL,
  `Porce_Ret_No4_4` float DEFAULT NULL,
  `Cum_Ret_No4_4` float DEFAULT NULL,
  `Porce_Pass_No4_4` float DEFAULT NULL,
  `Specs_No4_4` float DEFAULT NULL,
  `Wt_Ret_No10_2` float DEFAULT NULL,
  `Porce_Ret_No10_2` float DEFAULT NULL,
  `Cum_Ret_No10_2` float DEFAULT NULL,
  `Porce_Pass_No10_2` float DEFAULT NULL,
  `Specs_No10_2` float DEFAULT NULL,
  `Wt_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Ret_No200_0p075` float DEFAULT NULL,
  `Cum_Ret_No200_0p075` float DEFAULT NULL,
  `Porce_Pass_No200_0p075` float DEFAULT NULL,
  `Specs_No200_0p075` float DEFAULT NULL,
  `Wt_Ret_Pan` float DEFAULT NULL,
  `Porce_Ret_Pan` float DEFAULT NULL,
  `Wt_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Ret_Total_Pan` float DEFAULT NULL,
  `Cum_Ret_Total_Pan` float DEFAULT NULL,
  `Porce_Pass_Total_Pan` float DEFAULT NULL,
  `Total_Sample_Weight_g` float DEFAULT NULL,
  `Weight_used_for_the_Test_g` float DEFAULT NULL,
  `A_Particles_Reactive` float DEFAULT NULL,
  `B_Particles_Reactive` float DEFAULT NULL,
  `C_Particles_Reactive` float DEFAULT NULL,
  `Weight_Mat_Ret_No_4_If_Applicable` float DEFAULT NULL,
  `Wt_Reactive_Part_Ret_No4_If_Applicable` float DEFAULT NULL,
  `Percent_Reactive_Particles_If_Applicable` varchar(10) NOT NULL,
  `Average_Particles_Reactive` float DEFAULT NULL,
  `Reaction_Strength_Result` varchar(20) NOT NULL,
  `Acid_Reactivity_Test_Result` varchar(20) NOT NULL,
  `Grain_Size_Test_Result` varchar(50) NOT NULL,
  `Fine_Grained_Classification_using_the_USCS` varchar(50) NOT NULL,
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
  `test_type` varchar(20) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `grain_size_sieved_coarse_aggregate`
--

INSERT INTO `grain_size_sieved_coarse_aggregate` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Date_Material_Arrive`, `Date_of_improvement`, `Improvement`, `Samples_usig_for_improvement_No1`, `Samples_usig_for_improvement_No2`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Specs_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Specs_4_101`, `Wt_Ret_3p5_89`, `Porce_Ret_3p5_89`, `Cum_Ret_3p5_89`, `Porce_Pass_3p5_89`, `Specs_3p5_89`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Specs_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Specs_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Specs_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Specs_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Specs_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Specs_3p4_19`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Specs_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Specs_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Specs_No10_2`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Specs_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Total_Sample_Weight_g`, `Weight_used_for_the_Test_g`, `A_Particles_Reactive`, `B_Particles_Reactive`, `C_Particles_Reactive`, `Weight_Mat_Ret_No_4_If_Applicable`, `Wt_Reactive_Part_Ret_No4_If_Applicable`, `Percent_Reactive_Particles_If_Applicable`, `Average_Particles_Reactive`, `Reaction_Strength_Result`, `Acid_Reactivity_Test_Result`, `Grain_Size_Test_Result`, `Fine_Grained_Classification_using_the_USCS`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-C136', 'Air_Dried', 'Man_Split', '2023-10-10', '2023-10-10', 'No', 'No1', 'No2', 'LAB-134-N1', 6625.2, 1872.92, 646.2, 1226.72, 1075.04, 151.68, 9.5, 0.77, 0.77, 99.23, 5, 4.75, 0.39, 1.16, 98.84, 4, 19, 1.55, 2.71, 97.29, 3.5, 25, 2.04, 4.75, 95.25, 3, 37.5, 3.06, 7.81, 92.19, 2.5, 50.8, 4.14, 11.95, 88.05, 2, 63, 5.14, 17.08, 82.92, 1.5, 75, 6.11, 23.2, 76.8, 1, 89, 7.26, 30.45, 69.55, 3.4, 102, 8.31, 38.77, 61.23, 3.8, 127, 10.35, 49.12, 50.88, 4, 132, 10.76, 59.88, 40.12, 10, 95, 7.74, 67.62, 32.38, 200, 245.43, 20.01, 397.11, 32.37, 100, 0, 127, 102, 89, 75, 63, 50.8, 37.5, '25', 76, 'Strong Reaction', 'Rejected', 'Rejected', 'Error: No se pudo clasificar el suelo.', 4.75, 44.37, 18.5, 32.38, 0, 0, 0, 8.81, 42.9, 0, 0, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-17', 'N/A', 'GS-Sieved-Coarse', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grout_specimens`
--

CREATE TABLE `grout_specimens` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Diameter_N1` float DEFAULT NULL,
  `Diameter_N2` float DEFAULT NULL,
  `Diameter_N3` float DEFAULT NULL,
  `Diameter_N4` float DEFAULT NULL,
  `Diameter_N5` float DEFAULT NULL,
  `High_N1` float DEFAULT NULL,
  `High_N2` float DEFAULT NULL,
  `High_N3` float DEFAULT NULL,
  `High_N4` float DEFAULT NULL,
  `High_N5` float DEFAULT NULL,
  `Length_N1` float DEFAULT NULL,
  `Length_N2` float DEFAULT NULL,
  `Length_N3` float DEFAULT NULL,
  `Length_N4` float DEFAULT NULL,
  `Length_N5` float DEFAULT NULL,
  `Area_m2_N1` float DEFAULT NULL,
  `Area_m2_N2` float DEFAULT NULL,
  `Area_m2_N3` float DEFAULT NULL,
  `Area_m2_N4` float DEFAULT NULL,
  `Area_m2_N5` float DEFAULT NULL,
  `Volumen_m3_N1` float DEFAULT NULL,
  `Volumen_m3_N2` float DEFAULT NULL,
  `Volumen_m3_N3` float DEFAULT NULL,
  `Volumen_m3_N4` float DEFAULT NULL,
  `Volumen_m3_N5` float DEFAULT NULL,
  `Weight_Cylinder_kg_N1` float DEFAULT NULL,
  `Weight_Cylinder_kg_N2` float DEFAULT NULL,
  `Weight_Cylinder_kg_N3` float DEFAULT NULL,
  `Weight_Cylinder_kg_N4` float DEFAULT NULL,
  `Weight_Cylinder_kg_N5` float DEFAULT NULL,
  `Age_Days_N1` float DEFAULT NULL,
  `Age_Days_N2` float DEFAULT NULL,
  `Age_Days_N3` float DEFAULT NULL,
  `Age_Days_N4` float DEFAULT NULL,
  `Age_Days_N5` float DEFAULT NULL,
  `Unit_Weight_kgm3_N1` float DEFAULT NULL,
  `Unit_Weight_kgm3_N2` float DEFAULT NULL,
  `Unit_Weight_kgm3_N3` float DEFAULT NULL,
  `Unit_Weight_kgm3_N4` float DEFAULT NULL,
  `Unit_Weight_kgm3_N5` float DEFAULT NULL,
  `Failure_Load_kn_N1` float DEFAULT NULL,
  `Failure_Load_kn_N2` float DEFAULT NULL,
  `Failure_Load_kn_N3` float DEFAULT NULL,
  `Failure_Load_kn_N4` float DEFAULT NULL,
  `Failure_Load_kn_N5` float DEFAULT NULL,
  `Strenght_Mpa_N1` float DEFAULT NULL,
  `Strenght_Mpa_N2` float DEFAULT NULL,
  `Strenght_Mpa_N3` float DEFAULT NULL,
  `Strenght_Mpa_N4` float DEFAULT NULL,
  `Strenght_Mpa_N5` float DEFAULT NULL,
  `Average_Strenght_Mpa` float DEFAULT NULL,
  `Type_Mpa_N1` float DEFAULT NULL,
  `Type_Mpa_N2` float DEFAULT NULL,
  `Type_Mpa_N3` float DEFAULT NULL,
  `Type_Mpa_N4` float DEFAULT NULL,
  `Type_Mpa_N5` float DEFAULT NULL,
  `Observations_N1` varchar(30) NOT NULL,
  `Observations_N2` varchar(30) NOT NULL,
  `Observations_N3` varchar(30) NOT NULL,
  `Observations_N4` varchar(30) NOT NULL,
  `Observations_N5` varchar(30) NOT NULL,
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
  `Technician` varchar(10) NOT NULL,
  `Graphic_Load_versus_time` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `grout_specimens`
--

INSERT INTO `grout_specimens` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Diameter_N1`, `Diameter_N2`, `Diameter_N3`, `Diameter_N4`, `Diameter_N5`, `High_N1`, `High_N2`, `High_N3`, `High_N4`, `High_N5`, `Length_N1`, `Length_N2`, `Length_N3`, `Length_N4`, `Length_N5`, `Area_m2_N1`, `Area_m2_N2`, `Area_m2_N3`, `Area_m2_N4`, `Area_m2_N5`, `Volumen_m3_N1`, `Volumen_m3_N2`, `Volumen_m3_N3`, `Volumen_m3_N4`, `Volumen_m3_N5`, `Weight_Cylinder_kg_N1`, `Weight_Cylinder_kg_N2`, `Weight_Cylinder_kg_N3`, `Weight_Cylinder_kg_N4`, `Weight_Cylinder_kg_N5`, `Age_Days_N1`, `Age_Days_N2`, `Age_Days_N3`, `Age_Days_N4`, `Age_Days_N5`, `Unit_Weight_kgm3_N1`, `Unit_Weight_kgm3_N2`, `Unit_Weight_kgm3_N3`, `Unit_Weight_kgm3_N4`, `Unit_Weight_kgm3_N5`, `Failure_Load_kn_N1`, `Failure_Load_kn_N2`, `Failure_Load_kn_N3`, `Failure_Load_kn_N4`, `Failure_Load_kn_N5`, `Strenght_Mpa_N1`, `Strenght_Mpa_N2`, `Strenght_Mpa_N3`, `Strenght_Mpa_N4`, `Strenght_Mpa_N5`, `Average_Strenght_Mpa`, `Type_Mpa_N1`, `Type_Mpa_N2`, `Type_Mpa_N3`, `Type_Mpa_N4`, `Type_Mpa_N5`, `Observations_N1`, `Observations_N2`, `Observations_N3`, `Observations_N4`, `Observations_N5`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`, `Graphic_Load_versus_time`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM C88', 'Air_Dried', 'Man_Split', 50, 0, 0, 0, 0, 50, 0, 0, 0, 0, 50, 0, 0, 0, 0, 0.0025, 0, 0, 0, 0, 0.000125, 0, 0, 0, 0, 2.979, 0, 0, 0, 0, 16, 0, 0, 0, 0, 23832, 0, 0, 0, 0, 100.61, 0, 0, 0, 0, 40.25, 0, 0, 0, 0, 8.05, 2, 0, 0, 0, 0, 'N/A', '', '', '', '', 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-12', 'N/A', 'UCS-grout', 'AS', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hydrometer`
--

CREATE TABLE `hydrometer` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Dispersion_Device` varchar(20) NOT NULL,
  `Hydrometer_Type` varchar(10) NOT NULL,
  `Temperature_Type` varchar(30) NOT NULL,
  `Specific_Gravity_Type` varchar(25) NOT NULL,
  `Dispersing_Agent` varchar(20) NOT NULL,
  `Amount_Used_g` float DEFAULT NULL,
  `Temperature_of_Test` varchar(20) NOT NULL,
  `Viscosity_of_Water_gs_cm2` float DEFAULT NULL,
  `Mass_Density_of_Water_Calibrated` float DEFAULT NULL,
  `Acceleration_cm_s2` float DEFAULT NULL,
  `Volume_of_Suspension_Vsp_cm3` float DEFAULT NULL,
  `Meniscus_Correction_Cm` float DEFAULT NULL,
  `Percent_Passing_No_200_sieve` float DEFAULT NULL,
  `Liquid_Limit_Porce` float DEFAULT NULL,
  `Plasticity_Index_Porce` float DEFAULT NULL,
  `Specific_Gravity` float DEFAULT NULL,
  `Tare_Name` varchar(30) NOT NULL,
  `Oven_Temperature` varchar(20) NOT NULL,
  `Tare_Plus_Wet_Soil_gr` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_gr` float DEFAULT NULL,
  `Water_Ww_gr` float DEFAULT NULL,
  `Gs_Tare_gr` float DEFAULT NULL,
  `Dry_Soil_Ws_gr` float DEFAULT NULL,
  `Moisture_Content_Porce` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No1` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No2` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No3` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No4` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No5` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No6` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No7` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No8` float DEFAULT NULL,
  `Hy_Calibration_Temperature_No9` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No1` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No2` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No3` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No4` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No5` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No6` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No7` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No8` float DEFAULT NULL,
  `Hy_Calibration_Actual_Reading_No9` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No1` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No2` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No3` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No4` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No5` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No6` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No7` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No8` float DEFAULT NULL,
  `Hy_Measure_Fluid_Temperature_No9` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No1` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No2` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No3` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No4` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No5` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No6` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No7` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No8` float DEFAULT NULL,
  `Hy_Measure_Fluid_Actual_Reading_No9` float DEFAULT NULL,
  `Container` varchar(30) NOT NULL,
  `Wt_Wet_Soil_Tare_gr` float DEFAULT NULL,
  `Wt_Dry_Soil_Tare_gr` float DEFAULT NULL,
  `Tare_gr` float DEFAULT NULL,
  `Wt_Dry_Soil_gr` float DEFAULT NULL,
  `Wt_Washed_gr` float DEFAULT NULL,
  `Wt_Wash_Pan_gr` float DEFAULT NULL,
  `Wt_Ret_40` float DEFAULT NULL,
  `Ret_40` float DEFAULT NULL,
  `Cum_Ret_40` float DEFAULT NULL,
  `Pass_40` float DEFAULT NULL,
  `Wt_Ret_12` float DEFAULT NULL,
  `Ret_12` float DEFAULT NULL,
  `Cum_Ret_12` float DEFAULT NULL,
  `Pass_12` float DEFAULT NULL,
  `Wt_Ret_10` float DEFAULT NULL,
  `Ret_10` float DEFAULT NULL,
  `Cum_Ret_10` float DEFAULT NULL,
  `Pass_10` float DEFAULT NULL,
  `Wt_Ret_8` float DEFAULT NULL,
  `Ret_8` float DEFAULT NULL,
  `Cum_Ret_8` float DEFAULT NULL,
  `Pass_8` float DEFAULT NULL,
  `Wt_Ret_6` float DEFAULT NULL,
  `Ret_6` float DEFAULT NULL,
  `Cum_Ret_6` float DEFAULT NULL,
  `Pass_6` float DEFAULT NULL,
  `Wt_Ret_5` float DEFAULT NULL,
  `Ret_5` float DEFAULT NULL,
  `Cum_Ret_5` float DEFAULT NULL,
  `Pass_5` float DEFAULT NULL,
  `Wt_Ret_4` float DEFAULT NULL,
  `Ret_4` float DEFAULT NULL,
  `Cum_Ret_4` float DEFAULT NULL,
  `Pass_4` float DEFAULT NULL,
  `Wt_Ret_3` float DEFAULT NULL,
  `Ret_3` float DEFAULT NULL,
  `Cum_Ret_3` float DEFAULT NULL,
  `Pass_3` float DEFAULT NULL,
  `Wt_Ret_2p5` float DEFAULT NULL,
  `Ret_2p5` float DEFAULT NULL,
  `Cum_Ret_2p5` float DEFAULT NULL,
  `Pass_2p5` float DEFAULT NULL,
  `Wt_Ret_2` float DEFAULT NULL,
  `Ret_2` float DEFAULT NULL,
  `Cum_Ret_2` float DEFAULT NULL,
  `Pass_2` float DEFAULT NULL,
  `Wt_Ret_1p5` float DEFAULT NULL,
  `Ret_1p5` float DEFAULT NULL,
  `Cum_Ret_1p5` float DEFAULT NULL,
  `Pass_1p5` float DEFAULT NULL,
  `Wt_Ret_1` float DEFAULT NULL,
  `Ret_1` float DEFAULT NULL,
  `Cum_Ret_1` float DEFAULT NULL,
  `Pass_1` float DEFAULT NULL,
  `Wt_Ret_3p4` float DEFAULT NULL,
  `Ret_3p4` float DEFAULT NULL,
  `Cum_Ret_3p4` float DEFAULT NULL,
  `Pass_3p4` float DEFAULT NULL,
  `Wt_Ret_1p2` float DEFAULT NULL,
  `Ret_1p2` float DEFAULT NULL,
  `Cum_Ret_1p2` float DEFAULT NULL,
  `Pass_1p2` float DEFAULT NULL,
  `Wt_Ret_3p8` float DEFAULT NULL,
  `Ret_3p8` float DEFAULT NULL,
  `Cum_Ret_3p8` float DEFAULT NULL,
  `Pass_3p8` float DEFAULT NULL,
  `Wt_Ret_No4` float DEFAULT NULL,
  `Ret_No4` float DEFAULT NULL,
  `Cum_Ret_No4` float DEFAULT NULL,
  `Pass_No4` float DEFAULT NULL,
  `Wt_Ret_No10` float DEFAULT NULL,
  `Ret_No10` float DEFAULT NULL,
  `Cum_Ret_No10` float DEFAULT NULL,
  `Pass_No10` float DEFAULT NULL,
  `Wt_Ret_No16` float DEFAULT NULL,
  `Ret_No16` float DEFAULT NULL,
  `Cum_Ret_No16` float DEFAULT NULL,
  `Pass_No16` float DEFAULT NULL,
  `Wt_Ret_No20` float DEFAULT NULL,
  `Ret_No20` float DEFAULT NULL,
  `Cum_Ret_No20` float DEFAULT NULL,
  `Pass_No20` float DEFAULT NULL,
  `Wt_Ret_No50` float DEFAULT NULL,
  `Ret_No50` float DEFAULT NULL,
  `Cum_Ret_No50` float DEFAULT NULL,
  `Pass_No50` float DEFAULT NULL,
  `Wt_Ret_No60` float DEFAULT NULL,
  `Ret_No60` float DEFAULT NULL,
  `Cum_Ret_No60` float DEFAULT NULL,
  `Pass_No60` float DEFAULT NULL,
  `Wt_Ret_No100` float DEFAULT NULL,
  `Ret_No100` float DEFAULT NULL,
  `Cum_Ret_No100` float DEFAULT NULL,
  `Pass_No100` float DEFAULT NULL,
  `Wt_Ret_No140` float DEFAULT NULL,
  `Ret_No140` float DEFAULT NULL,
  `Cum_Ret_No140` float DEFAULT NULL,
  `Pass_No140` float DEFAULT NULL,
  `Wt_Ret_No200` float DEFAULT NULL,
  `Ret_No200` float DEFAULT NULL,
  `Cum_Ret_No200` float DEFAULT NULL,
  `Pass_No200` float DEFAULT NULL,
  `Pan_Wt_Ret` float DEFAULT NULL,
  `Pan_Ret` float DEFAULT NULL,
  `Total_Wt_Ret` float DEFAULT NULL,
  `Total_Ret` float DEFAULT NULL,
  `Total_Cum_Ret` float DEFAULT NULL,
  `Total_Pass` float DEFAULT NULL,
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
  `Date_No1` date NOT NULL,
  `Date_No2` date NOT NULL,
  `Date_No3` date NOT NULL,
  `Date_No4` date NOT NULL,
  `Date_No5` date NOT NULL,
  `Date_No6` date NOT NULL,
  `Date_No7` date NOT NULL,
  `Date_No8` date NOT NULL,
  `Date_No9` date NOT NULL,
  `Hour_No1` time NOT NULL,
  `Hour_No2` time NOT NULL,
  `Hour_No3` time NOT NULL,
  `Hour_No4` time NOT NULL,
  `Hour_No5` time NOT NULL,
  `Hour_No6` time NOT NULL,
  `Hour_No7` time NOT NULL,
  `Hour_No8` time NOT NULL,
  `Hour_No9` time NOT NULL,
  `Reading_Time_min_No1` float DEFAULT NULL,
  `Reading_Time_min_No2` float DEFAULT NULL,
  `Reading_Time_min_No3` float DEFAULT NULL,
  `Reading_Time_min_No4` float DEFAULT NULL,
  `Reading_Time_min_No5` float DEFAULT NULL,
  `Reading_Time_min_No6` float DEFAULT NULL,
  `Reading_Time_min_No7` float DEFAULT NULL,
  `Reading_Time_min_No8` float DEFAULT NULL,
  `Reading_Time_min_No9` float DEFAULT NULL,
  `Temp_No1` float DEFAULT NULL,
  `Temp_No2` float DEFAULT NULL,
  `Temp_No3` float DEFAULT NULL,
  `Temp_No4` float DEFAULT NULL,
  `Temp_No5` float DEFAULT NULL,
  `Temp_No6` float DEFAULT NULL,
  `Temp_No7` float DEFAULT NULL,
  `Temp_No8` float DEFAULT NULL,
  `Temp_No9` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No1` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No2` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No3` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No4` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No5` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No6` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No7` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No8` float DEFAULT NULL,
  `Hydrometer_Readings_Rm_No9` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No1` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No2` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No3` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No4` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No5` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No6` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No7` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No8` float DEFAULT NULL,
  `A_or_B_depending_of_the_Hy_type_No9` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No1` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No2` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No3` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No4` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No5` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No6` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No7` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No8` float DEFAULT NULL,
  `Offset_at_Reading_rdm_No9` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No1` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No2` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No3` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No4` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No5` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No6` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No7` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No8` float DEFAULT NULL,
  `Mass_Percent_Finer_Nm_Porce_No9` float DEFAULT NULL,
  `Effective_Length_Hm_No1` float DEFAULT NULL,
  `Effective_Length_Hm_No2` float DEFAULT NULL,
  `Effective_Length_Hm_No3` float DEFAULT NULL,
  `Effective_Length_Hm_No4` float DEFAULT NULL,
  `Effective_Length_Hm_No5` float DEFAULT NULL,
  `Effective_Length_Hm_No6` float DEFAULT NULL,
  `Effective_Length_Hm_No7` float DEFAULT NULL,
  `Effective_Length_Hm_No8` float DEFAULT NULL,
  `Effective_Length_Hm_No9` float DEFAULT NULL,
  `D_mm_No1` float DEFAULT NULL,
  `D_mm_No2` float DEFAULT NULL,
  `D_mm_No3` float DEFAULT NULL,
  `D_mm_No4` float DEFAULT NULL,
  `D_mm_No5` float DEFAULT NULL,
  `D_mm_No6` float DEFAULT NULL,
  `D_mm_No7` float DEFAULT NULL,
  `D_mm_No8` float DEFAULT NULL,
  `D_mm_No9` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No1` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No2` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No3` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No4` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No5` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No6` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No7` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No8` float DEFAULT NULL,
  `Passing_Percentage_Respect_to_the_Total_Sample_No9` float DEFAULT NULL,
  `Classification_of_Soils_as_per_USCS` varchar(50) NOT NULL,
  `ASTM_designation_D_2487_06` varchar(50) NOT NULL,
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
-- Volcado de datos para la tabla `hydrometer`
--

INSERT INTO `hydrometer` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Dispersion_Device`, `Hydrometer_Type`, `Temperature_Type`, `Specific_Gravity_Type`, `Dispersing_Agent`, `Amount_Used_g`, `Temperature_of_Test`, `Viscosity_of_Water_gs_cm2`, `Mass_Density_of_Water_Calibrated`, `Acceleration_cm_s2`, `Volume_of_Suspension_Vsp_cm3`, `Meniscus_Correction_Cm`, `Percent_Passing_No_200_sieve`, `Liquid_Limit_Porce`, `Plasticity_Index_Porce`, `Specific_Gravity`, `Tare_Name`, `Oven_Temperature`, `Tare_Plus_Wet_Soil_gr`, `Tare_Plus_Dry_Soil_gr`, `Water_Ww_gr`, `Gs_Tare_gr`, `Dry_Soil_Ws_gr`, `Moisture_Content_Porce`, `Hy_Calibration_Temperature_No1`, `Hy_Calibration_Temperature_No2`, `Hy_Calibration_Temperature_No3`, `Hy_Calibration_Temperature_No4`, `Hy_Calibration_Temperature_No5`, `Hy_Calibration_Temperature_No6`, `Hy_Calibration_Temperature_No7`, `Hy_Calibration_Temperature_No8`, `Hy_Calibration_Temperature_No9`, `Hy_Calibration_Actual_Reading_No1`, `Hy_Calibration_Actual_Reading_No2`, `Hy_Calibration_Actual_Reading_No3`, `Hy_Calibration_Actual_Reading_No4`, `Hy_Calibration_Actual_Reading_No5`, `Hy_Calibration_Actual_Reading_No6`, `Hy_Calibration_Actual_Reading_No7`, `Hy_Calibration_Actual_Reading_No8`, `Hy_Calibration_Actual_Reading_No9`, `Hy_Measure_Fluid_Temperature_No1`, `Hy_Measure_Fluid_Temperature_No2`, `Hy_Measure_Fluid_Temperature_No3`, `Hy_Measure_Fluid_Temperature_No4`, `Hy_Measure_Fluid_Temperature_No5`, `Hy_Measure_Fluid_Temperature_No6`, `Hy_Measure_Fluid_Temperature_No7`, `Hy_Measure_Fluid_Temperature_No8`, `Hy_Measure_Fluid_Temperature_No9`, `Hy_Measure_Fluid_Actual_Reading_No1`, `Hy_Measure_Fluid_Actual_Reading_No2`, `Hy_Measure_Fluid_Actual_Reading_No3`, `Hy_Measure_Fluid_Actual_Reading_No4`, `Hy_Measure_Fluid_Actual_Reading_No5`, `Hy_Measure_Fluid_Actual_Reading_No6`, `Hy_Measure_Fluid_Actual_Reading_No7`, `Hy_Measure_Fluid_Actual_Reading_No8`, `Hy_Measure_Fluid_Actual_Reading_No9`, `Container`, `Wt_Wet_Soil_Tare_gr`, `Wt_Dry_Soil_Tare_gr`, `Tare_gr`, `Wt_Dry_Soil_gr`, `Wt_Washed_gr`, `Wt_Wash_Pan_gr`, `Wt_Ret_40`, `Ret_40`, `Cum_Ret_40`, `Pass_40`, `Wt_Ret_12`, `Ret_12`, `Cum_Ret_12`, `Pass_12`, `Wt_Ret_10`, `Ret_10`, `Cum_Ret_10`, `Pass_10`, `Wt_Ret_8`, `Ret_8`, `Cum_Ret_8`, `Pass_8`, `Wt_Ret_6`, `Ret_6`, `Cum_Ret_6`, `Pass_6`, `Wt_Ret_5`, `Ret_5`, `Cum_Ret_5`, `Pass_5`, `Wt_Ret_4`, `Ret_4`, `Cum_Ret_4`, `Pass_4`, `Wt_Ret_3`, `Ret_3`, `Cum_Ret_3`, `Pass_3`, `Wt_Ret_2p5`, `Ret_2p5`, `Cum_Ret_2p5`, `Pass_2p5`, `Wt_Ret_2`, `Ret_2`, `Cum_Ret_2`, `Pass_2`, `Wt_Ret_1p5`, `Ret_1p5`, `Cum_Ret_1p5`, `Pass_1p5`, `Wt_Ret_1`, `Ret_1`, `Cum_Ret_1`, `Pass_1`, `Wt_Ret_3p4`, `Ret_3p4`, `Cum_Ret_3p4`, `Pass_3p4`, `Wt_Ret_1p2`, `Ret_1p2`, `Cum_Ret_1p2`, `Pass_1p2`, `Wt_Ret_3p8`, `Ret_3p8`, `Cum_Ret_3p8`, `Pass_3p8`, `Wt_Ret_No4`, `Ret_No4`, `Cum_Ret_No4`, `Pass_No4`, `Wt_Ret_No10`, `Ret_No10`, `Cum_Ret_No10`, `Pass_No10`, `Wt_Ret_No16`, `Ret_No16`, `Cum_Ret_No16`, `Pass_No16`, `Wt_Ret_No20`, `Ret_No20`, `Cum_Ret_No20`, `Pass_No20`, `Wt_Ret_No50`, `Ret_No50`, `Cum_Ret_No50`, `Pass_No50`, `Wt_Ret_No60`, `Ret_No60`, `Cum_Ret_No60`, `Pass_No60`, `Wt_Ret_No100`, `Ret_No100`, `Cum_Ret_No100`, `Pass_No100`, `Wt_Ret_No140`, `Ret_No140`, `Cum_Ret_No140`, `Pass_No140`, `Wt_Ret_No200`, `Ret_No200`, `Cum_Ret_No200`, `Pass_No200`, `Pan_Wt_Ret`, `Pan_Ret`, `Total_Wt_Ret`, `Total_Ret`, `Total_Cum_Ret`, `Total_Pass`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Date_No1`, `Date_No2`, `Date_No3`, `Date_No4`, `Date_No5`, `Date_No6`, `Date_No7`, `Date_No8`, `Date_No9`, `Hour_No1`, `Hour_No2`, `Hour_No3`, `Hour_No4`, `Hour_No5`, `Hour_No6`, `Hour_No7`, `Hour_No8`, `Hour_No9`, `Reading_Time_min_No1`, `Reading_Time_min_No2`, `Reading_Time_min_No3`, `Reading_Time_min_No4`, `Reading_Time_min_No5`, `Reading_Time_min_No6`, `Reading_Time_min_No7`, `Reading_Time_min_No8`, `Reading_Time_min_No9`, `Temp_No1`, `Temp_No2`, `Temp_No3`, `Temp_No4`, `Temp_No5`, `Temp_No6`, `Temp_No7`, `Temp_No8`, `Temp_No9`, `Hydrometer_Readings_Rm_No1`, `Hydrometer_Readings_Rm_No2`, `Hydrometer_Readings_Rm_No3`, `Hydrometer_Readings_Rm_No4`, `Hydrometer_Readings_Rm_No5`, `Hydrometer_Readings_Rm_No6`, `Hydrometer_Readings_Rm_No7`, `Hydrometer_Readings_Rm_No8`, `Hydrometer_Readings_Rm_No9`, `A_or_B_depending_of_the_Hy_type_No1`, `A_or_B_depending_of_the_Hy_type_No2`, `A_or_B_depending_of_the_Hy_type_No3`, `A_or_B_depending_of_the_Hy_type_No4`, `A_or_B_depending_of_the_Hy_type_No5`, `A_or_B_depending_of_the_Hy_type_No6`, `A_or_B_depending_of_the_Hy_type_No7`, `A_or_B_depending_of_the_Hy_type_No8`, `A_or_B_depending_of_the_Hy_type_No9`, `Offset_at_Reading_rdm_No1`, `Offset_at_Reading_rdm_No2`, `Offset_at_Reading_rdm_No3`, `Offset_at_Reading_rdm_No4`, `Offset_at_Reading_rdm_No5`, `Offset_at_Reading_rdm_No6`, `Offset_at_Reading_rdm_No7`, `Offset_at_Reading_rdm_No8`, `Offset_at_Reading_rdm_No9`, `Mass_Percent_Finer_Nm_Porce_No1`, `Mass_Percent_Finer_Nm_Porce_No2`, `Mass_Percent_Finer_Nm_Porce_No3`, `Mass_Percent_Finer_Nm_Porce_No4`, `Mass_Percent_Finer_Nm_Porce_No5`, `Mass_Percent_Finer_Nm_Porce_No6`, `Mass_Percent_Finer_Nm_Porce_No7`, `Mass_Percent_Finer_Nm_Porce_No8`, `Mass_Percent_Finer_Nm_Porce_No9`, `Effective_Length_Hm_No1`, `Effective_Length_Hm_No2`, `Effective_Length_Hm_No3`, `Effective_Length_Hm_No4`, `Effective_Length_Hm_No5`, `Effective_Length_Hm_No6`, `Effective_Length_Hm_No7`, `Effective_Length_Hm_No8`, `Effective_Length_Hm_No9`, `D_mm_No1`, `D_mm_No2`, `D_mm_No3`, `D_mm_No4`, `D_mm_No5`, `D_mm_No6`, `D_mm_No7`, `D_mm_No8`, `D_mm_No9`, `Passing_Percentage_Respect_to_the_Total_Sample_No1`, `Passing_Percentage_Respect_to_the_Total_Sample_No2`, `Passing_Percentage_Respect_to_the_Total_Sample_No3`, `Passing_Percentage_Respect_to_the_Total_Sample_No4`, `Passing_Percentage_Respect_to_the_Total_Sample_No5`, `Passing_Percentage_Respect_to_the_Total_Sample_No6`, `Passing_Percentage_Respect_to_the_Total_Sample_No7`, `Passing_Percentage_Respect_to_the_Total_Sample_No8`, `Passing_Percentage_Respect_to_the_Total_Sample_No9`, `Classification_of_Soils_as_per_USCS`, `ASTM_designation_D_2487_06`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D7928', 'Air-Dried', 'Air-Jet', '152H', 'Temp-Density-Correction', 'Measured', '(NaPO3)6', 5, ' 25', 0.01, 0.99705, 980.7, 1000, -0.5, 70.03, 54, 30, 2.65, 'J-S', '110 ºC', 1625.4, 604.12, 1021.28, 538.8, 58.81, 1736.58, 19, 19, 19, 19, 19, 19, 19, 19, 19, 5, 5, 5, 5, 5, 5, 5, 5, 5, 19.1, 19.1, 19.1, 19.1, 19, 19.1, 19.2, 19.2, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'K-2', 2008.66, 1715.48, 545.31, 1176.68, 353.4, 317.28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2.84, 27.13, 70.03, 0, 0, 0.003, 0.024, 0.436, 0, 8.89, '2023-10-17', '2023-10-17', '2023-10-17', '2023-10-17', '2023-10-17', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1, 2, 4, 15, 30, 60, 240, 340, 1440, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 8.107, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-17', '2023-10-17', 'N/A', 'HY', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inalteraded_samples`
--

CREATE TABLE `inalteraded_samples` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(255) NOT NULL,
  `Sample_Number` varchar(255) NOT NULL,
  `Sample_Type` varchar(255) DEFAULT NULL,
  `Depth_From` decimal(10,2) DEFAULT NULL,
  `Depth_To` decimal(10,2) DEFAULT NULL,
  `Sample_Length` decimal(10,2) DEFAULT NULL,
  `Sample_Weight` decimal(10,2) DEFAULT NULL,
  `Sample_Date` date DEFAULT NULL,
  `Store_In` varchar(255) DEFAULT NULL,
  `Comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab_test_requisition_form`
--

CREATE TABLE `lab_test_requisition_form` (
  `id` int(255) NOT NULL,
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
  `Test_Type1` varchar(15) NOT NULL,
  `Test_Type2` varchar(15) NOT NULL,
  `Test_Type3` varchar(15) NOT NULL,
  `Test_Type4` varchar(15) NOT NULL,
  `Test_Type5` varchar(15) NOT NULL,
  `Test_Type6` varchar(15) NOT NULL,
  `Test_Type7` varchar(15) NOT NULL,
  `Test_Type8` varchar(15) NOT NULL,
  `Test_Type9` varchar(15) NOT NULL,
  `Test_Type10` varchar(15) NOT NULL,
  `Test_Type11` varchar(15) NOT NULL,
  `Test_Type12` varchar(15) NOT NULL,
  `Test_Type13` varchar(15) NOT NULL,
  `Test_Type14` varchar(15) NOT NULL,
  `Test_Type15` varchar(15) NOT NULL,
  `Test_Type16` varchar(15) NOT NULL,
  `Test_Type17` varchar(15) NOT NULL,
  `Test_Type18` varchar(15) NOT NULL,
  `Test_Type19` varchar(15) NOT NULL,
  `Comment` text NOT NULL,
  `Statuss` varchar(50) NOT NULL,
  `Sample_Date` date NOT NULL,
  `Sample_By` varchar(5) NOT NULL,
  `Registed_Date` date NOT NULL,
  `test_inicio` datetime(6) NOT NULL,
  `Sample_Number` varchar(10) DEFAULT NULL,
  `Register_By` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `lab_test_requisition_form`
--

INSERT INTO `lab_test_requisition_form` (`id`, `Sample_ID`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Test_Type1`, `Test_Type2`, `Test_Type3`, `Test_Type4`, `Test_Type5`, `Test_Type6`, `Test_Type7`, `Test_Type8`, `Test_Type9`, `Test_Type10`, `Test_Type11`, `Test_Type12`, `Test_Type13`, `Test_Type14`, `Test_Type15`, `Test_Type16`, `Test_Type17`, `Test_Type18`, `Test_Type19`, `Comment`, `Statuss`, `Sample_Date`, `Sample_By`, `Registed_Date`, `test_inicio`, `Sample_Number`, `Register_By`) VALUES
(1, 'DH-BGC23-NTSF-010', 'Site Investigation', 'TSF Naranjo', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '', '', '', 'AL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-11', 'Levin', '2023-10-11', '0000-00-00 00:00:00.000000', 'G1', 'Maicol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leeb_hardness`
--

CREATE TABLE `leeb_hardness` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Sample` varchar(30) NOT NULL,
  `Depth_m` varchar(10) NOT NULL,
  `Leeb_Hardness_Number1` float DEFAULT NULL,
  `Leeb_Hardness_Number2` float DEFAULT NULL,
  `Leeb_Hardness_Number3` float DEFAULT NULL,
  `Leeb_Hardness_Number4` float DEFAULT NULL,
  `Leeb_Hardness_Number5` float DEFAULT NULL,
  `Leeb_Hardness_Number6` float DEFAULT NULL,
  `Leeb_Hardness_Number7` float DEFAULT NULL,
  `Leeb_Hardness_Number8` float DEFAULT NULL,
  `Leeb_Hardness_Number9` float DEFAULT NULL,
  `Leeb_Hardness_Number10` float DEFAULT NULL,
  `Average` float DEFAULT NULL,
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
-- Volcado de datos para la tabla `leeb_hardness`
--

INSERT INTO `leeb_hardness` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Sample`, `Depth_m`, `Leeb_Hardness_Number1`, `Leeb_Hardness_Number2`, `Leeb_Hardness_Number3`, `Leeb_Hardness_Number4`, `Leeb_Hardness_Number5`, `Leeb_Hardness_Number6`, `Leeb_Hardness_Number7`, `Leeb_Hardness_Number8`, `Leeb_Hardness_Number9`, `Leeb_Hardness_Number10`, `Average`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-A956', 'B', 'LAB-157-5', '1.25-2.30', 30, 50, 10, 5, 15, 20, 10, 15, 20, 30, 20.5, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-16', '2023-10-16', 'N/A', 'Leeb', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_de_pendiente`
--

CREATE TABLE `lista_de_pendiente` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(15) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Test_Type` varchar(15) NOT NULL,
  `Sample_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lista_de_pendiente`
--

INSERT INTO `lista_de_pendiente` (`id`, `Sample_ID`, `Sample_Number`, `Test_Type`, `Sample_Date`) VALUES
(1, 'DH-BGC23-NTSF-1', 'G1', 'AL', '2023-10-11'),
(2, 'DH-BGC23-NTSF-1', 'G1', 'UCS', '2023-10-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `los_angeles_abrasion_large`
--

CREATE TABLE `los_angeles_abrasion_large` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Selected_Grading` varchar(5) NOT NULL,
  `Weight_of_The_Spheres` float DEFAULT NULL,
  `Revolutions` float DEFAULT NULL,
  `Initial_Weight` float DEFAULT NULL,
  `Final_Weight` float DEFAULT NULL,
  `Weight_Loss` float DEFAULT NULL,
  `Weight_Loss_Porce` float DEFAULT NULL,
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
-- Volcado de datos para la tabla `los_angeles_abrasion_large`
--

INSERT INTO `los_angeles_abrasion_large` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Selected_Grading`, `Weight_of_The_Spheres`, `Revolutions`, `Initial_Weight`, `Final_Weight`, `Weight_Loss`, `Weight_Loss_Porce`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-100', 'G1', 'ASTM-D854', 'Air_Dried', 'Man_Split', '2', 832.25, 100, 352.65, 125.23, 227.4, 64.49, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-11', 'N/A', 'LLA-Large', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `los_angeles_abrasion_small`
--

CREATE TABLE `los_angeles_abrasion_small` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Selected_Grading` varchar(5) NOT NULL,
  `Weight_of_The_Spheres` float DEFAULT NULL,
  `Revolutions` float DEFAULT NULL,
  `Initial_Weight` float DEFAULT NULL,
  `Final_Weight` float DEFAULT NULL,
  `Weight_Loss` float DEFAULT NULL,
  `Weight_Loss_Porce` float DEFAULT NULL,
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
-- Volcado de datos para la tabla `los_angeles_abrasion_small`
--

INSERT INTO `los_angeles_abrasion_small` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Selected_Grading`, `Weight_of_The_Spheres`, `Revolutions`, `Initial_Weight`, `Final_Weight`, `Weight_Loss`, `Weight_Loss_Porce`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-100', 'G1', 'ASTM-D854', 'Air_Dried', 'Mech_Split', 'C', 350.25, 100, 458.224, 125.23, 333, 72.67, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-11', 'Pass', 'LAA-Small', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(1, 'DH-BGC23-NTSF-100', 'G1', 'Site Investigation', 'TSF Naranjo', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', 'LAB-096-B33', '110 ºC', 519.01, 410.93, 108.08, 86.64, 324.29, 33.33, 'ASTM D2216', '', '', 'AS', '2023-10-11', '2023-10-11', 'MC-Oven');

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
  `Sample_Date` date NOT NULL,
  `Standard` varchar(25) NOT NULL,
  `Preparation` varchar(25) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Test_Start_Date` date NOT NULL,
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
  `Report_Date` date NOT NULL,
  `test_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moisture_content_constant_mass`
--

INSERT INTO `moisture_content_constant_mass` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Standard`, `Preparation`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `Temperature`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil1`, `Tare_Plus_Dry_Soil2`, `Tare_Plus_Dry_Soil3`, `Tare_Plus_Dry_Soil4`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Report_Date`, `test_type`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'Site Investigation', 'TSF Naranjo', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', 'ASTM D2216', 'Man_Split', 'N/A', 'AS', '2023-10-10', '1', 'LAB-N12-1', '60 ºC', 200, 175, 125, 100, 75, 125, 25, 50, 250, '2023-10-16', 'MC-Constant Mas');

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
  `Sample_Date` date NOT NULL,
  `Standard` varchar(25) NOT NULL,
  `Preparation` varchar(25) NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Test_Start_Date` date NOT NULL,
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
  `Report_Date` date NOT NULL,
  `test_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moisture_content_microwave`
--

INSERT INTO `moisture_content_microwave` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Standard`, `Preparation`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `Microwave_Model`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil1`, `Tare_Plus_Dry_Soil2`, `Tare_Plus_Dry_Soil3`, `Tare_Plus_Dry_Soil4`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Report_Date`, `test_type`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'Site Investigation', 'TSF Naranjo', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', 'ASTM D2216', 'Mech_Split', 'N/A', 'AS', '2023-10-10', '1', 'LAB-N12-1', 'SAMSUNG', 200, 175, 125, 100, 50, 150, 25, 25, 600, '2023-10-16', 'MC-Microwave');

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
  `Sample_Date` date NOT NULL,
  `Comment` varchar(250) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Trial` varchar(10) NOT NULL,
  `Tare_Name` varchar(25) NOT NULL,
  `Scale_Model` varchar(75) NOT NULL,
  `Mc` float NOT NULL,
  `Report_Date` date NOT NULL,
  `test_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moisture_scale`
--

INSERT INTO `moisture_scale` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `Scale_Model`, `Mc`, `Report_Date`, `test_type`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'Site Investigation', 'TSF Naranjo', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', 'N/A', 'AS', '2023-10-16', '1', 'LAB-096-B33', 'N125', 30.25, '2023-10-16', 'MC-Scale');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra_en_preparacion`
--

CREATE TABLE `muestra_en_preparacion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(50) NOT NULL,
  `Sample_Number` varchar(25) NOT NULL,
  `Test_Type` varchar(15) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio_Preparacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra_en_realizacion`
--

CREATE TABLE `muestra_en_realizacion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(50) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Test_Type` varchar(25) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio_Realizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permeability_of_granular_soils`
--

CREATE TABLE `permeability_of_granular_soils` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Description_of_material_use_for_test` varchar(50) NOT NULL,
  `Diameter_D_cm` float DEFAULT NULL,
  `Area_cm2` float DEFAULT NULL,
  `Lenght_L_cm` float DEFAULT NULL,
  `W_Max_Kgm2` float DEFAULT NULL,
  `W_Max_Kgm3` float DEFAULT NULL,
  `Height_Before_H1` float DEFAULT NULL,
  `Height_After_H2` float DEFAULT NULL,
  `Height_Net_cm` float DEFAULT NULL,
  `Void_Ratio_e` float DEFAULT NULL,
  `Relative_Density_RD_Porce` float DEFAULT NULL,
  `H1_1` float DEFAULT NULL,
  `H1_2` float DEFAULT NULL,
  `H1_3` float DEFAULT NULL,
  `H1_4` float DEFAULT NULL,
  `H1_5` float DEFAULT NULL,
  `H1_6` float DEFAULT NULL,
  `H1_7` float DEFAULT NULL,
  `H1_8` float DEFAULT NULL,
  `H2_1` float DEFAULT NULL,
  `H2_2` float DEFAULT NULL,
  `H2_3` float DEFAULT NULL,
  `H2_4` float DEFAULT NULL,
  `H2_5` float DEFAULT NULL,
  `H2_6` float DEFAULT NULL,
  `H2_7` float DEFAULT NULL,
  `H2_8` float DEFAULT NULL,
  `Head_h_cm_N1` float DEFAULT NULL,
  `Head_h_cm_N2` float DEFAULT NULL,
  `Head_h_cm_N3` float DEFAULT NULL,
  `Head_h_cm_N4` float DEFAULT NULL,
  `Head_h_cm_N5` float DEFAULT NULL,
  `Head_h_cm_N6` float DEFAULT NULL,
  `Head_h_cm_N7` float DEFAULT NULL,
  `Head_h_cm_N8` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N1` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N2` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N3` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N4` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N5` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N6` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N7` float DEFAULT NULL,
  `Quantity_of_water_discharged_cm3_N8` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N1` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N2` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N3` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N4` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N5` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N6` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N7` float DEFAULT NULL,
  `Total_time_of_discharge_sec_N8` float DEFAULT NULL,
  `Q_At_N1` float DEFAULT NULL,
  `Q_At_N2` float DEFAULT NULL,
  `Q_At_N3` float DEFAULT NULL,
  `Q_At_N4` float DEFAULT NULL,
  `Q_At_N5` float DEFAULT NULL,
  `Q_At_N6` float DEFAULT NULL,
  `Q_At_N7` float DEFAULT NULL,
  `Q_At_N8` float DEFAULT NULL,
  `h_L_N1` float DEFAULT NULL,
  `h_L_N2` float DEFAULT NULL,
  `h_L_N3` float DEFAULT NULL,
  `h_L_N4` float DEFAULT NULL,
  `h_L_N5` float DEFAULT NULL,
  `h_L_N6` float DEFAULT NULL,
  `h_L_N7` float DEFAULT NULL,
  `h_L_N8` float DEFAULT NULL,
  `Temperature_C_N1` float DEFAULT NULL,
  `Temperature_C_N2` float DEFAULT NULL,
  `Temperature_C_N3` float DEFAULT NULL,
  `Temperature_C_N4` float DEFAULT NULL,
  `Temperature_C_N5` float DEFAULT NULL,
  `Temperature_C_N6` float DEFAULT NULL,
  `Temperature_C_N7` float DEFAULT NULL,
  `Temperature_C_N8` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N1` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N2` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N3` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N4` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N5` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N6` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N7` float DEFAULT NULL,
  `Coefficient_of_permeability_cm_seg_N8` float NOT NULL,
  `Permeability_Graphic` blob DEFAULT NULL,
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
-- Volcado de datos para la tabla `permeability_of_granular_soils`
--

INSERT INTO `permeability_of_granular_soils` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Description_of_material_use_for_test`, `Diameter_D_cm`, `Area_cm2`, `Lenght_L_cm`, `W_Max_Kgm2`, `W_Max_Kgm3`, `Height_Before_H1`, `Height_After_H2`, `Height_Net_cm`, `Void_Ratio_e`, `Relative_Density_RD_Porce`, `H1_1`, `H1_2`, `H1_3`, `H1_4`, `H1_5`, `H1_6`, `H1_7`, `H1_8`, `H2_1`, `H2_2`, `H2_3`, `H2_4`, `H2_5`, `H2_6`, `H2_7`, `H2_8`, `Head_h_cm_N1`, `Head_h_cm_N2`, `Head_h_cm_N3`, `Head_h_cm_N4`, `Head_h_cm_N5`, `Head_h_cm_N6`, `Head_h_cm_N7`, `Head_h_cm_N8`, `Quantity_of_water_discharged_cm3_N1`, `Quantity_of_water_discharged_cm3_N2`, `Quantity_of_water_discharged_cm3_N3`, `Quantity_of_water_discharged_cm3_N4`, `Quantity_of_water_discharged_cm3_N5`, `Quantity_of_water_discharged_cm3_N6`, `Quantity_of_water_discharged_cm3_N7`, `Quantity_of_water_discharged_cm3_N8`, `Total_time_of_discharge_sec_N1`, `Total_time_of_discharge_sec_N2`, `Total_time_of_discharge_sec_N3`, `Total_time_of_discharge_sec_N4`, `Total_time_of_discharge_sec_N5`, `Total_time_of_discharge_sec_N6`, `Total_time_of_discharge_sec_N7`, `Total_time_of_discharge_sec_N8`, `Q_At_N1`, `Q_At_N2`, `Q_At_N3`, `Q_At_N4`, `Q_At_N5`, `Q_At_N6`, `Q_At_N7`, `Q_At_N8`, `h_L_N1`, `h_L_N2`, `h_L_N3`, `h_L_N4`, `h_L_N5`, `h_L_N6`, `h_L_N7`, `h_L_N8`, `Temperature_C_N1`, `Temperature_C_N2`, `Temperature_C_N3`, `Temperature_C_N4`, `Temperature_C_N5`, `Temperature_C_N6`, `Temperature_C_N7`, `Temperature_C_N8`, `Coefficient_of_permeability_cm_seg_N1`, `Coefficient_of_permeability_cm_seg_N2`, `Coefficient_of_permeability_cm_seg_N3`, `Coefficient_of_permeability_cm_seg_N4`, `Coefficient_of_permeability_cm_seg_N5`, `Coefficient_of_permeability_cm_seg_N6`, `Coefficient_of_permeability_cm_seg_N7`, `Coefficient_of_permeability_cm_seg_N8`, `Permeability_Graphic`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D46', 'B', 'Other', 15.2, 181.5, 7.2, 1794, 1694.7, 2, 15.9, -13.9, 0.3, 91.4, 7.9, 4.1, 6.7, 10.4, 13.4, 20.8, 23.4, 23.4, 8, 4.2, 6.8, 10.5, 13.5, 20.9, 23.5, 23.5, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 630, 630, 630, 630, 630, 630, 630, 630, 30.22, 30.16, 30.38, 30.57, 30.58, 30.3, 30.49, 30.16, 0.1149, 0.1151, 0.1143, 0.1136, 0.1135, 0.1146, 0.1139, 0.1151, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 22.6, 22.6, 22.5, 22.5, 22.4, 22.4, 22.6, 22.6, 8.3, 8.3, 8.2, 8.2, 8.2, 8.2, 8.2, 8.3, NULL, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-16', 'N/A', 'Perma-Gran', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pinhole`
--

CREATE TABLE `pinhole` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Moisture_Content_Before_Test_MC_Porce` float DEFAULT NULL,
  `Specific_Gravity_Estimated_or_Measured` float DEFAULT NULL,
  `Max_Dry_Density_g_cm3` float DEFAULT NULL,
  `Optimum_Moisture_Content_Porce` float DEFAULT NULL,
  `Wt_Wet_Soil_Mold_gr` float DEFAULT NULL,
  `Wt_Mold_gr` float DEFAULT NULL,
  `Wt_Wet_Soil_gr` float DEFAULT NULL,
  `Logintud_Del_Specimen_cm` float DEFAULT NULL,
  `Vol_Specimen_cm3` float DEFAULT NULL,
  `Wet_Density_gcm3` float DEFAULT NULL,
  `Dry_Density_gcm3` float DEFAULT NULL,
  `Porce_Compaction` float DEFAULT NULL,
  `Moisture_Content_After_Test_Porce` float DEFAULT NULL,
  `Wire_Punch_Diameter_mm` float DEFAULT NULL,
  `Tare_Name_Mc_Before` varchar(10) NOT NULL,
  `Oven_Temperature_Mc_Before` varchar(10) NOT NULL,
  `Tare_Plus_Wet_Soil_g_Mc_Before` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_g_Mc_Before` float DEFAULT NULL,
  `Water_Ww_g_Mc_Before` float DEFAULT NULL,
  `Tare_g_Mc_Before` float DEFAULT NULL,
  `Dry_Soil_Ws_g_Mc_Before` float DEFAULT NULL,
  `Moisture_Content_Porce_Mc_Before` float DEFAULT NULL,
  `Tare_Name_Mc_After` varchar(10) NOT NULL,
  `Oven_Temperature_Mc_After` varchar(10) NOT NULL,
  `Tare_Plus_Wet_Soil_g_Mc_After` float DEFAULT NULL,
  `Tare_Plus_Dry_Soil_g_Mc_After` float DEFAULT NULL,
  `Water_Ww_g_Mc_After` float DEFAULT NULL,
  `Tare_g_Mc_After` float DEFAULT NULL,
  `Dry_Soil_Ws_g_Mc_After` float DEFAULT NULL,
  `Moisture_Content_Porce_Mc_After` float DEFAULT NULL,
  `mL_No1` float DEFAULT NULL,
  `mL_No2` float DEFAULT NULL,
  `mL_No3` float DEFAULT NULL,
  `mL_No4` float DEFAULT NULL,
  `mL_No5` float DEFAULT NULL,
  `mL_No6` float DEFAULT NULL,
  `mL_No7` float DEFAULT NULL,
  `mL_No8` float DEFAULT NULL,
  `mL_No9` float DEFAULT NULL,
  `mL_No10` float DEFAULT NULL,
  `mL_No11` float DEFAULT NULL,
  `mL_No12` float DEFAULT NULL,
  `mL_No13` float DEFAULT NULL,
  `mL_No14` float DEFAULT NULL,
  `mL_No15` float DEFAULT NULL,
  `mL_No16` float DEFAULT NULL,
  `mL_No17` float DEFAULT NULL,
  `mL_No18` float DEFAULT NULL,
  `mL_No19` float DEFAULT NULL,
  `mL_No20` float DEFAULT NULL,
  `mL_No21` float DEFAULT NULL,
  `mL_No22` float DEFAULT NULL,
  `Seg_No1` float DEFAULT NULL,
  `Seg_No2` float DEFAULT NULL,
  `Seg_No3` float DEFAULT NULL,
  `Seg_No4` float DEFAULT NULL,
  `Seg_No5` float DEFAULT NULL,
  `Seg_No6` float DEFAULT NULL,
  `Seg_No7` float DEFAULT NULL,
  `Seg_No8` float DEFAULT NULL,
  `Seg_No9` float DEFAULT NULL,
  `Seg_No10` float DEFAULT NULL,
  `Seg_No11` float DEFAULT NULL,
  `Seg_No12` float DEFAULT NULL,
  `Seg_No13` float DEFAULT NULL,
  `Seg_No14` float DEFAULT NULL,
  `Seg_No15` float DEFAULT NULL,
  `Seg_No16` float DEFAULT NULL,
  `Seg_No17` float DEFAULT NULL,
  `Seg_No18` float DEFAULT NULL,
  `Seg_No19` float DEFAULT NULL,
  `Seg_No20` float DEFAULT NULL,
  `Seg_No21` float DEFAULT NULL,
  `Seg_No22` float DEFAULT NULL,
  `Flow_Rate_No1` varchar(20) NOT NULL,
  `Flow_Rate_No2` varchar(20) NOT NULL,
  `Flow_Rate_No3` varchar(20) NOT NULL,
  `Flow_Rate_No4` varchar(20) NOT NULL,
  `Flow_Rate_No5` varchar(20) NOT NULL,
  `Flow_Rate_No6` varchar(20) NOT NULL,
  `Flow_Rate_No7` varchar(20) NOT NULL,
  `Flow_Rate_No8` varchar(20) NOT NULL,
  `Flow_Rate_No9` varchar(20) NOT NULL,
  `Flow_Rate_No10` varchar(20) NOT NULL,
  `Flow_Rate_No11` varchar(20) NOT NULL,
  `Flow_Rate_No12` varchar(20) NOT NULL,
  `Flow_Rate_No13` varchar(20) NOT NULL,
  `Flow_Rate_No14` varchar(20) NOT NULL,
  `Flow_Rate_No15` varchar(20) NOT NULL,
  `Flow_Rate_No16` varchar(20) NOT NULL,
  `Flow_Rate_No17` varchar(20) NOT NULL,
  `Flow_Rate_No18` varchar(20) NOT NULL,
  `Flow_Rate_No19` varchar(20) NOT NULL,
  `Flow_Rate_No20` varchar(20) NOT NULL,
  `Flow_Rate_No21` varchar(20) NOT NULL,
  `Flow_Rate_No22` varchar(20) NOT NULL,
  `From_Side_No1` varchar(20) NOT NULL,
  `From_Side_No2` varchar(20) NOT NULL,
  `From_Side_No3` varchar(20) NOT NULL,
  `From_Side_No4` varchar(20) NOT NULL,
  `From_Side_No5` varchar(20) NOT NULL,
  `From_Side_No6` varchar(20) NOT NULL,
  `From_Side_No7` varchar(20) NOT NULL,
  `From_Side_No8` varchar(20) NOT NULL,
  `From_Side_No9` varchar(20) NOT NULL,
  `From_Side_No10` varchar(20) NOT NULL,
  `From_Side_No11` varchar(20) NOT NULL,
  `From_Side_No12` varchar(20) NOT NULL,
  `From_Side_No13` varchar(20) NOT NULL,
  `From_Side_No14` varchar(20) NOT NULL,
  `From_Side_No15` varchar(20) NOT NULL,
  `From_Side_No16` varchar(20) NOT NULL,
  `From_Side_No17` varchar(20) NOT NULL,
  `From_Side_No18` varchar(20) NOT NULL,
  `From_Side_No19` varchar(20) NOT NULL,
  `From_Side_No20` varchar(20) NOT NULL,
  `From_Side_No21` varchar(20) NOT NULL,
  `From_Side_No22` varchar(20) NOT NULL,
  `From_Top_No1` varchar(20) NOT NULL,
  `From_Top_No2` varchar(20) NOT NULL,
  `From_Top_No3` varchar(20) NOT NULL,
  `From_Top_No4` varchar(20) NOT NULL,
  `From_Top_No5` varchar(20) NOT NULL,
  `From_Top_No6` varchar(20) NOT NULL,
  `From_Top_No7` varchar(20) NOT NULL,
  `From_Top_No8` varchar(20) NOT NULL,
  `From_Top_No9` varchar(20) NOT NULL,
  `From_Top_No10` varchar(20) NOT NULL,
  `From_Top_No11` varchar(20) NOT NULL,
  `From_Top_No12` varchar(20) NOT NULL,
  `From_Top_No13` varchar(20) NOT NULL,
  `From_Top_No14` varchar(20) NOT NULL,
  `From_Top_No15` varchar(20) NOT NULL,
  `From_Top_No16` varchar(20) NOT NULL,
  `From_Top_No17` varchar(20) NOT NULL,
  `From_Top_No18` varchar(20) NOT NULL,
  `From_Top_No19` varchar(20) NOT NULL,
  `From_Top_No20` varchar(20) NOT NULL,
  `From_Top_No21` varchar(20) NOT NULL,
  `From_Top_No22` varchar(20) NOT NULL,
  `Observation_No1` varchar(20) NOT NULL,
  `Observation_No2` varchar(20) NOT NULL,
  `Observation_No3` varchar(20) NOT NULL,
  `Observation_No4` varchar(20) NOT NULL,
  `Observation_No5` varchar(20) NOT NULL,
  `Observation_No6` varchar(20) NOT NULL,
  `Observation_No7` varchar(20) NOT NULL,
  `Observation_No8` varchar(20) NOT NULL,
  `Observation_No9` varchar(20) NOT NULL,
  `Observation_No10` varchar(20) NOT NULL,
  `Observation_No11` varchar(20) NOT NULL,
  `Observation_No12` varchar(20) NOT NULL,
  `Observation_No13` varchar(20) NOT NULL,
  `Observation_No14` varchar(20) NOT NULL,
  `Observation_No15` varchar(20) NOT NULL,
  `Observation_No16` varchar(20) NOT NULL,
  `Observation_No17` varchar(20) NOT NULL,
  `Observation_No18` varchar(20) NOT NULL,
  `Observation_No19` varchar(20) NOT NULL,
  `Observation_No20` varchar(20) NOT NULL,
  `Observation_No21` varchar(20) NOT NULL,
  `Observation_No22` varchar(20) NOT NULL,
  `Hole_Size_After_Test_mm` varchar(10) NOT NULL,
  `Dispersive_Classification` varchar(10) NOT NULL,
  `Pinhole_Graphic` mediumblob DEFAULT NULL,
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
-- Volcado de datos para la tabla `pinhole`
--

INSERT INTO `pinhole` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Moisture_Content_Before_Test_MC_Porce`, `Specific_Gravity_Estimated_or_Measured`, `Max_Dry_Density_g_cm3`, `Optimum_Moisture_Content_Porce`, `Wt_Wet_Soil_Mold_gr`, `Wt_Mold_gr`, `Wt_Wet_Soil_gr`, `Logintud_Del_Specimen_cm`, `Vol_Specimen_cm3`, `Wet_Density_gcm3`, `Dry_Density_gcm3`, `Porce_Compaction`, `Moisture_Content_After_Test_Porce`, `Wire_Punch_Diameter_mm`, `Tare_Name_Mc_Before`, `Oven_Temperature_Mc_Before`, `Tare_Plus_Wet_Soil_g_Mc_Before`, `Tare_Plus_Dry_Soil_g_Mc_Before`, `Water_Ww_g_Mc_Before`, `Tare_g_Mc_Before`, `Dry_Soil_Ws_g_Mc_Before`, `Moisture_Content_Porce_Mc_Before`, `Tare_Name_Mc_After`, `Oven_Temperature_Mc_After`, `Tare_Plus_Wet_Soil_g_Mc_After`, `Tare_Plus_Dry_Soil_g_Mc_After`, `Water_Ww_g_Mc_After`, `Tare_g_Mc_After`, `Dry_Soil_Ws_g_Mc_After`, `Moisture_Content_Porce_Mc_After`, `mL_No1`, `mL_No2`, `mL_No3`, `mL_No4`, `mL_No5`, `mL_No6`, `mL_No7`, `mL_No8`, `mL_No9`, `mL_No10`, `mL_No11`, `mL_No12`, `mL_No13`, `mL_No14`, `mL_No15`, `mL_No16`, `mL_No17`, `mL_No18`, `mL_No19`, `mL_No20`, `mL_No21`, `mL_No22`, `Seg_No1`, `Seg_No2`, `Seg_No3`, `Seg_No4`, `Seg_No5`, `Seg_No6`, `Seg_No7`, `Seg_No8`, `Seg_No9`, `Seg_No10`, `Seg_No11`, `Seg_No12`, `Seg_No13`, `Seg_No14`, `Seg_No15`, `Seg_No16`, `Seg_No17`, `Seg_No18`, `Seg_No19`, `Seg_No20`, `Seg_No21`, `Seg_No22`, `Flow_Rate_No1`, `Flow_Rate_No2`, `Flow_Rate_No3`, `Flow_Rate_No4`, `Flow_Rate_No5`, `Flow_Rate_No6`, `Flow_Rate_No7`, `Flow_Rate_No8`, `Flow_Rate_No9`, `Flow_Rate_No10`, `Flow_Rate_No11`, `Flow_Rate_No12`, `Flow_Rate_No13`, `Flow_Rate_No14`, `Flow_Rate_No15`, `Flow_Rate_No16`, `Flow_Rate_No17`, `Flow_Rate_No18`, `Flow_Rate_No19`, `Flow_Rate_No20`, `Flow_Rate_No21`, `Flow_Rate_No22`, `From_Side_No1`, `From_Side_No2`, `From_Side_No3`, `From_Side_No4`, `From_Side_No5`, `From_Side_No6`, `From_Side_No7`, `From_Side_No8`, `From_Side_No9`, `From_Side_No10`, `From_Side_No11`, `From_Side_No12`, `From_Side_No13`, `From_Side_No14`, `From_Side_No15`, `From_Side_No16`, `From_Side_No17`, `From_Side_No18`, `From_Side_No19`, `From_Side_No20`, `From_Side_No21`, `From_Side_No22`, `From_Top_No1`, `From_Top_No2`, `From_Top_No3`, `From_Top_No4`, `From_Top_No5`, `From_Top_No6`, `From_Top_No7`, `From_Top_No8`, `From_Top_No9`, `From_Top_No10`, `From_Top_No11`, `From_Top_No12`, `From_Top_No13`, `From_Top_No14`, `From_Top_No15`, `From_Top_No16`, `From_Top_No17`, `From_Top_No18`, `From_Top_No19`, `From_Top_No20`, `From_Top_No21`, `From_Top_No22`, `Observation_No1`, `Observation_No2`, `Observation_No3`, `Observation_No4`, `Observation_No5`, `Observation_No6`, `Observation_No7`, `Observation_No8`, `Observation_No9`, `Observation_No10`, `Observation_No11`, `Observation_No12`, `Observation_No13`, `Observation_No14`, `Observation_No15`, `Observation_No16`, `Observation_No17`, `Observation_No18`, `Observation_No19`, `Observation_No20`, `Observation_No21`, `Observation_No22`, `Hole_Size_After_Test_mm`, `Dispersive_Classification`, `Pinhole_Graphic`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D46', 'B', 26.74, 2.63, 1.476, 26.17, 490.65, 424.27, 66.38, 4.187, 36.29, 1.83, 1.44, 97.78, 26.53, 1, 'C22', '110', 210.6, 179.52, 31.08, 63.3, 116.22, 26.74, 'SN-4', '110', 130.69, 117.27, 13.42, 66.68, 50.59, 26.53, NULL, NULL, NULL, NULL, NULL, NULL, 41, 24, 24, 25, 25, 30, 78, 77, 77, 79, 80, 105, 107, 108, 108, 110, 16.94, 13.18, 14.58, 42.38, 53.42, 56.66, 100.26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.59', '0.76', '0.69', '0.59', '0.47', '0.44', '0.41', '0.40', '0.40', '0.42', '0.42', '0.50', '1.30', '1.28', '1.28', '1.32', '1.33', '1.75', '1.78', '1.80', '1.80', '1.83', '0.59', '0.76', '0.69', '0.59', '0.47', '0.42', '0.41', '0.40', '0.40', '0.42', '0.42', '0.50', '1.30', '1.28', '1.28', '1.32', '1.33', '1.75', '1.78', '1.80', '1.80', '1.83', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Clear', 'Trace Sand', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'ND2', 0x89504e470d0a1a0a0000000d49484452000003840000028a0806000000653395ff000000017352474200aece1ce90000200049444154785eecdd07b42d45b53dfc266701892678082a228a8a39038a084614140312450503884834e78c8a8818088a2022a8445150492682282ae61c30820914f01bbffabfba5fddbefba47beedeef84d963ec71cfddbbbbba6aae555d6bd65c55bdd47ffffbdfff76398240100802412008048120100482401008024160de21b05408e1bcb3791a1c048240100802412008048120100482401028088410c611824010080241200804812010048240100802f3148110c2796af8343b08048120100482401008024120080481201042181f080241200804812010048240100802412008cc53044208e7a9e1d3ec20305311f8fbdfffde7dec631febaebffefa45aa78a73bdda9db72cb2dbb8d37deb85b76d96517f9fdacb3ceeabef39def94ef77dc71c7ee2e77b9cb8273fef18f7f74679f7d76f9fce637bf29dfafbcf2cadd231ff9c86e975d76e9d65b6fbdf25d5b467b83b5d75ebb7bd8c31e56ca5c7ae9a5cb4fe3d5d5ef1b6cb041f7d4a73eb55b7ef9e5c72df77ef7bb5f778f7bdc639136d9f3ebfbdfff7ef7a94f7daafbdad7bed6fde73fff29f7dd64934d4ab9eabecc32cb74bffbddefba934f3eb9bbe9a69b16dcf3eaabafeebef8c52f96f337df7cf36e871d765804af1b6eb8a1fbf8c73fdef977f5d557ef9efdec6717fcbefce52f8fe91e7d5cc7f323e59e77de798b60fee0073fb87bcc631ed3ddfbdef7ee965a6aa97171bceb5defdac1e78e77bc633977d0d1b6c3efcedf669b6d16397549f956bfe0155658a17bc6339ed1adbffefa8bdcf3273ff949b11f5bb6fed09ec86ea79e7a6af7eb5fffba6bcb9aacfd0761d2fac4a0dfab4fb498541f5875d555c734ebadb7deda7df7bbdfed4e3ffdf4053e79dbdbdeb67bf4a31fdd3df9c94feed65a6bad05d7fee217bf28edbaf9e69bbb3bdce10edd4e3bed54da578fb68eb7b9cd6dba673deb599d7febf1c31ffeb0fbf4a73f5dfebbc5165b74db6db7ddc07a8dd5567d433bef7bdffb76ebaebbee986df23c38e59453ba7ffffbdfe51cf771bf7a8cf54ce81758f18369ed8fe3613f5edfc96f412008048151221042384ab473af2010042644e04f7ffa53090c1189b18e7bdef39edda1871eda3ded694f5b8844bdee75afeb5ef9ca5796cb2ebef8e2eea10f7d68f9fbda6bafedf6dc73cfee924b2e1958647b6e5bc6a093f7d8638feecd6f7e73b7ce3aeb7413d5759f7df6e9def5ae77752badb4523751b94f79ca53baf7bce73d85f83804d1ae75dddffef6b745aad296ad7d4f7ffad3bb6f7deb5b5dfd1e1111807fef7bdfeb9ef39ce774471d7554b7da6aab2d54cee5975fde3de1094fe87efbdbdf76471c7144f7aa57bdaa04b288e158478bd558e7a83ba279c00107747ffef39f079ed6d67f221cd5fb15af784577e081072e44286ac15ffffad70b19d10ec758ed9de83eae9d8c6ff51b843c201477bbdbdd1669ab3aedbaebaedd17bef085ee518f7a54c1e5f6b7bffd42e7fdfce73fef9ef9cc6776975e7a69b7db6ebb75ef7bdffb4a3b276bff4100b73e31e8f7d7bef6b5c5e62d268f7dec634bfd5a52d75ecb96ae79fffbdf3fd0a6daffa637bda9d8027947b4f4e52f7de94bdd431ef290eea4934eea36dc70c305d79e7ffef9ddb6db6e5bfe7fbbdbddaefbdce73e57267cea015344dbf1f9cf7fbe4c222c4e5b11d677bffbdd056324b17f209d2658ea71c82187947e57cf9da8efd6eb2a7e7ffce31f17f4c7f1b01fb393e58720100482c0881108211c31e0b95d100802e323d006a80239c1f672cb2dd7fdeb5fffeaaebaeaaa85c81162f6b297bd6c01291c4408fff297bf149244a97020490256b3f9dff8c637ba73cf3db77bc73bdeb1803cb665ecb7df7e85a05d73cd3545e1abe4a692a7bffef5af0bc86b5bd7dac2073ce001dd61871dd6adb8e28a0b11c25aaec051bd1002c741071d54cea3287ee6339f29c4061914680b66296b54170a1e92f4f6b7bfbd90cd41849092e33ec71d775c77f7bbdfbddc870ad91ec71c734cf7fce73fbf9445f1a1aa21049510dee73ef729c4b73ddef8c6372e14b4f7ad890cc2f3e0830f5ef09372a999daa5fe944be4a892e5d6e6eabaf3ce3b977621b8679e7966c1401d3ff1894f2ca274de72cb2ddd6b5ef39a821b15889f50b8fae4426596946f3de8410f5a48c95a638d350a11baf39defbc8873b7f56b716e4f6c89d1873ef4a132793115fb4f449290b056d976fee31ffff8ee452f7ad1a40921859d7f5632c8dfd9955a7fe1851716b5d0e15ec71f7f7cb137c58d1fb0b3b62375b073503fdff086371482590fd721cff57776f541124d5450c6276aab49200a1f15ffb2cb2e2bfe53eb75c619671455ba3db4abf613a41481ef93d7f7bef7bd0bcad1af2897fa6cbfcf5380dffad6b776d75d77dd0242381ef6190b824010080233058110c2996289d42308048182c0788ac51ffef087423604a54882604b3a9e1441c72042287592922888a35650ca90c17a48d713b44b1f1dab0cdf5f71c515852851dcaad243c5a96ae644eaca58eaa5fa5141945bcb403004ca4886439aebe31ef7b8853c44fbd5998a31881022542db99386abaef570fdbefbeedb9d78e28925ddef84134e282acd78d74cc6455b22f3c0073eb0134cb34f9bee29a81634239bea3f96cd910604e979cf7b5eb97555b5da7ab40adc0b5ef0828e5a48f9e427fbefbfff42f75dd2be35193c9c4399663f98f3039304150fbe576d5d89fba69b6e3a25fb0faac7583ed13f77b20ae1873ffce16eafbdf62a973fe9494f2afd481aa8833da97f2f7ce10b4b1bc7f2a796f04909579e4c00beca1fd8cb248f8983d63fc7527c6b5bc66aabc909aab7490c47bf0ff8ce644f55d2a9d0f5d972da69a795b4f3fe61c2413d4da68cd5e7278bfd64fd27e70581201004868d4008e1b0114ef94120084c09818902d47e90d706d88348579b16292d5360bbe69a6b8e59a7b1885b1ba0d61441eb0aa74b0807b5979a529515151d2b389d28201e2f306d03e116c3e910c21ae423e9c8a5007cebadb79ed0fee3d91c99b276732c4258d5350a18524b1115ac0fb2f592f6ad091bf6bf275082911a6a34f50a09e73b8e96d0d6345a24792af61f548fc99292893051765b7fa4955a77af7bdd6ba1db9a58a1204a7b76981878e2139fd8b513326d2a66fdde9ac1cd36db6cc1c4046269a2e0473ffa519928d17fdff9ce77161236d6315e5b27f2e7aa929be439f2c8234b6a323bbdf8c52f2e6a5fbbe6d1fd430827ebf5392f080481d9844008e16cb256ea1a04e60102930950db20b3550f0691b936e0069f5439aa818d26eae6302dac6311c23628ae29655213a74b082fb8e082a23caa67ab90b48a8cd4b4c30f3fbca412b69b6e4c4408dbe0b59f06570365e4f39c73ce5990323b51003d9e0bb676a96be15659659509bd762c9b23ff14a39a565849462db02521d50f3efbd9cf163cfbed72cd92f6ad091bf6bf27b4e991fdb572ad7ad82a5853b1ffb009613ba9d2aefdecdfb74d7dd5c77c6cf84309344960632364d8844cf53376431ca9742d365ff9ca574adae9203bf6ef3b1621940eaa4f1d7becb103d7284a27d7a7a44b23ab14e8ea6f63ad0b0d219cacd7e7bc2010046613022184b3c95aa96b109807084c2668973a6a4d9d8d3adab4adb1c89c3577cf7dee7317acd503a3eba80182ce96180e2a43102858b75e915258d503bb098eb7014e1be0b7e54a4bb31eca1a278a8880567ae5473ffad1b2decfd15fb3e53bc450802b286fd7f68da790b41b665442d512a9be92d612c2bebb4d9416db128236bd73ac5d20616f4d596b733848a94406a5cada5804e6d21129362dc1fce94f7f5a7688b57eadaa48adf259d77ad6cd4196946ff571198f24d573db8d6f6a5d1145ebebf895765b23b9d1461b4dd9fe1311c241ebd8ea5ad0c96032965dfbf76d27042a26d23f6b4aac0d7b3ef9c94f96b5965501d52f1078fdc8a63a35adb455ee066dc4d3debbf57feb83a50e9bc0b166b0ae1deeaf37767d6b93da37ac6fd527f85c5dcfd9de6baa8470906d26b331d33c78d4a789412008cc20044208679031529520100426a7e28c15c48e450805de575e7965512cea2613156bbb95fa54a231d18e822d719b68d7cab108616b67246fefbdf72e24b3bffb2452f8c10f7eb07bfdeb5fbfd06e9dd48ba38f3eba6c32e3188f10b6a4a9a6ecfdea57bf5ab0ab657faddd7408617b6d4b08c7daf1b2e2331e8e4804c254379a69b1abf76b95a5769390762d9beb26437e26e35b8b43085b35aaaa99d6de55f56c508ae264ed3f11211c8f944c0693b1ecda2f772c3fa4da5a77e8b0b18ccd8deaeea3fe6f239897bce425858099f0e03b760b46965bd57cace7e3783baa3efce10f2fea9f1d4adb57d5b4aa6dab9eb719058354ee10c28c52412008cc45044208e7a255d3a620308b11984c80eadd7c08c2b7bffded855e31301621ac7008c0a949363aa1c6d4a35502c6228452d76c4e63d743ef43ec138caa6cb5af76a0f6d46df6db72a962764eadbba652bffc8e1c0e3a604249b49187e0d7d1929df10861ab06d6cd70bef9cd6f96001d91a2a2d80db51e6df08f40bba61e764bb5f3687f5d55fdbda6f9f97f4d19b4794aab107acf2122e8184408ebce8d767045e2fd9fa28640b4017d4bfcfad8537bbc66a01290faba8225e55b14deaae4ba874d8010d741af34a8d8b46aa0f58e5228bd57b2bef663bc75a213d97f90cfb43e5177dee473f5a8ef939c0c26ad5dfbaf6468efddaef76ccf6beb42997cc4231e5136d981597d1505f2e73525fcda6b374c02d8d9f7031ff84051c4c73bdaf2ab1afacb5ffeb2f4153bf4f205ea76bbb1514bfcaaaa48cdb4c98f745dcf876aa776bde45409615b766d837723d635a4b3f8519daa07812030871008219c43c64c5382c05c4060a200b5bff3e4449bca0cc2a4bf2b2295c6861276ed6c899bb575f7bffffd4b117eb31b627b4c54d7f6dc3e59a54a083abdf6417a9a00d836fc63912d657971b99d41111e875458c1f5441b8854850659f53a063b3bdac114c14586db5d5797d41ac2be3a57b11854fe201c91cffa9a03f5b6f6acaa4cca6ad313c7f3fb56799bc85e4bc2b7c6ab4bbb160f199672ccfe83ded137a89cb1ec3f11211c2fa575224c94ddfad758766d09af6b5a75bcdd90495ff37a060a605bafba96d2ba5cbe49b996f639e8f521fdf60ef27f6b1795afaff47723767d9b063b9ecdfa0afa5409e164d289e7c2733b6d080241607623104238bbed97da07813987c07801aaa0d33bcfbc1cde7bc0fa3b1e0e52082964d608b6ea483fc86d37bb9848655c5284906a23b8447a2822480fd5a8bea8bbbe7baf6fe0b67e767bf442fa890861fbe2736aa497d6db4971d0ee8dd32184ad6aa7de83d66d4d96107a39ba578548afa4ea6eb5d55685147ad5414b3ee0e6dd722d596fdf15d7aecd5bd2be35d5ced7eec26add1c35caa4c0a0b4c8a9d87fd884b0254163d9d56b5376df7df762abfe7a48d75405d03b05d75f7ffd45d4bff625f66cced6fd1d59c7c27b2cff473229cbfcdffb0d6506d894a955cd07bd3f9472eb1d98de3bda5f631b423855afcff9412008cc0604420867839552c720308f1018b4c188a01fd9b0fe0fa1a8c1b274329b8ad454b041644eb0f8ea57bfba04845235a961d673090ea57f3ada807c7109e1a09451298ed6fba9ff64de43d8921e6a21c260f31c8a8a43aaa7b43a4177bb6e6e2242d8be20bcbebc5d508e80f65f1f305ecaa83aacb7de7a0ba54bf65db30dc2fd0677aaa617980ba66d9c431d720c4a196d37aee92b76d67ab219fbd7dd216b1a6c7ffd65252063dda7b5d7547dab9f32ea1e6d7af078ddb5d6abda415baca3ab69adf5daa9d87f4911c2413e5cd384a5675394912bfe6c9326af85e00f175d745151d8912887144dca6c9ba2591539d722ef7ca1ddddb64f3a95335e7a6adbe6c9be87d07a5c0ae5cf7ef6b3059b110d7ac761db5ffabb9c4e95100e4a199d28f57a1e3deed3d4201004660802218433c410a946100802ff0f8189366a718e14306b91ac236cd7958d4508a9683558ede33c9997db8f659b89eada6e5d3fde8637deddf6d297beb4dcc679766094365789d3a0fbb729a6131142d7f753e4c67ad9f7789bca2867d0cbe1dbfa2171b6f1475c9187f18e8908a16b91776977768bacef3694565b5ff43e166968d333ebe62037de78e3b8bbc24ed6b706b569d04bcf079dd74f751d8bd04eb4b9d14429c693f189c9f4b74ad0296993b1abc917aa773fbdba55a9dd7750bbebcea215b7fe6b46c6f2a5f1da8afc51634d54e88f14d92baeb8a27ce7186b8d62bb114ebb5bed5409e1a03a4fb45b6fc68220100482c0a81108211c35e2b95f100802e3223016c932536ff31333ee882085a57f0c225d3634f10e3fdbdd5363eaa13ce960071e7860d9dca21e8bab100e6ad46408a1ebaebbeebab2d3a820144145caac17b3bb2865a63dd455da2785a606dd9309fedb943ce50dda52dff7d32584b5ae02714a91d43fa977ed4189527fe97c52f8265ac76653136a948d40d89fda686d976390bae6fb363d536a314249151df49a90a9fad6205b4f9610b6ebe994d37f35462d9bbf4ed6fe83ea33199f70dd44931a7df2c2ae2605a8cb6d7fda669b6dca44c6d65b6f3df0fd9e7d0570509a6c4be2eb2b2a36dd74d3099f9813b5b5f569930bfffce73f8b5f0eda34a6deac25b0edbac910c209cd91138240109885088410ce42a3a5ca4120084c1d01efb513c05a5fe64002ec2a38d30f1b8f58f3e4a08622506d2ade4caf7f1ff7419bf3ccf436fc5fd66fa6da5f5a652584145b9bc1e408024120080481d9894008e1ecb45b6a1d04824010080241200804812010048240109836022184d38630050481201004824010080241200804812010046627022184b3d36ea975100802412008048120100482401008024160da0884104e1bc214100482401008024120080481201004824010989d088410ce4ebba5d641200804812010048240100802412008048169231042386d08534010080241200804812010048240100802416076221042383bed965a078120100482401008024120080481201004a68d4008e1b4214c01412008048120100482401008024120080481d9894008e1ecb45b6a1d04824010080241200804812010048240109836022184d38630050481201004824010080241200804812010046627022184b3d36ea975100802412008048120100482401008024160da0884104e1bc214100482401008024120080481201004824010989d088410ce4ebba5d641200804812010048240100802412008048169231042386d08534010080241200804812010048240100802416076221042383bed965a078120100482401008024120080481201004a68d4008e1b4214c01412008048120100482401008024120080481d9894008e1ecb45b6a1d04824010080241200804812010048240109836022184d38630050481201004824010080241200804812010046627022184b3d36ea975100802412008048120100482401008024160da0884104e1bc214100482401008024120080481201004824010989d088410ce4ebba5d641200804812010048240100802412008048169231042386d08534010080241200804812010048240100802416076221042383bed965a078120100482401008024120080481201004a68d4008e1b4214c01412008048120100482401008024120080481d9894008e1ecb45b6a1d04824010080241200804812010048240109836022184d38630050481201004824010080241200804812010046627022184b3d36ea975100802412008048120100482401008024160da0884104e1bc214100482401008024120080481201004824010989d088410ce4ebba5d641200804812010048240100802412008048169231042386d08534010080241200804812010048240100802416076221042383bed965a078120100482401008024120080481201004a68d4008e1b4214c01412008048120100482401008024120080481d9894008e124ecf6dffffeb75b6aa9a52671664e090241200804812010048240100802412008cc1e0442082769ab90c2490295d38240100802412008048120100482401098350884104ed25408a1e3bccf5fd89d73ee17165c75e78d36ecf679de6edd8a2bae30c992725a1008024120080481201004824010080241606620104238053b2085c79f784ab7fe7aeb76db3d76eb295c9953834010080241200804812010048240100802330f8110c229dae4b8134eeeeeb3c5e6dd165b6c3ec52b737a1008024120080481201004824010080241606621104238057bdc78e34ddd311f3caefbc94f7f5eae5a73cd35bafd5ff2fc6ef5d56f338552726a10080241200804812010048240100802416066201042380d3b9c7bde05ddb5d7fe306b08a781612e0d024120080481201004824010080241e0ff0e8110c269607ffdf53774471ff3d16e97a7efd86db8e19dc62cc9dac3b3cf39bf7becb613af3b5c7ae9a53b9f1c41200804812010048240100802412008048161231042380d84c722842fd9ffd081a51e70d0c1d3b85b2e0d0241200804812010048240100802f30b813557e9ba95575eb95b76d965e757c347d8da10c229806d0de14d37ddb460cda00d66aeffebf5e3a68cde7cf3cdddc5175fdc9dfe99cf77575d7149b7e28a2b8e79c7dbdffef6ddaebbeeda3de4210fe9565821afb1988269726a100802412008048120100482c01c42e0dffffe77f7db3fddd87def5b9776f7bbdffdbab5d75e7b0eb56e66352584700af6e86f2a3399771072e6b3ce3aabfbd257bed15d7af1f9dd669b6d36e61dd75b6fbdee294f794ab7e5965b76cb2fbffc146a96538340100802412008048120100482c0dc41e01ffff847f7c71b6ee98e7ad7ebbbbdf6daabbbeb5def3a771a37c35a1242386483fce73fffe9ce38e38ceee24bafecfe76fdefba5d76d965cc3b92c337de78e36e9d75d6e99659669921d72cc50781201004824010080241200804819989c0dffef6b7eecf7fff6ff7b217edd11d71c411dd165b6c31332b3a076a1542386423de7aebad85107ef9a26f76ebafbb5a77c821870cf98e293e0804812010048240100802412008cc6e042a21dc7fdfddba57bef295ddbdef7defd9dda0195cfb10c21118e7b39ffd6cf7c50bbfdaadb3d6cadde1871f3e823be616412008048120100482401008024160f6225009e101fbed5e086114c2e1d932847078d896926fb9e596eef4d34fef2ebae48a10c221639de283401008024120080481201004e606022184a3b36308e114b046eebc2370a9a5969af455fffad7bfba33cf3cb3ac218c423869d87262100802412008048120100482c03c4620847074c60f219c02d65e303f1532a8e8bffffdefddd9679fdd5d72d955218453c03aa706812010048240100802412008cc5f0442084767fb10c22163dd12c2dbad779beee083f372fa21439ee2834010080241200804812010046639022184a3336008e190b14608cf39e79c9232fae73ffeb27bdad39ed6511adbc34be837d860836ea38d36eabc7a2247100802412008048120100482401098cf0884108ecefa218443c6ba2584e79f774677f7bbdfbdf32a8a7a20876bacb146b7d5565b75db6db75de7e5f4398240100802412008048120100482c07c4620847074d60f211c32d62d213cf7ecd3ba4d37ddb4ec3cda12c2dbdef6b6ddd65b6fdd6dbffdf6218443b6478a0f02412008048120100482401098f90884108ece46218443c6ba2584bfffed4fba9d77de792142e8f62baeb862b7e1861b761b6fbc71b7ca2aab0cb946293e0804812010048240100802412008cc6c04420847679f10c22163dd6e2ab3e6eacb77071d74d0226b08ed5cbaecb2cb76cb2db7dc9477311d72f5537c10080241200804812010048240101839022184a3833c8470c858b78470ddb557e90e3becb021df31c5078120100482401008024120080481d98d4008e1e8ec17423864acf31ec221039ce283401008024120080481201004e61c022184a3336908e190b10e211c32c0293e08048120100482401008024160ce211042383a9386100e19eb10c221039ce283401008024120080481201004e61c022184a3336908e190b16e09e17aebacda1d72c82163ded1e632f3fdf05ec6e0303a2f80b723988f0ef3a9de29369a2a6233fffcd874e6db28350c0241e0ff1e8110c2d1d9208470c858b7af9d5879c5ff76fbedb7df22775c7ae9a5bb95575eb9bc72c26ea3f3f1b8f5d65b3b58dd74d34ddd6aabadd6adb0c20a2129437604585f7ffdf5056b98f3c31c330b819b6fbeb9d8086167233b11e798dd08fcfbdfffee6eb8e186d288b5d65a2bcfb9d96dced43e080481212210423844707b4587100e19eb9610fee0fb57768f7ef4a317b92322e885f5f7bef7bdbb35d65863c8359a79c59b2dffe73fffd95d7ef9e5dd2f7ff9cbee210f7948b7c1061b74cb2cb3ccccabec1ca911cc7ff18b5f745ffad297ca3b301ff8c007762badb4d21c69dddc69c69ffffce7ee820b2e28b6b9dffdeed7adb7de7a73a771f3b425bff9cd6fba8b2fbeb810c1273ff9c921f9f3d40fd2ec2010042646208470628c96d41921844b0ac931ca4108cf3df7dceea24baee83e76c2310309dfda6bafdd3de1094fe89ef39ce794e07cbe1dd4c13ffce10fddfbdef7beeea28b2e2a69b58f7ad4a38a7295633808dc72cb2d850cc27aebadb72eefc75c73cd35a3560c07eec52a1569ffc10f7ed0bdfce52fef6e7bdbdb762f7de94bcba4518ed98dc065975dd6bdf6b5af2d135ea79c724ac90cc9110482401008028b221042383aaf08211c32d6ad4278edf7aee8b6db6ebbee3ffff9cf427715106cb6d966f35621ac84f05def7a57f7e52f7fb97bd5ab5ed56db5d556218443f44d84f0c20b2fec0e3ef8e042085ff18a5714d291b58443047d8a45574278c0010794d4c2fdf7dfbfbbcf7dee33c55272fa4c4300217ce52b5fd9b1ef673ef39910c29966a0d42708048119834008e1e84c11423864acdb4d65565ae1d6ee852f7c610904dac3daad55575db5ac119a8f6b085b42f895af7ca510c22884c375ccaa10b684300ae170319f6ae99510beec652f5b4008a3104e15c599773e42e819e7b9174238f3ec931a05812030731008211c9d2d4208878c75ffb51302f0f6a8bb6a2285d499f9a8d00c2284d611da7cc10726d6508db5f1898d376c90824c2fbffcf2f30643eb2ef997f66b3ba5194eede63037de7863f797bffca5fbc73ffe517ea334adb8e28add58845059cef5fb6d6e739b05eb9bd8c1f76ce01cf7a574b71b220dda94867f3b8f7d6c88e2de73e1d0ae8a8976c3450a205f8693efb415fe0634df6bbf891fdfb7fdfc5ffffa57b1117bf2df3bdce10ea5acb108a1b294cb06ca6357e555db29833f28cfc7e19ece6d37a5a975b54ed1b5abafd58a9c2f0000200049444154be7a277d7dbe1ef08005ec60e5df8ab57f61c8e6eca97ff89dddfbf6acf8b191f3a4beb7137d2184f3d5c3d2ee201004a68a4008e154115bfcf34308171fbb495dd912c275d75ea53becb0c32675dd7c3a691021b4a9ccb7bef5adeef7bfff7d0962911d6466934d36e9ee7ad7bb9680bb928d9ffef4a7ddaf7ef5abb2118d359802e2b97ec0ec8a2baee8aebcf2ca4240ec522b38bddded6e57d28fd759679d42c2befef5af77dffdee774b100b97bbdffdeeddfdef7fff42f6ac21ec2b84d6727ee31bdfe8aebbeeba929eb8c5165b94a0d80634dffce637bb6db6d9a6acf7fcea57bfdafdf5af7f2d65baefbaebae5bee7bfbdbdf7e21428aec7cfbdbdfee7efbdbdf7677bbdbddca672e4c7a2050364082033f7cc4231e51881c5bc0893d6c14650da075b1081ee28074f1513e6c03293b885e7df5d5c5469e15ce63230ab9f35ddf570861fabdef7daffbdad7bed66dbcf1c6ddc31ffef0420a911964e37ffee77f8afdf987f3f41fbf4b0986bfdffdffd7bffe75a9abfe83b8f8dde642ee3f1f779c459e4f3ef9e4e29f8f7ce423cbf304a9fbfef7bf5f6c0317fd409f627f18228eec0e571bfeb8b692487dd364c8e69b6f5eb0ad988610cef5a773da170482c0924220847049213971392184136334ad33f262fa89e11b44080556679c7146d99e7dfdf5d72f33ec823084c3063c77b9cb5d4ab0f6939ffca4ac85139cdbc1f5c10f7ef0bc589323803ff1c413bbcf7ffef34581108cc211a140f8100ac7e73ef7b9422a1c7ffce31f0b797bca539ed23de8410f1a480805bf279d74522129c8dfde7bef5db0473e4e38e184b2098df204ce8810e251d56d2467871d7628e490fdd451799ffef4a70bf970dfc73ce63173826c20dbc8d4473ffad1428c9ff7bce715cc11bce38f3fbe1000eb85bff0852f14dc1006241c26c8223fb56b28ffb66eb6dac8f506401347263f7ef4a31f2d4208ddefecb3cfee3ef6b18f1572c72648c9cf7ffef3ee98638e29bbf4ba9f0d4b9012e75475cb79d6e722ab6cf3c52f7eb1907ff652aeef77db6db74256e702719ff8e9f3ff9ff1a73ffda9f83b1207036b6bfd6d533018f16d13009e4b265ea458fbdda4c8965b6ed93dec610f2bfd810dafbdf6dae2f770dc79e79d8b0daa4a18423815abe4dc201004e633022184a3b37e08e190b10e219c18e0418450a0fca94f7daa9041e445202d38fee10f7f5882e93df7dcb31042c1b4753882d9673ffbd9ddb6db6e5b48cf5c3f90639bf0d8be9e92478510d05e73cd3585383feb59cf2aa4994a042798f89bba41fd78fef39f5fb0eb2b84cef9f0873f5c08a0f56a369b11cc7af581fb1d79e49145f14336900ef7553ebb2024ee8bf4097e05d182e9b3ce3aaba42eeebefbee659bfdb9f03a91ea7bef7ffffbcb64841d829ff9cc6716ecdffdee771762f0f4a73fbd90824f7ce213dd1e7bec518832c51b7e88022ca8defc1a3e5470131cef7def7bbbb7bce52d8550fef8c73f5e841022f608b90901eadf6b5ef39aeea10f7d68f7b39ffdac7bc31bde50f0a7ec7ee4231fe97ef7bbdf75db6fbf7d51b3944d3134616052c53d91c26a0f4a2605ccfa36c470bea984b07ad2939e54263a1ef7b8c775bbecb24b51004f3df5d4ceab22d8f7bcf3ce2b1fb6bbd39dee54d472f6e4ef70a6d62ac7448089157de4452f7a51f9378470ae3f95d3be20100496340221844b1ad1b1cb0b211c32d6218413033c88102278e79c734e217f822f6a0515e5b4d34e2b01347262bd1382f3d9cf7eb62850c8c8631ffbd8794308dff18e779400ffa94f7d6a0944a50c52303ef9c94f1615e8694f7b5a09f6110d812d02f8a10f7da804b2b6bdb7814f9f1052bd900d448102826053385ceb7eef79cf7b8a7a88e8d500180912141f7becb145a97ae31bdf58ee8bac4a4b952eea1c761470cf0542286d13261ffff8c70b29904e8840506a113ae40f6e08e1f9e79f5fb0bbe31def58545a7e0d1b8ab60fb286d8216008bdc90ea48cfd061142f743c8950b57ca946bd8fff5af7f7db1d9bdee75afa2202a17f9a74e22ecc71d775c51b09efbdce776f7bce73dcb440bdf508e091824e6d5af7e755119e71b21e4a7cf78c6334a16820914fd8a4a5b9f2f082165d6a4897e83e4794ee947947a0a393bc0920a483d9676fa9297bc248470e261206704812010041641208470744e11423864acfb84507ad7a003e1996f0158c5612c4228c8b2364b608cd450652855871f7e78095a2928d66c9d79e699e57b295df38910bef39def2cca9c20567a271c110e644f502a1015a4d6cd4e04aed217ad619392384821b47e504a1c5c91086b33dffef6b797d4c3b7bded6d0b14426404b9433ca5400a8c1142848282829c2096d259ad9bb34e8dd23b5714c24a08a9d3703268699f0fd24d21ac84906f7ac7667dc728d2e7ff54c2bdf6daabdb68a38dcaf5263c906d849e0da5940e4a19ad84f0aaabae2a84c5a408022975f14d6f7a53219914426415d97cf18b5f5c9448c7e9a79f5e88ca8e3bee58eac7761431f7475e91c2238e38a2a888f3ed798410eebaebae4561a5b652bfd9e0924b2e290a21c28f109afc809135b330f21ba5d8bf769146b4f587b7bef5ad4585dd6fbffd4208873ccea6f8201004e626022184a3b36b08e190b16e09e16aab2c5dd28706bd7642e026389b0beac954211d8b10221608e14e3bedb4605de077bef39df23e36295d025d0742e88320ce3742884420844880c32e88543c2a065f13d84b55e387521791ec273ef18925fd6dd0a6320821624021a17a290bc9b066cebf3565946d10424494df2248026704872dac4d13384b9b5427a448704d75990b9bfeb484f0010f784051dff8b149092a764b086101c73bdff9cec546d2469167a985d61ec2196146e028bcf7b8c73d0ad6701ab4a94c2584365d8237726fed9b344fcab9b56f082185d073851fa88fc3e6352653105729bc5460f5a644520fa58cbef9cd6f2e2ad97c5b4388104afd85a5346029cf7cd6a4085be9670821d2ee3d8295109aa842b2a982cea19ceb2fd45a69dcfbeebb6f08e15407859c1f04824010e8ba3259f9e7bfffb73b60bfddcb73d7d89663380884100e07d705a5b62fa6fff94fbf5b1412c1427b08da283902c1f9b0fead0ff95408a154462aab8742ddb1d5c629d6a92189f39d10dae4c21a4064ef052f784149fd33c940e1434afc8d1048ed1c8b105289a4e3524aa43a52976c08331e21e4d3088a54c4030f3cb0dccb3555e54274ee7bdffb96759e36e498ed640321841f35152936c9238dd6fa4cca1d7cab42d827845e31814050779132e99d3621a12c2280d66c22659455e7f477194508a9af48bf01923ae53b0a16d2af3e3565b44f08295fd42d24547aa314572a9634561bd250e391d4f9782084fcd38413dca8bf8831db52fc4c6e0c22847c1feefcc1da4c931efc032164eb10c2f9e84d69731008024b028110c22581e2e4ca08219c1c4e8b7d16422850bce8922bba0f7df0c81268f41542eb8da470d5f4b1c5bed92cbd702a84d0ec3c6550e06a6d142c4308175608913869897042c2a81b943d2a16cca8ae08d97884100944eea4990a6c9104a4419a2a1b0c520895279896d26b4313b6b1864dfa28a5c4a487dfa999ed7bd966a3db56422805537ba884526ba5104adb853b659bdada278488c7073ff8c182c93efbec53943d6bf90c7c6c44d1f33c603f1bc14c4408e1fbd297beb44c8620e5269da43b0e5208fdce9ed69cda4953baabcd649041e4d0248b1d52e7e35109a1546b1b32b11d42ce874d9020f8269e062984c8bcd4ddbab15508e17cf4a0b439080481258d4008e1924674ecf24208878c75ab107effbb9797d9fbfe617d9cf423bb455a5734df8ec9ae21b4aecd0c3df5c44e8e765614484b51ac0ae17cda65b4bf86101636d7b1eba454406b97bc6e402aa2b5685209e143791aebc5f45246298408a1f55082e497bffce585ac580f087701b1d453c4a3ae21444ad4871278f4d14717c58a5a295d1409516e5508e7423a629f104a9fb5eb27ff44ea4c5848cb452afa6b08297b543d6b0a91329bcd54c594fd90442aaa7586ca3ae080038a3d90693bbff61542134a363961638a144289100e5a43a88e544de486822b059bdaa80f522be7eb3b083d73f9ba8da9906bef63bcfcf2cb0b8654554a377c3c6bfa6b08a5fb1e75d45165dd2d3289e04b2345bcf58b2884f36d444b7b83401058520884102e2924272e278470628ca675464b085758eee692c6d73fa4f1d9e9cf6cfd6c574e1607ac418450602bb816983dfef18f2fc4422a9e342ec4042914244bd7b20ba073ad21f4990fef50b3694c55021133bbb12213368aa1f850a7bc178f3a6d6d9f1442d8200fd6a6f938afbfcb2895c336fbb015dc2275368ab16909854f3a2a82076f8a94fb0a845d276dce777c9c4f530805c676d4b4098d756b73690d2145d47a410aa1b563fc13294600a5637ad504724d4db5c18857a8589b46d1a6fc5101113cfe8fa423efb045e4fdc636c8c6208510d6088bf45f29a6ec6c231aa4c6848072bd0f911dac89939960fd20d5906d6d9ec2076c60c36fa43a4a2ff69d7af8ccb70376d26e116f7d87b2cedfbd4202216417cf1fb81f74d041653320e7981c314962b75784d2b3dc73bf4d1935e157d7cee63d84f3cdb3d2de20100416178110c2c5456eead785104e1db3295dd1df65d47bddfa0775a0ee323adbd7564d099cff3d791021849b601ab9b3b6d2ff05d3882135c67a412a0d850339a140218fbe477e04c073f94008add343006d7f4f6db209860d306c758fa020644823dc6c2e635313298d143a6a1d0233e8b513542da481b2215d0ec6942ceb5b05c81412aa1265abee908954281bf9a04ed5cd91ea6633826a699573e9b5130835b58df24a11f43a07ea28d2e5ff48212c11eaba532ed26153194a9c0d68acdfe3bb145b244c8aa234ddd7bdee7525ad73d02ea352521139eb42a5782284cab476d36b43acb1956d609da24d6294c317fcad1f21edd286eb6b486c0aa40d888c3ab05fdd30652ef7a17edb903b7e8ef821849e35320f906ffd4b7f9036ed63120089873bdf6703a41a76ec83204a9b3659c2f6cad35ff48b10c2f9e455696b100802d3412084703ae84dedda10c2a9e135e5b35b42b8eedaab2cd80865ca05cde10b5a4228c8a64649a34522a45c095805ccfe15e80a66a544fa8dfa24a016ccd9c8836245e998eb9bf3c083d2843cc0afbe3e80028800084ca51b22238256ebc22814261c36de78e312d05a67883c2003262a906f04e4d24b2f2df8212caea1d64a89b3b186f445297452e7903dc45b99ec81f05152d8ae1e826aca14f24961a412ce85d7196817a22c45d60647357d99ffc2869f225ed459a4500aa876c30a89e6a748042cad3144da1dcae5c7d66c221cec515346a53252fe6eb8e186a2ee52196d74c2e626089074f5a1185b0357d7bbb10d4288eca9abc901bb8e526dd51549f17fe7b09db6a8df5cb0d3541e9b9e27766945ec4c2a69bff77c525fe1e27be9be1441fd036efa617deee873fa8b7ec73e9e4bece27b7dacbe9c9e8d6c06a4df521cdbfe3295fae6dc20100482c05c4720847074160e211c32d621841303dc12c2bad1090505c9a3ba08a2a5d25230a85b3678702024540f33f2022fc1988d310468d24ae7f22178a74cf8c04170aafd881f8c0499b0431a3c505be51941404aa849d20ced8c293d1401712e3c2983488c7261ab1c44847244f54064a85b8266584b77863b1bb5f7625bd7d940c5396c37175470ed82af76c1adbed601a940eeb4951dacf7f34a0707ac107718f053f6820d02c1d7a5e7fa9dc28bb4c349cae8a1871e5a08b7545cefb8731e1bb195736b7aa7f7e05120ddd7fdd5c36480833df9049b2a8b5da9c9ce416adcab6e02a4ccb9b0ce73aafdbf4e5edce94e775a9076eef90d57b6e3df2647d84b9f8019dfa7a64b07e6fbd52f3c974ca0387c0f53e72947bf7be31bdf58ae0f219caa95727e100802f3098110c2d1593b8470c858f709a1b527fd2329a3b796c0d98625542feb7004be75061e5efeae416b8b9f00acddb5b5a6de0ed9ac33a2786dd57e9f36e5b8e221f8f49b80bf3deab9d6ab492ba43ad964a42a1515e75a4ef5cf7a1f65b5f7ade9a1fddd739d57c9dfa0df6604888b59893ea9ed63deb61dfe7eaf131bb0ab47b52192e73cc4cda79e8f8cd8919422651398fa2ec37a7d8b6bb577bdb7df6aff18d47fdcbbd6ad85613ebe0bb5c5acff9ce9db1a667085f758bedfef73cead0ab157e7482b3679433d8e42b8989d309705812030e71108211c9d894308878c754b08975ff63f65dbfffe41fd12f0cdf74d65ac89b37d3b158a8252032878d5e0b68f5d7b4e252a738d7c8ce5a22df9d5e6fa69c94625736d19154bea91b54e520e29b235a5b44f086bb05cc94b2db33d6f22cc0791f92177bd9114cfff5adc2b36f5bb896c54b1ad7eecba964c180ca5dbb28d945bea5edf1e7d7b4ff6de83264f06f9d148809c2137e9dbb325f695a4b77daa3f21d5daa69d0ca99300bea3ee2285d252ad050d219c21c64f3582401098710884108ece24218443c6badd65f49a6f7fbda4e7f50f2945d699587f5503be21576b46155f534611c20f7ce003650307b3e7fd99f91955e9395019e98dd6a8c1da7ab6f9b8c3ed4c3163ebeb2db99696eb65f554436987737d6dec4cb1c730eb21d558aaee965b6ed99d72ca292184c3043b6507812030ab1108211c9df94208878c75fb62fad34ffb58d969ae4d19737b6b4b1ef398c794dde8fc3edf8e4a08a58c7a8584addfa58c0a82730c070198db2df4b8e38e2b1b8df03d13133966160252468f3df6d8923d6087d67ecae8ccaa6d6a331904a883762e4dcae864d0ca39412008cc670442084767fd10c22163dd2a84dfbbe69b85f8d990a01ed40081b8572b98319eef2fa6b715be1d2fed745837869142d762464db176a75deb54d7cab5645bfa5755bd7c6fd388ba0ecef73e350db2ae0b62977a5d4d1f1b5476b59f32dab57a6d5a59fdad753165592f56dbe31cc4573d7cd7af7fbd565bdb5d1f6bdaa77ad7ef07ad07ab6de9a78e3ad70eadde5967d7562f336f09615defe63e75038dfa1e3575aa6b08fdddae55f3fffebac1b6acb1ea586dd9daa15ed7dad9ef7513946abf8a913ad5bad66baaedfa29adcaae6bf5fab6af6bc35ad58ecd06f9563da7d6ab5d2b56bf6bd762f6d7fcb53e36a88e367ef16a89baa98c34c3d6f6da5efda7daa2a69cd67583d55efcbffa5d5dab587da7a6aaba16ae7dccfd5ed35aab9f565faf78b565555bd473fccb7f6a7b9501d35a6eed8feada2fbffa7e8b957306e155cfadd8577faccf8bbe12ebbcfa5c503e5c6adbfbf7a8f71fe41f15bfda9e416b77d545d95e17e23daa8e6c2a33e40138c507812030ab1108211c9df94208878c75ffc5f42f7ce10b175108eb8be9ed56381fd3f6da5d46eb6b27a4d62284022ca98d941201a460ccae8a66d7eb6e89bef3827a1bd338b79224784a3fad65d82953ba96c0d4bab9ba1ba79d1eada7b35b6725e875d74001241b7ac79f07539f14280789b7a3a0fbd7cd26ac0bb20e12c9aa8172dd81d02e85ce55367598eae37c3b862ac7797557d51a842aab7db7626d93f3eb6b39ec78d9275cee6f6749a9866d30ec3c3bba7aed04ac77df7df7128857324191b2dba217cbdbe9d23dd4b306cb761a756ff563177ffbb792f576d319d76aa7dfd5b11281daf5fc6e0747dfc3d93db58f9dedc8e9da7a5ff7714edd51b6c5c475f5f50df012dcdb15924f08fa5b02015fed514f3b7c6a8fbabb277bfaf0bf8a7fdd35b24e28f03d3e52272dd48b0fc15b9d5dc7c6ca6e899336578c9deb3eea56f16bc9a3fab389571428d34eb0f545f67cd28ea20ee9beb51ece570ff7871b9cdc8fefb2a37e044b78b32f3b3b571dd8c6a7ee825ad77dc2103e1513edaabe0e4765e88feca86c6d503f6456bfacc7a69b6e5af0752f75e7ef5262f9bebe084ff5654378a8b7f2dc575b94ef5047ede8fbbab2edf6cad7dd5b1dd4058eeaa70c38d576d5dd5aeb0ebaec2143433d94ad8ed52fd44319ca647b7fb7cf6ab85b1ba83dee0f6fcf9afe0642aed33e2fad778f10c2210fc0293e080481598d4008e1e8cc17423864acdb4d65d65f77b51280e758188196107aaf9ef7107a91b3e04dd086247a49bde052c0e87b41ab77bd51550581f59d84dea1278015dc7951bdf7b42160022fefc35386005860e69d78deb7265096aa2a08ada4c03bc32867826daf0df02e322f0d6f9513e5507ca55c7efdeb5f2fef4dac4a04a242f5f5be3f41a673910a24ecf2cb2f2f01a360d5f95e12ffec673fbbdc43397ed33e1bbd384780bfe38e3b2e7815412515679f7d7677edb5d796f3b49fbada2a81aedd64934dbac73ffef1e59c5661ac84d02b0d60000bef58136cc3d87a56f714bc4ae5551fefc1ab9bfd587be805dbda0953aa476d53ab50099aad7d630be4c87bf910825645f4fb539ffad412809f77de79a52d70510fd8c1b0a6107bb71b9cf8c0e31ef7b8b23187830fa99335a80884f44affaaa3f7bed5c0be7a9e7a7b01b9a0ddceb60884ba2215027e1bb8b03fa20247fea72c6d446060c6f670f1fb05175cd0b1079c7defdeece1bbbaf108d2501544f5f0ae40be83dcc0cf84444bdaf9a8774abefffdef2f13189510c29bdd6d48c2d7d9a592753ecc97e1e3dd77ca40bcbc3b8fdfc1417d913836710e72c8eedac0876bbfd14e756633eb18bddf535f53d685175e58f042b6ea6b15f4473e0f5b24ebf4d34f2f7d47fb9131ef53840b1bba5e7fa898f02b3ee07a3bdfda01d7012fd7b0b3ac01640daeda5e7ff7af36f94d7b6021155abfaf8a1ffcf8b87730b2afc903ef18e46ffab5eb7db44f7f6157759456ed7bf5638baf7ded6bc56ede31a99c4a2e4d52389f3db4413f567eff79a10ef07ee73bdf599e6d2184190d834010080263231042383aef08211c32d62d215c67ad95bbc30f3f7cc8779c7dc58f470805bf761e95628538f8f84e205f037f01b843a0689306eff912403ee319cf281f9bd59c71c61925d813d899c5473aec666aed9ca0ef4d6f7ad3827785b1998fe0d24bbe9122652066548e1a040af6048fbe3bfef8e3bbd34e3bad90544a86c05c3dbd4243a02ba8f4a270f510045367b45bc0ecb7134e38a1bca05cfd1157441711a2c47881f8fefbefdf6dbffdf685243904f6520905d5bef79274c1252203971ae0aa9b362254e311422f9517c0230d48d0339ff9cc6ea79d762a812d6208bb238f3cb29030a409f1fef8c73f5e888adfec844969f5412c04cd3eb0f0ce43a4578aea39e79c5370ae2f4b574fbf23c4c8f2873ffce1422828bbd54e88c83efbec53c8398c6b30bdf7de7b773e888973d51fc983c111471c5194d1934e3aa9901c7f538cab0287ec1c78e0812568f732722415f9ac8ab07f77d86187f23a0e64c67d4f3cf1c442544c16ecb6db6edd76db6d57dace166f7bdbdbcaeb21100ec48dffc1419dd8993fc00876c836df411e6164c2039edaac5e5551444a108f638e39662142e87e264ea4562333471d7554b115650ab97cddeb5e57cab1a3315ff0f279af39408e4c102022c833d2c83790677643a661cbeff407c486af2257eab8ebaebb964909e7c055bfe353ea033fbea62c7d405f714f6be594e17b9361faedd1471f5d70879dfa21a3cedf638f3d4a7f62537dd2bdb40376fef59b97c39f7cf2c9e579a0ffb24d25d16cac2fc04d260672c6eff443f74014f9195faff5d3e7d8ddb5fa1a12c9df1137f66377ed3339a01fbfef7def2b04d8fb3bd9cebd4d8020b99e537c71abadb62a7eec1ecea9fd8ecda9f1da557d2e8470f68d57a971100802a343208470745887100e19eb10c289011e8f109ac9ffc8473e5202d0bdf6daab04ab8257c445c029204302ccde0b3c6bf02bf013d809d6280b52ed04ea82793611900a3405b1480fc2673d9d60d66cbfa0950af39ce73ca7048b089b6b11939a46e8de827081df7bdffbde1264bffad5af2e4a858d2394e95ce961da21605477eda0c208fc05f448d2befbee5bfe2f00f57fef9c4348113d0a9d8054905bd79852355ff6b297159224d8a6da284bfdd4b31242413f22545f5e5ead5115c2830f3eb8db669b6d0ae1a470782f1ac22285143143b205ea540d2415464820ccd804c1409caa9aa45e4f7ce2134b5d9171017b4ddda4fc08b8952798efd711f1a1d8284f193568a7cca99f7652bf102f6a2215999aac3e8890977d53fb102be403f9a724b9275cd4b51eec4225831bc2238847f01c303ff5d4538b2aa6bd888f36f0376404297edef39eb7208517a97feb5bdf5a30611fd8f13d077b6b277f78cb5bde526ce15f76f141e8f9967443fe09e74a5a910bdf6b0b1c61c08f11949a5acd87914f0409b186191cd80369458af80f12f8e217bfb8f8b7f21150783b2877fcc8e635880c126322c3e64e262010612aa1efdc4379c8bbbea60f50574d5a20fceccabec82e1b79ef2ab2886c226acad25e3ea77cb643c4d8583fd33ed8225deacf968834dc113b241e29a7d8c28bc25ad782d6f455fd56df50170a381b988c515f76765fb6d50ea4172e70af2a3bbf47085d070fcaf69e7bee59fc9f9df54fa4d839eea95efa8d3ae9d748a8dff5236da89b63c18a5d3c7bf8555246271e1b7246100802f31b8110c2d1d93f8470c85887104e0cf04484505026d812b852009c0f5733f8881b554610296816ac09f00562488560557a9f00d177c89aeb057175b31ac19cb43cb3ff8238bf5376dc1799a4aeb9bf605af0588fbae90912443d732f41a6e052208ec80a44a95582622a22f5cd062ed40a81b9405d5b1005a4515d04aed408c443ba9f605f9d04fa944507e2e39e4892e01a59418aa40fd65453e7d514d6561df47d9f10529b903fed842752e35a813f2242294318a94f825e41398510f9f41bb5a72a9ef046349ffbdce796ef1d880f0282b0208b757394b68e08b47b48f35526cca45c6a278285486b377c04ebc838d50a6143e2b401c9f31b3bb13562e79eecdf2784eacb3eb0e32b48b8801de1529e362015fe4584a85dda4ca9e26ff031094165626be4862f683ffc10d24a7a95672d20c2881cd5b56cd75c734df1333e207b00296a496b25fe2d21742ef2859cb09536f81b41a6c0f113840a8e48aa7a237354dfbae692a28a0052a4a9e0cee59fec5dd34f91b9aab22284265910473e2e0d1789d307f830fb2a0b7983a532f5317dd6efee055b9323fc8c7ae99cbac6517de0c926b59fbee0052f281336daa44f9b0ce003eccb0f28e40864255c7c1c415307f6e6a76f78c31b8aaf9b40e25ffc110e4819bb6b1375155ece637b07655bdf631bfd8abd113de9cafccc47fdf99b80c573081eca96a68b109ad0311151d71ad6f5b5d4441319da1a8570e2f12167048120307f1108211c9ded4308878c7508e1c4004f86100aeca903827187409b22f78e77bca304643555507a602584c89205d39f140000200049444154597f844ef02648944ed86e06c13e02d94a08a593094c2b1111702382ce1128533faa42289815fc5110049b0247e40521a4dc08821154aa2172e3ffeeadaecaedbf56435d2884027c8410f9d536ca22e54c1d112981a5943541b940954a2220b56e4bfdb4b11e0808b2d9bfd7588410ceeaa61c3820687017e05241e123c8a5ba2147ee854c203fec4879418804ccca4092d80a61a875a4bab60a61ada3f6212435d517d912f8bbb77b2059526e9da34db0917a4a411358539128c5d433a41399a110feec673f2b7591aae7504f645219027cc4402a22cc05f8ea8b84c01811625398289f2a4ac184017caaf26b7242bdfdcb3f101776a924470a24c2a7ad883162c68ebe675fa4954a5c09a13aa8a38905c48c9f5585909f68a33455844bfa213cd909d1ac8490ff23cf52a86144656e0faa1e6c913c6a1baca42b2396ae43e8911a93235521ac84b0aecdac7e85fcf1157d4f3f810f555a9fe3fbda8810befded6f2f3694aaca0ff8477b2064483e320f0fed5236c28dd8f2016b2df547fd48dfaefd1989839336b82f3f848503069e15f04502a98826806052d7c6f69f547c5cbd299dfa99c922e9e3262b60a47ed29f29c4fa3f9f31d9a3ef6b2702a98dea5737b7e1afea174238f1b8903382401008022184a3f38110c221639d4d65260678b28450902770af875433019bd97f01bf942e64a112428a0fe22398a3d008ea37df7cf3a2a051b6049d82d54a081112e750209017e98488247588aae37e025081bc3abb9e1a22c8af64879a27c815f4b986f22018773e02a57ed62c51369029f5a9ef96ab84b02a84c8afeb9016c13f62e07e1417ed15005351d40369413eb5adaecf8393145b0aa23a0dda65b4a68c2270ea5615c24a08111c44035940ba28834808b2863c4e96100aa405e0daa2bd142f41b2f6211ddb6ebb6db103420f731f445b8ae1d5575f5dc890e05dfd284c8831550951e1174846dd0915a9860b351689a3e02132756d259f10ac5373286d5218f9159282103af8053faa44180180415508111e78aa23db2003ea88c0da20465aa23211266d44fceaeb235a424821e427081e9fe42f5555b476523da517223a880bbfa98450eaa98f6bb599faa60c640416d61fc205f6c8a86bdb83924659543f75e7ef2659b48d3fc30c29e4178308215258d7b4aab3766b1b028418f1c396106a1bd2883cb19dfa48d9a402aa37fb2084eec97648bdf455930cd284a544aba73a6ab7be230db5fab5be890423d17c56f9881782669245fbf89973a87fd65e2a8b92c88ff994baa80722df27849e0d26003c4f3c23d805e9e75f9444cf09eda63e5a83c927b4cf04019fd307dd1f3136499494d189c7869c110482c0fc4620847074f60f211c32d6ed6b27fe78ddcf4ba0db3fa805669aeb260a43aed28c2b7e7109a1a00c61405accfa0bec04c72d21149c224a0275844ee04a1912f82118c8896091ca822008ea287dca116c5203281482470f262a412584023c41b740d7ef36fa90da2818a788a91f52e71cd7502904a51405844360c8eed6ae494d156c0aec5b4228e0468810360441802d3555ca9d72a9290e841099120457b2e59e14339f367076fe2085703c42880c4a5fd44e0a191594c224609f8c425809a1e01969adca21db6b7b255c48a17e2038a7ccb085a0db3d1069040fa9603b380bc495e73ca986360fa1e2b584905d100ea4aab65df9faa2dff8509f1022ddc814328fc020d608704b08d51d41461a110a64802f3a47fda88408e6640821b5573bab42c94ff91a850c791844084d3e207fc80bb5ca6401dbf07f4aa189006d800942889cb487758d0821e222c596cf235d5435eb3d1131fd8abf4a73d43f5a85b02584ca456ea9e0fc18167cae2584144f36e5df76eba4de23cc7c81df224bda595540f5e7cbd4bcba9b2eb2482dd75f4d00990ca9e9d0fab4bea45c8a270c903feaabfe481d84119c3d97f9bb3e031f36726fd900eaa19dc87eab1052c7d985bd4d0e209bea28d5569ddcdb4480345d84d07343bbaa4aac2dd6307a268510ceb86128150a02416006221042383aa384100e196b810755e4a24baee8bef0f9cf2cd8f0a3bdad40c4ee73027ca977f3ed585c4268e69fba23a817280aa0fddd1242844ac0277017000b0ceb3bca9c8f085036280e8237c1a90790eb90141b47501705ba024ac4a41242844ee0e87c848c9d1101ea87609a3d2b31718d4055c04d3d94de293846949052c12562293daf2584752d1335423ba46d0a64a99952e6d4dff7d437e55a0f85d4d68d4990289ff67d7d532584827a845ae02d10f72f7241f542c690e6c9a48caa33d28088d5f57cea490db236525a207b0a9c05fa30443c9115b612e0237b482582a60cca11fb09f205d9ecef9c366594dda583ba47b59db5646c87d48e4508114065228454cc3e2144ead9dc9a3a4a1e5bb817b28070d6d7418c4708f9963650a3acf3ab2994f55507aead9bcaf41542a4a32a65d4637e80b421a5c857258408114248416b0ffee27afe8a4021da3047fafd8d9c5755ccf7ea371e21ac6da11ef34d766c0921b20b333ecf0f903c7d513fd04e75d7e7d84eff4086f50929a270b156146143c04c0c48c744f46bcaa8e7a8fab91621759db451f5423c3d23f80ddb9b10b179141f663375aa9338fa105bd674e09a328a103a60036fc415e1a4a6d6b464931b5467aab1890d590aeaa77dfa321f749fa48cceb7512eed0d024160711008215c1cd416ef9a10c2c5c36dd257b584f0fcf3ce2801b4e0a01e02bf4a08cd3087102efc1e424119154830de4f19a50a21190240695c488a60b82584758d133b0898a984026144c00cbed44801b3008e3240b1433c902a013435110113840afa059af5b513889173058308211585a282f821759439a96bf5dd7dec2e48f5bbdd2305869485bad325df705d4b0805c475530d75905e88f050eb5efef29717c22aa88683c055fd04d2f5d07e9fc96c2a33964228451421ac9bb4c0d8dfda813008a027430805ce6c46ddacef0f54cf5a474484422a1510d9731f580bbedd0749a7be2184c8c1c31ef6b0b2d108128994f2019bf220329510f21bb82053caacb613a4fbbb6e2ad32a84fa243b21d98807db2216ca6d3795a100bb37224b9d523e5b51bfec8ec91608ce7884b0ae215416e267d2a1d6112e7c8b0ff53795a1e621843e7c8082cb074c484883747f1312ec26851121ac84a6fa065592df238f08a173113f699f7c0a51d5ffe0a1ff50a3c722840896f260e17926ed54b97d85b06e420327fd910a2775951d29fc2650d8dbf714717e854852a2eb8bedd58fea2fdd599fac7dbcbebb92a2ae3d525629f6fc458a28020793faaa0a76116ce88bd24c1147cf1af7919aaaeff51542d8f161eaaf7e56539dd591bd4d602084d62b9ae4e3937517547d900fcb1408219cf4109a1383401098c70884108ecef8218443c6ba4d19fddd6f7e5c826733e8ed61f3058196a087ea34df8ea92a84cea734082405ed023f0128250cc14208057f9428584bff836b4ddd42a604f252bb6a7a9aa05f408e8c3857d068461f699456464512b00a14dbb578fe1680bb5ef06e1d976b9c8ff009081143c4513d048775dd158593c2644b7be70be605ba95104aff13940acaa5e751ca9029ebe804c2fe4642a84bc816c54300dea606b6756dfd6ab29bca206508a180ddbda871d45201b6b2ed843a1942a88ec82cf25d5f17d0d64759943658236788146c7ca83a366c4142eb9a4084503a2e950919b2010f95903ae7d31242b848b96d37db716f3e545f53229510794062d84fd04f1dd47fedac2af8afbb8caa1f9bb12f126b2200d9e22f7cd38483b570d207a5b13ac65a43580921950e494028da034163d3b108a1f44e64551b11244416c1a154f17f78fac0035e953c693bf28cf048bd4470905dbecc4e0e38b23f9bd53e8668b2137ff4511e5f3239c077d90b79a7f6b1697f0da176d68914fd11d6f0b2810f5285b8da9557b9f0f34cd407dc5f1f822ba26a12c5aead94e376c324f7bce28a2b8acf52fc914b04ada622f355132f95747bf65685914feb63fa5b7d9d0982d85708f563e5521529947c1079ade40f59a7a4f351b8f7eb07b710c2f936caa5bd4120082c0e0221848b83dae25d1342b878b84dfaaa765399b5d65cb1043cad42580b12240952c60ae0277dc35978e26408a180ce0c3c02229815a45177a46f214e360411300a4a913d6a86c05da06c0d9480de661170a67e08ee114a6967d40a81bd8f60b655d304d8026aea9c00532a9c40b61ec81d6220ad504089180a5ea96dbe1330220f8886405d604ff510840a6e954d15b1d32592a7fe7638956aa65d144af8d435724807c547f0ef1c6a0cb2451daa016d5508293bee0397b6ceeade278402f7f63d84888c60d97795106a0b8515e1461694491145d6a4f44d669751d86b6f5508d55139ee55d361a5e50adca515c21021710d628dfc2129826d3647281071132acaa984b0a6eafa3fec905084b0ed5fb081357fa1ce4bff83159f11b423037cc8a4019bf2191f76e15ffc07eed6ca212f5575a400f14de98d2619d86c22426872804d4d6ad4435df916f2d127845263ad21ac8450db2967d4637e403195e249f5b21e1061adafc250ae7390c1aa6a5bdb46dda3b623842645b403f9e7cb2603f84825843699a1bcb9af01db7db4d9dfeecd565437441c8182130c91353869270268c2461a35a5531bb5150efa083285bcd583afe8335521543632db57e0604d55a59c2a97fd5d63f3290aa10906feefd92c23c0730126ea4b49761ff5f03d4cea7b0811efda8f3c0ffc863c4a79e60f08b8671342482134c18324d60920ed5057932a2184b370a04a958340101839022184a3833c8470c858b78470ddb557293b0de65818814a08290f769034f32f40159cd717d30b5e055c823c4121550159b1fe4ed025604512a5bd210d02f94a08290a82406b7a0467144244ccdf084d5d37456da402b6e4a91242f7b7f6c85ab44a18059188888057c04931d0064166dd0115c1ab0a9a401571aa6ba3a82a521a7d8f940826d55fb08ff0a8bfd45564090e82540a99c05aa02e40155c2384c89472902475aa3b553a57bb6b9a5c455e400c3f84456a9b8096ea229556108e28c3545d5a42a8adae13680ba0a5dc52835a42489d129023c2ed6b27106e75a4c6a953ad2362806c5249eb7b08112cd8537c612a7d970a4cd515704bd5d3d636d8a63e2180356554a0ee6fbe82ecb14b3de086946a1f2ca9aaeaed3081c00fd9d9040ee51131833d7b0af4911e81bd1457f580433ddc4f2a26ac04fedaaadd5e92ce1efcb17ded84fff34944b87d0d03bbeb03144aa4135941323d53d4bba68c56a2622d1c1fa9240f5efc866ff27113089588237bdac257102f2a1c02ac1ece4708f9a7effc9f1ff2954a08ab5dea4eabee0923be041b1319c89f358a7c4ddba979ca921e4b89b79e8ecf5bdf4b59a4f29a5cb0418ebee6df56edae84105e882fc2cb6ff457bfa9b3fae97bc8ab6705d28c74aa1fff5317a4906d60c2aff8b932d81d71f5ec6153e5504d4de4f8bf8980da8fd4d904151cb5d78403db98a0a8ef885417bedebe989e022c55562681c39ae1f998159231300804812030190442082783d29239278470c9e0386629790fe1c4002384822e698f822941ada05b305cd32fbd605a808e3c08727d4f85a82f8c166409ae04e8540e640079431c04dace17fc2a53a04b594306a52622410255c48342d81242f7a290208b142bf7af2a93fad8a842ba186287100a802bf1a8ef1b139052ff28148250a4c0fdb5b906af026181ae5d21115b4457fd05f1da2280ad9b9c504504949554b92f250d61a1446aa343904cd5440cfa4457608c54d4b43b01bf144229838279f715f0223dc89d34550a9b360b9cd98a2a84b4b62fa6a7f650db28a948a6c05e3d2883ae41d804c8c84e2584d66c213bf05127ed6633bfb315b24bc993d6084bca9c0d53d4b125840824fbfbecbdf7de05379821d9ae73df6a3b0448b9b093dee75f4a9ef37cb4559dac53e40f945f656987757eeeaf7e7c4d5bf9513d101ee7230b944a3e082be490edf95225847cc4640342045bf7aa7594228b68223f70741fe4d48408526c8751a996d5b66c8a246aaf7bc200c1ac8a958903bee93ced3531a14c040899a3fc3a47fd60a11efa06df82337f4072102b131870a8eb62f933d2cd6e70d72ed751739d83882a971ff1014450fbdc43dfadef519422ca5f1160fff61542a45f3d3d0ff83a3faae99fea667282ed90577db9122fcf617d8bc2ab7eea8ed49ad4d0d7b40fa1767f0aa572ddc72489ba22a614c9ea0f6c80489b589266ca379145e752974d08785ea8639d40f2affe62e2810acb7f640684104e3c46e48c201004e627022184a3b37b08e190b10e219c18e0ba89875977e95d023933e98263c1ab404d90250873206566f5a90c027b6a8f943b9b49385750e65a8121c542707ae9a5972e78dd83c01189733df2840409d89150a96a6d5aa1fb23018891a0b94df7751e72869821491e5c024641a0433ddcdb1a23f71464ba8f40515ba4a4b927620b0381bb72903fe7523f100004cdefc823e2a0edbe1748d60d3f90242a946beb0ea3ea0a474a0922d0b6cb39d2066d04826cf80d5945aaaaf289e408d69174ea4d4dad738e73e1a15c382338ca6407840c0116ccd7dd4df503f6d17ed7d73afa176981816bd549fb04e695d44a09b5518b7ab237eca84b02f996bc23726ce9537d433df904dbd47b2a97dda937260aa847d2521d6ca76c04c5fdea0e91944b64973fb8273f419afcaeadf59516ca80bbb6228bb04126e0a80dee0bd7ba6e0d2161373e82ecb475e4e76ca71c38b239a2c4c6260d28707eaf3eeb5a6de75f30a57ec1cbf9fc0ab9e327ee4dcd520f58fb3ffb48454666dbfad51d7a4d8c2075eaa46dca81b76b912bf6e2e3f53d8aecc89fb5cf810c99f4f0af7afbe8ebb0e427faa94909d821597c5bfd11e8f6d016f594b2aa7fb57ee45ced42f8f47718504fab1fe93feacd7ff88e36b33dffe207fa9b759655c5d337e0ac3fb0351fd5d7b5c17dd913aeee6952c3f7eaef9aaa98f69f17fc0a566cc497a4c0b76b0c277e5ae68c20100482c0fc4120847074b60e211c32d621849303b82a0d023ec1575ff9112c0ba01c825084a9aa2cbef39b7304aef5107c0b60057b1e2a9588f8be5517fceeba4a2edb1a0bfcd4c9b53500ad41680d14ab92a90dcaa88a80f394ed5aed11fcaa636d8b4050fd5ce35abe52efa1ecdac64a7a04e00276f7d3f67a9f8a5d25142da9700fe5b778d6f66997e0b89293baa3a4df9d0f23f7748ebfeb79eea75d75931cf5a97571be3599ead7daa7d61116fe1e54c7ba5990f2aaca5989b53ac0a16e0ca47eed3935e8572f9f8a4fb52dff68efa9be086eeb777e577ec5b7259bfc4759ce619b5a97ea03fd359adae9fc5a165cd8c7f9ec51c9b97ad573db3ad67b20467cc2ffb5890d5a9ff47bb50b0c6a7b6b1fa9f55206c20dc75a87564d8603fbabc3a0faf9bd6ec0a21dd58eca620b75f36f55ebf806cc2a215267a419eeae570f75adf8a98beb9de73ae729b38fabdfd5d3f56dd9f5b9e0d9c1e7ab5fb7ea5b7d46f8975dea644af57bf7432a61c75efa63dd004c7de0d2fa9c7668837bb6df6bbbdf063d2f605853c0ddbfcd3898dc9332670581201004e60f022184a3b37508e190b16e09e1edd6bb4d4947ca3118819668f54959ff8a419befb4017f3dbf9ee7b71accf77fab64625099f5dc4165b7e58c55f75ab67f6bb0dcbf5f5bc789da39158c06b5b35ffe44ed1a0f9b3e9e7dacfa784ef75e6ddd27b2555f0d1de4718b83fb78e50cf2d941f5982a2ee3d97cbc7e30e83e6d59635d3b56fda68257ebf783fae2587da0df5fc67a568ee54bfd3a8ed796b68ceacbe3f9cd44b84cf4cc9aecf322e343100802412008fc3f04420847e709218443c6ba7dedc4bf6ffc4b5957d50f44cc8c4b4fb3a6c6ec718e2010048240100802412008048120309f1108211c9df54308878c754b082fbbe40b65a7bd9afa586f6d8d988d21aca3b1462847100802412008048120100482401098cf0884108ecefa218443c6ba2584677dee93655382fe7b08adadb16ba11de86cd090230804812010048240100802412008cc670442084767fd10c22163dd12c21ffff0eaf20eac7ecaa88d0fec525777f11b7295527c100802412008048120100482401098d10884108ece3c218443c6badd5466d595972aef366b0fe4b0eea867fd607f57bd21572fc507812010048240100802412008048119874008e1e84c12423864ac5b42b8de3aab76871e7ae890ef98e28340100802412008048120100482c0ec4620847074f60b211c32d6790fe190014ef141200804812010048240100802730e8110c2d199348470c85887100e19e0141f04824010080241200804812030e71008211c9d494308878c7508e190014ef141200804812010048240100802730e8110c2d199348470c85887100e19e0141f04824010080241200804812030e71008211c9d494308878c7536951932c0293e08048120100482401008024160ce211042383a9386100e19ebf63d84ffbde5efdd6ebbedb6c81d975b6eb9cecbe9d759679d6ef9e5971f728d527c100802412008048120100482401098d90884108ece3e218443c6ba2584e79e7d5ab7f1c61b9717d32fb5d4520bee8c0c6ebdf5d6ddf6db6fdfadbffefa43ae518a0f0241200804812010048240100802331b8110c2d1d9278470c8582384e79e7b6e77d12557749f3cf9a385f0dd72cb2d0bdd9532b8c30e3b743befbc7377c73bde71c8354af141200804812010048240100802416066231042383afb84100e19eb5621fcfd6f7f52485f9f10aeb8e28add061b6cd06db2c926dd2aabac32e41aa5f8201004824010080241200804812030b31108211c9d7d4208878c75bba9cc6aab2cdd1d74d0418b10c2a5975ebaac1d5c6185153a7fe7080241200804812010048240100802f3198110c2d1593f8470c858b78470ddb557e90e3becb0b28670d0d1ae2b1c72b5527c100802412008048120100482401098b10884108ece34218443c67a10211cf22d537c100802412008048120100482401098d50884108ece7c218443c63a2fa61f32c0293e08048120100482401008024160ce211042383a9386100e19eb10c221039ce283401008024120080481201004e61c022184a3336908e190b1eea78c1e72c82103ef68fd60d6100ed918293e0804812010048240100802416056201042383a3385100e19ebfe2ea3fbedb7df2277b4b3e84a2badd4adbcf2cadd32cb2c33e41aa5f8201004824010080241200804812030b31108211c9d7d4208878c75fb1ec2abafbaacdb7aebadbb9b6fbe79a1bbaebaeaaadd165b6cd1ddfffef7efd65c73cd21d728c5078120100482401008024120080481998d4008e1e8ec13423864ac11c273cf3db7bbe8922bba638f79775102fbc77aebadd7edb4d34edd1e7becd16db8e18643ae518a0f0241200804812010048240100802331b8110c2d1d9278470c858b70ae10fbe7f65b7edb6db2ef21e42a9a29b6db6595109575f7df521d728c5078120100482401008024120080481998d4008e1e8ec13423864ac5b42b8c2723777fd35845e526f0da1b4d1d5565bad5b76d965875ca3141f04824010080241200804812010046636022184a3b34f08e190b1eebf76e2e0830f5ee88e0861dd611431cc4ea34336488a0f02412008048120100482401098f10884108ece44218443c6baffda89c30e3b6cc8774cf141200804812010048240100802416076231042383afb85100e19ebbc987ec800a7f82010048240100802412008048139874008e1e84c1a423864ac4308870c708a0f02412008048120100482401098730884108ecea4218443c63a29a3430638c507812010048240100802412008cc390442084767d210c22163dd12c2b5d65cb17bc52b5e31f08ecb2cb34ce7934d65866c90141f04824010080241200804812030e31108211c9d894208878c754b086ffce79fba3df7dcb3bbe5965b16baeb72cb2dd7adb3ce3addfaebafdfadb0c20a43ae518a0f0241200804812010048240100802331b8110c2d1d9278470c858b7ef213cfbcc53bbbbdef5aeddadb7debae0ae5e3bb1e69a6b76db6cb34df7f8c73fbe90c21c4120080481201004824010080241603e231042383aeb87100e19eb96107ee6f493bafff99fff598410def6b6b7edb6db6ebbeec94f7e7277bbdbdd6ec8354af141200804812010048240100802416066231042383afb84104e13ebfa62f9b18a6909e1ef7ffb9342fa5c530f7fafb8e28add9def7ce7ee2e77b94bb7ca2aab4cb346b93c0804812010048240100802412008cc6e0442084767bf10c269622dfd73e9a5971eb394760de1faebaed61d72c821d3bc632e0f0241200804812010048240100802731b8110c2d1d93784701a5853f77cc622847eab0ae125975dd5adb3d6cadde1871f3e8d3be6d22030f7109848659f7b2d4e8b824010980a02265eedc03d6817ee9a71931dbaa78268ce5d52088ce77f8bfbdb92aadb5c2827847074560c219c06d613a9831e06fff8c73fbab3cf3ebb0b219c06d0f3f0523bd1fee73fff2901905d68eba4c34d37ddd4dd7cf3cd25cd98fff97f7fd7dae5975fbeec56eb1ae73ac7dff53b7ee9fb7ffdeb5f6542c33dbcf2c47d7c966460a50dfd3a2ebbecb2a5feee79e38d3776fffce73fcb3dd5cfc7f739824010181f81fa8cd0b7db7eab4fe9d7fa9273fafdaf3e53facf08fdceb34379a37c4668a5fba9abe792e7838fc3334e7b8ca3eae7b9519f11aef9f7bfff5d9e1fce5b79e595173ce3e23b331781b1c6b63a56b0e364fcd6397c63d0d8e6fb3a8950c7363e355e36d75411535ff7e183fa94bec33fdd876fd6b1cddf7e5b69a5954a3ff57fd7f25b6d704d1d0fa75a87f9707e08e1e8ac1c42380dac2722848a6e5346d75b67d5eed0430f9dc61d73e97c40c080f1bbdffdaebbe28a2bba55575db5bbcf7deed3dde636b7294dbfe8a28bba1ffce007dde31ef7b8eef7bfff7df9ffaf7ef5ab051b1519fc1ef4a007755b6db555b7faeaab9773bffce52f77ebaebb6ef788473ca2b3819101ec3bdff94e77c619679441cb6074a73bdda9bbf7bdefdddded6e77eb565b6db525420a0577dffdee77bbaf7ce52bdd2f7ef18b524783e5461b6dd46dbffdf66503a52f7ef18bdd25975cd25d7ffdf5dd965b6ed96dbdf5d6dd1def78c7f960e6b431082c3602fad2af7ffdebf28c586fbdf5ba7bdef39e65fdb93ea74ffde52f7fe91efbd8c7763ff9c94f4afffbcd6f7eb360edbae0f4bef7bd6fd9d9da0ed79e11175e786177873bdca17bf0831fdcadb5d65a2560fdf6b7bfdd7de6339f29134748d8061b6c509e459e119e4b4b7ae2e8c73ffe71794e6cb8e186e51e9e837ffdeb5fbbb3ce3aabd411b1dd6cb3cdba473dea51a52ec6d66f7ce31bdd1770c6ead30000200049444154bef08552dffbdffffedda31ffde86e8d35d658a281ff621b29170e44a08e6d089231870ff2e7abafbeba8c67cf7ef6b38b6f5f70c1050b8d6dfc768b2db6287ebbf6da6b773ffde94fbbcf7ffef3656c7be8431f5afee507c6b673cf3db7f401d7184ff8eda69b6e5ac6b625410a1139639bbef6b39ffdac4c56285fdd6c1c688c55077d08f1b37bfc631ef398e2d7b56fa9bb31fc5ef7ba57e9abb7bffded33193ac063420847f72009211c32d62d215c7db565bb830e3a68a15d46dbdbd7992eb34839e62f0202a1ef7def7bdda73ef5a932f0edb8e38e0b5e4772cc31c7745ffad297bac30e3bacfbfef7bf5fce3198d6dd69f990c1516084109e76da69dd71c71d5708dfde7bef5d02410314d5faddef7e77d9c8084914f42186ae7de4231f5982c2e9067c02b8f3ce3bafd4c10069c036706ebcf1c6dd139ef084eebaebaeeb4e38e18405ea065288c83ef1894f2c01678e20304a047ef8c31f96197b6443b03a5dff1f66ddd5f35bdffa56e95b5e65e49545faac7ef6ce77beb3fbe52f7f59d6ab5f7cf1c5dd29a79c52081de2e81024234f0254e449191ff9c847ba4d36d9a4db7df7dd4bf0ec798088d56784b23d37946362e9610f7b58b9df9208ae057c881d52ea6f1baf217d9e1f679e796699d04256915d24e0e10f7f7869ef8f7ef4a3eed39ffe74b9061936d67aae7886b05f8e9989401db790b3a73ef5a985b0b1ed673ffbd9eed8638fed3ef8c10f167268dcd20791a9aac0f14d7eebbdcd7cc378c8aff7d9679fe2d3fcf69c73ce296538c76fbe331159c736df4fd76ff5b3f3cf3fbfbbf4d24b4bddfddfe4857b18bfb4f1939ffc6421797c535f3569e33793b026637ffef39f973ef4873ffca1f8ac495ee478263f77fe2f3c2a847074a887100e19eb7697d19ffef83b6520eba7f8d52a08e01ff080079419a69a3233e4eaa5f819880042680039fef8e3cb80b6ebaebb9681c5f1b6b7bdad0c786f7ffbdbbbabaebaaa0c8a66cda9820e83891976a40b517cdffbde57cea7303ee739cf2903b0c00e91fcc0073e50be4316cdda1a84058b7cd4c026f89bce61e03bfdf4d30b29146c9add35101b0405b11ffff8c74b206876d4202db853cf3df7dcb3cca4d6031e7ffce31f4bda98c1dd0061e0848d4198aae0ffaed1b7fef4a73f2d48333350bb9fbe4525f9f39fff5c144a016606dee95877ee5dfb9ef7bca7f8d7339ff9cc12a4ce64ffe0e75ffffad7cb3342a0f9f4a73fbd4c1e2151af7ad5ab8a32f8d6b7beb5f43dc1e7031ff8c0ee7ef7bb5f319a4919edd327f52deda666e8237becb14721557038f5d453bba38f3eba3c238c49bffded6fcb33c7c491738c55d2fba67b08884d507dee739f2bf5d96bafbdca6b98f4ed37bce10d45513129e6d9843068271b795e5107b7dd76db32a9e57acf49cf0f24a206fdae57968fefb4c3b3c3041585c64494ebeb33c14495c3b3e2861b6e289366da8c64c3d7e49b6b3371bb789667377e6b32a2fa161b99b830bef157befdb18f7dac4c4e207a755903fbf25bbe60b282cae6b7e73def796522817d8c23c8a471c5d8c89e975f7e79f17b639bc98ce9faadfaea0b7cc9e4255fd1d7b4c9a40a5fa40ed667c9473ffad1327e3ded694f2b6313e57df3cd372fedd35e63ed739ffbdce26bd5aff405639db1597bdd4b1f85019fd56fdcdbf82d5ed44e63bef1dd18a8cf22a3c63dfd99cffb286b361d2184a3b35608e190b1ae6b082fbef4cace8be905aded8be9ddbeaee332d078404adb996e303ee466a5f821225009a14144a0f28c673ca30421063e83a034152a8074310191d945415125840625c4ca6cfafbdffffe32a8d494cc17bef085c5dfa80208d92b5ff9cae2930611e93ad4c77bdce31e85840abc5a52667243597dff35d01a980c3eedccab81cf7da4ac21ac66f60dc43e06b057bce215e56f3e2f4035db4ba579d6b39e55526fea610696d261d6d5df065f04506020c893bae3fec8aeb64b4135080a0ef43f64d3206a46562a12c26ca05ed2696f437489143d0204902a044050aa0fcc064248d993aa863099f8e0f36f7ce31b0b79316984680954abea06467dd4f3417029ddcda4917e62d245caf66ebbed56d0a67078461c71c411050ffddf33829227d56fe79d772e0166c5a96ea2e659d33ff477cf87fe33c279faf057bffad51224ebdb9e0752ca05b5544ecf084415097bcb5bde52027b841469f08c7bf9cb5f5efaf2873ffce13239b4efbefb164c6a60cda626d8bef6b5af95e7469d403229e53921d0f67c901941b5f20cd406587a5e20159e85525ad555d926ccea337904ae39e95b783eaa3b7bb2b1cf74d5b049df7c92272284fc96cd8c6d1479f53656989ca014b215ffe3077c928f6907fbf05b64889f3bf830db2162c80e4268c2134934ee18db2879c8235b7af6b7b6e3b7ce61dbf69560cae66b7c565d5b1c9d577dc478c80fddd739c64efdc6a4ccf39ffffc3261636c534fedd1cf2ebbecb2d2cf4c9222c7c8658dfd4c3e384cfa18f328f5fab6a521eac2ffdcdb3d61615c3501628c34c1c1ef8d75263eb5d37da5cf7ab519757fb64d8686104eb2632d81d34208970088e31551d3f32ebae48aeea22f9f5b1e00fd80ba5e6f707dca539e52d652cdb6599c21c338af8aaf84d06c385f9122232031d81868a493beeb5defeaaebcf2ca325848033528d4b41a0381e0c9006870b546c1c0628079c94b5eb2408d3323fbe637bfb9cc54ba56b94828556dbffdf62b2a631d040dd8d6f128c7ec687b18c0904ae7b7b3e65521540fc1178542bd1032ed7ac10b5e50beb366c480e6ded2c376d86187126cd64360268010a8d5d431c1a2c1d0ff0d760647e938063cb3c3066383a1fe6700f6b7e0c8e022201104239451e2e755d71ab7b1fa99a050ba19c233d30921759dca6fd2a8ae19d6373ff4a10f95001b21941de01920055370ac4dfaab20dc7863424920eb19e279823051e84ca2500805e5543a4a86e792feaf7ccf05244dbfae9b40b9a7344efdab1f582375fa9ba0b43fd9e97923d8558f6baeb9a6905b4a8ebeea3967c20701a484200deaaebe9e2beef3ea57bfba8c979e118262a9f19e2b35b0a69cc0c0b3d373d273e9da6baf2de508b43d1fd49d2aa98eca411405f2d419e4daf3cd3d101141b971dac4ed4cdb000b696747cf43f547e4675a2c413933b679ae9bf8f3ec371ef04593026c85ecb3178c1ff290872c18db8c1dfc1661e487ec49fdd346fee877592954b717bff8c58528f211a488dacdd79c0797d66ffd0eb77e6c26f5d8b846b91b84a336c0fa9bdffc66c976d11f9ef4a4279571595ba894144e8aa1b1467d903f930b2632f4077dccefd443cfa0aa5eeacb265ff43f31a1b1d56486494fe3a867157bc3470600bcac9fa480f25bf55277e59968717f7e6b326336a9db2184a31ba34308878c35a95e5a1f85f0ef37fcbedb65975d16192c6b153c7c0c4806e39936d00c19a614df20600013541d75d451255032b0d7c5f0060883da91471e5906b0934e3aa99045339f823da4c78caa594403a04141706510324b8e7c090c055f279f7c72f7a637bda91046019e41433024e8b32643d055fdd0c0675653c0e5eff6503703b781af06617e779e7516fc5fc0257045e204a7144103b601d02cb1c0ccc02880557fb3acf510c0bde31def58905eaa9f28577dcdb21adc048a06ca17bde845053733a85453ff2a134608a341d13908a17596596b94ae5711a8698a489689bbd940081126638c491d819f7ea66f9800d167a883279e78e2828d5af473fd44d0e81aca05722450a4a20838f5477d99cae219f1fad7bfbe04a40e7d4e304f81d0476ba0ea3701ac40bd12b5d6b3f47b41abf307a5eb51f11050d77b5ee9ab9e1f026bca1fd2808839cfef0262f5d3160aa67e2d20d676f51224d7be4d01f49b67a54ddd60804ca887ac02cf08f7f59c5547f6f78c458c05ddaf79cd6bca334999caf21cf56c415cdbe7dd4ce84908ab673b42458db22e6dbae9914bba5d488bcc1524ccb8c586c63ce3195f6473f6e09bec6e2cd317a9740895f18aaaa68de2299932c6cb9d76daa9fc8e10fa185f8c350e1383ec6a6c9381c2969514b1b5f1919ade2ee75127e3a9bec02f06e1c83f64ecf8280719744f131bfa8deb8d75fa95efa5591b0fd989fa4d994606f93ebf3619cacf1dca73ae2c1e6a27b28b64520129fe7c1e4ef0d35f8cddfaa572d5cb64af891c98983485173fe6b7c6ecd97284108ece52218443c6da83c8030e21cc8be9870cf61c29be25840210c1a9073872661655005809a180cd044255f99c67e0a19c1948043f061a03a141cb8cacd41433a89ff8c427162284661ba9740647b3a88863258475673483767d1d06b8d5d540699036b8b7b3a88253f735836bc6d24c3ce5ceecbde0dbccbe1954a97ac8a240465fa1f2d5b435f74008b5d7f5d659080cd4d32cab145a83b8a05160f0bad7bdaefc662016181a3c29860821222880130c4be51118cca681718eb8f78c6dc66c2484fa85fe517719d517ac07449810427f2342b20604d69e07c899091c6b8cf441fd548089e8208570d027f547cf8896107a46e86bfab5d43b8172edf3ca11084bffaccb20ea33429ff58c528741240ad1332124c0a506fa681772290816bcebcb880112e079e1196622c9bb7d05c7321e1060fd9a0ad21242bf994cd31e0450ea2935e8c0030f2cc1b2e7a87a79f6c08b72e3b7bac90d3c04fbd442655098d4a3eefe3c539cda7851332dd459a6c54cdba0ab124258f2894a083dbfa9c148103fa0d4234cc6157e8b28797653eb8c6d7c11b941829039137c263c5dcf775b4268cc529eb10d26c6c84a08fd26fb85efb70a611ddbdc5f3d07f92ddf31265b16a11c4abd7a58fae07efc523d1140a40db95457840d71337163c292ff21f0c6ea96103af7bdef7d6f49a58585bea78f1d70c001c5bfb5939a0d077ea92f7a26c8a03186eb07fcc0ff4d0cf16b7edb2e079929be3b563d42084767a110c22163dd12c2bc987ec860cf91e26bca6825320639038741511a985970c19e01541aa581c6a71e062133ad66c3fd6d96d080609015c01d7cf0c125d0326bde2a8452abcc325215112624af124203a541cda7bf299281152915a4f5956de7d6f79a9925a52e9819b6de83826900ad0aa141514057496b6d8fc0d0a0289043f29038831b42080f33a98238eb9bcce69b3d16281af89048e5d6543883ba4197228274ceb4806e8eb8f0ac6cc66c238466fc3d23ee7ef7bb1775a46e2af3dad7beb62812369511509a08d26fb4cf51d763e93f8252cf1b9334fa7f5511f6df7fff42263d235a42a8ffebc38887c919a9b535ed5a397e37f9d34f1915a8ea939e1183d2b4fb84905282007a3e79f6e9b32693901d69709e639e678267e440993621a96d45785b42886c5a5bec1cc1b82c0204d69aeaaa4eaab31444cf0b84cf6fc6efba1917fc04df9e35eae0b985cccca4835d3cff8c0b8800bf986984b0ee20ea396e6c93ba6b9c80bb093e13006c4be5537f44a98e2bfee55f26f75cc36fad9744f691792450160bf5b82584481955920fb127ff69df7549f9865d3f65d4d8c66ff5ad41595beaa0ec76c75b7d0d294516b5af4eb4f213cab23ab40aa11459f53509a2ad951052c8f541ca267f35c6d6b4506de3df75b752e33ffcf8a3b595da833422a02632d485df2295fcc284d16c3942084767a910c22163ddbe76228470c860cf91e2fbbb8c1ac0287e8ebacb6825844890d97d9ff63050d8780621aa2f9b36481820104584d12b1f0c1e889f20d1cc2d4288c0bdf4a52f5d68a745aaa481cb20edef7aa8ab01d38044edeba7d5b44a81fbd7c00c2194b6252dd5a0695d88ff5b4368001308b484d00ca9404e104ae130306a033c0ccaca1504d961514024f0a460683f75c0402905cc200a2b83afb24208e748a75902cd988d84b0ee324af51030f677194508f50bfd4dfa603daa92482943044d94e8f7025581b50d9fa835cab786493f152c5327f45341abb57a54c69a5aebdeeee7b9d2575a04a0825deac9a03ed727846c813850ff4cdcd45d46915ca415e113e45265a89c0277ea09d227dd5d6a6a557404fa9e018882e78689a5ba9e0ce913704a398709424869a164221d9e759e139e49f0839532b43b8470f13add78bb8cb26f2584fef50c373950d7b2b39131cf24005b588f8aa8f15b3e61ed3bd26e3ca884d01884842155cae11fedfa78364628f94f3ffbc5d886c49990e86793b4639b71467d95230dd9c4857ec47790494a9ec908d93efcd2840d059a62c7df10487db85d435809215f35216a62c4b9947ced44f4a59b9a608591df8c8d5245f50de59b0c36de193b114665185b430817cf77e7fa55218443b67008e190019e83c5b70a617dedc458845090e3812f60690fa99352690ca875c74424517a8b604b40476513105218044d023d29a1d433835a3bb36c2096e2a3ccbe4288709ae535fbd8cefed7d95383b641d0004e5d909e837052379c6373190118726aa6d57a09a92ee3114283ab722a2114f0219363114203a50016218415021b4238073bcf349a345b09a17436b3fe95100a96a9fc55214408a58f55851044025f6a0c828770d5745241a3805b1f41b23c23a87452523d23aceb927667030c932afa553d90406b9ef5e1fee119602d9567c4a00d2d90322a495d436872c9265736de501793629e479e570262f716f89bc4d25e1340da4355a48c4891adcfa2e912428a8f3a20b4caa7b484102e7e47ab8490efc01696fc91ef799e235648bf0948e9bf70af87f34c0eca8e31c9c1f71142d75087117ad92008980dd4a4981a778c6d52998d957cb79d943006511da579f62732f8adb197efb67e4b5d3689c1278d7f76a345024d52ea4fc8a73e65c2c1f508aa3a21adc642e9a9faa4f57dda63dcad9b21d54d97fa84d07a4aa40f7e9321842f7bd9cbca444e08e1e2fbea7cbb3284708a16afa930fe9dcc76ce2184530438a72f58604fad43080d7c062407d26416de3a0183a280cd006333228720c8df82406aa040aa6eb18d3c9a0535180af0a88cd65220878226a999065084d002f6364586bf4bcd3448f5d3c1f40383a24fbb1107df37c81b240dfefe2fc833080a0410386db4839fdfedd466dd224228b8ad87195c9b6798f5348852fb2817caf5bd41dcacbdd95944589902446d972aeb37d748834508cdf46ba3f79545214c87ab08cc364228c0d59f29fc267eccfaeb9f3200a483ea1b52cef4072a0592e4d04f3d4fec8a68b24820ea5a7df7820b2e28c1b320d68e89b20c281dfa89a0575fd47f1124cf887efaa7fb7b8ef48fb19e11ced347f55d1356c8a46700f54d1d2823d62b2288ee65bd956717a240c13431e459a17dc82d1bfe7fecdd07b475557536e0f327b6dfaeb1242631b1a68831093146141531612088014408bd7794264a6fd27bef558a0a080aa880a060100d82d1a8b12426069391829a9898aefee359feef757d9b736e3dfbdcfbdd6fed31eeb8f79eb3f72a73cdf5cef9ceb9f65a9e8527c122ede64823ba1c7319424e383c934542460594e088bec20b4132cb662d19559e00992c114228032ab3a30d6dc9e8dcf14340814e921df24496889eb194dd32c608a18dbf102e7a6b2c1132e45116d8f858f14147e85676dcb542c577828ddefd633f8d3fdbc3b62147eaabf5963d533fbd9dad6da33308a00008022a43c81ed9ac865ec838cbfab135ecafbfe9285da277ec3652a9adda6ee9ab00a58049fcca6caa640e781f11212423f21350251b2b766408cd4765d27b769dad94e1e603d05dffd36b6dd106725959aeb664747223d508e11c659d6502f57281e98aa809e14c9bcac4e9b6fc0168d8667b65da1e788ea26cb78f90003d908943ea003c070cc1718984320808957bbc73672966de97a12fb275a297a2919c2bdf31a8327ca2a8741269e480312a9e412a3978965ae520e66ef3b4ab6b30dd13c7abbb2b23032b23c97105ea8c30a3e61dc16ce99e772018478e9defea9d0b956f2e7012bc2b82c0ea0fe70e8945fa38729c040ea26537e4a65f1c00f58ac6721494cd1996395187f717db2ea3cb771ad23f5924ba30eaddb5baf7732184966021079c3c0ee16c8283e394349d479ee8baf9ce1145da72c0b7ac88b9618b7f0124733e4b28cd018e2772c71195559195307f399730c5a55c78138c700f8cf00cfc183677e68a11ead1563821f367bec208c42cc7e578dfd958e61c3aedf5ee22f97b9f1a11f41d7260e91c225bdb4dce300c402c1140244f993007d124876c8423ab034b94c599873d1c728eb56c0b32097b106832cffb5ee31cdb6e59c64e1fe0275dcb580dab732eef101a2b65d365655b1e3989232a62dbc8ce3893a52c9d80a52590071c70400968c810ea77f4561be9a431b05ba75524caa0b77441f0437ff84d020c2e3a4a176adb167b58cb6fae7a4b1fcd2b414cfa44ff902c36856db344956d8bddd346b6d8bb8b889e60a867cd63d864a9289dd6d7d851fa2973683e22bf083419911fdda407cae02fb267be63e71052b652d014f9a5bbdae87bfac32fa833fb7deaeeb0b2c91a8136b6c63e1be68d6a472384931ba146087b963580e2ccda65f43b0f3f54de85001eb5f32c1303a44c14c0064c80b3a8ef624edc9e45d38a9f8610d21bce2c032daa17a3c8616300382e80d2ffc85ff429874efbcd30d64798707c443419077a45cf181d869633c911a377b5515ac82031f2ea530ff0cfd252468a215737c3ef87e3c5d87334b5a59e1f8ca6772e38bb5996caf1d10fce9f7963c98f3abc1b2222cc092037cff84e1f6545c885916588ba4b5c17d2d7f6ecd29300a2216a4e0fe91c279f4ed0718e537793885184907e7100cd337a675ed269011678ce199bf47996daa43d741d613377cdaf104573dddc102cb27c9483984bbf3de3b739c1910da135a732d7386ac108f7c28c71638436c13acbbfb555bff423cbf4cc5f811e38a28d1c7b735cdb6086b67ad67d3249fadc75f839e0c1072413ee784e5d39149dddf53f87d9bdf0299b9d20d5f00296aad3f8ab832e4d62dc8d1f0291f354b3f436c1887ae6cd4408b51fa1d247f7221732b432558e2498c4aecbec1619921d0c8eef93f62046da48f7dc9b2bc72af96d6c8c49e6b07ee90bfda5dbe68539ebfbae6d1b47f006a6d021b64b5b9133f6960e92219d93313476ee356fd83663e67f7da5b7fa673ce9ad76d66d33978d399c313ee68571f38cfee7dd49739d6e2a934c95653ea85f99e444e77daf9dc18ac5426c6d4164117ef3dc9cf61b0e21bdddf9db08e1e446aa11c29e655d13c2bb3e7673591e07a86a8797f39a48631c0e1130ef4bd44be77a6e6a2b7e094980d1c80beef5524c8606a0226d0c065d726f3277f48aa16058807fedb0b85f99ee778fb27c96e538ea19b783c35033587e6b1347bc269cdac059d50e86c0cf30839da5aa9145fa11a2ecffc8455dfa1407b92b47f599737e96f259734b481d57caa60896c808f91d678d531607240e3507d25c11751754f09e9ce566f496b3c761ce01e5de33e2042610e3fd3aefb32dc64a0ef398ae9bcbb52ec304f3c9dc70cf288ca0fbfa5db71d8e0417268511dac891cfbbc999bbc98499afbef7393b593b8c357ec09651d99fe0837bd2474aad8e2c19f4bf3ebbd76ff8e13b7a4046b031180aa326851f568478f79a13cdc1a7bfd163e458860991a5c7f4571024bb8c5a2ea8adf418b9104c449ce830c2e56ffdb594d2662b5989d2e784af6d1b1906efe9b21f633457bdd55eba905dad33deb16d5d5b388efe692bbd54576c9b7ad21f7ac3ffa343f4b20e4279865efb1dbd1d66f77caf9ee875ec5ede3364f3e824dd8c9d33ef13c40a362c86de8e92b176ca041f7cf0c1853c23b7f41899b624384127e4904ec3af87bff783c1be7b6e57de17b6314fbbfa91402384fdc875aad49a10de78c3550570453beb9797635c3c0424009b653136c8980440f72c82567c9340934093c0c424c009e41089acdb2dd37bab9c2eceb4eca04874324d3287c9a47b97cef239bb6aca5cc86288f0739efd9675e054bb07aeabc70e97328b1cdb61cba927d6e956d1b29440767ff64edc7df7dd57080f271a01e41b70a491433f79cfdc5246f77ae7d1127bfa8af899077e9b17821cd16304c23bd5de55576ed3e365a94a4ba253f41921b40c16b973217d561fc0e6640ce93382882cc2ee473dfe998d104e60041b21ec59c8dd0ca1a887885f376a5b3703413421b2057103e89e07a915df24d024b06c241042282b72ebadb796a552c150d8ca01e68020869c68e4d0322b9b85c06bdbb20bd86559a8e739d0beab77d845026d496fd5c73896a12d9b01681d199b04e8b2ecb4ec207d142c76f95c56881e5bba4a8fb38cd25244cb052dbdf4391228086d89a365b9961ad77a2cfbe4bd37ab92b27c736c1d680535095412a0b7b0d5fbbcdef9acf55036d30a00810e3aedc77e067edef0c64d06fbedb5fde0d0430f6d19c21e35aa11c21e85abe89a10fee5d7bf50de65f1d23a9017a1132d3141fcd4cbfe003d801ff712be9ebbdb8a6f1268126812581212e03ccbec59d6952bef6f733e2cbbe27c2084365eb0d188151a3686b0f48e530da77d96a559f5e61379a74d90af2d3d5e1243be2c1b417fbde3581339fa46fffc644318cbed640cbd3b6b497336fe411065bb3d3f4c8f3d6ff9b400c9b0c3d797a5505ba7164d023094ef4b476b9f373a4d1f650565abed82ec1ded6d76dabb11c2098c5823843d0bb9de65f4fffce8dfcbf6c00f3cf04079a198b302e845ed44b3013f62d8cd10f6dcc4567c9340934093c0b29300a7c376ef481dc72311688e0607381b3d08d2d96cc412264eb32ddd392530da3b83b22bc169df0be2b994e78c3419c24608979dfa2c990e753384fc0399bc6c18629f01196e99141b88d831d5c65976a7b6f9980c215de680238bb2ddf4d8bb69e6858cb96ca2a048dec95e329d6f0d5976129015b443b2d51bfece7b9ed90d9a3ecb6c5b328a1096a5a32f7c59238413d08446087b1672f71c4287858a5c238059d7ef705d80cdf11099b69cd4da7f1b16b44d657a1ea0567c934093c0b293408e6e711697e54922cede51914541e02c91e340cb0e72ae650b05eb9048874a67f32f0eb477081d6de01d2c59431b7324dbe2ac3fef6ab5cccab253a125d321c7713887ce711702c6021adeb59201740408d2673551369571f6eb3df7dc530e60df60830d4a70c3bbaf02d0764ce56f087424eb68f31c67d3edb6db6e4bee5cc5253308ad21639380809ae5a2cef9ccaee80219027336f3420265ba2d1985cd74febbdf1fb47708c73602a30b6a84b06721d784f059cf7842d959c9955db42c47e25ce4b8098e07c016f1732f27a65d4d024d024d024d02b397004228c0e69d13182c0368eb76d166d9411b737477bccdb113761975bf8bf392dd02e1b4201e522803e39d2c013eef112ec62ea3b39746bb736596009fe09a6bae298109018dd5565bad38cf96787ab5c47b57489df5c873060000200049444154a0846ca2f3e7b2cb28528828e6e07573c14f8eeb50b6676413b7dc72cb4236dbd524d0a704e8a2f3434f3ef9e4129083b5fc5d410d4bf8b393707614e723b75d46fb1c919f94dd0861cf72ee66080f39e49047d4c879b17cc3792b967388408beae5a0d29e9bd88a6f126812681258761280bd881bb226029dadf961ebb0259e331d4c2f528d1c5ac5217328eb2293687953cb102e3bf559321df24a89e59e7c043a2c482ca091a307ea86ce740e61eef57a4a8ea210e8e0880b96b425a34b66d8976d43e0a89d6e65a9e99d5570dec31e76362c21b4730827a70a8d10f62ceb9a103efb994f1c1c74d041b3aa51146594e332ab02da4d4d024d024d02abb004381e5662cc367b371321ec8a32e78f3532b80a2bd904ba9e0de7b221d27455ce9610d665cca5fc0974b755b10a48c0e646393379a6ee3642389384c6f77d2384e393e5d0926a42f8f4a73eb69c8b559f41e8a16c21dd0860cf83d18a6f1268126812182181b912c226c82681a52681f910c2a5d687d69e26815a028d104e4e1f1a21ec59d6f5b113df79f8a1c1165b6cb10221b45cd4d28f1cc8296ddeae2681268126812681c94aa011c2c9cabbd5367e093442387e99b6121757028d104e4efe8d10f62ceb9a10de70dd95e5c5d93a4388107a2760dd75d71d6cbcf1c683e73ce7393db7a815df24d024d024d024d0954023844d275676093442b8b28f606b7f57028d104e4e271a21ec59d63521fce8876f28bb297509a117c5d75e7bedc17aebad57760e6b5793409340934093c06425d008e164e5dd6a1bbf041a211cbf4c5b898b2b8146082727ff46087b96754d08fff55ffebe9cf7232b982b4b466506650f9dbbd2ae2681268126812681c94aa011c2c9cabbd5367e093442387e99b6121757028d104e4efe8d10f62ceb7a5399a73de53183fdf7dfff1135665319bbe1d949ac5d4d024d024d024d029395402384939577ab6dfc12688470fc326d252eae041a219c9cfc1b21ec59d6a30ea6efb9da567c93409340934093c01c24d008e11c84d56e5d9212688470490e4b6bd40224d008e1028437c7471b219ca3c0e67afb6c0ea69f6b99edfe2681268126812681f14aa011c2f1cab3953679093442387999b71afb95402384fdcab72ebd11c29e65dd0861cf026ec53709340934098c41028d108e4188ad8845954023848b2afe56790f126884b007a18e28b211c29e65dd0861cf026ec53709340934098c41028d108e4188ad8845954023848b2afe56790f126884b007a136423839a1d63575df213ce8a0838636c4c632ed6a12681268126812581c093442b838726fb58e4f028d108e4f96ada4a52181460827370e2d43d8b3ac6b42f88ca7ffdfc13efbecf3881adb2ea33d0f422bbe49a049a0496006093442d8546465974023842bfb08b6f67725d008e1e474a211c29e655d9f43f8adbff9ea60934d3619fcd77ffdd70ab53a7bf0f9cf7ffee0577ff557074f7ce2137b6e512bbe49a049a049a049a02b8146089b4eacec12688470651fc1d6fe4608174f071a21ec59f608e1473ffad1c127ef7d7070e5e5e70d9efad4a7ae7030bdea9ff18c670c36d86083c1d65b6f3df8e55ffee59e5bd48a6f126812681268126884b0e9c07293402384cb6d445b7f5a8670723ad00861cfb2ae33849fffdca706af7ad5ab1e51e3939ef4a4c16ffcc66f0c7eeff77e6ff0f4a73fbde716b5e29b049a049a049a041a216c3ab0dc24d008e1721bd1d69f460827a7038d10f62ceb9a100e7ef8fdc10e3becf0881a1ffde84797cce1cffccccf0c1ef398c7f4dca2567c934093409340934023844d07969b041a215c6e23dafad308e1e474a011c29e65dddd54e61def78c7236ab4a9cc4ffff44f979fb6db68cf03d28a6f1268126812182281f60e61538b955d028d10aeec23d8dadf9540238493d38946087b9675f7d889830f3eb8e71a5bf14d024d024d024d027395402384739558bb7fa949a011c2a53622ad3d0b954023840b95e0ec9f6f8470f6b29ad79d7d1f4cffa31ffd68645671d8773efbe10f7f5836b6f9a99ffaa9f293cb67335d3298d3dd37df0c67dae4f9e9da34acfc6e7b666a63fa38d37dddef47f56d58fd5d394e374e33c97c5859f56733c964baefebefd28fe9fa395b19d432aedb6a9cfd74756f980ece5797e622cf517a37973226756fad67b31d8751633f5b9da8fbd6d5e1d9e0c528d9a4fe51658cfabe4f9d688470529adceae94b020b258433f913b3b53bb3b59dca9b0dae4d8743b5ed980dae2db48f3ff8c10f4a956cd86cf1287666bae766dbaee9ea9c8d9f31cce68d03cb47f929b395d1a839d108615f68f1c8721b21ec59d67d1242c0e4080b13fcb18f7dece0518f7ad41440f9dcf73eb714d584ffdffffddfc17ffcc77f0cbefffdef97671c77f1f8c73f7eeabdc5fffccfff1cfccffffccf488928dffb8efffddfff5dcaee5ebe4b7db315ab7294f7effffeefa52fdea1d42ee5b87ca7dd013a6df093772d7da7dd698fbefa5e3ff471d805a0b415a0bb6f585f224ff54726f5799191b5ef22eb80fde31ef7b852be4b1b3246da5c8fd17432d22f75bbba32d55fdf05c42393ba4fee517708b6eff27dcad67f6d75918167dcdfad4f3df44679f4a526ec3e8b0cba46c558184bf74757e91e7944f7eababa63e9b9e89cdf335deacfb89375ddce61cf6a87f94996e490b9b0500336533be7fabd7e69a39f8c6996981b537f47d78c1339ba3296994b3ed367e5908f9ff4357aead95a7f6b1df69d6794e76f7376583084dc13789aeffc8bdecc34ffe62acbe9ee6f84709cd26c652d860416420883d1e6af395ee320dc30e7e14dec71e668fa99e7fdef3e5854dba8e0796d0387d96f78165ceb062c636bbaf835cca6d5d8a51ccf68a3326a1f22edef629a76c042f7c67f2287ef7def7b4536ec0539d518dc1df3d8c7d8bd94198c4dffd22fdf2b33b62bd8cf3607d36b7b5f07ce9441e6caae31df73ca89afa52dc1f2f85a9ead7d8ad817f78df2a3d29ed8847aac525ee4bc109bda08e1e490a411c29e65dd172134c14d943ffbb33f1bfcf33ffff3e0a52f7de9e039cf794e012f13ff2ffee22fcae7ce367cca539e5240f06ffff66f075ffad297068c867b9ef6b4a70d5ef8c217961f97ef1e7ae8a102762112eaf103209ef5ac670d7efee77f7ef0d77ffdd783ef7ce73b2b102900e6bb5ff9955f29e5cee60234caf9fad7bf5ecad41f00a51f2f7ad18b0ae07ef39bdf2c6dd27e6d704ea37a5efce21797befed33ffd5369b7be2acf8eadcf7ef6b3077ffff77f5fca0b91d4be44c600a63a9efce4270fbef5ad6f0dbefded6f3fc2b17dc94b5e528e03f9abbffaab728f6701bff29d19a90d80f0effeeeef065ffdea574b3f5cdaf76bbff66b83e73ef7b9e57f6df03d3d70a4887a67da38c8d8e8d7d7bef6b55286b6d87028d79ffff99f0ffef22fffb2803f993ce1094f28e5fed22ffd52a95f7bbff295af4c192efdfdb99ffbb952bfcd8bf4977ed08b5ffff55f9f6aa7712067fd535f8c1263f4277ff227c5d0bcec652f5bc1d8688331529ebfebcb38d83d579bfef11fffb1dc93718e1cd5af1dfaf10ffff00fa5ddfaee32be74e9052f7841697f88cf30dd8ae154bef6d269fa33ca1091f197bffce501591a23fd3557c8900e2ea54b7ff48b2e32e6712aec486c4cb59dace8d8830f3e3878f8e1878b3e1b2ff3882ca2ffe4ab1ccf91ab7bdceb59e36fde98c37420b2fb977ff9973276f4865e2b93befff11fff71c1809a147244e863823cc9062b2bf38ffeab9f9ce9aab2ea32b4f5377ff337cbd86b53e69f3ed21b6df0fc4cf368ae63d808e15c25d6ee5f6a12982f213437e1203c641761430246f12760387c646bbffbddef9639eadee004fc862de6355f0116091ab960b17b7fe1177e61f0b33ffbb3057762fff930ca538fcfddc7be3ff399cf9c0aac2a0339513e4cd00e18e57ef5c32ddfb125703cb64bfdeca87bdc0fcbf841b0132ed6848add79e08107a6daec1e65e98bb6fecddffc4db119ea72c15d58f4bce73daf60d5b00024f2a8bdf0937c6118bf827cf5815c5c6ca8fbd867edd20f6d43407d474630521de4f38bbff88b4596b171f0969ff4852f7ca1b487ddaddbc3aeb30bdaa13cb6da38f163565b6db582edb12fb1bbecb667f4c15593d4e0359f880cf89f09821b47759013bf441df96e3ef3a511c2f9486d7ecf3442383fb9cdfaa9bede21048edff8c63706679c714601de3df7dc73b0de7aeb15200122575e796521223bedb45371e080e08d37de38f8d8c73e3695ed3149910d67200297f7bef7bd837beeb9a7005132890007e8020f06e0e52f7ff9e07def7b5f010f8e5f2e65bdfad5af1e6cb2c9265304732621c5a9bcf9e69b0bc189c30f5cb509687ef8c31f2e6d629c123d03d2db6db75da907405f7ae9a5833ffdd33f2d4ea8fefceeeffe6e213000d2c5089009d968a7f25ff9ca571660764624a04fa62c6dde76db6d8b01b9e1861b069ffce4270ba90194e4f19ad7bc66f0e637bfb980f2673ffbd9c1fbdffffe529ffac9688b2db618bcf6b5af2d4571c0cf3ffffc227f7d5a7ffdf56724cc9c7ecef67bdef39e6204dffef6b7973e453e679f7df6e0031ff8403152c96c91c93aebac33f8addffaadc1dd77df3db8e8a28b8ae1366eda4d56bed76f4641d91cff3df6d8a3b493b137fe748a1eadb9e69aa56ce06e6c0e3ae8a0d2a76db6d9a618a45c9efbe0073f5874427b92c9a343bffddbbf5dc689137fd75d770d6ebbedb6e2dc871c90df5bdffad6a237c6469f8d259979467f7dfefbbffffb456e1c84614657bd64a6ed74c9ffdb6fbf7d3144a30821e7e5f4d34f1f7cfef39f2f32a6cb8e84f9c33ffcc332ee33651767d2ed717ecf285f7ffdf5835b6eb9a53815c9647254b479edb5d72e84d9589c77de7965bed04586fa8ffee88fca7826627fe699671619f96cabadb62af39ebc18709871e79d779667e83fdd61f8c988bec013e3604c7db6fbeebb17b9d5d168baa12d9c080e16d99a7f486d88abb17dc31bde50cabfe38e3b4add718cc8cdb82b9b63431feebdf7dea20ffae0197a456f8cd36c32c7b31d8b4608672ba976df5295c07c0961fc8973cf3db7d88acd37dfbcd8a99012d8c0c6b1ef6c9979bbd75e7b4dd925f39b6f013f9003848ecd802d6c67ec2efbc47eb23de62ebb0d87d90518e03376877d8511c8635638c1916baeb9a6fcbcf18d6f2cb608d6c06a36fabaebae2bf5eebaebae53b8a0ad3044199b6db659215dec90363af7b95e5df1c52f7e7170ca29a714fba8df7c1db65c80975cf902fa1862e659fdd878e38d07abafbefa0a18463ff850f7dd775fb1d56c5a48957eb2e76f79cb5b4a7bd9583e0419b3e37059e055f9881afb7ace39e714b2488e30577decb9802a4c8c8d60f75ff7bad70d8e39e6981556ff2067fc82db6fbf7dca066b0ffb0acfc9f6231ff94821cfb056dfc916c1e41fd10fb62701e8644db51df9dc679f7da682e0fc3a63a1ac75d75d77b0c61a6b3c423673993f8d10ce455a0bbbb711c285c96fc6a76b42f8d4273f7af0b6b7bded11cf648906209cad232ae2239a77d8618795890eec38f7c00bf901b2c01628739c800a6202800032101175426844aa38809c384e1fc0038eca055c263c472fd9ade38f3fbe80d35a6bad35d55eed6648386b8816a000aaa3764ed5fe8f7ffce383cb2fbfbc640894a56d800db82383eae50403244e2fc713c8005906e1c0030f2cd13c20c7616694802c52a61fa28e804bdff567d34d372da00550910520cfb8c83630103579409c38d5175e7861c902befef5af2f7d1141443477dc71c7c1861b6e588888f65e75d55505bc1173f2550f63a88fef7ef7bb4bb40cd9d86db7dd0a919c6e0905b282605d71c515a50dfbeebb6fe917a0761953e08da0298b7cf49703ed58131953c4805161b0d46d9c1108ed26138104df1f71c411a54c3a73d34d37957a7dbecb2ebb944c2b9dd0b70b2eb860804c904b4d001872868cfc81bf67729181b2e819b2a92fda8c8468f3873ef4a112a9dd7befbd8b01e26420bb64f3077ff00745b6f7df7f7fc95ed16d06b0260ea9c7b81b5f4688b1a783871e7a6819d7517266804f3df5d4e274d0356de43c6cb4d1468337bde94d43eb319ed16b7f33927442b0c2ff597293a5c15936992c59fdbdf9e2f99491e5bcc300c5f85d7cf1c545973800c6d93c110ca18b1c1b8e8b7a3ffde94f0f2ebbecb2d21732449c922144980f39e49042ce390d020dc653fbe88ff1354e48df51471d5574587f8d137da1dfc8e2fefbef5fe6a0f90477c82fb805c338199c21e3669e7bdef8d07da4d03d9ee19c999bf4928393b15296f67916d62096c6898c94c3b952375daf33143382f10c373442b85009b6e7175b020b2184fc89238f3cb20455e12d3b6e2e9acbe63f3264eec335f3924ddc6fbffd8a3d852d70873d80472e84cd3c86316cbc79eb7bf80cafe012bba44ef6d839ccec103b0017114ec140760f0e592571c2092714cc10088365214e02c76c359f814f944091674e3cf1c4f23fa2183bc1af61574308f509ce206f7ef847c82fbf44dd70916df45cfc1ef8cb1f21079809c772298f4d61fb05ea0458c955ff7c8e80b1356c263fe5e4934f2ebe086c170c6383d859be003f40df1045b22647fd42b47cc6bf13a087d964c7060b746b8ff11318f6399b47aedac2e783e7b019f6eac3e73ef7b962c7e13e5c1710508fe7b5838c7da6de644d0506116889074104182e70c0ff10c0453643fee73b371a219cafe4e6fe5c23847397d99c9ea8cf21fcf32f7db68049bd261b7088a021242626a2359b8bb3c4f117091261f71c20e104ba1042131c69e2288a7c7122017a26a8490efc389a22725b6eb96521580090d3282a659273c401015035f901314036d96b720044f58583ae2ef78bf075d7b36b1f92251ac9b1449464cf38779e959172f91b1901dadaad6c00250ae6f725975c52c80560668cb41de823c5fe26238078d2492795ac0899301879c7502645f99c4b0e674dc6b545b9483412c29965988039d24286c89ffac984ac38e1ea02d0fa6cec19123f64ca0946b410d6e9965070944535914f3200e0c696d1741d70c001057405177ee7777ea7803523e93386565d575f7d753116c8293900fa5b6fbdb518201939ce3f5930c62e7ac8d0902da782b3ad5e868673c05031c6dda5310c3c83c5596090dc978bde0173652adb18d34f460dd943f63dcbf0d233e48fe1337e9c01044a7628514f9fc549a9e788b23ef399cf4c6573391c871f7ef84842a8af3288fa895ccba09b2bd75e7b6d193ba419d1ee5e8c38c7863eea97f1d61e8e0da7897340d6fe173c7131ba4835dd35aefa24f0418e64671e2050f532a16ebdda89107266c88a53a23ef5931767ccfc861fda483fb585511738c912584104b2d4269f99bf0863c6de7c64f4914e7aca19338f392ac9482bef9def7c671917fa75d65967957aa3cf794f880ee69d95638f3db6046d3854e49a774a91773a69eec19ffaca72d1a38f3eba040d8cbdf987b89a1beae3f89953e3ca123642381bcbd3ee59ca12982f214c80196e5a4258632dac39edb4d30aa98097303e1803f3e14582b2325cfc08361cc6b2db880f2204eb6010ac15e035e7d9f1e38e3baed825f7c1067600898335ca405eb401c6c3289884d8c021d8c1d6c211414b04511f6a42c86e65d5010c458c5ef18a57ac40088d291920a830155ec347f6c067ca40b4f427015d38aafd7c2f36a4f6dd601fd26c5516db6645866098cf1144413e1938b2e65320dc701c16b3930976b1ed82e6dacc1741c4d864ff236a301841e30b1a1bfe08df8dfd47c4d960b6579ff88982d882b2b0d4980802f84d6efc1d448e6f03fff527efa46b9b71d277e34b07903f63c986f391c888dcac26e10fc89c1ad7995e219ae9fdc246082787388d10f62c6ba440b4e693f73e3878dfb5971610a8373101009c4a1121c4244eff4ccd0a2134499509803966a273808bc32f43883c0015912a002b1bc321370981ea273ef18902ee3ee32c9ad89c568ea109ce3946d88099fb2d4f053c263a92d27ddf0ab800270602a902fac3faa45e20c8194630f31ea37e2b23068a010032880bc790314004810e3227eaa6ef1c6624104943286a90912d923d02ac32518c0330d547c0894402ec9a101a178629912ee7471a274eb8fe2b5f84913194a5d117bfc91d28bb64c17c8e447896b1260f8e67b27ddd71d6ef4f7dea53c509cfbb58088571643c42088d2d8718b9f3bd481f605636006630c802016314184c5148061b0930e68210c9102a97fc944356ea9235e6b423d2e4c0907433d8c910ca922a93839e8bbee88b31a4a38c8cfa73919736d2017a99e53d48ae40864b3f43ee38008856b70d64c6c0c638d13b631ea355cb389b03d00306f35def7a5789882250da49f7e935d9742f049d1ce98ebee93ba329b29df7f7fce66c30bc82218cb3f9efefbcf74967c88901e650d00541173a48d78711423a8f507252b21c595b65f1c99503b1f3ce3b179d315e9c00865bb92e9863fc391fc640f0802341fee6bcfb433ac99823440eda2898a29d8837321a42a82df4547f47bdcf27a041c6c83f4cc898902167896c3882b0af7b59aec4e1e4842843c4d91cd23fedf29da0c642de4fa9eb6c847026abd3be5fea125828216467cd294140369f9d83afe61c32e7d82cb8c92eb06dfc16a48ccd40f8901f7868a5025c521e1c72c12bb803cb942b83a86c4154812ec14cfe042cf7bfe5a530085ec10b75c01018e437e264c582766adb741942365f50976f1242689963f7bd74df0beec26498ea378ce36bb029ec77bdcc341bdad51b71b1317c2ecfc3737829081cbb950ddc920cb014559bf413c6b395fa0d839147761d560a2cb35564c19711d0869d7c00fe94fef3a59056b2e5d720cbc899553c6c0e7fceeff847c684cdd24ff6cd98f29f32fed177f6814db6eac6b80a6aea8ff6f1a1049cad38d107c14963226bc8afd3cf6c4a376cfee45580517b0434423839d46984b06759d719c24f7feacee23c75092107d6e7b239f5e621d3352d8410d193ee670844cf39f1008273cb99067a408eb30e2c6a4053be890e00f39e90681c90400c3890400de8841072ba91134e9a0c421cc1bc8f2882e51e840d31012c3549489f809c1f6d0798c39c3aed0750352144222cf543d6809cf602516416a1511f92581342460c60c92c90b3e821504dc604019155ca3359a3cfe14784903984900c44189128a44f868e832b62a79dee6738b529841261573e7901666480235d2fadacc7398e32475f862e4bf6f42bcbe6c8bf2684b2420c06c3c5406b7f9710fa5e1b19263a308c106a071d420ce88528aeecb171a44fc3966b861072f8f3de9e72f45f1f0510e892b2f41bf9cb25534eae744f9fe81d67218450df114dd162e386bc188b5111456d9151520e5daf3746499dda85d830688c23278101467844989152c69853d3bd9017bae779ce8af69b5b0c234348eec9129a87e6b379208b664ed2016d4466185d7345f00351d4563218d666739b5c94ad5ccbb0ea4d13047ae8265d137c11cd0f214472f459345bf9b0c67ce6509873f0812c448ad561f992b6799ee14720e984b1d76efa8b9c21fa9c31b2121dcfce8174c5f3d90488c3647e23d2e65b969746cfcd4b4e03729a4b19f49463683ccd35751a7b731d2e19038490bca6db6c682ef0de08e15ca4d5ee5d8a12982f2114e08201c9ae0924253805e7044f6117526495139bc7f1470211481891a5a00237c88a00155b9925a4e4654ec31e5937af4108a8c1ab9a10b2ed329482ce6c86f9cfeecb90215a8806fb15ff42460b368f8310b2efca8693ec830b7ec341ed468866bac80bb9d27f58cb87ca8a91eeb3f051ff05bf10672b2f0492e13c9b398c100a8af365906bc15df8cbf61b037e10628680f1ebe0362219024dcef51e00757bd42da0cd96b1b5c63117ec4708f936886636ee61a3656ee9027b22d3a81c636efcd8442ba8d80b7e4a7d65b34232656f47d9f6460867d2b8f17ddf08e1f86439b4a4fa1dc2c73de6072513d2ddc6977367e202e0d93a3721849c229132806332733c010b80c866337e8be270186b675283813c4790b306f8644ea6238488883e70e890a138a6da6f899ae861de0304063254f5dafa08495dde59b3ac805339ec0a21d457cea9281c8750b44e064b864c1d01c2f910422409a871604334b41751304e79a74dc44dfd800db103f4dacea071e8bb84509b6556104a8641f996cc0141609b085bb7df0c1f506708c8d385842087ca41a838d88c817238ce488c25a3809701e5d41b6f11574b7b1907cb21013703c261cf92d13a43a82ef772dee984317671ca19a761442c4b46119f7ad92399d245ba205a4c5696b774970f8b0ed303514dc105a44c1414b9349e229f1c0406a65efe384c5fb4c57c20fbe90821c3a4ad0812c36bbc2da7e150e47d084e468e5560e8cc2fe494de22768c3cddf38ca554d9d4c9c6380215021da2e5e621d930d23280e622a78a41cdb21c916f8e888c33bde6f464775cc69bb3964da2ba84d07dda62498fb621485d42682c04698c75da45ce3ea32f82089c417ae75e72a62ff4840ec8cc730e385ddacd31c8526f9954dfc301fa81f025ba6fac4711426360192a3d23674e9fe7f5471ff4c9fca37b59deeab7e001fd341fc8afbd43d8b3016bc5af54125808211404824d9c7fb63d589d8dc504f8104684d0bc66dfd847c11958014b38f6f05240731821b49a457012c1844502586c275b2120e3620fd87ec48fffa03cff238408097f41bd4817cc147883c17d1042be10b2030761e6305fa6ab20e4c547106c436cad7e8091dd0bd6b15982fa7c0b415f449a6cd85bf2b3ba48e09cef80e0214dc6890c612ebba83e015bd8cbeeb11502d39e83abec0fbc76af60f0a81515f32184c986229d02c9029348a16079c87336dee3d3d4bb49938740221f863fc5ee0ff3311a219c1c043542d8b3acbbc74e64295cb75a1361b61bca78b626841c4dd118efeaa80f3073a20126f0f4db84b5a61d78d6f588f079ff0ea1403c00f34c19422f922380c03fbb4d311ecae6d0facc24560f0233ec1d1f8025abc479e4d80dbb387f9c5b5918a0219b0240811c529a17caf3eedb5c0921e045d89427f391dd2f913c326504180384535dc81283abdf082252015c91889a100236a48c836dc9a031cf324ef772762dfb1b76561062a02c8e2e434286da802c195f6dad3795b1141119400a65d604039056c6539b39d7d92e5be654d453dbba9bca44fe003b5942464756925ed43bcad6631542884058b21cc3c79917319679d31e441421ec2e2da407741321a453da852cc8c079c99f0321132d1b35d3d113b32584c615e1332edac4c822840cbe8083b672728c957ee8936836b988129b23082ba728632cd349ff1175f2a2afc81bb2c739a0c7f40509437244d5455a39028c3d3d713fb2296ba65ec12184cb9c429e6408b351433d87e726cbf40000200049444154195f730521e414740921acd00ee44b7f45ff395deae184715a0435f4c5f8c30cfac3094384cd05e396654de4664ccd5dcbc919feb4c7fdb27dda616e4c9721d427c11df2a5ab997f749a2368ec2d39d336ba64fecb30703e398be432db00da6c60be65086723a576cf5296c04209a1202bfbc0c6e548832cfde717f81e918313f048408faf2178897098ffee1f4508f927023a568d08eab0675e4d610b0549730c8d25f782886ca9672c516563d802b8c336c13318ea3ec1ba3e0821ccb122816f8174d559b3517a80a0692f3f0929644f86ed0d01e311352b6004e26133cce58f21e4640dbbd91c75b30f7058f00e36c271f2605360b731b0b98def05230547c918f60b06b359827fa3deb99e0f2124832c0586d57447a0953f2ac191d52932ca6c419710b21bf03f47660d9369238493439c46087b96755fe710d6849023030080a4c90fb039d51c5851a72ce1b4018def6a6792230c5839add999723a4228c3c121643000588e6b5026d0431cb24d34d18e5ade27c2c72905fc1cd061f78510227c080263c13994bd437af32ee44208a1281a671ff1491b0026901229e5dc23061c78a0c64070c0655152ff3042e85e00c9681a1bf7025ced0f39eabe47a86cc440f60e8104e62e065474cd387182457139f38c2932c370fbdcd85a3ee29d04444bf9229a8cadcc8e3e22857957a0de65b49e068c0d3d4230c87a1461f74c968c5a9282a8e6fc45dfd10d861ff11601e430748ff74072659e10420442bbcd19fd418ef5c172c1eeeea6c3a6ed6c09613284481c3dea660865dc8d29fdcbd257193ec45af41599675c91466362ab7546d078718e3849daaf6ca4c7989225e2c4e08b08237a646b6c1042f2a327c61329ceb997fa2d5a2c1a3f8c10ba4f3d023b882047a226849c06ce8c36190be44ef0836c8d8ba5b8f409490e214458b3d4d5f7300439e7982063e67f9605a90b594bd499c3020764f3cca79908a1a0908c0347259732cc3fe45c56134699ff821e96be0a6a081064fe8d0bc21b211c97245b398b2581f91242fe043b6abe71ce61b5606e76438673567ac840b1332e8ebac011df011e22010299ca1a4508b33200de2133823f562e210f08219c13c494894492d80bb60feef26fac7811f8649be126db0d0fe019fc62d3e0597797d1d9be43d85d32aa2f7c00b8236038ea558f7abcb3299fa035ec44d4866508b3d91b0c154c154813f062efd90132501f8208bfd9829ce7e83d4aabbdf4931cd86bd93ff69ffd4626d52b80287b9a4dc0dc33ea7deff912c21c5b9477bbc98bbfc126b09fecb99542fcca61891038aebfc3361f8c9e7de7df7e34d877cfed4abf8c71bbfa91402384fdc875aad44910424e1f72c6619205cc01d07e5bca06e84d560e30325247d501a0a508c8a36586b230331142efe42117320bf5a63233ed16558bda523a40070439985da2e0de9c5124e208f4b3b3288391cd74d4b91042c8f1956d400222972c5de3dc938dffc94da692c192bd90e503d60c669710226a883383c068e61d2b4b012d01213b24a7bbfc84b1d41e3fc0d458645989b1452a185d86222f94231e39464374561f645dc81691e048235596e66817636059e3a80c61227ec8bac8a8253959ba3a8a8431d6daa34c463d17822bf3ac3dc81299d5efc81a5711548e3fdd9481657465c964471129ce86aca7e5affa319d8ecd96102248dac989118cc83b849c1b0e95b9c4b1e104903f23cc0889b21a1b99407da909613284d9210fe10b214418917c7a4ba711ae9a10cabc21c5eae518d033f5d22d0e93b6888e7709a17b187fc109d9c738103521e474d11d4e12874ebf395fda9e7719e92212c7a18219c6dd782280329dc89736f9be2684fa27a0620ec79877c7672642a8dfb28c742ccfe6b7f76a0455600cb26c9e21b58233f472ba7326e703eb8d10ce476aed99a524818510c21c3b019bea4d65f803fc0759af9a10fadcbb6ce6303c14d8812dd311c26c1cc6ef30e7d92e1942f601562137de5b37bfd9e4bc922180cc1608380a96c270f8206025138734ca106697d1d8729821e8a81e7df22ee0749bca7409210c969d83eb48315b3e939f034395031f618a2c6677d76ad8cdde2b9bad46c2d946b2d366fd1678666be0b07b045c1127449d1cf80fd9034286940dd04f84d44a15a48c4d48f08fdf92e32486e9ec7c09a1bed03bf693dfc30f10fc3406da22b0ca0f604fbb977b04a9d9b05178de328493439846087b96754d089ffdcc2796493d8eabce1086102a1770781fd0bb68269acc8be8beac84a56e1c576003e838ec2275897c015dced76c08217001b0dd8d4680032790c3a90eceecb0250a964a30322e32a9a33e64a66d8882b6a9436448b91c72e0026c4531f30e21b056e7b05d46476d2a234382ac58ab2f435113e57a9751400d9c6551b2cd3f828ad82129f5a632c0503450948fa13336804ed9c820c044ca38e1c6a7bb7c572410f1250f44c5e539468ce32c53850c2b27993365289f9c912c32422018a29cdfe83b3f003a8490b3cf60742fe34fc68801c2361b4228226c3c19a1184c6d614811597aa03d591aa84e0e08638ec892af0c9cf71090d86c86246b6d5c7dcff80f0b1ca4fd791f43fbeb7308cd15c4497b185406db5c402ce806e3cab0aa8b7cb4d392d26cfea43f088fb9920ce1b809a1396b499079552fab3166a2abe6354258ef324a2e9e337fe805e2463ef52ea3a2c8882c5d442e45d793c13707e104b22de34fb7c908a114bce048703a8c29672147822443a82d746dbaeced4c849093d9258419cfec324a3fe8095c1048d21f73dfea020ee84c0eda6cf1b611c2d94aaaddb75425300e42c82e65032fb6c51c8629f0af4b08e36f08aec91cd684b0bbcba872101798c11ec01d1866c9a4659f828070d8524776955d660b04d1104f17ac49e60926c17cb642bdfc17414fcf67f332efaf5919852ce9137b144228603bd32ea37c25d93776c9f3326ef167d807a42ebb852628e67f365ba099edb17a24ef56fa2ef688df0053616d8ecf885d84bdc82019b239da406efa175baf2ce459dbf4df4a8d9c894b8e96f5b30dee879bb05c9bac1089df816cb18d7c9cecd920e8a7af755673d4a632da3b132164e7e98ee5a4dd25a3da26484977d8a7f60ee1e2224b23843dcbbf26844f79d2a3a60e761d56ad49caa1cb8e7dd3350da8887689a07364b2e909c0434a388a2619c71848c850587a05b839e5c08b3328e3c5f102c8bed3861042e424bb8c72a473ec0452097ce280a69d4058f48e032b2aa42f9cf861cb2572b69a4c04a7d5da77a094cc85f6010bc406e9d34f46225943e40cd072ea81954c85a821a266a949ed280245cb28bbbb8c226da26f96d165b39d0056decd4348b54b5dca94ed01e2809943ccd020aec8843e21deee976db5210a473c841020225a089967f539cb379014e3209aa94cce6e965f9267de0f95b134be08a1e53d59569a31a01764416e4802dda8978818434619d9d307a43ea02e18e01d892cf534fe22b5b233a32e3aa43e7da563f5911f64e97b064bdf18385160fac090d23da4dc3b217e38faee952533668c957bc892bec9a0914d7769490c33c3a30dfac8d86b0b9d649cc95c7996aed2230493d1e44c88fa92a7aca867e8fcb0a352b4555fe90ac34a5765cd44ae6df46329a9c82c072719427ae77be3264368f976bdb57b968c86108a947697f4d02bf5d07dba4a3eb2a908347d62d0cd73d9624b8e3846de2bb59c4ad45e04df7b9a30a23e6f932e0b889843e4cfe130f7e997b15307e78b3ee8830830670289e68c71e8e8253cd166cfb8dff89a03798750502ac74e183f1863fe920d99cb30ea7732f37e933fdd914df53712ca894462cd49f559724b2fb23c75a150de08e14225d89e5f6c092c94104e770e6108210c7125430817f90e3e0f21640f7c668e0ab6e61c42f61e8913a874bf6c181b097f0479d841780faf2c8b3427ad5e8255fc194b1e4366ac208105301d86080aeb3f12057fd942d80767e08bf2052e112c3864e5498263b00a66f1a9f8097c0e782918e633cb20618e1525c130cbf4e12c3baabefa3d41364820d4ab1ddaad1feed3a69c3f8b082274fc1575291ff6b195ec8c7eb283fc1499533f326f214dec1aa2c876f0dfd8a5e0305b08337d4e8eee61efd803f7e92bdf944dd1773645bde489a091a1ba1280b54224c74ed4bb8cd20363960ca1d751f27a4464cbefd1670181eea52fe406e387ed62eefe96219c1caa3442d8b3aceb63271efec76f1627ad1b2549138010872b4bff6622848810878c939d337c80047212f293c34a0123a01525025e26ba081540f3de114012190cd00379ce3527dcd28d1caa0a4038bf1c5940966859b6dee7a001078e1e675cbb2c87e85e8c09e3205a67298136e58c1dc0a52d36a64008000527541b38929c4bc401c1b0841290f90c21d456440b98a56d88937238e532243e474864279463e92752a00f191bc0e92233808538e41c34b2157d53972c9b681ee0d73672e4f87bdf01f8235e9e077c8c227017ad13e9642c0382e461adbf882ba79f1145c25dc94c86d47a1ee106d0dea9a82f756a334391a32aba84302fb273f8198780ba8ca44826d9698ba8b032869d11973a01bdfa423265d6ea281fd2c439a00ffe465a906dc61079f2b7cc1839221d08baa83002eea29fc810a7403b64d0e8419d59d50f469b71a5e708a2b121637a154225538ee49a03da639ea89731f26e27c345ee7921beabb3f485ec91706dd61fede598c860c93a8a48931bfde570206cda25eb46aec64d86971c44c0cd23ba43deeecfb99175dd6445e7d4a30ccb8fd4ed736490be7094e835c7c978584285a0724690615881dc9bb3915d36a2519779cae163b411daee4e74cae570719004849077cf9095f6c4f8236d08221cf0b7f2cc5d7892f783d46ffe918dc0059cc85131592a2bb3ee3e8e18bd245fe3660ce9b6b2389439bb751c9bcb3442d8b3316cc5f72e81f912420486dd954de38370fa83b339c220ef4ac736b259c815dc40b6d81284304147813578930dd9b24998b91e1b8d4098e302a0028f823b56c8c050016c64062ef3117c0fcf625f901e2b87d86e3860493cfb0a2305b9d85b36863de0c7c06d7d604f5cda962094766ba7c0201bc266c254780c87b2332a9f847d8237fc276d230fedea06be05ffd8986c84c52f2033fd828b8814520947f53ffe4a761a67d3f2ca0fcce31bd48450fd82786c97d777d22e7d53aecf60b3c0bda5ba7c24f5c6c7245336808cc98b5fe01efea755417c0bf6d995e5c4d961bbde253d1942be94f2d8583e5f30993ef04bf4775806d07deccda84d151b21ec1d36a62a6884b06759d784f0ce3b3e543210a308216202d864d546bd609be69a648013200336c0e599bcd00c4038521c57448be3ce890252f539882638305367c889c90b1c94c149e2e872da4c68113d4411c8f9acde888513081c397b1c400e21029c83dabba2e6b4ca342086882c92aa6dfaa11c6d13d1f339a2a53edf03548e38a01019b4944e048b01e068037244204e2d479653cca9247f00645c180bceb8bab34145c60640931f32e33be322fb49ee9cfec89781503fc306ec1915800bcc8137431942a66cf2e70833b639ba805c003543c4d1464ac832d1390659fb910264dc3d8c0023d73d405dfb18682444e4b426edea213fb2128144b6f24e9fb601717a948d6790751146d1dc511723af3e860079ec6e1dad3eba8230d229e4361b1520ca0805e2e66f069dde30f08ca47122173ac050193be427cb66d2267aa07cf7e4c806410e7a2b68a04e993006900381683398f4820cb4d11891257d17011e4630c81d7133c622cedac601e14430a0398f4b2457fd488d76f95e46923e993f8cb8eff382bfb1a28beecf3999b5bce9a77a10423a462fb48f13a34e7305a9e59c88ac0b56980bf4cff8eb2bbde050e57807e51b3b6de52c1877996eba661cbbcbbce937fca023ca413011bd7a03193ac429e24820a3e68bf68a3a1b5b4493b30133105ab251a60c7832facad0374e0c67c43c53a63afdce796988b9319359108418c7e1f48d10f66c0c5bf1bd4b60be843076955d801bec5fecbb39cc4ec200b8cc36b99281835de64eb2f5caca726f7334e7deb1a3b055d0319b8e08a6c22c7821b05dfb30302f36503056908f6dc8c5cf10e48519969dabd733c80b3cf0bfdf7c04f8064fb4955d83796997e7e1186224e0cdb6baf4479d308fcfc1bee8173f29360c9e2a5b60b19be18271ecb64027ac0d46c1d6f844eeb13f011c0f2112d85617df885cd9194416ded6cb2ae1357b0913b30b77fc31fe8df71395cf07b32a46796c187ba92d9e235fe49c0ce0b1c02b2c86e1fa85c4bab2f9201fd5fd7cb3b4d7b36c2b2cd72624d67de308d2a9bb11c2de61a311c24989b82684b77de403c579e99e4398b698ec0077363b2a2a43768073efb9bcc4ab2c4e3150043c9cdc1029208890884001738e31273b876a074c12b9123104089c4d406de273ae19060057134b931f48a47f40d533fecf01b75d990748d4c351065e000aa9d02ecf8b82291bd10b49e6ec022e20c5507098c9597b80bc7b6bd2809ce933c04780f453ff194f72e29076493aa79f7cc88c1cc928c6495d0c0343c9c8a93febe3f5d578e80be737cb4bd277c0093463704216b5479f94a5eff521adfa853c5b0ecc4829c338206ec922a67c632750a0bf8ca7b6d49137fdd45f8658ff6b5d241bfdd46ef51917e357ef1cda1d43c64b7df4418472d8a1b7daef7bb2d677869c81429cc93967c965090e22916340d497f61a07ede96608194cb233ce31420c1ed2e5fe9008f7714644a173a8bcf960ec649f724cc7a8f714c94b5fddab6cfd4228cd37728b2e6a8b3eb94720c6f796e4d015e366ce9a93219e967e22cde630d2d88d946ab77acc2973dea58deed53ff2f28cefe888b1cb7b8fc6523bf5591beb4da0e85cf4df181b4b9f19c76e1bf441fdfa453fe9a06089fbebb9a38f3083ee7190c8999345769cbe045eb2744a304559b51e6abb4cbe71a62fe63d7dc8b86827429ab9420ea3b6529f0bce3742381769b57b97a204e64b08cd3f8e37bb106c32efcc45f8619ec228f3303b6d7a867d5627acf3798ea182f708880053764c869b02a86c12bba75cd80e83f80eb50fc346c00d98a64ccfc0cb7a676ee5f245d42163a5dd705270125ec1305884ac65d5151ba33e1859fb2f701106fa3ed93bf8c3c6aa1bc6f137d4a7cde40277b5499fb2236b5727f801f01e8ec17efd262775c140be8c3ab28ac8f3912bbc2517fd5737db55fb52daa1bfcaacfd1365b079c6529dc62caff2b0e96c9876e933f9f097c8830f065bd9506df45c8ed9300e21c319873adb670cb2ca86fd18e70ed08d104e0e695a86b06759d784f03b0f3f54a2415d421887ca6437b1673a6f6d214d561710d2064062f28f6b538685b44b7b8098f68c2bb2b490f6b467c72f01ba874433849c8d71647516da4a3aa74de6c23848c542dbd39e5f3c093442b878b26f358f4702f32584e3a97d6994124ce7d7d401b071b58ebd50f66cf67aa803b5da85a42ea69d618311e1644f472dd31c97acc6514e2384e390e2ecca68847076729af75df5a6323ff7ec27979d21dbd524d024d024d024b0b424d008e1d21a8fd69ab94ba011c2b9cbac3db1b425d008e1e4c6a711c29e65ddd739843d37bb15df24d024d024b04a49a011c2556ab89765671b215c96c3ba4a77aa11c2c90d7f23843dcbba11c29e05dc8a6f12681268121883041a211c83105b118b2a8146081755fcadf21e24d008610f421d516423843dcbba11c29e05dc8a6f12681268121883041a211c83105b118b2a8146081755fcadf21e24d008610f426d84707242ad6baa09e1b39ef184b27570bb9a049a049a049a049696041a215c5ae3d15a33770934423877992dd5276c00930d075786cd5ffa926323847d49f691e5b60c61cfb2ae09e1d39ef298728e5cf78883ec5835975dab66db6cbb49d932d8d6eefecef965b649b68dbb2d966ddf6e1be21cd26aab613b9efadc8e5ab69af7bf6795e15e933467e2d85adff7eecb0e5aa9d78ea6b654ce96f17698b4c5b11fdfd946da16c7ce180be8295b1db62ef65383a19dbab4cbb6d4dddd5aed2866ab68dbddd73ba7da2edbbdfa959d2dd56d4be66c1f9dcf6dbb4c56ca209bc8c57dda62ecb4cfe5b3c82c63aa0db678f61c59e4980bf7ebbbb1f0dbe7d3edb2e91ebaa35c321a75af7eb9cfd109da5b5f8ea430ce8bb9ab59574fe985b61a3f63a96d64a69d7e1b6b7db68db571f0dba5ff6446cfdc93635794e5d9fa506063eb59577d4e9eff3d471f944befe825f9d105ba5ecf4dfa6e3754e5658bf2faeca51ca26ebcddab8cee310cfaa77de6866dc233a6fa635c7d6e87d3513bfda62ff451dfebf9651e689771cee7f4d7dcca510eeab66b71b66bd766cf69a7babb6767a9cf96f1caa96511fdcfd6f2b3c59f95e9be460857a6d16a6d1d268146087f2c15381f2ccc91506c84a32f461d8910db14fc83fd7c0676675c36347e115bcd6e8c3ae2886de45739f6cab110707c55bd1a219cdcc83742d8b3aceb6327befbed6f9503446b22c3e9023ccecd73006ad7415b48f3940d149dcfe6d0d1104f4eb2b3739cdd03781c9ced9c1c60a57e077a6b8b6738cfce3a73461b50e2483b67cd19370e83e5cc3a68db3d0e57cd3974ea758e90e79d9fe31c2024c93938ce09027439c74f5b9cafa74ec0ab6ce71e699f9f9cd54716089583b79d89531f4fa16fce4b5457f7e0f2db6ebbad38c90e5a6510c89fe174c0bce71cc29af3fc9c51e4f05afde1c0930b1971c69dd9a3cd3e235be5f841124214b481ac7216ddeb5ef7baa9ef18267dd707326610ba4420db426b6fce922457f70ebbb4c73947ce47527edae1b7f32c9d43d925c80bd1a9853e4b2f1c524e0ef48dee2382f4837c8d9df61a1fe3e06c2332117c708ea47b902932a45f74d7512dc6367df7ac0381911b63e14c3c86573974d041c808a9c3e58d179dcc995721a4c6c533089033ad424c8d7788a07be926dd75bf31506782046495c3e39ddde4007ae776d1f1105c7ae63bf3a61b05560f3db8fbeebbcbdc705e55cea122c77beeb9a7cc6f073a237cc6dfbc70469fe7b4d55c779e94b3a1a2e3ce0f243fe77339fb2b97fac84e3b9dc755b7c7dfe6e9da6baf5d1caae5783542b81c4775d5ea53238483a980223f82ad11a863c3913b588d60e5ecdb5a3b04d1f83c6c0ebf0db6b337ec4ece035ca836c52f324eec33bb37ec629f1c680fcff7d8638fe2b7acaa572384931bf946087b96754d083f7ee72d8534750921a76dcd35d71cbce10d6f18ebc44f36e0a69b6e1a5c71c51505d438db4804707cfdeb5f5f1ce2fbeebb6f70d75d774d1ddefe96b7bca500e1d9679f5d00092022b21c578ee41d77dc31f8d0873e3438f5d4534b795b6cb14571c837da68a3e2b8bb6421aebbeebae29c6ebffdf6a5dfcabae1861bcac1a88800c0e56873a05ffef2970f36d8608302901ffce0074b7b389f5d0714905e70c105e57b8e7e48a132b46fbdf5d62b24b28ee89d77de79833befbc7370e08107967620229cf76baeb9a6b415e0729a5dc8c22db7dc52c82e50fee8473f5ab22d9c61076b23149e255b64573f45100136a7591bf4857cf4659f7df6996a8b03c8f59fb3ad4e4e7e9710cadc20200e4c4704c873d34d372d6337ecd21eedbdf1c61b0b19c941b2daf2a637bda9e815b230d35993fa338c9ccef45cdda6616574bf679c2fbae8a2321e89d66a378264dc1068079f93ed473ef291c1edb7df5e480fd24e3f1873bac3685f7bedb50364df21e6471f7df414594290cf3df7dc42e8d759679dc1faebaf5fea225bcfedbefbee651c8f38e2884218d5f1e10f7fb88c697d4030e2638c1c0aec7e4e8531347f8cad0089b6d05163466fc93af24e79af79cd6b4a80e1b4d34e2b87ff226174507be83022422fbbd1623881ac9e79e6998357bce21545b7e318207f3ea77f071d7450d141cecccd37df5cfa9d6cabf9658eaebbeeba45b63e3ffdf4d38b0e6eb2c926c529c9a53e4e9476ea0fddcb3ca24f64b5f9e69b2fdb687523843d1bc3567cef126884f0c7d94136fbd65b6f2d7e82201acc667b04d5f837ec7d1d5086d56cc3a5975e5af0d37730df6f01373624c1eee906b16b03bbffc72f62a376d8618782a9c32e6db9f2ca2b4b96f094534e2976a90edccdc52ef7ae743d57d00861cf02ae8a6f84b06759d784f0c3b75c57084397105aca800c029d10aa71342b1986cb2ebbac64f1100be57fe31bdf28d927a0c80932e1100ae4e7d0430f2d6de1081e76d86183cf7ce6332503b3ebaebb0e38b6963a203508e6f5d75f5fc016615436800b7191a140dc9027672f72782fbcf0c2e2c073fc575f7df5f26c32419cfe6db7ddb6b4e7aaabae2aed413037dc70c3a9e56e64c2213feaa8a34abb38f61c72178094cd01b0fa5883fde5975f3e38f1c41307c71c734c0177ce3802a07d64f4ee77bfbb100e65e8bfccd45e7bed55ea05cac01b797ef39bdf5c08ac2c8f8bb1d13f8404f122330ebb7e71ba91ea134e38616ab92732800c21c4fa400e5d6047b8f58d9cb4839cb44559c32ef75f7df5d5654c905619d264b06485d4816874eb416e92cd424c92ad43d2fd6d9ce92902e14799ee4f86cc332ef2d76ff733ba881d2255cbbf366496e390f7fdf7df5f082b7931de32aa0cf11a6bac51c69d01740fdd455e76dc71c73206c9fe223fe79c734e913f9d3bfffcf30be972794e1dc669adb5d61aecb2cb2ee53b3a86a85bb64de73d8310095cd07d64939e4656fa26aba65dfa66ecdff7bef715c7829e22aefaee377de280982375a002193306e4e1fd61323457c84b5632996b9f85ccd7044d60c0734827322680e322479f7b9e1c8c1b5d138091f9931956271908f820b0e68bb62090482eb998eb757d22ea871f7e78d17ddf65ec114272363e7d1cf63c0ebc5b68198d102e5482edf9c5964023843f268430db4a08b656000eeecab8b19702d86c4f7c0763c6bef18b04d46036fb033bd919b82798ec776d473dc38ec616fadb0f2c6673633360a732d946ed6277ac4e82c3ec75f752ae5550c8299fe6c8238f2cc166f627af35a843fb95b9dcc961238493439546087b96754d08ffee5b5f2f40d47df70d78208a885796848da3592184c89bacde49279d54ea00749c48d1a7edb6dbae2ca39045f419a716b1e03072aa2ddde400cab488ac0136640dc1944dd35e4e358716a1ab1dd64b2eb9a42ce97bc73bde51963ceeb7df7e25cab6db6ebb151209cc44cc38d3da8858015e99163fc8201296f79f4208b54bdb6588b42d80e83727b80b90c01759dd69a79d066f7deb5b0bf8bffffdef9fcaaa1d70c0012583e273f769d7de7bef5d1c7b84c4d23cfd4354b24c545b104aedf4f9d65b6f5d0c8132645980b8e7b535efff3138409efc65a786114264436650d60a616030f6dc73cfc1f39ef7bc918450a6d3323fb2324679b7b15eca5a3f4e47ee650000200049444154ac0f0885a5af1903d950a481d1f3b7b63274eaa51fc95601677f232264cdd8329eeee78c182bcb617d366c09a47a117319a8430e39a4c84099880fe24e1fb6d9669b32f6da214b2d4b465ee4898031ee821188307d7ae8a187ca78c9788510ca72d16119beadb6daaa1035b2351ea2af96ac9e71c61945becaa22308173def2e95ccbb74da4957642ff7dd77df52a6effc08382803e9321f18eb44878d87a0823e90d771c71d57483707857e91bbb981f4d7ba4bce74809c10c2cd36dbacbc0fe8e258206ee4a91f820dfbefbf7fa97be79d772e24d56569b6b9658e092cd011c108b241b28711c2e38f3fbe6424cdd37aee65c9f938b0692996d108e1521c95d6a6b948a011c29f2c191568e45b593dc196b1bdfc1baf0af07beac016ac86ef565e0802fa8eddb1d204b69e7cf2c925bb58e333f22758e9079e7b9e8d1190168014bc66ebd949cfb2a5fcc13a500e67bb9772f963828fec20dc57ae1556c6575bb591cf28405abf5233175d5959ee6d84707223d50861cfb2ae3795f9d9673da96427865d71e2c7d99c9a10723e2d3d004c0007d0211d9c684b21111b912bbf914691354e6e36c9e0e08aac218ba2685d4218e0aa1d560e3b471821048e1c615909e42a4b20b40531e1f82379ee91e191c9998e102201003e51bebccfc500748908f28228c90272967d9fb6011b06c292584403f8e63e86441d089acf37de78e31586c752d4104264183073e2910d84f0b9cf7d6ec9e2841072c2d5cb490f611c96b9d326992f3296354232a6cb102284c6d7b25d0e3fd2ee6758964e07c89c8cf58de11335d53675207f4899ef2d99a12f2299caa31f8c2419933f232823eb396408d152b62c2b19769740d2c710c264b864a9f3ce9d2c276329bba54ee55b162928814c31b208214226d38a2c21e3faaf1c1932632bc3ea7bd154974ca9f1f79cf9474682238c7c08a1feba07f1caa5ae3adb692e236e8cb2dfe68d4b3b9128195d0105c18e186965d0511979636efed0713a21582208e34234bb018210423a24036d3e8818bb383bea449a1142c117f243122d2dcdbca0d3b27ee487a80b2e58ea3d1d21d43e99694bbd13a02257e3a9dce51a916e84709cd6a795b518126884f027524fb08e1d60e3d809380f1fd98d611bbad44b3cd9b38b2fbeb8042bd9967af5885aac38b14a48b05d1dec36f90bf0c11204cefe0d3e9708108c664f662284ee171ce577c07e76816dc97256f86b658d20369b3f6a7f81c5d0bf3eea6c84b00fa90e2fb311c29e65bd98c74e7409210798e32cda84cc201d88902895ac5f9710024160231ac5f9b65cccb23d19b32e21441cbca38444a917000334fd076a3258323196a102cbbc9b94f71c39b4de85e3d0221b48e774841001f17e5e1c6fe08e8001cfeea617801b11459064923c2343c8e1467e90534b6245fa38ccee450e38ed331142913c44b126840c817eea1bf9869821a6e4e0ff638f3db644f88639d721950c870c8d4ccd4c84f0031ff840e97f36d5b1fc313b42c63046d5111863231b4b56481062917723659764d69078f72108b261889effbd23e97b9153045110407d74c538224ab280964227bb96ba1119df9185cc5708a1ef91263a8a882284da3f8c1032ea961fd3a1b7bded6d25b881346609334228f3c668eaaba53674495bbd97887c710810231935448a51b7d4d24f8233fa83dc65873786a92684f43d8410c19485f35988abefcc0773434614219421f4bea33a2c47328f4479bd53da5d92143d90f9738fb6c6f86b8ba5ae32a408a17bc8541de669f44aff8da3b146ea116263e4b3611942b293413476965727034f4f90d97a396ccfd039f1e21b219cb8c85b8563964023842b0a942d117066dbe0ad154c5682087a8f0a982a21c13836982f03b3e15f6daf959dd767d822765140942d819b0291ec36d2c807613bd81365f25fbc4a332c43a8bd309a6f22282f6bc92e0aae5b89a40df05bc6d18a960409c7ac4a4ba6b846082737148d10f62cebc53c98be2684de91b25c0e8870a839a29c49e4074822483521b4d4012104369c64444679b27bdef7f26e9d25a3080b07543f39e0593629b308d0901e0e26e28448ca54d43b6f12bf6765ce94093401703676e92e194516f583338cb80075ed42ea2c7fcb7b92f5b08ade0156ce6e3679210f608d1c2313960022bddefd434a95956526d365088711425141844679e41d82e1bd3199319146d9daae81499bf5c7b3b321846497e525c816c3e479efa322a3328c0055dd3e47721103b240f4bc63c7c8c8ce32428c1c83c9983140fa21b2899422b9ee435ef48b81b5ac05e1913d4622184ecf21677443dd39ee44bd3256f42a4b466b426819a4ef8c07d24677ba84d0780b5ed03d0658164b1b64dae88f76279aaa6c44465fc95ad6db982387326e9695ca6466f9a9b6e5f80a63c66940a49038ff4f47089565bcd427ab16c7816c640dcd0b84da9c7bfbdbdf5e0838c741a6ce58892077b716e794082ec810d31be432f38be3612e08009c75d659450eb277ea90ddab758943419e7e23e122e59e1d460861833137ffeb777145bdcd45c18ffadd9b9ee173a2c53742385171b7ca7a904023842b0a15becab609d6c14f36518670d80edff593f0d9336c8b5533ec5ff71d6fb61721e4ab08d6c171f693bfc39608d2090e5aedc4367965c53db28e70761421e46b791d4680d73d5965c5e6b247f017c164cbb569d81e013da8d6a215d908e1e444df0861cfb25e6c42c89104883282408b53cea9e7b8dab5d172490e3b00ea12424bd2647fdc23c2662b7f5903048b53e9194ebf7239dc9c6b409bf5f85e8c46aa38a180334bd7649bea659d64a42c591d842d3b67dae973d43b84ca06d2c910024904c272c3fabd27c3cb7996414378901f755bd6c999d617cb3e114206c0061c482bb221b334df0c21c79c51e0402712692cc850f4508650b665588690fc2c534130f2cee5a80c21f97a7f4fb64e7b81a71d3c8db1a5ba32790c96f71a8d332363990999205bc89fe5b0080262e17941024b413d2363eadd4e6450f6491d8c928c15c345a60c26d243ee88b760834d712c89141d1518f01dfd2057cb392ddfec660819613aa7de2ca1ec1242c45676d0f823a122a48829bd41b4b443f455bbb29cd5b8da6c85e1d40fa4af4b08650e051890f55c8cad6c679d959b2e43c8f0eba3b99031172441d0c880dc2c43d22ee4d71c341696fee4c8951a8e922154a7b6905d965a1b277aeb731942ef5dd21532458a6b4228c042176410e925323d8a1022d3f41f4e580d907721954d3e08eeb8cee4ea197ae75c7c23847316597b608949a011c21507449094ad6013041ae1acd76460f0281c631bf93b481c9c156c13f4eebeab174228d02da0876866d767b61f8eb205ec8f55316cadbad9a6518410e6f385040b9567a592003c5c673305f1d828ab490410dba6324b6c02aee4cd6984b0e7015c6c42c8090c21448038b71c514e3c90e3d8034d046f14210464c0c83d9c6a99030ebfffb3a90cf266f38e9cabc3e1556fa25bee979503929628c661467e1001e02b4bc969469c4665082d959021f4db33f58be1c0116877df2104b2c889cc1f875ddd888d2c20428674208a809823cc01cfae94f32184798790f1d1df181e59976c258d5c0ddb54863ace851066a7b364e11026ef86cab41937ef8d3158964bbac778cb0a3258b26a5b6eb96521adde6bf41e27f2e03d4b46c7d859628b04887a6a33026ad9a1acb25ddcc8872e59328bf4c994216cdae079049891a427f44fb6d9f7c308a13620947e87747609a1882f0284b8d35f5153e4462457e0c277b2ab8caebadca39de4ce09b0b4936eca52cb06fb5eb00211920915f0c83b8df424c7371897e9328488ac4c24d9e967f7dd56cb6165decc3501140e817b2c55466abb410cf5d5ef100aa2700eb20bb172cc0373473f1077c10d3a6e59522e65c8c68a347374c8d52633a308a1a08dccb12080be18373a96777497f306068d10f66c0c5bf1bd4ba011c215450cf3f860f0d24a1ae490dd67ef879da70a2fd969f624bb8bf36d6417bb9772059a052405ae05f6d8960483051f0572d9427e80c0ab154c02dfeccdb00c213ce787091cda04ccab18567658156315157b24c828f02d606715cba8c3ed7b57b60955d032841312b4ddfa7fd47dc9677275af1235d584f0d9cf7c62710a2775d54b4681a10c8a2c9a0c89cc02f2c3d1431a6b42880c01c5640839fb9c634beb64853c1fd004aad965d4ce5df52ea396466497514bdf009d4c1c800d180360d9ac6cc52c92068847114284c03d0c9f65a3f5f2b5e936bb5087ac1340f58cc89d089c7e71ac653fd4e933fd9519b52c63be841081226b6dad77194554a6db65348470b64b46bbba84f4c9b059ae820c22852e7a481ff45f500069450065d9442dc9a72684c8530821a3840c0e2384c9101a7ba4c67b7932808c20fd42061115a438cb74bc0f917708c93de386b86a03e39ba531b29622a4d95486f19539254351520405b9654065cf6427050b185d7db04487ced05d24475f655405256a4228222ca08114d457ad5333114265584e2be8d0ddd2dc3262648d5e9987e423932beba74df4b11bb1ae7719e5c4747719e570649751449a9391e5ce290b81378edee335af117c320e21ac37d1511f4268de23ca96aa7677199d14762d463d8d102e86d45b9de3944023848f9466dea197a9e3932051c8587db65fec2ebbc40f10c81408f5aeb95706ba41e6d854c144f75a6d8510229eb2796c127c86eb82e16ca7e5aa828e21846c5c1dbc53a6c0ad8029bb9636b2e9399797dd66eb94cfb621986cca72dde82b81d8effcdb8f06fbeeb95d91e9a8b31bc7398f56d5b21a21ec79e4eb63271efbe8ff2d1981fa02564809c7cb1280712ec7ea6e2a236b040c1194fa780619048490a38d38e6688a9a107a9750744d5689830db0dccbe94708019da51532502ec05a1342a48053ea5e842b4708900f2734cb23012747d9f23b20eba73e8a43f6c8724bbf2d7daba363a38e9dd01ec4c4fb6d001529424a95ed19724130100f8023d3643c104284075119b5cbe8b077089321d4476d0d21ccae65de651b75ec84b666a920925c6f2aa3adbe237f65daecc738ca0a3258fac578dc7befbd53bb4d5a4a98258fd9414d19de8bec931032820c698cb1b66ba371c8a6320c2292a2cd3ecf111fc6c5d218d9ca9a1032aeb2b80c361da54be60bdd2273515d24cf67ceb26438643fc90a09945d93c166746b42882c22733976a236aee41b6760264228eb87442153f5b113c61429a3db22c6f4902ec8d4e51d423a673ca73b7682435167e045a2cd3359d4ec222cf2ed3e7d5596e83279d125fdf33d9d54aff92a5b9ccb58e983794fb6b0aa4b08871debd233844eacf846082726ea56514f126884f0c782cd198070988f203026cb66a588952302a6ec0479218602e4ec4d7c0fc1463e02fb945547dd4d68b264743e84d06a12016a01c15cec0c1cd74e4158f81bfba66d2eb69ebfc45fe393d9548d2d6c84b0a709b58a15db0861cf035e13c207eebfa7385a7552d6df088fec85cc4236b51847b36a42684dba8d4c004d1ded029cc810479b138d00690b47d3d231d127d91fcb1f43682ced04a2debb42082d914308bdbf55134299221942c0c79997bdb0744ed4cdbb5308b04c050004aa485736095187f7bc2c8b50870bb8230fb250de09b33cb15e32ea3ec02efbd80548e320f2c620b8cf3b67226cfaafcf7e5c1c67fdf13ca28ca400601b91e863bd6188f732b5dd52beeeb11339372f470c28db7b7e483242386ac9a8252ec0df3b0f0883fac84426cddfda8b50200fdaa4af88ac8b11f33c828350232796b274cfb6641c193e84d092d16e86d0cbef8c2612239b4567643cf5c9b3229732c1b2c532a8de59d346e4818e254368cc6b5da38f3976822e317848a38d7d041b904859554b156d0883b4d841149953a7f71f95ed7fe4268410c1d5564b6c7c6e398dec3142686c2cb11151450cb587eed02bcb4b9137f2a27f74d2d2cce88edf0898f7e73c174268375a0e45bdcba8a082a5a974d8125a75e96f32a31c0ff24308dd6b9cbc5f69ce715810773bced5faac5fde2545fcb417d14b06ded2249168f3146916bc907d776943de79417ee93cb99b8764661eca229b87743d810275cbaeca365ace4c96997b64617ce1c1388356e3c0b97195d108e1b824d9ca592c093442f8e3802adb0de76137bb21e068c9257f84dd84a5ec089fc07be202875631b15f7c05be01fb915706b2aaaabbf7810c61bd64341942c40dce0ecb10f235d84efe923a82bffc2176dbea202b95b4c105e3f9035e8fb07a86ad83e97c30fb2820ad8d102ed68c5b5ef53642d8f378d684f0bdd75c5222f7484d2e6080c4782959fa3f846a1ccdea1242ef4f7937ac06354eb7cd2938c50054768673aa1dc80c8718210446880aa71d2151b6685632841c6f00879404c480adcc8b77ce44c280a0cf38b3ca036880db7208040411e0888a7e212bdac901cd4ea280ddfb56da8b887166e39c665748608f3c252b17392204082c679791e01c73e801b7cf39dd39e600016240b2fba4e594488ffe210da91359092124a3fa1c42c6408650b6256d092124f351e710928df6206cb2359e45148c8b6c0e63c758900bb9ea8b6592326474cbf748374285100e934508a1cc926592886ebd6434841069108144b08cb93e21a4963dd784d0d821840c1a1d33c674631821d43f192a0704930fb2ea7d4e1b09b91f49415a1018d9575960ef55d02f4b78e81fe36c6926f24847e822928dbc6a031d503e638bece66c4cba60eed1f36e86d0580b3824b3e65ee36c831dba8bb42184366741080514925d53a665b0de99355f92e9d32ed959cb3db595fc10423a685ce9bdaca6f1d656fa6f5e647ed64b46bb84907c4208b3cc5610c58f31528e361b57f3566020e77f22a61c0fb843e7b34a41a4193e08749897da1add3507115de3bc5ccfbd6a84701c56a795b198126884f0c7182f482aa02af0c827117414f866cb046fd9122b69bc7bcdfe59bd648f03ab563c0faff3fe341b0bc3d9e03a60c7b763374208adf24008d9c77a5319e50aa866c928fb8814b27f3038bb7f5b3eeac80998cb07d35697cfac7c6107d95dd8ef6f6d622f617823848b39eb964fdd8d10f63c963521fce2173e539cc89a10aa1ef070c4ea5d04c7d1acecf609f838c19ce3ee59673274321532111c73ce2cc2c139e7a872b065ea7c2eab015445c538f0b2249c684b006515dd970c27e759c684a30e289567f91af0b421086738efb4c9122167481752653985ba816b0d741c7b9b7e004865bbb7cee6a8036103e6dd2c069923641c615935c4d2fdc891f238e6c0998c6494b4d53b07decbe260eb17a75c3b5336b98938eabbf7f572e4832c0b32835c2032596ac2c9d67ffdb21c453d5d20f79d72113ca4d4f71c70992b75200b4826329dec9ff7d18cb13151977e30160c0c63d6ad23a408e944bee89dfefa1f4156173d417c64b00407181e7da203d9b69bd1d51f445ddb184bc6cfd8204ec3fa472fc85546cea5bdc61191423818ea648eb547b4547b050ae80982e35e84ae7e07242fdefbad4f3263da656ceafb902cfd425c1968ba22faaa3d9ead9705f95b96ccdca4e7648370712ee81902e552a631f0435712c0f09dbec8d6e9577605a563ee214bf392bc8cab77506a42687ed0251b1720f60220f52ea33e274fef81fadc326a65d149bae392d5f3ac79939d6acd01faa23f69abdfe6039d210b73a59e43bed707ce139d5a8e572384cb715457ad3e3542f8930ca155517c8d1cb9844cc906c2383e97c0a9152eec8520221f08be5b6d51635f8ed66273ea5754949bdd4bd92e7622cb48613bfbcc167b7fdcb9ca02bb6c2d8c6627616af037af80b007f05af039c13a0490edd03e3681bd64b7d869d9c1b6a9ccaa35c7fbec6d23847d4af7ff6fe6c101bef7be3f1d3ceaa7feab2c6beb1242e003a0c6fd0ea1ae213c892859f6992560e936879283cc194ea68023cdc1f439f0016a79270a69e4a48a80e51c4099244b19725feab5d40149e1c0eb9f7eab4f86cc0f40457638fa4847ced3418a38b78099b39d4bdb81ba3219beee7e481c55e564895f3db4ee559eb6035fe41231f4b9f22c1f513e2214e7dfbdda926c1182a7fe6470905a724bdfb33ba57a106d04892c43c8f4974cc84e3beb6863daea1ea487431f3d6134b4372f8f5b32625cb2a90a5920deb26fee55279992c3b0c377f5598451fb117ded4764fcaf4e86882cf4c33869a7bab4cbb3c653fd324ffa438ec89fbae80ce22b4339cc503194c6d63dfe261be56b075df04c9667ba0ff972e57c3fb2d32f6dac8d363d773f834c0ffdf60c22dfdd1953bf185e3262ec8db1f6d0edfad2b66cc2a46f64431eea3216214664620cf4dd77b55eaa5b5bb583fcf42f3a11dd53b77ed1afeef95874932ec1869c4398f9e57332d40ff5e4ec4f6d240bed352e48a636e40cc3c8df98a7adfa1ab9c20b72affbe17b7d50d672dd69b411c29e8d612bbe77093442f8e35dba611b5c65d7e13b9b0f77f940f10fd840812f18c91eb3e5ec688d8b060cdeb987edafed69de7d670761239f091ef31bb4213e0d2c85fdf0db0f9be9ffdab761f3043fbd3a81e8095666e3bdd866d9ced8357d6183d8e9e59c1d24ffb6cb68efb031554123843dcbba7bec8477a1865d00c1c41ef7e4064c400a780d3b92c1e71cc99aa4ba2f190cede178a75d015b6016871f89714ff73ef5ba2fef6ee9b7e739bf9cf2b40921a89d4ccf6993676ba7345bdffbbceb782b3bd9a66124c8f7792e7daa97e66993e772ae8f7b01712d971c6b91f1d34e3fe97b3eafeba9fbe573f76789c8b09dcbf2acfbea4bdd59be974d64d256f7fa4c7b5d8c04523bacfc94a95f9ed3e76436c934e4d7b39181bfd595ef536fcaf07dc6de3dca1d55bfbee79e8c6dc6b56b6c6bbd744f9687a6cdf55c49b9daa42dda9e086c774ef98ebc6a3d8fae7649907ed41ba9c4595047dd5e6d8d4e767536fae17b6da97522edd6a6ae1e45679375ecceafd45767caf55fdf1215d77ef3ab4b9ebb6dd5ae8c73f0a22b0bfd55deb831aa67089e75f18d10ce5a54edc6252a8146087f3c30f17be020db9e4dd76abb042bf36e399b06f782efc3307cd8997fc1cad883f847da10bf273e56ec56ea493ba34ab280b2895989143ba14c65f099e0b6ba60faaa700661238493059a46087b96774d089ff58c2794b5eaed6a12681268126812585a12688470698d476bcddc25d008e1dc65b6149e1010f4fa85d519dec9b7126354607b29b477926d6819c2c949bb11c29e65bd9807d3f7dcb5567c9340934093c0b291402384cb662857d98e84103a2ac9fbbede61efee32bdca0a6709775c16d02b1bb2879695ca002ed79518731d864608e72ab1f9dfdf08e1fc6537ab271b219c9598da4d4d024d024d028b2a8146081755fcadf23148c07b733648b3998a4d4dec5e9e77d1c6507c2ba24960e21268847072226f84b06759b725a33d0bb815df24d024d0243006093442380621b622165502364ab131c9d7bef6b5b2c3b21fefcdb5ab49606595001ffadbfffac3c1be7b6e3738ecb0c3ca114dedea47028d10f623d7a9526b42f8d4273fba9cebd6bdbcf00cb4b3c3e2b89bd4dd8db35bfe4c4b133cdfddc04319333de79e6c0c934d2bc6d1b794998d78c651665746f5263a33f573aef2edca33ed9feef3c87b545dd3b571a66746d5db956b779391b9c87da66767db866175ce46fe33c9602e7d69f72e4f093442b83cc77555eb556d7367b25dab9a6c5a7f573e09d84ce7e1effda011c2090c5d23843d0b192174e6cc27ef7d7070f307dfbbc23104a9da9a71e78439f8b43e447ba14dcbee54dd632eea72b37b63b640ae0f74f7bccfb363a3e7941583336c57c4ba6cf7d992d976ceb6f7b72d73bddba1ef95a70df50bd469b7b2ea1d1efd6f8dbd28a8ddc0721441769facdbdadd61d3ee5ce96bd74866a747bffdd4bb6666b7cf7a87c7b423242df58e1aaf7a27cfc8afbb43586491fea68d3ecf0ea8d9f97518a18f0c879d39a8ce618448799ecbf10fdd5d2cf39cb6d6bb61463ed3ed625ab7513929abbbc36b8206d9f174ba17e95346bde36876791be5f8d4fa5d6ff39df68dda8974a173af3dbff249a011c2956fcc5a8b5794406db363cf9a8c9a04565609b0eb7cc8efffcf631a219cc0203642d8b3906b4278edd5179733d2ba04cd1937c8e0669b6d56ceae19d7e57d82db6ebb6d70ebadb79622e3c8e7f8039fbdf4a52f2d07a63a705ebb76db6db7a9ea11afbbefbebb9cb1b6d65a6b1502e6c0f84f7ffad3e56c18e5397fc781dacecec9b96cc89a33739cbf68f98a72bc24edf05687723b4c15f9b0c5b243b09dbfe6a0f6100cedf6acaca983e07d2f4ae460d61b6eb8a11c248f0878597eb5d5562b64da21e10e4a778fc35f73c8bdce38cbed8c33ce18bce8452f2ae519835cca7156d1c5175f5cce9163449d05b7d34e3b95b3df6eb9e596f2bd83c81df6aeddfa77e38d379622b4c1e1f5eaf66cb69fce9109fa6d1b69ef72388f4870c04e62ca22f71c91e0905c078dfbdc01b78e8ef092b9fbfdb63980f3e31c9ceb8cc29ae0692719706811effafad8c73e567420e7d2e53b63e9a05d879d5f77dd758574aadb1869b3330ded7ae69ca67df7ddb790fa534f3db59c89a76f3913d221bffae11cc1610451b99ffffce78bde9011ddf3ac651fde7171bea1be3b2cddee6afa510725d25efa662c1e78e081c1ab5ef5aa321e795fc698331cf5b6de7459c67df5d5572fe765ea8b71ccd119ca55cf9a6bae59c6c6d98aed5ab525d008e1aa3dfecba1f7ceb86333d82498d9ae2681955902ec3a7febb853ce1fecffb61d06871e7a68f18fdad58f041a21ec47ae53a522849ce13ffed4e7060f7df32b85f8d4849063cf417ec10b5e50484dd7a15f48f338f5761bfbf8c73f5e8a41ecbef295af14e737074cab9353ce8868d705175c305525e372d555571572b7f5d65b1782e47b0ef88b5ffce2e2703bc8d5a4dd7efbed0bd942349008e486517220364287c420720e2cdf669b6d0a914336afb9e69a72f8f7fefbef3f953d444ecf3efbec2297adb6daaa10b87befbd7770f5d55717e2e27ecebc03679138240661422c909ff5d65baf90a31cfc8e88a91351549ec36973e9b3329c0174c515579467905ff72192679d755621b508fbeebbef5e32bc0e303ff1c4130b29436cc8409b0197bffde85f0e707fe52b5f5948a18367cf39e79c52dfc61b6f5cca531f9284181f7ffcf1831d76d8a1103344d598e88fb21c547bc71d770c4e3bedb4429c8c858bece9ccab5ffdeac16b5ffbda476c2070fef9e797b1405c051b9225334e88958cf471c71d570ed3dd74d34d075b6cb145f90cf17bef7bdf5bc6f0da6baf2dba4326daeb20747d2757f57b4f65a38d362a9f774921227ffbedb7173d2237b2f71932874c6ebbedb6e5b0f7d34f3fbd9041fd1f76a0bd7762e8edf024030000200049444154c49d77de3978e31bdf5864a72e81832f7de94ba53d0efb453ae934d9eb237df3fbf2cb2f2ff79867da1cf2ae0de42d28d3ae555b02b32584e6e6273ef189b2e281ae6517479fd36573c721d6f0175ebde4252f293b07666e0890c12a916f73fb0b5ff842995f2eba6afec167d85967e76101cc4bb0838ec361badb0da2c0eccf7ef6b3654e9a0330c2dc0f0e9bc7022579bf4c9970ddb96dfaa42fe6923ed6efec9837b04e304f3ffcaf6c18a7ddfe6737eebffffe1280518ea0a120a072e1d6b0c091408dfb61247c3447f55f60eff9cf7ffed4d99de4e41efd15cc748f4bdfb4d77770467088ccc9870c72a69bfb9401d3d9bd04dfa2f9daef7963a20fc68f8c94a3fdbe530fecd30f75b04fe4cd5e640584f2b21a24c1273220cb1adfe02e6c2367c1ab852ef1a47fe79d775e099e19eb763509accc12301fccd94f3ff8d5c13bdebee3e090430e6984b0c7016d84b047e12aba7e87f0f18ffbd160bffdf69b72ca5335c3c24830d2e33c7b86f162701809170377fdf5d7978c0ee79b2197d961d865c84c3cce7f2e99299f33583befbc7331e69c729f230e8c18e780b32dd324bbc8394180112cc65a2687a320c3c499473090213fb23d975d765931b45e16ce725284f2a4934e2ace914c1d438bac6907e2c111e010c8b47df18b5f2cc411897bf0c1070737df7c73b90781f3b94bdd8838a7453f3818b503a07ccec89e7bee599c17a444e6483b10151951a407a95c679d758ad374f8e18717832fcbc561108d558e3e227208b2678c2d22c67190a97dcf7bde5374822378ecb1c7167929076927036d906dfdf297bf5cb2660071c30d372ccec295575e5908e181071eb802a9e5ec706e90d5ae6378f2c927174286fcadb1c61a539945f769176286107268dca3efeae2341957441ce942b6b44319328b9ee7f8729c38beb2c4b6394f9638f2251363825c22639ed57f0e35c74a20801366bc11bdbdf6da6b282194e9bce4924b4ab69153b5ebaebb163d40bee901c7d338a947a61df9e7a8cbf6d2ff33cf3cb338e6da193d235b4e3587b1edc4d73310ae04c5cf9610c255916a7a634e207f2e9f0b72c9460b8e2146304e061ae6c2a3102f5979ba673e9c7beeb90553b3a41e9e989b30d55ca49bf00536f8edbed80c3802fbccad7aeec34bab18cc114117df235d30140ec1b97abec234580f2b61b3bec070c474bbedb69b1a3d36c29c37a7fdf6bf809c60125c45e6d8987ca74dee616704c5604cf718048134e41576c2e164fbcd6932de7cf3cd4bfbf55950cc1c672fd5092b5dfaa6bff9cef76c29390a94c17e72d52ff5086c0aacc169b8e95e38a4ff82a830935d64f3c8c6b3c6824dd337e459dfe00c1909e879d685b4eb332c4cc04f10cc7d826a88b83ec246c44d59da48ff164a08c9cf4a0eb6439fd8defa358dc59c86749f1d210b728c1e2f469b9279e21f09cc18136335d3fbe87db4555be8257baa7e6336cec4c05cdb4cefe111bd317fcca5c5908b76938db97ded0d1f6d19c2b90ee43cee6f84701e429bcb23dd5d460f3ae8a0918f2fd418740bcefb670c9a8b532de385d430b2009951433e100d574d0891054e82ace22ebbec520c1ce785017fe73bdf59c80ca3c68967bc456f444b2fbdf4d2920db43c94b302684d6af5c882b90779e4308d2284327040910145026412112cede0cc9095e82de0d23f65de75d75dc5c0ca162284758610711b4608f599a102c81c247db2449281106d166d453a386f0885fa012442a84f32a721980c8b259d88d411471c51324f2ece0447896c45d6fdcf7938f2c8234b04dc3821849ccc642139969679722c398d64cf89217fa4d2f2d75cd99448b95d1d3ae18413ca16e4fa867005d83d83480a12d0098ea63ae80659f95f3f44d21142c68a5cfd70c4384a0c07472ecec7c1071f5c22e9751be887ef6529396fc81a79eb1fb2bae38e3b16e7c0925e64cda64bdd0c217dd3168eb6bfc94b16987ee5dd469f0b442853d025010f32d207c45e704220235911ed2403ff8f331033177c68f72e1d09cc96109a1b32f6326f021399ffb01e2941a47c4faf60213248ef056d646d9041384517658d0e38e08042fa102b97008bfb38630259704fd9e60ff222ab4def39b330885e9bdb48970b1eeeb3cf3e65defb0cae584100a3611acc35e7cc35812a17271da6c1e43df6d8a3d477e1851716ccf37cae6408b51f29341761b436b027c8209cd3572b3960b832f50701438ed34e65a63cc12e59d3ac5e814ff00f4e22a4c898baacb080b1ec16f92174fe660b60353be1deac4a81bbc607cec04c644d700871f4bf80147922ebb00a9e21d3b00d366b8f369035db2018050b8db3f18541881eb992196c231be362dc8d17b97b465be0b080a5faac6c3016ead53ee3bcd00b213ce594530a1622d3fa46b716cba14f7f602dbd84e16cb631622b908ec5681bfd325e7c22416d3a4c2f87bd67bed03199e9796da1977c00fa2310446f16432eda4a1e02f7fc27810a41d5c5908bb6900ddf6ce73ddf39d86fafed0b16b55d4667d2a8f97fdf08e1fc6537ab2797d2b1131c7b0ef3faebaf5fa2c688954b664d868661f27d2e20e59d3d860c514118185d4085f030ba0cb1b23849ef7ad7bbca0446221921cfc8fe852090852c98082b12c9a072f419863a43285b8510221dda2a2a2cfbc37142b26ac2c1f022037e382888874834221ac75fbfb405b9922164c0bb17a3cd5033fac82e67867390cc29c2c99021b29c24fd5737678563c8b059466469e445175d54882f8213a70729e128918b3af469cb2db72c4e0db0953103760897ff1976a494a3c7b03314967f728890a738a164814001ed6107101b57116fe52096ae1021cea00c86f66a1342eb336de2b0e88b76cb287068383302094830e3a94dc832e74a44ddf81b9f3a53910c21070a499365a523c673efbdf72ee55946aa5f1cf26119428109010b65c914d057fde7d04687391b1cf1638e39668098923d7d3546644b0eb213c6387a8104ea07b93542382b385bd637cd85100a9a586e485fe9a40bbe217b48114c4428e82d6ca4f71c3d01219802af04073d2300853c98fb02147046661e614810cc9c551e82886cba4f6689e3af7e84028ec20ee445a61f4183a5caf71cbdcf7c470891a1903384d0fc35d7cc4bed322765188f3efae815c6dd77da8738c1008140f391bd5097bee92fec874dc8a0cc10ec4350b42b97e7c90b86c03963106c438c05233d83382396e6b72c271b8440eb03ec6287e0a2d519f049e614916313ac4440dc8d1967971df11d1c82c1482a1c2137841236fb0c96c110b2f11dfcd10eed4296f54db9f04b1fd91078438eb10dc64c1fe139dd206f995e59a09b6ebaa98c9f7eb02321e70b99642184880e020ef7f561b11cfaf485acc98f7db66223efab6749f442fa3c9f67d96b3ae03514ab8cd85e99fe511bb0cda78ed93ea32d56e49803f446b093ed5f8c318333e4412f057360525631cdb63fe3bc8f5d86376baebd412384e314ec88b21a21ec59c84be9607a849063ccd8d584906381c030b422d9b9b49d03c1f0c9ba2443c8f832aa2149a2d10814a784e147249026c632ef78a44cd928df236622e022a4a30821236d8922479f11e6a004b41997ec8ec93902a4325108a6a82e6724c4447b197acbbb64f8381eddcbf3964ae913831e42689922230ea0b58321438cc84bb93521646064ef387c9661027697fb3c8b58e98ff671a63812ca612c91164454bb3954a2d79c384e2747ce679c10843dc415787b9673c1a1acb386e99fe5431c0f2418710d21d427590386487b456cc954661799e25071606a42281a8e2c86102a8bb38b0caa4794955ed519be10428e00428e0032ba966dd1453aa22dc9100e2384f453f99c315912652937995ced1045d44f72e768c711cafb5e471d755471b8f4337a41ae8207791fb6672868c52f7109cc8510c21273158e054fe0250c9221320fe0ac6c96792440a57cf3dcf79e375f1044f31e56581ecf09a3db32f730cb7268c13275888cc32f84421023ef24739a64f51000faee5d43ab0f64cf94a16e380527045304804208eb0ca1a5e83521b41a010e983bdd2be5705acd39644ff6873c04cd10c26c34055b059bfc86e9799f4f990239fa6f793e79904396cbe90b72fcffd8bb1360eb8af25ef8bb4cdd4134260ee84daa2c35260e291383c601441114078ca562a2e280ca24cae4848a26a204011170400645458911711e901810105f063588840c0e183589c62196e69675ebabdcba957cf56bf27fed77bd6bedbdcf397bef33ec5e55a7ce397bafd5abfbe9eee779fecfd4da661c0442f189e471a337f06a4f0710ba27001b9fe179f48367a3d197bef4a522bbcc05b089a7e82b59c4002892004f051012da097c0285c680ee8c63bc8c8c668c52b53c311e2053df81553c168d8065b2496484b9007a933e60dcf1e01a532a5b77698e6fa1455fd1addc1b4088bf3226889441bbf5001775ff03082fbae8a202cad15fb8ed7a024220de9c88406268b006d60b1032ba5b0ff608c3857dd72d3eb808f649a7400f3cca3e647c62f81f5a93f3ee5300e103777f740384f3263667c17fae975f7a0183db08afd80c809062219f8dd7861725a08170c3bc85ff004918841c42a00f381052004452040835ca3a004109129e49c1e1b9aa2f163956730a1300330e1052562839bc9496a9f02b02194d096f42367912fa480852627c06381242092d150201cc0020d302424a1940480121c00032d63c00d8e7e8330d208c32c0f24631013a0922b4a3b0a1114581c2922243fa0a9c038fc977a0c8115c14c358d9f50778e549a518752f0a0e9aa72aa8f6d105bd00608a8e71511a296b2cea042340c5522e37261ec23e4008a85a379456e1a614a43a1f2f8090220090ba872795d24a09a49c698347b82f87507f29d9e69eb228348da7d57ca23da53b39184380106d2978842d452c452df493f24671eaf3ae6e04fed1fab0380aac041032cad8b7d65f8aa9304ad82ff829e0667ff14e25ea022f131d816f588fd62260051059fbc054c01003183e8a3fd853d6bd7dcfe80670051032e6d8dbdec708a76dbc1c30123a08400103f81e4fd42c0121bea16defa3d8e369c0a17de85d35f01b9a4580d71e4443e34cd86cf77e7c40c83c5e840f09e9c4ef85afe3937888b1a23f90c840669fa31fde612e784dd154bf19a37813810274278bb4c7e888176aa38f2750d2a53e306ce21ffa5c479ce0a764215e73ecb1c7965c7497e7c84673c2a3cbeb622e788d8d9f4c30e7f81a79d1973e4231e7b1756f5f611eefa9012179402e9015eb012efa0021e3089d821cc077d7131032e032ccda938c1e7406eb79d12a311a088f26a7ad1b20de5e5e8fbe9833462a809003c0de623c5a6f40f8e03d1fdb00e102446103847326f266008404935c338c5a68652ede1fe18618240149b010ba0000e59ee0129204dcb146fb1e231907080968de1ecff0cc008484715fc828801240a84feecd710c80a99c138a00c127b4812296fc3acfc5924a48bb1fa3a538f5858cf67908030879f28c0fa80192b441f14858104b724250fa3c842cd1140d6b81c58dc516f002740924fde739d0ae3e530a816bdeb414d0898790220368036d01771404f70179dd8b02624e781a852f45d85166fd2fe493a2c553468922b08547015f945960dff3ace27d80100dd049d89890d03e40e8794a192507ad283e8c0a9402ca10050bd0a5bc743d842cff4265298284134303450efd28c9942e0680210f614246b58f3e722292b7426165a536bf09239d333b68cd6f600a4c0b08ed63fc86773d95a193cb6aef50be79a97801ad3f7b9c5103f8c0237d8e9f786608107a8ed184a104df0204f1347b10e00008e408ca9ba658e32b29dec5e3654d0b9dc66f79f08121a093b2372b0f610d084dab6807616fbc70fa32045aea2510cf204324fed717e5e07efb1b70a6c403b768c9f34771e6d974914df8281986b7252490bcc257849ee203946f3410c62eb4120f723f40287a4504045ed357ed78b580d05c338431d001ebc6c33bc9a885a7e149a233007cbfbb80d0ffbc460c8ac9bdebdb4a5d0f2183c5380fa17e2d0200c543d800e18eb31619ce4368af025ee420fd2adf2d9a653640b8688a6f9cf7354038e7b998b6a8ccac0bcaf40d6b2864545828e08001015db9e46ca4ba27614d99112a038851ac79bc2825842bab2ac59cb28eb1515e3c539ff9a75dcabd36292814f43e0f21250140e52124c4096e9e26c0457baccade8171b1eeb1b41f73cc31c5e3042850b8ea6327cc010bb170cda11cc22140484053ae8469019c940e4a883e00a704fa384088a64015106c0c29600024fa9ce2c833989051e19a80b8b100581440ca95fea19d1c4e1e328a682ec23607ac77e79d424921022e099a5cd61b2504b00d2014aaa21f9457ef04987862d17408101a9367780628a514dd14f3f1ae54d2b3469203c8f20e049b231e504aed89279eb81320443b2163d6022f1f6bbb354361a2745284799b5932270142f4f73eca5edd3f003c9ee439b382d6fc06a7c04a01216081f7c493648fe6c80421f642be5df825fe8aff7a4772ee78008600a1efec0b208bb106c8b1de4503d8078c2af681f7dbdb890e605cb1c6dd8f0fdabf8c488c2f8024c03a2f40c8cb82570bf166cc9b0610ca93240bc80f86aeba0274bd5c001d91194094fb00428094c18887921783d74e38393e27aa03dd79dc0028112ebc8a782d39005ce27d68c1f8c6b8449631fa01df75ae71dd8fd502426de06740275e69ed00b6224184d6e2c7640abe666e873c84e4eab41e42de56b40008fb3c84deb108bdc3d81b20dc99f9d9e38c040c17e41c633340c838621fd02fac6b86894586fc2e1a108e5b8359370f7ad8639a877001f2b301c23913b97bec8410b9ee398429219e52d9f3ead22440e8bd8056aea12aa38430e12c3c89a74f2893bc2da130c025414d2100a26a8b6f2a91127ac983e139a2e428d2128f1e86040408e160d50648c4b5bb8730473f0a0190928a70846b0021f0d7ad325a1f3bb1120f6100210f2940031053bafccd8a07008d03843c7b9414404ebfd1051003fa28678436af224f2c45314777f0b2ca59c9f98e009f368037df79f7340a174088de94c128a8f5fa02b40208e3f5d01ff348f120ac8480f501420a0e05387952bcbc722ceb32e70919553802183637e699120dc8b99720ec03848420e592c2676e297940aaf5c7b3c94b6a9d587fd300426b89b25703c2d022e139c9cb9cd71e6ced6e5c0aac0410da4bf81def9275e81289c02006c83114d94f2eeb1558e1296774014aace3718010afe4bdb2bead5b208807dfdec117010aef6574532c4a5481f7cb55168eca732e2a000f670cc1a3dc8b1fcd0b10daa73c407847f20727cd36c3185a01658c7529d0d37d8eecc22378d3f0767c4584850225f826b9200a047f66cc12ce89678a9c008cf108063872022df12911108c6b00236316be4efe65ee66e921ac65aa6aaef8265e0f08e73dd609b9668efa2ef701777dd5a4737f3c84d62139872e68d10514f81c1e8cc7fb3d6f2f6103843bce28fa3350e0150cb6e4578e2b11bd030c265585017a684d4cda5fabf97ed180709c4136d5607f7f8f7d1b205ccd64aef09906085748b095de5e1f4cbfedaacf1600d08dc7e679c3b80987ae476da5ef1b77ff6a0021e581e0ccb113a9324aa8615cbe97b747a00a55c2b8fc4f3011bebc5c01082cb61415e3155a9852e19419a13ca978a7fcb2bc1b1671d66e80017064e5160615012a642b07bd13f2018443e7108ef3101288943c16397d045285420610f2e4513054dfa278f08eba9f257e1c20e46505b83059de3f0a8f76087ef3219c8b159fa753e893d0268a1fe505d022d48167bf7908b54511aaabb78e9b738090951c20a48c76af2e20a470f210a2ab3ea203400bbc0a57a200fb31579432fdb406cc3185cdfddd6327007a9e034a180342b7284200217a1a7fd68b7de2596b8ec2c8729abc2474b34e003c6b641220e449642da7ec750121a00ef8e6e80deb7a1ab03dcbbdd9da5a7f0a4c0b08ad136b15c800eeea2aa30c1ff6275e18406864f608de9135688f8c0384dec11083ffe06d42ff7887f4114fb5eff00cbc4e14819c346b18df147521bc90c1c51e624cb32ff15cfbb60f10323ee13f94d254199d5454a60e19b567f12780cc7e06b2c6153fa901923c40f7dbfb005cdfc5c38a16005172bd8041e3f31c7a03dd00293ecb93681f53aa4515e00f721c15db61986298c3bfc80cfcdb3cf2d6189339024efbce265d8b87d0b8f42380904cc5ebc3d38cc7fa617ceb5ed60be32a1928077ea82a7200219e8d36646ddfbdf89b758b27a3fdbc730c1b20dc1910f204e315f60bfa670ed02af3c3fb2fcf3447872d824b2e1210e2810c59c64707eb7a0bb36ef67bf2b3ca39848c3fedd889f9ad820608e747dbd23240c85ab7ed9a1b46175df89e52b1a96bad030209210a770e399e47b758a885200106c27452b21f20011c6c48023597300602921597359382010ce93fe59f25562e180127ff105010cec42325f446fb1427ca086044c11176294c268501282739274fa535f4c2243125209375576814e5249fb11213f6841f0f21c50368721f0b392f94f7e6607ac0067d010ae3a8c3928cc53b3d4b29d067821a0051f4c5f829153cbb802861ad0c3bcbb23c13a1aa352094d74271612da7c451c658e8f51778440b4c8e020610523c8c57dbaad21907858662e61d0a110867221800448a9170277dcac5624c49001abb851c781828a2c030bac5128c664261cd0bdaf232e47c417da6d8018672ec803280d0780827216cde4381e1c13316cf9aabae1245e932271414ca0740d6cdd72310859b5178bc23397e42f08458798f317b77c6674cc2778d5b5f0953a0533816c5d67ce7d809c0d17a05a229545154cd032f0b651af8376ecaa2b9cfda99c73e6c6d6e4c0aac1410022fdd63278600a12254d6acdc5c46912e20acab8c0674308231c659bb94771e3ffcc28fcfb549e9c787f04e7b199f7259c7f69935ce7825d71bcf65900418ed237b2ade4dfb9b6751bf84bbf22ce20bde2932a37b0975cd913cf61cfe659fd9dfee67804a282d9ea39f8c85dd281800090d793cf147bcaee60fbecf9146fa041403b5894e204f2888fa8e5ef8051e0a683134e225c6845efa859704a8e3fdbc820c8b68c318481e019dc6249c3d977bf5457b6889e7e075fa5e17291b2a2a937628be0184e6b10684a21ec84d7dec0384801b6f31f93509105a87e89635d06dcfbae079c26ffd9e7775cd060877e679d693bd696df2165a8bd6191dc11aa7170a05a7132eb2a8cba200a17d493fa0ffd1b5fa40af7be801177cf0d30d102e406c364038432247d9aead1cb587f01b5fbba1e4de75ad200427a62cb1bd3ea369865d2b4dd507d3035ba9004a11e611720140b9281892ec5951596009584217d3a24c10a0c62c878c75960005f60854604218a4bf53ec80d24151a12c005118a29009eff037a527673e51b6283ae8e23bef00b6304ec0415f083c8a04258740c750816f60a0ce2164f9f54eefe64d028472e5d06082180023401d8f2054d37b854f529a282b9499c29c2eb8a058c3cd650e3c26a0bd872016769433f958f2294ede0df0e7180eef953f83ae39a38ce247a1e201c8a1f1684391f27ec20320cc81cf19031a035b9eeb56c6d34f63d31ee0132b1c6586479af51ca8a650a64439000dbc5b13dea5fa19a50928b57653f9d45c014e9e0506cd73776d278c8e32cc58604ebba0158d7836bc17d0a53ce82725456815259087d63c441122b4ac55fd3246e3f60eeb9092861ed6083a03d53cd0e653fbfaa87dc0909100d0944fc45b4a21a530a6dae3acf7606b6fe352602580d05e019678dd86ce21c49372011a0c407813de520342000c2fc13b537110bfa328510885e7bbdffb780bbdd3658f32b60024de85ff3056e121de1360c56803dce92700a01f78259ec248947350451f00573c847893bd047ce85f2e7bd70f9901587a96d70d4fb017bd1b6f6128e3a5c4337942801c63b397f1ab1a68e1a77810f9671cf8bbf13248923df85faa7f323ce163deab4dcf912b0c708af00084fa6b5c8924c103f018911fc60f30bab48137e0d73c8a0c5d64a41fe300d2c9e3781219be72b83d7ae27d758488362701423c48683dbe2682a60684daa718fbdd9757455e9b6bf41bcabb8a879011cf7dfa8b0edd9050cfe3d7e46b9f917ad6bbb401c27e8ae60c65eb215e5d32c87a647cb0c61695e7991e2e0a105a13643e27045e479f1bbabefeed1f8d8e3de690e221c407db351f0a34403843baa662571d6e56e710defe57fe7b11eeddcb868fa09d67a81a2580b023a829c1f182f07a11a4fa019ce422986c5496598ab3503b82d53873ce9b7b094cde19f751fa31330ccebd94119bdebb081f1e1a964eca0a812c91de3b8047cf53f80931e00628f49cf70987d2162bb4b6599358d1001663f19be51668a274a43a678434858c72c353561f004c59e0e5c49412aac3324731f16e0a03414c5948896cca12e50340e14d02f2cc1b654078a6f15018815e8a931c018a969f78d08c891710a8015079e27870b5874e84b8efbd9f9200a452262873e85d0b09e0052843fbae870ec8415b4a597db98fd2a48faadea13985cc1c0362c27ba354505c289b4237cd97be5bafc66d2d191725adcf6a4de01130e8605d5080ea1c437d323ee3a2cc74859f7b8dcbba41937caf1fd6973907f6cda9103aa1a4ee956399647c4aa5f569ddd497f914960cac532e8dd9ba31177df943336415ada90d48816901219ece0062ad00178938487403c58ee149a4422ede3cc62a7cb3f610f270910978193e666ff11401398c3540a2f54959b22e8149efe4fdb6f6198cec2dfb0a3fb5fe79b7dc9bfd08a8890cd106830c3e9bdc397c3d95780130dfe37d7882c8066d8a58c88537daeb6409a31f5ec128c6b8840f31a0f9b1ffec2d9fe1abf617be96f0d6b467bcf63f802512053fa1f0e1a7a236ec593c099d447000bab54c300efd009245a9303002b468993d8c77d9ffc2c6199e188b72911764033980d6e61030c663bdcb1ce0c368cce88467a21f231b19c6b06a4e136d430698237c8f110b5fae2f728ba7d2b87808cd6d0c6468ad1f430544d0043f1ca72304108aba4047e062e8607a6d7977971fcf636b3640d84f55743107d603c348ce21c45bb216e69ddfd9edd9a20021599e4af6742a7ba72bfffd8f0e1fbbf8cae2211409d000e13c76e82d6d2e1d20c4dc317e0a7d7d516a31794aeb2caf6e95513970eb7501143c6c042ae116c122970ff873d5398c84bd0d8b4911ecee8f15a7ce4dc0b0803eedb80fd8f08c7701229ef13e4213b8aa956d9bddf7e6c5fd8413e53e89d56110842421ed3deec73cf4c1fb58423155c2d6e7de5f5bd63c4b887b6fc2886a8544bff5539f5dfa4041a3507997dfb555161d2919dea9bd5aa09b6f3ffa4f91d167ff91c50a0e0000200049444154a74fb53037765ed81c3501f46a4fdfdde77bcf6a835077b9a71b3ea27fbef7d30565e6358742d782c57d799731a28d3ea67fc6e85deea3005a0b6848d149396ce336af29e0d0b7aedd6b4efc7887fbbb4cdfbca1a77776859ffea0bdb9ae9f4303e38a61000dbdc31a723fda672ceec9faacdbd71e1ae89371793fdad77458afbddadebb780a4c0b08ad33ca3e230a8f555d548661cd0f4f9430ec5c0009e34e3cf1f1520343bcd74093351b5e400ef11a924b8986e0a10744bd3345645205d81ef6acfd0a60d65110f807e0e85d8c25bce4fa23b43fb94b789ef7316431aea538182349788fbd03fc0a4d07587d671f32c0018542b2739e9ab6f1d3846ce66c53c69d6e14837d2764dbd1324061a218ec5f00513bc60764f39806c0d8d70c5e00388399b1e837f94ea18e8714d0758f28001557ebb40c6099a73521f1e8060cf3bc9249e10d31ba910bc6266416bd45a7d495ab9323882e0c558c6cf595637418b4180c8c6f9a5ccb697743f71cc2a16327160d321a20ec9fc1c852809071831c4a182fbd659e0e82a135b52840e8fdf62cdd8b2cf7775f0ea13df5ace71fd98aca4ccb04d670dfd200c22120d8a51d812944aef622ad81be45a1e7fdb8e6ba1b47bbde7197e2f25ea6ab5638c63137cccfbdee19ca8f08ddd22641bae8708a659abb36d6468165a2c0b48090b22f0a005012861980e37380c80f6051030f5e3f06155ef5e49c51062942400c8385ff8118c624617ca99689c7511479bf3ceb9d89566048e1294c0400b9c51357e7c0e2978002e3933ee9833eb2ca8b8ed03e4f18af1ee0a60f000bc0a7cfb5f18c61c6b863f8c2b781a51c87e05dbc81c027b0e57f061af400241905bbfcddb8b5e739defc1ccc0e7c01a0be73892c419bda48a87f9ed12e9a7816a0addf93637c188b4488d421eb40a5f7327ea181779a133495dbe57b401d88f6633cc0bbfbc92afd31f6a47af81eb83526fdedea1189bea0e4861eb354faa70584e8b94850d800e1ce9c3406617bcd8f30719ff1f6db2ff88afde8f7563e76c23a1c1a1f5e61ffefbed77edb01210f61d3fbe62399970210d6607008f04d734f770a62c91c9a9a083ab94dcb0a08e7b36c5bab8d028d028d02b3a5c0b480105f071428b939c7320a3685ce8fcfeb503c5e2e9ffbacf6085184b415eb3805289ebe5ae989a7dd77b521cce7dae6790aa00478ba0a53de9ff6f597e730f96a405eed55d71f6d76ab4f7a3ef98f51e2fccffb9ff1fadcb3daf7378009a0c65b38346bde0528f1c0ba78eaf5495b49abe882a7f4d3f7fae67fe3af41a7cf52b6bf5b6118cd3267fa9731f81cd8f6ee4482f82e6d65ecfa5317caf15ce6a2db8fac914459649e67b98abb8030e7102e1250f48da701c29da9627d0181c2a1ad7b9e6cf3244acbda67101265000059538bba16e92134a6f0aa3e9067dd00843987904385c16b965ef545d17533bc676900a1504da139933c7f80e1b4f74e9ae006082751a87ddf28d028d028b03128302d20acbd2b5d25a61b929c910d7d9eb66ae3e290f53b6df4bdb3feaeeff9bef7d796798ad7b876338e2e488d42d7f76c0d18a7f582f5f56968dc7db4ad15cc7a558d6b63686ef43ff3627c09f3edceffd01a58e93cce62173440381d15817b5e5e4589e49eab729de34c16e139b53672f4941065802fe938c02063022fa1106e61d25b19108e9bb178081fbce763b7571905081791f73add4ada5a772d0520aca78c2526855d2499b318aacca6f2971c0349f67dd7246fe0d0b260fd559ce3ea6bbf3abacbaeb72d07b8b7ab51a051a051a0516063516025807063f5bcf5a651e0160aac24647448cf99072d9b877047aa02847451de3879b3bc857ef3400b09cfb1130a33091bdd8ac74e4cb3ce6a40a8ca28678dfce0690d4cd3bca3ddf30b0a2c1d204c68a8846fc9e7f20424e9ab22e6fcb980c4ee22592d2014aa2341dd3984b7fe1fff51ca540f5dac1ef22dd6a3d470db148d028d028d02cb4c8106089779f6b7c6d8fb3c84f21bbba1bf8b1e6d03843b539c075a7874c24555cb05fc8489ca83151629947bd1e1918b0e191db716bb1e428030558817bd8697e17d4b0f08790753365cb9ec951494990624d680f0e66fdc584a5e0f852460dc92de55af6b2ef165d87e6d8c8d028d021b85020d106e949968fd582d05ea6327543075ec84a23fd3e6100a55ac734957db8fee730d10f6533279c88a3ca9049c632784459ab3842dcf6a1ea66967d180705c8198547a1732fab2a30e2a4519555e6e4565a699c995dfb374803021a3ce1a72a5c88c33a2560a0859dd2655c4b4c1cb21ed577f65f4898ffd79890bef63ce16b818f6830f3eb89c459792d92b9fd2f644a340a340a340a3c04a29b0cc80b0cedd238ba609c95acd332b999349b983692b8ab33e4fd3ef95f461b3dd1b40e8080f618739d3761a4088760a99a8362b8f6d96b9740d100eaf24c67fc74e70462838246f3080703dd6df7a01c23e90174098a232ce210408db351f0a2c1d2044c63a4c945526a1a30e0f7efdeb5f5f2c64d35c2b0584577ceed325fe7908102a07eee05e870ad7a5b1a7e94bbba751a051a051a05160f51458564098d0b554050506c69d2d8ac2a98eea2807616ebc50397a61f533f08b278111cab1b6eb2a9eddb6f523e7ddaace38cb3ecc621c8b6e2380f0231ff948a9ce186fdf34e08ef2ad80c91ffee11f96634f661966da006103847d14b02e39695279b77b4f42461ffbc467ec700ee134d1798bde7b5be17d4b090817397175c8e82efff33f472f7bd9cbc69eb9e2cc99beb2e18bec737b57a340a340a3c0b25160190121c54ab97b052d84ad9157225578898082bed48580b09b6fbeb93c07483aa38f2113289b4538977e38bb51b10d291443408f22f9e52f7f7974edb5d78ecc1f83eb2cdebf59d7fe5a01e16ebbed568cd23c850d102e66152cab87d03e557431e7a1e678999aeaeeb1c74f3aed9ced5546e510e24193a2f316337b5beb2d4b0108677994c44aa7bfae32fabfeefccba3e38e3b6ea54db4fb1b051a051a051a05e64c81650484e4d349279db43d5c8df245d17adad39e367af9cb5f5e2a1c762f67172a9426c5c261f7eee7a593aff6a637bda97817d77a69efdc73cf2d87bcbff295af2c9eab6e3868ce0abce0820b46575d75d5e8c4134f1cddf7bef76d80f0f4d3475260d4465093c07c4c13324af956d44ea412a3f4345ec569e7b979089b87b04b016b826e8e8f7ce94b5fda7eec461fa5bef3fd7f1ba9322a8710206cd77c28b034805058e85ffee55f96f8e38b2eba6874ef7bdf7b3e14edb45a7b0877bde32e6541b7ab51a051a051a051606351601901a12a871ffce0074bd8163005387cf8c31f2ee5f00f3df4d0d1f39ef7bc9d00d675d75d37925ea1fae101071c50c245bff0852f8cdef296b78cdef6b6b78df6db6fbf355bef01c2b7bffdeda32f7ef18b4566f23ef61d4affad6f7dabf4857701201461d33c84a78f2ebffcf2d1031ef080d1139ff8c402f256e2ed9b07fd1a206c80b00f10dae7f47255fe451a742f6bd1dabd7cdb0dc5432887b001c2f9c9cda50084c8e7f0cf3df7dc73074ad6e70eb286016fb3cedd9303f1894f7ca21c3bd100e1fc16726bb951a051a051602d1458464048d9fac77ffcc702a2ee70873b14afd0c73ef6b111af1bef922adc756896efc933b9f78cab871d7658011c37de786339be494ac411471cb143a8a977fce4273f19fdf33fff73f156096bfc877ff8870240c9e47ffaa77f1add70c30d45f113f2c9580be001843c074acdf70142f21a6074b8b8221c471f7d74c99b0366d509d09e5056d53685c1ce03e8ac65bdcde3d9fad80967d801842b3976c2fcced23398313640d800611f05e8c7a20c928bdcbd07ef61ac7ade612f19bdf4c8e797f3c25b519979708e5bda5c1a401812e61c4256895c84db339ff9cc92c03eeecc97d524b2126caa8c3a98be01c2f92de4d672a340a340a3c05a28b08c803086506029c00fe03bebacb38a87e994534ed909105e72c925c52b076439bbd799692cfc8a91bce10d6f28b2b4ce3d2403014661a6642caf2480e8fa833ff8830248e50bfefce73f1fdde73ef7193de5294f29d5b8cf3efbec02f88600a176fee22ffe62f4d18f7eb480d17df6d96774c51557146fa5ef8c8d8177f7dd772f7d5bf4796e6b598bab7db61d4c3f1de5accf9ffdec67c59870d34d378d4e38e184b29ed7e3988765cd21cc4c31dc0c8534a7a8ccc3f6fe83525446ca15beb40cc69de956f26cef5a3a4018f2758f9ff0b90aa32c10e3ae49a5b0bbdf738313a00d10ce76e1765bc350cca91f0ca6b6722637c26ff3c1b25c7fcf7ac98a1a65a57ede33399bc9e7ee61e5ee165b908be347453c3fb9bc4b9fdcef2811ffeb8376ba7dd02ea525ca8cffe3b1762f8509830c93d486fe8539c6baeb7fcfeeb2cb2edbc3acf25e7d2c96a0ff7aae7e46bff5d338fd56a12e6da3af7ebb5fbbee092db5a74f3eaf9f710f8b3d853063353e7d430b9fb10cfa3e97e77d2f97c9b3deab0feef79de7d32763728f7bf399fbd0c54fc6e977d7f2ed3e9e8d3a0c4d7fb37e8c654881f43e7954e623f4b07ed02f151b7daebff53af11c9aa58ab1bfb3d6dc27dc0d1d15d2488857e641dbe9abb67deffdddea6ce8e0de71fd9fef4edcbcad2f2320ecce16fe4049bef0c20b4bf9fb97bce4253b295f3c70ee11aec98bc83b07880092a79e7aea4861927a5fe16772fc804cfb8e85dfba169aaa608c5c377b1e30b4aff6df7fff02eedef5ae770d02427b00a8fcd0873e548aca1c7becb165bf3a4eeaa73ffd69f134e29df6d23dee718f02086bbebc7957e9f89ef71d4c8fcf4d9343384f9a340fe13075971d104e3a87908c77ecc42b5e7c68c96be6f96e80703ebb756901614d4ee7bf3cfbd9cfdefe518ea2e823f94a01a1c50c105e73dd8da33bdfe936c5dad9aed95380722d0c49e53b0a088691b9c270292efe57d18ac2902b60e3e10f7f78513054cda314e5590abaca79ace014701e660acded6f7ffb1dc012e58830bed7bdee55149c5cfffaafff5adabcdded6e37bafbddef5ec2232854fa5bf791f222b449d8168b25455fa53f214f141d0040253d8afe1def78c7720f30d57711bee2ecf525156bf5fb6ffff66f4b78d6d033faa79f2ca7fa21a42b5e8358f9d146db1437eda16540b367847bb1b4460160e1ffc10f7e50e8e9330aa1eff5cdbb2873fa04c09927cf5312bff7bdef9530328a8ccf298ce6c1b37e53eef4131d54470c30f3bd79449b6ede4ce8ed373a3aef539ff5cb7bd0e89bdffc66f91fed2952dd8b82999037f77b4e0e9579e2ddd0cfbffffbbf2fef3646731540aa9aa331a1ab39cd5ad486fbac2bfd521002d80dbd80cd5ffff55f2f95ffd04cffd11dedf4a15e47e64b5fbc23ef9efd6edb9a2d2e3b20b40ead7fc55cac71a19fcee9ed5e789a630d3efde94f97f56e9dd983d61da3aaff6b850dafe3b93be79c730a7804ceace3238f3cb218748e39e698b2ef791945ee50f854bafcc0073e300808d357b25bfbf20cbff6b5af8d4e3bedb4b257804ac551c8023cd07e9e753ac846dc057d21a34380705ee1a143f2c53c31027ce73bdf29ebca3ce383f308519d3437cd43384ca1459f43386eae62fc76303d402824fdc10f7ef0a4e96ddfaf92020d105684cbf984ac8d8ad0cce2aa01e19dee70eb62e1e85e09d7c1a49ae5637554ffd18f7e5414e9cf7dee73a581da1a4ce81c74d04105d0b12853a229f114ee78d3843ea96877f1c51717c521cf6348f7bce73d470f7bd8c38ab2e447a105a0257345f9f79cf73ff9c94fde4189a2f4138242a058bd01187d0080788472014a4f78c2138a12f3def7beb728fcfe57b98f82059009df72d8b09009460640cbbb81140092e0a7a01917ebfe5e7bed55fed74f2159c2abbef295af14014c380354143380c333f274fcafcfc64729d32f1700c862ef19e3970fa4385368894e6983c287be14c7d34f3fbd8074eda6729d7e3efef18f2fef134666ce803865ee9ff4a4278d1efad087168f022f04e08d4edaf61bd079c8431e5240b7f6d17ddbb66da55f80eaeffddeef15cf05da5006f51bedbc13d8420b6d7956ce11e1e2739e41604d31069515e5de009ef5e51e6be4f39fff7c197fda427b7d13fea67f72b00067a16f40a1cb3c099ba314e79c2f874753827da78aa2b563dd51c4a368eb2bba01ba142863445b8a9f221ee86ffeb216cd83fbf6dd77dfb2e6da353d05961910e209f690fd28c501807ae10b5fb8539551f73944fbe31fff78d90bf6953d8667d87b801960d80584575e7965a92688a73df5a94f2debfbb9cf7d6e31e229440328e24d4251ed3f61a74241874246f14f750114c4c1abec65cfe337f6b3c2363ec73bedcdf0b8e957c3e6bcb30684e603bd878aca44ef5884ced13c84c3eb69d93d84d3024245655ef18a5714bda15df3a1400384a351510685c6509a591c676959af01e1e83ffecfe8e0830fde692631048aaff72e8315731e4b59b8112075e9a59716a5993725820e7d29f83c371472ca018527a04f081f251d0001de7813ef7ad7bb966e12641414de1f208c527ffcf1c797b0a81a109e77de79e5794ad481071eb87d88149a37bff9cd052828e50ebcbce73def292093553ca15540ab020b2cdfaf7bddeb0ae0a0d428dae059a0e6f9cf7f7e018c9425ca0f1005d8a9fac7f308dc5082b4c9fb05642484931247816245a74c317ee80bf0e0c73394324094959e32614f24bcd1e7bcdbde63fcbc9ec64cb1434bfdd6b6bdf4c637beb1b40594f1025034bdc31ad767a0188d8170009b12f8d5af7eb5f4d918813d216be60aa8056c289dbc8614529f51748055e00c30557c8252082cb3407b0fb0a45d63471bed024ce68df78117017d812d068528a0acd7c019109bcb7b8d197fb08eac0973a83ded03bd40983994fb048c0276e6c085e6fa4aa0f18800b50c08c2ecd04e0e94f966b4e0ad364682cfbca339faebbf75cc936cfeb483677847f846bc9bdae72969d7f414586640c8808157d9170c1cc09afdd83deb8bf102dfb06eede74456007cf61a9e8197d6cfe151be07de1899d0d9de3dfcf0c30b207ceb5bdf5a0c279e677462f4c2e380d32140a8bfbec793ed55c6173c130fbefefaeb4bdfac7f7cdb3ed27eb74ae9f42b63f3dc19408887e34ff81140dc17321aa313003d6f2f5d03840d10ae6617d51e4239840c4e749376cd87020d102e0010f2ccc821bce9c6eb76aa746a5a316c2086122784ad5d2ba70040481910c60818005151000000a090022e1c98420250c443e77b7f2b5b4e7191474ac9aec346017ba154c2297c8f29d58010a8d1368051871f032a2ce014138a12658a6788c2c36358e7985192b47ff2c92797102ca09462066878d721871c52d6c7ab5ef5aae225a29c013dfa05acf0826ad305c8255cd4ffeea54409450432280c3c4cc0eb739ef39ca2c0b9ffb2cb2e2b004bf8223ad680d0b879d63065efe325e039e51973f1ae09e97016d9339ef18cd237de76e0dc38003b604d9e117a1a277073e6996716ef25300834f3789a4bde3f679051e8b48596003bf0cc4b892e424355440c98972f647cc68b86145c201eed2847f1524a4e07ec94b10656fdcd83c14810105eaf4280eefcf3cf2fde5d7df6fe9c79064c9a579678a02d80f0452f7a5101a80184bc9ede0b24f392009140b5b905eef4ddfa7df4a31f5d8c02d68839e3f1440b409a928e46e821da80328cd6943a570a6998b77670efcaf8c8b202427b8581c1fab73f79e9fdd46bcabab24eed2d86375e7dfb1e4fc3c3ec4d7b6cefbdf72ed5416bc36642460142eb9ee1c33e0308bdd7fd3520e4999f04081948186778f55ffad297969c417b14a80412ed67fb129fd44ffc6799720879798d97b776c8c8cca885b7fa3def1cc306081b205c1937bee5ee2e2024af5b95d1d55072ba671a205c002004441c3bf1fe0bdeb1bdb4773d3d2ca28416c5bc85794db770bb77018480014580a20c8005b0051852aa29119468219575c826a586e78b174da9f584254411e2e5a2b8cc02105a0f1494473ef291db0b97e823e6c7f3c733e67f5ea6800f6b84c2c5bb0990015929ac0070021214acbe9c9f9a569ee101004a85a06a13900c300d8d00de498090d2f1a8473daad093e2c523886ebce08021af1e8f98dc44ef017878d3bc379e46e343574a1c40c88390ea6fe8644e92ff4919a55402798c27de419905c4795d856a7a47e69bc780f28aa640183015e5483e261066df095f958f67ee190a780ea30c8776faa40d60155d84f2667da1296534e5f57948794ac701428a34a01740f8e217bfb8286fd617a02b178a61c19ad0ae903cc05f3f9c0f67ed02dbc0208058f7d718e3095ddd6e5acea79611105abb80937dc21b672f585375fe6c8a28c598f2ce77beb3dccbab6dff587bf69a3dceeb648fce0a10029aaf7ef5ab773a764264813ee3918c27290a96c250f275196018b7f04e461abfb7fa150f21c31963d9501a4a2242785619a3bb85d8664da706081b201ca240e4685fe83239266a4651191ec2060867bd33776caf01c20500c27808bffbedbf2b215fbc34f5c59acf424a39aec3d4e63bf55babf578082910946d45603018964f34153e239c949707c0a074535e5cc9d1e2b9e239a3f0d7879fa65a27d021e76bad1e4205197881843112d8a948a9cfc22e791b1906283bc224295a3c96422c6b40a8ef94398010109e06107a86d709f0035cb40dc0ad06100ad902087913ac617da7200a2d65dc005e80963bdff9cec5e2ef372f1700673c800d6f40ed21ec0242b4e6858cf70bb8335e0a064551c824cf867915f2699e235814ab092014be098047512564785a2950c2332998c2cc0075de86ae70e2793016e1b1d687b94a5186bad094f938e9a493a60284b587102034e70184e6465f322fdaa5682ba90f80f344eabf3504c8a0bf7ef09ef22c0b2dee56c2dd5a3b7ef6a359464088c73092d93bc23fed65b9bcf697f5c3cbc488c323c8b063bdf1920b19b56fe4da038f423f451bd863f8681f2014068e37c7439890f1711e42461a7ba3ae5caa6d9f8b501076cfb0a3bff6089e8347da07f657f2b185ed0b0ddfea5700a1f9710df101f4c243444d30a2cdfbb88506081b201c0708fbc06072f44513fdfe1efb3640b800e6b51480b0efecc13edaf2aecc23873080f0976f73ab22bcbae119ac20046f0bf35afd8aa7fca75c3a5a06ecb17cca676345e605a268f35c012239c281a240b9a660c861010c02cc2916c00bcb39655c7eca6a0121b023b450ce0ce53de1c1fee6f1e30d035400420a907ef0c2f186f102f1b6cd0a10aa10881640d96a01218f9c023014691e319e3bfda5f8316ef018024f14336007bde5f6991b5e5c60127d01bc848cd680d067684d69c9659ed10f50162a06984d0284e68c77af0684d60525d7b96994628a13e596c186b7b37b09a5659dc423804beb27c748f00e5278180e781085c24ee3211c02848c0594ea1a105a17e881e600328305404c098e029f8aa79ea37437e3d2caf889750c5038ba4058d2228a6dacac87b3bf1b90531914c0624c614c48b12dff8ba4b0674525008c7204194f7809ad3d21a20c3d0c71c2ed79e2bab987424685933304e1638c467834be23f41cbd013be19fdab5b778c7f1127b5b5eb477643e84789b27fb475bbc5c2e5e7ff23b063ebc82910a8865a4ea7afd674fcdf56f318090f15348bb1402fcac2f24548a8248831c0134cfde3740d800611f0552142f474c75efb16ec8d23f7ad661234565f0a116323abf9dda006145db7901c21c3b71975d6f5b94b876cd9e02f1061184c0540a6a005b001fc5410811304140524008420c879709100128796100c03ccf4a0e74f01af1aa515a560b0859c7afbefaeae2cda2e4e843941c5676ca97d02ba01408046481548a1743829c3f8090720340ba56eb215c2b2094fb2384117d2991000bcfa3904bde418a86b1e8378552082a80225494d222b454011e6192431ec23e4098f15206b52d3478358010ed8495095f55ec0558048eebdcd37a950ab1a538038c4241ad21de4e74e49db696180dcc99f10099dd90510605398400a5b5b01240a83d4ab51038eb133dad4346851495311714ed00c665c8999a2527a13c03f4f65f5d346a96efd8686de19b42ed859cc740168f371e25e78fc183910a0f14264a890320ad477bc8738c3cd6a1ef73344ac68a2ff07ce3bfd6668e1b702ea13c5f910d783470caf0e279de47861cfbcbf389a4c02f79e95360ca5eb2e75c9ec72f8d85b126bcdbbe5c96b3cbbac74e9029938e9d9877411973d3006103845d0ad8cbf40647d2887002fcfaeec16f3e71c9550d102e40782c05205c001d075f515719ddf58ebb140b47bb664f81848c0ae9a460501a301cc28eb2ce3a0c60082162c1e685c9910cbc54bc2cc001e654878c12643cb72cac94a27121a3808977d74796b09c03a180468aca507200502024617d7e53848426b292efbefbeee57b5e4d20555e1b65491e0ca3c2bc00a1bef1f4f5e510f290292ae33740c8b28f3e3c99143e5e3639714291d09eb229cfcff7c60e38028780356b3e70641e00cb957a08791f7919791e570b080920de4c208be224776aa8c2306fa2710b35a6841a93b5206c567e1faf8939354f00453c8480858b524d21e6893eeaa8a3560c08e321a4f0f2d4508201425e2def8df7c37c00ab396263f63b6debb6a880116f9610c53af478eb8e78548a3b314cd8d7d6687d369d359e4ac8eef1bff042fc1270e67dc307802f861d9eb8bea268143a456080473c020fb34e3d8fde39bf53e486f054ede36f78852237eea9418bdc38fb91d14ed444f21de518bbdf5ed43f4629fd67d0cbf1395b792e8dad1d4c3fdd0cb7730887e9b4a87308f1009e7e2934f41cbca80f10dafb377dfd9f47c71e7348d19feb749ee966bbdd352d05961210e6bc410a5d7dcddb43d800e1b4cb72e5f7051052322809acd9184e8ac2505a0011602755f4ea2aa3ee1556ca83a7da68f7ac1b0a8d5c17d6678a781d5246e1915fc8c3a842657dec044b3acf9efb59db858c2a96a2808ac224949f5cfa8a310610f246f18879affe19a35c531e4200d6350f0fa1d02e4cb73e7642d835baf254793f3acb25322eb406a4f51d586591e7350008535446e11a4ab6e713aa2987e880030e28b40b4dc6e5101a2f808d1e000f4009fcac16105220ad09e30508cdcf5098a54aa5c02dfaf34cfa4d98f182c6d3c743623c0021e1561f3b216f98470520948b28cc6d9c8750a556eb280603ca740eead64fe0daf8796484d7c5b88146c0f832843bae9c4b8c7fc2da324fd6feb284dba620525f0e59f20863d048e1abe46603907e5cf63b5e3674b483f6f1c99c579a36bd3f854ffced9eb4e79980d47ae684a6dab7788f1ce8bc33cf7bc6b3e9ff3215586a80703aae300e10867776c36cb3ce7c3ec4636b83ca385e5cdfb7ace710a221638f4800de7d91007d80104f7ee77b3fdc3c84126e62230000200049444154d32ded35ddb5748030670ef26e74af7903c23bdfe93645996ed7ec295003420a3765a1564ea2fca7ca2885bcabf4c9e10308150511b2590335d66aa18000214f11a5b116109475404ebb3c409423ca8d70616b4d389ab055e189013fd65b00210141d038ec3980505b3e57f081178b570c88642563699f07204ce11d80037861f1d707c0470824cbbddc3d74e01d9343c4cb87a1cb4904d0785a15a0100e565719050879ba14ee71af90518046082d0f21d0c89358571905be1501a2e4f10cb0260adf9457e879c2a2ae321aef24da248cb82f87d0f7d684b600ca49809007c5baf25bee53ce526368a084a94c6bcc401c808b5e002ffa107c0022ef1ea0677da1194f465f9551df05107a16cf02488dd3781913ac1bfd413fef8c71230690060857ce63182b52e06908d8acbcd5f6c4ac29c0a8c62b8fc78ba468d72f2880179d71c619c5e8264c96517152c8e822e8b7594246f1d7183900b59a0fe473bc37c69080c3845b27ffb6f668bb374721f99eb7ba36042f2b20b4eed08f6c040643cb7a3d66dd3cf1a907b6a2320bd8a84b07085360462e03c57ede571d327aa73bdcba2871dd987dca1b863254227ade7ddc0aed0710529c29e275a548f4e5510244e22114dad70708e579013443801060e3294a482ada69dbe1f000a38208009bb028004648a250415e1c2006184cc868f71c425e1e402b80902708c04a98aa77c8cfb36ebb809082245c1550997461befa609c3c9a755119553c0158a00cf013ce45a0f99cf70fdd84c4a2438e9de071057e790c159500509cd3e73dd67b8a44082b036a813a74661ca1d00145c261b5abe884e7e435019cfac05b8b96faa07a9e105e85530045000d8d813a732bef49ee5c425685088f03843c0d3520accbedd774a428081906cecdbdaaa9a9640b0ca3a5779b03e3a390f194f21846e07b5e48b08a873c8c7210f54f5f7913b5a7c886623bd6901056ef150667edcab300305519e519b60e158f010aeb821929aa3474fed8a4f5b18cdfe3c943850d96911e1b79cca2357816f0efa1fdba91fb3fcfbe7df7bbdf1dc9cd247384abcbe946a3785eeb7747ef5884f168b30042fa21509d6acd68a7ef0c7f8e0902e6c84439ac740eb22a05c5e4f74b3920b3030cf114f709856670f2bc731f190fc9fb78c87dcf58ed3d8c935202e67d36e4d03a5c54c8e834fba09d43380d956677cfd20142a463cde7bda098e5e0edd99174c7966a40f8fffd9f9f1445b91b064371a3e0cb8968852056371301843c7294edba2a1de60e68f0c8c8c76335056cbaca04a005a8a8f0d8058404855c409e3a2046fb2e8cdfff18bc0a90009fff79c328edc008af95822504412a99fabbce5332ef002206c863e6fdbc65048c422cde0da80109bc66352014920a10f2e04d0b0881399e2ae059dfeae30d9c61a59fbc8472090929009022c66bc8322f6c4b1bfa8c9684208fdc09279cb03dac56fe8ebc2c20306178e848985256bc97f0116aabff72907809012e74161aaa8aa98213002aa1c91346c901b6ec23f44677404b7bc029616a4fc543a81010dad45546cd1dab2d605c878c8e5330859a03758029da500c08786b0f58e70116c2662cbc84faacffdaa4a8e987fc3f2097c739de4e821ff8a708e8937bcc3fda5338848b5226d01dadad6fe050e82aa5026d337fd68fffb5a18fed9a8e02d63883465f6183e95a6877350aac3f0518c818a384f4934978066351175c00228c967242e586cebbb0cc6601847837b9467ea835c0b08cc73348928b22661865a548f8c19fe91740355d92d19367d66fcf31e69a8f9c0989bf930774042906f8369ebdec8070c8289173081fbce7639b877001ec652901e150d8e8bc424673ecc495975fbcfd10d87a6e31081e4be18051f41730f75bea1504212f933c2d4cb73e830d73071628d5c28d28dbe8dd2d430e98f0d051ea81995c84a582073c563c549e4bfb041daf0d6044e9f7bd7041dfb3ca0274d615ef20c10170f232b170d7e0dfdf802af043d0001bfa686d58af0007a00860f04e11e22ea0c33b81128084309a74517eb5077401574024c6ebe2910236006bb448be9071aafc976319005d8753032dfa09a869177de5d019b3cf812ded191f9af80186ad75c08d90451345205858b58f568ace78d6737e520df6010f7840018ec00ea38e39d10f730b60034c68401803d2d604cbae766be094b1ca1bb3660868ef1d579adeba326e025e9b759e1245011dcd4fcaec0b3fa60844d831f800f914010a1b20cb23689d38a643883060cdf3673ef42547d20081d62db04cf160c5e68da548e4881563425f1e55f4a710b66b3205ec6f7306940b696e57a3c066a5008082279057f8023911dede1d938806d108784b3b87f084227b193e458c30364627039c534340ca04fe4c86332602d4f83ad9e01e720cdf250bc828c643c64af2912c6724963b4e068af4103d433e2c3b201cda6fcd43b8584eb4948090879097a57bcd0b10f2626cbbe686d1657ff989c27cbb174598455ff857aa472e76196cfeb7014d401150e6efdae289a900093ec3781564c1c4bb0777032e3c5894f300ae5006d8111ac8cb5887df60e68402e1ea7340413b8403851eb05461547b842e10c3d34401ad2f7d0402010b1e346b82800266b50bf8f1303118c433e57982c83b29b2fa318d41417bbc4ec64278f909684123f4e35d632d452fdfb907188b67d4f37e0834b40476a3580385841f9ae81b2118f004f01094c606b41196de91fc01a08e4755db00a9be0283941bf3667f0815ab2b1dba571fb50730691f3d8144e320a4b599ea86a1bb777ad63ddad5a77187b9677cee27d43dab7fdad56ff4376ef731509867e3d70ff36a1df801e8d00428a4b8e987f9f69d35837ed65b2ae4322aa0b1df89680034599fad8b7aada39571083fedaee1cdbfcbe73382187cac1dfbc89a360f294a359fb7f6b76a1d33ca58b37e9b43733e6f0fceb831a65ab335873ef65fc2e2d6ab5fdeab2ff60f65dbfe59cfcb7e365fd6ce7a5634c537441f884cc233d1052fec4b53c19f554d26a3fa424a6749cfcde221040819ead0111f451f7cc17e14b142060510cab717a9425f884c050019eb183ce974f400ebd43e361f641d7d507bd209c88de825cb1a323aae081a798c7eed60fa59eec6e1b6960e108e3ba47e5e80301ec21ffff03bdb0fd1ada78407448801252ec5211633fd5be72d946ae028c9c9b500c47072d838460f4c005add3005408850af3d80a190f6b41db059b76ffe286d849e7b28290925f15e8220caa5f76b8300e9f631efcd195a751fdd8f31ea7bdea56f19b7efbbc9ea43b3ebbdc6a98f9ee92a30bed707ef0366d0c9baa40846b9f0fc102d09bb84d09813f706f0a5ff01901417ede48a47d03329f2e13b82c177354d5871dde35e5772458d279e4def779f67eb44fe1ae88f5b135d1a8636fa9db5a0ed1cf09c2204e603e8779ff7eb13fa05d079a7bec7325f7b040312bdcbe7c6ec1db5a5bf1e7b771db9df7bc681dbadb3f3d73e9200420ab239a3043280e4ecbbb5bf61fa16ac1f209f62691f25647abd8057cdff182018bb28c08c52eb99a36afd3358311ae90baffb7a5df630196fdf0a4b5f4fa32ed02e8a815191170a6df08ebef5c378c808c5c837eff5b5990021a087667838302832868c51232045d57808458a882ab0f622fb195945ec300c48ef88813072814158fbd68a34167a9f6b593d84d1ab5219b8dec3c971c5931ff5f83f6c21a30b60704b0708132ecafab3e8a232b7bbed2f9533aeba572a4f25346e01f3de5ed128d028d028d028301a156598f10320a4f8f100084b0678165dd881d182075a28b5dc5bc5a8e431e9e3bc95f6a1c510e38adcaa7845841a3260ad479ff487410508f3a32aaf506cd7a2fba32f9459f9d8bc848a4301118bee4b8c9b80855c58c5d584f39b2746c9be756c7d3356f619ca66cd18360b20747492823cc034706d3d711400768af5f010ca010f204c0a408c478c38f6ae42608ab5a54e80cfa530882c1135228ac5ba8da77d590161229ce261ef0242ebda3dc71d7f6a0384b3de943ded2d1d20440367c389135f745199bbec7adb52a9b15d8d028d028d028d021b83020184223428ce279f7c722928c1abbb68404849179aae2811600860c8099d778ed7b899a0cc033daaf82a36e5acd0e412af07508d37465126e0472129cab76bd1f3a52f8c08ce6ca5d4ab0e2cb47ed17449d89db40939dcf2aae51c2b54256cb42f24347d5c0488de4c80504ebb7c73408447dcfee3153ff7dc73770284f110d639f84242e5a55b939ef39d7672de9ef900d47de75ad6a232d62c4f2923134fff50412f6bf7b3577ca99c439823bf3686e4d87abd583a40b81e21a30a745c73dd8da37630fdf80db408c1348f2dbc88b2ddf3e8776bb351a051e0171ec2004239e6eb0508796be420398e44712a676d0a495b34d0e95aea29652a340b87a3042b6035e4799af79a022e288f72bd8042a047f5ee457be5bc2f399f2f7ff9cb8b47f7b8e38e5b1740a82fe802103226f074f1729ba7a17308e73d4f75fb9b0910f2102a32260dc0dfc2ef0138061161b6b587b00b08ed13670df3a63b2f16b0b4a7855b03e94246e5133a32490558df2d2b204c78bce23c6a0948a1e85ef6179a5e7bfdd746c71e734831b8a069bbe6438106082bbace2b87b001c2c94090955502b69cabcd7461e8183ce5a801c3cd3473adaf8d02b750a0eb216c8070c79511a5ac01c29d774c0384d37191cd0608559c56244cb56b4723c90d050ebb21a35d40c8932eb7d0b9b13c84c2878d1dd8a1db0825d5a6cf78da7334d032868cda3b0c3bbca7a221848177752874e2a93df9f4739b8770baadb6a6bb960e10ae895aab78b83e87b07908fb09c802c472261c29cc7215a45ef823acf6048490251e85be221e94cd3adc0bc3cba1b5431dcefdb9b7beaf2e469330a124ace7be7813eaea5de9472cc943e0d57dde9136582fbb65cb7d577b2cbcbfdb877193e1d98c2389e379beafefddb626f5b10ed7eaa34d8ab54c3337998bbe39cbf37df3b4f0c5d85eb86a0a3440389e740d100ed3a701c2e9b6dd6603848e9c9083c95bef68235e5695a3d59ee8f31026875001145e6bc5650042d5ad2373c951df731038eec8b113dee3a2ff2c639551fb07ed86f4875419bdff831ed97208a7db6a6bbaab01c235916ff2c30d104ea611ab1a2bd169a79d5692b537d375b7bbddad14a170586d5fd53d953c950157b482e229fc844751c5c93e26082889abcf3952f20d0234811396b454a794e3e43803c2aabe47f2ba7739a6207d62654be2b6230c52edb24b6beb55853a02caa50a9a621bb9cc154fae4a88fef65e6371f4c234c5098c4182bde341d0846795d0d486b16b3be7370e956fcff304b4f1b1e4a65a9b7e12baee3146ed8636daf50c5ab83f87beb352124c0a2ca0678e1cd096b9335634abcffb435ff320045d31a89c27b599d66eebeb2d146880b001c2d5ee850608a7a3dc660384423a1d554596f0f6395396fcf099c280292aa352a8cfc83edf3b6ae8820b2e28d5489d174c2ebac84a6b85ccd09e7380e5e1aa60bacc8030ab67c840dd0ea69f6e7fcdeaaea5008494b6d7bce635a337bce10d45491e77ade4de6926a10684bf7697db8d5ef5aa574df3d852dd1340a89883bc104c14c8d9a821980975002e30fe638f3d7674e08107f6024296420242d5370203803136e5c085282b40508fd3fa937fc082a8ba202b22ab24a5157091abc26ae90274ac67c24b5bc02901a6a880105cc24a480afa7ee6339f29a12cdea71c760d6ea2143b249d35d4bbad5b429ca0db7befbd47071d7450294ea07f118640ab3ec8b570c83c0108dcf5015dfdd7a6b67982555b739fcf812de133da90900f146acb78eacb389cc5e8f99b6ebaa98ccbf3e82957e6e94f7f7aa12f5a5f7cf1c5857e042e90e70212cf3ffffc02464f3df5d412bea3b094bc9b54fab5f63ce7606115e2ccdfe9a79f5e68ec1d3987119855384081aa273ce109e53d1b75bd2e153359c5606b40e86f7c4888d8a4a23229953ecbdce796433879025b0e613f8d5a0ee1e4b5933bc82d86bef7bdef7d45969c70c22d07d3a7ca6800219eee7b45089d3b4bce1e73cc31c50b78d9659715992017102f20474438c9fd25b7e5feca2bf52e7283e150c128b2898c23af529176194346a799ad7630fd34549add3d4b03089ff5ac6715cbcc509e605d6c6696b98494e09c43f8a31f7c7bb4fffefbef542080e291c3cdbb8afaeca67ae3b654034209c6808173c0baa18a1b650404aff522b7001802d28600a1f3c4000a60c4994f840261c05b4748483c570d2ea00cd87bcb5bde5280064173f4d14797d01517b09752d53ea33c123ee8e7205cc515d04c252e5e3095ef14ca00c20834f729632f4ca5ebcdd48e72d9ee058a72587dca645bb740a171abb6c6c20930f18cf1a21186da252c79e5ba17cba8437f55052458ef75af7b95047da5bd1dd0ae00025005ec118eaf78c52b0a68ae2fe78e09ab01d2f44f69705e3e9febd7a1871e5a04346b2e504ca82b0bee3d2e009ee0f73eebccfc31d0f052ea0fc16d2cda7258b34215c6829ee60f3d9d0b0700f068a329506c8e08f6060837ca0e5d593f0208ad01ebf4294f79caf6f53054cc050fb007799a67795e61038493e7ae01c2060827af92f177f401428649f24f5118b24c7551f21aa80300551fa51b9203fe5760c933e44bce09668825731951196bafb8e28a0202192d45ac906de41fd9e6507b4656ebb901c2fef96a8070ad2b7d65cf2f0520449271d5456b92cd120c6ab70684977ef6e38511d44a066544082106824144795dd9346eeebb6b4028be1e3840a78d7ab0362685a903458015403814324ac09c71c6190564a504b8904e40913511f87dfdeb5f5f40093aa84476f6d96717a0076cc9430002190d78a5801cc28a47cd33c010af1a70f98217bca07804812980f095af7c6559184014c0a652da7efbed57eeadc10b21c67ba88a1a00640f048c0981514c0250e24d23200142de355650e1a4c258094742edbcf3ce2b5ec2bafd84ba0283802e006c4c68624c2ab001d640de85175e58dae1d18ff5d41828ea002beb2a20aa8f9471e3444b7d94cfa920089abce31def18290cc01bea7317ba6bd7f7bc7b3c898e8101f2f487c0162ecb4a0c2c02068a06f0ae029840f101071c50eef31950692c403dc1deaecd49811a10f21a5857895018f2fe51e2180ce40edb13b3aa02da00e1e435d400e12dd54dbbb9cbfec78bf12a72871c6dc74ef4afa7210f2163218f20b94cb691bb640f1943763102910b8c8edbb66d2b32db3d89301131c4f04b0e7b0779aebda425e013e49e481d06a8e4e83740d800e164ce37ff3b960610869443c09037e6a28b2e2a9e81595e3520bcfcb24f95b367ba809032c93bc2cb9390b459f661a3b7d505844a3e63aa1b1510ea17ab21a140819b0408dffad6b716e1f2dce73eb7007ec2c1e1b4001860226c8580e001148ec9930d98f13e017f400d6b23f0843680c921871c52048bf0470012d8e1a912ee080802793c7a8411e0697d7b4e186697ae94e077bffbdde53e46898046eb863713e0146e0db8eeb6db6e25ec92b78d474e0968e018e8f4630ff9ac0e1be5c503b294d2f73990ab3fc0747212f517b80336794fbb8090a2c373ea5d426129e268642f01cfde2dd416f8465f4a516857034265ab9d7984ee4a5dbff6b5af2db91c68c33083e6be470f0a9631bbfcf6bfbe9b0be3d417ff03941bd59bbdd1f7fe46e85f0d08ad77a16393aa06672d082d65206880707133d900e12ff25e819518dffc96fb8d37e16dc0cbbefbee3b783c08d9255f7a117276b3e410d20fc9363c9e5e86aff3fe9191642d99cb0308c0311e926d298cc2a8e9397224f9f4e432f9a45db24e0418af221e83f62ef76aeffdef7f7fa9b4a9481d40da2ddeb6a81dc618caf04abed23de82cfa3eafab2e7ed77d473c84bfbfc7beada8ccbc26a06a77e900e10268bac32b6a40f8e31f7ea77876ba87c4b23053d4793e963d64948710e8d9c81ec2004216c36900e1dbdef6b6321ee0813070017772100e3becb0d149279d54c01b41f4f6b7bfbdfc069884255a0f80172114400810f106124e3c75679e7966f1e01d75d45105480b83742f0b3140c8c8c0aa09ccf5157e11a62aacd533dee5b9147449a2bc7c07c089800064bdeff0c30f2f4a07702c4f92778fa72ea5b6b311802c02c677e656df93d7977b526916a033fe2e20146e2aef8f2075361b7a048411cac27c84f200e7041890cd43a8df5d40c843c8234a693afef8e30b6dec4b1e5942d8fb01426141faa3688031fb1f0020f0015c42dbbc75c7b2681ed3deb7360ad480d01ee0498fe164c843488979f8c31f5ef6b53d35ab3cc2e6219c3c97cb0e08ad3dc0014f148e581bdf0017912b2242ac610642fa45dffa243f182a819859addfa1d9db2c809061922cd2dfdac8873e0c963e8b21d3bd3104b99f5e10f91a7afade5c01eeda255701c1f08c54bc06e4c94f6d4a7b08205c49f5eec93b67ba3b160d0853adbbaf770184bbefb55f0384d34ddf9aee6a80704de49bfc705d54e6f6bff2df4b385f97f9c6c284492c631e529f8770ab03428242111705490012852c0033bf0972ca26c1ce930878f142f1200a19e5c513ae062c02350ac10041c01c212f0c12e82178582d15686129f677df2574f28d6f7c63013a40654259722f2ba75049e1304a6e0bfd24c084c99a274a096116400bf4d6eb98d705a002f6012f798c7dc094c555a5d93e4078e9a59796905574408f3aec152d79f5d084751598e6319c16100a7dd5af78e7096f79bfbc894250794c79287949815b7da744c94b364fcbb8672773becd73470021e598f2668dcb1f1a2a2ae37e735e57a49d9542dd00e1e475b3ec8030e04ac485b0c51a34002d221752c1199feacb71b57e19a0f7d9679f625ceb1aa927cfc2caeed82c8030fbd8ef7a4f273cd767018c398aa8fb4cdf7391116937de3ff2c45c898a211fe942a2c5cc49aa88fb3d2bfe32cdac2d1210c6fb4ab7e95b83684c1e3ffd3987374038cde4adf19e0608d748c0498fd780f02ebbdeb628ebedda9102cb08085140088a1c355e365e44219bbc7d4022e0e77fc084970bd0c1307d4e7195f316baf90d240a39760f20c323c77326b45228a95cb7a16321589a7929e53d28a9adc0510d72e20da42cf3a8c9e593f7079c0151bc947e785614d749284c66d9f30ab008d304a28ca7cff2390e101a0fef296119e09bf6094b856684d11a271af1460a199dc643d80584942ade5fb470a48870526181c25029614252815a1edfe61ddcfcdcacae324a519bb6caa8bd366b45ba01c2c9eba901c25b95da04c2ebafbcf2ca1d4246799818e028d1f8b0d0e7be7076fc9de14f2eb63499faacdcc933b0f23b360b209c371d42b91c41418e320c2bae265fdffbc95f865d112b0c53a914be72aaafee89450142340004e567d285e82bddcb3dd6f4d9efbab01d4cbfbae95cd1530d10ae885c2bbfb99d43389966cb0c0855c1549efa94534e29a0491e9cb04ca13e18b330456196c22409785e2fc25e854d5645e12b7213012d42846039eeb8e34a7533608582e93bc033672275670443060879f65409ed1e1d01d00161146739773c8480aa50247387a90b2715b2c98bd8f598799ec74e98264f2390d6a7a48c03848ab800cb00aebe10965d4008a0a1951f8010ad84d72664349ec76ec8681710124cc0384f9123458071de5505078cdf9ef61daf6bbb363f05ba809057d83a9b74ecc43c46de00e164aa364078aba23c2b1c8327c5538572f8bf7076110d8084f0fda190515125223cc885797ba01a20dc715d9391e411e32a500f08264f8f6c442fc0902ec0b0c908b9a86b518030d5dae5bc5ab33ca543d7d7bffda3d1b1c71c528cdd6a14b46b3e146880703e74ddde6a03849309bc8c8090674198a370440007e073bc8142353c8084344baf90511e449e39c006d849b10079732c6b84861fd6600a81b064a0512e82731dd1d73b7815fbbc8404809051a0e788238ed8a9a08f1c4121959487238f3cb2802d8a084125e4459f79ee8472ea631710ca6bc1f455e5141e3b7444c73840c8bb289f4ff11db4aa8127612aec1530e6b99347095cf7858ccaafe44d94bf991cc22e20047085e19e78e289256f11f0030e02b6092ee0575fdab5f929d000e1f839b49ff12bfb5e3561c625bc05bf9955319d95aca2650784b5212c7f87e72a60f29ef7bc677b9551863a1573873cd98b0a776f8070674048760283d75f7f7d017c0cbc7891305fe920f2e5c91ef984a27316752d1210a201e3b57792bbddcbfac4632ebef49a060817b000960210a6b2280596d29dff95b99797e4a2e051ae7932261d5ebf927969807032b5960d1062faceb5e30de469b2e6802d218fac833c74040250273f8f30e041241884690255c08fca64679d7556619840125086c1a6ca286f1fd0a3c00a8f23b0273ca8ab040062f681f6144901a48448ba28123c6ac258013ede32608b75d3710b40a48232bc8cf610809b823499797b00005345cd185ef4a2176df7dab9277915f21215b7e9cb21145a03b4aafca61f2cdfa98e874e2ab3f2e6017114204561d04afe640af9189f77bb1fe0eb0384fac2a3a91f575d7555f14a027e141ab405288d473869038493f7f666b8a301c2060857bb4e13d2a69815c399e80c7ca19b83b6daf6c73dd7adcee87f9e41bc2fc74e008478e610209cb76730fd6f8070e79924b7c9124048dea72818e1918e20934328fac7dc6df51c42865632b9cfb8941cc2a71e7048cb219c0713e9b4d900e10201e1ffbaf32f1781d1ae1d29b00c8090d70ad8e241e3f963199403e26279173221540dd093370090b11ab21e0a2bf1393096330855ea140ae420775e4020d267c00f40280f8ea79015df7b78139d49c553d8cd7bf31ea0d47bb4cf83e72c360a0670c43307cc017e4255e5d231aa0066802ce5430ea479541406e8ac730433bfce065438077895efa8ff2ed55479dd84c402af2ca54243ea236078199367c94321d456111c0a0d2f2adaf1fcc9f103b6dd2b244a15577dd4071557d191a714b804621d27214730ed11ccc0a5312a1803e46a072d6a40086c0bf56dd7e6a7400d08fd3d6d0ea13535eb9ca316323a793d350f613f8dd04575511e42f244b5689e5c06b2f5f0e4d6bd6c80b07fcec81546e0a173087dbf28d09e1e2eca433879a78f8a1e01303f78cfc73640380dc1d6784f03840b0084f2adaebef6aba3fff87f3f2f5ea0aeb58ea78357529860d7bbb2c6f9dd148f6f7540c8bb47202b78c2f307f008b964150312852cbeee75af2bc08a32cac24c31642d140a29bf4fe5511e30212400114f17a0c28308ac018e8abab00803659828e30350e53b67f8f1bc014880613c80f1d0f1c039549e971cd0e151c48c09079e4c4051fe9c767334068fa323198043a1643ed73f80d47a0e2824d0003a1650d5487915594185d75240cb00002000494441547d02c7c6ad9f3c93c0b110d4c73dee71dbbd8804a6fe007abc9300acfeb0a202be949f2f7ce10b25ac559ff48795fc861b6ed83e16f7392458e8e99bdef4a6524cc1ff688ab68ee46091e5a594dc0f9ca2b1105d9fbb58328d2d21a3c6deaecd4f81bacaa875529f9339a4485bdb8c268c2bd6e7ac94b6060827afa706086fa1d1b41ec2214038ab353b79c67ea1d8333a2a4086ffe29fb33cb2659a7ee49ea183e9676de099a64ff53984643ef99c6327163947eb0508c7852d07103ee8618f6980709ac5b4c67b1a205c002074b0f7b66b6e187df1dacb8bd5ae068436bc0340798584fcd5c532d638b79be6f1ad0c08e5099e73ce39a39b6fbe7987438009690088770ae0108ae8b71cbd78e7ac0d3921bc55c08830451e2b1e2e39830c08c0912aa10019c5547bc233151d003625a6fbdb81f7801de043e14da1952c1220478824d0c64b061061c6decb13071c11e08ea070840420a70ff7bbdffdca7a062485af02a8c2367944eb7c4582ce3dda07def4d5ba078af50f90551d5428a75c43ef8c71443b842470a68f405dcaaa7bb7bf81431e4bbf5314064d3216f7f1f0f116028168070403dbc02a909a10549553816b25d9f52397f01ea1b540b1233708ed766d7e0a0410aaba68bd9b577cd8fa1f52c87cc730836ff374cfca03d300e1e4f5d400e12f68647d46a14ec86872081920e3216c39843baeab8d0408f565c843387937ccfe8e8de421cc3984cd4338fb79ee6b71a900a150b07117abd53c720803083ffdc90f166f44f76265a67cf21449245eb66b2b0342de40e709caed304ea08ff74c8827f00270004bc23e79cc78e78479d6404dae1b60c360600d2b3aa3d2166f63f211811b392c72eb78022900005cc243bd1f7074015ec9abcb7b28b43c70c23779d6dcef024e0131c08fe20b14f15a02a2fa90704aff1324bc7dfad90584fac9fba28fc6c3430a58192b45dcb8d1c277dad79f84cb100abe574c07f813fae99e54594547634ade453c92c0b8f678fdb4011c0b03453fffeb0b70292cd605800202da915f0cb4d7a1af7239792fcd97be187bbb363f056a40c8bb6ccff0a08f0bd7b22e78a3853ebbb701c2c5ad8365078429f2034458af3520c41319fee47d336c303a3276f5ad4ff2236769cedb13d5424687f7c7b203c2aea7bba65400e1efefb16ff3102e80c536405811795e803021a3dffba76f144f48f7a2500008bc17351858c0fc6f8857f4014280221e9b0dd1c9aa1361e0ceaa63d1575080c728a185757f81079e295eab801cc08a072e4aa7cf8138ff13d2f5910c801de0e47909e6bc59ee23e40356929c0e946937e5abdd132f5dfaa13d9eb9e4efd57dd50e8f1d6008f8b9b401c0d645667ce75e7dcd982914deaf7fdaf75df7ac41f7e81b50c713a34ffae77e3feed776daf7fe58c0ed8bec0ddf7b8ff7c5d348b1a9e9af7fe8662cc644e878de58721f80a79d5470f37e74d177e0b01bcaa22ffaed774ddb8db63e5b7f5646811a10daabbce8c0feb850506b85d7dabdb33c9ea2790827cfddb203c214da10f5c1d858f3293c512486080e3c5124485f58668e35107acfe8372b83c6d0ec3540d800e11005c685e90610eebed77e0d104e668d6bbe632900e19aa9b48606ea2aa3bf7c9b5b9573deba176649a9a074f79dcfb686d76f8a47b73220dc1413d03ad928b0c414e8e6100adbe691a6488fcb21145acc90d1720817bb781a20bc5531aaa9847ce9a597ee407c063f06b018db18b8fa3cddd62c0f62f2d53c374f2f6103840d10f65180ee275287a1b52fac397bfde017bebc01c205b0d9a50084dd63271640d7edafa801e15d76bded6095d1459d07b4c8b14ffbae1a105e7cf1c5251491c794276e9e426adafe75ef234c79f4842df2268df310aef61dedb946814681c550a07bec84bc5261cf933c7fc0e2ac3d2bcd433879ce1b20bc55017d72ada50ad497a80845b1c827e1efbc7f2222ba72140d558c9656e000fb59afe33ea3b7beb5a2323bafef650d19a5f3326ca880fef5af7fbd44fc74af84477fe453978f5e7ef4c1e5d8b87630fd641eb9da3b1a205c2de5a67cae9d4338995001841431c72808d712eed20d399cdcd262eec0a40837962d5e02c73b38cea02f6474313d6a6f69146814582d05ba805051a4473ce2111301e13c8c550d104e9ec565078428c49b225f90672517b924d75c312df9d3f2beade3a11c42e905d2104426cd632dd733d93c84c3eb7a5901a1352165236702f71d4c8f6a8c155ffaea37dbc1f49359e39aef688070cd241cdf40038493090c10b21039ef8e3003ac78e136b2d71493927bc6ba2a0cd801e80d104e9eeb7647a3c046a34017103ad3721a40388f7134403899aa0d10de4223eb36402eb25255eaf3cf3f7ffbc1f4aa8c0a6beef3008e2be631791656764703840d107629909a018add399f589d84ee658dd2b3ce7bdf478a87d0f9c4f7bffffd57b6f8dadd535360a900e17a5519bde4924b46d75c77e368d73bee521674bb76a4006ba7aa96c249b66ddbb6a9c82369dfa1e68e29d8a845703615415b671b05164c81d57a08a394cfb2bb0d104ea6e63203c2baa26817d0a18b83e91d53e48c55c74ec811e4051c3a76a20695f3f4123640d800611fd8e30c50c84b08749fd1826380e770ff671cdc720827b3c635dfd1006145c2795519ad01e1ab5ffdeab193b651c324d7bcd2c6344010f1a43ac34e18e666bae410ca77748cc332cedd669aabd6d746813e0ad4456528283c848e27999443380f0f4b038493d7e83203c21ac0f529d83c84ce21fcf297bf5cce3c9e740e61da98c75aaefbd7006103844314b03686a2c15265f481bb3fba01c2c9ac71cd772c152054625952ea22af3a64f476b7fda57228f6b8c38e5505ab0ff45e645fdbbb1a051a051a05968d02dd2aa32f78c10bca399342c0878a6d50609c19ebeccc591a821a209cbcfa96111026744eb11845f2baeb320a75ce21749eac2aa2749ea11cc21a0c326cdee94e772ac7eeccc353d8006103849377f6ce77b483e95743b5d53fd300e1ea6937d5930061ce21fcc1f7bf55c20b87c2379c93f63bbff33ba5fad7321e3f311541db4d8d028d028d0233a4400d08852fe1c18a458d3b4e8202fe94a73c65f4a0073d68a22771255d6d807032b59611104a47f8c94f7e32baeaaaab4a7e60ce4eed524be89d481ba0d199ab8c167de710d6cf695b3552e0d1fd39c776f24c4c7f4703840d104ebf5a7e71670384aba1daea9f6980f0bf68e79071a1427ffee77f5e18e9ac2e80f0b39ffdec68db35378cdef3ae3347bff22bbfb293758f428261defdee772f47183cee718fdb7e10f8acfad1da6914681468146814d89902f5c1f4946e0af424831c40f8ca57be72f4a4273d69a45ae390916fa5f46e807032c59611105a17f2ecdffffef797e326e8157d97b5ec0c42ebd11a9e26af9d279c37f1694f7bdae8bef7bdef20d89c3c33c3773440d800e11005c6150f0c207cd0c31ed34246d7b201a77c762900e1102d9c7bf29297bc64f48e77bca3dc32af1cc278083f7fc5678af579a8e297e31678109d0dd42a564eb982db6d8d028d028d026ba0400d0895f1172e8a175362fbc2e77c465179f2939f3c7ac0031ed03c846ba0fd6a1e5d464068bdf1fa5d7df5d5831ec21c87f4ad6f7dab781385808a369ae421d4360fe11e7bec5172e19b87f03f57b32c57fdccb21e3b8160d6acfd3c14761f40b8db43f6698070d52b6cfa07971210f206eeb9e79e3b51e984134e98798e619d43f8df7ee9ff8e0e3df4d0c1d9c1b8317131ffb3cc4b997e39acdf9d942c564d6079231f375153489ff515d35ab6f95abf95d2dedc28305b0ad421a342f19c2baa20c7a41c42e5fc79076779350fe1646a2e23204415f251c54561a15d434564e6bffccbbf8c2ebae8a2d18d37de580c1b8f7ef4a3475251261d3c6fddc9239cc6a338798676bea3790887a9b6ac80d09aad439cfb0c11742bc7511cfb9a93dac1f4abd9782b7c66690061d71b58d3691e4030edd780f04e77b8f5e855af7ad5d8295a46704158499667fd74a0ee66baee70873b14e3c2effeeeef4e0c33db4ce36a7d6d1458160af49d43a8caa8021b9314e959d3683302428a5d80047a51ec52b53286b218faface97f51db03354cc44dbda8bc1705901e1a4b58646c24a55199567c8a8f1c4273eb1a4a94c0a699eb711b601c20608bb14b0267efce31f8f2ebef8e2d1cd37dfdc1baa9c7d7fe9e7ffaa1d4c3f8901cce0fba50084422d9ef5ac678d720e6100603e9f67f5d17630fde4554a58097339efbcf34a019ecd7409b539f8e0834b2e51ab0ebb9966aef5b551e0160aacf61cc2795463dc8c8050211e552de5ae318ca9bc8a368cb0dffffef74bf484105cded76f7ef39be5dc313cdfb11eee55c884610df0eb027000d2d97a8e539063af1d34e259f8d8c73e36fac8473e52ceda7bdef39eb77d2e17b9ae29acc62df7df9149c71d775c09231e773cc45afb3704dec601c2690c1bf358cf196b03840d10762960bd72047cea539f2a7ce1dffffddf7ba3c3acddcbb7ddd000e15a19c714cf2f252094980d20364038c50a59c02d2cca5ffbdad746a79e7aeae8939ffce4c861ef14848d1a86995c0d0ac0aebbee3a7ae94b5f3a7af6b39fddf23e17b056da2b1a05664d813e0fe1231ef18899e6064edbe7cd0808bff39def14afd4cf7ffef39203ffc8473eb2003bd6ff2f7ce10b05e8f156c9cffce8473f3afab77ffbb7129e68ac7ee4ad096fbce73def598aa90598e0ffeea5307ef5ab5f1dedbffffea51d9edb650684436b2907d3f79d43380d209c768daee6be06081b20eca30087c94d37dd34fae10f7f580c2b5d63877503289e72c63b4ac8e81ffff11f8fee7ffffbaf6609b667a6a0c052004274d80821a3bbde7197b2a0dbb52305004216e6934f3eb97871f7d9679fb2e92725c3af171d29382cd6975d7659e9c2cb5ef6b2d181071e38161012c8189b7878d6716d507e58c9634df799310f59803d2b8704e394df44a9f2dbfdda40473fdaa87341bc8f751e7375bffff5254a022bbccf13cea52df76b8bf255575cecbea72f040c4dbc83d2a6cf2eed186fdd2f7d30963a9c4c3fa6c963f19cf633aeb48f16fa1d1ad7fd4b053e7d0a8d7d6f0e3246cff9de8f7ef94e9e58daf13e9feb63dd4fefd427f7f9dedf516cf3aefcef9e7a6dfb3b054cb4e3dd7967d6784df7bcbb6f9d642da5ffdad696dfe963d659dffec93ab5cefc6d3ef27cdea71d73d75d1b6867dcc6628c5977f5fcd6b4ce7c68af6fdebd431bd3ae89d5f2830608c7532e615b1ffce007479ff8c427464f7dea53cb81e77228cdcfdffccddf8c5efffad797ca9778f78b5ffce2b26678f678f0ccdfe31ffff852e8e4ed6f7f7b794e354bcf32cafeec673f1bfdd66ffd5679f65ef7bad7f6bd61fe1db0fea10f7da8a412683715b81b20dc79ce1a209c9e03e081d6ddfbdef7be0248448df154e355f3f494f6f570597308a3273024d9eb7d742747c8a2273ef5c0565466fae5bdea3b970610d6145aafa23277bed36d46af79cd6b563d595bf5c11a10b2280bc154f1356069a38d9b824341519df6a73ffd69a954fb9ce73c6710101a1f4bb7f0290707637ec0114fa89053c04e110005857eedd77e6da7760829cad677bffbddd1f7bef7bdc220151ebaeb5def5aaac8291a809952b8fc68575bb958e601584adaddee76b7220885e8ea07258262ffabbffaabc52bab2d0a20eb3eab1debbd3ee5f28cc2050c2c3e979fd2f5e4024d9ed55f0a9feff5c7589def9679755e167aa08f7bd084c7d58fbf87000fb0c33b2b5f46f819a121f44c4899f6d1c018b5e3f31aec095191af805ede69cc688236da359f68ac0d0a2be595a22054cd3c193b01e63d358d3d677ebd0f8d8c0b38ca15d0ee7fed98a3084174f47ef36c9d7cfdeb5f2f7df2ded0004db569bcdeed689c2eddd1d1b8d1c5fce9bf7769c74f42f88c451bdde7ddeffd147963d17ff36b8d5907d61cba79071adee73ef729df676cfa66decdaffe690b2d03dacda9cfad356db9f4d31ad19fba4fc6c2f3644ebc1f5de775b590d1b501c2bffeebbf1ebdf6b5af2d7b166ffc933ff993b236aca30b2fbcb07c2697cd5c0384bc7c00a239b65eaebdf6dab2dee462e3fbd68135833f5c72c925a3bffbbbbf2b2165c71c734c01a2ded3006103846be1070d100e538f81475e1fd9f78c673ca3c8be79549e4d0fc8a1212378aa8c3e70f7473740b896053fe5b34b0908439b451d3b41a85d73dd8d231e426757f55d29bd3befe4ee29d7c5426fab01a1c232471d7554c90b015436e245c101e0ce38e38ca2a4b35c0f0142ca2610f2577ff55725ec895294b2f5008bd0b4073ef081a3934e3aa9284a7bedb55751b273b91718fcca57be520e25d656001440b8fbeebb97bc1db472cff5d75fbfbdcdb44179b706811074a56051d4285d51e2002356fafbddef7e456917c2cb034ab17300770ee9a6c05d7ae9a5056ce8fb3dee718f9d3c88dffef6b7cbb3de0bbc5adb84cb6ffff66f97c38f811debdc999ffaecef848ff9eea10f7d68f120f41dbda2cfdaddb66d5b5112fd8f46c68f7efbedb75f991b42ed210f794879a731ba0030405eee113a0225f27d54e2035228b0e8c75b0ddcc413080cedbdf7dea52d060be34377f396cbfbd005fdf0951b6eb8a128adf1f8b90fe8335600d07b815aefd0b677a0a93ebceb5def2aef7afad39fbe1d3c5b37c60ca8529cd1a7ebb935378a49a029d0e65d68080c3ee6318f29e0eaf2cb2f2f739003d5d3ff80511e190633202d1ed2dff88ddf2873e2c81cefb43658d6554cb63ee2dd342fe863fd0801046cad03f3637e01456b9e17485bd684b578dd75d795cf841a02b02e63e18dd2f6befbee5bd6d9bcaea1a232fa3bae18470aa7ccb25f9b2964341e4280f00d6f784389eab0369ef0842794d0516b9657d11a04e4fc7feeb9e7167078c0010794f5697fd873175c7041591fd6fc6ebbed56f8aafd041432525957cf7dee734bdb0d10eebce2b2161983defdee7717cf2a7e88ee78dba4a232b35cc37d6d45b1fff0873f5c0c3d803f1e64bdaf4738abf732e2d51e4286a771c58de645237d6110210f19e1c868fc7f9e79a87d6389eec963fa99cf7ca6ecbb4500c271746d07d3cf6bd5f5b7bbd480b026c93c0fa60f20bcf5fff88fd18b5ef4a2dec4798a10013b4db8dc6297c8fcdfd6058468449051f2171dbe31cd68292e94a0b7bce52d05588c0384c081b50580f198f12af17650d83dab9a21cb378041493afcf0c30b70cb05f050ac295200e56ffee66f16859ba78ad20c58784efe8dfc4be15514750a592e40e294534e19ddfbdef71ebdee75af1b7df6b39f2d86097de15503148017ef25a8013d1ec437bff9cd45f93afbecb38bd59eb062cdf73fe0a690430041dea5adf3cf3fbf1ca06c3d03ad04befe520c15df21f0805e63bdf2ca2b8bb2efff8018e005c00692ba174551597502cb3c681fe8a464002ec6c9bae9fb673ef3990508e9874bdf8025c58bb441f17418b31038c25041233fe60c88228c086af324e7d87d1408ca96fef93f97e74e3ffdf4e2f92048811c40de98004c8a0650a54db4a30cb9c7fc1e71c4110548a21305f8e8a38f2ee0150d81479feb37ba02483ce8fa5e0342ede033940afdd57fe30620798829d3780b0fcdf39ffffca278077c853680b475f68d6f7ca318077c0fb4a22f106a9de9cf15575c51d6d8073ef08112e6a74ffa689df39a5b53e6d87dd68a43af816f74b5cecc99efd100a80780ad459e76ebd89e0724dffad6b716c5083f58042034667414023ee9d80934b38f03f2a7e11bd3dcb3190121bef4c637beb1e4f8d987bcc28aab5813f89131d58090d1c6be73593bf60610f3c52f7eb180458601ebdd7a66bc4067ebd2330d10fe6215f5e55b0510a6ca6878ed7a0342f38c1f06100afd75def27aa585c443f8def7beb7848cfee99ffee9ba868c76012179b01e73664dd16d6a40482f98a787701a40d80ea69f467aacfd9e0608ff8b869495d34e3bad281f14ee595d98600ea6ffc6d76e280a639d5fe43d142f8a0f25aff60ecdaa0f1bbd9dad0c08294894704c96b24331c26029ed801a00f0c217beb07841283c146d211ab958d529de0417500288f0e6f99c22fdb9cf7daeb4f9477ff447a53d451b0e3ae8a0e2d5cbc5ebaa600f2f8cd02e8090b2ad2d7d6229a5cc7b96827bc82187140fcec73ffef1d139e79c539e750837af91775236800a9ead84fe79170590878bc247b1779e1b4f11c106fc0053e65a111e0a3740c813f78217bca0f40d10d1be504320db5ee95ebca46f7bdbdb0a18d40eef28c04229056814f721ccec39d64d7405d072d97b68a75f2a03cafd049c782028a514056303d063b905e6f104e3a2e0f2f6029b358de5be3210b807adb403d80083679e796601868a3d248f1250f33e7c07cf019aa234e9bb35014c51800159ef357634d17e974f50288e3cf2c80200813f6bc23d3e07ae0039eda0af7967300820d44fc605f3f3677ff667e5dd018c009bb5c7f3637d7a37a38039035829ef0184e658fb4283bd1f2044bb77bef39d45d9d2370600ebca1a3fecb0c38a41c13b798318468c17281376c8e3a82fc63ccfc8897808ad41ebd1dcf316c42bdec73f8d99b181e2662dcecacbb19901a13d619e199d183562a4b217860021dafb1ef8e3110612f01eebc1e7e69f710ae0b49fad0f3cca9e5fd62aa3d663f2bc13961e0f2130cedb0a508b60b077e2c95d4f3dc07e610c32c70ca3a232e83bebe921246718d0448da8ed90288d451ba1d180c1148f271fc9107c71d1f98c5943e841472037c909511deb0508f1003af45efb3eb9858c2e60032f0d20ec1e3d4149667d74610a1449de117fcf1a10da5cdbaeb961f4bef3cfdeeeadc8dc623e365c4a67b3ae2fdbb5550121864e19676820fc002d5eac14dc2020313b4c8f80ec0242400aa0108ea52d89efbc189e4733008aa2e43ec08637879204d0f401421e428ab6f578d6596715650b90f43c05ebd39ffe7409f1a2e40adbd59e7333010b9f7b9fe78117a0d358ea3c348a3c2f16ef001021fc9532628d0361002730e09d40090043a1e119a2047a1e7800e8d00260e85e3c7b141e8aa3e78443d5057bd0926035461ead2e20d4174a3f3abefad5af2e201b2d790d2951de6b2f06e8fa2e49efc6826e42dcb4cddb990b300f20d466bc92accf0035fe63ec0983662800f8ac011ec2004263712f4046203326009340250007ec09cdebe6ff0155bca3d681f70380eed1ff84ed5a8bfaaf8d1a109a7f20f74d6f7a53e91fcf707214cd8fb1a10f3e65fe85c75acb4380900794e20e102a2a62de0185e428a283ca917becb14751f281567bc49c30043092b0d8039b0c24b5c77c1ebcb10684402bd03ecd11320c0a0c2a00caacacf99b15105a7b0021cf0fde610df89ba1c598ac87848cd61ec284cfbb8ff788a100c066a0f00c19cd58c508c4239f73f5185296151052dc13fe2d343d91023ec7ab28f4e867dfe0d11b21175fdf12ee2f62214788ac572571fd11852164dd9ec78b92233d0f1e33ae4d7da1078804c2ff1952f0df4503d3f4113da44588e8a133e06febd59754193debbc0fb483e917b030970610523078477251aa28ad42518439b958bd1326372bdad71ec26f7df3af8b82dabd287a369e3e350fe1d5c563b215424629e2c00b8598c10180e816c7200078e884de7501a1e73ffff9cf17a0e17b000e00ca45b052940019208662e05dd3024274063c6271e605e211d41f608d60a2d0039d00094b3dcb3da55da86b1d72a80de0c61e02628132617e11f8143821610089b057de2056d9780c01421700042ca057ce16abf78befb4c18323ec9557a7beec37a0711c204437cf01849458de5af9a02e346659ef7aa4925b823ff0c4b2bcf3101194eef599b9a6b4ea7bf631cf306519c8631d275c5d408f717401a1ef8030f3a800151ab164f3be99e3e404d563d607f305d4a9f688c77443cfdd0388a12fd0089467fe2846403850c60308e8d48a1a43003ec9b28f66d68735b61240c86be8b2de293ee88da6d68b75c210004002c73ca12ce63cc8bcd0f30ea3af01215a5b9ff6e99057320589006f8ae42c0fb0dfac80508568f46028c143003c0656860f8a3610380408cd2fa3039ec10802d450488106ff7bce9ab1861810b48be600e4329e43686f326ad9aff8719dcb6a4fe1b5c097b5844ef3f4aeaf444fb26f52651b489dc6e8b292f6577aaffea0157e6b9dad17380d5fd41717dacc9be78da355aa485b37d6cf7ad225bac98d7fff8fed1cc2952ef055dcbf148030de41f4e10174d507d5cfc33398b9a801e12efff33f8bf5b47bd97014450a5a9d17b48af9dc948f6c550fa175c70b0408517479ccba20ca84b98fe2db05843c43f2e184e151c07d1f40e139020408e1d9e34d918745e907a4a6f110d680507b147d8ab990506d0016808bd0cc28c10ab5f0da00645d410168b1eaeb0700517b76e2d1a4c4b8000b40d3fe00660034ef1246e933de3fefea5ec066fa28ac46e827cf124029376d1a4048e96780d1078098f209f01a13800210a4184c3c3f0423212dd456082f058217c445700ad5e2e9b2bff1961a105296030833ffe300215af3cea2732ac11a27a0c993d8e511fa6abefd060885e3f65dd68671760121500a44332ec89ff39efa92b729dc95926f1da38536a6058494f6d04abb00383a323058d7d62eaf2b4fb835c542cd8309acf7e591ce9ac905105a47e88deee38ebdc95eb0de846f8f0b2d5d695f373320345f3cff726cf13dc62bca363a0d0142f431e7f6948247e88e7fa88aec73b49517a74d69150c19bc86e8b4ac8010bfb16785633314d57c984c403b3c8e5143eef77ae5e9d56b3f0584f0357d176d607dac1758f55e6b13df06aec99ffa0ccc95eedbb5dc1f8f2ff981b7f092d7a9186b697b35cfa207230c7987ffaea78739ebe663175fd93c84ab99cc153eb35480902011f2e44a98680ea95f21dda6be9d829aa23277d9f5b62504af7b8529ae17739c7a3073ba71ab02424c95922d6c3085636a4017720e01c28419caed02de28fd75e555d6568a3ccb3a4f85b0bc3e4028e40af8ea868c760121410d9051cc58fabd8f82211cf1f8e38f2f0a19c0a1384a771c04192544e8abf7f06a524672f10cf116e80781c35b8f36c20f15b11162e97b7d009c15a8e80bddb69f8c075096dfa65d8a8fbe01a3de0d80c8c31b0a19ad0121909da23d8020304081950bc93b0b24534a93db0418099fa5cca4d0897d4b09e341036ed70a08d18cb2e25dc238d1d1fae191ec3b7e813780c20da4e26f0a0dad0410a229e592f7904792d25d5fa9c687a60ada50d829feab0584da1395615fa095be337e580fdaa49c093bb6cefa2acdce9a0d75ab8c02a6d31c4c3f8f2a809b1d1032263020e059c08acbde111de1f35419e5e98b77ddbe11928c2fe0392ae85a93398392e75b28bafdcd4b2e1cda9ae7455f460f219aa20da392d0d01a260cce1f00002000494441541032b6c867e6d5c70b19d518a16695e3badabda78f6489480a7db6261860926bbdda7657fb5caa570aa32777f0337c6d1e7b7a521ff585ac172191e2630c688bee0b39e69de8c10043c693c564ceac42e227d1a2fbbd7543cf39f48857b41cc295126f15f72f3520a46c51a831ce795d35206ce710f65379ab02c21cc42ca493e748a5c69500428ab31049c0403e9d70c41ca18092042c455e2e8db679e4c601c2baa88c70c52e2014aac51bc91394823384843c0b008d4185b72bf969f56c26374fde1060aafdba380e81c22364cf61f080076f9577d97fbc8bacb5c0012f9d70d53e6f39c586e2a82de198141f024c882150ac9885f0b3a1a23201aeb58710b0d45f000f9d01424095f715d0e341041c8117e01b50e4d1e5d972a1112fb0efdcd70d195da987509bfa89ee68413910c6c97bd24793942a0726006dcad64a00a1d06420d77c08c305a4ebcb3aa690a3abfef07e5a1f8c6a14866e51996e0e61d74318cfb91065eda4d01645d6baf0bff708115c44b85217109e78e2895301c2ccd32c65c766058440b4fd61edc768c3931f6317230320609fd9374293ed65fb1e0fb07f183200c794ff47570630fb4d6481752964ba1595b965c5a15f805ec246f12b7b9542af8a2f7a31b66d044088cfe0050c008c5b42f3d7cb7b992aa3783c5eaf10d27a1f4c4f96e3e5e68c81733de6cc3a62a8233f792945d0ccfb1cc271fc33c07df7bdf66b8070968266a0ada50284148e71d73c42476b40e81c420a4fbb76a4c0560584941d1e37791e3c4f4230536ca4ab70f7e510023e9ea5440164c238eb8a99d616a58bc264ed62e0ace6ee737f2edf0362840cc080d9f70142ca040b3eb04521e725c190812d217c00a1bcb63e2f15a59ac0a7b40196bc8a14bb78bd59f45501152ae8f9638f3db68408f2c4b1fa03bff2fe14df0154bbc759d4f42228814aef4163800d18134e2a370d48d4162f048f654db32e20748f71eb17a09377535ef597c5dd71121418f985c037650bf053e02217eb2e4045980339d3868c02f5c230cd4d17fce8833c3a00cb3ddd7cc9bc1b3d148a01a82936f23bfb80544246dd4b418f71022d8d4b7ea46241c6595fe68807070017524a6911320a10d6554615ea721f308f0e3ccd14c01a10a23f7a7b9739579c467f190c548a152a6ced02162cf68b889ae80242f9e6d37808e7c1c7372320b44f183dec7da0d09ab616f126ca25be1140c80b2c0c8dd1024f709ffd8b575833aa06f30ac77b184068bd504e198c1a20bc65e5d57b238070a31e3b11c51e9f66c06338dc08e710d6c74eacf73984a22362dccb31448b2ce692f564cf8ac02137ede98d0008dbb113f390363bb7d9006145937903c2e621ec5fd45b1510ca47a268f3ba5164808f78d7307accdf8f30c9473dea5145e1a12063c0bef73cf021cc5238a3631c285309ed00d480154a8067dd4f49a794c9e7010ab423c71058113e24144f01911a100214fa21c48b37528891c231427ab40198685f397e21cf75619b7a46010b80536e0fcfbbbcb72877801b0f9350329e3c8013280c20021259b679c50044efeb2bc09383e829ceacbc29cae39dc020c551a82ee30f7aa36b0061e8561795412b21a41455e00ffd81011780ab7ffa42810516812a216c9ee3e5c805b87bb7b0b6d500426172017111ccfa0308f2580286e6a3ef32c714723407d8f4cb98b593b9f537219f2aa3bccd0184f61f406b9df1d2a866cb13ed99542015e2697d995fb92ed697cf8062ca9ef503009a439e4c5e3e3449955163481187ac331679f4e6add5cf8456eb9bf6850c3740784b91a3f5f01664ad651df0222b8c647e80376b2c458218beccb9f56f9de069c2f184085adb00006fa1f5213c3886316b5ef118bc8551a45be951fe92fdc693a37d7b1348d4feb256191d520dd192f1060faf0fa6679c5acff5a3bffa869fd607d36f847308eb83e9d7db434876936fe49f5cf1f59a331e53b2c21e6d07d32f06886d94b72c05205c4f62b71cc2c9d4dfaa8090024c30032a141b4021f977c013cb380b39858f278ba225474bce58f2070878b95d9465608c47465b9ea770019b142a5e1f09fb2afc51ae7879002aca19af9fd053ed53c001446d02652cf7da928f42582b59ce1b06f0049001843c6201847d1e42b36c1e0131854284c81a2f216b2cce94630155265d5826c5511f010e20863248790432800be04b58661d229975c2b3c40b15704dd124d829428a59b040cbdb35b600c2781cb407e429c7cedb0978b828bb000cabb5b10b57ccbdfa0adcea138578dc39842b0584f803b0570342ca13c00b107a27308556438050ff55e6444760ac2e8aa27d21b1c01f0faab5607cddf0635e556bc23a90278a0e09ab02eaac1feb94070f7d79f1ac3921a614744abef58386947f8abb677804d0163dd15d9828e0aa0df962da49481b0f244384cff471bd00a190515ecb599e2f38990bde72c766f2100610da8f944821d77e12cac86085c725df169fc1c7ac15f7182b5e827fd5c52b6aaf88bd20f790a1c89ec54f3cb7ccc74e344038ed6e1abe2fbcad01c29d69d400e1dad7d7666da101c239cf5c0d08ffdffffddf259caf1b0640c0517e7206d39cbbb4e19adfaa8010a129331462de138a3daba8ca8494224a0e4f8cbc37b9583c254050ceeea37079460827cb3a6548d8690ea6e7716375a54053c201420abf903c1e49cfcaff0200ad314041f8162fd749279d54fe06f284a6026cc0a7504de1a1a9b2680c00a177f0ec0d858cbacfba365e4abdbef0b86b2ff97042022975fa01d001bfe69ea7d0fb78ea00884f7ef293253c1250f27cbc44ee351621b040732ac3f1580911057a78b780231e0561377e523a1b3d795a939b0730fa01f60021391c6800f8e439caae705b400f900566807c218d7558aef703fe3c668070bca8c2e9d0da7ca37baac7791f00a6a08d7930b72e8a8abf8510f374a2013005180e858cfeffecdd0bbc6dd5d83ff071a25089ae8aae2e49f2be4abca17f91a8dc1242378944d1e5ed1e5291522954a472498822a1a494d2e574ef28baa9285df0ba8422c45bffcf779c9ef3ce33cf5a6baeb5f65a6bef7dd6989fcffeecbdd71a73cc319ef1cc319edf73751f50ccc207aca22540c7d26b3d00416be7f24ce0131f86f5d65809e440213e4323cf773febb342f4c6053ce34fe362adc66768821fad37400f449bbff5454ffd596f5905adaf67b88f2512edc35596620020f42ee03ff49d2c405892cacc7d44345908ad1d250e1ea9a6cbaf5aa723562c2cfcf604bc8207c332dece3daede7f24282916c2b9d7a95808bb176d0a206c4fab0208bbe7a3f9ad650184435ed16ad9892b2efb5116c4eaae000000773e5a757133e376d501a14c8d046b82fc287de8bba53b2186f01aee89001021b85546448212811cc8f1db410404d296fb8ec58fa04d00a6f526048750458806aa68d059bc08dc84743f401cba492603ac6883d7580d010f748b9a5e042a9632091b08efc029f0128a08e320f4b1400102e2f8f0640031a052964bc08955b1551c64d0ce988c411a796e5de1ba686e92de70350342595fc4d31a9bb83560d89801241629162480c1fc831ede1b608f20c8faa06fb4440b178b13c0ccfd516c88beb52178faa170f16ce00d7002b4ccd77dfa415f164e9639f719230b2b2003a4188b7574609a47b5a6a8f839cf0498b8fc849baaf988ab13ef28f36ab8690245009367e29bc81eeb6f800e4f01a3ac75e88647aaa51beabc1aae9dac749236784eb8d61114b9bdea1b4033166b182ec562675885fd763fdac4fc291cd086c282d2010d7dc612a82ffd7896b5d61f7ea48c700f5a7183c2d36889cfb401023d0fe88e321ce17aa86623ba46bdc5c970194573f3e86421342e7319f4f8a6a3853078315cb2abbc19f4a9eee3ad68d6cb3e5f00e16c0ad7f90f5d2970788d281d44a6b01771196d95253268de0bedbb3d23ebed8acb687bca39df9c67c565745e1a45ece98bd6dda82495e9f7e5ebe1be02087b20563f4dab80f07bdff97a16dceb8090c0444022b073831bb7ab0a0809fc00027a10c85ca338b07aa139c19a9549d204961f6e74ed00a17e09cbac7cdca5b88802190461bc404160cd599ef455bd1ce440186b0b50c632055406d0623d03de001bb472e8b3de10e8b97e8a9523acb308b17a694768609d426782bd0d177020e8b3deb12a065888b1781ecb9c71aa71572d7dd18a6e00146ba0f9465a7416280923800016296b0a547817d000f8353663425b9624e361e9aa026df33337408b55cc9cd1d21c094068c6da296b21e013c2a779fa8ef58bdb2a70e233cf709f31a1b17e3d9fc54bdfc685fed6c1fc2902cc09edab2e9c40987ef5672cc1bbc0a5f500880967518cd9dab01e7a9eef629c84037c01e4a33bf00e9c0189ed5c75630dec355c3201560286f19bb331597fcfc143e6591506ed3f2c76da01e26a02e2114a0b0a0400cef3ada1f1e917ed590ed10a9d593e5930f58387b4c1abfad28ff95927e0d61a009ffeaf0206b462fdf53d1a5633eaf6f27ef6da3692ca441d424a8f887f6d17c763dc2cb9d6645ceb1086cb68aff46e05127be9a300c2d967a273c43ee68aa432ce1709bd64b6f62e8abbb49fb70284750b6d2f6bd06bdb02080b206c47814e4ab5e09b9254a6d737aebff60510f647b7aeefaa02c25fdcf6d3ac65af0b198476022681b993f5a5eb874eb3865540280326edbca0eab00c4d3540181a3de9d21daa62b7645dec54338dab148b0fd0e71007aa08e2046ef303321cf0d5b97a0e819eb06dd3743f419f804d9806e20099ba9b16b001d08475473b826bd47c02348cc3985cc64db8d3a7f9d43768c204611dc8319e6e4a0178067745cfd19fe70357783d2c0940850bcf07edccdfbde6003c45e1ef6069ef8e79e937aca48003a0616ceef73d508ace414fcf347f73f45d58c7dceb199eaf6fcf362eb40e40c56a6f8c68635ce8a69f6a0911600b30d29fef8246da1aa7beb8b956dd5f7d6e7fc0ff71f95ebfd6cc3d5107d1fa0498ecf47ae321e3471ff7ebcbf8dd6f2ce68e7faa80d0dcf1913668e699d64e7b9f1977cc3f9eed7ee3e7ae8b66e66d7dadb3717a76ac43cc0fff54f9ac3e8f78478c19cf77c36783d8ea021002b4d697d2c29cdb3d3fdc1db90c03dadee541258098ce16c241ac45377d1440383b5e9be287222ac0a0dfde7dca3eb19b143c1486ed0aaedbf7289f4241d70dedfb6d53006101849d00612b192fbc309c91c542d8ef9bd7db7d6301086d9292147007136314c5e97b23557fadab31848b2e3c235b93aaccef6f9b25a1c2c6ddaace587f4f9e3e770520e42ec6dd1150aaba2c4eb599d8a808d52c2d80881a714d8070aacda18ca750a050603605aa80d03b0db8521eb4d35c6b0fb879efb9c752000caa70730184cd5c39ee80d0fcc91512a270550f408872144294819453942f11825017b8f501307299e70131288546bbd52b80b000c25614c097148164c03a8f5601e1061bbfa9b88c366f8d136e317680b04e311baaa40ec3baea59463ff0810f0ceb51d3b6df285a2ef6811be174bab88d7171e5eedb8d05673acdad8cb550601c285005842ca8e259594fc28adc8a0600a3b84ceec6c542385a2e298070810cf894ca91582c14177e13ac59ee01438a0dd6f656966e9ff14aa2d08822e8c3f4c42980b000c23a05f02b3e159ec0432a3c96aaedf08d36fb1d7078da739777e5bc03c217ca351c0a8c0520ac924ee0ae041ead2eb12312850c3276a514a66f665cda492e6ee2cec4da55359ecd774f5e0b07284ba6782342e4a85cdc266fc6e5c98502f31f05aa31845c667971885d6d975446fb70836e2770f74ba562216ca6dcb803c210a429b3b98d869bbfcfb93c8b65e6ca4d59c90dba9dc2424c3030c83dbd58083f92e9850ec304c6ed944be39854c67b4cee93242e62fe5b81466b72c3adf7a6bd76dd3e0342a155e51a0e05c60e1056c92871052daf4411ae6117a65f7ac9853343976b5e0ad884a37ed574a24fb8351430389d56ad8cb550e0ff28108050321b7bd0a1871e9ab3aa76b2fcb98767c3a005e902089b3973dc01210ac5b953756b4617594665352660ab792b5b77a7c2f4a30240c542d89eafc735cb6800c2d34f3f7d9e2470556ad96b0b206cde1707d162ac0161dd5a5800e12058aaf4512850285028307d28500784ea107653987e18968402089bf9a600c2d934aac7b80620fcc217be90cb4ec808dda9ec843e86c1c3ad56b000c202085b51809b286b76640cafb78977fd7dfffda1e232dabc354eb8c55801c28f7ef4a3e9c31ffe704ba20d2b96b0ea32badc53164bfbeebbef8417ad74502850285028502830180ad401e1c1071fdc15201cccd3e7eea500c266aa1640382f8d22cc82851020545e062054cfb39385b099da83695100610184ad2860efe5a6cfdba2957222f8e665afdaac249519ccabd8b197b10084d52ca3418d51651bad02c2c72ff4bf69c71d779c6741221dbeac60d512022358fff288428142814281b1a6401d10521caeb7de7a1d0bd30f8b6005103653b600c2d63442975ffdea57e98b5ffc6201840d6c44ce12bf2653ab7ab9e4c11243389b68e252cf3aebac9c1fe16d6f7b5b8e31ad96466a7e437b6b51ea10f646af61b62e807098d44d29a787565befd2cb7e926ebef19af4b297bd6c9e274a5baeee9e9a564dc5a7873cdc49eb3e6aa4a95d365d2e82a41a6ed55a819dc6ae7d24a4e8b409f6337fb120d325194fabf94d64fcd5f8d3e990e9356265add7b0cacc446cdb74e6897ede837eeea903c2430e3924c710b64b2a13cf68a7d5ee670c714f0184cdd42b8070368dd0a11abbee5d672194adbbee32da2ad635f6cd668a4fbc45b110b6a7e1b8c61006450a209cf8fb35a81ec6021006b1ea4964aa441ca6cbe839e79c932e99392bfdf09c3372aae7ba695c6158312b52402fb7dc72835adb69d38fc34a316c6e2eb7de7aebb419b781028332123ee739cf692bdc2bdcfdbbdffd6e4e517a421fed9be2d79401be0384575c71c5b94a5700c90ac24b851fc1ffb4750a8d0312be67fdf6a330ba8d5586dc2878ef7fe99c1d38d2e813705dfa92b61ccd8dc3bdb4a5555016e0557ba0d7d8d4689368236a5b4907ad0fbfcda55aa89db07cf7dd77e7f968efbefaa58db19ba3f9131af4a1bd7702ddcc3d0aabb7ba5f8a7519dacc87169342c558fc366f343237635433d25c5c01023c3f68632e51d01dedd04b3fc6621efa52b0ddbdc6549daff15b47eb19c5d9ebe375bf367ed0dc583c5b41f728c4ae0da1cedc3dc73aeb134dfc6e0290b20ceadf6feb19734093e017e3b3ee556192db4eac455d78f45c63e4c1e01e6defb9e79e4c537c81e7d0cb7a5a0feba94ea7f15b03f7d9d7a62a58af6719e5d62f2187f569e5c6144a1d7441df412a770a206cdefe0b209cbd7fd973bc67d5b213e2b14e39e5949cb15b51fa57bdea55f9fd6b0508bd9bf6e55178251540580061f39b3d6f0be75d294cdf0fe5fabb67ac00619d443367ce4cebaebbee9c8f879554262c84d7cd9a995d91ea45386dd84a171042087ee37611247ff9cb5fa62f7de94bb9ae92036aaa67ed74205b4782eeb6db6e9b63355a09bc0e6c8a88abafbe3a0bd184699b1c01fd252f79497adef39e97ce3df7dc74c71d77e47228c0471cf0c0104def75d75d978111c1fb15af7845b624a38f7b1cfc68074004205470988281c08af7fc7ef18b5f9c857a9731dc7cf3cde9b2cb2ecb357d002199767d6e4e7ef44f20d627d0fb8637bc21fde8473f4a52951b3740013c5d73cd3519c0a8e5f9ac673d6b0e600144bffbddefa615565821c7b20050d58b80a280b26c78e813e3078c94f0f03e0016e6e79df15955f00e30e9fb6bafbd3603427d1ad71a6bac91690400a29b31ea8bc225de2f6d6fbae9a64c03b5e4acc7e5975f9edd65c2f28b6ec6af3fbf01aa0b2eb820832df744a9919c16fb861bf25c28060862eead8e176dd1e9924b2ec97597fc8fcff18ff6d2bf1bbbb538f9e49333380336f08a31f320d077d4c76bb547982b5ef103bcbbf4b1fcf2cb677e0042cd176da4eeae8263f71affc5175f3c0fc83177fc230ba7311b23a1d3facbd2acb0b5cff58f0e946bbe3376ef84b5e719b1f2ca2bcf79e654dae302104ad14fc8c6eb78d9d8db0142ef87755b69a595f2dc07959ca300c266ce187740685fb11779cf9d017156fadcbee1fdf3f92aabac92f777e7462bfeb497382bfc1e14ffb65bbd02080b20ecf466b753aa05dfbcf0a5af2a3184cd5be3845b8c2d2024bca83775fcf1c70f1d109e7df6d969e6e5d7a5198f3c9876d86187796add100200011b730869135ed969d4010072e38d37e674ef5210b360000683d4bc0f921cc605e8117a01a4bdf7de3b83c2fada3964810073727813906964099d40c4061b6c90b6d8628b74c411476461fc84134ec8710c316f873b80fcbdef7d2f033602e836db6c939518bef33930041c012061a1c14fdb6fbf7d16d4d114a078fbdbdf9eff7719fb79e79d97634d36df7cf30c4e0005161f408ec5cd1a10e06dc8047af77ffce31fcf0076bbedb6cb7105400730abaf97bffce569b3cd36cba0c6dcbefffdef6760b3f1c61be7d4e70057f5624912a7f0c31ffe303f375ca5013b6d5ff9ca57cea951f4def7be37f75f5512b81fcdbef5ad6f655a188fef8d0980f55c2048bb534f3d3583e60f7ef08359800f6b96b18b21d96aabad32d8f9ca57be9241a1e753d2a0a7b600e16b5ef39a4c074008cd69decd97b005ccca584c107be31bdf98417b957fd183d5eecc33cfccb4c2036199b5169ead7f200d487ec73bde916908941803fa10eeb409b059e767ef90e7a329cbace7c7d8f4659df1a3f9fa9b02232c9c3e675930ffd34e3b2d7b318445d777c6819ed61e8d6fb9e5961c0b6dde78dffaea0ba8e40d8146c68d5eee07a0f12cde45dba9a6eca90242ef345adb8fdb8d332c84de09f32a85e907b9bb36f735ee80308464fb2ba576954fed27f66ffb9e3dc63bd8ca02685f0306edab7e0fba7c4a7d150b202c80b00910b6524a140b61f37e38c816630308ebd6c05644fcea57bf9a85c3415e25cb68333509b3ac35c00b819675087869728f6bee79382d8c8bc5093000c4f6dc73cf2cecd60121a19855ede8a38fce073390034012fa59e858b080ab0f7ce003d93273c619676417bc00840e77ed146e2564efb6db6e599067554227800ef8012c810a5a63d636a086e5061df7db6fbf6c19dc69a79db2a0efa20c61bdfbd4a73e953f6779928c204085b1b0580120e6045c00058019f7d85d76d9250357e363c114b342e8f02ce300ead0847ba5b62134c76aa08b407ec93b8063e06aadb5d6caf366a1634905c20268011d9b6cb2c95cfc802e9e7be18517661006fc192b600b4413ead116280274d005f036be0084e87decb1c7a6f7bce73d993600f99d77de9936dc70c3bc36c0315a5a2ffb02cb116be349279d94e76f3d80e6db6fbf3d8365d7fbdffffe0cecaad6e2a0d361871d963f17a80f9802afc67adb6db76510898780279e0a809f35441faed4c66f3d28103cbb7e019c62df281ed65e7bed6c55056a282458a7791fb83ef7b9cf65e585bef1ae8b3068fd29c70056ca044a84701bc6bbe883eff08e3600217067edacbbf62c8778154867d134076b4871a17fcf669d6ce53e3c9c37b5bb5eab809072c17cc30db65d0f78c8bbe39dd676500275b11036af5901840b64373a7b178f85aae2d41e4e3163cff19e852b7a9daaeee1e1c06bc2bb3dec7a8405101640d88a02f65e724bdd6b2eda92b59c812fdfe88dc542d8bc354eb8c55800c2565946516e149946ab80b014a66fcdaf554048c0277cd35c46ccdb84b97cc01d10da5849585b801f96e6568090f0accd37bef18df4ce77be33d78422a43b7cf105011af0f8d0873e94ad3b2c59554068d800020bf3273ef1892cb013a8697f8118f7035c84f200a3c016b73dc2be71029bac67da1300021002949ffef4a7f3fd6f7ad39b32d8b239b310518c0014c00d61d745ebcc720510fa3c625d8126e3761f3a9823d0f4ae77bd2b3f13f831c7b83c83b04298411bf70074e12aeb7000c0c25d56dfbbefbe7bb650858200bf7ce73bdf49c71c734c065f805658bbd00460035acc0bb06499139b4ae140d110801050318e77bffbdd993634eed606f005925d00d63efbec93ada84ad66807380269801581ca58cc65cb2db7ccd6374258f502d6805200166843a3980b5a19033eda7ffffdf3ba01bf682d968d20650ce68846400837b0fac5dab9d75e7b656009ac717f74a195b543776306ca58b6defce637cf0184be03d8cc8b62069f017bad2cf4c0ba762c81780198d51ec0b5664036258875c7971405fe7fcb5bde920e3ffcf0fc7baa25ceaa0242efa5bd275c41db013deb17aecced5c4bfbd9760a206ca65a01840be43dd4994181167b89f7d579c18dde7b4a7164bf728eb6b2bed8c3296e9c0fa1fc69a67e7f2d0a202c80b0150522948282dd59553f73c21b6bd7bd0ecc75089d91cefc720d870263050869f33ff9c94fce11728743d2b97b2d80b099ca554048e3c90a1259fe861ddbd03cba795b10da586c0027eb0bb0b40284345b80c237bff9cd1c1fc8b52e62c06c74844d1b62274048c80668f02de020768d6592d00f24b1e6e0ebba96d8ff80003043b807d0b806b9802e02fd673ef399b4ebaebb664046a800260130ee8f845d60b109101a3f7756b5dbb85912fa598c58da8e3aeaa80c5eaa965e736619032ab9421e70c00179830fb726eb1d8019ddbefef5afcf0308dd1fa0648f3df6c8002be6ef5e717ae805d4b19e5e74d14579bdba0184e683b604a50054e8c1bae8738006fdc5bb12a8ac3b000aa4b36412c0ea2e5ae10e0d18a26f354ed45cf46f3d004c56359640fcc2c5555fc67ee49147663a02d9dad42f34e7a64bc905a456add5d6d5c52a8c873ca715203cf1c413b3e596459b5539686a0cd11f01144fb1c002aec6c8d22cc69002042064f5048c7def3eca1316dc030f3c302b7ba65a9c740042d663fcc3721d85e98376adf609422e1a0d728f2a80b079471e77401814aa82387ce887bb38cf91c832eacce13ada8a8fe3fd1e45684601840510d6298027b8e80ba9c1af94a2ad2e7c7ec3adf7a6bd76dd3ecb4a051036ef91fdb6180b4058250ee18bb055bd86e12a1afd1740d8cc9a7540c8ba200945bb2c7fcd3d0eb785717503081dc204fd8f7dec6359081673c6758f1530928ed0f4760b0859c4dccf7d140063410250c2f5af3e6b5a62c2bb0403004e240f302e894d080f04fa4d37dd741e40482006169b00a1cd9a768f151448030408249ecb2db12efc035c68c7dd524c9adf9296d4e3b5bc37c093b9d62d84ac7d68c15513506305ac5e2ca40021cd3850e2b0e91710ea577fac88400f0b1d9a00819417b4f03c10b893023bad5c0db99db22e02eeac69d5b902e72c8c0026f743201fc06521444317175e40ce1a72838d58d098b3f5e4e5bd0800002000494441544477072a4088475a0979c01abab1106a1f7c13164263e3ee691c61e50442b9f3b23cb2c29a33104e53cb4288ff8cc9dc3db36e21345796572ec47884a2a19a9d75b86f6a77bdd701a1f7b59b3a84c3b0aa1440d8bc660510cea65180c0a018bab0f42b4c5f2f3bd14eb131486546a7952b80b000c276805098817c00ad006128ce0b206cde1707d1626c00613bb7d12022cdfb30ac875540f894a517cd2e7ce59a9b02f32b20344ba08b20cc6a229e8abb1c4b84ac9c046fe0b2574078dc71c7655ee57ec8bae7509734455c1d2b8dd811aea58479a091cba14c9334c5da120e580f815140652280d01c811acf062e014dc087458bdb62dd5aa62d2b145041e806b0b894d6014c274008a07177e5aeea77583e83ab0046562bf303ae58f458a9fab110ea93158f92c2bab19a7a1e2ba475d0b775045a59245b01316dd1c69a58b7eac5222513acbe002f209af54e0ca7b58dcca1d6cce76856774945535645000f50f39c5657274028d6903b298b360b24d08657ac1f6bbdb118038b2d051a775b7c66fdf0957d8de513b8052ad10250e7c2c69d154f68830fa76a5299aa85b01b40388c7dbc00c266aa1640d89a4601084b61fa661e2a85e9dbd3685485e99d95bc84c82ef20d38c7eae7279e768eefb3ffc7b3cb2859a955c844f38a9716dd50606c00213720c26f1df855b38d0ec3525805844f5e6cc1ec56568f4bf1121004fc4c3561a91b269a689bf91910b288d9f05889c46701882c6a846731672c5884f87631845597d1b010d601a18d945b24974140cfff0475ae155c0969dec445452c9f318933f14c5628d6adbacb68b716c2587bae1f5c0e812e562a6e898042fdaa024240831be62800210b2100dd1443587719ad0242897500426ea1d6d17cb9bbc81c6c5f6967f9ea1510b2bab16e0288c6ed6fbcc21554bc4ffdd04453c9860210baaf5740183184b2be724396acc8653fe21e0aa0b23403dae206c543527000912cb5dc41012a3cc87a1af530f13ef7537cc6a238d512ca9863dd42884f00c24ed943c3b579d0169602089b4f93020867d3c89e5d9517ec0b143bf62516179e021462dee556b1b0914866d03cdc6a058b85b03d5f8f73617abc17a5ae3af1cdfaaf7c43492ad3bc354eb8c55800c2b00ea21697d1ba1b5b7c3f8c18438030ea10defdab5bb2f05d77df203c11a664fbaa6bff27bcc2d3a083f91910c6860794b13489ad93f156f21ce0441c9f383aa0a1555299568090e2825b5bb865120c5801013ca09330c002c772c53285dfb9f5e13117ad1c5756c0b25d0c61af801038002600236e9e328bb64a0a64ad811ccfedd7651420018e5902c52cd6630a683859e208f4559751994059f722a90c5795cf7ef6b339890c90c73ad60a10a22990842600ac7d82e58bb54c1fe23381b876b138d683328a6b2cb7da6a4c65b88c0251dc328d57321ccf0098f1050da9e75acf006ad5d7da7ec282694c071d7450766ded1710b2de027d55e049603166aeabfac73fac95c62e290e9e6621559f926282459c5b34a0cfc554d64e4991d07e1445b07bddf2021002fcf8d35ab1e0379593309741cfa700c2e6d51b774018fb979000b24b5c3e676991304cdc32250e3e2653b452425320391bfc1e36282c80b000c27614e814c31a65274a1dc2e67d71102dc60a10b6037c612524d8b4028c13217415107eef3b5f9fa7e68f8d586c978c7c5cf7227be3449e39ddee9d5f01a14398d0ec3024389a27e19ed00d8cb19e7025655123484ba2c2a5aeba4102840e78095a8047496508e604706e82808a7b24b0211c7061e446294e563c1a4028a94c35cba8314854a3dda000a177c81c004f19478db3554d4d34e1ea09b0a20d37c27a9906a00c8006b6800b73558a218014a107b092bd520ca2f7266886c6e803e871599554e6c73ffe718e030408a3c0bd76e2f664ffd407b0ec7f9f0388915406f8b12e6825ae8fa58edbaff1718d34469f0371ed2ecf6639654505fcaa095b588bed39c0b40435dc352582106f2a6e91f2c0738067a08f2b66ab7a97e88897588481ca88fd0c8584b15973b188c60bd08545d39ab02ca0a9b1e24de551aa7c086c9a2b3e442b60cf7de6c44d38c68cff281b5833cd856b29fac9266b4e00ed289258f4b20756b38ce26374264c0367edb28c7aa7f1123a95c2f4bd507be26dc71d109a3f059c7d81b2a90a087dceda2fdbb27dca7bda2a165f1fe42180d1ef4ec99326be62b33d0d9c51f6029e06f673e5710699a1b797714e1597517b61270be1b0817a2b9a8dca65b4cab7edce8400846bbfe495c542d80b83f7d9762c006113e01b9585f0c7177c3f0bbff5cd9790c4fac00240581cb76b7e05840e67ae853675a02ce2b2686f09e60469c233ab0bd0c2f2472110c9021ca280070b33ab0dab18a0255ba52c9d2ed629d6380000c0525a80f5502c1a40082804208c3a840021415d36c93a2004c022cb683da94c64c1e42219eea7e1ee1c400cd870e8b7038468812ee603a000aa8403c28bbebcab841963545390156ee79d77ced6b3708ff22cf70270840a094bb8a7ba9f1596a0042c02252f7ad18b32d86291559681f58c10425123210d7a0151047b4955d0104dd10a30255c0141fa056259ed1ce0bd004245df8d55964fd6a77047b40fb0ec4aba62cefa4707e306e88dcbbd6282c468aa8fc83554229bba6bb9f840a0531ba095354e1b8016e864ed223c02cabe07a20334a21b576363943116f8ad5a081dcaf8d83859a1d131dcd00042966d7d4956c37d14ed25adb166946ce23eac2b4b3877d6a99a548602c17c22de16fdda09646842f9d1e45adaeb5e5e2c84cd142b8070761d42fbb777ad7ad91bed4df64f1e1aac7fadc25042a141a948c95400e147f2be3aec7a8cadb8bb0a089d39946be2af27632cc6376a40d8e98d2f85e99bf7c341b6180b408860915d94f059b5025693cd0c2b86305c46fffeb73fe46c7c752183068f0066439a8a31368364b8567dcdaf8090902fa68a8ba34068b158367985c2810396162e8f046500cdef5008100cc519a28d9a7a2c4bc01da501d00024003e84581621eea70e75d9e5c490005aacceeee1b2c7e5b05a981ea002ca58c7a20e61240d0940e8bb6a965120056005262263297ee50ae97fd6acaa85b05d1d49cfd1167025b070a376000226dc498130b4629512abe67bc0cfe5dd01467d679c0e2f4044bc0c218785cadcd008384563605be63d6bc0b5135d3d874045f8374f6305b8592f09493e07bcc57e0249e60c484551784217e02b86d09c59dcda5d0030d74f6b0d782aabc2a512f820d01933e0cadaab5f401eadc596e217c0d8faa39bf18b0755e2a37a711f03360137408c92401b8052ff2c8cc0214504d7ce28ab809edaa11d1ee4e24911106ef5be472fb521cd179d00c6506e9803da02d69410fe6729968406b0d52fb08ab7cdeb7def7b5fe6d541bb5a4e648faa5a08017f73b327b7d35a47b21d966bef9ef68312a80b206c5ec9710784f812e0e33942a1542d1f01284aa065efa208b4cfb4aa43e81e7b99b85e7b5d3b4b78f36a74d7a25808e7a5139a3b1b28219d3b127239efeddfbc0fec05b1377747e5c1b41a25208c1253f8d9be5adf73fd8f46af7de336c5423898e5edd8cbd800c26af298561419559651591f5b5df514d22358fb29f388f91510022d000381581c471400e6f2482026f42bafc19591eb22501082b6f6ac3c34642c3b046ed62d6e85dc7c0000316fc00aeb5824662108507210bc0120c9942286508c94cbe64b49c1220628b23a798ecdd97809fe4003d7c950501833cba0be15ed8ecf814d6e99325b124e58f3000400ae95cb6880ba00740033500828111a1c8c519cdd4129169060637ea148f12c34e0728b6e800ee0670e5c1fbd4b4024401ce08f750bad0068b4053acd255c6b8d87f50c9d094ada0067dc9cb83e72238c43da1c085e403da10cc093bca1dd65dc0095d84a1937cd05f0d7b7f5e2b205949b174b1deb1ae0c7f2894f8c130f510c7065a4540a0b603c33b295b2f09a0b7aa223a584ff81356bc6edd8e57bf43236801eaf1024816c7f872240dba873c9b20d785be3b03aa03d0b2c4b2e10ea73098b806aca0bcf347e80107f009ba1d4982a1b503586d0bae22d42723bd0aabd7912dc2832f0f9a004ea02089bb962dc01210ae1377bb2f71b3d42900e60c1f51b6f4656e256fce91da738f37bd8ae890510cecbd76ad7da2bb9d03a6becbf144bf676e703e52b4f1b67eca0144ecd6fd7e82c8401f68206ce92faa50d39e0d813be560ad377b378136c33368030e8c4324170a95ec3b00c46ffd52ca3cb2cb5488ee92ad7dc14985f0121f70f9bbcd82eae73941236388730c00448d1009e7df6d9b94df56027cc13d409ed0e0c870701157803d6fc4d40e7c2c7da055cf80c00027ab80efa1b68016e588400529771d10272a334060020dce3240961c104b058a208a82ecfe752681e848b1040804def13d004cc00685c2e59f8aac953ea3caf0fa096454a4ca5f7449fc66c3c0e4240c2f8e3bbe883b5cbb869be0138ef3460e562a9a4f52608015ee17262beac7180a00306f03666161e072fcb96357038f9de7dc04c9408a169f77fccdbe1356bd6ac0c7200f5e73ffff91d5f6b34473b6bcdfd93d6d3f8812deb692c803d0b15d04639c0a2661cde0fe0576c24ba5122b0b2d5e96b8db44113c222210f1f590b20ccbcb82803a7d50b380446233150bd5f00998ba8395b17f40d3a180f3751b403a2d0081f58430229fe21cce02916487c6f6d083953e5aa6619456baebbe6d8ae0e6a004234c147838c892c80b0992b0a20fc3f1a05900b853285583765275a59639a29df7f8b0208e7a65db8e953f4f1eab147920fac8b3dd4de4301198a487bf7a8ae515908f184739765d4990514b7da4b9d31d7ddf4ab52987e040c3076807004349deb11a5307d33c5e757406873b7c9033692c3006d2e8224ab57c4cd0101da681f073ca13c8a9cebc3a6e827eef37dc4db891103066cb00011900658f9df770114c362e719f8d2666c0c55f743fdf8f16c7d5593b510f48186ea3809b0da05600036c2f5b94950b6ee34dcc09cc3c078812260c16f00c477c05455836dbcda78b6fbb4f15cf4a1590504cd3fc06cb8e6a08576d6018d0041fda08f678435cde16c2ce1b2137d55e7a34fcff663ee7517ce3ad71bbf6718032d3eab1d30613d8d0168f74c073fa06cfec65805a0c6a70fe389f6d5e778063ec34f7ea3af76d6c78f79f98e85b86a31004cf5e97edf57d757ffbe0f5aeaa79e09191fba4f1bb43407f4a8c62fa139da47398aa9e41a5f0584e8c2aa4e81d29465b47967ebbd450184cd342b8070368dea5e45fe0708ab85e9c5a379b74b61fab9f9aa5352996859b79ac65e5c05e1f5fdb715f7b63b07ed999494948af6646783fdc7be6f8fa5f4a3b0a48cb4978fea1a2520246b50267aa633a215adf0ee0f7e7445b1108e80010a204c290bd6b2e0f59a65b41b2d1b019a5bdca597fd242dbde4c239c142b9e6a640274038156945686395635906acc41271e5ece42269538b4dddfd552b4c5d00afced906593d98ea4280eff40b28f8ce18ea7d87f0d0eef0aa6ec2f56755ef69e71617638a79b44a62d0691da30e917ea2c481f6ede812e3ad5aa9bcc3015e3ab9fa01996845d8d7ae3ef7bac6bdd3b83bd1aadd7d010c8dc13a59af3abdc2025b3f1cabf4e84463f7a3a9dfd5d2084d7c1634ef34e776cfadf3469d4ff5194912aa96f0a9f07ed701a1d8d66e92c574a267bff30a40c81a2f1e543d5156d551ba8cd5c76e2d23be98369f7b33a001f40fca55b6177ae11f0234f77671d4c6f2ce77beb3ed7ed14bdfbdb6459bb02a539889d996386918bcd1343674e101c142c8eac4cb006ddad521ecb447353dabd7efc7c542583fafeb676e755fa43813e30d18fae1dde13de39d202c0390e725340a97deea38470508d12214a014e2ad406f287fdebffbfe2586b0d797ae8ff605100e1910468aff0208db73671d108ac9e21657b568f5c1db43bbc5b80042ee91b45a94099d00e1d006523a2e14281498300502108ab125901d7cf0c17392ee8c1af0b4b2104e1540283e958b9b044a5cd75931ea5694092f46171d4c650b2140c8fd7b3200615808270a08bb58829e9b4c1740485e8b1085482e158a329fdb0f00ecc8e64ab1e7a278a364f413b1d9711fa3004b186524d981f747784fc4fe4299e0fdd29ff86b658fac678472f44cf009dc302a401843b4e7b6db67d19217ceba1bbc2e5b0819548423946b3814288070c880900644eccc253367a5a72cbd68d620966b6e0a540121170a0935aa59102743e8e8b446367545d125d2b0d9375908cb7a170a140a4c5d0a0420147bcbd22cdb2ba1a3531dc261cd8660c9b556d227aed0922319d7a88169757e0453cfb737cb964b59276e96c03c19e3222413ae595464109604886b5d08e0c35a9b56fd86f554dc6f24a9b25e930508f10c8f2471caca49884f063eba592773890465ede267fba5ed740184dcf9c5860329b272b3d4d9072266dc6fb1f5dc3b65a01676119e3968271edb3d40a339e30971e9acfd64417d89b5165f2db4411b2ef92c85129f018491753b3c67faa579bff78d1a10b6f22689b157eb10eeb5ebf6390787d26d4de128fdce7ddcef2b80700280b01be6a902c287fffd4052cbadddc16263b0a144fc5737fdcf0f6daa809020244989c42151b476aa0142429b0d5c7a7d7f03844a1fb473199d1fd6a8cca150607ea54015108abd14bb23b67632b4f39e49c9c462009c8a1f22684e853d1050053824a712ab6bef9b8c71054025bc4b9e240e57dcf2648e85c708b02043e464ad17bab070894116a30c94c43a75f3eeba5f166309a8c4b1750322bbe9579be900080135d9590133562989cb2467b317f85f566fbf29f5adf771c71d3727863cc234d05c82aec80e0a5c71b316ff0d98b3327a6f28bc014b7f039fde77d9bd0142ca0d603ee2d8470d7e460d083bf150b50e6158080b20ecf6adebbddd5800c26aadc14e24aad728ec9d9cf3dee190909afee24baf4ddf3aedcb73ca03d45b7ae91d6aca5fd828a652d28541d0a1531f01080f39e49074da69a7658d999f4efef8c31e5353ff367187af2c917befbd7706fa05103651ad7c5f2830f52850058434ffa316c05a512484f15ee3718749ddb07a75d2e80ff3f9f5bea7d278a6d27a45ac6eb81c76bb26846f7187949bc0d120e356a70b200486e40600d08063eed1324d0b0de18acbf5537d5816583572b54133b4936d59d66f4a2534649df599b84ef494c4ccff323d5b1b7de3619f9151d58b4573d643b220c58bfe476d899faa80708f9ddf99695f0061b76f74efed0a20acd06cd880f0b3c71e31275b5faba5e26a80e1b90cd804c6e5020869e6d4e3a3259b2a024727fa87300210eeb3cf3eb9087a0184e3c2b1659ef31305aa805072079afc4e85e9873df74841efb7732032bc0efbb94dfdb358528245acd46402676b46d96a4c9487937d5e020a8018de99ccf5c2332ccc2c4dc6512d95d3b4be409b84264236b8338e1b2004c28021c98a2886585725e5515208df4bf4649dc5b10184279d7452067d2c89e26959acb9302ba5b4fefaeb67390e8f926f787de10d9e452c86b2c12a2bc4e27ed96597cdc9328aaf6572d6161015ab2bb1ccfc9865b4891f7d5fb51006202c3184dd50aebf36630108fb23cd60eee2327ae69967660be1b5575f9ce31ddabddcdc346c12e12e3998114cfd5e1c3cb4688a6273c39c4c41a3176ad9bcb9f8aa15a4087abbec96bdf459da160a140a8c9602d5a43200c65bdffad6ecb235593184dc200996ac06f615752427c31d32560150b047abf7a99e2477386e71c0c6648c2bcab3c8a4e9c758c435ba463d9e882194604c3c1910c06d74326208a3cc90fab2ac4e0005da746b613217320825e7a0335b4e070b2140a826eeb9e79e9b7909a8560b900b2d605207845c48d759679d39f584c97a2c8bdffef6b773d650b1c82c83016cf48147c8830025b7d1db6ebb2dc7e55226b8df1a9023d0cbb325ab9360667eac43882e61c56ee7098116dc74d7fcaf0d4a96d1111c8b630108c3651418638173a935e58003426c82c3baea3184d263b7f3cd1fd718c210c86c8e3468d30910d2e4c94e68e39f4aee5dc3e2e7d26fa1c0fc46816ad909c0478c1041cf7e3c6a8001842a7f74ca29a7e4bdd079c14231c878ae5ed72f400f4157c292d7bffef519a84e569651e3617921584bd84689bae5965b4e1a20a4e02557b010c938cda56dd47c13c2b5f841320df7436090d7532fe541f05fab5238bdf24cbdfd7402849227b10eb20a5210e175609145b06a210408294784f844dca87bdc2f1702b7512548801aef2f408847f0ad785cd944f577cb2db7e4d84289eab4a3006225e462ca02c9757490d6daa6b51c95cb68949d90700780f61ed565bf2831a3ec8418c270196d9a43f9be3f0a1440386440582d3bb1e4e28f4f7bedb557dbc3228288ab75e4fa5bd6e97757c4e485966c3accc0a16fad68ca8bbbe87458b132c64281792950058404b2a9587622e2c22663fd9c4b84b57ad9895e80c620c71d4222802ac40040dd6ebbed26cd2ac792b4c71e7b64217fbffdf69b943a8411661185e9afbaeaaab9ea108e1250b45aebe90208afbffefaecf249c9eb6cbff1c61b731c1f0591ace292f584cb680042d6e9a8f5682f91a51478dc6cb3cdb215305c887da708fd79e79d975d485993ad1b50c8759465d27be61e89ad5869975a6aa9912ba6460508f184b9b368b3989295eb17faa0c9b7cfba30c9328af6142ee51a0e050a201c2220b401f0e73ffbecb37361fa65965a24a7cd2dd7dc1440279b81035536aee9740183e22d5899a78b65733ad1b78cb55060d81468050815a667211cb565ae55617a969e518fa34af3b01006209c0a85e9596e00c2284c0f10ba466d99431b8070cf3df7ccee8253a130fd17bef085540784bdf0cf3068389d00210b9fb01d96b92baeb8220312564280ad1d200c0b21dadd74d34de984134e48af7ef5abb32b7324c8631d047e780000983cd6580ff110de013829c4c52d02a1fa9a0cafa3510142f3464fd654aeba64e55632542e7973c9ac0208877d1072e17d64186fff0806decb2326cb651469b90260f899975f97965e72e1ace128d7dc14f0c203833ffce10fb3766d3a5d5c4ba4a6e63a328e96dde9b45665ac8502ad28500784c209261b10b23070a5da71c71db3eb5f2f02fda057b90a0825c4000825bb984c0b611510b2104aea35d98070322d84e60e3c88c5970d3300a1750aebd5a0f9a297fea613203cfffcf3b39bb638623504590d9def809e78b65616c22a20046e80f24d37dd345bfb288dc981e25dc937caa4bce215afc86ea82e4a20eee1b29b0284ee9369b453c1f65e68df6bdb51024220907b3390cc0dbc0e0843e172ccf15f2d85e97b5dc83eda8f15208c60e176741a4696511b010b610184edb993068efffc31c71c934b74d8402733535bd37b146e0c36309bfa4e3bed9433b34de53137cda97c5f2830ae14e8d742380c5d6a58080b206ccf8dc0450184f3d2a700c2ee77309639095eb87d02701ff9c847f2590efc01843259cab84a29436e9498071804d2787971716c154308d0293d417122ae75edb5d7ce963e60d2e76407209105306261f5499920bb296b336b24301ae128a3f63c1a1520b45ae66e1d94f568a5f44203a071f3ad76c88010edadcda869d23d674def96051056d6af00c2c961668090affea1871e9a9304c88e26a0da66300ca16ba2b374f0aa3524931bed2b77a1a6b213e661c3b301fadb86667e61554403fdb67211e9a429747fdc13cf88d8c6eaa6e9d9f538a4785ed95c27ca11e5fee94c817e01e1302c5205103673520184f3d2a85d0c210ba178b512433837cd9a00a138352e9d42590044562cfb84642fdc82a3ec446419652104e678a3491af38b5ffc222784922006a81437285eeec52f7e71069adc4881209631aea442652ebffcf2bc4e00cf8a2bae989f259651e2ba517a088c12104696d1e0df3a677bd71955d65ae71519108ad1459fe28dd5bc4ff6d3622c00613f8419d43dc542d84cc9284c0f104ab74eb3a68e8f4d73184257f3883ab7b019c9882ad538ada1cc72d243774a2ce360a10973283838b40526c51edaf4c410c8dac70dabbad93920dcc3d71e9daa00d9a1e67ef7b8f40ba8faed3011941e9771fa8e55d3e55ef739c88a6573a21c51ee9fce14084048f8f2be1d70c001598bdf2e8630143adedb410b2605103673520184b3695417a2fd1f4965b8272a98ce9dd639d30e108e4ae13add5c460142193eed0100d2c9279f9c6b13fa7cdf7df7cd8050190a1640b20ad0e68ca6d806fe948c50781e90a3e4d6873dc54f9401011e851371ef6559242b5a0fdf3bbb575b6db5ec9ead8c89337d54d7280161d39caa7508f7deeddd59f98ee64589dd44b9febe2f80b03fba757d5715104a2a43c3d1ea6aa721e9fa41d3b86115103ac8b805a805560534536d7a620bc41add71c71d69d75d77ed08086de634816a2cd2340267009b8d4dfca1bf3ff7b9cfe5c3c6210e1856811c9a28910218c6e5e000e66880c53be01ff5cb04adcb5826a5350137364ecf152caf8dc39990a0be91e7099e2f3514a71a8795f18c8a0255404871f3ae77bd2b6ba1296d5a69e623d9c34a2bad94153283f4642880b079d50b209c4d2374a8ca0d01084f3cf1c41caf26ee0d206c6721c4c7f1d34cf589b5984e8010a00b404869ea3c3df5d453d3c5175f9cad7bfbecb34f2e1571fcf1c7e77253e2fdd09e2c0010027414c43e771ebb57e23967ad331b3877de0281ac826409fb0c65adf5b0efd8539cdf5b6cb145de8b42913bb155e8eeeea90a08f7f9ef1d72365f6b50aee150a000c2e1d0754eaf5540f884c73d9c351c552123840be0c7cfa035ce439ede40baaf034241db8abddb58a7eaa540334008e8750284d657aae9e38e3b2e6ffc04480050dd1d81e4801b1714c56fdff8c637663713002d2e00ce012fe0dc6122be322efdbcf7bdefcda012e874b87cea539f4a37dc70433ae49043727f61b514ef70ecb1c7662da454d66270f8e6cb68b6cb2ebb6417ddc9c8683655d7b78c6b7c28108070d55557cd2e5fdeb3c80cd88a0ada13e8bcf7e27decdb8372e92a80b099ef0a204c99df789cb04a05304439b16832af8a850324d4c86b95fc070fe3f1e0f5615b0aa7032004ee9c9d809f183f0a5bca594a220a551e4194a8ce4b1e429ffffce7b3bb67847eb0122a17c10ac8ba675f901381159032b7ea8943b60110014febc86594d2972c248994b100f2fa338641ed2fcd6f57cad64ce3c61be430f288714dc655b51086cbe89a6bae592c84435a8c02088744d8e896007ece39e7a44b66ce4a3ff8feb712a1a30e0809f6b24e0107553030e4a14d99eeab80509a67c547e71740287e00a0bbe69a6b724c82c362f1c517cfee9bb48980e10e3bec90d77ff3cd37cf7fd3bcb37e25000020004944415426c6c59594f5902b2d01d44111970366851556c800cf81a32697434ba6b96db7dd368345fce430d687b4f1ebaebb6eb62a7abeacaee8fdfef7bf3fd7449aca007cca306b19c87c47812a20f43e1294231d7c2740a8a6acd4f204c141c5681540d8cc5ee30e08035cd9eb797d5415792c499488e40e40826c8197eb80cf3d2c50ce1da06350fcdb6ef5a60320945406386311e44113b423af45e17820890ce77f71827efbde7b0b783b8bdde77f56434a5f3f750b1fa0e39c779efb5b1b964456437220e0d92a1740f3db31f116531510eeb1f33b7386571e51e51a0e050a201c0e5de7f41a6527d421fcf6b7be928385eb8090d568934d36c9169da73ef5a9431ed1d4eb7e7e0584d6999be8273ff9c9c4bd4ce2196e24044e163dc2278dae4381954fa6d277bffbdd7329050042ae2934949ffef4a7f3e15dbf3c27624724baa1d174a0d164d240120800c2ef7ef7bbf919c6a18dec69471c7144e6bd9d77de39df53ae428171a3401510daaf59fd565e79e5968274d086802bc68850ddceb5b41f3a1640d84cb5020817c86107471d7554aec5580584ce02a0c26f4023141b7540e83b16448a40e0a39e70ac79157a6b315d00215904386e95e0cd990de4a16935411c4a68eff3701f0f194f5fd5447255aa69eb7db77f008400be6754cb4e0c1ba8b75ac55103c276c9f48c2d2c8492ca00848c05f8b65cc3a1400184c3a16b4b40f8ab3b6ecac277ddfccf3243eb6463a6811ab76b7e0584dc32159bfddad7be9603cc0588ab5b18717d7158b0ee6db0c1062d0121c008105e72c92569efbdf7ce0a85b8688069246da800a320771641c00e100d77526ea65540a888339ab33a727b955d9795701c796fdcdeb532df7929508d2124908911127f4571d3c995cefb5775e11e046d0b206ca6620184b3cb6ef03c12ba507519a5d010dfc6caa5de1d4524c051e7636790b3847b22cbd8b05d12a70b200c3ab47aef235e33dad4f33ec43dd57be3ac6f950425e23701498a5f7282fd471847580887edca3b9980306a0c72bbe5b1d4ca2d35def5ed77daab00c2e6ad71c22d0a209c30093b77508d217ce2220b64b7bffa85e909167ec63d86707e7219e57e02cc0167ef79cf7bb27b4e6404adf280b825b11ead2c8436cb0073eee78e12590e5927582900b9ef7ffffbd902c8d2c8ba71f8e187e7834550ba7b4e38e184ac4df61977dcb05c8b379144a3b88c0e792328dd4f590a042054ee86b077f0c107cfc932da49201b86b0560061339b8c3b2044217ccac3c419131642023605e219679c916beb3def79cf4b2f7bd9cbdac6a08971a33c8c6cdecd94efbfc5fc02085120defb3ac86b0722db512dda570121ebae444061b5ed9fe2fddf392a0b219ea00ca79856a7514e83eab5ec430fa515fef5aff48bc73e369df8c399b9ec040b21afa7720d870205100e87ae737aad67199541b35c7353607eb5104a537dcc31c7e46432dc37c510b68ad3eb06108aff53ac16a00c4028b81ac0f31977135642b183045b560ef1853bedb4537633fde217bf9813d370b7586fbdf5b2e040bbec5e6da4c92e9946cb9b398e14680508bd23edca4e546934685058006133071640389b46d50ca1014ec4acdbeb953290b444bc78bbb213a3cc6c3e9d00e1a0dfe9268e1e674048a1a16e2319a90a088ffbe31fd36bfffef739a4fbcb1efba677dff58b1c435800611347f5ff7d0184fdd3aeab3b4b1dc266321540d8de42182ea3dc83803dd9404318f037b00778b2004a26c01d1410946554063a596d15c3956594b5122015b378cf3df764cba1243612dd488c516afb34f36a6931ff51a00e08b951770b08074d8d02089b295a00e16c1a35d521e4f64c610810b62b9f12674933d527d6a200c2f6f41b5740887ffff6b7bf6545b6921d12eff8ecffdd7b6fdae39a6b52525ff9052f48e9da6b537ae081b4d7861ba66d8e3cb200c289bd8a1def2e807088c4d5750184cd049e5f0121ed17774ff17fe2f9c409566b0c0665b8fe34c51072a5955486f52f0ef1f0c1bff4d24bd3673ffbd90c08c38554fd23ff7ff8c31fce4281f8043186dc4957596595e41e2e43871d7658762d2a25279af9b4b4983f29d0c96574d8b155758a1640d8cc630510b6a611bac830ddca42386a3eae8fb000c2d66bb6e4cf7e96feb2e69a73620827db65d4787e9cd240cb4ecc78f8e1b4d05ffe927f1e77fffd69a13fff79cedf0b7279fee31fd3827ffe737ac2030fa427fcf5afe9715c471f7924a577bc23a52f7d29a5edb64be9a493d249fff99f69cd2f7fb9249569de22fb6e510061dfa4ebeec62a207ccad28be69a73e59a9b02f32b2014f8cfd593aba6921212cb4802131741541079249579eb5bdf9ab6df7efbb9b28c8685900bd0d1471f3d0710461fb2cd293771ca29a764974f60cfe1cb6aa81695f8c0b7bffded39aee43bdff94e8e4fd878e38df3ff5c3536db6cb3b4d5565be5fa8805149637731c29500784aceb2c8462ba3b09d2be1bb4a05d006133071640389b46750b6100c22f7ce10b730ad3170b616b7e725652d8f29c116ff9918f7c644e729d51b88cae7aca2969e5b3cfcec0e8c1e5974f57beee75e9e09fff3c67889d8c18c2ea78feb4f4d2e9a8259648d7acb24adb3a848fbbefbed9e0eefefbd3e31e057819f03d0afcaa9f2ff8d7bf36bfd4ad5a6cb1454a3bec90d20927a4f4f5afa703d65b2fbdf1e8a30b20ec8f9a5ddd5500615764eabf5115103e76817f6617bdea65f3b13971eb5088b45abcb4ffa74eaf3be75740485854e456d9096e9cdb6cb34d0e1627682afb1049016479930c46d9116ea1b2c3b902d839e059083ff1894fa4a73ffde9f93b7ce37bf187be17082e5dbefe5ddc45590d6592639d54f41600044c0140edb9904a5a2386507d42d6cbe2363abdde9d32da8953a09a6554e6df030e3820bf0f4d3184f6ed412b510a206c5ecf020867d308df3a63aa992c5bc5104a3ad64a715162082707102e7fc105e9f99ffce43c2e9187acbe7afaed631e93bd7c287607ad6c6af7662d71e38de9d95ffbda3ce3396bc515d3aa4f7f7a7ad2430fa50581bd47815f3f00efa1273e313df4a427a57f3ef9c9e9a1c5169bfdf7939e947fffebc94f9eebf305efbf3fadf5f18fa727de75d79c213ff8ba37a4b72ff4985276a2797b9c508b02082744bee69bab7508af9b3533bfecf53a84127bacb5d65a39d64b5cd7b85df32b20b48e5c783efff9cfa759b366a575d659275b1e580981c1ebaebb2e0752b30aca201a4900229328974e42276bde05175c90def7bef7e5f8bf482640606521943d942049d9e02071a1e9a1871e9a7efef39fe70ca78ae89e7df6d9d94a29ced07d0ad30385abafbe7aae7fa8f48914e5e52a1418270a54eb10b2eab3a8ab17ea9dea642de0beadcc4bd41e1b04cd0a206ca6e2b80342408ee242690956ae00767e53f0392f28fcf0f0faebaf9f1387d5c105be76be50420fba744aab159c6c975116b0e566cecc20e32fcf7c66bae32d6f4937afb1465f16c2051f78202df8b7bfe59fc7fafdd7bfcef5ff423e8fcf1e7c307f1fff3fb69228a5ee12d9ccf9436e5173d1ecf4b49600af0af66a7f77eaab95127ad1bbee4a4fbdf4d2b4e40d37a47bfff33fd362871d5bca4e0c79f9755f00e190895c0584a77ff3e46c296a5598fed5af7e75ae53570ad35f91b5404a23b4cac839e4e5eaba7b193a259fb8f3ce3b732911d6bf56608a2590758f5b27ed2db04763cb4d14285b7bedb5b3058f6b0fbe50372aea9fb114fa1ea8e3ee09ec4596510375982fbef8e21974ca1e0ae8558bcb9f7cf2c9f9b9ca597896f4cedc51b6de7aeb2ce82a867be2892766f7a22db7dc32e141aea3c54ad8351b9486f30105aa80503d2c899abc574dd63f967699839b5c4b7b21510184cdd41a774068fe14894a0d0925a85afa24e9b8edb6db72c8809ab71488edea103a6b2821b519b6356a3201e153aebc32bdf0e083e761ac8bf6dc339d7dd145e98fb7df9edefefad7a765165a283de651b0d715a06b66d5962d1e5e68a1b4c0430fa5547389fce5a28ba6fb1ff3987c064bf2360ad755037cdc9ffe9416bdf7de79c673e1539f9a16de6083f4f81556480fb2f08565efc94fee73e6ad6fab2a34ea2df00d197aed97bcb200c28152bdcd5a3c322aae1bc164a6e223aa80f027d75e9a333ab6b310ca0a36ee1642e0446ae1a90e08afb9e69a0c0865c7ea0408f124215326adcb2fbf3c67f7f4ca11fc2807d4899246f9539ffa542e051197360e7407b6ec5b975d76591602aa600db064a170e04b0c837faa752c6989cf3ffffcfc9dfe580901479668172ba23843194cd534349628743f15dfa532a642816150a00a0859ee09634daefb0495dd77df3dbde635afc98a2b169b415c05103653b100c2d9f5db8e3aeaa86c0dac9e09640b71e9f8d159c0c3a49582cf77ce1d31e451f36e98a2e0b00061a78425929788735bec97bf4c0bfff6b7296dbe794aa79d96d25bde92d237bfd9cc68ad5acc9891febdf0c2e95f8b2c32d7cfbf175db4abffddbbe44f7f9ad6f9d087e6eafd4f4f7d6a7afb339f99fefcf0c3238f215ceafaebe719cf1d0b2f9cf67cc94bd2ebb7de3acb18ad8ac6f747c0b9efc273e41ab193adf82f941f1bbdee6d05100e82e00d7d140be190895c2f4caf0c405d1b67c36615a2696ed24a0f79b893d27dd56554f6cb1d77dc316db2c926237165e967c2d6ebc61b6fcc317adc7676db6db7b616c2e8df01cdbd47e64f008fd0c91a1cee3cf1797553241c8aebf3193eaa6fca0e753fd1ae6e51b5c97aa6eff11541819b5035d3a9cfeebbefbecc93e13e542c84fd7045b967ba52a00a0809da5cbbbd9b9d5c417db7d1461b65a19a426650169602089bb9a800c20572ba7e09cb787d5465061e29bffef5af730c396f114a45a0b02e6cdbe3b93c732915973e288546ac5edd45f3979b6f9e6e5f73cdecb14289eadde1fd5277cbee06e0e58c958f82bd1ccf2623653797fc0dc71f9fd27bde931395fc6de9a5d32ffff77fd3af1f7c303d7dadb5d2824b2f9d41dd430b2f9cda013c80ee911933ba795ac736cb5d7a695a66d6ac0c541f5c71c574f53aeba4cf5c78e1a42595a98ee7ae85174e9ff8e73fd37dcb2edb36a9cc8409f06852242efa14d714e5e4a2fa85b7c931877df2845c989eb18052bb5cc3a1400184c3a1eb9c5eab8070d9659e98f6db6fbf213f71fa755f0584dc605ef08217648bd5542d94ee300504b98d02f140beb8a3127f37fd78af8cb850a09e65f4c0030fcc49653ab982ba07281cb402af00c2667e1c7740884214103c4f2830d0239478bc4c802e9e1f0467e58cdac5105242530e46884233e5bb6bd1ce45f3ca5d7649575c7555fad7af7f9d5eb0e28a69954516498f7fe081d92509fa017812ebcc9891fe15094b1e4d52524d58e2efc7fffef769f52f7e71aec1ff75a595d2b9fbef9f4efce6372725cb687530e35a8710df5246cb90ce338cacdceab2d7def6ab3fa4bd76ddbe14a6efee15ecbb5501847d93aebb1b4b1dc2663a01842c6e871f7e783afdf4d333b09aaa60306613ae39dc3e0b206c5ee3d2a25060aa52a00e083ff6b18f3516a68fc44e839e530184cd142d8070368d020856b38cde75d75d73e2c285108819ef54987e187cbcca77bf9b9efbf9cff7eda219094b1e927db212b7568d61eb359e8d056c85f3cf4fcb5c7b6dfacdbaeba65f6cb34dbafb894fec2ba94c3387f6d6629c01214bb6e4761418acdef52b12289d7ff1b50510f6c6567db52e80b02fb2757f530184cdb4e2aee2203bf5d453739986e9e2b2e8305d6eb9e572d2165942a73a886d5e89d2a25060fc28500784071f7c708ef56eb2100e835205103653b500c2d934aa978df0bf7334ea108a3f0f40d8ce2574187183eaebad71dc71b36bc8555c34ef5f7ef974734ae99e7ffe332dbeda6a69a9d5564bffbbc412e91f2c7b434a58d28e9b26bb0e61755ce30a08d18031809550d2bb3a8fe2e78821dcf21def2b3184cd5be3845b144038611276eea00a0897596a91f4c10f7e70c84f9c7edd3b946887c41688a59b2e8010a5c5e4adbcf2ca69d965971db8fbd8f45bc932e24281e947813a20942c4a7998a63a84c398690184cd542d80705e1a05380c4028fb689431121b3ee818c14eabb4f29967a6351413af5d671d775c3af9820b3ac61036affe605a1440d89e8e62face3aebac9c0d5d72bf612695310abcd92e063b9211bdf4e5af2d807030acdfb1970208874ce42a205c6a89276440d84a2bd729f5ee90873825bab721082a1e5636ab614dd286c5c5b5292be1b09e5ffa2d1428149818050a20ec4cbf70db92c444f91be5915efbdad7b68c4d9bd84a7477770184ade9842e4a107df18b5fcce5280210b67319ed8edabdb5120fb8fe2ebba4c7dd775ffa5f651c1e7a28ddbff2cae9175b6cd1555299de9ed67feb0208a70e203492764680283bf1a275372a80b07f76efface0208bb26557f0dab6527fef4c77b720db8bab68e265a56bb15575c714ad7deeb8f02e5ae428142814281a94b813a203ce49043bab21052620ddae5ae58089bf9a400c2d934aa26340a853240182ea36208d5b7ed040807951d378fe75fff4a2fd9679ff4e4db6e4b7f5f6aa974f131c7a47f2dbae89cb1f2026aca32dabcfa83695100e1d40284ed4623711719ba00c2c1f07d532f051036516882df636675de2e99392b5d74e1d939f3571d1072e950e078c30d37cc69a2cb5528502850285028301a0a042094d95819960f7ce003b95667a772120470eee2947983bc0a206ca6660184b36904ccf9a92795f9d297be943360bff0852fcc965c80b095cbe8a0bd925e70d86149f2967f3ffef169e65147a507565861ce620eab0e6133b7b46e5100610184fdf2cefc7c5f0184435edd2a20fcc1f7bf956bfed4b5ca4b2eb9644e4aa2c8b158b472150a140a140a140a8c8602d53a848a2473895c6db5d5b21b78a7d89635d65823c932dcaace5bbf232f80b099720510ce0683bffded6f739dd92a20f419b75e59bb159c170babb4442b3e56b776f1c517cf8a8d895aba9f71fae9e939279dc4f72f5d79e081e9f76bad35d7421640d89eafc739a94cd3db5e2c844d141aecf705100e969ef3f4567519bdfb57b7a48d37de789e363666dae9d5575f3dc76594ab50a050a050a050603414a80242b5dd28ed96586289ec92d74a50f699efb6da6aabecd9d1291b69af332880b09962e30e08014005e8cf3befbc346bd6acb95c47c91bc0a0e46c9281acb2ca2a6deb0c2ebffcf269adb5d6cae12a13711d5d7ad6acf4a2030f4c331e7924ddfc8e77a45fbce94df32c6201840510767ab3dbc510028432901697d1e67d71102d0a201c04153bf4514d2ab3dc53164bfbeebbef909f58ba2f14281428142814e896025540f8c73ffe3171e107f20829ed2c27bedb79e79db3828f426f50591c0b206c5eb5710784e6af20fd51471d95befded6fcf959003b09398cd6fed08d4ad846ddf095f79e31bdf9858baf16f3f56c245eebd37fdbfdd764b8ffdc73f727dbf6bf7d9a7e50216405800613b0a5463b1ebbc1a49655ebcfeab4b5299e6ad71c22d0a209c30093b7750ea100e99c0a5fb4281428142810950a00a0869a3d75d77ddec0a5a4dda51ed5e7b8236377f5e1d832c4f510061f3421640b8404eb471d24927e5a2de553e7de8a18712a586042e8b2cb2488e1fc4ab75b0e71e6ed1f216f04eea2741d2631f7c30adb7cb2e69e1fff99ff4e7673d2b5d76d861e9e105172c80b09985e76a31ce2ea3f80e2fb37857e361834000225e7efd9bb72d80b047beeaa7790184fd50ad877b0a20ec8158a569a140a140a1c0882950cf32fa918f7c2417a66f4a2a532f0c3e88611740d84cc5710784284478fec31ffe9063080310fafd9bdffc265b0d7ffad39fa6fff88fff48ebafbf7e0e436965c1163b0830b286f76a1d9cf1f0c3699dfdf74f4bfef4a7e99f4b2c912e3afae8f4d0939ed476f18a85b05808eb14084bf78f7ef4a3ccaf805ffdb2c7e2f5b3cfbf3cedb5ebf6e9431ffa50e6eb720d870205100e87ae737a2d8070c8042edd170a140a140a4c80027540f8b18f7dacabb213eeeb55906e1a6601844d149a5d6ee1ef7fff7b063edffad6b7d2eb5ffffaf48e77bc23df38e8f5681a0d815566da3df7dc3383b1fdf6db2fc7e50d83375a8d25e65b2d4caf0ee195575e99949de89465547fed62b79ae6bdc6f1c7a795cf3a2bd71a9c79c411e9fea73fbde32d05101640d80a10de77df7de9eb5fff7ae657b2723b1ebff5cedf1740d8f4520ee0fb02080740c44e5d144038640297ee0b050a050a052640815298be33f19a0ad3fb9edb9bdfe2d758a302a084f52adcc15ac5b4f9ae1ac3568d7db33611cba94dc4c61540381bcc55015d14a66f5587b05d8c6b3f00fa69175e98d63ceaa8cc34577fe843e97ffeebbf1adfbe02080b20ac5300efcaea2c3192fa99fffce73fe72112bee1067df4e7be92f6dce55dd94228f6b55cc3a1400184c3a1eb9c5e0b201c32814bf785028502850213a0400184130384ceb8db6fbf3d83c1e73ce739d945114dc505c97649a8535a8925edce3befcc5903013bb197b2b9ca86e91eed7c0eecfdfad7bf4ef7dc734f76230336575e79e5b4d24a2bcd49f65300e1bc6b867e77dd75572e4c7fd55557a517bde845732c8413c9225a7dd21237df9c5efc810fa419fffe77ba75cb2dd3ad5b6cd1d59b5700610184ad28802fed07dee7563c4a81640fd874f3779418c2aedeb489352a807062f46bbcbb0a089fb2f4a2b9e8f1fc78110622d94235c83db29e79b1b5096d723d61030da6ef23003e349afef7536fef59a18d46cfd02afbddca0d467b0249559bedbee8c7dfa1e58ef5a96aa4f51b5aec7abbe83b34e3ee3766ee5f71192b0d9836be13b7e177a72bfa751f3a8a698aec87719f36314ee3aad229681a5a60dffba95fb14675da54db8580475be7198439f30bfa5537739f073fb49b9ffbb46b65318875f57dbbc41e9dfa8d0409ed32ecb5ba37e8d88a8727f2be5a8358f34eeb4d532a1e48cd30713de51a1d05ea80f0e0830feeda6574d0a39c8e2ea340dec9279f9c5dbedefce637a797bce425795ff8ddef7e972ebdf4d2bce72892fe97bffc25bb797213b38f992b7e97c087d61fe0f3d91d77dc912ebae8a20c32bdcb80a5d2081b6db4514e84e25eef4b71199d9bfbc242c865741880f0097ff8435a6fe79dd3827ffd6bb60ab20e767b1540580061b7bc526d57ea10f643b5feef2980b07fda757567b50ee1e317fadfb4e38e3bce731fa697116cb1c5166b29b077f5a0496ce4f067f277702fb7dc7273045a87392180d6d2814e13e4e7694f7b5ad6180770037814d4f5dd32cb2c93050601f301824248a64d4627977b3c93d0a11da1433bfd2ebdf4d2193c552f7d1330081c0410b4f67c008740e3ef15575c31031d9739d16eab4ba6782f215d8c08b0e27e42495c3458b4d9a10d37167420e0189b14e1f7de7b6f9ea371bbd73cb531a75600d6b8d0c17dbffffdeff3738d191dd12f9e4fb3e6d9f84c5d29738ffe8c27b4ecc62a3d3efaf8a1918f7680085a9abbbeabdfb9cf5868ecb53157fcaa8f65975d368fc377e68866e6aef69535c70fe1f2156e5f5517a5a5965a2a6bfe8d2bc6621efa4337df55e9dc0d8b072fe90f8dbbb93fb494d6d77d688097267a99ab8c7fd610ad58425a5d002321f89a6baec901f3ac2cfdc6f64c74cce3787f2b4028a9cc20b387764bd7e90408ed4778f7861b6e48071e7860debf81b65d76d925bf77f68bd34f3f3defc59b6cb249ded38f3df6d8fc9dcc96f6349f79e7f1fd2b5ff9cabc07fffce73f4f124d7897bdc3f6839ffdec6739abeb669b6d96f74dcf1a7740d8e432ca4228bed2d935510be1631e7a28bd74d75dd3a277dd95e3052f3ff2c81c3fd8ed15e503bef9cd6fa65ffef297b95c0b25412815bbed6750ed9c53ced72f7ff9cbe9faebaf4f1ffde847f3f939a8f231bd8cd3589c115ffbdad7f259bbe9a69ba6e73ef7b9135eb35ec6506d2bc1cb59679d95e5802db6d8229f5bc3a64bbbf32e00e10b5ebc61b110f6bba03ddc5700610fc4eaa7691510de72d3b5e9652f7bd95c81ef841120e779cf7b5e7ac10b5e906b604db7cbc17eda69a76570f6aa57bd2aa7620f2071d34d372587c0eb5ef7ba6c01a13146030257147476e04b9f0d54f8fc924b2e49d75d775d168ab5b131d9ac1d200407f422687ba66064978385804283bcc1061b6430111619872181c2e62fb31a2d367afb1ee03be59453f2b3def296b72420c5e59ec87e2549800dfa073ff84106446f7ad39bb2a0129b98cdfcfcf3cf4f175f7c7106413650c2cbab5ffdea0c88696bcd29808ee77a8ea2d6dad42d47e8a9cfcb2ebb2cdf8b6e9ea51d90f9d6b7be35832effffe217bf48dffdee77b3f0258180b98765f2c73ffe713af3cc33b3d0e5d0414b02d73aebac93d65e7bed4c47fce71968099cea032009406d2c00f319679c91aca5cb580819b4fac671edb5d766a1d061465823b47def7bdfcbcf7590b0cc06680f0ba57e8dc581f3ec673f3b8f4f1b87d185175e9841383a5bfb6eaeb06002a2ac0b78c11a00c84d9735c56fe885268428c5c9277a99cf15575c91ce3efbec3c9697bffce52dbbf47ccf76086fb7dd7699cf0b209c28f5bbbfbf0a08f1e53efbec931372340142bca9cd20d76a3a024202f5873ffce1bc67d85f65697dc6339e91f7240923d0c8feef7c38e69863326d01027b03254cec8dde0f6510ac817bbd8bf6498a2d35f7286a76d86187b4eaaaabe6b362dc01a17db52aa8035d77df7d773ee72897c813ce177bf58404fa471e492f39fcf0b4dcd557a77f2eb6583affc823d33f165fbcfb17ec510f9eb0ea3a4facb3f1e1f78982d59e06f26863cf75ae7ef5ab5fcd67d7fefbef9ff9abdf7a8cfd8c21ee71f6790f4e3df5d47c86bee635afc932d484d6ac8f01c53e861e641dfbdbe69b6f9e651defe4645c6843865e7783d71540388205288070c844ae02c2d3bf79721682eb2f3a6b0b0d2a01980568ba5d36316e5636fa77bffbdd19d4b98023873deddbeebbef9ec1ee91471e990be16ebffdf659e8a605067cb8b9102268988f3beeb87cb039f88118a0ca8f0d1b185227cc06ea99c00870a71d0062e3024adff6b6b7cdb154faccc6ffc94f7e320b27fffddfff9d810f2b10ab1d61c666286099f5cfdfd6489d27a090f0b2de7aeba5cf7ef6b3f91091490e10aa5ae2005dcf00683cdf38b94e015b5ff9ca57b23004d4025db4db841cf3213cd5ad58e601209f73ce39998640a0b1ea03007cdffbde9741b5b95c70c10559eb7edb6db7a56db7dd36bde73defc9d63b17c1e04b5ffa52a6bb3e000f7de3416d1dc82c8c00f1a73ef5a90c64095c78d16110a9cdad0d50f3cc673e33cf013d815bfdbef8c52fcee015983127a09af0e74001da8dffe69b6fcedf595f3f2eda599a62cfd35e5fc6474b8ae668b8f5d65b7765e1d31f3e505eedb3000020004944415472909d77de79191002bc78d15c3b5de6621c04d773cf3d375b2e76db6db7b4e69a6bce731be050b57046a28c6ae20cdffb3f5c8cbff39defe4f579e73bdf99b6d9669b9643c1cb9426de03fc600caed827c212d0abfbec74db47266bbc0108d11d0f02ef144a8491ea7a57c7672dec43f6a8415a39a62b209499d53e7ccb2db7a437bce10db9e0b9bdf51bdff846068af65bfbd7e73ef7b9fcbedb9fe38cf8c94f7e925d4e01409f3b1f22c6d01e671f01d27912d8df28acc2fd741cb38cda0f80410a3a0ab0d8177c6e7fa75ce20d63afb5c703e913015d1b5d7a697ac5e597a77f3fe631e9b82db74c772fbb6ccfafaa31daa329c8f00165a2f3bf558dc49e3befe386001ace0a34746e399b23dca08f2efbbe050d42596ecfb766ced989ac593f830979063dbc93e41232cc84150afd0ce651c533be2143ecb6f74125a94c9f74ece5b602087ba1561f6dab80f0f299e767ed7f15101238bc70b4a66a068585aa8f474dda2d002150c5ed8d4b2cb01287bdc389f66defbdf7cea0eae31fff78060884759a30873d619c55e8bdef7d6fde0809172c3b40152101f8202c5f7ef9e5f920f9e0073f980f446e4a3652a0020862e5014c080e046b00c626674321500067ee03bcb7dc72cb0c1608e3fbeebb6f6e77d0410765e01480f0c4134fccc0cc3869af8f3efae80c640e38e0807c98c5066afe0e6200cc5cf6d8638f6c6572001280580e0999b4a240176186c592c0845ee1068b66c627eb1620c755141865490cf00a68e1151bb583c433b965a1a3cf8045d64cd709279c9081863e580e5943dd8f8e8436c0c718005d80cf38b8ab008bb48234bada5a3b822f618ca06cbed6d0bd9e65d3069e09839ffef4a7b320e23bedccd5f81c30b4d5003fba991be500050817331ad11b6fbc31832774a340e8259b98f70c9064e964b130e79d77de39af67bbcbbb673dbffffdef678b26b04d18dd75d75d33a0ac5ff808bfa1bbb9116cd00cb0d7172586b1730f0dd75df407b6f12850d8ea02640161f77a5780634a0340d567ac9dd6c33ed12a0674d25efcf9e4c10108f1b8f708bd9b2c7f781e9fe067fbcda0b4f9d311107ab70f3becb0bc77500a7a2fecb7e139624e5540681fb0b787f2048f4b84c2aaa50fdfbb0738b7677121b587d80fec5bde2feffbb85a08231ecf9e0bd05415456849f966ffa0d403723a29369a5ee1973ff0403af6eebb73b3dd975f3e9dbbd8624db7b4fc3ece54e7a431dae39c6983b4aef73230cfc59f78159f45b8483b05502f7df7dad6589c27ce442030426326632cc68e1e71ce39c706a9f0ea8736f6d6732eb8b2949de895787db42f80b00fa2f5724b35a9cc8c471ecc027b5df363c32684d824ab89487a79ce64b6b59901490021d000d8062004867c47c00792003f02f2f39ffffcf4ae77bd2b833dda6173df6bafbdf2060d1072fdd417806ce3d637a199458cd0ec7ea0cf66c162c7b247a007900828871e7a68ae07e5b0f48cb0480200846bd627df3b3cdd6f5306301d0c71787dfef39fcf1627024a151002bf554068e376c8b1100291e64b5004ecfc6d6cc02ed748da7263c617841dcfabaeb9cf083a80ad18108213c0611e117313317c8457000c1021941a03a01ba00b20e44eca3285f62ef4e7b6a54f401030fdcc673e93fb7710f81c58672d01ea005aae2c7e871b9df96a0b30d2223a3c7caf2f420afa86eb8def805bc0d25c80f1388c8f3ffef83c3e60095826f4a137f0cc7552dfe60424b7baaac96dc21289df003cfcb1d34e3b6500dbeed2370b3630e89d444f428af150dcd42f9650ed5955ad052d3ca1cb3ab9aebefaea4c0b9612ef005a5acb0084e654bf3cd79859528062a0d1fb04dc02b6113bca551afdbb71819dccbd603a3ebb0a08ad9f758b18e34ef3b17f517eb1c08c3b20a4e8e3fe8d3ff1bbfd8e1785f7dbf95607842c3271798fbd83f63c4a2d6e6af6330a91500402e8fa070aeda1e39c6534e2f1ecdff6f32aa8b257e261fb61c814fd2a9156fbc73fd22977de991effc823e9f34b2e998e5a669909bddede117bec54018468058439c79cd1f5bc03139a6c8f37475233b78587498f5d0ca4b9714482b3086d994c993464b1732fbcaa00c281ac70e74e0a201c3291ab8070a9259e90c1475df35375099b2c8dd944c8408005a6583ac4e7450c94cf59e5587dcc9b7657ec07b006bc015a3499e200b90a012dac440021b720d633dae0b0f239fc8031ee84040e809040cdd5932588db24f0c16dd33308e63657c235ab22a003006ac7a50970724005206421acba8cd25a03285c2803103a6c01d22a20443b871cd75080102d244820e0980b90068002b7b1be91d9d3665b5d73a083cb2c6b1b20678c5597d2c8286ab3e62e0bcc89db237cd11673d7053c08500021414bd166b4778f365c670170cf610105e2d01470f643f0d28f35a2e907fef4538de7c3c3a1d8700f900910a241d5ca8d5e80f5cc9933f31a130443a36d9d82969ec74a698cd696e0e7b914018069fdbd88d85bf366653416079931e0b700e1ed00a1f6c12ffaf23c00cc78f1492b40e87b005ca21e966c4229fe0180cd993594c599306bbdf18d184e02b23e5b014263d686bbaa77871ba275c58b2cad00aa77047f1394294a8aebe84476ab79efad02426b8acef69f4ef14df891751c1f0cd2ed6dba5a080142fb9c7d92628f42c9df941de6c4cb225c46edfb0108d11efdecedace994741447f61aefb23d81e7873dcee7ded371cf328af79c37f6726ea3d5fdc0f94a216acfa46042cf7e12642df2e08369a7e38f4f4f5452e419cf485fd972cbf4c8045f3bfbb9b31e1f70c9b7bff50b562738947c9ea015fe64d5de6aabada665fe8689d2a19582123d28b39d63bc93c80a9365ad343ec0fdbdbbec57620807bdd82dfa2b8070c844ae02c265965a240393f9ed02fc8033316f04711af6d0ec00383617ee81dc811c002c38c056683109bbdcafdcebf007a258d35878080201060808dc3b1d709ff8c427726ca28371cf3df7cc4239419a50010c29efa13fd721871c92819df63482ac3662df0818369b410142964ee0875590e580fb28cb191752025137095268c52550002e0062e36ca524000c599568e059d408a7801d7713d658403a2c840e3bcf770f014b3bd62674f337ab17fa0348c0b3b1036fb7de7a6bb6d212c200ed76170b652740082403848026613b92e800430016c126b4b3c669bc0e23e00aaf502ad46900d0e10dedd1282e02d2e1871f9ee70f58b60384e82b36124fb15e68872f280c589359fdeacfe4d2266e15cf006f40a0f1b162e8c3e18966dc72b9e87abe6443d6b31d2004a6b9b9728b7bfffbdf9f5d8a015ad66634e526ca6acc52681df074018483dd41ab3184e84c49612d9b92cae0d9410bb4d3151052c00184f60def34e509abbf3dc57e0d04760284de131e025cb581457ba5bd5a72198a29a107008e8455bc2ac6d96514f7e359fb823dd4157b55ec275cfab9cd4752905e047a350657dc628bf4f89ffd2c3df4cc67a65f9d765a7a78e18527f4d245988033124f5863d6e0c8ea3da1cefbb8d978d08a970aef15e760c81abdd0aa8f474fe95b9c6dce39671220c85b86c275b26812eeb44f5c72c5b4fbfbb7cb06815e4249a634b1a7e0e00a201cf2a28c4361fa0084046182786c203611423d4b10ab14404888a2bdf4bf841bb4840470df010a9d0021619b404e500032805096349a686e5b800990c9da052810448020d631ae4cc024ad2090063871cf23700f0310b278715f25d8eb9f70548d156cc7760e4b6097600a10b68a650b8b24e0cc82064001d00e3702140d3dcd30702a618caca2fe2790012fc0908d5ebc1cb0e2106009e402c9c2c7ea21fe8ea6108d582959b9060d08f5e7f0610da33400aa28016cf8001ff75e6e98c0522b0ba14ca4801b6b4e15108a6772b87702842c12845801fcf8c3f30078312e6228b97cd693fd18eb11471c91adb1e21ef11701078d3d8bf0451003482939c468a23765483b40e8dde0926b7edcc9bd032cccac86acb2806ab8c801c9f87c3a7a110c799b9d50f7d52ca3f8800229d6bf536287b0d64fe8e1b59ba73b20e4d5c0ea627fa6186471751eb096b70284016628f2c25ddcfb18603c2c39de69fb81b382328bb509801cc7a432c1321443d50cd56865ffb7ef03e4dcf3ed3b3d27aa93fceaab5f4d4926d1ebaf4fe951c5ea44f91c001387cf93c8b89cd3f6b3c9bad0ca1940098af7227fc0648d672a3c372ccf78485e067241a7b08b518cd91ef2bb3fffab00c21110bb00c22113795c006108f5b492a1c1013408bcb46fdc3ae3a047721a2816104086d627b2413601422010a0e1eee86f96271bb9cf0868dc4edffef6b76761c4c5e2c382645c9e6fc32380035cc08744129d002197ca6a0c612797d1aa8550021de00a28044401c26e5c7780328030bb49bcf7bd2d5d17cd0ba8660904c669cd01712eaa0014cb1f80cdaa0724d2f4a1078d320182b00bbcb046869b2c50a94f0216614c2219da6702180ba4837c1880108067913176eb212e0bf071a181750d2d78fdf9ac33007d1568b3107603082924f0506494f41cee4c044dc094601bf1a4f15cb4058c8148d63c3c84975816016c7c62fdb8cf5138008dacd6d6b315200436c4c4528cb0f0b2b010ea00537de065ef87e4485c45adf164c6b90c79ab9cb4eeeb80902781f7b7c942388c01cf0f8090e0cf3bc1deef1d15cf2bb3a8bd9832cefb155946f17b7c4e79685fb23f013bd58cbdde07ef92f78cf5dd9e30ee80b0ce7fd5c2f4682f2c02bde22cec8a5f8f3c32a53df754c749c0794a2f7d6957b775d3085fb01e0384f6796772ecf5dddc3fe836149e943ff660de4d94d3e3ae6c231fb1c653e8008464170ad0c9bc844cdcf7d7470a201cc12214403864228f0b20e42649e3564f2aa31c03819f4b22e0122e223e0708699f00bbf8bc1d20243cb322d9a0dce379ee631574b00037ac6b62f7081b2c440022cd9fffb980b9cf67ac38fa6391f179949da8279501a6b83211cc09294051b78090d0025c390001832810dcc46e0e29a08315142dc594b57211e4e6096403542c7de8e75e3400acdc0b5870cda521067c6df02c85008df62c50d606f011f3e33010c3c93286363e37760782843eed5c15fb75190d5aa02bebb218bb6a6c116b6ea456afd38db0c8ad0c90aa6a30bb0584c03b100ad445921cf4f3bfb566dd93c8a52a20042024e00284eea3d8f013e533d0bf0a08f16c3b401875b928350078aeba0001c1491f516313102450b37a873b76131f95efbba74001849d6915eeff5cd4292f589e80ba284c1f49bcb88453a438f30895929ef89bd2858b358513250c8f03c0cf5e4c01c35acf224e9118aed8f63560c13e455943c9235ed77bc6e3619c2c84dd8094c843a064803dbf6a21ec1a1002801b6ea8086f4a5ff94a4a5b6fddfd4bd445cb0208bb20d22437298070921760921f5f00e19017a0550c61277fec6e36ff210fb9e7ee23a90cf74556adc832cad42f3e0c7853fbaf0a08011a8090750fb00bd79100842c225c26013b1770205e8bcb28619c805ccd32cafac5cdc1a1c31ac32207c0003cdc91b8951230d01ed8229c0092801ad04638d777d417649de24e19c95058199b006135a90ca187a003b4f93b5c77627d0943e8067c55d79cb63cb272128e5835abb187366c17c18a758a2bacb8b2003562e2084c5c3d683d813e9627021ceb120ba11fc2157a7169d53ec601dc719b64ed421bee8e400d602c4eb39a14078dd0182dfb89210c4673afd8c62a20441fc24d64966d154308b0b26c723d8aab5d0c210580f1fa1d9951b9a0452d41b1ae809db9b33003f475ed752b40680df0571320f4bde43ed5cb33cdcf9ad398e379f3344eef0e2dbff7c11a1a33a58a776b32b3bef5bc394c831bea80d03ed08d8570187135d3d94208104aa68477255e120b8b87f1ac786d16407b2de51345576406569bcebbec5eeedff6306ee2f635ca108093155ecc99f75d5b568371293b1160afe955d2ae0e087978c419dae9fe056ebf3dcd902df9fefb53da6597943efde9a6c7f5fc7d01843d936ce43714403872924fa907164038e4e5a802c2c59fb4504e2ac30ad1eab2a11308aa7101431ede40baef17100258ac3bdc1643f80e40c8f2035c023c048cb0280286808cf6ee8b2ca3dab1064a14c25d0f107310b2bad03c03a462ce087151c202bd0931323c026fc623fb1990032cb01c12da01531636c0c5f3ad21a1a46a310360802b5645e3025222e6d13dfa608de4dea82d10c052e9b32af03057f3e07245b3cbdac70268acc60e9470c302d4fc4f408a22ea9e63fee22a8d919698152cb28c46028cb092b25ca19f7946dd35c29898387cc8951620e6822a490fab618011801278e48eaa0f2e26d5b213c1582caaed92ca441b740708c52b562d8440ba6700f0f5cbdc2911ac83442c2e9f0184e6459004c203e07b0f593f099278220ac747bfacdb80b875715faba432fd00426e6e140b2cb604deea85d75971b9bd02c3d63b52a19b93c3194005382950585f00f5c98cbb19c88631c53aa90342d6593ce29de8544e22620807090ca71320a4a8f2ee7baf003d0a3fd64340cf3e4681676f95edd9776208eda18001e5947790a283259e722eeaa7daebcf38e38c0c2a9d85fae23a8dffb5b52e615d9fdf6308ed01e6da54d6a49a54c6fe6d1fe4518066f6924e3cfad8071f4c4b6db8619a71e79d29bdfce5299d7fbeda07037f4b0b201c384907de6101840327e9b4eab000c2212f57b530fd95975f9003e25b01421b3a50631377e84da75821801000930d8ef58e35cee5208f5211e2ddc43444a20e8907b84612d8c5ec5401a1ffddcb2ae7f067810272d00d80a36d2628033204121648c01278203c034192ba18072b1bf0445089183e208ff04ff3cc1a4430114b00387239257013fe8ddd185877ac8fb8336e7c2c7edc2f5dd649090a608b8549803a8b1c60636e041b401118a5e1e6be09e0004f841d494aaa02bef9a0a37b8000710d91fa993ba2cf8c290ace0351e1e3cf8dcae75c86b87aa211572c6dcc3f00a1f51237c10dcb5cb84706d02384b99f5530b295a2af31e98360666d8cdfe141d3ef7fee64807658828172f303acc50d193740c47db7aef04057e344e7882d425b421080d4ae0ea135c11fc61e1635ae6adcda00556e9868c52281e6f8cd18d1b61ecfe973601eaf01efded3fa65edf112b75bd6ba484463ee80bbe75102e025f347573c064ce32deb1f16497c606f001823b18d7ba26e2337390985ac294b2f1aa00f5e187466cb216f8153befb6a96517ce4fd95d1d2bbdd2aa94c944af02e503c4ca4f0779d38d311107ac75902ed837e0228db67bd57f63efb73ec1bbc39d0d05cf13c45083ada07d11b70f41eb17601438027ebb9f7d87b6bbf9edfeb10dadbd0c23e0b5453c035291edc63bf704ed84728cbf068270512d8f7810b2e48cfbae79ef4c8b39e95665c734d4a7d169f6f7ad10b206ca2d0e47f5f00e1e4afc1648ea000c221539fd047a0bb64e6ac74c6e95fcd6e30ad840c9bb9ec8e5c3cb8d84c563ae67ec84158550f0f9800d6a2869bcd05b0f21de0259624802ec0c15d8e60ccf214409120004070196239893a7de25508d5fae066ca922346c521c9fa42a8a0996675a1358e02e1dc8ab82e11f002f4f88e150e28e51ac8020748116a00536bc192c4c2c8d512a820a0031292cc709db43e61a502e0a3de21b7289a6ee020621b69ca8d0ba0357ff43216023f6b54dd0510cf0012c62849098133b4e2842b4946b8e2a2b5ec7de8e48aba8f2ca85c668d8f3b96b1986700094216e00ac0b23002c101d23cdb787d6fee2c254016604bd82090e9d70fab29edbf2401b4fa2c9468a1cc0661c4f3d04df207ebcdba8526f558c400bfac08beaf5ef1ac767c19ee54e1526c7d0892e86ccd29058056e3609d600994e4a89ef195b0826f8068f14de655bfcc53ec21b736a0c17becdd26b05100a0953844565a6b82b6f818f036677c13421dfae007e3e6166c8c0437ff47c6457d68ef39de296b1d7532fb794fcb3dad291080103fdb1b000fef59a7fa82f80e0f00f9f6ae4ed9487ba1fb740484f8d8de800e7e82c7c3f539f6afa8151a71bb6121b4b7559544be07f8ec45e156ef5d082f8671028414773c2c80eb2640184a34b4437b6be13ceb54a6e6a30f3c90b6ffdbdfd2434217aebf3e2db8eaaabdb06b4f6d0b20ec895c93d2b800c24921fb9479680184435e8aaa85f067d75f91058876176d29c053052f431ede40baa711965e9fe657c28da8ffe76067b5e37608fc10b4e2e0071e811e400f4d0214b1e4e88be04e80204c0021fa24b0717f21ec036cda3924c5c00528a249e52a29c90c2b91fe08e69e136e35363d162f5647e0d2b8b457ef4e7be3a695060a001cf5e6c29aa3ef00219e4d4821dcfb5b9f68e15ef7b13201a9fa769f439d8063fc8030806bad5bc5c7a12570cc1dcb98d002600036fdf62cfd1b7bd51594850bbdd1cbe7e8ec19da8560604ce6cead08edabe9b68ddf77c00feb2477d428ffc0c515edac216b36ad3dc1d9e7d6d9bdc606e0003fda7916a06dee80148d757dbec0221aa1b7effbb9805c163c1af570afc213e60ef01390280008fc04f9ba051e60742fc1d6bab058d42fb465d1333774b1e6009f1ff7a097fe8d031db40130c55fea372c49c13feed38e5b9771fa1e7dd1df58f11c1a524cb04ab2be1477d17eb8a3f33d554088d7d1db9e136edaadeef61d8b6dc42637b9f4753beae90808bb9d5b3b3ac6e775c013caa07a0cdd380142fb0def09674037801018a410a358c2c72cb355905e5d8397dd734fdafd273f490fcf98912e3be8a0f45ffbee3bd4f8e4020827f2a68ce6dea908089d837f7ce0e1926574042c5000e190895c05840ba4bf670b60bb8391904ad00628a653f16907154138805408ad3e7740f90e380beb9bf9030a84704230201c200160d29e001dee7540179a10d202507a96762e7d07a0f439b0a8efa021eb615503ad5fe3d2ce61a96fcfe5aae4b3005f802020e95efdead34f5803c275cc7cfd0d9478a6b9b82fdc4acdd5581dd2fa3167cf34ef7aadbbe08dd0a613508316f8c3985c3e03c6aa962e63300ff7a099b178b66755694f78c597fa683506df19ab797986b1983770a37ffd7a2ebaa30df0ea397101bb91a4c6bdfa72d0b8a755e90d7d5b0fdf75539aa3d5fb634e94019e15bc649cd6212c6de802181a5ffdfd0a6b9d7edcd3ca426f0ec6ea3b6d5c414734363ffda387fe3d17bd826ed57103f42c8b84366eb2bc03c24d0c2d58c0839f8297ea098886bc758d4df75540887f586b63cf6827845b5f96750a9a4196a798ae80b01d788e7731e858570675023955c55bb5dd3800422f9f3903829465f684a60bbdb4e759c25381678b90007b78fd7af26db7a5ffb7efbe69010ac01d774c8fdd7df7ac701aa6dc510061d30a4efef79301089bbc809cb17ffa5b2a807004ec5100e190895c4d2af394a517cdf144e52a142814186f0ab01873cb15ffc9d5b495d036de141addec0310b2a203f0e2a05964dbc5101a19e19bb702454027d7d25e67315d0161aff39c48fb710184684441152eb64d34c3933c42d4bee5ed205460db6db79dc7db61817bef4d8baebf7e9af1873fa47fbdf5ade91f279e98797dd8612a051036ade0e47f3f6a4088b7295029a7db7959f86eb1a5562a807004ec5100e190893c0e7508874cc2d27da1c07c4701821b2d3ed754eebdc316c6e63b020e70420108c5e6b2681f7ae8a173e2b83bc50646f294010e257b3ab0088973e5862dc191a443838a51ec67ac8086b9d6eb104696d17efa9cc83de30408d1be1bab5d5853b98b8a39a47092502dca1dcda1374be3da6ba774d34db38bceab3da808fd08ae02084740e4093e62d480904786d01fe1133c62ea17bee67db4dd7b764f7becfcce5c464c7846b986438102088743d739bd164038640297ee0b05a6210508f88048b8184fc329cc3743ae0342598ebba943380c021440d84cd5710284cdd4f8bf16e822f65e522b71dbb27a8b739dab30fda69ba6f4bdefa5b4c20a295d7f7d4a2ddc497b79662f6d0b20ec855a93d376d480506e0149ff844f44085075e6114671d1e53f4d7beef2ae0c08e56728d770285000e170e85a00e190e95aba2f1428142814180405ea8050617a656b06191bd8ed380b206ca6540184ad69d408080f3c30a5830e4a69d14553baf2ca94565fbd99d8036c5100e1008939a4ae260310ca422f7c427c7eab8bf2f4bc8bae497bedba7d2e6f5600e190165f28c423dda4ae1adef3e7fb9eab16c265965a24170c2f57a140a140a140a1c0d4a08023509c4ad4d053479285b0533989280732e8191440d84cd10208fb0084ac82ac833366a4f4831fa4b4d146cd841e708b0208074cd02174376a40c81d54e884246ae2b75b5d122afde70b5f565c4687b0def52e0b201c3291ab807089273f2e6b380695a27cc8432fdd170a140a140a8c0505c4b2288b421b7dd04107e54ca34d1642c964ba89efea858005103653ab00c21e0121cb8bb841f183871d96d2de7b371379082d0a201c025107dce5a80121c59accdc64e276b6a99cb9fbc11925a9cc80d7ba557705100e99c8d5b213575ff9e39c0aba13f30f7938a5fb4281428142814281472950ad4d2a3b2340a836a7d224d55235758201251b6fbc71ae9d09c40dcad1a600c266d62c80707696dbaa42a29a54e684134e48d75d775d4e2ab3c3669ba5655ff39a94eebe3ba5cd374fe9b4d39a093ca41605100e89b003ec76d480b09ba14b36f3fbbffcbb00c26e8835c13605104e90804db70384e79c734eba64e6ac74d2173f936b934d66c6b8a6f196ef0b050a050a05c68d0200dd6f7ffbdb3c6d751fa5e1afd7ccabd20428d96db7ddd2269b6c92eb750e6a4f2f80b099f30a204c99dfd4378d9aa7a8865f7ff39bdfa46f7ffbdb396be3461b6c900eb9e8a2b4980c8ecf7d6ebaf50b5f488f2cb4d01c0203946ae5aa7d8cdf877d1540386c0a4fbcffa908084b61fa89af6bb73d1440d82da5fa6c5705845f3df9f8bc010f4a78e86748ac9351085cb1f228bcde4f5f83bc270a7af323079a15f9ee24900df2d9d197e7d146c976e56f85d7097b937545b17beb450852945e51fba972f1ff2790e02975f4f0d3645d0e327108046aefd828049c5673c5377839de317c8c8f46cdcbd5b1e123fb9031898bf37ea1d3645df63fe311b7671c933d1e74302629fbbd67abaeba6ae6e74eeea0d6738b2db6482f7de94b3bc61af64ae302089b2936ee803052f15334ab37187b8bdf0f3cf040baf1c61b3358fcea8c1969e33ffc21ddbfc822e9e35b6c91fe5a3bcbec05ebacb34e2eb162cf1cf65500e1b0293cf1fe27031056e3b15b9d9378bab88c4e7c6dbbe9a100c26ea83481365597d1f3cefd4e5a638d35b2c03819571ca4b7dd765bd624728b7ac6339e9141cfa05c9e7a9d576c00e874f3cd37a7fbeebb2fadb6da6a69c09558f30000200049444154f9e5971f787c4ed3d8802d87d60d37dc909fbdfaeaabe7e2d393419ba8fd252df3edb7df9e0567c5b2018cc9184f9576c6660c840e6b06c43ff7b9cf4dcb2db75c6e3619e3c3373367cecc0a8ee73ffff91964c4389bd67d90dfe31bbc7cebadb7668b133e461b9f4f065d623d04ee1b136bc0b39ffdecb4e8a28b4eca78ac8962c4c6a316a35a760098759b2c455980f81ffef087396e70ebadb7ce6bd6e40a6adc78be14a61fe41bd4dcd7b803c2d8636467bc501dc147afe0630acd1d1e7c301df1ef7fa77fcc9891b65c79e574cbe31f3f0f619d254a536cb3cd36799f1af65500e1b0293cf1fe470d08c90ef8c2f94d2eae0342ff3b4f9fbeda0b4a5299892f6f630f0510369268620daa4965aebae2c29cbdce4b3719c2a1838456fe9a6baec9c58f15625e73cd3527156444ec830de18a2baec842f48b5ef4a22cb40268a3a413ab12f075c9259764214f2cd14a2bad34d23104b7592b9ba5f1cc9a352b5b215ef9ca5766c179943469c5fd01b408f4d64c1630493864691c35208cb150709c71c61959d3bdc1061b64e033198010dfb09a5e75d555e98e3beec8ca0d56a4c9028451c78925c17bbfc20a2be4f78bd57232f828f8da78b8b559af17bef085f9f76425db42237bb262f0acdc071c70405eb3a6a432f6a7415bec8b85b0f9bc2d8070f6397eeaa9a7a6cb2fbf7c0ec196f9c73fd2927ff94bfaf76f7f9b3ef7a73fa505524afbffc77fa46b9ff6b49644c5ebaf7ad5abd2a69b6e9a159fc3be0a201c368527deffa80121a5f299679e99aebefaea0cfcea97bd991cf4f1a38ecf750825652c85e9ff3f7bf701654b51ed8fbf408587200690078a02661011d1f79ee989808a44e1af20a292b32411140982392041a2208212246725c74bce419f8822fc5044894a104505feeb53c3bef6ed7bce9c9e99d3e7cc40d55ab366e69ceeeaea5dbbaaf677c789cf73b71e0a206c8fb6b9e72a20bcee9a4bd272cb2d97b8da0da38566f1eaabafce408386fb1def78c7d0ac0555cd264078d9659765cba5c43b32fef5d2d0f79b869ec78a72f1c51767414f2db245165964288273687b09cd364b8050bcd2b004f93aad8189dffffef7d92a0710527450300cba55c1e909279c9081202167bef9e61b1a20a4a127a8fdf6b7bfcd56662e59c3048480d6cd37df9cacfb57bffad5797dbdec652f1b2a5f4b7ac1ba0c08725b336fc30484f664c938584d949d3067bd00218b66bfad9a0510f6de41260b207cfe3df7a4d9eebe3b3dfeaa57a56dbffded7c767df18b5fcc9e1cf6c7b6142e6165a770e226af2d73d04169e16baf9d8178272fb144faebf6dbe7b5dea939e32888165e78e181b8fb1740d89bb7877dc5a00121a5f2befbee3bbd307d279751e7c2e5d7feb2d4211c00731440d83291eb80f0fdef7f7fd6460fa3052064bd20acbefef5af4f6f7ffbdb270d20bce28a2bf2a14a406459e9b7f6bd17cd590801b069d3a6650b21ab1740a8b575b877d5d43ca319e3decbb243380508b9420e7a2c9dc6680c36f32a20e47e3ce81680906bed89279e9881c5073ef081e916c2418f07df0084c0973546b141b18097fb0d1e9abe9bb90208ad7b02a0f5356c40683c00a1b8d8fff99fffc9bf870d080f3df4d00c08bffad5af6605472f40d894fe63b9ae00c2ded49a0c8070816db6492f3afbece9833dfa75af4bdf9d6bae8100c278a8bdc6cf9c679c915ebef5d629bde84529bdfded295d7f7d4a8f3e9a0ede6cb3b4caaebbe6d090c9d00a209c0cb330fa18060d08efbffffe74d249276519a79385d068b992eeb5ffe1d942b8ebaebb96c2f42db25101842d1257d70510f62630a19e85b000c27fd32a5c250a201c9d7f0a20ecbdbe0a20eccd432c84930110bee8faebd32fe79b2fbbafb2c06fbef9e65969372c6502ca453cf3b1c71e9b4e3df5d4f4d18f7e34adbcf2ca39fe7318e31a36207cd1cf7e9616d86ebb9900d8f75ef18af4aed5574f0b2fb0409a4591ed279ec8bf67111b157fffe31f69569fd57f6ad754af77edac8f3fde7ba1afb75e4a871f9ed2faeba7f4a31fa5b3975f3ebde5873f4cafece232dabbc3fe5e5100617fe9d9466f8306849e17318462cb3b35d72cf4fa254b0c611b135eebb300c296895c0784cb2cb3cc4c16c241597c8a8570f4c92e16c2e68ba19b8570b46c9a6df0790184bde7ac00c2c90f08e7d96fbff4929ffc243defa187d2df5ef5aa74e8c20ba793669db500c20e53370840f8bc071e482ff8e31fd30beeb927710df5e3ffe7df7b6f9aed37bf49b32af25e0360bd57627fae784a62b1d9669bfe033c3effbefb52fac42752da6493940e3924a5638e4987afb34efad037be51006117b24b6cc53dfcc20b2fcca5c178b88c767ef567f626772f830684ce264070b4dadc62084b96d1c1f04d01842dd3b9092034843684e5faab1540580061bfd8bd13206c1243d86f3e2f80b0f78c164038a3e5bd4e313cc442f8831ffc20bb8c7eed6b5f6bec32da0f7e9eebbcf3d22bb6dc72268bd3266f7f7b5a6e871d8a85b03661fd0084b3dd75577a3ec0f7873f8cfc06fa9ef9ff0577ddd57b51b9a206c06e9c6baef4b225974c2f9d7ffe0cd69e7ac10bd2d3b3cf3e0378ab02b9e97f3f734dbebe02f4aa7f3fc51db44b9bedf6dbd32bb6dd3603d568e7bef8c5e9f26db6499b6cb2490184051036e3e7c4a8fd44cea1602f14dfbde38e3b4e0f9b69dc499f2f9440e981479e2c85e9fb4cd74edd1540d83291ab80f0cacbcfcff144f52ca30412b100e28cdad4501540580061bfd8bd0a08d56e94a864b4784b7c8dfff0f868f5ddc63abe02087b53ac00c2111a4546e34e14b3275793ca348921acd6cfea3d0bddaf78d9a187a679f7d8a3abc5e9a9b9e64a4fcd3d777a928b66e577afcff2f773cf3daea1b158bee89c7332c87862f1c5d3031b6e987ef097bf0ccd65b43e9e7bd75b2f1dfed863396e78d555574debb1d63da35865650dcb5eb6eadd775f7ac1ef7e37ddcaf7bc071fec49937fbef295e95faf7845fad77ffe67faa7dff3cd97fe35fffce95f0b2c905e70f7dd490c61b5dd35d75ce9938b2c92b6de6597d693ca741a3c5038f7d967a759a64d4b67cf3a6bfac63fff994b4a1440d87daa8b857066da4c4640a80ee1438f3d5d0061cf5d6be217144038711a8eda43b50ee129271d9553f333915735cb5c1525c350d3cadffdd03a771ad454048491adad5f3441836ea0bbb88c365f0c0108c57d8aff549e23b2d9759a2b0a0f0971c4b3883dead77c4e454028eeaa9fefdf0b60174098b24b92bd98c083fed53d20ca4e888f539355dc9e723cf6836e3172ee91ac034ff7a27faf5535f74927a5f977da69268b53affb9a7e3f564039dbadb7a6f9bef9cd99badf679b6dd28f2ebe78e03184735d78617ac5e69bcf349ef33ef4a1f4eb9b6e4aef5c6081b4e88b5e949e7ff7ddd9ad930be568ad0af680bc7f027acf80bdfc7bde797b92564299174e9b96b38cfe7de185d317efb9275dfde8a3034d2a83ef82f742d9f1bbdffd2e5b77246d12ebb9f1c61b97a4325d66b300c202087b2ef4e7d8050510b63ce18410fee9975e7e433ae4fb7be7f4ce7521c367327e2a86cc65a9ad40fda9060809647e945cd0aa42dc78046af71008bbd5812c80b0f962a802429961cdd168ca0cd91309d08ac62b09d12f1e9f6a80d07865aff4530512bdf83904beb82e7ea323979ad132743ed70121dad9879594b9efbefb3ad20afd648565c15e628925b2828e12a353434f73b7faeaabe71a8a1355e2bdf0ca2bd382cf58b8e2797f78c94bd2268b2f9ed6d972cbf4dfcab9fce52f69d6471e49cf7becb134ebc30fa7e73dfa68fe7fd6471f4dcff3db773ef353fdfeaf7f6dbea8eb57aeb1464ac71f9fd29a6ba674c209e3efa75f773618cf6896bda6606f2cc38df240db6fbffdc0ca4e181f1e54eea79ab1dc58645b3efae8a3d3fffddfffa595565a29adbdf6da79bfedd45c4fde986baeb90692d1bb2495190b670de7dac968212c2ea383e38502085ba675d54278e2f13fce69dfebc21b8162fef9e74f0b2eb8e084858bd15e672a014285e9016581deacaa68546d4d0045d47e0be159fa62f517efbaebae7c90d62d850510365f0c5540f8e0830f66cb9f1a89dd9ab978e94b5f9a2d8973cf3d775f2d64c63215ca4e58f780b158cb3a4f8725bc9be016bc5a058efee6ae7bd55557256e35dd2cdf05108e6431567643e64e490aeab4422371843eb7ef98a7d1e8e93b2040b64dd74fb464c6c22bac9066bbe38ef4cfd7bc26ddf7e637a7fd524a573df2485f92ca3cefe18747c06327401940b20228b37ba5fa7612941c7c704a9b6e3a92a864d8ad369e1b965a2a1df1c003e90dcb2d973ebcd146e9c997bfbc6ffb4ad3571d06200c8bb675af4c5255b1f4f0c30f673ea7a47bcb5bde925df901be4e0a27e71de5872cb62cdd6db70208dba6f0c4fb1f3420c497f6ced1f64ffb72492a33f1b96dd24301844da834816baa3184575f79e1f418c27a97515368028fea79eb54038480c3bbdffdeef4dffffddf595b4f90d3c25a429b1f316975e10d60b4b9f99e70a7d1342918aee60d01baeeea5500614f169a7e413d86d03c0139bd1412e6b19f71b253c942e8d0634955df52ed3d630ff7f1e069f4c187c19be88cef1d8af612ff73b905425c8b8f7ffce31f67cb5701849db90f5dacfdb010a279a7fd4289177bc55bdffad66c55098552bd577380f62c848a909bd3260aaa6e6b63f65b6f4d0badb65a7af2c52f4ebf57bff2eebb875a76e285575c911654baa0d29e78ddebd2de1ffd683af6ecb307ee32da693c7f7fed6bd3f7d658231df5d39fce1443d87c179bf895c30084f8d2badf638f3dd205175c30c34bd8632889283fb93fb300767369f6dd5a6bad9536dc70c3aca86bbb1540d8368527deffa001a1b3ed4f7ffa5356d8e1ddfabe1c7bf7ab5ebb44293b31f1e9edd94301843d4934b10b4a96d1def4b3e8eb75085908692d2577e04e4b1b7afef9e7e7838e30260316c10d1061590dd0174f531c5c2d2f1ad0f7bffffdf91e73a1e8bca2e10510f69e97d1aea802426045b2a4926534653eeb56983e00217e44abcb2ebb2c2b271e79e491acb81083c96d5c691a9e041a3ecd2ee7975e9aeb3511eedef08637a455565925f33fa0f3c31ffe30dd7befbd05108ec2b0001b173bfb47dd5a62ff21981c7ffcf119686fbbedb6d35d413b013df7bbc71e44a89ea88263fe1d7648739f7e7a7a68934dd2c33bee98eeb8e38ea1024264142327b671ce69d3d2632bac90eeffcc67d28fafbd76684965eae3b967934dd23137dfdc31a9ccc476b6b1dd3d2c40e82c132ba86442b5e16f67295e777ee2d1fad918d7e35d4a0d6ea583285e5f00e1d8786b18570f1a103ab78e3aeaa874d1451725d6ed4ecdb979cc4967a71db6d928edb2cb2ea5307d8b8c5100618bc4d575274048801e469b6a164207dad24b2f9ddd698f39e698f4d39ffe345b5608cf84689ad037bde94d5943cc3d864614bd7ff5ab5f65b7999ffce42769a38d364a9ffef4a7f33d84e74b2eb9a400c23e305f1510123e00f7a8e3d42b1eae0f8f9fdec554b410e2e9fffccfff4c471e7964faf9cf7f9e9349b132e15d3c4dc121190470f8c0030fa4c30f3f3c498000aca035c10adf6fb6d966d9fd1620a4652d16c2d139ab1b5f860b5eb5303d058738cfd15c99c2aa3b117e56efee35ef7b5f9ae5e9a7d31d175d946679d5ab260520acbe93f7448752987ee6991e06208c673ae7ec05d17c6ebf60351416c1b366d96597edeaca0f28f2eaa07c050edb6e0510b64de189f73f684078f7dd77a7ef7def7b59b6137a526f71be5f7bf3ed05104e7c7a7bf65000614f124dec823a20641da806824facf7b1dd3d5501e1bcf3ce9b85decb2fbf3cedbaebae19dc39f87ef18b5f246e5e40a28c6a0e379b0aad298dd319679c9176db6db72c5c174038365ee975753740d8ebbe7e7f3f5501a1784a00e42f7ff94b5a7ef9e5b3261fef8a09e2d6ccf2fdf9cf7f3e938b2591e6df3a607d3ce79c73926c826a442db6d862e9b0c30e2b80700c8cd50938db93c75a87b01f8a8f79f6dd37cd73c001e9d10f7f38fdf17bdfcbd69cc960212c80b019430d03101a19deb327f889e67c27601f71c41159d14451bace3aeb64856aa766ec941e945113cd94db845a051036a1d270af19342064cde60173c30d37648568274088c777fdea5ec5657400ac510061cb442e80b03781477319654d212c0384b7dc724bb6143ac4584a640554870a38140b016c73fdbaf6da6bb315f0a0830e4abbefbe7baec5540061ef7918cb15051076a6561397513c2d010f9e060036d86083ec22ca7340d213966dc581d5c563f9b68710d858c081c6934f3e399d76da69e9739ffb5c8e472c80702c9c3bf3b5f61fb4af5a089bd4219cd853539ae5c927d36bdef5ae24e9cbef8f3926fd6da9a50a206c40d47e14a66ff09846970c0b101a5cdd42ed7f8a22fb4a949d70f60dc21db409b1a60a2014636c3f70c6913522c154249ef27d5854791d851b7ac47fbba75b86e200f1e4917aa2bc26346cfb9a410342cfc317ceb54eb1ddde97acb7c81b972a7508db9e7c7bcad3fd50730e60a053f5112586b0f7cc350584b7de7a6b16846333165fe5ff134e38210bc66221c461dd7ffffd39edf6a69b6e9abef0852fe4df0510f69e87b15cd10910768b216c738b99aa164280902b28375075efb8db6a5c4659c23ff5a94fa59d77de39adbffefa39894c58b5248f11eb46110210b22416403816ce9d3c8070ee534e49f3efb8637a62d145d35da79e9a07562c84bde7b200c2ce344217aea2f603cad352987e745eea568790d78604548008f77dcabaa849ca4d177879c73bde91134901dee48d58bbf6eaa829edefaae515e091fdd5f5ae8938f1de1c3fb82b060d08c906e8325a522e67e2237f7f5e018403608302085b267215105e73d54539d6aa93cb68b5c86c5b439aaa2ea36121fce52f7f99931ad868359b096be03efbec93e3b0003f09686c2e5cef24ded86ebbed0a206c81a1ea8010300950537d1c2083ef269a78a3db2b4c654048700b40084cc7bb103858bba58cffd6b7be952de41abee64e28ab28179b2f7ef18bd965b4c4104e8cc187652194595486d13f7dfbdbe991d5562b80b0e1341640580061435619f5b26e8050692a4a66962b71982bacb04276d767dde3bd215485a29937d2c1071f9c4b5929ed11f5655dab3ee9dbdef6b69cd807bf92f9b84772ff77bdf392a7c8646b8306844ddebfd4216c42a5fe5c5300617fe8d8b5972a203cffdcd37266c0aadf7fa430b7a14810c192d59645e5d90608119d25505032ba6db1c516391107c11978fcc8473e92ad28c542d87f26af024296dac5175f7c26d724d77073640d7358b6d19e6d80108d1c801ffbd8c7726c0f81430904b4b497882f948cc65e41d92116b100c28971562495a9c610465299899493186d54735c775d7ad5273f999e9c77de74c7b469e9e9e73d2f5fce1201f4b31e731f663d0e6b445be7422fea393768f1ab496528dba2bedda0c7653c5cfa4e3ae9a4e9594659d24369d2eb7dfaf9bdb138cfd5a4042028699422419341d225dc47c365b458087bcf72374048c9fc9def7c27c761bee73defc9598729deac012128dcf97969b0207ef6b39fcd257f9c7fd6834c9980dfab5ffdea9ccc6ec92597cc6720cbedf5d75f9f15da326b0a13f8f8c73fde7b9003be62320242f2c5438f3d5d2c8403e08502085b2672b530fd8f0f3f306bfbeb42066179e18517cea9e86d1e6d1d24cf4640c88d74fffdf7cfb348782a80b065867ea6fb0084575c71453e100113bc5b6d84146066d14517cd7c1fe0ad9f237c3602422e329ffce42733990210123a2550a2b926ecadb1c61ab928ba03bc949d68ce519d2cd56121ac279599687dc1d14635ff965ba6b9ce39273db4d556e9a1adb79e7e29c556249521dc537205206cfe96fdbd127d02109e72ca295959510584fd7d5aefde8c87302e9696ebb4e4290108db3a3bbb8d2a6208291eb903560161ef37e9ef159d620865d97ee52b5f39ea83daf2dea83f74aac4100284fbedb75f0684b2418bc3fcf0873f9c95ce5ff9ca5772e92a9642fbb42477dc4aedd792f758b3679e7966e64beb84325a0ca77312bf4a764799b7d5565be5447893ad154038d96664b0e32980b0657a0384b98ed8e537a4830fda2b5b4aea8716b731a99f6999c4c7b5a5957e3602c29b6eba295b08b96648c38f8ec542d832533fe3ae2ba39d834ec903b14f51ef2af85b60bdc390c63c32ddf55b607b3602421a510288acb97bedb5577657e2467afae9a7e798d9b7bffdedb99834dad2461740d88cdf472b3bc1e2848ef65f429f98647b751b7bf10beebd37bd6eb9e5d2d3b3cc926ebff8e2f4af675c82bd455808b905132e29b9ccb771f47bed34a35aca2e6fca4e1c77dc71d3eb10aeb4d24a9956c318535874815356428a91f5d65b2fbf4e1bf3351a9dc242282330c023f32fab903648da04a86355665da6345a6db5d57a6619b567e3b99265f4ece9659324a4e385c1da47f1201462ebadb7ce717f7540288b39453e8bdf228b2c92e7dc7df800b0249bbcf39defccd9a1fff0873f64851ea00940160b61b31da858089bd1a91f571540d80f2a8ed247d565f4928bcecc3ee9d518421b486410040cfdddd641f26c03848414c5ea0f38e0804c5742016d9dcf8bcb68bb8c5d7519c5e3405fa72079c206beee561c79a2a37cb6014296181622312892ca507258b7e79e7b6e76d9e349b0eebaebe63a843e2f80b03707e1113c2a510477adaacb7edc6dcfe0424689c1cb00086f4b48dee8d7bf4e1fbbf3ce74e12b5e91bef396b7ccf002c6caf2c0c58ceb306194f5bdad33a137f546aef07c6003e8617112b36d4d0f635c6864be08d87e8cc5ba18c65882360018a58275c9457e186309dec1c712a398272085a5bb53e3d1f1810f7c2001f7c04edb6daa580801421640f3680fe0eac9355479ab6f7ce31b33580801426b1420a4c0d3ece194778aa87325660994f700b8a4e851168b87470184cd38ce7e7dcf037f2b2ea3cdc835a1ab0a209c10f97adf5c0584d75e7df1f4d2089d0e8cb65d37a63a2094e1eb673ffbd9f48c5f04bc7df7dd37d75ee21aa3082f3f7e5a62ee752baeb8620efeb659972ca3bd79752c57d493ca88b9ea9654662cfd8ef5daa90c0869f2f12b2b10618220c12a247e8540a158af2449e206b920c9a04bebcf0241c833070510f6e618fb1e0beb35d75c93819664109d1a451d7e425bfb451b2ece733cfd74faed5fff9ae67afae9f4de39e74cb7cc3aeb4c80d0fe658c7e470afb61008c3a8d22657e7803b4419fdeb339526e013daae3a1781a068d622c847dcfc73b940ac31a0b9ec1c77e9b27fcd34daeb0f7c866ccad11a06ebb4d254078d45147e538403ff65efb305048deb8e4924ba6bb8c0284f66e1e1b0108d19e82804c02f85154733d352f3ffad18fb2726fcd35d72c8030a5bccf0939a1c070fe756a142d0b2cb458a943d8f6022d6527daa770a7b2131641fdc018c401329501a1f89e4b2fbd34fbec3be8a46ebeeebaebd29d77de9996596699bcf13ad41ccc2c2cdc3268e794a2a0a17bc31bde9081a494fe3480dc10ea1600dfcb4e2a46c0a1ce6d8c8635b4c0ed73cbbf9fe010c72780adf774b0cb76c6357610bcd2eb5deb8050f6dc52762265bee11e84c7d4c9143f092c0318ac1a04c6a843283ed0b50ad3b348e16982847bcd35fe75507ef39bdfcc9fd3508b2723c8790e375c5680a38f3eba14a61f8561ad25ebdd5a42e3bae0111627d9ffec2de8ccead44682afe57ef39bb4fe35d7a4dfbcfce5e9cb1ffad04ca33696471e7924517eb110b2560ec27a33da7a37a650b2d96f09bef6dab6acfebdf69e8869b4cf5b63c6629d0d635f0cdee13a6fbeb8f79aaf618d05e8c0c7dcf8d165a18516eacac72c84f66dfb8f58efb6db540284471c7144e6737b0100c74a4851071c5e70c1053d01a139e0c9c1fa4a21cdbddfdc50029e77de7905103ec36cc0209a72afed5498de65143fdf3be888b4fdd61b66f96f892596689b559fb3fd170b61cb535f0ad3f726b04395a5c3a12a309fcfbd5840e0c7814538e3c2c16ae2c025a8d11a11b0b9e8109e094e0e386e4d679d7556baf1c61bb36b86efc56672cfe0d248d82e80b0f79cf4baa21320ec6421ecd5cf44bf9faa16420218a1431d2b7fe35d0203b04290136322b31dc1423c0abef63937268df242c662b1860e54eba69b25c05c790e0b9935607db1360e4b6875c01b8f84508030a1cb6febb9ad86ae80967d03b8a9d3ca985864b937efb0c30e39657c1b85a3dff5a94fa539fef8c7f47fbbee9aee7dfffb3b0242564cb1a2847a161c7b58dbde23bde88e6692658887072028e1282686d528cb08eaf6fae5965b2ed7dc1b56431bae84845bd67ee074588d02e99c73ce4962ebcd11e553b70ccf11e36d4fe8e656dacff7988a8090971125f141071d943ef1894f640f0e612a9154a69b8590429a8570adb5d6cad946edf10510cecc4dbcbb24f0c1b378b753b3be2ebdfa170510f6733176e9ab00c296895c00616f02f70284ac7b8459357c1c6e2c7b0437d63b42312d28e1443f36181a38da635601429de407ac84ac29c0e055575d552c84bda765d42b0a20ec4c9e26164235065953b982aa6905acb80f9f12cec4637251c2eb84a8b0005284448c31be0614581fa5402f80b03743774bcc12494ad4859401504c3245543d6b6eef278c7ec5f32fbc30cdb1da6ae9e9f9e64b8ffdfad7b2b574bc8175f0d0430fcdc227708a1ff0c7301bb04e81c1952ebc2e4239318c7111ae09e5c6c43b4436d661357c45f8a7b4010cc5ff0eab01a5e8e2ac74e67131efc6c7f83edc7fdb8a97add2612a0242bc25a65726731660b180bc35ac039f778b213ce38c33d297bffce55c1ac81cd8570a209c795570e5472b16d84e16c2f094fafa1e071697d1016c2a0510b64ce44e2ea39d0ad30f425b3f155d46b96d729343c7071e7860ba5583404c20917021e224d0d0264db36ef30e5727bfc502787f423870595c4627c6f8c56574fc8010d8089e8ed8093c8aa759c595e8889828162d4a8eb06cc5535d4fc8002265c4932ca5580847e7e96ef4094078c8218764fa734f178f8cb67d6d2bad94d29967a6f48d6fa4f4c52f76ed5a6dd5030f3c3027b99158880575d88090d2025d24c558679d75b2e5839579584d68003028332c80aa56dcb01adab0e402f07beeb9677ad7bbde35aca1e4b3cf1ca995c72b06a0e93b1f8ff3eda62220c4e794cface3f68748a484f7c8180108953da1a066b926a7c82eca0d1228c40ff6f312433833e3a017be103ad12986d0de4cf65be48d4b154038ce753796db0a201c0bb5c6716d1d1072e1e8040807e11234d500216d1ced38f7ad7e14362744d04471e7b0999718c27130f433b7744b2ad329d1449bbc3dd55c46f1313088af27ea92680eb8414abfcf13b315da0000200049444154e5ba5b2b2ea3ddf93c78d39e0cf00084043f6e887d15a4efb823a5d7bd8eaf6f4af7dc93d228600a2064a5e43aaaae1d175fd6e161362eb55540c87d6ed88010f0094028e1c7b01ada0420542666b20042894b00c261baf64e450b210fa28821c4e7dc3dc51fefb4d34e59992c3c05ef91ed6412151f4829c10389c50b10e4d521bce5339ff94cf660027cecd59477c03aaba13a85acb7c38ac5edb45e865187d0f9349a4184f2fe2f8fcf52b28c0e60832b80b065225701e1b48bcfcac2603dcb1d60c287dfe6d0a6ebc6540284dce1d043fca0e419131588087e397df13df7646b8a39a803959254a6f962286527c66721c4c791b6bf1f561f07b8122b941d0510f6e6df4eca099fb1c05601a1f82b9681d19afdb4b1b263abad52da7fff9436dc30a5430f1db5df02087bcf63a4f07f2e0342aeaaf578581642a043264c1642b195a32936f06f9b32c7b30110daafd516a42862f17bcf7bde9393c3502aab3fc92b49d92b1e1b9256018f409e92419439f6116ee0e23a6549b75fb3fa4b3843d90d504e96360c40d8ebddc9d00f3efa540184bd08d587ef0b20ec031147eb02330b7cbfec8a1bd3f1c71e9e85c17af2044004f0e1d6d8a9707dbf8638d500a14d350eacc682d728c40262e210ed74590184cd39ad0a086945f12feb4abd71e995adadad78a3a964218ca2d980a071f78ba7ed27a369588b8570a4603910412954a755b88c2a1acd9af2d5af7e35c78145698f4eabc25e1a3cdf13d83ffa684af3cf9fd2e38fa7f4cb5fa6d423e9480184bdf7a1e73a20b4e6c50df30ca8ee23fe977c8d954ab2b50f7ef0835dbd6bf0302b6fb8a8f7a6fac4ae982a2ea33c88249852d33832b052205b97323fcb69a0403d25d21e7bec913f07fa625fa7c096ec4bac3890687e24b8e3760a0c9209d19d05116067719c2c6d3202c252987e70dc5100610f00e1eb89086e16bfcc6c975e7e43fad1610764a13904c37834c143064156311b4bfdfb7eb1c35403846115ec677ce56873590061734eab0242890c1c7cf54c75682d7be45bdef2965c87a99ff318239d8a80d0d8fb498b5efbd3731d10a20f6dbe983cca8baa422e68e73382a03d40b1ee48d7df6945a0a7bd54d20e1afe9ec967f6de3ba5edb64b69996552baf0c29e8bac00c29e249a5ee4fbb96a212457007e92a45515128032fe91e046a66ec9a93ab924e261ca67962a31cd4061db6daa0042318092d2510e91cbc864e885b6643967ddbbdffdeebc8f00de803999cdde41016aef60f563990debab9ac9b22ab334866781b35109058aa5c9d2262320b4773ff0c893c5423800262980b007916d04bd04aea616c2b37e7662067df5e059c027924944d0721b733f5501611bb42816c28951b50a081d72b4a6405fbd394cd5e5ea6b3c56e5215315104e8cfa63bbbb00c25972d202a56824e86125acb788c7c44ff818df8ee64ae73a35b1565d75d59c79b06b7beaa994165a28a5bbef4ee99453525a6db59e935700614f1265e15c916f9961c56f3dd762088116194d6568acf22990623f461f7c09d474e3e3c8be2d4990ecc66db7a90208c967ac7f807664350f259e2460e889b6f60c6025ea4adb1380c24e7181e6836b69b8f8ba97dc670e261a4bdecf791b3420c4af68e8b9dd0c21e8fbd4f35f5c92caf473a2bbf4550061cb44aeba8c5e7de585394d7ca7a432369f9eae47131c6b0184a313b058089b335815103ae8684cb986d69b43d2c13711a5ca68a32a80b0f79c15403852ec9d869e361f20acf363f0b33d980b178b49b7fd382c84124688351c55d971da69232070c10553baebaeaea526aab35800616f9e0e40a83c87842ec30684ea86ca322aa98cbdb0ed0698887955bfad1a5f4f78fec31ffe905d49b92efae9c4c77898d2834ba40427ae6bbb4d1540d8361d2673ff830684f878dab469d995961cd1a901e89b6eb563ae4328898f5263a5b543810208dba1ebf45eab4965aebf765ace5e47fb546de13ed696ab683cab00c20208fbc5eef52ca3b2e7724faab7c820d64f17c9ea330a20ec3da3cf754088424020e183d0d12986d0f762bd09c9db6cb34d7673ee96d93800e1e28b2f9e5dc346cd12b8ecb2295d74514a7bee39e236daa04d5640c822a7c69dcc8bb257728f1b5603088d45b647d934b7dc72cb610d25f3963a84accfac76dc30db6e801f050737e82ae0c3e3e2d5b83f7305054e3bf17158a8e42d502ea15702a57ebc4f0184fda062bb7d0c1a105a33fbeebb6f3af7dc734b61fa76a7b651ef0510362253e78b9ab89332870b269654e6ba6b2ec981c69d2c84131846e35b0b202c80b031b3f4b8b00e08091faf7ded6bfbd57de37e0a20ec4daa02084768d42d2b6864193df8e083b3ebbeb8b42659467b52fed65b535a6cb194642bfde31f539a7bee9eb7b860320242ae5d34f9575c71450619b22ab6e506de84480091b128c00e80499e32ac86362c95ac72c0e930f6c178f7c832aab4811a7ae25c0701f69ad0be00c226541aee358306843c36ecb7975e7a69f6e2e8e449647d1d7fea79c5423800d6288070024466d1eb95b299465aaae100840a1ed72d841318c2986e0d402810fdb7bffd6d8efb92e94a9c415b169c2603b409384c2fbffcf2ecd2a58e9358cb89969a68f2ecea35e1322a6537ad2bf75eda536dd0f441139a67c1e802d7256c91358ec03ae8b174a2a331485c4028c3e300e1ebd4591b70ab02425922c52b120efd6ecb4d75b457c437e2d5d4b2b2c6165d74d14c1b9f0f6bdeec53b7dc724b4e40c1222015ba2c77c3188f3921cc1b0f3721891508f4e6ab9e7d7950ac645f6471ea7b1d4225260e3b2ca52db648e980031abfce64048478c53a472700c37ed4ebec6bfcc2e3b830927c188fb10c139c1a8bb83dfc2bb66c983161cecf7a61fa5287b03383b1aeb2e8b2a84a1603c80fe3cc1807fbb776cba001a1f54bc6a12ca897630b251e79f9bfdfbb7c89216c6dd6ffdd710184132072134088e1a5300608b98cd23c0f1b102aae7afbedb74f7a40d866829d4ed31e80907615180d40382cc1792a0042201e8f4f464048601df4dc792640184a97c5165b2cd3661863c1e3041c82ea64038437df7c7376799b0c80302c845540c893a357f65020bf2b287ae8a194d417fbc73f52bafdf6943ac4d7763b7a9a0242bc1d093022519977898417119303c08572cd99154930aa0933ec35d6710865915003d8728fbe3cc3dff19dfdb2da6fdc5f5d7311438c9671ad7e78cee8a79ebcc7bdc6a0af7827e74024ea304ee7279e3696f0d2310fdec77575a13eee31deaafba43e08c0910c244a93d4cbb8f8de7d0182638cee35b6e833dedbf8828eeef59e9eeddab641740184cd05ba020867a6d5a00161aca5d19481d6d2c37f9bb564196dcedae3beb200c271936ec46ad44ba3e4700008959db8e4a2333b16a69fc010c674abc3c8c1fe8b5ffc225b77a44766c188b4ca63eaac8f17a3217701855b654f938a59ba6702c420057a07f65d77dd95aebffefa7c704b29af6ee420c71064f57c828c44050444028582b8c3b6e606c8203cdd7befbd8960ef10e142c6fa1416bb3eb2c7a85dc5f38c450c18cbd77bdffbdee969d4073d77843fd602bc6c8db19abee31def180a208cbdc95c298c6caec4bce1eb4ee56f063167c644d007065950c5a1491260de866121341e3f78f8b8e38ecbebebeb5fff7a768b042e3af14fc410b26a025f1d85fcaf7f3da55d764969f9e5533afbec3191b629204447e9f1b9728ac5d1801659238df1a4934eca6044016cfba9cfd4f4926dd5b9c432ab3ea8cf69e9cf3befbc3c2ff61d99565992fd006fd696642578c93b3b37a2a8b667889577bfbe23163ece47cf163befbcf11dd082d6d2ed7fe4231fc9348fe6599417175d74518e8f435b6b482910651414fde626caa210cd738cc1583da70afa7ce71e2e69ce15f525a3299713de17e2412972588bb85dd6dfc19e825ef8d5192a46cfbbb22af1688977b0f6599bac3774c443ce108a215e2f4a16b4d90a206c4edd0208870f089bcc56293bd1844afdb9a600c209d0b12920e4323aedb2ebd351471c9c05d5b693c78cf64a842e079f438d9b0d81a0edeca6bd481c6e64dc4609660e5d076c2fb0ddabdfb17e1f2eb56a957936217598f117f88ba0255180399a6fbef906ee46db8d86c646a83467f899703c4cd724fc4c28260c1266eb3511c7ca0b13b99e208887cc1d0190152c80c744fa1dcfbd0168f090b9c2cf832a44dd6dbcf8c57880138a0eeb6cb422f0e379efb1de635f04ae288500f8d1d61a9a52566db0c106594933d31ef1af7f8d6415bdf7de94ce3c33a5155618d3709a02427c06ec9c7aeaa91940d1a403d79ffffce713b0f3c52f7e31cff976db6d97565c71c5cc8bc0ceb1c71e9b15701b6eb861062b575e796506680464e781b97046d87314d806c4bef9cd6f667ec6cb9e8b06c0d5c73ef6b10cd8f0fbd7bef6b5c4dd1ef089bddb9eea7ed7f9dc9e0138ea0fb014b70930ba8ee007ec9d76da691934e20bcf3266804c26cf1b6eb821bb44bab69a19d35865cc94eca6baf6f11a9077e08107a6d5575f3d7dfad39f9e3e17b7dd765b3af2c823335d565e79e5bc7fb8ce5ee2d9f10e7ea39ffebdbff148682337007a4b4204ec6a40b3a2e561fdb61f99177c05b02a44aec4435b675b0184cd975a0184530310560bd32bf5230bf4a889bc9ab340b9b24681020827c0124d002180c34208102a4ceff0191620740879b6c334624108336d1d4e4d491b6e6d16bec3138dba65f86bdae778ae8bb8bd6aad2102eba0ad4cc61e962ffc832e51ab7258ae87557ac6d80877c64698aeba8f8d87f613bdc7188c27dcbb86a9e4b0c608b22c38e60d6d86b9c6c2b5d0da0af7b5b65dd7469b4fe309fa1807fa0c733cc66a4cf645e3008aec3fdde6ccb5c60c00b170cd5487f09863525a7bed113751eea2b3cc3226f66e0a08f13c8f0ad6af638e3926afc54824c282b5d5565b656bb55a89b260b252012c5c6301becf7dee73991fbefffdefe7784e8296ecaaac5a2ceebc13165c70c15c4ec6bbfacd726a4f621db34f02381297e86fdb6db7cd0055398e700f45430a1ac0c96fd729cdc08a06b41e72c821d9a51a8823a01f75d451d942b8d4524be5f1e213633327401be07bc41147e48cc6ee8b66de00ce25975c720661d15a74feb2fab29c1a5b34343ae0800372dfe84621b0fffefb67eba7d8fad843bc4358f88cd378d00c90064abffce52f6770ec3aef800ed6bef0107d03cbc0a7dfe602cf5401e79898a3c7c5c02ac00c987ffce31fcf407c98f195d5e196a432fd9ce976fa1ab4cb6893b7a80342d6fc41e7976832ce67c33505104e6016c70a08afbcfcfc7c700cc3352a5ed3b3b98c3ab868761dacc30c820f618c304f10a0e1a4a1e7da366821d1814e80a25166ede21245233c0c40882ee68a60462b0e2473591a0650eeb444083c044682216b033a45ecd20496d4b86fa5e020ece26582e7b0e8144a059699aa857058401eeffac1d7750be1b0f8da7381097c639e08c77e0f6b3ca190baf3ce3b339800067a59085db7fefaeb77b610bef39d295d7d754afbef9f5205803465eea6803080356b5464b964ad02a6247b529b8f5ba6b1b2ae494a850758e5d07ffbedb7cf67c141071d94411070c70592b0051cdb8b291158ccbef39def640b19f00728b1f29d7efae91980b14812dab6de7aeb7cadfeaa678abfed0dee4363d7a32f57d7f5d65b2fadbbeeba9907ec73c0aaf9f039cba277340ee783b19d78e289f9c7bb287f11cd3d949b9e5305f200a1e2ed00ad3eeb801000e43ead2f2ecc321eb2247ad77887e81bb0b2cf1837008e4600ae3e815560d1fb01e280340b320bac7dc09c72e1455bd73b5b9a5a39c25304f81f2d43b971ba86c5589e80b06a36f596a008b08fb705200b206cba030cefbac90808ad9f071f7d6a7a0c21d7ef612a5887373bed3fb900c29669ec4075708a217ce26f0fa58d37de78a88090202f1ba3c429b23172091aa6ab5f0042020a371c00038d086583d602d964808add76db2d0b2c34cab4cec31254f10e818d90c2cd68b3cd36cbeeb4c31a4f75a910d068c8d52643339605207e582d2c25843b0231cdfc305ab81d8b21220089abc4cbe68d0018075924c430c6aa3b69cc6d27654880bb6ef31f65157c1fc9431ca6845882aa31e16bc2ffb0c0bb77b50711bec55852745863c38a690cfa5b6be2e408c32c3c04f6d1940a619162219a619fbae9a694def6b69112134a4d283931c6d6141046b76809e459035ff8c21732906221620104e0c4b3b2700185c001ab9cfdd67b721f3dfffcf33378016acc43789258e3009e3d798f3df6c87d29020f38b0f001a1dc3d77df7df70c7af4e7379015600a9d0035674c948af8d297be94c12360e73afbad6cce400ccb9b316ebae9a6d962e96ffc4250f5f7e1871f9ecf2f808d552fce8ff0a0a8bbef8685f0ab5ffd6a06bc559751eb81cb2805d2da6baf9d79d23bb1e07de8431fca638bf844ebd7f359354f3ef9e4bcf75947924751f21a2f576c8a56ef46d1aa3622abaaf1b30e3adfc80280295ae2b52682ad7700fab9d39ae3e0d94e6c85fe80356b27c19935a597c2d73b9a2774904cc998db680510b641d5fef6394840189e2bbdde80e2a52495e945a5fe7c5f00617fe8d8b5170bcc2120cbe8bc2f9b23edb2cb2e4315e81dcae2246811c55b101286253c07d11c780eba7df6d9270b32040485ce8761e52138038234bb3becb04316e687d50864ca177077a21de79ae4d09e0ccd267dce39e7e45820349391952011eea4831a633c8fb04150a3e1965822ca4e0c1a3cb38210b609b7044c608780c9650e088b0cc3d50c8f61e9f13b781e7d0300ea139824f48e2640b2285bdfae730f6b10173e6e6440863101a8120045d98941d3272ca8bc01b8d111a209d4e66d589e138461f372d8618765806a7f2418f78a1f3627e83cc39c7015e532fad9cfa6b4d75ee35a06e301848014d0c1fa86e7eca32c84f6d2ebaebb2e836ffb3d80e03df1e8e69b6f9ef75c6bc75e27c6ad6eb532279487d63977476e88f80b78768650beb04ab2f686cba87e03240351f62e638ac43d4028502ab65eece29e7bee997940e66b9f4bec05f0f90ce00652014a7d528e5142f16ea9ba8c9a37630150eb1642b17ece5d00c9de10211b145940169a008a9eaf4836f01c2ea3d6073ee02a6b2c001f974c1677564a74f0eefa3726630708fd0d10464dc2a0a33207780b806c5a1a07a0e4b562de7865746bdedbfabffffefbf3f8ac2debaa49c91bd700b19b6cb249e683365a01846d50b5bf7d0e0a105a57944dacffdcc247e369d7cdb3c0eb4a96d1fe4e75c7de0a206c99c8d5b213f3cd3b67da79e79d5b7ee2e8dd5b7c34b8a79c724a3edc270b2074885501a1437358809070108090fbeab05a0042da6d020640584da430ac71792ec0c24a1080907046a0e8d4da041d01080977d53a842c618306a7debd5a87908049b8645559659555b28541a64ff460c52110ba9ebb9d8416d626ab83ef2fb8e082fcbf77701f00e79dfc66a1a95b10099c8455823f6b326badc396c02b83244b73b50e21613100e720f9c8b809ade810750809a09301100223c007b745f562c7ec3a27898c64324f3e9912c1dddfe368fd028480c9f7bef7bd0c58b838b27af208b1f773756415e40aaa493c0330d5bd32f0157029510a9775d93ead7de56600d070afa47c00087d2e762e5ca401355938d19360b7f7de7b6737f8fdf6db2fcf3f00b2e38e3ba6d5565b2d5bd2804c00ceba6035c4cbd604858af5227e904baa71aaa31bcdbe682c4064756d007f401ba00c54b23a06204403eb8ef291d5ce7afdd6b7be95d7972431f10e78c2f7f6377c6b0c5c42591ccf3df7dc3c662ea9de537f9d00a1675a8300babddc35ce982661114d01215ad8335831cd7900c226cf700d7a164038b678df712cef497dcba000a1f560bd3196e0d5d1002139688b6d772e85e907c0390510b64c642e1c0eb8cbafbc29bd7c9e17664de2301b610c2074884d36404858109fe1d02c803065ab05d724c2c664058434de8048b50e619b00b0be76aa80900b1aa191d0da54fbdeefb5188010f872e01166c54849ee602fe07a670d7277933991908a7e044b823677690220450d6b0deb841f4090b5811584b5a59e8597859dd0efb92c39dcc1295924e1e06e4618652124600fbb303da1b55e87709880100f596bdc0509ffdc2ff1d09801a1bd5db98955574de9b4d3c6cd5afd028462d928d958eefdc65fdc42d11e80037200427cc69ad8295903c1cd9e2c63294f123c48f9620ed188d591f281155a1fdc53293f22210bab383047b14659612fa30cd9628b2df23a0004590359d358af791b884ff4ccb01e187fac175e00ac845c38b9a96be6cf7a67fdf3592740087446c99598186b86951ad0a50464d1ffee77bf9bbd30ecb7f10ed61af04721639d1262590c5908595fed812cacaeb1e6ba01428a19eeb580a06b80ca26c9afcc011750cf326fa3e52ea05ce255c23380959312a089cb281a7a3f7b8371b5d18a85b00daaf6b7cf410142679cb3895bbb75de4d6608f7f51b7e7167da619b8da65bfafbfbd6a5b7a04001842df3420184bd09ecc0739016403823ada60a2024c41190a2d659f52d083cb4f94db4d4bd3965e62ba60220e4820c103af8a4fa2788b21a12820987c09ad8286e5e0023af02b454d200a024c81308fde69a2b9909e13ddcfb08e72c8a3bedb4530697845fcfd49f4357ac540184ddb9ab2f80f08927460ad12b487fc105292dbbec78d839dfd34f4008e0b05c1d7ffcf1d952866ff00b6b1d0b217e6305642104dcea16c2008462130971ac67047b563516411637f7f88ceba8eb2926ea20841500d00340f1350512fe154f08ccf17ee0ca1c6e8ffac3b3e21b0130df19038587b21480a8f1f76a91540668733d57cd68fa9765941533b28c7247050eb979d73d545836598f594ced779433c0313753d70379406e3740c84d9ab29342c73512fef47b5f04ccc54572f395280748ede5fadc8b86fdfabe00c27e51b2bd7e06090865477666e1d95e8070da553f2f80b0bd699fde7301842d13b900c2de042e80b0338da60220e4322a7d3bcb4a3d9b1d6187d699d0c802a4f5db7a38d50021c15bfc16ab07a1907502a0e686466826b812d60141ee7e21988a1d127b4518e592c79218497c5836241c22d853ac009d8441cf2980b0f7fed3174078d861296db8614a8b2e9ad22f7fd9fba1a35cd14f4008f0016f515281500e005997ac74e2f7f00fb0c562dd2d86902b256b9ebe8e3efae874fdf5d767500648b10252760084c0a6b8c03a20049cc4deb1c2564b8de0578045290a16b7d8439c097ef0347755eee97eb3320284142cf8bc578ba4322c9394249430d1ec5bbc65aa65272866249801a4aafb997d0b0dad4f5642ef17b533d194650d2dbd4bb71842f7d92f5950b9669a872649657abd63f57bc235506b9f5873cd35f31c0d3b695c8caf00c2b1cce470ae1d1420b49e282c9d7dbd620829421779e352e9735b6d90d421a4b82aad1d0a1440d80e5da7f75a05840bfce7dc597b3fcc565c4647a7be0d6a32c5104e0597519a6fc2513de9096127dcb42219ce731910128ab98cb1fe89bfe246c735d4dfb4fa9d00610874d62da04060251473cf63a5700fd740c2a5fe58826448d46fb110ceb8d6230b6b7d07c0a704218959c6ed32bad86229dd7a6b4a871c92d2c61b4f688b1f0f20e4e6ca9d90eb626419c517002105022503cb1db0c6d28547282784330069dc4701a16a7d3c0aa9c85ac9d2082401802c6bee21a8b1ba711d05ecba5908ad79f7b0a4e90f50e1f2693ef0322005e0f96135b3975481a9678b0f166e610d2923214b67530ba13a844d0161370b21fe00b2b8abdad3bc33200cb08615935baeb8479653f178c0a7b50e9402433c60640015cf28a6b28d18f95298bef9d22b85e967a6d5a000a12747bdde5e328131fde5f1594a5299e6ac3dee2b0b201c37e99adde800e4aa23cbe8ace96f33b8ac440f0469025da4a66fd6f3f8ae2a80b000c2f171ce8c771106f1358d370b035734c264bdd1984b6ec0d5ac8d36952c84124eb0728875e2364a88a67c402340ae0e08099884e7d0f04b1641304677164075c608b03210123eed23846bc22697d40208ffcd715186a35326d300842c5fac45638e21bcf8e29496592625fc7fcf3d29cd3efb8458bd2920244845fd56004d92147c4051a00ea17a772c6ff8c1b5d75e7b6d0665f885a28155108894b48a9bb2cfb872e237d9328117a00548c35740187ea5d1e7c6296697cb33e0896e2c63c600c005a003fafc4820a3ec028b38de04bc353ccf52e97e6ea1fa8eccb3ce44162f5639e796f18a7fb456582a01d4689e61ffa178aac7100290d61dd06bacd128b224b731160a14fb988435c032c01756cec8f22b2baaa439627459f9bc23be5296031866b114fbce0d2efa64890506b9c7b9d75cb00eb65567b700c2e64baf00c2e102c2a63345d678e09127332064212c85e99b526eecd7154038769a8de90e8090bb8b3a840ad3772a63e0e0931dcd21279ea2cd5600610184fde0af00845cc9b8331284088e5a55e347389b29357f3f06f04c1f530d10b21012ac8137653bac793145401e00577519ad03c288c3025cc4124af0c18d544c16e02891044b086196d04d3827fc4b9cf15c8e21c4232c640440d6d83a288c52185c08b9368f1910aebe7a4aa79e9a12ef8f6f7e73c2dcdd14108ae9f34ec0991fa08e3590850ab86145c64f78cc1a044cb86db212ba4e617a678f442dc08eb52abb26e50d8585b30bb8946025dc9729227c2f6112de033225855969a595721ca08426404f244bc1e7c01ea0873f014afc19d6319f03a400a38cbc002ac587e447c6661cde4576541644d638e517dccf121acdf38059e300e4c21533b28cdaa7ac896a0c213ab30a7b8ef583960034408c0ef10e809f35ea7ae345036b2ef61e63dc68a38df278ac6deb96a7897b2426c27b92bd489ae33964805e895ec6cb44051036a75c01845303105a3b0f3df6f47440689f686bfd34e79e67e7950510b63caf554078f69927655792487b1d8f66197468cb001742755bc32a80b000c27ef056151072fb62f5622de8e5fed18f6757fb986a80505209d97d09d9046ad641961119047b014234972c825590b049780662b8fa71552370733d6585f119d73b49389eeb5946011df1942c5e94175c90ea3c644fb657b3300184f8b95196d1bbef4e69a18546babbebae71979aa88ea72920044ec4b549d6820fbc83f20be249bd0b3ec107e2510133fc831fc4957265149feaecb17eb943b2beb946038200188a07ae91ac6c9496fe07c6804ff4a47060d16331e39ac932598d59f35cdf47bc1cc086f7c38a67cc1423fa3226e089f242ff51f6016fb386035cc6cfcd9575bd2a147a8e33d438ea8090054f566d6367fd8be6bdc5f5459d4140f4a4934eca4a836a721d7fcb5e4a30a523cb533e0000200049444154b0053c8d359a796059b4171983044fdec17d9129d8b98e7ee29fea1982fbb927560121f009448f164368ccfd8e63ecf63e2586b09f33dd4e5f8374196dfa0675402827413dd6b9695fe5bad129500061cb1c527519bdf3b7bfc8075b55431d856f1d764ce1e14ad3d6b00a202c80b01fbc550061672a762a3b115946b98c062064a1911c83204f49445872187ffdeb5f9f9e54a693859000cb42e8500406c48311f809e9e2ab08ccfa0304ec29fa07309eeb1642d65556a82899d0091012a609fc63b2107eee732305e8d75823a5e38fefc7d26a9c651498a244006cfc0e20e71c893a5fc0140b1da1dfb9c36aec3d290b003e7c03d0b07201cb7ebb0e80e3d608203ba33c83f5940b64143a8f67bbde73f0223eae36a0ce333c0f50f3cc3ad0e616eade008dfea7ec30aea809c862e86fa0cd58ec3f754f040a2940ad5acac135fa728fb147222663d487f1026ee6ddfa63d9abf78d76402d9a02c76852cfdc4919c37d17f0f32e40a5ebf5ed5ac01bfdda0483de2992cad827805300b89eeccb75dec9bba089df836805100e82ca137bc66404845597515989d54b1d94126362d49c7a771740d8f29c5593cacc31fb5339c6a36e21748039241d16f5b4dffd1e5e01840510f683a70a209c182094b151a646960b5611c2aff55f0584dcf422a90cc196b0c78241d80bc512013e5c72c57db1fe70a9e11e47385617eeb90e08cd947d8f906e3fae2ae4c24212a53bc4a13506848f3f9ed2fcf3a7f4e8a3295d76594aef794f3f96566340e861ce12aea3d533252c67de8926bd1e5317ef5f4f028546408def8138002cea8079063eab832d9ffbf11c3ceaef4ec29acf8ca3fe4cefe0797e22ded0b809a63ed3af71c4737de6199d3c11f4dde9fc8c7ba2044e4c528cd7ff0172bbf51dd6caa041fd1ddde7399eef77cc87eb7cd6a4de603f98c71ec12d589c2580cdadbc134dbc0f4512c05875bdedc718baf55100619bd4ed4fdf830684d6096f00cfede65de4bb7fce3257492ad39f291eb59702085b26721510ce3fdf8b7281df61b602080b20ec07ff154038314008e80128e2b9b8fc59970434497ad036ca4e489c4159e45064ed9398c37d1253b0b604c0217872f90366940f00087d2691c573dd65d44c1136fcd4957101080121195cc79465f480035252c660c92553baf1c67e2cabdc475397d1be3db074f4aca10040a8840d5e664db5777402e800aafa949b6fbe79de2f06d10a201c049527f68c410342679d738d32d319d88957298896fdf0474bd989894d6da3bb0b206c44a6f15f54ea10f6a65da943d8994693bd0ea14428923570c7922882cb56a716c2786f4e18fb15532986109db8bc48dd2fbe87e61e18541c9bfba7c43cdffef6b73320142328d986da6caee3ea28ce4baca198c375d75d372db8e08233104cfc966c8ab4fe25a9ccccbcd42d5e2aea101e72c821cd01e1d34fa7f4bad7a574c71d29fdf8c729adb3ced899b7cb1d0510f68d94cfb98e0210722bc7d75c583b59080142aec592e0bced6d6f1b089d0a201c089927f490410342fc4a79e16c132bd80910b2be1f77cab9a530fd8466b6d9cd051036a3d3b8af2a80b037e90a209c9a8050f65c590cc51ed1324b68516f91b2bd2d97a9a90408c510ca322aa98c640f628b7ef5ab5fa51ffce0071918a261580825b10006975c72c96cd592110fa014ab25cba14c85f53a66ac815c4e25442975087bef3b7145949d300f8d2d84679d95d28a2b8e949ab8f7de949efffce60fec716501847d23e573aea37019b537cb844ac9d4a9e40f9ec7eb944a6de72d8849288070f2b3e3a0012145e7fefbef9f9353451c749d4acebff32eb9ae00c201b04f01842d13b90a08e79b77ceb4f3ce3bb7fcc4d1bb2f2ea3a3d3a714a66fc69eac5801087ffdeb5f67a0524f4e50153ada4a5c309500a1841e5c3a59f08036829a435096456503c4fea993c632cca5549c8f841051a7d4f71245008be859d7a67219558f4e965160527ca19842a0f3b99c54a61747878510ed1a03c20f7f38a573ce4969b7dd52da7df75e8f18d3f705108e895ce5e20a0522a98c6cc4f6109964eb0970e2f288a96c4b59579f980208273fab0e1a10cafe3c6ddab49cf04b2c61bdd99bc9ac9b6eb56371191d00fb1440d83291eb1642c575ebc1b311704f006c3b7b5201840510f683e5ab80500c8058957a2a68fccc6a282b98cc7c5abfcb52740384b2e7c577fd78dfa67d74cb322a890c70271ba14c87e8e25a092808716228803caea234a204ba08b49724045041433fdde2821caec0b98c89fa0f37d37a1d42b14392a7d4e3e99abee344ae332762428057b18d322f02b07e772a1a3f916735b937dc4809238d012137d1d7be76c42aa8ecc433bcdde4794dae192f20349fe19e1d674afd3c714d5c17495caad7449c65dc1fe3adf61b6bb8db5a8efeaadf477f55f7f16ab29bd81b7c5fbdbfeee65b1d47acef4e7c1cf7d5dfbf531c69754ee2be6e6eeef57e839efaa89edfbdd6565b677d949de082c71301286c543ea509634ef09a02082748c001dc3e6840c81d94a2949cdc6dcde46cc32f7e45492a3380f92f80b0652257cb4efce3ef7f4e1b6eb861ce92566d0469421c61afee06d6efe115405800613f782a92ca707104383a59083d47ca7b29e3db724b0aa1903be609279c90d7d1073ff8c19c4ebd6de54a273a12f41c700a742ba82d39cceaabaf9ee374003e875e5d18ac0aa9d56c87d1bfeb9b6af181aa786fc9670044801368579242229a0084fd06e74df82a34be0021ad3020f8ce77be33cfdb3000a1318785b0710ce1165ba474d041297dea53291d796493d71ed335e3018468e7ac6115b6c7b30a510a54cf93283ba1869f33482904748f6bf0833efcb8bfba66098ab2e13aab086800345eee04a05c4389c1d21d429e67c87a19a53258bd2925825763fc6115f70e9e09cc54dfc1e7628df4ef3be36065af02387f1b83f5e63de219516b52099298f7eac454ef8bf7ad835acfd52fe58e312b6961bdebdb5ee79d7cee199124a34e23ffa385f1d741f19818a5c3c5931d10eebbefbed95b61a38d36ca9e12ddac9713a54393fb29e1843c7057e4a5e10c1bc699d164ac83ba06df5326709f576a65c71d779ca1e6e6a0c6517d8e75f4c707ff5e00e100885f0061cb44ae02c269179f956382ea80d0c14b489398232c296d0dab00c20208fbc15b5540e86015af528f21244c0d2a8690f6f9e4934fce00833ba6dfc338dca308fa35d75c936b9a49e92e8e87108916be0f0b4dcc43dd7a1274ab5a4a42e01d0dc455fbf10c823ba1dc9a0708afbdf6da0c0825a501068605088deb965b6ec98a0402b4f10ccb42580584871d765816ea472d3ba1c4845859252764169561b4cf6d2c80d01c5a8b6889e7ac45730f10bdfef5afcf71a914328013411c0f509eb80628596aa9a5f2d913f4e7be2516d5bdcb2fbf7c9e1f8d655b0913316700e5682e5e0449c2358508ab35f0a7bf77bffbdd79ac0ad81bf7faebaf3fbd7fd7498a0420708d1697ec9d280b14b28f269696c06a1cbec3d7cab0842224942bce51cf933825ca7078b6f70700ea56c8e003f7a119376b7d57f7106b172d15b8a77042cf2bafbc3267f3f47c6b1c2f3bcfddcb421f80af6af9440fc5eddff18e77f4dd7a572d4c2f433165d43041577569504c1d78e081398bee7aebad97e59d4ef18d7d5e4e5dbb1393bdc71e7b646f0c2efb0b2db4d050ce8c41bd6f93e7382b2ebbecb29ce8c5daffdce73e97cf8c61368aa8c7ff357b018403988402085b26324028d6ead2cb6f48279d70c40c8571e3d1161e6d19f70e074e9bad00c20208fbc15f554048f07beb5bdf9a358af516025a5be0232c8434f5ac72845c2eaa51e4baade776a32101106d08d00420822b2ba136680b18da846591206d4c2c420ad7871bd9a0e9634ce8603c04664234b060be064d9f984373665f3cfffcf3b310342a20fcee7753da618794defdee942ebfbc1f4b69a63ec60208013de043dd398030dc8b012cdf6dbae9a6d962ce527ccc31c7642087d600236b22c5c03aebac939528ac5edff9ce77d23efbec9381cd4e3bed9495191ad0a5be1d30c4420708b182b18e016ffa7ccd6b5e93056a3c2fe911e076c30d37e467acb2ca2a39911225c9b6db6e9b81a2f1e8cf987daeee26fe5c75d555f35a3ef3cc33d3673ef3993cfe6800ab4cbcfff55fff95bff3de321d534601f3b1ce0052cfab2655614924f81376cdb9ff81633ce87eefaf76a7cc9b4a37000ad66eec31801cb00a64f9eca8a38ecae006008cc468f64120db9c00b43e07d2d009e03046b45f7bedb5d3ca2baf9cefeda7e22a92ca00ddc64251d7b6d751d34560cecf38e38ccc2fc020af8900eb4dfbe8d775688efff10f60bfebaebb764c8ad6afe74d957e182bf0b42467eae25a0b941f833e27825ee6c93ef69e65562e31840360a202085b2672d542f8f09fefc91902ebcd862d3d3430d8559bb7e69a2302c83fff99d21bdf98d2c107a7b4d862631e7d018405108e99693adc1031845c46b9ffd1f4764a6f3ea883c441664c0050b590753fde75ac7d100259e658c2083cc3d482c7d8a3e8b83922f8f6db556d2c34c213c6e3c77c194fb8ca8ea59f7e5d1b023f80c0420410024833c55e3df5544a0b2d34123778ecb1297dfce3fd1ac20cfd340584917d568901e04b2c269001dc0021279d745206ffc019776ae00cb8faf0873f9c791268113709cc4966c49ab6f7de7be7f7d70705250b81f38952931b9924250479421afe06425956253ad287a66fc09a8b32600528ca7aeb372be00e3bec904125c0b6cb2ebb64eb2440b8d75e7b65400870b90ea8d9669b6db2b2341a90c6cd0f60f5ddb1c71e9b8e3cf2c86c6de47d139674e7a832389454a114315e800920d16ebcf1c67c3f2b7ed0cd7dde57bd608077b7dd769bbeafe113e0d1da39f5d45373c2a615575c318fcf67e8eb3d803020d87e84a75ccb32698c806c8066bc568fbb9e284345d9891ffde847d99d35c63bd17efb717fb8d85af78070b758e87e3cab491fce0ca0102fe3956181d32af8f1f7a0cecc4e34f26cf400dead1beb078f0e734cf6b9f3a75d5fb28c3661ea095e5300e10409d8ebf66a529997bd64f67cc0d69b03c2a223ac7514d4b6de3aa5fdf69bf1b6f7bc27a5cb2eebf5f899be2f80707492952ca3cd588a1b87b88b008484a86109f561757290450c523fb5eecd2832e3550021818390316c41c3c88cc59822be6bd8f4219cfb315f786798e38967dbab69c3bffffdefa765975d76664078f2c9297df4a3234964eeb9471691f1b046cf7b9a0242fcce6246f86779da60830da6bb48dae7b9329a77ae9e80194becc61b6f9cdd39c392cdeac75207ac007bc020974a800650673961150b4008c45563bf5cabd409f74dbfb5485603047111044ad5c504fc00baaf7ded6b1954027d9e0f8872df0346eb8070ebadb79e0910da730042df1d77dc711970b16602c4d1aa1934abeea14009be23e0728d659534964f7ffad359216bec5c62591f015bbc10a02dfa513354aa7c42f3673ffbd96c11d4805c20d25ca01d411628fbe10f7f982eb8e0820c32c3e2eaacf7d36fbe0f40e899ac9fc6deef67f464e02e17a0871835bfed896dbcff58c6168a3b6b84356c984a3263b1663573d634667c2cefdbe45aeb023d22fe75d8ca4363469b5b7ef5fb02089b4ce004af2980708204ec757bbdec8483ab531b75d37efdeb53bafdf6942eba68e4d665964969de7953bafffe5e8f2f80708c142a80b019c11c1884d1ef7ef7bb5980126f44e01b8626d1da3106da7ec2988c9e0ef861346371a01294b92289cff2330cbac4fb7b36f7b5b3ce3a2b0bdfc6332cfa1853b825b1a8b044b1a8b0180c8b46b1f74a2a43280402009c9980fcd24ba7346d5a4adffc664a3beed81a7b350584e1f206acadb4d24a39ab64b84d8620659d023d80d89a6bae993d5408791a7ab3f0017dac88402170287e8eab24cb3fd7becd36db2c2b7f5808590d59c522410c37dbaf7ce52b395e8fbb6995e75808014240945b2aaba17501d04956e1b98098ef28983a5908eb809025948510f86391040859423ffff9cfe7390b1e327751b2a5d3441132ed5f402840e8ddb9746aacab9b6fbe7916ca0f3ae8a0e9169250dc72774653e00bc8f35c7c13eef1d5585e73849fd0e94b5ffa52b63cb7d9c265f494534ec9eeafdc46d162586b2bde154d006634475ff327a3f2b0ac4fc6c38dd7bcdc7efbed5951d229e4a1cdb9aad2069f70d3b437da9fc3fd7a10cfaf8e83c2043db86cb3e0528c59b7c3e21ff34491f9a90db64adb6fbd61f628c0d3a5b543810208dba1ebf45efb52987ef1c553fabfff9b11108a97f8f39fc73cfa62211c9d640510366329078738220295bfb96f114086d508695cd19474e0e615c93086311e873a41d2012f5668adb5d61ac630a63f33845f0237e00e38107e86653970c003062c3bdcf5800296b96137892eb8f911e0818419b4f437df3c92400698621d7ce94b5b1b6e5340c802241e0eb00668d49eacbb20daef953a12e7bbc9269b64e0589d77c99858b9b816024162bcec81e2f858f064aa65d1a3dce80608bffce52f67402841471d101e70c001d942580584001d5755d648c2e757bffad56c919481125f565d469b0042f711a225bf08c1f5cd6f7e734e0e633fe8646db126804bfb170b1feb6a24cf00aab6dc72cb5c16857229e80560724b152349b9e247bcb26703bd2caf112318809ba06f2f6021048001ec365bd4210474f0839fc9e0b2ee9d59ac59b329a7ec89e2474339d1264dbaf52d8699c2029f733be6363aac3d911bf37efbed972da8dcab29683a8560b44d27fb052511c59035491984df87d99c172f7cc92b4b0ce10026a100c29689dc1740b8dd7629edbdf7cc23dd679f94b6d9664c6f50006101846362982e1713a8580024a020701176aad900fbf18ca67d100209968462429d31713d1bd6e16e8d118e4f3bedb4ac79f633cc06a0b2f010dc09b84adfa0cfb05ca458837ef6b39f65a183e00e8810dc87ddc4917103040869a167a0cf061ba474f8e12999cb430e6975a84d01a18ca2ac9a046c821b6d7e7d4e09984015619c1b641d90b0dab0b4c575f8844ba4643412d0c8dceb6f823b10c765b46a21a4f4080b615340c8b5f4273ff9494e72c4c2e6f904e0c86c385640b8e79e7b66cb7735cb31402f5692d56fbc80508c2117cfb0fe892f04fe640725c05bdf14512c29e2018142df5372f8ccbec473a16a216c1b1056b38cb208cb343a59ea101a1b575bfc0d808b671d2658b57e58b529a7807b67c7b0f6440a1b8a12ebd07941c1d2eff8d2269b96e7b3e28a0ba654a5641da6a2d798b9c6fff9afa964196d328113bca600c20912b0d7ed7597d19d77deb9d72d337f7fdb6d29bde94d0a66a5240d3877b8bbee1ab96efdf5533aecb0c67d1640580061636619e5c200845ca7085cbbefbe7b168886d1085eac1aac94b49904d461959df0fe0e555601c2350b210bd8301b0bae04186121e436384cc0ec8067c1e0d646785e77dd752745863f00a20a08a72b141e7a282580f5892752fae52f537a266b6c5b733a564028832840b8cc32cb74048400174bd5165b6c311320743eb186d1c2038eb28952ae8875170f878f812ac95064640430260a08591c5964089cac9694012c97d68b754b691149659ac4108a97730f5e8a16d97d59393a09f9a359080117e0f9de7befcdca8ab0d470bd241cb30446e994ebaebb2ec73fb2a4a2253ab17ed90bc3957d1880300ad303f0c3740fafae916a617a7508792b0cb32406305fad43380c37cda04f58ca9d1d1430acdbc30284dccb297f58eb7917e0f76136ebeac1479f2a80700093500061cb44ae02c2795efa1f59e3526f0e8e0882ef68d5586fbd947efce394bef08594bef5ad91dbcf3c7324cbdd638f8da440ffe94f1bb93115405800613f58be6a2124300d13107a9f704722648a738ab213fd78d7b1f6415824588bc1e216e56798cd5c0119dc01b9bc89d91b267dec41ea104a3a020c2cbdf4d233c4be0d8b565d01e157be92d26ebba5a40443c471b738c8a68090cb284dbea4312c2e04ec4e2ea3e2ebc2ea07cc55cf182e86ca40b022018c7884e58e2028ae53d21796327172d75f7f7d4e43af0f2ea6f86a3c16428090eba018322e7b62208159b18bc0a7e43600a1b1d4b38c72bd54668225ae1a43b8fdf6db6730164da22260a39b50dd0b10460c218557c49246c2aa48b4c1ba0ae4d87b587858bd016f67bcc43b9e3d4c0b21d7707be1640484bc14acb7c90208f1e06b5ffbdaa1799558735ca70142ca9d6103c26a61fa610342ebeca1c79e2e80b0c53327ba2e80b0652257cb4e3cf5af47f3c15d6f046a822cede84c3583eebb2fa557be72e4963ffc21a56aaccdaf7e959294dcbfff7d4ae2b7c427dc7b6f4aeac10990df7df7999e5500610184fd60f9c90608599dc4fc50acd0e247163bffb390f9f17755408ccfabd97d23cb1a5017c5aedde38740e8732e9811ab54cd66187475a873296335e04ae647ab6613f63f1a465fc650776d8bcc73aed13c3fb211fbdf5aee54bb2fdeb35a149be58b8b14415e899b6af638ef52a745bc7f3d99807740db186b8cd1b3ea74ac66748cf1476641e3212c1308b9fa4d864cac1d0121da8ba1b1af9e724a4aabadd68fe5336a1f4d0121fab1dab1b6b2b0b10655ebda057fb00c2b360d20b00ec719636e813ceede5c64b95c73e564ad000809c8dce90887e6cdf5ac5ffd0084dc43652f0502258ac09732724a361280900599f5b21af708247211e51e0bc04a24a5b6a0b8618a8ea6ad1720249403c9c6593f93f1b535196bdf338d1dc8e5c20b60cbaaeafe0208ff3d23550b61018433726a0184dd576e01844d77b5895f5700e1c469386a0f554078e3f597e543ab2e64390c69ee696167ca74b5cb2e2949e7fdc94fa674d451333febc107535a75d594aeb862e6ef68b56ba0b000c20208fbc1f2930d10e26b1613dafa005e1295b084a905466093f0812b5994c790658e461f60739d06cc7115937040ac1b41583f120e10f0e219844220c867bea7d0716d14a2667989f4f6416f604e3f0090314a60e23a63d747d5bdcd1ee120e4d60458ea97a6df585debd9bef36ebe8ba65fefc9f216ef14df791fe3d70fe55380b0a80f4678451f9f13de3c37c068f421e6876b55f4ed1d589f08cd4123d7ba4f7fe818e525d0ca3b46498361c5eb74e3ff8e80d09ecbe51728e4a6df52a989ea989a0242b4e70aac403a9e02e8b84d0678e3ca881f58db00277176e2939457f039258acf95a40014b95d726f64ed02085def6f8961c4cb9977ee6c1295542d8462539d6bd518423c1559462595e136ed6c335e16c2008478574c21cb1f5e066ab9a54a94c33a29c1865838fca54ff7a9bbc85229518dbf8d0da8ac02c2c8f4d98dc77a01421642cfe48e5a0584b12ead0deb28ea1cfa1c3847033402087d5f006101844dcedb02080b206cc2276d5f530061cb140608b9235c7af90de9c81f7f3f1f20513c371e2d9e4742038766a4becedffded6f29bdfad5293df0802aba2359ee3ab5bffc65c45df4e52f1f8927bceeba94befce59464373ce69819ee2880b000c27eb0fc640384e29d14b216104f700478b86a8ae5e1bac93d9160ca4a4250337eae76ae97e881fb1a10c38ae63399d608a8c0913e2440908affcc33cf4c975e7a697e86ef0041092c240100d47cce754c1c06005675cf234413a625aa004a01297b83e7bcef7defcbc92a42f8044c8d41b203c0cf783d8be28875445fe2b0c48f69f11cbf256ae13ee87dab0d18942484604f78061c5d1fcf6245629d413bef203e0a98abbe03eba2b8487d1b136b12c11dc873afbebd1b30abce9b7ea2fea17d8efb9122e6ac4f40e56402851d01213744fbe99e7ba624b9d7005a534088fe0449163c004a66d0e00dbcc79d135074a6e015e00ed8e29e0934e20760cf5c8919c47f926ce04bc95ecc13d0291b2c974cca02eea75540c8353ab28cb2dc69c6a54f6b80d50c4f009c2cf7788c6b9ccff129de12efc64a697c62cb9c83c02ccba67b003fbca34f9918ad51d641eb08ef0162009cb5118d05dc59cb62da2d86d0f83c43421b9e3bd5b2132c84f603630dc54984765024b1ace25fcff41b8fcb9a2a5dbf921aaca8685c006101844db68c02080b206cc2276d5f530061cb14ae5a08effedd6dd9a71f28ab5a0943eb4e289dc1dfffe08353da6cb391ba83175ed87da4121dbcf9cd29bdfded23c28b78c2555649e9c52f4e492a701aee676a4f15405800613f587eb201422e88ac0562aab86b2a5c4d4b0f789c78e289d98a02cc9c70c209594005dcd42f23c4118609d2ac5982e9d536038a08c42c01808def09c5be771f4b1da193c0e737019a2583f04940f6bcb0880560d3a731b182b84e120d35d958297d4e0805acec0d845e42340b224b0da194c04cc8542600089590032063990b5758bfb9ddb1acb8a6da0060c2aaf82b2e5b9166dd1ec555d0bb49c8833eac36046620b46a21f11d3a48d50f48a285382f7da9b32676ca1ec6cacaba22068bb5d2f8c3226b7c5c0109f4932503223acd0408afbc32256e8873cca138ddc87e3a80d614101a0ae0a7fc8bd20b40215e01a2f421f68fa50f2f88d9748de44bf8025802f82952f02ea08877cc3f40186ea4b928f42db724c9d0cca9b9e7c21916423ccc3a27e6c95c6bc011a589b5c53a19a524ac0f822ff74eebc358ad036b175fe237e7232ba63525be100fb94e0663594fb9987a1ff183f8cc7a3766c017f88b66dd5b3fdd32597a2feeb02c7a80b0674636454965ac45d64c8a8f0094e84329645ff01df0676cacb294364022302b218dbe22cb283a00e7e8647db4d9aa59464b0ce1e894ae269529318423b4b2a75b872586b0cd553a79fb2e80b0e5b9a9269599f7657364e153ab02429a47829e036786a43234fcbff94d4a679c91d2ca2b8f3ed2a85508188a3bac16ad7750ca46bac516e91f0b2d94533fd3fa3a301caed562c62d93a363f70e6782b59a50ac330406c2e24cf19403185ca943d88cc8930d101a0fc001a00080c0121ee22aca3ac232c6dac5b24098d4b89a1138011a829dfbc42d71dd26d801908023c11a18f3b983529ffa2708127009da9ebfd34e3be5cf803c9fb36cb8271ac152cc9c1f5641ee7a4a2fd82308e900152b8c71b25c70df63c1f11d40c51d167f02a3faf01e84595695aa30ec5a40ab9e5023047b808c7b21a066bff17c63e18e2739104b89772094138cc3c5d57bd8a708e29e4190278c73f7732da04b08f70ec0032b1070cd8a63ccac4d2c448478e3337e85ba87516fab1397cf0408d75e3ba5638f4d69cb2d53da6fbf660ba30f578d05103a4780428a01000728614933672ce4ac81680fa4a92528de90b5dc5cb07cafb2ca2a99479d012c62bec7dfe605ff878ba47d1950a4180192cc3f9e67a1060a290af415422570ca7a8847f0a17bf469ac3e178b187c85dfb969be6a3f0000200049444154975a67801f8505c089dff50d4c013ade03c0d30f1eb3363dc73ad66f9ca9c665ecc64a71d1e91c895235ac935c682990286334f4b30fe8bbea8ecdf26d6d00bfee772fef03d7539ca0b53dc7b3c36dd7da02d8ed07c65eb7daf7815d66e8a200c2e6142d8070665a1540d89c7f9e8d571640d8f2ac8ebbec4458f9a4fcfded6f474a4e8cd64e3821a535d7fcf71552702fbf3ca9f7df252a6699253db5cc32e9a7af7e75daebf6dbd31a6bad5500618da60510365b10930d101ab5982816402004f093bd522c1cd0c51a42c864f1037efc2d410570c25ac5250dd8032a590b087d2148b2a2f821107221234c4b1cc15d8cc0cb558e1591a505d8faf6b7bf9d2d7cc054b70ca30469008c004778d43f8044180ee06acc1437dc2c8149d67dfb89bf09cbdce408a0ee6ba2d4f9f9cf7f9e412b77d128f510b164dcee24c460dd548f4b26477d52600570ac7306b73eb4323ee342434013b88eacaf4036304ee826c0038a928070ef0d603aecc2c7f15e330042719e92793dfd744ab7df9ed26b5ed36c61f4e1aab100428f034ef03e4b33fec62714060054c4b6ba06df52bcf901feb83ab2ec865ba5350d0ce23f56bd6a8c692401f2194b37a5003ed4a767f27231ff9a7e283c2206158f198f3ee319c6564d6e83ff012b8a057c674d18a377b246003e7d005bde09c8743d3ef39dffab4a567dbbae9bcba871bacf7af74cd78562029feab7537caef7f41edec9fbb91fbd09d2dedfdaa966ced417da7996fbdaceaa590061f3055800610184cdb9e5b9716501842dcff3b80bd32fbbec488af3830e1a711b6dd2d4cb625164119475949ba88413679f9d12f7d39ffd2ca5279fcc3ddd3fdb6ce9ce0f7e30bd69afbdd2dcb558a3268feae735c542d8999ab4fab4cb9230d09c13d6abc597fb390763ed6b32024242571510024b0108017d0084d58d059adb9b7840801078244cb224b200480ac1e52bacf5de352c2500152198dba6cc8c04597157c09bef58f30042ee9962bafceffe108a595208852c2e9279780e70ca7226ee2f6a16722f03a4b8b4894f246c46321cfd11668c33e2b3a210b66bf00881bb9eb99385086825b47a7f0273c410b20cf901787dcf4288ff5872c4466afa6645f14c630082b910a21f419415848510102704b31002847e223e0bd8e0fac7aaaa01cdd5720163e5c37e5e5f05844b1e77dc48891f4a35fbe7001b40c85dd21c9b2f16bc5e5654fc694e825723a94a35736d64930dab57c4c45563ece27e9f55bd55cc9bf916d76a3c2cd3f8389e1bcf0b32c558e2ffeaf7beabf75f1f77dc0750d5bf73afcfb96c1a9318406b3d9a31f54a2ae3da6e63f79dfeab0033fe8e71ebbf4a6f6b1980e47a5b4fd3df8da66db014177316796e7f5c744bd989ee542e80b000c236d6e054eeb300c296676f5c16c25b6e49e9ad6f1d4914f3a73fa534db6cfd19e59ffe949e3cf0c0f4f8befba6173dfcf0489fcf7f7e4aabaf9ed2e69b8fc42a0ea115405800613fd80e2064e9f21349270042f171000bb00288b00828b82d0e0820e4fec9dac0dd94b0cbca3553b6df9432f813ebc46a21060f48e7464718646d51449bc505200436b98785658c00e93b421a20e659e25624e8702fd0e49962b700445634a04c1f80a79828e011b062cd102769dc401b40c542621d01810059b80156e90a101abf3d492c54c4efb1c4dc76db6d19c4891d3466cf06dc96586289e91945f5ad5400577356111655efc142ca22ca9a49305f7df5d5b340dd09101a0fa155bc19814c320fae7493a105203c78df7dd35b5758412d81f48f534f4dff1ac3f8a2344880f76ee53bbabd2f3e112727ee8c05162034bfe6688670821e04732d3e8f7beae5529ad0bbfa2eee17f7c7fa0ef4700fadba2977eb2fca91840b25bec03b6369dea15aea042d286542f9233baa353b5ad347b5644b8ca39ef1bb491fd5922b41571e0362902972eab1bbd53eebe3f02e7eaaaea9bd68530d3171ad7bd1d46f964df324869332a700c202087bf153f5fbe2323a166a3dfbae2d80b0e539ad17a6279075aaede5e074d0e4037c9d75523af2c89476de39a5af7dadaf2374701cb0efbee9bec30f4f9bcd324b5ae8d65b47ac88daa28b8e00c375d74de99934fc7d7d7897ce0a202c80b01f7cd60d104a36c355916b656416046400126e9b62f0b8ca89451277c44ad749d80d40c8f552bc100027b690eb180119b8237402535c2259d2b8438685102094a1d33512b888fb924c0600e4c60a5471d5043401592e9cac45ee07de0035564ef14ede9585d0fe224e2a5ce608cec6c6e5b5ee461a8010f013eb18ee6b0452632164572d84620eb97f1a9fc60dcfffe28ed18210ecde6f7ce31b19a08ac7645d5c6fbdf5f23ddd00215ab3d4a2a3f767ad9c0c2d00e1091ffa507a9522d1af7c653afffbdf4f4f711b6dd0ecdde60978375768c435988b66a77a919dba740ec8fe49a100ecb3c05220001b630184ce12c08475d79e0ff0e3a9a6e33036809212023f5298b05ab2a25338c88acb6db417a0e2624989811eaeb55ef0ca58c681261418d6121aa0297e8df8424a08196eb56ee30148dd8f7f81381e037efcddb4595bfaf03ed69bf7b08758379422e6d95e22395cb7b1781716443fc664cd532a11c49b3673cb0380cbbafef48126e6990bab985e7d02c905101640d894af5c5700e158a8f5ecbbb600c296e7b49a65f49f4ffc251f18756da0838170e9f09e9de5ae5b21fa3e8cb59e65f4d3cb2e9be63efae891721532e96973ce9992840a926fbce52d7d78eae85d14405800613f98ac1720a48c21d8b270897d2354b126062064e102a62483e90408dd2bed3eed3b01556379241ceb0f18b2beb8f87221051009e521a412a0013182a4a4310449f5d48008c2ad7b6473741f81f9d65b6fcd492b08ae044fda7ff17c92b7104c015cff7b9fb0f611107d077cd6936900602c4e5c4a819f8885127fc65acafd8e5b722495f1beac41e814ee85e2c7242321841a07d741f48a22e99ec93a8b16c043dd6514cd0068165aef07107adfc9d002105e7cdf7de93feebc339db7eaaae98773ccd118bca03d5a510e487c02fcb06201e24d8147c4e511e8c5cba1a57eb86a360584f80d78712f774af348e1c0fdbc5e577234ba532828c90254e073a0473cae71995fcfe80508f10b258b75e55a6ed0d64f5300e41ee08bb50bf043033c25310d10645d184b246be9361ee096eb35abba75c7022f598d3da369b37e295ab876fbdb18fc0061e6475f405a7817741a0b30e77e65292864ac7ba559c8094d9b35c66bc0fa3707ee4757ef85ae6842a6f0bd353a43e6f2a60f69e1ba5298be3b514bd989eeb42985e95b588c5dba2c80b0655a5701e155575c9035fc55eda84383cbd8bb965a2a2dbdc822e92562060f3f3ca5f5d61bf9dde7d6b5ec84d8420968c41a9e77de483205ed5defcad949d31a6b30115021a5f4bbdfa5a4f6e1420ba5f44c7cd14486590061018413e19fb8b75b0c615808b963027a4011219b804938959c25c02400c78d91605f6dd6695808b952ba9705475a7d42227751f710c858d9f4cf82578d6dd29f7e3c93550d48e09249c00bab07eba4442e11d7c59ac7ba0920c86a08d4495daf5fe0946ba87846ef1580a1fe3bde2392cab030b2e255b38c720564d1ab26950132f54de0aef6690f1103c95248c8e6460a548a9b24bc8b0b444760a80e08bd3f0bd83efbec33ddf516a09e0c0d207cfdef7e97f6bbf5d6f4d45c73a56f6db34dbaf2e69b1bb96b46dc1a9a02f9847e562cee7bb2673671f9d48779c757dc45017bbc0938e3b326351bf5e1074f6db7dd76d99a4ca0e2d66ccecc5d937eecc92c93800b57eb2a2004f280c27a16dbfa7a310e4a4eb4c0b3fac467b2a15a27bd006ebc0bd0230912906dec402910648db19ca279948ce8c4479e0b7cb16c4a200538f11060c50f40d8642c8015701b65378c411f00216bba77a2f0896ca59de801a85118b0685a5ffa90d154fc61d379016e2962588fd18667039a9867f30b78b1ccda930a20ecbeb39418c29969532c8493e1241ade180a206c99f6554078e2f13f9e9e2ebbfad8b7cd3e7bfad61d77a479c40b46db679f94b6d9a6efa36b5487f0aebb4692d900a44a5868f3ce9b12b79c4b2f4de99962d8f9f3dd764b69f7dd2734ce02080b209c10033d73731510aa05165946ab8090758c704dd0564f8c650bb022588927a49c6159610124248650eaa0047ac40811bc5c4330e326c95ac6f24058740f0b21ab1e40680cd546d80792b88312aa09cc046b6e94b4c4045bdf6984ba4862e13eeeae5c4db9248ad3931c0720e4ba59770fed24e006208c3849cf771d019905c9fb5701215a0015e1aa17ef01a48a71531263e59557cee0039d08e7e13ecbb274d65967e57765bd884ca2f61f2506dcefddd12dacadfde08189f40110ee72cd35e9bd7ffe73fafbe69ba76bd65a2bbf13055e2fc010cf45330099bb303a010a04f4a631629e23c652821fcf457f7c0620361d4358088175fc8ee6c641006e024cbd8b3e8028963705e4f1bcf9062c65c2c543bd6a48eac335fae022e97fca1440aea9cb68580859deac0deb81c5553f80252589f198bb6e2dfa30272ca668204ed34f53cb6d806c6b8f85dc9ab55eb9e2da1758bcf13e97702eb69d9a3e0042a0314a77e803e0d74793f98d3eac2773c0e248f14019639e014b09aaf00bc55671192d80702c7b62018463a1d6b3efda02085b9ed32a20bcedd61bb296b32a1cd8e0573cebacb4c4b46929bde215292db0404ad75f9f924345c6d03eb74680b0fa4ce52c8043194fa355c7e933aea6f3cf3fee9116405800e1b899e7991bad23422bab941f562a6e6a846b496558d95808b95212be086e844a9635d63a02967842317bdcd3089840168191400fb0c9f429a3a8350d8411ecc4eb48544350e4a2c5dd521c20418f158ef5301a812fc09467b306121e0989c6c98d0d589525904586e50368030c8d1920e486494067b9e15e4ac0054eab80507f006e3d3365b88c0620ec54873000a13848cf65518902f6dec33b48aac37248a8077ec3759060cbdac182c44ae65d5884c2cd102db9cbb2ce180b4b0b81b5934565a2fc309efbd75f7ae974b87d58a28edb6f4f4f2fbc706320579d63a0c50f9eac67db6c322e74146349d11049659a588fea7d030b131987b98e773177941178939bafe4484de62dfa08b0331e7a78af78177fe33beb81f59512c37a8ddaa2a3d137e2f4a38fa620bdda67d0c3fbb83fb291729bc6dbf6075e40bdc6118a9ee8a3095fd4c7514d6e1300db3e872e8072c9323a3a558b857066fa144038d695f8ecbabe00c296e7b39a54e6c52f7a7e2e825d6f737ffce3e905175c90d201078cb8674691f91b6f4c69c925fb3ac23103c2783a702a05fb9d77ce3cce934f1ec9543ace56006167c295b213cd190a5f0361ac81401a3737a0c9e70062151012d4813f45d5b981edbdf7de39f6471c9d984200075861e9a171e7e2c9aaa08c84fb7c0610b9475c1fa1541210b17c5cc158bfa4c4a7fce1121ab1442c69fa21b0b18e1162c3fac61d55d65102e50e3bec90dd0c8d43cd40a01008333eaea3b22a7ab6bd04f8f27f586b08aa802ba059cf941a8030eaff05d0ab16a6afc61002c1ded933f4eb87d5c83b00c4dcf8bc43004f630318582708a32c30e8e57dbcafe7288acec223060a2867a5ad9646683ee3fdbff2e485174effdf5d77a587c5559f7f7e238b4dff4791b25262ac6527da1847b5cf2a20047e80302ea5c36a00216b250b3d3ec28fc36ad603900c108ab364b11c562b65279a53be00c202089b73cb73e3ca02085b9ee746652736dd34256e62dc2fc5e47dfdeb293dfae888bba65a827d6ce30684c6d0699cf7dc3332bae5961b897bfcd4a7c63cda02080b201c33d3d46e607903e6580309450087f819ae6a5ccb0037b179c095c66d8d658d9b29604888731f3747c08c1b256065fdba863b28ab17c003bc710705f608ca80d67efbed97811faba0e42ce27a00c0c8d0e93b563c6e6f9eadbf2841613c844a4965bef4a52fe5b83cd639f1497ebb8f7240131326d10b3742404b5f62170354016dac862c6fc056b5b14ab286ca4a0a30732774bdf763d963c9e33e2b23a4183fae679e1dc9695c0bd87199e3062a310e0b6858af80568979242f619d052895a6c8c9b2669f3d5b53805cf18512c9a05f2fb7c389f245e3fb1f7f3c3dfee217a717cab87af0c1e9b51b6f3c5440c83d332c844dea10367ecf715e88cfcd25fe0708f1cfb001a1b10420a4a01956439b0084d6c4300161294cdf9c0b0a202c80b039b73c37ae2c80b0e5796e54989e5be69a6bce38923ec4e6757ab50901c24ee3946d5166d40086f3cc93d2a73f9dd2c61ba7b4d8628da85b006101848d1865948b00384044564efc24960b28e416c962e57b402b32ee718d91d001b813e7c7d5132893f0441fdcf68030400b4002a2804b162ef74aea108967f4cd22e839c08e2413ac60d5b8208010b8738fe7006b8055802ddf8b67045e59e158f8b85c8a61733d2025b98bfeb9a712426528f4cc7a334ec0d1b8ab4dffac9d40b1f4fb6801e4e9cbfb1a338b24375ab464e18b98b3487802e00292c033c0cd6d30dc01d18595564c13ba9b07d917238108106b4cde1bbd270d1844a47df7cd31dbff6f8e39d25faeb822f34e9398ae89f26da7fb59080b201c9db2d656018433d3a800c2e62bb200c202089b73cb73e3ca02085b9ee74680d018ce3a2ba573cf1dc9e0b9ca2a23d6b616da840061759cffefffa5b4ecb223a52964283df3cc940e3d74e4f7bffe353272b1141b6d94d25a6ba534d75c5ddfa600c2020827caea7808b863ed8ab825c00ae08aa2cd005058b3001c6b1318024caac00c109420c2f780180b97bef42b4e3192655463f408a8ae8f7ef4518f15aed61a35167d5741070b9a3e8030d6177fb3b2e9cbb5c0174006a4bad6fb7ab7704945c3487e11fd57e9aa5f7d4a88019c8555d13d9ee11ddce77320d7ffd5bef515efe073aea4d5e633e3715fd454d54ff4e11d00f57a6ce344e77ec2f7cba82c66fb8e3bd237175924ad70f2c90510d6885a2c84ddb9ac58089badc05276a23b9d4ad989eeb42965279aadaf7e5c5500613fa8384a1f8d0161cbe388ee270c087b8d939bab9a863ffc614ab7df3e723530f8f18f8f80c377be73a61e0a202c80b0175b95ef0b055aa3c04f7f9a95708fbee00569c525974cfb1d7248018405103666b702089b91aa00c202089b71ca8c571540381eaa8def9e0208c747b7c677358a216cdcdbc42f6c1d10568778f1c52356c3934e4ae99918a8f4e6378f00c375d649e999a404051016403871ce2e3d140a8c93021ffc604ae79f9f8e5b6491b4f77cf3e50c9fc56574465a160b6177de2a80b0d9ba2b80b000c2669c5200e178e8d48f7b0a20ec071547e9a30a08e779e97fe4c4167537acb89d3b56a774f1fd1ce24001610c5c8ce191478e580d6fba69e4d3d9664b69b5d532387c6ad965d3fd0f3c90b33d2a9eacbe9ac2dbe17ed7cff7efd597fa71ca01c8c028698758b161b592657458942fcf7dce50e0d65b47629d679d357dea7fff37ddfef7bf1740d861f20b202c8070a27b42018405108e87878a85703c541bdf3d05108e8f6e8defaa02c27beefe4d4e11dfad28aff820e9e4255e682bce662880b04a2d3516590d7ff293941e7964e49b85174e8fadb966daf7b1c7d24f6fbcb100c267e8550061e365562e2c14181b0576df3da5134f54e361e43ec5cde79e3bd7892c16c299495900610184635b60335f5d00610184e3e1a10208c743b5f1dd5300e1f8e8d6f8ae6a61fa534f3e3aa79def56105766be0d37dc30bdef7defcb491fda68430784f1527ffb5b4ac71f3f020e2fbb2c7ffaf42cb3a4ab5ef29234c7565ba5453ffff934fb9c73b6418251fb2c16c26624c7c3575f7d752e4f4079b1fbeebbe7ec91a5150a4c7a0a9c7e7a4a1ff9c84cc35cf77def4bb73df14401841d26b000c2020827baae0b202c80703c3c5400e178a836be7b0a201c1fdd1adf550584d32e3e2b5b00bbb98caa7ba6c6983a625c47db68930610565eeea95b6f4d7fdb7fff34cbe187a717028ac0e17cf3a559d65d37a54d3619c90038a056006133424f6640c8022fdb285e0756957b9059b39ed1d341e31aaec9b288ba269af78b7209d662353ba96c9dd6b0fefcedda7a898228d3e03e7f875780eb3cc7e7d18fffab193f7dee8752c8bd8471d77b97784e7ceeb7f1f96dbcf5bdc5ffee8b67c6fbe95fbf9dc61ed7043d629cf179356b685ca32f348f1219e869ccc6547df73a7779effad89a71e038affaf5af53621d3ce69894d658634429a5e4cf0927a43d175f3c9d30e79c051016403826e62a3184cdc85500610184cd3865c6ab0a201c0fd5c6774f0184e3a35be3bbaa80f0d187ff940bd876038404d7d7bce635b9207608888d1fd4f0c24909089f7a2ad7601343f882534e49dbcc3d779af7baebfefd46ef7d6f4aebaf9fd2273e91928c80e211afba2aa555574d69bbed1ad73b6c42a202089b5029652031d92c84d6d5c30f3f9cebe0a9cf07a0001bd6931a7e7e8023a51c14695773905baeb213beb3f6947b0064f473d34d376580a3f6df3cf3cc93c198f58347dca74483e7e82f4a5d6465c6d34f4f2fffa03483ef08437e03796f78c31b72f9883beeb8239768e022bee0820be6b17adeef7ef7bb5c94fc7ffff77ff33ba811a81f71ade139601cea04025c6a1aeac77895a2a87a2078179e076f7ad39bf233a379f75ffffad7d945d235c6e6c7bd013279331893f144f9887837fb935a896f7ce31b73890e34f78ec6631ff34c3fea28de77df7db95fcff113cfd087b9410ff46da55d7e794a575c31e285e0f7030ffcfb31944d071f9cd2a69ba674c821e9eb6f7d6b3ae33ffea300c20208c7c48a05103623570184051036e3940208c743a77edc5300613fa8384a1fd518c297be78b6b4fdf6db77bdfa599b54a6078d3b65195de60d6f48b3017e4a58dc75d7480f5c48fffad7197b93b5f4da6b539a638ebecc640184cdc8381901a1b506a45e74d145198484358db50a68fac8473e92ad81e79d775ebae0820b32a88b6bd41afc9ffff99ffcf39297bc24833ec5c1292ab6d8628bf45ffff55f19e8005c679c7146068180cc8d37de98811d7ad064fa0d60b2da29f0ce8d16f0b9ecb2cbf2bdee5979e595f377a79f7e7a06948ac1afb0c20a198c0280e79f7f7e3af7dc73d377bffbdda4d0f411471c9196586289b4f4d24b4f074e00eb51471d9581eba69b6e9adf77fffdf7cfff1b6758268d8357c24a2bad940bd247bbf6da6b73617bc013c80328fda813e81eeff0def7be375bf72ebef8e20c08d10ebd5c0f282eb7dc72794c975c7249baeaaaab32b80c6517008b968a3fdf76db6db91ffdebc77c1823700ba82ebffcf2195c4eb83df8604a975e3a02fc0041f1ca4f3c3163b740b167dd78e34c8ffbd4d24b97a4325d26a1b88c76e7ce02089baddc02080b206cc62905108e874efdb8a700c27e50b121209c6fde39d3ce3befdcf21347ef7eb25b083b6619fdffdbbb1368d9aafacee3bbd53438344244c1b4064de24440865e8d44ec38740442943460c0290a18418440704259808a8a44108251104141a261120c8e68c446e0098d91c101e390043144302438b482adc65e9ffddccff3ea55ddaaba5575ebdec7efac55ebdd5775ce3efbfcce3efbeceffe0ffb539f2ae58c3356bb77d9def296d5ee5e4f7d6a2937df5ccafff81fa53cfad1a518f06ebef9ea7fbb7f8f118f19201cad792e3720041c2c691282b04a3df2918f2c9b6db659853e5005745ef2929754687bfdeb5f5f2f1224fa9e850b180132499fb86cb3bebdec652fabdf1f72c821e5852f7c61052afb9e7aeaa9e5f6db6faf90c5d2d6ac91a08f850f806dbef9e6b56cf5b05d74d145e5effeeeefca739ffbdcb2d75e7b5538027037de7863b50482cec73dee711598feeaaffeaa9c75d65915b4c0e6d1471f5d9efad4a796bdf7debb5add6c77dc7147bd0ec07ad24927d57a1e76d861f5bc20ab65e8056eca95b59735ae6d5ffce2172ba41aa4a9cb97bef4a562716410c85a0ad8584669fa918f7ca40066d7d2925d2977871d76a8dfd343197e673505cbc0d4f160d8fd68f7e7f39fff7cd50718db9755d639b7d8628bd11a5e77af2f7e7135f8f116f0f9ea57d72d43b9d63edd69a7d59fedb75fbd0fb7d1f3ce5b7dcce31f5fca5147955ddffdee249509108edd0e0384a34916200c108ed65202848bd1691ac70408a7a1e28840f8e007ddaf1c75d451333ee37a0884ed92ac5f68e98ab3ce2a753dc3e73fbf143141c3b6073e706d406cd0d8fbef831e542d43232d3b71e18575edb2f2cfff5cca631eb37a6d45e9eba7b825cbe8e86202bd73cf3db7bceb5defaa16275638600354408dc188644d1ffff8c72b4081aca73ded69d55277db6db7d5ef0112abd6739ef39c0a7c968861b1e33af99ad7bca62e4172e79d7796534e39a58218c06409730e10c4e5d9dfcf7bdef32a6c82329636df5d78e185d5a2f796b7bca55a040118900284eab9efbefb562b21a00483679c7146b5bafdc33ffc4379f5ab5f5dad716092dba8cdf9f525cd32a8ddfee99ffe69d9638f3d2aa836f750163de0c525b31b974c2fd7a28df9f7e28b2fae164310bce38e3b56900385175c7041b5b8fedeeffd5eb506369755e5b2f481d6b7bded6d15a477db6db77a1e75e3420a88015f733365597df7bbdf5d5ef08217d47ba48ecad864934deab916dcac63fa7ffecf6a00f4b9faea52eebc73ed43c4806ebbed6af07be213574f1479c647dc76dd75d700618070c4d6f2cbdd0284a34916200c108ed65202848bd1691ac70408a7a16280702215475e981e844900d1bbbdfffda558ebf0b6db4af9f6b7d7fef7f6db4bf9c94f46ab9f18ae4d372d5fffc10fca0f37daa86cf184279407b31ef482e38d37ae8e5fec6e0055dce318d6c861950a100e5368f5ef80439cdbab5ef5aaea96f9e77ffee7d52ad6129eb08a73270579071d7450850f8006d6800debd597bffce572da69a75520b00f4b1868dc7efbedebda98071c7040b5ec19fc012016bac30f3fbc5aba6cfecffa0ffe1c0f1edbf959cb58084f3ffdf47a0e1632aead00d171ce2f160f6082a4b3cf3ebbbce73def29ab56adaa40a85cf00a54bb1642f50384ea0308ffeccffeacd69325b11b2fd8620407a9a90eef7def7b6b1d8f3beeb86a4db4890704a6eaf1477ff44715e2bad98f5deb5ffee55f968f7ef4a3b58e809ba636d7d412f6b4843ce79d775e0562964c5a02d5819b67b9ebfec9c5f3a73f5d7bf74d36a9cb45acb1fe3de109133d7f01c2c1b7232ea30b6b2337803ec864d3ef689373da78437896b979efb3cf3ef5b95df0395bc27a0608078bcd3be30d6f7843ed73bd07784d74939c2dd56d727e6d47bf6f72cf6464f37259aa3af49e274965964ef900e18cb5eec610c642d85fec9181d0e15cbddef74d42a0200000200049444154bed5e0c732f79ad7ac761f5d68fbd77fed0f8bbdf0d8d6451cb54dbcf6b5a558b87efffd996c4a39f8e05236ddb42e725d0c76c52bf974ffeefe7fa1017129d57a73f5d5579737bef18d35c68a8b2097c0e5b02d27975175f9c217be5013363df399cf2c471c71448d03ec6e5e74208c95ed95af7c6575d1ecbe705bac1ef8db7ffffd2b787919b2121a60012cc0c542078258c1ba40c8cac862c7a278f0c1075777ca563e0b1c003df3cc336b5c229754d63f80a49eee33d75016beadb6daaaba8c2e060881d6b39ef5ac6aaddbf43bdf291b5c7e79d9f0939f2c3fdf7befb2c161870d6c36a09255f2831ffc6079d39bde54ad915d20fcf4a73f5dad7fbe6faea8208f758f36eabbdf7efbd57db890b6aca96b655ebde9a6f2f9e38e2b3fbfe492f2e3fff5bfca566f7f7bb5ceaed96eb861b5e50f0472ff6c71c3dd5a8bfd63fd6b2ea05b6f3dd547214018205c4c83ea5a08dffad6b79627b24ecf695bee40689922936f96d7f2bce943e6b5896fd6dff180b8f4d24bcb6ffee66fae932d7aa9ea16201cac748070a95a612901c2196b1d201c2ef0584038bcb8c5ef71d75de55bd75e5b8e3bf4d0f2a8073ca03c6ba79dcaaf6fb04129fff22feb02a5b37cf8c3a53ce319aba150028bc56cbdc0b8d146ab01f2010f283fbbdffdcabffce007e5b2cf7dae3c60b3cdcace7bed5536e232d80f32db778ba9c328c7dc7453299ff84429d670db679ff21f071cb06cb28c72b304ce2c68471e79647549ec9d156739e41209eac4eeedbefbee6b65f2056d7ff3377f533f92cf4806c34df4f8e38faf8951b883024050c4d2c7da382910befffdefafe731137bc92597546b2398fcc0073e505d2bc7b110aa23cba418c7ed37dcb09c7cebade5b73a0955fe63afbdcabd2cc4de671b04842c7cc0945e621bbb9a72f3e43aebd93df4d043abdb2d5758964c0978b88aae7103d57658f6db22f0a5949f3ef189e53e3beffc4b00ec4d16a59e2c2d320cfb00c1596522fd852601c200e1285d61ef3e809055de3368b28875675e1b20f4cc72e57ef6b39f5debb55c2c84628959506578fe933ff9930a84cda3601e7a99846395bbf2ca2b6bc88049d7dee58396aa5e01c200e152b5b585ce13209cf15de802e14337dba85a1de6b9adc8a4324b28d8483184e218c50c4ad2f19087fc72a07bfcf1ab6b6a70cbdaf8831ffcf2d3ef3b7151d3de7a2d930d30bb10d981ce3556cc7edfb5650afa0ce87ffeac67956b5ef6b2f92d4caf4eac4a5ffb5af9d9631f5b56fddaaf55207cddeb5e57ffed07841ffbd8c7aac54fe219d6aceed22e5c45c5b88131ae915b6eb965b5f81930801b1645b18460530650032f70b9c665f48a2bca075ffbdaf2ab77dc51b6da679ff21b471c31d442c86514100228b0cacac90df4da6bafad751c0884fffeefe5ce7ffaa7f2cee38f2f77df7e7b39ec052f28fffe8fff58fee6ecb3cbafddfffe6587fff7ffca6fdd724b29bbed56ca2b5f59ca092794f2b18fc9a253caaffeea3a2dce8016d0711d758d60cfc615d7750246f187dd383fda356b20ed1ccb3aca55948590e553529fea62ca122fd6b7b73edd9aa817e86b0038072b4b803040b898ee589b17bb2c8e989be65432e62ea62245e4c4f76a2cb4a458bc14f42d5d37ef45163b95c3f413323c4bc4c5bd9c3744f33898ca09c62c449f2561961873b1d3fab300615c46c76c46ebd5ee01c219dfceee3a84b77eeb6b35d945ef3a843a6c2f11714fb39ecd0b102e7cc347024245fc6231eb35a5711fe5ce3aeef6ddeffe121affefff5d0d93e2217ff083f2933bef2cb77cf9cbe5b37ffbb775a0ffc4adb72ef7fdd9cf56efdff6734c03cfbbee1af7ecc3f71713769ffbacae53cf80fe8e5d762997fff33fd7250ec49dc9d25958542508f10103ed6fae41ddff77f7e9ba0e0eaf51297d00f58ea73eb56cf7f5af57ab5e3f0b21b713d0c5adb29f85d0608ecb240b21974ba0a7acd7bef6b5d5f2c51a6626d96f62855814955581f0a69bca4ff7dcb3dca793e5b26b915bc765f4918f2c375c7e79f9c4f9e797473de42165a72db72cb77ef9cbe5c6cf7ca66cf5f08797fbfdf8c7e5e61b6e28bfff3bbf5381ef8eaf7fbd3ce8def72e0ff8e94fcb7f72bf47dd5efef2524e3cb1144bddbcf5ada31e35bbfd7aeb03fe5ef4a2d52ea08f7dececce3b62c901c200e1884d65adddbccfc5fa724b972d77d6eff085ea6872873b3b8f08fd31ef8359ad693cae56c61e269e4c1c812f93462dbe78dcb2a6b1bffbc56a09a28dbde609ceb1100ebea371199d466b1fad8c00e1683a2d7aaf2e107ef4c31754f0eb2e1ced656246fee94f7f7a8d7f9a758c5880704a40a8986f7c63f542d78f78c458d90c476d4c8b8a21fc054cae81c451ac955da80497edff3ffad1da559d356080cf068abdff7661f25bdf2ae58a2b4a91fce4c94f2ee5339f29e5f2cbcb251b6f5c367afce36b0c4fefcc33b752cb43003ebf9b39ef0e463ca79662e0f665cd3f1932cd66cbacc96ac652c6622796d0a08bc5cc0c7c5d509da5f2924bd6a94fcd74799ffb949fdd7147b9ebdbdf2ef7fafef7cbfd00fda4db461b959ffd97ff52fee5473f2a3fb8f7bdcb6f6cbf7df9febdee553e7ddd75e537ffdb7f2b5b3ff08165434b2ad0f3bffff7d5eb746a07679f5d4a9fe51dccdc739902bc5cb924d2b1b94e33e82c9766f469d6d555e29db698bd7d0db0c0af0caaca32e8b35cc78300fc31c7ac5b1f2ea453cecc3b89b401c200e162db8ff76a5b9f739e90a30e2c963e40b02d13b3d8eb9ae671eaa61f36fe51af79836aab0fadda1aabd3bcde71ca0a100608c7692fb3da3740382b657f516e1708fff7651f29db6cb34dedacbb9be40ad6220385ddb5c26651b500e11481701637a853e6a28070da750298d67f3ce0807506f4b7bcf4a5e5d26baf2d1bfefce765b7a73eb56cca5d959572a10f37d9dedfc7b17a75afaf596559667fb1b6e0b42f7facf246adcf461b951fdff7bee50e593337deb86c2a59cac61b977fbaf3ce72f557be5261efdb77dd555ef9a637d57fffe2ecb3cb23b7dbaeecb1df7e658b6db7ad032ae02a869115409ce3d7bef6b5faff17bff8c53576e8812f7e7129b2f2b66d010bf6b0a4325cd0c4225916a3eb36aa1f638d309802d006c2a0f0faebafafb15436195f1ffef087af6351fff1ab5f5d3678f39bc79277d63b0708d76f20d45e591b4c5e8011094db8373780f27717a0b4650063bfe64ae8d9f30eb5294359f6e96e40c384914f2bdbdfbd00d48e75cede8c927e93c5b76df65186b2d5ab25756abfab97ef9d4359adbef6570eab5cab170be62018b38ff78ef3fbdb7e9eef7e192f5db7f14d3baf78c006567e735e65f473c354ff6e16e85eaf29c7348b9dbad894ddeaddbd5ec7ba27beeb3d97df9ccb717ef769df29af2dc5e33be7f151afae868ea149d36216fd508070b0aab110cea2c5f52f33403863adbb40f8dd7fbfb5ae51d66b21d431c95ed816849e6595028401c245b5af1e17d99f1f734cb966d75da71b4328eed220a81f347621f2aaab4a39e38c752c72d7efb043b9e1b6dbea1a805cb7c08b67cd0b455214f074dd75d7d505d82587618df7e237a0e106caed8b1b130ba1c18c58410bc2b3101a5438cee2f212ca88fd6369ac6eb22c60e0abc762c94df3a75b6f5dfef5273f291f5db5aa9cf3a10f95a37f9196fe861b6ea8cb4e703915f3683d43963559ef644395e5f4b2cb2eabf17be222d513e8b936cfb0e34f38e1843a8924a90b2b9e984669e6b9a5b364defb5bdf2abf72ebade557b6dcb26cd45986a3f7febb1e4b5d709995d1d69a83b6b6ecc4a73ef5a99a00825b70b310b6011bf8a3b10c7d26b6fced3bd9471ffad087d6243fcdebe183279f5c3e76eaa9e569071e58767bf18bd7ce32baa84639dd830284eb27106a9380e89bdffce61ad74e80a55d3eec610fabcf933e42cc2bab7683071e035cc9ad4dda2642ecc7d3c03edabb7ec33ebd40a85c13212ce62cf0edf9e8ee2796ce848a4960fbb70d9c886ff34cab9b674dbdf469c0443fa4fe2cf92d4ba7fecdda9feae4ba3ca79e5fe50b8368cbdbb80ee732ded0d7f5829e63c41ff28868963c1e4cfa237d9472d58f9ecaf5716ee538afbe92d784eba61f30ec0769e0b12da14343e7edee07d42cc5a3dff5bbbaf0aea295fdf4cfeaa96ece414b75ea772e1ad185765c69413a28764fdabaae40d0b5b86edfd1a801a97bee5cfa54fdf52c2cc001c200e174df668b2b2d40b838dd463eaa9b54e65737dea0a6c4ef9d0d53980ebeb9608d5cf822760c10060817d16c561f72f3cdab3f8f7a54f98f873e74be59467b00f567471d55aede6597ba269f17b6a51d0c380c1264933350b03482c19c643112c5880d34c83108b040bc4187eca3acf55ffdea576b0228495e8090018a63ada327398dc43312d41854d8eede7df7b2a1acb3bfd8fee3e8a3cbbd8e3db60e06019e64352c6d5c32011bd03b5f0ce1a31e551351184cf9ce120e6f7ef39bebf75c560d62640db44c853897dffeeddfaedf812ec9105805011c509518c1a0891782c14c9be1f71df7d60aaf7d3640084e3ff4a10f95638e3966ad65279cdbfa84d6a27aec631f5b077ead5c7531e803b2ce61206560258b20b896b8a7bb26a2acaa2c87d6d9da73cf3dab5571396d01c2f51308018b36eab9f50c7bcf8208e0d2d60cd45e0196ff0308cf18ebb6ef2df763b256bb075d266a80883ec43303468056d78a28d3a8b2409dc1be75373dd3ddcd44cbe73ffff97a5ecf70f778006292c6da7dfa1e50aa1fd257798e00a9656a3c83ea2536cf3236ad5f032f0098ebb63a346b9d7df5035ce177dc71c7d52eefbfd8fca6bfb2048dfea55906c193bec735e9ef8c212c1d61fd51d76e73ace7d9faabca0584e79c734ed5d1264ecf3e75a2eadef7aef0ad8fd63f5bd646dfdbe0d47ecea98ff03d777620b7c71e7bd4be991efa4a7d93e45f3689b87ce758f71bf4b573e9e3e902dce9aa4eee85fe49bfd8eaa73fd68f9ae8e30d01c26d7434c1a50d58da6816eb03060807f73db1102edd5b32403863adbb40f8904def5f17709ee716205c58fd9193ca2cc14d5c162ea303ae7359ac4378f9e53576b0fcfeef979fefb0431d84c8146a615dda19a419f819241838585fd077062aac7f66a90dfe0c960c7e0c044081c10aa8b166d681071eb866917965193488ab3310131f57dd214ba9cb3d7cfc8823ca7ffdfad7cbc35efce2b2c5de7bd781a7019c819375ae0c48581fad1508d80c08cdfa834b8316b3e4c014841aa8591c5819ac9a621f0d66d5d360479d590b5d1310739c01ac97671b08a997e30dd20ca658ec0c3a7b67d1d5cb35d1cdf51a7cdac09de5305cb3ba29d7b1f4542eadfcdfb1edf716c364c065106c46bdb9e11990fff55fff75b5625a9e82fefdeab3048f56df530408d74f200475265ab46fcf0c2b9336ef03c60cf04dd60038eb947af63ccf80c1b12644da3301b02eb8e0820a483e96513001c59ad54041df088a3ceb801164bcea55af5a031f4d65400376b43bcf71d7cdd379651a064b00cea491385e00c963405f643d55cfabe3ec7fecb1c7d6ebf1acab93b2c1ab3e433f03c4580a412db8e371d0cd88dac0525d4d88c902ea193561e47c3befbc739de00177f4a485e7dc64967ec7bb537f4a3713483c0e8c37f40dd6fa53863e164c832d7d83492d9365b4d20736b80484a04cd2173ab0129ad0b37ea1fe19a499900388ae0da0b286aa9b492a60eb1a9dcbfd0484fa627d957d4cfc4910b6edb6dbd6732adf64bd7bc52b44c230136074549edfb41d59a7679119354018209cd77baf7bde00e18cef42d6211c2ef0b25987b094fa52fbe33ffee33ac8f6c235989ed716201c5d79906416d98c3398e352091001a0418bfbc89dc9a0c83e328e9a05379031e032909234c540a5b5476b1b3a4e5b30303060d23e581b0c58cc70b7c5d595c912a81e60d1ef2dc606ac89f16b7145cd5a270ed0f1ead75cbff417062d067966c80d32c19f018ff20d5cd4c5400e5499b5764d063bd61e334bde8d51f69b7db7db6ebb3a90f1a149d7ed49ddcd9cbb3603dfe6bea61cdf1b84d2b2b9bab7181cdaa8bbdf696210a6be065f06c4feedcea6d3c07d31d004d2cd25adb73ea3dff5e9ee19205cff80501b0645b2056b8fac7d80021819e89bacf07c99f8d026ade5e97740c492efd9e09a6d6d52cfa4fd58eeb99cdb9f359fdb36c0686ea5cd120686ac27aa9fe16dd0ac514d65bf9924013e40a73b51633206a49e7aeaa9b5dfe25900644d2cf152f0fc9ae031c162a2061002457dd21ffcc11f546052becdc495737b16f50fca70ddaea12d9bd3404c3ff28a57bca25e8bf720d8f3ccb256ea3b4c56012faeedfab9430e39a40299bed7b598b8a20ba00293b4f01baf0cef333ab47e41df7bf1c517573d7d0fc09af7947e4b1df469679e79e69abec9fdd147e907b9c80342f746dde8edba59507985c812ad7f72adfad7069760dfb160d0c49c36e21ab9deeb93dc7febc1f220510716566301d0eaba0384d3ed778795160be13085a6f77b80707a5af62d2940385ce000617f8d0284c3db4edbc3acafc183418841518b0332c86a09199aa5aa254e308030f0f27d4b30d092161824f8bd371904c8738c72fdd6c0aa253668b004e00c4e0c480c80bab134cee538dff9b7eb2aeef8964ca2b9a1b584072dc985731bdc29a75d93fafabd3761157d5c9381a0418fc11b6b46d7c5ad95af3eddc40d8e75ad2d6143efdd70fdcedf923134606c7a3a6f7790abfc1613c515cea0cd0c3e4bcb3c17a86ed715205cff8050db041d5ca159e1b858b744329e176d1ffc7109b4afdf4d009930025ef6054e071c70406debbc0b4c38b12e71913ceeb8e3aac59b35bc9b70c9be2c90a79f7e7a7deec60542f562adb2dc0d374d4068f288b7013833a9e2ef77bce31dd595d4b3d42c8440e68a2baea856399645c0041a6d2d9e925ba5efba4b64382720043f26c6b87683516398934f3eb996c7220908594d59cb58e19a1bb9092e3a7eee739fab40c5a2a87f339904b6bccfe8a54fd42fe803002d2ba8c45880b06d7ed75ff0e470ff5a5217aeb5acb880debd028462b0c1b26b63fde459e19ef2985066f342d01fd30b10bac66601d4dfb266b244ba1ec78274bab15a9a386035652114631d201cfdbd3c8d3d0384d35071b4320284a3e9b4e8bde2323a5cba00618070782b19bc47b3dc99f565dd3253de920f0c2bd7b1fdb2e00d3b6ea1df0d340d2e0c66b86599699fe706120de6b8c01aa4a9d3a8facca2de0660dc65595bc0a9b81cd68e796f01c2f50f084105cb95500d2ea12c5c40aec5c7019606322cd82c5b008c550a1834f751c79b0039edb4d3aa5701d0523640e0cac92ad79290289365cdef8070210b21b74ef0d175196d7781e5dd33db8050bd790f70e1767e71bfe2a4ed238690f593d51eb878b64093ebf15df3706865eb137cd7f514e805c297bef4a575320b8c9d78e28915929d97d7006b1b9757fab4fed373cdfd1314721b05810d8c01a27258543df38e51866b707ff4dd2dc6b2c510ba5e937c7ea7a7493f6305e5d2ba01a1447dcdb383eb25cddd4b40c88ad936f7d91ab48090155418817a005cf5f2bbbe88c6de23d6b375fdbc1f0284f3eb9d03844ba77d8070c65a778170b3073fa0ce4cf56e3a251df352c4d3248670e11b1e97d1d11e88651143f88baa1a401808002f1630b3ea0610d306bdd1949124f5ee3ae36d506646dd4cfb3c370353034f6e732c1b96a6e016358b6c79a35c27eb844117d72e960e03cf6e96c551ca98c53e01c2f50f08f50d5cfec4fa71b9664de3fac7851a80c8b4093458bcb82e820beee35c0381180b19c06996211626566d60042c581ebde35b8c1e05c1269890dc09588a011e64211c1708c548ab2b28127f077a3c4bcea98eeace0d549ca3ef4013006bcb343497cc96c46e1010ea1ff45dae1f00bef5ad6fad8029fe599d59f4dff5ae77ad59b6c1752b9b3b2a8dc0160d590f594a3de30d089bd58e8510104a62e3f96feef7ea4a3bb1902c7e40d43d535770a8fff2bb245a2c7abd406832ae01a1fea56ddeedeae63a8cc35a421adfb3000b19707d809b5513a4f33671fd01c259f4b8a39519201c4da769ec15209c868a0b94d15d76e29ffee14bd5fda477a0aa73d5499ad99b75e6bd006180701a4d7eb901a181835819317566cc0d68e60d84124a1854f9cc730384066a06afcb0108c56519d83620643d68e9dfe7a9538070fd03425704f864e9054906ff36962d00e09e83390952c009774bb1b900c0448ef85bed13d0019273cf3d770dac88dbf34c812bd0d5dcb78198e7ccb1b300c20b2fbcb0d60798b2c4a9a7c454a00d103a2fa801582c6fac5cac715c2fc5f9aa27c01257d8326936a06369044b80083cb3c47199e4924a177177e21a3dafe0aa77e17b9e08323dfb9d9be92840a81f60c9eb663ca527f750aef73c2d24a3f11db0e762ce4597cbaaef2701426ec2da8658481656b1cffa6dd7c16594f556bc6280707e3d738070e9b40f10ce586b40683076e5aaebca05e79d5507aaadf36da7e6bec5e54406af590f8c028401c26934f900e160159b853040d85fa300e1c24fa041b0c1b6982789310c527b07ded37886c729c3c0596c166b19eb97b8ad41cb988c53ee62f7e59ea82e12a7882963095b686b8993c4b7b11e710364a9066eac7d964fe002e99a80086b1b4b93f7b1f2edc7cd9295114472bde60a6a3fe004ccc053f3f2f19ea7192bda345d464da4005b4008ce58c958b0401c5805b90d08c5070242964e1e148051c650d72f110eab58d782d6b28c2a8b559505551cb031038094e48a8e2c7f3c30e8d34d1ae578aee0969671ce168339c842d85c468d8fdc3fc7b4493c93e4621c81190ba16532dc17e7543710082427b5104a782363aac441dc89dd6fb19bce2bdba8cca6ea1f205cec933af97101c2c9351cb58400e1a84a2d72bfae85f07f5ff6913abb68c6bebb715b111cadc3ebced82df2940b1e16200c104ea35d050803848b6d4701c200e162db4e3b6e5c206ccba178f76a7fab56adaab166a00354b1ea59c78f3548cc1d0891f00498b0c00120b1c120521219f188e050921431b926735ba6607504365c1301cc42496516e3320a082d8300fe3efbd9cfd6cca8ce0f7281134b1ab752f5756d3c8f408db5fa0cae811a7749b0c8a2d8b60684e2eb24a1025bae9bd70570f43718e3a66a5f30def5686acbd480607195a0b5c510f673196d4008bec428b2fcb58d7e26d6e8031841372877bd3c408ca3c458b2e001f66e0ce1382ea3eac0ca2b132dedb403d7de322ed3c844408070d22776f1c7070817afddb8470608c7556cccfdbb3184f7fe4f77d720ef5e20340be7c5a4739dc5a2a7dd2a070803846336e1bebb070803848b6d4701c200e162dbceb840a89f0216deb92c662db98a04225c1baded698177316cac6fe2f1246a01248011d0704d14afa71cb005408478703504842c8c2ca6dd4cb98049b2127062d91900d76fd989498090e5d86099a5cfb95c23574a40ab5cf0c65ddd44735b5e03dc88b5e69ec94d528c5c17085b9651eea8ac63dc69593e7d8c53b88e72191517c925146cfabe5d2f6b9b733b1628fb6d9885b00121b7d1ae9bbf7ea20b84a057592c9442045875c5f98d0a84bd4965dc43d6783189ee392d9c1ff4836b4984802c2d8e3cf2c80ac5c9323ae9933bfef101c2f1355bec1101c2c52a37e271bdcb4ec856d602bbbb452c454219e70b100608476cba0bee16200c102eb61d050803848b6d3be302a1c1249863f9636532f1da167267e962d56a717692ca70ab047ee2c7588e000dd74470c8bd10fc7157642d6b40c862281949d742083cc10b6b190b21ab5bd71aa75c4b58001eee9bdc701b0cf9d7ef5c1765c51403087c8009606d164240682c01c2808a63c0a17842e764e104b06df908e5dadf35f04a02c2838090c5ad65196d4bf138563ca6b506c1b472ac9f4853a0490f319334b5ee203753e71c0684969d684b4474db8572586a7ddc3be7f3de61fd94388c1b2c976ada350b2177d86e96d1e612eb3840d85d7682e59365d0bda11f8babfab2ac727d95e1947b306baa4901c0caadb42d3bd1ee53eff23a8b69db59987eb06a01c2c5b4a8c51d13205c9c6e231f957508874b956527fa6b94750887b71d7b18a824a9cc60ad925466b47694a43283755aa9318400a6adddc7cdb0adc10998c4f6b19e013c317fdc110df8c12300607932d8073ae008108aaf63a9b2e6e0d5575f5d1391b0b6819fae778f7389e5e3862a090c17ca9649172c820f562870256e112cb64961b0064224ba91a918ec580ec131eaa24c162b6eab8eb13c06b751ee8fd62b543fe30e20eb9a9405fc809bcca896ce00938050bdbb1642993f5ffef297d7656958105d430342fb6907ac6a80d079e907580ddab9d02a5f3e04da01581b206485f33e13abc735b42d3b210e14e072d7ec86cbd057188dc43d40ddefee93e35829d511b4b95fac91ee9f71843a75819005d3c69a687f7196da04eb254b2a18958047f652f747f9e0160cb6eca760d44401506cd656659a00e0560b14bb9301a3f5366bef15200c102ea6dd4cfb9800e1b415ed292f40385ce000618070782b19bc47807061f50284a3b5ae00e1fa078420442219194465ce347067e161a56621022fe0cdf760425c1c4b9298311005deb8950244ef72963aa06203742c80327382adb68483fe0800da0f90010ee120cee13780c52ad8d607054cdd583c6004fe00278b17774d094e64f904abac5aac626007c0005510c4359575d0c73162ec64e8949c88cb28174875a4896ce712e374d7ff5437718f92c28052564f90d4bb3405a002ab5c6c9d5bb9dee1ae4b9d3c47dc315b2224fb58868777928cad96b268ebff0131d00ba6dd9766c5e4de0b6c1dc3526a9910d7a52ee2475dafd842e0f98c673ca342b5fad3c722f3ee198897a8c626f18e8901f7c3f1ca7bc2139e506ebae9a60a8b401584b6cdfeca718f6432f5373805ffcdedd83d674906d79366870f100608477b4bcd76af00e16cf5ad2f119ddeaaab6f280f7ed0fdaa2bc53cb7b88c2eac7ed6211cad75c66574b04ec932ba701b8acbe8c2fa24cbe8f03e68d4a432fa29562b4b27802b306340cf7a055e580c0de69b8b27aba1783cc0b4e9a69b5640d15ec5b9b110b1e40149e54a3ec22a0608bbb16fc00410b184b1da013360d1f6712ee706402043fdba9bfa80269630f16c8e13cbc7fdd1ff1d0368dad23a267c5c9fef01907508012110031aa087e54f1d008db2d44d46cde6fee8fceaed5a81a8e39dcfd215bdcbf728a769aaad5aca4239ca755dea0e7edb7174bbe28a2b6a8c2378029b4d57100e64ddcfee799cdfbe2053dd81abaca70d18c547faa823adc15c73696d75727c5bcac27d60151623a91e00f2918f7c649d245026cb5ff7fc209d6ef4703deaa98ceea68e260d5851bb3039bcf5aebb47803040b8987633ed631d1ef9d900002000494441540284d356b4a7bc2e103e64d3fb173184f3dcb87cf0a337e365068e1b860e7a9e9b97ab9949d9c32ebffcf2f2bad7bd6e4dc6afa5ae97d961ee395e966d9678a9ebd0ce072c0c38cc4e7bd1734f12bbb21c362f5f7573cfbcb4dd332fec796ccd42b8efbefbae5987d02c7bef4066a9ea6600d416a617bf23ae679e5bb3107617a6a7cfbc16a637c8ea5d987ed6cbed8ca23fcb860122eb03abd1bcda4f8070f8dd1a150895046080947beb381b60010b06f2ed39f09c707df4fcfaadb9807a3f39d6bfac4240409f6372150cb5a435cdfaa7ddb070d9575920d4b12d7780df419f7ed3b3a01cbfb7cd79d5cb6fed7be7748cfffbdedf2c735d9033d6709c7d5d93f3a89b3a8243c7faddfb5efd9ca71fecd95fddec3368b91365d10a18d2d47ee051d9cdd2d7aea7e9e7fa69a2ec6665732dea46fb6e6e05fb8076fbd150995db74cf7d37112f9b46441cea71c3a18e7a84bbb87ea687f5a3b8ffad2c97e34e8cdeedecaf16fbb17cae8de277574cdead075ab1dde7a0384e3689418c271d49a6cdf00e164fa0d3dba0b841b3de0de3580bd77d321e9f074f03a3f9f51b7f612d22939decb4fc7a50cbff5ebf0b9c5189049e32c2b994e4dc7db5e266da6d0cb649cad95d15e548ef7e99744a75b6e7b61c8c8667652303ff7189df9a86574cb530f7aba9e3613394a3d94611650663659c7c48bb4cc70f4a4ebb06be9d5cb4ba7b90a29433dba2f9585f4b5bf6c6ee217ccfa02422fb936501867c0aa1e4d0f2fc5ee6063d47becbe6a672df09efb8dc9057a8367b1240b6d8e5386ba7821374db5d97136f7b665bd6b2f6e33ac2d5ba0cc7f66f7076deea1b6d5124c1814b8b7bdd97f87d5a90ddcfcab0c9a2ac347d2032e4a20957bd7a0ad95418f36701da71e6d70d3065a8e752dee71db942b5606a472919365b0593fda3eceaf7db83ffdca18a685df5b19aea90d5cbbf56865a89fb820b1552c15dcf04c74b4beac0d56bb7dd928e7b74f2ba3f565ad1ea3f4a99256187c0408d7557ba5c6108eda6e26d94f9b63c5a211abdda4d6a249eae2d905a080093436ebe724654eeb58756379f30e047bde25f39a94724dee9789685ab1fab671cbb4ae779c7262211cac5680709c9634d9be01c2c9f41b7a74771dc2dbbffd8f15c2ba50e16f2f10ee0b0645dc44f8bf8f0a0d8e071c5c17408cce8dab83b881ae9b4aaba8720dc6ac49c4a562a79d76aae7d73973bde04263f0c4bd42193af151c1433d1ccf75a40578736369b3700b0dd09b4eae9f5badb8006570f3f19d3a8d528fa627370e834d8354d7a2c31d560ff5f3c2124361c650f631ae242ddd764b3d3e6a3d9c5b3d049dbb16eea8929fb847a36cb4a79f05ce8129206cae2ce3e8a1fe2c8cee2f90123341130033cab5b4ba3efce10fafed4c79cae00a2d485f19261686592fe9a18d4a726040400fd6101dfea89b737979bb1613195ee82c95eeaf781ea003c0168ae9f05c489a2021003db87cb9b7ca1a15f80d6494e1de1a047245e2b6e5fe285f5c8cd817ed47fc4fbfcdb538563b65913083ed18f51875a0a45dd141bc926b36634f53f5f19b73f857dd246fd08ed4a7c170ab97fbe1bed0d63570c7b288f5a8fd9072b861b92fdcbbb42d651828f76a0a12b5bfabaebaaa6853e2a94c743817185447ba6817ae457fd8af2feba7a973e9cbdc17cf9e7a70496b652cd4ce00b3bed0c4542c846b2b15201cdc72b45b931b2c6bd6c5f30ccd6bf3cc9844d4b772dff49927e87475d0bf99f0d5df4ae8629273d6cb6c2d741f587d7924d1ea852f7c61edbfc6791f4ef31e07080384d36c4f8b2d2b40b858e5463cae0b841fbee4bc3a30ef0eb20c60744402bc0db659ee2c9a3b2a8829cbf182b5c19d81a074d3621e0601a1c1bc41a741978f01be01a941bdec5b6618597e048e8f0a1ee450c69e7bee5907c106105e9202bfcd080eeb68ed2f205c9d2d686b50efe5260b9b32e838ac0c75a0a7c125f72f9610033c80a78cde3885de5bd8ac8980dae09a35974bad17aaf4e0b2bba9d3288375f560c9520f2f1bf753fa6c81f8625446d9dc5bf742acca339ff9ccea962949c0073ef0815a8f51f5006202f25940dc23f79515c4c07f946b5157e712844f13d72526e4ecb3cfae837a9b098d6199d6c09781004d0d0658d0b455038451b666fd0172dc9d59242576b0d0b2977a4bc00004dcb341fa6863dc5b01b66747d209b0040a4705429a0228490dda02d1d2c89bbcd096b91e8333ae903efdcaa53df090b65e2c8c63aced65d260541724d702b2b915bb07f4905d50dc520342dabad7261700b3fa740789743289632d35cfae840abc0800dd289328ad7de8db24a20074dab814f400b7f7da9b8bb8fb0ede24aed0a67caf7e16d3d64e409c94fadad8384008d4b5757d9167475645035120bad033237e4cbbf46cb494f9a3b4cb69ef1397d1e18a8ee3323abcb4c9f6d0b7cba2c9bbc41a79fa83796d2671f4a9c6107becb1479d80eeae8f38af7a39afb189c916fdac77b338cd61ef8c59d6d77883f78dfec55845ff39ca3b7516750a10060867d1aec62d334038ae6263ee0f64c0c895abae2b179e7f761d8c755de40c960c6058c40c82585c0c5e469d996f33e2dc1b4125ab9e811817b17e9bfd0dd68006ab409b15f3af9707b73b035903cc510651dd73003140095e0c24dff39ef754901a3610538697aac19b7fb91f8abb3283e7e5c612d5623f86c9effa584c6871d86187d597218ba3cc6cc3c0b4b9421a9803c9430f3db4bafcf91b30189c0e2ba35b3fb39f404c393400b762377b93080cba26d7e27c8ed53ec49f1aec5f7cf1c52303721bac9bb9969e9b154f7b041e2d61c1429ad2a4b91e6fbbedb6e5d8638fad7a805b29c34183ad1b7333a8ddb5207c83272024f39f8ffb3e6cebd60310826c9635c04117c063304473503128f6c5795c0f8832e9e1d903b7ee2d101a75533e6b184d59dc803a0ba5b6a30dab8b674cf9ea330834696a70e4d997b800f41b588e3a3069eddd7a65ea430fcf3f2b41773381a05ccf683f7d00a1d8599342c088cb2b30197562cab900ba32645834f833d8d23e7afb3275a68d7ba64dd0c87df33d0b21977165006370d6261d46b937cad01601611ba4bff9cd6faed03fac1f723e901f205c57e9580807b73eda9818f2ee15532d2be5bc36cf9d893a962fcf808933cfd472d8f43ff4d1af58bfd064e93c61d5242280a795718a89c451fbdd69eb19201cac685c46a7ddda069717209cb1d6dd18c20d7ee5a775fd9cde982996023365064700c0407d544b85ea1b4c7583cc3d4083caf0f2f2c20005bbefbe7b9d456fc1e340aa05ccabb7cf38f53048560f65b4d81d650c835be70049679c7146756595fcc2ec212b86ebf01935ceac5991b8c4b54c67dcc60c40875d8b9781594350ccedcda2b76df15f40ea5ac689efa2076d5b4c49bf325af07fbf66d8aca65e58dc90dc2f969496e0a0c15e83a5eef5f9ae05eefb9e1e6d60c0eadb02ecdbf9edd37b7c0bfe6fc0ee3a5a7a7565b0a4b2442b8365a9a5e476bffb69ad4edd24002d29034dbb29db7beb4147bf2b573b705f5b2201c7ba16830d9653931cbbedb65bfdddf9daa7abaff2bb65d0b9259318d646bae568e7f4683184ea419796c91734b37403be5e7ddbbd6b65b8c6762dc32cd9bdd7a20ccfae329a55b91b33eb3bf78925d5208c851684b5c18fba79d694d1e290e9316eccacb6e9f9a787fbe479f1ecf56aaa6edcd64d6c70316f1315ead9ad87e368daaf8c41ddb663e8d0925b28533d16ea539b0e26b3d42d318401c2718605fa0f1321de1d279d74525d1f705e1b203451d78090f7c1720142eee3269a783134209ca785d0e49d787393e7c6433c1c02843fae6dc758ccfb9cb716cbe93cb700e1d2a91f209cb1d6bdcb4e78c0fa6ddd81f93080ea3dbe0dfe5b67e6f84165187472a162a9f2b2e026d6b28c028051ca1824591b7cb7c1fd42f5e896613f4068b15b0bc202428bc13637b271f55076f75a0c1247054a2f758378965c5657961b9b320681ce424da8d5bdd5a71f18340b5c6f39be77bf0c667b13768cda6cbb65fbdbbd6970350c7e1aa0d85f1b696db4e9d092b1a8cb3899d65a7b75dc289a0202cf917318407441b569a41cf0d0b2e3755d61db75f6beec9b1571b1f7b6fbdc75cba00bf81247c8d26db1e8859e99eea480763aecbef47bfebb2ea6bd65f83f38657de4056030d69b85759c3e64d46b19f4fcbb9facfeacff5c65656265b16d903ca91ebdcfffa8fd90843b268e124318201cb57fb55f807034b5028483758a8570b03601c2d19eaf69ec15209c868a0b94916527860b6cc0c68d953b492f100e3f7aba7b74979de802e1386731a0f7f263b1529e0139b8b59e118ba38417ac3aad6d488ad2b53c1a1073e17bf2939f5c619026dc2a95cb8a23964fbc2840625105b106d6e29eda265e8c15866ba635abecc74a245e8b95a8a5f917f376cd35d7547719090858019d4b0651b186624dc1865853894bb8388a01b18f5831d7d400534c18ebb381b56bec260c50772e82aec5fde666d9d6885267b3b4ae0380bb961687c7155352101061a6dbf91d6b36b725fb694977cccc772d8266cbc5d238de4ba50b5a2c7b871c724805a351e328476d03cb75d909ae98e28ab852cee2ba47d5479b163fcafd593b11ffbc5c969d9018244018201cb52d070847572a4018201cbdb5fc72cf00e162545bdc3101c2c5e936f251cb7161fab60ea11883e5b20e212014d7269eab6b211c59e829ed388d85e9010fb798a38f3ebaba10caa4d89625e022c74a03de58235a0c834404cd820550b869803e716de79f7f7e7585f4710cc0fcc33ffcc30a6862232510112308c4da06f200b6784eaea6cae00ac71596d54a4ca2cd7e06e6e25e1c0fbc80e4a73ef5a9eafac87203a4c4c48128ed45864820c9c50ec00133d727a90bebd391471e59334776d3afd3449210ae28eacf2a047adb2606ce7568938e553e9742200b1cb9227295f53c39a7eb02858e61f95217f19edd0db88a0d144f0780baf5519ee425407796406809139f796e261bb84401426d0f10cee2ba47bdc62c4cbfb052492a33bc252da7a432b1100ebf5ff608100608476b296bef15205c8c6a8b3b2640b838dd463e6a3902a1c1b7042701c2756fe3b48010a8881795b5503ca44183c41662dd24bc9184c0c0d8d216e011443517466028c98f0f3003460048664c562f9968590a8186a41da04e2ca80c8f6d63899345d33d064b679d755685312e97c04fb6506ea0f6038ad67d740ed6340974d48d8552a2124008f6583bc50ab21efa3f574820a9dee0d14016a87297545637610020a4ad189b963808d0b50d18bb0e50472f500a5401a9c43ca090059295d3e4816b70cd604ff220202af6b3bbb916d76c20a20c71736d63a105d42dd670e4077a841dc5a159c280e53240b8ae6001c200e1088fd182bb0408fbcb9318c2d15b566208d7d5ca04766208476f43ebdb9e01c219dfd1e5e632da125e0408fbdff8690121f8132f0a6e241ce03ea9a3e546ca3d5326556074f8e18757d0916d935b698bf9b3bf9838e9b0c57f814bae9f06422007148249ae9b324b72051413da36e7626915230a082d23e0189006ae0e3ae8a0eabe0a08b9c8014216491003f8801fa86b6e9ddc3d2d57c24a681f1931c10e206c164249662474915db21f10b2faf90d1cbafe5e2094d556f6506eae1223b044b266aa178003128010b0b2ba024175e272084e6573ed6eb265ca74abcd2b47629ee636aace2d11cbb4bb8000e1c28a06080384933e7301c200e1a46d284018209cb40dad6fc70708677c47bb40b8c903ff731dc4f7268d601102003ed3765febbdbc00e1c2377c9a40683904ae996085650ecc581280fb228ba0760008cdeab2e0b5b5e1b401ee8d5c2500212b21b7c8e6560a7258e158f9c463011fae805d0b21206cae9480d079c52a5a1ac0f9c02528f45db3100234563940a36cfbb46425ea6a1026f90f58b3d039d8b476a6fa825b718be09715909b6a37835cb3109e78e28915ecb88c761770b656244b2920a40f4865bdb3fc4977c17be7907c08080242e7160bd8cf4208286965d653264b10d936750384b378de028401c2495e2b71191dae5e80304038bc952cbc4780304038691b5adf8e0f10cef88e7681f0ae1fde513358f666bc040206c1122bb084cc720b102e1d10823eae8a200758b1f4b1ae891f0463dc4859feb897b2b63597516d807b281747c748ac622d45f0a5ed9c7aeaa9d5a228060ea0399e85702120b4461ef752963fee9e12b8b435ef1a100224b18662fb58f0c499f56e2c922c9492c048f022a98c090df5f29bba813916c27e40086459177b93cab84620c59207d29c8305d3757733680260e7707ecb39a82b0be1209751d7cd3229e10c17dcb64966e2bb593c6f01c200e1247d788070b87a01c200e1f05612201c57a3b88c8eabd8fab57f8070c6f713105af4f4aacf5e5f565df9c99a10a37761fa9639d220b91be7348baa0508970608b971ca522a63a6ac9e20418c9cc42862dfb8927209b58ff6014e800f4b1cb74c6e9200d0a2dc32324a04229eaf41178b1c0b1937cd7e3184bd16426024a60e4489c163e5035162f4fcc665d4c484e54800abb225b1e90784ac8d2c972c785c4a01615bf6415d94cd32da0b8466642d12ce52ca52d98d3104890094b5cf4b49b65289725850bb9b67c7f9c555b6e43c838010008347aea8ca6ee75357a0ce9a29b9ccb4b700618070923615201cae5e80304038bc950408c7d5284038ae62ebd7fe01c219df4f4028c3df95abae2b1fb8e0bd6bd6dbea9ed6a05aa21131605db7b659542d40b8344028d909b8b1718d04720049d21520c3222c73271762f1862c862c8480b05908418cb663bd36d638c758af48b64e56476d465c20e0d96bafbdd6492ac302d892ca803eaea5c0923b2ab74bed0eb8295f02192ecbd6ce13c327414b3f20546740c68d559d805d5b76822b2a0063715cc84228732a2076fee63eed3abd8c5808b55150291e91eb6a2f107203158ba9eedb6fbf7dd579fffdf7ef9b54465db8998a756cf190a012f4c64278af59743143cb4c0ce1c21205088736a1eabeae8f101b2d4157efc4d1f012a6b747b28c8ea665b28c0ed629eb100ed6265946477bbea6b15780701a2a2e5046d742f86fff7acb5a83f6761800b03e9ca506ba569359542d40b87440c8cac6facbad91b5ca3d163bc71512944926632003b240598b216471f3b735d12450612db35c0497475639d93159f45812fdd60f08fb590841aaf35bfac2720cf66129f3fdeffeeeef5660bde8a28beaefeab5e9a69bae23560342f17e3282b278ab6f8b21e4b62a71cca01842bf013fc0d98d21b4e488983f563b1be8738d5c57bb0bca6bbf5c522d6c2e36926bed200b2100169ba96e5c72bb932d12f8b8dedec5eaa7f1ccc542b8b08a01c200e1a4cf5980b0bf82c9323a7acb4a0ce1ba5ac542387afb591ff70c10cef8ae76815052995e8b87d3b3b000009f5924b9e85e628070698090cbe811471c51e18dcba89837d93bb9055bcb0fe0812be0250ef0c31ffe70cd32daddbcdccf3befbc6a0564017bdce31e57f7612964bd732f59ebb895b210b206b60d30bdf18d6fac9644e0c45206fc58222d6c6fbd47606563990486ea24361174aa3beb5f1798b85ab2749a95b7c65fbf2ca39683903866d0b2132dcb2857d97ecb4e3437ced34e3badfe7edc71c7adb57e207757d64deeafe016700f02428009086d7416efb8145b80304038493b8b8570b87a01c200e1f056b2f01e01c200e1a46d687d3b3e4038e33bda4d2ab3d9831f50b34bce730b102e0d10720375af81114b1a9710700202811b7747318440c5920e92cd0c02426bf275b38cb62b30289215144c023a3181ad0cd00616c1121755ae9c0d08412ab753bf3b5e32a366edf37f1944fd5fa29a66b5646503a8cec96ac9ed937b675b8790db14aba1eb1d0684ca029cfd969d705e563f40a88ec71e7b6c8da56c1ba83ee59453aa5bad653dc03497517579e94b5fbad6cd6521644105b52662028459987ea1a7dfc40dabbc89126ed3b3b01e8fd2f7070887ab14200c100e6f2501c271358a85705cc5d6affd038433be9f59987eb8c02c4f2c3fdc0659aeac9ff794a73c651d401a5ed2e47b4c6bd9896bafbdb6420fd749b062132707a62432b1140517465946255439e18413d67219b50fb863e9936914108a79eb0e5241987504811d40625de3767cc71d775400049a32917251fd8bbff88b0a840091b60654ca7dcd6b5e53add2c014a4d29f95903beade7bef5ddd476d2c823ecabaf2ca2b6ba6d2b646605b981e10b210b2028a95ec5d985eb64fb00808c19cf518db06fcb8beb284aa9fa431dc68b9a48aade5be0aa6ad9f0958259c61fde48acb52299e92bbaab664a39f043ef4a683443e2ca06d03ba06fd5c77a73df08f8570e1e7302ea30beb13201cde8f07080384c35b4980705c8d0284e32ab67eed1f209cf1fd0c100e17787d0442f005e2581d58bdc091b5f3244311bbf7a4273da95aee00120b2057d2e62eec5fee9a0010fc5c76d96515a0da3a844d51badd7aebad159c80214b9f7845963cf00692ac150884defef6b7577802a2ceed58500744652ae54aaa3e2c6ee208258d01559667b0813df56285e48a29518b2554b89f024270ea9cac9fd60e9410a637cbe837bff9cd62bd41495dc457bac6b6a9078806b58e55d639e79c5321567655d950e9c7cd4742188924d48d25968510c072a96d197c591fc13178e55e0abebb80eada24f491b867da6eda01c200e1f05e6ff01e01c2e1ea05080384c35b4980705c8d0284e32ab67eed1f201cf37e7eef7bdf2f279ff2ce72e79ddf2df7dd70c372d04bf62b5b6cf1cb05af7b8b0b100e17787d0342993359c358a764e2047b2c782c63067bd6dc639562450372005186cfb6f90dd0583390950b1472dff45daf354b07cec208e0ac47282317eb17374bd649ee9796b360690464ca0458eaa86db2128a7704ae0deeec676908163be50126193a5d078b1dc092314ed297473ffad16b16a607a70017ac397f7337755dce27fe503ddc6fd6c8ee3a87b29b72ab95edd439401528b4bff3f9bfd84630e81ac0204dbff18d6f54173f56d1ee7a85b4928194dba9e359a5bada0142165c8bde0708873fa3d3dc2316c285d50c100e6f6d01c200e1f05612201c57a300e1b88aad5ffb0708c7b89f77dffde372fabbce2e8f79cca3caaebb3caddc78e397ca072ff95839fc30c92dfaaf67b61c81f01def78475d6f8e354782938d37de780c15a6bfebfa0684140230dc6059a5e8dba0c3609815ce355b73521c21e86bae8e8e052e5c1965150591dffbdef7eabe80a8170881967329137001389639a0e3981653c86d5267af2ecd72e79ccead0e92d48024f51467ea7b90a5fdface6fca733dbe5396ef409f3a813156420026e98dbaf6829672d5439d01661718d5df204f9218d6be765d34948d956eca5436f7d1e6eae97b16511a285f5d582cd553fd7c471375eb6ef61153d8ea3fcd564d9be38f3fbe2ee1c19dd5679e9b36c45df99863964f0ca14449e255813d3766d6ed796fcb3186501c729ba899a73e9e1faee962725ba22afdd3bcb62e107a87f54bd6b65475a38df55d6fb9e596ea2ecfb3635e9bbed23d32d1c8e59fbbbd7e73396ccb79d90913a3bd49d4965233139b3c6bbcc7244be3c5d39d245eaaba0408974ae9e5799e00e118f7e59bdffc5639f7fc8bcb4107ee5701b001e2539ebc53d9669badfa96b4dc92ca181c8a2fe316e885b15c8010108873632d1343c852d49b64658c5bb5e85dbdd46962802a136637a1c9a20b5de481cd8a27ae11000198855e12dc25dd5fb0d3b5962df2f415ca1aa8f62b0f6871e304615c55d57116db28d76580c8520af05845e7f1326dd76e800808c53b7ab95bfb719e9b3661c00308c552721b06f7d3b68c8e7a8d20fea31ffd6805c2adb6daaa2603e2123cef4d5caa89106b766ebdf5d6538f2d1df5fa58082555e21e7dd451475557f1693ccfa39ebfdf7e9e4140283116203499384f203470e5527ec61967548f847902a13ed23ba301a138eb796d80902edea3b24bcb3e3deba5ac46bd56402843b4f0037d9090866e58c1a8e54c6b3f9e30b258cb002e6cc33248f3ea1385600042edda3b43b2b679bcc39c5f1e01cf95495b5e344b958c6dd07df56effce777f525e76c87ef51d26f63fdb6c1408108ea12b8be0f5377ea9ecfb8267af39eaec73ce2b9b6ff6906a31ecb77581f0fef75d9dfebe2dc63dc6a9a7b6abc1a135deb8e27129f4c2609599e7e685ca726420268ba4d82e1d62d782b454f50338e2e9c4dd894de3a238afcdbd0283ee15ab98fbc57a3668ebb6ab69254a5166bfb27caf6e5c55bd446517edba804e53b361d7d5dc510d560d520d565907a7a5c1b8d7c22a2956f2e31fff781d3cb31ecc73339837e879cb5bde52e3330d5e01e1bcf4f18237003329c57d79bffdf6ab16ed796f06d0acf1ac3ce251e7a58f890d6d99b5ddfb62bbedb69b3b10ea8b00bc65704c2472619fa767094bca85175e58eb6492a325ee9a471bf27c99d4f0ee78fdeb5f5f5ddee7b5f11211aab06ad5aa1a13ae5f9e277475759014cc3b5e866ab1e29287cd6a127114fd3d5f32565bb6e9fcf3cfaf71e6f30242933f279d74520542ef8c1d76d8a14eec2ef5e6dd650c26b11cafa1430f3d74adf57b97ba3ecee77d51fef326e5e57fba7f39fae8a3038433bc0901c231c4bdf4139f2eb7ddfe9d4503e1d7fefefaf2f4a73f7dae40e8e5e5656196ce4c0b0b9858ac796e06f43ffce10febcc94993233873250ce63561c984ad20292c5c8cdd395cdbd32c89018c5e04b0c1ff79f794e2874db8917aa38432f515acdd362c0c2cc0d1a08829e79ba49b96f1201b1f4701f9ba7c5c0fdd25e0cc2b88db2c8a9cf42130bb3ee0b58502532923008089afc99f7a4946b362b6ef0215bed3c2d9606cefa687d9178d9795a2e5a5b306977cd35d7d47863c00352e73998d786d445222ab1c296d299d7461bef0cd6659376bc25e6b5f1daa00b1744f1ebdef1f39858edbd7e932b4213bce35931b941cb603d0f2b58ab9bfb6542d3988317078bd8bc36ef2f9364265ebc3324449b079c7a77d1c3b36e2261deef75f703a43e77df83cbe107ef5b2d84da75b6d92810201c43d7c55808818e041d7f7bd967cb55577ca25a7ae6b9191cea08bd380c9e7de6015e5d0dd44947a45edcc974cc3aa37974883a1f316966e7d4639eb06ca06180ea65e1c5c9aa338f59c37eedd53d533783565b375e71a9dbb7bab86f5c92e8c45249a77959789ac5db3306e4cdb4ce736b132e624281b23a79e6e7a90fcf0903446ee1ea33cf8161bb372638f4432055bde6a50f2b81be10f4e88366b134cab8ed511bb246230b2a789ff77bc333a62e3eea32cfc928dae87b0ce6c538cf13945bccb9f7a8499f16173eeefd9ec5feead68d65e7ca3a8f777cbb36cf780b437000000de149444154973ed17bec610f7b58ed83e6f5cc7b7fa98bb6d4e2fce7519736e6f0ac7b4778aee63da1a04e679e735179d36b5f515dc3b7dc72cb5934cf94297fc5cf978bb96105dc0e4078f9675695030fd8b76cb8e1060363080f3b7cbe8bcfaf002953c5281005a24014880251200a448128305481ad7ffb37eafac3f3f4da1a5ac915be4380708c1bd89b44a61710fb1565c6d92ce6ebdf706279ce3ebb8f71b6d9edda9d795a4ef301ad5ef3aed372a9476b01ea336f4d06b5c6e5a455eab2709fb19cf451d3d467f0fd5a6eda74ef97bf974b7fb45c745a2ef558aef7a9fb2e5b4eeda7e9b51cdaf3726c43cb4117f7e8dcf33f540e79e97e1506974b4cecec46e8f32b394038a6f6328d9ef6ceb3ca5d77df5d36d964e305979ce816cd6a78cac9c78d79b6ec1e05a24014880251200a4481281005ee990a64fcbc34f73d40b8343a9734e825123aa7890251200a4481281005a24014582f14c8f879696e63807069740e102e91ce394d14880251200a4481281005a2c0faa140807069ee6380706974ce59a2401488025160052820abdd3cb31fae008952c5281005a2401458cf140810ae673734971305a24014880251200a4481410a64d2236d230a44815e050284691351200a4481281005a24014b807282073a44face0f7809b9d4b8c02632810201c43acc5ec7ae9273e5d3e7ee9a7eaa1db6df7f8b2ef0b9ebd9862724c14880251200a448128100526560010ce63e1f3892b9e02d66b052ce5f69eb3ffba5ee37d37dcb01cf492fdca165b3cbcfeff7bdffb7e39f99477963beffcee3abfadd7a22ce1c505086728b6c6fdc14b3e5697a6d860830dcae9ef3abb3ce6318f2abbeef2b4199e35454781281005a24014880251200a448195a100e0335e7ef6de7b940d37dca02c347eeefef6c0076eb4322e7005d4324038c39b74f639e795cd377bc81a001c6521fb195627454781281005a24014880251200a448165ad00403cedf4b3ca73f6d9b3d6f3dcf32f2e071db85f018077dffde36a6079ca93772adb6cb3d5b2be8e9554b900e18cee9606fbde73ce2dbbeef23fd798bc2d6adf6dd4333a758a8d0251200a4481281005a2401488022b5281ae15f0e69b6f29d7dff8a5b542ae7a0d2e2bf2229759a5038433ba21ddd98de6031d209c91d829360a4481281005a2401488025160c52b60ac7cda3bcf2acf79f69ed5022817c76db77f274038e33b1b209c91c0b110ce48d8141b05a24014880251200a448128b0de2900fe2ebffcaab512cab016c64238fb5b1d209c91c6fd7c9c13433823b1536c14880251200a4481281005a2c08a55801ba8ad371b7fefd8393184b3b9c501c2d9e85a4bed3662ff4f10ec0cc54ed151200a4481281005a2401488022b4e818542aa7a0130c695d9dcde00e16c745d53aa198febafff42fdffefeffa7b597262c67aa7f8281005a24014880251200a448195a340770dc26eadf7dff7b9358eb0c515de75f7dd65934d36aecbb965c989e9dedf00e174f54c6951200a4481281005a24014880251200a448115a3408070c5dcaa54340a44812830b902ab56ad2a4f7ad2930616f4bef7bdaf3ce2118f58679f6db6d9a69c7ffef9e5318f794cf9b77ffbb7f2bce73daf7ce2139f5853ce81071e588e3efae8f2a217bd68adefbb27b2cfc9279f5cee7bdffbd6affb95d3bbff71c71d578e3cf2c872cd35d7ac39fffbdffffef2fce73fbfeeda5ba6efdef0863794638e39a6feee7ad475d0b9daef830469655d76d965e5820b2e28a79f7efa5ae5b6e3bae577b56a7a1f7becb1559fee7ebde7feea57bf5af6d9679fb2e38e3b569d6eb9e596faffcd37dfbcb8e6073de841f5746d3fdfbffbddefaed7dbead57b1dbbecb2cbc07dd4c946ababaebaaaecb4d34e9337b0941005a2401488022b4e8100e18abb65a9701488025160f10a4c0a849b6ebae93a30d8c06c1e40d885af7e9039091082b0134e38a182e8affffaaf97c30f3f7c0d78f5826857d75181b0b7eef30042f70c50aa7f173a17dfc2726414880251200aac340502842bed8ea5be51200a44812929d02c6dcd7ad58aedb56a754fd77e6379ea02c425975c5276de79e735d6bfae156b14d018b4ff5d77dd5541ac9f8590f50cac752d6dad7ebdbf35cb9c6b19a73e7bedb557b5ec75ebb1d9669b95db6fbf7d8dc55299a0eaa28b2e2abdbf2d64216c20ddaca68b01c2eeb5b46bbcedb6dbd6aa5b3f0dbbf7b49db75deb949a578a890251200a448115a240807085dca854330a448128306d052601427559c8dd722980909be4a9a79ebac6c5922b6a033370cabad76b211c15089b36cd95b241d5cd37df5cc0f0cb5ef6b275cade64934dea2dfaca57beb206c80601a1fdb8e6ba8656c7790161f7da4681e569b7c3941705a240148802f3552040385ffd73f6281005a2c0dc14180684dd8a752d82dd183dfbf45a187db71440f8c94f7eb25ae59af5b0b9b302adedb7dfbec6170e7319ed173bd70f90badfb1181e7cf0c16b40f4baebaeab3197e0cedf5d6be64240f8b6b7bdad1c7ae8a1a559f4e8366e0ce13816c2de38c32ed077dd63c589668b0251200a44817b8e0201c27bcebdce954681281005d65260b140a890de58c4de98baa5004230c76227c14c37194eeff70b2595e90784cdf512583677ce2e109e79e699e58d6f7ce31af0936c861ebddf03ab858090fe7ffff77f5f61927e2f79c94bcabefbee3b5652996902211d935c269d4414880251e09ea74080f09e77cf73c551200a4481aac03020ec97c1b357ba067e37de78e35a30b15440c82ad8ac6a1b6db451f9c217be50afebd24b2f5d038a5d20ec8dafebd714860161b7fc934e3aa9665595a1f315af78c53af18ec38050e6d066717de52b5f59583d5b96d11ffde84735814f6f9d7b5d4b7bb3b60e8a2164211c047cbd2eb27944a24014880251e09ea34080f09e73af73a551200a4481b12c84fd8010e0d8da1205dd6514bab0b15440c835b49bfdb3b9af36c0e975191d050887b98c2afb8e3beea8200a846daebdd5655497d166ddeb5d12a3e9aedc766d5db7dc0690bdaebac392ca0408d3014481281005a2403f050284691751200a44817ba802c32c84bdb20c5aa3d07ebd5947970a088169775dc206a58380b0bb76a27a0fb282b6e4346dedc55e48bcdffdeeb706d6dab5b7efc60542f5e8bae076ebd4bdb6eefde85db2c26fa30061b78cde7a73bf4d52997b686790cb8e0251e01ead4080f01e7dfb73f151200adc9315580c10eebaebae7d17a5ef2e384fd3a504c27ee79a14087b9762e86735ecd5afdff20ea3b88cb636d82c7f0bad7168df7e30380910366b67969db827f706b9f6281005eec90a0408efc9773fd71e05a2401488020315e8b512aeaf52dd53ae737dbd7fb9ae281005a2c0a40a0408275530c74781281005a2c07aa9c0b88bd9af44117a2da92bf11a52e7281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c8100e164fae5e8281005a24014880251200a4481281005a2c08a552040b8626f5d2a1e05a24014880251200a4481281005a24014984c81ff0f721bad30fe6546900000000049454e44ae426082, 'Site Inves', '', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-16', '2023-10-16', 'N/A', 'PH', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `point_load_test`
--

CREATE TABLE `point_load_test` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Cutter_Equipment` varchar(30) NOT NULL,
  `Extraction_Equipment` varchar(30) NOT NULL,
  `Test_Device` varchar(30) NOT NULL,
  `Temperature` varchar(30) NOT NULL,
  `Effective_Area_of_Jack_Piston_m2` float DEFAULT NULL,
  `K1_Value_Assumed_Value_To_Correlate_Is50_To_UCS` float DEFAULT NULL,
  `K2_Value_Assumed` float DEFAULT NULL,
  `Test_Type_A_B_C_D` varchar(3) NOT NULL,
  `Dimension_L_mm` float DEFAULT NULL,
  `Dimension_D_or_W_mm` float DEFAULT NULL,
  `Plattens_Separation_mm` float DEFAULT NULL,
  `Load_Direction` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Gauge_Reading_Mpa` float DEFAULT NULL,
  `Failure_Laod_MN` float DEFAULT NULL,
  `De_mm` float DEFAULT NULL,
  `Is_Mpa` float DEFAULT NULL,
  `F` float DEFAULT NULL,
  `Is_50` float DEFAULT NULL,
  `UCS_From_K1_Mpa` float DEFAULT NULL,
  `UCS_From_K2_Mpa` float DEFAULT NULL,
  `Strenght_Classification` varchar(18) NOT NULL,
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
  `Specimen_Before_Test` mediumblob NOT NULL,
  `Specimen_After_Test` mediumblob NOT NULL,
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `point_load_test`
--

INSERT INTO `point_load_test` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Cutter_Equipment`, `Extraction_Equipment`, `Test_Device`, `Temperature`, `Effective_Area_of_Jack_Piston_m2`, `K1_Value_Assumed_Value_To_Correlate_Is50_To_UCS`, `K2_Value_Assumed`, `Test_Type_A_B_C_D`, `Dimension_L_mm`, `Dimension_D_or_W_mm`, `Plattens_Separation_mm`, `Load_Direction`, `Gauge_Reading_Mpa`, `Failure_Laod_MN`, `De_mm`, `Is_Mpa`, `F`, `Is_50`, `UCS_From_K1_Mpa`, `UCS_From_K2_Mpa`, `Strenght_Classification`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Specimen_Before_Test`, `Specimen_After_Test`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-100', 'G1', 'ASTM-D4318', 'Diametral', 'MK - 5007T BLK', 'N/A', 'ROCTEST PIL-10', '', 0.001435, 15, 21, 'A', 46.03, 60.64, 60.64, '⊥', 23.23, 0.033, 60.64, 9.065, 1.091, 9.888, 148.313, 207.638, 'Very High', 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '', '', '2023-10-11', '2023-10-10', '2023-10-11', '? Load Direction perpendicular to plane of weakness.', 'PLT', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `Marca_Modelo` varchar(50) NOT NULL,
  `Codigo` varchar(125) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` decimal(25,2) DEFAULT NULL,
  `categorie_id` int(11) UNSIGNED NOT NULL,
  `media_id` int(11) DEFAULT 0,
  `date` datetime NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sand_density`
--

CREATE TABLE `sand_density` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Weight_Sand_Mold_1` float DEFAULT NULL,
  `Weight_Sand_Mold_2` float DEFAULT NULL,
  `Weight_Sand_Mold_3` float DEFAULT NULL,
  `Mold_1` float DEFAULT NULL,
  `Mold_2` float DEFAULT NULL,
  `Mold_3` float DEFAULT NULL,
  `Weight_Mold_1` float DEFAULT NULL,
  `Weight_Mold_2` float DEFAULT NULL,
  `Weight_Mold_3` float DEFAULT NULL,
  `Weight_Sand_In_Mold_1` float DEFAULT NULL,
  `Weight_Sand_In_Mold_2` float DEFAULT NULL,
  `Weight_Sand_In_Mold_3` float DEFAULT NULL,
  `Volume_Mold_cm3_1` float DEFAULT NULL,
  `Volume_Mold_cm3_2` float DEFAULT NULL,
  `Volume_Mold_cm3_3` float DEFAULT NULL,
  `Bulk_Density_Sand_gcm3_1` float DEFAULT NULL,
  `Bulk_Density_Sand_gcm3_2` float DEFAULT NULL,
  `Bulk_Density_Sand_gcm3_3` float DEFAULT NULL,
  `Average_Bulk_Density_Sand` float DEFAULT NULL,
  `Weight_Sand_Container_Before_Test_1` float DEFAULT NULL,
  `Weight_Sand_Container_Before_Test_2` float DEFAULT NULL,
  `Weight_Sand_Container_Before_Test_3` float DEFAULT NULL,
  `Weight_Sand_Container_After_Test_1` float DEFAULT NULL,
  `Weight_Sand_Container_After_Test_2` float DEFAULT NULL,
  `Weight_Sand_Container_After_Test_3` float DEFAULT NULL,
  `Weight_Sand_Used_1` float DEFAULT NULL,
  `Weight_Sand_Used_2` float DEFAULT NULL,
  `Weight_Sand_Used_3` float DEFAULT NULL,
  `Bulk_Density_of_Sand_1` float DEFAULT NULL,
  `Bulk_Density_of_Sand_2` float DEFAULT NULL,
  `Bulk_Density_of_Sand_3` float DEFAULT NULL,
  `Volume_Funnel_1` float DEFAULT NULL,
  `Volume_Funnel_2` float DEFAULT NULL,
  `Volume_Funnel_3` float DEFAULT NULL,
  `Average_Volume_Funnel` float DEFAULT NULL,
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
-- Volcado de datos para la tabla `sand_density`
--

INSERT INTO `sand_density` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Weight_Sand_Mold_1`, `Weight_Sand_Mold_2`, `Weight_Sand_Mold_3`, `Mold_1`, `Mold_2`, `Mold_3`, `Weight_Mold_1`, `Weight_Mold_2`, `Weight_Mold_3`, `Weight_Sand_In_Mold_1`, `Weight_Sand_In_Mold_2`, `Weight_Sand_In_Mold_3`, `Volume_Mold_cm3_1`, `Volume_Mold_cm3_2`, `Volume_Mold_cm3_3`, `Bulk_Density_Sand_gcm3_1`, `Bulk_Density_Sand_gcm3_2`, `Bulk_Density_Sand_gcm3_3`, `Average_Bulk_Density_Sand`, `Weight_Sand_Container_Before_Test_1`, `Weight_Sand_Container_Before_Test_2`, `Weight_Sand_Container_Before_Test_3`, `Weight_Sand_Container_After_Test_1`, `Weight_Sand_Container_After_Test_2`, `Weight_Sand_Container_After_Test_3`, `Weight_Sand_Used_1`, `Weight_Sand_Used_2`, `Weight_Sand_Used_3`, `Bulk_Density_of_Sand_1`, `Bulk_Density_of_Sand_2`, `Bulk_Density_of_Sand_3`, `Volume_Funnel_1`, `Volume_Funnel_2`, `Volume_Funnel_3`, `Average_Volume_Funnel`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM D1556', 'Oven_Dried', 'Mech_Split', 9722, 9722, 9722, 10, 10, 10, 6544, 6544, 6544, 3178, 3178, 3178, 2120, 2120, 2120, 1.49906, 1.49906, 1.49906, 1.4991, 7188, 7186, 7186, 5494, 5492, 5494, 1694, 1694, 1692, 1.499, 1.499, 1.499, 1130.09, 1130.09, 1128.75, 1129.64, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-12', 'N/A', 'Sand-Densi', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specific_gravity`
--

CREATE TABLE `specific_gravity` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Pycnometer_Used_mL` varchar(10) NOT NULL,
  `Pycnometer_Number` varchar(10) NOT NULL,
  `Test_Temp_Tt_C` float DEFAULT NULL,
  `Ave_Calibrated_Mass_Dry_Pycnometer_Mp_gr` float DEFAULT NULL,
  `Ave_Calibrated_Volume_Pycnometer_Vp_mL` float DEFAULT NULL,
  `Density_Water_Test_Temp_gmL` float DEFAULT NULL,
  `Calibration_Weight_Pynometer_Water_Calibration_Temp_Mpwc_gr` float DEFAULT NULL,
  `Weight_Dry_Soil_Tare_gr` float DEFAULT NULL,
  `Weight_Dry_Soil_Ms_gr` float DEFAULT NULL,
  `Weight_Pycnometer_Soil_Water_Mpwst_gr` float DEFAULT NULL,
  `Specific_Gravity_Soil_Solid_Test_Temp_Gt` float DEFAULT NULL,
  `Temperature_Coefficent_K` float DEFAULT NULL,
  `Specific_Gravity_Soil_Solid` float DEFAULT NULL,
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
-- Volcado de datos para la tabla `specific_gravity`
--

INSERT INTO `specific_gravity` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Pycnometer_Used_mL`, `Pycnometer_Number`, `Test_Temp_Tt_C`, `Ave_Calibrated_Mass_Dry_Pycnometer_Mp_gr`, `Ave_Calibrated_Volume_Pycnometer_Vp_mL`, `Density_Water_Test_Temp_gmL`, `Calibration_Weight_Pynometer_Water_Calibration_Temp_Mpwc_gr`, `Weight_Dry_Soil_Tare_gr`, `Weight_Dry_Soil_Ms_gr`, `Weight_Pycnometer_Soil_Water_Mpwst_gr`, `Specific_Gravity_Soil_Solid_Test_Temp_Gt`, `Temperature_Coefficent_K`, `Specific_Gravity_Soil_Solid`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-100', 'G1', 'ASTM-D854', 'Oven Dried', 'Mech. Split', '250 ml', 'B', 20.6, 88.3, 292.58, 0.99808, 337.06, 133.34, 45.04, 365.39, 2.7, 0.99987, 2.7, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-17', '2023-10-11', 'Pass', 'SG', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specific_gravity_absortion`
--

CREATE TABLE `specific_gravity_absortion` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Inch5_Wt1` float NOT NULL,
  `Inch5_Wt2` float NOT NULL,
  `Inch5_Wt3` float NOT NULL,
  `Inch4_Wt1` float DEFAULT NULL,
  `Inch4_Wt2` float DEFAULT NULL,
  `Inch4_Wt3` float DEFAULT NULL,
  `Inch3p5_Wt1` float DEFAULT NULL,
  `Inch3p5_Wt2` float DEFAULT NULL,
  `Inch3p5_Wt3` float DEFAULT NULL,
  `Inch3_Wt1` float DEFAULT NULL,
  `Inch3_Wt2` float DEFAULT NULL,
  `Inch3_Wt3` float DEFAULT NULL,
  `Inch2p5_Wt1` float DEFAULT NULL,
  `Inch2p5_Wt2` float DEFAULT NULL,
  `Inch2p5_Wt3` float DEFAULT NULL,
  `Inch2_Wt1` float DEFAULT NULL,
  `Inch2_Wt2` float DEFAULT NULL,
  `Inch2_Wt3` float DEFAULT NULL,
  `Inch1p5_Wt1` float DEFAULT NULL,
  `Inch1p5_Wt2` float DEFAULT NULL,
  `Inch1p5_Wt3` float DEFAULT NULL,
  `Inch1_Wt1` float DEFAULT NULL,
  `Inch1_Wt2` float DEFAULT NULL,
  `Inch1_Wt3` float DEFAULT NULL,
  `Inch3p4_Wt1` float DEFAULT NULL,
  `Inch3p4_Wt2` float DEFAULT NULL,
  `Inch3p4_Wt3` float DEFAULT NULL,
  `Inch1p2_Wt1` float DEFAULT NULL,
  `Inch1p2_Wt2` float DEFAULT NULL,
  `Inch1p2_Wt3` float DEFAULT NULL,
  `Inch3p8_Wt1` float DEFAULT NULL,
  `Inch3p8_Wt2` float DEFAULT NULL,
  `Inch3p8_Wt3` float DEFAULT NULL,
  `InchNo4_Wt1` float DEFAULT NULL,
  `InchNo4_Wt2` float DEFAULT NULL,
  `InchNo4_Wt3` float DEFAULT NULL,
  `InchTotal_Wt1` float DEFAULT NULL,
  `InchTotal_Wt2` float DEFAULT NULL,
  `InchTotal_Wt3` float DEFAULT NULL,
  `Specific_Gravity_OD` float DEFAULT NULL,
  `Specific_Gravity_SSD` float DEFAULT NULL,
  `Apparent_Specific_Gravity` float DEFAULT NULL,
  `Percent_Absortion` float DEFAULT NULL,
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
  `test_type` varchar(20) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `specific_gravity_absortion`
--

INSERT INTO `specific_gravity_absortion` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Inch5_Wt1`, `Inch5_Wt2`, `Inch5_Wt3`, `Inch4_Wt1`, `Inch4_Wt2`, `Inch4_Wt3`, `Inch3p5_Wt1`, `Inch3p5_Wt2`, `Inch3p5_Wt3`, `Inch3_Wt1`, `Inch3_Wt2`, `Inch3_Wt3`, `Inch2p5_Wt1`, `Inch2p5_Wt2`, `Inch2p5_Wt3`, `Inch2_Wt1`, `Inch2_Wt2`, `Inch2_Wt3`, `Inch1p5_Wt1`, `Inch1p5_Wt2`, `Inch1p5_Wt3`, `Inch1_Wt1`, `Inch1_Wt2`, `Inch1_Wt3`, `Inch3p4_Wt1`, `Inch3p4_Wt2`, `Inch3p4_Wt3`, `Inch1p2_Wt1`, `Inch1p2_Wt2`, `Inch1p2_Wt3`, `Inch3p8_Wt1`, `Inch3p8_Wt2`, `Inch3p8_Wt3`, `InchNo4_Wt1`, `InchNo4_Wt2`, `InchNo4_Wt3`, `InchTotal_Wt1`, `InchTotal_Wt2`, `InchTotal_Wt3`, `Specific_Gravity_OD`, `Specific_Gravity_SSD`, `Apparent_Specific_Gravity`, `Percent_Absortion`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-100', 'G1', 'ASTM-D854', 'Air_Dried', 'Man_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3569.3, 3609.11, 2.298, 2464.5, 2493.04, 1583.79, 1515.6, 1533.88, 970.15, 1431.4, 1485.64, 941.4, 8980.8, 9121.67, 3497.64, 1.6, 1.62, 1.64, 1.57, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-11', 'Pass', 'SG-Absortion', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specific_gravity_fine`
--

CREATE TABLE `specific_gravity_fine` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Preparation_Method` varchar(20) NOT NULL,
  `Split_Method` varchar(20) NOT NULL,
  `Pycnometer_Number` varchar(10) NOT NULL,
  `Weight_Pycnometer` float DEFAULT NULL,
  `Weight_Dry_Soil_Tare` float DEFAULT NULL,
  `Weight_Dry_Soil` float DEFAULT NULL,
  `Weight_Saturated_Surface_Dry_Soil_Air` float DEFAULT NULL,
  `Temp_Sample` float DEFAULT NULL,
  `Weight_Pycnometer_Soil_Water` float DEFAULT NULL,
  `Calibration_Weight_Pycnometer_Desired_Temp` float DEFAULT NULL,
  `Specific_Gravity` float DEFAULT NULL,
  `Specific_Gravity_SSD` float DEFAULT NULL,
  `Apparent_Specific_Gravity` float DEFAULT NULL,
  `Percent_Absortion` float DEFAULT NULL,
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
-- Volcado de datos para la tabla `specific_gravity_fine`
--

INSERT INTO `specific_gravity_fine` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Pycnometer_Number`, `Weight_Pycnometer`, `Weight_Dry_Soil_Tare`, `Weight_Dry_Soil`, `Weight_Saturated_Surface_Dry_Soil_Air`, `Temp_Sample`, `Weight_Pycnometer_Soil_Water`, `Calibration_Weight_Pycnometer_Desired_Temp`, `Specific_Gravity`, `Specific_Gravity_SSD`, `Apparent_Specific_Gravity`, `Percent_Absortion`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-100', 'G1', 'ASTM-D854', 'Air_Dried', 'Man_Split', 'B', 175.86, 253.49, 77.63, 120.07, 20, 723.3, 673.94, 1.1, 1.7, 2.75, 54.67, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-17', '2023-10-11', 'Pass', 'SG-Fines', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `splitting_tensile_strenght`
--

CREATE TABLE `splitting_tensile_strenght` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Cutter_Equipment` varchar(30) NOT NULL,
  `Extraction_Equipment` varchar(30) NOT NULL,
  `Test_Device` varchar(30) NOT NULL,
  `Diameter_D_cm_No1` float DEFAULT NULL,
  `Diameter_D_cm_No2` float DEFAULT NULL,
  `Diameter_D_cm_No3` float DEFAULT NULL,
  `Diameter_D_cm_No4` float DEFAULT NULL,
  `Diameter_D_cm_No5` float DEFAULT NULL,
  `Diameter_D_cm_No6` float DEFAULT NULL,
  `Diameter_D_cm_No7` float DEFAULT NULL,
  `Diameter_D_cm_No8` float DEFAULT NULL,
  `Diameter_D_cm_No9` float DEFAULT NULL,
  `Diameter_D_cm_No10` float DEFAULT NULL,
  `Thicness_t_cm_No1` float DEFAULT NULL,
  `Thicness_t_cm_No2` float DEFAULT NULL,
  `Thicness_t_cm_No3` float DEFAULT NULL,
  `Thicness_t_cm_No4` float DEFAULT NULL,
  `Thicness_t_cm_No5` float DEFAULT NULL,
  `Thicness_t_cm_No6` float DEFAULT NULL,
  `Thicness_t_cm_No7` float DEFAULT NULL,
  `Thicness_t_cm_No8` float DEFAULT NULL,
  `Thicness_t_cm_No9` float DEFAULT NULL,
  `Thicness_t_cm_No10` float DEFAULT NULL,
  `Relation_td_No1` float DEFAULT NULL,
  `Relation_td_No2` float DEFAULT NULL,
  `Relation_td_No3` float DEFAULT NULL,
  `Relation_td_No4` float DEFAULT NULL,
  `Relation_td_No5` float DEFAULT NULL,
  `Relation_td_No6` float DEFAULT NULL,
  `Relation_td_No7` float DEFAULT NULL,
  `Relation_td_No8` float DEFAULT NULL,
  `Relation_td_No9` float DEFAULT NULL,
  `Relation_td_No10` float DEFAULT NULL,
  `Loading_Rate_KNs_No1` float DEFAULT NULL,
  `Loading_Rate_KNs_No2` float DEFAULT NULL,
  `Loading_Rate_KNs_No3` float DEFAULT NULL,
  `Loading_Rate_KNs_No4` float DEFAULT NULL,
  `Loading_Rate_KNs_No5` float DEFAULT NULL,
  `Loading_Rate_KNs_No6` float DEFAULT NULL,
  `Loading_Rate_KNs_No7` float DEFAULT NULL,
  `Loading_Rate_KNs_No8` float DEFAULT NULL,
  `Loading_Rate_KNs_No9` float DEFAULT NULL,
  `Loading_Rate_KNs_No10` float DEFAULT NULL,
  `Time_To_Failure_s_No1` float DEFAULT NULL,
  `Time_To_Failure_s_No2` float DEFAULT NULL,
  `Time_To_Failure_s_No3` float DEFAULT NULL,
  `Time_To_Failure_s_No4` float DEFAULT NULL,
  `Time_To_Failure_s_No5` float DEFAULT NULL,
  `Time_To_Failure_s_No6` float DEFAULT NULL,
  `Time_To_Failure_s_No7` float DEFAULT NULL,
  `Time_To_Failure_s_No8` float DEFAULT NULL,
  `Time_To_Failure_s_No9` float DEFAULT NULL,
  `Time_To_Failure_s_No10` float DEFAULT NULL,
  `Max_Load_kN_No1` float DEFAULT NULL,
  `Max_Load_kN_No2` float DEFAULT NULL,
  `Max_Load_kN_No3` float DEFAULT NULL,
  `Max_Load_kN_No4` float DEFAULT NULL,
  `Max_Load_kN_No5` float DEFAULT NULL,
  `Max_Load_kN_No6` float DEFAULT NULL,
  `Max_Load_kN_No7` float DEFAULT NULL,
  `Max_Load_kN_No8` float DEFAULT NULL,
  `Max_Load_kN_No9` float DEFAULT NULL,
  `Max_Load_kN_No10` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No1` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No2` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No3` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No4` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No5` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No6` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No7` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No8` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No9` float DEFAULT NULL,
  `Tensile_Strength_Mpa_No10` float DEFAULT NULL,
  `Failure_Type_No1` varchar(30) NOT NULL,
  `Failure_Type_No2` varchar(30) NOT NULL,
  `Failure_Type_No3` varchar(30) NOT NULL,
  `Failure_Type_No4` varchar(30) NOT NULL,
  `Failure_Type_No5` varchar(30) NOT NULL,
  `Failure_Type_No6` varchar(30) NOT NULL,
  `Failure_Type_No7` varchar(30) NOT NULL,
  `Failure_Type_No8` varchar(30) NOT NULL,
  `Failure_Type_No9` varchar(30) NOT NULL,
  `Failure_Type_No10` varchar(30) NOT NULL,
  `Average_No1` float DEFAULT NULL,
  `Average_No2` float DEFAULT NULL,
  `Average_No3` float DEFAULT NULL,
  `Average_No4` float DEFAULT NULL,
  `Average_No5` float DEFAULT NULL,
  `Average_No6` float DEFAULT NULL,
  `Average_No7` float DEFAULT NULL,
  `Average_No8` float DEFAULT NULL,
  `Average_No9` float DEFAULT NULL,
  `Average_No10` float DEFAULT NULL,
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
  `Technician` varchar(10) NOT NULL,
  `Speciment_Before_Test` mediumblob NOT NULL,
  `Speciment_After_Test` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `splitting_tensile_strenght`
--

INSERT INTO `splitting_tensile_strenght` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Cutter_Equipment`, `Extraction_Equipment`, `Test_Device`, `Diameter_D_cm_No1`, `Diameter_D_cm_No2`, `Diameter_D_cm_No3`, `Diameter_D_cm_No4`, `Diameter_D_cm_No5`, `Diameter_D_cm_No6`, `Diameter_D_cm_No7`, `Diameter_D_cm_No8`, `Diameter_D_cm_No9`, `Diameter_D_cm_No10`, `Thicness_t_cm_No1`, `Thicness_t_cm_No2`, `Thicness_t_cm_No3`, `Thicness_t_cm_No4`, `Thicness_t_cm_No5`, `Thicness_t_cm_No6`, `Thicness_t_cm_No7`, `Thicness_t_cm_No8`, `Thicness_t_cm_No9`, `Thicness_t_cm_No10`, `Relation_td_No1`, `Relation_td_No2`, `Relation_td_No3`, `Relation_td_No4`, `Relation_td_No5`, `Relation_td_No6`, `Relation_td_No7`, `Relation_td_No8`, `Relation_td_No9`, `Relation_td_No10`, `Loading_Rate_KNs_No1`, `Loading_Rate_KNs_No2`, `Loading_Rate_KNs_No3`, `Loading_Rate_KNs_No4`, `Loading_Rate_KNs_No5`, `Loading_Rate_KNs_No6`, `Loading_Rate_KNs_No7`, `Loading_Rate_KNs_No8`, `Loading_Rate_KNs_No9`, `Loading_Rate_KNs_No10`, `Time_To_Failure_s_No1`, `Time_To_Failure_s_No2`, `Time_To_Failure_s_No3`, `Time_To_Failure_s_No4`, `Time_To_Failure_s_No5`, `Time_To_Failure_s_No6`, `Time_To_Failure_s_No7`, `Time_To_Failure_s_No8`, `Time_To_Failure_s_No9`, `Time_To_Failure_s_No10`, `Max_Load_kN_No1`, `Max_Load_kN_No2`, `Max_Load_kN_No3`, `Max_Load_kN_No4`, `Max_Load_kN_No5`, `Max_Load_kN_No6`, `Max_Load_kN_No7`, `Max_Load_kN_No8`, `Max_Load_kN_No9`, `Max_Load_kN_No10`, `Tensile_Strength_Mpa_No1`, `Tensile_Strength_Mpa_No2`, `Tensile_Strength_Mpa_No3`, `Tensile_Strength_Mpa_No4`, `Tensile_Strength_Mpa_No5`, `Tensile_Strength_Mpa_No6`, `Tensile_Strength_Mpa_No7`, `Tensile_Strength_Mpa_No8`, `Tensile_Strength_Mpa_No9`, `Tensile_Strength_Mpa_No10`, `Failure_Type_No1`, `Failure_Type_No2`, `Failure_Type_No3`, `Failure_Type_No4`, `Failure_Type_No5`, `Failure_Type_No6`, `Failure_Type_No7`, `Failure_Type_No8`, `Failure_Type_No9`, `Failure_Type_No10`, `Average_No1`, `Average_No2`, `Average_No3`, `Average_No4`, `Average_No5`, `Average_No6`, `Average_No7`, `Average_No8`, `Average_No9`, `Average_No10`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`, `Speciment_Before_Test`, `Speciment_After_Test`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D3967', 'B', 'HUSQUARNA-MS360', 'N/A', 'Controls Group A12P02', 6.3, 6.3, 6.3, 0, 0, 0, 0, 0, 0, 0, 4, 4, 3.8, 0, 0, 0, 0, 0, 0, 0, 0.63, 0.63, 0.6, 0, 0, 0, 0, 0, 0, 0, 1.3, 1.276, 1.212, 0, 0, 0, 0, 0, 0, 0, 37, 52, 58, 0, 0, 0, 0, 0, 0, 0, 48.1, 66.37, 70.28, 0, 0, 0, 0, 0, 0, 0, 1.22, 1.68, 1.87, 0, 0, 0, 0, 0, 0, 0, 'Central', 'Central', 'Central', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-16', 'N/A', 'BTS', 'AS', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `standard_proctor`
--

CREATE TABLE `standard_proctor` (
  `id` int(11) NOT NULL,
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
  `Dry_Density_Corrected_kgm3_1` varchar(20) NOT NULL,
  `Dry_Density_Corrected_kgm3_2` varchar(20) NOT NULL,
  `Dry_Density_Corrected_kgm3_3` varchar(20) NOT NULL,
  `Dry_Density_Corrected_kgm3_4` varchar(20) NOT NULL,
  `Dry_Density_Corrected_kgm3_5` varchar(20) NOT NULL,
  `Dry_Density_Corrected_kgm3_6` varchar(20) NOT NULL,
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
  `MC_Porce_Corrected_1` varchar(20) NOT NULL,
  `MC_Porce_Corrected_2` varchar(20) NOT NULL,
  `MC_Porce_Corrected_3` varchar(20) NOT NULL,
  `MC_Porce_Corrected_4` varchar(20) NOT NULL,
  `MC_Porce_Corrected_5` varchar(20) NOT NULL,
  `MC_Porce_Corrected_6` varchar(20) NOT NULL,
  `Max_Dry_Density_kgm3` float NOT NULL,
  `Optimun_MC_Porce` float NOT NULL,
  `Wc_Porce` varchar(20) NOT NULL,
  `GM_Porce` varchar(20) NOT NULL,
  `PC_Porce` varchar(20) NOT NULL,
  `PF_Porce` varchar(20) NOT NULL,
  `YDF_Porce` varchar(20) NOT NULL,
  `YDT_Porce` varchar(20) NOT NULL,
  `Yw_KnM3` varchar(20) NOT NULL,
  `Corrected_Dry_Unit_Weigt` varchar(20) NOT NULL,
  `Corrected_Water_Content_Finer` varchar(20) NOT NULL,
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

INSERT INTO `standard_proctor` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Natural_MC`, `SG_NMC`, `Wt_Wet_Soil_Mold_1`, `Wt_Wet_Soil_Mold_2`, `Wt_Wet_Soil_Mold_3`, `Wt_Wet_Soil_Mold_4`, `Wt_Wet_Soil_Mold_5`, `Wt_Wet_Soil_Mold_6`, `Wt_Mold_g_1`, `Wt_Mold_g_2`, `Wt_Mold_g_3`, `Wt_Mold_g_4`, `Wt_Mold_g_5`, `Wt_Mold_g_6`, `Wt_Wet_Soil_g_1`, `Wt_Wet_Soil_g_2`, `Wt_Wet_Soil_g_3`, `Wt_Wet_Soil_g_4`, `Wt_Wet_Soil_g_5`, `Wt_Wet_Soil_g_6`, `Vol_Mold_cm3_1`, `Vol_Mold_cm3_2`, `Vol_Mold_cm3_3`, `Vol_Mold_cm3_4`, `Vol_Mold_cm3_5`, `Vol_Mold_cm3_6`, `Wet_Density_kgm3_1`, `Wet_Density_kgm3_2`, `Wet_Density_kgm3_3`, `Wet_Density_kgm3_4`, `Wet_Density_kgm3_5`, `Wet_Density_kgm3_6`, `Dry_Density_kgm3_1`, `Dry_Density_kgm3_2`, `Dry_Density_kgm3_3`, `Dry_Density_kgm3_4`, `Dry_Density_kgm3_5`, `Dry_Density_kgm3_6`, `Dry_Density_Corrected_kgm3_1`, `Dry_Density_Corrected_kgm3_2`, `Dry_Density_Corrected_kgm3_3`, `Dry_Density_Corrected_kgm3_4`, `Dry_Density_Corrected_kgm3_5`, `Dry_Density_Corrected_kgm3_6`, `MC_Container_1`, `MC_Container_2`, `MC_Container_3`, `MC_Container_4`, `MC_Container_5`, `MC_Container_6`, `MC_Wt_Wet_Soil_Tare_1`, `MC_Wt_Wet_Soil_Tare_2`, `MC_Wt_Wet_Soil_Tare_3`, `MC_Wt_Wet_Soil_Tare_4`, `MC_Wt_Wet_Soil_Tare_5`, `MC_Wt_Wet_Soil_Tare_6`, `MC_Wt_Dry_Soil_Tare_1`, `MC_Wt_Dry_Soil_Tare_2`, `MC_Wt_Dry_Soil_Tare_3`, `MC_Wt_Dry_Soil_Tare_4`, `MC_Wt_Dry_Soil_Tare_5`, `MC_Wt_Dry_Soil_Tare_6`, `Wt_Water_g_1`, `Wt_Water_g_2`, `Wt_Water_g_3`, `Wt_Water_g_4`, `Wt_Water_g_5`, `Wt_Water_g_6`, `Tare_g_1`, `Tare_g_2`, `Tare_g_3`, `Tare_g_4`, `Tare_g_5`, `Tare_g_6`, `MC_Wt_Dry_Soil_g_1`, `MC_Wt_Dry_Soil_g_2`, `MC_Wt_Dry_Soil_g_3`, `MC_Wt_Dry_Soil_g_4`, `MC_Wt_Dry_Soil_g_5`, `MC_Wt_Dry_Soil_g_6`, `MC_Porce_1`, `MC_Porce_2`, `MC_Porce_3`, `MC_Porce_4`, `MC_Porce_5`, `MC_Porce_6`, `MC_Porce_Corrected_1`, `MC_Porce_Corrected_2`, `MC_Porce_Corrected_3`, `MC_Porce_Corrected_4`, `MC_Porce_Corrected_5`, `MC_Porce_Corrected_6`, `Max_Dry_Density_kgm3`, `Optimun_MC_Porce`, `Wc_Porce`, `GM_Porce`, `PC_Porce`, `PF_Porce`, `YDF_Porce`, `YDT_Porce`, `Yw_KnM3`, `Corrected_Dry_Unit_Weigt`, `Corrected_Water_Content_Finer`, `SP_Graphic`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D698', 'wet', 'manual', 28.84, 2.65, 5621.3, 5824.3, 5939.7, 5973.1, 5964.4, 5903.2, 4191, 4191, 4191, 4191, 4191, 4191, 1430.3, 1633.3, 1748.7, 1782.1, 1773.4, 1712.2, 946, 946, 946, 946, 946, 946, 1511.95, 1726.53, 1848.52, 1883.83, 1874.63, 1809.94, 1215.63, 1367.91, 1441.21, 1444.22, 1413.58, 1346.66, 'NaN', 'NaN', 'NaN', 'NaN', 'NaN', 'NaN', 'LAB-1', 'LAB-2', 'LAB-3', 'LAB-4', 'LAB-5', 'LAB-5', 626.82, 602.32, 555.91, 523.99, 573.32, 584.45, 520.98, 495.32, 452.56, 421.98, 453.65, 456.98, 105.84, 107, 103.35, 102.01, 119.67, 127.47, 86.78, 87.18, 86.87, 86.85, 86.74, 86.45, 434.2, 408.14, 365.69, 335.13, 366.91, 370.53, 24.38, 26.22, 28.26, 30.44, 32.62, 34.4, 'NaN', 'NaN', 'NaN', 'NaN', 'NaN', 'NaN', 1444.22, 30.44, '', '', '', '', '', '', '', 'NaN', 'NaN', NULL, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '2023-10-11', '2023-10-10', '2023-10-23', 'N/A', 'SP', 'AS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uniaxial_compressive_strength`
--

CREATE TABLE `uniaxial_compressive_strength` (
  `id` int(11) NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Sample_Number` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `Method` varchar(20) NOT NULL,
  `Cutter_Equipment` varchar(30) NOT NULL,
  `Extraction_Equipment` varchar(30) NOT NULL,
  `Test_Device` varchar(30) NOT NULL,
  `Dimension_D_cm` float DEFAULT NULL,
  `Dimension_H_cm` float DEFAULT NULL,
  `Relation_hD` float DEFAULT NULL,
  `Area_m2` float DEFAULT NULL,
  `Volume_m3` float DEFAULT NULL,
  `Weight_Core_Kg` float DEFAULT NULL,
  `Unit_Weight_Core_kgm3` float DEFAULT NULL,
  `Failure_Loand_KN` float DEFAULT NULL,
  `Test_Timing_S` float DEFAULT NULL,
  `Load_Proportion_Mpas` float DEFAULT NULL,
  `uniaxial_Compressive_Strenght_Mpa` float DEFAULT NULL,
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
  `Graphic_Failure_Load_versus_Time` mediumblob NOT NULL,
  `Pic_Before_Test` mediumblob NOT NULL,
  `Pic_After_Test` mediumblob NOT NULL,
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `uniaxial_compressive_strength`
--

INSERT INTO `uniaxial_compressive_strength` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Cutter_Equipment`, `Extraction_Equipment`, `Test_Device`, `Dimension_D_cm`, `Dimension_H_cm`, `Relation_hD`, `Area_m2`, `Volume_m3`, `Weight_Core_Kg`, `Unit_Weight_Core_kgm3`, `Failure_Loand_KN`, `Test_Timing_S`, `Load_Proportion_Mpas`, `uniaxial_Compressive_Strenght_Mpa`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Graphic_Failure_Load_versus_Time`, `Pic_Before_Test`, `Pic_After_Test`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'DH-BGC23-NTSF-010', 'G1', 'ASTM-D4318', 'B', 'HUSQUARNA-MS360', 'N/A', 'Controls Group A12P02', 6.3, 12.5, 1.984, 0.00312, 0.00039, 1.09, 2797.34, 37.8, 25, 0.617, 12.125, 'Site Inves', 'TSF Naranj', 'N/A', 1.2, 2.12, 'Suelo', 'Shelby', 0.0012, 0.0025, 0.0068, '', '', '', '2023-10-11', '2023-10-10', '2023-10-12', 'Failure Type: Multiple Fracturing. Test should be desestimate', 'UCS', 'AS');

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
(1, 'Admin User', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'pzg9wa7o1.jpg', 1, '2023-10-24 13:49:35'),
(2, 'Special User', 'special', 'ba36b97a41e7faf742ab09bf88405ac04f99599a', 2, 'no_image.jpg', 1, '2023-03-20 03:13:43'),
(3, 'Default User', 'user', '12dea96fec20593566ab75692c9949596833adc9', 3, 'no_image.jpg', 1, '2023-09-29 15:38:14');

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
-- Indices de la tabla `concrete_specimens`
--
ALTER TABLE `concrete_specimens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consolidation`
--
ALTER TABLE `consolidation`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `count_gama`
--
ALTER TABLE `count_gama`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `density_bulk`
--
ALTER TABLE `density_bulk`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `density_weigth`
--
ALTER TABLE `density_weigth`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `double_hydrometer`
--
ALTER TABLE `double_hydrometer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ensayos_en_revision`
--
ALTER TABLE `ensayos_en_revision`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Test_Type` (`Test_Type`) USING BTREE;

--
-- Indices de la tabla `ensayo_en_entrega`
--
ALTER TABLE `ensayo_en_entrega`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Test_Type` (`Test_Type`) USING BTREE;

--
-- Indices de la tabla `ensayo_en_repeticion`
--
ALTER TABLE `ensayo_en_repeticion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Test_Type` (`Test_Type`) USING BTREE;

--
-- Indices de la tabla `ensayo_gama`
--
ALTER TABLE `ensayo_gama`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `grain_size_coarse_aggregate`
--
ALTER TABLE `grain_size_coarse_aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grain_size_fine_aggregate`
--
ALTER TABLE `grain_size_fine_aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grain_size_rocks`
--
ALTER TABLE `grain_size_rocks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grain_size_sieved_coarse_aggregate`
--
ALTER TABLE `grain_size_sieved_coarse_aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grout_specimens`
--
ALTER TABLE `grout_specimens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hydrometer`
--
ALTER TABLE `hydrometer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lab_test_requisition_form`
--
ALTER TABLE `lab_test_requisition_form`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `leeb_hardness`
--
ALTER TABLE `leeb_hardness`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_de_pendiente`
--
ALTER TABLE `lista_de_pendiente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `los_angeles_abrasion_large`
--
ALTER TABLE `los_angeles_abrasion_large`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `los_angeles_abrasion_small`
--
ALTER TABLE `los_angeles_abrasion_small`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `moisture_content`
--
ALTER TABLE `moisture_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample ID` (`Sample_ID`);

--
-- Indices de la tabla `moisture_content_constant_mass`
--
ALTER TABLE `moisture_content_constant_mass`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `moisture_content_microwave`
--
ALTER TABLE `moisture_content_microwave`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `moisture_scale`
--
ALTER TABLE `moisture_scale`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `muestra_en_preparacion`
--
ALTER TABLE `muestra_en_preparacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Test_Type` (`Test_Type`);

--
-- Indices de la tabla `muestra_en_realizacion`
--
ALTER TABLE `muestra_en_realizacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Test_Type` (`Test_Type`) USING BTREE;

--
-- Indices de la tabla `permeability_of_granular_soils`
--
ALTER TABLE `permeability_of_granular_soils`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pinhole`
--
ALTER TABLE `pinhole`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `point_load_test`
--
ALTER TABLE `point_load_test`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sand_density`
--
ALTER TABLE `sand_density`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specific_gravity`
--
ALTER TABLE `specific_gravity`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specific_gravity_absortion`
--
ALTER TABLE `specific_gravity_absortion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specific_gravity_fine`
--
ALTER TABLE `specific_gravity_fine`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `splitting_tensile_strenght`
--
ALTER TABLE `splitting_tensile_strenght`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `standard_proctor`
--
ALTER TABLE `standard_proctor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `uniaxial_compressive_strength`
--
ALTER TABLE `uniaxial_compressive_strength`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atterberg_limit`
--
ALTER TABLE `atterberg_limit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `concrete_specimens`
--
ALTER TABLE `concrete_specimens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `consolidation`
--
ALTER TABLE `consolidation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `count_gama`
--
ALTER TABLE `count_gama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `density_bulk`
--
ALTER TABLE `density_bulk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `density_weigth`
--
ALTER TABLE `density_weigth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `double_hydrometer`
--
ALTER TABLE `double_hydrometer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ensayos_en_revision`
--
ALTER TABLE `ensayos_en_revision`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ensayo_en_entrega`
--
ALTER TABLE `ensayo_en_entrega`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ensayo_en_repeticion`
--
ALTER TABLE `ensayo_en_repeticion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ensayo_gama`
--
ALTER TABLE `ensayo_gama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grain_size`
--
ALTER TABLE `grain_size`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grain_size_coarse_aggregate`
--
ALTER TABLE `grain_size_coarse_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grain_size_fine_aggregate`
--
ALTER TABLE `grain_size_fine_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grain_size_rocks`
--
ALTER TABLE `grain_size_rocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grain_size_sieved_coarse_aggregate`
--
ALTER TABLE `grain_size_sieved_coarse_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grout_specimens`
--
ALTER TABLE `grout_specimens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hydrometer`
--
ALTER TABLE `hydrometer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lab_test_requisition_form`
--
ALTER TABLE `lab_test_requisition_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `leeb_hardness`
--
ALTER TABLE `leeb_hardness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lista_de_pendiente`
--
ALTER TABLE `lista_de_pendiente`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `los_angeles_abrasion_large`
--
ALTER TABLE `los_angeles_abrasion_large`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `los_angeles_abrasion_small`
--
ALTER TABLE `los_angeles_abrasion_small`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `moisture_content`
--
ALTER TABLE `moisture_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `moisture_content_constant_mass`
--
ALTER TABLE `moisture_content_constant_mass`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `moisture_content_microwave`
--
ALTER TABLE `moisture_content_microwave`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `moisture_scale`
--
ALTER TABLE `moisture_scale`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `muestra_en_preparacion`
--
ALTER TABLE `muestra_en_preparacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `muestra_en_realizacion`
--
ALTER TABLE `muestra_en_realizacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permeability_of_granular_soils`
--
ALTER TABLE `permeability_of_granular_soils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pinhole`
--
ALTER TABLE `pinhole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `point_load_test`
--
ALTER TABLE `point_load_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sand_density`
--
ALTER TABLE `sand_density`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `specific_gravity`
--
ALTER TABLE `specific_gravity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `specific_gravity_absortion`
--
ALTER TABLE `specific_gravity_absortion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `specific_gravity_fine`
--
ALTER TABLE `specific_gravity_fine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `splitting_tensile_strenght`
--
ALTER TABLE `splitting_tensile_strenght`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `standard_proctor`
--
ALTER TABLE `standard_proctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `uniaxial_compressive_strength`
--
ALTER TABLE `uniaxial_compressive_strength`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
