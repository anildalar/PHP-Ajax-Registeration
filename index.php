<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.css" integrity="sha512-ZCCAQejiYJEz2I2a9uYA3OrEMr8ZN4BGTwlVYNxsYopLS/WH2bey53SObOKRF4ciHo5gqxgVP/muDloHvWZXHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <br>
    <br>
    <br>
    <form class="w-50 offset-3 myform">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="agree" value="yes" class="form-check-input" id="agree">
            <label class="form-check-label" for="agree">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js" integrity="sha512-ySDkgzoUz5V9hQAlAg0uMRJXZPfZjE8QiW0fFMW7Jm15pBfNn3kbGsOis5lPxswtpxyY3wF5hFKHi+R/XitalA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    /**
     *  { P:V } = JS object
     */

    //Check if the page is loaded successfully
    //1. ()();
   /*  Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
    ) */
    (function($) {
        
        //alert('Page Loaded successfully');
        //$.ajax({name:value, name:value, ... })

        //1. Select the form
        //$(selector).action();
        $('form.myform').submit(function(e){ //e = event
            e.preventDefault();
            
            //alert('Form Submited');
            //Page refresh ko rokna hai
           

            //Now  collect the form Data
             //$(selector).action();
            var email = $('input#email').val(); //GET
            let password = $('input#password').val(); //GET
            const agree = $('input#agree').val(); //GET

            console.log(email);
            console.log(password);
            console.log(agree);
            var d = {
                    action:'registration',
                    e:email,
                    p:password,
                    a:agree
                }

            $.ajax({
                url: "http://localhost/advancedregistrationwithajax/api.php",
                type: "GET",
                data:d ,
                beforeSend: function(xhr) {

                },
                success: function(result, status, xhr) {
                    //Data Recieve
                    if(result == '200'){
                        alert('User Registered Successfully');
                    }
                    console.log('The result is'+result);
                },
                error: function(xhr, status, error) {

                },
                complete: function(xhr, statusx) {

                }
            });
        });
    })(jQuery);
    </script>
</body>

</html>