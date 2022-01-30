<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/musicPriority.php';
?>

<style>
    body {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .text {
      position: absolute;
      color: #FFF;
      left: 50%;
      top: 50%;
      font-size: 3rem;
    }
  </style>
  <body>
    <div id="app"></div>
    <!-- <h1 class="text">This is a test</h1> -->
    <script type="module" src="<?=ASSETS?>pomoro/javascript/gateway.js"></script>

    <!-- <script type="module" src="/MTLLoader.js"></script>
    <script type="module" src="/OBJLoader.js"></script> -->
  </body>
</html>