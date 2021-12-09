<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roadmap;
class RoadmapController extends Controller
{
    function index(){
        $records = \App\Models\Roadmap::all();
        return view("index", ["records" => $records]);

    }


    function process(Request $request){
       //$result = $this -> validate($request);
       
        // $budgetcode = $request -> input("Budgetcode");
        // $domein = $request -> input("Domein");
        // $epicnr = $request -> input("Epicnr");
        // $projectname = $request -> input("Projectname");
        // $budgetOwnerBusiness = $request -> input("Budget_owner_business");
        // $budgetOwnerIct = $request -> input("Budget_owner_ict");
        // $baselineBudget = $request -> input("Baseline_budget");
        // $baselineFacturen = $request -> input("Baseline_facturen");
        // $start = $request -> input("Start");
        // $finish = $request -> input("Finish");

        // $roadmap = new \App\Models\Roadmap();


        // $roadmap -> Budgetcode = $budgetcode;
        // $roadmap -> Domein = $domein;
        // $roadmap -> Epicnr = $epicnr;
        // $roadmap -> Projectname = $projectname;
        // $roadmap -> Budget_owner_business = $budgetOwnerBusiness;
        // $roadmap -> Budget_owner_ict = $budgetOwnerIct;
        // $roadmap -> Baseline_budget = $baselineBudget;
        // $roadmap -> Baseline_facturen = $baselineFacturen;
        // $roadmap -> Start = $start;
        // $roadmap -> Finish = $finish;

        // $roadmap ->save();

        // return view("process",["roadmap" => $roadmap]);
        $values = $this -> validateProject($request);
        $roadmap = new \App\Models\Roadmap();

        $roadmap -> Budgetcode = $values["Budgetcode"];
        $roadmap -> Domein = $values["Domein"];
        $roadmap -> Epicnr = $values["Epicnr"];
        $roadmap -> Projectname = $values["Projectname"];
        $roadmap -> Budget_owner_business = $values["Budget_owner_business"];
        $roadmap -> Budget_owner_ict = $values["Budget_owner_ict"];
        $roadmap -> Baseline_budget = $values["Baseline_budget"];
        $roadmap -> Baseline_facturen = $values["Baseline_facturen"];
        $roadmap -> Start = $values["Start"];
        $roadmap -> Finish = $values["Finish"];
        $roadmap -> Comment = $values["Comment"];
        $roadmap -> Date_added = date('Y-m-d');

        $roadmap -> save();



        return view("process", ["roadmap" => $roadmap]);


    }
    function validateProject(Request $request){
        $rules = [
        "Budgetcode" => "string|required|max:50",
        "Domein" => "string|required|max:50",
        "Epicnr" => "string|required|max:50",
        "Projectname" => "string|required|max:50",
        "Budget_owner_business" => "string|required|max:50",
        "Budget_owner_ict" => "string|required|max:50",
        "Baseline_budget" => "integer|required|gt:0",
        "Baseline_facturen" => "string|required|gt:0",
        "Start" => "date|required|after_or_equal:today",
        "Finish" => "date|required|after_or_equal:Start",
        "Comment" => "string|max:500"

    ];
    return $request -> validate($rules);
    
    }
    
}
