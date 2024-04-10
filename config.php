<?php
$con = mysqli_connect("localhost", "root", "", "myhmsdb");
$connection = mysqli_connect("localhost", "root", "", "myhmsdb");

function add_appointment($pid, $fname, $lname, $gender, $email, $contact, $doctor, $docFees, $appdate, $apptime): bool
{
	global $connection;
	$query = "INSERT INTO appointmenttb(pid, fname, lname, gender, email, contact, doctor, docFees, appdate, apptime, userStatus, doctorStatus )
			VALUES ($pid, '$fname', '$lname', '$gender', '$email', '$contact', '$doctor', '$docFees', '$appdate', '$apptime', '1', '1')";
	$result = mysqli_query($connection, $query);

	if ($result) return true;
	else return false;
}

function check_appointment($doctor, $appdate, $apptime): bool
{
	global $connection;
	$query = mysqli_query($connection, "SELECT apptime FROM appointmenttb WHERE doctor='$doctor' AND appdate='$appdate' AND apptime='$apptime'");
	if (mysqli_num_rows($query) == 0) {
		return false;
	} else {
		return true;
	}
}

//function generate_bill($pid, $session_id): array
//{
//	global $connection;
//	$bill = [];
//
//	$query = "SELECT p.pid, p.ID, p.fname, p.lname, p.doctor, p.appdate, p.apptime, p.disease, p.allergy, p.prescription, a.docFees
//			FROM prestb p INNER JOIN appointmenttb a ON p.ID=a.ID AND p.pid = '$pid' AND p.ID = '" . $session_id . "'";
//	$result = mysqli_query($connection, $query);
//	while ($row = mysqli_fetch_array($result)) {
//		$bill = [
//			"pid" => $row["pid"],
//			"ID" => $row["ID"],
//			"fname" => $row["fname"],
//			"lname" => $row["lname"],
//			"doctor" => $row["doctor"],
//			"appdate" => $row["appdate"],
//			"apptime" => $row["apptime"],
//			"disease" => $row["disease"],
//			"allergy" => $row["allergy"],
//			"prescription" => $row["prescription"],
//			"docFees" => $row["docFees"]
//		];
//	}
//	return $bill;
//}
