<form class="form1" method="post" action="./data.php" id="form1" target="iframe_target">
<fieldset>
    <ul>
            <p>Please enter your server to continue to the notify.</p>
            <label for="name">server:</label><span><input type="text" name="url" placeholder="url server" class="required" role="input" aria-required="true"/></span>
            <input  class="submit .transparentButton" value="Next" type="submit" name="Submit"/> 

    </ul>
    <br/>
    </fieldset>
</form>

<script>
    function handleSubmit(event) {
    event.preventDefault();

    const data = new FormData(event.target);

    const value = Object.fromEntries(data.entries());

    console.log({ value });
        
  }

  const form = document.querySelector('form');
  form.addEventListener('submit', handleSubmit);
  
</script>