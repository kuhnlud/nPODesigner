<!DOCTYPE html>
<html>
    <head>
        <title>nPODesigner</title>

    </head>
    <body>
        <div class="container">
            <div class="content">
                    <form class="" action="import" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="csvfile" >
                            <button type="submit" name="submit">Import</button>
                    </form>
            </div>
        </div>
    </body>
</html>
