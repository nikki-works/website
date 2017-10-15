<template>
	<div>
	<div id="wave">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>
	<div id="message"></div>
</div>
</template>

<style>
	body {
		margin-top: 10vh;
		text-align: center;
	}

	div#wave {
		position: relative;
		width: 100px;
		text-align: center;
		margin-left: auto;
		margin-right: auto;
	}

	div#wave .dot {
		display: inline-block;
		width: 12px;
		height: 12px;
		border-radius: 50%;
		margin-right: 3px;
		background: #303131;
		animation: wave 1.3s linear infinite;
	}

	div#wave .dot:nth-child(2) {
		animation-delay: -1.1s;
	}

	div#wave .dot:nth-child(3) {
		animation-delay: -0.9s;
	}

	@keyframes wave {

		0%,
		60%,
		100% {
			transform: initial;
		}
		30% {
			transform: translateY(-15px);
		}
	}
</style>
<script>
	console.log("NITIN")
	var url = document.location.href;
	var name = url.split('?')[1];
	if (name != "undefined") {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if (this.responseText == "No User") {
					document.getElementById("wave").style.display = "none";
					document.getElementById("message").innerHTML = "Unknown API Path";
				} else {
					window.location = this.responseText;
				}
			}
		};
		xhttp.open("POST", "backend_geturl.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

		//xhttp.send("name=" + name);
	} else {
		document.getElementById("wave").style.display = "none";
	}
</script>
