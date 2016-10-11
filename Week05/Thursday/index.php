<?php
    include('Product.php');
    include('html/header.php');
    include('html/sidebar.php');
    echo '<div id="content">';
        foreach($productDb as $product){
            $newPrd = new Product($product[0], $product[1]);
        }
    echo'</div>';
    include('html/footer.php');

    /*if(isset($_POST["Submit"])){
        $newPrdName = checkInput($_POST["productName"]);
        $newPrdPrice = checkInput($_POST["productPrice"]);
        $newPrd = new Product($newPrdName, $newPrdPrice);
        $newObj = array($newPrdName, $newPrdPrice);
        array_push($productDb, $newObj);
        echo print_r($productDb);
    }

    function checkInput($data){
        if(isset($data) && !empty($data)){
            if(is_string($data)){
                $data = strip_tags($data);
                $data = trim($data);
                $data = htmlentities($data);
                $data = htmlspecialchars($data);
                $data = stripslashes($data);
                $data = ucwords($data);
                //echo "Checked, validated and sanitised: " . $data . "<br>";
                return $data;
            }

            if(is_numeric($data) && !empty($data)){
                if(filter_var($data, FILTER_VALIDATE_INT)){
                    $sanitised_number = filter_var($data, FILTER_SANITIZE_NUMBER_INT); 
                    if(filter_var($sanitised_number, FILTER_SANITIZE_NUMBER_INT)){
                        $data = strip_tags($data);
                        $data = trim($data);
                        $data = htmlentities($data);
                        $data = htmlspecialchars($data);
                        $data = stripslashes($data);
                        //echo "Checked, validated and sanitised: " . $data . "<br>";
                        return $data;
                    }
                }
            }

            /*if(filter_var($data, FILTER_VALIDATE_EMAIL)){
                $sanitised_email = filter_var($data, FILTER_SANITIZE_EMAIL);
                if(filter_var($sanitised_email, FILTER_VALIDATE_EMAIL)){
                    $data = strip_tags($data);
                    $data = trim($data);
                    $data = htmlentities($data);
                    $data = htmlspecialchars($data);
                    $data = stripslashes($data);
                    //echo "Checked, validated and sanitised: " . $data . "<br>";
                    return $data;
                }
            }  
        }

        else{
            echo "Invalid data";
        }
    }*/
?>

<link rel='stylesheet' type='text/css' href='html/styles.php' />