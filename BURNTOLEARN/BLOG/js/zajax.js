/* START RATING SYSTEM */ 

$('span#starone').on('click', function(){
	
	var rate = 1;
	var el_id = $('input#element_id').val();
	
	//alert(rate);
	

	
	  $.post('DataUP/rateme.php', {rate:rate, el_id:el_id}, function(data)		{
	
		$('div#ratearea').html(data);
	
	  })	
	
	

});

$('span#startwo').on('click', function(){
	
	var rate = 2;
	var el_id = $('input#element_id').val();
	
	//alert(rate);
	

	
	  $.post('DataUP/rateme.php', {rate:rate, el_id:el_id}, function(data)		{
	
		$('div#ratearea').html(data);
	
	  })	
	
	

});

$('span#starthree').on('click', function(){
	
	var rate = 3;
	var el_id = $('input#element_id').val();
	
	//alert(rate);
	

	
	  $.post('DataUP/rateme.php', {rate:rate, el_id:el_id}, function(data)		{
	
		$('div#ratearea').html(data);
	
	  })	
	
	

});

$('span#starfour').on('click', function(){
	
	var rate = 4;
	var el_id = $('input#element_id').val();
	
	//alert(rate);
	

	
	  $.post('DataUP/rateme.php', {rate:rate, el_id:el_id}, function(data)		{
	
		$('div#ratearea').html(data);
	
	  })	
	
	

});

$('span#starfive').on('click', function(){
	
	var rate = 5;
	var el_id = $('input#element_id').val();
	
	//alert(rate);
	

	
	  $.post('DataUP/rateme.php', {rate:rate, el_id:el_id}, function(data)		{
	
		$('div#ratearea').html(data);
	
	  })	
	
	

});


// LIBRARY OF METHODS HERE BELOW

/*

$('input#ch_B_nm').on('click', function(){
	
	 var Bl_nm = $('input#new_B_nm').val();
	 var Bl_Row = $('input#row_num').val();
	 
	 if($.trim(Bl_nm) != ''){
	 
		 $.post('ajax/AjAx.php', {BLANKET_NM : Bl_nm, BLANKET_ID : Bl_Row}, function(data){
		 
		 $('span#EditingBlanket').html(data);
		 	 
		 });		 
	 	 
	 }

});

// Blanket Description

$('input#newDescr').on('click', function(){
	
	var Bl_des = $('textarea#AboutBlanket').val();
	var Bl_Row = $('input#MainIdDescr').val();
	
	
	if($.trim(Bl_des) != ''){
		
		
		
		$.post('ajax/AjAx.php', {BLANKET_DESCR : Bl_des, BLANKET_ID : Bl_Row}, function(data){
		
		$('textarea#AboutBlanket').html(data);
		
		});
	
	}
	
});

// ColorChoice

$('span#chBlkt_color').on('click', function(){
	
	
	var blkt_color_nm = $('select#sel_blk_color option:selected' ).text();
	
	var blkt_color = $('select#sel_blk_color option:selected' ).val();

	
	if($.trim(blkt_color) != ''){
	
		$.post('ajax/AjAx.php', {COLOR_ID : blkt_color, COLOR_NM : blkt_color_nm }, function(data){
		
		$('div#NotifyChange').html(data);
			
		});
	
	}
	
	
});

//FabricChoice

$('span#FabricChoice').on('click', function(){

	var fabChz = $('select#fabric_choiceid option:selected').val();
	
	if($.trim(fabChz) != ''){	
		
		$.post('ajax/AjAx.php',{FAB_CHZ : fabChz}, function(data){
		
		$('div#NotifyChange').html(data);	
			
		});
		
	
	}
		
});


//PrintChz

$('span#PrintChz').on('click', function(){
	
	var prntchng = $('select#PrintChz_sel option:selected').val();
	
	if($.trim(prntchng) != ''){
	
		$.post('ajax/AjAx.php',{PRINTY : prntchng}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#NotifyChange').html(data);
			
		});
	
	}
	
});


//Type

$('span#bl_type').on('click', function(){
	
	var typechng = $('select#blanky_type option:selected').val();
	
	if($.trim(typechng) != ''){
	
		$.post('ajax/AjAx.php',{BlanketType : typechng}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#NotifyChange').html(data);
			
		});
		
		//alert(typechng);
	
	}
	
});

// add_aClr

$('input#adClrBtn').on('click', function(){
	
	var addClr = $('input#add_aClr').val();
	
	if($.trim(addClr) != ''){
	
		$.post('ajax/AjAx.php',{AddAcOlor : addClr}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#NotifyColorAdd').html(data);
			
		});
		
		//alert(typechng);
	
	}
	
	
	
});

// Add a Fabric

$('input#AddFabricBtn').on('click', function(){
	
	var addFabby = $('input#fabricN').val();
	
	if($.trim(addFabby) != ''){
	
		$.post('ajax/AjAx.php',{AddAFab : addFabby}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#NotifyFabricAdd').html(data);
			
		});
		
		//alert(typechng);
	
	}
	
});


// Add a Print

$('input#AddPrint').on('click', function(){
	
	var addPrint = $('input#PrintN').val();
	
	if($.trim(addPrint) != ''){
	
		$.post('ajax/AjAx.php',{NewPrintAdd : addPrint}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#NotifyPrintAdd').html(data);
			
		});
		
		//alert(typechng);
	
	}
	
});

// Add a Type

$('input#AddAType').on('click', function(){
	
	var addANewType = $('input#TypeN').val();
	
	if($.trim(addANewType) != ''){
	
		$.post('ajax/AjAx.php',{NewTypeAdd : addANewType}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#NotifyTypeAdd').html(data);
			
		});
		
		//alert(typechng);
	
	}
	
});

	
// Add Tags

$('input#AddATag').on('click', function(){
	
	var addNewTags = $('input#Taggys').val();
	
	if($.trim(addNewTags) != ''){
	
		$.post('ajax/AjAx.php',{NewTaggys : addNewTags}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#tags2show').html(data);
			
		});
		
		//alert(typechng);
	
	}
	
});

// Set Pricing Structure

$('span#SET_price').on('click', function(){
	
	var set_thePRC = $('select#setblk_pricing option:selected').val();
	
	if($.trim(set_thePRC) != ''){
	
		$.post('ajax/AjAx.php',{setTHEPRC : set_thePRC}, function(data){
		
		// CHANGES TO BE RECIEVED & PLACED IN #ID
		$('div#SHW_prcST').html(data);
			
		});
		
		//alert(typechng);
	
	}
	
});

	
*/



















