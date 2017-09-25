<html>
<head>
	<title>News</title>
	
	<link rel="stylesheet" href="css/bootstrap.css" />
	<style>
		img{
			width: 100px;
			height: 100px;
		}
	</style>
	<script type="text/javascript" src="try.json"></script>
	<script>
		function load() {
			var mydata = JSON.parse(data);
			var i;
			var element=document.getElementById("body");
			var jumbo= document.createElement("div");
			jumbo.setAttribute('class',"jumbotron");
			var h1=document.createElement("h1");
			h1.setAttribute('style',"margin-left: 20px;");
			var text=document.createTextNode("News of the Hour");
			h1.appendChild(text);
			jumbo.appendChild(h1);
			element.appendChild(jumbo);
			for (i=0; i<20; i++)
			{
				var src=String(i)+".jpg";
				var element=document.getElementById("body");
				var media = document.createElement("div");
				media.setAttribute('class',"media");
				var link= document.createElement("a");
				
				link.setAttribute('class',"media-left");
				link.setAttribute('href',mydata[i].href);
				var img=document.createElement("img");
				img.setAttribute('class',"media-object");
				img.setAttribute('src',src);
				img.setAttribute('display',"inline");
				link.appendChild(img);
				media.appendChild(link);
				var body=document.createElement("div");
				body.setAttribute('class',"media-body");
				var a=document.createElement("a");
				a.setAttribute('href',mydata[i].href);
				var heading=document.createElement("h4");
				heading.setAttribute('class',"media-heading");
				var heading_text=document.createTextNode(mydata[i].title);
				heading.appendChild(heading_text);
				a.appendChild(heading);
				var para=document.createTextNode(mydata[i].p);
				body.appendChild(a);
				body.appendChild(para);
				media.appendChild(body);
				
				element.appendChild(media);
			}
		}
	</script>
</head>
<body onload="load()" id="body">
<div class="jumbotron" style="position: absolute; left: 0; top: 0; width: 100%; background-color: #1a1a1a; color: white;">
	<h1 style="margin-left: 20px;">News of the Hour</h1>
</div>
</body>
</html>