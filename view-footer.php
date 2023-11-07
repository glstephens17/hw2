<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Example</title>
    <style>
        /* Define a CSS class for buttons with margins */
        .button-with-margin {
            margin: 10px;
            background-color: #007bff; /* Set the background color to blue */
            color: #fff; /* Set the text color to white */
            padding: 10px 20px; /* Add some padding for a better button appearance */
            border: none; /* Remove the button border */
            cursor: pointer; /* Change the cursor to a pointer on hover */
            transition: background-color 0.3s ease; /* Add a smooth transition for background color */
        }

        /* Define a hover effect */
        .button-with-margin:hover {
            background-color: #0056b3; /* Change the background color on hover */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>JavaScript Alert</h2>
        <button class="button-with-margin" onclick="myFunction()">Try it</button>
        <script>
            function myFunction() {
                alert("Learning is fun!");
            }
        </script>

        <h2>JavaScript Timing</h2>
        <p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>
        <button class="button-with-margin" onclick="setTimeout(myFunction, 3000);">Try it</button>
        <script>
            function myFunction() {
                alert('Hello');
            }
        </script>
    </div>
</body>
</html>
