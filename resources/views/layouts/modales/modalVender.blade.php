<div class="modal modalVender ">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="app-modal-header modal-header">
                <button class="close cerrarVender">&times;</button>
                <h3>Vensder Producto <span class="fa fa-inbox"></span></h3>
            </div>
            <div class="modal-body">
               <form action="{{route('manageProducto-store')}}" class="form-group">
                {{ csrf_field() }}
                <input id="user_id" type="hidden" name="user_id" value="{{Auth::user()->id}}" required autofocus>
                <div class="form-group">
                    <label class="form-control" for="">nombre </label>  <input name="nombre" class="form-control" type="text">  
                    
                </div>
                <div class="form-group">
                    <label for="image">Imagen:</label>
                    <input type="file" name="image" value="1225212.png" class="form-control" required >
                    
                </div>
                <div class="form-group">
                    <label class ="form-control" for="">descripcion </label>
                    <input name="descripcion" class="form-control" type="text">  
                    
                </div>
                <div class="form-group">
                    <select name="categoria" class="form-control">
                        <option value="">
                            Categoria
                        </option>
                        @foreach($categoria as $categorias)
                        <option  value="{{$categorias->id}}">
                            {{$categorias->nombre}}
                        </option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="form-group">

                    <label class ="form-control" for="">stock </label>
                    <input name="stock" class="form-control" type="number">      
                </div>
                <div class="form-group">
                    <label class ="form-control" for="">precio </label>
                    <input name="precio" class="form-control" type="number">
                    
                </div>
                
            </div>
            <div class="app-modal-footer modal-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Vender!</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>