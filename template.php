<?php

        require("connection.php");
        
        if($_FILES['image']['tmp_name'] !==''){
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false){
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));
        }
}
    else{
        $imgContent = "";
    }

    $First_Name=$_POST["First-Name"];
    $Last_Name=$_POST["Last-Name"];
    $Email=$_POST["Email"];
    $phone_number=$_POST["phone-number"];
    $address=$_POST["address"];
    $P_Code=$_POST["P-Code"];
    $City_input=$_POST["City-input"];
    $DateOB=$_POST["DateOB"];
    $PlaceOB=$_POST["PlaceOB"];
    $License=$_POST["License"];
    $gender=$_POST["gender"];
    $nationality=$_POST["nationality"];
    $civil_status=$_POST["civil-status"];
    $linkin=$_POST["linkin"];
    $website=$_POST["website"];

    //education
    $education=$_POST["education"];
    $school=$_POST["school"];
    $city=$_POST["city"];
    $Edu_start=$_POST["Edu-start"];
    $Edu_end=$_POST["Edu-end"];
    $Description=$_POST["Description"];

    //employment
    $position=$_POST["position"];
    $employer=$_POST["employer"];
    $emp_city=$_POST["emp-city"];
    $emp_start=$_POST["emp-Edu-start"];
    $emp_end=$_POST["emp-Edu-end"];
    $emp_Description=$_POST["emp_Description"];


    //skills
    $skill1=$_POST["skill1"];
    $skill1_range=$_POST["skill1-range"];
    $skill2=$_POST["skill2"];
    $skill2_range=$_POST["skill2-range"];
    $skill3=$_POST["skill3"];
    $skill3_range=$_POST["skill3-range"];
    

    $lang1=$_POST["lang1"];
    $lang1_range=$_POST["lang1-range"];
    $lang2=$_POST["lang2"];
    $lang2_range=$_POST["lang2-range"];
    $lang3=$_POST["lang3"];
    $lang3_range=$_POST["lang3-range"];

    $hobby1=$_POST["hobby1"];
    $hobby2=$_POST["hobby2"];
    $hobby3=$_POST["hobby3"];

    $Profile_Description=$_POST["Profile_Description"];

    $Internships_position=$_POST["Internships_position"];
    $Internships_employer=$_POST["Internships_employer"];
    $Internships_city=$_POST["Internships_city"];
    $Internships_Edu_start=$_POST["Internships_Edu_start"];
    $Internships_Edu_end=$_POST["Internships_Edu_end"];
    $Internships_Description=$_POST["Internships_Description"];

    $extra_position=$_POST["extra_position"];
    $extra_employer=$_POST["extra_employer"];
    $extra_city=$_POST["extra_city"];
    $extra_Edu_start=$_POST["extra_Edu_start"];
    $extra_Edu_end=$_POST["extra_Edu_end"];
    $extra_Description=$_POST["extra_Description"];

    $AchvDescription=$_POST["AchvDescription"];

    $Certificate_position=$_POST["Certificate_position"];
    $Certificate_end=$_POST["Certificate_end"];
    $Certificate_Description=$_POST["Certificate_Description"];
    

    $sql = "INSERT INTO user_cv (image,First_Name,Last_Name,Email,phone_number,address,P_Code,City_input,DateOB,PlaceOB,License,gender,nationality,civil_status,linkin,website,education,school,city,Edu_start,Edu_end,Description,position,employer,emp_city,emp_start,emp_end,emp_Description,skill1,skill1_range,skill2,skill2_range,skill3,skill3_range,lang1,lang1_range,lang2,lang2_range,lang3,lang3_range,hobby1,hobby2,hobby3,Profile_Description,Internships_position,Internships_employer,Internships_city,Internships_Edu_start,Internships_Edu_end,Internships_Description,extra_position,extra_employer,extra_city,extra_Edu_start,extra_Edu_end,extra_Description,AchvDescription,Certificate_position,Certificate_end,Certificate_Description) VALUES ('$imgContent', '$First_Name','$Last_Name','$Email','$phone_number','$address','$P_Code','$City_input','$DateOB','$PlaceOB','$License','$gender','$nationality','$civil_status','$linkin','$website','$education','$school','$city','$Edu_start','$Edu_end','$Description','$position','$employer','$emp_city','$emp_start','$emp_end','$emp_Description','$skill1','$skill1_range','$skill2','$skill2_range','$skill3','$skill3_range','$lang1','$lang1_range','$lang2','$lang2_range','$lang3','$lang3_range','$hobby1','$hobby2','$hobby3','$Profile_Description','$Internships_position','$Internships_employer','$Internships_city','$Internships_Edu_start','$Internships_Edu_end','$Internships_Description','$extra_position','$extra_employer','$extra_city','$extra_Edu_start','$extra_Edu_end','$extra_Description','$AchvDescription','$Certificate_position','$Certificate_end','$Certificate_Description');"; 

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->close();

    // header('location:Design1.php');
    header("location:javascript://history.go(-1)");


// echo $statusMsg; 
    // }
?>