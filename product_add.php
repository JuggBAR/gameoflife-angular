<!DOCTYPE html>
<html>
    <head>
        <title>
            Product add
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="bg-primary text-white p-3">
                Product add
            </h1>

            <div>
                <style>
                    .val{
                        visibility: hidden;
                    }
                </style>
                <form class="form" action="./product_list.php" method="post">
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div>
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control">
                    </div><div>
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </form>
            </div>
            -->
        </div>
    </body>
</html>
