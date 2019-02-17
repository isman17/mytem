</main>
<div class="mdl-mini-footer">IsMan &copy; Copyright 2019</div>
<script async>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('mytem.js').then(function(sw){
          console.log("Hi ", sw.scope);
        }).catch(function(err){
          console.log(err);
        });
      }
</script>
</html>