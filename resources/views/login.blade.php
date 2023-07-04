<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/user" method="post"> 
      @csrf
        <input type="text" name="name" placeholder="Enter name"><br><br>
        <input type="password" name="password" placeholder="Enter Password"><br><br>
        <button type="submit">login</button>
    </form>
    
</body>
</html>