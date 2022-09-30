<div class="nav">

<!--    left navigation-->
    <div class="logo">
        <a href="/laptraining5/index.php">LAP PROJECT</a>
    </div>

<!--    center navigation-->
    <div class="pagelinks">
        <a href="/laptraining5/shop.php">Shop</a>
        <a href="/laptraining5/contact.php">Contact</a>
        <?php if (isset($_SESSION['logged_in'])) { ?>
        <a href="/laptraining5/cart.php">Cart</a>
        <?php }?>
    </div>

    <!-- right navigation -->
    <div class="userlinks">
        <?php if (isset($_SESSION['logged_in'])) {?>
        <a href="/laptraining5/logout.php">Logout</a>
        <?php }?>
