<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
</head>
<body>

    <div id="top-nav">
        <h1>The Violet Couch</h1>
        <div id="login-area">
        <input type="text" id="username" placeholder="USERNAME"></input>
        <input type="text" id="password" placeholder="PASSWORD"></input>
        <button id="login-button">LOGIN</button>
        </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>

        <div class="dropdown">
        <a href="#articles" class="dropbtn">Articles</a>
            <div class="dropdown-content">
            <a href="#">2023</a>
            <a href="#">2022</a>
            <a href="#">2021</a>
            </div>
        </div>

        <!-- <a href="#moto">Moto</a>

        <div class="dropdown">
        <a href="#tech-projects" class="dropbtn">Tech Projects</a>
            <div class="dropdown-content">
                <a href="#">Timer</a>
                <a href="#">Notes</a>
                <a href="todolist.php">To Do List</a>
                <a href="#">Tow Me</a>
                <a href="https://github.com/jeansc8822/">GitHub</a>
            </div>
        </div>


        <div class="dropdown">
            <a href="#" class="dropbtn">Personal</a>
                <div class="dropdown-content">
                    <a href="timeline.php">Timeline</a>
                    <a href="https://www.notion.so/2023-Goals-026bc7f45ce74405bf89d184f7a03a63">Goals</a>
                    <a href="#">Daisy</a>
                </div>
            </div> -->

        
            <div class="dropdown">
            <a href="#" class="dropbtn">Contact</a>
            <div class="dropdown-content">
                <a href="#">Portfolio</a>
                <a href="https://github.com/jeansc8822">GitHub</a>
                <a href="https://linkedin.com">LinkedIn</a>
            </div>
        </div>
        <a href="survey.php">Subscribe</a>
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