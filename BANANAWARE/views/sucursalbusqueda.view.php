<!DOCTYPE html>
<html>
<head>
	<title>HTML to API - Invoice</title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="content-type" content="text-html; charset=utf-8">
	<style type="text/css">
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font: inherit;
			font-size: 100%;
			vertical-align: baseline;
		}

		html {
			line-height: 1;
		}

		ol, ul {
			list-style: none;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		caption, th, td {
			text-align: left;
			font-weight: normal;
			vertical-align: middle;
		}

		q, blockquote {
			quotes: none;
		}
		q:before, q:after, blockquote:before, blockquote:after {
			content: "";
			content: none;
		}

		a img {
			border: none;
		}

		article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
			display: block;
		}

		body {
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: 300;
			font-size: 12px;
			margin: 0;
			padding: 0;
			color: #777777;
		}
		

		body a {
			text-decoration: none;
			color: inherit;
		}
		body a:hover {
			color: inherit;
			opacity: 0.7;
		}
		body .container {
			min-width: 500px;
			margin: 0 auto;
			padding: 0 30px;
		}
		body .clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		body .left {
			float: left;
		}
		body .right {
			float: right;
		}
		body .helper {
			height: 100%;
		}
		.button {
			background-color: #9e922a; /* Amarillo */
			border: none;
			color: white;
			padding: 8px 17px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			margin: 4px 2px;
			cursor: pointer;
			}

		.button1 {font-size: 10px;}
		.button2 {font-size: 12px;}

		section .details {
			min-width: 500px;
			margin-bottom: 40px;
			padding: 10px 35px;
			background-color: #F7DC6F;
			color: #2f2f2f;
		}
		section .details .client {
			width: 50%;
			line-height: 16px;
		}
		section .details .client .name {
			font-weight: 600;
		}
		section .details .data {
			width: 50%;
			text-align: right;
		}
		section .details .title {
			margin-bottom: 15px;
			font-size: 3em;
			font-weight: 400;
			text-transform: uppercase;
		}
		section .table-wrapper {
			position: relative;
			overflow: hidden;
		}
		section .table-wrapper:before {
			content: "";
			display: block;
			position: absolute;
			top: 33px;
			left: 30px;
			width: 90%;
			height: 100%;
			border-top: 2px solid #4b4a4a;
			border-left: 2px solid #5d5c5c;
			z-index: -1;
		}
		section .no-break {
			page-break-inside: avoid;
		}
		section table {
			width: 100%;
			margin-bottom: -20px;
			table-layout: fixed;
			border-collapse: separate;
			border-spacing: 5px 20px;
		}
		section table .no {
			width: 50px;
		}
		section table .desc {
			width: 55%;
		}
		section table .qty, section table .unit, section table .total {
			width: 15%;
		}
		section table tbody.head {
			vertical-align: middle;
			border-color: inherit;
		}
		section table tbody.head th {
			text-align: center;
			color: rgb(47, 47, 21);
			font-weight: 600;
			text-transform: uppercase;
		}
		section table tbody.head th div {
			display: inline-block;
			padding: 7px 0;
			width: 100%;
			background: #c8a33c;
		}
		section table tbody.head th.desc div {
			width: 115px;
			margin-left: -110px;
		}
		section table tbody.body td {
			padding: 10px 5px;
			background: #f0e9c9;
			text-align: center;
		}
		section table tbody.body h3 {
			margin-bottom: 5px;
			color: #2A8EAC;
			font-weight: 600;
		}
		section table tbody.body .no {
			padding: 0px;
			background-color: #F7DC6F;
			color: #ffffff;
			font-size: 1.66666666666667em;
			font-weight: 600;
			line-height: 50px;
		}
		section table tbody.body .desc {
			padding-top: 0;
			padding-bottom: 0;
			background-color: transparent;
			color: #777787;
			text-align: left;
		}
		section table tbody.body .total {
			color: #4d4218;
			font-weight: 600;
		}
		section table tbody.body tr.total td {
			padding: 5px 10px;
			background-color: transparent;
			border: none;
			color: #777777;
			text-align: right;
		}
		section table tbody.body tr.total .empty {
			background: rgb(0, 0, 0);
		}
		section table tbody.body tr.total .total {
			font-size: 1.18181818181818em;
			font-weight: 600;
			color: #3b3725;
		}
		section table.grand-total {
			margin-top: 40px;
			margin-bottom: 0;
			border-collapse: collapse;
			border-spacing: 0px 0px;
			margin-bottom: 40px;
		}
		section table.grand-total tbody td {
			padding: 0 10px 10px;
			background-color: #F7DC6F;
			color: #3f3a25;
			font-weight: 400;
			text-align: right;
		}
		section table.grand-total tbody td.no, section table.grand-total tbody td.desc, section table.grand-total tbody td.qty {
			background-color: transparent;
		}
		section table.grand-total tbody td.total, section table.grand-total tbody td.grand-total {
			border-right: 5px solid #ffffff;
		}
		section table.grand-total tbody td.grand-total {
			padding: 0;
			font-size: 1.16666666666667em;
			font-weight: 600;
			background-color: transparent;
		}
		section table.grand-total tbody td.grand-total div {
			float: right;
			padding: 10px 5px;
			background-color: #fada58;
		}
		section table.grand-total tbody td.grand-total div span {
			margin-right: 5px;
		}
		section table.grand-total tbody tr:first-child td {
			padding-top: 10px;
		}

		footer {
			margin-bottom: 20px;
			padding: 0 5px;
		}
		footer .thanks {
			margin-bottom: 40px;
			color: #2A8EAC;
			font-size: 1.16666666666667em;
			font-weight: 600;
		}
		footer .notice {
			margin-bottom: 25px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #F7DC6F;
			text-align: center;
		}

	</style>
</head>

<body>
	<section>


		<div class="details clearfix">
			<div class="data right">
				<div class="title">Despliegue de Información sobre: Búsqueda Surcursal</div>
				<div class="date">
					Día de Consulta: 01/10/2021<br>
					Código Postal:<br>
						
				</div>
			</div>			
		</div>

		<div class="details clearfix">
						
			<div class="client left">
				<p class="name">Detalles</p>
				<p>Estado de la República:</p>
				<p>Municipio/Delegación:</p>
			</div>
			
		</div>
		
	<div class="container">
		<div class="table-wrapper">
			<table>
				<tbody class="head">
					<th class="desc"><div>Informacion de la sucursal</div></th>
				</tbody>>
				
				<p align="center">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7526.896183447873!2d-99.014436!3d19.393036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2f8b7a68b3b42c0e!2sODM%20Express%20Mensajeria%20Y%20Paqueteria!5e0!3m2!1ses!2smx!4v1636042473846!5m2!1ses!2smx" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
			</p> 
			</table>

			<div class="details clearfix">
						
				<div class="client left">
					<p>Tipo de entrega: Diaria</p>
					<p class="name">Días de entrega disponibles</p>
					<label class="name"> Estado de la Republica</label><br>
					<label  class="name"> Municipio/Delegacion</label><br>
					<label class="name"> Colonia</label><br>
					<label class="name"> Calle</label><br>
					<label class="name"> Código Postal</label><br>
					<label class="name"> Telefono</label><br>
				</div>			
			</div>
					
		</div>	
	</div>	
		


	</section>

	<footer>
		<div class="container">
			<div class="thanks">Gracias por la consulta!</div>
			<div class="notice">
				<div>Nota:</div>
				<div>Página solo de consulta.</div>
			</div>
			<div class="end">Esta consulta solo describe los elementos obtenidos por el código postal.</div>
		</div>
	</footer>

</body>

</html>
