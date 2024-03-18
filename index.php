<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Math program, in PHP" />
  <meta name="keywords" content="MTHS, ICD2O" />
  <meta name="author" content="Clara Tyman " />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-blue.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Math program,in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Math program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/red panda.gif" alt="laptop image" />
      </div>
      <!-- basic text -->
      <div id="add-math">
        <p>Q1) 32 + 21 = ?</p>
      </div>
      <div id="subtract-math">
        <p>Q2) 27 - 13 = ?</p>
      </div>
      <div id="multiply-math">
        <p>Q3) 8 + 5 × 3 = ?</p>
      </div>
      <div id="divide-math">
        <p>Q4) (6 ÷ 4) + 5 = ?</p>
      </div>
      <div id="exponent-math">
        <p>Q5) 7 + 3³ = ?</p>
      </div>
      <div class="page-content">
        <?php
        if (array_key_exists('Calculate', $_POST)) {
          Calculate();
        }
        function Calculate()
        {
          echo '<p> A1) ' . (32 + 21) . '</p>';
          echo '<p> A2) ' . (27 - 13) . '</p>';
          echo '<p> A3) ' . (8 + 5 * 3) . '</p>';
          echo '<p> A4) ' . (6 / 4 + 5) . '</p>';
          echo '<p> A5) ' . (7 + 3 ** 3) . '</p>';
        } ?>
        <form method="post">
          <input type="submit" name="Calculate" class="button" value="Calculate" />
        </form>
      </div>
      <br />
    </main>
  </div>
</body>

</html>