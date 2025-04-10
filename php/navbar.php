<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
</head>
<body>
<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">About</a>

        <div class="dropdown">
            <a href="#articles" class="dropbtn">Articles</a>
            <div class="dropdown-content">
                <a href="#">2023</a>
                <a href="#">2022</a>
                <a href="#">2021</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#tech-projects" class="dropbtn">Contact</a>
            <div class="dropdown-content">
                <a href="#">Portfolio</a>
                <a href="#">GitHub</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
        <a href="/survey.html">Subscribe</a>
    </div>


    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MENU</span>

</body>
</html>