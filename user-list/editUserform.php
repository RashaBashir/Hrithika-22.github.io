
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BackStore-Edit User information</title>
    <style>
        [class*="col-"] {
            float: left;
            padding: 15px;
        }

        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
        }

        @media only screen and (max-width: 750px) {
            .navbar-phone {text-align: center;}
            .content-phone {padding: 5px;}
            .topContent-phone {margin-top: 10px;}
        }

        @media only screen and (min-width: 750px) {
            /* For tablets: */
            .col-s-1 {width: 8.33%;}
            .col-s-2 {width: 16.66%;}
            .col-s-3 {width: 25%;}
            .col-s-4 {width: 33.33%;}
            .col-s-5 {width: 41.66%;}
            .col-s-6 {width: 50%;}
            .col-s-7 {width: 58.33%;}
            .col-s-8 {width: 66.66%;}
            .col-s-9 {width: 75%;}
            .col-s-10 {width: 83.33%;}
            .col-s-11 {width: 91.66%;}
            .col-s-12 {width: 100%;}

            .content-tablet {
                margin-left: 15%;
                padding-left: 15px;
            }

            .col-navbar-tablet {width: 15%;}
            .topContent-tablet {margin-top: 100px;}
        }

        @media only screen and (min-width: 968px) {
            /* For desktop: */
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}

            .content-desktop {
                margin-left: 15%;
                padding-left: 15px;
            }

            .col-navbar-desktop {width: 15%;}
            .topContent-desktop {margin-top: 100px;}
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #254441;
        }

        .logo {
            padding: 0 30px;
            font-size: 20px;
            line-height: 35px;
            color: white;
        }

        .navbar {
            margin-top: 90px;
        }

        .navbarInner ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navbarInner li {
            background-color: rgb(14, 149, 226);
            padding: 5px;
            margin-bottom: 5px;
        }

        .navbarInner a {
            color: white;
            text-decoration: none;
        }
        body {
            margin: 0;
            padding-top: 40px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }
        .user-img{
            width: 80px;
            height: 80px;
            border-radius: 40px;
            justify-content: 10px;
            text-align: center;

        }
        .user-name{
            text-align:justify;
            font-size: 18px;
            font-weight: 200;
            margin: 0;
        }
        .user-status{
            text-align:justify;
            font-size: 15px;
            margin: 0;

        }
        .User-form{
            text-align:left;
            display: block;
            float: center;
            margin: 0px;
        }
        .form-uptade{
            border-top: 1px solid gray;
            border-bottom: 1px solid gray;
            border-left: 2px solid gray ;
            border-right: 2px solid gray ;
            float: center;
            width: 100%;
            padding-left: 15%;
            text-justify: auto;
        }

    </style>
</head>
<body>
<div class="header">
    <div class="logo">
        <p>Food World</p>
    </div>
</div>
<div class="navAndContent">
    <div class="navbar navbar-phone col-navbar-tablet col-navbar-desktop">
        <div class="navbarInner">
            <ul>
                <li><a href="index.html">Home</a></li>
                <br><br>
                <b>Backstore-Edit Users</b>
                <li><a href="backstore_p7.html">Products</a></li>
                <li><a href="backstore_p9.html">Orders</a></li>
                <li><a href="userpage.php">Users</a></li>
            </ul>
        </div>
    </div>
    <div class="content-desktop content-tablet content-phone">
        <div class="topContent-phone topContent-tablet topContent-desktop">
            <h1>Backstore</h1>
            <p><b>Add/Edit the Users Info</b><br>This section of the backstore allows you to add,and edit user(s) info.</p>
        </div>
        <div class="profile">
            <div class="avatar">
                <img src="https://thumbs.dreamstime.com/b/profile-icon-vector-male-user-person-avatar-flat-color-glyph-pictogram-illustration-117610301.jpg" class= "user-img"alt="USER">
            </div>
            <h5 class="user-name"></h5>



            </h6>
        </div>
    </div>
    <div class="form-uptade" >

        <form class="User-form" action="edit.php" method="POST">
            <?php
            //load xml file
            $xml = simplexml_load_file('../soen287/database.xml');

            forEach ($xml->user as $row) {
            ?>


            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value="<?php echo $row->username; ?>"><br><br>
            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password"value="<?php echo $row->password; ?>"><br><br>
                <label for="status">isAdmin:</label><br>
                <input type="text" id="isAdmin" name="isAdmin"value="<?php echo $row->isAdmin; ?>"><br><br>
            <label for="fname">First name:</label><br>
            <input type="text" id="fName" name="fName" value="<?php echo $row->fName; ?>"><br><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lName" name="lName" value="<?php echo $row->lName; ?>"><br><br>
            <label for="postalcode">Postalcode:</label><br>
            <input type="text" id="postalCode" name="postalCode"value="<?php echo $row->postalCode; ?>"><br><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email"name="email"  value="<?php echo $row->email; ?>"><br><br>

                <button type="save"  name="save" value="save">Save</button><br><br>

                <?php
                }
                ?>



    </div>
    </form>

</body>
</html>