@extends("master")


@section("main")
    <img src="media/Acerta.png" alt="Logo van Acerta." >

    <div class="container">

    <form class="form-style-4" method="post" action="{{route('process')}}">
        @csrf
        @if ($errors -> any())
            <ul id="errors">
                    @foreach ($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
            </ul>
        @endif

        <h2>Fill in the form</h2>
        <label for="Budgetcode">
        Budgetcode:
        </label><input type="text" id="Budgetcode" name="Budgetcode">

        <label for="Domein">
        Domein:
        </label><select name="Domein" id="Domein">
            <option value="Starters en Zelfstandigen">Starters en Zelfstandigen</option>
            <option value="Klantenbenadering">Klantenbenadering</option>
            <option value="Consult">Consult</option>
            <option value="Payroll">Payroll</option>
            <option value="Finance">Finance</option>
            <option value="ICT">ICT</option>
            <option value="T&O">T&O</option>
        </select>

        <label for="Epicnr">
        Epicnr:
        </label><input type="text" id="Epicnr" name="Epicnr">

        <label for="Projectname">
        Projectname:
        </label><input type="text" id="Projectname" name="Projectname">

        <label for="Budget_owner_business">
        Budget_owner_business:
        </label><input type="text" id="Budget_owner_business" name="Budget_owner_business">

        <label for="Budget_owner_ict">
        Budget_owner_ict:      
        </label><input type="text" id="Budget_owner_ict" name="Budget_owner_ict">

        <label for="Baseline_budget">
        Baseline_budget:
        </label><input type="number" id="Baseline_budget" name="Baseline_budget">

        <label for="Baseline_facturen">
        Baseline_facturen:
        </label><input type="number" id="Baseline_facturen" name="Baseline_facturen">

    
        
        <div class="date">
        <label for="Start">Start:</label>
        <input type="date" id="Start" name="Start">

        <label for="Finish">Finish:</label>
        <input type="date" id="Finish" name="Finish">

        </div>

        <label for="Comment">Comment:</label>
        <!-- <input type="text" id="Comment" name="Comment"> -->
        <textarea id="Comment" name="Comment"></textarea>
        <input type="submit" value="Add">

    </form>
    <div class="drops">
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
        <div class="drop drop-6"></div>
    </div>
    </div>

@endsection("main")
