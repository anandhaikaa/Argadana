<nav>
  <ul>

    <li><a href="index.php" class="m5">Home Page</a></li>
    <?php

      if (isset($_SESSION['hak']))
      {
        ?><li><a href="index.php?p=req-order" class="m2">Request Order</a></li><?php
      }
      else
      {}

    ?>

    <li><a href="index.php?p=payment" class="m5">Payment</a></li>
    <li><a href="index.php?p=contact" class="m5">Contact Us</a></li>

    <?php

      if (isset($_SESSION['hak']))
      {
        ?><li><a href="logout.php" class="m4">Logout</a></li><?php
      }
      else
      {}

    ?>
  </ul>
</nav>
