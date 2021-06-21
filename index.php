<html>
    <head>
        <title>Translate App</title>
        <!-- Bootstrap library -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <?php 
            require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;
            
            //$source = 'en';
            //$target = 'id';
            //$text = 'Im on vacation';

            //$trans = new GoogleTranslate();
            //$result = $trans->translate($source, $target, $text);
            $result = '...';

			$text = $_GET['inputTranslate'];
            if(isset($_GET['buttonTrans']) && !($text == null || substr_count($text, ' ') === strlen($text))) {
                $source = $_GET['langTypeInput'];
                $target = $_GET['langType'];

                $trans = new GoogleTranslate();
                $result = $trans->translate($source, $target, $text);
                //echo '<h2>' .$result. '</h2>';
                //echo '<h4>CLICKED</h4>';
            } 
        ?>

    </head>
    <body>

        <nav class="navbar navbar-dark bg-dark">
          <!-- Navbar content -->
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> 
              Translation App
            </a>
          </div>
        </nav>


        <div class="position-absolute top-50 start-50 translate-middle">
            <form name="form" action="" method="get">
              <div class="mb-3">
                <label for="inputTranslate" class="form-label">Input Text</label>
                <textarea rows=4 cols=50 class="form-control" id="inputTranslate" name="inputTranslate" aria-describedby="emailHelp"></textarea>
              </div>
              <div class="mb-3">
                <label for="translatedText" class="form-label">Translated Text</label>
                <textarea rows=4 cols=50 class="form-control" id="translatedText" name="translatedText" disabled><?php echo $result ?></textarea>
              </div>

              <div class="mb-3 form-check">
                <label for="langType" class="form-label">Input Language</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="langTypeInput">
                  <option selected value="en">English</option>
                  <option value="id">Indonesia</option>
                  <option value="zh">Mandarin</option>
                  <option value="de">Germany</option>
                  <option value="th">Thailand</option>
                </select>
              </div>


              <div class="mb-3 form-check">
                <label for="langType" class="form-label">Output Language</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="langType">
                  <option selected value="id">Indonesia</option>
                  <option value="en">English</option>
                  <option value="zh">Mandarin</option>
                  <option value="de">Germany</option>
                  <option value="th">Thailand</option>
                </select>
              </div>
              <button type="submit" name="buttonTrans"
                value="buttonTrans" class="btn btn-primary">Submit</button>
            </form>   
        </div>

        

    </body>
</html>