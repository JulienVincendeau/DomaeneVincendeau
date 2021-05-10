/*
* This is the plugin
*/
(function(a){a.createModalVid=function(b){defaults={title:"",message:"",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style=""':"";html='<div class="modal fade" id="myModal" style="background-color: transparent !important;">';html+='<div class="modal-dialog" style="background-color: transparent !important;">';html+='<div class="modal-content" style="background-color: transparent !important; border: none;" >';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: white;">×</button>';html+='<div class="modal-body" style="" '+c+">";html+=b.message;html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

/*
* Here is how you use it for pdf
*/
$(function(){
    $('.view-image').on('click',function(){
        var pdf_link = $(this).attr('href');
        //var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        //var iframe = '<object data="'+pdf_link+'" type="application/pdf"><embed src="'+pdf_link+'" type="application/pdf" /></object>'
        var iframe = '<img class="img-responsive" width="100%" src="'+pdf_link+'" style="height: 30em; border-radius: 0px; " ></img>'
        $.createModalVid({
            message: iframe,
            closeButton:false,
            scrollable:false
        });
        setTimeout(function(){
          $('#myModal').modal('hide');
        }, 9000);
        return false;
    });
})
