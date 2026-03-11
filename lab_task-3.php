<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Calculator</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f4f4f4;
    font-family:Arial, sans-serif;
}

.calculator{
    background:white;
    padding:22px; /* slightly different */
    border-radius:12px;
    box-shadow:0 0 12px rgba(0,0,0,0.25);
}

#display{
    width:100%;
    height:50px;
    font-size:22px;
    text-align:right;
    padding:6px; /* slightly different */
    margin-bottom:12px;
    border-radius:5px;
    border:1px solid #ccc;
}

.buttons{
    display:grid;
    grid-template-columns:repeat(4,75px); /* small change */
    gap:8px;
}

button{
    height:50px;
    font-size:18px;
    border:none;
    border-radius:6px;
    background:#3498db;
    color:white;
    cursor:pointer;
    transition:0.2s;
}

button:hover{
    background:#2980b9;
}

.clear{
    background:#e74c3c;
}

.clear:hover{
    background:#c0392b;
}
</style>
</head>

<body>

<div class="calculator">

<input type="text" id="display" readonly placeholder="0">

<div class="buttons">

<button class="clear" onclick="resetScreen()">C</button>
<button onclick="addChar('/')">/</button>
<button onclick="addChar('*')">*</button>
<button onclick="addChar('-')">-</button>

<button onclick="addChar('7')">7</button>
<button onclick="addChar('8')">8</button>
<button onclick="addChar('9')">9</button>
<button onclick="addChar('+')">+</button>

<button onclick="addChar('4')">4</button>
<button onclick="addChar('5')">5</button>
<button onclick="addChar('6')">6</button>
<button onclick="computeResult()">=</button>

<button onclick="addChar('1')">1</button>
<button onclick="addChar('2')">2</button>
<button onclick="addChar('3')">3</button>
<button onclick="addChar('0')">0</button>

</div>
</div>

<script>
function addChar(char){
    const screen = document.getElementById("display");
    screen.value += char;
}

function resetScreen(){
    document.getElementById("display").value = "";
}

function computeResult(){
    const screen = document.getElementById("display");
    try{
        screen.value = eval(screen.value);
    }
    catch(err){
        screen.value = "Error!";
    }
}
</script>

</body>
</html>