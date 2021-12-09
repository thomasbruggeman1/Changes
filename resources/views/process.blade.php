@extends("master")


@section("main")
    <div>
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
    <a href="{{ route('home') }}">fill in another form.</a>
    </div>


@endsection("main")
