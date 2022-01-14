<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style type="text/css">
        body, html{
            height: 100%;
            padding-top: 60px;
            background-image: linear-gradient(to bottom right, #8CE68C, #87CDF6);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .btn-grad {background-image: linear-gradient(to right, #8CE68C, #87CDF6)}
        .btn-grad {
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            margin-top: 25px;            
        }
        .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }
         
        .container{
            background-color: white;
            width: 500px;
            height: 380px;
            padding: 20px;
        }
        .title{
            margin-top: 10px;
            margin-bottom: 30px;
        }
        .copyright{
            margin-top: 30px;
        }
        .row{
            margin-bottom: 15px;
        }
        

    </style>
    <title>Test Registration Page</title>

  </head>
  <body>

    <div class="container rounded">
        <h3 align="center" class="title">Update Form</h3>
        <form action="<?= base_url('page') ?>" method="post">
            <div id="bodyform">
                
            </div>
          <button type="submit" class="btn btn-block btn-grad"><b>Update</b></button>
        </form>
        <div class="text-center copyright">
            <small>Tes Program For Rumahweb Teknis Tes</small>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" ></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $.ajax({
            url: "https://reqres.in/api/users?per_page=1",
            dataType: "json",
            success: function(result) {
              $.each(result.data, function(index, value) { 
                var id = value.id;
                var name = value.first_name + " " + value.last_name;
                var email = value.email;
                $("#bodyform").append(`
                    <div class="row">
                        <div class="col-3">
                            <label>Email</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="email" value="${email}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label>Password</label>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label>Birthdate</label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" name="birthdate">
                        </div>
                    </div>
                  `);
              });
            }
          })

        })
    </script>
  </body>
</html>