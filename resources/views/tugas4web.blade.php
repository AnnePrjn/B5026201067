<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
     $("p").first().css("background-color", "gold");
     $("p").last().css("background-color", "lightgreen");
     $("ul li").eq(6).css("background-color", "pink");
     $("p").filter('.satu').css("background-color", "cyan");
     $("ul li").slice(1,6).css("background-color", "lightgrey");
     /* $("p").not('.satu').css("background-color", "magenta"); */
    });
    </script>
</head>
<body>

<h1 style="color:blue;text-align: center;">jQuery Traversing Filtering</h1>

<div id="first">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure et iusto tempora odit voluptatem, laborum consequatur obcaecati a quisquam sit minus nihil dolore assumenda, rerum distinctio repudiandae illo itaque dolor!</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
</div>

<div>
    <ul>
        <li>Minggu</li>
        <li>Senin</li>
        <li>Selasa</li>
        <li>Rabu</li>
        <li>Kamis</li>
        <li>Jumat</li>
        <li>Sabtu</li>

    </ul>
</div>

<div id="second">
    <p class="satu">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus at enim ad ex saepe ut delectus? Similique consequatur, expedita fugiat aperiam debitis sequi. Placeat corporis suscipit vitae, cumque soluta doloribus?</p>
    <p>Lorem ipsum</p>
</div>



