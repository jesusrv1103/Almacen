<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-asignar-{{$solicitud->numeroSolicitud}}">
  <div class="modal-dialog">
    <div class="modal-content panel default blue_border horizontal_border_1">
      <div class="modal-body"> 
        <div class="row">
          <div class="block-web">
            <div class="header">
              <h3 class="content-header theme_color">&nbsp;Asignar Cantidad</h3>
            </div>
            <div class="porlets-content" style="margin-bottom: -50px;">
              <div class="form-group">
                <form  action="" method="post" class="form-horizontal row-border" parsley-validate novalidate files="true" enctype="multipart/form-data" accept-charset="UTF-8">
                  {{csrf_field()}}
                 
                  <label class="col-sm-4 control-label">Cantidad Artículo: <strog class="theme_color">*</strog></label>
                  <div class="col-sm-6">
                  <input name="idDetalleSolicitud" hidden value=""  />
                   <input onkeypress="return soloNumeros(event);" required  type="text" class="form-control"  autofocus name="cantidad" maxlength="12" placeholder="Ingrese la cantidad a Asignar">
                 
                 </div>
               </div><!--/form-group-->
             </div><!--/porlets-content--> 
         
         </div><!--/block-web--> 
       </div>
     </section>
   </div>
   <div class="modal-footer" style="margin-top: -10px;">
    <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
       <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-primary">Aceptar</button>
     </form>
   </div>
 </div>
</div><!--/modal-content--> 
</div><!--/modal-dialog--> 
</div><!--/modal-fade--> 



