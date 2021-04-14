    $(document).ready(function(){
    $('.jordans').each(function(i){
        $(this).hover(function(){
        $('.hideMe').eq(i).toggle();
        $('.btn').eq(i).toggle();
        });
    });
        
    $('#login').click(function(){
        $('#formy').show();
        $('#fDiv').css('z-index','2');
        $('#fDiv').css('background-color','lightgray');
    })
        
        $('#notMember u').click(function(){
        $('#formy').hide();
        $('#formy2').show();
        $('#fDiv').css('z-index','2');
        $('#fDiv').css('background-color','lightgray');
    })
        
        
    $('.x').click(function(){
        $('#formy').hide();
        $('#formy2').hide();
        $('#fDiv').css('background-color','white');
        $('#fDiv').css('z-index','-1');
    })
        
    $("#male").click(function(){
        $("#gender").val("MALE");
        var maleGen= $("#gender").val();
       ;   
  });
         $("#female").click(function(){
        $("#gender").val("FEMALE");
            var femaleGen= $("#gender").val();     
          
  });
        
        var shoeValBeta="";
        var shoeValAlpha="";
        var noSpaces="";
         $("#8").click(function(){
             for(i=8;i<12;i++){
             $('#'+i).css('background-color','white');
             $('#'+i).css('color','black');
             }
             $(this).css('background-color','black');
             $(this).css('color','white');
             
            $('#hiddenSize').val($('#8').val());
             shoeValBeta=$('#hiddenSize').val();
             noSpaces=$('h2').html();
             noSpaces = noSpaces.replace(/\s/g, '');
             shoeValAlpha = shoeValBeta+noSpaces;
             $('#hiddenSize').val(shoeValAlpha);
             
         });
        
         $("#9").click(function(){
             for(i=8;i<12;i++){
             $('#'+i).css('background-color','white');
             $('#'+i).css('color','black');
             }
            $(this).css('background-color','black');
             $(this).css('color','white');
             $('#hiddenSize').val($('#9').val());
             shoeValBeta=$('#hiddenSize').val();
             noSpaces=$('h2').html();
             noSpaces = noSpaces.replace(/\s/g, '');
             shoeValAlpha = shoeValBeta+noSpaces;
             $('#hiddenSize').val(shoeValAlpha);
             
         });
        $("#10").click(function(){
            for(i=8;i<12;i++){
             $('#'+i).css('background-color','white');
             $('#'+i).css('color','black');
             }
            $(this).css('background-color','black');
             $(this).css('color','white');
            $('#hiddenSize').val($('#10').val());
             shoeValBeta=$('#hiddenSize').val();
             noSpaces=$('h2').html();
             noSpaces = noSpaces.replace(/\s/g, '');
             shoeValAlpha = shoeValBeta+noSpaces;
             $('#hiddenSize').val(shoeValAlpha);
         });
        
        
        $("#11").click(function(){
            for(i=8;i<12;i++){
             $('#'+i).css('background-color','white');
             $('#'+i).css('color','black');
             }
            $(this).css('background-color','black');
             $(this).css('color','white');
             $('#hiddenSize').val($('#11').val());
           shoeValBeta=$('#hiddenSize').val();
             noSpaces=$('h2').html();
             noSpaces = noSpaces.replace(/\s/g, '');
             shoeValAlpha = shoeValBeta+noSpaces;
             $('#hiddenSize').val(shoeValAlpha);
         });
        
        $("#male").click(function(){
            $('#female').css('border','1px solid lightgray');
            $(this).css('border','2px solid black');
            $('#genderJoin').val($('#male').val());
   
        });
        
         $("#female").click(function(){
            $('#male').css('border','1px solid lightgray');
            $(this).css('border','2px solid black');
            $('#genderJoin').val($('#female').val());
             
        });
        
        $("#img1").click(function() { 
            $('#exitImg').show();
            $('#description').hide();
            for(i=1;i<5;i++){
                if(i!=1){
                    $('#img'+i).hide();   
            }
            }
            $(".sizy").css({'width':'100%','height':'900px'});
            $(this).css({'z-index':'100',"position": "absolute", "left": "0px","top":'-140px',"border": "none"});   
        });
        
        $("#img2").click(function() { 
            $('#exitImg').show();
            $('#description').hide();
            for(i=1;i<5;i++){
                if(i!=2){
                    $('#img'+i).hide();   
            }
            }
            $(".sizy").css({'width':'100%','height':'900px'});
            $(this).css({'z-index':'100',"position": "absolute", "left": "0px","top":'-140px',"border": "none"});   
        });
        $("#img3").click(function() { 
            $('#exitImg').show();
            $('#description').hide();
            for(i=1;i<5;i++){
                if(i!=3){
                    $('#img'+i).hide();   
            }
            }
            $(".sizy").css({'width':'100%','height':'900px'});
            $(this).css({'z-index':'100',"position": "absolute", "left": "0px","top":'-140px',"border": "none"});   
        });
        
        $("#img4").click(function() { 
            $('#exitImg').show();
            $('#description').hide();
            for(i=1;i<5;i++){
                if(i!=4){
                    $('#img'+i).hide();   
            }
            }
            $(".sizy").css({'width':'100%','height':'900px'});
            $(this).css({'z-index':'100',"position": "absolute", "left": "0px","top":'-140px',"border": "none"});   
        });
        
        
        $('#exitImg').click(function(){
            $('#description').show();
            $(this).hide();
            for(i=1;i<5;i++){
                    $('#img'+i).show();   
        }
        $(".sizy").css({'width':'400px','height':'400px'});
        $('#img2').css({'z-index':'1',"position": "static","border":"1px solid lightgray"}); 
            $('#img3').css({'z-index':'1',"position": "static","border":"1px solid lightgray"}); 
            $('#img4').css({'z-index':'1',"position": "static","border":"1px solid lightgray"}); 
            $('#img1').css({'z-index':'1',"position": "static","border":"1px solid lightgray"}); 
        });
        
        
   
});
    