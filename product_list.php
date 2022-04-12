<?php
    session_start();
    if(isset($_POST["delete"])){
        array_splice($_SESSION["products"], intval($_POST["delete"]), 1);
    }
    else{
        if(!isset($_SESSION["products"])):
            $_SESSION["products"] = array();
        endif;
        array_push($_SESSION["products"], $_POST);
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Product list
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <style>
            .val{
                visibility: hidden;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="bg-primary text-white p-3">
                Product list
            </h1>
            <div>
                <table class="table table-dark table-stripped">
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Description
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($_SESSION["products"] as $cont => $k):
                                echo "<tr>";
                                foreach ($k as $n => $d):
                                    echo "<td>" . $d . "</td>";
                                endforeach;
                        ?>
                        <td>
                            <form action="./product_list.php" method="post">
                                <?php echo "<input type='text' class='val' value='" . $cont . "' name='delete'>"?>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
