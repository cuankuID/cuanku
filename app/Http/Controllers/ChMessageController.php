<?php

namespace App\Http\Controllers;

use App\Models\ChMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ChMessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $user = auth()->user();
        return DB::select('
        SELECT t1.*
        FROM ch_messages AS t1
        INNER JOIN
        (
            SELECT
                LEAST(from_id, to_id) AS from_id,
                GREATEST(from_id, to_id) AS to_id,
                MAX(id) AS max_id
            FROM ch_messages
            GROUP BY
                LEAST(from_id, to_id),
                GREATEST(from_id, to_id)
        ) AS t2
            ON LEAST(t1.from_id, t1.to_id) = t2.from_id AND
               GREATEST(t1.from_id, t1.to_id) = t2.to_id AND
               t1.id = t2.max_id
            WHERE t1.from_id = ? OR t1.to_id = ?;
        ', [$user->id, $user->id]);
        // return ChMessage::from('FROM ch_messages AS t1')->select(DB::raw('
        // SELECT t1.*
        // INNER JOIN
        // (
        //     SELECT
        //         LEAST(from_id, to_id) AS from_id,
        //         GREATEST(from_id, to_id) AS to_id,
        //         MAX(id) AS max_id
        //     FROM ch_messages
        //     GROUP BY
        //         LEAST(from_id, to_id),
        //         GREATEST(from_id, to_id)
        // ) AS t2
        //     ON LEAST(t1.from_id, t1.to_id) = t2.from_id AND
        //        GREATEST(t1.from_id, t1.to_id) = t2.to_id AND
        //        t1.id = t2.max_id        
        // '))->where("t1.from_id", $user->id)->orWhere("t1.to_id", $user->id)->get();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'body' => 'required',
            'to_id' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        ChMessage::Create([
            'from_id' => $user->id,
            'to_id' => $request->to_id,
            'body' => $request->body,
        ]);

        return response()->json(['message' => 'Chat Send Successfully']);
    }

    public function show($id){
        $user = auth()->user();
        return ChMessage::where(function($query) use ($user, $id) {
            $query->where('from_id', "=" , $user->id)->where('to_id', "=" , $id);
        })->orWhere(function($query) use ($user, $id) {
            $query->where('to_id', "=" , $user->id)->where('from_id', "=" , $id);
        })->get();
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        ChMessage::Find($id)->Update([
            'body' => $request->body,
        ]);

        return response()->json(['message' => 'Chat Update Successfully']);
    }

    public function destroy($id)
    {
        ChMessage::Find($id)->Delete();
        return response()->json(['message' => 'Chat Deleted Successfully']);
    }
}
