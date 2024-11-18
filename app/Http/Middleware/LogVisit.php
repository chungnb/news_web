<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use App\Models\VisitAdminLogs;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');
        $lastVisit = session('last_visit');
    
        // Lưu log truy cập vào bảng 'visit'
        if ((!$lastVisit || Carbon::parse($lastVisit)->diffInMinutes(now()) < 10) &&  !strpos($request->fullUrl(), 'cms')) {
            $visit = new Visit();
            $visit->ip_address = $ipAddress;
            $visit->user_agent = $userAgent;
            $visit->url = $request->fullUrl();
            $visit->referrer = $request->header('Referer');
            $visit->save();
    
            session(['last_visit' => now()]);
        }
    
        if (strpos($request->fullUrl(), 'cms')) {
            $action = '';

            if ($request->isMethod('post')) {
                $action = 'INSERT';
            } elseif ($request->isMethod('put')) {
                $action = 'UPDATE';
            } elseif ($request->isMethod('delete')) {
                $action = 'DELETE';
            }
            // elseif ($request->isMethod('get')) {
            //     $action = 'GET';
            // }
            if (!$request->isMethod('get')) {
                $visitAdminLog = new VisitAdminLogs();
                $visitAdminLog->user_id = auth()->user()->id ?? 'guest';
                $visitAdminLog->user_name = auth()->user()->name ?? 'guest';
                $visitAdminLog->url = $request->fullUrl();
                $visitAdminLog->action = $action;
                $visitAdminLog->save();
            }
        }
    
        return $next($request);
    }
}
