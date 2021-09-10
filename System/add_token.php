<form class="form1" method="post" action="notify.php" id="form1" target="iframe_target">
<iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
<fieldset>
    <ul>
            <p>Please enter your message and token to continue to the notify.</p>
            <label for="name">message:</label><span><input type="text" name="message" placeholder="message" class="required" role="input" aria-required="true"/></span>
            <label for="name">token:</label><span><input type="text" name="token" placeholder="token" class="required" role="input" aria-required="true"/></span>
            <input  class="submit .transparentButton" value="Next" type="submit" name="Submit"/> 

    </ul>
    <br/>
    </fieldset>
</form>

<?php
/*
    if (isset($_POST['Submit'])) {
        $_SESSION['message'] = $_POST['message'];
        $_SESSION['token'] = $_POST['token'];

        // Use the following code to print out the variables.
        
        echo 'Session: '.$_SESSION['message'];
        echo '<br>';
        echo 'POST: '.$_POST['message'];
        echo '<br>';
        echo 'Session: '.$_SESSION['token'];
        echo '<br>';
        echo 'POST: '.$_POST['token'];
    }
    */
?> 