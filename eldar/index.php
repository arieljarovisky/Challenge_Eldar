<?php require('includes/header.php');



$sql = "SELECT * FROM productos";

$query = $db->prepare($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_OBJ);


?>

<section id="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active carousel ">
                <img class="d-block w-100" src="images/banner4.jpg" alt="First slide">
                <h1 class="titulo centrado">Challenge Ariel Jarovisky</h1>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner3.jpg" alt="Second slide">
            </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</section>
<section id="productos">
    <div class="container text-center mt-5 mb-5">

        <h1>Nuestros Productos</h1>

    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($data as $result) { ?>
                <div class="col-md-3 col-sm-12 m-auto">
                    <div class="card">
                        <img class="card-img-top" width="250px" height="250px" src="data:image/jpg; base64, <?php echo base64_encode($result->imagen); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result->nombre ?></h5>
                            <p class="card-text">$<?php echo $result->precio ?></p>
                            <a href="carrito/agregar-carrito.php?id=<?php echo $result->id ?>&nombre=<?php echo $result->nombre?>&precio=<?php echo $result->precio ?>" class="btn btn-primary">agregar al carrito</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php require('includes/footer.php') ?>

</body>

</html>