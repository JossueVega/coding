
<div class="row justify-content-center mt-5 py-5">
  <button type="button" name="button" class=" btn btn-dark" data-toggle="modal" data-target="#exampleModal">Nueva categoria</button>

</div>
<div class="row justify-content-center">
  <?php foreach ($category as $c): ?>
    <div class="card m-3" style="width: 18rem;">
      <img src="https://cdn.pixabay.com/photo/2016/11/06/23/31/breakfast-1804457_960_720.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-dark"><?php echo $c->Name ?></h5>
        <p class="card-text"><?php echo $c->Description; ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
</div>
  <?php endforeach; ?>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Agregar nueva categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form class="" action="<?php echo base_url() ?>Category/Add" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="" class="col-md-6 text-dark">Genero</label>
              <div class="col-md-10">
                <input type="text" name="Name" value="" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-md-6 text-dark">Descripcion</label>
              <div class="col-md-10">
                <input type="text" name="Descripcion" value="" class="form-control">
              </div>
            </div>
          </div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
