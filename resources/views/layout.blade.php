<!DOCTYPE html>
<html>
    <head>
            <title>nPODesigner</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <header class="header">
                <div class="container">
                        <div class="header-left">
                                <a href="/" class="header-item">
                                        <h1 class="title"><strong>nPODesigner</strong></h1>
                                </a>
                        </div>

                        @yield('import_section')

                </div>
        </header>
        <section class="section">

                        <div class="columns">

                                @yield('content')

                        </div>

        </section>
    </body>
</html>
