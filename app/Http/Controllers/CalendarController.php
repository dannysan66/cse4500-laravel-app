<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class CalendarController extends Controller
{
   public function index()
      {
         $events = [];
         $data = Event::all();
         if($data->count()){
         foreach ($data as $key => $value) {
         $events[] = Calendar::event(
         $value->title,
         true,
         new \DateTime($value->start_date),
         new \DateTime($value->end_date.' +1 day')
      );
   }
}
$calendar = Calendar::addEvents($events);
   return view('mycalender', compact('calendar'));
   }
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
           'title' => 'required',
           'start_at' => 'required',
           'end_at' => 'required',
      ]);

      $events = Event::create([
           'title' => $request->title,
           'start_at' => $request->date('start_at'),
           'end_at' => $request->date('end_at'),
      ]);

      return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}