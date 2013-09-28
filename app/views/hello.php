<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            color: #555;
        }
        
        h1{
            text-align:center;
            color:#999;
        }

        .welcome {
           width: 300px;
           height: 300px;
           position: absolute;
           left: 50%;
           top: 50%; 
           margin-left: -150px;
           margin-top: -150px;
        }

        p {
            margin:2em 0 1em;
        }
        
        ul{
            padding:0;
            margin:0;
            text-align:left;
            list-style:disc inside;
        }
    </style>
</head>
<body>
    <div class="welcome">
        <h1>It works!</h1>
        <p>These are your products:</p>
        <ul>
            <?php foreach($products as $product): ?>
                <li><?php echo $product->name->$lang ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
