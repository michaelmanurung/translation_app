<html>
    <head>

    </head>
    <body>
        <?php 
            require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;
            
            $source = 'en';
            $target = 'id';
            $text = 'Im on vacation';
            
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
            
            // Good morning
            echo '<h2>' .$result. '</h2>';
        ?>
    </body>
</html>