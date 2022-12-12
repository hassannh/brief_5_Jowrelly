
 <div class="" id="">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="home">manage </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about"> logout</a>
                </li>
               
              </ul>

            </div>






<?php
 require_once './app/controllers/ItemsControllers.php';
 require_once './app/controllers/UsersControllers.php';
 require_once './app/views/includes/header.php';
 $noFooter = '';
 ?>


<?php
//Manage Items Page 

$data = new itemsController();
$items = $data->selectItems();

?>

<h1 class="text-center push">Manage Items</h1>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Adding Date</td>
                <td>Picture</td>
                <td>Control</td>
            </tr>

            <?php
         foreach ($items as $item) {

             echo "<tr>";
             echo "<td>" . $item['item_ID'] . "</td>";
             echo "<td>" . $item['Name'] . "</td>";
             echo "<td>" . $item['Description'] . "</td>";
             echo "<td>" . $item['quantity'] . "</td>";
             echo "<td>" . $item['price'] . "</td>";
             echo "<td>" . $item['add_date'] . "</td>";
             echo '<td> <img style="width: 38px;" src="app/views/includes/images/' . $item['picture'] . '" alt="item"> </td>';
             echo '<td style=" GAP: 10PX; DISPLAY: flex; FLEX-WRAP: WRAP; JUSTIFY-CONTENT: center;" class="controol">';
             echo "<a href='items.php?do=Edit&itemid=" . $item['item_ID'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>";
            echo "<a href='items.php?do=Delete&itemid=" . $item['item_ID'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>";
            echo "</td>";
            echo "</tr>";
         }
?>
        </table>
  </div>
    <a href="Add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Item</a>
 </div>



<?php
  require_once './app/views/includes/footer.php';
  ?>