<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$articulos->id}}">
  <div class="modal-dialog">
    <div class="modal-content panel default blue_border horizontal_border_1">
      <div class="modal-body"> 
        <div class="row">
          <div class="block-web">
            <div class="header">
              <h3 class="content-header theme_color">&nbsp;Eliminar Artículo</h3>
            </div>
            <div class="porlets-content" style="margin-bottom: -50px;">
              <h4>¿Esta segúro que desea eliminar el Artículo?</h4>
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div>
      </section>
    </div>
    <div class="modal-footer" style="margin-top: -10px;">
      <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
        <form action="{{url('articulos', [$articulos->id])}}" method="POST"> 
         <input type="hidden" name="_method" value="DELETE">
         <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
         <button type="submit" class="btn btn-primary">Eliminar</button>
       </form>
     </div>
   </div>
 </div><!--/modal-content--> 
</div><!--/modal-dialog--> 
</div><!--/modal-fade--> 

