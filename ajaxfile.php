<?php

if (isset($_POST["emp_id"])) {
    $output2 = '';

    include "connection/config.php";
    $query = "SELECT * FROM products WHERE p_id = '" . $_POST["emp_id"] . "'";
    $result = mysqli_query($con, $query);


    $output2 .= '<div class="modal-header">';
    while ($row = mysqli_fetch_array($result)) {

        $output2 .= '
        <h5 class="modal-title" id="productModalLabel">ADDED TO YOUR CART</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
      </div>
      <div class="modal-body">
           <div class="row">
              <div class="col-md-6">
                  <img src="images/' . $row["p_image"] . '" alt="Product Image" class="img-thumbnail" style="height:150px;width:150px">
              </div>
              <div class="col-md-6">
              <h5 class="modal-title" id="productModalLabel">' . $row["p_name"] . '</h5>
                  <p>' . $row["p_description"] . '</p>
                  <p>Price: $' . $row["p_price"] . '</p>
              </div>
          </div>
      </div>';


    }
    echo $output2;









}