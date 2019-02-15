<?php 
	require 'head.php'; 
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: signin");
	}else{
		echo "<div class='center'><span>Welcome ". $_SESSION['nama']."</span><br><span>Anda adalah ". $_SESSION['level']."</span></div>";
	}
?>

<script src="https://www.gstatic.com/firebasejs/5.8.1/firebase.js"></script>
<script>
  var config = {
    apiKey: "AIzaSyBvcN34GVw7AbtUmx1jA6AupJBYGih8mFQ",
    authDomain: "mytem-31119.firebaseapp.com",
    databaseURL: "https://mytem-31119.firebaseio.com",
    projectId: "mytem-31119",
    storageBucket: "mytem-31119.appspot.com",
    messagingSenderId: "943761145647"
  };
  firebase.initializeApp(config);
</script>
<body>
	
</body>
<?php require 'foot.php'; ?>
