    <!-- Modal -->
    <div class="modal fade bg-dark" id="modalInsertar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    
            <div class="modal-body">
   
    <div class="card text-center mb-5">

        <div class="card-header text-dark">
            :) Querido Diario...
        </div>

        <div class="card-body ">

            <form class="mt-4" method="POST" action="{{route('recuerdo.store')}}">
                @csrf
                <div class="mb-3">
                    <label class="text-dark"> Título </label> 
                    <input type="text" placeholder="Título" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                    <p class="text-danger fst.italic">
                        {{$errors->first('txtTitulo')}}
                    </p>
                </div>

                <div class="mb-3">
                    <label class="text-dark mt-2"> Recuerdo </label>
                    <input type="text" placeholder="Querido diario..." class="form-control" name="txtRecuerdo" value="{{old('txtRecuerdo')}}">
                    <p class="text-danger fst.italic">
                        {{$errors->first('txtRecuerdo')}}
                    </p>
                </div>
            
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Guardar recuerdo</button>
                </div>
            </form>
       </div>
    </div>
</div>


                
            </div>
    
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Understood</button>
            </div>
    
          </div>
        </div>
      </div>