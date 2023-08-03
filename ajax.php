<?php
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>

<?php
 // Auto suggetion
    $html = '';
   if(isset($_POST['product_name']) && strlen($_POST['product_name']))
   {
     $products = find_sample_by_title($_POST['product_name']);
     
     if($products){
        foreach ($products as $product):
           $html .= "<li class=\"list-group-item\">";
           $html .= $product['Sample_ID'];
           $html .= "</li>";
         endforeach;
         
      } else {

        $html .= '<li onClick=\"fill(\''.addslashes().'\')\" class=\"list-group-item\">';
        $html .= 'No encontrado';
        $html .= "</li>";

      }

      echo json_encode($html);
   }
 ?>
 <?php
 // find all product
  if(isset($_POST['p_name']) && strlen($_POST['p_name']))
  {
    $product_title = remove_junk($db->escape($_POST['p_name']));
    
    if($results = find_all_sample_info_by_title($product_title)){
        foreach ($results as $result) {

          $html .= "<tr>";
            $html  .= "<td>"; 
            $html .= "<label for='sampleid'>Sample ID:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\"  name=\"sampleid\" value=\"{$result['Sample_ID']}\">";
            $html  .= "</td>";
            $html  .= "<td>"; 
              $html .= "<label for='samplenumber'>Sample Number:</label>";
              $html  .= "<input type=\"text\" class=\"form-control\"  name=\"samplenumber\" value=\"{$result['Sample_Number']}\">";
              $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='structure'>Structure:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"structure\" value=\"{$result['Structure']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='area'>Area:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"area\" value=\"{$result['Area']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='source'>Source:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"source\" value=\"{$result['Source']}\">";
            $html  .= "</td>";
            $html .= "<tr>";
            $html  .= "</tr>";
            $html  .= "<td>";
            $html .= "<label for='depthfrom'>Depth From:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"depthfrom\" value=\"{$result['Depth_From']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='depthto'>Depth To:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"depthto\" value=\"{$result['Depth_To']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='materialtype'>Material Type:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"materialtype\" value=\"{$result['Material_Type']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='sampletype'>Sample Type:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"sampletype\" value=\"{$result['Sample_Type']}\">";
            $html  .= "</td>";
            $html .= "<tr>";
            $html  .= "</tr>";
            $html  .= "<td>";
            $html .= "<label for='north'>North:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"north\" value=\"{$result['North']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='east'>East:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"east\" value=\"{$result['East']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='elev'>Elev:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"elev\" value=\"{$result['Elev']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html .= "<label for='sampledate'>Sample Date:</label>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"sampledate\" value=\"{$result['Sample_Date']}\">";
            $html  .= "</td>";
            $html .= "<tr>";
            $html  .= "</tr>";                                   
            
  
        }
    } else {
        $html ='<tr><td>La muestra no se encuentra registrado en la base de datos</td></tr>';
    }



    
    echo json_encode($html);
  }






 ?>