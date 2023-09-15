-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 07:41 AM
-- Server version: 10.4.27-MariaDBss
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `index_test_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `atterberg_limit`
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
-- Dumping data for table `atterberg_limit`
--

INSERT INTO `atterberg_limit` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Technician`, `Split_Method`, `Preparation_Method`, `LL_Blows_1`, `LL_Blows_2`, `LL_Blows_3`, `LL_Container_1`, `LL_Container_2`, `LL_Container_3`, `LL_Wet_Soil_1`, `LL_Wet_Soil_2`, `LL_Wet_Soil_3`, `LL_Dry_soil_tare1`, `LL_Dry_soil_tare2`, `LL_Dry_soil_tare3`, `LL_Water_1`, `LL_Water_2`, `LL_Water_3`, `LL_Tare_1`, `LL_Tare_2`, `LL_Tare_3`, `LL_Wt_Dry_Soil_1`, `LL_Wt_Dry_Soil_2`, `LL_Wt_Dry_Soil_3`, `LL_MC_Porce_1`, `LL_MC_Porce_2`, `LL_MC_Porce_3`, `PL_Container_1`, `PL_Container_2`, `PL_Container_3`, `PL_Wet_Soil_1`, `PL_Wet_Soil_2`, `PL_Wet_Soil_3`, `PL_Dry_soil_tare1`, `PL_Dry_soil_tare2`, `PL_Dry_soil_tare3`, `PL_Water_1`, `PL_Water_2`, `PL_Water_3`, `PL_Tare_1`, `PL_Tare_2`, `PL_Tare_3`, `PL_Wt_Dry_Soil_1`, `PL_Wt_Dry_Soil_2`, `PL_Wt_Dry_Soil_3`, `PL_MC_Porce_1`, `PL_MC_Porce_2`, `PL_MC_Porce_3`, `PL_Avg_Mc`, `Liquid_Limit_Porce`, `Plastic_Limit_Porce`, `Plasticity_Index_Porce`, `Liquidity_Index_Porce`, `Classification`, `Liquid_Limit_Plot`, `Plasticity_Chart`, `Comments`, `Test_Start_Date`, `Report_Date`, `test_type`, `Standard`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G4', 'LL-NTSF', 'DS', 'Borrow N60', 0.5, 1.3, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'SDA', 'Manual', 'Oven_Dried', 34, 23, 16, 'C-11', 'C-41', 'C-8', 25, 24, 24, 21, 21, 20, 4, 4, 4, 14, 14, 14, 7, 7, 6, 56, 57, 59, 'H-7', 'H-22', 'H-11', 22, 21, 23, 21, 20, 21, 2, 2, 2, 14, 14, 14, 6, 5, 6, 29, 29, 29, 29, 57, 29, 29, 0, 'CH', NULL, NULL, 'OK', '2023-07-19', '2023-07-19', 'AL', 'ASTM-D4318'),
(3, 'TP-BGC23-NTSF-100', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'AS', 'Manual', 'Oven_Dried', 31, 25, 19, 'A1', 'A2', 'A3', 26.738, 26.347, 26.944, 22.902, 22.534, 22.65, 3.84, 3.81, 4.29, 15.686, 15.687, 15.422, 7.22, 6.85, 7.23, 53.16, 55.69, 59.41, 'X1', 'X2', 'X3', 24.35, 24.75, 25.16, 22.46, 22.77, 23.14, 1.89, 1.98, 2.02, 15.66, 15.64, 15.72, 6.8, 7.13, 7.42, 27.79, 27.77, 27.22, 27.6, 56, 28, 28, -0.9686, 'CH', NULL, NULL, 'cOMMEN', '2023-09-07', '2023-09-07', 'AL', 'ASTM-D4318');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Repuestos');

-- --------------------------------------------------------

--
-- Table structure for table `concrete_specimens`
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
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `concrete_specimens`
--

INSERT INTO `concrete_specimens` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Diameter_N1`, `Diameter_N2`, `Diameter_N3`, `Diameter_N4`, `Diameter_N5`, `High_N1`, `High_N2`, `High_N3`, `High_N4`, `High_N5`, `Area_m2_N1`, `Area_m2_N2`, `Area_m2_N3`, `Area_m2_N4`, `Area_m2_N5`, `Volumen_m3_N1`, `Volumen_m3_N2`, `Volumen_m3_N3`, `Volumen_m3_N4`, `Volumen_m3_N5`, `Weight_Cylinder_kg_N1`, `Weight_Cylinder_kg_N2`, `Weight_Cylinder_kg_N3`, `Weight_Cylinder_kg_N4`, `Weight_Cylinder_kg_N5`, `Age_Days_N1`, `Age_Days_N2`, `Age_Days_N3`, `Age_Days_N4`, `Age_Days_N5`, `Unit_Weight_kgm3_N1`, `Unit_Weight_kgm3_N2`, `Unit_Weight_kgm3_N3`, `Unit_Weight_kgm3_N4`, `Unit_Weight_kgm3_N5`, `Failure_Load_kn_N1`, `Failure_Load_kn_N2`, `Failure_Load_kn_N3`, `Failure_Load_kn_N4`, `Failure_Load_kn_N5`, `Strenght_Mpa_N1`, `Strenght_Mpa_N2`, `Strenght_Mpa_N3`, `Strenght_Mpa_N4`, `Strenght_Mpa_N5`, `Average_Strenght_Mpa`, `Type_Fracture_N1`, `Type_Fracture_N2`, `Type_Fracture_N3`, `Type_Fracture_N4`, `Type_Fracture_N5`, `Observations_N1`, `Observations_N2`, `Observations_N3`, `Observations_N4`, `Observations_N5`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 0.0025, 0.0025, 0.0025, 0.0025, 0.0025, 0.000125, 0.000125, 0.000125, 0.000125, 0.000125, 2.74, 2.74, 2.74, 2.74, 2.74, 28, 28, 28, 28, 28, 21920, 21920, 21920, 21920, 21920, 112.37, 112.37, 112.37, 112.37, 112.37, 44.33, 44.33, 44.33, 44.33, 44.33, 44.33, 3, 3, 3, 3, 0, 'test fail', 'test fail', 'test fail', 'test fail', 'test fail', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'Run Go', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `consolidation`
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

--
-- Dumping data for table `consolidation`
--

INSERT INTO `consolidation` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Date_No1`, `Date_No2`, `Date_No3`, `Date_No4`, `Date_No5`, `Date_No6`, `Date_No7`, `Date_No8`, `Date_No9`, `Date_No10`, `Date_No11`, `Date_No12`, `Date_No13`, `Date_No14`, `Date_No15`, `Date_No16`, `Name_Mass_on_Hangar_Colum1`, `Mass_on_Hangar_Colum1_No1`, `Mass_on_Hangar_Colum1_No2`, `Mass_on_Hangar_Colum1_No3`, `Mass_on_Hangar_Colum1_No4`, `Mass_on_Hangar_Colum1_No5`, `Mass_on_Hangar_Colum1_No6`, `Mass_on_Hangar_Colum1_No7`, `Mass_on_Hangar_Colum1_No8`, `Mass_on_Hangar_Colum1_No9`, `Mass_on_Hangar_Colum1_No10`, `Mass_on_Hangar_Colum1_No11`, `Mass_on_Hangar_Colum1_No12`, `Mass_on_Hangar_Colum1_No13`, `Mass_on_Hangar_Colum1_No14`, `Mass_on_Hangar_Colum1_No15`, `Mass_on_Hangar_Colum1_No16`, `Name_Mass_on_Hangar_Colum2`, `Mass_on_Hangar_Colum2_No1`, `Mass_on_Hangar_Colum2_No2`, `Mass_on_Hangar_Colum2_No3`, `Mass_on_Hangar_Colum2_No4`, `Mass_on_Hangar_Colum2_No5`, `Mass_on_Hangar_Colum2_No6`, `Mass_on_Hangar_Colum2_No7`, `Mass_on_Hangar_Colum2_No8`, `Mass_on_Hangar_Colum2_No9`, `Mass_on_Hangar_Colum2_No10`, `Mass_on_Hangar_Colum2_No11`, `Mass_on_Hangar_Colum2_No12`, `Mass_on_Hangar_Colum2_No13`, `Mass_on_Hangar_Colum2_No14`, `Mass_on_Hangar_Colum2_No15`, `Mass_on_Hangar_Colum2_No16`, `Name_Mass_on_Hangar_Colum3`, `Mass_on_Hangar_Colum3_No1`, `Mass_on_Hangar_Colum3_No2`, `Mass_on_Hangar_Colum3_No3`, `Mass_on_Hangar_Colum3_No4`, `Mass_on_Hangar_Colum3_No5`, `Mass_on_Hangar_Colum3_No6`, `Mass_on_Hangar_Colum3_No7`, `Mass_on_Hangar_Colum3_No8`, `Mass_on_Hangar_Colum3_No9`, `Mass_on_Hangar_Colum3_No10`, `Mass_on_Hangar_Colum3_No11`, `Mass_on_Hangar_Colum3_No12`, `Mass_on_Hangar_Colum3_No13`, `Mass_on_Hangar_Colum3_No14`, `Mass_on_Hangar_Colum3_No15`, `Mass_on_Hangar_Colum3_No16`, `Name_Mass_on_Hangar_Colum4`, `Mass_on_Hangar_Colum4_No1`, `Mass_on_Hangar_Colum4_No2`, `Mass_on_Hangar_Colum4_No3`, `Mass_on_Hangar_Colum4_No4`, `Mass_on_Hangar_Colum4_No5`, `Mass_on_Hangar_Colum4_No6`, `Mass_on_Hangar_Colum4_No7`, `Mass_on_Hangar_Colum4_No8`, `Mass_on_Hangar_Colum4_No9`, `Mass_on_Hangar_Colum4_No10`, `Mass_on_Hangar_Colum4_No11`, `Mass_on_Hangar_Colum4_No12`, `Mass_on_Hangar_Colum4_No13`, `Mass_on_Hangar_Colum4_No14`, `Mass_on_Hangar_Colum4_No15`, `Mass_on_Hangar_Colum4_No16`, `Name_Mass_on_Hangar_Colum5`, `Mass_on_Hangar_Colum5_No1`, `Mass_on_Hangar_Colum5_No2`, `Mass_on_Hangar_Colum5_No3`, `Mass_on_Hangar_Colum5_No4`, `Mass_on_Hangar_Colum5_No5`, `Mass_on_Hangar_Colum5_No6`, `Mass_on_Hangar_Colum5_No7`, `Mass_on_Hangar_Colum5_No8`, `Mass_on_Hangar_Colum5_No9`, `Mass_on_Hangar_Colum5_No10`, `Mass_on_Hangar_Colum5_No11`, `Mass_on_Hangar_Colum5_No12`, `Mass_on_Hangar_Colum5_No13`, `Mass_on_Hangar_Colum5_No14`, `Mass_on_Hangar_Colum5_No15`, `Mass_on_Hangar_Colum5_No16`, `Name_Mass_on_Hangar_Colum6`, `Mass_on_Hangar_Colum6_No1`, `Mass_on_Hangar_Colum6_No2`, `Mass_on_Hangar_Colum6_No3`, `Mass_on_Hangar_Colum6_No4`, `Mass_on_Hangar_Colum6_No5`, `Mass_on_Hangar_Colum6_No6`, `Mass_on_Hangar_Colum6_No7`, `Mass_on_Hangar_Colum6_No8`, `Mass_on_Hangar_Colum6_No9`, `Mass_on_Hangar_Colum6_No10`, `Mass_on_Hangar_Colum6_No11`, `Mass_on_Hangar_Colum6_No12`, `Mass_on_Hangar_Colum6_No13`, `Mass_on_Hangar_Colum6_No14`, `Mass_on_Hangar_Colum6_No15`, `Mass_on_Hangar_Colum6_No16`, `Tare_No`, `Mass_of_Tare_gr`, `Mass_of_Wet_Soil_Tare_gr`, `Mass_of_Dry_Soil_Tare`, `Mass_of_Water`, `Mass_of_Dry_Soil_gr`, `Initial_Moisture_Conten_Porce_Wfp`, `Diamter_cm`, `Height_cm`, `Area_A_cm2`, `Volume_Vo_cm3`, `Weight_gr`, `Initial_Mois_Mass_Ring_gr`, `Initial_Mois_Mass`, `Final_Dry_Mass_Ring_gr`, `Final_Dry_Mass_gr`, `Initial_Dry_Density_g_cm3`, `Dry_Unit_Weight_Yd_KN_m3`, `Density_of_Water_pW_gr_cm3`, `Specific_Gravity_Gs`, `Dry_Mass_Of_The_Total_Specimen_Md_gr`, `Volume_of_Solids_Vs_cm3`, `Equivalent_Height_of_Solids_Hs_cm`, `Initial_specimen_height_Ho_cm`, `Final_specimen_height_Hf_cm`, `Void_ratio_before_test_Eo`, `Void_ratio_after_test_ef`, `Mass_Weight_of_Tare_gr_Initial`, `Mass_Weight_of_Tare_gr_Final`, `Mass_Weight_Wet_Soil_Tare_gr_Initial`, `Mass_Weight_Wet_Soil_Tare_gr_Final`, `Mass_Weight_Dry_Soil_Tare_gr_Initial`, `Mass_Weight_Dry_Soil_Tare_gr_Final`, `Mass_of_Water_gr_Initial`, `Mass_of_Water_gr_Final`, `Weight_Wet_Soil_gr_Initial`, `Weight_Wet_Soil_gr_Final`, `Weight_Dry_Soil_gr_Initial`, `Weight_Dry_Soil_gr_Final`, `Moisture_Content_Porce_Initial`, `Moisture_Content_Porce_Final`, `Initial_Degree_of_Saturation_Porce`, `Final_Degree_of_Saturation_Porce`, `Loading_Decrements_Name_Kg_No1`, `Loading_Decrements_Name_Kg_No2`, `Loading_Decrements_Name_Kg_No3`, `Loading_Decrements_Name_Kg_No4`, `Loading_Decrements_Value_No1`, `Loading_Decrements_Value_No2`, `Loading_Decrements_Value_No3`, `Loading_Decrements_Value_No4`, `Factor_Dial`, `Load_Incement_Kg_No1`, `Load_Incement_Kg_No2`, `Load_Incement_Kg_No3`, `Load_Incement_Kg_No4`, `Load_Incement_Kg_No5`, `Load_Incement_Kg_No6`, `Load_Incement_Kg_No7`, `Load_Incement_Kg_No8`, `Load_Incement_Kg_No9`, `Load_Incement_Kg_No10`, `Ov_Kg_cm2_No1`, `Ov_Kg_cm2_No2`, `Ov_Kg_cm2_No3`, `Ov_Kg_cm2_No4`, `Ov_Kg_cm2_No5`, `Ov_Kg_cm2_No6`, `Ov_Kg_cm2_No7`, `Ov_Kg_cm2_No8`, `Ov_Kg_cm2_No9`, `Ov_Kg_cm2_No10`, `Reading_Dial_No1`, `Reading_Dial_No2`, `Reading_Dial_No3`, `Reading_Dial_No4`, `Reading_Dial_No5`, `Reading_Dial_No6`, `Reading_Dial_No7`, `Reading_Dial_No8`, `Reading_Dial_No9`, `Reading_Dial_No10`, `AH_mm_No1`, `AH_mm_No2`, `AH_mm_No3`, `AH_mm_No4`, `AH_mm_No5`, `AH_mm_No6`, `AH_mm_No7`, `AH_mm_No8`, `AH_mm_No9`, `AH_mm_No10`, `e_AH_Ho_No1`, `e_AH_Ho_No2`, `e_AH_Ho_No3`, `e_AH_Ho_No4`, `e_AH_Ho_No5`, `e_AH_Ho_No6`, `e_AH_Ho_No7`, `e_AH_Ho_No8`, `e_AH_Ho_No9`, `e_AH_Ho_No10`, `AH_Hs_No1`, `AH_Hs_No2`, `AH_Hs_No3`, `AH_Hs_No4`, `AH_Hs_No5`, `AH_Hs_No6`, `AH_Hs_No7`, `AH_Hs_No8`, `AH_Hs_No9`, `AH_Hs_No10`, `Ov_e_No1`, `Ov_e_No2`, `Ov_e_No3`, `Ov_e_No4`, `Ov_e_No5`, `Ov_e_No6`, `Ov_e_No7`, `Ov_e_No8`, `Ov_e_No9`, `Ov_e_No10`, `e_No1`, `e_No2`, `e_No3`, `e_No4`, `e_No5`, `e_No6`, `e_No7`, `e_No8`, `e_No9`, `e_No10`, `Lectura_Dial_No1`, `Lectura_Dial_No2`, `Lectura_Dial_No3`, `Lectura_Dial_No4`, `Lectura_Dial_No5`, `Lectura_Dial_No6`, `Lectura_Dial_No7`, `Deformacion_cm_No1`, `Deformacion_cm_No2`, `Deformacion_cm_No3`, `Deformacion_cm_No4`, `Deformacion_cm_No5`, `Deformacion_cm_No6`, `Deformacion_cm_No7`, `Peso_Kg_No1`, `Peso_Kg_No2`, `Peso_Kg_No3`, `Peso_Kg_No4`, `Peso_Kg_No5`, `Peso_Kg_No6`, `Peso_Kg_No7`, `o_Kg_cm2_No1`, `o_Kg_cm2_No2`, `o_Kg_cm2_No3`, `o_Kg_cm2_No4`, `o_Kg_cm2_No5`, `o_Kg_cm2_No6`, `o_Kg_cm2_No7`, `Ao_Kg_cm2_No1`, `Ao_Kg_cm2_No2`, `Ao_Kg_cm2_No3`, `Ao_Kg_cm2_No4`, `Ao_Kg_cm2_No5`, `Ao_Kg_cm2_No6`, `Ao_Kg_cm2_No7`, `Ah_mm_Col2_No1`, `Ah_mm_Col2_No2`, `Ah_mm_Col2_No3`, `Ah_mm_Col2_No4`, `Ah_mm_Col2_No5`, `Ah_mm_Col2_No6`, `Ah_mm_Col2_No7`, `Ae_No1`, `Ae_No2`, `Ae_No3`, `Ae_No4`, `Ae_No5`, `Ae_No6`, `Ae_No7`, `e_Col2_No1`, `e_Col2_No2`, `e_Col2_No3`, `e_Col2_No4`, `e_Col2_No5`, `e_Col2_No6`, `e_Col2_No7`, `Ae_Ao_cm2_Kg_No1`, `Ae_Ao_cm2_Kg_No2`, `Ae_Ao_cm2_Kg_No3`, `Ae_Ao_cm2_Kg_No4`, `Ae_Ao_cm2_Kg_No5`, `Ae_Ao_cm2_Kg_No6`, `Ae_Ao_cm2_Kg_No7`, `Cv_cm2_Kg_No1`, `Cv_cm2_Kg_No2`, `Cv_cm2_Kg_No3`, `Cv_cm2_Kg_No4`, `Cv_cm2_Kg_No5`, `Cv_cm2_Kg_No6`, `Cv_cm2_Kg_No7`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(3, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D46', 'A', '2023-09-12', '2023-09-12', '2023-09-12', '2023-09-12', '2023-09-12', '2023-09-12', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Kg1', 100, 101, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kg2', 100, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kg3', 100, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kg4', 100, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kg5', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 1010, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '010', 101, 5, 5, 0, -96, 0, 0, 5, 19.63, 98.17, 5, 5, 0, 5, 0, 0.417623, 4.0927, 2, 0, 41, 0, 0, 45, 15, 0, 0, 5, 4, 5, 45, 5, 4, 0, 41, 0, 41, 0, 0, 0, 0, 0, 0, '', '', '', '', 2, 4, 54, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 4, 54, 5, 0, 0, 0, 0, 0, 0, 8, 16, 216, 20, 0, 0, 0, 0, 0, 0, 0.18, 0.36, 4.8, 0.44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-12', '2023-09-12', 'Comentario', 'NOSE', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `count_gama`
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
-- Dumping data for table `count_gama`
--

INSERT INTO `count_gama` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Date_Count_1`, `Date_Count_2`, `Date_Count_3`, `Date_Count_4`, `Date_Count_5`, `Value_Count_1`, `Value_Count_2`, `Value_Count_3`, `Value_Count_4`, `Value_Count_5`, `Rank_Date_1`, `Rank_Date_2`, `Rank_Date_3`, `Rank_Date_4`, `Rank_Date_5`, `Operator_1`, `Operator_2`, `Operator_3`, `Operator_4`, `Operator_5`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'Choose...', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'Comentario', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM D6938', 'A', 'date count 1', 'date count 2', 'date count 3', 'date count 4', 'date count 5', 'Value of Count 1', 'Value of Count 2', 'Value of Count 3', 'Value of Count 4', 'Value of Count 5', 'Rank to Date 1', 'Rank to Date 2', 'Rank to Date 3', 'Rank to Date 4', 'Rank to Date 5', 'Operator 1', 'Operator 2', 'Operator 3', 'Operator 4', 'Operator 5', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'as', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `density_bulk`
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
-- Dumping data for table `density_bulk`
--

INSERT INTO `density_bulk` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Container`, `Weight_Tare_g`, `Weight_Tare_Soil_g`, `Volume_The_Mold_m3`, `Weight_Loose_Material_g`, `Absorption_Porce`, `Specific_Gravity_OD`, `Density_Water_Kgm3`, `Loose_Bulk_Denisty_Kgm3`, `Percent_Voids_Loose_Aggregate`, `Compacted_Weight_Tare_g`, `Compacted_Weight_Tare_Soil_g`, `Compacted_Volume_The_Mold_m3`, `Weight_Compacted_Material_g`, `Compacted_Absorption_Porce`, `Compacted_Specific_Gravity_OD`, `Compacted_Density_Water_Kgm3`, `Compacted_Bulk_Denisty_Kgm3`, `Percent_Voids_Compacted_Aggregate`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C29', 'A', 'Container', 1, 2, 3, 1, 4, 5, 6, 0, 100, 1, 2, 3, 4, 5, 6, 3, 0, 99.99, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-09-07', 'comentario', 'Bulk-Density', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `density_weigth`
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
-- Dumping data for table `density_weigth`
--

INSERT INTO `density_weigth` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Shape_Type_1`, `Shape_Type_2`, `Shape_Type_3`, `Mass_Moist_Specimen_1`, `Mass_Moist_Specimen_2`, `Mass_Moist_Specimen_3`, `Diameter_Width_1`, `Diameter_Width_2`, `Diameter_Width_3`, `Height_1`, `Height_2`, `Height_3`, `Length_1`, `Length_2`, `Length_3`, `Volumes_Moist_Soil_1`, `Volumes_Moist_Soil_2`, `Volumes_Moist_Soil_3`, `Total_Volumes_Moist_Specimen`, `Mass_Moist_Total_Specimens`, `Water_Content_Specimen`, `Density_Total_Moist_Specimen`, `Moist_Unit_Weight_Specimen_grcm3`, `Moist_Unit_Weight_Specimen_KNm3`, `Dry_Unit_Weight_Specimen_KNm3`, `Moist_Unit_Weight_Specimen_Kgm3`, `Dry_Unit_Weight_Specimen_Kgm3`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D7263', 'B', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-26', '2023-08-28', 'Run', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D7263', 'A', 'Cylindrical', 'Cylindrical', 'Cubical', 1589.5, 1589.5, 1589.5, 1258.2, 1258.2, 1258.2, 63.5, 63.5, 63.5, 45.2, 45.2, 45.2, 78952, 78952, 902.82, 52935.6, 1589.5, 25.85, 0.03, 0.02, 0.29, 0.23, 29.45, 23.4, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `double_hydrometer`
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
-- Dumping data for table `double_hydrometer`
--

INSERT INTO `double_hydrometer` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Dispersing_Agent`, `Amount_Used_g`, `Temperature_of_Test`, `Viscosity_of_Water_gs_cm2`, `Mass_Density_of_Water_Calibrated`, `Acceleration_cm_s2`, `Volume_of_Suspension_Vsp_cm3`, `Meniscus_Correction_Cm`, `Percent_Passing_No_200_sieve`, `Specific_Gravity`, `Tare_Name_50gr`, `Tare_Name_25gr`, `Oven_Temperature_50gr`, `Oven_Temperature_25gr`, `Tare_Plus_Wet_Soil_50gr`, `Tare_Plus_Wet_Soil_25gr`, `Tare_Plus_Dry_Soil_50gr`, `Tare_Plus_Dry_Soil_25gr`, `Water_Ww_50gr`, `Water_Ww_25gr`, `Tare_50gr`, `Tare_25gr`, `Dry_Soil_Ws_50gr`, `Dry_Soil_Ws_25gr`, `Moisture_Content_Porce_50gr`, `Moisture_Content_Porce_25gr`, `Hy_Calibration_50gr_Temperature_No1`, `Hy_Calibration_50gr_Temperature_No2`, `Hy_Calibration_50gr_Temperature_No3`, `Hy_Calibration_50gr_Temperature_No4`, `Hy_Calibration_50gr_Temperature_No5`, `Hy_Calibration_50gr_Temperature_No6`, `Hy_Calibration_50gr_Temperature_No7`, `Hy_Calibration_50gr_Temperature_No8`, `Hy_Calibration_50gr_Temperature_No9`, `Hy_Calibration_50gr_Actual_Reading_No1`, `Hy_Calibration_50gr_Actual_Reading_No2`, `Hy_Calibration_50gr_Actual_Reading_No3`, `Hy_Calibration_50gr_Actual_Reading_No4`, `Hy_Calibration_50gr_Actual_Reading_No5`, `Hy_Calibration_50gr_Actual_Reading_No6`, `Hy_Calibration_50gr_Actual_Reading_No7`, `Hy_Calibration_50gr_Actual_Reading_No8`, `Hy_Calibration_50gr_Actual_Reading_No9`, `Hy_Measure_Fluid_50gr_Temperature_No1`, `Hy_Measure_Fluid_50gr_Temperature_No2`, `Hy_Measure_Fluid_50gr_Temperature_No3`, `Hy_Measure_Fluid_50gr_Temperature_No4`, `Hy_Measure_Fluid_50gr_Temperature_No5`, `Hy_Measure_Fluid_50gr_Temperature_No6`, `Hy_Measure_Fluid_50gr_Temperature_No7`, `Hy_Measure_Fluid_50gr_Temperature_No8`, `Hy_Measure_Fluid_50gr_Temperature_No9`, `Hy_Measure_Fluid_50gr_Actual_Reading_No1`, `Hy_Measure_Fluid_50gr_Actual_Reading_No2`, `Hy_Measure_Fluid_50gr_Actual_Reading_No3`, `Hy_Measure_Fluid_50gr_Actual_Reading_No4`, `Hy_Measure_Fluid_50gr_Actual_Reading_No5`, `Hy_Measure_Fluid_50gr_Actual_Reading_No6`, `Hy_Measure_Fluid_50gr_Actual_Reading_No7`, `Hy_Measure_Fluid_50gr_Actual_Reading_No8`, `Hy_Measure_Fluid_50gr_Actual_Reading_No9`, `Hy_Calibration_25gr_Temperature_No1`, `Hy_Calibration_25gr_Temperature_No2`, `Hy_Calibration_25gr_Temperature_No3`, `Hy_Calibration_25gr_Temperature_No4`, `Hy_Calibration_25gr_Temperature_No5`, `Hy_Calibration_25gr_Temperature_No6`, `Hy_Calibration_25gr_Temperature_No7`, `Hy_Calibration_25gr_Temperature_No8`, `Hy_Calibration_25gr_Temperature_No9`, `Hy_Calibration_25gr_Actual_Reading_No1`, `Hy_Calibration_25gr_Actual_Reading_No2`, `Hy_Calibration_25gr_Actual_Reading_No3`, `Hy_Calibration_25gr_Actual_Reading_No4`, `Hy_Calibration_25gr_Actual_Reading_No5`, `Hy_Calibration_25gr_Actual_Reading_No6`, `Hy_Calibration_25gr_Actual_Reading_No7`, `Hy_Calibration_25gr_Actual_Reading_No8`, `Hy_Calibration_25gr_Actual_Reading_No9`, `Hy_Measure_Fluid_25gr_Temperature_No1`, `Hy_Measure_Fluid_25gr_Temperature_No2`, `Hy_Measure_Fluid_25gr_Temperature_No3`, `Hy_Measure_Fluid_25gr_Temperature_No4`, `Hy_Measure_Fluid_25gr_Temperature_No5`, `Hy_Measure_Fluid_25gr_Temperature_No6`, `Hy_Measure_Fluid_25gr_Temperature_No7`, `Hy_Measure_Fluid_25gr_Temperature_No8`, `Hy_Measure_Fluid_25gr_Temperature_No9`, `Hy_Measure_Fluid_25gr_Actual_Reading_No1`, `Hy_Measure_Fluid_25gr_Actual_Reading_No2`, `Hy_Measure_Fluid_25gr_Actual_Reading_No3`, `Hy_Measure_Fluid_25gr_Actual_Reading_No4`, `Hy_Measure_Fluid_25gr_Actual_Reading_No5`, `Hy_Measure_Fluid_25gr_Actual_Reading_No6`, `Hy_Measure_Fluid_25gr_Actual_Reading_No7`, `Hy_Measure_Fluid_25gr_Actual_Reading_No8`, `Hy_Measure_Fluid_25gr_Actual_Reading_No9`, `gr25_Date_No1`, `gr25_Date_No2`, `gr25_Date_No3`, `gr25_Date_No4`, `gr25_Date_No5`, `gr25_Date_No6`, `gr25_Date_No7`, `gr25_Date_No8`, `gr25_Date_No9`, `gr25_Hour_No1`, `gr25_Hour_No2`, `gr25_Hour_No3`, `gr25_Hour_No4`, `gr25_Hour_No5`, `gr25_Hour_No6`, `gr25_Hour_No7`, `gr25_Hour_No8`, `gr25_Hour_No9`, `gr25_Reading_Time_min_No1`, `gr25_Reading_Time_min_No2`, `gr25_Reading_Time_min_No3`, `gr25_Reading_Time_min_No4`, `gr25_Reading_Time_min_No5`, `gr25_Reading_Time_min_No6`, `gr25_Reading_Time_min_No7`, `gr25_Reading_Time_min_No8`, `gr25_Reading_Time_min_No9`, `gr25_Temp_No1`, `gr25_Temp_No2`, `gr25_Temp_No3`, `gr25_Temp_No4`, `gr25_Temp_No5`, `gr25_Temp_No6`, `gr25_Temp_No7`, `gr25_Temp_No8`, `gr25_Temp_No9`, `gr25_Hydrometer_Readings_Rm_No1`, `gr25_Hydrometer_Readings_Rm_No2`, `gr25_Hydrometer_Readings_Rm_No3`, `gr25_Hydrometer_Readings_Rm_No4`, `gr25_Hydrometer_Readings_Rm_No5`, `gr25_Hydrometer_Readings_Rm_No6`, `gr25_Hydrometer_Readings_Rm_No7`, `gr25_Hydrometer_Readings_Rm_No8`, `gr25_Hydrometer_Readings_Rm_No9`, `gr25_A_or_B_depending_of_the_Hy_type_No1`, `gr25_A_or_B_depending_of_the_Hy_type_No2`, `gr25_A_or_B_depending_of_the_Hy_type_No3`, `gr25_A_or_B_depending_of_the_Hy_type_No4`, `gr25_A_or_B_depending_of_the_Hy_type_No5`, `gr25_A_or_B_depending_of_the_Hy_type_No6`, `gr25_A_or_B_depending_of_the_Hy_type_No7`, `gr25_A_or_B_depending_of_the_Hy_type_No8`, `gr25_A_or_B_depending_of_the_Hy_type_No9`, `gr25_Offset_at_Reading_rdm_No1`, `gr25_Offset_at_Reading_rdm_No2`, `gr25_Offset_at_Reading_rdm_No3`, `gr25_Offset_at_Reading_rdm_No4`, `gr25_Offset_at_Reading_rdm_No5`, `gr25_Offset_at_Reading_rdm_No6`, `gr25_Offset_at_Reading_rdm_No7`, `gr25_Offset_at_Reading_rdm_No8`, `gr25_Offset_at_Reading_rdm_No9`, `gr25_Mass_Percent_Finer_Nm_Porce_No1`, `gr25_Mass_Percent_Finer_Nm_Porce_No2`, `gr25_Mass_Percent_Finer_Nm_Porce_No3`, `gr25_Mass_Percent_Finer_Nm_Porce_No4`, `gr25_Mass_Percent_Finer_Nm_Porce_No5`, `gr25_Mass_Percent_Finer_Nm_Porce_No6`, `gr25_Mass_Percent_Finer_Nm_Porce_No7`, `gr25_Mass_Percent_Finer_Nm_Porce_No8`, `gr25_Mass_Percent_Finer_Nm_Porce_No9`, `gr25_Effective_Length_Hm_No1`, `gr25_Effective_Length_Hm_No2`, `gr25_Effective_Length_Hm_No3`, `gr25_Effective_Length_Hm_No4`, `gr25_Effective_Length_Hm_No5`, `gr25_Effective_Length_Hm_No6`, `gr25_Effective_Length_Hm_No7`, `gr25_Effective_Length_Hm_No8`, `gr25_Effective_Length_Hm_No9`, `gr25_D_mm_No1`, `gr25_D_mm_No2`, `gr25_D_mm_No3`, `gr25_D_mm_No4`, `gr25_D_mm_No5`, `gr25_D_mm_No6`, `gr25_D_mm_No7`, `gr25_D_mm_No8`, `gr25_D_mm_No9`, `gr50_Date_No1`, `gr50_Date_No2`, `gr50_Date_No3`, `gr50_Date_No4`, `gr50_Date_No5`, `gr50_Date_No6`, `gr50_Date_No7`, `gr50_Date_No8`, `gr50_Date_No9`, `gr50_Hour_No1`, `gr50_Hour_No2`, `gr50_Hour_No3`, `gr50_Hour_No4`, `gr50_Hour_No5`, `gr50_Hour_No6`, `gr50_Hour_No7`, `gr50_Hour_No8`, `gr50_Hour_No9`, `gr50_Reading_Time_min_No1`, `gr50_Reading_Time_min_No2`, `gr50_Reading_Time_min_No3`, `gr50_Reading_Time_min_No4`, `gr50_Reading_Time_min_No5`, `gr50_Reading_Time_min_No6`, `gr50_Reading_Time_min_No7`, `gr50_Reading_Time_min_No8`, `gr50_Reading_Time_min_No9`, `gr50_Temp_No1`, `gr50_Temp_No2`, `gr50_Temp_No3`, `gr50_Temp_No4`, `gr50_Temp_No5`, `gr50_Temp_No6`, `gr50_Temp_No7`, `gr50_Temp_No8`, `gr50_Temp_No9`, `gr50_Hydrometer_Readings_Rm_No1`, `gr50_Hydrometer_Readings_Rm_No2`, `gr50_Hydrometer_Readings_Rm_No3`, `gr50_Hydrometer_Readings_Rm_No4`, `gr50_Hydrometer_Readings_Rm_No5`, `gr50_Hydrometer_Readings_Rm_No6`, `gr50_Hydrometer_Readings_Rm_No7`, `gr50_Hydrometer_Readings_Rm_No8`, `gr50_Hydrometer_Readings_Rm_No9`, `gr50_A_or_B_depending_of_the_Hy_type_No1`, `gr50_A_or_B_depending_of_the_Hy_type_No2`, `gr50_A_or_B_depending_of_the_Hy_type_No3`, `gr50_A_or_B_depending_of_the_Hy_type_No4`, `gr50_A_or_B_depending_of_the_Hy_type_No5`, `gr50_A_or_B_depending_of_the_Hy_type_No6`, `gr50_A_or_B_depending_of_the_Hy_type_No7`, `gr50_A_or_B_depending_of_the_Hy_type_No8`, `gr50_A_or_B_depending_of_the_Hy_type_No9`, `gr50_Offset_at_Reading_rdm_No1`, `gr50_Offset_at_Reading_rdm_No2`, `gr50_Offset_at_Reading_rdm_No3`, `gr50_Offset_at_Reading_rdm_No4`, `gr50_Offset_at_Reading_rdm_No5`, `gr50_Offset_at_Reading_rdm_No6`, `gr50_Offset_at_Reading_rdm_No7`, `gr50_Offset_at_Reading_rdm_No8`, `gr50_Offset_at_Reading_rdm_No9`, `gr50_Mass_Percent_Finer_Nm_Porce_No1`, `gr50_Mass_Percent_Finer_Nm_Porce_No2`, `gr50_Mass_Percent_Finer_Nm_Porce_No3`, `gr50_Mass_Percent_Finer_Nm_Porce_No4`, `gr50_Mass_Percent_Finer_Nm_Porce_No5`, `gr50_Mass_Percent_Finer_Nm_Porce_No6`, `gr50_Mass_Percent_Finer_Nm_Porce_No7`, `gr50_Mass_Percent_Finer_Nm_Porce_No8`, `gr50_Mass_Percent_Finer_Nm_Porce_No9`, `gr50_Effective_Length_Hm_No1`, `gr50_Effective_Length_Hm_No2`, `gr50_Effective_Length_Hm_No3`, `gr50_Effective_Length_Hm_No4`, `gr50_Effective_Length_Hm_No5`, `gr50_Effective_Length_Hm_No6`, `gr50_Effective_Length_Hm_No7`, `gr50_Effective_Length_Hm_No8`, `gr50_Effective_Length_Hm_No9`, `gr50_D_mm_No1`, `gr50_D_mm_No2`, `gr50_D_mm_No3`, `gr50_D_mm_No4`, `gr50_D_mm_No5`, `gr50_D_mm_No6`, `gr50_D_mm_No7`, `gr50_D_mm_No8`, `gr50_D_mm_No9`, `Nm_2um_Not_Dispersed`, `Nm_2um_Dispersed`, `Porce_Dispersion`, `Classification`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(7, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D46', 'A', '(NaPO3)6', 1000, '100', 0.01, 0.97465, 980.7, 1000, 10, 10, 2.65, 'l', 'l', '110 º C', '110 º C', 100, 101, 20, 20, 80, 81, 3, 0, 17, 20, 470.59, 405, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-12', '2023-09-12', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2023-09-12', '0000-00-00', '14:31:00', '14:31:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '14:31:00', '00:00:00', 1, 2, 4, 15, 30, 60, 240, 340, 1440, 1, 2, 3, 4, 5, 6, 7, 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-12', '2023-09-12', '0000-00-00', '0000-00-00', '2023-09-12', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '14:31:00', '14:31:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1, 2, 4, 15, 30, 60, 240, 340, 1440, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No Dispersive', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-12', '2023-09-12', 'commes', 'NOSE', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `ensayos_en_revision`
--

CREATE TABLE `ensayos_en_revision` (
  `id` int(10) UNSIGNED NOT NULL,
  `Sample_ID` varchar(150) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ensayos_en_revision`
--

INSERT INTO `ensayos_en_revision` (`id`, `Sample_ID`, `Tecnico`, `Fecha_Inicio`, `Fecha_final`) VALUES
(9, 'PVDC-AGG23-NTSF-001', 'WD', '2023-07-10 00:37:26', '0000-00-00 00:00:00'),
(10, 'PVDC-AGG23-NTSF-001', 'WD', '2023-07-10 00:37:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ensayo_en_entrega`
--

CREATE TABLE `ensayo_en_entrega` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_de_Entrega` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ensayo_en_entrega`
--

INSERT INTO `ensayo_en_entrega` (`id`, `Sample_ID`, `Tecnico`, `Fecha_de_Entrega`) VALUES
(10, 'PVDC-AGG23-001-GS', 'WD', '2023-07-10 00:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `ensayo_en_repeticion`
--

CREATE TABLE `ensayo_en_repeticion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(25) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ensayo_gama`
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
-- Dumping data for table `ensayo_gama`
--

INSERT INTO `ensayo_gama` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Station`, `Max_Dry_Density_Kgm3`, `Max_Wet_Density_Kgm3`, `Percent_Moisture_Content`, `Optimun_Moisture_Content`, `Max_Dry_Density`, `Percent_of_Compaction`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM D6938', 'B', 'A-85', 8592.53, 6589.52, 5234.56, 5423.25, 12358.2, 70, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'Cooment', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM D6938', 'C', 'A-85', 8592.53, 6589.52, 5234.56, 5423.25, 123, 6986, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-28', '2023-08-28', 'commen', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `eventoscalendar`
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
-- Table structure for table `grain_size`
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
-- Dumping data for table `grain_size`
--

INSERT INTO `grain_size` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Preparation_Method`, `Technician`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_40_1016`, `Porce_Ret_40_1016`, `Cum_Ret_40_1016`, `Porce_Pass_40_1016`, `Wt_Ret_12_304`, `Porce_Ret_12_304`, `Cum_Ret_12_304`, `Porce_Pass_12_304`, `Wt_Ret_10_254`, `Porce_Ret_10_254`, `Cum_Ret_10_254`, `Porce_Pass_10_254`, `Wt_Ret_8_203`, `Porce_Ret_8_203`, `Cum_Ret_8_203`, `Porce_Pass_8_203`, `Wt_Ret_6_152`, `Porce_Ret_6_152`, `Cum_Ret_6_152`, `Porce_Pass_6_152`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Wt_Ret_1p2_12`, `Porce_Ret_1p2_12`, `Cum_Ret_1p2_12`, `Porce_Pass_1p2_12`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Wt_Ret_No16_1`, `Porce_Ret_No16_1`, `Cum_Ret_No16_1`, `Porce_Pass_No16_1`, `Wt_Ret_No20_0p85`, `Porce_Ret_No20_0p85`, `Cum_Ret_No20_0p85`, `Porce_Pass_No20_0p85`, `Wt_Ret_No50_0p3`, `Porce_Ret_No50_0p3`, `Cum_Ret_No50_0p3`, `Porce_Pass_No50_0p3`, `Wt_Ret_No60_0p25`, `Porce_Ret_No60_0p25`, `Cum_Ret_No60_0p25`, `Porce_Pass_No60_0p25`, `Wt_Ret_No100_0p15`, `Porce_Ret_No100_0p15`, `Cum_Ret_No100_0p15`, `Porce_Pass_No100_0p15`, `Wt_Ret_No140_0p106`, `Porce_Ret_No140_0p106`, `Cum_Ret_No140_0p106`, `Porce_Pass_No140_0p106`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Comments`, `Graphic`, `Test_Start_Date`, `Report_Date`, `test_type`, `Split_Method`, `Standard`) VALUES
(7, 'TP-BGC23-NTSF-101', 'G7', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17', 'Oven_Dried', 'AR/SD', 'K-7', 1331, 1209, 533, 675, 343, 332, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 2, 0, 0, 100, 8, 1, 1, 99, 27, 4, 5, 95, 27, 4, 9, 91, 24, 3, 13, 87, 108, 16, 29, 71, 24, 4, 32, 68, 58, 9, 41, 59, 0, 0, 41, 59, 65, 10, 51, 49, 1, 0, 333, 49, 100, 0, 0, 1, 49, 49, 0, 0, 0, 0, 0, 0, 0, 'Runs  conducted to avoid sieve overloading as per  ASTM D6913-17, Clause 11.3.1 and table for maximu', NULL, '2023-07-19', '2023-07-19', 'GS-Soil', 'Man_Split', 'ASTM-D6913'),
(11, 'TP-BGC23-NTSF-100', 'G3', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'Oven_Dried', 'A-S', 'B-150', 921.67, 864.88, 309.23, 555.65, 217.55, 338.1, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 3.21, 0.58, 0.58, 99.42, 14.16, 2.55, 3.13, 96.87, 18.31, 3.3, 6.42, 93.58, 15.71, 2.83, 9.25, 90.751, 70.75, 12.73, 21.98, 78.02, 13.2, 2.38, 24.36, 75.64, 37.17, 6.69, 31.05, 68.953, 0, 0, 31.05, 68.953, 43.13, 7.76, 38.81, 61.19, 1.9, 0.34, 340, 61.19, 100, 0, 0, 0.58, 38.23, 61.19, 0, 0, 0, 0, 0.54, 0, 0, 'Run Go', NULL, '2023-08-24', '2023-08-24', 'GS-Soil', 'Man_Split', 'ASTM-D6913'),
(12, 'TP-BGC23-NTSF-100', 'G3', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'Oven_Dried', 'A-S', 'Container', 3586, 2598, 1256, 1342, 859.56, 482.44, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 0, 100, 0, 0, 482.44, 35.95, 35.95, 64.05, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 'comentario', NULL, '2023-08-28', '2023-08-28', 'GS-Soil', 'Mech_Split', 'ASTM-D6913');

-- --------------------------------------------------------

--
-- Table structure for table `grain_size_coarse_aggregate`
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
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `grain_size_coarse_aggregate`
--

INSERT INTO `grain_size_coarse_aggregate` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Date_Material_Arrive`, `Date_of_improvement`, `Improvement`, `Samples_usig_for_improvement_No1`, `Samples_usig_for_improvement_No2`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Specs_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Specs_4_101`, `Wt_Ret_3p5_89`, `Porce_Ret_3p5_89`, `Cum_Ret_3p5_89`, `Porce_Pass_3p5_89`, `Specs_3p5_89`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Specs_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Specs_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Specs_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Specs_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Specs_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Specs_3p4_19`, `Wt_Ret_1p2_12`, `Porce_Ret_1p2_12`, `Cum_Ret_1p2_12`, `Porce_Pass_1p2_12`, `Specs_1p2_12`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Specs_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Specs_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Specs_No10_2`, `Wt_Ret_No16_1`, `Porce_Ret_No16_1`, `Cum_Ret_No16_1`, `Porce_Pass_No16_1`, `Specs_No16_1`, `Wt_Ret_No20_0p85`, `Porce_Ret_No20_0p85`, `Cum_Ret_No20_0p85`, `Porce_Pass_No20_0p85`, `Specs_No20_0p85`, `Wt_Ret_No50_0p3`, `Porce_Ret_No50_0p3`, `Cum_Ret_No50_0p3`, `Porce_Pass_No50_0p3`, `Specs_No50_0p3`, `Wt_Ret_No60_0p25`, `Porce_Ret_No60_0p25`, `Cum_Ret_No60_0p25`, `Porce_Pass_No60_0p25`, `Specs_No60_0p25`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Specs_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Total_Sample_Weight_g`, `Weight_used_for_the_Test_g`, `A_Particles_Reactive`, `B_Particles_Reactive`, `C_Particles_Reactive`, `Weight_Mat_Ret_No_4_If_Applicable`, `Wt_Reactive_Part_Ret_No4_If_Applicable`, `Percent_Reactive_Particles_If_Applicable`, `Average_Particles_Reactive`, `Reaction_Strength_Result`, `Acid_Reactivity_Test_Result`, `Grain_Size_Test_Result`, `Fine_Grained_Classification_using_the_USCS`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM- C136', 'Oven_Dried', 'Mech_Split', '2023-09-07', '2023-09-08', 'Yes', '1', '2', 'lab', 45, 5, 2.45, 2.55, 2, 0.55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-08', '2023-09-08', 'Cooments', 'GS-Coarse', 'AS'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM- C136', 'Oven_Dried', 'Mech_Split', '2023-09-07', '2023-09-08', 'Yes', '1', '2', 'lab', 45, 5, 2.45, 2.55, 2, 0.55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-08', '2023-09-08', 'Cooments', 'GS-Coarse', 'AS'),
(3, 'TP-BGC23-NTSF-100', 'G3', 'ASTM- C136', 'Oven_Dried', 'Man_Split', '2023-09-08', '2023-09-08', 'Yes', '1', '2', 'lab', 45, 852, 52, 800, 420, 380, 0, 0, 0, 100, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 87, 0, 0, 0, 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'Rejected', 'Error: No se pudo clasificar el suelo.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-08', '2023-09-08', 'Cooments', 'GS-Coarse', 'AS'),
(4, 'TP-BGC23-NTSF-100', 'G3', 'ASTM- C136', 'Oven_Dried', 'Mech_Split', '2023-09-09', '2023-09-08', 'Yes', '1', '1', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 87, 0, 0, 0, 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No Reaction', 'Accepted', 'Rejected', 'Error: No se pudo clasificar el suelo.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-17', '2023-09-08', '5', 'GS-Coarse', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `grain_size_fine_aggregate`
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
  `Reaction_Strength_Result` float DEFAULT NULL,
  `Acid_Reactivity_Test_Result` varchar(25) DEFAULT NULL,
  `Grain_Size_Test_Result_No1` float DEFAULT NULL,
  `Grain_Size_Test_Result_No2` float DEFAULT NULL,
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
-- Dumping data for table `grain_size_fine_aggregate`
--

INSERT INTO `grain_size_fine_aggregate` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Date_Material_Arrive`, `Date_of_improvement`, `Improvement`, `Samples_usig_for_improvement_No1`, `Samples_usig_for_improvement_No2`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Specs_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Specs_4_101`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Specs_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Specs_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Specs_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Specs_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Specs_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Specs_3p4_19`, `Wt_Ret_1p2_12`, `Porce_Ret_1p2_12`, `Cum_Ret_1p2_12`, `Porce_Pass_1p2_12`, `Specs_1p2_12`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Specs_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Specs_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Specs_No10_2`, `Wt_Ret_No16_1`, `Porce_Ret_No16_1`, `Cum_Ret_No16_1`, `Porce_Pass_No16_1`, `Specs_No16_1`, `Wt_Ret_No20_0p85`, `Porce_Ret_No20_0p85`, `Cum_Ret_No20_0p85`, `Porce_Pass_No20_0p85`, `Specs_No20_0p85`, `Wt_Ret_No50_0p3`, `Porce_Ret_No50_0p3`, `Cum_Ret_No50_0p3`, `Porce_Pass_No50_0p3`, `Specs_No50_0p3`, `Wt_Ret_No60_0p25`, `Porce_Ret_No60_0p25`, `Cum_Ret_No60_0p25`, `Porce_Pass_No60_0p25`, `Specs_No60_0p25`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Specs_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Weight_used_for_the_Test_g`, `A_Particles_Reactive`, `B_Particles_Reactive`, `C_Particles_Reactive`, `D_Particles_Reactive`, `E_Particles_Reactive`, `Average_Particles_Reactive`, `Reaction_Strength_Result`, `Acid_Reactivity_Test_Result`, `Grain_Size_Test_Result_No1`, `Grain_Size_Test_Result_No2`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM- C136', 'Oven_Dried', 'Man_Split', '2023-09-08', '2023-09-08', 'Yes', 'A', 's', 'lab', 900, 850, 350, 500, 420, 80, 1, 0.2, 0.2, 99.8, 6, 1, 0.2, 0.4, 99.6, 5, 1, 0.2, 0.8, 99.2, 5, 1.5, 0.3, 1.1, 98.9, 6, 1.5, 0.3, 1.4, 98.6, 4, 1.6, 0.32, 1.72, 98.28, 5, 1, 0.2, 1.92, 98.08, 6, 2, 0.4, 2.32, 97.68, 5, 3, 0.6, 2.92, 97.08, 4, 4, 0.8, 3.72, 96.28, 100, 5, 1, 4.72, 95.28, 95, 6, 1.2, 5.92, 94.08, 75, 7, 1.4, 7.32, 92.68, 50, 8, 1.6, 8.92, 91.08, 4, 9, 1.8, 10.72, 89.28, 5, 2, 0.4, 11.12, 88.88, 0, 3, 0.6, 11.72, 88.28, 0, 50, 10, 130, 26, 37.72, 62.28, 45, 5, 5, 4, 5, 3, 4, 0, 'Accepted', 0, 0, 0.8, 3.92, 7, 88.28, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-08', '2023-09-08', 'Commen', 'UCS-grout', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `grain_size_rocks`
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

--
-- Dumping data for table `grain_size_rocks`
--

INSERT INTO `grain_size_rocks` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Screen_40_No1`, `Screen_40_No2`, `Screen_40_No3`, `Screen_40_No4`, `Screen_40_No5`, `Screen_40_No6`, `Screen_40_No7`, `Total_40_No8`, `Screen_30_No1`, `Screen_30_No2`, `Screen_30_No3`, `Screen_30_No4`, `Screen_30_No5`, `Screen_30_No6`, `Screen_30_No7`, `Total_30_No8`, `Screen_20_No1`, `Screen_20_No2`, `Screen_20_No3`, `Screen_20_No4`, `Screen_20_No5`, `Screen_20_No6`, `Screen_20_No7`, `Total_20_No8`, `Screen_13_No1`, `Screen_13_No2`, `Screen_13_No3`, `Screen_13_No4`, `Screen_13_No5`, `Screen_13_No6`, `Screen_13_No7`, `Total_13_No8`, `Screen_12_No1`, `Screen_12_No2`, `Screen_12_No3`, `Screen_12_No4`, `Screen_12_No5`, `Screen_12_No6`, `Screen_12_No7`, `Total_12_No8`, `Screen_10_No1`, `Screen_10_No2`, `Screen_10_No3`, `Screen_10_No4`, `Screen_10_No5`, `Screen_10_No6`, `Screen_10_No7`, `Total_10_No8`, `Screen_8_No1`, `Screen_8_No2`, `Screen_8_No3`, `Screen_8_No4`, `Screen_8_No5`, `Screen_8_No6`, `Screen_8_No7`, `Total_8_No8`, `Screen_6_No1`, `Screen_6_No2`, `Screen_6_No3`, `Screen_6_No4`, `Screen_6_No5`, `Screen_6_No6`, `Screen_6_No7`, `Total_6_No8`, `Screen_4_No1`, `Screen_4_No2`, `Screen_4_No3`, `Screen_4_No4`, `Screen_4_No5`, `Screen_4_No6`, `Screen_4_No7`, `Total_4_No8`, `Screen_3_No1`, `Screen_3_No2`, `Screen_3_No3`, `Screen_3_No4`, `Screen_3_No5`, `Screen_3_No6`, `Screen_3_No7`, `Total_3_No8`, `Total_De_Muestra_Mayor_de_3_Kg`, `Total_De_Muestra_Mayor_de_3_Gr`, `Total_De_Material_Pasante_Menos_3_Colum1_No1`, `Total_De_Material_Pasante_Menos_3_Colum1_No2`, `Total_De_Material_Pasante_Menos_3_Colum1_No3`, `Total_De_Material_Pasante_Menos_3_Colum1_No4`, `Total_De_Material_Pasante_Menos_3_Colum1_No5`, `Total_De_Material_Pasante_Menos_3_Colum1_No6`, `Total_De_Material_Pasante_Menos_3_Colum1_No7`, `Total_De_Material_Pasante_Menos_3_Colum1_No8`, `Total_De_Material_Pasante_Menos_3_Colum2_No1`, `Total_De_Material_Pasante_Menos_3_Colum2_No2`, `Total_De_Material_Pasante_Menos_3_Colum2_No3`, `Total_De_Material_Pasante_Menos_3_Colum2_No4`, `Total_De_Material_Pasante_Menos_3_Colum2_No5`, `Total_De_Material_Pasante_Menos_3_Colum2_No6`, `Total_De_Material_Pasante_Menos_3_Colum2_No7`, `Total_De_Material_Pasante_Menos_3_Colum2_No8`, `Total_De_Material_Pasante_Menos_3_Colum3_No1`, `Total_De_Material_Pasante_Menos_3_Colum3_No2`, `Total_De_Material_Pasante_Menos_3_Colum3_No3`, `Total_De_Material_Pasante_Menos_3_Colum3_No4`, `Total_De_Material_Pasante_Menos_3_Colum3_No5`, `Total_De_Material_Pasante_Menos_3_Colum3_No6`, `Total_De_Material_Pasante_Menos_3_Colum3_No7`, `Total_De_Material_Pasante_Menos_3_Colum3_No8`, `Total_De_Material_Pasante_Menos_3_Colum4_No1`, `Total_De_Material_Pasante_Menos_3_Colum4_No2`, `Total_De_Material_Pasante_Menos_3_Colum4_No3`, `Total_De_Material_Pasante_Menos_3_Colum4_No4`, `Total_De_Material_Pasante_Menos_3_Colum4_No5`, `Total_De_Material_Pasante_Menos_3_Colum4_No6`, `Total_De_Material_Pasante_Menos_3_Colum4_No7`, `Total_De_Material_Pasante_Menos_3_Colum4_No8`, `Total_De_Material_Pasante_Menos_3_Colum5_No1`, `Total_De_Material_Pasante_Menos_3_Colum5_No2`, `Total_De_Material_Pasante_Menos_3_Colum5_No3`, `Total_De_Material_Pasante_Menos_3_Colum5_No4`, `Total_De_Material_Pasante_Menos_3_Colum5_No5`, `Total_De_Material_Pasante_Menos_3_Colum5_No6`, `Total_De_Material_Pasante_Menos_3_Colum5_No7`, `Total_De_Material_Pasante_Menos_3_Colum5_No8`, `Total_De_Material_Pasante_Menos_3_Colum6_No1`, `Total_De_Material_Pasante_Menos_3_Colum6_No2`, `Total_De_Material_Pasante_Menos_3_Colum6_No3`, `Total_De_Material_Pasante_Menos_3_Colum6_No4`, `Total_De_Material_Pasante_Menos_3_Colum6_No5`, `Total_De_Material_Pasante_Menos_3_Colum6_No6`, `Total_De_Material_Pasante_Menos_3_Colum6_No7`, `Total_De_Material_Pasante_Menos_3_Colum6_No8`, `Total_De_Material_Pasante_Menos_3_Colum7_No1`, `Total_De_Material_Pasante_Menos_3_Colum7_No2`, `Total_De_Material_Pasante_Menos_3_Colum7_No3`, `Total_De_Material_Pasante_Menos_3_Colum7_No4`, `Total_De_Material_Pasante_Menos_3_Colum7_No5`, `Total_De_Material_Pasante_Menos_3_Colum7_No6`, `Total_De_Material_Pasante_Menos_3_Colum7_No7`, `Total_De_Material_Pasante_Menos_3_Colum7_No8`, `Total_De_Material_Pasante_Menos_3_Colum8_No1`, `Total_De_Material_Pasante_Menos_3_Colum8_No2`, `Total_De_Material_Pasante_Menos_3_Colum8_No3`, `Total_De_Material_Pasante_Menos_3_Colum8_No4`, `Total_De_Material_Pasante_Menos_3_Colum8_No5`, `Total_De_Material_Pasante_Menos_3_Colum8_No6`, `Total_De_Material_Pasante_Menos_3_Colum8_No7`, `Total_De_Material_Pasante_Menos_3_Colum8_No8`, `Total_De_Material_Pasante_Menos_3_Colum9_No1`, `Total_De_Material_Pasante_Menos_3_Colum9_No2`, `Total_De_Material_Pasante_Menos_3_Colum9_No3`, `Total_De_Material_Pasante_Menos_3_Colum9_No4`, `Total_De_Material_Pasante_Menos_3_Colum9_No5`, `Total_De_Material_Pasante_Menos_3_Colum9_No6`, `Total_De_Material_Pasante_Menos_3_Colum9_No7`, `Total_De_Material_Pasante_Menos_3_Colum9_No8`, `Total_De_Material_Pasante_Menos_3_Colum10_No1`, `Total_De_Material_Pasante_Menos_3_Colum10_No2`, `Total_De_Material_Pasante_Menos_3_Colum10_No3`, `Total_De_Material_Pasante_Menos_3_Colum10_No4`, `Total_De_Material_Pasante_Menos_3_Colum10_No5`, `Total_De_Material_Pasante_Menos_3_Colum10_No6`, `Total_De_Material_Pasante_Menos_3_Colum10_No7`, `Total_De_Material_Pasante_Menos_3_Colum10_No8`, `Total_De_Muestra_Menor_de_3_Kg`, `Total_De_Muestra_Menor_de_3_Gr`, `Tare_Name_No1`, `Tare_Name_No2`, `Tare_Name_No3`, `Oven_Temperature_No1`, `Oven_Temperature_No2`, `Oven_Temperature_No3`, `Tare_Plus_Wet_Soil_Gr_No1`, `Tare_Plus_Wet_Soil_Gr_No2`, `Tare_Plus_Wet_Soil_Gr_No3`, `Tare_Plus_Dry_Soil_Gr_No1`, `Tare_Plus_Dry_Soil_Gr_No2`, `Tare_Plus_Dry_Soil_Gr_No3`, `Water_Ww_Gr_No1`, `Water_Ww_Gr_No2`, `Water_Ww_Gr_No3`, `Tare_Gr_No1`, `Tare_Gr_No2`, `Tare_Gr_No3`, `Dry_Soil_Ws_Gr_No1`, `Dry_Soil_Ws_Gr_No2`, `Dry_Soil_Ws_Gr_No3`, `Moisture_Content_Porce_No1`, `Moisture_Content_Porce_No2`, `Moisture_Content_Porce_No3`, `Moisture_Content_Average_Porce`, `Mayor_a_3_Gr`, `Menor_a_3_Gr`, `Total_Peso_Seco_Sucio_Gr`, `Total_Peso_Lavado_Gr`, `Perdida_Por_Lavado_Gr`, `Peso_Seco_Sucio`, `Peso_Lavado`, `Pan_Lavado`, `Wt_Ret_3`, `Ret_3`, `Cum_Ret_3`, `Pass_3`, `Wt_Ret_21p2`, `Ret_21p2`, `Cum_Ret_21p2`, `Pass_21p2`, `Wt_Ret_2`, `Ret_2`, `Cum_Ret_2`, `Pass_2`, `Wt_Ret_1p5`, `Ret_1p5`, `Cum_Ret_1p5`, `Pass_1p5`, `Wt_Ret_1`, `Ret_1`, `Cum_Ret_1`, `Pass_1`, `Wt_Ret_3p4`, `Ret_3p4`, `Cum_Ret_3p4`, `Pass_3p4`, `Wt_Ret_1p2`, `Ret_1p2`, `Cum_Ret_1p2`, `Pass_1p2`, `Wt_Ret_3p8`, `Ret_3p8`, `Cum_Ret_3p8`, `Pass_3p8`, `Wt_Ret_No4`, `Ret_No4`, `Cum_Ret_No4`, `Pass_No4`, `Wt_Ret_No10`, `Ret_No10`, `Cum_Ret_No10`, `Pass_No10`, `Wt_Ret_No16`, `Ret_No16`, `Cum_Ret_No16`, `Pass_No16`, `Wt_Ret_No20`, `Ret_No20`, `Cum_Ret_No20`, `Pass_No20`, `Wt_Ret_No50`, `Ret_No50`, `Cum_Ret_No50`, `Pass_No50`, `Wt_Ret_No60`, `Ret_No60`, `Cum_Ret_No60`, `Pass_No60`, `Wt_Ret_No100`, `Ret_No100`, `Cum_Ret_No100`, `Pass_No100`, `Wt_Ret_No140`, `Ret_No140`, `Cum_Ret_No140`, `Pass_No140`, `Wt_Ret_No200`, `Ret_No200`, `Cum_Ret_No200`, `Pass_No200`, `Pan_Wt_Ret`, `Pan_Ret`, `Total_Wt_Ret`, `Total_Ret`, `Total_Cum_Ret`, `Total_Pass`, `Factor_De_Conversion`, `Gs_Wt_Ret_50`, `Gs_Ret_50`, `Gs_Cum_Ret_50`, `Gs_Pass_50`, `Gs_Wt_Ret_40`, `Gs_Ret_40`, `Gs_Cum_Ret_40`, `Gs_Pass_40`, `Gs_Wt_Ret_12`, `Gs_Ret_12`, `Gs_Cum_Ret_12`, `Gs_Pass_12`, `Gs_Wt_Ret_10`, `Gs_Ret_10`, `Gs_Cum_Ret_10`, `Gs_Pass_10`, `Gs_Wt_Ret_8`, `Gs_Ret_8`, `Gs_Cum_Ret_8`, `Gs_Pass_8`, `Gs_Wt_Ret_6`, `Gs_Ret_6`, `Gs_Cum_Ret_6`, `Gs_Pass_6`, `Gs_Wt_Ret_4`, `Gs_Ret_4`, `Gs_Cum_Ret_4`, `Gs_Pass_4`, `Gs_Wt_Ret_3`, `Gs_Ret_3`, `Gs_Cum_Ret_3`, `Gs_Pass_3`, `Gs_Wt_Ret_2p5`, `Gs_Ret_2p5`, `Gs_Cum_Ret_2p5`, `Gs_Pass_2p5`, `Gs_Wt_Ret_2`, `Gs_Ret_2`, `Gs_Cum_Ret_2`, `Gs_Pass_2`, `Gs_Wt_Ret_1p5`, `Gs_Ret_1p5`, `Gs_Cum_Ret_1p5`, `Gs_Pass_1p5`, `Gs_Wt_Ret_1`, `Gs_Ret_1`, `Gs_Cum_Ret_1`, `Gs_Pass_1`, `Gs_Wt_Ret_3p4`, `Gs_Ret_3p4`, `Gs_Cum_Ret_3p4`, `Gs_Pass_3p4`, `Gs_Wt_Ret_1p2`, `Gs_Ret_1p2`, `Gs_Cum_Ret_1p2`, `Gs_Pass_1p2`, `Gs_Wt_Ret_3p8`, `Gs_Ret_3p8`, `Gs_Cum_Ret_3p8`, `Gs_Pass_3p8`, `Gs_Wt_Ret_No4`, `Gs_Ret_No4`, `Gs_Cum_Ret_No4`, `Gs_Pass_No4`, `Gs_Wt_Ret_No10`, `Gs_Ret_No10`, `Gs_Cum_Ret_No10`, `Gs_Pass_No10`, `Gs_Wt_Ret_No16`, `Gs_Ret_No16`, `Gs_Cum_Ret_No16`, `Gs_Pass_No16`, `Gs_Wt_Ret_No20`, `Gs_Ret_No20`, `Gs_Cum_Ret_No20`, `Gs_Pass_No20`, `Gs_Wt_Ret_No50`, `Gs_Ret_No50`, `Gs_Cum_Ret_No50`, `Gs_Pass_No50`, `Gs_Wt_Ret_No60`, `Gs_Ret_No60`, `Gs_Cum_Ret_No60`, `Gs_Pass_No60`, `Gs_Wt_Ret_No100`, `Gs_Ret_No100`, `Gs_Cum_Ret_No100`, `Gs_Pass_No100`, `Gs_Wt_Ret_No140`, `Gs_Ret_No140`, `Gs_Cum_Ret_No140`, `Gs_Pass_No140`, `Gs_Wt_Ret_No200`, `Gs_Ret_No200`, `Gs_Cum_Ret_No200`, `Gs_Pass_No200`, `Gs_Pan_Wt_Ret`, `Gs_Pan_Ret`, `Gs_Total_Wt_Ret`, `Gs_Total_Ret`, `Gs_Total_Cum_Ret`, `Gs_Total_Pass`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D6913', 'Oven_Dried', 'Mech_Split', 4, 4, 41, 1, 4, 41, 0, 95, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 95, 95000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5456, 456, 456, 4, 5641, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12018, 12018000, '', '', '', '110 º C', '110 º C', '110 º C', 80, 80, 80, 5, 5, 5, 75, 75, 75, 45, 45, 4, -40, -40, 1, -187.5, -187.5, 7500, 2375, 95000, 485576, 580576, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 95000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-11', '2023-09-11', 'Comentario', 'GS-Coarse', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `grain_size_sieved_coarse_aggregate`
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
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `grain_size_sieved_coarse_aggregate`
--

INSERT INTO `grain_size_sieved_coarse_aggregate` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Date_Material_Arrive`, `Date_of_improvement`, `Improvement`, `Samples_usig_for_improvement_No1`, `Samples_usig_for_improvement_No2`, `Container`, `Tare_Wet_Soil`, `Tare_Dry_Soil`, `Tare`, `Dry_Soil`, `Washed`, `Wash_Pan`, `Wt_Ret_5_127`, `Porce_Ret_5_127`, `Cum_Ret_5_127`, `Porce_Pass_5_127`, `Specs_5_127`, `Wt_Ret_4_101`, `Porce_Ret_4_101`, `Cum_Ret_4_101`, `Porce_Pass_4_101`, `Specs_4_101`, `Wt_Ret_3p5_89`, `Porce_Ret_3p5_89`, `Cum_Ret_3p5_89`, `Porce_Pass_3p5_89`, `Specs_3p5_89`, `Wt_Ret_3_75`, `Porce_Ret_3_75`, `Cum_Ret_3_75`, `Porce_Pass_3_75`, `Specs_3_75`, `Wt_Ret_2p5_63`, `Porce_Ret_2p5_63`, `Cum_Ret_2p5_63`, `Porce_Pass_2p5_63`, `Specs_2p5_63`, `Wt_Ret_2_50`, `Porce_Ret_2_50`, `Cum_Ret_2_50`, `Porce_Pass_2_50`, `Specs_2_50`, `Wt_Ret_1p5_37`, `Porce_Ret_1p5_37`, `Cum_Ret_1p5_37`, `Porce_Pass_1p5_37`, `Specs_1p5_37`, `Wt_Ret_1_25`, `Porce_Ret_1_25`, `Cum_Ret_1_25`, `Porce_Pass_1_25`, `Specs_1_25`, `Wt_Ret_3p4_19`, `Porce_Ret_3p4_19`, `Cum_Ret_3p4_19`, `Porce_Pass_3p4_19`, `Specs_3p4_19`, `Wt_Ret_3p8_9`, `Porce_Ret_3p8_9`, `Cum_Ret_3p8_9`, `Porce_Pass_3p8_9`, `Specs_3p8_9`, `Wt_Ret_No4_4`, `Porce_Ret_No4_4`, `Cum_Ret_No4_4`, `Porce_Pass_No4_4`, `Specs_No4_4`, `Wt_Ret_No10_2`, `Porce_Ret_No10_2`, `Cum_Ret_No10_2`, `Porce_Pass_No10_2`, `Specs_No10_2`, `Wt_Ret_No200_0p075`, `Porce_Ret_No200_0p075`, `Cum_Ret_No200_0p075`, `Porce_Pass_No200_0p075`, `Specs_No200_0p075`, `Wt_Ret_Pan`, `Porce_Ret_Pan`, `Wt_Ret_Total_Pan`, `Porce_Ret_Total_Pan`, `Cum_Ret_Total_Pan`, `Porce_Pass_Total_Pan`, `Total_Sample_Weight_g`, `Weight_used_for_the_Test_g`, `A_Particles_Reactive`, `B_Particles_Reactive`, `C_Particles_Reactive`, `Weight_Mat_Ret_No_4_If_Applicable`, `Wt_Reactive_Part_Ret_No4_If_Applicable`, `Average_Particles_Reactive`, `Reaction_Strength_Result`, `Acid_Reactivity_Test_Result`, `Grain_Size_Test_Result`, `Fine_Grained_Classification_using_the_USCS`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM- C136', 'Oven_Dried', 'Mech_Split', '2023-09-08', '2023-09-19', 'Yes', '1', '2', 'LAB', 1250, 529.25, 52.36, 476.89, 12.56, 464.33, 0, 0, 0, -17.71, 0, 0, 0, 0, 100, 0, 0, 0, 0, 100, 0, 0, 0, 0, 100, 0, 0, 0, 0, 100, 0, 0, 0, 0, 100, 0, 0, 0, 0, 100, 0, 23, 4.82, 4.82, 95.18, 0, 12, 2.52, 7.34, 92.66, 0, 10, 2.1, 9.44, 90.56, 0, 8, 1.68, 11.11, 88.89, 0, 10, 2.1, 13.21, 86.79, 0, 2, 0.42, 13.63, 86.37, 0, 32, 6.71, 496.33, 104.08, 117.71, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No Reaction', 'Accepted', 'Rejected', 'Error: No se pudo clasificar el suelo.', 0, 11.11, 2.52, 86.37, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-08', '2023-09-08', 'Comentario', 'GS-Coarse', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `grout_specimens`
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
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `grout_specimens`
--

INSERT INTO `grout_specimens` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Diameter_N1`, `Diameter_N2`, `Diameter_N3`, `Diameter_N4`, `Diameter_N5`, `High_N1`, `High_N2`, `High_N3`, `High_N4`, `High_N5`, `Length_N1`, `Length_N2`, `Length_N3`, `Length_N4`, `Length_N5`, `Area_m2_N1`, `Area_m2_N2`, `Area_m2_N3`, `Area_m2_N4`, `Area_m2_N5`, `Volumen_m3_N1`, `Volumen_m3_N2`, `Volumen_m3_N3`, `Volumen_m3_N4`, `Volumen_m3_N5`, `Weight_Cylinder_kg_N1`, `Weight_Cylinder_kg_N2`, `Weight_Cylinder_kg_N3`, `Weight_Cylinder_kg_N4`, `Weight_Cylinder_kg_N5`, `Age_Days_N1`, `Age_Days_N2`, `Age_Days_N3`, `Age_Days_N4`, `Age_Days_N5`, `Unit_Weight_kgm3_N1`, `Unit_Weight_kgm3_N2`, `Unit_Weight_kgm3_N3`, `Unit_Weight_kgm3_N4`, `Unit_Weight_kgm3_N5`, `Failure_Load_kn_N1`, `Failure_Load_kn_N2`, `Failure_Load_kn_N3`, `Failure_Load_kn_N4`, `Failure_Load_kn_N5`, `Strenght_Mpa_N1`, `Strenght_Mpa_N2`, `Strenght_Mpa_N3`, `Strenght_Mpa_N4`, `Strenght_Mpa_N5`, `Average_Strenght_Mpa`, `Type_Mpa_N1`, `Type_Mpa_N2`, `Type_Mpa_N3`, `Type_Mpa_N4`, `Type_Mpa_N5`, `Observations_N1`, `Observations_N2`, `Observations_N3`, `Observations_N4`, `Observations_N5`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(12, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'AS', 'NOSE', 'A-S'),
(13, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'COMENTARIO', 'NOSE', 'A-S'),
(14, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 50, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'COMENTARIO', 'NOSE', 'A-S'),
(15, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 50, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'COMENTARIO', 'NOSE', 'A-S'),
(16, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 50, 30, 0, 0, 0, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'COMENTARIO', 'NOSE', 'A-S'),
(17, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Man_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'asfd', 'NOSE', 'asd'),
(18, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'Run Go', 'NOSE', 'A-S'),
(19, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'Run Go', 'NOSE', 'A-S'),
(20, 'TP-BGC23-NTSF-100', 'G3', 'ASTM C88', 'Oven_Dried', 'Mech_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'test fail', '', '', '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'as', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `hydrometer`
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
-- Dumping data for table `hydrometer`
--

INSERT INTO `hydrometer` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Dispersion_Device`, `Hydrometer_Type`, `Temperature_Type`, `Specific_Gravity_Type`, `Dispersing_Agent`, `Amount_Used_g`, `Temperature_of_Test`, `Viscosity_of_Water_gs_cm2`, `Mass_Density_of_Water_Calibrated`, `Acceleration_cm_s2`, `Volume_of_Suspension_Vsp_cm3`, `Meniscus_Correction_Cm`, `Percent_Passing_No_200_sieve`, `Liquid_Limit_Porce`, `Plasticity_Index_Porce`, `Specific_Gravity`, `Tare_Name`, `Oven_Temperature`, `Tare_Plus_Wet_Soil_gr`, `Tare_Plus_Dry_Soil_gr`, `Water_Ww_gr`, `Gs_Tare_gr`, `Dry_Soil_Ws_gr`, `Moisture_Content_Porce`, `Hy_Calibration_Temperature_No1`, `Hy_Calibration_Temperature_No2`, `Hy_Calibration_Temperature_No3`, `Hy_Calibration_Temperature_No4`, `Hy_Calibration_Temperature_No5`, `Hy_Calibration_Temperature_No6`, `Hy_Calibration_Temperature_No7`, `Hy_Calibration_Temperature_No8`, `Hy_Calibration_Temperature_No9`, `Hy_Calibration_Actual_Reading_No1`, `Hy_Calibration_Actual_Reading_No2`, `Hy_Calibration_Actual_Reading_No3`, `Hy_Calibration_Actual_Reading_No4`, `Hy_Calibration_Actual_Reading_No5`, `Hy_Calibration_Actual_Reading_No6`, `Hy_Calibration_Actual_Reading_No7`, `Hy_Calibration_Actual_Reading_No8`, `Hy_Calibration_Actual_Reading_No9`, `Hy_Measure_Fluid_Temperature_No1`, `Hy_Measure_Fluid_Temperature_No2`, `Hy_Measure_Fluid_Temperature_No3`, `Hy_Measure_Fluid_Temperature_No4`, `Hy_Measure_Fluid_Temperature_No5`, `Hy_Measure_Fluid_Temperature_No6`, `Hy_Measure_Fluid_Temperature_No7`, `Hy_Measure_Fluid_Temperature_No8`, `Hy_Measure_Fluid_Temperature_No9`, `Hy_Measure_Fluid_Actual_Reading_No1`, `Hy_Measure_Fluid_Actual_Reading_No2`, `Hy_Measure_Fluid_Actual_Reading_No3`, `Hy_Measure_Fluid_Actual_Reading_No4`, `Hy_Measure_Fluid_Actual_Reading_No5`, `Hy_Measure_Fluid_Actual_Reading_No6`, `Hy_Measure_Fluid_Actual_Reading_No7`, `Hy_Measure_Fluid_Actual_Reading_No8`, `Hy_Measure_Fluid_Actual_Reading_No9`, `Container`, `Wt_Wet_Soil_Tare_gr`, `Wt_Dry_Soil_Tare_gr`, `Tare_gr`, `Wt_Dry_Soil_gr`, `Wt_Washed_gr`, `Wt_Wash_Pan_gr`, `Wt_Ret_40`, `Ret_40`, `Cum_Ret_40`, `Pass_40`, `Wt_Ret_12`, `Ret_12`, `Cum_Ret_12`, `Pass_12`, `Wt_Ret_10`, `Ret_10`, `Cum_Ret_10`, `Pass_10`, `Wt_Ret_8`, `Ret_8`, `Cum_Ret_8`, `Pass_8`, `Wt_Ret_6`, `Ret_6`, `Cum_Ret_6`, `Pass_6`, `Wt_Ret_5`, `Ret_5`, `Cum_Ret_5`, `Pass_5`, `Wt_Ret_4`, `Ret_4`, `Cum_Ret_4`, `Pass_4`, `Wt_Ret_3`, `Ret_3`, `Cum_Ret_3`, `Pass_3`, `Wt_Ret_2p5`, `Ret_2p5`, `Cum_Ret_2p5`, `Pass_2p5`, `Wt_Ret_2`, `Ret_2`, `Cum_Ret_2`, `Pass_2`, `Wt_Ret_1p5`, `Ret_1p5`, `Cum_Ret_1p5`, `Pass_1p5`, `Wt_Ret_1`, `Ret_1`, `Cum_Ret_1`, `Pass_1`, `Wt_Ret_3p4`, `Ret_3p4`, `Cum_Ret_3p4`, `Pass_3p4`, `Wt_Ret_1p2`, `Ret_1p2`, `Cum_Ret_1p2`, `Pass_1p2`, `Wt_Ret_3p8`, `Ret_3p8`, `Cum_Ret_3p8`, `Pass_3p8`, `Wt_Ret_No4`, `Ret_No4`, `Cum_Ret_No4`, `Pass_No4`, `Wt_Ret_No10`, `Ret_No10`, `Cum_Ret_No10`, `Pass_No10`, `Wt_Ret_No16`, `Ret_No16`, `Cum_Ret_No16`, `Pass_No16`, `Wt_Ret_No20`, `Ret_No20`, `Cum_Ret_No20`, `Pass_No20`, `Wt_Ret_No50`, `Ret_No50`, `Cum_Ret_No50`, `Pass_No50`, `Wt_Ret_No60`, `Ret_No60`, `Cum_Ret_No60`, `Pass_No60`, `Wt_Ret_No100`, `Ret_No100`, `Cum_Ret_No100`, `Pass_No100`, `Wt_Ret_No140`, `Ret_No140`, `Cum_Ret_No140`, `Pass_No140`, `Wt_Ret_No200`, `Ret_No200`, `Cum_Ret_No200`, `Pass_No200`, `Pan_Wt_Ret`, `Pan_Ret`, `Total_Wt_Ret`, `Total_Ret`, `Total_Cum_Ret`, `Total_Pass`, `Coarser_than_Gravel`, `Gravel`, `Sand`, `Fines`, `D10`, `D15`, `D30`, `D60`, `D85`, `Cc`, `Cu`, `Date_No1`, `Date_No2`, `Date_No3`, `Date_No4`, `Date_No5`, `Date_No6`, `Date_No7`, `Date_No8`, `Date_No9`, `Hour_No1`, `Hour_No2`, `Hour_No3`, `Hour_No4`, `Hour_No5`, `Hour_No6`, `Hour_No7`, `Hour_No8`, `Hour_No9`, `Reading_Time_min_No1`, `Reading_Time_min_No2`, `Reading_Time_min_No3`, `Reading_Time_min_No4`, `Reading_Time_min_No5`, `Reading_Time_min_No6`, `Reading_Time_min_No7`, `Reading_Time_min_No8`, `Reading_Time_min_No9`, `Temp_No1`, `Temp_No2`, `Temp_No3`, `Temp_No4`, `Temp_No5`, `Temp_No6`, `Temp_No7`, `Temp_No8`, `Temp_No9`, `Hydrometer_Readings_Rm_No1`, `Hydrometer_Readings_Rm_No2`, `Hydrometer_Readings_Rm_No3`, `Hydrometer_Readings_Rm_No4`, `Hydrometer_Readings_Rm_No5`, `Hydrometer_Readings_Rm_No6`, `Hydrometer_Readings_Rm_No7`, `Hydrometer_Readings_Rm_No8`, `Hydrometer_Readings_Rm_No9`, `A_or_B_depending_of_the_Hy_type_No1`, `A_or_B_depending_of_the_Hy_type_No2`, `A_or_B_depending_of_the_Hy_type_No3`, `A_or_B_depending_of_the_Hy_type_No4`, `A_or_B_depending_of_the_Hy_type_No5`, `A_or_B_depending_of_the_Hy_type_No6`, `A_or_B_depending_of_the_Hy_type_No7`, `A_or_B_depending_of_the_Hy_type_No8`, `A_or_B_depending_of_the_Hy_type_No9`, `Offset_at_Reading_rdm_No1`, `Offset_at_Reading_rdm_No2`, `Offset_at_Reading_rdm_No3`, `Offset_at_Reading_rdm_No4`, `Offset_at_Reading_rdm_No5`, `Offset_at_Reading_rdm_No6`, `Offset_at_Reading_rdm_No7`, `Offset_at_Reading_rdm_No8`, `Offset_at_Reading_rdm_No9`, `Mass_Percent_Finer_Nm_Porce_No1`, `Mass_Percent_Finer_Nm_Porce_No2`, `Mass_Percent_Finer_Nm_Porce_No3`, `Mass_Percent_Finer_Nm_Porce_No4`, `Mass_Percent_Finer_Nm_Porce_No5`, `Mass_Percent_Finer_Nm_Porce_No6`, `Mass_Percent_Finer_Nm_Porce_No7`, `Mass_Percent_Finer_Nm_Porce_No8`, `Mass_Percent_Finer_Nm_Porce_No9`, `Effective_Length_Hm_No1`, `Effective_Length_Hm_No2`, `Effective_Length_Hm_No3`, `Effective_Length_Hm_No4`, `Effective_Length_Hm_No5`, `Effective_Length_Hm_No6`, `Effective_Length_Hm_No7`, `Effective_Length_Hm_No8`, `Effective_Length_Hm_No9`, `D_mm_No1`, `D_mm_No2`, `D_mm_No3`, `D_mm_No4`, `D_mm_No5`, `D_mm_No6`, `D_mm_No7`, `D_mm_No8`, `D_mm_No9`, `Passing_Percentage_Respect_to_the_Total_Sample_No1`, `Passing_Percentage_Respect_to_the_Total_Sample_No2`, `Passing_Percentage_Respect_to_the_Total_Sample_No3`, `Passing_Percentage_Respect_to_the_Total_Sample_No4`, `Passing_Percentage_Respect_to_the_Total_Sample_No5`, `Passing_Percentage_Respect_to_the_Total_Sample_No6`, `Passing_Percentage_Respect_to_the_Total_Sample_No7`, `Passing_Percentage_Respect_to_the_Total_Sample_No8`, `Passing_Percentage_Respect_to_the_Total_Sample_No9`, `Classification_of_Soils_as_per_USCS`, `ASTM_designation_D_2487_06`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(7, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D7928', 'Moist', 'Cup-Mixer', '151H', 'Companion-Measurements', 'Assumed', '(NaPO3)6', 8545, '545', 0.01, 0.84115, 980.7, 1000, 0, 0, 0, 0, 0, '', '110 ºC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-11', '2023-09-11', '2023-09-11', '2023-09-11', '2023-09-11', '2023-09-11', '2023-09-11', '2023-09-11', '2023-09-11', '14:56:00', '14:56:00', '14:56:00', '14:56:00', '14:56:00', '14:56:00', '14:56:00', '14:56:00', '14:56:00', 1, 2, 4, 15, 30, 60, 240, 340, 1440, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-11', '2023-09-11', 'hggf', 'GS-Coarse', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `inalteraded_samples`
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

--
-- Dumping data for table `inalteraded_samples`
--

INSERT INTO `inalteraded_samples` (`id`, `Sample_ID`, `Sample_Number`, `Sample_Type`, `Depth_From`, `Depth_To`, `Sample_Length`, `Sample_Weight`, `Sample_Date`, `Store_In`, `Comment`) VALUES
(1, 'DH-BGC22-NTSF-055', 'R7', 'Lexan', '35.52', '35.80', '0.90', '6.30', '2022-11-28', 'Sample in PVDJ Laboratory - Seccion B.', 'Sample for TCS.'),
(0, 'DH-BGC22-S14-100', 'MX2', 'Maxier', '0.45', '2.25', '1.15', '3.50', '2023-09-06', 'Store_PVLab', 'sample for TCS '),
(0, 'DH-BGC23-NTSF-001', 'LX4', 'Lexan', '24.45', '25.60', '0.40', '2.75', '2023-09-05', 'Stored_PVLab', 'Sample For TCS, Stored in Section A of the warehouse'),
(0, 'DH-BGC23-NTSF-001', 'LX5', 'Lexan', '27.30', '28.90', '1.00', '6.80', '2023-09-12', 'Sended_To', 'Sample For TCS');

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_requisition_form`
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
  `Sample_Number` varchar(10) DEFAULT NULL,
  `Register_By` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lab_test_requisition_form`
--

INSERT INTO `lab_test_requisition_form` (`id`, `Sample_ID`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `MC_Oven`, `MC_Stove`, `MC_Scale`, `Atterberg_Limit`, `Grain_size`, `Standard_Proctor`, `Specific_Gravity`, `Acid_Reactivity`, `Sand_Castle`, `Los_Angeles_Abrasion`, `Soundness`, `UCS`, `PLT`, `BTS`, `Hydrometer`, `Double_Hydrometer`, `Pinhole`, `Consolidation`, `Permeability`, `Comment`, `Statuss`, `Sample_Date`, `Sample_By`, `Registed_Date`, `test_inicio`, `Sample_Number`, `Register_By`) VALUES
(1, 'TP-BGC23-NTSF-100', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, 'Required', 'Not', 'Not', 'Required', 'Not', 'Required', 'Required', 'Not', 'Not', 'Not', 'Not', 'Not', 'Not', 'Not', 'Required', 'Required', 'Required', 'Not', 'Not', 'Material for comparison with CQC', '', '2023-07-07', 'WD', '0000-00-00', '0000-00-00 00:00:00.000000', 'G3', 'WD'),
(2, 'TP-BGC23-NTSF-101', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, 'Required', 'Not', 'Not ', 'Required', 'Not ', 'Required', 'Required', 'Not ', 'Not ', 'Not ', 'Not ', 'Not ', 'Not ', 'Not', 'Required', 'Not ', 'Required', 'Not ', 'Not ', 'Ohters', '', '2023-07-17', 'Wi', '0000-00-00', '0000-00-00 00:00:00.000000', 'G1', 'WD'),
(3, 'DH-BGC22-S14-100', 'Site Investigation', 'TSF Naranjo', 'NA', 0.45, 2.25, 'Rock', 'Maxier', 0, 0, 0, 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'sample for TCS ', '', '2023-09-06', 'AR', '2023-09-15', '0000-00-00 00:00:00.000000', 'MX2', 'WD'),
(4, 'DH-BGC23-NTSF-001', 'Site Investigation', 'TSF Naranjo', 'N/A', 24.45, 25.6, 'Rock', 'Lexan', 0, 0, 0, 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Sample For TCS', '', '2023-09-05', 'AS', '2023-09-15', '0000-00-00 00:00:00.000000', 'LX4', 'WD'),
(5, 'DH-BGC23-NTSF-001', 'Site Investigation', 'TSF Naranjo', 'N/A', 27.3, 28.9, 'Rock', 'Lexan', 0, 0, 0, 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Not required', 'Sample For TCS', '', '2023-09-12', 'AD', '2023-09-15', '0000-00-00 00:00:00.000000', 'LX5', 'WD');

-- --------------------------------------------------------

--
-- Table structure for table `leeb_hardness`
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
-- Dumping data for table `leeb_hardness`
--

INSERT INTO `leeb_hardness` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Sample`, `Depth_m`, `Leeb_Hardness_Number1`, `Leeb_Hardness_Number2`, `Leeb_Hardness_Number3`, `Leeb_Hardness_Number4`, `Leeb_Hardness_Number5`, `Leeb_Hardness_Number6`, `Leeb_Hardness_Number7`, `Leeb_Hardness_Number8`, `Leeb_Hardness_Number9`, `Leeb_Hardness_Number10`, `Average`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-A956', 'A', 'sc', '1.20-2.0', 32.12, 10.12, 35.6, 85.1, 25.3, 20.1, 12, 23.12, 12.5, 52.3, 30.83, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-06', '2023-09-06', 'Comment', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `los_angeles_abrasion_large`
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
-- Dumping data for table `los_angeles_abrasion_large`
--

INSERT INTO `los_angeles_abrasion_large` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Selected_Grading`, `Weight_of_The_Spheres`, `Revolutions`, `Initial_Weight`, `Final_Weight`, `Weight_Loss`, `Weight_Loss_Porce`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D854', 'Oven_Dried', 'Mech_Split', '1', 50, 50, 10, 5, 5, 50, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-04', '2023-09-04', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `los_angeles_abrasion_small`
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
-- Dumping data for table `los_angeles_abrasion_small`
--

INSERT INTO `los_angeles_abrasion_small` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Selected_Grading`, `Weight_of_The_Spheres`, `Revolutions`, `Initial_Weight`, `Final_Weight`, `Weight_Loss`, `Weight_Loss_Porce`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'Choose...', 'Oven_Dried', 'Mech_Split', 'A', 50, 50, 10, 10, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-29', '2023-08-29', 'Comentario', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-101', 'G1', 'ASTM-D854', 'Oven_Dried', 'Mech_Split', 'A', 50, 50, 10, 0, 10, 100, 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17', '2023-08-30', '2023-08-30', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `file_type`) VALUES
(1, 'filter.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `moisture_content`
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
-- Dumping data for table `moisture_content`
--

INSERT INTO `moisture_content` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Tare_Name`, `Temperature`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Standard`, `Method`, `Comments`, `Technician`, `Test_Start_Date`, `Report_Date`, `test_type`) VALUES
(3, 'TP-BGC23-NTSF-101', 'M2', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17', 'a', '110 ºC', 150, 120, 30, 45, 75, 40, 'Choose...', '', '', 'l', '2023-07-14', '2023-07-17', 'MC-Oven'),
(5, 'TP-BGC23-NTSF-100', 'G3', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', 'G2', 'Choose...', 50, 25.53, 24.47, 22.2, 3.33, 734.83, 'ASTM D2216', '', '', 'A-S', '2023-09-04', '2023-09-04', 'MC-Oven');

-- --------------------------------------------------------

--
-- Table structure for table `moisture_content_constant_mass`
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
-- Dumping data for table `moisture_content_constant_mass`
--

INSERT INTO `moisture_content_constant_mass` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Standard`, `Preparation`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `Temperature`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil1`, `Tare_Plus_Dry_Soil2`, `Tare_Plus_Dry_Soil3`, `Tare_Plus_Dry_Soil4`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Report_Date`, `test_type`) VALUES
(1, 'TP-BGC23-NTSF-100', 'GG1', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07 00:00:00.000000', 'ASTM D2216', 'Man_Split', 'probando', 'wd', '2023-07-13 00:00:00.000000', '1', 'A-100', '60 ºC', 178, 151, 0, 0, 0, 27, 68, 83, 32, '2023-07-15 13:09:27.000000', 'MC-Constant Mas');

-- --------------------------------------------------------

--
-- Table structure for table `moisture_content_microwave`
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
-- Dumping data for table `moisture_content_microwave`
--

INSERT INTO `moisture_content_microwave` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Standard`, `Preparation`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `Microwave_Model`, `Tare_Plus_Wet_Soil`, `Tare_Plus_Dry_Soil1`, `Tare_Plus_Dry_Soil2`, `Tare_Plus_Dry_Soil3`, `Tare_Plus_Dry_Soil4`, `Water`, `Weigth_Tare`, `Dry_Soil`, `Mc`, `Report_Date`, `test_type`) VALUES
(1, 'PH-BGC23-NTSF-124', 'M4', 'SD1', 'US', 'M5 Borrow', 0, 1, 'LG', '1', 0, 200, 199, '0000-00-00 00:00:00.000000', '[value-27]', '[value-33]', '[value-28]', '[value-29]', '0000-00-00 00:00:00.000000', '196.25', '196.25', '25', 45, 160, 18, 0, 0, 0, 0, 0, 0, '2023-07-13 21:29:38.000000', 'MC-Microwave'),
(2, 'TP-BGC23-NTSF-100', 'G2', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07 00:00:00.000000', 'ASTM D2216', 'Man_Split', 'probando', 'wd', '2023-07-15 00:00:00.000000', '1', 'B-6', 'SAMSUNG', 165, 137, 137, 137, 137, 27, 52, 86, 32, '2023-07-15 11:56:37.000000', 'MC-Microwave'),
(3, 'TP-BGC23-NTSF-101', 'GG9', 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17 00:00:00.000000', 'ASTM D2216', 'Mech_Split', 'PRUEBA', 'HJ', '2023-07-12 00:00:00.000000', 'UHII', 'HIIH', 'HKHJIK', 150, 120, 120, 120, 120, 30, 45, 75, 40, '2023-07-17 21:46:59.000000', 'MC-Microwave');

-- --------------------------------------------------------

--
-- Table structure for table `moisture_scale`
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
-- Dumping data for table `moisture_scale`
--

INSERT INTO `moisture_scale` (`id`, `Sample_ID`, `Sample_Number`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Comment`, `Technician`, `Test_Start_Date`, `Trial`, `Tare_Name`, `scale_Model`, `Mc`, `Report_Date`, `test_type`) VALUES
(1, 'TP-BGC23-NTSF-100', 'GG3', 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07 00:00:00.000000', 'probando', 'wd', '2023-07-14 00:00:00.000000', '1', '1', 'scale', 35, '2023-07-15 14:02:20.000000', 'MC-Scale');

-- --------------------------------------------------------

--
-- Table structure for table `muestra_en_preparacion`
--

CREATE TABLE `muestra_en_preparacion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(50) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio_Preparacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muestra_en_preparacion`
--

INSERT INTO `muestra_en_preparacion` (`id`, `Sample_ID`, `Tecnico`, `Fecha_Inicio_Preparacion`) VALUES
(21, 'PVDC-AGG23-001-GS', 'WD', '2023-07-10 00:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `muestra_en_realizacion`
--

CREATE TABLE `muestra_en_realizacion` (
  `id` int(15) UNSIGNED NOT NULL,
  `Sample_ID` varchar(50) NOT NULL,
  `Tecnico` varchar(20) NOT NULL,
  `Fecha_Inicio_Realizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muestra_en_realizacion`
--

INSERT INTO `muestra_en_realizacion` (`id`, `Sample_ID`, `Tecnico`, `Fecha_Inicio_Realizacion`) VALUES
(19, 'PVDC-AGG23-001-GS', 'WD', '2023-07-10 00:33:27'),
(20, 'PVDC-AGG23-001-G1-GS', 'WD', '2023-07-19 21:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `permeability_of_granular_soils`
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
-- Dumping data for table `permeability_of_granular_soils`
--

INSERT INTO `permeability_of_granular_soils` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Description_of_material_use_for_test`, `Diameter_D_cm`, `Area_cm2`, `Lenght_L_cm`, `W_Max_Kgm2`, `W_Max_Kgm3`, `Height_Before_H1`, `Height_After_H2`, `Height_Net_cm`, `Void_Ratio_e`, `Relative_Density_RD_Porce`, `H1_1`, `H1_2`, `H1_3`, `H1_4`, `H1_5`, `H1_6`, `H1_7`, `H1_8`, `H2_1`, `H2_2`, `H2_3`, `H2_4`, `H2_5`, `H2_6`, `H2_7`, `H2_8`, `Head_h_cm_N1`, `Head_h_cm_N2`, `Head_h_cm_N3`, `Head_h_cm_N4`, `Head_h_cm_N5`, `Head_h_cm_N6`, `Head_h_cm_N7`, `Head_h_cm_N8`, `Quantity_of_water_discharged_cm3_N1`, `Quantity_of_water_discharged_cm3_N2`, `Quantity_of_water_discharged_cm3_N3`, `Quantity_of_water_discharged_cm3_N4`, `Quantity_of_water_discharged_cm3_N5`, `Quantity_of_water_discharged_cm3_N6`, `Quantity_of_water_discharged_cm3_N7`, `Quantity_of_water_discharged_cm3_N8`, `Total_time_of_discharge_sec_N1`, `Total_time_of_discharge_sec_N2`, `Total_time_of_discharge_sec_N3`, `Total_time_of_discharge_sec_N4`, `Total_time_of_discharge_sec_N5`, `Total_time_of_discharge_sec_N6`, `Total_time_of_discharge_sec_N7`, `Total_time_of_discharge_sec_N8`, `Q_At_N1`, `Q_At_N2`, `Q_At_N3`, `Q_At_N4`, `Q_At_N5`, `Q_At_N6`, `Q_At_N7`, `Q_At_N8`, `h_L_N1`, `h_L_N2`, `h_L_N3`, `h_L_N4`, `h_L_N5`, `h_L_N6`, `h_L_N7`, `h_L_N8`, `Temperature_C_N1`, `Temperature_C_N2`, `Temperature_C_N3`, `Temperature_C_N4`, `Temperature_C_N5`, `Temperature_C_N6`, `Temperature_C_N7`, `Temperature_C_N8`, `Coefficient_of_permeability_cm_seg_N1`, `Coefficient_of_permeability_cm_seg_N2`, `Coefficient_of_permeability_cm_seg_N3`, `Coefficient_of_permeability_cm_seg_N4`, `Coefficient_of_permeability_cm_seg_N5`, `Coefficient_of_permeability_cm_seg_N6`, `Coefficient_of_permeability_cm_seg_N7`, `Coefficient_of_permeability_cm_seg_N8`, `Permeability_Graphic`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D46', 'A', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-06', '2023-09-06', 'fdfas', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D46', 'A', 'Test Info', 15.23, 182.2, 7.2, 1794, 1694.7, 17.9, 2, 15.9, 0.3, 91.4, 7.9, 4.1, 6.7, 10.4, 13.4, 20.8, 23.4, 23.4, 8, 4.2, 6.8, 10.5, 13.5, 20.9, 23.5, 23.5, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 630, 630, 635, 655, 685, 715, 740, 740, 30.22, 30.16, 30.38, 30.57, 30.58, 30.3, 30.49, 30.16, 0.1144, 0.1147, 0.1147, 0.1176, 0.123, 0.1295, 0.1332, 0.1347, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 0.01389, 22.6, 22.6, 22.5, 22.5, 22.4, 22.4, 22.6, 22.6, 8.2, 8.3, 8.3, 8.5, 8.9, 9.3, 9.6, 9.7, NULL, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-06', '2023-09-06', 'Commen', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `pinhole`
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
  `Pinhole_Graphic` blob DEFAULT NULL,
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
-- Dumping data for table `pinhole`
--

INSERT INTO `pinhole` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Moisture_Content_Before_Test_MC_Porce`, `Specific_Gravity_Estimated_or_Measured`, `Max_Dry_Density_g_cm3`, `Optimum_Moisture_Content_Porce`, `Wt_Wet_Soil_Mold_gr`, `Wt_Mold_gr`, `Wt_Wet_Soil_gr`, `Logintud_Del_Specimen_cm`, `Vol_Specimen_cm3`, `Wet_Density_gcm3`, `Dry_Density_gcm3`, `Porce_Compaction`, `Moisture_Content_After_Test_Porce`, `Wire_Punch_Diameter_mm`, `Tare_Name_Mc_Before`, `Oven_Temperature_Mc_Before`, `Tare_Plus_Wet_Soil_g_Mc_Before`, `Tare_Plus_Dry_Soil_g_Mc_Before`, `Water_Ww_g_Mc_Before`, `Tare_g_Mc_Before`, `Dry_Soil_Ws_g_Mc_Before`, `Moisture_Content_Porce_Mc_Before`, `Tare_Name_Mc_After`, `Oven_Temperature_Mc_After`, `Tare_Plus_Wet_Soil_g_Mc_After`, `Tare_Plus_Dry_Soil_g_Mc_After`, `Water_Ww_g_Mc_After`, `Tare_g_Mc_After`, `Dry_Soil_Ws_g_Mc_After`, `Moisture_Content_Porce_Mc_After`, `mL_No1`, `mL_No2`, `mL_No3`, `mL_No4`, `mL_No5`, `mL_No6`, `mL_No7`, `mL_No8`, `mL_No9`, `mL_No10`, `mL_No11`, `mL_No12`, `mL_No13`, `mL_No14`, `mL_No15`, `mL_No16`, `mL_No17`, `mL_No18`, `mL_No19`, `mL_No20`, `mL_No21`, `mL_No22`, `Seg_No1`, `Seg_No2`, `Seg_No3`, `Seg_No4`, `Seg_No5`, `Seg_No6`, `Seg_No7`, `Seg_No8`, `Seg_No9`, `Seg_No10`, `Seg_No11`, `Seg_No12`, `Seg_No13`, `Seg_No14`, `Seg_No15`, `Seg_No16`, `Seg_No17`, `Seg_No18`, `Seg_No19`, `Seg_No20`, `Seg_No21`, `Seg_No22`, `Flow_Rate_No1`, `Flow_Rate_No2`, `Flow_Rate_No3`, `Flow_Rate_No4`, `Flow_Rate_No5`, `Flow_Rate_No6`, `Flow_Rate_No7`, `Flow_Rate_No8`, `Flow_Rate_No9`, `Flow_Rate_No10`, `Flow_Rate_No11`, `Flow_Rate_No12`, `Flow_Rate_No13`, `Flow_Rate_No14`, `Flow_Rate_No15`, `Flow_Rate_No16`, `Flow_Rate_No17`, `Flow_Rate_No18`, `Flow_Rate_No19`, `Flow_Rate_No20`, `Flow_Rate_No21`, `Flow_Rate_No22`, `From_Side_No1`, `From_Side_No2`, `From_Side_No3`, `From_Side_No4`, `From_Side_No5`, `From_Side_No6`, `From_Side_No7`, `From_Side_No8`, `From_Side_No9`, `From_Side_No10`, `From_Side_No11`, `From_Side_No12`, `From_Side_No13`, `From_Side_No14`, `From_Side_No15`, `From_Side_No16`, `From_Side_No17`, `From_Side_No18`, `From_Side_No19`, `From_Side_No20`, `From_Side_No21`, `From_Side_No22`, `From_Top_No1`, `From_Top_No2`, `From_Top_No3`, `From_Top_No4`, `From_Top_No5`, `From_Top_No6`, `From_Top_No7`, `From_Top_No8`, `From_Top_No9`, `From_Top_No10`, `From_Top_No11`, `From_Top_No12`, `From_Top_No13`, `From_Top_No14`, `From_Top_No15`, `From_Top_No16`, `From_Top_No17`, `From_Top_No18`, `From_Top_No19`, `From_Top_No20`, `From_Top_No21`, `From_Top_No22`, `Observation_No1`, `Observation_No2`, `Observation_No3`, `Observation_No4`, `Observation_No5`, `Observation_No6`, `Observation_No7`, `Observation_No8`, `Observation_No9`, `Observation_No10`, `Observation_No11`, `Observation_No12`, `Observation_No13`, `Observation_No14`, `Observation_No15`, `Observation_No16`, `Observation_No17`, `Observation_No18`, `Observation_No19`, `Observation_No20`, `Observation_No21`, `Observation_No22`, `Hole_Size_After_Test_mm`, `Dispersive_Classification`, `Pinhole_Graphic`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D46', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-06', '2023-09-06', 'Comment', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D46', 'B', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-06', '2023-09-06', 'COMMENT', 'NOSE', 'A-S'),
(3, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D46', 'B', 26.74, 2.63, 1.476, 26.17, 490.65, 424.27, 66.38, 4.187, 36.29, 1.83, 1.44, 97.78, 26.53, 1, 'C23', '110', 210.6, 179.52, 31.08, 63.3, 116.22, 26.74, 'SN-3', '110', 130.69, 117.27, 13.42, 66.68, 50.59, 26.53, NULL, NULL, NULL, NULL, NULL, NULL, 41, 24, 24, 25, 25, 30, 78, 77, 77, 79, 80, 105, 107, 108, 108, 110, 16.94, 13.18, 14.58, 42.38, 53.42, 59.66, 100.26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.59', '0.76', '0.69', '0.59', '0.47', '0.42', '0.41', '0.40', '0.40', '0.42', '0.42', '0.50', '1.30', '1.28', '1.28', '1.32', '1.33', '1.75', '1.78', '1.80', '1.80', '1.83', 'Clear', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Clear', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Trace Sand', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ASTM-D46', 'ASTM-D46', NULL, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-06', '2023-09-06', 'COMMENT', 'NOSE', 'A-S'),
(4, 'TP-BGC23-NTSF-101', 'G1', 'ASTM-D46', 'B', 26.74, 2.63, 1.476, 26.17, 490.65, 424.27, 66.38, 4.187, 36.29, 1.83, 1.44, 97.78, 26.53, 1, 'C23', '110', 210.6, 179.52, 31.08, 63.3, 116.22, 26.74, 'SN-3', '110', 130.69, 117.27, 13.42, 66.68, 50.59, 26.53, NULL, NULL, NULL, NULL, NULL, NULL, 41, 24, 24, 25, 25, 30, 78, 77, 77, 79, 80, 105, 107, 108, 108, 110, 16.94, 13.18, 14.58, 42.38, 53.42, 59.66, 100.26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.59', '0.76', '0.69', '0.59', '0.47', '0.42', '0.41', '0.40', '0.40', '0.42', '0.42', '0.50', '1.30', '1.28', '1.28', '1.32', '1.33', '1.75', '1.78', '1.80', '1.80', '1.83', 'Clear', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Clear', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Trace Sand', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'ND2', NULL, 'Qa Lab', 'DS', 'Borrow', 4, 4, 'Aggregates', 'Grab', 125, 126, 127, '2023-07-17', '2023-09-06', '2023-09-06', 'COMMENT', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `point_load_test`
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
  `Load_Direction` varchar(5) NOT NULL,
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
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `point_load_test`
--

INSERT INTO `point_load_test` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Cutter_Equipment`, `Extraction_Equipment`, `Test_Device`, `Temperature`, `Effective_Area_of_Jack_Piston_m2`, `K1_Value_Assumed_Value_To_Correlate_Is50_To_UCS`, `K2_Value_Assumed`, `Test_Type_A_B_C_D`, `Dimension_L_mm`, `Dimension_D_or_W_mm`, `Plattens_Separation_mm`, `Load_Direction`, `Gauge_Reading_Mpa`, `Failure_Laod_MN`, `De_mm`, `Is_Mpa`, `F`, `Is_50`, `UCS_From_K1_Mpa`, `UCS_From_K2_Mpa`, `Strenght_Classification`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'diametral', 'Cuuter', 'EQUIP', 'Test', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'Cooments', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'diametral', 'Cuuter', 'EQUIP', 'prueba ', 'A', NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'com', 'NOSE', 'A-S'),
(3, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'diametral', 'MK - 5007T BLK', 'N/A', 'ROCTEST PIL-10', 'Tem', 0.001435, 15, 21, 'A', 49.43, 63.17, 63.17, 'Perpe', 9.14, 0.013, 63.17, 3.287, 1.111, 3.651, 54.772, 76.681, 'Very High', 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-06', '2023-09-06', '? Load Direction perpendicular to plane of weakness.\r\nNo Valid Test.', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `products`
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
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sand_density`
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
-- Dumping data for table `sand_density`
--

INSERT INTO `sand_density` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Weight_Sand_Mold_1`, `Weight_Sand_Mold_2`, `Weight_Sand_Mold_3`, `Mold_1`, `Mold_2`, `Mold_3`, `Weight_Mold_1`, `Weight_Mold_2`, `Weight_Mold_3`, `Weight_Sand_In_Mold_1`, `Weight_Sand_In_Mold_2`, `Weight_Sand_In_Mold_3`, `Volume_Mold_cm3_1`, `Volume_Mold_cm3_2`, `Volume_Mold_cm3_3`, `Bulk_Density_Sand_gcm3_1`, `Bulk_Density_Sand_gcm3_2`, `Bulk_Density_Sand_gcm3_3`, `Average_Bulk_Density_Sand`, `Weight_Sand_Container_Before_Test_1`, `Weight_Sand_Container_Before_Test_2`, `Weight_Sand_Container_Before_Test_3`, `Weight_Sand_Container_After_Test_1`, `Weight_Sand_Container_After_Test_2`, `Weight_Sand_Container_After_Test_3`, `Weight_Sand_Used_1`, `Weight_Sand_Used_2`, `Weight_Sand_Used_3`, `Bulk_Density_of_Sand_1`, `Bulk_Density_of_Sand_2`, `Bulk_Density_of_Sand_3`, `Volume_Funnel_1`, `Volume_Funnel_2`, `Volume_Funnel_3`, `Average_Volume_Funnel`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM D1556', 'Air_Dried', 'Mech_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-29', '2023-08-29', 'Comentario', 'NOSE', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM D1556', 'Air_Dried', 'Mech_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-29', '2023-08-29', 'Comentario', 'NOSE', 'A-S'),
(3, 'TP-BGC23-NTSF-100', 'G3', 'ASTM D1556', 'Air_Dried', 'Mech_Split', 999.99, 999.98, 999.97, 888, 888, 888, 500, 502, 503, 499.99, 497.98, 496.97, 1, 2, 3, 499.99, 248.99, 165.657, 304.879, 999.99, 999.98, 999.99, 888, 888, 888, 111.99, 111.98, 111.99, 10, 12, 113, 11.2, 9.33, 0.99, 7.1739, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-29', '2023-08-29', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `specific_gravity`
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
-- Dumping data for table `specific_gravity`
--

INSERT INTO `specific_gravity` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Pycnometer_Used_mL`, `Pycnometer_Number`, `Test_Temp_Tt_C`, `Ave_Calibrated_Mass_Dry_Pycnometer_Mp_gr`, `Ave_Calibrated_Volume_Pycnometer_Vp_mL`, `Density_Water_Test_Temp_gmL`, `Calibration_Weight_Pynometer_Water_Calibration_Temp_Mpwc_gr`, `Weight_Dry_Soil_Tare_gr`, `Weight_Dry_Soil_Ms_gr`, `Weight_Pycnometer_Soil_Water_Mpwst_gr`, `Specific_Gravity_Soil_Solid_Test_Temp_Gt`, `Temperature_Coefficent_K`, `Specific_Gravity_Soil_Solid`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D854', 'Oven_Dried', 'Man_Split', '250 ml', 'C', 22.2, 88.94, 293.31, 0.99771, 337.66, 133.96, 45.02, 365.89, 2.68, 0.99936, 2.68, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-29', '2023-08-29', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `specific_gravity_absortion`
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
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `specific_gravity_absortion`
--

INSERT INTO `specific_gravity_absortion` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Inch5_Wt1`, `Inch5_Wt2`, `Inch5_Wt3`, `Inch4_Wt1`, `Inch4_Wt2`, `Inch4_Wt3`, `Inch3p5_Wt1`, `Inch3p5_Wt2`, `Inch3p5_Wt3`, `Inch3_Wt1`, `Inch3_Wt2`, `Inch3_Wt3`, `Inch2p5_Wt1`, `Inch2p5_Wt2`, `Inch2p5_Wt3`, `Inch2_Wt1`, `Inch2_Wt2`, `Inch2_Wt3`, `Inch1p5_Wt1`, `Inch1p5_Wt2`, `Inch1p5_Wt3`, `Inch1_Wt1`, `Inch1_Wt2`, `Inch1_Wt3`, `Inch3p4_Wt1`, `Inch3p4_Wt2`, `Inch3p4_Wt3`, `Inch1p2_Wt1`, `Inch1p2_Wt2`, `Inch1p2_Wt3`, `Inch3p8_Wt1`, `Inch3p8_Wt2`, `Inch3p8_Wt3`, `InchNo4_Wt1`, `InchNo4_Wt2`, `InchNo4_Wt3`, `InchTotal_Wt1`, `InchTotal_Wt2`, `InchTotal_Wt3`, `Specific_Gravity_OD`, `Specific_Gravity_SSD`, `Apparent_Specific_Gravity`, `Percent_Absortion`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D854', 'Oven_Dried', 'Mech_Split', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 523, 958, 0, 523, 958, 0, 0.55, 1, 1, 83.17, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-29', '2023-08-29', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `specific_gravity_fine`
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
-- Dumping data for table `specific_gravity_fine`
--

INSERT INTO `specific_gravity_fine` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Pycnometer_Number`, `Weight_Pycnometer`, `Weight_Dry_Soil_Tare`, `Weight_Dry_Soil`, `Weight_Saturated_Surface_Dry_Soil_Air`, `Temp_Sample`, `Weight_Pycnometer_Soil_Water`, `Calibration_Weight_Pycnometer_Desired_Temp`, `Specific_Gravity`, `Specific_Gravity_SSD`, `Apparent_Specific_Gravity`, `Percent_Absortion`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D854', 'Oven_Dried', 'Mech_Split', 'C', 175.86, 253.49, 77.63, 120.07, 20, 723.3, 674, 1.1, 1.7, 1.1, 54.67, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-29', '2023-08-29', 'Comentario', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `splitting_tensile_strenght`
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
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `splitting_tensile_strenght`
--

INSERT INTO `splitting_tensile_strenght` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Cutter_Equipment`, `Extraction_Equipment`, `Test_Device`, `Diameter_D_cm_No1`, `Diameter_D_cm_No2`, `Diameter_D_cm_No3`, `Diameter_D_cm_No4`, `Diameter_D_cm_No5`, `Diameter_D_cm_No6`, `Diameter_D_cm_No7`, `Diameter_D_cm_No8`, `Diameter_D_cm_No9`, `Diameter_D_cm_No10`, `Thicness_t_cm_No1`, `Thicness_t_cm_No2`, `Thicness_t_cm_No3`, `Thicness_t_cm_No4`, `Thicness_t_cm_No5`, `Thicness_t_cm_No6`, `Thicness_t_cm_No7`, `Thicness_t_cm_No8`, `Thicness_t_cm_No9`, `Thicness_t_cm_No10`, `Relation_td_No1`, `Relation_td_No2`, `Relation_td_No3`, `Relation_td_No4`, `Relation_td_No5`, `Relation_td_No6`, `Relation_td_No7`, `Relation_td_No8`, `Relation_td_No9`, `Relation_td_No10`, `Loading_Rate_KNs_No1`, `Loading_Rate_KNs_No2`, `Loading_Rate_KNs_No3`, `Loading_Rate_KNs_No4`, `Loading_Rate_KNs_No5`, `Loading_Rate_KNs_No6`, `Loading_Rate_KNs_No7`, `Loading_Rate_KNs_No8`, `Loading_Rate_KNs_No9`, `Loading_Rate_KNs_No10`, `Time_To_Failure_s_No1`, `Time_To_Failure_s_No2`, `Time_To_Failure_s_No3`, `Time_To_Failure_s_No4`, `Time_To_Failure_s_No5`, `Time_To_Failure_s_No6`, `Time_To_Failure_s_No7`, `Time_To_Failure_s_No8`, `Time_To_Failure_s_No9`, `Time_To_Failure_s_No10`, `Max_Load_kN_No1`, `Max_Load_kN_No2`, `Max_Load_kN_No3`, `Max_Load_kN_No4`, `Max_Load_kN_No5`, `Max_Load_kN_No6`, `Max_Load_kN_No7`, `Max_Load_kN_No8`, `Max_Load_kN_No9`, `Max_Load_kN_No10`, `Tensile_Strength_Mpa_No1`, `Tensile_Strength_Mpa_No2`, `Tensile_Strength_Mpa_No3`, `Tensile_Strength_Mpa_No4`, `Tensile_Strength_Mpa_No5`, `Tensile_Strength_Mpa_No6`, `Tensile_Strength_Mpa_No7`, `Tensile_Strength_Mpa_No8`, `Tensile_Strength_Mpa_No9`, `Tensile_Strength_Mpa_No10`, `Failure_Type_No1`, `Failure_Type_No2`, `Failure_Type_No3`, `Failure_Type_No4`, `Failure_Type_No5`, `Failure_Type_No6`, `Failure_Type_No7`, `Failure_Type_No8`, `Failure_Type_No9`, `Failure_Type_No10`, `Average_No1`, `Average_No2`, `Average_No3`, `Average_No4`, `Average_No5`, `Average_No6`, `Average_No7`, `Average_No8`, `Average_No9`, `Average_No10`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(3, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D3967', 'B', 'HUSQUARNA-MS360', 'N/A', 'Controls Group A12P02', 6.3, 6.3, 6.3, 0, 0, 0, 0, 0, 0, 0, 3.7, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0.59, 0.63, 0.63, 0, 0, 0, 0, 0, 0, 0, 0.696, 1.233, 1.154, 0, 0, 0, 0, 0, 0, 0, 32, 40, 36, 0, 0, 0, 0, 0, 0, 0, 22.28, 49.3, 41.56, 0, 0, 0, 0, 0, 0, 0, 0.61, 1.25, 1.05, 0, 0, 0, 0, 0, 0, 0, 'Non Central', 'Central', 'Central + Layer Activation', '', '', '', '', '', '', '', 6.3, 3.9, 0.6, 1, 36, 37.7, 1, 0, NULL, NULL, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-07', '2023-09-07', 'Test did not meet ASTM D-3967-16 Clause 8.3 related to test time. Result is submitted for data infor', 'NOSE', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `standard_proctor`
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
-- Dumping data for table `standard_proctor`
--

INSERT INTO `standard_proctor` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Preparation_Method`, `Split_Method`, `Natural_MC`, `SG_NMC`, `Wt_Wet_Soil_Mold_1`, `Wt_Wet_Soil_Mold_2`, `Wt_Wet_Soil_Mold_3`, `Wt_Wet_Soil_Mold_4`, `Wt_Wet_Soil_Mold_5`, `Wt_Wet_Soil_Mold_6`, `Wt_Mold_g_1`, `Wt_Mold_g_2`, `Wt_Mold_g_3`, `Wt_Mold_g_4`, `Wt_Mold_g_5`, `Wt_Mold_g_6`, `Wt_Wet_Soil_g_1`, `Wt_Wet_Soil_g_2`, `Wt_Wet_Soil_g_3`, `Wt_Wet_Soil_g_4`, `Wt_Wet_Soil_g_5`, `Wt_Wet_Soil_g_6`, `Vol_Mold_cm3_1`, `Vol_Mold_cm3_2`, `Vol_Mold_cm3_3`, `Vol_Mold_cm3_4`, `Vol_Mold_cm3_5`, `Vol_Mold_cm3_6`, `Wet_Density_kgm3_1`, `Wet_Density_kgm3_2`, `Wet_Density_kgm3_3`, `Wet_Density_kgm3_4`, `Wet_Density_kgm3_5`, `Wet_Density_kgm3_6`, `Dry_Density_kgm3_1`, `Dry_Density_kgm3_2`, `Dry_Density_kgm3_3`, `Dry_Density_kgm3_4`, `Dry_Density_kgm3_5`, `Dry_Density_kgm3_6`, `Dry_Density_Corrected_kgm3_1`, `Dry_Density_Corrected_kgm3_2`, `Dry_Density_Corrected_kgm3_3`, `Dry_Density_Corrected_kgm3_4`, `Dry_Density_Corrected_kgm3_5`, `Dry_Density_Corrected_kgm3_6`, `MC_Container_1`, `MC_Container_2`, `MC_Container_3`, `MC_Container_4`, `MC_Container_5`, `MC_Container_6`, `MC_Wt_Wet_Soil_Tare_1`, `MC_Wt_Wet_Soil_Tare_2`, `MC_Wt_Wet_Soil_Tare_3`, `MC_Wt_Wet_Soil_Tare_4`, `MC_Wt_Wet_Soil_Tare_5`, `MC_Wt_Wet_Soil_Tare_6`, `MC_Wt_Dry_Soil_Tare_1`, `MC_Wt_Dry_Soil_Tare_2`, `MC_Wt_Dry_Soil_Tare_3`, `MC_Wt_Dry_Soil_Tare_4`, `MC_Wt_Dry_Soil_Tare_5`, `MC_Wt_Dry_Soil_Tare_6`, `Wt_Water_g_1`, `Wt_Water_g_2`, `Wt_Water_g_3`, `Wt_Water_g_4`, `Wt_Water_g_5`, `Wt_Water_g_6`, `Tare_g_1`, `Tare_g_2`, `Tare_g_3`, `Tare_g_4`, `Tare_g_5`, `Tare_g_6`, `MC_Wt_Dry_Soil_g_1`, `MC_Wt_Dry_Soil_g_2`, `MC_Wt_Dry_Soil_g_3`, `MC_Wt_Dry_Soil_g_4`, `MC_Wt_Dry_Soil_g_5`, `MC_Wt_Dry_Soil_g_6`, `MC_Porce_1`, `MC_Porce_2`, `MC_Porce_3`, `MC_Porce_4`, `MC_Porce_5`, `MC_Porce_6`, `MC_Porce_Corrected_1`, `MC_Porce_Corrected_2`, `MC_Porce_Corrected_3`, `MC_Porce_Corrected_4`, `MC_Porce_Corrected_5`, `MC_Porce_Corrected_6`, `Max_Dry_Density_kgm3`, `Optimun_MC_Porce`, `Wc_Porce`, `GM_Porce`, `PC_Porce`, `PF_Porce`, `YDF_Porce`, `YDT_Porce`, `Yw_KnM3`, `Corrected_Dry_Unit_Weigt`, `Corrected_Water_Content_Finer`, `SP_Graphic`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(1, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'Choose...', 'manual', 26.2, 2.65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'RUN', 'SP', 'A-S'),
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'wet', 'mechanical', 26.2, 2.65, 10, 10, 10, 10, 10, 10, 1, 1, 1, 1, 1, 1, 9, 9, 9, 9, 9, 9, 100, 100, 100, 100, 100, 100, 90, 90, 90, 90, 90, 90, 9, 18, 9, 18, 9, 18, 824.37, 1520.93, 824.37, 1520.93, 824.37, 1520.93, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'Run', 'SP', 'A-S'),
(3, 'TP-BGC23-NTSF-100', 'G3', 'Choose...', 'wet', 'manual', 26.2, 2.65, 10, 10, 10, 10, 10, 10, 1, 1, 1, 1, 1, 1, 9, 9, 9, 9, 9, 9, 100, 100, 100, 100, 100, 100, 90, 90, 90, 90, 90, 90, 9, 18, 9, 18, 9, 18, 824.37, 1520.93, 824.37, 1520.93, 824.37, 1520.93, 'A', 'b', 'c', 'd', 'e', 'z', 10, 10, 10, 10, 10, 10, 1, 2, 1, 2, 1, 2, 9, 8, 9, 8, 9, 8, 0, 0, 0, 0, 0, 0, 1, 2, 1, 2, 1, 2, 900, 400, 900, 400, 900, 400, 9.01, 4.01, 9.01, 4.01, 9.01, 4.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'Run', 'SP', 'A-S'),
(4, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'wet', 'mechanical', 29.43, 2.65, 5797, 5908, 5958, 5966, 5952, 5938, 4195, 4195, 4195, 4195, 4195, 4195, 1602, 1713, 1763, 1771, 1757, 1743, 946, 946, 946, 946, 946, 946, 1693.45, 1810.78, 1863.64, 1872.09, 1857.29, 1842.49, 1341.85, 1404.93, 1425.82, 1414.57, 1378.58, 1352.35, 9141.67, 9169.72, 9178.49, 9173.8, 9158.29, 9146.51, 'LAB-1', 'LAB-2', 'LAB-3', 'LAB-4', 'LAB-5', 'LAB-6', 547.58, 564.92, 558.03, 554.31, 522.77, 585.45, 452.01, 457.54, 447.36, 439.99, 410.25, 452.65, 95.57, 107.38, 110.67, 114.32, 112.52, 132.8, 87.27, 85.82, 86.95, 86.54, 86.22, 86.24, 364.74, 371.72, 360.41, 353.45, 324.03, 366.41, 26.2, 28.89, 30.71, 32.34, 34.73, 36.24, 0.27, 0.3, 0.32, 0.33, 0.36, 0.37, 1425.82, 30.71, 1, 1, 1, 1, 1, 1, 1, 9178.49, 0.32, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'Run GOoo', 'SP', 'A-S'),
(5, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'wet', 'mechanical', 25, 2.65, 380, 380, 380, 380, 380, 380, 120, 120, 120, 120, 120, 120, 260, 260, 260, 260, 260, 260, 86, 86, 86, 86, 86, 86, 3023.26, 3023.26, 3023.26, 3023.26, 3023.26, 3023.26, 1742.94, 1742.94, 1742.94, 1742.94, 1742.94, 1742.94, 9287.27, 9287.27, 9287.27, 9287.27, 9287.27, 9287.27, '1', '2', '3', '4', '5', '6', 895, 895, 895, 895, 895, 895, 538, 538, 538, 538, 538, 538, 357, 357, 357, 357, 357, 357, 52, 52, 52, 52, 52, 52, 486, 486, 486, 486, 486, 486, 73.46, 73.46, 73.46, 73.46, 73.46, 73.46, 0.74, 0.74, 0.74, 0.74, 0.74, 0.74, 1742.94, 73.46, 1, 1, 1, 1, 1, 1, 1, 9287.27, 0.74, NULL, 'LL-NTSF', 'DS', 'Borrow N60', 0, 1, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-08-24', '2023-08-24', 'SXZ', 'SP', 's');

-- --------------------------------------------------------

--
-- Table structure for table `uniaxial_compressive_strength`
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
  `Sample_Date` date NOT NULL,
  `Test_Start_Date` date NOT NULL,
  `Report_Date` date NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `test_type` varchar(10) NOT NULL,
  `Technician` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `uniaxial_compressive_strength`
--

INSERT INTO `uniaxial_compressive_strength` (`id`, `Sample_ID`, `Sample_Number`, `Standard`, `Method`, `Cutter_Equipment`, `Extraction_Equipment`, `Test_Device`, `Dimension_D_cm`, `Dimension_H_cm`, `Relation_hD`, `Area_m2`, `Volume_m3`, `Weight_Core_Kg`, `Unit_Weight_Core_kgm3`, `Failure_Loand_KN`, `Test_Timing_S`, `Load_Proportion_Mpas`, `uniaxial_Compressive_Strenght_Mpa`, `Structure`, `Area`, `Source`, `Depth_From`, `Depth_To`, `Material_Type`, `Sample_Type`, `North`, `East`, `Elev`, `Sample_Date`, `Test_Start_Date`, `Report_Date`, `Comments`, `test_type`, `Technician`) VALUES
(2, 'TP-BGC23-NTSF-100', 'G3', 'ASTM-D4318', 'A', 'Cuuter', 'Extraction', 'Test', 1, 2, 2, 0.00008, 0.000002, 3, 1909860, 4, 5, 0.2, 2, 'LL-NTSF', 'DS', 'Borrow N65', 0.5, 1.5, 'Soil', 'Grap', 20232500, 376589, 125, '2023-07-07', '2023-09-05', '2023-09-05', 'Comments', 'NOSE', 'A-S');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(1, 'Admin User', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'pzg9wa7o1.jpg', 1, '2023-09-15 01:48:48'),
(2, 'Special User', 'special', 'ba36b97a41e7faf742ab09bf88405ac04f99599a', 2, 'no_image.jpg', 1, '2023-03-20 03:13:43'),
(3, 'Default User', 'user', '12dea96fec20593566ab75692c9949596833adc9', 3, 'no_image.jpg', 1, '2023-07-19 21:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'Special', 2, 0),
(3, 'User', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atterberg_limit`
--
ALTER TABLE `atterberg_limit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concrete_specimens`
--
ALTER TABLE `concrete_specimens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consolidation`
--
ALTER TABLE `consolidation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_gama`
--
ALTER TABLE `count_gama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `density_bulk`
--
ALTER TABLE `density_bulk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `density_weigth`
--
ALTER TABLE `density_weigth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `double_hydrometer`
--
ALTER TABLE `double_hydrometer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ensayos_en_revision`
--
ALTER TABLE `ensayos_en_revision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ensayo_en_entrega`
--
ALTER TABLE `ensayo_en_entrega`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- Indexes for table `ensayo_en_repeticion`
--
ALTER TABLE `ensayo_en_repeticion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- Indexes for table `ensayo_gama`
--
ALTER TABLE `ensayo_gama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grain_size`
--
ALTER TABLE `grain_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grain_size_coarse_aggregate`
--
ALTER TABLE `grain_size_coarse_aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grain_size_fine_aggregate`
--
ALTER TABLE `grain_size_fine_aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grain_size_rocks`
--
ALTER TABLE `grain_size_rocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grain_size_sieved_coarse_aggregate`
--
ALTER TABLE `grain_size_sieved_coarse_aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grout_specimens`
--
ALTER TABLE `grout_specimens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hydrometer`
--
ALTER TABLE `hydrometer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_test_requisition_form`
--
ALTER TABLE `lab_test_requisition_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leeb_hardness`
--
ALTER TABLE `leeb_hardness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `los_angeles_abrasion_large`
--
ALTER TABLE `los_angeles_abrasion_large`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `los_angeles_abrasion_small`
--
ALTER TABLE `los_angeles_abrasion_small`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moisture_content`
--
ALTER TABLE `moisture_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample ID` (`Sample_ID`);

--
-- Indexes for table `moisture_content_constant_mass`
--
ALTER TABLE `moisture_content_constant_mass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moisture_content_microwave`
--
ALTER TABLE `moisture_content_microwave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moisture_scale`
--
ALTER TABLE `moisture_scale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muestra_en_preparacion`
--
ALTER TABLE `muestra_en_preparacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- Indexes for table `muestra_en_realizacion`
--
ALTER TABLE `muestra_en_realizacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Sample_ID` (`Sample_ID`);

--
-- Indexes for table `permeability_of_granular_soils`
--
ALTER TABLE `permeability_of_granular_soils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinhole`
--
ALTER TABLE `pinhole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point_load_test`
--
ALTER TABLE `point_load_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sand_density`
--
ALTER TABLE `sand_density`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specific_gravity`
--
ALTER TABLE `specific_gravity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specific_gravity_absortion`
--
ALTER TABLE `specific_gravity_absortion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specific_gravity_fine`
--
ALTER TABLE `specific_gravity_fine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `splitting_tensile_strenght`
--
ALTER TABLE `splitting_tensile_strenght`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_proctor`
--
ALTER TABLE `standard_proctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uniaxial_compressive_strength`
--
ALTER TABLE `uniaxial_compressive_strength`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atterberg_limit`
--
ALTER TABLE `atterberg_limit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `concrete_specimens`
--
ALTER TABLE `concrete_specimens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consolidation`
--
ALTER TABLE `consolidation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `count_gama`
--
ALTER TABLE `count_gama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `density_bulk`
--
ALTER TABLE `density_bulk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `density_weigth`
--
ALTER TABLE `density_weigth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `double_hydrometer`
--
ALTER TABLE `double_hydrometer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ensayos_en_revision`
--
ALTER TABLE `ensayos_en_revision`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ensayo_en_entrega`
--
ALTER TABLE `ensayo_en_entrega`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ensayo_en_repeticion`
--
ALTER TABLE `ensayo_en_repeticion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ensayo_gama`
--
ALTER TABLE `ensayo_gama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `grain_size`
--
ALTER TABLE `grain_size`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `grain_size_coarse_aggregate`
--
ALTER TABLE `grain_size_coarse_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grain_size_fine_aggregate`
--
ALTER TABLE `grain_size_fine_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grain_size_rocks`
--
ALTER TABLE `grain_size_rocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grain_size_sieved_coarse_aggregate`
--
ALTER TABLE `grain_size_sieved_coarse_aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grout_specimens`
--
ALTER TABLE `grout_specimens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hydrometer`
--
ALTER TABLE `hydrometer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lab_test_requisition_form`
--
ALTER TABLE `lab_test_requisition_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leeb_hardness`
--
ALTER TABLE `leeb_hardness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `los_angeles_abrasion_large`
--
ALTER TABLE `los_angeles_abrasion_large`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `los_angeles_abrasion_small`
--
ALTER TABLE `los_angeles_abrasion_small`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `moisture_content`
--
ALTER TABLE `moisture_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `moisture_content_constant_mass`
--
ALTER TABLE `moisture_content_constant_mass`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `moisture_content_microwave`
--
ALTER TABLE `moisture_content_microwave`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `moisture_scale`
--
ALTER TABLE `moisture_scale`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `muestra_en_preparacion`
--
ALTER TABLE `muestra_en_preparacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `muestra_en_realizacion`
--
ALTER TABLE `muestra_en_realizacion`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permeability_of_granular_soils`
--
ALTER TABLE `permeability_of_granular_soils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pinhole`
--
ALTER TABLE `pinhole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `point_load_test`
--
ALTER TABLE `point_load_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sand_density`
--
ALTER TABLE `sand_density`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specific_gravity`
--
ALTER TABLE `specific_gravity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specific_gravity_absortion`
--
ALTER TABLE `specific_gravity_absortion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specific_gravity_fine`
--
ALTER TABLE `specific_gravity_fine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `splitting_tensile_strenght`
--
ALTER TABLE `splitting_tensile_strenght`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `standard_proctor`
--
ALTER TABLE `standard_proctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uniaxial_compressive_strength`
--
ALTER TABLE `uniaxial_compressive_strength`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
