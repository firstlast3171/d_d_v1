<!DOCTYPE html>

<?php require "partials/header.php" ?>


     <div class="row">

          <div class="col-12 bg-danger p-2">
               <ul class="list-style d-lg-flex d-block">
                    <li class="me-2"><a href="#">Aung Aung</a></li>
                     <li class="me-2"><a href="#">Mg Mg</a></li>
                      <li class="me-2"><a href="#">Aye Aye</a></li>
                       <li class="me-2"><a href="commission.html">My Commissions</a></li>
               </ul>

              <a href="add.html" class="btn btn-sm btn-warning">+ Add Commission</a>

              <div class="font-weight-bold">
               You Are In <label for="" class="text-white">Aung Aung</label>  :: Now
              </div>
          </div>

          <div class="row">

          
          <div class="col-12 col-md-6 bg-seconday my-2">
               <form action="_actions/getnum_price.php" method="post">
                    <input type="text" name="dd" placeholder="Please Type Num here (Eg- 10R200)" class="form-control">
                    <input type="submit" value="Add" class="btn btn-sm btn-primary form-control my-2">
               </form>
               <div class="overflow-auto p-3 bg-light" style="max-height: 350px;">
                    <?php 
                    $array = ["10R100", "34R400"];

                    foreach($array as $arr){
                         
                         echo $arr;
                         echo ',';
                    }
                    ?>
               </div>
          </div>

          <div class="col-12 col-md-6 bg-seconday my-2">
               <div class="row ms-3">

                    <?php foreach($selections as $selection): ?>
                    <div class="col-4">
                        <div class="row text-center border border-dark">
                         <div class="col-6  bg-warning text-white"><?php echo $selection->num ?></div>
                          <div class="col-6  bg-primary text-white"><?php echo $selection->AungAung ?></div>
                        </div> 
                    </div>
                         <?php endforeach ?>
                    
               </div>
               
          </div>

          <div class="col-12 bg-danger p-3">
               <div class="row">
               <div class="average col-6">
                    <input type="text" class="form-control" placeholder="Put Your Average Here (Eg-10000)" value="10000">
                    <input type="submit" value="Add" class="form-control my-2 btn btn-primary">
               </div>

               <div class="col-6">
                    <p class="text-white text-center fs-3"> <label for="" class="font-weight-bold"> Aung Aung</label> 's Total : <label for="" class="text-white">100000</label></p>
               </div>

               <div class="col-12 text-center py-3">
                    <a href="profit.html" class="fs-4">Profit of <i> Aung Aung</i></a>

               </div>
                    </div>                       
          </div>
</div>
     </div>


<?php require "partials/footer.php" ?>