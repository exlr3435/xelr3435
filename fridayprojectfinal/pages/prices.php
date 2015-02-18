
<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="big-title">Prices</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-4 text-center">
			<h2 class="medium-title">Package#1</h2>
            <img class="image-full-width image-border" src="img/Mike Rels.jpg">
			<p class="body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, laborum, in atque provident cum delectus nam magnam quidem odio nisi repudiandae tenetur veniam minima mollitia perferendis sequi accusamus aut deleniti.</p>
		</div>
		<div class="col-4 text-center">
			<h2 class="medium-title">Package#2</h2>
            <img class="image-full-width image-border" src="img/Mike Rels.jpg">
			<p class="body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, ipsum, corporis, distinctio, quia doloribus voluptatibus pariatur deserunt ex quos voluptatum excepturi porro nesciunt saepe reiciendis dolore voluptates quae quo laboriosam.</p>
		</div>
		   
</div>

 <?php


$date = time();

 $day = date('d', $date);
$month = date('m', $date);
$year = date ('Y', $date);

$first_day =mktime(0,0,0,$month,1, $year);
$title = date('F', $first_day);
$day_of_week = date('D', $first_day);

switch($day_of_week)
{
	case "Sun":$blank = 0; break;
	case "Mon":$blank = 1; break;
	case "Tue":$blank = 2; break;
	case "Wed":$blank = 3; break;
	case "Thu":$blank = 4; break;
	case "Fri":$blank = 5; break;
	case "Sat":$blank = 6; break;
		
}

$days_in_month = cal_days_in_month(0, $month, $year);

echo "<table border =6 width=600 height=300>";
echo "<tr><th colspan=60> $title $year </th></tr>";
echo "<tr><td width=62>S</td><td width=62>M</td><td width=62>T</td><td width=62>W</td><td width=62>T</td><td width=62>F</td><td width=62>S</td></tr>";

$day_count = 1;
echo "<tr>";

while 
($blank >0)
{
	echo "<td></td>";
	$blank = $blank-1;
	$day_count++;
}

$day_num = 1;

while 
($day_num <= $days_in_month)
{
	echo "<td> $day_num </td>";
	$day_num++;
	$day_count++;
	
if($day_count >7)
{
echo "</tr><tr>";
$day_count = 1;
}
	
}

while
($day_count >1 && $day_count <=7 )
{
	echo "<td> </td>";
	$day_count++;
}


echo "</tr></table>";"<br/>"
?>


<div class="schedule"></div>
<p><strong>*</strong>
For all out of town guests, we offer a $40.00
for a limited time.
<a target="_blank" href="www.google.ca"></a></p>
<p><strong>**</strong>
The 15 Day Free Trial is only available to residents of Vancouver.</p>
<p></p>
<table border="0">
<tbody>
<tr><td><strong>Sunday</strong></td>
	<td><strong>Monday</strong></td>
	<td><strong>Tuesday</strong></td>
	<td><strong>Wednesday</strong></td>
	<td><strong>Thursday</strong></td>
	<td><strong>Friday</strong></td>
	<td><strong>Saturday</strong></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><strong>12:05pm</strong>
<br /></br>
Brazilian Jiu Jitsu No-Gi</td>
<td><strong>12:05pm</strong>
<br></br>
Kick Boxing
</td>
<td></td>
<td><strong>12:05pm</strong>
<br></br>
Brazilian Jiu Jitsu Open Mat
</td>
<td><strong>12:00pm</strong>
<br></br>
Brazilian Jiu Jitsu No-Gi
</td>
</tr>
<tr>
<td></td>
<td>
<strong>1:05pm</strong>
<br></br>
Boot Camp Conditioning Class
</td>
<td>
<strong>1:05pm</strong>
<br></br>
Boot Camp Conditioning Class
</td>
<td><strong>1:05pm</strong>
<br></br>
Boot Camp Conditioning Class
</td>
<td></td>
<td><strong>1:00pm</strong>
<br></br>
Open Mat Brazilian Jiu Jitsu Sparring</td>
</tr>
<tr><td><strong>2:00pm</strong>
<br></br>
Open Mat Sparring
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><strong>4:00pm</strong>
<br></br>
Brazilian Jiu Jitsu</td>
<td></td>
<td><strong>4:00pm</strong>
<br></br>
Brazilian Jiu Jitsu
</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><strong>5:00pm</strong>
<br></br>
Brazilian Jiu Jitsu
</td>
<td></td>
<td><strong>5:00pm</strong>
<br></br>
Brazilian Jiu Jitsu
</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td><strong>6:00pm</strong>
<br></br>
Open Mat Brazilian Jiu Jitsu Sparring
</td>
<td><strong>6:00pm</strong><br>
Kick Boxing</td>
<td><strong>6:00pm</strong><br>
Open Mat Brazilian Jiu Jitsu Sparring</td>
<td><strong>6:00pm</strong><br>
Kick Boxing</td>
<td><strong>6:00pm</strong><br>
Boot Camp Conditioning Class</td>
<td></td>
</tr>
<tr>
<td></td>
<td><strong>7:15pm</strong>
<br></br>
Kick Boxing
</td>
<td><strong>7:15pm</strong>
<br></br>
Brazilian Jiu Jitsu
</td>
<td><strong>7:15pm</strong>
<br></br>
Kick Boxing
</td>
<td><strong>7:15pm</strong>
<br></br>
Brazilian Jiu Jitsu
</td>
<td></td>
<td></td>
</tr>
</tbody>
</table>