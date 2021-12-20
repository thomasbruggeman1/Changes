@extends("master")


@section("main")
<img src="media/Acerta.png" alt="Logo van Acerta." >
<div class="container">
        <div class="form">
        <h2>Thanks</h2>
        <p>You have submitted the forum</p>
        <ul>
        <li><span>Budgetcode:</span> {{ $roadmap-> Budgetcode}}</li>
        <li><span>Domein:</span> {{ $roadmap-> Domein}}</li>
        <li><span>Epicnr:</span> {{ $roadmap-> Epicnr}}</li>
        <li><span>Projectname:</span> {{ $roadmap-> Projectname}}</li>
        <li><span>Budget_owner_business:</span> {{ $roadmap-> Budget_owner_business}}</li>
        <li><span>Budget_owner_ict:</span> {{ $roadmap-> Budget_owner_ict}}</li>
        <li><span>Baseline_budget:</span> {{ $roadmap-> Baseline_budget}}</li>
        <li><span>Baseline_facturen:</span> {{ $roadmap-> Baseline_facturen}}</li>
        <li><span>Start:</span> {{ $roadmap-> Start}}</li>
        <li><span>Finish:</span> {{ $roadmap-> Finish}}</li>
        <li><span>Comment:</span> {{ $roadmap-> Comment}}</li>
        <li><span>Date_added:</span> {{ $roadmap-> Date_added}}</li>
    </ul>
    <a href="{{ route('home') }}">Fill in another form.</a>
        </div>
        <div class="drops">
                <div class="drop drop-1"></div>
                <div class="drop drop-2"></div>
                <div class="drop drop-3"></div>
                <div class="drop drop-4"></div>
                <div class="drop drop-5"></div>
                <div class="drop drop-6"></div>
        </div>


@endsection("main")
