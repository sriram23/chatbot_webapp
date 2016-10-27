<html>
<?php
	$name = $_POST['uname'];
	echo "<head><title>Welcome ".$name." ! </title></head>";
?>
	<body>
		<script>
		function key(e){
			if(e.keyCode==13)
				ontype();
		}
		function ontype(){
			var link = document.getElementById("msg").value;
			document.getElementById("umsg").innerHTML = link;
			document.getElementById("msg").value = "";
			disp();
		}
		</script>
<?php		echo "<h2 id=nothing>Hello!.. ".$name."</h2>";?>
		<p align="right" id="umsg">Hello World!</p>
		<p align="right" id="#1"></p>
		<p align="left" id="$1"></p>
		<p align="right" id="#2"></p>
		<p align="left" id="$2"></p>
		<p align="right" id="#3"></p>
		<p align="left" id="$3"></p>
		<p align="right" id="#4"></p>
		<p align="left" id="$4"></p>
		<footer align="Right"><input type="text" required id="msg" placeholder="Enter the message"><input type="button" value="Send" onclick="ontype()" onkeypress="key(event)"></footer>
		<script>
			function disp(){
				document.getElementById("#1").innerHTML = document.getElementById("#2").innerHTML;
				document.getElementById("#2").innerHTML = document.getElementById("#3").innerHTML;
				document.getElementById("#3").innerHTML = document.getElementById("#4").innerHTML;
				document.getElementById("#4").innerHTML = document.getElementById("umsg").innerHTML;
				document.getElementById("umsg").innerHTML = "";
				document.getElementById("$1").innerHTML = document.getElementById("$2").innerHTML;
				document.getElementById("$2").innerHTML = document.getElementById("$3").innerHTML;
				document.getElementById("$3").innerHTML = document.getElementById("$4").innerHTML;
				document.getElementById("$4").innerHTML = bot_greet();
			}
		</script>
		<script>
			function bot_greet(){
				var temp = "";
				var rand = Math.floor((Math.random() * 20) + 1);
				switch(rand){
				case 20:
					temp = "I am a coding lover. What about you?";
					break;
				case 1:
					temp = "You must have a unique dream. Your dreams are the things that makes you much stronger";
					break;
				case 2:
					temp = "It's boring na.. Speak something.";
					break;
				case 3:
					temp = "What do u think about me?";
					break;
				case 4:
					temp = "That's a nice thing.";
					break;
				case 5:
					temp = "Hmmm.. What doing?";
					break;
				case 6:
					temp = "What is your passion?";
					break;
				case 7:
					temp = "What are all your hobbies?";
					break;
				case 8:
					temp = "Tell me some thing. I'm bored..";
					break;
				case 9:
					temp = "Nice to hear from you.";
					break;
				case 10:
					temp = "Hmm..";
					break;
				case 11:
					temp = "Ok";
					break;
				case 12:
					temp = "I like Steve Jobs very much. What about you?";
					break;
				case 13:
					temp = "What are you doing now?";
					break;
				case 14:
					temp = "Uff.. That's a great thing..";
					break;
				case 15:
					temp = "LoL!..";
					break;
				case 16:
					temp = "Sorry! I can't understand what you said";
					break;
				case 17:
					temp = "Do you hear songs??";
					break;
				case 18:
					temp = "Tell me about your profession..";
					break;
				case 19:
					temp = "When I start typing few lines of code, I used to get hell lot of errors..LoL..";
					break;
				}
				return temp;
			}
		</script>
      </body>
</html>
