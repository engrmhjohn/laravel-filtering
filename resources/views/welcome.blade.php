<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center text-bold">Add Product Form</h2>
                <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for=""><Strong>Product Name</Strong></label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="col-lg-6">
                            <label for=""><Strong>Product Price</Strong></label>
                            <input class="form-control" type="text" name="price">
                        </div>
                        <div class="col-lg-12">
                            <label for=""><Strong></Strong></label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for=""><Strong>Image</Strong></label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <input type="submit" class="form-control btn btn-success" Value="Add Product">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
