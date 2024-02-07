<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin: 44px">
<h1>Ajouter Cantine</h1>

<form>
    <div class="form-group">
        <label for="text">Name</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
            </div>
            <input id="text" name="text" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="textarea">Description</label>
        <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="text1">Price</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-money"></i>
                </div>
            </div>
            <input id="text1" name="text1" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="text2">Date</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-calendar-o"></i>
                </div>
            </div>
            <input id="text2" name="text2" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="text3">Image</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-file-image-o"></i>
                </div>
            </div>
            <input id="text3" name="text3" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        <button href={{ route('cantine') }}" class="btn btn-danger">Back</button>

    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
