<html>

<head>
  <meta charset="UTF-8">
  <title>BodyPix with Webcam</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/addons/p5.dom.min.js"></script>
  <script src="https://unpkg.com/ml5@latest/dist/ml5.min.js" type="text/javascript"></script>

  <style></style>
</head>

<script src="sketch.js"></script>

<body>
    <h1>BodyPix with Image</h1>
    <form >
        <?php
          $val = $_POST["tex"];
          echo "<div><textarea id='url' style='display:None'>".$val."</textarea></div>";
        ?>

        
        
    </form>
    
</body>

</html>