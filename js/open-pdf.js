/*
* This is the plugin
*/
(function(a){a.createModal=function(b){defaults={title:"",message:"Echo",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style=""':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog" style="width: 90%;; max-width: none">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);


/*
* Here is how you use it for pdf
*/
$(function(){
    $('.view-pdf').on('click',function(){
        var pdf_link = $(this).attr('href');
        //var iframe = '<div class="iframe-container"  width="100%" height="800" allowfullscreen><iframe src="'+pdf_link+'"></iframe></div>'
        //var iframe = '<object data="'+pdf_link+'" type="application/pdf" width="100%" height="800" allowfullscreen><embed src="'+pdf_link+'" type="application/pdf" /></object>'
        var iframe = '<object type="application/pdf" data="'+pdf_link+'" width="100%" height="800" allowfullscreen>Nous rencontrons des difficultés pour ouvrir ce PDF</object>'
        $.createModal({
            message: iframe,
            closeButton:false,
            scrollable:false,
            title: '<a href="'+pdf_link+'" download>Télécharger le document</a>'
        });
        return false;
    });
})

$(function(){
    $('.view-site').on('click',function(){
        var pdf_link = $(this).attr('href');
        //var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        //var iframe = '<object data="'+pdf_link+'" type="text/html"  width="100%" height="800" allowfullscreen><embed src="'+pdf_link+'" type="text/html" /></object>'
        var iframe = '<object type="text/html" data="'+pdf_link+'" width="100%" height="800" allowfullscreen>Nous rencontrons des difficultés pour ouvrir ce site Web</object>'
        $.createModal({
            message: iframe,
            closeButton:false,
            scrollable:false,
            title: '<a href="'+pdf_link+'" target="_blank">Voir sur le site</a>'
        });
        return false;
    });
})
