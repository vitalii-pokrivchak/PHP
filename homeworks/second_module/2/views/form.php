<?php if ($validated): ?>
    <form action="index.php" method="post">
        <label for="username">Enter your name</label></br>
        <input type="text" name="name" id="username"></br>
        <label for="email">Enter your email</label></br>
        <input type="text" name="email" id="email"></br>
        <label for="subject">Enter subject</label></br>
        <input type="text" name="subject" id="subject"></br>
        <textarea name="message" id="msg" cols="30" rows="10" placeholder="Enter your message here"></textarea></br>
        <input type="submit" value="Send" name="send-btn">
    </form>

<?php else: ?>
    <?php if (is_array($errors) && !empty($errors)): ?>
        <form action="index.php" method="post">
            <label for="username">Enter your name</label></br>
            <input type="text" name="name" id="username"></br>
            <?php if (array_key_exists('name', $errors)): ?>
                <p style="color:red;"><?= $errors['name']; ?></p>
            <?php endif; ?>
            <label for="email">Enter your email</label></br>
            <input type="text" name="email" id="email"></br>
            <?php if (array_key_exists('email', $errors)): ?>
                <p style="color:red;"><?= $errors['email']; ?></p>
            <?php endif; ?>
            <label for="subject">Enter subject</label></br>
            <input type="text" name="subject" id="subject"></br>
            <?php if (array_key_exists('subject', $errors)): ?>
                <p style="color:red;"><?= $errors['subject']; ?></p>
            <?php endif; ?>
            <textarea name="message" id="msg" cols="30" rows="10" placeholder="Enter your message here"></textarea></br>
            <?php if (array_key_exists('message', $errors)): ?>
                <p style="color:red;"><?= $errors['message']; ?></p>
            <?php endif; ?>
            <input type="submit" value="Send" name="send-btn">
        </form>
    <?php endif; ?>
<?php endif; ?>
