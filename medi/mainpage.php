<?php
include 'dbconnection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dr.WithUs</title>
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
    display: flex;
     align-items: center;
      justify-content: space-between;
}
.logo{
    box-shadow: 0 5px 5px rgb(194, 226, 225) ;
}
.logo a{
    font-size: 35px; font-weight: 600; color: white;
}
li{
    list-style: none;
     display: inline-block;  
    margin-right: 25px;
}
li a{
    color: rgb(14, 143, 136); 
    font-size: 25px; 
    font-weight: bold;
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
    font-family: calibri; 
    padding-right: 15px;
    padding-left: 15px;
    padding-top: 15px;
    padding-bottom: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
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

</style> 
</head>

<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="#"><img src="logo.png"></a> </div>
            <ul>
                <li class="z"><a href="#">Home</a></li>
                <li><a href="abt.php">About</a></li>
                <li><a href="medical.php">Medicals</a></li>
                <li><a href="pd.php">Health Guidance</a></li>
                <li><a href="rem.php">Remainder</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="main">
        <h1>Providing an Exceptional Patient Experience</h1>
        <p>
            Welcome <?=$_SESSION['name']?>, where exceptional patient experiences are our priority. With compassionate care,state-of-the-art facilities, and a patient-centered approach,We're dedicated to your well-being. Trust us with your health and experience the difference.
        </p>
        <br>
        <h1>Book An Appointment !!</h1>
        <form id="appointmentForm" action="ind.php" method="post" onsubmit="return validateForm()">
            <div class="ask">
                <label>PATIENT NAME</label>
                <input type="text" name="pname" id="pname" required="required" >
                
            </div>
            <div class="ask">
                <label>EMAIL</label>
                <input type="email" name="email" required="required">
            </div>
            <div class="ask">
                <label>DOCTOR NAME</label>
                <select id="dname" name="dname">
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
            <div class="ask">
                <label>DATE</label>
                <input type="date" name="date" required>
            </div>
            <div class="ask">
                <label>TIME</label>
                <input type="time" name="time" required>
            </div>
            <div class="aask">
                <button type="submit">BOOK APPOINTMENT</button>
            </div>
        </form>
    </div>
    <br>
    <div class="end">
        <p>Copyright © 2024 DrWithUsHeathCare. All rights reserved.</p>
    </div>
    <script>
        function validateForm() {
            var patientName = document.getElementById("pname").value;
            var email = document.getElementsByName("email")[0].value;
            var doctorName = document.getElementsByName("dname")[0].value;
            var date = document.getElementsByName("date")[0].value;
            var time = document.getElementsByName("time")[0].value;

            if (patientName === "" || email === "" || doctorName === "" || date === "" || time === "") {
                alert("Please fill in all fields.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
