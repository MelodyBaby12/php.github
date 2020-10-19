<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <h1>Edit</h1>

    <div class="button">
    <button class = "button-edit-one">Show</button><button class ="button-edit-two">Back</button>
    </div>
    
    <div class="container">
    <form action= "xl_edit_user.php">

    Title<input type="text" id="name" name="name" >

    <label for="lname">Description</label>
    <input type="text" id="email" name="email" >

    <label for="country">Image</label>
    <input type="text" id="phone" name="phone" >
    
    <label for="address">Status</label>
    <input type="text" id="address" name="address" >

    <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>