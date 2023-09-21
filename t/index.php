<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<script>
    function openModal1(id) {
        var form = document.getElementById("myForm2");
form.action = "http://localhost/t/d1.php?id="+id;
console.log( form.action = "http://localhost/t/d1.php?id="+id);

  var modal = document.getElementById('id02');
  modal.style.display = 'block';
}   
 
</script>
<script>


    function openModal2(id,email,name) {

      console.log(email);
document.getElementById("emailInput").value=name;
document.getElementById("nameInput").value=email;

        var form = document.getElementById("myForm1");
form.action = "http://localhost/t/u1.php?id="+id;
console.log( form.action = "http://localhost/t/u1.php?id="+id);

  var modal = document.getElementById('id03');
  modal.style.display = 'block';
}   


        $(document).ready(function(){

            var baseurl = "http://localhost/t";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", baseurl + "/ht.php", true);
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    var persons = JSON.parse(xmlhttp.responseText); // Parse the JSON response
           
                 
                    $("#example").DataTable(
                        {
                            dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
        ],
                        data: persons, // Use the parsed JSON data
                        columns:[
                            { data: "Email" },
                            { data: "Name" },
                            {
                        data: null,
                        render: function (data, type, row) {
                          var id = row.id;
        var email = row.Email;
        var name = row.Name;
        return '<button onclick="openModal2(\'' + id + "', '" + email + "', '" + name + '\')">Update</button>';
                        }
                    },
                    {
                        data: null,
                        render: function (data, type, row) {
                            var id = row.id;
                            return '<button onclick="openModal1(\'' + id + '\')">Delete</button> ';
                        }
                    },                           
                    
                        ]
                    });
                }
            };
            xmlhttp.send();
        });
    </script>
</head>
<body>

    <!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<div class="w4-container"> <br>
    <div id="id03" class="modal">
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content" id="myForm1" action="" method="post">
          <div class="container">
            <h1>Upadte Task?</h1>
          
            <div class="clearfix">
                Email <input type="email" id="emailInput" name="Email" > <br> <br>
                Name <Input type="text" id="nameInput"  name="Name"><br> <br>

            </div>
          </div>
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" onclick="document.getElementById('id03').style.display='none'" class="updatebtn">update</button> <br> <br>
          </div>
        </form>
        
      </div>




      <div class="w3-container"> <br>
        <div id="id02" class="modal">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            <form class="modal-content" id="myForm2" action="" method="post">
              <div class="container">
                <h1>Delete Task?</h1>
                <p>Are you sure you want to delete your Task?</p>
              
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" onclick="document.getElementById('id02').style.display='none'" class="deletebtn">Delete</button> <br> <br>
                </div>
              </div>
            </form>
          </div>
          
      
      
  <button onclick="document.getElementById('id01').style.display='block'" >Add Task</button> <br><br>  

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400x">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="http://localhost/t/c.php" method="post">
        <div class="w3-section">
            <p style="text-align: center;font-size: medium;">Task Details</p>
            <br><br> Email:<input type="email" name="Email" required   >  <br> <br>
            Name : <input type="text" name="Name" required> <br><br> <button type="submit">   Add Task  </button> <br><br>
        </div>
      </form>
<br><br>
    </div>
  </div>
</div>
            

    <table id="example" class="table" style="width:100" align="left">
        <thead>
            <tr>
                <th> <hr> Email</th>
                <th> <hr> Name</th>
                <th colspan="2"> <hr> Action</th>
                <th></th>
            </tr>
        </thead>
    </table>
</form>
</body>
</html>
