<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="{{ asset('/assets/css/reset.css') }}"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <title>Acerta</title>
</head>
<body>
    <!-- <div class="svg-container">
    <svg viewbox="0 0 800 400" class="svg">
      <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
      </path>
    </svg>
    </div>
    <header>
        <div><figure>
        <img src="{{ asset('/media/Acerta.png') }}" alt="Acerta"
                 title="Acerta"/>
        </figure></div>
    </header> -->

    <main>
        @yield("main")
    </main>

    <!-- <footer>
        <hr/>
       © created by AcertaTeam
    </footer> -->
</body>
</html>