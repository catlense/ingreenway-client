<script>
fetch('/test_func.php')
  .then(response => response.json())
  .then(date => console.log(date));
</script>

<div id="root"></div>