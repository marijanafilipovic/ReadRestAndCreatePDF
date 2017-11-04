<?php
/* include autoloader */
require_once 'dompdf/autoload.inc.php';

/* reference the Dompdf namespace */
use Dompdf\Dompdf;

/* instantiate and use the dompdf class */

ob_start();
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<div class="container"><div class="row">
        <style>
            @page { margin: 0.2cm; }
            td{
                padding: 2px; align-content;
                font-size: 12.8px;
                border: solid 1px grey;
            }
            span{
                border-top: 0.3px dashed lightblue;
            }
        </style>

        <table class= "table table-striped table-bordered table-hover" style="width:500px;">
            <thead>
            <tr>VISA FORM TABLE</tr>
            </thead>
            <tbody>
            <tr><td>Nationality<br /><span  > <?php echo $_POST['nationality']; ?></span></td>
                <td>Russian Nat<br /><span ><?php echo $_POST['russian_nationality']; ?></span></td>
                <td>Russ Nat Date<br /><span><?php echo $_POST['RUSSIAN_NATIONALITY_DATE'] ; ?></span></td>
                <td>Russ Nat Reason<br /><span><?php echo  $_POST['RUSSIAN_NATIONALITY_REASON']; ?></span></td></tr><tr>
                <td>Purope section<br /><span><?php echo $_POST['purpose_section'];?></span></td>
                <td>Purpose<br /><span><?php echo  $_POST['purpose']; ?></span></td>
                <td>Visa type<br /><span><?php echo $_POST['visa_type']; ?></span></td>
                <td>Entries<br /><span><?php echo  $_POST['entries']; ?></span></td></tr><tr>
                <td>Entry date<br /><span><?php echo  $_POST['entry_date'];?></span></td>
                <td>Exit date<br /><span><?php echo $_POST['exit_date']; ?></span></td>
                <td>Surname<br /><span><?php echo  $_POST['surname']; ?></span></td>
                <td>First name<br /><span><?php echo  $_POST['first_name']; ?></span></td></tr><tr>
                <td>Other name<br /><span><?php echo  $_POST['other_name']; ?></span></td>
                <td>That name<br /><span><?php echo  $_POST['that_name']; ?></span></td>
                <td>Sex<br /><span><?php echo $_POST['sex']; ?></span></td>
                <td>Birth date<br /><span><?php echo  $_POST['birth_date']; ?></span></td></tr><tr>
                <td>Birth city<br /><span><?php echo  $_POST['birth_city']; ?></span></td>
                <td>Born in Russia<br /><span><?php echo  $_POST['born_in_Russia']; ?></span></td>
                <td>Emigration date<br /><span><?php echo  $_POST['EMIGRATION_DATE']; ?></span></td>
                <td>Emigration country<br /><span><?php echo  $_POST['EMIGRATION_COUNTRY']; ?></span></td></tr><tr>
                <td>Passaport num<br /><span><?php echo  $_POST['passport_number']; ?></span></td>
                <td>Issue date<br /><span><?php echo  $_POST['issue_date']; ?></span></td>
                <td>Expiry date<br /><span ><?php echo  $_POST['expiry_date']; ?></span></td>
                <td>Visiting institution<br /><span ><?php echo $_POST['visiting_institution']; ?></span></td>
            </tr><tr>
                <td>Organization name<br /><span ><?php echo  $_POST['organization_name']; ?></span></td>
                <td>Adrress<br /><span ><?php echo $_POST['address']; ?>'</span></td>
                <td>Reference num<br /><span ><?php echo  $_POST['reference_number']; ?></span></td>
                <td>Conf num<br /><span ><?php echo  $_POST['conformation_number']; ?></span></td></tr><tr>
                <td>Itinerary<br /><span ><?php echo  $_POST['itinerary']; ?></span></td>
                <td>Insurance<br /><span ><?php echo  $_POST['insurance']; ?></span></td>
                <td>Insurance details<br /><span ><?php echo  $_POST['insurance_details']; ?></span></td>
                <td>Previous visit<br /><span ><?php echo  $_POST['previous_visit']; ?></span></td></tr><tr>
                <td>PREVIOUS VISIT NUMBER<br /><span ><?php echo  $_POST['PREVIOUS_VISIT_NUMBER']; ?></span></td>
                <td>PRVIOUSE VISIT FROM<br /><span ><?php echo $_POST['PRVIOUSE_VISIT_FROM']; ?>></span></td>
                <td>PERVIOUSE VISIT TILL<br /><span ><?php echo  $_POST['PERVIOUSE_VISIT_TILL']; ?>></span></td>
                <td>Residential address<br /><span ><?php echo  $_POST['residential_address']; ?></span></td></tr><tr>
                <td>Your address<br /><span ><?php echo  $_POST['your_address']; ?></span></td>
                <td>Your phone<br /><span ><?php echo  $_POST['your_phone']; ?></span></td>
                <td>Your fax<br /><span ><?php echo  $_POST['your_fax']; ?></span></td>
                <td>Your email<br /><span ><?php echo  $_POST['your_email']; ?></span></td></tr><tr>
                <td>Work study<br /><span ><?php echo  $_POST['work_study']; ?></span></td>
                <td>Employer name<br /><span ><?php echo  $_POST['employer_name']; ?></span></td>
                <td>Position<br /><span ><?php echo  $_POST['position']; ?></span></td>
                <td>Work address<br /><span ><?php echo  $_POST['work_address']; ?></span></td></tr><tr>
                <td>Work phone<br /><span ><?php echo  $_POST['work_phone']; ?></span></td>
                <td>Work fax<br /><span ><?php echo  $_POST['work_fax']; ?></span></td>
                <td>Work email<br /><span ><?php echo  $_POST['work_email']; ?></span></td>
                <td>Children<br /><span  ><?php echo  $_POST['children']; ?></span></td></tr><tr>
                <td>CHILDREN DATA<br /><span ><?php echo  $_POST['CHILDREN_DATA']; ?></span></td>
                <td>Relatives<br /><span ><?php echo  $_POST['relatives']; ?></span></td>
                <td>Relatives data<br /><span ><?php echo  $_POST['RELATIVES_DATA']; ?></span></td>
                <td>Destination name<br /><span ><?php echo  $_POST['destionation_name']; ?></span></td>
                </tr></tbody></table></div></div></html></body>
<?php
$html = ob_get_clean();
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');

/* Output the generated PDF to Browser */

/* Render the HTML as PDF */
$dompdf->render();
$pdf_gen = $dompdf->output();
/*
if(!file_put_contents($full_path, $pdf_gen)){
    echo 'Not OK!';
}else{
    echo 'OK';
}*/
$dompdf->stream('viselio_app.pdf',array('Attachment'=>0));
//$dompdf->stream('table_sample');
?>

