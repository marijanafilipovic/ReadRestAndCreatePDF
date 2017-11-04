<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 9/21/2017
 * Time: 9:24 PM
 * http://r.viselio.com/api/v1/testJson
 * ucitava podatke u jednu editabilnu jquery tabelu.
 * Stranu sa tom tabelom treba exportovati u PDF
 * koji bi trebao da moze da se downloaduje.
 */
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$app_choice = file_get_contents('http://r.viselio.com/api/v1/testJson', false, stream_context_create($arrContextOptions));
 $app_choice = json_decode($app_choice,true);
// var_dump($app_choice);
$data = json_encode($app_choice);
//echo $data;
 ?>

<?php
/*foreach ($app_choice as $app => $value)
{
    echo $nationality = $app_choice['nationality'];
    echo $russian_nationality = $app_choice['russian_nationality'];
    echo $russian_nationality_date = $app_choice['RUSSIAN_NATIONALITY_DATE'];
    echo $russian_nationality_reason = $app_choice['RUSSIAN_NATIONALITY_REASON'];
    echo $purpose_section = $app_choice['purpose_section'];
    echo $purpose = $app_choice['purpose'];
    echo $visa_type = $app_choice['Visa_type'];
    echo $entries = $app_choice['entries'];
    echo $entry_date = $app_choice['entry_date'];
    echo $exit_date = $app_choice['exit date'];
    echo $surname = $app_choice['surname'];
    echo $first_name = $app_choice['first_name'];
    echo $other_name = $app_choice['other_name'];
    echo $that_name = $app_choice['that_name'];
    echo $sex = $app_choice['sex'];
    echo $birth_date = $app_choice['birth_date'];
    echo $birth_city = $app_choice['birth_city'];
    echo $born_in_Russia = $app_choice['born_in_Russia'];
    echo $emigration_date = $app_choice['EMIGRATION_DATE'];
    echo $emigration_country = $app_choice['EMIGRATION_COUNTRY'];
    echo $passport_number = $app_choice['passport_number'];
    echo $issue_date = $app_choice['issue_date'];
    echo $expiry_date = $app_choice['expiry_date'];
    echo $visiting_institution = $app_choice['visiting_institution'];
    echo $organization_name = $app_choice['organization_name'];
    echo $address = $app_choice['address'];
    echo $reference_number = $app_choice['reference_number'];
    echo $conformation_number = $app_choice['conformation_number'];
    echo $itinerary = $app_choice['Itinerary'];
    echo $insurance = $app_choice['insurance'];
    echo $insurance_details = $app_choice['insurance_details'];
    echo $previous_visit = $app_choice['previous_visit'];
    echo $p_visit_num = $app_choice['PREVIOUS_VISIT_NUMBER'];
    echo $p_visit_from = $app_choice['PREVIOUS_VISIT_FROM'];
    echo $p_visit_till = $app_choice['PREVIOUS_VISIT_TILL'];
    echo $residential_address = $app_choice['residential_address'];
    echo $your_address = $app_choice['your_address'];
    echo $your_phone = $app_choice['your_phone'];
    echo $your_fax = $app_choice['your_fax'];
    echo $your_email = $app_choice['your_email'];
    echo $work_study = $app_choice['work_study'];
    echo $employer_name = $app_choice['employer_name'];
    echo $position = $app_choice['position'];
    echo $work_address = $app_choice['work_address'];
    echo $work_phone = $app_choice['work_phone'];
    echo $work_fax = $app_choice['work_fax'];
    echo $work_email = $app_choice['work_email'];
    echo $shildren = $app_choice['children'];
    echo $children_data = $app_choice['CHILDREN_DATA'];
    echo $relatives = $app_choice['relatives'];
    echo $relatives_data = $app_choice['RELATIVES_DATA'];
    echo $destination_name = $app_choice['destination_name'];
}*/
    ?>
