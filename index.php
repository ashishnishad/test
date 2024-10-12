<html>
	<head>
		<title>JS</title>
	</head>
	<body>
		<h2>Redeclaring a Variable Using let</h2>
		<p id="demo"></p>
	</body>
	<script type="module">
	import {message,hello} from "./js/message.js";
	let  x = 10;
	// Here x is 10

	{  
	  let x = 2; 	
	  // Here x is 2
	}

	const as = ()=> 'asas';
	const numArr = [2,3,9,4,5];
	
	const maxNumber = (numArr)=>{
		return Math.max(...numArr);
	}
	console.log(maxNumber(numArr));

	const isPalindrm = (str)=>{
		return str === str.split('').reverse().join('');
	}
	console.log(isPalindrm("assa"));

	const getEven = (numArr)=>{
		return numArr.filter(num => num%2 === 0);
	}
	console.log(getEven(numArr));

	const getFact = (num)=>{
		if(num == 0 || num == 1){
			return 1;
		}else{
			return num*getFact(num-1);
		}
	}
	console.log(getFact(4));

	// Here x is 10
	document.getElementById("demo").innerHTML = x;
	console.log(message(),hello);
	</script>
</html>