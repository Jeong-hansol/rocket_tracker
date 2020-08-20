<!DOCTYPE html>
<html>
<head>
	<title>로켓Tracker</title>
	<meta charset="UTF-8">
	 <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
  <script type="text/javascript">
	var filter = "win16|win32|win64|mac|macintel";
	var check = 0;
	if ( navigator.platform ) {
		if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) {
			//mobile
			check = 0;
		} else {
			//pc
			check = 1;
		}
	}

	let digit =[0, 10, 13, 13, 11, 12, 13, 10, 11, 10, 10, 12, 12, 13, 12, 12,
							12, 9, 13, 13, 18, 12, 16, 13, 12, 13, 12, 13, 13, 13, 13, 12];
    function Btn(){
			if($('#DeliveryValue').val() == '0'){ alert('배송조회할 택배사를 선택해주세요.'); return false;	}
			if($('#number').val() == ''){ alert('운송장번호를 입력해주세요.'); return false; }
			if($('#DeliveryValue').val() == '1'){	//건영
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 10자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '2'){//경
				if($('#number').val().length < digit[$('#DeliveryValue').val()] || $('#number').val().length > digit[$('#DeliveryValue').val()]+1){
						var text = "운송장번호는 13자리 또는 14자리입니다.";
						if(check == 0){
							$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
						}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '3'){//대신
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '4'){//로젠
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 11자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '5'){//롯데
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '6'){//우체국
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '7'){//일양
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 10자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '8'){//천일
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 11자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '9'){	//cj
				if($('#number').val().length < digit[$('#DeliveryValue').val()] || $('#number').val().length > digit[$('#DeliveryValue').val()]+2){
					var text = "운송장번호는 10자리 또는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}else{
					if($('#number').val().length === digit[$('#DeliveryValue').val()]+1){
						var text = "운송장번호는 10자리 또는 12자리입니다.";
						if(check == 0){
							$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
						}else{ alert(text);	return false; }
					}
				}
			}else if($('#DeliveryValue').val() == '10'){	//cu
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 10자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '11'){	//cvs
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '12'){	//slx
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '13'){	//hapdong
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '14'){	//daelim
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '15'){	//hanjin
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '16'){	//cway
				if($('#number').val().length < digit[$('#DeliveryValue').val()] || $('#number').val().length > digit[$('#DeliveryValue').val()]+1){
					var text = "운송장번호는 12자리 또는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '17'){	//tnt
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
						var text = "운송장번호는 9자리입니다.";
						if(check == 0){
							$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
						}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '18'){	//usps
				if($('#number').val().length < digit[$('#DeliveryValue').val()]){
						var text = "운송장번호는 10자리 또는 13자리 또는 22자리 또는 35자리입니다.";
						if(check == 0){
							$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
						}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '19'){	//ems
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '20'){	//ups
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 18자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '21'){	//fedex
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '22'){	//ecms
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 16자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '23'){	//lotte
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '24'){	//pantos
				if($('#number').val().length < digit[$('#DeliveryValue').val()] || $('#number').val().length > digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '25'){	//gsmn
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '26'){	//cj
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '27'){	//gsi
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '28'){	//eunha
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '29'){	//ace
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '30'){	//aci
				if($('#number').val().length !== digit[$('#DeliveryValue').val()]){
					var text = "운송장번호는 12자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}else if($('#DeliveryValue').val() == '31'){	//성원
				if($('#number').val().length < digit[$('#DeliveryValue').val()] || $('#number').val().length > digit[$('#DeliveryValue').val()]+1){
					var text = "운송장번호는 12자리 또는 13자리입니다.";
					if(check == 0){
						$('#alert').removeClass('hidden');	$('.alertText').html(text);return false;
					}else{ alert(text);	return false; }
				}
			}
			document.getElementById("Search").submit();
    }
		function onlyNum(obj) {
			if($('input:radio[name="dAi"]:checked').val()== '1'){
				var number = obj.value.replace(/[^0-9]/g, "");
				obj.value = number;
			}else{
				var number = obj.value.replace(/[^a-z0-9]/gi,'');
				obj.value = number;
			}
		}
		function onchangeRadio(){
			let domestic =['선택','건영택배','경동택배','대신택배','로젠택배','롯데택배','우체국택배','일양로지스','천일택배','CJ대한통운','CU편의점택배','CVSnet편의점택배','SLX','합동택배', '대림통운', '한진택배'];
			let international =['선택','CwayExpress','TNTExpress','USPS', 'EMS', 'UPS','FedEx', 'ECMSExpress', '롯데글로벌로지스', '판토스', 'GSMNtoN', 'CJ국제특송','GSIExpress', '은하쉬핑', 'ACEExpress', 'ACIExpress', '성원글로벌카고'];
			if($('input:radio[name="dAi"]:checked').val()== '1'){
				$('#DeliveryValue').empty();
				for(var count = 0; count < domestic.length; count++){
          var option = $("<option value="+ count +">"+domestic[count]+"</option>");
          $('#DeliveryValue').append(option);
				}
			}else{
				$('#DeliveryValue').empty();
				for(var count = 0; count < international.length; count++){
					if(count == 0){
							var option = $("<option value="+ count +">"+international[count]+"</option>");
					}else{
						var option = $("<option value="+ (Number(count)+Number(domestic.length-1)) +">"+international[count]+"</option>");
					}
          $('#DeliveryValue').append(option);
				}
			}
		}
		function alertBtn(){
			$('#alert').addClass('hidden');
		}
		window.onpageshow = function(event) {
		    if ( event.persisted || (window.performance && window.performance.navigation.type == 2)) {
					location.reload();
		    }
		}
  </script>
	<style >
		body{ font-family: 'Nanum Gothic', sans-serif;}
		.bodr-solid-1{border:1px solid #e2e8f0;}
		.w-p-97{width:97%;}
		.w-700{width:700px;}
		.bg-1{	background-color: #EF8BA6;	}
		input[type='radio'],
		input[type='radio']:checked {
  		-webkit-appearance:none;
		  appearance: none;
		  width: 1.5rem;
		  height: 1.5rem;
		  border-radius: 100%;
		}
		input[type='radio'] {
		  background-color: white;
		  border: 2px solid #fbb6ce;
		}
		input[type='radio']:checked {
		  background-color: #fbb6ce;
		}
	</style>
</head>
<body class="h-full">
	<div id ="alert" class="w-full h-full fixed z-20 items-center flex justify-center hidden bg-gray-400 bg-opacity-25">
		<div class="flex flex-col bg-white w-3/4 shadow-xl rounded" style ="height:150px">
			<div class="alertText text-center" style='line-height:90px'></div>
			<div class="text-center">
				<button type="button" class="bg-pink-200 hover:bg-pink-300 w-11/12 h-12 align-bottom rounded-sm" name="button" onclick="alertBtn()">확인</button>
			</div>
		</div>
	</div>
	<div class="w-full text-center sm:pt-6 bg-pink-100" style = "line-height:250px;">
		<img class ="inline-block" src="{{asset('/images/logo.png')}}" alt="">
	</div>
	<div class="w-full text-center bg-pink-100 pb-2">
		<input type="radio" class='mr-2' name="dAi" value="1"onchange="onchangeRadio()" checked><div class="inline-block relative" style='top:-7px;'>국내택배</div>
		<input type="radio" class='ml-4 mr-2' name="dAi" value="2"onchange="onchangeRadio()"><div class="inline-block relative" style='top:-7px;'>국제택배</div>
	</div>
	<form class="" id="Search" action="/DeliveryTracker" method="GET">
    @csrf
		<div class="text-center w-full md:flex md:flex-row md:justify-center bg-pink-100 pb-6">
			<div class="pt-1 mb-1 w-full sm:flex md:w-4/5 xl:w-3/6">
		    <select  class ="shadow-sm pl-4 text-lg bodr-solid-1 w-11/12 mb-2 sm:w-64 sm:mb-2 bg-white" id="DeliveryValue" name="DeliveryValue" style ="height:65px;margin-right:1px;">
		      <option value="0">선택</option>
		      <option value="1">건영택배</option>x`
		      <option value="2">경동택배</option>
		      <option value="3">대신택배</option>
		      <option value="4">로젠택배</option>
		      <option value="5">롯데택배</option>
		      <option value="6">우체국택배</option>
		      <option value="7">일양로지스</option>
		      <option value="8">천일택배</option>
		      <option value="9">CJ대한통운</option>
		      <option value="10">CU편의점택배</option>
		      <option value="11">CVSnet편의점택배</option>
		      <option value="12">SLX</option>
		      <option value="13">합동택배</option>
		      <option value="14">대림통운</option>
		      <option value="15">한진택배</option>
		    </select>
				<div class="w-full flex flex-row justify-center sm:justify-start">
					<div class="flex w-11/12 sm:w-full">
			    	<input type="text" class ="shadow w-full h-16 pl-2 text-base sm:ml-0 sm:text-xl md:text-x2l" name="number" id="number" placeholder="운송장 번호를 -없이 입력해주세요." onblur="onlyNum(this)">
			    	<button type="button" class ="ml-1 bg-pink-200 w-20 h-16 text-black pr-2 pl-2 text-2xl" id="LookupBtn" name="LookupBtn" onclick="Btn()"><i class="fas fa-search"></i></button>
					</div>
				</div>
		  </div>
		</div>
	</form>
	<div class="w-full flex flex-row justify-center">
		<div class="text-center mt-10 rounded-lg bg-pink-100 w-11/12 md:w-4/5 xl:w-3/6">
			<div class="mb-2 text-xl mt-2">조회 가능한 택배사</div>
			<div class="mb-4 text-xl mt-2 font-hairline">국내 택배</div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/cj.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/logen.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/lotte.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/epost.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/ilyang.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/chunil.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/hapdong.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/Cu.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/gspost.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/Gyeongdong.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/daesin.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/slx.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/geonyeong.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/daelim.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/hanjin.png')}}" alt=""></div>
			<div class="mb-4 text-xl mt-8 font-hairline">국제 택배</div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/cway.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/uspscom.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/ems.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/glotte.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/ECMS.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/gCJ.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/GSM.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/pantos.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/ups.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/fed.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/Gsi.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/tnt fedex.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/ace.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/aci.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/sungwon.png')}}" alt=""></div>
			<div class='inline-block'><img src="{{asset('/images/deliverylogo/Eh.png')}}" alt=""></div>
		</div>
	</div>
	<div class="text-gray-500 text-center pb-2 mt-12">
		 (캡스톤)RocketTracker Copyright <div class="inline-block">ⓒ All Rights Reserved</div>
	</div>
</body>
</html>
