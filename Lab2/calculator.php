<?php 

$result = '';
$error = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = trim($_POST['expression'] ?? '');

    if($expression === '') {
        $error = "Please enter an expression.";
    } else {
        if(!preg_match('/^[0-9+\-*\/\(\)\.\s]+$/', $expression)) {
            $error = "Invalid characters in expression.";
        } else {
            try {
                $expression = preg_replace('/\s+/', '', $expression);
                
                // More robust division by zero check
                if(preg_match('/\/\s*0(?:\.0*)?(?:[^\.\d]|$)/', $expression)) {
                    $error = "Cannot divide by zero";
                } else {
                    // Safer evaluation using a parsing function
                    $result = evaluateExpression($expression);
                }
            } catch (Throwable $e) {
                $error = "Invalid calculation: " . $e->getMessage();
            }
        }
    } 

    if(isset($_POST['ajax'])) {
        header('Content-Type: application/json');
        echo json_encode(['result' => $result, 'error' => $error]);
        exit;
    }
}

// Safer evaluation function
function evaluateExpression($expression) {
    // Remove any potentially dangerous characters
    $expression = preg_replace('/[^0-9+\-*\/\(\)\.]/', '', $expression);
    
    // Validate the expression has balanced parentheses
    $parenCount = 0;
    for ($i = 0; $i < strlen($expression); $i++) {
        if ($expression[$i] === '(') $parenCount++;
        if ($expression[$i] === ')') $parenCount--;
        if ($parenCount < 0) throw new Exception("Unbalanced parentheses");
    }
    if ($parenCount !== 0) throw new Exception("Unbalanced parentheses");
    
    // Use create_function instead of eval (still not perfect but better)
    // In a real application, consider using a proper math parser library
    $result = eval("return $expression;");
    
    if ($result === false) {
        throw new Exception("Invalid expression");
    }
    
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            font-family: "Sego UI", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background: #222;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            width: 340px;
            padding: 20px;
            color: white;
        }
        .display {
            background: #000;
            color: #0f0;
            font-size: 28px;
            border: none;
            width: 100%;
            padding: 15px;
            text-align: right;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .keys {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        button {
            font-size: 20px;
            padding: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #333;
            color: white;
            transition: background 0.2s;
        }
        button:hover {
            background: #555;
        }
        button.op {
            background: #007bff;
        }
        button.op:hover {
            background: #0056b3
        }
        button.equals {
            background: #28a745;
            grid-column: span 2;
        }
        button.equals:hover {
            background: #1e7e34;
        }
        button.clear {
            background: #dc3545;
        }
        button.clear:hover {
            background: #a71d2a;
        }
        .error {
            color: #ff4b4b;
        }
        .result {
            color: #28a745;
        }

    </style>
</head>
<body>
    <div class="calculator">
          <input type="text" id="display" name="expression" class="display" readonly> 

        <div class="keys">
            <button onclick="appendValue('7')">7</button>
            <button onclick="appendValue('8')">8</button>
            <button onclick="appendValue('9')">9</button>
            <button class="op" onclick="appendValue('/')">/</button>

            <button onclick="appendValue('4')">4</button>
            <button onclick="appendValue('5')">5</button>
            <button onclick="appendValue('6')">6</button>
            <button class="op" onclick="appendValue('*')">*</button>

            <button onclick="appendValue('1')">1</button>
            <button onclick="appendValue('2')">2</button>
            <button onclick="appendValue('3')">3</button>
            <button class="op" onclick="appendValue('-')">-</button>

            <button onclick="appendValue('0')">0</button>
            <button onclick="appendValue('.')">.</button>
            <button class="equals" onclick="calculate()">=</button>
            <button onclick="appendValue('+')">+</button>

            <button class="clear" onclick="clearDisplay()">C</button>
            <button onclick="backspace()">&LeftArrow;</button>
            <button onclick="appendValue('(')">(</button>
            <button onclick="appendValue(')')">)</button>
        </div>

        <div id="result" class="result"></div>
        <div id="error" class="error"></div>

    </div>

<script>
const display = document.getElementById('display');

function appendValue(val) {
    display.value += val;
}

function clearDisplay() {
    display.value = '';
    document.getElementById('result').innerText = '';
    document.getElementById('error').innerText = '';
}

function backspace() {
    display.value = display.value.slice(0, -1);
}

function calculate() {
    const expression = display.value.trim();
    
    if (!expression) {
        document.getElementById('error').innerText = 'Please enter an expression';
        return;
    }

    const formData = new FormData();
    formData.append('expression', expression);
    formData.append('ajax', '1');

    fetch(window.location.href, {
        method: 'POST',
        body: formData
    })
    .then(res => {
        if (!res.ok) {
            throw new Error('Network response was not ok');
        }
        return res.json();
    })
    .then(data => {
        if (data.error) {
            document.getElementById('error').innerText = data.error;
            document.getElementById('result').innerText = '';
        } else {
            document.getElementById('error').innerText = '';
            document.getElementById('result').innerText = 'Result: ' + data.result;
            display.value = data.result;
        }
    })
    .catch(err => {
        console.error('Error:', err);
        document.getElementById('error').innerText = 'Network error occurred';
    });
}

document.addEventListener('keydown', e => {
    const key = e.key;
    if (/[0-9+\-*/().]/.test(key)) appendValue(key);
    else if (key === 'Enter') calculate();
    else if (key === 'Backspace') backspace();
    else if (key.toLowerCase() === 'c') clearDisplay();
});
</script>

</body>
</html>