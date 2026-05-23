<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Session;

class ActivityController extends Controller
{
    public function index()
    {
        if (!Session::has('id_user')) {
            return redirect()->route('home.index');
        }

        $id_user = Session::get('id_user');
        $nama_user = Session::get('nama');

        $activities = [1 => [], 2 => [], 3 => [], 4 => []];
        $dbActivities = Activity::where('id_user', $id_user)->orderBy('id_activity', 'asc')->get();

        foreach ($dbActivities as $act) {
            $activities[$act->kuadran][] = $act;
        }

        return view('activity.tentang', compact('nama_user', 'activities'));
    }

    public function store(Request $request)
    {
        if (!Session::has('id_user')) {
            return redirect()->route('home.index');
        }

        $id_user = Session::get('id_user');
        $action = $request->input('action');

        if ($action == 'add') {
            for ($i = 1; $i <= 4; $i++) {
                $input_name = 'q' . $i;
                if ($request->filled($input_name)) {
                    $aktifitas = trim($request->input($input_name));
                    Activity::create([
                        'id_user' => $id_user,
                        'nama_aktifitas' => $aktifitas,
                        'kuadran' => $i
                    ]);
                }
            }
        } elseif ($action == 'delete' && $request->filled('id_activity')) {
            $id_activity = $request->input('id_activity');
            Activity::where('id_activity', $id_activity)->where('id_user', $id_user)->delete();
        } elseif ($action == 'edit' && $request->filled('id_activity') && $request->filled('nama_aktifitas')) {
            $id_activity = $request->input('id_activity');
            $nama_aktifitas = trim($request->input('nama_aktifitas'));
            if (!empty($nama_aktifitas)) {
                Activity::where('id_activity', $id_activity)
                    ->where('id_user', $id_user)
                    ->update(['nama_aktifitas' => $nama_aktifitas]);
            }
        }

        return redirect()->route('tentang.index');
    }
}
