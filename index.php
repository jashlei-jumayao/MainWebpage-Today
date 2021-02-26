<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main Webpage-Today</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="logo">
					<a href="https://firstscaffold.herokuapp.com/">Today</a>
				</div>
				<nav>
					<a href="https://firstscaffold.herokuapp.com/">Home</a> <a href="#covid">About</a> <a href="#source">Sources</a>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<h2>The CoViD-19 Pandemic</h2>
		</div>
		<div class="content-area">
			<div class="wrapper">
				<h2 id="covid">CoViD-19</h2>
				<p>Coronavirus
Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new coronavirus was identified as the cause of a disease outbreak that originated in China.
</p>
<p>
The virus is now known as the severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease it causes is called coronavirus disease 2019 (COVID-19). In March 2020, the World Health Organization (WHO) declared the COVID-19 outbreak a pandemic.
</p>
<p>
Public health groups, including the U.S. Centers for Disease Control and Prevention (CDC) and WHO, are monitoring the pandemic and posting updates on their websites. These groups have also issued recommendations for preventing and treating the illness.</p>

<p>Symptoms
Signs and symptoms of coronavirus disease 2019 (COVID-19) may appear two to 14 days after exposure. This time after exposure and before having symptoms is called the incubation period. Common signs and symptoms can include:
</p>
<p>
Fever
Cough
Tiredness
Early symptoms of COVID-19 may include a loss of taste or smell.
</p>
<pre><p>
Other symptoms can include:

Shortness of breath or difficulty breathing
Muscle aches
Chills
Sore throat
Runny nose
Headache
Chest pain
Pink eye (conjunctivitis)
</p>
</pre>
<p>
This list is not all inclusive. Other less common symptoms have been reported, such as rash, nausea, vomiting and diarrhea. Children have similar symptoms to adults and generally have mild illness.
</p>
<p>
The severity of COVID-19 symptoms can range from very mild to severe. Some people may have only a few symptoms, and some people may have no symptoms at all. Some people may experience worsened symptoms, such as worsened shortness of breath and pneumonia, about a week after symptoms start.
</p>
<p>
People who are older have a higher risk of serious illness from COVID-19, and the risk increases with age. People who have existing chronic medical conditions also may have a higher risk of serious illness. Certain medical conditions that increase the risk of serious illness from COVID-19 include:
</p>
<pre> <p>
Serious heart diseases, such as heart failure, coronary artery disease or cardiomyopathy
Cancer
Chronic obstructive pulmonary disease (COPD)
Type 2 diabetes
Obesity or severe obesity
Smoking
Chronic kidney disease
Sickle cell disease
Weakened immune system from solid organ transplants
Pregnancy
Other conditions may increase the risk of serious illness, such as:

Asthma
Liver disease
Overweight
Chronic lung diseases such as cystic fibrosis or pulmonary fibrosis
Brain and nervous system conditions
Weakened immune system from bone marrow transplant, HIV or some medications
Type 1 diabetes
High blood pressure</p></pre>

<h2>	HOW IT SPREADS</h2>
<p>

The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.
You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.
</p>
	<h2>
		PREVENTION
	</h2>
<p>
To prevent infection and to slow transmission of COVID-19, do the following:
Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.
Maintain at least 1 metre distance between you and people coughing or sneezing.
Avoid touching your face.
Cover your mouth and nose when coughing or sneezing.
Stay home if you feel unwell.
Refrain from smoking and other activities that weaken the lungs.
Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.

</p>

<br>
<h2 id="source">
	Source
</h2>
<a href="https://www.who.int/health-topics/coronavirus#tab=tab_2"><p>
	https://www.who.int/health-topics/coronavirus#tab=tab_2
</p></a>
			</div>
		</div>
	</div>
	<style>
		* {
	margin: 0;
	padding: 0;
}
body {
	text-align: center;
}
.wrapper {
	width: 1170px;
	margin: 0 auto;
}
header {
	height: 100px;
	background: #262626;
	width: 100%;
	z-index: 10;
	position: fixed;
}
.logo {
	width: 30%;
	float: left;
	line-height: 100px;
}
.logo a {
	text-decoration: none;
	font-size: 30px;
	font-family: poppins;
	color: #fff;
	letter-spacing: 5px;
}
nav {
	float: right;
	line-height: 100px;
}
nav a {
	text-decoration: none;
	font-family: poppins;
	letter-spacing: 4px;
	font-size: 20px;
	margin: 0 10px;
	color: #fff;
}
.banner-area {
	width: 100%;
	height: 500px;
	position: fixed;
	top: 100px;
	background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("COVID IMAGE 1.jpg");
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.banner-area h2 {
	padding-top: 8%;
	font-size: 70px;
	font-family: poppins;
	text-transform: uppercase;
	color: #fff;
}
.content-area {
	width: 120%;
	position: relative;
	top: 450px;
	background: #ebebeb;
	height: 3000px;
}
.content-area h2 {
	font-family: poppins;
	letter-spacing: 4px;
	padding-top: 30px;
	font-size: 40px;
	margin: 0;
}
.content-area p {
	padding: 2% 0px;
	font-family: poppins;
	line-height: 30px;
}
</style>
</body>
</html>
