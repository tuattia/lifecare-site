<?php
require('db.php');


$name = $_POST['name'];
$select_name = $DB->query("SELECT * FROM user WHERE LOWER(full_name) LIKE LOWER('%$name%') ORDER BY id_user DESC LIMIT 1 ");
$data = $select_name->fetch_object();
$patient = $data->id_user;
// $patient = $_POST['patient'];
$clinic = $_POST['clinic'];
$status = $_POST['status'];
$dateTime = new DateTime();

function incrementNumber($number)
{
    return substr($number, 0, 2) . sprintf('%03d', intval(substr($number, 2)) + 1);
}

$appointment = $DB->query("SELECT * FROM appointment ORDER BY id_appointment DESC LIMIT 1 ");
$appointment_data = $appointment->fetch_object();

if ($appointment_data === null || $appointment_data->number === null || $appointment_data->number === '') {
    $newNumber = incrementNumber('AP000');
} else {
    $newNumber = incrementNumber($appointment_data->number);
}

$query = "INSERT INTO appointment(date_and_time,id_user,id_clinic,status,number) VALUES ('" . $dateTime->format('Y-m-d H:i:s') . "','" . $patient . "','" . $clinic . "', '" . $status . "', '" . $newNumber . "')";
$res = $DB->query($query);

if ($res) {
    // tampilkan show berdasarkan role dari user yang sedang login 
    // if(user_role === 'admin'){
    //     $id = $DB->insert_id;
    //     header('location: /lifecare-site/admin/appointment/show.php?id=' . $id);
    // }else {
    //     $id = $DB->insert_id;
    // header('location: /lifecare-site/Index/appointment/show.php?id=' . $id);
    // }

    $id = $DB->insert_id;
    header('location: /lifecare-site/admin/appointment/show.php?id=' . $id);
}
