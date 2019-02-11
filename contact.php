<?php
    $title = "Contact";
    require('layout/header.php');
?>
<div class="contact">
    <div class="my-5">
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="msg">Message</label><br/>
        <textarea name="msg" id="msg"></textarea>
        <input type="submit" value="Send">
    </form>
</div>
<?php require('layout/footer.php'); ?>
