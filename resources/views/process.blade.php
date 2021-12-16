@extends("master")


@section("main")
<img src="media/Acerta.png" alt="Logo van Acerta." >
<div class="container">
        <div class="form">
        <h2>Thanks</h2>
        <p>You have submitted the forum</p>

        <ul>
        <li>Budgetcode: {{ $roadmap-> Budgetcode}}</li>
        <li>Domein: {{ $roadmap-> Domein}}</li>
        <li>Epicnr: {{ $roadmap-> Epicnr}}</li>
        <li>Projectname: {{ $roadmap-> Projectname}}</li>
        <li>Budget_owner_business: {{ $roadmap-> Budget_owner_business}}</li>
        <li>Budget_owner_ict: {{ $roadmap-> Budget_owner_ict}}</li>
        <li>Baseline_budget: {{ $roadmap-> Baseline_budget}}</li>
        <li>Baseline_facturen: {{ $roadmap-> Baseline_facturen}}</li>
        <li>Start: {{ $roadmap-> Start}}</li>
        <li>Finish: {{ $roadmap-> Finish}}</li>
        <li>Comment: {{ $roadmap-> Comment}}</li>
        <li>Date_added: {{ $roadmap-> Date_added}}</li>
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
