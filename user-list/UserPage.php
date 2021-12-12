<?php
session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Backstore - User list</title>
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
                .col-s-11 {width: 90%;}
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
                .col-11 {width: 90%;}
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

            .userButtons a {
                text-decoration: none;
            }

            .userButtons button {
                color: white;
                background-color: #555555;
                border: none;
                padding: 3px 6px;
                margin: 0 1px;
            }

            .data {
                border: 1px solid gray;
                padding: 15px;
                float: left;
            }

            .entry {
                border-top: 1px solid gray;
                border-bottom: 1px solid gray;
                float: left;
                width: 100%;
            }

            .image {
                width: 20%;
                float: left;
            }

            .image img {
                width: 50%;
                height: 50%;
                border-radius: 50%;
            }

            .list {
                width: 60%;
                float: flex;
                padding-left: 1px;
                padding-right: 1px;
                word-wrap:initial;
                display: contents;
            }

            .list h1 {
                font-size: 20px;
            }

            .amount {
                width: 20%;
                float: left;
                text-align: center;
            }

            .spacing {
                width: 100%;
                clear: both;
                height: 10px;
            }

            .footer {
                display: flex;
                align-content: flex-end;
                background-color: #212121;
                color: white;
                justify-content: center;
                height: 50px;
                margin-top: auto;
            }
            .status{
                font-size: small;
                font-weight: 300;
            }
            .tab{

                border-top: 1px solid gray;
                border-bottom: 1px solid gray;
                float: left;
                width: 100%;
                justify-content: center;
                margin-top: auto;
            }
        </style>
    </head>
<body>
    <div class="header">
        <div class="logo">
            <p>Food Mart</p>
        </div>
    </div>
<div class="navAndContent">
    <div class="navbar navbar-phone col-navbar-tablet col-navbar-desktop">
        <div class="navbarInner">
            <ul>
                <li><a href="index.html">Home</a></li>
                <br><br>
                <b>Backstore</b>
                <li><a href="backstore_p7.html">Products</a></li>
                <li><a href="backstore_p9.html">Orders</a></li>
                <li><a href="UserPage.php">Users</a></li>
            </ul>
        </div>

        <?php
        if (isset($_SESSION['adminname'])) {
            $admin2 = $_SESSION['adminname'];
            echo "<h2 align='left'> <font color= #red font face='mambo' size='5pt'>
    &nbsp;&nbsp;&nbsp;&nbsp; $admin2 is logged in</font> </h2>";
        }
        ?>
    </div>
</div>



    <!-- editing from here -->




    <div class="content-desktop content-tablet content-phone">
        <div class="topContent-phone topContent-tablet topContent-desktop">
            <h1>Backstore</h1>
            <p><b>List of Users</b><br>This section of the backstore allows you to add, edit, or delete user(s).</p>
        </div>
        <div class="userButtons">
            <a href="addnew.php">
                <button type="button">Add User</button>
            </a>

        </div>
        <br>
    <?php

    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-info text-center" style="margin-top:20px;">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php

        unset($_SESSION['message']);
    }
    ?>



    <tbody>
    <?php
    //load xml file
    $xml = simplexml_load_file('../soen287/database.xml');

    foreach ($xml->user as $row) {
        ?>

                <table class="tab" >
                    <thead>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Admin</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Code Postal</th>
                    <th>Email Address</th>
                    </thead>
                <tr>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->password; ?></td>
                    <td><?php echo $row->isAdmin; ?></td>
                    <td><?php echo $row->fName; ?></td>
                    <td><?php echo $row->lName; ?></td>
                    <td><?php echo $row->postalCode; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td>
                        <a href="editUserform.php" ><span class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="delete.php" id="delete" ""><span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr>
                    <?php
                    }
                    ?>

                    </tbody>
                </table>






