<?php
include 'dbconnection.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $pname= $_POST['pname'];
    $sel = $_POST['selecteddoctor'];
    $msg = $_POST['healthcondition'];

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO health (pname,selecteddoctor,healthcondition) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss",$pname, $sel, $msg,);

    if ($stmt->execute()) {
        echo "<script>alert('Record inserted successfully')
		</script>";
		echo $sql;
    } else {
        echo "<script>alert('Error occurred: " . $stmt->error . "')</script>";
    }
}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HEALTH GUIDANCE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
		*{
    text-decoration: none;
}
body{
    background-image: url("pic2.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.navbar{
    background-color: rgba(255, 255, 255, o.5);
    backdrop-filter:blur(50px);
    font-family: calibri; padding-right: 15px;padding-left: 15px;padding-top: 15px;
    padding-bottom: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    border-radius: 15px;
}
.navdiv{
    display: flex; align-items: center; justify-content: space-between;
}
.logo{
    box-shadow: 0 5px 5px rgb(194, 226, 225) ;
}
.logo a{
    font-size: 35px; font-weight: 600; color: white;
}
li{
    list-style: none; display: inline-block;  
    margin-right: 25px;
}
li a{
    color: rgb(14, 143, 136); font-size: 25px; font-weight: bold;
    padding: 10px;
    text-align: center;
}

li.z{
    background-color: rgb(14, 143, 136);
    border-radius: 20px;
    padding: 5px;
}

li.z a{
    padding: 20px;
    color:white;
}

li.zz{
    background-color: rgb(14, 143, 136);
    border-radius: 20px;
    padding: 5px;
}

li.zz a{
    padding: 20px;
    color:white;
}



.main{
    background-color: rgba(255, 255, 255, o.5);
    backdrop-filter:blur(50px);
    font-family: calibri; padding-right: 15px;padding-left: 15px;padding-top: 15px;
    padding-bottom: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    border-radius: 15px;
}
.mainn{
    background-color: rgba(255, 255, 255, o.5);
    backdrop-filter:blur(50px);
    font-family: calibri; padding-right: 15px;padding-left: 15px;padding-top: 15px;
    padding-bottom: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    border-radius: 15px;
}
h1{
    color: rgb(14, 143, 136);
}
form{
    background-color: rgb(185, 214, 209);
    padding:20px;
    margin: 10px;
    border-radius: 15px;
    color: black;
}
input{
    padding:10px;
    margin: 10px;
    border-color: rgb(14, 143, 136);
    border-radius: 5px;
    outline: none;
    font-weight: bolder;
    text-transform: uppercase;
    width: 30%;
}

select{
    padding:10px;
    margin: 10px;
    border-color: rgb(14, 143, 136);
    border-radius: 5px;
    outline: none;
    font-weight: bolder;
    text-transform: uppercase;
    width: 30%;
}

label{
    font-weight: bolder;
    font-size:x-large;
    width:200px;
    padding-top: 15px;
    display: inline-block;
}
.aask button{
    background-color:orange;
    width:auto;
    padding: 10px;
    font-weight: bolder;
    font-family:Arial, Helvetica, sans-serif ;
    color: white;
    border-color: orange;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35) ;
}

.qask textarea{
    width:90%;
    font-size: large;
    padding: 10px;
    font-weight: bolder;
    font-family:'Times New Roman', Times, serif ;
    outline: non;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35) ;
}

.aask input:hover{
    background-color:  #00a1ff;
    border-color: #00a1ff;
}
.end{
    background-color: rgb(14, 143, 136);
    padding:2px;
    color:white;
    margin-left: -8px;
    margin-right: -8px;
    margin-bottom: -9px;
    text-align:center;
}

.content {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Two equal columns */
    gap: 20px; /* Gap between d1 and d2 */
  }

  h3{
    color: rgb(14, 143, 136);
    font-weight: bolder;
  }
  .d1{
    margin-left:20px;
    background: white;
    padding:25px;
    border-radius: 25px;
    box-shadow: 5px 5px 20px rgb(150, 150, 150),-5px 5px 20px  rgb(150, 150, 150),5px -5px 20px  rgb(150, 150, 150),-5px -5px 20px  rgb(150, 150, 150);

  }

  .d2 img{
    margin-left: 30px;
    box-shadow: 5px 5px 20px rgb(150, 150, 150),-5px 5px 20px  rgb(150, 150, 150),5px -5px 20px  rgb(150, 150, 150),-5px -5px 20px  rgb(150, 150, 150);
    border-radius: 25px;
  }

  .s1{
    display: flex;
    align-items: center;
    gap:10px;
  }
  
  .fa-heart-circle-plus,.fa-truck-medical,.fa-hospital{
    color:#00a1ff ;
    font-size: 30px;
  }

  .main p{
    font-size:xx-large;
  }
  .d1 p{
    font-size:x-larger;
  }


        p{
            font-size: x-large;
        }
		table, th, td {padding: 10px;
  border: 2px solid white;
  border-collapse: collapse;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35) ;
}
th, td {
	text-align: center;
  background-color:  rgb(185, 214, 209);
}

    </style>
</head>
<body>
	<nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="#"><img src="logo.png"></a> </div>
			<ul>
				<li class="zz"><a href="mainpage.php">BACK</a></li>
			</ul>
		</div>
	</nav>
    <br>
    <div class="main">
        <h1>HEALTH GUIDANCE</h1>
		<h2>DOCTORS</h2>
        <form id="healthForm">
			<table style="width: 50%;">
				<tr>
				  <th>S.No</th>
				  <th>DOCTOR NAME</th>
				  <th>SPECIALIST IN</th>
				  <th>CITY</th>
				</tr>
				<tr>
				  <td>1</td>
				  <td>Dr.R. Hari Harakrishnan</td>
				  <td>Cardiologist</td>
				  <td>Chennai</td>
				</tr>
				<tr>
				  <td>2</td>
				  <td>Dr. M.Kodeeswaran Marappan</td>
				  <td>Neurosurgeon</td>
				  <td>Chennai</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Dr.k.Jyothy</td>
					<td>Dermatologist</td>
					<td>Coimbatore</td>
				  </tr>
				  <tr>
					<td>4</td>
					<td>Dr. D. Senguttuvan</td>
					<td>Pediatrician</td>
					<td>Tiruchiappalli</td>
				  </tr>
				  <tr>
					<td>4</td>
					<td>Dr.K.Kavitha</td>
					<td>Gastroenterologist</td>
					<td>Chennai</td>
				  </tr>
				  <tr>
					<td>5</td>
					<td>Dr.N.Rangarajan</td>
					<td>Psychiatrist</td>
					<td>Chennai</td>
				  </tr>
                  <tr>
					<td>6</td>
					<td>Dr.Ilamparuthi</td>
					<td>Urologist</td>
					<td>Chennai</td>
				  </tr>
				  <tr>
					<td>7</td>
					<td>Dr.Anadharaman</td>
					<td>Orthopedist</td>
					<td>Chennai</td>
				  </tr>
				  <tr>
					<td>8</td>
					<td>Dr.Sambasivam Sasikumar</td>
					<td>Oncologist-Radiation</td>
					<td>Thanjavur</td>
				  </tr>
				  <tr>
					<td>9</td>
					<td>Dr.M.Ravishankar</td>
					<td>Ophthalmologist</td>
					<td>Chennai</td>
				  </tr>
				  <tr>
					<td>10</td>
					<td>Dr.Selva Seetha Raman</td>
					<td>Plastic Surgeon</td>
					<td>Chennai</td>
				  </tr>
				  <tr>
					<td>11</td>
					<td>Dr.R.Thirunavukkarasu</td>
					<td>Allopathic Family Physician</td>
					<td>Thiruvarur</td>
				  </tr>
				  <tr>
					<td>12</td>
					<td>Dr.M.S.Jayanthy Ravindran</td>
					<td>Plastic Cosmetic Surgeon</td>
					<td>Chennai</td>
				  </tr>
				  <tr>
					<td>13</td>
					<td>Dr.suresh</td>
					<td>Dietician</td>
					<td>Chennai</td>
				  </tr>
				  <tr>
					<td>14</td>
					<td>Dr.Chitra Bharucha</td>
					<td>haematologist</td>
					<td>Chennai</td>
				  </tr>


			  </table>
			  <br>
			  
			  <div class="ask">
                <label>SELECT DOCTOR</label>
                <select id="selecteddoctor" name="selecteddoctor"required>
					<option>--select--</option>
					<option>Dr.R. Hari Harakrishnan</option>
					<option>Dr. M.Kodeeswaran Marappan	</option>
					<option>Dr.k.Jyothy	</option>
					<option>Dr. D. Senguttuvan	</option>
					<option>Dr.K.Kavitha</option>
					<option>Dr.N.Rangarajan</option>
					<option>Dr.Ilamparuthi</option>
					<option>Dr.Anadharaman</option>
					<option>Dr.Sambasivam Sasikumar</option>
					<option>Dr.M.Ravishankar</option>
					<option>Dr.Selva Seetha Raman</option>
					<option>Dr.R.Thirunavukkarasu</option>
					<option>Dr.M.S.Jayanthy Ravindran</option>
					<option>Dr.suresh</option>
					<option>Dr.Chitra Bharucha</option>
                </select>
            </div>	
			<br>
			<h1>ENTER YOU HEALTH CONDITION</h1>
			  <div class="qask">
                <textarea rows="4"  id="healthcondition" name="healthcondition" type="text" required="required" placeholder="TYPE HERE!!!"></textarea>
            </div>

			<form action="/upload" method="post" enctype="multipart/form-data">
				<label for="fileInput">Select a file:</label>
				<input type="file" id="fileInput" name="fileInput" accept=".txt,.pdf,.doc,.docx">
				<br><br>
				<input type="submit" value="Upload">
			  </form>
			<br>
			<div class="aask">
                <button type="submit " id="bookBtn">GET RESPONSE</button>
            </div>
		</form>
    </div>
	<script>
        document.getElementById("bookBtn").addEventListener("click", function() {
            // Retrieve values from the form
            var selectedDoctor = document.getElementById("selecteddoctor").value;
            var healthCondition = document.getElementById("healthcondition").value;

            // Check if all fields are filled out
            if (selectedDoctor === "" || healthCondition === "") {
                alert("Please fill out all fields");
                return;
            }

            // Create a FormData object and append form data
            var formData = new FormData();
            formData.append('selecteddoctor', selectedDoctor);
            formData.append('healthcondition', healthCondition);

            // Send asynchronous POST request to the server
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "msgstore.php", true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert(xhr.responseText); // Display response from server
                } else {
                    alert('Error occurred: ' + xhr.statusText);
                }
            };
            xhr.send(formData); // Send form data
        });
    </script>
</body>
</html>