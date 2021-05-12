/*
* This is the plugin
*/
(function(a){a.createModalVid=function(b){defaults={title:"",message:"",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style=""':"";html='<div class="modal fade text-center"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';html+='<div class="modal-dialog modal-mg" role="document" style="max-width: 70%;margin:auto;top:15%;">';html+='<div class="modal-content" style="background-color: transparent; border: none; width:100%;">';html+='<div class="modal-body">';html+='<button type="button" class="close" data-dismiss="modal" aria-label="Close"><p style="color: white;top: 0;right: 0;position: absolute;">×</p></button>';html+='<p style="background-color: rgba(255, , 255, 0.7);">';html+=b.message;html+='</p>';html+='</div>';html+='</div>';html+='</div>';html+='</div>';a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

/*
* Here is how you use it for pdf
*/
$(function(){
    $('.view-image').on('click',function(){
        var pdf_link = $(this).attr('href');
        //var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        //var iframe = '<object data="'+pdf_link+'" type="application/pdf"><embed src="'+pdf_link+'" type="application/pdf" /></object>'
        var iframe = '<img class="imgPinBoot" style="width: 100%" src="'+pdf_link+'"></img>'
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
