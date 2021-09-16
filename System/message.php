

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    axios.post('notify.php', {
    // เปลี่ยน 'Flintstone' เป็น ข้อความที่ต้องการ
    message: 'Flintstone'
  })
  .then(response => {
    console.log("response: ", response);
  })
  .catch(error => {
    console.log(error);
  });
</script>