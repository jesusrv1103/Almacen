<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Calendar;
use DB;
use App\Event;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }


    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                    'color' => '#2E8935',
                    'url' => 'adquisinet',
                    ]
                    );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalender', compact('calendar'));
    }

    public function create()
    {

        return view('event.create');
    }

    public function store(Request $request)
    {
        $events= new Event();
        $events->title=$request->get('title');
        $fechaIAno=substr($request->get('start_date'),6,7);
        $fechaIMes=substr($request->get('start_date'),3,2);
        $fechaIDia=substr($request->get('start_date'),0,2);

        $fechaInicio=$fechaIAno."-".$fechaIMes."-".$fechaIDia;
        

        $fechaIAno=substr($request->get('end_date'),6,7);
        $fechaIMes=substr($request->get('end_date'),3,2);
        $fechaIDia=substr($request->get('end_date'),0,2);
        $fechaFin=$fechaIAno."-".$fechaIMes."-".$fechaIDia;

        $events->start_date=$fechaInicio;
        $events->end_date=$fechaFin;
        
        $events->save();
        $events= DB::table('events') ->get();
        return view('event.index',['events' => $events])->with('info','Calendario Guardado con éxito');
    }

    public function update(Request $request, $id)
    {
        $events=Event::findOrFail($id);
        $events->title=$request->get('title');

        $fechaIDia=substr($request->get('start_date'),0,2);
        $fechaIMes=substr($request->get('start_date'),3,2);
        $fechaIAno=substr($request->get('start_date'),6,7);
        $fechaInicio=$fechaIAno."-".$fechaIMes."-".$fechaIDia;
        $fechaIDia=substr($request->get('end_date'),0,2);
        $fechaIMes=substr($request->get('end_date'),3,2);
        $fechaIAno=substr($request->get('end_date'),6,7);
        $fechaFin=$fechaIAno."-".$fechaIMes."-".$fechaIDia;

        $events->start_date=$fechaInicio;
        $events->end_date=$fechaFin;
        

        $events->update();
        $events= DB::table('events') ->get();
        return view('event.index',['events' => $events])->with('info','Calendario Editado con éxito');
    }


    public function index1()
    {
       $events= DB::table('events') ->get();
       return view('event.index',['events' => $events]);
   }

   public function edit($id)
   {
    $events=Event::findOrFail($id);
    $fechaInicio=$events->end_date;

    $fechaIAno=substr($fechaInicio,0,4);

    $fechaIMes=substr($fechaInicio,5,-3);
 
    $fechaIDia=substr($fechaInicio,8,10);
   
    $fechaII=$fechaIDia."/".$fechaIMes."/".$fechaIAno;
 
    return view("event.edit",["events"=>$events,"fechaII"=>$fechaII]);
}

public function destroy($id)
{
    $events=Event::findOrFail($id);
    $events->delete();
    $events= DB::table('events') ->get();
    return view('event.index',['events' => $events])->with('info','Proveedor eliminado con éxito');
}



}
