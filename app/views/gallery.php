<?php
require_once './app/controllers/ItemsControllers.php';
require_once './app/controllers/UsersControllers.php';
require_once './app/views/includes/header.php';
 ?>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <div class="heading_container">
                  <h2>
                    Our modern products
                  </h2>
                </div>
                <p>
                  He walked down the steps from the train
                   station in a bit of a hurry knowing
                    the secrets in the briefcase must be
                     secured as quickly as possible. Bounding
                      down the steps, he heard something behind
                       him and quickly turned in a panic.
                </p>
                <div>
                  <a class="link button" href="">
                    Read More
                  </a>
                </div>
              </div>
            </div>
            <div class="galery-first-pic">
              <div class="img-box">
                <img src="app/views/includes/images/ringF-removebg-preview.png" alt="picture">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery section -->


      <!--first line-->
    <section class="price_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Our Rings Price
          </h2>
        </div>
        
        <div class="price_container">
          <?php
          $itemscon = new itemsController();
          $itemsAff = $itemscon->selectItems();
          foreach ( $itemsAff as $item ){
            ?>
            <div class="card" style="width: 18rem;">
  <img src="app/views/includes/images/<?=$item['picture']?>" class="card-img-top" alt="item">
  <div class="card-body">
    <h5 class="card-title"><?=$item['Name']?></h5>
    <p class="card-text"><?=$item['Description']?></p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    <span><?=$item['price']?> DH</span>
  </div>
</div>
            <!-- echo '<div class="box">';
                echo '<div class="price">';
                    echo $item['price'];
                echo '</div>';
                echo '<div class="img-box">';
                    echo '<img src="app/views/includes/images/'. $item['picture'] . '" alt="item">';
                echo '</div>';
                echo '<div class="name">';
                    echo $item['Name'];
                echo '</div>';
            echo '</div>'; -->
            <?php
        }
        ?>
        </div>
      </div>
    </section>
