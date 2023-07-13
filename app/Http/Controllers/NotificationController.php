<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function all()
    {
        $data = Notification::where('read', 0)->get();
        return response()->json($data);
    }

    public function read($id)
    {
        $data = Notification::where('id', $id)->first();
        $data = $data->update(['read' => 1]);

        return response()->json($data);
    }
}
