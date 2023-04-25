<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Request</title>
</head>
<body>

<?php
    include("../include/header.php");
?>
    <div class="container-fluid">
          <div class="col-md-12">
                <div class="row">
                      <div class="col-md-2"  style="margin-left:-30px">
                          <?php
                              include("sidenav.php");
                          ?>
                      </div>
                      <div class="col-md-10">
                            <h5 class="text-center my">Job Request</h5>

                              <div id="show">

                              </div>
                      </div>
                </div>
          </div>
    </div>


<script type="text/javascript">
    $(document).ready(function(){
        //checking if jquery library works
        //alert("Done");

        show();

        function show() {

            $.ajax({
                url:"ajax_show_job_request.php",
                method: "POST",
                success:function(data) {
                    $("#show").html(data);
                }
            })

        }
 /****************************************************************************************************************************************************/
        $(document).on('click', '.approve', function () {
            //alert("Done")
             var id = $(this).attr("id");

             //alert(id);

                  $.ajax({
                 url: "ajax_approve.php",
                 method: "POST",
                data:{id:id},
                success: function () {
                    show();
                }

            })
        });

  /****************************************************************************************************************************************************/
        $(document).on('click', '.reject', function () {
            //alert("Done")
            var id = $(this).attr("id");

            //alert(id);

            $.ajax({
                url: "ajax_reject.php",
                method: "POST",
                data:{id:id},
                success: function () {
                    show();
                }

            })
        });

   /****************************************************************************************************************************************************/
    });
</script>

</body>
</html>
