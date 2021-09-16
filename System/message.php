

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    axios.post('notify.php', {
    message: 'Flintstone'
  })
  .then(response => {
    console.log("response: ", response);
  })
  .catch(error => {
    console.log(error);
  });
</script>