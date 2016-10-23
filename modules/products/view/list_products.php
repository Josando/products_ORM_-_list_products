<section >
  <p>HOa</p>
    <div class="container">
        <div id="list_prod" class="row text-center pad-row">
            <ol class="breadcrumb">
                <li class="active" >Products</li>
            </ol>
            <br>
            <br>
            <br>
            <br>
            <?php

            if (isset($arrData) && !empty($arrData)) {
                foreach ($arrData as $product) {
                  //  echo $productos['id'] . " " . $productos['nombre'] . "</br>";
                    //echo $productos['descripcion'] . " " . $productos['precio'] . "</br>";
                    ?>
                    <a id="prod" href="index.php?module=products&idProduct=<?php echo $product['Code'] ?>" >
                        <img class="prodImg" src=<?php echo $product['Avatar'] ?> alt="product" >
                        <p><?php echo $product['Products_name'] ?></p>
                        <p id="p2"><?php echo $product['Price'] ?>€</p>
                    </a>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
