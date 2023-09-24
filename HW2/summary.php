<html>
<body>
    Your name is <?php echo $_GET["name"]; ?> <br>
    Your Major is <?php echo $_GET["major"]; ?> <br>
    Your favorite web language is <?php if(isset($_GET["fav_language"])) {
                                            echo $_GET["fav_language"];
                                        } ?> <br>
    Your development environments are <?php 
                                        if(isset($_GET["vscode"])) {
                                            echo $_GET["vscode"]." ";                                          
                                        }
                                        if(isset($_GET["brackets"])){
                                            echo $_GET["brackets"]." ";
                                        } 
                                        if(isset($_GET["other"])){
                                            echo $_GET["othername"];
                                        } ?> <br>   
</body>
</html>

