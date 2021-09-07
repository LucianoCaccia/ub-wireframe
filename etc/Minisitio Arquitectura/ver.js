//------------------------------------------------------------------------------

function abrirVer(nImagen)
{
	window.open("ver.htm?" + nImagen, "_blank", "toolbar=no,scrollbars=no,status=no,menubar=no,location=no,height=100,width=100");
}

//------------------------------------------------------------------------------

function initVer()
{
	var src = location.search.substring(1);
	document.img.src=src;
}

//------------------------------------------------------------------------------

function resizeVer()
{
	var oImg = document.img;

	window.resizeTo(oImg.width + 10, oImg.height + 29);
}

//------------------------------------------------------------------------------
