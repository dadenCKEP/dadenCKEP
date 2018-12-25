<?php require_once("../include/tpl/header.html")?>
<div class="container-fluid text-center mt-3" id="pixi">
  <!-- PixiJs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.8.3/pixi.js"></script>
  <script type="text/javascript">
var app = new PIXI.Application(300, 300, { backgroundColor: 0xffffff });
var div = document.getElementById('pixi');
div.appendChild(app.view);
var ouroboros = PIXI.Sprite.fromImage("image/ouroboros.png");
var theta = 0;
ouroboros.scale.y = 2;
ouroboros.anchor.set(0.5);
ouroboros.x = app.screen.width / 2;
ouroboros.y = app.screen.height / 2;
app.stage.addChild(ouroboros);
app.ticker.add(function(delta) {
  theta += delta;
  ouroboros.scale.x = 2 * Math.sin((theta / 90) * Math.PI);
});
</script>
</div>
<?php require_once("../include/tpl/footer.html")?>