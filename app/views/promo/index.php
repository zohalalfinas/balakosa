<div class="right_col">
<center>
    <p class="lead">Promo</p>
  </center>
<div class="col-md-6 ">
  <?php
    $i = 1;
    foreach ($data['promo'] as $promo) {?>
    
    <div class="container secondary mt-2 pt-2 pb-2 rounded shadow-lg " style="background-color:white;">
        <div class="row">
          <div class="text-left col-lg-2" style="margin-left:3%;">
            <strong >begin</strong>
          </div>
          <div class="text-left col ml-5"> <?= $promo['begin']?></div>
        </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >store</strong>
        </div>
        <div class="text-left col ml-5" > <?= $promo['store']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >description</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['description']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >reward</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['reward']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >target</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['target']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >url</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['url']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >reward</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['store']?></div>
      </div>

      <button type="button" class="btn btn-warning ml-3 mt-4 "><a style="color:black;" href="">join</a></button>
    </div>  


  <?php
      $i++;
    }
  ?>
    
   
  </div>
</div>
</div>
