<style>
*:after,*:before{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
#contenedor_carga{
	background-color:rgba(250,240,245,0.9);
	height: 100%;
	width: 100%;
	position: fixed;
	-webkit-transition:all 2s ease ;
	-o-transition:all 2s ease ;
	transition: all 2s ease;  
	z-index: 100000;
}
#carga{
	border: 15px solid #ccc;
	border-top-color:rgb(27,210,250,.7);
	border-top-style: groove;
	height: 100px;
	width: 100px;
	border-radius: 100%;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	-webkit-animation: girar 1.5s linear infinite;
	-o-animation: girar 1.5s linear infinite;
	animation: girar 1.5s linear infinite;
}
@keyframes girar{
	from{transform: rotate(0deg); }
	to{transform: rotate(360deg); }
}
</style>

<div id="contenedor_carga">
	<div id="carga"></div>
</div>
