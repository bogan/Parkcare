<?php $title = 'Contact';	?>
<?php include 'header.php'; ?>

    <h2 class="page-header">Contact</h2>

    <p>
        You can contact the group for any reason such as membership, newsletters, problems, feedback, etc.
    </p>

    <p>
        If you'd like to know more about Cooleman Ridge Park Care Group or join
        up, please contact us at the following email address: <a href="mailto:admin@coolemanridge.org.au">admin@coolemanridge.org.au</a>.
    </p>

    <p>
        The best way to make contact is via email. Our current email address is <a href="mailto:admin@coolemanridge.org.au">admin@coolemanridge.org.au</a>. Somebody should make contact with you within 24 hours.
    </p>

    <form class="form-horizontal" role="form" method="post" action="contact.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
        </div>
        <div class="form-group">
            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                <?php echo "<p class='text-danger'>$errHuman</p>";?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <?php echo $result; ?>
            </div>
        </div>
    </form>

<?php include 'footer.php'; ?>