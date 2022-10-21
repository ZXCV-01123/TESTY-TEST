<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
        }
        nav {
            width: 100%;
            height: 80px;
            position: fixed;
            left: 0px;
            top: 0px;
        }
        main {
            width: calc(100% - 300px);
            height: 100vh;
            float: right;
            margin-top: 80px;
        }
        #as-l {
            width: 300px;
            height: calc(100vh - 80px);
            position: fixed;
            left: 0px;
            top: 80px;
        }
        #as-r {
            width: 50%;
            height: calc(100vh - 80px);
            position: fixed;
            right: 0px;
            top: 80px;
        }
        #nav-inside {
            width: fit-content;
            height: 80px;
            margin-left: auto;
            margin-right: auto;
        }
        .nav-bt {
            height: 64px;
            margin-left: 120px;
            margin-right: 120px;
            margin-top: 9px;
        }
    </style>
</head>
<body>
    <nav style="background-color:aqua;">
        <div style="background-color: palevioletred;" id="nav-inside">
            <img class="nav-bt" src="img/php.png">
            <img class="nav-bt" src="img/sql.png">
            <img class="nav-bt" src="img/qm.png">
        </div>
    </nav>
    <aside id="as-l" style="background-color:rgba(255, 0, 255, 0.5);">
        a
    </aside>
    <main style="background-color:greenyellow;">
        a
        <!--
        <aside id="as-r"  style="background-color:purple;">
            a
        </aside>-->
    </main>
</body>
</html>
