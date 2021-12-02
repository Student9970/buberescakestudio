<script>
  function anima() {
    let mydiv = document.getElementById('animationdiv');
    mydiv.style.cssText = "opacity: 0; transition: 1s;";
    setTimeout(() => {
        mydiv.remove();
    }, 2000);
}
</script>

<div id="animationdiv" class="animationdiv d-flex justify-content-center align-items-center">

<div class="cakecontainer">
  <div class="bdayCake">
    <div class="plate"></div>
    <div class="cream"></div>
    <div class="candle"></div>
    <div class="flame">
      <div class="one">+</div>
      <div class="two">+</div>
      <div class="three">+</div>
    </div>
  </div>
</div>

</div>