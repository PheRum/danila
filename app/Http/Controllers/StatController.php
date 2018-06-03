<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use App\Models\User;
use DB;

class StatController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function monthStat()
    {
        $data = User::with('city')
                    ->select(DB::raw('city_id, COUNT(id) as user_count'))
                    ->where('created_at', '>=', now()->startOfMonth())
                    ->groupBy('city_id')
                    ->having('user_count', '>', 0)
                    ->get();

        return view('stat.month', compact('data'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function uniqueVisit()
    {
        $data = Stat::select(DB::raw('visit_date, COUNT(user_id) as user_count'))
                    ->distinct()
                    ->where('visit_date', '>=', now()->subDay(7))
                    ->groupBy('visit_date')
                    ->get();

        return view('stat.unique_visit', compact('data'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function portalVisit()
    {
        $data = Stat::with('user')
                    ->select([
                        'user_id',
                        DB::raw('GROUP_CONCAT(visit_date ORDER BY visit_date ASC) as date'),
                    ])
                    ->where('visit_date', '>=', now()->subDay(7))
                    ->groupBy('user_id')
                    ->orderBy('user_id', 'desc')
                    ->limit(20)
                    ->get()
                    ->toArray();

        return view('stat.portal_visit', compact('data'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function userBirthday()
    {
        $data = User::select([
            'id',
            'first_name',
            'last_name',
            'birthday',
            DB::raw("DATE_FORMAT(birthday, '%m-%d') as birthday_format"),
        ])->whereBetween(DB::raw("DATE_FORMAT(birthday, '%m-%d')"), [
            now()->format('m-d'),
            now()->addDay(7)->format('m-d'),
        ])->orderBy('birthday_format')->paginate();

        return view('stat.user_birthday', compact('data'));
    }
}
