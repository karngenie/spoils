<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Mon joli site</title>
	    {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css') }}
	    {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css') }}
	    {{ HTML::style('css/styles.css') }}
	    <!--[if lt IE 9]>
	      {{ HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
	      {{ HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
	    <![endif]-->		
		<title>The Spoils</title>
	</head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>