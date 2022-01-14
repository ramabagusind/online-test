<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <style type="text/css">
        body, html{
            height: 100%;
            padding-top: 20px;
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
            margin-bottom: 20px;            
        }
        .btn-grad:hover {
            background-position: right center; 
            color: #fff;
            text-decoration: none;
        }
         
        .container{
            background-color: white;
            width: 80%;
            height: 90%;
            padding: 20px;
        }
        .title{
            margin-top: 10px;
            margin-bottom: 20px;
        }
        thead{
            background-color: #8CE68C;
            color: white;
        }
        

    </style>
    <title>Test User Page</title>

  </head>
  <body>

    <div class="container rounded">
        <h3 class="title">List User Rumahweb</h3>
        <a href="<?php echo base_url().'regist'?>"><button class="btn btn-grad"><b>Register</b></button></a>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col-1">ID</th>
              <th scope="col-5">Email</th>
              <th scope="col-4">Name</th>
              <th scope="col-2">Option</th>
            </tr>
          </thead>
          <tbody id="bodytbl">
            
          </tbody>
        </table>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" ></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $.ajax({
            url: "https://reqres.in/api/users?per_page=6",
            dataType: "json",
            success: function(result) {
              $.each(result.data, function(index, value) { 
                var id = value.id;
                var name = value.first_name + " " + value.last_name;
                var email = value.email;
                $("#bodytbl").append(`
                  <tr>
                    <th scope="row">${id}</th>
                    <td>${email}</td>
                    <td>${name}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#optionModal">
                          Option
                        </button>
                      </div>
                    </td>
                  </tr>
                  `);
              });
            }
          })

        })
    </script>

    <div class="modal fade" id="optionModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">User Option</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="mx-auto" style="width: 200px;">
              <a href="<?php echo base_url().'page/updateform'?>"><button type="button" class="btn btn-warning">Update</button></a>
              <button type="button" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>