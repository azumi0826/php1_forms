<html>
<head>
<meta charset="utf-8">
<title>アンケート</title>
<style>
body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
 </style>

</head>
<body>
	<div class="container">
		<h1>アンケート</h1>
		<form action="write.php" method="post">
			お名前: <input type="text" name="name"><br>
			EMAIL: <input type="text" name="mail"><br>
			感想：<input type ="text" name="kansou"><br>
			<input type="submit" value="送信">
		</form>
    </div>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>