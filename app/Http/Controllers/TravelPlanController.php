<?php

namespace App\Http\Controllers;

use App\Models\TravelPlan;
use App\Models\PlanItem;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TravelPlanController extends Controller
{
    public function create(Request $request)
    {
        //在參數傳入方面驗證，阿普會怎麼寫？
        $addTravelPlan = new TravelPlan();
        $addTravelPlan['plan_id'] =Uuid::uuid4();
        $addTravelPlan['day'] = $request->day;
        $addTravelPlan['author_id'] = $request->author_id;
        $addTravelPlan->save();
        //這個寫法如果input來的參數有問題，就會壞掉
        foreach($request->travelItems as $travelItem){
            $addTravelPlan->planItems()->create([
                'plan_item_id' => Uuid::uuid4(),
                'type' => $request->mark,
                'order' => $travelItem['order'],
                'type' => $travelItem['type'],
                'day' => $travelItem['day'],
            ]);
        }

        return $request->travelItem;
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
