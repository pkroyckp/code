<html>

<head>
    <title>Video Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet">
</head>

<body>
<?php
echo "Pradip";
?>
    <div class="container-fluid">
        <div class="row h-10 w-100">
            <div class="col-12 col-sm-6 d-flex justify-content-center">
			<div class="embed-responsive embed-responsive-16by9">
			<video class="embed-responsive-item" muted></video>
</div>
</div>
            <div class="col-12 col-sm-6 d-flex justify-content-center">
			<div id="peerDiv" class="embed-responsive embed-responsive-16by9">
</div>
</div>
</div>
</div>

    <script src="/socket.io/socket.io.js"></script>
    <script src="bundle.js"></script>
</body>

</html>
