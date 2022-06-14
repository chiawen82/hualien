<?php

namespace App\Http\Controllers;
use App\Models\TravelItem;
use Exception;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;

class TravelItemController extends Controller
{
    public function create(Request $request){
        try{
            $request->validate([
                'name' => ['required', 'max:225', 'string'],
                'estimated_minute' => ['required', 'between:1,240'],
                'category_id' => ['required'],
            ]);

            $addResult = TravelItem::create([
                'travel_item_id' => Uuid::uuid4(),
                'name' => $request->name,
                'estimated_minute' => $request->estimated_minute,
                'category_id' => $request->category_id,
            ]);

            //API Response 我是走自定義的狀態碼，適合嗎？或是應該用http的response code?
            $response = [];
            //這個status code因為放config，是一個字串，如果寫錯難以發現，是否該定義成class的static變數比較適合
            $response["status"] = config('responseDef.success');
            $response["result"] = $addResult;
            return $response;
        //如果我想把這樣的處理設為Default，建議怎麼實作？
        }catch(ValidationException $e){
            $response = [];
            $response["status"] = config('responseDef.input_exception');
            $response["result"] = $e->getMessage();
            return $response;
        }
        catch(QueryException $e){
            $response = [];
            $response["status"] = config('responseDef.db_exception');
            $response["result"] = $e->getMessage();
            return $response;
        }
        catch(Exception $e){
            $response = [];
            $response["status"] = config('responseDef.unexpeted_error');
            $response["result"] = $e->getMessage();
            return $response;
        }
    }
    public function read(Request $request){
        $response = [];
        $response["status"] = config('responseDef.success');
        $response["result"] = TravelItem::first();
        return $response;
    }

}
