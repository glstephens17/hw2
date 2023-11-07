<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>JavaScript Alert</h2>

        <button onclick="myFunction()">Try it</button>

        <script>
            function myFunction() {
                alert("Learning is fun!");
            }
        </script>

        <h2>JavaScript Timing</h2>

        <p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>

        <button onclick="setTimeout(myFunction, 3000);">Try it</button>

        <script>
            function myFunction() {
                alert('Hello');
            }
        </script>
    </div>
</body>
</html>
