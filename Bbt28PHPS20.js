//Main Form Setup


function show_form()
    {
    var current_index = document.getElementById("selections").selectedIndex;
    if(current_index==1)
        {
        $("#greeting_form").css({"visibility":"visible", "position":"absolute", "z-index":"1"});
        $("#factorial_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#reverse_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#squares_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"}); 
        }
     else if(current_index==2)
        {
          $("#greeting_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#factorial_form").css({"visibility":"visible", "position":"absolute", "z-index":"1"});
        $("#reverse_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#squares_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});   
        }
     else if(current_index==3)
         {
        $("#greeting_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#factorial_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#reverse_form").css({"visibility":"visible", "position":"absolute", "z-index":"1"});
        $("#squares_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"}); 
         }
        else if(current_index==4)
        {
         $("#greeting_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#factorial_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#reverse_form").css({"visibility":"hidden", "position":"absolute", "z-index":"-1"});
        $("#squares_form").css({"visibility":"visible", "position":"absolute", "z-index":"1"});
        }
    }


