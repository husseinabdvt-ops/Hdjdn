<!DOCTYPE html>
<html>
<head>
    <title>Live Theme Editor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
        }
        #editor {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div id="editor">
        <label for="bgColorPicker">Background Color:</label>
        <input type="color" id="bgColorPicker">
        <br><br>
        <label for="textColorPicker">Text Color:</label>
        <input type="color" id="textColorPicker">
    </div>

    <script>
        const bgColorPicker = document.getElementById('bgColorPicker');
        const textColorPicker = document.getElementById('textColorPicker');

        // Function to update the styles based on color input
        function updateStyles() {
            document.body.style.backgroundColor = bgColorPicker.value;
            document.body.style.color = textColorPicker.value;
        }

        // Add event listeners to color pickers
        bgColorPicker.addEventListener('input', updateStyles);
        textColorPicker.addEventListener('input', updateStyles);
    </script>
</body>
</html>
