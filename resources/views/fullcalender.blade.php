<!doctype html>
<h1>

    <div>



        <html lang="es">
    </h1>

    <head>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    </head>
    <div class="container">
        <b>

            <div class="col-md-12">
              <div class="btn-group pull-center">
                <h2><i><ol>Calendario de Actividades de ADQUISINET
                </i></ol></h2>

                <body>
                </b>

                <div class="container">
                    <b>

                        <div class="col-md-12">
                          <div class="btn-group pull-center">


                            @can('events.creat')
                              <div class="btn-group" style="margin-right: 10px;">
                                <a class="btn btn-default btn-success tooltips" href="events/create" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Registrar nueva Direccion"> <i class="fa fa-plus"></i> Registrar </a>
                            </div>
                            @endcan
                            
                            <div class="btn-group" style="margin-right: 10px;">
                                <a class="btn btn-default btn-warning tooltips" href="event2" style="margin-right: 10px;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cancelar"> <i class="fa fa-refresh"></i> Salir </a>

                            </div>
                        </div>



                    </b>
                    <hr>

                    <div class="panel panel-primary">

                        <div class="panel-heading">



                           <i class="eye icon"></i> 
                       </div>

                       <div class="panel-body" >

                        {!! $calendar->calendar() !!}

                        {!! $calendar->script() !!}

                        <hr>

                    </div>

                </div>

            </div>

        </body>

        </html>