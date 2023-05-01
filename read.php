<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
    <style>
        table, tr, th, td{
            border: black 1px solid;
            border-collapse: collapse;
            padding: 0 3px;
        }
        th, td{
            width: 150px;
            height: 20px;
        }
        a{
            color: black;
        }
        .icons{
            display: flex;
            justify-content: space-evenly;
            border:none;
        }
        .message{
            margin: 5px;
            background-color: lightgrey;
            border-radius: 5px;
            width: 77%;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
    </head>
    <body>
        <div class="container">
            <?php
            if(isset($_GET{'msg'})){
                $msg=$_GET['msg'];
                echo '<div class="message">'.$msg.'</div>';
            }
            ?>
            <a href="create.php">Add new<br></a>
            <table>
                <thead>
                   <tr>
                    <th>ID</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>gender</th>
                    <th>email</th>
                    <th>action</th>
                   </tr>
                </thead>
                <tbody>
                    <?php
                        include 'connection.php';

                            $sql= "SELECT * FROM users";
                            $result=$conn->query($sql);
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['fname'] ?></td>
                                    <td><?php echo $row['lname'] ?></td>
                                    <td><?php echo $row['gender'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td class="icons">
                                        <a href="update.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="delete.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }

                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>