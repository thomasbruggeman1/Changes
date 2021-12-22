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
        "Budgetcode" => "string|unique:roadmaps|required|max:50",
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
