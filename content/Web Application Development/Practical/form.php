<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert function</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
    <div class="Wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>PHP/MySQL Insert function</h2>
                    </div>

                    <form action="insert_function.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Item Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ex: Apple" required>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Item Quantity</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" placeholder="5" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Item Price</label>
                            <input type="text" id="price" name="price" class="form-control" placeholder="50.00" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>