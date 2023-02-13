<!DOCTYPE html>
<html lang="en">
<head>
	<title>Huawei Firm Finder</title>
<meta name="a.validate.02" content="YE5_Hzj1qM97jrBCGnqIjCfYJsO_PpuCmYWF" />	
<meta name="description" content="Quickly, easily and freely find your Huawei phone's firmware. HiSuite Proxy's official integrated firmware finder."/>
	<meta name="keywords" content="Huawei Phones' Firm, Firmware, Firmware Finder, Huawei Firmware Finder, FirmFinder, Huawei Phone Android, Huawei Phone Firm, Huawei Firmware, Huawei Mate, Huawei P, Huawei Nova, Honor Firm, Honor FirmFinder, Honor Phone Firmware, Honor Firmware Finder, LGRP-OVS, EMUI 9, EMUI 8, EMUI 10, EMUI 11, EMUI 7">
    <meta charset="utf-8">
    <meta name="twitter:card" content="summary" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
	<link rel="canonical" href="/" />
	<meta name="theme-color" content="#0e5551" />
	<meta property="og:locale" content="en_gb" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Huawei Firm Finder" />
	<meta property="og:description" content="Quickly, easily and freely find your Huawei phone's firmware. HiSuite Proxy's official integrated firmware finder." />
	<meta property="og:url" content="/" />
	<meta property="og:site_name" content="Huawei Firm Finder" />
	<meta property="og:image" content="https://uupload.ir/files/fun_tw5a_screenshot_20210403-114103_chrome.jpg" />
	<meta property="og:image:width" content="350" />
	<meta property="og:image:height" content="511" />
	<meta name="google-site-verification" content="9iRzaidStgp2j0XBAOZMKa97EhRhJJjfmDq36v2am1g" />
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=7">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js?v=45"></script>
    <script type='text/javascript' src='//pl16894379.trustedcpmrevenue.com/76/59/b7/7659b789101976dc08054f9cb6803283.js'></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-LL1NGK6WT2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-LL1NGK6WT2');
	</script>
</head>
<body onresize="AdjustElements()">
    <style>
	.bottomad
	{	
		position: fixed;
		max-width: calc(100% - 20px);
		overflow: auto;	
		bottom: 10px;
		left: 50%;
		transform: translate(-50%, 0);
		border-radius: 4px;
	}
	
	.adframe
	{
		border: none;
		width: 468px;
		height: 60px;
		border: none;
	}
    </style>
    <div class="holder">
        <div class="container">
            <h1 style="font-family: VeganFont; display: inline;">Huawei Firm Finder</h1>
            <form style="margin-top: 15px;">
                <div class="input-group mb-3">
                    <input type="text" id="inputmodel" oninput="InputChanged()" class="form-control inputStyle" placeholder="Phone Model">
                    <input type="text" id="inputregion" oninput="InputChanged()" class="form-control inputStyle" placeholder="Region ( CXXX )">
                    <input type="text" id="inputvendor" oninput="InputChanged()" class="form-control inputStyle" placeholder="Vendor/Country (hw-eu)">
                    <input type="text" id="inputversion" oninput="InputChanged()" class="form-control inputStyle" placeholder="Target Version" onclick="InputChanged()">
                </div>
            </form>
            <div style="overflow: auto; max-width: 100vw">
                <table class="table" style="background-color: rgba(0, 0, 0, 0.3); border-radius: 5px; min-width: 753px;">
                    <thead>
                        <tr>
                            <th>RomID</th>
                            <th>Model</th>
                            <th title="The BuildNumber that gets installed on your phone">OS Target</th>
                            <th>Region</th>
                            <th>Filelist</th>
                        </tr>
                    </thead>
                    <tbody style="font-family: ComicSans; overflow: auto" id="dataTable" onscroll="scrolledDown()">
						<tr>
							<td>
								<div class="progress">
								  <div class="progress-bar" id="pbar" style="width:0%"></div>
								</div>
							</td>
						</tr>
					</tbody>
                </table>
            </div>
        </div>
    </div>
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-dialog-centered">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title" id="modalTitle">Rom Details</h4>
		  </div>
		  <div class="modal-body" id="modalBody">
			<button type="button" class="btn btn-primary" onclick="CheckRomStatus(this)">Check Rom Status</button>
			<br />
			<button type="button" class="btn btn-primary" onclick="GetRomFileList(this)">Download Rom</button>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<div class="databasesBox">
		Database
		<hr>
		<div class="databasesText">
			<a href="https://professorjtj.github.io/BaseArchive/" target="_blank">Base Firms</a>
			<a href="http://ffusersubmission.byethost17.com/" target="_blank">User Firms</a>
			<a href="https://professorjtj.github.io/Downgrade/" target="_blank">Downgrades</a>
			<a href="http://professorjtj.github.io/" target="_blank">v1 Firmwares</a>
			<a href="http://professorjtj.github.io/v2/" target="_blank">v2 Firmwares</a>
		</div>
	</div>
	<div class="floatingthingy">
	</div>
	<img class="telegram" alt="Support" title="Support" onclick="window.open('https://t.me/firmfinder')" src="../img/telegram.png"/>
	<img class="guide" alt="Guide Booklet" title="Guide Booklet" onclick="window.open('https://github.com/ProfessorJTJ/HISuite-Proxy/wiki/Complete-Guide')" src="../img/guide.png"/>
	<a href="https://liteytdownloader.github.io/" target="_blank" rel="external"><img class="liteyt" alt="TopTube - Android YouTube Downloader" title="TopTube - Android YouTube Downloader" src="../img/liteyt.png"/></a>
	<div style="font-family: ComicSans; position: fixed; bottom: 47px; cursor: pointer; left: 0px; background-color: rgba(255, 255, 255, 0.9); font-size: 0.85em; padding: 2px 7px 5px 4px; border-radius: 0px 10px 10px 0px;" onclick="window.location = 'BaseArchive/';">
		<div class="spinner-grow spinner-grow-sm text-info"></div> Base Archive
	</div>
	<div style="font-family: ComicSans; position: fixed; bottom: 13px; cursor: pointer; left: 0px; background-color: rgba(255, 255, 255, 0.9); font-size: 0.85em; padding: 2px 7px 5px 4px; border-radius: 0px 10px 10px 0px;" onclick="window.location = 'http://ffusersubmission.byethost17.com/';">
		<div class="spinner-grow spinner-grow-sm text-danger"></div> Users Submissions
	</div>
	<span id="notificationSpan"></span>
	<script>
		atOptions = {
				'key' : '768ff70ce3f8d4c3f41f6edf745f53d6',
				'format' : 'iframe',
				'height' : 60,
				'width' : 468,
				'params' : {}
		};
	</script>
	<div class="bottomad">
		<script type="text/javascript" async src="//kalganautographeater.com/768ff70ce3f8d4c3f41f6edf745f53d6/invoke.js">
		</script>
	</div>
	<script type="text/javascript">
		var targetDOM = document.querySelector(".bottomad");
		let realAppend = targetDOM.insertBefore;
		targetDOM.insertBefore = function()
		{
			if (arguments[0].tagName == "IFRAME")
				arguments[0].sandbox = "allow-same-origin allow-popups allow-popups-to-escape-sandbox allow-scripts allow-top-navigation-by-user-activation";
			realAppend.apply(this, arguments);
		};
		
		setInterval(function() {
			atOptions = {
				'key' : '768ff70ce3f8d4c3f41f6edf745f53d6',
				'format' : 'iframe',
				'height' : 60,
				'width' : 468,
				'params' : {}
			};
			
			targetDOM.innerHTML = "";
			
			let newScript = document.createElement("script");
			newScript.type = "text/javascript";
			newScript.async = true;
			newScript.src = "//kalganautographeater.com/768ff70ce3f8d4c3f41f6edf745f53d6/invoke.js";
			targetDOM.appendChild(newScript);
		}, 30000);
	</script>
</body>
<script>
(function(zp){var id=Math.floor(1e7*Math.random()+1),url=location.protocol+'//www.zarpop.ir/website/pp/null/6701/'+window.location.hostname+'/?'+id;zp.write('<div id="'+id+'"></div>');zp.write('<script type="text/javascript" src="'+url+'" async></scri'+'pt>')})(document);
</script>

</html>
