<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medicals/Pharmacy</title>
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
				<li class="zz"><a href="mainpage.php" target="_parent">BACK</a></li>
			</ul>
		</div>
	</nav>
    <br>
    <div class="main">
        <h1>Medicals</h1>
		<h2>Stores</h2>
        <form>
			<table style="width: 50%;">
				<tr>
				  <th>S.No</th>
				  <th>MEDICALS NAME</th>
				  <th>ADDRESS</th>
				  <th>CONTACT NO</th>
				</tr>
				<tr>
				  <td>1</td>
				  <td>Uma Medicals</td>
				  <td>Pandhanallur Main Road, Near Indian Bank, Kumbakonam, Tamil Nadu</td>
				  <td>0435-2450648</td>
				</tr>
				<tr>
				  <td>2</td>
				  <td>Arcot Medicals</td>
				  <td>14, Ayekulam Road, Near Vijay Hospital, Kumbakonam, Tamil Nadu</td>
				  <td>0435-2430997</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Bawaa Medicals</td>
					<td>20, Ayekulam Road, Near Vasan Eye Care Hospital, Kumbakonam, Tamil Nadu</td>
					<td>0435-2421575</td>
				  </tr>
				  <tr>
					<td>4</td>
					<td>Apollo Pharmacy</td>
					<td>6, Kumbakonam Head Post Office Road, Near Royals Hotel, Kumbakonam, Tami Nadu</td>
					<td>0435- 2433377</td>
				  </tr>
				  <tr>
					<td>4</td>
					<td>Balaji Medicals</td>
					<td>31/27, Swamimalai Road, Melacauvery, Near Indian Bank, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2480064, 2481064</td>
				  </tr>
				  <tr>
					<td>5</td>
					<td>Abirami Medicals</td>
					<td>45, Mutt Street, Opp. K S Hospital, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2422053</td>
				  </tr>
                  <tr>
					<td>6</td>
					<td>Andavar Pharmacy</td>
					<td>207, Aduthurai, Behind S M Hospital, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2471155</td>
				  </tr>
				  <tr>
					<td>7</td>
					<td>New Raj Medicals</td>
					<td>21, Kumbeswarar South Street, Near Kumbaeswarar Temple, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2426590, 9786020711</td>
				  </tr>
				  <tr>
					<td>8</td>
					<td>Senthil Medicals</td>
					<td>13, Kumbeswarar South Street, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2421522</td>
				  </tr>
				  <tr>
					<td>9</td>
					<td>Vendhan Medicals</td>
					<td>5- A, Near New Bus Stand Road, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2400843</td>
				  </tr>
				  <tr>
					<td>10</td>
					<td>Kalamath Medicals</td>
					<td>234, Muslim Main Road, Melacauvery, Near Palli Vasal, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2481834</td>
				  </tr>
				  <tr>
					<td>11</td>
					<td>Sri Devi Medicals</td>
					<td>640, Near Konerirajapuram Bus Stand, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2449443</td>
				  </tr>
				  <tr>
					<td>12</td>
					<td>Sakuntala Pharmacy</td>
					<td>302, Aduthurai, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2472156</td>
				  </tr>
				  <tr>
					<td>13</td>
					<td>Tamil Nadu Medicals</td>
					<td>26, Kumbeswarar South Street, Near Kumbeswarar Koil, Kumbakonam, Tamil Nadu</td>
					<td> 0435- 2422491</td>
				  </tr>
				  <tr>
					<td>14</td>
					<td>Saraswathy Medicals</td>
					<td>93/4, Kamaraj Road, Near Indian Overseas Bank, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2424607, 9443724607</td>
				  </tr>
                  <tr>
					<td>15</td>
					<td>Sri Maruthi Medicals</td>
					<td> 3/1, South Kadai, Street, Near S Pudur Bus Stand,Kumbakonam, Tamil Nadu</td>
					<td>0435- 2465770,9487620030</td>
				  </tr>
                  <tr>
					<td>16</td>
					<td>The Central Pharmacy</td>
					<td>110, Near Yanaiyadi Bus Stop, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2420812</td>
				  </tr>
                  <tr>
					<td>17</td>
					<td>Vignesh Medical Store</td>
					<td>92/10, Thirumanjana, Mutt Street, Nageswaran, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2423712, 9443163177</td>
				  </tr>
                  <tr>
					<td>18</td>
					<td>Vijay Poly Clinic Pharmacy</td>
					<td>21-A, Ayekulam Road, Near Old Bus Stand, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2430675, 2431951</td>
				  </tr>
                  <tr>
					<td>19</td>
					<td>Kottakkal Arya Vaidya Sala (Ayurvedic Medical Store)</td>
					<td>Building No. 39, Abhimukheswarar East Sannidhi Street, Kumbakonam, Tamil Nadu</td>
					<td>0435- 2425986</td>
				  </tr>
                  <tr>
					<td>20</td>
					<td>Sri Chakara Ayurvedic Siddha Marunthagam (Ayurvedic Medical Store)</td>
					<td>78-F (29), R K Building, First Floor, Pichai Bharmana Street, Kumbakonam, Tamil Nadu</td>
					<td>9952709790</td>
				  </tr>
                  </table>
			  <br>
			  
			
</body>
</html>