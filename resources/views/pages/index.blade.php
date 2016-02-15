<!DOCTYPE html>
<html>
    <head>
            <title>nPODesigner</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
            <!-- WITH TWITTER BOOTSTRAP-->
        <!-- <div class="container">
                <div class="page-header">
                    <h2>Import csv File</h2>
                </div>
                <div class="row">
                <div class="col-md-4 col-md-offset-3">
                        <form  action="import" method="post" enctype="multipart/form-data">
                                <div class="input-group" >
                                {{ csrf_field() }}
                                <input  id="csvfile" type="file" class="form-control" name="csvfile">
                                <span class="input-group-btn">
                                        <button class="btn btn-info" type="submit">Import</button>
                                </span>
                                </div>
                        </form>
                </div>
        </div> -->
        <header class="header">
                <div class="container">
                        <div class="header-left">
                                <a href="/" class="header-item">
                                        <h1 class="title"><strong>nPODesigner</strong></h1>
                                </a>
                        </div>
                        <div class="header-right">
                                <span class="header-item">
                                        <form class="control" action="import" method="post" enctype="multipart/form-data">
                                                <p class="control is-grouped">
                                                        {{ csrf_field() }}
                                                        <input class="input" type="file" name="csvfile" id="csvfile">
                                                        <button class="button is-info" type="submit" name="submit">Import</button>
                                                </p>
                                        </form>
                                </span>
                        </div>
                </div>
        </header>
        <div class="container">
                <div class="columns">
                        <!--  Website Content -->
                </div>
        </div>
    </body>
</html>
