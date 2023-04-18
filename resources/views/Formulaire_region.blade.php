<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='../css/formulaire.css'>
    <style>
        .form{
            display:flex;
            flex-direction:column;
            margin-left:30%;
            margin-right:30%;
            background-color:rgb(172, 174, 176);
        }
        .formContent{
            display:flex;
            flex-direction:column;
            align-items:center;
            margin:5%
        }
        .button{
            background-color:rgb(15, 102, 173);    
            color:white;  
            border:none ;
            border-radius:3px;
            width:47%;
        }
        .button:hover{
            width:50%;
            background-color:green;  
            color:white;      
        }
        .title{
            font-weight:bold;
            color:white;

        }
        .inputText{
            width:70%
        }
    </Style>
</head>
<body>
    <form action="/region_insert" method="post" class='form'>
        <div class='formContent'>
            <h2 class='title'>Ajout de region</h2>
            <input type="text" placeholder="Entrer le nom d'une region" name='region_text_box' class='inputText'>
            <br>
            <input type="button" value="submit" class='button'>
        </div>
        
    </form>
</body>
</html>