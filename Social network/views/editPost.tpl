<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/favicon1.png"/>
    <title>Hikers</title>
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    {section name=i loop=$postsRows}
       
        <div id="editiz">
        <form name="editpost" action="editPost.php" method="POST">

          Date: {$postsRows[i].date}<br>
          Post: <input type="text" name="inputpost" value="{$postsRows[i].body}"><br>
          privacy:  {$postsRows[i].privateStatus}<br>
          
          <input type="hidden" name="ajdi" value="{$postsRows[i].id}">
          <input type="submit" name="editpostbtn" value="Edit" id="editpostbtn">
        </form>
       </div>
    {/section}
        
</body>
</html>