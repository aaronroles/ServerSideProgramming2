<?php
    header("Content-type: text/css; charset: UTF-8");
?>

body{
    margin: 0;
}

@font-face{
    font-family: airstream;
    src: url(../fonts/airstreamNF.ttf);
}

#registerUser{
    font-family: airstream;
    font-size: 2vw;
    color: #fff;
    background-color: #09a129;
    width: 50%;
    height: 100%;
    float: left;
}

#loginUser{
    font-family: airstream;
    font-size: 2vw;
    color: #fff;
    background-color: #2bd9fe;
    width: 50%;
    height: 100%;
    float: left;
}

#registerHeading, #loginHeading, #registerForm, #loginForm{
    text-align: center;
}

input{
    padding: 1%;
    margin: 1%;
    border: none;
    border-radius: 10px;
}

#submit{
    border: none;
    color: #363732;
    background-color: #d8d8f6;
}

#submit:hover{
    color: #d8d8f6;
    background-color: #363732;
}