-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2023 a las 18:16:52
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
  `Standard` varchar(30) DEFAULT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `atterberg_limit`
--

INSERT INTO `atterberg_limit` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Technician`, `Split_Method`, `Preparation_Method`, `Nat_Mc`, `LL_Blows_1`, `LL_Blows_2`, `LL_Blows_3`, `LL_Container_1`, `LL_Container_2`, `LL_Container_3`, `LL_Wet_Soil_1`, `LL_Wet_Soil_2`, `LL_Wet_Soil_3`, `LL_Dry_soil_tare1`, `LL_Dry_soil_tare2`, `LL_Dry_soil_tare3`, `LL_Water_1`, `LL_Water_2`, `LL_Water_3`, `LL_Tare_1`, `LL_Tare_2`, `LL_Tare_3`, `LL_Wt_Dry_Soil_1`, `LL_Wt_Dry_Soil_2`, `LL_Wt_Dry_Soil_3`, `LL_MC_Porce_1`, `LL_MC_Porce_2`, `LL_MC_Porce_3`, `PL_Container_1`, `PL_Container_2`, `PL_Container_3`, `PL_Wet_Soil_1`, `PL_Wet_Soil_2`, `PL_Wet_Soil_3`, `PL_Dry_soil_tare1`, `PL_Dry_soil_tare2`, `PL_Dry_soil_tare3`, `PL_Water_1`, `PL_Water_2`, `PL_Water_3`, `PL_Tare_1`, `PL_Tare_2`, `PL_Tare_3`, `PL_Wt_Dry_Soil_1`, `PL_Wt_Dry_Soil_2`, `PL_Wt_Dry_Soil_3`, `PL_MC_Porce_1`, `PL_MC_Porce_2`, `PL_MC_Porce_3`, `PL_Avg_Mc`, `Liquid_Limit_Porce`, `Plastic_Limit_Porce`, `Plasticity_Index_Porce`, `Liquidity_Index_Porce`, `Classification`, `Liquid_Limit_Plot`, `Plasticity_Chart`, `Comments`, `Test_Start_Date`, `Report_Date`, `test_type`, `Standard`, `Registered_By`) VALUES
(1, 'DH-BGC23-NTSF-173', 'G1', 'DH-BGC23-NTSF', 'Site investigation', 'Naranjo', 12.5, 14.35, 'Soil', 'Lexan', 0, 0, 0, '2023-11-08', 'AS', 'Choose...', 'Choose...', 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Error', NULL, NULL, 'Insufficient Material', '2023-11-28', '2023-11-28', 'AL', 'ASTM-D4318', 'Arturo Santana');

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
  `Picture_3` mediumblob NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `test_type` varchar(20) NOT NULL,
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensayos_en_revision`
--

CREATE TABLE `ensayos_en_revision` (
  `id` int(10) UNSIGNED NOT NULL,
  `Sample_ID` varchar(150) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Registered_By` varchar(20) NOT NULL,
  `Test_Type` varchar(15) NOT NULL,
  `Test_Start_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ensayos_en_revision`
--

INSERT INTO `ensayos_en_revision` (`id`, `Sample_ID`, `Sample_Number`, `Registered_By`, `Test_Type`, `Test_Start_Date`) VALUES
(1, 'DH-BGC23-NTSF-173', 'G1', 'Arturo Santana', 'AL', '2023-11-28'),
(48, 'DH-BGC23-NTSF-173', 'G1', 'Arturo Santana', 'Mc_Oven', '2023-11-28');

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
  `Sample_Date` date NOT NULL,
  `Estatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ensayo_en_entrega`
--

INSERT INTO `ensayo_en_entrega` (`id`, `Sample_ID`, `Tecnico`, `Sample_Number`, `Test_Type`, `Fecha_de_Entrega`, `Sample_Date`, `Estatus`) VALUES
(1, 'DH-BGC23-NTSF-173', 'JL', 'G1', 'Mc_Oven', '2023-11-28 16:14:04', '0000-00-00', 'Entregado');

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
  `Fecha_Inicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ensayo_en_repeticion`
--

INSERT INTO `ensayo_en_repeticion` (`id`, `Sample_ID`, `Sample_Number`, `Test_Type`, `Tecnico`, `Fecha_Inicio`) VALUES
(1, 'DH-BGC23-NTSF-173', 'G1', 'AL', 'AS', '2023-11-28'),
(2, 'DH-BGC23-NTSF-173', 'G1', 'Mc_Oven', 'a', '2023-11-28');

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Standard` varchar(50) DEFAULT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Grain_Size_Graph` mediumblob NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Graphic_Load_versus_time` mediumblob NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Test_Type1` varchar(15) DEFAULT NULL,
  `Test_Type2` varchar(15) DEFAULT NULL,
  `Test_Type3` varchar(15) DEFAULT NULL,
  `Test_Type4` varchar(15) DEFAULT NULL,
  `Test_Type5` varchar(15) DEFAULT NULL,
  `Test_Type6` varchar(15) DEFAULT NULL,
  `Test_Type7` varchar(15) DEFAULT NULL,
  `Test_Type8` varchar(15) DEFAULT NULL,
  `Test_Type9` varchar(15) DEFAULT NULL,
  `Test_Type10` varchar(15) DEFAULT NULL,
  `Test_Type11` varchar(15) DEFAULT NULL,
  `Test_Type12` varchar(15) DEFAULT NULL,
  `Test_Type13` varchar(15) DEFAULT NULL,
  `Test_Type14` varchar(15) DEFAULT NULL,
  `Test_Type15` varchar(15) DEFAULT NULL,
  `Test_Type16` varchar(15) DEFAULT NULL,
  `Test_Type17` varchar(15) DEFAULT NULL,
  `Test_Type18` varchar(15) DEFAULT NULL,
  `Test_Type19` varchar(15) DEFAULT NULL,
  `Comment` text NOT NULL,
  `Sample_Date` date NOT NULL,
  `Sample_By` varchar(10) NOT NULL,
  `Registed_Date` date NOT NULL,
  `Sample_Number` varchar(10) DEFAULT NULL,
  `Register_By` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `lab_test_requisition_form`
--

INSERT INTO `lab_test_requisition_form` (`id`, `Sample_ID`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Test_Type1`, `Test_Type2`, `Test_Type3`, `Test_Type4`, `Test_Type5`, `Test_Type6`, `Test_Type7`, `Test_Type8`, `Test_Type9`, `Test_Type10`, `Test_Type11`, `Test_Type12`, `Test_Type13`, `Test_Type14`, `Test_Type15`, `Test_Type16`, `Test_Type17`, `Test_Type18`, `Test_Type19`, `Comment`, `Sample_Date`, `Sample_By`, `Registed_Date`, `Sample_Number`, `Register_By`) VALUES
(1, 'DH-BGC23-NTSF-173', 'DH-BGC23-NTSF', 'Site investigation', 'Naranjo', 12.5, 14.35, 'Soil', 'Lexan', 0, 0, 0, 'Mc_Oven', '', '', 'AL', 'GS', 'SP', 'SG', '', '', '', '', '', '', '', '', '', '', '', '', 'abc', '2023-11-08', 'AA', '2023-11-28', 'G1', 'AS');

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_de_pendiente`
--

CREATE TABLE `lista_de_pendiente` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(30) NOT NULL,
  `Sample_Number` varchar(15) NOT NULL,
  `Test_Type` varchar(15) NOT NULL,
  `Sample_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lista_de_pendiente`
--

INSERT INTO `lista_de_pendiente` (`id`, `Sample_ID`, `Sample_Number`, `Test_Type`, `Sample_Date`) VALUES
(1, 'DH-BGC23-NTSF-173', 'G1', 'Mc_Oven', '2023-11-08'),
(2, 'DH-BGC23-NTSF-173', 'G1', 'AL', '2023-11-08'),
(3, 'DH-BGC23-NTSF-173', 'G1', 'GS', '2023-11-08'),
(4, 'DH-BGC23-NTSF-173', 'G1', 'SP', '2023-11-08'),
(5, 'DH-BGC23-NTSF-173', 'G1', 'SG', '2023-11-08');

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Sample_ID` varchar(50) NOT NULL,
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
  `test_type` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `moisture_content`
--

INSERT INTO `moisture_content` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Tare_Name`, `Temperature`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Standard`, `Method`, `Comments`, `Technician`, `Test_Start_Date`, `Report_Date`, `test_type`, `Registered_By`) VALUES
(1, 'DH-BGC23-NTSF-173', 'G1', 'DH-BGC23-NTSF', 'Site investigation', 'Naranjo', 12.5, 14.35, 'Soil', 'Lexan', 0, 0, 0, '2023-11-08', 'a', 'Choose...', 0, 0, 0, 0, 0, 0, 'Choose...', '', '', 'a', '2023-11-28', '2023-11-28', 'Mc_Oven', 'Arturo Santana'),
(2, 'DH-BGC23-NTSF-173', 'G1', 'DH-BGC23-NTSF', 'Site investigation', 'Naranjo', 12.5, 14.35, 'Soil', 'Lexan', 0, 0, 0, '2023-11-08', '', 'Choose...', 0, 0, 0, 0, 0, 0, 'Choose...', '', '', 'JL', '2023-11-28', '2023-11-28', 'Mc_Oven', 'Arturo Santana');

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
  `test_type` varchar(15) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `test_type` varchar(15) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `test_type` varchar(15) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Fecha_Inicio_Preparacion` datetime NOT NULL,
  `Estatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `muestra_en_preparacion`
--

INSERT INTO `muestra_en_preparacion` (`id`, `Sample_ID`, `Sample_Number`, `Test_Type`, `Tecnico`, `Fecha_Inicio_Preparacion`, `Estatus`) VALUES
(1, 'DH-BGC23-NTSF-173', 'G1', 'Mc_Oven', 'JL', '2023-11-28 15:27:37', 'Preparacion'),
(11, 'DH-BGC23-NTSF-173', 'G1', 'SP', 'JL', '2023-11-28 16:26:37', 'Preparacion');

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
  `Fecha_Inicio_Realizacion` datetime NOT NULL,
  `Estatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `muestra_en_realizacion`
--

INSERT INTO `muestra_en_realizacion` (`id`, `Sample_ID`, `Sample_Number`, `Test_Type`, `Tecnico`, `Fecha_Inicio_Realizacion`, `Estatus`) VALUES
(1, 'DH-BGC23-NTSF-173', 'G1', 'Mc_Oven', 'JL', '2023-11-28 16:12:22', 'Realizacio');

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Speciment_After_Test` mediumblob NOT NULL,
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Area` varchar(20) NOT NULL,
  `Source` varchar(15) NOT NULL,
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
  `Registered_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `Technician` varchar(10) NOT NULL,
  `Registered_By` varchar(20) NOT NULL
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
(1, 'Arturo Santana', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'pzg9wa7o1.jpg', 1, '2023-11-28 11:28:55'),
(2, 'Special User', 'special', 'ba36b97a41e7faf742ab09bf88405ac04f99599a', 2, 'no_image.jpg', 1, '2023-11-24 20:47:53'),
(3, 'Default User', 'user', '12dea96fec20593566ab75692c9949596833adc9', 3, 'no_image.jpg', 1, '2023-11-24 20:49:30');

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consolidation`
--
ALTER TABLE `consolidation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `count_gama`
--
ALTER TABLE `count_gama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `density_bulk`
--
ALTER TABLE `density_bulk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `density_weigth`
--
ALTER TABLE `density_weigth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `double_hydrometer`
--
ALTER TABLE `double_hydrometer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ensayos_en_revision`
--
ALTER TABLE `ensayos_en_revision`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `ensayo_en_entrega`
--
ALTER TABLE `ensayo_en_entrega`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ensayo_en_repeticion`
--
ALTER TABLE `ensayo_en_repeticion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ensayo_gama`
--
ALTER TABLE `ensayo_gama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grain_size`
--
ALTER TABLE `grain_size`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grain_size_coarse_aggregate`
--
ALTER TABLE `grain_size_coarse_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grain_size_fine_aggregate`
--
ALTER TABLE `grain_size_fine_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grain_size_rocks`
--
ALTER TABLE `grain_size_rocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grain_size_sieved_coarse_aggregate`
--
ALTER TABLE `grain_size_sieved_coarse_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grout_specimens`
--
ALTER TABLE `grout_specimens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hydrometer`
--
ALTER TABLE `hydrometer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lab_test_requisition_form`
--
ALTER TABLE `lab_test_requisition_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `leeb_hardness`
--
ALTER TABLE `leeb_hardness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista_de_pendiente`
--
ALTER TABLE `lista_de_pendiente`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `los_angeles_abrasion_large`
--
ALTER TABLE `los_angeles_abrasion_large`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `los_angeles_abrasion_small`
--
ALTER TABLE `los_angeles_abrasion_small`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `moisture_content`
--
ALTER TABLE `moisture_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `moisture_content_constant_mass`
--
ALTER TABLE `moisture_content_constant_mass`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `moisture_content_microwave`
--
ALTER TABLE `moisture_content_microwave`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `moisture_scale`
--
ALTER TABLE `moisture_scale`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `muestra_en_preparacion`
--
ALTER TABLE `muestra_en_preparacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `muestra_en_realizacion`
--
ALTER TABLE `muestra_en_realizacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permeability_of_granular_soils`
--
ALTER TABLE `permeability_of_granular_soils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pinhole`
--
ALTER TABLE `pinhole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `point_load_test`
--
ALTER TABLE `point_load_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sand_density`
--
ALTER TABLE `sand_density`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `specific_gravity`
--
ALTER TABLE `specific_gravity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `specific_gravity_absortion`
--
ALTER TABLE `specific_gravity_absortion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `specific_gravity_fine`
--
ALTER TABLE `specific_gravity_fine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `splitting_tensile_strenght`
--
ALTER TABLE `splitting_tensile_strenght`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `standard_proctor`
--
ALTER TABLE `standard_proctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `uniaxial_compressive_strength`
--
ALTER TABLE `uniaxial_compressive_strength`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
