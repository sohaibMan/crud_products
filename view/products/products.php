<?php
include "../product/product.php";
class product
{
  public $title = "samsung s1";
  public $description = "samsung s1 is the best one";
  public $price = 110;
  public $subTitle = "phone";
}


$productsArr = [new Product(), new Product(), new Product()];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Title</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
  <section class="container-fluid" style="background-color: #eee; height: 100vh">
    <div class="container py-5">
      <div class="row justify-content-center mb-3">
        <?php
        foreach ($productsArr as  $product)
          // echo $product->title;
          print(product($product));
        ?>
      </div>
  </section>
</body>

</html>
?>
"