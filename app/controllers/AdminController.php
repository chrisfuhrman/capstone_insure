<?php

use Carbon\Carbon;

class AdminController extends BaseController
{
     public function calcRev($from, $to) 
     {
          // grab policy object by date
          $policies = DB::table('policy_apps')
               ->whereBetween('date_approved', [$from, $to])
                    ->get();
          // Calc rev
          $revenue = 0;
          foreach ($policies as $policy) {

               $revenue+=$policy->policy_rev;
          }

          return $revenue;
     }       

	public function showCompanyDashboard() {
         
          $revenueJan = $this->calcRev('2014-01-01', '2014-01-31');
          $revenueFeb = $this->calcRev('2014-02-01', '2014-02-31');
          $revenueMar = $this->calcRev('2014-03-01', '2014-03-31');
          $revenueApr = $this->calcRev('2014-04-01', '2014-04-31');
          $revenueMay = $this->calcRev('2014-05-01', '2014-05-31');
          $revenueJun = $this->calcRev('2014-06-01', '2014-06-31');
          $revenueJul = $this->calcRev('2014-07-01', '2014-07-31');
          $revenueAug = $this->calcRev('2014-08-01', '2014-08-31');
          $revenueSep = $this->calcRev('2014-09-01', '2014-09-31');
          $revenueOct = $this->calcRev('2014-10-01', '2014-10-31');
          $revenueNov = $this->calcRev('2014-11-01', '2014-11-31');
          $revenueDec = $this->calcRev('2014-12-01', '2014-12-31');

          $avgPrem = DB::table('policy_apps')->avg('yearly_premium');

          // apps submitted today
          $start = (new Carbon('now'))->hour(0)->minute(0)->second(0);
          $end = (new Carbon('now'))->hour(23)->minute(59)->second(59);
          $appsToday = DB::table('policy_apps')->whereBetween('created_at', [$start , $end])->count();

          $appsToReview = Policy::where('policy_status', '=', 'submitted')->count();

          // grab logged in admin
          $admin = Auth::user();
          
          // calc how many quotes were given in month
          $monthStart = Carbon::now()->startOfMonth();    
          $current = (new Carbon('now'));
          $monthlyQuotesProduced = DB::table('rfq')->whereBetween('created_at', 
               [$monthStart, $current])->count();


          $draftPolicies = Policy::with('user')->where('policy_status', '=', 'draft')->get();

          $pendingPolicies = Policy::with('user')->where('policy_status', '=', 'pending')->get();

          $data = 

          [
          'revenueJan' => $revenueJan,
          'revenueFeb' => $revenueFeb,
          'revenueMar' => $revenueMar,
          'revenueApr' => $revenueApr,
          'revenueMay' => $revenueMay,
          'revenueJun' => $revenueJun,
          'revenueJul' => $revenueJul,
          'revenueAug' => $revenueAug,
          'revenueSep' => $revenueSep,
          'revenueOct' => $revenueOct,
          'revenueNov' => $revenueNov,
          'revenueDec' => $revenueDec,

          'avgPrem' => $avgPrem,

          'appsToday' => $appsToday,
          'appsToReview' => $appsToReview,

          'admin' => $admin,

          'monthlyQuotesProduced' => $monthlyQuotesProduced,

          'draftPolicies' => $draftPolicies,
          'pendingPolicies' => $pendingPolicies
          ];

		return View::make('admin_panel.dashboard-layout')
               ->with($data);

	}

}