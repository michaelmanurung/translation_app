<html>
    <head>
        <title>Translate App</title>
        <!-- Bootstrap library -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

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
            <form>
              <div class="mb-3">
                <label for="inputTranslate" class="form-label">Input Text</label>
                <input type="text" class="form-control" id="inputTranslate" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="translatedText" class="form-label">Translated Text</label>
                <input type="text" class="form-control" id="translatedText" disabled>
              </div>
              <div class="mb-3 form-check">
                <label for="langType" class="form-label">Language translate</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Indonesia</option>
                  <option value="1">Mandarin</option>
                  <option value="2">Germany</option>
                  <option value="3">Thailand</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
        </div>

        <div class="position-absolute bottom-0 end-0">
            <button type="button" class="btn btn-info">Help ?</button>
        </div>
        

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