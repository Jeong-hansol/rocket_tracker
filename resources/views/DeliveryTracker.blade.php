<!DOCTYPE html>
<html>
<head>
	<title>배송조회</title>
	<meta charset="UTF-8">
	 <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:700&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function Btn(){
			$.ajax({
            url:'Scraping.php',
    				type: "POST",
						data : { 'kind' : $('#DeliveryValue').val(), 'num' :  $('#number').val() },
						dataType : 'json',
            success:function(data){
							console.log(data);
            }
        });
    }
  </script>
	<style >
		body{ font-family: 'Nanum Gothic', sans-serif; }
		.bodr-solid-1{border:1px solid #e2e8f0;}
		.border-solid-top-1{border-top:1px solid #e2e8f0;}
		.border-solid-top-3{border-top:3px solid #e2e8f0;}
		.border-solid-bottom-1{border-bottom:1px solid #e2e8f0;}
		.border-solid-bottom-2{border-bottom:2px solid #e2e8f0;}
		.border-solid-bottom-3{border-bottom:3px solid #e2e8f0;}
		.pr-7	{padding-right: : 1.75rem;}
		.pl-7	{padding-left: : 1.75rem;}
		.w-p-97{width:97%;}
		.w-700{width:700px;}
		.bg-1{	background-color: #EF8BA6;	}
	</style>
</head>
<body class="">
	<div class="fixed inline-block text-4xl text-pink-400 hover:text-pink-500" style="left:15px;top:5px;"><a href="{{route('home')}}"><i class="fas fa-arrow-left"></i></a></div>
	<div class="w-full text-center pt-10 bg-pink-100">
		<a href="{{route('home')}}"><img class ="inline-block" src="./images/logo.png" alt=""></a>
	</div>
	<div class="text-center w-full bg-pink-100 pb-2">
		<div class="pt-1 mb-1 w-full flex justify-center flex-row">
	    <div class="text-2xl font-bold text-gray-500">운송장번호</div>
		<div class="text-2xl font-medium text-gray-500 pl-4"><?php echo $data['delivery']['number']; ?></div>
	  </div>
	</div>
	<div class="w-full text-center mt-4">
		<div class="inline-block md:w-11/12 lg:w-9/12 <?php if($data['result'] == 'true'){} else {echo 'hidden';} ?>" id = 'content'>
			<div class="text-2xl mt-4 pl-4 text-gray-600 font-semibold mb-1 float-left">기본정보</div>
			<div >
				<table id = 'basic_info' class = "border-solid-top-3 table-fixed w-full break-all">
					<tr class="h-0">
						<th class="w-1/3 md:w-32"></th>
						<th class="w-2/3"></th>
					</tr>
					<tr class ="h-16">
						<td class ='text-xl pl-4 text-gray-600 pl-6 md:pl-8' align = "left">받는사람</td>
						<td id ="basic_2" class= "text-xl text-gray-700" align="left"><?php  if($data['result'] == 'true') echo $data['to']['name']; ?></td>
					</tr>
					<tr class ="h-16">
						<td class ='text-xl pl-4 text-gray-600 pl-6 md:pl-8' align = "left">보낸사람</td>
						<td id ="basic_3" class= "text-xl text-gray-700" align="left"><?php if($data['result'] == 'true') echo $data['from']; ?></td>
					</tr>
					<tr class ="h-16">
						<td class ='text-xl pl-4 text-gray-600 pl-6 md:pl-8' align = "left">수령주소</td>
						<td id ="basic_4" class= "text-xl text-gray-700" align="left"><?php if($data['result'] == 'true') echo $data['to']['address']; ?></td>
					</tr>
					<tr class ="h-16">
						<td class ='text-xl pl-4 text-gray-600 pl-6 md:pl-8' align = "left">현황</td>
						<td id ="basic_5" class= "text-xl text-gray-700" align="left"><?php if($data['result'] == 'true') echo $data['current']; ?></td>
					</tr>
				</table>
				<div class="text-2xl mt-4 pl-4 text-gray-600 font-semibold mb-1 float-left">배송 진행사항</div>
				<table id = 'station_info' class ="border-solid-top-3 w-full border-solid-bottom-3 table-fixed break-all">

					<thead class="hidden md:table-row-group">
					<tr class="h-0">
						<th class="w-1/6 md:w-32"></th>
						<th class="w-1/6 md:w-32"></th>
						<th class="w-1/3"></th>
						<th class="w-1/3 md:w-2/3"></th>
					</tr>
					<tr class ="h-16 border-solid-bottom-3">
						<td class ='text-xl text-gray-600' align="center">날짜</td>
						<td class ='text-xl text-gray-600' align="center">시간</td>
						<td class ='text-xl text-gray-600' align="center">현재위치</td>
						<td class ='text-xl text-gray-600' align="center">배송상태</td>
					</tr>
					</thead>
					<tbody id ="station_content" class="hidden md:table-row-group">
				<?php
					if($data['result'] == 'true'){
						$count = count($data['progresses']);
						for($i =$count-1 ; $i >=0 ;$i--){
						  echo "<tr class ='h-16 border-solid-bottom-2 text-lg";
							if($i !== $count-1){ echo ' text-gray-500';}
							else{echo ' text-gray-700';}
							echo "'>";
							if(request('DeliveryValue') === '22'){
								$time = date( 'Y-m-d H:i', substr($data['progresses'][$i]['time'],0,10) );
							  $time = explode(' ', $time);
							}else{
						  	$time = explode(' ', $data['progresses'][$i]['time']);
							}
	            if(count($time) == 1) $time[1] = '-';
						  echo "<td class ='pl-1' align='center'>".$time[0]."</td>";
						  echo "<td class ='pl-1' align='center'>".$time[1]."</td>";
						  echo "<td align='center'>".$data['progresses'][$i]['location']."</td>";
						  echo "<td align='left' class='pl-6'>".$data['progresses'][$i]['state']."</td>";
						  echo "</tr>";
						}
					}
				?>
					</tbody>
				</table>
				<div class="text-left pl-4 pr-4 mt- md:hidden">
					<?php
						if($data['result'] == 'true'){
							$count = count($data['progresses']);
							for($i = $count-1; $i>=0; $i--){
							  echo "<div class='bodr-solid-1 pl-4 pt-1 pb-1 mt-1 rounded-md";
								if($i !== $count-1){ echo ' text-gray-500';}
								echo "'>";
		            if(count($time) == 1) $time[1] = '-';
							  echo "<div class ='pl-1'>".$data['progresses'][$i]['time']."</div>";
							  echo "<div class='mt-1'>".$data['progresses'][$i]['location']."</div>";
							  echo "<div class='mt-1' style=''>".$data['progresses'][$i]['state']."</div>";
							  echo "</div>";

							}
						}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="w-full text-center mt-6">
		<div class="inline-block md:w-5/12 xl:w-1/4 text-gray-600 text-left w-4/5<?php if($data['result'] == 'false'){} else {echo 'hidden';} ?>">
		<?php if($data['result'] == 'false'){
					echo $data['msg'];
					echo "<div class='text-center text-black text-xl mt-6'>".$data['delivery']['conpany']." "."(".$data['delivery']['tel'].")"."</div>";
				}
		?>
		<div></div>
		</div>

	</div>
	<div class="text-gray-500 text-center pb-2 mt-12">
		 (캡스톤)RocketTracker Copyright ⓒ All Rights Reserved.
	</div>
</body>
</html>
