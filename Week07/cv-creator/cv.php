<?php

    include('../../mPDF/mpdf.php');

    if(isset($_POST["submit"])){

        $cvName = $_POST["name"];
        $cvPhone = $_POST["phoneNo"];
        $cvEmail = $_POST["email"];
        $cvEdu = $_POST["education"];
        $cvExp = $_POST["experience"];
        $cvInt = $_POST["interests"];
        $cvTitle = $_POST["title"];

        $mpdf = new MPDF();
        $mpdf->WriteHTML(
            "<h1>".$cvName." CV</h1>"
            ."<ul>
                <li>Phone number: ".$cvPhone."</li>
                <li>Email: ".$cvEmail."</li>
                <li>Education: ".$cvEdu."</li>
                <li>Experience: ".$cvExp."</li>
                <li>Interests: ".$cvInt."</li>  
            </ul>"
        );

        $mpdf->Output("pdf/".$cvTitle.".pdf", "F");
    }
?>

<form method="POST" id="cvBuilder">
    <input type="text" id="name" name="name" placeholder="Name..."><br/>
    <input type="tel" id="phoneNo" name="phoneNo" placeholder="Phone number..."><br/>
    <input type="email" id="email" name="email" placeholder="Email..."><br/>
    <input type="text" id="education" name="education" placeholder="Education..."><br/>
    <input type="text" id="experience" name="experience" placeholder="Experience..."><br/>
    <input type="text" id="interests" name="interests" placeholder="Interests..."><br/>
    <input type="text" id="title" name="title" placeholder="Title of CV..."><br/>
    <input type="submit" id="submit" name="submit" value="Create CV"><br/>
</form>