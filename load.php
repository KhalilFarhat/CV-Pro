<?php
require("connection.php");

// Query database for records
$query = "SELECT * FROM user_cv";
$result = $conn->query($query);

// Generate HTML table rows for records
$rows = "";
while ($row = $result->fetch_assoc()) {

    $rows .= "<tr><td>".$row["id"]."</td><td>". "<img src='data:image/jpeg/png;base64," . base64_encode($row["image"]) . "'  width='100' height='100' /></td>". "</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Email"]."</td><td>".$row["phone_number"]."</td><td>".$row["address"]."</td><td>".$row["P_Code"]."</td><td>".$row["City_input"]."</td><td>".$row["DateOB"]."</td><td>".$row["PlaceOB"]."</td><td>".$row["License"]."</td><td>".$row["gender"]."</td><td>".$row["nationality"]."</td><td>".$row["civil_status"]."</td><td>".$row["linkin"]."</td><td>".$row["website"].$row["education"]."</td><td>".$row["school"]."</td><td>".$row["city"]."</td><td>".$row["Edu_start"]."</td><td>".$row["Edu_end"]."</td><td>".$row["Description"]."</td><td>".$row["position"]."</td><td>".$row["employer"]."</td><td>".$row["emp_city"]."</td><td>".$row["emp_Description"]."</td><td>".$row["skill1"]."</td><td>".$row["skill1_range"]."</td><td>".$row["skill2"]."</td><td>".$row["skill2_range"]."</td><td>".$row["skill3"]."</td><td>".$row["skill3_range"]."</td><td>".$row["lang1"]."</td><td>".$row["lang1_range"]."</td><td>".$row["lang2"]."</td><td>".$row["lang2_range"]."</td><td>".$row["lang3"]."</td><td>".$row["lang3_range"]."</td><td>".$row["hobby1"].$row["hobby2"]."</td><td>".$row["hobby3"].$row["Profile_Description"]."</td><td>".$row["Internships_position"].$row["Internships_employer"]."</td><td>".$row["Internships_city"]."</td><td>".$row["Internships_Edu_start"]."</td><td>".$row["Internships_Edu_end"]."</td><td>".$row["Internships_Description"]."</td><td>".$row["extra_position"]."</td><td>".$row["extra_employer"]."</td><td>".$row["extra_city"]."</td><td>".$row["extra_Edu_start"]."</td><td>".$row["extra_Edu_end"]."</td><td>".$row["extra_Description"]."</td><td>".$row["AchvDescription"]."</td><td>".$row["Certificate_position"]."</td><td>".$row["Certificate_end"]."</td><td>".$row["Certificate_Description"]."</td></tr>";

}

// Output HTML table rows
echo $rows;
?>