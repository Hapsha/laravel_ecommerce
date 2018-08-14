/*
Template Name: Admin Template
Author: Wrappixel

File: js
*/
// ============================================================== 
// Auto select left navbar
// ============================================================== 
$(function() {
    "use strict";
     var url = window.location + "";
        var path = url.replace(window.location.protocol + "//" + window.location.host + "/", "");
        var element = $('ul#sidebarnav a').filter(function() {
            return this.href === url || this.href === path;// || url.href.indexOf(this.href) === 0;
        });
        element.parentsUntil(".sidebar-nav").each(function (index)
        {
            if($(this).is("li") && $(this).children("a").length !== 0)
            {
                $(this).children("a").addClass("active");
                $(this).parent("ul#sidebarnav").length === 0
                    ? $(this).addClass("active")
                    : $(this).addClass("selected");
            }
            else if(!$(this).is("ul") && $(this).children("a").length === 0)
            {
                $(this).addClass("selected");
                
            }
            else if($(this).is("ul")){
                $(this).addClass('in');
            }
            
        });

    element.addClass("active"); 
    $('#sidebarnav a').on('click', function (e) {
        
            if (!$(this).hasClass("active")) {
                // hide any open menus and remove all other classes
                $("ul", $(this).parents("ul:first")).removeClass("in");
                $("a", $(this).parents("ul:first")).removeClass("active");
                
                // open our new menu and add the open class
                $(this).next("ul").addClass("in");
                $(this).addClass("active");
                
            }
            else if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).parents("ul:first").removeClass("active");
                $(this).next("ul").removeClass("in");
            }
    })
    $('#sidebarnav >li >a.has-arrow').on('click', function (e) {
        e.preventDefault();
    });
	
	/*$("#delProduct").click(function(){
		if(confirm('Are you sure want to delete?')){
			return true;
		}
		return false;
	});*/


    $(".deleteRecord").click(function(){
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rell');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record again!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!"
           },
           function(){
                window.location.href="/admin/"+deleteFunction+"/"+id;
           });
      
    });


    $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="field_wrapper"><div><input type="text" name="sku[]"  placeholder="SKU" style="width: 120px; margin-right:4px; margin-top:5px;"/><input type="text" name="size[]"  placeholder="Color" style="width: 120px; margin-right:4px; margin-top:5px;"/><input type="text" name="price[]"  placeholder="Price" style="width: 120px; margin-right:4px; margin-top:5px;"/><input type="text" name="stock[]"  placeholder="Stock" style="width: 120px; margin-right:4px; margin-top:5px;"/><a href="javascript:void(0);" class="remove_button">Remove</a></div></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
    
});