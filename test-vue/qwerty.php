<form class="form1" method="post" action="" id="form1">
<fieldset>
    <ul>
            <p>Please enter your username to continue to the webshop.</p>
            <label for="name">User Name:</label><span><input type="text" name="username" placeholder="User Name" class="required" role="input" aria-required="true"/></span>

            <input  class="submit .transparentButton" value="Next" type="submit" name="Submit"/> 

    </ul>
    <br/>
    </fieldset>
</form>

<?php
    if (isset($_POST['Submit'])) {
        $_SESSION['username'] = $_POST['username'];

        // Use the following code to print out the variables.
        echo 'Session: '.$_SESSION['username'];
        echo '<br>';
        echo 'POST: '.$_POST['username'];
    }
?> 