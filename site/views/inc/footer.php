<script type="text/javascript">
<!--
 function validaEnvia(elm){
 	btn = $(elm); 	
 	var status = false;
 	var input = new Array();
 	input[0] = $('input[name="name"]');
 	input[1] = $('input[name="email"]');
 	input[2] = $('textarea[name="comment"]');
 	//
 	$(input).each(function(){
 		if($(this).val() == ""){
 			alert('Verifique el campo '+ $(this).attr('id'));
 			status = false;
 			$(this).css('background', '#ffd0c2');
 			return false;
 		}else{
 			$(this).css('background', '#deffe5');
 			status = true;
 		}
 	});

 	if(status === true && btn.hasClass('deactive') === false){
 		org = btn.text();
 		btn.addClass('deactive');
 		btn.text('Enviando...');
 		$.ajax({
 			type : 'POST',
 			data : {'nombre' : $('input[name="name"]').val(), 'email' : $('input[name="email"]').val(), 'comentario' : $('textarea[name="comment"]').val() },
 			url : '<?=$site_url;?>main/contacto',
 			success: function(data){
			   var obj = jQuery.parseJSON(data);
	            if(obj.success === false){
	                alert('Hubo un error al intentar enviar su mensaje, intentelo mas adelante.');
	                btn.removeClass('deactive');
	            	btn.text(org);
	            }else{
		            alert('Mensaje ha sido enviado correctamente.');
		            $(input).each(function(){ $(this).val(""); $(this).css('background', '#fff'); });
		            $('#lightbox').css('display', 'none');
		            btn.removeClass('deactive');
		            btn.text(org);
	            }
			  }
 		});
 	}
 }
//-->	
</script>
<footer>
	<div class="web-content">
		<div style="float:right;width:59%">
			<div class="copyright" style="float:right;text-align:right; width:250px; margin:0;">
				<div style="height:25px"></div>
				<strong class="c-coffe">Todos los derechos reservados &copy; 2012 </strong><br/>
				<a href="http://zavgroup.com/" target="_blank" style="color:#BAA582;">Desarrollado por Zav Group</a>
			</div>
			<div class="f-left" style="height:25px; margin:25px 0 0 0;">
			<span class="copyright c-green font-17" style="width:250px; margin:0;">(+57 1) 7426852 </span>
			<span class="c-coffe font-13">Bogot&aacute; - COLOMBIA</span>
		</div>
		</div>
		
		<div style="float:left;border-right:1px solid #baa582; width:20%; margin:20px 0 0 10px">
			<a href="http://www.facebook.com/comunidadeco" target="_blank"><img src="<?=$template;?>images/fb.png" alt="facebook" /></a>
			<?php /* <a href="#!"><img src="<?=$template;?>images/yt.png" alt="you tube" /></a> */ ?>
			<a href="https://twitter.com/#!/andi_colombia" target="_blank"><img src="<?=$template;?>images/tw.png" alt="twitter" /></a>
		</div>
	</div>
</footer>

<div id="lightbox" class="box_bg">
    <div class="box_cont">
		<div class="box-header">
			<div class="f-left bold" style="margin: 3px 0 0 0">Cont&aacute;ctenos</div>
			<div class="f-right">
				<a href="#!" class="form-boton" onclick="$('#lightbox').toggle();">X</a>
			</div>
		</div>
	    <div class="box-content">
			<div class="form-content">
				<div class="form-text">Nombre:</div>
				<input name="name" id="Nombre" class="input" type="text"/>
			</div>
			<div class="form-content">
				<div class="form-text">E-mail:</div>
				<input name="email" id="E-mail" class="input" type="text"/>
			</div>
			<div class="form-content">
				<div class="form-text">Comentario:</div>
				<textarea name="comment" id="Comentario" class="input" type="text" style="height:80px; resize: none;"></textarea>
			</div>
			<div class="form-content">
				<div class="f-left" style="margin:8px 0;">
					<!--
					<span class="c-orange font-17">&nbsp;</span><br/>
					<span class="c-coffe font-13">&nbsp;</span><br/>
					-->
					<div class="c-green" style="font-size:17px; font-weight:400; margin-bottom:8px;">info-digital@pilascolombia.com</div>
					<div class="c-coffe font-13">Tel&eacute;fono</div>
					<div class="c-green font-17">(+57 1) 7426852</div>
					<div class="c-coffe font-13">Bogot&aacute; - COLOMBIA</div>	
				</div>			
				<a href="#!" onclick="validaEnvia(this);" class="form-boton f-right">Enviar Mensaje</a>
			</div>
	    </div>
    </div>
</div>