
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>search</title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">


  <!-- Custom styles for this template -->
 <link href="css/resume.min.css" rel="stylesheet">

</head>

<body>


<div class="container">

  <div class="row">
    <div class="col-lg-8 mt-5">
      <h4 class="text-center">Plz select any framework</h4>
      <form>
        <div class="form-content">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text " id="addon1">Program</span>

            </div>
            

           <select class="form-control " aria-describedby="basic-addon1" data-toggle="tooltip" title="Plz select yur fav language" onchange="mylang(this.value)" name="language">
            <option>Select Here</option>
            <option>PHP</option>
            <option>JAVASCRIPT</option>
            <option>PYTHON</option>
           </select>

</div>

           <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text " id="addon2">Framework</span>

            </div>
            

         <select class="form-control " aria-describedby="basic-addon1" id="frameworklist1" name="framework">
            <option>Select Here</option>
           </select>


         </div>





        </div>
        


      </form>

  </div>
</div>
</div>





  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>




<script type="text/javascript">



function mylang(data){
  const ajaxreq = new XMLHttpRequest();
  ajaxreq.open("GET", "http://localhost/dropajax/getdata.php?selectvalue="+data, true);
  ajaxreq.send();

ajaxreq.onreadystatechange = function() {
    if (ajaxreq.readyState == 4 && ajaxreq.status == 200) {
     document.getElementById("frameworklist1").innerHTML =  ajaxreq.responseText;
    }
  };

}






  
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});




</script>






</body>

</html>