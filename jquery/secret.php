<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: white;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        #show {
            background-color: #28a745;
            color: white;
        }

        #hide {
            background-color: #dc3545;
            color: white;
        }

        button:hover {
            opacity: 0.8;
        }

        #secret {
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>Welcome To Page</h1>

    <button id="show">Show</button>
    <button id="hide">Hide</button>
    <div id="secret">I am secret</div>

    <script>
        $(document).ready(function(){
            $("#show").click(function(){
                $("#secret").show();
            });

            $("#hide").click(function(){
                $("#secret").hide();
            });
        });
    </script>

</body>
</html>